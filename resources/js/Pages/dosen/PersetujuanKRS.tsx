import { Head, router } from '@inertiajs/react';
import { Card, CardContent, CardHeader, CardTitle, CardDescription } from '@/components/ui/card';
import { Button } from '@/components/ui/button';
import { Badge } from '@/components/ui/badge';
import { Dialog, DialogContent, DialogDescription, DialogFooter, DialogHeader, DialogTitle } from '@/components/ui/dialog';
import { Table, TableBody, TableCell, TableHead, TableHeader, TableRow } from '@/components/ui/table';
import { Tabs, TabsContent, TabsList, TabsTrigger } from '@/components/ui/tabs';
import { CheckCircle2, XCircle, Eye, Clock, Save } from 'lucide-react';
import { PageProps, Krs } from '@/types';
import { useState, useEffect, useMemo } from 'react';
import { toast } from 'sonner';
import { route } from 'ziggy-js';

interface PersetujuanKrsProps extends PageProps {
  allKrs: Krs[];
  stats: {
    pending: number;
    approved: number;
    rejected: number;
  };
}

export default function DosenPersetujuanKRS({ allKrs, stats, flash }: PersetujuanKrsProps) {
  const [selectedKRS, setSelectedKRS] = useState<Krs | null>(null);
  const [catatan, setCatatan] = useState('');
  const [approving, setApproving] = useState(false);
  const [rejecting, setRejecting] = useState(false);
  const [gradeEdits, setGradeEdits] = useState<Record<string, string>>({});
  const [savingIds, setSavingIds] = useState<Set<string>>(new Set());

  useEffect(() => {
    if (flash?.message) {
      toast.success(flash.message);
    }
  }, [flash]);

  const pendingKRS = useMemo(() => allKrs.filter(k => k.status_persetujuan === 0), [allKrs]);
  const approvedKRS = useMemo(() => allKrs.filter(k => k.status_persetujuan === 1), [allKrs]);
  const rejectedKRS = useMemo(() => allKrs.filter(k => k.status_persetujuan === 2), [allKrs]);

  const resetDialog = () => {
    setSelectedKRS(null);
    setCatatan('');
    setApproving(false);
    setRejecting(false);
    setGradeEdits({});
    setSavingIds(new Set());
  };

  useEffect(() => {
    if (selectedKRS?.detail_krs) {
      const initial: Record<string, string> = {};
      selectedKRS.detail_krs.forEach(d => {
        if (d.nilai_huruf) initial[String(d.id_detail_krs)] = d.nilai_huruf;
      });
      setGradeEdits(initial);
    }
  }, [selectedKRS]);

  const handleLocalGradeChange = (id: string, value: string) => {
    setGradeEdits(prev => ({ ...prev, [id]: value }));
  };

  const handleSaveGrade = (detailId: string) => {
    const nilai_huruf = gradeEdits[detailId];
    if (!nilai_huruf) {
      toast.error('Please select a grade first.');
      return;
    }
    setSavingIds(prev => new Set(prev).add(detailId));
    router.patch(route('dosen.persetujuan.updateNilai', detailId), { nilai_huruf }, {
      preserveScroll: true,
      onSuccess: () => {
        toast.success('Grade saved');
        setSelectedKRS(prev => {
          if (!prev) return prev;
          return {
            ...prev,
            detail_krs: prev.detail_krs?.map(d => String(d.id_detail_krs) === detailId ? { ...d, nilai_huruf } : d) || []
          };
        });
      },
      onError: () => toast.error('Failed to save grade'),
      onFinish: () => setSavingIds(prev => {
        const next = new Set(prev);
        next.delete(detailId);
        return next;
      })
    });
  };

  const handleApprove = () => {
    if (!selectedKRS || approving) return;
    setApproving(true);
    router.patch(route('dosen.persetujuan.approve', selectedKRS.id_krs), {}, {
      preserveScroll: true,
      onSuccess: () => {
        toast.success('KRS approved.');
        resetDialog();
      },
      onError: (_errors) => {
        toast.error('Failed to approve KRS');
      },
      onFinish: () => setApproving(false),
    });
  };

  const handleReject = () => {
    if (!selectedKRS || rejecting) return;
    if (!catatan.trim()) {
      toast.error('Rejection notes are required.');
      return;
    }
    setRejecting(true);
    router.patch(route('dosen.persetujuan.reject', selectedKRS.id_krs), { catatan }, {
      preserveScroll: true,
      onSuccess: () => {
        toast.success('KRS rejected.');
        resetDialog();
      },
      onError: (errors: any) => {
        toast.error(errors?.catatan || 'Failed to reject KRS');
      },
      onFinish: () => setRejecting(false),
    });
  };

  const getStatusBadge = (status: number) => {
    if (status === 0) {
      return (
        <Badge variant="outline" className="bg-yellow-50 text-yellow-700 border-yellow-200">
          <Clock className="w-3 h-3 mr-1" /> Pending
        </Badge>
      );
    } else if (status === 1) {
      return (
        <Badge variant="outline" className="bg-green-50 text-green-700 border-green-200">
          <CheckCircle2 className="w-3 h-3 mr-1" /> Approved
        </Badge>
      );
    } else {
      return (
        <Badge variant="outline" className="bg-red-50 text-red-700 border-red-200">
          <XCircle className="w-3 h-3 mr-1" /> Rejected
        </Badge>
      );
    }
  };

  const KRSTable = ({ data }: { data: Krs[] }) => (
    <div className="rounded-md border">
      <Table>
        <TableHeader>
          <TableRow>
            <TableHead>Student</TableHead>
            <TableHead>NRP</TableHead>
            <TableHead>Semester</TableHead>
            <TableHead>Total Credits</TableHead>
            <TableHead>Courses</TableHead>
            <TableHead>Submission Date</TableHead>
            <TableHead>Status</TableHead>
            <TableHead>Actions</TableHead>
          </TableRow>
        </TableHeader>
        <TableBody>
          {data.length === 0 ? (
            <TableRow>
              <TableCell colSpan={8} className="text-center text-muted-foreground py-8">No data</TableCell>
            </TableRow>
          ) : (
            data.map((krs) => (
              <TableRow key={krs.id_krs}>
                <TableCell>{krs.mahasiswa?.nama}</TableCell>
                <TableCell>{krs.mahasiswa?.nrp}</TableCell>
                <TableCell>{krs.mahasiswa?.semester}</TableCell>
                <TableCell>{krs.total_sks}</TableCell>
                <TableCell>{krs.detail_krs?.length}</TableCell>
                <TableCell>
                  {new Date(krs.tanggal_pengajuan).toLocaleDateString('en-US', { day: 'numeric', month: 'short', year: 'numeric' })}
                </TableCell>
                <TableCell>{getStatusBadge(krs.status_persetujuan)}</TableCell>
                <TableCell>
                  <Button size="sm" variant="outline" onClick={() => setSelectedKRS(krs)}>
                    <Eye className="h-4 w-4 mr-1" /> Details
                  </Button>
                </TableCell>
              </TableRow>
            ))
          )}
        </TableBody>
      </Table>
    </div>
  );

  return (
    <>
      <Head title="KRS Approval" />
      <div className="space-y-6">
        <div>
          <h2>KRS Approval</h2>
          <p className="text-muted-foreground">Review and approve your advisees’ KRS</p>
        </div>

        <div className="grid gap-4 md:grid-cols-3">
          <Card>
            <CardHeader className="flex flex-row items-center justify-between space-y-0 pb-2">
              <CardTitle className="text-sm">Pending Approval</CardTitle>
              <Clock className="h-4 w-4 text-muted-foreground" />
            </CardHeader>
            <CardContent><div className="text-2xl">{stats.pending}</div></CardContent>
          </Card>
          <Card>
            <CardHeader className="flex flex-row items-center justify-between space-y-0 pb-2">
              <CardTitle className="text-sm">Approved</CardTitle>
              <CheckCircle2 className="h-4 w-4 text-muted-foreground" />
            </CardHeader>
            <CardContent><div className="text-2xl">{stats.approved}</div></CardContent>
          </Card>
          <Card>
            <CardHeader className="flex flex-row items-center justify-between space-y-0 pb-2">
              <CardTitle className="text-sm">Rejected</CardTitle>
              <XCircle className="h-4 w-4 text-muted-foreground" />
            </CardHeader>
            <CardContent><div className="text-2xl">{stats.rejected}</div></CardContent>
          </Card>
        </div>

        <Tabs defaultValue="pending" className="space-y-4">
          <TabsList>
            <TabsTrigger value="pending">Pending ({stats.pending})</TabsTrigger>
            <TabsTrigger value="approved">Approved ({stats.approved})</TabsTrigger>
            <TabsTrigger value="rejected">Rejected ({stats.rejected})</TabsTrigger>
          </TabsList>
          
          <TabsContent value="pending">
            <Card>
              <CardHeader>
                <CardTitle>KRS Pending Approval</CardTitle>
                <CardDescription>Review and approve students’ KRS</CardDescription>
              </CardHeader>
              <CardContent><KRSTable data={pendingKRS} /></CardContent>
            </Card>
          </TabsContent>

          <TabsContent value="approved">
            <Card>
              <CardHeader>
                <CardTitle>Approved KRS</CardTitle>
                <CardDescription>Previously approved students’ KRS</CardDescription>
              </CardHeader>
              <CardContent><KRSTable data={approvedKRS} /></CardContent>
            </Card>
          </TabsContent>

          <TabsContent value="rejected">
            <Card>
              <CardHeader>
                <CardTitle>Rejected KRS</CardTitle>
                <CardDescription>Previously rejected students’ KRS</CardDescription>
              </CardHeader>
              <CardContent><KRSTable data={rejectedKRS} /></CardContent>
            </Card>
          </TabsContent>
        </Tabs>
      </div>

      <Dialog open={!!selectedKRS} onOpenChange={(open) => { if (!open) resetDialog(); }}>
        <DialogContent className="w-full max-w-6xl lg:max-w-7xl max-h-[90vh] overflow-y-auto">
          <DialogHeader>
            <DialogTitle>KRS Details — {selectedKRS?.mahasiswa?.nama}</DialogTitle>
            <DialogDescription>
              NRP: {selectedKRS?.mahasiswa?.nrp} • Semester {selectedKRS?.mahasiswa?.semester}
            </DialogDescription>
          </DialogHeader>
          <div className="space-y-4 py-4">
            <div className="grid grid-cols-2 gap-4 p-4 bg-muted rounded-lg">
              <div>
                <p className="text-sm text-muted-foreground">Total Credits</p>
                <p>{selectedKRS?.total_sks} credits</p>
              </div>
              <div>
                <p className="text-sm text-muted-foreground">Total Courses</p>
                <p>{selectedKRS?.detail_krs?.length} courses</p>
              </div>
              <div>
                <p className="text-sm text-muted-foreground">Submission Date</p>
                <p>
                  {selectedKRS && new Date(selectedKRS.tanggal_pengajuan).toLocaleDateString('en-US', {
                    day: 'numeric',
                    month: 'long',
                    year: 'numeric',
                  })}
                </p>
              </div>
              <div>
                <p className="text-sm text-muted-foreground">Status</p>
                {selectedKRS && getStatusBadge(selectedKRS.status_persetujuan)}
              </div>
            </div>
            <div className="rounded-md border">
              <Table>
                <TableHeader>
                  <TableRow>
                    <TableHead>Course Code</TableHead>
                    <TableHead>Course Name</TableHead>
                    <TableHead>Credits</TableHead>
                    <TableHead>Class</TableHead>
                    <TableHead>Lecturer</TableHead>
                    <TableHead>Schedule</TableHead>
                    <TableHead>Grade</TableHead>
                  </TableRow>
                </TableHeader>
                <TableBody>
                  {selectedKRS?.detail_krs?.map((detail) => {
                    const key = String(detail.id_detail_krs);
                    const currentGrade = gradeEdits[key] ?? '';
                    const saving = savingIds.has(key);
                    return (
                      <TableRow key={detail.id_detail_krs}>
                        <TableCell>{detail.kelas?.matakuliah?.kode_mk}</TableCell>
                        <TableCell>{detail.kelas?.matakuliah?.nama_mk}</TableCell>
                        <TableCell>{detail.kelas?.matakuliah?.sks}</TableCell>
                        <TableCell>{detail.kelas?.nama_kelas}</TableCell>
                        <TableCell className="text-xs">{detail.kelas?.dosen?.nama_dosen}</TableCell>
                        <TableCell className="text-xs">
                          {detail.kelas?.jam_mulai && (
                            <>
                              {new Date(detail.kelas.jam_mulai).toLocaleDateString('en-US', { weekday: 'short' })},{' '}
                              {new Date(detail.kelas.jam_mulai).toLocaleTimeString('en-US', { timeZone: 'UTC', hour: '2-digit', minute: '2-digit' })}
                            </>
                          )}
                        </TableCell>
                        <TableCell className="text-xs">
                          {selectedKRS?.status_persetujuan !== 1 ? (
                            <span>{detail.nilai_huruf || '-'}</span>
                          ) : (
                            <div className="flex items-center gap-2">
                              <select
                                className="border rounded px-1 py-0.5 text-xs"
                                value={currentGrade}
                                onChange={(e) => handleLocalGradeChange(key, e.target.value)}
                              >
                                <option value="">-</option>
                                <option value="A">A</option>
                                <option value="AB">AB</option>
                                <option value="B">B</option>
                                <option value="BC">BC</option>
                                <option value="C">C</option>
                                <option value="D">D</option>
                                <option value="E">E</option>
                              </select>
                              <Button size="sm" variant="outline" onClick={() => handleSaveGrade(key)} disabled={!currentGrade || saving}>
                                <Save className="h-3 w-3 mr-1" /> Save
                              </Button>
                            </div>
                          )}
                        </TableCell>
                      </TableRow>
                    );
                  })}
                </TableBody>
              </Table>
            </div>
            {selectedKRS && (selectedKRS as any).waitlisted && (selectedKRS as any).waitlisted.length > 0 && (
              <div className="rounded-md border p-3 bg-blue-50/30 border-blue-200">
                <div className="flex items-center gap-2 mb-2">
                  <Badge variant="outline" className="bg-blue-50 text-blue-700 border-blue-200">Waitlist</Badge>
                  <span className="text-sm text-blue-800">This student is queued for the following classes (not officially enrolled yet).</span>
                </div>
                <div className="rounded-md border">
                  <Table>
                    <TableHeader>
                      <TableRow>
                        <TableHead>Course Code</TableHead>
                        <TableHead>Course Name</TableHead>
                        <TableHead>Credits</TableHead>
                        <TableHead>Class</TableHead>
                        <TableHead>Lecturer</TableHead>
                      </TableRow>
                    </TableHeader>
                    <TableBody>
                      {(selectedKRS as any).waitlisted.map((w: any) => (
                        <TableRow key={w.id}>
                          <TableCell>{w.kelas?.matakuliah?.kode_mk}</TableCell>
                          <TableCell>{w.kelas?.matakuliah?.nama_mk}</TableCell>
                          <TableCell>{w.kelas?.matakuliah?.sks}</TableCell>
                          <TableCell>{w.kelas?.nama_kelas}</TableCell>
                          <TableCell className="text-xs">{w.kelas?.dosen?.nama_dosen}</TableCell>
                        </TableRow>
                      ))}
                    </TableBody>
                  </Table>
                </div>
              </div>
            )}
          </div>
          {selectedKRS?.status_persetujuan === 0 && (
            <div className="space-y-2">
              <label className="text-sm font-medium">Notes (required for rejection)</label>
              <textarea
                className="w-full rounded-md border bg-background p-2 text-sm"
                rows={3}
                value={catatan}
                onChange={(e) => setCatatan(e.target.value)}
                placeholder="Add rejection notes or reasons (max 255 characters)"
              />
              <p className="text-xs text-muted-foreground">Leave blank if approving.</p>
            </div>
          )}
          <DialogFooter>
            {selectedKRS?.status_persetujuan === 0 && (
              <>
                <Button variant="outline" onClick={resetDialog}>Close</Button>
                <Button variant="destructive" onClick={handleReject} disabled={rejecting}>
                  <XCircle className="mr-2 h-4 w-4" /> Reject
                </Button>
                <Button onClick={handleApprove} disabled={approving}>
                  <CheckCircle2 className="mr-2 h-4 w-4" /> Approve
                </Button>
              </>
            )}
            {selectedKRS?.status_persetujuan === 2 && (
              <>
                <Button onClick={resetDialog}>Close</Button>
                <Button variant="outline" onClick={handleApprove} disabled={approving}>
                  <CheckCircle2 className="mr-2 h-4 w-4" /> Approve
                </Button>
              </>
            )}
            {selectedKRS?.status_persetujuan === 1 && (
              <Button onClick={resetDialog}>Close</Button>
            )}
          </DialogFooter>
        </DialogContent>
      </Dialog>
    </>
  );
}

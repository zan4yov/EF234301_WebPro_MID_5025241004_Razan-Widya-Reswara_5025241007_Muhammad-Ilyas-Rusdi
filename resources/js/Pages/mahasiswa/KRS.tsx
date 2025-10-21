import { Head, useForm, router } from '@inertiajs/react';
import { useMemo, useState } from 'react';
import { Card, CardContent, CardDescription, CardHeader, CardTitle } from '@/components/ui/card';
import { Button } from '@/components/ui/button';
import { Badge } from '@/components/ui/badge';
import { Table, TableBody, TableCell, TableHead, TableHeader, TableRow } from '@/components/ui/table';
import { Alert, AlertDescription} from '@/components/ui/alert';
import { Plus, Trash2, Send, CheckCircle2, Info, Clock, XCircle, AlertCircle } from 'lucide-react';
import { Tabs, TabsContent, TabsList, TabsTrigger } from '@/components/ui/tabs';
import { PageProps, Krs, Kelas, TahunAkademik, Mahasiswa } from '@/types';
import { toast } from 'sonner';

interface KrsPageProps extends PageProps {
  mahasiswa: Mahasiswa;
  currentKrs: Krs | null;
  availableClasses: Kelas[];
  activePeriod: TahunAkademik | null;
  waitlisted?: Array<{ id: string; kelas: Kelas; created_at: string }>;
}

export default function MahasiswaKRS({ mahasiswa, currentKrs, availableClasses, activePeriod, waitlisted = [] }: KrsPageProps) {
  const { data, setData, post, processing } = useForm({
    kelas_ids: currentKrs?.detail_krs?.map(detail => detail.kelas_id_kelas) || [],
  });

  const [activeTab, setActiveTab] = useState<'current' | 'add'>(currentKrs ? 'current' : 'add');
  const selectedKelas = data.kelas_ids as string[];

  const getStatusBadge = (status: number) => {
    if (status === 0) {
      return (
        <Badge variant="outline" className="bg-yellow-50 text-yellow-700 border-yellow-200">
          Pending Approval
        </Badge>
      );
    } else if (status === 1) {
      return (
        <Badge variant="outline" className="bg-green-50 text-green-700 border-green-200">
          Approved
        </Badge>
      );
    } else {
      return (
        <Badge variant="outline" className="bg-red-50 text-red-700 border-red-200">
          Rejected
        </Badge>
      );
    }
  };

  const getTotalSKS = () => selectedKelas.reduce((total, kelasId) => {
    const kelas = availableClasses.find(k => k.id_kelas === kelasId);
    return total + (kelas?.matakuliah?.sks || 0);
  }, 0);

  const getJenisMK = (jenis?: number) => {
    if (jenis === 1) return 'Required';
    if (jenis === 2) return 'Elective';
    return 'Other';
  };

  const isKelasAvailable = (kelas: Kelas) => {
    if (!kelas.kapasitas) return true;
    return (kelas.terisi || 0) < kelas.kapasitas;
  };

  const availableKelas = useMemo(() => {
    return availableClasses.filter(k => {
      if (!k.matakuliah) return false;
      const required = k.matakuliah.minimal_semester as number | undefined;
      return required == null || mahasiswa.semester >= required;
    });
  }, [availableClasses, mahasiswa.semester]);

  const selectedCourseCodes = useMemo(() => {
    const codes = new Set<string>();
    selectedKelas.forEach(id => {
      const kelas = availableClasses.find(k => k.id_kelas === id);
      if (kelas?.matakuliah?.kode_mk) codes.add(kelas.matakuliah.kode_mk);
    });
    return codes;
  }, [selectedKelas, availableClasses]);

  const handleSubmitKRS = () => {
    post('/mahasiswa/krs', {
      preserveScroll: true,
      onSuccess: () => {
        toast.success('KRS submitted successfully!');
        setActiveTab('current');
      },
      onError: () => toast.error('An error occurred while submitting KRS.'),
    });
  };

  const toggleKelas = (kelasId: string) => {
    const currentIds = [...data.kelas_ids];
    let newIds: string[];
    if (currentIds.includes(kelasId)) {
      newIds = currentIds.filter(id => id !== kelasId);
    } else {
      const newTotalSks = [...currentIds, kelasId].reduce((total, id) => {
        const kelas = availableClasses.find(k => k.id_kelas === id);
        return total + (kelas?.matakuliah?.sks || 0);
      }, 0);
      if (newTotalSks > 24) {
        toast.error('Credit limit exceeded', { description: 'Total credits may not exceed 24.' });
        return;
      }
      newIds = [...currentIds, kelasId];
    }
    setData('kelas_ids', newIds);
  };

  const handleAddKelas = (kelasId: string) => toggleKelas(kelasId);
  const handleRemoveKelas = (kelasId: string) => toggleKelas(kelasId);
  
  const getStatusInfo = (status: number | undefined) => {
    switch (status) {
      case 0: return { Icon: Clock, text: 'Pending Approval', className: 'bg-yellow-50 text-yellow-700 border-yellow-200' };
      case 1: return { Icon: CheckCircle2, text: 'Approved', className: 'bg-green-50 text-green-700 border-green-200' };
      case 2: return { Icon: XCircle, text: 'Rejected', className: 'bg-red-50 text-red-700 border-red-200' };
      default: return { Icon: Info, text: 'Not Submitted', className: 'bg-red-50 text-red-700 border-red-200' };
    }
  };
  
  const currentStatus = getStatusInfo(currentKrs?.status_persetujuan);
  
  return (
    <>
      <Head title="Study Plan (KRS)" />
      <div className="space-y-6">
        <div className="flex justify-between items-start">
          <div>
            <h2>Study Plan (KRS)</h2>
            {activePeriod && (
              <p className="text-muted-foreground">
                Academic Year {activePeriod.tahun}/{activePeriod.tahun + 1} — {activePeriod.semester === 1 ? 'Odd Semester' : 'Even Semester'}
              </p>
            )}
          </div>
          <Badge variant="outline" className={currentStatus.className}>
            <currentStatus.Icon className="w-3 h-3 mr-1" />
            {currentStatus.text}
          </Badge>
        </div>
        

        <Tabs value={activeTab} onValueChange={(v) => setActiveTab(v as 'current' | 'add')} className="space-y-4">
          <TabsList>
            <TabsTrigger value="current">Current KRS</TabsTrigger>
            <TabsTrigger value="add">Add Courses</TabsTrigger>
          </TabsList>

          <TabsContent value="current" className="space-y-4">
            <Card>
              <CardHeader>
                <div className="flex justify-between items-start">
                  <div>
                    <CardTitle>
                      {currentKrs ? `Semester ${currentKrs.semester} KRS` : 'Current KRS'}
                    </CardTitle>
                    <CardDescription>
                      {currentKrs && (
                        <>Submitted on {new Date(currentKrs.tanggal_pengajuan).toLocaleDateString('en-US', {
                          day: 'numeric',
                          month: 'long',
                          year: 'numeric',
                        })}</>
                      )}
                    </CardDescription>
                  </div>
                  {currentKrs && getStatusBadge(currentKrs.status_persetujuan)}
                </div>
              </CardHeader>
              <CardContent className="space-y-4">
                <Alert>
                  <Info className="h-4 w-4" />
                  <AlertDescription>
                    {currentKrs ? (
                      <>Total credits taken: <strong>{getTotalSKS()} credits</strong> of a maximum 24</>
                    ) : (
                      'No KRS has been submitted yet.'
                    )}
                  </AlertDescription>
                </Alert>

                {waitlisted.length > 0 && (
                  <div className="rounded-md border p-4 bg-blue-50/30 border-blue-200">
                    <div className="flex items-center gap-2 mb-2">
                      <Badge variant="outline" className="bg-blue-50 text-blue-700 border-blue-200">Waitlist</Badge>
                      <span className="text-sm text-blue-800">You are currently queued for the following classes. These are not counted toward total credits and will not appear elsewhere until a seat is assigned.</span>
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
                            <TableHead>Queued Since</TableHead>
                          </TableRow>
                        </TableHeader>
                        <TableBody>
                          {waitlisted.map((w) => (
                            <TableRow key={w.id}>
                              <TableCell>{w.kelas?.matakuliah?.kode_mk}</TableCell>
                              <TableCell>{w.kelas?.matakuliah?.nama_mk}</TableCell>
                              <TableCell>{w.kelas?.matakuliah?.sks}</TableCell>
                              <TableCell>{w.kelas?.nama_kelas}</TableCell>
                              <TableCell className="text-xs">{w.kelas?.dosen?.nama_dosen}</TableCell>
                              <TableCell className="text-xs">{new Date(w.created_at).toLocaleString('en-US')}</TableCell>
                            </TableRow>
                          ))}
                        </TableBody>
                      </Table>
                    </div>
                  </div>
                )}

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
                        <TableHead>Room</TableHead>
                      </TableRow>
                    </TableHeader>
                    <TableBody>
                      {currentKrs?.detail_krs?.map((detail: any) => (
                        <TableRow key={detail.id_detail_krs}>
                          <TableCell>{detail.kelas?.matakuliah?.kode_mk}</TableCell>
                          <TableCell>{detail.kelas?.matakuliah?.nama_mk}</TableCell>
                          <TableCell>{detail.kelas?.matakuliah?.sks}</TableCell>
                          <TableCell>{detail.kelas?.nama_kelas}</TableCell>
                          <TableCell>{detail.kelas?.dosen?.nama_dosen}</TableCell>
                          <TableCell className="text-xs">
                            {new Date(detail.kelas?.jam_mulai!).toLocaleDateString('en-US', { weekday: 'short' })},{' '}
                            {new Date(detail.kelas?.jam_mulai!).toLocaleTimeString('en-US', { timeZone: 'UTC', hour: '2-digit', minute: '2-digit' })} -{' '}
                            {new Date(detail.kelas?.jam_selesai!).toLocaleTimeString('en-US', { timeZone: 'UTC', hour: '2-digit', minute: '2-digit' })}
                          </TableCell>
                          <TableCell className="text-xs">{detail.kelas?.ruangan?.id_ruangan}</TableCell>
                        </TableRow>
                      ))}
                    </TableBody>
                  </Table>
                </div>

                {currentKrs && currentKrs.status_persetujuan === 0 && (
                  <div className="flex gap-2">
                    <Button onClick={handleSubmitKRS} disabled={processing} variant="secondary">
                      <Send className="mr-2 h-4 w-4" />
                      Resubmit
                    </Button>
                    <Button
                      variant="destructive"
                      disabled={processing}
                      onClick={() => {
                        if (confirm('Cancel this KRS submission? This will remove all selected classes.')) {
                          router.delete('/mahasiswa/krs', {
                            preserveScroll: true,
                            onSuccess: () => toast.success('KRS submission canceled.'),
                            onError: () => toast.error('Failed to cancel KRS submission.'),
                          });
                        }
                      }}
                    >
                      Cancel Submission
                    </Button>
                  </div>
                )}

                {currentKrs && currentKrs.status_persetujuan === 2 && (
                  <>
                    <Alert variant="destructive">
                      <AlertCircle className="h-4 w-4" />
                      <AlertDescription>
                        Your KRS was rejected. Please edit and submit again.
                      </AlertDescription>
                    </Alert>
                    <Card>
                      <CardHeader>
                        <div className="flex justify-between items-start">
                          <CardTitle>
                            Rejection Notes
                          </CardTitle>
                        </div>
                      </CardHeader>
                      <CardContent>
                        { currentKrs.catatan_penolakan }
                      </CardContent>
                    </Card>
                  </>
                )}

                {currentKrs && currentKrs.status_persetujuan === 1 && (
                  <Alert className="bg-green-50 border-green-200">
                    <CheckCircle2 className="h-4 w-4 text-green-600" />
                    <AlertDescription className="text-green-800">
                      Your KRS has been approved by the academic advisor.
                    </AlertDescription>
                  </Alert>
                )}
              </CardContent>
            </Card>
          </TabsContent>

          <TabsContent value="add" className="space-y-4">
            <Card>
              <CardHeader>
                <CardTitle>Add Courses</CardTitle>
                <CardDescription>
                  Select the courses you want to take this semester
                </CardDescription>
              </CardHeader>
              <CardContent className="space-y-4">
                <Alert>
                  <Info className="h-4 w-4" />
                  <AlertDescription>
                    Current total: <strong>{getTotalSKS()} credits</strong> of a maximum 24
                  </AlertDescription>
                </Alert>

                <div className="rounded-md border">
                  <Table>
                    <TableHeader>
                      <TableRow>
                        <TableHead>Course Code</TableHead>
                        <TableHead>Course Name</TableHead>
                        <TableHead>Credits</TableHead>
                        <TableHead>Type</TableHead>
                        <TableHead>Class</TableHead>
                        <TableHead>Day</TableHead>
                        <TableHead>Lecturer</TableHead>
                        <TableHead>Capacity</TableHead>
                        <TableHead>Action</TableHead>
                      </TableRow>
                    </TableHeader>
                    <TableBody>
                      {availableKelas.map((kelas: Kelas) => {
                        const isSelected = selectedKelas.includes(kelas.id_kelas);
                        const available = isKelasAvailable(kelas);
                        const courseAlreadyChosen = !isSelected && kelas.matakuliah?.kode_mk ? selectedCourseCodes.has(kelas.matakuliah.kode_mk) : false;
                        return (
                          <TableRow key={kelas.id_kelas} className={courseAlreadyChosen || ((24 - getTotalSKS() < (kelas.matakuliah?.sks ?? 0)) && !isSelected) ? 'opacity-60' : ''}>
                            <TableCell>{kelas.matakuliah?.kode_mk}</TableCell>
                            <TableCell>{kelas.matakuliah?.nama_mk}</TableCell>
                            <TableCell>{kelas.matakuliah?.sks}</TableCell>
                            <TableCell>
                              <Badge variant={kelas.matakuliah?.jenis_mk === 1 ? 'default' : 'secondary'}>
                                {getJenisMK(kelas.matakuliah?.jenis_mk!)}
                              </Badge>
                            </TableCell>
                            <TableCell>{kelas.nama_kelas}</TableCell>
                            <TableCell className="text-xs">
                              {new Date(kelas?.jam_mulai!).toLocaleDateString('en-US', { weekday: 'short' })},{' '}
                              {new Date(kelas?.jam_mulai!).toLocaleTimeString('en-US', { timeZone: 'UTC', hour: '2-digit', minute: '2-digit' })} -{' '}
                              {new Date(kelas?.jam_selesai!).toLocaleTimeString('en-US', { timeZone: 'UTC', hour: '2-digit', minute: '2-digit' })}
                            </TableCell>
                            <TableCell className="text-xs">{kelas.dosen?.nama_dosen}</TableCell>
                            <TableCell>
                              <div className="flex items-center gap-2">
                                <span className={!available ? 'text-red-600' : ''}>
                                  {kelas.terisi}/{kelas.kapasitas}
                                </span>
                                {!available && (
                                  <Badge variant="outline" className="bg-blue-50 text-blue-700 border-blue-200">
                                    Waitlist
                                  </Badge>
                                )}
                              </div>
                            </TableCell>
                            <TableCell>
                              {isSelected ? (
                                <Button
                                  size="sm"
                                  variant="destructive"
                                  onClick={() => handleRemoveKelas(kelas.id_kelas)}
                                >
                                  <Trash2 className="h-4 w-4" />
                                </Button>
                              ) : (
                                <Button
                                  size="sm"
                                  variant="outline"
                                  onClick={() => handleAddKelas(kelas.id_kelas)}
                                  disabled={courseAlreadyChosen}
                                  title={
                                    courseAlreadyChosen
                                      ? 'This course is already selected in another class'
                                      : (!available ? 'Class is full; you will be placed on the waitlist' : '')
                                  }
                                >
                                  {available ? (
                                    <Plus className="h-4 w-4" />
                                  ) : (
                                    <div className="flex items-center gap-1">
                                      <Clock className="h-4 w-4" />
                                      <span>Waitlist</span>
                                    </div>
                                  )}
                                </Button>
                              )}
                            </TableCell>
                          </TableRow>
                        );
                      })}
                    </TableBody>
                  </Table>
                </div>

                <div className="flex gap-2">
                  <Button onClick={handleSubmitKRS} disabled={selectedKelas.length === 0 || processing}>
                    <Send className="mr-2 h-4 w-4" />
                    Save & Submit
                  </Button>
                  <Button variant="outline" onClick={() => setData('kelas_ids', [])}>
                    Reset
                  </Button>
                </div>
              </CardContent>
            </Card>
          </TabsContent>
        </Tabs>
      </div>
    </>
  );
}

import { Head, Link } from '@inertiajs/react';
import { Card, CardContent, CardDescription, CardHeader, CardTitle } from '@/components/ui/card';
import { Badge } from '@/components/ui/badge';
import { Button } from '@/components/ui/button';
import { Progress } from '@/components/ui/progress';
import { BookOpen, Calendar, FileText, CheckCircle2, Clock, XCircle, Info } from 'lucide-react';
import { PageProps, Mahasiswa, Krs, TahunAkademik, Kelas, Dosen } from '@/types';

interface MahasiswaDashboardProps extends PageProps {
  mahasiswa: Mahasiswa;
  currentKrs: (Krs & { total_sks: number }) | null;
  activePeriod: TahunAkademik | null;
  todaySchedule: Kelas[];
  dosen: Dosen[];
}

export default function MahasiswaDashboard({ mahasiswa, currentKrs, activePeriod, todaySchedule, dosen }: MahasiswaDashboardProps) {
  const getStatusBadge = (status: number) => {
    if (status === 0) {
      return (
        <Badge variant="outline" className="bg-yellow-50 text-yellow-700 border-yellow-200">
          <Clock className="w-3 h-3 mr-1" />
          Pending Approval
        </Badge>
      );
    }
    if (status === 1) {
      return (
        <Badge variant="outline" className="bg-green-50 text-green-700 border-green-200">
          <CheckCircle2 className="w-3 h-3 mr-1" />
          Approved
        </Badge>
      );
    }
    return (
      <Badge variant="outline" className="bg-red-50 text-red-700 border-red-200">
        <XCircle className="w-3 h-3 mr-1" />
        Rejected
      </Badge>
    );
  };

  const maxSKS = 24;
  const currentSKS = currentKrs?.total_sks || 0;
  const sksProgress = (currentSKS / maxSKS) * 100;
  const today = new Date().toLocaleDateString('en-US', { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' });

  return (
    <>
      <Head title="Dashboard" />
      <div className="space-y-6">
        <div>
          <h2>Welcome, {mahasiswa.nama}!</h2>
          <p className="text-muted-foreground">
            {mahasiswa.program_studi?.nama_prodi} — Semester {mahasiswa.semester}
          </p>
        </div>

        <div className="grid gap-4 md:grid-cols-2 lg:grid-cols-4">
          <Card>
            <CardHeader className="flex flex-row items-center justify-between space-y-0 pb-2">
              <CardTitle className="text-sm">Active Semester</CardTitle>
              <Calendar className="h-4 w-4 text-muted-foreground" />
            </CardHeader>
            <CardContent>
              <div className="text-2xl">{mahasiswa.semester}</div>
              <p className="text-xs text-muted-foreground">Cohort {mahasiswa.angkatan}</p>
            </CardContent>
          </Card>
          <Card>
            <CardHeader className="flex flex-row items-center justify-between space-y-0 pb-2">
              <CardTitle className="text-sm">Total Credits Taken</CardTitle>
              <BookOpen className="h-4 w-4 text-muted-foreground" />
            </CardHeader>
            <CardContent>
              <div className="text-2xl">{currentSKS}</div>
              <p className="text-xs text-muted-foreground">of a maximum {maxSKS} credits</p>
            </CardContent>
          </Card>
          <Card>
            <CardHeader className="flex flex-row items-center justify-between space-y-0 pb-2">
              <CardTitle className="text-sm">Courses</CardTitle>
              <FileText className="h-4 w-4 text-muted-foreground" />
            </CardHeader>
            <CardContent>
              <div className="text-2xl">{currentKrs?.detail_krs?.length || 0}</div>
              <p className="text-xs text-muted-foreground">Courses taken</p>
            </CardContent>
          </Card>
          <Card>
            <CardHeader className="flex flex-row items-center justify-between space-y-0 pb-2">
              <CardTitle className="text-sm">KRS Status</CardTitle>
              <CheckCircle2 className="h-4 w-4 text-muted-foreground" />
            </CardHeader>
            <CardContent className="pt-2">
              {currentKrs ? getStatusBadge(currentKrs.status_persetujuan) : (
                <Badge variant="outline" className="bg-red-50 text-red-700 border-red-200">
                  <Clock className="w-3 h-3 mr-1" />
                  Not Filled
                </Badge>
              )}
            </CardContent>
          </Card>
        </div>

        <Card>
          <CardHeader>
            <CardTitle>KRS Submission Progress</CardTitle>
            {activePeriod ? (
              <CardDescription>
                Period: {activePeriod.tahun}/{activePeriod.tahun + 1} — {activePeriod.semester === 1 ? 'Odd Semester' : 'Even Semester'}
              </CardDescription>
            ) : (
              <CardDescription>No active KRS period.</CardDescription>
            )}
          </CardHeader>
          {currentKrs ? (
            <CardContent className="space-y-4">
              <div className="space-y-2">
                <div className="flex justify-between text-sm">
                  <span>Credits taken</span>
                  <span>{currentSKS} / {maxSKS} credits</span>
                </div>
                <Progress value={sksProgress} />
              </div>
              <div className="flex gap-2">
                <Button asChild>
                  <Link href="/mahasiswa/krs">
                    <FileText className="mr-2 h-4 w-4" />
                    View KRS
                  </Link>
                </Button>
                {currentKrs.status_persetujuan === 0 && (
                  <Button variant="outline" asChild>
                    <Link href="/mahasiswa/krs">Edit KRS</Link>
                  </Button>
                )}
              </div>
            </CardContent>
          ) : (
            <CardContent>
              {currentKrs ? (
                <div className="space-y-4">
                  <div className="flex justify-between text-sm">
                    <span>Credits taken</span>
                    <span>{currentSKS} / {maxSKS} credits</span>
                  </div>
                  <Progress value={sksProgress} />
                  <div className="flex gap-2">
                    <Button asChild>
                      <Link href="/mahasiswa/krs"><FileText className="mr-2 h-4 w-4" />View KRS</Link>
                    </Button>
                  </div>
                </div>
              ) : (
                <div className="space-y-4">
                  <div className="flex items-center gap-3 text-sm text-muted-foreground">
                    <Info className="h-4 w-4" />
                    <p>You haven’t filled out KRS for this period.</p>
                  </div>
                  <div className="flex gap-2">
                    <Button asChild>
                      <Link href="/mahasiswa/krs"><FileText className="mr-2 h-4 w-4" />Fill KRS</Link>
                    </Button>
                  </div>
                </div>
              )}
            </CardContent>
          )}
        </Card>

        <div className="grid gap-4 md:grid-cols-2">
          <Card>
            <CardHeader>
              <CardTitle>Academic Information</CardTitle>
            </CardHeader>
            <CardContent className="space-y-3">
              <div className="flex justify-between items-start">
                <div>
                  <p className="text-sm">Student ID</p>
                  <p className="text-muted-foreground">{mahasiswa.nrp ? mahasiswa.nrp : "-"}</p>
                </div>
              </div>
              <div className="flex justify-between items-start">
                <div>
                  <p className="text-sm">Study Program</p>
                  <p className="text-muted-foreground">{mahasiswa.program_studi ? mahasiswa.program_studi?.nama_prodi : "-"}</p>
                </div>
              </div>
              <div className="flex justify-between items-start">
                <div>
                  <p className="text-sm">Academic Advisor</p>
                  <p className="text-muted-foreground">{ mahasiswa.dosen_pembimbing ? mahasiswa.dosen_pembimbing?.nama_dosen : "-"}</p>
                </div>
              </div>
              <div className="flex justify-between items-start">
                <div>
                  <p className="text-sm">Status</p>
                  { mahasiswa.status_mahasiswa === "Aktif" ? (
                    <Badge variant="outline" className="bg-green-50 text-green-700 border-green-200">
                      {mahasiswa.status_mahasiswa}
                    </Badge>
                  ) : (
                    <Badge variant="outline" className="bg-red-50 text-red-700 border-red-200">
                      {mahasiswa.status_mahasiswa}
                    </Badge>
                  )}
                </div>
              </div>
            </CardContent>
          </Card>

          <Card>
            <CardHeader>
              <CardTitle>Today’s Schedule</CardTitle>
              <CardDescription>{today}</CardDescription>
            </CardHeader>
            <CardContent className="space-y-3">
              {todaySchedule.length > 0 ? (
                todaySchedule.map((kelas) => (
                  <div key={kelas.id_kelas} className="flex items-start gap-3 p-3 border rounded-lg">
                    <div className="flex-1">
                      <p className="text-sm">{kelas.matakuliah?.nama_mk}</p>
                      <p className="text-xs text-muted-foreground">{kelas.ruangan?.id_ruangan} - {kelas.ruangan?.tempat_ruangan}</p>
                      <p className="text-xs text-muted-foreground">
                        {(() => {
                          const d = dosen?.find((x) => x.nidn === kelas.dosen_nidn);
                          return d?.nama_dosen || '-';
                        })()}
                      </p>
                    </div>
                    <Badge variant="outline">
                      {new Date(kelas.jam_mulai!).toLocaleTimeString('en-US', { timeZone: 'UTC', hour: '2-digit', minute: '2-digit' })} - {new Date(kelas.jam_selesai!).toLocaleTimeString('en-US', { timeZone: 'UTC', hour: '2-digit', minute: '2-digit' })}
                    </Badge>
                  </div>
                ))
              ) : (
                <p className="text-sm text-muted-foreground">No schedule today.</p>
              )}
              <Button variant="outline" className="w-full" asChild>
                <Link href="/mahasiswa/jadwal">View Full Schedule</Link>
              </Button>
            </CardContent>
          </Card>
        </div>
      </div>
    </>
  );
}

import { Head, Link } from '@inertiajs/react';
import { Card, CardContent, CardDescription, CardHeader, CardTitle } from '@/components/ui/card';
import { Badge } from '@/components/ui/badge';
import { Button } from '@/components/ui/button';
import { Users, CheckSquare, Clock, BookOpen, Calendar } from 'lucide-react';
import { PageProps, Dosen, Krs, Kelas, Mahasiswa } from '@/types';
import { route } from 'ziggy-js';

interface DosenDashboardProps extends PageProps {
  dosen: Dosen;
  stats: {
    mahasiswaBimbinganCount: number;
    pendingKrsCount: number;
    kelasDiampuCount: number;
    todayScheduleCount: number;
  };
  pendingKrs: Krs[];
  todaySchedule: Kelas[];
  mahasiswaBimbingan: Mahasiswa[];
}

export default function DosenDashboard({ dosen, stats, pendingKrs, todaySchedule, mahasiswaBimbingan }: DosenDashboardProps) {
  const today = new Date().toLocaleDateString('en-US', { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' });

  return (
    <>
      <Head title="Instructor Dashboard" />
      <div className="space-y-6">
        <div>
          <h2>Welcome, {dosen.nama_dosen}!</h2>
          <p className="text-muted-foreground">
            {dosen.program_studi?.nama_prodi} - {dosen.program_studi?.nama_fakultas}
          </p>
        </div>

        <div className="grid gap-4 md:grid-cols-2 lg:grid-cols-4">
          <Card>
            <CardHeader className="flex flex-row items-center justify-between space-y-0 pb-2">
              <CardTitle className="text-sm">Advisees</CardTitle>
              <Users className="h-4 w-4 text-muted-foreground" />
            </CardHeader>
            <CardContent>
              <div className="text-2xl">{stats.mahasiswaBimbinganCount}</div>
              <p className="text-xs text-muted-foreground">Total students</p>
            </CardContent>
          </Card>
          <Card>
            <CardHeader className="flex flex-row items-center justify-between space-y-0 pb-2">
              <CardTitle className="text-sm">Pending KRS</CardTitle>
              <Clock className="h-4 w-4 text-muted-foreground" />
            </CardHeader>
            <CardContent>
              <div className="text-2xl">{stats.pendingKrsCount}</div>
              <p className="text-xs text-muted-foreground">Awaiting approval</p>
            </CardContent>
          </Card>
          <Card>
            <CardHeader className="flex flex-row items-center justify-between space-y-0 pb-2">
              <CardTitle className="text-sm">Taught Classes</CardTitle>
              <BookOpen className="h-4 w-4 text-muted-foreground" />
            </CardHeader>
            <CardContent>
              <div className="text-2xl">{stats.kelasDiampuCount}</div>
              <p className="text-xs text-muted-foreground">Active courses</p>
            </CardContent>
          </Card>
          <Card>
            <CardHeader className="flex flex-row items-center justify-between space-y-0 pb-2">
              <CardTitle className="text-sm">Today's Schedule</CardTitle>
              <Calendar className="h-4 w-4 text-muted-foreground" />
            </CardHeader>
            <CardContent>
              <div className="text-2xl">{stats.todayScheduleCount}</div>
              <p className="text-xs text-muted-foreground">Teaching sessions</p>
            </CardContent>
          </Card>
        </div>

        {pendingKrs.length > 0 && (
          <Card>
            <CardHeader>
              <div className="flex justify-between items-start">
                <div className="flex flex-col gap-1.5">
                  <CardTitle>KRS Awaiting Approval</CardTitle>
                  <CardDescription>{stats.pendingKrsCount} KRS to review</CardDescription>
                </div>
                <Button asChild>
                  <Link href={route('dosen.persetujuan')}>
                    <CheckSquare className="mr-2 h-4 w-4" />
                    View All
                  </Link>
                </Button>
              </div>
            </CardHeader>
            <CardContent>
              <div className="space-y-3">
                {pendingKrs.map((krs) => (
                  <div key={krs.id_krs} className="flex items-center justify-between p-4 border rounded-lg">
                    <div className="space-y-1">
                      <p>{krs.mahasiswa?.nama}</p>
                      <p className="text-sm text-muted-foreground">
                        Student ID: {krs.mahasiswa?.nrp} • {krs.total_sks} Credits • {krs.detail_krs?.length} Courses
                      </p>
                      <p className="text-xs text-muted-foreground">
                        Submitted: {new Date(krs.tanggal_pengajuan).toLocaleDateString('en-US')}
                      </p>
                    </div>
                    <Badge variant="outline" className="bg-yellow-50 text-yellow-700 border-yellow-200">
                      <Clock className="w-3 h-3 mr-1" />
                      Pending
                    </Badge>
                  </div>
                ))}
              </div>
            </CardContent>
          </Card>
        )}

        <div className="grid gap-4 md:grid-cols-2">
          <Card>
            <CardHeader>
              <CardTitle>Today's Teaching Schedule</CardTitle>
              <CardDescription>{today}</CardDescription>
            </CardHeader>
            <CardContent className="space-y-3">
              {todaySchedule.map((kelas) => (
                <div key={kelas.id_kelas} className="flex items-start gap-3 p-3 border rounded-lg">
                  <div className="flex-1">
                    <p className="text-sm">{kelas.matakuliah?.nama_mk}</p>
                    <p className="text-xs text-muted-foreground">{kelas.nama_kelas} • {kelas.ruangan?.tempat_ruangan}</p>
                    <p className="text-xs text-muted-foreground"> {kelas.terisi}/{kelas.kapasitas} students</p>
                  </div>
                  <Badge variant="outline">
                    {new Date(kelas.jam_mulai).toLocaleTimeString('en-US', { timeZone: 'UTC', hour: '2-digit', minute: '2-digit' })}
                    {" "}-{" "}
                    {new Date(kelas.jam_selesai).toLocaleTimeString('en-US', { timeZone: 'UTC', hour: '2-digit', minute: '2-digit' })}
                  </Badge>
                </div>
              ))}
              {todaySchedule.length === 0 && (
                <p className="text-sm text-muted-foreground text-center py-4">No teaching schedule today.</p>
              )}
              <Button variant="outline" className="w-full" asChild>
                <Link href={route('dosen.jadwal')}>View Full Schedule</Link>
              </Button>
            </CardContent>
          </Card>
          <Card>
            <CardHeader>
              <CardTitle>Advisees</CardTitle>
              <CardDescription>{stats.mahasiswaBimbinganCount} total students</CardDescription>
            </CardHeader>
            <CardContent className="space-y-3">
              {mahasiswaBimbingan.map((mhs) => (
                <div key={mhs.nrp} className="flex items-center justify-between p-3 border rounded-lg">
                  <div>
                    <p className="text-sm">{mhs.nama}</p>
                    <p className="text-xs text-muted-foreground">
                      {mhs.nrp} • Semester {mhs.semester}
                    </p>
                  </div>
                  <Badge variant="outline" className="bg-green-50 text-green-700 border-green-200">{mhs.status_mahasiswa}</Badge>
                </div>
              ))}
              {mahasiswaBimbingan.length === 0 && (
                <p className="text-sm text-muted-foreground text-center py-4">No advisees.</p>
              )}
            </CardContent>
          </Card>
        </div>
      </div>
    </>
  );
}

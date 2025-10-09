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
  const today = new Date().toLocaleDateString('id-ID', { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' });

  return (
    <>
      <Head title="Dashboard Dosen" />
      <div className="space-y-6">
        <div>
          <h2>Selamat Datang, {dosen.nama_dosen}!</h2>
          <p className="text-muted-foreground">
            {dosen.program_studi?.nama_prodi} - {dosen.program_studi?.nama_fakultas}
          </p>
        </div>

        <div className="grid gap-4 md:grid-cols-2 lg:grid-cols-4">
          <Card>
            <CardHeader className="flex flex-row items-center justify-between space-y-0 pb-2">
              <CardTitle className="text-sm">Mahasiswa Bimbingan</CardTitle>
              <Users className="h-4 w-4 text-muted-foreground" />
            </CardHeader>
            <CardContent>
              <div className="text-2xl">{stats.mahasiswaBimbinganCount}</div>
              <p className="text-xs text-muted-foreground">Total mahasiswa</p>
            </CardContent>
          </Card>
          <Card>
            <CardHeader className="flex flex-row items-center justify-between space-y-0 pb-2">
              <CardTitle className="text-sm">KRS Pending</CardTitle>
              <Clock className="h-4 w-4 text-muted-foreground" />
            </CardHeader>
            <CardContent>
              <div className="text-2xl">{stats.pendingKrsCount}</div>
              <p className="text-xs text-muted-foreground">Menunggu persetujuan</p>
            </CardContent>
          </Card>
          <Card>
            <CardHeader className="flex flex-row items-center justify-between space-y-0 pb-2">
              <CardTitle className="text-sm">Kelas Diampu</CardTitle>
              <BookOpen className="h-4 w-4 text-muted-foreground" />
            </CardHeader>
            <CardContent>
              <div className="text-2xl">{stats.kelasDiampuCount}</div>
              <p className="text-xs text-muted-foreground">Mata kuliah aktif</p>
            </CardContent>
          </Card>
          <Card>
            <CardHeader className="flex flex-row items-center justify-between space-y-0 pb-2">
              <CardTitle className="text-sm">Jadwal Hari Ini</CardTitle>
              <Calendar className="h-4 w-4 text-muted-foreground" />
            </CardHeader>
            <CardContent>
              <div className="text-2xl">{stats.todayScheduleCount}</div>
              <p className="text-xs text-muted-foreground">Kelas mengajar</p>
            </CardContent>
          </Card>
        </div>

        {pendingKrs.length > 0 && (
          <Card>
            <CardHeader>
              <div className="flex justify-between items-start">
                <div className="flex flex-col gap-1.5">
                  <CardTitle>KRS Menunggu Persetujuan</CardTitle>
                  <CardDescription>{stats.pendingKrsCount} KRS perlu ditinjau</CardDescription>
                </div>
                <Button asChild>
                  <Link href={route('dosen.persetujuan')}>
                    <CheckSquare className="mr-2 h-4 w-4" />
                    Lihat Semua
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
                        NRP: {krs.mahasiswa?.nrp} • {krs.total_sks} SKS • {krs.detail_krs?.length} Mata Kuliah
                      </p>
                      <p className="text-xs text-muted-foreground">
                        Diajukan: {new Date(krs.tanggal_pengajuan).toLocaleDateString('id-ID')}
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
              <CardTitle>Jadwal Mengajar Hari Ini</CardTitle>
              <CardDescription>{today}</CardDescription>
            </CardHeader>
            <CardContent className="space-y-3">
              {todaySchedule.map((kelas) => (
                <div key={kelas.id_kelas} className="flex items-start gap-3 p-3 border rounded-lg">
                  <div className="flex-1">
                    <p className="text-sm">{kelas.matakuliah?.nama_mk}</p>
                    <p className="text-xs text-muted-foreground">{kelas.nama_kelas} • {kelas.ruangan?.tempat_ruangan}</p>
                    <p className="text-xs text-muted-foreground"> {kelas.terisi}/{kelas.kapasitas} mahasiswa</p>
                  </div>
                  <Badge variant="outline">
                    {new Date(kelas.jam_mulai).toLocaleTimeString('id-ID', { timeZone: 'UTC', hour: '2-digit', minute: '2-digit' })} - {new Date(kelas.jam_selesai).toLocaleTimeString('id-ID', { timeZone: 'UTC', hour: '2-digit', minute: '2-digit' })}
                  </Badge>
                </div>
              ))}
              {todaySchedule.length === 0 && (
                 <p className="text-sm text-muted-foreground text-center py-4">Tidak ada jadwal mengajar hari ini.</p>
              )}
              <Button variant="outline" className="w-full" asChild>
                <Link href={route('dosen.jadwal')}>Lihat Jadwal Lengkap</Link>
              </Button>
            </CardContent>
          </Card>
          <Card>
            <CardHeader>
              <CardTitle>Mahasiswa Bimbingan</CardTitle>
              <CardDescription>{stats.mahasiswaBimbinganCount} mahasiswa total</CardDescription>
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
                <p className="text-sm text-muted-foreground text-center py-4">Tidak ada mahasiswa bimbingan.</p>
              )}
            </CardContent>
          </Card>
        </div>
      </div>
    </>
  );
}
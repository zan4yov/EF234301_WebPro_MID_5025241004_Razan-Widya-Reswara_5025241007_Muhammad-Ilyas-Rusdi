import { Head } from '@inertiajs/react';
import { Card, CardContent, CardDescription, CardHeader, CardTitle } from '@/components/ui/card';
import { Badge } from '@/components/ui/badge';
import { Users, Clock, MapPin, BookOpen } from 'lucide-react';
import { PageProps, Kelas, TahunAkademik } from '@/types';

interface DosenKelasProps extends PageProps {
  classes: Kelas[];
  stats: {
    totalClasses: number;
    totalStudents: number;
    avgCapacity: number;
  };
  activePeriod: TahunAkademik | null;
}

export default function DosenKelas({ classes, stats, activePeriod }: DosenKelasProps) {
  const dayNames = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];

  return (
    <>
      <Head title="Kelas Diampu" />
      <div className="space-y-6">
        <div>
          <h2>Kelas yang Diampu</h2>
          {activePeriod ? (
            <p className="text-muted-foreground">
              Daftar kelas yang Anda ajar untuk periode {activePeriod.tahun}/{activePeriod.tahun + 1} - Semester {activePeriod.semester === 1 ? 'Ganjil' : 'Genap'}
            </p>
          ) : (
            <p className="text-muted-foreground">Tidak ada periode akademik yang aktif.</p>
          )}
        </div>

        <div className="grid gap-4 md:grid-cols-3">
          <Card>
            <CardHeader className="flex flex-row items-center justify-between space-y-0 pb-2">
              <CardTitle className="text-sm">Total Kelas</CardTitle>
              <BookOpen className="h-4 w-4 text-muted-foreground" />
            </CardHeader>
            <CardContent>
              <div className="text-2xl">{stats.totalClasses}</div>
              <p className="text-xs text-muted-foreground">Kelas aktif</p>
            </CardContent>
          </Card>
          <Card>
            <CardHeader className="flex flex-row items-center justify-between space-y-0 pb-2">
              <CardTitle className="text-sm">Total Mahasiswa</CardTitle>
              <Users className="h-4 w-4 text-muted-foreground" />
            </CardHeader>
            <CardContent>
              <div className="text-2xl">{stats.totalStudents}</div>
              <p className="text-xs text-muted-foreground">Mahasiswa terdaftar</p>
            </CardContent>
          </Card>
          <Card>
            <CardHeader className="flex flex-row items-center justify-between space-y-0 pb-2">
              <CardTitle className="text-sm">Rata-rata Kapasitas</CardTitle>
              <Users className="h-4 w-4 text-muted-foreground" />
            </CardHeader>
            <CardContent>
              <div className="text-2xl">{stats.avgCapacity}%</div>
              <p className="text-xs text-muted-foreground">Terisi dari kapasitas</p>
            </CardContent>
          </Card>
        </div>

        <div className="space-y-4">
          {classes.map((kelas) => {
            const dayIndex = new Date(kelas.jam_mulai).getDay();
            const capacityPercentage = (kelas.terisi / kelas.kapasitas) * 100;

            return (
              <Card key={kelas.id_kelas}>
                <CardHeader>
                  <div className="flex justify-between items-start">
                    <div>
                      <CardTitle>{kelas.matakuliah?.nama_mk}</CardTitle>
                      <CardDescription>{kelas.matakuliah?.kode_mk} • {kelas.nama_kelas}</CardDescription>
                    </div>
                    <div className="flex gap-2">
                      <Badge variant="secondary">{kelas.matakuliah?.sks} SKS</Badge>
                      <Badge variant="outline">{kelas.terisi}/{kelas.kapasitas} Mahasiswa</Badge>
                    </div>
                  </div>
                </CardHeader>
                <CardContent>
                  <div className="grid gap-4 md:grid-cols-3">
                    <div className="flex items-start gap-3">
                      <div className="p-2 bg-primary/10 rounded-lg"><Clock className="h-4 w-4 text-primary" /></div>
                      <div>
                        <p className="text-sm text-muted-foreground">Jadwal</p>
                        <p className="text-sm">{dayNames[dayIndex]}</p>
                        <p className="text-sm">
                          {new Date(kelas.jam_mulai).toLocaleTimeString('id-ID', { timeZone: 'UTC', hour: '2-digit', minute: '2-digit' })}
                          - {new Date(kelas.jam_selesai).toLocaleTimeString('id-ID', { timeZone: 'UTC', hour: '2-digit', minute: '2-digit' })}
                        </p>
                      </div>
                    </div>
                    <div className="flex items-start gap-3">
                      <div className="p-2 bg-primary/10 rounded-lg"><MapPin className="h-4 w-4 text-primary" /></div>
                      <div>
                        <p className="text-sm text-muted-foreground">Ruangan</p>
                        <p className="text-sm">{kelas.ruangan?.id_ruangan}</p>
                        <p className="text-sm">{kelas.ruangan?.tempat_ruangan}</p>
                      </div>
                    </div>
                    <div className="flex items-start gap-3">
                      <div className="p-2 bg-primary/10 rounded-lg"><Users className="h-4 w-4 text-primary" /></div>
                      <div>
                        <p className="text-sm text-muted-foreground">Kapasitas ({capacityPercentage.toFixed(0)}%)</p>
                        <div className="w-full bg-muted rounded-full h-2 my-1.5 overflow-hidden">
                          <div className="h-full bg-primary" style={{ width: `${capacityPercentage}%` }} />
                        </div>
                        <p className="text-sm">{kelas.terisi} dari {kelas.kapasitas}</p>
                      </div>
                    </div>
                  </div>

                  {kelas.matakuliah?.deskripsi_mk && (
                    <div className="mt-4 p-3 bg-muted rounded-lg">
                      <p className="text-sm text-muted-foreground">
                        {kelas.matakuliah.deskripsi_mk}
                      </p>
                    </div>
                  )}
                </CardContent>
              </Card>
            );
          })}

          {classes.length === 0 && (
            <Card>
              <CardContent className="py-12 text-center">
                <BookOpen className="h-12 w-12 mx-auto text-muted-foreground mb-4" />
                <p className="text-muted-foreground">Tidak ada kelas yang diampu pada semester ini.</p>
              </CardContent>
            </Card>
          )}
        </div>
      </div>
    </>
  );
}
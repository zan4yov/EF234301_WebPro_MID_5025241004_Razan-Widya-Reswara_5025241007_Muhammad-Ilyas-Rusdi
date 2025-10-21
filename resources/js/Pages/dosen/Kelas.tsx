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
  const dayNames = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];

  return (
    <>
      <Head title="Taught Classes" />
      <div className="space-y-6">
        <div>
          <h2>Classes You Teach</h2>
          {activePeriod ? (
            <p className="text-muted-foreground">
              List of classes you teach for academic year {activePeriod.tahun}/{activePeriod.tahun + 1} — {activePeriod.semester === 1 ? 'Odd Semester' : 'Even Semester'}
            </p>
          ) : (
            <p className="text-muted-foreground">No active academic period.</p>
          )}
        </div>

        <div className="grid gap-4 md:grid-cols-3">
          <Card>
            <CardHeader className="flex flex-row items-center justify-between space-y-0 pb-2">
              <CardTitle className="text-sm">Total Classes</CardTitle>
              <BookOpen className="h-4 w-4 text-muted-foreground" />
            </CardHeader>
            <CardContent>
              <div className="text-2xl">{stats.totalClasses}</div>
              <p className="text-xs text-muted-foreground">Active classes</p>
            </CardContent>
          </Card>
          <Card>
            <CardHeader className="flex flex-row items-center justify-between space-y-0 pb-2">
              <CardTitle className="text-sm">Total Students</CardTitle>
              <Users className="h-4 w-4 text-muted-foreground" />
            </CardHeader>
            <CardContent>
              <div className="text-2xl">{stats.totalStudents}</div>
              <p className="text-xs text-muted-foreground">Enrolled students</p>
            </CardContent>
          </Card>
          <Card>
            <CardHeader className="flex flex-row items-center justify-between space-y-0 pb-2">
              <CardTitle className="text-sm">Average Capacity</CardTitle>
              <Users className="h-4 w-4 text-muted-foreground" />
            </CardHeader>
            <CardContent>
              <div className="text-2xl">{stats.avgCapacity}%</div>
              <p className="text-xs text-muted-foreground">Filled of total capacity</p>
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
                      <Badge variant="secondary">{kelas.matakuliah?.sks} credits</Badge>
                      <Badge variant="outline">{kelas.terisi}/{kelas.kapasitas} students</Badge>
                    </div>
                  </div>
                </CardHeader>
                <CardContent>
                  <div className="grid gap-4 md:grid-cols-3">
                    <div className="flex items-start gap-3">
                      <div className="p-2 bg-primary/10 rounded-lg"><Clock className="h-4 w-4 text-primary" /></div>
                      <div>
                        <p className="text-sm text-muted-foreground">Schedule</p>
                        <p className="text-sm">{dayNames[dayIndex]}</p>
                        <p className="text-sm">
                          {new Date(kelas.jam_mulai).toLocaleTimeString('en-US', { timeZone: 'UTC', hour: '2-digit', minute: '2-digit' })}
                          {' '}–{' '}
                          {new Date(kelas.jam_selesai).toLocaleTimeString('en-US', { timeZone: 'UTC', hour: '2-digit', minute: '2-digit' })}
                        </p>
                      </div>
                    </div>
                    <div className="flex items-start gap-3">
                      <div className="p-2 bg-primary/10 rounded-lg"><MapPin className="h-4 w-4 text-primary" /></div>
                      <div>
                        <p className="text-sm text-muted-foreground">Room</p>
                        <p className="text-sm">{kelas.ruangan?.id_ruangan}</p>
                        <p className="text-sm">{kelas.ruangan?.tempat_ruangan}</p>
                      </div>
                    </div>
                    <div className="flex items-start gap-3">
                      <div className="p-2 bg-primary/10 rounded-lg"><Users className="h-4 w-4 text-primary" /></div>
                      <div>
                        <p className="text-sm text-muted-foreground">Capacity ({capacityPercentage.toFixed(0)}%)</p>
                        <div className="w-full bg-muted rounded-full h-2 my-1.5 overflow-hidden">
                          <div className="h-full bg-primary" style={{ width: `${capacityPercentage}%` }} />
                        </div>
                        <p className="text-sm">{kelas.terisi} of {kelas.kapasitas}</p>
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
                <p className="text-muted-foreground">No classes assigned this semester</p>
              </CardContent>
            </Card>
          )}
        </div>
      </div>
    </>
  );
}

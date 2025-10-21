import { Head } from '@inertiajs/react';
import { Card, CardContent, CardDescription, CardHeader, CardTitle } from '@/components/ui/card';
import { Badge } from '@/components/ui/badge';
import { Calendar, Clock, MapPin, Users } from 'lucide-react';
import { PageProps, Kelas, TahunAkademik } from '@/types';

interface DosenJadwalProps extends PageProps {
  schedule: Kelas[];
  activePeriod: TahunAkademik | null;
}

export default function DosenJadwal({ schedule, activePeriod }: DosenJadwalProps) {
  const dayNames = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];

  const groupedByDay = schedule.reduce((acc, kelas) => {
    const dayIndex = new Date(kelas.jam_mulai).getDay();
    const day = dayNames[dayIndex];

    if (!acc[day]) acc[day] = [];
    acc[day].push(kelas);
    return acc;
  }, {} as Record<string, Kelas[]>);


  const daysOrder = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];

  return (
    <>
      <Head title="Teaching Schedule" />
      <div className="space-y-6">
        <div>
          <h2>Teaching Schedule</h2>
          {activePeriod ? (
            <p className="text-muted-foreground">
              Teaching schedule for {activePeriod.tahun}/{activePeriod.tahun + 1} - Semester {activePeriod.semester === 1 ? 'Odd' : 'Even'}
            </p>
          ) : (
            <p className="text-muted-foreground">No active academic period.</p>
          )}
        </div>

        {schedule.length > 0 ? (
          <div className="grid gap-4">
            {daysOrder.map((day) => {
              const daySchedule = groupedByDay[day] || [];
              if (daySchedule.length === 0) return null;

              const sortedSchedule = [...daySchedule].sort(
                (a, b) => new Date(a.jam_mulai).getTime() - new Date(b.jam_mulai).getTime()
              );

              return (
                <Card key={day}>
                  <CardHeader>
                    <CardTitle className="flex items-center gap-2">
                      <Calendar className="h-5 w-5" />
                      {day}
                    </CardTitle>
                    <CardDescription>{sortedSchedule.length} class{sortedSchedule.length > 1 ? 'es' : ''}</CardDescription>
                  </CardHeader>
                  <CardContent>
                    <div className="space-y-3">
                      {sortedSchedule.map((kelas) => (
                        <div
                          key={kelas.id_kelas}
                          className="flex gap-4 p-4 border rounded-lg hover:bg-accent/50 transition-colors"
                        >
                          <div className="flex flex-col items-center justify-center min-w-[80px] p-3 bg-primary/10 rounded-lg">
                            <Clock className="h-4 w-4 text-primary mb-1" />
                            <p className="text-sm">
                              {new Date(kelas.jam_mulai).toLocaleTimeString('en-US', {
                                timeZone: 'UTC',
                                hour: '2-digit',
                                minute: '2-digit',
                              })}
                            </p>
                            <p className="text-sm">-</p>
                            <p className="text-sm">
                              {new Date(kelas.jam_selesai).toLocaleTimeString('en-US', {
                                timeZone: 'UTC',
                                hour: '2-digit',
                                minute: '2-digit',
                              })}
                            </p>
                          </div>
                          <div className="flex-1 space-y-2">
                            <div>
                              <h4 className="mb-1">{kelas.matakuliah?.nama_mk}</h4>
                              <p className="text-sm text-muted-foreground">{kelas.nama_kelas}</p>
                            </div>
                            <div className="flex flex-wrap gap-3 text-sm text-muted-foreground">
                              <div className="flex items-center gap-1">
                                <MapPin className="h-4 w-4" />
                                <span>
                                  {kelas.ruangan?.id_ruangan} - {kelas.ruangan?.tempat_ruangan}
                                </span>
                              </div>
                              <div className="flex items-center gap-1">
                                <Users className="h-4 w-4" />
                                <span>
                                  {kelas.terisi}/{kelas.kapasitas} Students
                                </span>
                              </div>
                            </div>
                            <Badge variant="secondary">{kelas.matakuliah?.sks} Credits</Badge>
                          </div>
                        </div>
                      ))}
                    </div>
                  </CardContent>
                </Card>
              );
            })}
          </div>
        ) : (
          <Card>
            <CardContent className="py-12 text-center">
              <Calendar className="h-12 w-12 mx-auto text-muted-foreground mb-4" />
              <p className="text-muted-foreground">No classes assigned this semester</p>
            </CardContent>
          </Card>
        )}
      </div>
    </>
  );
}

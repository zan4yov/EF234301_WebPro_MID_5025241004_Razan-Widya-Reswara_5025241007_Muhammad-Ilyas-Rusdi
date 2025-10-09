import { Head } from '@inertiajs/react';
import { Card, CardContent, CardDescription, CardHeader, CardTitle } from '@/components/ui/card';
import { Badge } from '@/components/ui/badge';
import { Calendar, Clock, MapPin, User } from 'lucide-react';
import { PageProps, DetailKrs, TahunAkademik } from '@/types';

interface JadwalPageProps extends PageProps {
  schedule: DetailKrs[];
  activePeriod: TahunAkademik | null;
}

export default function MahasiswaJadwal({ schedule, activePeriod }: JadwalPageProps) {
  const validSchedule = schedule.filter(detail => detail.kelas);

  const groupedByDay = validSchedule.reduce((acc, detail) => {
    const dayIndex = new Date(detail.kelas!.jam_mulai).getDay(); 
    const dayNames = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
    const day = dayNames[dayIndex];
    
    if (!acc[day]) {
      acc[day] = [];
    }
    acc[day].push(detail);
    return acc;
  }, {} as Record<string, DetailKrs[]>);

  const daysOrder = ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu'];

  return (
    <>
      <Head title="Jadwal Kuliah" />
      <div className="space-y-6">
        <div>
          <h2>Jadwal Kuliah</h2>
          {activePeriod ? (
            <p className="text-muted-foreground">
              Jadwal perkuliahan untuk periode {activePeriod.tahun}/{activePeriod.tahun + 1} - Semester {activePeriod.semester === 1 ? 'Ganjil' : 'Genap'}
            </p>
          ) : (
            <p className="text-muted-foreground">Tidak ada periode akademik yang aktif.</p>
          )}
        </div>

        {validSchedule.length > 0 ? (
          <div className="grid gap-4">
            {daysOrder.map((day) => {
              const daySchedule = groupedByDay[day] || [];
              if (daySchedule.length === 0) return null;

              const sortedSchedule = [...daySchedule].sort((a, b) => 
                new Date(a.kelas!.jam_mulai).getTime() - new Date(b.kelas!.jam_mulai).getTime()
              );

              return (
                <Card key={day}>
                  <CardHeader>
                    <CardTitle className="flex items-center gap-2">
                      <Calendar className="h-5 w-5" />
                      {day}
                    </CardTitle>
                    <CardDescription>{sortedSchedule.length} kelas</CardDescription>
                  </CardHeader>
                  <CardContent>
                    <div className="space-y-3">
                      {sortedSchedule.map((detail) => (
                        <div key={detail.id_detail_krs} className="flex gap-4 p-4 border rounded-lg hover:bg-accent/50 transition-colors">
                          <div className="flex flex-col items-center justify-center min-w-[80px] p-3 bg-primary/10 rounded-lg">
                            <Clock className="h-4 w-4 text-primary mb-1" />
                            <p className="text-sm">
                              {new Date(detail.kelas!.jam_mulai).toLocaleTimeString('id-ID', { timeZone: 'UTC', hour: '2-digit', minute: '2-digit' })}
                            </p>
                            <p className="text-sm">-</p>
                            <p className="text-sm">
                              {new Date(detail.kelas!.jam_selesai).toLocaleTimeString('id-ID', { timeZone: 'UTC', hour: '2-digit', minute: '2-digit' })}
                            </p>
                          </div>
                          <div className="flex-1 space-y-2">
                            <div>
                              <h4 className="mb-1">{detail.kelas?.matakuliah?.nama_mk}</h4>
                              <p className="text-sm text-muted-foreground">{detail.kelas?.nama_kelas}</p>
                            </div>
                            <div className="flex flex-wrap gap-3 text-sm text-muted-foreground">
                              <div className="flex items-center gap-1">
                                <User className="h-4 w-4" />
                                <span>{detail.kelas?.dosen?.nama_dosen}</span>
                              </div>
                              <div className="flex items-center gap-1">
                                <MapPin className="h-4 w-4" />
                                <span>{detail.kelas?.ruangan?.tempat_ruangan}</span>
                              </div>
                            </div>
                            <Badge variant="secondary">{detail.kelas?.matakuliah?.sks} SKS</Badge>
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
              <p className="text-muted-foreground">
                Belum ada jadwal kuliah. Silakan isi dan ajukan KRS terlebih dahulu.
              </p>
            </CardContent>
          </Card>
        )}
      </div>
    </>
  );
}
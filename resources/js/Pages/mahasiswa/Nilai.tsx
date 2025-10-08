import { Head, router } from '@inertiajs/react';
import { Card, CardContent, CardDescription, CardHeader, CardTitle } from '@/components/ui/card';
import { Badge } from '@/components/ui/badge';
import { Table, TableBody, TableCell, TableHead, TableHeader, TableRow } from '@/components/ui/table';
import { Select, SelectContent, SelectItem, SelectTrigger, SelectValue } from '@/components/ui/select';
import { BookOpen, TrendingUp } from 'lucide-react';
import { PageProps, DetailKrs } from '@/types';
import { route } from 'ziggy-js'

interface NilaiPageProps extends PageProps {
    grades: DetailKrs[];
    ipk: number;
    ips: number;
    availableSemesters: number[];
    selectedSemester: string;
}

export default function MahasiswaNilai({ grades, ipk, ips, availableSemesters, selectedSemester }: NilaiPageProps) {

  const handleSemesterChange = (semester: string) => {
    router.get(route('mahasiswa.nilai'), { semester }, {
      preserveState: true,
      preserveScroll: true,
    });
  };

  const getNilaiBadge = (nilai: string | null) => {
    if (!nilai || nilai === '-') return <Badge variant="outline">Belum Ada</Badge>;
    if (['A', 'AB'].includes(nilai)) return <Badge className="bg-green-600 text-white">{nilai}</Badge>;
    if (['B', 'BC', 'C'].includes(nilai)) return <Badge className="bg-yellow-600 text-white">{nilai}</Badge>;
    if (['D', 'E'].includes(nilai)) return <Badge className="bg-red-600 text-white">{nilai}</Badge>;
    return <Badge variant="destructive">{nilai}</Badge>;
  };

  const gradeToValue = (grade: string | null): number => {
      const map: { [key: string]: number } = {
        'A': 4.0, 'AB': 3.5, 'B': 3.0, 'BC': 2.5, 'C': 2.0, 'D': 1.0, 'E': 0.0,
      };
      return grade ? map[grade] || 0.0 : 0.0;
  };

  return (
    <>
      <Head title="Nilai Akademik" />
      <div className="space-y-6">
        <div className="flex justify-between items-start">
          <div>
            <h2>Nilai Akademik</h2>
            <p className="text-muted-foreground">Lihat nilai dan indeks prestasi Anda</p>
          </div>
          <Select value={selectedSemester} onValueChange={handleSemesterChange}>
            <SelectTrigger className="w-[200px] border-gray-300"><SelectValue /></SelectTrigger>
            <SelectContent>
              <SelectItem value="all">Semua Semester</SelectItem>
              {availableSemesters.map(semester => (
                  <SelectItem key={semester} value={String(semester)}>Semester {semester}</SelectItem>
              ))}
            </SelectContent>
          </Select>
        </div>

        <div className="grid gap-4 md:grid-cols-2">
          <Card>
            <CardHeader className="flex flex-row items-center justify-between space-y-0 pb-2">
              <CardTitle className="text-sm">IPK (Indeks Prestasi Kumulatif)</CardTitle>
              <TrendingUp className="h-4 w-4 text-muted-foreground" />
            </CardHeader>
            <CardContent>
              <div className="text-3xl">{ipk.toFixed(2)}</div>
              <p className="text-xs text-muted-foreground mt-1">Dari skala 4.00</p>
            </CardContent>
          </Card>

          <Card>
            <CardHeader className="flex flex-row items-center justify-between space-y-0 pb-2">
              <CardTitle className="text-sm">IPS (Indeks Prestasi Semester)</CardTitle>
              <BookOpen className="h-4 w-4 text-muted-foreground" />
            </CardHeader>
            <CardContent>
              <div className="text-3xl">{ips.toFixed(2)}</div>
              <p className="text-xs text-muted-foreground mt-1">
                {selectedSemester === 'all' ? 'Rata-rata semua semester' : `Semester ${selectedSemester}`}
              </p>
            </CardContent>
          </Card>
        </div>

        <Card>
          <CardHeader>
            <CardTitle>Daftar Nilai</CardTitle>
            <CardDescription>
              {selectedSemester === 'all' ? 'Menampilkan semua semester' : `Menampilkan semester ${selectedSemester}`}
            </CardDescription>
          </CardHeader>
          <CardContent>
            <div className="rounded-md border">
              <Table>
                <TableHeader>
                  <TableRow>
                    <TableHead>Semester</TableHead>
                    <TableHead>Kode MK</TableHead>
                    <TableHead>Nama Mata Kuliah</TableHead>
                    <TableHead>SKS</TableHead>
                    <TableHead>Nilai Huruf</TableHead>
                    <TableHead>Nilai Angka</TableHead>
                  </TableRow>
                </TableHeader>
                <TableBody>
                  {(() => {
                    const approvedGrades = grades.filter(g => g.krs?.status_persetujuan === 1);
                    if (approvedGrades.length === 0) {
                      return (
                        <TableRow>
                          <TableCell colSpan={6} className="text-center">
                            {grades.length === 0
                              ? 'Tidak ada nilai untuk ditampilkan.'
                              : 'Nilai belum tersedia karena KRS untuk semester ini belum disetujui.'}
                          </TableCell>
                        </TableRow>
                      );
                    }
                    return approvedGrades.map(grade => (
                      <TableRow key={grade.id_detail_krs}>
                        <TableCell>{grade.krs?.semester ?? grade.kelas?.tahun_akademik?.semester ?? '-'}</TableCell>
                        <TableCell>{grade.kelas?.matakuliah?.kode_mk}</TableCell>
                        <TableCell>{grade.kelas?.matakuliah?.nama_mk}</TableCell>
                        <TableCell>{grade.kelas?.matakuliah?.sks}</TableCell>
                        <TableCell>{getNilaiBadge(grade.nilai_huruf)}</TableCell>
                        <TableCell>{grade.nilai_huruf ? gradeToValue(grade.nilai_huruf).toFixed(2) : '-'}</TableCell>
                      </TableRow>
                    ));
                  })()}
                </TableBody>
              </Table>
            </div>
          </CardContent>
        </Card>
        <Card>
          <CardHeader>
            <CardTitle>Keterangan Nilai</CardTitle>
          </CardHeader>
          <CardContent>
            <div className="grid grid-cols-2 md:grid-cols-4 gap-4 text-sm">
              <div>
                <Badge className="bg-green-600 mb-1">A</Badge>
                <p className="text-muted-foreground">4.00 (86-100)</p>
              </div>
              <div>
                <Badge className="bg-green-600 mb-1">AB</Badge>
                <p className="text-muted-foreground">3.50 (81-85)</p>
              </div>
              <div>
                <Badge className="bg-yellow-600 mb-1">B</Badge>
                <p className="text-muted-foreground">3.00 (76-80)</p>
              </div>
              <div>
                <Badge className="bg-yellow-600 mb-1">BC</Badge>
                <p className="text-muted-foreground">2.50 (66-75)</p>
              </div>
              <div>
                <Badge className="bg-yellow-600 mb-1">C</Badge>
                <p className="text-muted-foreground">2.00 (56-65)</p>
              </div>
              <div>
                <Badge className="bg-red-600 mb-1">D</Badge>
                <p className="text-muted-foreground">1.00 (41-55)</p>
              </div>
              <div>
                <Badge className="bg-red-600 mb-1">E</Badge>
                <p className="text-muted-foreground">0.00 (0-40)</p>
              </div>
            </div>
          </CardContent>
        </Card>
      </div>
    </>
  );
}
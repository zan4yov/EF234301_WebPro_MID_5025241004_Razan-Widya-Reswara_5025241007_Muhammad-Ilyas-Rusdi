<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MatakuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     * This seeder contains mock data for all study programs (prodi) at
     * Institut Teknologi Sepuluh Nopember (ITS).
     * 
     * Total: 850 courses across 34 study programs
     * - 25 courses per program (mix of mandatory and elective courses)
     * - Covers all 6 faculties: FSAD, FTIRS, FTSPK, FTK, FTEIC, FDKBD
     *
     * @return void
     */
    public function run()
    {
        $matakuliah = [

            // Fisika (5001) - 25 courses
            [
                'nama_mk' => 'Mekanika Kelas Orbital',
                'sks' => 3,
                'minimal_semester' => 1,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5001',
                'deskripsi_mk' => 'Pengenalan prinsip mekanika klasik, gaya, momentum, dan kerja-energi dengan fokus pada sistem partikel serta pembuatan model sederhana di bawah kondisi relativistik rendah.',
            ],
            [
                'nama_mk' => 'Advanced Electromagnetism',
                'sks' => 4,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5001',
                'deskripsi_mk' => 'Studi lanjutan medan elektromagnetik, persamaan Maxwell, propagasi gelombang, dan aplikasi dalam perangkat optik serta material berfungsi sebagai panduan tugas laboratorio.',
            ],
            [
                'nama_mk' => 'Termodinamika dan Sistem Terbuka',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5001',
                'deskripsi_mk' => 'Teori termodinamika klasik, siklus panas, entropi, dan aliran energi pada sistem terbuka dengan analisis keseimbangan massa dan energi.',
            ],
            [
                'nama_mk' => 'Fisika Material dan Nanostruktur',
                'sks' => 3,
                'minimal_semester' => 3,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5001',
                'deskripsi_mk' => 'Pengenalan sifat fisik material, struktur kristal, defek, serta aplikasi nanostruktur dalam perangkat teknologi modern; fokus eksperimen dan simulasi.',
            ],
            [
                'nama_mk' => 'Fisikawan Eksperimental: Metode dan Perancangan Percobaan',
                'sks' => 2,
                'minimal_semester' => 4,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5001',
                'deskripsi_mk' => 'Pengantar metodologi eksperimen fisika, rancangan percobaan, analisis data, dan etika penelitian dengan peralatan laboratorium umum.',
            ],
            [
                'nama_mk' => 'Fisika Dasar I',
                'sks' => 4,
                'minimal_semester' => 1,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5001',
                'deskripsi_mk' => 'Pengantar konsep-konsep fisika mekanika, kinematika, dan konsep energi untuk mahasiswa baru.',
            ],
            [
                'nama_mk' => 'Algoritma dan Struktur Data',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5001',
                'deskripsi_mk' => 'Pemahaman algoritma dasar, analisis kompleksitas, dan struktur data pokok seperti array, linked list, stack, queue, dan pohon.',
            ],
            [
                'nama_mk' => 'Fizki Komputasi Klasik',
                'sks' => 3,
                'minimal_semester' => 3,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5001',
                'deskripsi_mk' => 'Pengantar konsep komputasi pada fisika, simulasi numerik, dan pemodelan matematis untuk masalah fisika.',
            ],
            [
                'nama_mk' => 'Física Modern & Nanoteknologi',
                'sks' => 2,
                'minimal_semester' => 4,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5001',
                'deskripsi_mk' => 'Sejarah singkat fisika modern, mekanika kuantum dasar, dan peran nanoteknologi dalam riset fisika.',
            ],
            [
                'nama_mk' => 'Termodinamika dan Fisikawan Eksperimen',
                'sks' => 4,
                'minimal_semester' => 5,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5001',
                'deskripsi_mk' => 'Hukum termodinamika, siklus termal, dan pendekatan eksperimen untuk pengukuran sifat fisik materi.',
            ],
            [
                'nama_mk' => 'Fisika Dasar I (Classical Physics)',
                'sks' => 4,
                'minimal_semester' => 1,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5001',
                'deskripsi_mk' => 'Pengantar konsep fisika klasik termasuk mekanika, gerak lurus dan gerak melengkung, hukum Newton, serta penggunaan kinematika untuk memahami pergerakan benda dalam berbagai sistem.',
            ],
            [
                'nama_mk' => 'Fisika Modern I (Modern Physics I)',
                'sks' => 3,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5001',
                'deskripsi_mk' => 'Mengenalkan konsep relativitas khusus, kuantum dasar, dan foton; membahas eksperimen yang melandasi teori-teori fisika modern serta aplikasinya pada masalah fisika material dan teknologi.',
            ],
            [
                'nama_mk' => 'Elektronika dan Instrumentasi Eksperimental',
                'sks' => 3,
                'minimal_semester' => 4,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5001',
                'deskripsi_mk' => 'Pengenalan komponen elektronika dasar, sensor, dan teknik instrumentasi untuk pengukuran fisika laboratorium, termasuk kalibrasi, akurasi, serta analisis data eksperimen.',
            ],
            [
                'nama_mk' => 'Fisikawan Eksperimental Lanjutan',
                'sks' => 4,
                'minimal_semester' => 6,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5001',
                'deskripsi_mk' => 'Metode eksperimen tingkat lanjut, desain eksperimen, pemodelan fisika material, serta evaluasi kesalahan sistematis dan statistik dalam pengujian hipotesis.',
            ],
            [
                'nama_mk' => 'Matematika Fisika II: Analisis Lanjutan',
                'sks' => 3,
                'minimal_semester' => 5,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5001',
                'deskripsi_mk' => 'Pembelajaran teknik analisis matematika yang relevan untuk fisika: transformasi Fourier, integral secara kompleks, dan solusi persamaan diferensial parsial yang sering muncul dalam teori fisika.',
            ],
            [
                'nama_mk' => 'Fizika Dasar I (Fundamentals of Physics I)',
                'sks' => 4,
                'minimal_semester' => 1,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5001',
                'deskripsi_mk' => 'Pengantar konsep dasar fisika klasik seperti mekanika, gelombang, dan termodinamika untuk memahami prinsip-prinsip umum yang relevan bagi program Fisika ITS.',
            ],
            [
                'nama_mk' => 'Fizika Dasar II (Fundamentals of Physics II)',
                'sks' => 4,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5001',
                'deskripsi_mk' => 'Lanjutan Fizika Dasar mencakup elektromagnetisme, optik, dan fisika modern dengan fokus pada penerapan konsep dalam konteks penelitian.',
            ],
            [
                'nama_mk' => 'Elektronika Analog dan Instrumentasi',
                'sks' => 3,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5001',
                'deskripsi_mk' => 'Mempelajari prinsip elektronika analog, komponen dasar, serta teknik instrumenasi untuk pengukuran fisika eksperimen.',
            ],
            [
                'nama_mk' => 'Elektronika Digital dan Pengolahan Sinyal',
                'sks' => 3,
                'minimal_semester' => 3,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5001',
                'deskripsi_mk' => 'Pengenalan logika digital, perangkat keras dasar, serta teknik pengolahan sinyal untuk eksperimen fisika terapan.',
            ],
            [
                'nama_mk' => 'Kinematika Kuantum untuk Pemula',
                'sks' => 2,
                'minimal_semester' => 4,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5001',
                'deskripsi_mk' => 'Pengenalan konsep kinematika kuantum, superposisi, dan pengukuran dalam fisika modern sebagai persiapan ke mata kuliah kuantum lebih lanjut.',
            ],
            [
                'nama_mk' => 'Fisika Dasar I',
                'sks' => 3,
                'minimal_semester' => 1,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5001',
                'deskripsi_mk' => 'Pengantar konsep fisika dasar gaya, gerak, energi, gelombang, dan sifat materi, dengan fokus pada pemahaman konsep melalui eksperimen sederhana.',
            ],
            [
                'nama_mk' => 'Kalkulus Fisika II',
                'sks' => 4,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5001',
                'deskripsi_mk' => 'Penerapan kalkulus untuk masalah fisika lanjutan seperti vektor lapangan, derivatif parsial, integral multivariabel, dan aplikasi fisika teoretis.',
            ],
            [
                'nama_mk' => 'Aljabar Linier untuk Fisika',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5001',
                'deskripsi_mk' => 'Pembelajaran konsep matriks, vektor, basis, diagonalization, transformasi serta aplikasinya pada mekanika serta fisika kuantum sederhana.',
            ],
            [
                'nama_mk' => 'Mekanika Kelas | Ekuivalen Konservasi',
                'sks' => 3,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5001',
                'deskripsi_mk' => 'Sistem partikel, hukum gerak Newton, analisis energi, momentum, serta prinsip konservasi dalam berbagai sistem fisis.',
            ],
            [
                'nama_mk' => 'Fisikawan Praktikum: Eksperimen Modern',
                'sks' => 2,
                'minimal_semester' => 4,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5001',
                'deskripsi_mk' => 'Praktikum laboratorium untuk mengembangkan keterampilan eksperimen modern, pengukuran akurat, dan analisis data fisika menggunakan alat-alat canggih.',
            ],

            // Matematika (5002) - 25 courses
            [
                'nama_mk' => 'Aljabar Linear',
                'sks' => 3,
                'minimal_semester' => 1,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5002',
                'deskripsi_mk' => 'Pengenalan ruang vektor, operasi linear, matriks, determinan, dan sistem persamaan linear serta aplikasi pada pemodelan.',
            ],
            [
                'nama_mk' => 'Calculus II for Engineers',
                'sks' => 4,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5002',
                'deskripsi_mk' => 'Lanjutkan kalkulus multivariabel: integral tak tentu, rujukan fungsi vektor, teorema Green, Stokes dan aplikasi fisika teknik.',
            ],
            [
                'nama_mk' => 'Statistika Dasar',
                'sks' => 3,
                'minimal_semester' => 1,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5002',
                'deskripsi_mk' => 'Konsep statistika deskriptif, peluang, sebaran informasi, distribusi probabilitas, dan pengantar inferensi statistik.',
            ],
            [
                'nama_mk' => 'Matematika Numerik',
                'sks' => 3,
                'minimal_semester' => 3,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5002',
                'deskripsi_mk' => 'Metode numerik untuk penyelesaian persamaan, interpolasi, verifikasi kestabilan algoritma, serta implementasi komputasi sederhana.',
            ],
            [
                'nama_mk' => 'Analisis Numerik untuk Pemodelan Fisika',
                'sks' => 4,
                'minimal_semester' => 4,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5002',
                'deskripsi_mk' => 'Analisis kesalahan numerik, metode iteratif, eksplorasi model fisika dalam konteks komputasi ilmiah dan rekayasa.',
            ],
            [
                'nama_mk' => 'Aljabar Linear dan Aplikasi',
                'sks' => 3,
                'minimal_semester' => 1,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5002',
                'deskripsi_mk' => 'Matakuliah pengantar tentang ruang vektor, matriks, determinan, dan transformasi linear; membahas solusi sistem persamaan linear serta aplikasi pada graf dan pemodelan data.',
            ],
            [
                'nama_mk' => 'Fundamentals of Computer Networks',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5002',
                'deskripsi_mk' => 'Pengenalan konsep dasar jaringan komputer, arsitektur OSI, protokol TCP/IP, alamat IP, routing, serta praktik konfigurasi jaringan lokal.',
            ],
            [
                'nama_mk' => 'Kalkulus II untuk Ilmu Komputer',
                'sks' => 4,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5002',
                'deskripsi_mk' => 'Lanjutan kalkulus diferensial dan integral dengan fokus pada aplikasi pada fungsi multivariat, deret tak hingga, dan analisis rangkaian periodik.',
            ],
            [
                'nama_mk' => 'Pemrograman Berorientasi Objek',
                'sks' => 3,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5002',
                'deskripsi_mk' => 'Konsep OOP, kelas, objek, pewarisan, polimorfisme, serta desain kode yang bersih menggunakan bahasa pemrograman modern.',
            ],
            [
                'nama_mk' => 'Statistik Untuk Ilmu Komputer',
                'sks' => 2,
                'minimal_semester' => 4,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5002',
                'deskripsi_mk' => 'Pengantar statistik deskriptif dan inferensial dengan fokus pada analisis data komputer, ukuran sebaran, uji hipotesis dasar, serta eksperimen terkontrol.',
            ],
            [
                'nama_mk' => 'Aljabar Linear untuk Matematika',
                'sks' => 3,
                'minimal_semester' => 1,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5002',
                'deskripsi_mk' => 'Pengenalan ruang vektor, matriks, determinan, eigen, dan transformasi linear serta aplikasi pada pemodelan matematika.',
            ],
            [
                'nama_mk' => 'Calculus II for Engineers and Mathematicians',
                'sks' => 4,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5002',
                'deskripsi_mk' => 'Kalkulus lanjutan: turunan parsial, integral ganda, teorema Green–Stokes, dan aplikasi fisika terapan dalam analisis vektor.',
            ],
            [
                'nama_mk' => 'Teori Bilangan dan Aplikasi',
                'sks' => 3,
                'minimal_semester' => 3,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5002',
                'deskripsi_mk' => 'Pelajaran tentang bilangan bulat, bilangan prima, faktorisasi, kongruensi, serta aplikasi kriptografi dan algoritma dasar.',
            ],
            [
                'nama_mk' => 'Statistika untuk Matematika dan Teknologi',
                'sks' => 3,
                'minimal_semester' => 3,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5002',
                'deskripsi_mk' => 'Pengantar statistik inferensial, distribusi probabilitas, estimasi parameter, uji hipotesis, serta analisis data menggunakan software.',
            ],
            [
                'nama_mk' => 'Pemodelan Matematika Numerik',
                'sks' => 4,
                'minimal_semester' => 4,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5002',
                'deskripsi_mk' => 'Metode numerik untuk pemodelan matematis: penyelesaian persamaan diferensial, iterasi, stabilitas numerik, dan evaluasi kesesuaian model dengan data.',
            ],
            [
                'nama_mk' => 'Aljabar Linear',
                'sks' => 3,
                'minimal_semester' => 1,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5002',
                'deskripsi_mk' => 'Pengenalan konsep vektor ruang, matriks, determinan, eigenvalue, dan transformasi linear serta aplikasi dasarnya.',
            ],
            [
                'nama_mk' => 'Discrete Mathematics',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5002',
                'deskripsi_mk' => 'logika, himpunan, fungsi, relasi, graf, pohon, kombinatorika, dan prinsip penghitungan dalam konteks pemrograman dan algoritma.',
            ],
            [
                'nama_mk' => 'Numerical Methods',
                'sks' => 4,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5002',
                'deskripsi_mk' => 'Metode numerik untuk penyelesaian persamaan diferensial dan aljabar linear, termasuk estimasi error dan stabilitas. Aplikasi pada perhitungan ilmiah.',
            ],
            [
                'nama_mk' => 'Statistika dan Probabilitas',
                'sks' => 3,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5002',
                'deskripsi_mk' => 'Konsep probabilitas, variabel acak, distribusi, estimasi parameter, uji hipotesis, dan analisis data menggunakan perangkat lunak statistik.',
            ],
            [
                'nama_mk' => 'Algorithm Design and Analysis',
                'sks' => 4,
                'minimal_semester' => 4,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5002',
                'deskripsi_mk' => 'Transisi dari spesifikasi masalah ke desain algoritma, kompleksitas waktu dan ruang, serta teknik analisis kebenaran dan optimalitas.',
            ],
            [
                'nama_mk' => 'Aljabar Linear',
                'sks' => 3,
                'minimal_semester' => 1,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5002',
                'deskripsi_mk' => 'Pengenalan struktur ruang vektor, transformasi linear, matriks, dan sistem persamaan linear untuk aplikasi teknik dan ilmu komputer.',
            ],
            [
                'nama_mk' => 'Fundamentals of Electrical Circuits',
                'sks' => 4,
                'minimal_semester' => 1,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5002',
                'deskripsi_mk' => 'Dasar-dasar rangkaian listrik, hukum Kirchhoff, analisis rangkaian DC dan AC, serta konsep impedansi dan respons frekuensi.',
            ],
            [
                'nama_mk' => 'Pengantar Pemrograman Komputer',
                'sks' => 3,
                'minimal_semester' => 1,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5002',
                'deskripsi_mk' => 'Logika pemrograman, struktur data dasar, dan pengenalan bahasa pemrograman seperti Python untuk penyelesaian masalah teknik.',
            ],
            [
                'nama_mk' => 'Matematika Diskrit',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5002',
                'deskripsi_mk' => 'Logika, himpunan, relasi, fungsi, graf, dan kombinatorika sebagai fondasi teori komputasi.',
            ],
            [
                'nama_mk' => 'Pemrosesan Sinyal Digital',
                'sks' => 3,
                'minimal_semester' => 3,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5002',
                'deskripsi_mk' => 'Teori dan praktik pemrosesan sinyal digital, filter, transformasi Fourier diskrit, dan pengolahan sinyal aplicaciones teknik kelistrikan.',
            ],

            // Statistika (5003) - 25 courses
            [
                'nama_mk' => 'Statistika Dasar',
                'sks' => 3,
                'minimal_semester' => 1,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5003',
                'deskripsi_mk' => 'Pengantar konsep statistika deskriptif, probabilitas dasar, dan penerapan pada data nyata. Mahasiswa akan mempelajari cara menyusun data, membuat grafik, serta menghitung ukuran pusat dan sebaran.',
            ],
            [
                'nama_mk' => 'Statistika Probabilitas Lanjut',
                'sks' => 4,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5003',
                'deskripsi_mk' => 'Pendalaman probabilitas, varians, distribusi peluang umum, serta teori peluang untuk analisis data kompleks dan model probabilistik.',
            ],
            [
                'nama_mk' => 'Metode Analisis Data R',
                'sks' => 3,
                'minimal_semester' => 3,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5003',
                'deskripsi_mk' => 'Pengenalan penggunaan bahasa pemrograman R untuk analisis data, manipulasi dataset, visualisasi, dan penerapan teknik statistik inferensial.',
            ],
            [
                'nama_mk' => 'Statistika Multivariat',
                'sks' => 3,
                'minimal_semester' => 4,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5003',
                'deskripsi_mk' => 'Kajian teknik multivariat seperti regresi berganda, analisis komponen utama, klaster, dan analisis diskriminan untuk data berdimensi tinggi.',
            ],
            [
                'nama_mk' => 'Aplikasi Statistik untuk Penelitian',
                'sks' => 2,
                'minimal_semester' => 5,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5003',
                'deskripsi_mk' => 'Pengaplikasian statistik pada desain penelitian, perencanaan eksperimen, pengujian hipotesis, serta interpretasi hasil analisis data.',
            ],
            [
                'nama_mk' => 'Statistika Dasar',
                'sks' => 3,
                'minimal_semester' => 1,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5003',
                'deskripsi_mk' => 'Pengenalan konsep statistika dasar, pengumpulan data, pengukuran pusat dan sebaran, serta penerapan analisis deskriptif untuk data penelitian.',
            ],
            [
                'nama_mk' => 'Statistika Probabilitas',
                'sks' => 4,
                'minimal_semester' => 1,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5003',
                'deskripsi_mk' => 'Teori probabilitas, distribusi peluang, dan peluang kejadian sederhana serta aplikasinya dalam inferensi statistik.',
            ],
            [
                'nama_mk' => 'Metode Riset Statistik',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5003',
                'deskripsi_mk' => 'Strategi perancangan riset, pemilihan desain penelitian, serta langkah-langkah analisis data untuk riset statistik.',
            ],
            [
                'nama_mk' => 'Analisis Regresi dan Korelasi',
                'sks' => 3,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5003',
                'deskripsi_mk' => 'Pemodelan hubungan antar variabel menggunakan regresi linier, regresi logistik, dan analisis korelasi untuk interpretasi hasil.',
            ],
            [
                'nama_mk' => 'Forecasting and Time Series',
                'sks' => 4,
                'minimal_semester' => 4,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5003',
                'deskripsi_mk' => 'Teknik peramalan menggunakan deret waktu, smoothing, ARIMA, dan evaluasi model untuk prediksi jangka pendek maupun panjang.',
            ],
            [
                'nama_mk' => 'Statistika Dasar',
                'sks' => 3,
                'minimal_semester' => 1,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5003',
                'deskripsi_mk' => 'Pengantar konsep probabilitas, distribusi, dan teknik analisis data dasar untuk mahasiswa program Statistika.',
            ],
            [
                'nama_mk' => 'Statistik Inferensial',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5003',
                'deskripsi_mk' => ' Teknik estimasi parameter, uji hipotesis, dan regresi sederhana untuk mengambil kesimpulan tentang populasi.',
            ],
            [
                'nama_mk' => 'Matematika Statistik Multivariat',
                'sks' => 4,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5003',
                'deskripsi_mk' => 'Pengenalan metode multivariat seperti analisis komponen utama, faktor, dan clustering untuk data berdimensi tinggi.',
            ],
            [
                'nama_mk' => 'Metode Pemodelan Data',
                'sks' => 3,
                'minimal_semester' => 3,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5003',
                'deskripsi_mk' => ' Pendekatan pemodelan data menggunakan stochastic processes, time series, dan model prediktif untuk peramalan.',
            ],
            [
                'nama_mk' => 'Ekonomi Statistik dan Analisis Data',
                'sks' => 3,
                'minimal_semester' => 4,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5003',
                'deskripsi_mk' => ' Analisis data ekonomi dengan fokus pada variabel makroekonomi, indikator keuangan, dan interpretasi hasil analisis statistika.',
            ],
            [
                'nama_mk' => 'Statistika Dasar',
                'sks' => 3,
                'minimal_semester' => 1,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5003',
                'deskripsi_mk' => 'Pengenalan konsep statistika dasar, distribusi peluang, dan inferensi sederhana untuk menerapkan analisis data pada masalah nyata.',
            ],
            [
                'nama_mk' => 'Probabilitas dan Statistik Matematika',
                'sks' => 4,
                'minimal_semester' => 1,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5003',
                'deskripsi_mk' => 'Mempelajari teori peluang, variabel acak, teorema limit, serta pengantar statistik matematika untuk analisis data komplek.',
            ],
            [
                'nama_mk' => 'Regresi dan Analisis Data',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5003',
                'deskripsi_mk' => 'Metode regresi linier dan non-linier, seleksi variabel, serta teknik evaluasi model untuk datasets nyata.',
            ],
            [
                'nama_mk' => 'Statistika Multivariat',
                'sks' => 3,
                'minimal_semester' => 3,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5003',
                'deskripsi_mk' => 'Pendekatan multivariat untuk analisis data besar: PCA, klastering, dan analisis komponen utama untuk eksplorasi data.',
            ],
            [
                'nama_mk' => 'Metode Riset Statistik',
                'sks' => 2,
                'minimal_semester' => 4,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5003',
                'deskripsi_mk' => 'Metodologi riset kuantitatif dan kualitatif, desain eksperimen, serta etika penelitian dalam statistika.',
            ],
            [
                'nama_mk' => 'Statistika Dasar',
                'sks' => 3,
                'minimal_semester' => 1,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5003',
                'deskripsi_mk' => 'Pengantar konsep statistika, distribusi probabilitas dasar, ukuran pemusatan dan penyebaran, serta penerapan pada data nyata.',
            ],
            [
                'nama_mk' => 'Statistika Probabilitas Lanjut',
                'sks' => 4,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5003',
                'deskripsi_mk' => 'Pengolahan probabilitas lebih lanjut, teorema limit, variansi, korelasi, regresi sederhana hingga penggunaan simulasi untuk analisis data.',
            ],
            [
                'nama_mk' => 'Metode Riset Statistik',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5003',
                'deskripsi_mk' => 'Perancangan studi, pengumpulan data, sampling, etika riset, dan analisis data menggunakan alat statistik modern.',
            ],
            [
                'nama_mk' => 'Analisis Data dengan R',
                'sks' => 3,
                'minimal_semester' => 3,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5003',
                'deskripsi_mk' => ' Pemodelan data, visualisasi, dan teknik analisis menggunakan bahasa pemrograman R, termasuk tidyverse.',
            ],
            [
                'nama_mk' => 'Statistika Multivariat',
                'sks' => 3,
                'minimal_semester' => 4,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5003',
                'deskripsi_mk' => 'Analisis multivariat seperti PCA, klastering, dan analisis faktor untuk memahami pola data kompleks.',
            ],

            // Kimia (5004) - 25 courses
            [
                'nama_mk' => 'Analytical Chemistry for Chemical Engineering',
                'sks' => 3,
                'minimal_semester' => 1,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5004',
                'deskripsi_mk' => 'Analisis kimia dasar dengan fokus pada metode kualitas sampel, penentuan unsur, dan interpretasi data untuk proses kimia.',
            ],
            [
                'nama_mk' => 'Physical Chemistry I',
                'sks' => 4,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5004',
                'deskripsi_mk' => 'Kimia fisik dasar mencakup termodinamika, kinetika, serta sifat fasa dan liminal antara zat pada kondisi standar.',
            ],
            [
                'nama_mk' => 'Chemical Reactor Design',
                'sks' => 3,
                'minimal_semester' => 4,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5004',
                'deskripsi_mk' => 'Perancangan dan analisis reaktor kimia untuk operasi batch dan aliran kontinyu, termasuk efisiensi, keamanan, dan kendali proses.',
            ],
            [
                'nama_mk' => 'Mass Transfer and Separation Processes',
                'sks' => 3,
                'minimal_semester' => 5,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5004',
                'deskripsi_mk' => 'Pemisahan zat terlarut melalui gaya perpindahan massa, ekstraksi, distilasi, dan membran dengan studi kasus industri.',
            ],
            [
                'nama_mk' => 'Chemical Engineering Laboratory I',
                'sks' => 2,
                'minimal_semester' => 2,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5004',
                'deskripsi_mk' => 'Laboratorium praktikum kimia rekayasa untuk menguatkan konsep dasar eksperimen, pengukuran, serta analisis data dalam konteks proses kimia.',
            ],
            [
                'nama_mk' => 'Kimia Analitik Lanjutan',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5004',
                'deskripsi_mk' => 'Mata kuliah ini membahas teknik analisis kimia analitik modern, termasuk pemisahan, identifikasi, dan perpotongan data untuk menentukan komposisi sampel secara akurat.',
            ],
            [
                'nama_mk' => 'Kimia Organik Dasar II',
                'sks' => 4,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5004',
                'deskripsi_mk' => 'Lanjutan kimia organik fokus pada sintesis, reaksi kimia utama, mekanisme, dan penggunaan alat untuk karakterisasi senyawa organik kompleks.',
            ],
            [
                'nama_mk' => 'Kimia Fisika untuk Teknik Kimia',
                'sks' => 3,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5004',
                'deskripsi_mk' => 'Pengenalan konsep termodinamika, kinetika fase, dan sifat fisik zat untuk mendukung perancangan proses kimia dan pengolahan material.',
            ],
            [
                'nama_mk' => 'Laboratorium Kimia Dasar',
                'sks' => 2,
                'minimal_semester' => 1,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5004',
                'deskripsi_mk' => 'Praktikum dasar kimia yang meliputi keselamatan laboratorium, teknik penimbangan, pengukuran, serta dokumentasi eksperimen secara sistematis.',
            ],
            [
                'nama_mk' => 'Pengantar Kimia Material',
                'sks' => 3,
                'minimal_semester' => 4,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5004',
                'deskripsi_mk' => 'Mengenalkan konsep kimia material, struktur material, sifat-sifat materiales, serta aplikasi kimia dalam pengembangan material fungsional.',
            ],
            [
                'nama_mk' => 'Analisis Kimia Anorganik',
                'sks' => 3,
                'minimal_semester' => 1,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5004',
                'deskripsi_mk' => 'Pengantar konsep kimia analitik untuk identifikasi dan penyusunan komposisi senyawa anorganik menggunakan prinsip stoikiometri, struktur, dan sifat fisik-kimia utama.',
            ],
            [
                'nama_mk' => 'Kimia Fisika Dasar I',
                'sks' => 4,
                'minimal_semester' => 1,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5004',
                'deskripsi_mk' => 'Pendalaman hukum dasar kimia fisik seperti kinetika, termodinamika, dan keseimbangan fase dengan fokus pada aplikasi pada sistem kimia-lab.',
            ],
            [
                'nama_mk' => 'Materials Chemistry and Structure',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5004',
                'deskripsi_mk' => 'Mempelajari sifat material melalui hubungan struktur kristal, ikatan, dan perilaku bahan pada suhu dan tekanan berbeda serta teknik characterization dasar.',
            ],
            [
                'nama_mk' => 'Analitik Kimia Lanjut',
                'sks' => 3,
                'minimal_semester' => 3,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5004',
                'deskripsi_mk' => 'Metode analitik canggih untuk penentuan kuantitatif senyawa kimia dalam campuran kompleks, termasuk validasi metode dan error analysis.',
            ],
            [
                'nama_mk' => 'Kimia Lingkungan',
                'sks' => 2,
                'minimal_semester' => 4,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5004',
                'deskripsi_mk' => 'Studi dampak kimia terhadap lingkungan, dengan fokus pada polutan utama, deteksi, dan teknik mitigasi serta kebijakan lingkungan.',
            ],
            [
                'nama_mk' => 'Kimia Umum I',
                'sks' => 3,
                'minimal_semester' => 1,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5004',
                'deskripsi_mk' => 'Pengantar kimia fisik dan konsep dasar kimia anorganik yang relevan dengan hukum kekekalan energi, struktur molekul, dan reaksi kimia dasar.',
            ],
            [
                'nama_mk' => 'Analisis Kimia dan Instrumentasi',
                'sks' => 4,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5004',
                'deskripsi_mk' => 'Mempelajari teknik analisis kimia menggunakan instrumen modern (spectroscopy, kromatografi) serta interpretasi data analitik.',
            ],
            [
                'nama_mk' => 'Termodinamika Kimia',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5004',
                'deskripsi_mk' => 'Pemaparan prinsip termodinamika dalam kimia, energi bebas, entalpi, entropi, serta aplikasi pada reaksi kimia dan keseimbangan.',
            ],
            [
                'nama_mk' => 'Kimia Organik Kaya Kimat',
                'sks' => 4,
                'minimal_semester' => 4,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5004',
                'deskripsi_mk' => 'Pengantar struktur, reaksi, dan sintesis senyawa organik; fokus pada mekanisme reaksi dan konsep konfigurasi stereokimia.',
            ],
            [
                'nama_mk' => 'Kimia Fisika lanjutan',
                'sks' => 3,
                'minimal_semester' => 6,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5004',
                'deskripsi_mk' => 'Topik lanjutan kimia fisik termasuk kinetika kimia, teori keadaan terikat, dan modeling sistem kimia menggunakan matematika.',
            ],
            [
                'nama_mk' => 'Analisis Kimia Lanjut',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5004',
                'deskripsi_mk' => 'Mata kuliah ini membahas teknik analisis kimia tingkat lanjut, meliputi kromatografi, spektroskopi, dan validasi metode untuk aplikasi kimia material serta lingkungan.',
            ],
            [
                'nama_mk' => 'Kimia Fisik untuk Material',
                'sks' => 4,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5004',
                'deskripsi_mk' => 'Pengantar kimia fisik dengan fokus pada sifat fisik material, termodinamika, kinetika, dan mekanika permukaan yang relevan untuk rekayasa material.',
            ],
            [
                'nama_mk' => 'Chemical Thermodynamics and Kinetics',
                'sks' => 3,
                'minimal_semester' => 3,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5004',
                'deskripsi_mk' => 'Topik-term input termodinamika kimia, keseimbangan kimia, dan laju reaksi untuk memahami perilaku sistem kimia dalam berbagai kondisi.',
            ],
            [
                'nama_mk' => 'Analisis Struktur Material',
                'sks' => 3,
                'minimal_semester' => 4,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5004',
                'deskripsi_mk' => 'Mata kuliah mengenai struktur kristal, sifat material, serta teknik karakterisasi untuk menentukan struktur dan fenomena pada material kimia.',
            ],
            [
                'nama_mk' => 'Kimia Analitik Instrumental',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5004',
                'deskripsi_mk' => 'Pengantar teknik analisis kimia menggunakan instrumen modern seperti spektrofotometri, kromatografi, dan elektroanalisis.',
            ],

            // Biologi (5005) - 25 courses
            [
                'nama_mk' => 'Biologi Sel & Molekuler',
                'sks' => 4,
                'minimal_semester' => 1,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5005',
                'deskripsi_mk' => 'Mata kuliah pengantar biologi sel dan molekuler, membahas struktur sel, organelles, transport pasif/aktif, dan dasar-dasar metabolisme serta ekspresi gen pada tingkat sel.',
            ],
            [
                'nama_mk' => 'Anatomi Hewan Vertebrata',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5005',
                'deskripsi_mk' => 'Dasar anatomi struktural hewan vertebrata, identifikasi organ utama, sistem organ, serta teknik preparasi dan observasi makro-anatomi.',
            ],
            [
                'nama_mk' => 'Ekologi & Konservasi Lingkungan',
                'sks' => 3,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5005',
                'deskripsi_mk' => 'Studi interaksi antara organisme dan lingkungan, konsep ekosistem, rantai makanan, dampak perubahan iklim, serta prinsip-konservasi hayati dan kebijakan lingkungan.',
            ],
            [
                'nama_mk' => 'Genetika Populasi',
                'sks' => 4,
                'minimal_semester' => 4,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5005',
                'deskripsi_mk' => 'Pengenalan genetika populasi, frekuensi alel, hukum Hardy-Weinberg, variasi genetik, aliran gen, serta aplikasi dalam konservasi dan pemuliaan.',
            ],
            [
                'nama_mk' => 'Biologi Molekuler Lanjutan',
                'sks' => 2,
                'minimal_semester' => 5,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5005',
                'deskripsi_mk' => 'Topik lanjutan biosains molekuler: regulasi gen, teknik kloning, misel-nal, serta aplikasi dalam riset biologi sel dan bioteknologi.',
            ],
            [
                'nama_mk' => 'Biologi Umum',
                'sks' => 3,
                'minimal_semester' => 1,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5005',
                'deskripsi_mk' => 'Pengenalan konsep dasar biologi, struktur sel, genetik, ekologi, dan metode ilmiah untuk memahami kehidupan secara umum.',
            ],
            [
                'nama_mk' => 'Mikrobiologi Lingkungan',
                'sks' => 4,
                'minimal_semester' => 3,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5005',
                'deskripsi_mk' => 'Penelitian mikroorganisme di lingkungan, teknik identifikasi, peran mikroba dalam daur ulang nutrisi, serta dampak terhadap ekosistem dan kesehatan.',
            ],
            [
                'nama_mk' => 'Ekologi & Konservasi',
                'sks' => 3,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5005',
                'deskripsi_mk' => 'Studi interaksi organisme dengan lingkungan, konsep keanekaragaman hayati, serta strategi konservasi dan pengelolaan sumber daya alam.',
            ],
            [
                'nama_mk' => 'Fisiologi Tanaman',
                'sks' => 3,
                'minimal_semester' => 4,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5005',
                'deskripsi_mk' => 'Anatomi fungsional tanaman, transport air dan nutrisi, respons terhadap lingkungan, serta praktik eksperimen terkait fisiologi tumbuhan.',
            ],
            [
                'nama_mk' => 'Genetika Molekuler',
                'sks' => 4,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5005',
                'deskripsi_mk' => 'Dasar-dasar genetika molekuler, replikasi, rekasi ekspresi gen, serta teknik dasar analisis DNA dan ARN dalam penelitian biologi.',
            ],
            [
                'nama_mk' => 'Kecukupan Struktur Biologi Sel',
                'sks' => 3,
                'minimal_semester' => 1,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5005',
                'deskripsi_mk' => 'Mempelajari struktur dan fungsi organel sel, serta dasar-dasar metabolisme sel dan komunikasi antar sel.',
            ],
            [
                'nama_mk' => 'Genetics and Genomics',
                'sks' => 4,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5005',
                'deskripsi_mk' => 'Pengenalan konsep genetika mendasar hingga teknik genomik modern, termasuk pewarisan sifat, ekspresi gen, dan analisis variasi genetik.',
            ],
            [
                'nama_mk' => 'Ecology and Environmental Biology',
                'sks' => 3,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5005',
                'deskripsi_mk' => 'Kajian hubungan organisme dengan lingkungan, dinamika populasi, rantai makanan, serta dampak lingkungan terhadap ekologi biologi.',
            ],
            [
                'nama_mk' => 'Mikrobiologi Lingkungan',
                'sks' => 2,
                'minimal_semester' => 4,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5005',
                'deskripsi_mk' => 'Studi mikroorganisme lingkungan, teknik sampling, identifikasi mikroba, serta peran mikroba dalam pengolahan limbah.',
            ],
            [
                'nama_mk' => 'Molekuler Biologi Sel Lanjut',
                'sks' => 3,
                'minimal_semester' => 5,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5005',
                'deskripsi_mk' => 'Topik lanjutan tentang jalur sinyal sel, regulasi gen, dan teknik eksperimental untuk memetakan interaksi molekuler dalam sel.',
            ],
            [
                'nama_mk' => 'Ekologi Dasar',
                'sks' => 3,
                'minimal_semester' => 1,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5005',
                'deskripsi_mk' => 'Pengenalan konsep ekologi, hubungan antara organisme dengan lingkungannya, serta prinsip-prinsip energi dan aliran nutrisi dalam ekosistem.',
            ],
            [
                'nama_mk' => 'Biologi Molekuler',
                'sks' => 4,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5005',
                'deskripsi_mk' => 'Studi molekul biologis utama seperti DNA, RNA, dan protein, serta teknik dasar analisis molekuler yang relevan dengan riset biologi modern.',
            ],
            [
                'nama_mk' => 'Genetika untuk Biologi',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5005',
                'deskripsi_mk' => 'Dasar-dasar genetika Mendel hingga genetika populasi, penerapan pada identifikasi pewarisan sifat dan variasi genetik.',
            ],
            [
                'nama_mk' => 'Biologi Sel dan Tumbuhan',
                'sks' => 3,
                'minimal_semester' => 1,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5005',
                'deskripsi_mk' => ' Struktur sel tumbuhan dan fungsi organel, serta fisiologi dasar tumbuhan, termasuk fotosintesis dan transport ikatan sel.',
            ],
            [
                'nama_mk' => 'Metodologi Penelitian Biologi',
                'sks' => 2,
                'minimal_semester' => 1,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5005',
                'deskripsi_mk' => 'Pengenalan desain eksperimen, etika penelitian, statistik dasar, serta bagaimana merencanakan dan melaporkan studi biologi.',
            ],
            [
                'nama_mk' => 'Biologi Umum',
                'sks' => 3,
                'minimal_semester' => 1,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5005',
                'deskripsi_mk' => 'Pengenalan konsep dasar biologi, sel, genetika dasar, metabolisme, dan evolusi serta penerapan prinsip biologi dalam kehidupan sehari-hari.',
            ],
            [
                'nama_mk' => 'Biologi Seluler dan Molekuler',
                'sks' => 4,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5005',
                'deskripsi_mk' => 'Mempelajari struktur dan fungsi sel, replikasi DNA, ekspresi gen, serta teknik dasar laboratorium molekuler dan analisis protein.',
            ],
            [
                'nama_mk' => 'Anatomi dan Fisiologi Tumbuhan',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5005',
                'deskripsi_mk' => 'Membedah anatomi organ tumbuhan utama, fisiologi fotosintesis, transpirasí, dan respons terhadap lingkungan.',
            ],
            [
                'nama_mk' => 'Ekologi dan Keanekaragaman Hayati',
                'sks' => 3,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5005',
                'deskripsi_mk' => 'Pemaparan konsep ekologi, interaksi antar spesies, rantai makanan, dan prinsip konservasi keanekaragaman hayati di Indonesia.',
            ],
            [
                'nama_mk' => 'Genetika Modern',
                'sks' => 3,
                'minimal_semester' => 4,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5005',
                'deskripsi_mk' => 'Teori genetika klasik dan molekuler, variasi genetik, pewarisan sifat, serta penerapan teknologi genetika dalam bioteknologi.',
            ],

            // Aktuaria (5006) - 25 courses
            [
                'nama_mk' => 'Probabilitas dan Statistik Untuk Aktuaria',
                'sks' => 3,
                'minimal_semester' => 1,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5006',
                'deskripsi_mk' => 'Pengantar konsep probabilitas, distribusi, inferensi statistika, dan aplikasinya pada analisis risiko serta perbankan asuransi.',
            ],
            [
                'nama_mk' => 'Financial Mathematics for Actuaries',
                'sks' => 4,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5006',
                'deskripsi_mk' => 'Teori perhitungan aktuaria, anuitas, nilai sekarang bersih, dan model matematika untuk valuasi produk asuransi dan tunjangan pensiun.',
            ],
            [
                'nama_mk' => 'Stochastic Processes & Risk Theory',
                'sks' => 3,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5006',
                'deskripsi_mk' => 'Studi proses stokastik, waktu ekspektasi, dan penerapan dalam evaluasi risiko serta premi.',
            ],
            [
                'nama_mk' => 'Actuarial Modeling and Data Analysis',
                'sks' => 3,
                'minimal_semester' => 4,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5006',
                'deskripsi_mk' => 'Metode pemodelan aktuaria, analisis data, regresi, dan simulasi untuk estimasi parameter risiko.',
            ],
            [
                'nama_mk' => 'Medical Insurance and Healthcare Economics',
                'sks' => 2,
                'minimal_semester' => 5,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5006',
                'deskripsi_mk' => 'Analisis biaya-kefektifan, struktur biaya layanan kesehatan, dan dampak kebijakan terhadap premi serta manfaat.',
            ],
            [
                'nama_mk' => 'Statistika Dasar',
                'sks' => 3,
                'minimal_semester' => 1,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5006',
                'deskripsi_mk' => 'Pengenalan konsep-konsep statistika dasar, distribusi, peluang, dan analisis data untuk mendukung pemodelan risiko aktuaria.',
            ],
            [
                'nama_mk' => 'Ekonomi Mikro & Mikroekonomi untuk Aktuaria',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5006',
                'deskripsi_mk' => 'Pengantar teori ekonomi mikro dan aplikasinya pada perhitungan premi, provision, serta kelayakan portofolio asuransi.',
            ],
            [
                'nama_mk' => 'Teori Probabilitas untuk Aktuaria',
                'sks' => 4,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5006',
                'deskripsi_mk' => 'Pembelajaran probabilitas lanjut, populasi, varians, distribusi, dan penerapannya pada valuasi risiko serta aktuaria.',
            ],
            [
                'nama_mk' => 'Stochastic Modeling for Actuarial Science',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5006',
                'deskripsi_mk' => 'Pengenalan model stokastik dan aplikasinya dalam asuransi serta peramalan risiko menggunakan distribusi umum, Markov chains, dan simulasi Monte Carlo.',
            ],
            [
                'nama_mk' => 'Ekonomi Aktuaria dan Keuangan',
                'sks' => 3,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5006',
                'deskripsi_mk' => 'Kuliah mengenai teori ekonomi mikro-makro dengan fokus pada peran aktuaria dalam penetapan premi, cadangan, dan evaluasi risiko finansial.',
            ],
            [
                'nama_mk' => 'Statistik Validasi Proyek Aktuaria',
                'sks' => 4,
                'minimal_semester' => 2,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5006',
                'deskripsi_mk' => 'Pengenalan teknik statistik untuk validasi model aktuaria, termasuk evaluasi goodness-of-fit, prediksi, dan simulasi data untuk studi kasus industri.',
            ],
            [
                'nama_mk' => 'Matematika Aktuaria Lanjutan',
                'sks' => 4,
                'minimal_semester' => 4,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5006',
                'deskripsi_mk' => 'Topik lanjutan kalkulus multivariable, integral expected value, dan pemodelan risiko menggunakan teknik matematis tingkat lanjut.',
            ],
            [
                'nama_mk' => 'Manajemen Risiko dan Asuransi Jiwa',
                'sks' => 3,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5006',
                'deskripsi_mk' => 'Konsep dasar manajemen risiko, pembuatan dan evaluasi program asuransi jiwa, serta teknik mitigasi risiko untuk portofolio aktuaria.',
            ],
            [
                'nama_mk' => 'Statistika Matematika I',
                'sks' => 3,
                'minimal_semester' => 1,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5006',
                'deskripsi_mk' => 'Pengantar konsep statistika matematika, distribusi dasar, sampling, dan estimasi parameter untuk analisis data dalam konteks aktuaria.',
            ],
            [
                'nama_mk' => 'Actuarial Foundations',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5006',
                'deskripsi_mk' => 'Dasar-dasar aktuaria, probababilitas, tabel mortalitas, dan prinsip pembentukan biaya cadangan serta premi.',
            ],
            [
                'nama_mk' => 'Probability and Risk Theory',
                'sks' => 4,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5006',
                'deskripsi_mk' => 'Teori probabilitas lanjut, random variable, distribusi umum, dan aplikasi dalam penilaian risiko aktuaria.',
            ],
            [
                'nama_mk' => 'Mathematical Statistics II',
                'sks' => 3,
                'minimal_semester' => 4,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5006',
                'deskripsi_mk' => 'Prinsip statistik inferensial lanjut, uji hipotesis, interval kepercayaan, dan evaluasi model dalam konteks aktuaria.',
            ],
            [
                'nama_mk' => 'Asuransi Jiwa dan Manfaat Kesehatan',
                'sks' => 3,
                'minimal_semester' => 5,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5006',
                'deskripsi_mk' => 'Struktur produk asuransi jiwa, manfaat kesehatan, perhitungan biaya pertanggungan, dan regulasi terkait.',
            ],
            [
                'nama_mk' => 'Statistika Dasar',
                'sks' => 3,
                'minimal_semester' => 1,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5006',
                'deskripsi_mk' => 'Pengantar konsep dasar statistika, distribusi, probabilitas, dan konsep inferensi untuk aplikasi di bidang aktuaria.',
            ],
            [
                'nama_mk' => 'Aktuari Finance I',
                'sks' => 4,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5006',
                'deskripsi_mk' => ' Analisis risiko keuangan, valuasi aset, dan konsep dasar manajemen keuangan perusahaan untuk aktuaria.',
            ],
            [
                'nama_mk' => 'Metodologi Penelitian Aktuaria',
                'sks' => 3,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5006',
                'deskripsi_mk' => 'Metode penelitian kuantitatif dan kualitatif, perancangan studi, analisis data, dan penulisan laporan ilmiah.',
            ],
            [
                'nama_mk' => 'Ekonometrika Terapan',
                'sks' => 3,
                'minimal_semester' => 4,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5006',
                'deskripsi_mk' => 'Penerapan model ekonometrika untuk analisis data keuangan dan risiko, dengan fokus pada interpretasi hasil.',
            ],
            [
                'nama_mk' => 'Probabilitas Aktuaria',
                'sks' => 3,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5006',
                'deskripsi_mk' => 'Teori probabilitas lanjut, distribusi probabilitas penting bagi perhitungan premi dan cadangan.',
            ],
            [
                'nama_mk' => 'Matematika Aktuaria Lanjut',
                'sks' => 4,
                'minimal_semester' => 4,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5006',
                'deskripsi_mk' => 'Topik kalkulus multivariable, persamaan diferensial, dan aplikasi matematis pada nilai ekspektasi aktuaria.',
            ],
            [
                'nama_mk' => 'Pemodelan Aktuaria dan Simulasi',
                'sks' => 3,
                'minimal_semester' => 5,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5006',
                'deskripsi_mk' => 'Pembuatan model aktuaria, simulasi Monte Carlo, dan evaluasi risiko menggunakan data nyata.',
            ],

            // Teknik Mesin (5007) - 25 courses
            [
                'nama_mk' => 'Statistika Dasar',
                'sks' => 3,
                'minimal_semester' => 1,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5007',
                'deskripsi_mk' => 'Pengenalan konsep statistika, probabilitas dasar, distribusi frekuensi, serta teknik analisis data untuk memahami fenomena teknik mesin.',
            ],
            [
                'nama_mk' => 'Engineering Mechanics: Statics',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5007',
                'deskripsi_mk' => 'Mempelajari gaya-gaya pada benda tegar pada keseimbangan statis, gaya normal, gaya Gesek, momen, dan prinsip keseimbangan.',
            ],
            [
                'nama_mk' => 'Thermodynamics I',
                'sks' => 4,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5007',
                'deskripsi_mk' => 'Pengantar hukum-hukum termodinamika, perubahan energi, dan aplikasi konversi energi pada sistem teknik mesin.',
            ],
            [
                'nama_mk' => 'Material Science for Mechanical Engineering',
                'sks' => 3,
                'minimal_semester' => 3,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5007',
                'deskripsi_mk' => 'Dasar-dasar sifat material, perilaku logam dan non-logam, serta hubungan antara struktur material dengan sifat mekanik.',
            ],
            [
                'nama_mk' => 'Fluid Mechanics',
                'sks' => 4,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5007',
                'deskripsi_mk' => 'Mempelajari aliran fluida, persamaan kontinuitas, momentum, energi, serta aplikasi pada sistem perpipaan dan aerodinamika.',
            ],
            [
                'nama_mk' => 'Statik Struktur dan Analisis Kekuatan',
                'sks' => 3,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5007',
                'deskripsi_mk' => 'Mengenal konsep statik, keseimbangan beban, dan perhitungan gaya untuk menganalisis kekuatan struktur mesin secara praktis.',
            ],
            [
                'nama_mk' => 'Dynamic Systems and Vibrations',
                'sks' => 3,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5007',
                'deskripsi_mk' => 'Topik dinamika sistem multibody, redaman, dan analisis getaran pada mesin serta pengaruhnya terhadap performa komponen mekanik.',
            ],
            [
                'nama_mk' => 'Thermal Engineering I',
                'sks' => 4,
                'minimal_semester' => 4,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5007',
                'deskripsi_mk' => 'Pengantar termodinamika dan transfer panas pada sistem mesin, termasuk analisis kurva kinerja dan efisiensi energi.',
            ],
            [
                'nama_mk' => 'Materials Science for Mechanical Engineers',
                'sks' => 3,
                'minimal_semester' => 4,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5007',
                'deskripsi_mk' => 'Pembelajaran sifat material, seleksi material untuk komponen mesin, dan hubungan struktur-manfaat dalam desain.',
            ],
            [
                'nama_mk' => 'Manufacturing Processes II',
                'sks' => 4,
                'minimal_semester' => 5,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5007',
                'deskripsi_mk' => 'Proses manufaktur lanjutan, peralatan produksi, kontrol kualitas, dan optimisasi proses untuk komponen mekanik.',
            ],
            [
                'nama_mk' => 'Statistika Teknik Mesin',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5007',
                'deskripsi_mk' => 'Pengenalan konsep statistik untuk analisis data eksperimen dan pemodelan proses produksi pada Mesin Teknik, mencakup distribusi, estimasi parameter, dan uji hipotesis sederhana.',
            ],
            [
                'nama_mk' => 'Engineering Economics and Project Management',
                'sks' => 2,
                'minimal_semester' => 3,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5007',
                'deskripsi_mk' => 'Pengenalan evaluasi ekonomi pada proyek teknik, termasuk analisis biaya manfaat, estimasi biaya, jadwal proyek, dan faktor risiko. ',
            ],
            [
                'nama_mk' => 'Thermodynamics and Heat Transfer',
                'sks' => 4,
                'minimal_semester' => 4,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5007',
                'deskripsi_mk' => 'Mempelajari prinsip termodinamika, hukum konservasi energi, serta mekanisme perpindahan panas (konduksi, konveksi, radiasi) dalam sistem mesin.',
            ],
            [
                'nama_mk' => 'Mechanical Computing and Controls',
                'sks' => 3,
                'minimal_semester' => 3,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5007',
                'deskripsi_mk' => 'Pengantar pemodelan mekanik menggunakan alat bantu komputasi, pemrograman singkat untuk simulasi gerak, serta kontrol sederhana pada sistem mekanis.',
            ],
            [
                'nama_mk' => 'Material Science for Mechanical Engineering',
                'sks' => 3,
                'minimal_semester' => 4,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5007',
                'deskripsi_mk' => 'Kajian sifat material, fase, struktur mikro, dan pengaruhnya terhadap desain komponen mesin serta proses manufaktur.',
            ],
            [
                'nama_mk' => 'Statistika dan Probabilitas',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5007',
                'deskripsi_mk' => 'Pengenalan konsep statistika dasar, probabilitas, distribusi, dan aplikasi analisis data untuk masalah rekayasa mesin.',
            ],
            [
                'nama_mk' => 'Engineering Thermodynamics',
                'sks' => 4,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5007',
                'deskripsi_mk' => 'Pelajari hukum termodinamika, siklus termodinamika, serta penerapan konsep energi dalam perancangan sistem mesin.',
            ],
            [
                'nama_mk' => 'Material Science and Engineering',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5007',
                'deskripsi_mk' => 'Mempelajari sifat material umum yang digunakan dalam industri manufaktur, pemilihan material, dan kegagalan material.',
            ],
            [
                'nama_mk' => 'Kahut Chrome?',
                'sks' => 2,
                'minimal_semester' => 4,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5007',
                'deskripsi_mk' => 'Deskripsi singkat tentang aspek desain material komposit dan penerapan teknik pemilihan material yang tepat.',
            ],
            [
                'nama_mk' => 'Mechanical Vibration and Dynamics',
                'sks' => 3,
                'minimal_semester' => 4,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5007',
                'deskripsi_mk' => 'Analisis gerak vibrasi pada sistem mekanik, modal analysis, dan damping untuk desain komponen yang tahan vibrasi.',
            ],
            [
                'nama_mk' => 'Matematika Dasar I',
                'sks' => 4,
                'minimal_semester' => 1,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5007',
                'deskripsi_mk' => 'Pengantar konsep kalkulus, aljabar linear, dan fonk-s dasar matematika yang diperlukan untuk analisis teknik.',
            ],
            [
                'nama_mk' => 'Fisik Teknik I',
                'sks' => 3,
                'minimal_semester' => 1,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5007',
                'deskripsi_mk' => 'Pengantar konsep mekanika fluida, gaya, energi, serta konsep dasar termodinamika yang relevan dengan teknik mesin.',
            ],
            [
                'nama_mk' => 'Chemistry for Engineers',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5007',
                'deskripsi_mk' => 'Kimia dasar terapan untuk rekayasa, fokus pada sifat material, reaksi kimia, dan pengukuran laboratorium.',
            ],
            [
                'nama_mk' => 'Thermodynamics',
                'sks' => 4,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5007',
                'deskripsi_mk' => 'Hukum termodinamika, siklus energi, analisis performa mesin, dan aplikasinya pada sistem mekanis.',
            ],
            [
                'nama_mk' => 'Materials Science',
                'sks' => 3,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5007',
                'deskripsi_mk' => 'Struktur material, sifat material, pengujian, dan peran material dalam desain mesin.',
            ],

            // Teknik Kimia (5008) - 25 courses
            [
                'nama_mk' => 'Mekanika Fluida Dasar',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5008',
                'deskripsi_mk' => 'Pengenalan konsep dasar mekanika fluida, sifat fluida, hukum Newtonian, aliran laminar dan turbulen, serta aplikasi pada sistem perpipaan dan desain komponen pneumatik.',
            ],
            [
                'nama_mk' => 'Engineering Thermodynamics',
                'sks' => 4,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5008',
                'deskripsi_mk' => 'Studi termodinamika pada sistem teknik, hukum termodinamika, siklus energi, entropi, dan analisis performa energi pada proses industri.',
            ],
            [
                'nama_mk' => 'Kimia Proses Tekstil & Industri Kimia',
                'sks' => 3,
                'minimal_semester' => 4,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5008',
                'deskripsi_mk' => 'Topik kimia proses yang relevan untuk industri kimia dan tekstil, termasuk pemisahan, reaksi kimia industri, serta dampak lingkungan.',
            ],
            [
                'nama_mk' => 'Proses Pemisahan Industri (Unit Operations)',
                'sks' => 3,
                'minimal_semester' => 4,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5008',
                'deskripsi_mk' => 'Pengenalan prinsip pemisahan seperti distilasi, ekstraksi, filtrasi, dan membran untuk skala industri kimia.',
            ],
            [
                'nama_mk' => 'Matematika Teknik Lanjut',
                'sks' => 2,
                'minimal_semester' => 1,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5008',
                'deskripsi_mk' => 'Kalkulus multivariat, probabilitas terapan, dan analisis numerik untuk pemodelan sistem teknik dan simulasi proses.',
            ],
            [
                'nama_mk' => 'Mekanika Fluida Dasar',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5008',
                'deskripsi_mk' => 'Pengantar konsep aliran, viskositas, persamaan kontinuitas dan Bernoulli, serta penerapan pada sistem perpipaan industri. Salah satu fondasi untuk memahami perilaku fluida dalam proses kimia.',
            ],
            [
                'nama_mk' => 'Thermodinamika Teknik',
                'sks' => 4,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5008',
                'deskripsi_mk' => 'Pelajari hukum termodinamika, siklus termal, sifat zat, dan penerapan pada desain proses termal di industri kimia. Latihan soal dan perancangan keseimbangan energi.',
            ],
            [
                'nama_mk' => 'Operasi Unit Proses Kimia',
                'sks' => 4,
                'minimal_semester' => 4,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5008',
                'deskripsi_mk' => 'Analisis dan desain operasi unit seperti pemisahan, pemurnian, dan reaksi pada skala laboratorium hingga industri, dengan studi kasus aliran massa dan energi.',
            ],
            [
                'nama_mk' => 'Kematangan Kolokasi dan Koligasi Proses',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5008',
                'deskripsi_mk' => 'Pengenalan teknik analisis proses kimia untuk memilih jalur proses optimal, termasuk simulasi sederhana dan evaluasi risiko operasional.',
            ],
            [
                'nama_mk' => 'Pengolahan Gas dan Cairan**',
                'sks' => 3,
                'minimal_semester' => 5,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5008',
                'deskripsi_mk' => 'Klasifikasi, karakterisasi, dan metode pemrosesan gas serta cairan hidrokarbon, termasuk pemisahan, pemurnian, dan pemanfaatan energi.',
            ],
            [
                'nama_mk' => 'Matematika Teknik I',
                'sks' => 3,
                'minimal_semester' => 1,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5008',
                'deskripsi_mk' => 'Pengenalan konsep kalkulus diferensial dan integral, fungsi-fungsi dasar, limit, turunan, dan应用nya pada masalah teknik.',
            ],
            [
                'nama_mk' => 'Kimia Umum',
                'sks' => 4,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5008',
                'deskripsi_mk' => 'Studi kimia dasar termasuk struktur atom, ikatan kimia, stoikiometri, kesetimbangan kimia, dan termodinamika kimia berhubungan dengan proses teknik.',
            ],
            [
                'nama_mk' => 'Thermodynamics and Heat Transfer',
                'sks' => 3,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5008',
                'deskripsi_mk' => 'Prinsip termodinamika, hukum-hukum dasar, analisis energi, serta konduksi, konveksi, dan radiasi panas dalam sistem teknik.',
            ],
            [
                'nama_mk' => 'Kinetika Reaksi dan Transport',
                'sks' => 3,
                'minimal_semester' => 4,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5008',
                'deskripsi_mk' => 'Model laju reaksi kimia, mekanisme reaksi, serta transport massa dan momentum relevan untuk desain proses kimia.',
            ],
            [
                'nama_mk' => 'Teknik Proses Kimia Lanjutan',
                'sks' => 4,
                'minimal_semester' => 5,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5008',
                'deskripsi_mk' => 'Topik desain dan analisis proses kimia elementary hingga skala industri, meliputi simulasi aliran, perpindahan massa, dan keselamatan proses.',
            ],
            [
                'nama_mk' => 'Kechik Opr Processing Fundamentals',
                'sks' => 3,
                'minimal_semester' => 1,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5008',
                'deskripsi_mk' => 'Pengantar konsep dasar proses kimia, alur produksi, serta peran teknik kimia dalam skala industri. Materi mencakup sifat zat, hukum termodinamika, dan konsep keselamatan kerja.',
            ],
            [
                'nama_mk' => 'Thermodynamics I',
                'sks' => 4,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5008',
                'deskripsi_mk' => 'Analisis hukum termodinamika pada sistem kimia, titik keseimbangan, entalpi, entropi, dan aplikasi pada desain proses sederhana.',
            ],
            [
                'nama_mk' => 'Unit Operation II: Reaksi dan Pemisahan',
                'sks' => 3,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5008',
                'deskripsi_mk' => 'Pembahasan operasional unit reaksi, dalam hal kinetika, kinetika reaksi, pemisahan padat-cair, dan koordinasi antara desain reaksi dengan pemurnian produk.',
            ],
            [
                'nama_mk' => 'Pengenalan Kimia Analitik & Instrumentasi',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5008',
                'deskripsi_mk' => 'Materi dasar kimia analitik, metode instrumen utama, akurasi pengukuran, kalibrasi, serta interpretasi spektrum dan data analitik.',
            ],
            [
                'nama_mk' => 'Pengiayaan Proses & Kontrol Proses',
                'sks' => 4,
                'minimal_semester' => 4,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5008',
                'deskripsi_mk' => 'Konsep kontrol proses, pembacaan variabel proses, pengendalian kualitas produk, serta penerapan PID dan pengawasan lini produksi.',
            ],
            [
                'nama_mk' => 'Thermodynamics I',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5008',
                'deskripsi_mk' => 'Dasar termodinamika, hukum gas, sifat fase, dan penerapan konsep entalpi untuk analisis sistem kimia.',
            ],
            [
                'nama_mk' => 'Reactors and Process Dynamics',
                'sks' => 4,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5008',
                'deskripsi_mk' => 'Modeling dan analisis dinamika reaktor kimia, kestabilan, serta kontrol variabel proses pada lintasan operasional umum.',
            ],
            [
                'nama_mk' => 'Chemical Engineering Thermodynamics',
                'sks' => 3,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5008',
                'deskripsi_mk' => 'Penerapan hukum termodinamika dalam perancangan proses kimia, dengan fokus pada entalpi, entropi, dan efisiensi proses.',
            ],
            [
                'nama_mk' => 'Unit Operations I',
                'sks' => 4,
                'minimal_semester' => 4,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5008',
                'deskripsi_mk' => 'Konsep operasi unit dasar seperti pengeringan, pengendapan, pengendalian aliran, dan transfer massa.',
            ],
            [
                'nama_mk' => 'Mass Transfer and Separation Processes',
                'sks' => 3,
                'minimal_semester' => 4,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5008',
                'deskripsi_mk' => 'Proses perpindahan massa dan teknik pemisahan seperti distilasi, ekstraksi, dan proses membran.',
            ],

            // Teknik Fisika (5009) - 25 courses
            [
                'nama_mk' => 'Statistika untuk Teknik Fisika',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5009',
                'deskripsi_mk' => 'Pengantar konsep statistika, probabilitas, distribusi, dan inferensi yang relevan untuk analisis data eksperimen pada bidang teknik fisika.',
            ],
            [
                'nama_mk' => 'Electrical Measurements and Instrumentation',
                'sks' => 3,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5009',
                'deskripsi_mk' => 'Mempelajari teknik pengukuran elektronik, sensor, kalibrasi, serta analisis error untuk sistem fisika terapan.',
            ],
            [
                'nama_mk' => 'Thermal Physics and Heat Transfer',
                'sks' => 4,
                'minimal_semester' => 4,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5009',
                'deskripsi_mk' => 'Mendeskripsikan prinsip termodinamika, aliran kalor, konduksi, konveksi, dan transfer panas pada perangkat teknik.',
            ],
            [
                'nama_mk' => 'Programming for Physical Modeling',
                'sks' => 3,
                'minimal_semester' => 5,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5009',
                'deskripsi_mk' => 'Pemrograman untuk pemodelan fisika menggunakan bahasa Python/Julia, termasuk pemecahan masalah numerik.',
            ],
            [
                'nama_mk' => 'Instrumentation System Design',
                'sks' => 3,
                'minimal_semester' => 6,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5009',
                'deskripsi_mk' => 'Perancangan sistem instrumentasi untuk eksperimen fisika terapan, termasuk sensor, akuisisi data, dan antarmuka pengguna.',
            ],
            [
                'nama_mk' => 'Statistika untuk Teknik Energi',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5009',
                'deskripsi_mk' => 'Mengajarkan konsep probabilitas, distribusi, dan analisis data untuk kajian eksperimental di bidang teknik fisika energi.',
            ],
            [
                'nama_mk' => 'Electrical Fundamentals for Physics Engineers',
                'sks' => 4,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5009',
                'deskripsi_mk' => 'Pengenalan kelistrikan dasar, rangkaian listrik, analisis DC/AC, dan aplikasi alat ukur untuk mahasiswa teknik fisika.',
            ],
            [
                'nama_mk' => 'Pemodelan Fisis dengan Komputasi',
                'sks' => 3,
                'minimal_semester' => 4,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5009',
                'deskripsi_mk' => 'Pendekatan pemodelan fisika menggunakan bahasa pemrograman umum; simulasi sistem dinamik dan data-driven untuk analisis eksperimen.',
            ],
            [
                'nama_mk' => 'Instrumentasi dan Pengukuran',
                'sks' => 3,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5009',
                'deskripsi_mk' => 'Teori dan praktik instrumen pengukuran fisik, kalibrasi sensor, serta evaluasi akurasi dan presisi alat ukur.',
            ],
            [
                'nama_mk' => 'Sistem Kendali untuk Sistem Fisik',
                'sks' => 2,
                'minimal_semester' => 5,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5009',
                'deskripsi_mk' => 'Konsep dasar kendali feedback pada sistem fisik, desain regulator sederhana, dan analisis stabilitas pada aplikasi teknik fisika.',
            ],
            [
                'nama_mk' => 'Sistem Kendali Listrik',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5009',
                'deskripsi_mk' => 'Pengenalan konsep kendali sistem listrik menggunakan sensor, aktuator, dan kontroler untuk aplikasi teknik fisika terapan.',
            ],
            [
                'nama_mk' => 'Electrical Measurements and Instrumentation',
                'sks' => 4,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5009',
                'deskripsi_mk' => 'Metode pengukuran listrik dengan alat ukur modern, kalibrasi, serta analisis kesalahan untuk evaluasi respons sistem.',
            ],
            [
                'nama_mk' => 'Thermodynamics for Physics Engineers',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5009',
                'deskripsi_mk' => 'Prinsip termodinamika, hukum keseimbangan energi, dan aplikasinya pada sistem fisis berukuran kecil hingga menengah.',
            ],
            [
                'nama_mk' => 'Introduction to Photonics',
                'sks' => 3,
                'minimal_semester' => 4,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5009',
                'deskripsi_mk' => 'Dasar-dasar fotonik, gelombang elektromagnetik, dan perangkat optik yang relevan untuk sensor dan komunikasi.',
            ],
            [
                'nama_mk' => 'Nuclear and Radiation Physics',
                'sks' => 4,
                'minimal_semester' => 5,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5009',
                'deskripsi_mk' => 'Pengenalan interaksi radiasi, fisika inti, serta teknik penilaian risiko radiasi dalam eksperimen dan industri.',
            ],
            [
                'nama_mk' => 'Fisika Dasar I',
                'sks' => 3,
                'minimal_semester' => 1,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5009',
                'deskripsi_mk' => 'Pengantar konsep fisika klasik, gerak, gaya, kerja, energi, gelombang, dan termodinamika untuk mata kuliah dasar Teknik Fisika.',
            ],
            [
                'nama_mk' => 'Medical Imaging Fundamentals',
                'sks' => 3,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5009',
                'deskripsi_mk' => 'Dasar-dasar teknik pencitraan medis, kontras, resolusi gambar, serta prinsip-prinsip sensor dan detektor dalam imaging radiologi.',
            ],
            [
                'nama_mk' => 'Instrumentation and Measurement',
                'sks' => 4,
                'minimal_semester' => 4,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5009',
                'deskripsi_mk' => 'Metodologi pengukuran, sensor, kalibrasi, analisis ketelitian, serta praktik pemetaan data dari instrumen ke sistem monitoring.',
            ],
            [
                'nama_mk' => 'Thermodynamics and Heat Transfer',
                'sks' => 3,
                'minimal_semester' => 4,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5009',
                'deskripsi_mk' => 'Hukum termodinamika, transfer panas (konduksi, konveksi, radiasi), serta aplikasi pada sistem fisika teknik.',
            ],
            [
                'nama_mk' => 'Electronics for Physicists',
                'sks' => 2,
                'minimal_semester' => 2,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5009',
                'deskripsi_mk' => 'Dasar-dasar elektronika dengan fokus pada perangkat fisika seperti sensor, amplifikasi, dan analisis sinyal.',
            ],
            [
                'nama_mk' => 'Sistem Kontrol Analog',
                'sks' => 3,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5009',
                'deskripsi_mk' => 'Pengenalan konsep kendali analog untuk sistem fisika dengan pemodelan massa–spring–damper, robustitas, dan implementasi praktis menggunakan blok kendali.',
            ],
            [
                'nama_mk' => 'Electric Field Theory and Applications',
                'sks' => 4,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5009',
                'deskripsi_mk' => 'Teori medan listrik dan penerapan dalam sensor, antarmuka elektronika, serta perhitungan gaya elektris pada material polikristalin.',
            ],
            [
                'nama_mk' => 'Prinsip Termal dan Energi',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5009',
                'deskripsi_mk' => 'Analisis perpindahan panas, konsep energi dalam termodinamika, serta evaluasi efisiensi sistem termal pada perangkat payung teknologi.',
            ],
            [
                'nama_mk' => 'Instrumentation and Measurement Lab',
                'sks' => 2,
                'minimal_semester' => 4,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5009',
                'deskripsi_mk' => 'Laboratorium instrumen measuring lebih dari satu variabel, kalibrasi sensor, dan analisis ketelitian pengukuran pada eksperimen fisika.',
            ],
            [
                'nama_mk' => 'Electromagnetism II',
                'sks' => 3,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5009',
                'deskripsi_mk' => 'Lanjutan elektromagnetik: gelombang, persebaran medan, dan aplikasinya pada perangkat komunikasi serta rangkaian RF.',
            ],

            // Teknik Sistem dan Industri (5010) - 25 courses
            [
                'nama_mk' => 'Statik Struktur dan Analisis Beban',
                'sks' => 3,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5010',
                'deskripsi_mk' => 'Analisis beban dan respons struktur statis pada elemen utama, dengan perhitungan gaya, momen, dan reduksi kompleksitas melalui model sederhana.',
            ],
            [
                'nama_mk' => 'Kebijakan Sistem Operasi Industri',
                'sks' => 3,
                'minimal_semester' => 4,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5010',
                'deskripsi_mk' => 'Memetakan kebijakan operasional industri, tata kelola proses, dan standar keselamatan untuk meningkatkan efisiensi dan kepatuhan regulasi.',
            ],
            [
                'nama_mk' => 'Engineering Economics and Decision Making',
                'sks' => 4,
                'minimal_semester' => 4,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5010',
                'deskripsi_mk' => 'Pengantar evaluasi ekonomi proyek teknik, analisis biaya-manfaat, NPV, dan payback untuk pengambilan keputusan yang tepat.',
            ],
            [
                'nama_mk' => 'Metode Riset Operasional untuk Sistem Terintegrasi',
                'sks' => 3,
                'minimal_semester' => 5,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5010',
                'deskripsi_mk' => 'Pengenalan model optimasi, simulasi, dan teknik pemodelan untuk sistem teknis terintegrasi.',
            ],
            [
                'nama_mk' => 'Kognisi dan Desain Sistem Informasi Industri',
                'sks' => 2,
                'minimal_semester' => 6,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5010',
                'deskripsi_mk' => 'Konsep kognitif dalam perancangan antarmuka dan arsitektur informasi untuk meningkatkan alur kerja di lingkungan industri.',
            ],
            [
                'nama_mk' => 'Statistika Industri',
                'sks' => 3,
                'minimal_semester' => 1,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5010',
                'deskripsi_mk' => 'Pengenalan konsep statistika terapan untuk menganalisis data produksi, kualitas, dan rantai pasok. Termasuk probabilitas dasar, distribusi, dan inferensi sederhana.',
            ],
            [
                'nama_mk' => 'Operational Research',
                'sks' => 3,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5010',
                'deskripsi_mk' => 'Metode optimisasi untuk perancangan sistem, penjadwalan, dan alokasi sumber daya di lingkungan industri dengan pemodelan matematis dan studi kasus.',
            ],
            [
                'nama_mk' => 'Engineering Economics',
                'sks' => 2,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5010',
                'deskripsi_mk' => 'Analisis kelayakan proyek teknik, perkiraan biaya, manfaat, dan teknik evaluasi investasi untuk pengambilan keputusan manajerial.',
            ],
            [
                'nama_mk' => 'Industrial Analytics',
                'sks' => 4,
                'minimal_semester' => 4,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5010',
                'deskripsi_mk' => 'Kursus praktik analitik data industri menggunakan alat BI dan teknik data science untuk meningkatkan efisiensi operasional.',
            ],
            [
                'nama_mk' => 'Human Factors & Ergonomics',
                'sks' => 3,
                'minimal_semester' => 5,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5010',
                'deskripsi_mk' => 'Studi bagaimana faktor manusia mempengaruhi desain sistem produksi, kenyamanan kerja, keselamatan, dan kinerja tim.',
            ],
            [
                'nama_mk' => 'Statika Struktur dan Analisis Proyek',
                'sks' => 3,
                'minimal_semester' => 1,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5010',
                'deskripsi_mk' => 'Mata kuliah ini membahas konsep statika struktur, analisis beban, serta perancangan elemen struktur untuk proyek teknik sistem dan industri pada tingkat dasar.',
            ],
            [
                'nama_mk' => 'Fundamentals of Industrial Engineering',
                'sks' => 4,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5010',
                'deskripsi_mk' => 'Pengantar prinsip-prinsip teknik industri, seperti perancangan sistem, perencanaan produksi, dan ergonomi untuk meningkatkan efisiensi operasi.',
            ],
            [
                'nama_mk' => 'Optimalisasi Sistem dan Logistik',
                'sks' => 3,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5010',
                'deskripsi_mk' => 'Pembelajaran teknik-teknik optimasi dan manajemen rantai pasokan untuk meningkatkan aliran material, waktu pengiriman, dan biaya operasional.',
            ],
            [
                'nama_mk' => 'Metode Riset Operasional',
                'sks' => 3,
                'minimal_semester' => 4,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5010',
                'deskripsi_mk' => 'Pengenalan model matematis, pemecahan masalah nyata dengan pemodelan, simulasi, dan algoritma untuk mendukung keputusan operasional.',
            ],
            [
                'nama_mk' => 'Ergonomi dan Desain Sistem Kerja',
                'sks' => 2,
                'minimal_semester' => 2,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5010',
                'deskripsi_mk' => 'Mempelajari prinsip ergonomi, evaluasi tugas, dan desain pekerjaan yang aman serta efisien pada lingkungan industri.',
            ],
            [
                'nama_mk' => 'Statistical Methods in Industrial Engineering',
                'sks' => 3,
                'minimal_semester' => 1,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5010',
                'deskripsi_mk' => 'Pengenalan metode statistik terapan untuk analisis proses produksi, desain eksperimen, dan pengendalian kualitas dalam konteks Teknik Sistem dan Industri.',
            ],
            [
                'nama_mk' => 'Engineering Economics and Decision Making',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5010',
                'deskripsi_mk' => 'Pendekatan ekonomi rekayasa untuk evaluasi proyek, biaya modal, dan analisis kelayakan investasi di lingkungan industri.',
            ],
            [
                'nama_mk' => 'Operations Research and Optimization',
                'sks' => 4,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5010',
                'deskripsi_mk' => 'Konstruksi model optimisasi, pemecahan masalah aliran produksi, penjadwalan, dan logistik menggunakan teknik OR modern.',
            ],
            [
                'nama_mk' => 'Human-Computer Interaction untuk Sistem Industri',
                'sks' => 2,
                'minimal_semester' => 4,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5010',
                'deskripsi_mk' => 'Dasar-dasar interaksi manusia-komputer dengan fokus pada desain antarmuka untuk sistem manajemen produksi dan monitoring.',
            ],
            [
                'nama_mk' => 'Ergonomi dan Desain Sistem Kerja',
                'sks' => 3,
                'minimal_semester' => 5,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5010',
                'deskripsi_mk' => 'Aspek ergonomi dalam perancangan pekerjaan, penilaian risiko, dan peningkatan kinerja melalui desain sistem kerja yang efisien.',
            ],
            [
                'nama_mk' => 'Statistik Manajemen Industri',
                'sks' => 3,
                'minimal_semester' => 1,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5010',
                'deskripsi_mk' => 'Pengantar konsep statistik yang relevan untuk perencanaan dan pengambilan keputusan di bidang teknik sistem industri, termasuk probabilitas, distribusi, dan analisis data manufaktur.',
            ],
            [
                'nama_mk' => 'Engineering Fundamentals for Industrial Systems',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5010',
                'deskripsi_mk' => ' Mata kuliah pengantar rekayasa untuk sistem industri yang mencakup konsep rekayasa proses, ergonomi, dan perancangan sistem kerja.',
            ],
            [
                'nama_mk' => 'Sistem Optimasi dan Perancangan Proses',
                'sks' => 4,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5010',
                'deskripsi_mk' => 'Pemodelan matematis dan teknik optimasi untuk meningkatkan efisiensi proses produksi serta alokasi sumber daya.',
            ],
            [
                'nama_mk' => 'Automasi dan Kontrol Proses',
                'sks' => 3,
                'minimal_semester' => 4,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5010',
                'deskripsi_mk' => 'Topik mengenai sensor, aktuator, dan kontrol loop tertutup untuk menjaga kualitas dan kinerja sistem produksi.',
            ],
            [
                'nama_mk' => 'Statistical Quality Control',
                'sks' => 2,
                'minimal_semester' => 2,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5010',
                'deskripsi_mk' => 'Metode pengendalian kualitas berbasis statistik, pengujian hipotesis, dan penerapan SPC dalam lini produksi.',
            ],

            // Teknik Material dan Metalurgi (5011) - 25 courses
            [
                'nama_mk' => 'Material Properties and Testing',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5011',
                'deskripsi_mk' => 'Pengetahuan sifat material, teknik pengujian mekanik dan mikrostruktur untuk mengevaluasi kekuatan dan keuletan material teknik material.',
            ],
            [
                'nama_mk' => 'Metallurgy of Ferrous Alloys',
                'sks' => 4,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5011',
                'deskripsi_mk' => 'Studi tentang baja dan paduan besi, termodinamika fasa, mikrostruktur, heat treatment, dan aplikasi pada teknik metallurgi.',
            ],
            [
                'nama_mk' => 'Mechanical Testing and Evaluation',
                'sks' => 3,
                'minimal_semester' => 4,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5011',
                'deskripsi_mk' => 'Metode pengujian mekanik, perancangan eksperimen, analisis hasil uji tarik tekan dan kekerasan untuk evaluasi komponen teknik.',
            ],
            [
                'nama_mk' => 'Advanced Materials Characterization',
                'sks' => 2,
                'minimal_semester' => 5,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5011',
                'deskripsi_mk' => ' Teknik karakterisasi lanjutan (SEM, TEM, XRD) untuk memahami sifat mikrostruktur material teknik.',
            ],
            [
                'nama_mk' => 'Engineering Materials for Sustainability',
                'sks' => 3,
                'minimal_semester' => 6,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5011',
                'deskripsi_mk' => 'Praktik material ramah lingkungan, pemilihan material berkelanjutan, dan analisis siklus hidup produk teknik.',
            ],
            [
                'nama_mk' => 'Material Science Fundamentals',
                'sks' => 3,
                'minimal_semester' => 1,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5011',
                'deskripsi_mk' => 'Pengenalan sifat-sifat material, struktur kristal, dan hubungan antara mikrostruktur dengan perilaku material pada suhu ruang.',
            ],
            [
                'nama_mk' => 'Metallurgy Process and Alloy Systems',
                'sks' => 4,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5011',
                'deskripsi_mk' => 'Kaji proses metalurgi utama (pemadatan, penuaan, heat treatment) dan sistem paduan fasa untuk berbagai aplikasi industri.',
            ],
            [
                'nama_mk' => 'Materials Characterization Techniques',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5011',
                'deskripsi_mk' => 'Metode analisis material (XRD, SEM, TEM, DSC) untuk menentukan komposisi, struktur, dan sifat fisik material.',
            ],
            [
                'nama_mk' => 'Corrosion and Surface Engineering',
                'sks' => 3,
                'minimal_semester' => 4,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5011',
                'deskripsi_mk' => 'Teori korosi, mekanisme perlindungan permukaan, dan teknik perbaikan permukaan untuk material teknik.',
            ],
            [
                'nama_mk' => 'Advanced Materials for Industry 4.0',
                'sks' => 2,
                'minimal_semester' => 6,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5011',
                'deskripsi_mk' => 'Pengenalan material canggih (komposit, ceramic, bahan hijau) dan perannya dalam aplikasi manufaktur digital dan otomasi.',
            ],
            [
                'nama_mk' => 'Material Engineering Principles',
                'sks' => 3,
                'minimal_semester' => 1,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5011',
                'deskripsi_mk' => 'Pengenalan konsep dasar rekayasa material, sifat utama material, dan hubungan antara struktur mikro dengan perilaku mekanik pada material teknik.',
            ],
            [
                'nama_mk' => ' metallurgy and Foundry Tech',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5011',
                'deskripsi_mk' => 'Kaji proses metalurgi umum, termodinamika fasa, dan teknik pengecoran serta perlakuan panas untuk komponen logam.',
            ],
            [
                'nama_mk' => 'Forecasting and Quality Control',
                'sks' => 4,
                'minimal_semester' => 3,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5011',
                'deskripsi_mk' => 'Analisis tren, kontrol kualitas, dan metode pengujian untuk menjamin mutu material serta produk manufaktur.',
            ],
            [
                'nama_mk' => 'Anisotropic Mechanical Behavior',
                'sks' => 3,
                'minimal_semester' => 4,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5011',
                'deskripsi_mk' => 'Studi perilaku mekanik material anisotropik, uji tarik, modulus elastisitas, serta perbedaan sifat tergantung arah bahan.',
            ],
            [
                'nama_mk' => 'Materials Selection and Design',
                'sks' => 3,
                'minimal_semester' => 5,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5011',
                'deskripsi_mk' => 'Metode pemilihan material berdasarkan kebutuhan desain, biaya, kinerja, dan dampak lingkungan pada komponen teknik.',
            ],
            [
                'nama_mk' => 'Material Science Fundamentals',
                'sks' => 3,
                'minimal_semester' => 1,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5011',
                'deskripsi_mk' => 'Pengenalan konsep dasar material, struktur kristal, sifat fisis-kimia, serta hubungan antara mikrostruktur dan performa material.',
            ],
            [
                'nama_mk' => 'Mechanical Properties of Metals',
                'sks' => 4,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5011',
                'deskripsi_mk' => 'Analisis sifat mekanik logam, uji tarik, kelelahan, deformasi plastis, serta faktor yang mempengaruhi kinerja material di aplikasi teknik.',
            ],
            [
                'nama_mk' => 'Metallurgy and Heat Treatment',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5011',
                'deskripsi_mk' => 'Kaji proses metallurgi fasa, rekristalisasi, dan perlakuan panas untuk meningkatkan kekuatan, ketangguhan, serta keandalan material.',
            ],
            [
                'nama_mk' => 'Engineering Metallurgy Lab',
                'sks' => 2,
                'minimal_semester' => 4,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5011',
                'deskripsi_mk' => 'Praktikum laboratorium metallurgi untuk menguatkan konsep solidifikasi, identifikasi fasa, dan teknik analisis mikrostruktur.',
            ],
            [
                'nama_mk' => 'Corrosion and Protection of Metals',
                'sks' => 3,
                'minimal_semester' => 5,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5011',
                'deskripsi_mk' => 'Pemaparan mekanisme korosi pada logam dan langkah-langkah perlindungan korosif melalui desain material, cat, dan pelapis.',
            ],
            [
                'nama_mk' => 'Material Science Foundations',
                'sks' => 3,
                'minimal_semester' => 1,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5011',
                'deskripsi_mk' => 'Pengenalan sifat material, struktur kristal, ikatan atom, dan hubungan antara sifat mikro dan perilaku makro material.',
            ],
            [
                'nama_mk' => 'Metallo-Systems and Processes',
                'sks' => 4,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5011',
                'deskripsi_mk' => 'Bahan logam dan proses produksinya, termasuk heat treatment, deformasi plastis, dan mikrostruktur akhir.',
            ],
            [
                'nama_mk' => 'Material Characterization',
                'sks' => 3,
                'minimal_semester' => 3,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5011',
                'deskripsi_mk' => 'Metode karakterisasi material seperti SEM, XRD, TEM, dan teknik analisis termal.',
            ],
            [
                'nama_mk' => 'Mechanical Behavior of Metals',
                'sks' => 3,
                'minimal_semester' => 4,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5011',
                'deskripsi_mk' => 'Analisis perilaku mekanik logam: tegangan-regangan, modulus, kerja plastis, dan fraktur.',
            ],
            [
                'nama_mk' => 'Corrosion and Surface Engineering',
                'sks' => 2,
                'minimal_semester' => 5,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5011',
                'deskripsi_mk' => 'Koronasi pada logam, mekanisme korosi, perlindungan permukaan, dan coating.',
            ],

            // Teknik Sipil (5012) - 25 courses
            [
                'nama_mk' => 'Strength of Materials I',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5012',
                'deskripsi_mk' => 'Analisis beban, tegangan, dan deformasi pada material konstruksi serta konsep-konsep dasar kekuatan bahan untuk desain elemen struktural.',
            ],
            [
                'nama_mk' => 'Geoteknik Dasar',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5012',
                'deskripsi_mk' => 'Prinsip-prinsip geoteknik, sifat tanah, perilaku tanah non-linier, serta penerapan untuk fondasi dan stabilitas lereng.',
            ],
            [
                'nama_mk' => 'Hydraulic Engineering',
                'sks' => 4,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5012',
                'deskripsi_mk' => 'Konsep aliran air, hidrolika perairan, perancangan sistem irigasi, drainase, dan studi performa kanal.',
            ],
            [
                'nama_mk' => 'Structural Analysis and Design',
                'sks' => 4,
                'minimal_semester' => 4,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5012',
                'deskripsi_mk' => 'Metode analisis struktur, reduksi beban, dan perancangan elemen struktural dengan standar keamanan.',
            ],
            [
                'nama_mk' => 'Project Management for Civil Engineering',
                'sks' => 3,
                'minimal_semester' => 5,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5012',
                'deskripsi_mk' => 'Keterampilan merencanakan proyek konstruksi, manajemen sumber daya, jadwal, biaya, dan evaluasi risiko dalam proyek sipil.',
            ],
            [
                'nama_mk' => 'Struktur Bangunan I',
                'sks' => 3,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5012',
                'deskripsi_mk' => 'Pengantar analisis dan perancangan struktur beton bertulang serta elemen struktur utama bangunan guna meningkatkan kemampuan merancang struktur bangunan sipil.',
            ],
            [
                'nama_mk' => 'Hydraulics dan Hidrologi',
                'sks' => 4,
                'minimal_semester' => 4,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5012',
                'deskripsi_mk' => ' Praktikum dan teori aliran air, hidrolika jumlah, serta konsep dinamika aliran sungai untuk perencanaan dan desain sistem drainase.',
            ],
            [
                'nama_mk' => 'Konstruksi Beton Lanjut',
                'sks' => 3,
                'minimal_semester' => 5,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5012',
                'deskripsi_mk' => 'Metode desain beton bertulang tingkat lanjut, termasuk analisis kekuatan material dan praktik fabrikasi di lapangan.',
            ],
            [
                'nama_mk' => 'Transportation Engineering',
                'sks' => 3,
                'minimal_semester' => 4,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5012',
                'deskripsi_mk' => 'Analisis kapasitas jalan, perencanaan jaringan transportasi, dan evaluasi opsi mobilitas untuk kota dengan fokus pada infrastruktur ITS.',
            ],
            [
                'nama_mk' => 'Manajemen Proyek Sipil',
                'sks' => 2,
                'minimal_semester' => 2,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5012',
                'deskripsi_mk' => ' Prinsip-prinsip manajemen proyek, penjadwalan, anggaran, risiko, dan koordinasi antar disiplin dalam proyek konstruksi',
            ],
            [
                'nama_mk' => 'Statika Struktur dan Analisis Titik Balik',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5012',
                'deskripsi_mk' => 'Pengenalan prinsip statika, gaya pakai pada struktur, serta konsep keseimbangan dan perhitungan reaksi terhadap beban aksial dan lateral.',
            ],
            [
                'nama_mk' => 'Konstruksi Beton Bertulang',
                'sks' => 4,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5012',
                'deskripsi_mk' => 'Pembelajaran mengenai perencanaan, desain, dan penyusunan beton bertulang, termasuk perhitungan tulangan, kekuatan beton, dan faktor keamanan.',
            ],
            [
                'nama_mk' => 'Transport Engineering and Traffic Planning',
                'sks' => 3,
                'minimal_semester' => 4,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5012',
                'deskripsi_mk' => 'Studi perencanaan transportasi urban, analisis kebutuhan infrastruktur, serta model pergerakan lalu lintas dan kebijakannya.',
            ],
            [
                'nama_mk' => 'Hydrology and Water Resources',
                'sks' => 3,
                'minimal_semester' => 4,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5012',
                'deskripsi_mk' => 'Konsep aliran air, hidologi nyata, perencanaan sumber daya air, serta evaluasi dampak hidrologi pada proyek sipil.',
            ],
            [
                'nama_mk' => 'Geotechnical Engineering',
                'sks' => 4,
                'minimal_semester' => 5,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5012',
                'deskripsi_mk' => 'Kajian sifat tanah, interaksi tanah-struktur, serta metodologi desain fondasi, galian, dan stabilitas lereng.',
            ],
            [
                'nama_mk' => 'Struktur Bangunan II',
                'sks' => 3,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5012',
                'deskripsi_mk' => 'Melanjutkan materi Struktur Bangunan dengan fokus pada analisis beban gempa, kombinasi aksi, dan perancangan elemen struktural beton bertulang berukuran menengah.',
            ],
            [
                'nama_mk' => 'Hydraulic Engineering',
                'sks' => 4,
                'minimal_semester' => 4,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5012',
                'deskripsi_mk' => 'Pengenalan prinsip hidrolika untuk perancangan sistem saluran air, termasuk aliran turbulen, perhitungan head loss, dan kestabilan muka air.',
            ],
            [
                'nama_mk' => 'Geoteknik Pemodelan',
                'sks' => 3,
                'minimal_semester' => 4,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5012',
                'deskripsi_mk' => 'Pengenalan teknik pemodelan tanah, sifat-sifat tanah, dan penggunaan perangkat lunak untuk analisis stabilitas lereng dan fondasi.',
            ],
            [
                'nama_mk' => 'Manajemen Proyek Konstruksi',
                'sks' => 3,
                'minimal_semester' => 5,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5012',
                'deskripsi_mk' => 'Konsentrasi pada perencanaan, pengendalian biaya, jadwal, risiko, dan komunikasi dalam proyek konstruksi berskala menengah hingga besar.',
            ],
            [
                'nama_mk' => 'Estimasi Biaya dan Nilai Cakupan',
                'sks' => 2,
                'minimal_semester' => 6,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5012',
                'deskripsi_mk' => 'Teknik estimasi biaya proyek konstruksi, metodologi NPV/ROI, serta evaluasi risiko finansial dan nilai manfaat proyek.',
            ],
            [
                'nama_mk' => 'Structural Analysis I',
                'sks' => 3,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5012',
                'deskripsi_mk' => 'Analisis struktur statik untuk bangunan sederhana dengan fokus pada gaya eksternal, mobilitas variasi beban, dan perancangan elemen struktural utama.',
            ],
            [
                'nama_mk' => 'Geoteknik Dasar',
                'sks' => 3,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5012',
                'deskripsi_mk' => 'Pengenalan sifat tanah, perilaku tanah lunak dan keras, serta teknik investigasi tanah untuk desain fondasi dan lereng.',
            ],
            [
                'nama_mk' => 'Hydraulics Engineering',
                'sks' => 4,
                'minimal_semester' => 4,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5012',
                'deskripsi_mk' => 'Dasar-dasar hidrolika untuk sistem aliran air, perhitungan debit, tekanan hidrolik, dan desain saluran serta bendungan skala menengah.',
            ],
            [
                'nama_mk' => 'Material Teknologi Beton Bertulang',
                'sks' => 3,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5012',
                'deskripsi_mk' => 'Karakteristik beton bertulang, perhitungan kekuatan, serta desain elemen beton dalam konstruksi sipil.',
            ],
            [
                'nama_mk' => 'Rencana Kota dan Transportasi',
                'sks' => 3,
                'minimal_semester' => 5,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5012',
                'deskripsi_mk' => 'Pengenalan perencanaan wilayah, tata ruang, dan perancangan sistem transportasi berkelanjutan di lingkungan perkotaan.',
            ],

            // Arsitektur (5013) - 25 courses
            [
                'nama_mk' => 'Structure and Materials of Architecture',
                'sks' => 3,
                'minimal_semester' => 1,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5013',
                'deskripsi_mk' => 'Pengenalan prinsip struktur sederhana, jenis material, dan fasilitas bangunan. Mahasiswa mempelajari peran struktur dalam desain arsitektur serta cara memilih material yang relevan untuk proyek desain skala kecil.',
            ],
            [
                'nama_mk' => 'Architectural Design Studio 1',
                'sks' => 4,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5013',
                'deskripsi_mk' => 'Studio desain arsitektur tingkat dasar fokus pada perancangan blok bangunan sederhana, pengenalan proses desain, analisis konteks, dan penyajian gambar teknis serta model konseptual.',
            ],
            [
                'nama_mk' => 'Building Systems and Environmental Performance',
                'sks' => 3,
                'minimal_semester' => 4,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5013',
                'deskripsi_mk' => 'Pengantar sistem bangunan (MEP) dan kinerja lingkungan: HVAC, pencahayaan, ventilasi, serta evaluasi efisiensi energi dan kenyamanan termal.',
            ],
            [
                'nama_mk' => 'Advanced Structural Design',
                'sks' => 4,
                'minimal_semester' => 6,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5013',
                'deskripsi_mk' => 'Pendalaman gaya desain struktural, analisis beban, detail sambungan, dan integrasi struktur dengan konsep arsitektur untuk bangunan komersial.',
            ],
            [
                'nama_mk' => 'History of Architecture and Urban Form',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5013',
                'deskripsi_mk' => 'Kajian evolusi arsitektur dan bentuk kota dari berbagai budaya, dengan fokus pada konteks budaya, sejarah, dan perancangan ruang publik.',
            ],
            [
                'nama_mk' => 'Statistika Untuk Arsitektur',
                'sks' => 3,
                'minimal_semester' => 1,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5013',
                'deskripsi_mk' => 'Pengantar konsep statistika terapan untuk analisis data desain, perencanaan lokasi, dan evaluasi proyek arsitektur.',
            ],
            [
                'nama_mk' => 'Engineering Fundamentals in Building Systems',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5013',
                'deskripsi_mk' => 'Topik dasar rekayasa sistem bangunan termasuk mekanikal, elektrikal, dan tata udara untuk arsitektur modern.',
            ],
            [
                'nama_mk' => 'Desain Bangunan Berkelanjutan',
                'sks' => 4,
                'minimal_semester' => 4,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5013',
                'deskripsi_mk' => 'Prinsip desain ramah lingkungan, efisiensi energi, pemodelan simulasi bangunan, dan implementasi material berkelanjutan.',
            ],
            [
                'nama_mk' => 'Sejarah Arsitektur Kontemporer',
                'sks' => 2,
                'minimal_semester' => 3,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5013',
                'deskripsi_mk' => 'Kajian perkembangan arsitektur modern dan kontemporer dengan fokus konteks budaya Indonesia dan global.',
            ],
            [
                'nama_mk' => 'Perancangan Kota dan Lanskap',
                'sks' => 3,
                'minimal_semester' => 5,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5013',
                'deskripsi_mk' => 'Analisis perencanaan perkotaan, desain lanskap, ruang publik, dan hubungan antara arsitektur dengan lingkungan fisik kota.',
            ],
            [
                'nama_mk' => 'Structure and Materials for Architecture',
                'sks' => 3,
                'minimal_semester' => 1,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5013',
                'deskripsi_mk' => 'Mata kuliah ini memperkenalkan konsep struktur bangunan, material utama, serta sifat-sifat material seperti beton, baja, kayu, dan komposit yang relevan untuk perancangan arsitektur.',
            ],
            [
                'nama_mk' => 'Environmental Design and Sustainable Building',
                'sks' => 3,
                'minimal_semester' => 3,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5013',
                'deskripsi_mk' => 'Mata kuliah mengenai prinsip arsitektur ramah lingkungan, efisiensi energi, tata guna lahan, serta integrasi desain dengan kondisi lingkungan setempat untuk proyek arsitektur berkelanjutan.',
            ],
            [
                'nama_mk' => 'Architectural Design Studio I',
                'sks' => 4,
                'minimal_semester' => 4,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5013',
                'deskripsi_mk' => ' Studio desain arsitektur tingkat awal yang fokus pada explorasi bentuk, skema perancangan, dan presentasi konsep melalui model fisik serta gambar teknik.',
            ],
            [
                'nama_mk' => 'Cultural and Urban Contexts',
                'sks' => 3,
                'minimal_semester' => 5,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5013',
                'deskripsi_mk' => 'Mata kuliah yang membahas konteks budaya, sejarah kota, dan dinamika urban untuk memahami bagaimana faktor sosial mempengaruhi desain arsitektur.',
            ],
            [
                'nama_mk' => 'Building Technologies and Construction Systems',
                'sks' => 4,
                'minimal_semester' => 6,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5013',
                'deskripsi_mk' => ' Mempelajari sistem konstruksi bangunan, teknologi material, mekanika bangunan, serta praktik konstruksi yang relevan untuk implementasi desain arsitektur.',
            ],
            [
                'nama_mk' => 'Structural Analysis I',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5013',
                'deskripsi_mk' => 'Analisis struktur baja dan beton secara statik, menggunakan metode eksistensi gaya, serta perhitungan beban dan respons struktur dasar.',
            ],
            [
                'nama_mk' => 'Environmental Design Studio',
                'sks' => 4,
                'minimal_semester' => 4,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5013',
                'deskripsi_mk' => 'Studio desain lingkungan yang mengintegrasikan prinsip arsitektur berkelanjutan, studi konteks, material, dan teknik presentasi desain.',
            ],
            [
                'nama_mk' => 'Architectural History and Theory',
                'sks' => 3,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5013',
                'deskripsi_mk' => 'Pengenalan sejarah arsitektur dunia dan teori utama yang membentuk praktik arsitektur kontemporer, dengan studi kasus wilayah tropis.',
            ],
            [
                'nama_mk' => 'Building Services and MEP',
                'sks' => 3,
                'minimal_semester' => 5,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5013',
                'deskripsi_mk' => 'Dasar-dasar sistem layanan bangunan (MEP) seperti tata udara, listrik, air bersih, dan pengelolaan fasilitas untuk desain arsitektur.',
            ],
            [
                'nama_mk' => 'Urban Design and Pedestrian Systems',
                'sks' => 4,
                'minimal_semester' => 6,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5013',
                'deskripsi_mk' => 'Perancangan kota dan situs yang menekankan kehidupan pejalan kaki, mobilitas berkelanjutan, serta integrasi ruang publik dalam konteks perkotaan.',
            ],
            [
                'nama_mk' => 'Struktur Bangunan I',
                'sks' => 3,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5013',
                'deskripsi_mk' => 'Pengantar konsep struktur bangunan, analisis gaya luar, serta perancangan elemen struktur primer untuk bangunan bertingkat rendah.',
            ],
            [
                'nama_mk' => 'Architectural Design Studio I',
                'sks' => 4,
                'minimal_semester' => 5,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5013',
                'deskripsi_mk' => 'Praktik desain arsitektur skala kecil hingga menengah dengan fokus pada konsep, skema desain, dan presentasi arsitektur yang komprehensif.',
            ],
            [
                'nama_mk' => 'Fundamentals of Building Services',
                'sks' => 3,
                'minimal_semester' => 4,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5013',
                'deskripsi_mk' => 'Kuliah mengenai sistem utilitas gedung (listrik, mekanikal, akustik) dan integrasinya dalam rancangan arsitektur.',
            ],
            [
                'nama_mk' => 'Konstruksi Beton Bertulang',
                'sks' => 3,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5013',
                'deskripsi_mk' => 'Mempelajari sifat-sifat beton bertulang, perencanaan elemen struktur beton, serta perhitungan beban dan safety factor.',
            ],
            [
                'nama_mk' => 'Urban Design and Planning',
                'sks' => 3,
                'minimal_semester' => 4,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5013',
                'deskripsi_mk' => 'Kajian perancangan kota berskala menengah, termasuk tata guna lahan, sirkulasi, dan keharmonisan lingkungan urban.',
            ],

            // Teknik Lingkungan (5014) - 25 courses
            [
                'nama_mk' => 'Statistik Untuk Teknik Lingkungan',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5014',
                'deskripsi_mk' => 'Pengenalan konsep statistik dasar, analisis data lingkungan, dan penerapan metode statistik untuk evaluasi kualitas air, udara, dan limbah.',
            ],
            [
                'nama_mk' => 'Estimasi dan Perancangan Sistem Pengolahan Air Limbah',
                'sks' => 4,
                'minimal_semester' => 4,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5014',
                'deskripsi_mk' => 'Mempelajari prinsip-prinsip perancangan sistem pengolahan air limbah, estimasi kebutuhan kapasitas, serta evaluasi kinerja unit proses.',
            ],
            [
                'nama_mk' => 'Teknik Pengolahan Air Bersih',
                'sks' => 3,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5014',
                'deskripsi_mk' => 'Prinsip fisika-kimia untuk pengolahan air minum, teknik filtrasi, disinfeksi, dan kualitas air sesuai standar nasional.',
            ],
            [
                'nama_mk' => 'Geosains dan Sumber Daya Alam untuk Lingkungan',
                'sks' => 2,
                'minimal_semester' => 5,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5014',
                'deskripsi_mk' => 'Pengenalan geologi lingkungan, sumber daya alam, dampak lingkungan, serta peran geosains dalam mitigasi risiko bencana.',
            ],
            [
                'nama_mk' => 'Energi Terbarukan dan Kebijakan Lingkungan',
                'sks' => 3,
                'minimal_semester' => 6,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5014',
                'deskripsi_mk' => 'Kajiannya meliputi sumber energi terbarukan, integrasi ke sistem wilayah, dampak lingkungan, dan kebijakan energi.',
            ],
            [
                'nama_mk' => 'Statistika Dasar',
                'sks' => 3,
                'minimal_semester' => 1,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5014',
                'deskripsi_mk' => 'Pengenalan konsep dasar statistika, penyajian data, ukuran pemusatan dan penyebaran, serta penerapan pada masalah teknik lingkungan.',
            ],
            [
                'nama_mk' => 'Hydrology and Water Resources',
                'sks' => 4,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5014',
                'deskripsi_mk' => 'Pemodelan aliran air, peramalan curah hujan, dinamika air tanah, serta evaluasi sumber daya air untuk perancangan infrastruktur lingkungan.',
            ],
            [
                'nama_mk' => 'Pengelolaan limbah Cair',
                'sks' => 3,
                'minimal_semester' => 4,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5014',
                'deskripsi_mk' => 'Metode perancangan dan evaluasi sistem pengolahan limbah cair, prinsip perlindungan kualitas air, serta analisis dampak lingkungan.',
            ],
            [
                'nama_mk' => 'Statika dan Mekanika Tanah',
                'sks' => 2,
                'minimal_semester' => 2,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5014',
                'deskripsi_mk' => ' Pembahasan konsep keseimbangan gaya pada struktur dan sifat mekanik tanah serta penerapannya pada perancangan fondasi dan konstruksi lingkungan.',
            ],
            [
                'nama_mk' => 'Environmental Impact Assessment II',
                'sks' => 3,
                'minimal_semester' => 5,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5014',
                'deskripsi_mk' => 'Kaji dampak lingkungan secara lanjutan, metodologi EIA, studi kasus industri, dan rekomendasi mitigasi untuk proyek teknik lingkungan.',
            ],
            [
                'nama_mk' => 'Statistical Methods for Environmental Engineering',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5014',
                'deskripsi_mk' => 'Metode statistik dasar untuk analisis data lingkungan, termasuk descriptive statistics, distribusi probabilitas, dan uji hipotesis yang relevan untuk studi teknik lingkungan.',
            ],
            [
                'nama_mk' => 'Water Quality Engineering',
                'sks' => 4,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5014',
                'deskripsi_mk' => 'Perancangan dan evaluasi sistem perlindungan kualitas air, pengukuran parameter kualitas air, serta rekomendasi perlakuan untuk memenuhi standar lingkungan.',
            ],
            [
                'nama_mk' => 'Environmental Impact Assessment (EIA)',
                'sks' => 3,
                'minimal_semester' => 4,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5014',
                'deskripsi_mk' => 'Metodologi penyusunan dan evaluasi dampak lingkungan proyek infrastruktur, termasuk identifikasi, penilaian, dan mitigasi dampak potensial.',
            ],
            [
                'nama_mk' => 'Hydraulic Engineering and River Systems',
                'sks' => 3,
                'minimal_semester' => 5,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5014',
                'deskripsi_mk' => 'Konsep hidrolika, aliran sungai, dan desain sistem irigasi atau drainase yang berkelanjutan, dengan fokus pada praktik lapangan.',
            ],
            [
                'nama_mk' => 'Environmental Modelling and GIS',
                'sks' => 4,
                'minimal_semester' => 6,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5014',
                'deskripsi_mk' => 'Pengenalan pemodelan lingkungan menggunakan GIS dan simulasi numerik untuk menganalisis aliran, polusi, dan dampak kebijakan terhadap ekosistem.',
            ],
            [
                'nama_mk' => 'Statistik Lingkungan dan Kegunaan Data',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5014',
                'deskripsi_mk' => 'Pengenalan statistik dasar untuk analisis lingkungan, termasuk pemodelan distribusi, uji hipotesis, dan interpretasi data lapangan terkait teknik lingkungan.',
            ],
            [
                'nama_mk' => 'Engineering Fluid Mechanics II',
                'sks' => 4,
                'minimal_semester' => 4,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5014',
                'deskripsi_mk' => 'Mempelajari aliran fluida dalam sistem teknik lingkungan, tekanan, kecepatan, dan perancangan saluran menggunakan prinsip conservación momentum dan energi.',
            ],
            [
                'nama_mk' => 'Kimia Air dan Air Minum',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5014',
                'deskripsi_mk' => 'Analisis sifat kimia air, parameter kualitas air minum, serta teknologi pengolahan dasar untuk memenuhi standar kesehatan.',
            ],
            [
                'nama_mk' => 'Teknik Pengolahan Air Limbah B3',
                'sks' => 4,
                'minimal_semester' => 5,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5014',
                'deskripsi_mk' => 'Perancangan dan operasional pengolahan air limbah berbahaya serta pemantauan kualitas, sesuai regulasi lingkungan hidup.',
            ],
            [
                'nama_mk' => 'Environmental Impact Assessment (EIA)',
                'sks' => 3,
                'minimal_semester' => 6,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5014',
                'deskripsi_mk' => 'Metode penilaian dampak lingkungan pada proyek teknik, identifikasi parameter dampak, dan penyusunan rencana mitigasi serta pelaporannya.',
            ],
            [
                'nama_mk' => 'Statistika for Environmental Engineering',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5014',
                'deskripsi_mk' => 'Pengenalan konsep statistik dan metode analisis data lingkungan, termasuk distribusi probabilitas, uji hipotesis, dan analisis regresi untuk data kualitas air dan udara.',
            ],
            [
                'nama_mk' => 'Environmental Chemistry and Processes',
                'sks' => 4,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5014',
                'deskripsi_mk' => 'Studi kimia lingkungan, reaksi kimia di atmosfer dan air, serta proses pengolahan dan pemantauan kualitas air tanah.',
            ],
            [
                'nama_mk' => 'Hydrology and Water Resources',
                'sks' => 3,
                'minimal_semester' => 4,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5014',
                'deskripsi_mk' => 'Analisis aliran air, hidrologi permukaan dan bawah tanah, serta perancangan solusi konservasi sumber daya air.',
            ],
            [
                'nama_mk' => 'Surveying and Mapping for Environment',
                'sks' => 2,
                'minimal_semester' => 2,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5014',
                'deskripsi_mk' => 'Teknik survei dasar, pemetaan lahan, dan penggunaan alat ukur untuk pemodelan spasial lingkungan.',
            ],
            [
                'nama_mk' => 'Environmental Impact Assessment',
                'sks' => 3,
                'minimal_semester' => 5,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5014',
                'deskripsi_mk' => 'Metode kajian dampak lingkungan, identifikasi aspek lingkungan, dan penyusunan dokumen EIA untuk proyek teknik lingkungan.',
            ],

            // Perencanaan Wilayah dan Kota (5015) - 25 courses
            [
                'nama_mk' => 'Perencanaan Wilayah Kota: Konsep dan Metodologi',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5015',
                'deskripsi_mk' => 'Pengenalan konsep perencanaan wilayah dan kota, tujuan, ruang lingkup, serta metodologi analisis kebutuhan ruang dan tata guna lahan.',
            ],
            [
                'nama_mk' => 'Urban Planning Studio: Spatial Design and Implementation',
                'sks' => 4,
                'minimal_semester' => 4,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5015',
                'deskripsi_mk' => 'Studio praktikum merancang rencana tata ruang kota berkelanjutan, termasuk simulasi penggunaan lahan, transportasi, dan partisipasi publik.',
            ],
            [
                'nama_mk' => 'Economic Fundamentals for Spatial Planning',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5015',
                'deskripsi_mk' => 'Pengenalan prinsip ekonomi yang relevan untuk perencanaan wilayah, analisis biaya-manfaat, dan dampak kebijakan pada pembangunan kota.',
            ],
            [
                'nama_mk' => 'Geoinformatics for Urban Planning',
                'sks' => 3,
                'minimal_semester' => 3,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5015',
                'deskripsi_mk' => 'Pengantar GIS and remote sensing untuk pemetaan lahan, simulasi permukiman, dan analisis kepadatan penduduk.',
            ],
            [
                'nama_mk' => 'Sustainable Transport and Mobility',
                'sks' => 4,
                'minimal_semester' => 5,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5015',
                'deskripsi_mk' => 'Konsep transportasi berkelanjutan, evaluasi jaringan transportasi kota, dan desain solusi mobilitas ramah lingkungan.',
            ],
            [
                'nama_mk' => 'Kebijakan Perencanaan Wilayah dan Kota',
                'sks' => 3,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5015',
                'deskripsi_mk' => 'Pengenalan konsep kebijakan perencanaan wilayah dan kota, analisis isu urban, dan proses perumusan rencana tata ruang di tingkat kota dan regional.',
            ],
            [
                'nama_mk' => 'Urban Design Studio',
                'sks' => 4,
                'minimal_semester' => 5,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5015',
                'deskripsi_mk' => 'Studio desain urban berfokus pada pengembangan sketsa desain kota, publik spaces, mobilitas, dan pemanfaatan lahan berkelanjutan dalam konteks wilayah perkotaan.',
            ],
            [
                'nama_mk' => 'Geografi Kota dan Sistem Informasi Geografis',
                'sks' => 3,
                'minimal_semester' => 4,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5015',
                'deskripsi_mk' => 'Pengantar geografi kota, data spasial, pemetaan, dan penggunaan GIS untuk analisis pola pemanfaatan lahan serta jaringan transportasi.',
            ],
            [
                'nama_mk' => 'Sistem Transportasi dan Mobilitas Perkotaan',
                'sks' => 3,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5015',
                'deskripsi_mk' => 'Kajian terhadap jaringan transportasi urban, perencanaan mobilitas, aksesibilitas, dan kebijakan transportasi berkelanjutan serta dampaknya terhadap tata ruang.',
            ],
            [
                'nama_mk' => 'Analisis Kebijakan Lingkungan dalam Perencanaan Wilayah',
                'sks' => 2,
                'minimal_semester' => 6,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5015',
                'deskripsi_mk' => 'Membedah aspek lingkungan dalam perencanaan wilayah, penilaian dampak lingkungan, serta strategi adaptasi perubahan iklim pada kota.',
            ],
            [
                'nama_mk' => 'Spatial Planning Theory',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5015',
                'deskripsi_mk' => 'Teori perencanaan wilayah dan kota, fokus pada kerangka kebijakan, analisis kebutuhan ruang, serta integrasi aspek sosial, ekonomi, dan lingkungan.',
            ],
            [
                'nama_mk' => 'Pemetaan Wilayah dan SIG',
                'sks' => 4,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5015',
                'deskripsi_mk' => 'Pengenalan Sistem Informasi Geografis untuk pemetaan wilayah, data spasial, analisis jarak, dan visualisasi peta tematik.',
            ],
            [
                'nama_mk' => 'Urban Design Studio',
                'sks' => 3,
                'minimal_semester' => 4,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5015',
                'deskripsi_mk' => 'Studio desain kota yang mengutamakan tata ruang, sirkulasi pejalan kaki, ruang publik, dan konsep desain berkelanjutan.',
            ],
            [
                'nama_mk' => 'Transportasi Berkelanjutan',
                'sks' => 3,
                'minimal_semester' => 5,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5015',
                'deskripsi_mk' => 'Prinsip transportasi berkelanjutan, model aliran lalu lintas, analisis dampak, serta kebijakan transportasi ramah lingkungan.',
            ],
            [
                'nama_mk' => 'Kebijakan Perencanaan Wilayah',
                'sks' => 2,
                'minimal_semester' => 6,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5015',
                'deskripsi_mk' => 'Analisis kebijakan perencanaan wilayah, hak guna lahan, tata kelola tata ruang, dan evaluasi implementasi program perencanaan.',
            ],
            [
                'nama_mk' => 'Analisis Perkotaan: Teori dan Praktik',
                'sks' => 3,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5015',
                'deskripsi_mk' => 'Pengantar konsep perencanaan wilayah dan kota dengan pendekatan analitis, studi kasus kota Indonesia, serta pemodelan kebutuhan ruang dan infrastruktur.',
            ],
            [
                'nama_mk' => 'Kebijakan Wilayah dan Pembangunan Kota',
                'sks' => 3,
                'minimal_semester' => 4,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5015',
                'deskripsi_mk' => 'Studi tentang kebijakan publik di tingkat regional, evaluasi dampak kebijakan terhadap tata ruang, transportasi, dan lingkungan.',
            ],
            [
                'nama_mk' => 'Geografis Desa dan Perkotaan',
                'sks' => 2,
                'minimal_semester' => 2,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5015',
                'deskripsi_mk' => 'Pengenalan karakteristik wilayah perdesaan dan perkotaan, dengan fokus pada dinamika penggunaan lahan dan akses layanan.',
            ],
            [
                'nama_mk' => 'Urban Design Studio',
                'sks' => 4,
                'minimal_semester' => 6,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5015',
                'deskripsi_mk' => 'Studio desain urban berorientasi konteks lokal ITS, mengintegrasikan tata ruang, mobilitas, dan estetika lingkungan.',
            ],
            [
                'nama_mk' => 'Analisis Sistem Transportasi Kota',
                'sks' => 3,
                'minimal_semester' => 5,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5015',
                'deskripsi_mk' => 'Metodologi analisis transportasi urban menggunakan data real-time, simulasi, dan perencanaan jaringan untuk mendukung mobilitas warga.',
            ],
            [
                'nama_mk' => 'Perencanaan Wilayah and Kota Dasar',
                'sks' => 3,
                'minimal_semester' => 1,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5015',
                'deskripsi_mk' => 'Pengantar konsep perencanaan wilayah dan kota, tujuan pembangunan berkelanjutan, serta keterkaitan antara kebijakan publik, tata ruang, dan transportasi.',
            ],
            [
                'nama_mk' => 'Geografi Kota dan Lokasi Strategis',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5015',
                'deskripsi_mk' => 'Analisis konsep lokasi, distribusi penduduk, serta pola urbanisasi untuk mendukung desain wilayah yang efisien.',
            ],
            [
                'nama_mk' => 'Rencana Kawasan Permukiman',
                'sks' => 4,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5015',
                'deskripsi_mk' => 'Metode perancangan kawasan permukiman berkelanjutan, evaluasi kebutuhan layanan publik, dan integrasi fasilitas umum.',
            ],
            [
                'nama_mk' => 'Sistem Transportasi Kota',
                'sks' => 3,
                'minimal_semester' => 4,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5015',
                'deskripsi_mk' => 'Analisis jaringan transportasi, modalitas, perencanaan kapasitas, dan dampak lingkungan pada mobilitas urban.',
            ],
            [
                'nama_mk' => 'Lingkungan Hidup dan Tata Ruang',
                'sks' => 2,
                'minimal_semester' => 2,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5015',
                'deskripsi_mk' => 'Konsep lingkungan hidup, tata ruang berbasis ekologi, serta kebijakan perlindungan sumber daya alam di kota.',
            ],

            // Teknik Geomatika (5016) - 25 courses
            [
                'nama_mk' => 'Introduction to Geomatics and Mapping',
                'sks' => 3,
                'minimal_semester' => 1,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5016',
                'deskripsi_mk' => 'Pengantar geometri, sistem referensi, dan konsep dasar pemetaan dengan fokus pada aplikasi pemetaan topografi dan SIG di ITS.',
            ],
            [
                'nama_mk' => 'Geodetic Surveying I',
                'sks' => 4,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5016',
                'deskripsi_mk' => 'Metode survei geodetik dasar termasuk peralatan, akurasi pengukuran teodolit, total station, dan pengolahan data lapangan untuk pembuatan jaringan geodetik.',
            ],
            [
                'nama_mk' => 'Geomatics Data Processing',
                'sks' => 3,
                'minimal_semester' => 3,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5016',
                'deskripsi_mk' => 'Pengolahan data spasial dan non-spasial menggunakan perangkat lunak GIS, kartografi, serta teknik presentasi hasil analisis geospatial.',
            ],
            [
                'nama_mk' => 'Remote Sensing and Image Analysis',
                'sks' => 3,
                'minimal_semester' => 4,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5016',
                'deskripsi_mk' => 'Pengenalan prinsip penginderaan jauh, sensor satelit, pengolahan citra, klasifikasi, dan interpretasi data citra untuk pemetaan wilayah.',
            ],
            [
                'nama_mk' => 'Engineering Surveying and Field Practice',
                'sks' => 2,
                'minimal_semester' => 5,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5016',
                'deskripsi_mk' => 'Praktikum survei teknik, pemetaan lapangan, penggunaan instrumen geodesi, serta integrasi data lapangan ke dalam model GIS/3D.',
            ],
            [
                'nama_mk' => 'Survei Udara dan Pemetaan Digital',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5016',
                'deskripsi_mk' => 'Pengantar teknik survei udara, pemetaan digital, serta penggunaan perangkat lunak GIS untuk menangkap, memproses, dan menghasilkan peta topografi.',
            ],
            [
                'nama_mk' => 'Geodesi dan Sistem Referensi Koordinat',
                'sks' => 4,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5016',
                'deskripsi_mk' => 'Mempelajari konsep geodesi, sistem referensi koordinat global dan lokal, serta transformasi dada data spasial untuk akurasi geospasial.',
            ],
            [
                'nama_mk' => 'Pemetaan Permukaan Bumi dengan Drone',
                'sks' => 3,
                'minimal_semester' => 4,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5016',
                'deskripsi_mk' => 'Teknik pemetaan menggunakan drone, perencanaan misinya, pemrosesan citra, dan validasi hasil pemetaan lapangan.',
            ],
            [
                'nama_mk' => 'Pengolahan Citra Satelit untuk Geomatika',
                'sks' => 3,
                'minimal_semester' => 5,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5016',
                'deskripsi_mk' => 'Analisis citra satelit, klasifikasi, clustering, dan integrasi dengan data spasial untuk aplikasi geomatika.',
            ],
            [
                'nama_mk' => 'Analisis Data Geospasial dan Visualisasi',
                'sks' => 2,
                'minimal_semester' => 6,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5016',
                'deskripsi_mk' => 'Metode analisis data geospasial, visualisasi temporal-spasial, dan interpretasi peta untuk mendukung pengambilan keputusan.',
            ],
            [
                'nama_mk' => 'Geometri Ruang dan Sistem Koordinat',
                'sks' => 3,
                'minimal_semester' => 1,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5016',
                'deskripsi_mk' => 'Pengenalan konsep geometri ruang, koordinatKartesian, proyeksi peta, dan penerapan sistem referensi pada pembuatan peta teknis.',
            ],
            [
                'nama_mk' => 'Fotogrametri dan Penginderaan Jarak Jauh',
                'sks' => 4,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5016',
                'deskripsi_mk' => 'Materi tentang teknik fotogrametri, interpretasi citra satelit, kalibrasi sensor, serta pemetaan berbasis citra untuk keperluan geospasial.',
            ],
            [
                'nama_mk' => 'Geomatik Listrik dan Sensor',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5016',
                'deskripsi_mk' => 'Pengantar sensor geospasial elektro-magnetik, pengukuran jarak, dan integrasi data sensor untuk dukungan pemetaan.',
            ],
            [
                'nama_mk' => 'Topik Terapan Geomatika: Kestabilan Data Spatial',
                'sks' => 2,
                'minimal_semester' => 1,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5016',
                'deskripsi_mk' => 'Pengantar konsep kualitas data spatial, validasi, dan metodologi perbaikan data untuk proyek pemetaan skala kampus.',
            ],
            [
                'nama_mk' => 'Praktikum Sistem Koordinat dan Pemetaan',
                'sks' => 2,
                'minimal_semester' => 4,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5016',
                'deskripsi_mk' => 'Praktikum lapangan dan laboratorium terkait sistem koordinat, pengukuran jarak, dan penyiapan data GIS untuk presentasi peta.',
            ],
            [
                'nama_mk' => 'Matematika Dasar',
                'sks' => 3,
                'minimal_semester' => 1,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5016',
                'deskripsi_mk' => 'Pengenalan konsep dasar kalkulus, aljabar linear, dan geometri analitik untuk membangun fondasi matematika teknik.',
            ],
            [
                'nama_mk' => 'Geodesi Udara dan Kartografi',
                'sks' => 4,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5016',
                'deskripsi_mk' => 'Topik geodetik pemetaan udara, instrumen fotogrametri, serta teknik pembuatan peta dan analisis citra fitur geospasial.',
            ],
            [
                'nama_mk' => 'Engineering Surveying and GIS',
                'sks' => 3,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5016',
                'deskripsi_mk' => 'Metode survei teknik dan pengolahan data GIS untuk pemetaan wilayah, termasuk koordinat referensi dan kualitas data.',
            ],
            [
                'nama_mk' => 'Statistika untuk Geomatika',
                'sks' => 3,
                'minimal_semester' => 4,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5016',
                'deskripsi_mk' => 'Statistika terapan untuk analisis data geospasial, inferensi parameter, serta visualisasi hasil penelitian.',
            ],
            [
                'nama_mk' => 'Pemodelan Terrain dan Elevasi',
                'sks' => 3,
                'minimal_semester' => 5,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5016',
                'deskripsi_mk' => 'Konsep pemodelan elevasi, DTM/DSM, serta analisis profil topografi menggunakan perangkat lunak GIS dan pemrograman sederhana.',
            ],
            [
                'nama_mk' => 'Geodesy Fundamentals',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5016',
                'deskripsi_mk' => 'Pengenalan konsep geodesi, referensi sistem koordinat, konsep datum, dan dasar pengukuran jauh untuk pemetaan permukaan bumi.',
            ],
            [
                'nama_mk' => 'Remote Sensing and Image Analysis',
                'sks' => 4,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5016',
                'deskripsi_mk' => 'Kajian teknik penginderaan jauh, sensor kamera udara dan satelit, pemrosesan citra, serta aplikasi analisis spasial pada pemetaan topografi.',
            ],
            [
                'nama_mk' => 'Geospatial Data Integration',
                'sks' => 3,
                'minimal_semester' => 4,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5016',
                'deskripsi_mk' => 'Metode integrasi data geospasial dari berbagai sumber (vector, raster, tabular) ke dalam satu basis analitik untuk GIS.',
            ],
            [
                'nama_mk' => 'Geospatial Programming',
                'sks' => 3,
                'minimal_semester' => 5,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5016',
                'deskripsi_mk' => 'Pengantar pemrograman untuk analisis geospasial menggunakan Python/JavaScript, termasuk manipulasi data, visualisasi, dan automasi tugas GIS.',
            ],
            [
                'nama_mk' => 'Geodetic Adjustment and Adjustment Theory',
                'sks' => 4,
                'minimal_semester' => 6,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5016',
                'deskripsi_mk' => 'Teori penyesuaian geodetik, konsep kesalahan, estimasi maksimum likelihood, dan latihan praktis dengan contoh data survei.',
            ],

            // Teknik Geofisika (5017) - 25 courses
            [
                'nama_mk' => 'Geofisika Dasar I',
                'sks' => 3,
                'minimal_semester' => 1,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5017',
                'deskripsi_mk' => 'Pengantar prinsip geofisika dasar, termasuk konsep gelombang, seismik dan pola respons media geologi terhadap getaran.',
            ],
            [
                'nama_mk' => 'Explorasi Migas Lanjutan',
                'sks' => 4,
                'minimal_semester' => 3,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5017',
                'deskripsi_mk' => 'Analisis teknik eksplorasi minyak dan gas bumi dengan fokus pada metode geofisika elektrik dan seismik, serta evaluasi prospek lapangan.',
            ],
            [
                'nama_mk' => 'Geofisika Kuantitatif',
                'sks' => 3,
                'minimal_semester' => 4,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5017',
                'deskripsi_mk' => 'Pengenalan pemodelan matematis pada data geofisika untuk estimasi sifat fisik batuan dan risiko sumber daya.',
            ],
            [
                'nama_mk' => 'Nuclear and Seismic Methods',
                'sks' => 3,
                'minimal_semester' => 4,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5017',
                'deskripsi_mk' => 'Studi metode seismik dan inti dalam konteks keamanan nuklir, kalibrasi alat, serta interpretasi sinyal seismik.',
            ],
            [
                'nama_mk' => 'Geologi Struktur untuk Geofisika',
                'sks' => 2,
                'minimal_semester' => 5,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5017',
                'deskripsi_mk' => 'Analisis tektonik, deformasi batuan, serta penerapan prinsip struktur geologi pada pemetaan bawah permukaan.',
            ],
            [
                'nama_mk' => 'Geodesi Dasar',
                'sks' => 3,
                'minimal_semester' => 1,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5017',
                'deskripsi_mk' => 'Pengantar teknik geodetik untuk pemetaan permukaan bumi, konsep koordinat, sistem referensi geodetik, dan pengukuran dasar menggunakan instrumen geodetik.',
            ],
            [
                'nama_mk' => 'Engineering Geophysics Methods',
                'sks' => 4,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5017',
                'deskripsi_mk' => 'Metode geofisika terapan untuk eksplorasi sumber daya, termasuk seismic refraction, gravity, dan magnetik dengan studi kasus di lingkungan marin dan daratan.',
            ],
            [
                'nama_mk' => 'Pemetaan Geologi dan Struktur',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5017',
                'deskripsi_mk' => 'Kelas pemetaan geologi berbasis lapangan dan teori struktur bumi, analisis sesar, lipatan, serta interpretasi peta geologi.',
            ],
            [
                'nama_mk' => 'Sistem Informasi Geofisika',
                'sks' => 2,
                'minimal_semester' => 2,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5017',
                'deskripsi_mk' => 'Pengenalan penggunaan GIS untuk manajemen data geofisika, pemodelan spasial, dan visualisasi data lapangan.',
            ],
            [
                'nama_mk' => 'Vibrasi dan Gelombang Geofisika',
                'sks' => 3,
                'minimal_semester' => 4,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5017',
                'deskripsi_mk' => 'Analisis gelombang seismik, parameter kecepatan, waktu tiba, dan interpretasi data getaran untuk karakterisasi bawah permukaan.',
            ],
            [
                'nama_mk' => 'Geofisika Struktur dan Geometri Bumi',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5017',
                'deskripsi_mk' => 'Mata kuliah ini membahas konsep geometri struktur bumi, teknik pemetaan struktur geologi, serta interpretasi data geofisika untuk memahami lapisan lesap, lipatan, dan patahan dengan fokus pada aplikasi reservoir dan eksplorasi.',
            ],
            [
                'nama_mk' => 'Seismik Refleksi dan Inversi',
                'sks' => 4,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5017',
                'deskripsi_mk' => 'Mata kuliah ini memperkenalkan prinsip seismik refleksi, pemrosesan data, dan teknik inversi untuk meramalkan properti batuan bawah permukaan serta identifikasi zona sumber energi.',
            ],
            [
                'nama_mk' => 'Teknik Akuifer dan Hidrogeologi',
                'sks' => 3,
                'minimal_semester' => 4,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5017',
                'deskripsi_mk' => 'Mata kuliah mengenai karakteristik akuifer, aliran air tanah, dan metode evaluasi potensi hidrogeologi untuk kebutuhan air bersih dan mitigasi banjir.',
            ],
            [
                'nama_mk' => 'Metode Pemodelan Geofisika',
                'sks' => 3,
                'minimal_semester' => 5,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5017',
                'deskripsi_mk' => 'Mata kuliah tentang pemodelan numerik untuk memprediksi respons geofisika terhadap variasi reservoir, termasuk simulasi tanpa dan dengan data observasi.',
            ],
            [
                'nama_mk' => 'Sistem Observasi Geofisika Lintasan',
                'sks' => 2,
                'minimal_semester' => 6,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5017',
                'deskripsi_mk' => 'Pengenalan peralatan dan jaringan observasi geofisika lapangan, perancangan eksperimen, serta analisis data untuk monitoring lingkungan dan sumber daya alam.',
            ],
            [
                'nama_mk' => 'Geofisika Material dan Sumber Daya',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5017',
                'deskripsi_mk' => 'Mengenalkan sifat fisik batuan, mineral, dan sumber daya alam, serta teknik evaluasi material untuk aplikasi geofisika seperti seismik, gravier, dan magnetik.',
            ],
            [
                'nama_mk' => 'Penelitian Geofisika Terapan',
                'sks' => 4,
                'minimal_semester' => 4,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5017',
                'deskripsi_mk' => 'Kuliah praktikum dan proyek penelitian yang membahas desain studi geofisika terapan, pengolahan data, serta interpretasi hasil untuk kajian lapangan.',
            ],
            [
                'nama_mk' => 'Geofisika Struktur dan Reservoir',
                'sks' => 3,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5017',
                'deskripsi_mk' => 'Pembelajaran mengenai struktur bumi, rezervoar geologi, serta bagaimana data seismik dan grafitologi digunakan untuk memahami kedalaman hingga sifat batuan.',
            ],
            [
                'nama_mk' => 'Seismologi dan Sinyal Geofisika',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5017',
                'deskripsi_mk' => 'Pengantar teori gelombang seismik, pemrosesan sinyal, serta teknik interpretasi data seismik untuk identifikasi lapisan dan kejadian bawah permukaan.',
            ],
            [
                'nama_mk' => 'Geofisika Lingkungan dan Dilemma Energi',
                'sks' => 2,
                'minimal_semester' => 5,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5017',
                'deskripsi_mk' => 'Kajian dampak lingkungan dari kegiatan eksplorasi geofisika, metodologi survei lingkungan, dan evaluasi alternatif energi berkelanjutan.',
            ],
            [
                'nama_mk' => 'Geofisika Dasar I',
                'sks' => 3,
                'minimal_semester' => 1,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5017',
                'deskripsi_mk' => 'Pembelajaran konsep dasar geofisika, pengukuran fisik, dan prinsip seismik untuk memahami struktur bumi secara umum.',
            ],
            [
                'nama_mk' => 'Geologi Struktur dan Stratigrafi',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5017',
                'deskripsi_mk' => 'Analisis struktur geologi, lipatan, sesar, dan bagaimana stratigrafi memandu interpretasi wilayah geologi.',
            ],
            [
                'nama_mk' => 'Advanced Seismology',
                'sks' => 4,
                'minimal_semester' => 4,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5017',
                'deskripsi_mk' => 'Metode seismik lanjut, inversi data mentah, dan interpretasi gambar seismik untuk menentukan properti batuan.',
            ],
            [
                'nama_mk' => 'Geofisika Fisik: Prospeksi Air Tanah',
                'sks' => 3,
                'minimal_semester' => 3,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5017',
                'deskripsi_mk' => 'Aplikasi geofisika untuk mendeteksi dan memetakan muka air tanah serta kualitas air di daerah tambang.',
            ],
            [
                'nama_mk' => 'Oil & Gas Exploration Geophysics',
                'sks' => 3,
                'minimal_semester' => 5,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5017',
                'deskripsi_mk' => 'Metodik eksplorasi minyak dan gas menggunakan teknik resistivitas, gravimetrik, dan seismik untuk area kajian tertentu.',
            ],

            // Teknik Perkapalan (5018) - 25 courses
            [
                'nama_mk' => 'Statistika Teknik Kelautan',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5018',
                'deskripsi_mk' => 'Materi statistik dasar untuk analisis data teknik kapal: pengukuran, distribusi probabilitas, inferensi, dan pemodelan risiko pada proyek kelautan.',
            ],
            [
                'nama_mk' => 'Engineering Fluid Mechanics',
                'sks' => 4,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5018',
                'deskripsi_mk' => 'Pengantar mekanika fluida untuk rekayasa kapal: persamaan dasar, aliran laminer dan turbulen, serta aplikasi pada sistem ballast dan propulsi.',
            ],
            [
                'nama_mk' => 'Konstruksi Kapal dan Struktur Aluminium',
                'sks' => 3,
                'minimal_semester' => 4,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5018',
                'deskripsi_mk' => ' Desain dan fabrikasi komponen kapal dengan fokus pada struktur aluminium, kekuatan material, analisis beban, serta praktik keselamatan kerja.',
            ],
            [
                'nama_mk' => 'Rekayasa Sistem Kelautan Lanjut',
                'sks' => 3,
                'minimal_semester' => 5,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5018',
                'deskripsi_mk' => 'Mengintegrasikan subsistem kapal melalui arsitektur sistem, pemodelan perilaku kapal, dan manajemen proyek berkelanjutan.',
            ],
            [
                'nama_mk' => 'Marine IoT and Sensors',
                'sks' => 2,
                'minimal_semester' => 6,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5018',
                'deskripsi_mk' => 'Pengenalan Internet of Things di lingkungan kelautan: sensor, komunikasi laut, keamanan data, dan analitik berbasis cloud untuk pemantauan kapal.',
            ],
            [
                'nama_mk' => 'Statistika untuk Perkapalan',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5018',
                'deskripsi_mk' => 'Pengantar konsep statistika dasar untuk analisis data eksperimen di bidang perkapalan, mencakup probabilitas, distribusi, dan interpretasi hasil.',
            ],
            [
                'nama_mk' => 'Engineering Fundamentals: Mechanics',
                'sks' => 3,
                'minimal_semester' => 1,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5018',
                'deskripsi_mk' => ' Mata kuliah pengantar teori mekanika untuk jurusan teknik kapal, membahas gaya, keseimbangan, dan analisis gaya pada struktur kapal.',
            ],
            [
                'nama_mk' => 'Konstruksi Kapal dan Struktur Lanjutan',
                'sks' => 4,
                'minimal_semester' => 4,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5018',
                'deskripsi_mk' => 'Perancangan dan analisis elemen struktural kapal, mencakup beban, kekuatan material, serta metode perancangan menggunakan standar industri.',
            ],
            [
                'nama_mk' => 'Technologi dan Kunst: Sistem Propulsi Kapal',
                'sks' => 2,
                'minimal_semester' => 3,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5018',
                'deskripsi_mk' => 'Kuliah pilihan tentang prinsip sistem propulsi kapal, termasuk mesin utama, sistem penggerak ganda, dan efisiensi energi.',
            ],
            [
                'nama_mk' => 'Manajemen Proyek Kelautan',
                'sks' => 3,
                'minimal_semester' => 5,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5018',
                'deskripsi_mk' => 'Pembelajaran mengenai perencanaan proyek kelautan, estimasi biaya, risiko, dan koordinasi tim dalam konteks pembangunan kapal dan fasilitas pelabuhan.',
            ],
            [
                'nama_mk' => 'Structural Mechanics I',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5018',
                'deskripsi_mk' => 'Pengenalan konsep mekanika struktur kapal, analisis gaya внутр, dan aplikasi pada perancangan kerangka kapal serta evaluasi beban hidrostatik.',
            ],
            [
                'nama_mk' => 'Ship Hydrostatics and Stability',
                'sks' => 4,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5018',
                'deskripsi_mk' => 'Materi keseimbangan kapal di air, perhitungan stabilitas, metrik GZ, dan evaluasi tren stabilitas selama perubahan muatan.',
            ],
            [
                'nama_mk' => 'Marine Electrical Systems',
                'sks' => 3,
                'minimal_semester' => 4,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5018',
                'deskripsi_mk' => 'Pembelajaran sistem kelistrikan kapal, instalasi kabel, proteksi, dan pemeliharaan sistem kelistrikan kapal permukaan.',
            ],
            [
                'nama_mk' => 'Propulsion and Powerplant',
                'sks' => 4,
                'minimal_semester' => 5,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5018',
                'deskripsi_mk' => 'Studi mesin utama kapal, sistem propulsi, manajemen daya, dan analisis efisiensi mesin dalam operasi nyata.',
            ],
            [
                'nama_mk' => 'Naval Architecture Design Studio',
                'sks' => 2,
                'minimal_semester' => 6,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5018',
                'deskripsi_mk' => 'Studio desain arsitektur kapal mencakup tata letak pelat mayor, stabilitas, dan integrasi sistem untuk konsep kapal baru.',
            ],
            [
                'nama_mk' => 'Port State and Ship Systems',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5018',
                'deskripsi_mk' => 'Pengantar konsep desain kapal, sistem permesinan utama, dan sumber daya energi yang digunakan pada kapal perdagangan serta dasar keselamatan pelayaran.',
            ],
            [
                'nama_mk' => 'Marine Electrical Systems',
                'sks' => 4,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5018',
                'deskripsi_mk' => 'Studi tentang sistem kelistrikan kapal, including generation, distribution, protection, dan kontrol automasi untuk kapal modern.',
            ],
            [
                'nama_mk' => 'Ship Hydrodynamics',
                'sks' => 3,
                'minimal_semester' => 4,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5018',
                'deskripsi_mk' => 'Analisis aliran fluida di sekitar hull kapal, drag, laju kapal, dan metode pemodelan untuk peningkatan efisiensi tenaga laut.',
            ],
            [
                'nama_mk' => 'Naval Architecture Design',
                'sks' => 3,
                'minimal_semester' => 5,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5018',
                'deskripsi_mk' => 'Prinsip-prinsip desain arsitektur kapal, termasuk bentuk hull, stabilitas, dan perencanaan struktur untuk kapal komersial.',
            ],
            [
                'nama_mk' => 'Maritime Safety and Regulations',
                'sks' => 2,
                'minimal_semester' => 2,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5018',
                'deskripsi_mk' => 'Persyaratan keselamatan pelayaran, standar klasifikasi, dan peraturan internasional serta praktik operasional yang aman.',
            ],
            [
                'nama_mk' => 'Statistika Generasi Kapal dan Desain Sistem',
                'sks' => 3,
                'minimal_semester' => 1,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5018',
                'deskripsi_mk' => 'Pengenalan teknik statistik untuk analisis performa kapal, dengan fokus pada data performa pelayaran, kegagalan, dan pemodelan risiko dalam industri perkapalan.',
            ],
            [
                'nama_mk' => 'Hydrodynamics I',
                'sks' => 4,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5018',
                'deskripsi_mk' => 'Dasar-dasar hidrodinamika untuk desain kurva kapal, aliran fluida, gaya apung, dan stabilitas kapal pada berbagai kondisi pelayaran.',
            ],
            [
                'nama_mk' => 'Engineering Drawing and CAD for Ship Design',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5018',
                'deskripsi_mk' => 'Praktikum gambar teknik dan CAD untuk pemodelan komponen kapal, pembuatan gambar kerja, serta standar grafis industri kelautan.',
            ],
            [
                'nama_mk' => 'Structural Mechanics for Ships',
                'sks' => 3,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5018',
                'deskripsi_mk' => 'Analisis beban dan gaya pada konstruksi kapal, prinsip kekuatan material, serta desain elemen struktural utama.',
            ],
            [
                'nama_mk' => 'Naval Architecture Theory',
                'sks' => 3,
                'minimal_semester' => 4,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5018',
                'deskripsi_mk' => 'Konsep arsitektur kapal, tata letak ruang, keseimbangan sistem dan optimasi skema daya apung serta stabilitas.',
            ],

            // Teknik Sistem Perkapalan (5019) - 25 courses
            [
                'nama_mk' => 'Statistika Dasar untuk Teknik Sistem Perkapalan',
                'sks' => 3,
                'minimal_semester' => 1,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5019',
                'deskripsi_mk' => 'Pengenalan konsep statistik dasar, distribusi probabilitas, estimasi parameter, dan uji hipotesis dengan fokus pada aplikasi di bidang teknik perkapalan.',
            ],
            [
                'nama_mk' => 'Konstruksi Kapal dan Perancangan Hull',
                'sks' => 4,
                'minimal_semester' => 5,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5019',
                'deskripsi_mk' => 'Mata kuliah mengenai prinsip desain hull, stabilitas, beban serta perhitungan konstruksi kapal untuk memastikan keamanan dan kinerja operasional.',
            ],
            [
                'nama_mk' => 'Thermodynamics and Heat Transfer for Marine Systems',
                'sks' => 3,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5019',
                'deskripsi_mk' => 'Analisis hukum termodinamika pada sistem maritim, transfer panas, dan aplikasi energi dalam kapal termasuk mesin utama dan sistem propulsi.',
            ],
            [
                'nama_mk' => 'Manajemen Proyek Teknika Perkapalan',
                'sks' => 2,
                'minimal_semester' => 4,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5019',
                'deskripsi_mk' => 'Konsep manajemen proyek, perencanaan, jadwal, anggaran, serta evaluasi risiko pada proyek rekayasa perkapalan.',
            ],
            [
                'nama_mk' => ' Sistem Otomasi Kapal dan Instrumentasi',
                'sks' => 3,
                'minimal_semester' => 6,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5019',
                'deskripsi_mk' => 'Pengenalan sistem kendali otomatis kapal, sensor, aktuator, dan integrasi dengan sistem navigasi serta keselamatan.',
            ],
            [
                'nama_mk' => 'Statistika I',
                'sks' => 3,
                'minimal_semester' => 1,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5019',
                'deskripsi_mk' => 'Pengantar konsep statistika, pengukuran variabilitas, distribusi dasar, dan penerapan analisis data pada masalah teknik kapal untuk mendukung pengambilan keputusan.',
            ],
            [
                'nama_mk' => 'Engineering Economics and Project Management',
                'sks' => 3,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5019',
                'deskripsi_mk' => 'Analisis biaya-manfaat, estimasi biaya proyek, alokasi sumber daya, dan perencanaan proyek dalam konteks teknikal kapal serta perkapalan domestik.',
            ],
            [
                'nama_mk' => 'Hydrostatics and Buoyancy',
                'sks' => 4,
                'minimal_semester' => 4,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5019',
                'deskripsi_mk' => 'Mempelajari prinsip hidrostatik, hukum Archimedes, perhitungan gaya apung, dan desain sistem kelasi kapal untuk stabilitas dasar.',
            ],
            [
                'nama_mk' => 'Ship Propulsion Systems',
                'sks' => 4,
                'minimal_semester' => 6,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5019',
                'deskripsi_mk' => 'Analisis sistem propulsi kapal, mesin utama dan bantu, efisiensi energi, serta integrasi with powertrain pada kapal militer dan sipil.',
            ],
            [
                'nama_mk' => 'Material Science for Marine Structures',
                'sks' => 3,
                'minimal_semester' => 5,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5019',
                'deskripsi_mk' => 'Pengenalan material industri kelautan, sifat mekanik logam dan komposit, teknik evaluasi, serta pilihan material untuk konstruksi kapal dan dermaga.',
            ],
            [
                'nama_mk' => 'Manajemen Proyek Kelautan',
                'sks' => 3,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5019',
                'deskripsi_mk' => 'Mata kuliah ini membahas konsep manajemen proyek khusus di lingkungan kemaritiman, mulai dari perencanaan, pengelolaan risiko, hingga evaluasi biaya dan jadwal proyek perkapalan.',
            ],
            [
                'nama_mk' => 'Engineering Graphics dan CAD',
                'sks' => 4,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5019',
                'deskripsi_mk' => 'Pengenalan teknik gambar teknik dan pemodelan CAD untuk desain kapal, termasuk standarisasi gambar, kreativitas desain, serta penggunaan perangkat lunak CAD industri.',
            ],
            [
                'nama_mk' => 'Konstruksi Kapal Konvensional',
                'sks' => 3,
                'minimal_semester' => 4,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5019',
                'deskripsi_mk' => 'Analisis perancangan dan konstruk kapal dari segi bahan, beban, stabilitas, dan praktik konstruksi kapal tradisional dengan studi kasus nyata.',
            ],
            [
                'nama_mk' => 'Sistem Navigasi dan Otomasi Kapal',
                'sks' => 3,
                'minimal_semester' => 5,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5019',
                'deskripsi_mk' => 'Mata kuliah mengenai prinsip navigasi modern, sensor kapal, autopilot, dan integrasi sistem kendali untuk meningkatkan efisiensi pelayaran.',
            ],
            [
                'nama_mk' => 'Kecerdasan Buatan untuk Perancangan Kapal',
                'sks' => 2,
                'minimal_semester' => 6,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5019',
                'deskripsi_mk' => 'Pengenalan konsep AI dan penerapannya pada desain kapal, optimasi tata letak, prediksi beban, serta simulasi guna meningkatkan performa dan keselamatan.',
            ],
            [
                'nama_mk' => 'Ship Systems and Marine Machinery',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5019',
                'deskripsi_mk' => 'Mata kuliah ini membahas sistem kapal dan mesin utama, termasuk perencanaan pemeliharaan, interaksi antara sistem propulsi, kelistrikan, serta komunikasi kapal.',
            ],
            [
                'nama_mk' => 'Engineering Fundamentals for Naval Architecture',
                'sks' => 4,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5019',
                'deskripsi_mk' => 'Mata kuliah inti yang menjelaskan konsep dasar rekayasa untuk perencanaan kapal, analisis beban, stabilitas, dan desain kerangka.',
            ],
            [
                'nama_mk' => 'Hydrostatics and Hydrodynamics I',
                'sks' => 3,
                'minimal_semester' => 4,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5019',
                'deskripsi_mk' => 'Mata kuliah pengantar hidrostatik dan hidrodinamika yang membahas gaya-air, Plunging line, dan aplikasi pada perancangan lambung kapal.',
            ],
            [
                'nama_mk' => 'Marine Propulsion Systems',
                'sks' => 4,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5019',
                'deskripsi_mk' => 'Studi tentang sistem propulsi kapal modern, termasuk mesin utama, gas turbine, dan efisiensi energi serta pemilihan propulsi.',
            ],
            [
                'nama_mk' => 'Offshore Engineering Concepts',
                'sks' => 2,
                'minimal_semester' => 5,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5019',
                'deskripsi_mk' => 'Pengenalan konsep teknik lepas pantai, struktur rigs, analisis lingkungan kerja laut, dan studi kasus proyek offshore.',
            ],
            [
                'nama_mk' => 'Introduction to Naval Architecture',
                'sks' => 3,
                'minimal_semester' => 1,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5019',
                'deskripsi_mk' => 'Pengantar prinsip desain kapal, struktur utama, dan peran teknik sistem kapal dalam konstruksi serta operasional kapal. Mencakup gambaran umum permesinan, stabilitas, dan keamanan pelayaran.',
            ],
            [
                'nama_mk' => 'Statika dan Dinamika Struktur Kapal',
                'sks' => 4,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5019',
                'deskripsi_mk' => 'Menganalisis beban, reaksi tumpuan, gaya dan momen pada struktur lambung kapal. Menggunakan metode grafis dan analitis untuk evaluasi respon struktur terhadap beban statik dan dinamis.',
            ],
            [
                'nama_mk' => 'Hydrodynamics for Ship Systems',
                'sks' => 3,
                'minimal_semester' => 3,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5019',
                'deskripsi_mk' => 'Pelajaran mengenai aliran fluida di sekitar kapal, gaya drag, lift, serta dampaknya terhadap efisiensi pelayaran dan navigasi. Aplikasi pada desain bentuk lembaran kapal.',
            ],
            [
                'nama_mk' => 'Pengantar Energi Terbarukan untuk Kapal',
                'sks' => 2,
                'minimal_semester' => 2,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5019',
                'deskripsi_mk' => 'Gambaran umum sumber energi terbarukan yang relevan untuk industri perkapalan, termasuk konsep penyimpanan energi, efisiensi, dan implikasi lingkungan.',
            ],
            [
                'nama_mk' => 'Kebutuhan Sistem Kelautan dan Keamanan',
                'sks' => 3,
                'minimal_semester' => 4,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5019',
                'deskripsi_mk' => 'Kebutuhan keselamatan, peraturan klasifikasi, serta standar keselamatan kapal, pelayaran, dan penanganan darurat. Pembelajaran berbasis studi kasus.',
            ],

            // Teknik Kelautan (5020) - 25 courses
            [
                'nama_mk' => 'Pengantar Teknik Kelautan',
                'sks' => 3,
                'minimal_semester' => 1,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5020',
                'deskripsi_mk' => 'Pengenalan bidang teknik kelautan, sejarah, bidang studi, serta konsep dasar perancangan dan operasi fasilitas kelautan.',
            ],
            [
                'nama_mk' => 'Statika dan Struktur Kapal',
                'sks' => 4,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5020',
                'deskripsi_mk' => 'Analisis gaya-gaya pada kapal dan struktur lambung; perancangan elemen struktur untuk kekuatan dan keselamatan pelayaran.',
            ],
            [
                'nama_mk' => 'Energi Laut dan Pengolahan Material',
                'sks' => 3,
                'minimal_semester' => 3,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5020',
                'deskripsi_mk' => 'Mengenal sumber energi laut, efisiensi energi kapal, serta penggunaan material komposit dan proses pengolahan material terkait.',
            ],
            [
                'nama_mk' => 'Kapal Patroli dan Keselamatan Pelayaran',
                'sks' => 2,
                'minimal_semester' => 4,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5020',
                'deskripsi_mk' => 'Standar keselamatan pelayaran, manuver dasar kapal patroli, serta prosedur darurat dan komunikasi maritim.',
            ],
            [
                'nama_mk' => 'Operasi dan Pemeliharaan Peralatan Kelautan',
                'sks' => 3,
                'minimal_semester' => 5,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5020',
                'deskripsi_mk' => 'Teknik operasi rutin, diagnostik kerusakan, perawatan preventif, dan pengawasan performa peralatan kelautan.',
            ],
            [
                'nama_mk' => 'Statistik Multivariat untuk Kelautan',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5020',
                'deskripsi_mk' => 'Pengenalan konsep statistika multivariat untuk analisis data kelautan, termasuk regresi, analisis klaster, dan analisis faktor dengan contoh data laut.',
            ],
            [
                'nama_mk' => 'Hydrodinamika Lanjutan',
                'sks' => 4,
                'minimal_semester' => 4,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5020',
                'deskripsi_mk' => 'Mempelajari persamaan gerak fluida, Potensi aliran, dan aplikasi numerik untuk perairan pantai dan lepas pantai.',
            ],
            [
                'nama_mk' => 'Engineering Ferryadi Pelabuhan dan Navigasi',
                'sks' => 3,
                'minimal_semester' => 3,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5020',
                'deskripsi_mk' => 'Mengarahkan konsep desain fasilitas dermaga, manajemen pelabuhan, dan navigasi aman untuk operasional kapal di perairan Indonesia.',
            ],
            [
                'nama_mk' => 'Kebutuhan Energi Kelautan & Energi Laut Raya',
                'sks' => 3,
                'minimal_semester' => 5,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5020',
                'deskripsi_mk' => 'Analisis kebutuhan energi di sektor kelautan, termasuk energi terbarukan maritim dan efisiensi konsumsi energi pada kapal.',
            ],
            [
                'nama_mk' => 'Statika dan Struktur Kapal I',
                'sks' => 4,
                'minimal_semester' => 4,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5020',
                'deskripsi_mk' => 'Dasar perancangan struktur kapal, analisis beban, stability, dan material komposit untuk aquakultur serta transportasi laut.',
            ],
            [
                'nama_mk' => 'Statistik Kelautan I',
                'sks' => 3,
                'minimal_semester' => 1,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5020',
                'deskripsi_mk' => 'Pengenalan konsep statistik yang relevan untuk perencanaan dan evaluasi aktivitas kelautan, termasuk distribusi probabilitas dasar dan analisis data lapangan.',
            ],
            [
                'nama_mk' => 'Navigasi Laut II',
                'sks' => 4,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5020',
                'deskripsi_mk' => 'Pembelajaran teknik navigasi menggunakan sistem satelit dan alat bantu navigasi tradisional untuk pelayaran jarak menengah.',
            ],
            [
                'nama_mk' => 'Teknik Pemodelan Gelombang',
                'sks' => 3,
                'minimal_semester' => 4,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5020',
                'deskripsi_mk' => 'Pemodelan gelombang laut menggunakan persamaan fisika dasar, simulasi numerik, dan verifikasi data eksperimen.',
            ],
            [
                'nama_mk' => 'Engineering Economics for Maritime Projects',
                'sks' => 2,
                'minimal_semester' => 2,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5020',
                'deskripsi_mk' => 'Analisis kelayakan finansial proyek kelautan, kapan IMR, NPV, dan ROI perlu dipertimbangkan dalam perencanaan anggaran.',
            ],
            [
                'nama_mk' => 'Kewirausahaan Kelautan',
                'sks' => 3,
                'minimal_semester' => 5,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5020',
                'deskripsi_mk' => 'Pengembangan ide usaha di sektor kelautan, termasuk studi pasar, prototyping bisnis, dan tanggung jawab sosial.',
            ],
            [
                'nama_mk' => 'Fundamentals of Ship Design',
                'sks' => 3,
                'minimal_semester' => 1,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5020',
                'deskripsi_mk' => 'Pengantar prinsip desain kapal, perhitungan stabilitas dasar, dan faktor keselamatan yang memengaruhi rancangan hull serta struktur utama.',
            ],
            [
                'nama_mk' => 'Marine Hydrodynamics',
                'sks' => 4,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5020',
                'deskripsi_mk' => 'Menganalisis perilaku aliran dan gaya pada permukaan kapal beroperasi di berbagai kondisi laut, termasuk bilge, gelombang, dan resistensi.',
            ],
            [
                'nama_mk' => 'Coastal Engineering and Ocean Structures',
                'sks' => 3,
                'minimal_semester' => 4,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5020',
                'deskripsi_mk' => 'Pemodelan tata kelola pesisir, desain struktur pantai, dan interaksi struktur dengan lingkungan laut serta sedimentasi.',
            ],
            [
                'nama_mk' => 'Biodiesel and Marine Fuels',
                'sks' => 2,
                'minimal_semester' => 2,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5020',
                'deskripsi_mk' => 'Studi bahan bakar berkelanjutan untuk kapal, sifat fisik-kimia biodiesel, serta dampak lingkungan dan ekonomi penggunaannya.',
            ],
            [
                'nama_mk' => 'Naval Architecture Project Seminar',
                'sks' => 4,
                'minimal_semester' => 6,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5020',
                'deskripsi_mk' => 'Riset independen berorientasi desain kapal nyata dengan presentasi teknis, evaluasi keberlanjutan, dan analisis performa melalui studi kasus.',
            ],
            [
                'nama_mk' => 'Statistik Kelautan I',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5020',
                'deskripsi_mk' => 'Pengantar konsep statistika dasar, pengumpulan data, analisis deskriptif, dan interpretasi data kelautan untuk mendukung riset maritim.',
            ],
            [
                'nama_mk' => 'Dasar-Dasar Sistem Kelautan',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5020',
                'deskripsi_mk' => 'Pengantar konsep sistem kelautan meliputi interaksi antara ekosistem, infrastruktur, dan kebijakan kelautan untuk memahami dinamika wilayah pesisir.',
            ],
            [
                'nama_mk' => 'Marine Engineering Drawing',
                'sks' => 2,
                'minimal_semester' => 4,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5020',
                'deskripsi_mk' => 'Pelajaran gambar teknik kelautan, interpreting blueprints, dan pembuatan gambar kerja untuk perangkat kapal.',
            ],
            [
                'nama_mk' => 'Perancangan Kapal I',
                'sks' => 4,
                'minimal_semester' => 5,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5020',
                'deskripsi_mk' => 'Konstruksi umum kapal, prinsip stabilitas, perancangan badan kapal, dan analisis beban terhadap desain awal.',
            ],
            [
                'nama_mk' => 'Hydrography and Navigation',
                'sks' => 3,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5020',
                'deskripsi_mk' => 'Teknik pengukuran hidrografi, pemetaan dasar laut, dan prinsip navigasi dasar untuk pelayaran aman.',
            ],

            // Teknik Transportasi Laut (5021) - 25 courses
            [
                'nama_mk' => 'Statika dan Struktur Kapal',
                'sks' => 4,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5021',
                'deskripsi_mk' => 'Mata kuliah ini membahas konsep statika kapal, perancangan struktur utama, beban aksi, dan analisis gaya untuk memastikan keamanan dan kestabilan konstruksi kapal.',
            ],
            [
                'nama_mk' => 'Desain Sistem Transportasi Laut',
                'sks' => 3,
                'minimal_semester' => 3,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5021',
                'deskripsi_mk' => 'Mata kuliah ini membahas perancangan sistem transportasi maritim modern, termasuk rute, kapasitas, dan integrasi dengan infrastruktur pelabuhan.',
            ],
            [
                'nama_mk' => 'Engineering Economics for Maritime Projects',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5021',
                'deskripsi_mk' => 'Pengenalan prinsip ekonomi teknik untuk proyek maritim, analisis biaya manfaat, CAPEX vs OPEX, dan evaluasi kelayakan investasi.',
            ],
            [
                'nama_mk' => 'Hydrodinamics for Ships',
                'sks' => 4,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5021',
                'deskripsi_mk' => 'Mata kuliah ini membahas prinsip hidrodinamika yang mendasari desain lambung kapal, performa di berbagai kecepatan, dan simulasi aliran air.',
            ],
            [
                'nama_mk' => 'Manajemen Proyek Perkapalan',
                'sks' => 3,
                'minimal_semester' => 4,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5021',
                'deskripsi_mk' => 'Topik manajemen proyek khusus untuk proyek kapal dan fasilitas maritim, mencakup perencanaan, jadwal, risiko, dan kendali biaya.',
            ],
            [
                'nama_mk' => 'Statistika Dasar',
                'sks' => 3,
                'minimal_semester' => 1,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5021',
                'deskripsi_mk' => 'Pengenalan konsep statistik deskriptif dan inferensi dasar, probabilitas, serta aplikasi analisis data untuk keperluan perkuliahan teknik transportasi laut.',
            ],
            [
                'nama_mk' => 'Engineering Fundamentals for Maritime Systems',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5021',
                'deskripsi_mk' => 'Matakuliah pengantar rekayasa sistem maritim mencakup dasar-dasar fisika, mekanika fluida, dan evaluasi kinerja sistem transportasi laut.',
            ],
            [
                'nama_mk' => 'Shipping Operations and Logistics',
                'sks' => 4,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5021',
                'deskripsi_mk' => 'Analisis operasi pelayaran, perencanaan rute, manajemen rantai pasok pelabuhan, serta optimisasi biaya logistik pada sektor laut.',
            ],
            [
                'nama_mk' => 'Maritime Safety and Security',
                'sks' => 3,
                'minimal_semester' => 4,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5021',
                'deskripsi_mk' => 'Aspek keselamatan pelayaran, standar kepatuhan, manajemen risiko keamanan maritim, dan respons insiden di wilayah perairan nasional.',
            ],
            [
                'nama_mk' => 'Hydrodynamics and Vessel Performance',
                'sks' => 4,
                'minimal_semester' => 5,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5021',
                'deskripsi_mk' => 'Pemahaman aliran fluida sekitar hull, gaya huyung, serta analisis performa kapal melalui persamaan dasar hidrodinamika dan simulasi.',
            ],
            [
                'nama_mk' => 'Pengantar Teknik Transportasi Laut',
                'sks' => 3,
                'minimal_semester' => 1,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5021',
                'deskripsi_mk' => 'Mata kuliah pengantar tentang konsep dasar teknik transportasi laut, peran pelayaran, logistik maritim, dan tren industri kapal serta regulasi yang mempengaruhi operasi pelayaran.',
            ],
            [
                'nama_mk' => 'Konstruk Building dan Struktur Kapal',
                'sks' => 4,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5021',
                'deskripsi_mk' => 'Pengenalan desain struktur kapal, bata beton? maaf maksudnya perancangan struktur kapal, analisis beban, material kapal, dan teknik perawatan struktural.',
            ],
            [
                'nama_mk' => 'Sistem Navigasi dan Kontrol Kapal',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5021',
                'deskripsi_mk' => 'Mata kuliah mengenai sistem navigasi modern, instrumen azimuth, autopilot, AIS, dan integrasi data untuk keamanan pelayaran.',
            ],
            [
                'nama_mk' => 'Manajemen Operasi Pelabuhan',
                'sks' => 3,
                'minimal_semester' => 4,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5021',
                'deskripsi_mk' => 'Kursus tentang perencanaan dan pengendalian operasi di pelabuhan, manajemen fasilitas, aliran kargo, dan koordinasi lintas lembaga.',
            ],
            [
                'nama_mk' => 'Energi Terbarukan untuk Alat Angkut Laut',
                'sks' => 2,
                'minimal_semester' => 5,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5021',
                'deskripsi_mk' => 'Mata kuliah singkat mengenai penggunaan sumber energi terbarukan di industri transportasi laut, efisiensi energi, dan kebijakan lingkungan.',
            ],
            [
                'nama_mk' => 'Hukum Laut dan Kebijakan Nautika',
                'sks' => 3,
                'minimal_semester' => 1,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5021',
                'deskripsi_mk' => 'Mata kuliah wajib yang membahas hukum maritim, perizinan pelayaran, dan kebijakan nasional terkait keselamatan dan lingkungan laut.',
            ],
            [
                'nama_mk' => 'Manajemen Transportasi Laut',
                'sks' => 3,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5021',
                'deskripsi_mk' => 'Kuliah wajib tentang perencanaan operasional pelayaran, manajemen biaya, dan optimasi rute kapal serta kepuasan pelanggan.',
            ],
            [
                'nama_mk' => 'Ekonomi Maritim dan Analisis Pasar',
                'sks' => 4,
                'minimal_semester' => 4,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5021',
                'deskripsi_mk' => 'Mata kuliah pilihan yang membahas analisis pasar pelayaran, struktur tarif, serta dampak faktor ekonomi terhadap industri galangan kapal.',
            ],
            [
                'nama_mk' => 'TeknikPerkapalan: Kinerja Kapal',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5021',
                'deskripsi_mk' => 'Pelajaran wajib mengenai perpindahan beban, stabilitas, dan kinerja mesin kapal dalam berbagai kondisi pelayaran.',
            ],
            [
                'nama_mk' => 'Sistem Navigasi dan Teknologi Sumber Daya',
                'sks' => 2,
                'minimal_semester' => 2,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5021',
                'deskripsi_mk' => 'Mata kuliah pilihan yang memperkenalkan sistem navigasi modern, AIS, autopilot, dan integrasi sensor untuk operasi kapal yang aman.',
            ],
            [
                'nama_mk' => 'Strength of Seafaring Vessels',
                'sks' => 3,
                'minimal_semester' => 1,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5021',
                'deskripsi_mk' => 'Introductory course on structural integrity, hull forms, and basic stability of marine vessels used in offshore transport.',
            ],
            [
                'nama_mk' => 'Ship Stability and Trim',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5021',
                'deskripsi_mk' => 'Fundamental concepts of stability, righting arms, metacentric height, and trim calculations for ships during loading and maneuvering.',
            ],
            [
                'nama_mk' => 'Navigational Theory and Practice',
                'sks' => 4,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5021',
                'deskripsi_mk' => 'Principles of coastal navigation, chart work, compass corrections, and introduction to electronic navigation systems.',
            ],
            [
                'nama_mk' => 'Marine Hydrodynamics',
                'sks' => 3,
                'minimal_semester' => 4,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5021',
                'deskripsi_mk' => 'Study of fluid flow around hulls, resistance, propulsion concepts, and basics of seakeeping and maneuvering.',
            ],
            [
                'nama_mk' => 'Port Operations and Logistics',
                'sks' => 4,
                'minimal_semester' => 5,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5021',
                'deskripsi_mk' => 'Overview of port planning, cargo handling, terminal operations, and logistics optimization for maritime transport.',
            ],

            // Teknik Elektro (5022) - 25 courses
            [
                'nama_mk' => 'Matematika Dasar',
                'sks' => 3,
                'minimal_semester' => 1,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5022',
                'deskripsi_mk' => 'Pengantar konsep matematika dasar seperti fungsi, limit, turunan, integral, dan aplikasi dalam analisis teknik.',
            ],
            [
                'nama_mk' => 'Elektronika Dasar',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5022',
                'deskripsi_mk' => ' Dasar-dasar komponen elektronik, rangkaian linear, analisis sisa tegangan, dan praktikum penguat operasional.',
            ],
            [
                'nama_mk' => 'Fizika Teknik I',
                'sks' => 4,
                'minimal_semester' => 1,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5022',
                'deskripsi_mk' => 'Pengantar fenomena fisika yang relevan untuk teknik elektro, termasuk mekanika, gelombang, dan termodinamika dasar.',
            ],
            [
                'nama_mk' => 'Pengantar Pemrograman',
                'sks' => 2,
                'minimal_semester' => 2,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5022',
                'deskripsi_mk' => ' Dasar-dasar pemrograman menggunakan Python untuk simulasi, analisis data, dan automasi tugas teknik.',
            ],
            [
                'nama_mk' => 'Sistem Kendali Linear',
                'sks' => 3,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5022',
                'deskripsi_mk' => ' Dasar teori kendali linier, diagram blok, stabilitas, dan aplikasi kontrol pada sistem teknik elektro.',
            ],
            [
                'nama_mk' => 'Matematika Dasar II',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5022',
                'deskripsi_mk' => 'Lanjutan dari Matematika Dasar I, membahas integral, deret, limit, dan aplikasi teknik elektro.',
            ],
            [
                'nama_mk' => 'Circuit Analysis II',
                'sks' => 4,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5022',
                'deskripsi_mk' => 'Analisis rangkaian listrik menggunakan konsep superposisi, Thevenin, Norton, dan analisis frekuensi pada rangkaian AC/DC.',
            ],
            [
                'nama_mk' => 'Pemrograman Mikrokontroler',
                'sks' => 3,
                'minimal_semester' => 4,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5022',
                'deskripsi_mk' => 'Pengantar pemrograman mikrokontroler berbasis Arduino/STM32, termasuk I/O, timer, dan komunikasi serial.',
            ],
            [
                'nama_mk' => 'Probabilitas dan Statistik Insinyur',
                'sks' => 3,
                'minimal_semester' => 4,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5022',
                'deskripsi_mk' => 'Konsep probabilitas, distribusi, estimasi, dan uji hipotesis dengan fokus pada aplikasi rekayasa.',
            ],
            [
                'nama_mk' => 'Elektronika Medan Frekuensi',
                'sks' => 4,
                'minimal_semester' => 5,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5022',
                'deskripsi_mk' => 'Mempelajari perangkat elektronika dengan fokus pada desain rangkaian frekuensi tinggi dan karakteristik komponen.',
            ],
            [
                'nama_mk' => 'Kedokteran Lingkungan untuk Sains Sistem',
                'sks' => 3,
                'minimal_semester' => 1,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5022',
                'deskripsi_mk' => 'Mata kuliah ini memperkenalkan konsep dasar lingkungan dan kesehatan masyarakat, termasuk kualitas udara, air, serta prinsip mitigasi polusi bagi rekayasa elektro.',
            ],
            [
                'nama_mk' => 'Fundamentals of Electrical Circuits',
                'sks' => 4,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5022',
                'deskripsi_mk' => 'Rangkaian listrik dasar, hukum Ohm dan Kirchoff, analisis rangkaian AC/DC, serta aplikasi analitis pada sistem tenaga.',
            ],
            [
                'nama_mk' => 'Pengolahan Sinyal Digital',
                'sks' => 3,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5022',
                'deskripsi_mk' => 'Teori sinyal, sampling, transformasi Fourier diskret, filter digital, dan implementasi algoritma pemrosesan sinyal pada perangkat keras internal.',
            ],
            [
                'nama_mk' => 'Power Electronics dan Konversi Energi',
                'sks' => 3,
                'minimal_semester' => 4,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5022',
                'deskripsi_mk' => 'Konsep konversi energi menggunakan perangkat daya elektronik, topologi konverter, kontrol daya, dan aplikasi pada sistem tenaga terbarukan.',
            ],
            [
                'nama_mk' => 'Mikrocontroler untuk Sistem Elektro',
                'sks' => 2,
                'minimal_semester' => 3,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5022',
                'deskripsi_mk' => 'Pengenalan mikrokontroler, arsitektur dasar, pemrograman tingkat rendah, serta penerapan pada sensor dan aktuator dalam sistem elektro.',
            ],
            [
                'nama_mk' => 'Matematika Dasar 1',
                'sks' => 4,
                'minimal_semester' => 1,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5022',
                'deskripsi_mk' => 'Pengenalan konsep kalkulus, limit, turunan, dan integral sebagai dasar analisis matematika untuk teknik elektro.',
            ],
            [
                'nama_mk' => 'Electronic Circuits I',
                'sks' => 4,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5022',
                'deskripsi_mk' => 'Analisis rangkaian listrik dasar, hukum Kirchhoff, transformasi impedance, dan penerapan pada sirkuit elektronik umum.',
            ],
            [
                'nama_mk' => 'Pengantar Teknologi Telekomunikasi',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5022',
                'deskripsi_mk' => 'Pengenalan konsep dasar telekomunikasi, modulasi, transmisi data, dan topik komunikasi nirkabel.',
            ],
            [
                'nama_mk' => 'Desain Sistem Embedded',
                'sks' => 3,
                'minimal_semester' => 4,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5022',
                'deskripsi_mk' => 'Rancang bangun sistem tertanam dengan mikrokontroler, pemrograman real-time, serta integrasi sensor dan aktuator.',
            ],
            [
                'nama_mk' => 'Statistika untuk Teknik Elektro',
                'sks' => 2,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5022',
                'deskripsi_mk' => 'Dasar-dasar statistika terapan untuk analisis data eksperimen pada bidang teknik elektro, termasuk konsep probabilitas dan distribusi.',
            ],
            [
                'nama_mk' => 'Aljabar Linear untuk Teknik Elektro',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5022',
                'deskripsi_mk' => 'Pengenalan konsep ruang vektor, basis, dimensi, serta penerapan matriks dan transformasi linear untuk analisis sinyal, sistem kendali, dan komputasi elektrik.',
            ],
            [
                'nama_mk' => 'Sistem Kendali Lanjut (Advanced Control Systems)',
                'sks' => 4,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5022',
                'deskripsi_mk' => 'Mempelajari desain kendali pada sistem dinamis dengan pendekatan modern, termasuk kontrol PID, state-space, dan simulasi respons sistem.',
            ],
            [
                'nama_mk' => 'Rangkaian Elektrostatik dan Elektromagnetik',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5022',
                'deskripsi_mk' => 'Memahami hukum-hukum dasar elektrostatik dan elektromagnetik, analisis rangkaian, serta aplikasi pada perangkat elektromagnetik.',
            ],
            [
                'nama_mk' => 'Elektronika Dasar 1 (Analog Electronics)',
                'sks' => 3,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5022',
                'deskripsi_mk' => 'Pengantar komponen analog seperti transistor, op-amp, dan rangkaian linear; memahami karakteristik, biasing, dan analisis sirkuit.',
            ],
            [
                'nama_mk' => 'Elektrik Mesin dan Sistem Tenaga',
                'sks' => 4,
                'minimal_semester' => 4,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5022',
                'deskripsi_mk' => 'Kajian umum mesin listrik, konversi energi, dan sistem tenaga listrik untuk aplikasi industri serta pembangkit listrik.',
            ],

            // Teknik Biomedik (5023) - 25 courses
            [
                'nama_mk' => 'Biomechanics Fundamentals',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5023',
                'deskripsi_mk' => 'Pengantar prinsip biomekanika manusia untuk analisis gerak, gaya, dan beban pada tubuh dengan fokus pada aplikasi klinis dan rekayasa rehabilitasi.',
            ],
            [
                'nama_mk' => 'Mikroprosesor dan Sistem Embedded',
                'sks' => 4,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5023',
                'deskripsi_mk' => 'Membangun pemahaman arsitektur mikroprosesor, pemrograman level rendah, dan desain sistem tertanam untuk perangkat medis wearable.',
            ],
            [
                'nama_mk' => 'Biomedical Instrumentation and Sensors',
                'sks' => 3,
                'minimal_semester' => 4,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5023',
                'deskripsi_mk' => 'Pelatihan komponen instrumen biomedis, sensor utama, kalibrasi, dan teknik akuisisi sinyal untuk alat diagnostik.',
            ],
            [
                'nama_mk' => 'Biomathematics and Medical Statistics',
                'sks' => 3,
                'minimal_semester' => 5,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5023',
                'deskripsi_mk' => 'Pengenalan konsep statistika biomedis, analisis data klinis, dan pemodelan matematika untuk penelitian kedokteran.',
            ],
            [
                'nama_mk' => 'Manajemen Proyek Teknologi Kesehatan',
                'sks' => 2,
                'minimal_semester' => 6,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5023',
                'deskripsi_mk' => 'Strategi perencanaan, pelaksanaan, evaluasi, dan etika proyek teknologi informasi kesehatan dalam lingkungan rumah sakit dan klinik.',
            ],
            [
                'nama_mk' => 'Anatomi Dasar untuk Biomedis',
                'sks' => 3,
                'minimal_semester' => 1,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5023',
                'deskripsi_mk' => 'Pengenalan morfologi sistem tubuh manusia, identifikasi struktur utama, dan dasar hubungan fungsi dengan mekanisme penyakit.',
            ],
            [
                'nama_mk' => 'Biomaterial dan Implan dalam Biomedik',
                'sks' => 3,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5023',
                'deskripsi_mk' => 'Kajian bahan biomaterial yang digunakan untuk implan, sifat biokompatibilitas, serta tahap evaluasi klinis dan regulasi.',
            ],
            [
                'nama_mk' => 'Electrical Fundamentals for Biomedical Engineering',
                'sks' => 4,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5023',
                'deskripsi_mk' => 'Dasar listrik untuk perangkat medis, rangkaian elektronika dasar, dan penerapan sensor pada sistem biomedis.',
            ],
            [
                'nama_mk' => 'Kecerdasan Buatan untuk Diagnostik',
                'sks' => 3,
                'minimal_semester' => 5,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5023',
                'deskripsi_mk' => 'Pendahuluan konsep AI dalam analisis citra medis, pembelajaran mesin, dan integrasi dengan data klinis untuk tujuan diagnosis.',
            ],
            [
                'nama_mk' => 'Sensor dan Sistem Instrumentasi Medis',
                'sks' => 2,
                'minimal_semester' => 4,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5023',
                'deskripsi_mk' => 'Pengantar sensor medis, prinsip kerja transduser, kalibrasi, dan desain sistem instrumen untuk pengukuran klinis.',
            ],
            [
                'nama_mk' => 'Statistika untuk Bioengineering (Statistics for Biomedical Engineering)',
                'sks' => 3,
                'minimal_semester' => 1,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5023',
                'deskripsi_mk' => 'Pengenalan konsep statistika dasar, pemodelan data, dan aplikasi analitis untuk proyek riset di bidang teknik biomedik.',
            ],
            [
                'nama_mk' => 'Fundamentals of Biomedical Electronics',
                'sks' => 4,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5023',
                'deskripsi_mk' => 'Memahami prinsip-prinsip elektronika medis, sensor biologis, dan sirkuit penguat untuk perangkat diagnostik.',
            ],
            [
                'nama_mk' => 'Biomedical Signal Processing',
                'sks' => 3,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5023',
                'deskripsi_mk' => 'Metode pemrosesan sinyal biomedis, analisis frekuensi, filtrasi, dan ekstraksi fitur untuk sinyal EEG, EMG, dan rekam medis.',
            ],
            [
                'nama_mk' => 'Biomaterial dan Implan',
                'sks' => 3,
                'minimal_semester' => 4,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5023',
                'deskripsi_mk' => 'Karakteristik material biokompatibel, seleksi implan, serta aspek biologi-kimia yang mempengaruhi performa perangkat medis.',
            ],
            [
                'nama_mk' => 'Engineering Ethics and Compliance in BiomedTech',
                'sks' => 2,
                'minimal_semester' => 1,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5023',
                'deskripsi_mk' => 'Etika rekayasa, regulasi kesehatan, dan standar keamanan untuk produk biomédical engineering serta tata kelola proyek.',
            ],
            [
                'nama_mk' => 'Mekanika Fluida untuk Biomedical Engineering',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5023',
                'deskripsi_mk' => 'Dasar-dasar aliran cairan pada sistem biologis dan perhitungan tekanan, debit, serta profil aliran pada perangkat biomedical seperti kateter dan ventrikel buatan.',
            ],
            [
                'nama_mk' => 'Biomaterial dan Biokompatibilitas',
                'sks' => 4,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5023',
                'deskripsi_mk' => 'Kajian material yang digunakan dalam perangkat biomedical, sifat mekanik, stabilitas kimia, dan interaksi dengan jaringan serta respons biologi.',
            ],
            [
                'nama_mk' => 'Electrical Fundamentals for Medical Devices',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5023',
                'deskripsi_mk' => 'Dasar-dasar kelistrikan yang relevan untuk perangkat medis, termasuk sirkuit dasar, sensor, dan keselamatan listrik pada alat kesehatan.',
            ],
            [
                'nama_mk' => 'Imaging Systems and Data Analysis',
                'sks' => 3,
                'minimal_semester' => 4,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5023',
                'deskripsi_mk' => 'Pengantar sistem pencitraan medis (mis. X-ray, ultrasound, MRI) serta teknik analisis data gambar untuk diagnosis dan penelitian.',
            ],
            [
                'nama_mk' => 'Metode Numerik untuk Rekayasa Biomedis',
                'sks' => 2,
                'minimal_semester' => 5,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5023',
                'deskripsi_mk' => 'Pengenalan teknik numerik dasar untuk simulasi biomedis, pemodelan mekanika jaringan, dan perhitungan solusi persamaan diferensial pada kasus nyata.',
            ],
            [
                'nama_mk' => 'Analisis Sistem Biomedis',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5023',
                'deskripsi_mk' => 'Mempelajari prinsip analisis sistem biomedis untuk memahami alur kerja, data rekam medis, dan integrasi sensor dalam konteks klinis.',
            ],
            [
                'nama_mk' => 'Biomedika Sensor dan Instrumentasi',
                'sks' => 4,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5023',
                'deskripsi_mk' => 'Pengantar sensor, aktuator, dan perangkat instrumentasi medis untuk pengukuran fisika, biometrik, dan pemrosesan sinyal.',
            ],
            [
                'nama_mk' => 'Digital Signal Processing for Biomedical',
                'sks' => 3,
                'minimal_semester' => 4,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5023',
                'deskripsi_mk' => 'Teori dan praktik pemrosesan sinyal biologis (EKG, EEG) menggunakan teknik FFT, filtrasi, dan deteksi fitur.',
            ],
            [
                'nama_mk' => 'Biomaterial dan Implan Medis',
                'sks' => 2,
                'minimal_semester' => 5,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5023',
                'deskripsi_mk' => 'Karakteristik material biokompatibel, perilaku jangka panjang, serta desain dan evaluasi implan medis.',
            ],
            [
                'nama_mk' => 'Kecerdasan Buatan untuk Diagnostik',
                'sks' => 3,
                'minimal_semester' => 6,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5023',
                'deskripsi_mk' => 'Pengenalan konsep AI dan pembelajaran mesin untuk sistem pendukung keputusan klinis dan diagnostik berbasis data medik.',
            ],

            // Teknik Komputer (5024) - 25 courses
            [
                'nama_mk' => 'Organisasi dan Arsitektur Komputer',
                'sks' => 3,
                'minimal_semester' => 1,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5024',
                'deskripsi_mk' => 'Mata kuliah ini membahas prinsip organisasi komputer, arsitektur mesin, set instruksi, serta bagaimana desain hardware mempengaruhi performa software.',
            ],
            [
                'nama_mk' => 'Digital Signal Processing',
                'sks' => 4,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5024',
                'deskripsi_mk' => 'Pengenalan konsep pemrosesan sinyal digital, operasi FFT, filter digital, serta aplikasi DSP pada pengolahan citra dan audio.',
            ],
            [
                'nama_mk' => 'Jaringan Komputer dan Keamanan',
                'sks' => 3,
                'minimal_semester' => 4,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5024',
                'deskripsi_mk' => 'Materi tentang konsep jaringan, protokol, routing, serta praktik dasar keamanan jaringan, termasuk pengenalan firewall dan enkripsi.',
            ],
            [
                'nama_mk' => 'Basis Data Lanjut dan Skema Pemodelan',
                'sks' => 3,
                'minimal_semester' => 5,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5024',
                'deskripsi_mk' => 'Kuliah lanjut mengenai desain skema basis data, normalisasi lanjut, pemodelan entitas-relasi, serta optimasi query dan indeks.',
            ],
            [
                'nama_mk' => 'Pembelajaran Mesin untuk Pemula',
                'sks' => 2,
                'minimal_semester' => 6,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5024',
                'deskripsi_mk' => 'Pengantar konsep pembelajaran mesin, regresi, klasifikasi sederhana, serta implementasi prototipe dengan dataset kecil untuk pemodelan praktis.',
            ],
            [
                'nama_mk' => 'Sistem Komputer Dasar',
                'sks' => 3,
                'minimal_semester' => 1,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5024',
                'deskripsi_mk' => 'Pengantar konsep arsitektur dan organisasi komputer, memahami komponen utama, memori, CPU, perangkat I/O, serta dasar pemrograman tingkat rendah.',
            ],
            [
                'nama_mk' => 'Digital Signal Processing',
                'sks' => 4,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5024',
                'deskripsi_mk' => 'Teori dan praktik pemrosesan sinyal digital, transformasi Fourier diskrit, filtrasi, dan aplikasi pada sistem komunikasi serta kontrol.',
            ],
            [
                'nama_mk' => 'Kecerdasan Buatan (Artificial Intelligence)',
                'sks' => 3,
                'minimal_semester' => 5,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5024',
                'deskripsi_mk' => 'Dasar-dasar AI, mesin pencari, penalaran berbasis pengetahuan, pembelajaran mesin, dan etika penggunaan AI.',
            ],
            [
                'nama_mk' => 'Jaringan Komputer Lanjut',
                'sks' => 3,
                'minimal_semester' => 4,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5024',
                'deskripsi_mk' => 'Perancangan dan analisis jaringan tingkat lanjut, protokol, routing, keamanan jaringan, serta simulasi jaringan menggunakan alat modern.',
            ],
            [
                'nama_mk' => 'Pemrograman Berbasis Perilaku (Software Engineering)',
                'sks' => 4,
                'minimal_semester' => 6,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5024',
                'deskripsi_mk' => 'Prinsip rekayasa perangkat lunak, metodologi pengembangan, manajemen proyek, dan praktik pemrograman berkelanjutan lewat proyek nyata.',
            ],
            [
                'nama_mk' => 'Matematika Dasar',
                'sks' => 3,
                'minimal_semester' => 1,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5024',
                'deskripsi_mk' => 'Pengenalan konsep aritmetika, aljabar, fungsi, limit, dan kalkulus diferensial dasar untuk dasar pemikiran analitis serta penerapan pada masalah teknik.',
            ],
            [
                'nama_mk' => 'Pemrograman Berorientasi Objek',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5024',
                'deskripsi_mk' => 'Pengantar paradigma pemrograman berorientasi objek menggunakan Java atau Python; fokus pada kelas, objek, pewarisan, polimorfisme, dan desain sederhana.',
            ],
            [
                'nama_mk' => 'Sistem Mikroprosesor dan Mikrokontroler',
                'sks' => 4,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5024',
                'deskripsi_mk' => 'Studi arsitektur sistem mikroprosesor, interfacing periferal, pemrograman langsung mikrokontroler, serta penerapan pada kendali perangkat keras.',
            ],
            [
                'nama_mk' => 'Statistik untuk Teknik Komputer',
                'sks' => 3,
                'minimal_semester' => 4,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5024',
                'deskripsi_mk' => 'Dasar-dasar statistik terapan untuk analisis data eksperimen dan evaluasi performa sistem komputer, termasuk probabilitas, inferensi, dan uji hipotesis.',
            ],
            [
                'nama_mk' => 'Jaringan Komputer Lanjut',
                'sks' => 4,
                'minimal_semester' => 5,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5024',
                'deskripsi_mk' => 'Topik lanjutan jaringan komputer: protokol, arsitektur TCP/IP, routing, keamanan jaringan, dan praktik simulasi jaringan skala kampus.',
            ],
            [
                'nama_mk' => 'Sistem Digital dan Logika Kontrol',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5024',
                'deskripsi_mk' => 'Mata kuliah ini membahas prinsip dasar sistem digital, kombinasi logika, rangkaian flip-flop, serta pemrograman sederhana untuk menerapkan kontrol pada perangkat keras.',
            ],
            [
                'nama_mk' => 'Embedded System Design',
                'sks' => 4,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5024',
                'deskripsi_mk' => 'Mata kuliah ini menjelaskan arsitektur sistem tertanam, pemrograman mikrokontroler, interfacing perangkat, serta desain berorientasi hardware-software untuk aplikasi nyata.',
            ],
            [
                'nama_mk' => 'Algoritma dan Struktur Data Lanjut',
                'sks' => 3,
                'minimal_semester' => 4,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5024',
                'deskripsi_mk' => 'Materi meliputi teknik optimasi, struktur data lanjutan, serta analisis kompleksitas untuk meningkatkan efisiensi pemrosesan data pada perangkat lunak.',
            ],
            [
                'nama_mk' => 'Probabilitas dan Statistik untuk Telekomunikasi',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5024',
                'deskripsi_mk' => 'Pengantar probabilitas, distribusi, dan statistik terapan dengan fokus pada analisis sinyal, kinerja jaringan, dan evaluasi eksperimen telekomunikasi.',
            ],
            [
                'nama_mk' => 'Basis Data Lanjut dan RESTful API',
                'sks' => 3,
                'minimal_semester' => 3,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5024',
                'deskripsi_mk' => 'Topik untuk desain basis data lanjutan, normalisasi, optimasi query, serta pengembangan API RESTful untuk integrasi sistem informasi kampus.',
            ],
            [
                'nama_mk' => 'Sistem Operasi Lanjutan',
                'sks' => 4,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5024',
                'deskripsi_mk' => 'Memahami arsitektur, manajemen proses, penjadwalan, dan mekanisme sinkronisasi pada sistem operasi modern untuk meningkatkan performa dan reliabilitas perangkat lunak.',
            ],
            [
                'nama_mk' => 'Jaringan Komputer Lanjut',
                'sks' => 3,
                'minimal_semester' => 4,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5024',
                'deskripsi_mk' => 'Mempelajari protokol tingkat lanjut, routing, keamanan jaringan, serta teknik pemecahan masalah pada jaringan ber-skala kampus dan enterprise.',
            ],
            [
                'nama_mk' => 'Praktikum Pemrograman Berbasis Objek',
                'sks' => 2,
                'minimal_semester' => 2,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5024',
                'deskripsi_mk' => 'Laboratorium untuk menerapkan konsep pemrograman berorientasi objek, desain kelas, pewarisan, dan pola penggunaan API secara praktis.',
            ],
            [
                'nama_mk' => 'Algoritma dan Struktur Data',
                'sks' => 3,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5024',
                'deskripsi_mk' => 'Menganalisis dan merancang algoritma dasar serta struktur data untuk efisiensi waktu dan ruang, termasuk kompleksitas kasus umum.',
            ],
            [
                'nama_mk' => 'Keamanan Komputer',
                'sks' => 3,
                'minimal_semester' => 4,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5024',
                'deskripsi_mk' => 'Memperkenalkan prinsip keamanan informasi, kriptografi dasar, pertahanan sistem, dan analisis risiko pada aplikasi perangkat lunak.',
            ],

            // Teknik Informatika (5025) - 25 courses
            [
                'nama_mk' => 'Calculus 1',
                'sks' => 3,
                'minimal_semester' => 1,
                'jenis_mk' => 1,
                'program_studi_id_prodi' => '5025',
                'deskripsi_mk' => 'Mata kuliah ini membahas konsep dasar kalkulus, termasuk limit, turunan, dan integral fungsi satu variabel.',
            ],
            [
                'nama_mk' => 'Fundamental Programming',
                'sks' => 4,
                'minimal_semester' => 1,
                'jenis_mk' => 1,
                'program_studi_id_prodi' => '5025',
                'deskripsi_mk' => 'Pengenalan dasar-dasar pemrograman prosedural, termasuk variabel, tipe data, kontrol alur, dan fungsi.',
            ],
            [
                'nama_mk' => 'Digital System',
                'sks' => 3,
                'minimal_semester' => 1,
                'jenis_mk' => 1,
                'program_studi_id_prodi' => '5025',
                'deskripsi_mk' => 'Membahas konsep dasar sistem digital, aljabar Boolean, gerbang logika, serta rangkaian kombinasional dan sekuensial.',
            ],
            [
                'nama_mk' => 'Linear Algebra',
                'sks' => 3,
                'minimal_semester' => 1,
                'jenis_mk' => 1,
                'program_studi_id_prodi' => '5025',
                'deskripsi_mk' => 'Mempelajari konsep matriks, vektor, ruang vektor, dan sistem persamaan linear sebagai dasar komputasi.',
            ],
            [
                'nama_mk' => 'Database System',
                'sks' => 4,
                'minimal_semester' => 1,
                'jenis_mk' => 1,
                'program_studi_id_prodi' => '5025',
                'deskripsi_mk' => 'Pengenalan konsep sistem basis data relasional, model data, bahasa query SQL, dan perancangan basis data dasar.',
            ],
            [
                'nama_mk' => 'Data Structure',
                'sks' => 4,
                'minimal_semester' => 2,
                'jenis_mk' => 1,
                'program_studi_id_prodi' => '5025',
                'deskripsi_mk' => 'Mempelajari berbagai struktur data fundamental seperti linked list, stack, queue, tree, dan graph serta implementasinya.',
            ],
            [
                'nama_mk' => 'Operating System',
                'sks' => 4,
                'minimal_semester' => 2,
                'jenis_mk' => 1,
                'program_studi_id_prodi' => '5025',
                'deskripsi_mk' => 'Membahas konsep dasar sistem operasi, termasuk manajemen proses, memori, sistem berkas, dan penjadwalan.',
            ],
            [
                'nama_mk' => 'Computer Organization',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 1,
                'program_studi_id_prodi' => '5025',
                'deskripsi_mk' => 'Mempelajari organisasi dan arsitektur sistem komputer, termasuk CPU, memori, I/O, dan set instruksi.',
            ],
            [
                'nama_mk' => 'Numerical Computation',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 1,
                'program_studi_id_prodi' => '5025',
                'deskripsi_mk' => 'Mempelajari metode numerik untuk menyelesaikan masalah matematika yang sulit diselesaikan secara analitis.',
            ],
            [
                'nama_mk' => 'Calculus 2',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 1,
                'program_studi_id_prodi' => '5025',
                'deskripsi_mk' => 'Lanjutan dari Kalkulus 1, membahas teknik pengintegralan, barisan, deret, dan kalkulus peubah banyak.',
            ],
            [
                'nama_mk' => 'Introduction to Intelligent Electrical and Informatics Technology',
                'sks' => 2,
                'minimal_semester' => 2,
                'jenis_mk' => 1,
                'program_studi_id_prodi' => '5025',
                'deskripsi_mk' => 'Memberikan wawasan mengenai tren dan teknologi terkini di bidang elektro dan informatika cerdas.',
            ],
            [
                'nama_mk' => 'Web Programming',
                'sks' => 3,
                'minimal_semester' => 3,
                'jenis_mk' => 1,
                'program_studi_id_prodi' => '5025',
                'deskripsi_mk' => 'Mempelajari teknologi pengembangan web sisi klien (HTML, CSS, JavaScript) dan sisi server (PHP/Python) serta interaksi dengan basis data.',
            ],
            [
                'nama_mk' => 'Object Oriented Programming',
                'sks' => 3,
                'minimal_semester' => 3,
                'jenis_mk' => 1,
                'program_studi_id_prodi' => '5025',
                'deskripsi_mk' => 'Mengenalkan paradigma pemrograman berorientasi objek, konsep kelas, objek, pewarisan, dan polimorfisme.',
            ],
            [
                'nama_mk' => 'Computer Network',
                'sks' => 4,
                'minimal_semester' => 3,
                'jenis_mk' => 1,
                'program_studi_id_prodi' => '5025',
                'deskripsi_mk' => 'Membahas konsep dasar jaringan komputer, model referensi OSI dan TCP/IP, pengalamatan, dan protokol jaringan.',
            ],
            [
                'nama_mk' => 'Graph Theory',
                'sks' => 3,
                'minimal_semester' => 3,
                'jenis_mk' => 1,
                'program_studi_id_prodi' => '5025',
                'deskripsi_mk' => 'Mempelajari teori graf dan aplikasinya dalam menyelesaikan masalah optimasi dan jaringan.',
            ],
            [
                'nama_mk' => 'Discrete Mathematics',
                'sks' => 3,
                'minimal_semester' => 3,
                'jenis_mk' => 1,
                'program_studi_id_prodi' => '5025',
                'deskripsi_mk' => 'Membahas logika matematika, teori himpunan, relasi, fungsi, dan kombinatorika sebagai fondasi ilmu komputer.',
            ],
            [
                'nama_mk' => 'Artificial Intelligence Concepts',
                'sks' => 3,
                'minimal_semester' => 3,
                'jenis_mk' => 1,
                'program_studi_id_prodi' => '5025',
                'deskripsi_mk' => 'Pengenalan konsep dasar kecerdasan buatan, termasuk algoritma pencarian, representasi pengetahuan, dan penalaran.',
            ],
            [
                'nama_mk' => 'Software Development Principles',
                'sks' => 2,
                'minimal_semester' => 3,
                'jenis_mk' => 1,
                'program_studi_id_prodi' => '5025',
                'deskripsi_mk' => 'Mempelajari prinsip-prinsip dasar dalam siklus hidup pengembangan perangkat lunak (SDLC).',
            ],
            [
                'nama_mk' => 'Network Programming',
                'sks' => 3,
                'minimal_semester' => 4,
                'jenis_mk' => 1,
                'program_studi_id_prodi' => '5025',
                'deskripsi_mk' => 'Praktik membangun aplikasi jaringan menggunakan socket programming dan protokol standar seperti TCP dan UDP.',
            ],
            [
                'nama_mk' => 'Probabilistic and Statistic',
                'sks' => 3,
                'minimal_semester' => 4,
                'jenis_mk' => 1,
                'program_studi_id_prodi' => '5025',
                'deskripsi_mk' => 'Membahas teori probabilitas, distribusi, dan metode statistika untuk analisis data dalam konteks informatika.',
            ],
            [
                'nama_mk' => 'Automata',
                'sks' => 2,
                'minimal_semester' => 4,
                'jenis_mk' => 1,
                'program_studi_id_prodi' => '5025',
                'deskripsi_mk' => 'Mempelajari teori bahasa formal, automata, dan komputasi sebagai dasar dari perancangan kompilator dan pemrosesan bahasa.',
            ],
            [
                'nama_mk' => 'Database Management',
                'sks' => 3,
                'minimal_semester' => 4,
                'jenis_mk' => 1,
                'program_studi_id_prodi' => '5025',
                'deskripsi_mk' => 'Membahas topik lanjutan dalam manajemen basis data, termasuk manajemen transaksi, konkurensi, dan keamanan.',
            ],
            [
                'nama_mk' => 'Algorithm Design and Analysis',
                'sks' => 3,
                'minimal_semester' => 4,
                'jenis_mk' => 1,
                'program_studi_id_prodi' => '5025',
                'deskripsi_mk' => 'Mempelajari berbagai strategi perancangan algoritma (seperti divide and conquer, greedy, dynamic programming) dan analisis kompleksitasnya.',
            ],
            [
                'nama_mk' => 'Machine Learning',
                'sks' => 3,
                'minimal_semester' => 4,
                'jenis_mk' => 1,
                'program_studi_id_prodi' => '5025',
                'deskripsi_mk' => 'Mempelajari algoritma machine learning dasar, termasuk regresi, klasifikasi, dan clustering, serta evaluasi model.',
            ],
            [
                'nama_mk' => 'Software Design',
                'sks' => 3,
                'minimal_semester' => 4,
                'jenis_mk' => 1,
                'program_studi_id_prodi' => '5025',
                'deskripsi_mk' => 'Fokus pada prinsip-prinsip desain perangkat lunak yang baik, termasuk pola desain (design patterns) dan arsitektur.',
            ],
            [
                'nama_mk' => 'Framework-based Programming',
                'sks' => 3,
                'minimal_semester' => 5,
                'jenis_mk' => 1,
                'program_studi_id_prodi' => '5025',
                'deskripsi_mk' => 'Praktik pengembangan aplikasi menggunakan framework modern (misalnya Laravel, React) untuk mempercepat proses pengembangan.',
            ],
            [
                'nama_mk' => 'Information Security',
                'sks' => 3,
                'minimal_semester' => 5,
                'jenis_mk' => 1,
                'program_studi_id_prodi' => '5025',
                'deskripsi_mk' => 'Mempelajari prinsip dasar keamanan informasi, kriptografi, keamanan jaringan, dan etika keamanan siber.',
            ],
            [
                'nama_mk' => 'Modeling and Simulation',
                'sks' => 3,
                'minimal_semester' => 5,
                'jenis_mk' => 1,
                'program_studi_id_prodi' => '5025',
                'deskripsi_mk' => 'Mempelajari teknik pemodelan sistem dan simulasinya menggunakan komputer untuk analisis dan pengambilan keputusan.',
            ],
            [
                'nama_mk' => 'Computer Graphics',
                'sks' => 3,
                'minimal_semester' => 5,
                'jenis_mk' => 1,
                'program_studi_id_prodi' => '5025',
                'deskripsi_mk' => 'Pengenalan konsep dan algoritma dasar dalam grafika komputer, termasuk rendering 2D/3D, transformasi, dan pemodelan.',
            ],
            [
                'nama_mk' => 'Knowledge based Engineering',
                'sks' => 3,
                'minimal_semester' => 5,
                'jenis_mk' => 1,
                'program_studi_id_prodi' => '5025',
                'deskripsi_mk' => 'Mempelajari rekayasa sistem berbasis pengetahuan (knowledge-based systems) dan aplikasinya dalam berbagai domain.',
            ],
            [
                'nama_mk' => 'English',
                'sks' => 2,
                'minimal_semester' => 6,
                'jenis_mk' => 1,
                'program_studi_id_prodi' => '5025',
                'deskripsi_mk' => 'Meningkatkan kemampuan berbahasa Inggris, khususnya dalam konteks akademik dan teknis.',
            ],
            [
                'nama_mk' => 'Technopreneurship',
                'sks' => 2,
                'minimal_semester' => 6,
                'jenis_mk' => 1,
                'program_studi_id_prodi' => '5025',
                'deskripsi_mk' => 'Membahas konsep kewirausahaan di bidang teknologi, mulai dari ideasi, model bisnis, hingga pengembangan produk.',
            ],
            [
                'nama_mk' => 'Religion',
                'sks' => 2,
                'minimal_semester' => 6,
                'jenis_mk' => 1,
                'program_studi_id_prodi' => '5025',
                'deskripsi_mk' => 'Pendidikan agama sesuai dengan kepercayaan masing-masing mahasiswa untuk membentuk karakter yang beretika.',
            ],
            [
                'nama_mk' => 'Civics',
                'sks' => 2,
                'minimal_semester' => 6,
                'jenis_mk' => 1,
                'program_studi_id_prodi' => '5025',
                'deskripsi_mk' => 'Pendidikan kewarganegaraan untuk menumbuhkan rasa cinta tanah air dan pemahaman tentang hak serta kewajiban sebagai warga negara.',
            ],
            [
                'nama_mk' => 'Mobile Programming',
                'sks' => 3,
                'minimal_semester' => 6,
                'jenis_mk' => 1,
                'program_studi_id_prodi' => '5025',
                'deskripsi_mk' => 'Mempelajari pengembangan aplikasi untuk perangkat mobile (Android/iOS), termasuk UI/UX dan integrasi layanan.',
            ],
            [
                'nama_mk' => 'Human and Computer Interaction',
                'sks' => 3,
                'minimal_semester' => 6,
                'jenis_mk' => 1,
                'program_studi_id_prodi' => '5025',
                'deskripsi_mk' => 'Mempelajari prinsip-prinsip desain antarmuka yang efektif dan user-friendly antara manusia dan komputer.',
            ],
            [
                'nama_mk' => 'Capstone Project',
                'sks' => 3,
                'minimal_semester' => 6,
                'jenis_mk' => 1,
                'program_studi_id_prodi' => '5025',
                'deskripsi_mk' => 'Proyek pengembangan perangkat lunak skala kecil secara berkelompok yang mengintegrasikan berbagai pengetahuan yang telah dipelajari.',
            ],
            [
                'nama_mk' => 'Capstone Project Practical Work',
                'sks' => 4,
                'minimal_semester' => 6,
                'jenis_mk' => 1,
                'program_studi_id_prodi' => '5025',
                'deskripsi_mk' => 'Implementasi dan kerja praktik dari Capstone Project, fokus pada aspek teknis dan manajemen proyek.',
            ],
            [
                'nama_mk' => 'Indonesian',
                'sks' => 2,
                'minimal_semester' => 7,
                'jenis_mk' => 1,
                'program_studi_id_prodi' => '5025',
                'deskripsi_mk' => 'Mempelajari penggunaan Bahasa Indonesia yang baik dan benar dalam penulisan karya ilmiah dan komunikasi formal.',
            ],
            [
                'nama_mk' => 'Pancasila',
                'sks' => 2,
                'minimal_semester' => 7,
                'jenis_mk' => 1,
                'program_studi_id_prodi' => '5025',
                'deskripsi_mk' => 'Pemahaman dan pengamalan nilai-nilai Pancasila sebagai dasar negara dan pandangan hidup bangsa.',
            ],
            [
                'nama_mk' => 'Applied Technology and Digital Transformation',
                'sks' => 3,
                'minimal_semester' => 7,
                'jenis_mk' => 1,
                'program_studi_id_prodi' => '5025',
                'deskripsi_mk' => 'Membahas penerapan teknologi terkini dan dampaknya terhadap transformasi digital di berbagai industri.',
            ],
            [
                'nama_mk' => 'Professional Ethics',
                'sks' => 2,
                'minimal_semester' => 7,
                'jenis_mk' => 1,
                'program_studi_id_prodi' => '5025',
                'deskripsi_mk' => 'Membahas etika dan tanggung jawab profesional dalam bidang teknologi informasi.',
            ],
            [
                'nama_mk' => 'Undergraduate Pre-Thesis',
                'sks' => 2,
                'minimal_semester' => 7,
                'jenis_mk' => 1,
                'program_studi_id_prodi' => '5025',
                'deskripsi_mk' => 'Persiapan penyusunan tugas akhir, meliputi metodologi penelitian, penulisan proposal, dan studi literatur.',
            ],
            [
                'nama_mk' => 'Final Project',
                'sks' => 5,
                'minimal_semester' => 8,
                'jenis_mk' => 1,
                'program_studi_id_prodi' => '5025',
                'deskripsi_mk' => 'Penyusunan tugas akhir/skripsi sebagai puncak dari program studi sarjana, berupa penelitian atau perancangan.',
            ],
            [
                'nama_mk' => 'Inter-Network Technology',
                'sks' => 3,
                'minimal_semester' => 5,
                'jenis_mk' => 2,
                'program_studi_id_prodi' => '5025',
                'deskripsi_mk' => 'Mempelajari teknologi dan protokol routing antar jaringan (inter-network) pada skala besar.',
            ],
            [
                'nama_mk' => 'Wireless Network',
                'sks' => 3,
                'minimal_semester' => 5,
                'jenis_mk' => 2,
                'program_studi_id_prodi' => '5025',
                'deskripsi_mk' => 'Membahas teknologi, standar, dan keamanan pada jaringan nirkabel seperti Wi-Fi dan seluler.',
            ],
            [
                'nama_mk' => 'Distributed System',
                'sks' => 3,
                'minimal_semester' => 5,
                'jenis_mk' => 2,
                'program_studi_id_prodi' => '5025',
                'deskripsi_mk' => 'Mempelajari konsep dan arsitektur sistem terdistribusi, komunikasi antar proses, dan konsistensi data.',
            ],
            [
                'nama_mk' => 'Competitive Programming',
                'sks' => 3,
                'minimal_semester' => 5,
                'jenis_mk' => 2,
                'program_studi_id_prodi' => '5025',
                'deskripsi_mk' => 'Latihan pemecahan masalah algoritmik yang kompleks dan efisien untuk persiapan kompetisi pemrograman.',
            ],
            [
                'nama_mk' => 'Operations Research',
                'sks' => 3,
                'minimal_semester' => 5,
                'jenis_mk' => 2,
                'program_studi_id_prodi' => '5025',
                'deskripsi_mk' => 'Aplikasi metode matematika dan statistika untuk menyelesaikan masalah optimasi dalam sistem industri dan bisnis.',
            ],
            [
                'nama_mk' => 'Game Development Techniques',
                'sks' => 3,
                'minimal_semester' => 5,
                'jenis_mk' => 2,
                'program_studi_id_prodi' => '5025',
                'deskripsi_mk' => 'Mempelajari teknik dan alur kerja dalam pengembangan game, termasuk game design, grafis, dan fisika.',
            ],
            [
                'nama_mk' => 'Enterprise Systems',
                'sks' => 3,
                'minimal_semester' => 5,
                'jenis_mk' => 2,
                'program_studi_id_prodi' => '5025',
                'deskripsi_mk' => 'Membahas sistem informasi terintegrasi skala besar untuk perusahaan, seperti ERP, CRM, dan SCM.',
            ],
            [
                'nama_mk' => 'Information Technology Governance',
                'sks' => 3,
                'minimal_semester' => 5,
                'jenis_mk' => 2,
                'program_studi_id_prodi' => '5025',
                'deskripsi_mk' => 'Mempelajari kerangka kerja (framework) untuk tata kelola teknologi informasi di organisasi.',
            ],
            [
                'nama_mk' => 'Software Project Management',
                'sks' => 3,
                'minimal_semester' => 5,
                'jenis_mk' => 2,
                'program_studi_id_prodi' => '5025',
                'deskripsi_mk' => 'Mempelajari metodologi dan praktik manajemen proyek pengembangan perangkat lunak.',
            ],
            [
                'nama_mk' => 'Requirements Engineering',
                'sks' => 3,
                'minimal_semester' => 5,
                'jenis_mk' => 2,
                'program_studi_id_prodi' => '5025',
                'deskripsi_mk' => 'Membahas proses elisitasi, analisis, spesifikasi, dan validasi kebutuhan perangkat lunak.',
            ],
            [
                'nama_mk' => 'Image Processing and Computer Vision',
                'sks' => 3,
                'minimal_semester' => 5,
                'jenis_mk' => 2,
                'program_studi_id_prodi' => '5025',
                'deskripsi_mk' => 'Mempelajari teknik pengolahan citra digital dan metode agar komputer dapat \'melihat\' dan menginterpretasi gambar.',
            ],
            [
                'nama_mk' => 'Data Mining',
                'sks' => 3,
                'minimal_semester' => 5,
                'jenis_mk' => 2,
                'program_studi_id_prodi' => '5025',
                'deskripsi_mk' => 'Mempelajari teknik untuk menemukan pola dan pengetahuan yang tersembunyi dari kumpulan data besar.',
            ],
            [
                'nama_mk' => 'Mobile Computing',
                'sks' => 3,
                'minimal_semester' => 6,
                'jenis_mk' => 2,
                'program_studi_id_prodi' => '5025',
                'deskripsi_mk' => 'Membahas aspek-aspek komputasi pada perangkat bergerak, termasuk keterbatasan sumber daya dan konektivitas.',
            ],
            [
                'nama_mk' => 'Pervasive Computing and Sensor Networks',
                'sks' => 3,
                'minimal_semester' => 6,
                'jenis_mk' => 2,
                'program_studi_id_prodi' => '5025',
                'deskripsi_mk' => 'Mempelajari konsep komputasi di mana-mana (ubiquitous) dan penggunaan jaringan sensor.',
            ],
            [
                'nama_mk' => 'Network Security',
                'sks' => 3,
                'minimal_semester' => 6,
                'jenis_mk' => 2,
                'program_studi_id_prodi' => '5025',
                'deskripsi_mk' => 'Fokus pada ancaman dan mekanisme pertahanan keamanan pada jaringan komputer, termasuk firewall, IDS, dan VPN.',
            ],
            [
                'nama_mk' => 'Application Security',
                'sks' => 3,
                'minimal_semester' => 6,
                'jenis_mk' => 2,
                'program_studi_id_prodi' => '5025',
                'deskripsi_mk' => 'Membahas keamanan pada level aplikasi, termasuk praktik pengkodean aman (secure coding) dan pengujian kerentanan.',
            ],
            [
                'nama_mk' => 'Interface Based Programming',
                'sks' => 3,
                'minimal_semester' => 6,
                'jenis_mk' => 2,
                'program_studi_id_prodi' => '5025',
                'deskripsi_mk' => 'Mempelajari pemrograman berbasis antarmuka (API) untuk integrasi antar sistem perangkat lunak.',
            ],
            [
                'nama_mk' => 'Dynamic Systems Simulation',
                'sks' => 3,
                'minimal_semester' => 6,
                'jenis_mk' => 2,
                'program_studi_id_prodi' => '5025',
                'deskripsi_mk' => 'Simulasi sistem yang perilakunya berubah seiring waktu, menggunakan pemodelan matematis.',
            ],
            [
                'nama_mk' => 'Agent Based Simulation',
                'sks' => 3,
                'minimal_semester' => 6,
                'jenis_mk' => 2,
                'program_studi_id_prodi' => '5025',
                'deskripsi_mk' => 'Pemodelan sistem sebagai kumpulan agen otonom yang berinteraksi untuk memahami perilaku kolektif.',
            ],
            [
                'nama_mk' => 'Forecasting Techniques',
                'sks' => 3,
                'minimal_semester' => 6,
                'jenis_mk' => 2,
                'program_studi_id_prodi' => '5025',
                'deskripsi_mk' => 'Mempelajari metode statistik dan machine learning untuk peramalan (forecasting) data time-series.',
            ],
            [
                'nama_mk' => 'Computer Animation and 3D Modeling',
                'sks' => 3,
                'minimal_semester' => 6,
                'jenis_mk' => 2,
                'program_studi_id_prodi' => '5025',
                'deskripsi_mk' => 'Teknik pemodelan objek 3D dan pembuatan animasi menggunakan perangkat lunak komputer.',
            ],
            [
                'nama_mk' => 'Educational and Simulation Games',
                'sks' => 3,
                'minimal_semester' => 6,
                'jenis_mk' => 2,
                'program_studi_id_prodi' => '5025',
                'deskripsi_mk' => 'Perancangan dan pengembangan game yang bertujuan untuk edukasi dan simulasi.',
            ],
            [
                'nama_mk' => 'User Experience Design',
                'sks' => 3,
                'minimal_semester' => 6,
                'jenis_mk' => 2,
                'program_studi_id_prodi' => '5025',
                'deskripsi_mk' => 'Mendalami proses desain produk digital yang berfokus pada pengalaman pengguna secara keseluruhan (UX).',
            ],
            [
                'nama_mk' => 'System Audit',
                'sks' => 3,
                'minimal_semester' => 6,
                'jenis_mk' => 2,
                'program_studi_id_prodi' => '5025',
                'deskripsi_mk' => 'Mempelajari proses audit sistem informasi untuk memastikan keamanan, keandalan, dan kepatuhan.',
            ],
            [
                'nama_mk' => 'Distributed Database',
                'sks' => 3,
                'minimal_semester' => 6,
                'jenis_mk' => 2,
                'program_studi_id_prodi' => '5025',
                'deskripsi_mk' => 'Membahas arsitektur dan manajemen basis data yang terdistribusi di beberapa lokasi fisik.',
            ],
            [
                'nama_mk' => 'Geographic Information Systems',
                'sks' => 3,
                'minimal_semester' => 6,
                'jenis_mk' => 2,
                'program_studi_id_prodi' => '5025',
                'deskripsi_mk' => 'Mempelajari sistem informasi untuk menangkap, menyimpan, menganalisis, dan menampilkan data geografis (GIS).',
            ],
            [
                'nama_mk' => 'Software Quality',
                'sks' => 3,
                'minimal_semester' => 6,
                'jenis_mk' => 2,
                'program_studi_id_prodi' => '5025',
                'deskripsi_mk' => 'Membahas metode dan metrik untuk penjaminan dan pengujian kualitas perangkat lunak.',
            ],
            [
                'nama_mk' => 'Software Construction',
                'sks' => 3,
                'minimal_semester' => 6,
                'jenis_mk' => 2,
                'program_studi_id_prodi' => '5025',
                'deskripsi_mk' => 'Fokus pada detail implementasi, pengkodean, pengujian unit, dan integrasi dalam pembangunan perangkat lunak.',
            ],
            [
                'nama_mk' => 'Text Mining',
                'sks' => 3,
                'minimal_semester' => 6,
                'jenis_mk' => 2,
                'program_studi_id_prodi' => '5025',
                'deskripsi_mk' => 'Teknik untuk mengekstraksi informasi dan pola bermakna dari data teks tidak terstruktur.',
            ],
            [
                'nama_mk' => 'Deep Learning',
                'sks' => 3,
                'minimal_semester' => 6,
                'jenis_mk' => 2,
                'program_studi_id_prodi' => '5025',
                'deskripsi_mk' => 'Mempelajari arsitektur jaringan saraf tiruan dalam (deep neural networks) dan aplikasinya.',
            ],
            [
                'nama_mk' => 'Game Engine',
                'sks' => 3,
                'minimal_semester' => 6,
                'jenis_mk' => 2,
                'program_studi_id_prodi' => '5025',
                'deskripsi_mk' => 'Mempelajari cara kerja dan penggunaan game engine seperti Unity atau Unreal untuk pengembangan game.',
            ],
            [
                'nama_mk' => 'IoT Technology',
                'sks' => 3,
                'minimal_semester' => 7,
                'jenis_mk' => 2,
                'program_studi_id_prodi' => '5025',
                'deskripsi_mk' => 'Membahas teknologi perangkat keras, perangkat lunak, dan protokol komunikasi untuk Internet of Things (IoT).',
            ],
            [
                'nama_mk' => 'Cloud Computing',
                'sks' => 3,
                'minimal_semester' => 7,
                'jenis_mk' => 2,
                'program_studi_id_prodi' => '5025',
                'deskripsi_mk' => 'Mempelajari model layanan (IaaS, PaaS, SaaS) dan teknologi di balik komputasi awan.',
            ],
            [
                'nama_mk' => 'Digital Forensics',
                'sks' => 3,
                'minimal_semester' => 7,
                'jenis_mk' => 2,
                'program_studi_id_prodi' => '5025',
                'deskripsi_mk' => 'Teknik investigasi dan analisis bukti digital dari perangkat komputer untuk keperluan hukum.',
            ],
            [
                'nama_mk' => 'Signal Processing Programming',
                'sks' => 3,
                'minimal_semester' => 7,
                'jenis_mk' => 2,
                'program_studi_id_prodi' => '5025',
                'deskripsi_mk' => 'Implementasi algoritma pemrosesan sinyal digital menggunakan perangkat lunak.',
            ],
            [
                'nama_mk' => 'Applied Science Data Programming',
                'sks' => 3,
                'minimal_semester' => 7,
                'jenis_mk' => 2,
                'program_studi_id_prodi' => '5025',
                'deskripsi_mk' => 'Penerapan teknik pemrograman untuk analisis data dalam konteks sains terapan.',
            ],
            [
                'nama_mk' => 'Multivariate Data Analysis',
                'sks' => 3,
                'minimal_semester' => 7,
                'jenis_mk' => 2,
                'program_studi_id_prodi' => '5025',
                'deskripsi_mk' => 'Analisis statistik data yang melibatkan lebih dari satu variabel secara bersamaan.',
            ],
            [
                'nama_mk' => 'Object Oriented Simulation',
                'sks' => 3,
                'minimal_semester' => 7,
                'jenis_mk' => 2,
                'program_studi_id_prodi' => '5025',
                'deskripsi_mk' => 'Penerapan paradigma berorientasi objek dalam pemodelan dan simulasi sistem.',
            ],
            [
                'nama_mk' => 'Intelligence Game',
                'sks' => 3,
                'minimal_semester' => 7,
                'jenis_mk' => 2,
                'program_studi_id_prodi' => '5025',
                'deskripsi_mk' => 'Penerapan teknik kecerdasan buatan (AI) dalam pengembangan game, terutama untuk perilaku NPC (Non-Player Character).',
            ],
            [
                'nama_mk' => 'Extended Reality',
                'sks' => 3,
                'minimal_semester' => 7,
                'jenis_mk' => 2,
                'program_studi_id_prodi' => '5025',
                'deskripsi_mk' => 'Mempelajari teknologi realitas yang diperluas (XR), mencakup Virtual Reality (VR), Augmented Reality (AR), dan Mixed Reality (MR).',
            ],
            [
                'nama_mk' => 'Big Data',
                'sks' => 3,
                'minimal_semester' => 7,
                'jenis_mk' => 2,
                'program_studi_id_prodi' => '5025',
                'deskripsi_mk' => 'Membahas teknologi dan arsitektur untuk menyimpan, mengelola, dan menganalisis data dalam volume yang sangat besar (Big Data).',
            ],
            [
                'nama_mk' => 'Quantum Computing',
                'sks' => 3,
                'minimal_semester' => 7,
                'jenis_mk' => 2,
                'program_studi_id_prodi' => '5025',
                'deskripsi_mk' => 'Pengenalan konsep dasar komputasi kuantum, qubit, dan algoritma kuantum.',
            ],
            [
                'nama_mk' => 'Software Architecture',
                'sks' => 3,
                'minimal_semester' => 7,
                'jenis_mk' => 2,
                'program_studi_id_prodi' => '5025',
                'deskripsi_mk' => 'Mempelajari berbagai pola dan gaya arsitektur perangkat lunak untuk membangun sistem yang scalable dan maintainable.',
            ],
            [
                'nama_mk' => 'Software Evolution',
                'sks' => 3,
                'minimal_semester' => 7,
                'jenis_mk' => 2,
                'program_studi_id_prodi' => '5025',
                'deskripsi_mk' => 'Membahas proses pemeliharaan dan evolusi perangkat lunak setelah dirilis, termasuk re-engineering dan refactoring.',
            ],
            [
                'nama_mk' => 'Robotics',
                'sks' => 3,
                'minimal_semester' => 7,
                'jenis_mk' => 2,
                'program_studi_id_prodi' => '5025',
                'deskripsi_mk' => 'Pengenalan dasar-dasar robotika, termasuk kinematika, sensor, aktuator, dan pemrograman robot.',
            ],
        
            // Sistem Informasi (5026) - 25 courses
            [
                'nama_mk' => 'Sistem Informasi Manajemen',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5026',
                'deskripsi_mk' => 'Pengantar konsep sistem informasi, arsitektur, peran SI dalam organisasi, serta studi kasus implementasi sederhana untuk meningkatkan efisiensi operasional.',
            ],
            [
                'nama_mk' => 'Analitik Data untuk SI',
                'sks' => 3,
                'minimal_semester' => 4,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5026',
                'deskripsi_mk' => 'Metode analisis data, visualisasi, dan dasar-dasar pembelajaran komputasional untuk menganalisis data bisnis menggunakan alat analitik modern.',
            ],
            [
                'nama_mk' => 'Basis Data Lanjut',
                'sks' => 4,
                'minimal_semester' => 5,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5026',
                'deskripsi_mk' => 'Desain skema basis data lanjut, normalisasi kompleks, query optimization, serta praktik implementasi basis data relasional berskala besar.',
            ],
            [
                'nama_mk' => 'Pemrograman Berorientasi Objek',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5026',
                'deskripsi_mk' => 'Pengenalan konsep OOP, kelas dan objek, pewarisan, polimorfisme, serta penerapan dalam bahasa pemrograman populer.',
            ],
            [
                'nama_mk' => 'Manajemen Proyek TI',
                'sks' => 2,
                'minimal_semester' => 3,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5026',
                'deskripsi_mk' => ' Prinsip Manajemen proyek TI, perencanaan, estimasi biaya, risiko, dan evaluasi keberhasilan proyek teknologi informasi.',
            ],
            [
                'nama_mk' => 'Algoritma dan Struktur Data',
                'sks' => 3,
                'minimal_semester' => 1,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5026',
                'deskripsi_mk' => 'Pengenalan algoritma dasar, struktur data utama, analisis kompleksitas, serta implementasi solusi masalah komputasi. Menggunakan bahasa pemrograman pilihan untuk studi kasus praktis.',
            ],
            [
                'nama_mk' => 'Pemrograman Berorientasi Objek',
                'sks' => 4,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5026',
                'deskripsi_mk' => 'Pendalaman konsep OOP, desain kelas, pewarisan, polimorfisme, dan penerapan pola desain untuk membangun aplikasi yang terstruktur dan scalable.',
            ],
            [
                'nama_mk' => 'Basis Data dan SQL',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5026',
                'deskripsi_mk' => 'Konsep basis data relasional, model data, normalisasi, query SQL tingkat lanjut, serta desain skema basis data yang efisien.',
            ],
            [
                'nama_mk' => 'Pemodelan Sistem dan UML',
                'sks' => 3,
                'minimal_semester' => 3,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5026',
                'deskripsi_mk' => 'Pengenalan pemodelan perangkat lunak menggunakan UML, diagram kasus, kelas, urutan, dan arsitektur sistem untuk analisis kebutuhan.',
            ],
            [
                'nama_mk' => 'Etika Profesi dan Kewirausahaan IT',
                'sks' => 2,
                'minimal_semester' => 4,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5026',
                'deskripsi_mk' => 'Pembahasan etika profesional dalam TI, tanggung jawab sosial, serta dasar-dasar kewirausahaan dan inovasi teknologi.',
            ],
            [
                'nama_mk' => 'Sistem Informasi Manajemen',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5026',
                'deskripsi_mk' => 'Pengantar konsep sistem informasi, arsitektur, dan peran SI dalam mendukung proses bisnis.',
            ],
            [
                'nama_mk' => 'Analisis/Konstruk Sistem',
                'sks' => 3,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5026',
                'deskripsi_mk' => 'Metode analisis kebutuhan, perancangan model data, dan pemetaan kebutuhan pengguna ke solusi TI.',
            ],
            [
                'nama_mk' => 'Fundamentals of Software Engineering',
                'sks' => 4,
                'minimal_semester' => 4,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5026',
                'deskripsi_mk' => 'Pengenalan rekayasa perangkat lunak, lifecycle, metodologi, dan praktik terbaik pengembangan.',
            ],
            [
                'nama_mk' => 'Basis Data dan Sistem Manajemen Data',
                'sks' => 3,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5026',
                'deskripsi_mk' => 'Konsep desain basis data, SQL, normalisasi, dan implementasi sistem manajemen data perusahaan.',
            ],
            [
                'nama_mk' => 'Kecerdasan Bisnis dan Analitik Data',
                'sks' => 2,
                'minimal_semester' => 4,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5026',
                'deskripsi_mk' => 'Pengantar analitik data, BI, dashboard, dan pemanfaatan data untuk pengambilan keputusan.',
            ],
            [
                'nama_mk' => 'Statistika untuk Sistem Informasi',
                'sks' => 3,
                'minimal_semester' => 1,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5026',
                'deskripsi_mk' => 'Pengenalan konsep statistik deskriptif dan inferensial yang diterapkan pada analisis data IT, termasuk probabilitas, distribusi, dan uji asumsi dasar untuk proyek TI.',
            ],
            [
                'nama_mk' => 'Analisis Sistem dan Desain',
                'sks' => 3,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5026',
                'deskripsi_mk' => 'Matakuliah inti yang membahas metodologi analisis kebutuhan, pemodelan proses bisnis, dan desain sistem informasi menggunakan notasi UML.',
            ],
            [
                'nama_mk' => 'Database: Konsep dan Implementasi',
                'sks' => 4,
                'minimal_semester' => 4,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5026',
                'deskripsi_mk' => 'Mata kuliah lanjutan tentang arsitektur basis data, normalisasi, query lanjutan SQL, serta perancangan skema database untuk aplikasi IT.',
            ],
            [
                'nama_mk' => 'Pemrograman Berbasis Web',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5026',
                'deskripsi_mk' => 'Pengembangan aplikasi web modern menggunakan HTML, CSS, JavaScript, dan framework backend ringan; fokus pada desain antarmuka dan keamanan dasar.',
            ],
            [
                'nama_mk' => 'Kecerdasan Buatan Dasar',
                'sks' => 3,
                'minimal_semester' => 5,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5026',
                'deskripsi_mk' => 'Pengenalan konsep AI, algoritma pencarian, pembelajaran mesin tingkat dasar, serta aplikasi praktis pada analisis data dan perangkat lunak TI.',
            ],
            [
                'nama_mk' => 'Matematika Dasar',
                'sks' => 3,
                'minimal_semester' => 1,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5026',
                'deskripsi_mk' => 'Pengenalan konsep dasar kalkulus, aljabar, dan geometri analitik yang membentuk dasar pemodelan matematika pada program Sistem Informasi.',
            ],
            [
                'nama_mk' => 'Pemrograman Dasar',
                'sks' => 4,
                'minimal_semester' => 1,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5026',
                'deskripsi_mk' => 'Pengantar konsep pemrograman imperatif, struktur data sederhana, dan logika pemrograman menggunakan bahasa yang relevan dengan kurikulum TI.',
            ],
            [
                'nama_mk' => ' Struktur Data dan Algoritma',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5026',
                'deskripsi_mk' => 'Konstruk data dasar (array, linked list, stack, queue, tree) dan algoritma umum untuk pemecahan masalah komputasional.',
            ],
            [
                'nama_mk' => 'Basis Data I',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5026',
                'deskripsi_mk' => 'Desain, implementasi, dan manajemen basis data relasional, serta bahasa SQL untuk query dan manipulasi data.',
            ],
            [
                'nama_mk' => 'Matematika Diskrit',
                'sks' => 3,
                'minimal_semester' => 3,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5026',
                'deskripsi_mk' => 'Logika, himpunan, relasi, graf, dan teori bilangan yang relevan untuk analisis algoritma dan struktur data.',
            ],

            // Teknologi Informasi (5027) - 25 courses
            [
                'nama_mk' => 'Sistem Operasi',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5027',
                'deskripsi_mk' => 'Pengenalan konsep dasar sistem operasi, manajemen proses, memory management, file system, dan I/O untuk meningkatkan pemahaman arsitektur komputer.',
            ],
            [
                'nama_mk' => 'Fundamentals of Programming',
                'sks' => 4,
                'minimal_semester' => 1,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5027',
                'deskripsi_mk' => 'Pengantar pemrograman komputer dengan fokus pada struktur data, algoritma dasar, serta gaya pemrograman yang efisien dan aman.',
            ],
            [
                'nama_mk' => 'Jaringan Komputer',
                'sks' => 3,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5027',
                'deskripsi_mk' => 'Dasar-dasar komunikasi data, topologi jaringan, protokol TCP/IP, keamanan jaringan, dan teknik konfigurasi perangkat jaringan.',
            ],
            [
                'nama_mk' => 'Data Mining dan Big Data',
                'sks' => 3,
                'minimal_semester' => 4,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5027',
                'deskripsi_mk' => 'Pendekatan analitis untuk mengekstraksi pola dari data besar, teknik pra-pemrosesan, clustering, klasifikasi, dan evaluasi model.',
            ],
            [
                'nama_mk' => 'Kewirausahaan Teknologi & Proyek IT',
                'sks' => 2,
                'minimal_semester' => 5,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5027',
                'deskripsi_mk' => 'Pengenalan entrepreneurship di bidang teknologi, langkah perancangan bisnis startup IT, studi kelayakan, dan penyusunan rencana proyek teknologi.',
            ],
            [
                'nama_mk' => 'Algoritma dan Struktur Data',
                'sks' => 4,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5027',
                'deskripsi_mk' => 'Pengenalan algoritma dasar, struktur data, analisis kompleksitas, dan penerapan solusi efisien untuk masalah komputasional.',
            ],
            [
                'nama_mk' => ' Fundamentals of Web Development',
                'sks' => 3,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5027',
                'deskripsi_mk' => 'Materi desain dan implementasi aplikasi web modern, termasuk HTML, CSS, JavaScript, serta pola arsitektur front-end.',
            ],
            [
                'nama_mk' => 'Basis Data Lanjutan',
                'sks' => 3,
                'minimal_semester' => 4,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5027',
                'deskripsi_mk' => 'Topik lanjutan basis data seperti normalisasi lanjut, optimasi query, dan pemodelan data untuk sistem skala besar.',
            ],
            [
                'nama_mk' => 'Fundamentals of Software Engineering',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5027',
                'deskripsi_mk' => 'Pengenalan prinsip rekayasa perangkat lunak, siklus hidup proyek, analisis kebutuhan, desain, pengujian, dan manajemen risiko pada pengembangan perangkat lunak.',
            ],
            [
                'nama_mk' => 'Algorithms and Data Structures',
                'sks' => 4,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5027',
                'deskripsi_mk' => 'Pembahasan algoritma dasar, struktur data, kompleksitas waktu/ruang, serta implementasi efisien untuk pemecahan masalah komputasi.',
            ],
            [
                'nama_mk' => 'Software Testing and Quality Assurance',
                'sks' => 3,
                'minimal_semester' => 4,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5027',
                'deskripsi_mk' => 'Metode pengujian perangkat lunak, perencanaan QA, teknik verifikasi, validasi, dan perbaikan kualitas produk software.',
            ],
            [
                'nama_mk' => 'Human-Computer Interaction',
                'sks' => 3,
                'minimal_semester' => 5,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5027',
                'deskripsi_mk' => 'Studi interaksi pengguna dengan antarmuka, usability, desain antarmuka, evaluasi antarmuka, serta implementasi prototipe.',
            ],
            [
                'nama_mk' => 'Introduction to Artificial Intelligence',
                'sks' => 4,
                'minimal_semester' => 6,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5027',
                'deskripsi_mk' => 'Konsep dasar AI, agen rasional, representasi pengetahuan, mesin pencari, pembelajaran mesin, dan aplikasi AI pada masalah nyata.',
            ],
            [
                'nama_mk' => 'Sistem Operasi Dasar',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5027',
                'deskripsi_mk' => 'Pengenalan konsep sistem operasi, manajemen proses, memori, dan perangkat I/O serta penggunaan perintah dasar untuk mengelola sistem operasi pada komputer pribadi.',
            ],
            [
                'nama_mk' => 'Fundamentals of Web Development',
                'sks' => 3,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5027',
                'deskripsi_mk' => 'Pengantar HTML, CSS, dan JavaScript untuk membangun halaman web statis dan responsif dengan dasar desain antarmuka pengguna.',
            ],
            [
                'nama_mk' => 'Algoritma & Struktur Data Lanjut',
                'sks' => 4,
                'minimal_semester' => 4,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5027',
                'deskripsi_mk' => 'Studi lanjutan tentang algoritma graf, pohon, hashing, serta analisis kompleksitas waktu-ruang untuk solusi masalah komputasional.',
            ],
            [
                'nama_mk' => 'Sistem Informasi dan Analitik Data',
                'sks' => 3,
                'minimal_semester' => 5,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5027',
                'deskripsi_mk' => 'Konsep sistem informasi organisasi dan dasar analitik data untuk mengambil keputusan berbasis data menggunakan alat BI sederhana.',
            ],
            [
                'nama_mk' => 'Kecerdasan Buatan Dasar',
                'sks' => 3,
                'minimal_semester' => 6,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5027',
                'deskripsi_mk' => 'Pengenalan AI, logika pemrograman, dan teknik pencarian dasar serta aplikasi sederhana pada masalah nyata.',
            ],
            [
                'nama_mk' => 'Matematika Dasar',
                'sks' => 3,
                'minimal_semester' => 1,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5027',
                'deskripsi_mk' => 'Pengenalan konsep kalkulus, aljabar linear, dan fungsi dasar untuk membangun fondasi analisis matematis pada jurusan Teknologi Informasi.',
            ],
            [
                'nama_mk' => 'Fundamentals of Computer Engineering',
                'sks' => 4,
                'minimal_semester' => 1,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5027',
                'deskripsi_mk' => 'Pengantar prinsip-prinsip rekayasa perangkat keras, arsitektur komputer, dan pemodelan sistem digital untuk pemula.',
            ],
            [
                'nama_mk' => 'Programming I',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5027',
                'deskripsi_mk' => 'Pengenalan bahasa pemrograman tingkat tinggi, konsep algoritma, struktur data dasar, dan praktik penulisan kode yang benar.',
            ],
            [
                'nama_mk' => 'Algorithms and Data Structures',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5027',
                'deskripsi_mk' => 'Pemahaman teknik algoritma, kompleksitas, serta struktur data seperti daftar, pohon, dan graf beserta implementasinya.',
            ],
            [
                'nama_mk' => 'Object-Oriented Programming',
                'sks' => 4,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5027',
                'deskripsi_mk' => 'Pendalaman pemrograman berorientasi objek menggunakan bahasa modern, desain kelas, pewarisan, dan polimorfisme.',
            ],
            [
                'nama_mk' => 'Database Systems',
                'sks' => 3,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5027',
                'deskripsi_mk' => 'Konsep model data, bahasa SQL, desain skema, dan praktik manajemen database serta query ekstensi.',
            ],
            [
                'nama_mk' => 'Intro to Web Development',
                'sks' => 2,
                'minimal_semester' => 3,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5027',
                'deskripsi_mk' => 'Pengantar pengembangan aplikasi web front-end dan back-end, termasuk HTML, CSS, JavaScript, dan dasar RESTful services.',
            ],

            // Desain Produk (5028) - 25 courses
            [
                'nama_mk' => 'Product Design Studio I',
                'sks' => 3,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5028',
                'deskripsi_mk' => 'Praktikum desain produk yang memperkenalkan proses pengembangan ide hingga prototyping model konsep menggunakan metode desain berfokus pada kebutuhan pengguna.',
            ],
            [
                'nama_mk' => 'Design Research Methods',
                'sks' => 3,
                'minimal_semester' => 4,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5028',
                'deskripsi_mk' => ' Mata kuliah pengantar metodologi riset desain, termasuk studi literatur, observasi pengguna, wawancara, dan analisis data untuk menghasilkan insight yang relevan bagi proyek produk.',
            ],
            [
                'nama_mk' => 'Engineering Form Development',
                'sks' => 4,
                'minimal_semester' => 5,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5028',
                'deskripsi_mk' => 'Kursus lanjutan mengenai perancangan bentuk teknis produk dengan fokus pada fungsi, ergonomi, dan proses manufaktur, mencakup CAD dan evaluasi kekuatan.',
            ],
            [
                'nama_mk' => 'Sustainable Product Design',
                'sks' => 3,
                'minimal_semester' => 6,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5028',
                'deskripsi_mk' => 'Pembelajaran desain produk berkelanjutan, termasuk siklus hidup produk, material ramah lingkungan, dan strategi desain untuk mengurangi dampak lingkungan.',
            ],
            [
                'nama_mk' => 'Industrial Design Communication',
                'sks' => 2,
                'minimal_semester' => 2,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5028',
                'deskripsi_mk' => 'Pemaparan prinsip komunikasi desain visual dan teknis untuk kolaborasi tim multidisiplin, meliputi presentasi konsep, drawing standards, dan dokumentasi desain.',
            ],
            [
                'nama_mk' => 'Desain Produk:Konsep dan Prototyping',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5028',
                'deskripsi_mk' => 'Mata kuliah ini mengulas konsep desain produk, memahami kebutuhan pengguna, dan mengembangkan prototipe menggunakan teknik desain berbasis nilai serta iterasi prototyping.',
            ],
            [
                'nama_mk' => 'Ergonomi dan User Experience pada Produk',
                'sks' => 3,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5028',
                'deskripsi_mk' => 'Mata kuliah membahas prinsip ergonomi untuk merancang produk yang nyaman dan efektif, diiringi studi kasus UX untuk meningkatkan interaksi pengguna.',
            ],
            [
                'nama_mk' => 'Materials and Manufacturing for Design',
                'sks' => 4,
                'minimal_semester' => 4,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5028',
                'deskripsi_mk' => 'Pengantar material yang umum dipakai dalam desain produk, sifat mekanik, serta proses manufaktur utama yang berpengaruh pada desain akhir.',
            ],
            [
                'nama_mk' => 'Sustainability in Product Design',
                'sks' => 3,
                'minimal_semester' => 5,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5028',
                'deskripsi_mk' => 'Mata kuliah pilihan yang mengeksplorasi desain berkelanjutan, life cycle assessment, dan strategi material ramah lingkungan.',
            ],
            [
                'nama_mk' => 'Project Studio: Design Studio I',
                'sks' => 2,
                'minimal_semester' => 6,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5028',
                'deskripsi_mk' => 'Studio proyek kelompok untuk mengaplikasikan konsep desain produk secara nyata, mulai dari brief klien hingga presentasi desain akhir.',
            ],
            [
                'nama_mk' => 'Desain Produk: Dasar dan Konsep',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5028',
                'deskripsi_mk' => 'Pengantar konsep desain produk, proses kreatif, analisis kebutuhan pasar, dan pembuatan sketsa ide konsep produk dengan mempertimbangkan teknik manufaktur.',
            ],
            [
                'nama_mk' => 'Materials and Manufacturing for Product Design',
                'sks' => 3,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5028',
                'deskripsi_mk' => 'Pengenalan material utama yang digunakan dalam desain produk, sifat mekanik, serta metodologi pemilihan material dan proses manufaktur yang relevan.',
            ],
            [
                'nama_mk' => 'Ergonomi dan User Experience dalam Produk',
                'sks' => 4,
                'minimal_semester' => 4,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5028',
                'deskripsi_mk' => 'Analisis ergonomi, interaksi pengguna, heuristik UX, serta cara merancang produk yang nyaman dan efektif untuk pengguna akhir.',
            ],
            [
                'nama_mk' => 'Prototyping dan Validasi Desain',
                'sks' => 4,
                'minimal_semester' => 5,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5028',
                'deskripsi_mk' => 'Metode pembuatan prototipe, evaluasi fungsional, tes pengguna, dan iterasi desain untuk meningkatkan kinerja produk.',
            ],
            [
                'nama_mk' => 'Sustainable Design and Circularity',
                'sks' => 2,
                'minimal_semester' => 8,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5028',
                'deskripsi_mk' => 'Pendekatan desain berkelanjutan, analisis dampak lingkungan, dan strategi desain untuk produk yang mudah didaur ulang serta efisien sumber daya.',
            ],
            [
                'nama_mk' => 'Produkt Design Fundamentals',
                'sks' => 3,
                'minimal_semester' => 1,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5028',
                'deskripsi_mk' => 'Pengenalan konsep desain produk, proses kreatif, dan peran desain dalam pengembangan produk industri. Materi mencakup pemetaan kebutuhan pengguna dan evaluasi ide awal.',
            ],
            [
                'nama_mk' => 'Ergonomi dan Pemasaran Produk',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5028',
                'deskripsi_mk' => 'Fokus pada prinsip ergonomi untuk desain produk, serta strategi pemasaran, analisis pasar, dan positioning produk desain.',
            ],
            [
                'nama_mk' => 'Material dan Proses Pembuatan',
                'sks' => 4,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5028',
                'deskripsi_mk' => 'Studi material utama yang digunakan dalam desain produk dan proses manufaktur, termasuk sifat material, pemilihan material, serta prototyping.',
            ],
            [
                'nama_mk' => 'Digital Fabrication & CAD for Product Design',
                'sks' => 3,
                'minimal_semester' => 4,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5028',
                'deskripsi_mk' => 'Penggunaan alat CAD dan teknik fabrikasi digital (3D printing, CNC) untuk merancang dan memvalidasi konsep produk.',
            ],
            [
                'nama_mk' => 'Sustainability in Product Design',
                'sks' => 2,
                'minimal_semester' => 5,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5028',
                'deskripsi_mk' => 'Pendalaman desain berkelanjutan, analisis siklus hidup produk, dan praktik desain yang ramah lingkungan dalam konteks ITS.',
            ],
            [
                'nama_mk' => 'Desain Produk: Konsep dan Strategi',
                'sks' => 3,
                'minimal_semester' => 1,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5028',
                'deskripsi_mk' => 'Pengenalan konsep desain produk, analisis kebutuhan pasar, serta pembentukan strategi pengembangan produk dari ide hingga prototipe awal.',
            ],
            [
                'nama_mk' => 'User-Centered Design dan Ergonomi',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5028',
                'deskripsi_mk' => 'Metode desain berpusat pada pengguna, penilaian kenyamanan ergonomi, serta pengujian pengguna untuk iterasi desain.',
            ],
            [
                'nama_mk' => 'Prototyping dan Teknologi Produksi',
                'sks' => 4,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5028',
                'deskripsi_mk' => 'Praktik pembuatan prototipe cepat, pemilihan material, proses manufaktur, dan integrasi prototipe ke dalam sistem produksi.',
            ],
            [
                'nama_mk' => 'Material dan Proses-Manufaktur untuk Desain Produk',
                'sks' => 3,
                'minimal_semester' => 3,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5028',
                'deskripsi_mk' => 'Analisis sifat material utama yang digunakan dalam desain produk serta pemilihan proses manufaktur yang tepat.',
            ],
            [
                'nama_mk' => 'Ekonomi Desain dan Manajemen Proyek',
                'sks' => 2,
                'minimal_semester' => 4,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5028',
                'deskripsi_mk' => 'Dasar-dasar biaya desain, estimasi anggaran proyek, dan manajemen waktu serta sumber daya dalam pengembangan produk.',
            ],

            // Desain Interior (5029) - 25 courses
            [
                'nama_mk' => 'Studio Design Workshop: Fundamentals',
                'sks' => 3,
                'minimal_semester' => 1,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5029',
                'deskripsi_mk' => 'Pengantar teknik desain interior, pemetaan kebutuhan klien, konsep ruang, serta latihan sketsa dan rendering sederhana untuk proyek desain pendahuluan.',
            ],
            [
                'nama_mk' => 'Materials and Finishes for Interior',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5029',
                'deskripsi_mk' => 'Studi bahan bangunan dan finishing interior: sifat material, perencanaan beban, estimasi biaya, serta praktik memilih material yang berkelanjutan.',
            ],
            [
                'nama_mk' => 'Ergonomics and Human Factors in Interior Design',
                'sks' => 4,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5029',
                'deskripsi_mk' => 'Analisis kenyamanan dan ergonomi untuk ruang hidup dan kerja; penataan furnitur, sirkulasi, dan interface pengguna dengan lingkungan.',
            ],
            [
                'nama_mk' => 'Interior Lighting and Acoustics',
                'sks' => 3,
                'minimal_semester' => 4,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5029',
                'deskripsi_mk' => 'Dasar-dasar pencahayaan dan akustik interior; perancangan sistem penerangan, kontrol cahaya, dan pengelolaan gema untuk berbagai tipe ruangan.',
            ],
            [
                'nama_mk' => 'Smart Spaces: Digital Tools for Interior Design',
                'sks' => 2,
                'minimal_semester' => 5,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5029',
                'deskripsi_mk' => 'Pengenalan alat digital (CAD/BIM) untuk desain interior, visualisasi 3D, dan teknik presentasi proyek kepada klien.',
            ],
            [
                'nama_mk' => 'Studio Teknologi Konstruksi Interior',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5029',
                'deskripsi_mk' => 'Pengenalan prinsip desain interior, perancangan ruang, dan pemilihan material yang sesuai standar, dengan fokus pada proyek studi kasus nyata.',
            ],
            [
                'nama_mk' => 'Furniture Design and Detailing',
                'sks' => 4,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5029',
                'deskripsi_mk' => 'Mempelajari konsep desain furnitur, teknik gambar kerja, dan detail konstruksi untuk produksi furnitur interior berkelanjutan.',
            ],
            [
                'nama_mk' => 'Desain Warna dan Material',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5029',
                'deskripsi_mk' => 'Analisis teori warna dan material serta aplikasinya pada suasana ruang, pencahayaan, dan identitas merek interior.',
            ],
            [
                'nama_mk' => 'Ekologi Ruang dan Ergonomi Implementasi',
                'sks' => 2,
                'minimal_semester' => 1,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5029',
                'deskripsi_mk' => 'Mengkaji kenyamanan pengguna, aliran ruang, dan prinsip ergonomi dalam desain interior untuk lingkungan publik dan perkantoran.',
            ],
            [
                'nama_mk' => ' teknik Visualisasi 3D & Rendering Interior',
                'sks' => 3,
                'minimal_semester' => 4,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5029',
                'deskripsi_mk' => 'Pengenalan pemodelan 3D, rendering fotorealistik, dan presentasi konsep desain kepada klien serta tim proyek.',
            ],
            [
                'nama_mk' => 'Desain Ruang Interior I',
                'sks' => 3,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5029',
                'deskripsi_mk' => 'Pengenalan konsep desain interior, elemen- elemen ruang, tata letak dasar, serta tolak ukur estetika yang mempengaruhi kenyamanan pengguna ruangan.',
            ],
            [
                'nama_mk' => 'Spatial Design Studio',
                'sks' => 4,
                'minimal_semester' => 5,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5029',
                'deskripsi_mk' => 'Studio desain ruang yang menekankan eksplorasi bentuk, material, dan solusi fungsional untuk skala bangunan serta konteks budaya.',
            ],
            [
                'nama_mk' => 'Material dan Finishing Interior',
                'sks' => 3,
                'minimal_semester' => 3,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5029',
                'deskripsi_mk' => 'Pemilihan material interior, sifat fisik material, finishing, serta dampak lingkungan dan biaya perawatan.',
            ],
            [
                'nama_mk' => 'Konsentrasi Warna dan Cahaya',
                'sks' => 2,
                'minimal_semester' => 2,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5029',
                'deskripsi_mk' => 'Teori warna, pencahayaan, dan bagaimana kombinasi keduanya mempengaruhi persepsi ruang serta mood ruangan.',
            ],
            [
                'nama_mk' => 'Berbasis Proyek: Interior Praktikum',
                'sks' => 3,
                'minimal_semester' => 4,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5029',
                'deskripsi_mk' => 'Praktikum desain interior berbasis proyek nyata melalui studi kasus, pembuatan mock-up, dan presentasi iteratif.',
            ],
            [
                'nama_mk' => 'Teori Desain Interior',
                'sks' => 3,
                'minimal_semester' => 1,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5029',
                'deskripsi_mk' => 'Pengantar konsep desain interior, analisis isu ruang, fungsi, estetika, serta dasar-dasar presentasi ide desain secara visual.',
            ],
            [
                'nama_mk' => 'Ecology and Materials in Interior Design',
                'sks' => 4,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5029',
                'deskripsi_mk' => 'Studi material furnitur dan finishing berkelanjutan, sifat fisik material, serta implikasi lingkungan pada desain interior.',
            ],
            [
                'nama_mk' => 'Desain Ruang Publik',
                'sks' => 3,
                'minimal_semester' => 3,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5029',
                'deskripsi_mk' => 'Perancangan sirkulasi, akustik, iluminasi, dan kenyamanan untuk ruang publik seperti lobi, koridor, dan atrium.',
            ],
            [
                'nama_mk' => 'Interior Design Studio I',
                'sks' => 4,
                'minimal_semester' => 4,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5029',
                'deskripsi_mk' => 'Latihan perancangan skema interior skala kecil hingga sedang, dari konsep hingga presentasi teknis dan rendi gambar kerja.',
            ],
            [
                'nama_mk' => 'Rendering dan Visualisasi Interior',
                'sks' => 3,
                'minimal_semester' => 4,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5029',
                'deskripsi_mk' => 'Teknik visualisasi 3D, rendering realistis, komposisi visual, dan penyajian klien untuk desain interior.',
            ],
            [
                'nama_mk' => 'Desain Interior Dasar',
                'sks' => 3,
                'minimal_semester' => 1,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5029',
                'deskripsi_mk' => 'Pengantar prinsip desain interior, tata ruang, ergonomi, dan aspek estetika yang membentuk pemahaman dasar mengenai perancangan interior ruang publik maupun hunian.',
            ],
            [
                'nama_mk' => 'Lighting Design for Interiors',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5029',
                'deskripsi_mk' => 'Analisis kebutuhan cahaya, konsep pencahayaan, simulasi lighting, serta pengaruh iluminasi terhadap mood dan sirkulasi ruang.',
            ],
            [
                'nama_mk' => 'Material and Finishes for Interiors',
                'sks' => 4,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5029',
                'deskripsi_mk' => 'Studi material interior, karakteristik finishing, keberlanjutan, serta evaluasi performa material dalam konteks desain interior.',
            ],
            [
                'nama_mk' => 'Spatial Planning and Ergonomics',
                'sks' => 3,
                'minimal_semester' => 4,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5029',
                'deskripsi_mk' => 'Perencanaan tata letak ruang, aliran aktivitas, aksesibilitas, dan keseimbangan antara fungsi serta kenyamanan pengguna.',
            ],
            [
                'nama_mk' => 'Architecture Visualization and Communication',
                'sks' => 3,
                'minimal_semester' => 5,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5029',
                'deskripsi_mk' => 'Teknik visualisasi 2D/3D, presentasi konseptual, dan cara efektif mengkomunikasikan desain kepada klien serta tim proyek.',
            ],

            // Desain Komunikasi Visual (5030) - 25 courses
            [
                'nama_mk' => 'Desain Komunikasi Visual Dasar',
                'sks' => 3,
                'minimal_semester' => 1,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5030',
                'deskripsi_mk' => 'Pengantar konsep visual, prinsip desain, tipografi, dan identitas visual yang membentuk kemampuan merancang komunikasi visual secara sistematis.',
            ],
            [
                'nama_mk' => 'Typography for Visual Communication',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5030',
                'deskripsi_mk' => 'Studi tipografi modern, pemilihan huruf, kerning, leading, dan tipografi untuk media digital serta cetak.',
            ],
            [
                'nama_mk' => 'Media Digital dan Produksi Konten',
                'sks' => 4,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5030',
                'deskripsi_mk' => 'Perancangan alur produksi konten media digital, pemetaan kebutuhan produksi, dan teknik produksi konten audiovisual.',
            ],
            [
                'nama_mk' => 'Desain Sistem Identitas Visual',
                'sks' => 3,
                'minimal_semester' => 4,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5030',
                'deskripsi_mk' => 'Pengembangan identitas visual korporat, panduan gaya, logo, warna, dan aplikasi identitas pada berbagai media.',
            ],
            [
                'nama_mk' => 'Penelitian dan Evaluasi Desain',
                'sks' => 2,
                'minimal_semester' => 5,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5030',
                'deskripsi_mk' => 'Metodologi penelitian desain, evaluasi usability, dan analisis dampak visual terhadap audiens untuk perbaikan desain.',
            ],
            [
                'nama_mk' => 'Desain Komunikasi Visual: Dasar Komposisi dan Perancangan Grafis',
                'sks' => 3,
                'minimal_semester' => 1,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5030',
                'deskripsi_mk' => 'Pengenalan prinsip desain visual, komposisi, tipografi dasar, ruang negatif, serta metodologi mengembangkan sketsa konsep hingga mockup presentasi proyek visual.',
            ],
            [
                'nama_mk' => 'UX dan Prototyping untuk Desain Komunikasi Visual',
                'sks' => 3,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5030',
                'deskripsi_mk' => 'Membedah kebutuhan pengguna, membuat wireframe, prototyping interaktif, dan evaluasi heuristik untuk meningkatkan pengalaman pengguna dalam produk komunikasi visual.',
            ],
            [
                'nama_mk' => 'Fotografi Digital untuk Desain',
                'sks' => 2,
                'minimal_semester' => 2,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5030',
                'deskripsi_mk' => 'Teknik dasar fotografi digital, pencahayaan, komposisi gambar, serta cara mengintegrasikan fotografi ke dalam materi promosi dan identitas merek.',
            ],
            [
                'nama_mk' => 'Brand Strategy dan Identitas Visual',
                'sks' => 3,
                'minimal_semester' => 4,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5030',
                'deskripsi_mk' => 'Konstruksi identitas merek, pemetaan audiens, konsistensi visual, dan pengembangan guidelines identitas untuk kampanye visual lintas media.',
            ],
            [
                'nama_mk' => 'Motion Design dan Animasi Pendek',
                'sks' => 4,
                'minimal_semester' => 5,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5030',
                'deskripsi_mk' => 'Pengenalan teknik motion graphics, storyboard, animasi 2D/3D dasar, serta produksi video pendek untuk klip promosi dan kampanye visual.',
            ],
            [
                'nama_mk' => 'Desain Komunikasi Visual Dasar',
                'sks' => 3,
                'minimal_semester' => 1,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5030',
                'deskripsi_mk' => 'Pengenalan konsep desain visual, teori warna, tipografi dasar, dan praktik membuat komposisi grafis untuk komunikasi visual di media cetak maupun digital.',
            ],
            [
                'nama_mk' => 'Typography for Visual Communication',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5030',
                'deskripsi_mk' => 'Studi mendalam tentang tipografi, hierarki tipografis, dan pembacaan teks dalam desain komunikasi visual, termasuk pengolahan kerning dan leading.',
            ],
            [
                'nama_mk' => 'Fotografi & Pengambilan Gambar untuk Desain',
                'sks' => 4,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5030',
                'deskripsi_mk' => 'Teknik fotografi dasar hingga lanjutan, komposisi foto, pencahayaan, serta penggunaan gambar fotografi dalam proyek desain komunika si visual.',
            ],
            [
                'nama_mk' => 'Design Studio: Visual Identity',
                'sks' => 4,
                'minimal_semester' => 4,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5030',
                'deskripsi_mk' => 'Studio desain untuk menghasilkan identitas visual lengkap (logo, palet warna, gaya visual, dan panduan merek) sesuai brief klien.',
            ],
            [
                'nama_mk' => 'UX/UI Principles for Visual Designers',
                'sks' => 3,
                'minimal_semester' => 5,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5030',
                'deskripsi_mk' => 'Prinsip-prinsip desain antarmuka pengguna dan pengalaman pengguna yang relevan untuk desainer visual, termasuk rangkaian riset pengguna, wireframing, dan prototyping.',
            ],
            [
                'nama_mk' => 'Desain Komunikasi Visual Dasar',
                'sks' => 3,
                'minimal_semester' => 1,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5030',
                'deskripsi_mk' => 'Pengantar prinsip desain, teori warna, tipografi dasar, dan praktik penyampaian pesan visual melalui media konvensional dan digital.',
            ],
            [
                'nama_mk' => 'Typography for Visual Communication',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5030',
                'deskripsi_mk' => 'Studi tentang tipografi modern untuk komunikasi visual, termasuk pemilihan huruf, hierarki, dan kemasan desain grafis.',
            ],
            [
                'nama_mk' => 'Perancangan Identitas Visual',
                'sks' => 4,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5030',
                'deskripsi_mk' => 'Pembuatan identitas merek secara komprehensif: logo, palet warna, sistem gaya, dan penerapan pada berbagai media.',
            ],
            [
                'nama_mk' => 'Digital Imaging & Photo Editing',
                'sks' => 3,
                'minimal_semester' => 4,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5030',
                'deskripsi_mk' => 'Teknik pengolahan gambar digital, retouching, compositing, dan penggunaan perangkat lunak untuk produksi visual berkualitas tinggi.',
            ],
            [
                'nama_mk' => 'User Experience & Interaction Design',
                'sks' => 3,
                'minimal_semester' => 5,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5030',
                'deskripsi_mk' => 'Prinsip UX/UI untuk desain komunikasi visual, riset pengguna, prototyping, dan evaluasi interaksi melalui sketsa hingga prototipe digital.',
            ],
            [
                'nama_mk' => 'Sistem Desain Komunikasi Visual',
                'sks' => 3,
                'minimal_semester' => 1,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5030',
                'deskripsi_mk' => 'Mata kuliah pengantar tentang konsep visual, bahasa desain, dan alur proses desain komunikasi visual untuk pemrograman studi DKV ITS.',
            ],
            [
                'nama_mk' => 'Elective Studio: Narrative Visual',
                'sks' => 2,
                'minimal_semester' => 3,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5030',
                'deskripsi_mk' => 'Studio pilihan yang mengasah kemampuan merancang narasi visual melalui proyek-proyek singkat dan evaluasi kreatif.',
            ],
            [
                'nama_mk' => 'Desain Interaksi (Interaction Design)',
                'sks' => 3,
                'minimal_semester' => 4,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5030',
                'deskripsi_mk' => 'Mata kuliah inti yang membahas prinsip interaksi antara pengguna dan artefak digital serta prototyping.',
            ],
            [
                'nama_mk' => 'Typography for Visual Communication',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5030',
                'deskripsi_mk' => 'Pembelajaran mengenai tipografi, tata letak, tipografi multibahasa, dan dampaknya terhadap persepsi pesan visual.',
            ],
            [
                'nama_mk' => 'Kajian Warna dan Komposisi',
                'sks' => 2,
                'minimal_semester' => 2,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5030',
                'deskripsi_mk' => 'Eksplorasi teori warna, kontras, dan komposisi untuk menghasilkan karya visual yang efektif.',
            ],

            // Manajemen Bisnis (5031) - 25 courses
            [
                'nama_mk' => 'Statistical Methods for Business',
                'sks' => 3,
                'minimal_semester' => 1,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5031',
                'deskripsi_mk' => 'Pengantar metode statistik dan analisis data untuk mendukung pengambilan keputusan bisnis, termasuk distribusi, uji hipotesis, dan regresi sederhana.',
            ],
            [
                'nama_mk' => 'Entrepreneurship & Innovation',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5031',
                'deskripsi_mk' => 'Konsep kewirausahaan, identifikasi peluang, pengembangan ide, dan strategi inovasi untuk startup serta perusahaan skala menengah.',
            ],
            [
                'nama_mk' => 'Manajemen Operasi dan Rantai Pasokan',
                'sks' => 4,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5031',
                'deskripsi_mk' => 'Keterampilan merancang, mengelola, dan meningkatkan operasi bisnis serta jaringan pasokan untuk efisiensi dan daya saing.',
            ],
            [
                'nama_mk' => 'Analisis Data Bisnis dengan Excel & Power BI',
                'sks' => 2,
                'minimal_semester' => 4,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5031',
                'deskripsi_mk' => 'Penggunaan Excel lanjutan dan Power BI untuk analisis data bisnis, visualisasi, dan pembuatan dashboard interaktif.',
            ],
            [
                'nama_mk' => 'Strategic Management & Policy',
                'sks' => 3,
                'minimal_semester' => 5,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5031',
                'deskripsi_mk' => 'Pendalaman konsep perencanaan strategis, analisis lingkungan, formulasi kebijakan, dan evaluasi kinerja organisasi.',
            ],
            [
                'nama_mk' => 'Manajemen Operasi dan Produksi',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5031',
                'deskripsi_mk' => 'Mata kuliah ini membahas konsep perencanaan, pengawasan, dan peningkatan proses operasional di perusahaan manufaktur dengan fokus pada efisiensi biaya dan kualitas.',
            ],
            [
                'nama_mk' => 'Economic Fundamentals for Business',
                'sks' => 3,
                'minimal_semester' => 1,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5031',
                'deskripsi_mk' => 'Pengantar ekonomi mikro dan makro serta bagaimana konsep-konsep ekonomi mempengaruhi keputusan bisnis di tingkat perusahaan dan industri.',
            ],
            [
                'nama_mk' => 'Risk Management dan Kepatuhan',
                'sks' => 4,
                'minimal_semester' => 3,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5031',
                'deskripsi_mk' => ' Mata kuliah membahas identifikasi, evaluasi, dan mitigasi risiko operasional serta kepatuhan terhadap regulasi dan standar perusahaan.',
            ],
            [
                'nama_mk' => 'Statistika untuk Manajemen',
                'sks' => 3,
                'minimal_semester' => 1,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5031',
                'deskripsi_mk' => 'Mempelajari konsep dasar statistika, analisis data, probabilitas, dan penggunaan perangkat lunak untuk mendukung pengambilan keputusan manajerial.',
            ],
            [
                'nama_mk' => 'Strategi Pemasaran Digital',
                'sks' => 3,
                'minimal_semester' => 3,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5031',
                'deskripsi_mk' => 'Pengenalan strategi pemasaran digital modern, perangkat analitik, media sosial, SEO, SEM, dan evaluasi kampanye pemasaran.',
            ],
            [
                'nama_mk' => 'Entrepreneurship and Business Model',
                'sks' => 4,
                'minimal_semester' => 4,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5031',
                'deskripsi_mk' => 'Pemisahan ide bisnis menjadi model bisnis yang skalabel, studi kelayakan, value proposition, dan perencanaan keuangan dasar.',
            ],
            [
                'nama_mk' => 'Operasional dan Rantai Pasokan',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5031',
                'deskripsi_mk' => 'Menggali konsep perencanaan produksi, manajemen persediaan, logistik, dan optimasi rantai pasokan untuk periode mendatang.',
            ],
            [
                'nama_mk' => 'Etika Bisnis dan Tanggung Jawab Sosial',
                'sks' => 2,
                'minimal_semester' => 1,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5031',
                'deskripsi_mk' => 'Menjelajahi prinsip etika profesional, kepatuhan, CSR, dan dampak sosial serta lingkungan dari keputusan bisnis.',
            ],
            [
                'nama_mk' => 'Statistika Manajemen',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5031',
                'deskripsi_mk' => 'Pengenalan konsep statistika dasar yang relevan untuk analisis data bisnis, termasuk probabilitas, distribusi, dan teknik ringkas untuk pengambilan keputusan.',
            ],
            [
                'nama_mk' => 'Entrepreneurship and Startup Management',
                'sks' => 3,
                'minimal_semester' => 3,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5031',
                'deskripsi_mk' => 'Kursus ini membahas proses ideation, validasi pasar, perencanaan bisnis, serta praktik manajemen startup untuk mengembangkan usaha baru.',
            ],
            [
                'nama_mk' => 'Strategic Management in Business',
                'sks' => 4,
                'minimal_semester' => 4,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5031',
                'deskripsi_mk' => 'Analisis lingkungan industri, formulasi strategi korporat, dan implementasi rencana strategis untuk keunggulan kompetitif organisasi.',
            ],
            [
                'nama_mk' => 'Marketing Management',
                'sks' => 3,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5031',
                'deskripsi_mk' => 'Pengenalan konsep pemasaran modern, perilaku konsumen, segmentasi pasar, serta perancangan bauran pemasaran (4P) yang efektif.',
            ],
            [
                'nama_mk' => 'Information Systems for Managers',
                'sks' => 2,
                'minimal_semester' => 2,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5031',
                'deskripsi_mk' => 'Dasar sistem informasi yang mendukung proses bisnis, analitik data, dan pemanfaatan teknologi informasi dalam pengambilan keputusan manajerial.',
            ],
            [
                'nama_mk' => 'Introduction to Management Science',
                'sks' => 3,
                'minimal_semester' => 1,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5031',
                'deskripsi_mk' => 'Pengantar konsep manajemen, perencanaan dasar, pengambilan keputusan, dan evaluasi kinerja organisasi untuk memahami kerangka kerja manajemen pada level pemula.',
            ],
            [
                'nama_mk' => 'Strategic Management',
                'sks' => 3,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5031',
                'deskripsi_mk' => ' Analisis lingkungan industri, formulasi strategi, implementasi, dan evaluasi strategi untuk meningkatkan daya saing organisasi bisnis.',
            ],
            [
                'nama_mk' => 'Digital Marketing and E-Commerce',
                'sks' => 3,
                'minimal_semester' => 4,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5031',
                'deskripsi_mk' => ' Strategi pemasaran digital, media sosial, kampanye online, analitik, dan pengalaman pelanggan di platform e-commerce.',
            ],
            [
                'nama_mk' => 'Operations and Supply Chain Management',
                'sks' => 4,
                'minimal_semester' => 4,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5031',
                'deskripsi_mk' => ' Perencanaan operasional, manajemen rantai pasok, logistik, kualitas, dan peningkatan efisiensi proses produksi.',
            ],
            [
                'nama_mk' => 'Organizational Behavior and Leadership',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5031',
                'deskripsi_mk' => ' Teori perilaku organisasi, motivasi, komunikasi, tim kerja, dan kepemimpinan dalam konteks organisasi bisnis.',
            ],
            [
                'nama_mk' => 'Financial Accounting for Managers',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5031',
                'deskripsi_mk' => ' Prinsip akuntansi keuangan, interpretasi laporan keuangan, dan penggunaan informasi akuntansi untuk pengambilan keputusan manajerial.',
            ],
            [
                'nama_mk' => 'Business Analytics and Data Visualization',
                'sks' => 3,
                'minimal_semester' => 5,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5031',
                'deskripsi_mk' => ' Dasar analitik bisnis, teknik analisis data, pemodelan, dan penyajian data secara visual untuk pemanfaatan keputusan bisnis.',
            ],

            // Studi Pembangunan (5033) - 25 courses
            [
                'nama_mk' => 'Statistik untuk Ilmu Pembangunan',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5033',
                'deskripsi_mk' => 'Pengenalan konsep statistik deskriptif dan inferensial yang relevan untuk kajian pembangunan; siswa belajar menggunakan data survei lapangan serta basis data untuk analisis tren dan keputusan kebijakan.',
            ],
            [
                'nama_mk' => 'Engineering Ethics and Professional Practice',
                'sks' => 2,
                'minimal_semester' => 3,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5033',
                'deskripsi_mk' => 'Etika rekayasa, tanggung jawab profesional, serta studi kasus terkait implementasi solusi teknik yang berkelanjutan dalam konteks pembangunan infrastruktur.',
            ],
            [
                'nama_mk' => 'Methodology for Development Studies',
                'sks' => 3,
                'minimal_semester' => 4,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5033',
                'deskripsi_mk' => 'Metodologi penelitian kualitatif dan kuantitatif untuk studi pembangunan; desain proyek, pengumpulan data, analisis, dan pelaporan hasil riset.',
            ],
            [
                'nama_mk' => 'Project Management for Development Projects',
                'sks' => 4,
                'minimal_semester' => 5,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5033',
                'deskripsi_mk' => 'Manajemen proyek dengan fokus pada perencanaan, pelaksanaan, pemantauan, dan evaluasi proyek pembangunan; teknik pengelolaan risiko dan alokasi sumber daya.',
            ],
            [
                'nama_mk' => 'Applied Data Analytics in Development',
                'sks' => 3,
                'minimal_semester' => 6,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5033',
                'deskripsi_mk' => 'Penerapan analitik data untuk masalah pembangunan: pengolahan data, visualisasi, model prediksi, dan pembuatan rekomendasi kebijakan berbasis data.',
            ],
            [
                'nama_mk' => 'Statistik Dasar 1',
                'sks' => 3,
                'minimal_semester' => 1,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5033',
                'deskripsi_mk' => 'Pengenalan konsep statistik deskriptif, probabilitas dasar, serta penyajian data menggunakan ukuran pemusatan dan penyebaran untuk matrikulasi awal program Studi Pembangunan.',
            ],
            [
                'nama_mk' => 'Matematika untuk Pembangunan',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5033',
                'deskripsi_mk' => 'Kalkulus, aljabar linear, dan aplikasi matematika terapan dalam analisis masalah pembangunan, termasuk optimisasi sederhana.',
            ],
            [
                'nama_mk' => 'Metode Penelitian Pembangunan',
                'sks' => 4,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5033',
                'deskripsi_mk' => 'Pengayaan teknik penelitian kuantitatif dan kualitatif, merancang studi kasus, pengumpulan data, analisis, dan pelaporan hasil penelitian.',
            ],
            [
                'nama_mk' => 'Kebijakan Publik dan Pembangunan',
                'sks' => 3,
                'minimal_semester' => 4,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5033',
                'deskripsi_mk' => 'Analisis kebijakan publik terkait pembangunan infrastruktur, perencanaan wilayah, dan evaluasi dampak sosial ekonomi.',
            ],
            [
                'nama_mk' => 'Ekonomi Mikro untuk Pembangunan',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5033',
                'deskripsi_mk' => 'Prinsip ekonomi mikro dengan fokus pada perilaku agen ekonomi, pasar, dan kebijakan sosial dalam konteks pembangunan daerah.',
            ],
            [
                'nama_mk' => 'Statistik Dasar I',
                'sks' => 3,
                'minimal_semester' => 1,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5033',
                'deskripsi_mk' => 'Pengenalan konsep probabilitas, peluang, dan statistik deskriptif untuk analisis data dasar.',
            ],
            [
                'nama_mk' => 'Fundamentals of Electrical Engineering',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5033',
                'deskripsi_mk' => 'Kunta-kunci konsep elektro tebkunci listrik, rangkaian sederhana, dan analisis tegangan arus pada sirkuit DC.',
            ],
            [
                'nama_mk' => 'Kewirausahaan Teknologi dan Inovasi',
                'sks' => 2,
                'minimal_semester' => 3,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5033',
                'deskripsi_mk' => 'Pengenalan konsep kewirausahaan pada konteks teknologi, identifikasi peluang usaha, dan penyusunan rencana bisnis sederhana.',
            ],
            [
                'nama_mk' => 'Statistical Methods for Development',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5033',
                'deskripsi_mk' => 'Pengenalan konsep statistik terapan untuk perencanaan pembangunan, mencakup distribusi, estimasi, uji hipotesis sederhana, dan interpretasi data survei.',
            ],
            [
                'nama_mk' => 'Economic Fundamentals for ICT Projects',
                'sks' => 3,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5033',
                'deskripsi_mk' => 'Membedah dasar-dasar ekonomi mikro dan makro yang relevan untuk perencanaan proyek teknologi informasi dan studi kelayakan.',
            ],
            [
                'nama_mk' => 'Risk and Resilience in Urban Systems',
                'sks' => 4,
                'minimal_semester' => 4,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5033',
                'deskripsi_mk' => 'Kaji risiko infrastruktur dan kebijakan pembangunan kota, dengan fokus pada ketahanan dan respons adaptif terhadap bencana.',
            ],
            [
                'nama_mk' => 'Architectural Design Studio I',
                'sks' => 4,
                'minimal_semester' => 5,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5033',
                'deskripsi_mk' => 'Studio desain arsitektur untuk pemanfaatan ruang publik, analisis konteks lokasi, dan pengembangan solusi kreatif berkelanjutan.',
            ],
            [
                'nama_mk' => 'Project Management for Sustainable Technology',
                'sks' => 3,
                'minimal_semester' => 4,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5033',
                'deskripsi_mk' => 'Konsep manajemen proyek berfokus pada manajemen waktu, biaya, risiko, dan kualitas untuk proyek teknologi berkelanjutan.',
            ],
            [
                'nama_mk' => 'Statistika Untuk Ilmu Pembangunan',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5033',
                'deskripsi_mk' => 'Pengantar konsep statistika, pengumpulan data, analisis deskriptif, probabilitas dasar, serta interpretasi hasil untuk kajian pembangunan masyarakat.',
            ],
            [
                'nama_mk' => 'Energy Fundamentals for Sustainable Development',
                'sks' => 3,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5033',
                'deskripsi_mk' => 'Konsep energi terbarukan, efisiensi energi, dan dampak kebijakan pada pembangunan berkelanjutan; studi kasus proyek energi di negara berkembang.',
            ],
            [
                'nama_mk' => 'Políticas and Planning for Development',
                'sks' => 3,
                'minimal_semester' => 4,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5033',
                'deskripsi_mk' => 'Analisis kebijakan publik terkait pembangunan, perencanaan kota, evaluasi program, serta interaksi antara pemerintah, sektor swasta, dan komunitas.',
            ],
            [
                'nama_mk' => 'Anthropology of Development',
                'sks' => 2,
                'minimal_semester' => 2,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5033',
                'deskripsi_mk' => 'Kajian antropologi mengenai dinamika pembangunan, budaya, partisipasi komunitas, dan implikasi program intervensi sosial.',
            ],
            [
                'nama_mk' => 'English for Development Professionals',
                'sks' => 3,
                'minimal_semester' => 3,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5033',
                'deskripsi_mk' => 'Keterampilan bahasa Inggris teknis untuk menulis laporan kebijakan, komunikasi tim lintas negara, serta presentasi proyek pembangunan.',
            ],
            [
                'nama_mk' => 'Economics of Development',
                'sks' => 4,
                'minimal_semester' => 4,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5033',
                'deskripsi_mk' => 'Teori ekonomi pertumbuhan, analisis pasar tenaga kerja, inflasi, investasi, dan peran institusi dalam konteks pembangunan.',
            ],
            [
                'nama_mk' => 'Development Economics Lab',
                'sks' => 2,
                'minimal_semester' => 5,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5033',
                'deskripsi_mk' => 'Laboratorium studi kasus pembangunan dengan pendekatan simulasi data, pemodelan kebijakan, dan evaluasi dampak program.',
            ],

            // Teknik Pangan (5045) - 25 courses
            [
                'nama_mk' => 'Statistik Dasar untuk Teknologi Pangan',
                'sks' => 3,
                'minimal_semester' => 1,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5045',
                'deskripsi_mk' => 'Pengantar konsep statistik dasar untuk analisis data eksperimen pada pengolahan pangan, termasuk distribusi, regresi sederhana, dan uji hipotesis.',
            ],
            [
                'nama_mk' => 'Engineering Fundamentals: Food Process Engineering',
                'sks' => 4,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5045',
                'deskripsi_mk' => ' Mata kuliah inti yang membekali mahasiswa dengan prinsip-prinsip rekayasa proses pangan, perancangan batch, serta kontrol mutu dan efisiensi energi.',
            ],
            [
                'nama_mk' => 'Kimia Pangan Dasar',
                'sks' => 3,
                'minimal_semester' => 1,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5045',
                'deskripsi_mk' => 'Pengenalan kimia bahan pangan, struktur zat kimia utama, reaksi kimia yang relevan pada pengolahan pangan, dan kandungan kimia dalam produk akhir.',
            ],
            [
                'nama_mk' => 'Teknologi Pengolahan Pangan Lembut',
                'sks' => 3,
                'minimal_semester' => 3,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5045',
                'deskripsi_mk' => 'Anatomi proses pengolahan pangan lembut seperti pasteurisasi, homogenisasi, dan pengendalian parameter proses untuk mempertahankan kualitas nutrisi.',
            ],
            [
                'nama_mk' => 'Kecermatan Riset dan Analisis Data Pangan',
                'sks' => 2,
                'minimal_semester' => 4,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5045',
                'deskripsi_mk' => 'Keterampilan riset dasar, desain eksperimen, analisis data, dan pelaporan ilmiah yang relevan dengan pengujian mutu produk pangan.',
            ],
            [
                'nama_mk' => 'Statistika Terapan untuk Teknologi Pangan',
                'sks' => 3,
                'minimal_semester' => 1,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5045',
                'deskripsi_mk' => 'Pengenalan konsep statistika, pengolahan data, dan penerapan teknik statistik dasar untuk analisis kualitas dan proses produksi pangan.',
            ],
            [
                'nama_mk' => 'Engineering Fundamentals in Food Process',
                'sks' => 4,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5045',
                'deskripsi_mk' => 'Kuliah umum mengenai prinsip-prinsip rekayasa proses pangan, termasuk transport fenomena, termodinamika, dan perancangan lini produksi.',
            ],
            [
                'nama_mk' => 'Pengolahan Buah dan Sayuran',
                'sks' => 3,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5045',
                'deskripsi_mk' => 'Praktikum dan teori mengenai teknik pengolahan buah dan sayuran, pengawetan, serta evaluasi kualitas produk pangan hortikultura.',
            ],
            [
                'nama_mk' => 'Teknologi Bahan Makanan Lanjutan',
                'sks' => 3,
                'minimal_semester' => 4,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5045',
                'deskripsi_mk' => 'Kajian bahan makanan tingkat lanjut, karakterisasi senyawa, perubahan kimia selama pemrosesan, dan pemilihan bahan baku untuk produk inovatif.',
            ],
            [
                'nama_mk' => 'Keamanan Pangan dan HACCP',
                'sks' => 2,
                'minimal_semester' => 5,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5045',
                'deskripsi_mk' => 'Pengenalan konsep keamanan pangan, HACCP, identifikasi bahaya, titik kendali kritis, dan implementasi praktik GMP di industri pangan.',
            ],
            [
                'nama_mk' => 'Sistem Ketahanan Pangan (Food Security System)',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5045',
                'deskripsi_mk' => 'Waham kuliah ini membahas konsep ketahanan pangan nasional, risiko gangguan rantai pasok, dan strategi mitigasi melalui kebijakan, teknologi pemantauan, serta alokasi sumber daya.',
            ],
            [
                'nama_mk' => 'Engineering Economics for Food Technology',
                'sks' => 3,
                'minimal_semester' => 4,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5045',
                'deskripsi_mk' => 'Mata kuliah yang membahas analisis biaya, nilai waktu uang, harga pokok produksi, dan evaluasi kelayakan proyek di sektor pangan dengan studi kasus nyata.',
            ],
            [
                'nama_mk' => 'Proporsi dan Analisis Kualitas Pangan (Quality Assurance & Control)',
                'sks' => 4,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5045',
                'deskripsi_mk' => 'Mempelajari metode jaminan mutu, HACCP, analisis bahaya dan titik kritis pengendalian, serta teknik sampling untuk memastikan mutu produk pangan.',
            ],
            [
                'nama_mk' => 'Teknologi Pengolahan Pangan Lanjut (Advanced Food Processing)',
                'sks' => 4,
                'minimal_semester' => 5,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5045',
                'deskripsi_mk' => 'Kuliah praktikum dan teori mengenai teknik pengolahan modern (pematangan, sterilisasi, pengemasan, dan peningkatan nilai tambah produk pangan.)',
            ],
            [
                'nama_mk' => 'Bioprocess & Microbial Tech in Food',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5045',
                'deskripsi_mk' => 'Pengenalan mikrobiologi terapan untuk pengolahan makanan, kultur sel, bioprocessing, dan penilaian risiko keamanan hayati dalam proses produksi.',
            ],
            [
                'nama_mk' => 'Statistika Dasar',
                'sks' => 3,
                'minimal_semester' => 1,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5045',
                'deskripsi_mk' => 'Pengenalan konsep statistika dasar, pengukuran variabel, distribusi, peluang, dan implementasi analisis sederhana menggunakan data nyata.',
            ],
            [
                'nama_mk' => 'Engineering Fundamentals of Food Processing',
                'sks' => 4,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5045',
                'deskripsi_mk' => 'Fokus pada prinsip-prinsip dasar pemrosesan pangan, aliran material, termodinamika, dan perancangan unit operasi untuk produksi pangan.',
            ],
            [
                'nama_mk' => 'Tahap Pangan Industri (Packaging & Logistics)',
                'sks' => 3,
                'minimal_semester' => 4,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5045',
                'deskripsi_mk' => 'Mata kuliah pilihan terkait kemasan, logistik, rantai pasok, dan manajemen distribusi produk pangan.',
            ],
            [
                'nama_mk' => 'Kimia Makanan Lanjutan',
                'sks' => 3,
                'minimal_semester' => 5,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5045',
                'deskripsi_mk' => 'Mempelajari kimia pangan tingkat lanjut, interaksi zat gizi, aditif, serta reaksi kimia pada produk pangan.',
            ],
            [
                'nama_mk' => 'Bioprocess Engineering for Food',
                'sks' => 4,
                'minimal_semester' => 6,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5045',
                'deskripsi_mk' => 'Pendekatan rekayasa bioproses dalam produksi pangan bernilai tambah, termasuk kultur mikroba dan optimasi proses.',
            ],
            [
                'nama_mk' => 'Statistika Dasar (Basic Statistics)',
                'sks' => 3,
                'minimal_semester' => 1,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5045',
                'deskripsi_mk' => 'Pengenalan konsep statistika deskriptif dan inferensial, distribusi probabilitas, serta penggunaan teknik statistik dasar untuk analisis data eksperimental.',
            ],
            [
                'nama_mk' => 'Kecerdasan Buatan untuk Pangan (AI for Food Science)',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5045',
                'deskripsi_mk' => 'Pengenalan konsep AI dan pembelajaran mesin dengan fokus pada aplikasi di industri pangan, termasuk deteksi kualitas produk dan prediksi permintaan.',
            ],
            [
                'nama_mk' => 'Kimia Pangan Lanjut (Advanced Food Chemistry)',
                'sks' => 4,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5045',
                'deskripsi_mk' => 'Penjelajahan reaksi kimia yang relevan dengan bahan pangan, interaksi zat gizi, serta teknik analisis kimia food-grade.',
            ],
            [
                'nama_mk' => 'Engineering Economics for Food Industry',
                'sks' => 3,
                'minimal_semester' => 4,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5045',
                'deskripsi_mk' => 'Analisis biaya, investasi, dan evaluasi kelayakan proyek di sektor pangan menggunakan konsep ekonomi teknik.',
            ],
            [
                'nama_mk' => 'Riset dan Metodologi Penelitian Pangan (Research Methods in Food)',
                'sks' => 3,
                'minimal_semester' => 4,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5045',
                'deskripsi_mk' => 'Metodologi penelitian, desain eksperimen, dan teknik analisis data untuk studi pangan serta tulisan ilmiah.',
            ],

            // Teknik Bangunan Lepas Pantai (5046) - 25 courses
            [
                'nama_mk' => 'Structural Mechanics I',
                'sks' => 4,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5046',
                'deskripsi_mk' => 'Pengenalan konsep-teori mekanika struktur untuk bangunan rendah dan menengah, mencakup gaya, momen, dan kestabilan elemen struktural serta analisis beban sederhana.',
            ],
            [
                'nama_mk' => 'Hydraulics and Water Resources',
                'sks' => 3,
                'minimal_semester' => 4,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5046',
                'deskripsi_mk' => 'Mempelajari prinsip-prinsip hidrolika, aliran air dalam sistem bangunan, perencanaan sumber daya air, dan desain saluran serta sumur resapan.',
            ],
            [
                'nama_mk' => 'Construction Materials and Methods',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5046',
                'deskripsi_mk' => 'Mengulas jenis bahan bangunan, sifat-sifat material, teknik pemilihan material, serta metode konstruksi modern yang berkelanjutan.',
            ],
            [
                'nama_mk' => 'Building Information Modeling (BIM) for Structures',
                'sks' => 3,
                'minimal_semester' => 5,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5046',
                'deskripsi_mk' => 'Pengenalan BIM untuk perancangan struktur, pemodelan 3D, kolaborasi antar disiplin, dan analisis koherensi model bangunan.',
            ],
            [
                'nama_mk' => 'Geotechnical Engineering',
                'sks' => 4,
                'minimal_semester' => 6,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5046',
                'deskripsi_mk' => 'Studi tentang sifat tanah, interaksi tanah-bangunan, desain fondasi, serta teknik mitigasi deformasi dan penurunan tanah pada proyek konstruksi.',
            ],
            [
                'nama_mk' => 'Structural Mechanics I',
                'sks' => 3,
                'minimal_semester' => 1,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5046',
                'deskripsi_mk' => 'Pengenalan mekanika struktur untuk memahami perilaku elemen bangunan terhadap beban, perencanaan dimensi anggota, serta analisis momen dan gaya. Deskripsi ini mencakup konsep tegangan, deformasi, dan kestabilan elemen struktur.',
            ],
            [
                'nama_mk' => 'Advanced Concrete Technology',
                'sks' => 4,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5046',
                'deskripsi_mk' => 'Mempelajari teknologi beton mutakhir, campuran, sifat elastis, serta perakitan beton bertulang, termasuk pengolahan material, uji mutu, dan perancangan elemen beton.',
            ],
            [
                'nama_mk' => 'Project Management for Building Projects',
                'sks' => 3,
                'minimal_semester' => 4,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5046',
                'deskripsi_mk' => 'Pengenalan manajemen proyek konstruksi gedung: perencanaan, jadwal, anggaran, risiko, serta teknik komunikasi untuk tim multidisiplin.',
            ],
            [
                'nama_mk' => 'Geotechnical Engineering',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5046',
                'deskripsi_mk' => 'Studi sifat tanah, interaksi tanah-bangunan, fondasi, serta desain pendekatan analitis untuk stabilitas tanah dan fondasi bawah permukaan.',
            ],
            [
                'nama_mk' => 'Sustainable Building Materials',
                'sks' => 2,
                'minimal_semester' => 5,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5046',
                'deskripsi_mk' => 'Evaluasi material bangunan ramah lingkungan, siklus hidup, dampak lingkungan, dan praktik selection material yang berkelanjutan untuk proyek lepasa pantai.',
            ],
            [
                'nama_mk' => 'Statik Struktur Bangunan',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5046',
                'deskripsi_mk' => 'Pengantar prinsip statik, analisis gaya dalam bangunan, perhitungan beban, serta konsep keseimbangan untuk merancang struktur baja dan beton.',
            ],
            [
                'nama_mk' => 'Desain Struktur Beton Bertulang',
                'sks' => 4,
                'minimal_semester' => 4,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5046',
                'deskripsi_mk' => 'Menerapkan perancangan dan analisis struktur beton bertulang, termasuk gaya aksial, momen, defleksi, serta kode desain yang relevan di Indonesia.',
            ],
            [
                'nama_mk' => 'Hydraulic and Geotechnical Engineering',
                'sks' => 3,
                'minimal_semester' => 5,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5046',
                'deskripsi_mk' => 'Pengenalan dasar-dasar aliran air, perilaku tanah, serta interaksi tanah-struktur untuk dukungan pondasi dan bangunan Pantai Teknik Bangunan.',
            ],
            [
                'nama_mk' => 'Manajemen Konstruksi dan Proyek',
                'sks' => 3,
                'minimal_semester' => 3,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5046',
                'deskripsi_mk' => 'Metode perencanaan, kontrol biaya, jadwal, serta manajemen sumber daya pada proyek konstruksi untuk mencapai target waktu dan kualitas.',
            ],
            [
                'nama_mk' => 'Riset dan Konstruksi Berkelanjutan',
                'sks' => 2,
                'minimal_semester' => 6,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5046',
                'deskripsi_mk' => 'Kegiatan penelitian pendek tentang praktik konstruksi ramah lingkungan, material berkelanjutan, dan evaluasi dampak lingkungan proyek bangunan pantai.',
            ],
            [
                'nama_mk' => 'Structural Mechanics I',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5046',
                'deskripsi_mk' => 'Pengantar konsep mekanika struktur yang meliputi gaya, deformasi, dan stabilitas elemen struktur beton dan baja pada bangunan ringan.',
            ],
            [
                'nama_mk' => 'Engineering Fluid Dynamics',
                'sks' => 4,
                'minimal_semester' => 4,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5046',
                'deskripsi_mk' => 'Dasar-dasar dinamika fluida, hukum kekekalan massa dan momentum, aliran melalui saluran, dan penerapan pada sistem hidrolik.',
            ],
            [
                'nama_mk' => 'Concrete Technology',
                'sks' => 3,
                'minimal_semester' => 3,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5046',
                'deskripsi_mk' => 'Teknologi beton, pemilihan bahan, perbandingan campuran, plesteran, serta praktik uji mutu beton untuk konstruksi bangunan.',
            ],
            [
                'nama_mk' => 'Geotechnical Engineering',
                'sks' => 3,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5046',
                'deskripsi_mk' => 'Studi sifat tanah, perilaku beban tanah, dan perancangan fondasi serta remediasi tanah untuk proyek teknik sipil.',
            ],
            [
                'nama_mk' => 'Building Materials and Construction Techniques',
                'sks' => 2,
                'minimal_semester' => 2,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5046',
                'deskripsi_mk' => 'Pengantar bahan bangunan umum dan teknik konstruksi modern, termasuk metode penyusunan, uji material, dan praktik lapangan.',
            ],
            [
                'nama_mk' => 'Statik Struktur I',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5046',
                'deskripsi_mk' => 'Analisis gaya akibat beban pada elemen struktur utama untuk memastikan kestabilan dan keamanan bangunan ringan.',
            ],
            [
                'nama_mk' => 'Rangka Bangunan Kelautan (Coastal Building Frame)',
                'sks' => 4,
                'minimal_semester' => 3,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5046',
                'deskripsi_mk' => 'Didesain untuk memahami perancangan kerangka bangunan dekat pantai dengan penanganan korosi, angin laut, dan interaksi gelombang.',
            ],
            [
                'nama_mk' => 'Manajemen Proyek Konstruksi',
                'sks' => 3,
                'minimal_semester' => 4,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5046',
                'deskripsi_mk' => 'Penerapan metodologi manajemen proyek dalam proyek konstruksi, termasuk perencanaan, jadwal, biaya, dan risiko.',
            ],
            [
                'nama_mk' => 'Engineering Materials and Properties',
                'sks' => 3,
                'minimal_semester' => 2,
                'jenis_mk' => 2, // Pilihan
                'program_studi_id_prodi' => '5046',
                'deskripsi_mk' => 'Studi material teknik untuk memahami sifat fisik, mekanik, dan performa material yang digunakan pada konstruksi.',
            ],
            [
                'nama_mk' => 'Analisis Struktur Lanjut',
                'sks' => 4,
                'minimal_semester' => 4,
                'jenis_mk' => 1, // Wajib
                'program_studi_id_prodi' => '5046',
                'deskripsi_mk' => 'Metode analisis untuk bangunan bertingkat tinggi dan struktur kompleks dengan pendekatan statik dan dinamik.',
            ],
        ];

        $prodiIdToPrefixMap = [
            '5001' => 'FS', // Fisika
            '5002' => 'MA', // Matematika
            '5003' => 'ST', // Statistika
            '5004' => 'KI', // Kimia
            '5005' => 'BI', // Biologi
            '5006' => 'AK', // Aktuaria
            '5007' => 'ME', // Teknik Mesin
            '5008' => 'TK', // Teknik Kimia
            '5009' => 'TF', // Teknik Fisika
            '5010' => 'IS', // Teknik Sistem dan Industri
            '5011' => 'MT', // Teknik Material dan Metalurgi
            '5012' => 'SP', // Teknik Sipil
            '5013' => 'AR', // Arsitektur
            '5014' => 'LI', // Teknik Lingkungan
            '5015' => 'PW', // Perencanaan Wilayah dan Kota
            '5016' => 'GM', // Teknik Geomatika
            '5017' => 'GF', // Teknik Geofisika
            '5018' => 'PK', // Teknik Perkapalan
            '5019' => 'SK', // Teknik Sistem Perkapalan
            '5020' => 'KL', // Teknik Kelautan
            '5021' => 'TR', // Teknik Transportasi Laut
            '5022' => 'EL', // Teknik Elektro
            '5023' => 'BM', // Teknik Biomedik
            '5024' => 'KO', // Teknik Komputer
            '5025' => 'IF', // Teknik Informatika
            '5026' => 'SI', // Sistem Informasi
            '5027' => 'TI', // Teknologi Informasi
            '5028' => 'DP', // Desain Produk
            '5029' => 'DI', // Desain Interior
            '5030' => 'DK', // Desain Komunikasi Visual
            '5031' => 'MB', // Manajemen Bisnis
            '5033' => 'SB', // Studi Pembangunan
            '5045' => 'PA', // Teknik Pangan
            '5046' => 'BL', // Teknik Bangunan Lepas Pantai
        ];

        $processedMatakuliah = [];
        $counters = [];
        // Track last prodi encountered and the current 2-digit curriculum year
        $lastProdiId = null;
        $currentYear = null; // e.g., 20-24

        foreach ($matakuliah as $course) {
            $prodiId = $course['program_studi_id_prodi'];
            $semester = $course['minimal_semester'];
            $jenisMk = $course['jenis_mk'];

            // 1. Prodi Code Prefix (2 chars)
            $prodiPrefix = $prodiIdToPrefixMap[$prodiId] ?? 'XX';

            // 2. Curriculum Year (2 chars, from 20-24)
            // Rule: if prodi changes compared to previous row, pick a new random year; otherwise reuse the previous year
            if ($prodiId !== $lastProdiId) {
                $currentYear = rand(20, 24);
                $lastProdiId = $prodiId;
            }
            $year = $currentYear ?? rand(20, 24);

            // 3. Minimum Semester (1 char)
            // Semester can be > 8, so we take the last digit if it's too large, or just the number if not.
            // A simple approach is to cap it at 8 for the code.
            $semesterChar = min($semester, 8); 

            // 4. Course Type (1 char)
            $jenisMkChar = $jenisMk;

            // 5. Unique Suffix (2 chars)
            // Create a key to count occurrences to ensure uniqueness
            $counterKey = "{$prodiPrefix}{$year}{$semesterChar}{$jenisMkChar}";
            
            // Increment the counter for this specific combination
            $counters[$counterKey] = ($counters[$counterKey] ?? 0) + 1;
            $uniqueSuffix = sprintf('%02d', $counters[$counterKey]);
            
            // Combine all parts to form the unique kode_mk
            $kodeMk = "{$prodiPrefix}{$year}{$semesterChar}{$jenisMkChar}{$uniqueSuffix}";

            // Add the generated kode_mk to the course data
            $course['kode_mk'] = $kodeMk;
            $processedMatakuliah[] = $course;
        }
        
        // Insert all courses in batches for better performance
        foreach (array_chunk($processedMatakuliah, 100) as $batch) {
            DB::table('matakuliah')->insert($batch);
        }

        $this->command->info('Successfully seeded ' . count($processedMatakuliah) . ' courses with unique codes for all ITS study programs.');
    }
}

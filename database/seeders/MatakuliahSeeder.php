<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MatakuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Define Program Studi ID
        $prodiId = '5025'; // Assuming 'IF' is the ID for Teknik Informatika

        // Semester 1
        $semester1 = [
            ['kode_mk' => 'SM234101', 'nama_mk' => 'Calculus 1', 'sks' => 3, 'minimal_semester' => 1, 'jenis_mk' => 1],
            ['kode_mk' => 'EF234101', 'nama_mk' => 'Fundamental Programming', 'sks' => 4, 'minimal_semester' => 1, 'jenis_mk' => 1],
            ['kode_mk' => 'EF234102', 'nama_mk' => 'Digital System', 'sks' => 3, 'minimal_semester' => 1, 'jenis_mk' => 1],
            ['kode_mk' => 'EF234103', 'nama_mk' => 'Linear Algebra', 'sks' => 3, 'minimal_semester' => 1, 'jenis_mk' => 1],
            ['kode_mk' => 'EF234104', 'nama_mk' => 'Database System', 'sks' => 4, 'minimal_semester' => 1, 'jenis_mk' => 1],
        ];

        // Semester 2
        $semester2 = [
            ['kode_mk' => 'EF234201', 'nama_mk' => 'Data Structure', 'sks' => 4, 'minimal_semester' => 2, 'jenis_mk' => 1],
            ['kode_mk' => 'EF234202', 'nama_mk' => 'Operating System', 'sks' => 4, 'minimal_semester' => 2, 'jenis_mk' => 1],
            ['kode_mk' => 'EF234203', 'nama_mk' => 'Computer Organization', 'sks' => 3, 'minimal_semester' => 2, 'jenis_mk' => 1],
            ['kode_mk' => 'EF234204', 'nama_mk' => 'Numerical Computation', 'sks' => 3, 'minimal_semester' => 2, 'jenis_mk' => 1],
            ['kode_mk' => 'SM234201', 'nama_mk' => 'Calculus 2', 'sks' => 3, 'minimal_semester' => 2, 'jenis_mk' => 1],
            ['kode_mk' => 'EW234201', 'nama_mk' => 'Introduction to Intelligent Electrical and Informatics Technology', 'sks' => 2, 'minimal_semester' => 2, 'jenis_mk' => 1],
        ];

        // Semester 3
        $semester3 = [
            ['kode_mk' => 'EF234301', 'nama_mk' => 'Web Programming', 'sks' => 3, 'minimal_semester' => 3, 'jenis_mk' => 1],
            ['kode_mk' => 'EF234302', 'nama_mk' => 'Object Oriented Programming', 'sks' => 3, 'minimal_semester' => 3, 'jenis_mk' => 1],
            ['kode_mk' => 'EF234303', 'nama_mk' => 'Computer Network', 'sks' => 4, 'minimal_semester' => 3, 'jenis_mk' => 1],
            ['kode_mk' => 'EF234304', 'nama_mk' => 'Graph Theory', 'sks' => 3, 'minimal_semester' => 3, 'jenis_mk' => 1],
            ['kode_mk' => 'EF234305', 'nama_mk' => 'Discrete Mathematics', 'sks' => 3, 'minimal_semester' => 3, 'jenis_mk' => 1],
            ['kode_mk' => 'EK234201', 'nama_mk' => 'Artificial Intelligence Concepts', 'sks' => 3, 'minimal_semester' => 3, 'jenis_mk' => 1],
            ['kode_mk' => 'EF234307', 'nama_mk' => 'Software Development Principles', 'sks' => 2, 'minimal_semester' => 3, 'jenis_mk' => 1],
        ];

        // Semester 4
        $semester4 = [
            ['kode_mk' => 'EF234401', 'nama_mk' => 'Network Programming', 'sks' => 3, 'minimal_semester' => 4, 'jenis_mk' => 1],
            ['kode_mk' => 'EF234402', 'nama_mk' => 'Probabilistic and Statistic', 'sks' => 3, 'minimal_semester' => 4, 'jenis_mk' => 1],
            ['kode_mk' => 'EF234403', 'nama_mk' => 'Automata', 'sks' => 2, 'minimal_semester' => 4, 'jenis_mk' => 1],
            ['kode_mk' => 'EF234404', 'nama_mk' => 'Database Management', 'sks' => 3, 'minimal_semester' => 4, 'jenis_mk' => 1],
            ['kode_mk' => 'EF234405', 'nama_mk' => 'Algorithm Design and Analysis', 'sks' => 3, 'minimal_semester' => 4, 'jenis_mk' => 1],
            ['kode_mk' => 'EF234406', 'nama_mk' => 'Machine Learning', 'sks' => 3, 'minimal_semester' => 4, 'jenis_mk' => 1],
            ['kode_mk' => 'ER234301', 'nama_mk' => 'Software Design', 'sks' => 3, 'minimal_semester' => 4, 'jenis_mk' => 1],
        ];
        
        // Semester 5
        $semester5 = [
            ['kode_mk' => 'EF234501', 'nama_mk' => 'Framework-based Programming', 'sks' => 3, 'minimal_semester' => 5, 'jenis_mk' => 1],
            ['kode_mk' => 'EF234502', 'nama_mk' => 'Information Security', 'sks' => 3, 'minimal_semester' => 5, 'jenis_mk' => 1],
            ['kode_mk' => 'EF234503', 'nama_mk' => 'Modeling and Simulation', 'sks' => 3, 'minimal_semester' => 5, 'jenis_mk' => 1],
            ['kode_mk' => 'EF234504', 'nama_mk' => 'Computer Graphics', 'sks' => 3, 'minimal_semester' => 5, 'jenis_mk' => 1],
            ['kode_mk' => 'EF234505', 'nama_mk' => 'Knowledge based Engineering', 'sks' => 3, 'minimal_semester' => 5, 'jenis_mk' => 1],
        ];

        // Semester 6
        $semester6 = [
            ['kode_mk' => 'UG234914', 'nama_mk' => 'English', 'sks' => 2, 'minimal_semester' => 6, 'jenis_mk' => 1],
            ['kode_mk' => 'UG234915', 'nama_mk' => 'Technopreneurship', 'sks' => 2, 'minimal_semester' => 6, 'jenis_mk' => 1],
            // Note: Religion is general, specific codes might be needed if tracked separately
            ['kode_mk' => 'UG23490X', 'nama_mk' => 'Religion', 'sks' => 2, 'minimal_semester' => 6, 'jenis_mk' => 1],
            ['kode_mk' => 'UG234913', 'nama_mk' => 'Civics', 'sks' => 2, 'minimal_semester' => 6, 'jenis_mk' => 1],
            ['kode_mk' => 'EF234601', 'nama_mk' => 'Mobile Programming', 'sks' => 3, 'minimal_semester' => 6, 'jenis_mk' => 1],
            ['kode_mk' => 'EF234602', 'nama_mk' => 'Human and Computer Interaction', 'sks' => 3, 'minimal_semester' => 6, 'jenis_mk' => 1],
            ['kode_mk' => 'EF234622', 'nama_mk' => 'Capstone Project', 'sks' => 3, 'minimal_semester' => 6, 'jenis_mk' => 1],
             // This seems to be part of Capstone Project, combining them or clarifying is an option.
            ['kode_mk' => 'EF234603', 'nama_mk' => 'Capstone Project Practical Work', 'sks' => 4, 'minimal_semester' => 6, 'jenis_mk' => 1],
        ];
        
        // Semester 7
        $semester7 = [
            ['kode_mk' => 'UG234912', 'nama_mk' => 'Indonesian', 'sks' => 2, 'minimal_semester' => 7, 'jenis_mk' => 1],
            ['kode_mk' => 'UG234911', 'nama_mk' => 'Pancasila', 'sks' => 2, 'minimal_semester' => 7, 'jenis_mk' => 1],
            ['kode_mk' => 'UG234916', 'nama_mk' => 'Applied Technology and Digital Transformation', 'sks' => 3, 'minimal_semester' => 7, 'jenis_mk' => 1],
            ['kode_mk' => 'EF234701', 'nama_mk' => 'Professional Ethics', 'sks' => 2, 'minimal_semester' => 7, 'jenis_mk' => 1],
            ['kode_mk' => 'EF234702', 'nama_mk' => 'Undergraduate Pre-Thesis', 'sks' => 2, 'minimal_semester' => 7, 'jenis_mk' => 1],
        ];

        // Semester 8
        $semester8 = [
            ['kode_mk' => 'EF234801', 'nama_mk' => 'Final Project', 'sks' => 5, 'minimal_semester' => 8, 'jenis_mk' => 1],
        ];

        // Elective Courses
        $electives = [
            ['kode_mk' => 'EF234506', 'nama_mk' => 'Inter-Network Technology', 'sks' => 3, 'minimal_semester' => 5, 'jenis_mk' => 2],
            ['kode_mk' => 'EF234507', 'nama_mk' => 'Wireless Network', 'sks' => 3, 'minimal_semester' => 5, 'jenis_mk' => 2],
            ['kode_mk' => 'EF234508', 'nama_mk' => 'Distributed System', 'sks' => 3, 'minimal_semester' => 5, 'jenis_mk' => 2],
            ['kode_mk' => 'EF234509', 'nama_mk' => 'Competitive Programming', 'sks' => 3, 'minimal_semester' => 5, 'jenis_mk' => 2],
            ['kode_mk' => 'EF234510', 'nama_mk' => 'Operations Research', 'sks' => 3, 'minimal_semester' => 5, 'jenis_mk' => 2],
            ['kode_mk' => 'EF234511', 'nama_mk' => 'Game Development Techniques', 'sks' => 3, 'minimal_semester' => 5, 'jenis_mk' => 2],
            ['kode_mk' => 'EF234513', 'nama_mk' => 'Enterprise Systems', 'sks' => 3, 'minimal_semester' => 5, 'jenis_mk' => 2],
            ['kode_mk' => 'EF234514', 'nama_mk' => 'Information Technology Governance', 'sks' => 3, 'minimal_semester' => 5, 'jenis_mk' => 2],
            ['kode_mk' => 'ER234504', 'nama_mk' => 'Software Project Management', 'sks' => 3, 'minimal_semester' => 5, 'jenis_mk' => 2],
            ['kode_mk' => 'ER234201', 'nama_mk' => 'Requirements Engineering', 'sks' => 3, 'minimal_semester' => 5, 'jenis_mk' => 2],
            ['kode_mk' => 'EF234517', 'nama_mk' => 'Image Processing and Computer Vision', 'sks' => 3, 'minimal_semester' => 5, 'jenis_mk' => 2],
            ['kode_mk' => 'EF234518', 'nama_mk' => 'Data Mining', 'sks' => 3, 'minimal_semester' => 5, 'jenis_mk' => 2],
            ['kode_mk' => 'EF234604', 'nama_mk' => 'Mobile Computing', 'sks' => 3, 'minimal_semester' => 6, 'jenis_mk' => 2],
            ['kode_mk' => 'EF234605', 'nama_mk' => 'Pervasive Computing and Sensor Networks', 'sks' => 3, 'minimal_semester' => 6, 'jenis_mk' => 2],
            ['kode_mk' => 'EF234606', 'nama_mk' => 'Network Security', 'sks' => 3, 'minimal_semester' => 6, 'jenis_mk' => 2],
            ['kode_mk' => 'EF234607', 'nama_mk' => 'Application Security', 'sks' => 3, 'minimal_semester' => 6, 'jenis_mk' => 2],
            ['kode_mk' => 'EF234608', 'nama_mk' => 'Interface Based Programming', 'sks' => 3, 'minimal_semester' => 6, 'jenis_mk' => 2],
            ['kode_mk' => 'EF234609', 'nama_mk' => 'Dynamic Systems Simulation', 'sks' => 3, 'minimal_semester' => 6, 'jenis_mk' => 2],
            ['kode_mk' => 'EF234610', 'nama_mk' => 'Agent Based Simulation', 'sks' => 3, 'minimal_semester' => 6, 'jenis_mk' => 2],
            ['kode_mk' => 'EF234611', 'nama_mk' => 'Forecasting Techniques', 'sks' => 3, 'minimal_semester' => 6, 'jenis_mk' => 2],
            ['kode_mk' => 'EF234612', 'nama_mk' => 'Computer Animation and 3D Modeling', 'sks' => 3, 'minimal_semester' => 6, 'jenis_mk' => 2],
            ['kode_mk' => 'EF234613', 'nama_mk' => 'Educational and Simulation Games', 'sks' => 3, 'minimal_semester' => 6, 'jenis_mk' => 2],
            ['kode_mk' => 'EF234614', 'nama_mk' => 'User Experience Design', 'sks' => 3, 'minimal_semester' => 6, 'jenis_mk' => 2],
            ['kode_mk' => 'EF234615', 'nama_mk' => 'System Audit', 'sks' => 3, 'minimal_semester' => 6, 'jenis_mk' => 2],
            ['kode_mk' => 'EF234616', 'nama_mk' => 'Distributed Database', 'sks' => 3, 'minimal_semester' => 6, 'jenis_mk' => 2],
            ['kode_mk' => 'EF234617', 'nama_mk' => 'Geographic Information Systems', 'sks' => 3, 'minimal_semester' => 6, 'jenis_mk' => 2],
            ['kode_mk' => 'ER234503', 'nama_mk' => 'Software Quality', 'sks' => 3, 'minimal_semester' => 6, 'jenis_mk' => 2],
            ['kode_mk' => 'ER234402', 'nama_mk' => 'Software Construction', 'sks' => 3, 'minimal_semester' => 6, 'jenis_mk' => 2],
            ['kode_mk' => 'EK234501', 'nama_mk' => 'Text Mining', 'sks' => 3, 'minimal_semester' => 6, 'jenis_mk' => 2],
            ['kode_mk' => 'EF234619', 'nama_mk' => 'Deep Learning', 'sks' => 3, 'minimal_semester' => 6, 'jenis_mk' => 2],
            ['kode_mk' => 'EF234618', 'nama_mk' => 'Game Engine', 'sks' => 3, 'minimal_semester' => 6, 'jenis_mk' => 2],
            ['kode_mk' => 'EF234703', 'nama_mk' => 'IoT Technology', 'sks' => 3, 'minimal_semester' => 7, 'jenis_mk' => 2],
            ['kode_mk' => 'EF234704', 'nama_mk' => 'Cloud Computing', 'sks' => 3, 'minimal_semester' => 7, 'jenis_mk' => 2],
            ['kode_mk' => 'EF234705', 'nama_mk' => 'Digital Forensics', 'sks' => 3, 'minimal_semester' => 7, 'jenis_mk' => 2],
            ['kode_mk' => 'EF234706', 'nama_mk' => 'Signal Processing Programming', 'sks' => 3, 'minimal_semester' => 7, 'jenis_mk' => 2],
            ['kode_mk' => 'EF234707', 'nama_mk' => 'Applied Science Data Programming', 'sks' => 3, 'minimal_semester' => 7, 'jenis_mk' => 2],
            ['kode_mk' => 'EF234708', 'nama_mk' => 'Multivariate Data Analysis', 'sks' => 3, 'minimal_semester' => 7, 'jenis_mk' => 2],
            ['kode_mk' => 'EF234709', 'nama_mk' => 'Object Oriented Simulation', 'sks' => 3, 'minimal_semester' => 7, 'jenis_mk' => 2],
            ['kode_mk' => 'EF234710', 'nama_mk' => 'Intelligence Game', 'sks' => 3, 'minimal_semester' => 7, 'jenis_mk' => 2],
            ['kode_mk' => 'EF234711', 'nama_mk' => 'Extended Reality', 'sks' => 3, 'minimal_semester' => 7, 'jenis_mk' => 2],
            ['kode_mk' => 'EF234712', 'nama_mk' => 'Big Data', 'sks' => 3, 'minimal_semester' => 7, 'jenis_mk' => 2],
            ['kode_mk' => 'EF234713', 'nama_mk' => 'Quantum Computing', 'sks' => 3, 'minimal_semester' => 7, 'jenis_mk' => 2],
            ['kode_mk' => 'ER234403', 'nama_mk' => 'Software Architecture', 'sks' => 3, 'minimal_semester' => 7, 'jenis_mk' => 2],
            ['kode_mk' => 'ER234505', 'nama_mk' => 'Software Evolution', 'sks' => 3, 'minimal_semester' => 7, 'jenis_mk' => 2],
            ['kode_mk' => 'EK234601', 'nama_mk' => 'Robotics', 'sks' => 3, 'minimal_semester' => 7, 'jenis_mk' => 2],
        ];

        $allCourses = array_merge($semester1, $semester2, $semester3, $semester4, $semester5, $semester6, $semester7, $semester8, $electives);

        foreach ($allCourses as $course) {
            DB::table('matakuliah')->insert([
                'kode_mk' => $course['kode_mk'],
                'nama_mk' => $course['nama_mk'],
                'sks' => $course['sks'],
                'minimal_semester' => $course['minimal_semester'],
                'jenis_mk' => $course['jenis_mk'], // 1 for Wajib, 2 for Pilihan
                'program_studi_id_prodi' => $prodiId,
                'deskripsi_mk' => 'Deskripsi untuk ' . $course['nama_mk'], // Placeholder description
            ]);
        }
    }
}

import { PageProps as InertiaPageProps } from '@inertiajs/react';

export interface User {
  id: number;
  name: string;
  email: string;
  role: 'mahasiswa' | 'dosen';
}

export interface PageProps extends InertiaPageProps {
  auth: {
    user: {
      name: string;
      role: string;
      email: string;
    };
  };
  url: string;
  // other props
  flash: {
    message: string | null;
  };
  [key: string]: unknown;
}

export interface ProgramStudi {
  id_prodi: string;
  nama_prodi: string;
  nama_fakultas: string;
}

export interface Ruangan {
  id_ruangan: string;
  tempat_ruangan: string;
}

export interface TahunAkademik {
  id_tahun_akademik: string;
  semester: number;
  tahun: number;
  status_aktif: number; // 0 for inactive, 1 for active
}

export interface Dosen {
  nidn: string;
  nama_dosen: string;
  no_telepon_dosen: string;
  user_id: number;
  program_studi_id_prodi: string;

  // Eager-loaded relationships (optional)
  program_studi?: ProgramStudi;
  user?: User;
}

export interface Mahasiswa {
  nrp: string;
  nama: string;
  angkatan: number;
  semester: number;
  status_mahasiswa: string;
  alamat: string | null;
  no_telepon: string | null;
  user_id: number;
  program_studi_id_prodi: string;
  dosen_nidn: string;

  // Eager-loaded relationships (optional)
  program_studi?: ProgramStudi;
  dosen_pembimbing?: Dosen;
  user?: User;
}

export interface Matakuliah {
  kode_mk: string;
  nama_mk: string;
  sks: number;
  minimal_semester: number;
  jenis_mk: number; // 1 for Wajib, 2 for Pilihan
  deskripsi_mk: string | null;
  program_studi_id_prodi: string;

  // Eager-loaded relationships (optional)
  program_studi?: ProgramStudi;
}

export interface Kelas {
  id_kelas: string;
  nama_kelas: string;
  kapasitas: number;
  terisi: number;
  jam_mulai: string; // ISO 8601 date string
  jam_selesai: string; // ISO 8601 date string
  matakuliah_kode_mk: string;
  dosen_nidn: string;
  tahun_akademik_id_tahun_akademik: string;
  ruangan_id_ruangan: string;

  // Eager-loaded relationships (optional)
  matakuliah?: Matakuliah;
  dosen?: Dosen;
  tahun_akademik?: TahunAkademik;
  ruangan?: Ruangan;
}

export interface DetailKrs {
  id_detail_krs: string;
  nilai_huruf: string | null;
  krs_id_krs: string;
  kelas_id_kelas: string;

  // Eager-loaded relationships (optional)
  krs?: Krs;
  kelas?: Kelas;
}

export interface Krs {
  id_krs: string;
  status_persetujuan: number; // 0: Pending, 1: Approved, 2: Rejected
  tanggal_pengajuan: string; // ISO 8601 date string
  mahasiswa_nrp: string;
  semester: number;
  tahun_akademik_id_tahun_akademik: string;

  // Eager-loaded relationships (optional)
  mahasiswa?: Mahasiswa;
  tahun_akademik?: TahunAkademik;
  detail_krs?: DetailKrs[];
  
  // Custom appended attributes (optional)
  total_sks?: number;
}


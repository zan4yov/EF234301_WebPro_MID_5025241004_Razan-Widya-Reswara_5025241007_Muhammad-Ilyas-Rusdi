<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Kelas extends Model
{
    protected $table = 'kelas';
    protected $primaryKey = 'id_kelas';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;
    protected $fillable = ['id_kelas', 'nama_kelas', 'kapasitas', 'terisi', 'jam_mulai', 'jam_selesai', 'matakuliah_kode_mk', 'dosen_nidn', 'tahun_akademik_id_tahun_akademik', 'ruangan_id_ruangan'];

    protected function casts(): array
    {
        return [
            'jam_mulai' => 'datetime',
            'jam_selesai' => 'datetime',
        ];
    }

    public function matakuliah(): BelongsTo
    {
        return $this->belongsTo(Matakuliah::class, 'matakuliah_kode_mk');
    }

    public function dosen(): BelongsTo
    {
        return $this->belongsTo(Dosen::class, 'dosen_nidn');
    }

    public function tahunAkademik(): BelongsTo
    {
        return $this->belongsTo(TahunAkademik::class, 'tahun_akademik_id_tahun_akademik');
    }
    
    public function ruangan(): BelongsTo
    {
        return $this->belongsTo(Ruangan::class, 'ruangan_id_ruangan');
    }
}
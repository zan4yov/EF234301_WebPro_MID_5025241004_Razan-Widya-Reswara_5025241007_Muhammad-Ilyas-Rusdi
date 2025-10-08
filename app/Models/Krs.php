<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Krs extends Model
{
    protected $table = 'krs';
    protected $primaryKey = 'id_krs';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = ['id_krs', 'status_persetujuan', 'tanggal_pengajuan', 'semester', 'catatan_penolakan', 'mahasiswa_nrp', 'tahun_akademik_id_tahun_akademik'];
    
    protected function casts(): array
    {
        return [
            'tanggal_pengajuan' => 'datetime',
        ];
    }

    public function mahasiswa(): BelongsTo
    {
        return $this->belongsTo(Mahasiswa::class, 'mahasiswa_nrp');
    }

    public function tahunAkademik(): BelongsTo
    {
        return $this->belongsTo(TahunAkademik::class, 'tahun_akademik_id_tahun_akademik');
    }

    public function detailKrs(): HasMany
    {
        return $this->hasMany(DetailKrs::class, 'krs_id_krs');
    }
}
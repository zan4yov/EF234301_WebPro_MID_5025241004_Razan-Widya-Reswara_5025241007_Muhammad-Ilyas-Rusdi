<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';
    protected $primaryKey = 'nrp';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;
    protected $fillable = ['nrp', 'nama', 'angkatan', 'semester', 'status_mahasiswa', 'alamat', 'no_telepon', 'user_id', 'program_studi_id_prodi', 'dosen_nidn'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function programStudi(): BelongsTo
    {
        return $this->belongsTo(ProgramStudi::class, 'program_studi_id_prodi');
    }

    public function dosenPembimbing(): BelongsTo
    {
        return $this->belongsTo(Dosen::class, 'dosen_nidn');
    }
    public function krs(): HasMany
    {
        return $this->hasMany(Krs::class, 'mahasiswa_nrp');
    }
}
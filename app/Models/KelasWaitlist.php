<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KelasWaitlist extends Model
{
    protected $table = 'kelas_waitlists';
    public $timestamps = true;
    protected $fillable = ['kelas_id_kelas', 'mahasiswa_nrp'];

    public function kelas()
    {
        return $this->belongsTo(\App\Models\Kelas::class, 'kelas_id_kelas', 'id_kelas');
    }

    public function mahasiswa()
    {
        return $this->belongsTo(\App\Models\Mahasiswa::class, 'mahasiswa_nrp', 'nrp');
    }
}

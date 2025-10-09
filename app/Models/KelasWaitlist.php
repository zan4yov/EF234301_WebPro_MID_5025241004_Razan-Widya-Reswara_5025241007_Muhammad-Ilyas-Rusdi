<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KelasWaitlist extends Model
{
    protected $table = 'kelas_waitlists';
    public $timestamps = true;
    protected $fillable = ['kelas_id_kelas', 'mahasiswa_nrp'];
}

<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TahunAkademik extends Model
{
    protected $table = 'tahun_akademik';
    protected $primaryKey = 'id_tahun_akademik';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;
    protected $fillable = ['id_tahun_akademik', 'semester', 'tahun', 'status_aktif'];
}
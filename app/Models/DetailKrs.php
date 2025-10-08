<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DetailKrs extends Model
{
    protected $table = 'detail_krs';
    protected $primaryKey = 'id_detail_krs';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;
    protected $fillable = ['id_detail_krs', 'nilai_huruf', 'krs_id_krs', 'kelas_id_kelas'];

    public function krs(): BelongsTo
    {
        return $this->belongsTo(Krs::class, 'krs_id_krs');
    }

    public function kelas(): BelongsTo
    {
        return $this->belongsTo(Kelas::class, 'kelas_id_kelas');
    }
}
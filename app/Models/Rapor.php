<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rapor extends Model
{
    protected $table = "rapor";
    protected $primaryKey ="['nisn_siswa', 'kd_mapel]";
    public $incrementing = false;
    protected $fillable = ['nisn_siswa', 'nama', 'alamat'];
    use HasFactory;

    public function matpel()
    {
        return $this->belongsTo(MataPelajaran::class, 'kode_matpel', 'kd_mapel');
    }

    public function siswa()
    {
        return $this->belongsTo(Siswa::class, 'nisn_siswa', 'nisn');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MataPelajaran extends Model
{
    protected $table = "mata_pelajaran";
    protected $primaryKey = "kd_mapel";
    protected $fillable = ['kd_mapel', 'nama', 'angka', 'huruf'];
    // protected $incrementing = false;`
    use HasFactory;

    public function nilai() {
        return $this->hasMany(Nilai::class);
    }
}

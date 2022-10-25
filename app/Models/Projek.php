<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projek extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_siswa',
        'nama_projek',
        'deskripsi',
        'foto',
        'tanggal',
    ];

    protected $table = 'projek';
    protected $guarded=[];
    public function siswa(){
        return $this->belongsTo('App\Models\Siswa', 'id_siswa');
    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kontak;

class Siswa extends Model
{
    use HasFactory;
    protected $fillable = [
        'nisn',
        'nama',
        'alamat',
        'jk',
        'email',
        'foto',
        'tentang',
    ];

    protected $table = 'siswa';
    protected $guarded=[];

    public function projeks(){
        return $this->hasMany('App\Models\Projek', 'id_siswa');
    }
    public function kontak(){
        return $this->hasMany(Kontak::class,'id_siswa','id');
    }

}

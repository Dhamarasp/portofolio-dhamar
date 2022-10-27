<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kontak;

class JenisKontak extends Model
{
    use HasFactory;
    protected $fillable = [
        'jenis_kontak',
    ];
    protected $table = 'jenis_kontak';
    protected $guarded = [];
    
    public function kontak(){
        return $this->hasMany(Kontak::class, 'id_jenis');
    }
    
}

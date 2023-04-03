<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $table='mahasiswa';
    protected $primarikey='id';
    protected $fillable=['nama' , 'jeniskelamin' , 'alamat' , 'id_jurusan'] ;
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;
    protected $table='buku';
    protected $primarikey='id_buku';
    public $timestamps = false;
    protected $fillable=['judul_buku' , 'jenis_buku' , 'pengarang'] ;
}

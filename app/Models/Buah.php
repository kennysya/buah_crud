<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Buah extends Model
{
    //Menentukan nama tabel secara eksplisit
    protected $table = 'buah';
    //Menentukan atribut yang dapat diisi secara massal (mass assignment)
    //Kolom 'nama_buah', 'jenis_buah', dan 'jumlah_buah' bisa diisi langsung menggunakan metode create() atau update()
    protected $fillable = ['nama_buah', 'jenis_buah', 'jumlah_buah', 'kondisi_buah'];
}

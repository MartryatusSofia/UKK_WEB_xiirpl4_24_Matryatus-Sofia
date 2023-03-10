<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class buku extends Model
{
    protected $table = 'bukus';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'gambar','judulbuku','penulis','penerbit','tahun','deskripsi'];
}

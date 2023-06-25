<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brita extends Model
{
    use HasFactory;
    protected $table ="brita";
    protected $primaryKey ="id";
    protected $fillable =[
        'id','judul','gambar','deskripsi','tanggal',
    ];
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dekan extends Model
{
    use HasFactory;
    protected $table ="dekans";
    protected $primaryKey ="id";
    protected $fillable =['id','judul','desk','img',];
}
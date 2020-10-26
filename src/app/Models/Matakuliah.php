<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matakuliah extends Model
{
    use HasFactory;
    protected $table ="table_matakuliah";
    protected $fillable= ['kodematkul','matakuliah','dosen','ruang'];
}
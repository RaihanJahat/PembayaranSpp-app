<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kelas extends Model
{
    use HasFactory;
    protected $table="siswa";

    protected $primaryKey="id_kelas";
    public $incrementing="false";
    protected $guarded=[];
}

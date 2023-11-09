<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class spp extends Model
{
    use HasFactory;
    protected $table="spp";

    protected $primaryKey="id_spp";
    public $incrementing="false";
    protected $guarded=[];
}

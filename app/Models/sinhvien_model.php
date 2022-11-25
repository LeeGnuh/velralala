<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sinhvien_model extends Model
{
    public $timeStaps = false;
    protected $fillable = [
        'name'
    ];
    protected $primaryKey ='id_sv';
    protected $table ='sinhvien';
}

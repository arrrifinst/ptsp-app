<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SurveiModel extends Model
{
    use HasFactory;

    protected $table = 'survei';
    protected $fillable = [
        'nama',
        'kepuasan',
        'keperluan',
        'kritik'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LayananModel extends Model
{
    use HasFactory;

    protected $table = 'layanan';
    protected $guarded = ['id'];
    protected $fillable = [
        'nama',
        'email',
        'telepon',
        'jenis',
        'file',
        'status'
    ];
}

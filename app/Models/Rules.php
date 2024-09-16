<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rules extends Model
{
    use HasFactory;
    protected $fillable = [
        'jam',
        'kondisi_jalan',
        'kondisi_lingkungan',
        'kondisi_kecelakaan',
        'tingkat_kerawanan',
    ];
}

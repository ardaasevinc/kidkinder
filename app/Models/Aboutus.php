<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aboutus extends Model
{
    use HasFactory;
    protected $table = 'aboutuses';

    protected $fillable = [
        'baslik1',
        'baslik2',
        'aciklama',
        'goruntul1',
        'goruntul2',
        'buton_metni',
        'tarih',
        'kisa_metin1',
        'kisa_metin2',
        'kisa_metin3',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Digimon extends Model
{

    protected $table = 'digimon';

    protected $fillable = [
        'name',
        'lavel',
        'img',
        'music'
    ];

    public function getDigimons() {
        // $filtro = '';
        return DB::select("
            SELECT
            d.id,
            d.name,
            d.level,
            d.img,
            d.id_music,
            CONCAT(m.name, '.mp3') AS music
            FROM digimon d
            INNER JOIN music m ON m.id = d.id_music    
        ");
    }
}

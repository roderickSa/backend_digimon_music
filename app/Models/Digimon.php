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
        $filtro = '';
        return DB::select('select * from digimon where music != ?', [$filtro]);
    }
}

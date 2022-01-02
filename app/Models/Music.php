<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Music extends Model
{
    protected $table = 'music';

    protected $fillable = [
        'name'
    ];

    public function getMusics() {
        return DB::select('select id, name, CONCAT(name, ".mp3") AS music from music');
    }
}

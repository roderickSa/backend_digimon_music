<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Digimon;
use App\Models\Music;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::post('/digimons', function() {
//     return Digimon::where('music', '!=', '')->get();
// });
Route::post('/musics', function() {
    // return Music::all();
    $model_music = new Music();
    return  $model_music->getMusics();
});

Route::post('/digimons', function() {
    $model_digimon = new Digimon();
    return  $model_digimon->getDigimons();
});
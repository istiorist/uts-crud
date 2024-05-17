<?php

use App\Http\Controllers\webController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PasienController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return view('hello');
});

Route::view('/hello', 'hello');

Route::get('/coba/{id}', function (string $id) {
    return view('coba', ['id'=>$id]);
});

Route::view('/biodata', 'biodata');

Route::post('/biodata', function (Request $request) {
    $output="Nama: . $request->nama. <br>
            Email: . $request->email. <br>
            No. Hp: $request->no_hp.";
    return $output;
});

Route::resource('data_pasien',webController::class); 

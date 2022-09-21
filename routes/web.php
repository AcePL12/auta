<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Models\auta;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('test/manufacturers', [ClientController::class,'getallPost'])->name('posts.getallpost');

Route::get('test/manufacturers/{id}', [ClientController::class,'getPostById'])->name('posts.getpostbyid');
Route::get("/manufacturers", [ClientController::class,'index']);
Route::get("/", [ClientController::class,'options','country']);


Route::post('/', function() {
    auta::create([
        'Country'=>request('Country'),
        'Mfr_CommonName'=>request('Mfr_CommonName'),
        "Mfr_ID"=>request("Mfr_ID"),
        "Mfr_Name"=>request("Mfr_Name"),
        "Vehicle registration number"=>request("Vehicle_registration_number"),

    ]);
    return redirect('/');
});
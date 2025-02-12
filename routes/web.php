<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\SiswaController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

route::get('home/{nama?}', function (Request $request){
    $nama = $request ->nama;
    return view('home', compact('nama'));
})->name('home');

Route::get('siswa',[SiswaController::class, 'index'])->name('siswa');
Route::get('add-siswa',[SiswaController::class,'add'])->name('siswa.add');
Route::post('add-siswa', [SiswaController::class,'store'])->name('siswa.add.process');
Route::delete('siswa/{id}', [SiswaController::class, 'destroy'])->name('siswa.delete');
Route::get('siswa/edit/{id}', [SiswaController::class,'edit'])->name('siswa.edit');
Route::put('siswa/{id}', [SiswaController::class, 'update'])->name('siswa.update');



Route::get('about', function() {
    return view('about');
 })->name('about');


//  rohman
// route::get( '/Dashboard',[ClassController::class,'index']);
route::get( '/siswa/create',[ClassController::class,'create']);

Route::get('/murid/page', [ClassController::class,'page'])->name('page');
Route::post('/siswa/store',[ClassController::class,'store'])->name('siswa.create');

Route::get('/dashboard', function(){
    return view('pages.dashboard');
});



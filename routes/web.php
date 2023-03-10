<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
use App\Http\Controllers\BukuController;

Route::get('/', [UserController::class, 'dashboard'])->name('dashboard');
Route::get('/detailbuku/{id}', [UserController::class, 'detail'])->name('detail');


// Route::get('/', function () {
//     return view ('index', [
//     "title" => "Beranda"
//     ]);
// });

Route::get('/about',function() {
    return view('about',[
        "title" => "About",
        "nama" => "Martryatus Sofia",
        "email" => "3103120132@student.smktelkom-pwt.sch.id",
        "gambar" => "martryatus.jpg"
    ]);
});


Route::get('/gallery',function() {
    return view('gallery',[
        "title" => "Gallery"
    ]);
});

//Route::resource('/bukus', bukuController::class);



Auth::routes();

Route::group(['middlawere' => ['auth']], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('bukus.index');
    Route::post('/bukus/store', [BukuController::class, 'store'])->name('bukus.store');
    Route::get('/bukus/index', [BukuController::class, 'index'])->name('bukus.index');
    Route::get('/bukus/create', [BukuController::class, 'create'])->name('bukus.create');
    Route::get('/bukus/{id}/edit', [BukuController::class, 'edit'])->name('bukus.edit');
    Route::post('/bukus/{id}/update', [BukuController::class, 'update'])->name('bukus.update');
    Route::get('/bukus/{id}/destroy', [BukuController::class, 'destroy'])->name('bukus.destroy');
    Route::get('/exportpdf', [BukuController::class, 'exportpdf'])->name('databuku-pdf');
    Route::get('/exportexcel', [BukuController::class, 'export_excel'])->name('export_excel');
    
    
    
});
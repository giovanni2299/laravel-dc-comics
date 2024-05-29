<?php

use App\Http\Controllers\ComicCcontroller;
use Illuminate\Support\Facades\Route;


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

    $comics = config('comics');
    dump($comics);

    return view('welcome');
});

Route::get('/comics', [ComicCcontroller::class, 'index'])->name('comics.index');

Route::get('/comics/create', [ComicCcontroller::class, 'create'])->name('comics.create');

Route::get('/comics/{comic}', [ComicCcontroller::class, 'show'])->name('comics.show');

Route::post('/comics', [ComicCcontroller::class, 'store'])->name('comics.store');

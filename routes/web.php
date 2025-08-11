<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PreInscricaoController;
use App\Http\Controllers\VoluntariosdoacoController;

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

Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home');
Route::view('/quem-somos', 'site.quemsomos')->name('quemsomos');
Route::view('/voluntario', 'site.voluntario')->name('voluntario');
Route::post('/voluntariosdoacoes/doar', [HomeController::class, 'storeDoacao'])->name('voluntariosdoacoes.doar');
Route::post('/preinscricao/inscricao', [CursoController::class, 'preinscricaoInscricao'])->name('pre.inscricao');
Route::get('/cursos', 'App\Http\Controllers\CursoController@siteIndex')->name('curso');
Route::get('curso/{url}', 'App\Http\Controllers\CursoController@siteCourse');
Route::get('/blogs', 'App\Http\Controllers\BlogController@siteIndex')->name('blogs');
Route::get('blog/{url}', 'App\Http\Controllers\BlogController@siteBlogs');
Route::view('/contatos', 'site.contatos')->name('contatos');

Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::resource('banners', BannerController::class);
    Route::resource('cursos', CursoController::class);
    Route::resource('blogs', BlogController::class);
    Route::resource('preinscricoes', PreInscricaoController::class)
    ->parameters([
        'preinscricoes' => 'preinscricao'
    ]);

    Route::resource('voluntariosdoacoes', VoluntariosdoacoController::class);
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');


    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

require __DIR__.'/auth.php';

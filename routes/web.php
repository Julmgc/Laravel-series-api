<?php

use App\Http\Controllers\SeriesController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return redirect(to: '/series');
});

Route::resource(name:'/series', controller:SeriesController::class)->only(['index', 'create', 'store']);

Route::post('/series/destroy/{serie}', [SeriesController::class, 'destroy'])->name(name:'series.destroy');
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LOAController;
use App\Http\Controllers\CronController;

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
    return view('auth.login');
})->name('login');
Auth::routes();




Route::get('/Timer', function () {
    return view('Timer.Add');
});
Route::get('loas/create','LoaController@create')->name('Create Loa');
Route::get('/LOA', function () {
    return view('LOA.Create');
});
//Route::post('/loas/store','LOAController@store');
Route::post('/loas/store', [LOAController::class, 'store']);
Route::get('/cron', [CronController::class, 'index']);



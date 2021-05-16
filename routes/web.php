<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SliderController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\OpinionController;

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
Route::get('/clear', function() {
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('optimize');
    $exitCode = Artisan::call('route:clear');
    $exitCode = Artisan::call('view:clear');
    $exitCode = Artisan::call('config:cache');
    return '<h1>Cache facade value cleared</h1>';
});

Route::get('/', [HomeController::class, 'index']);

Route::get('/dashboard', [HomeController::class, 'dashboard'])->middleware(['auth'])->name('dashboard');
//Route::resource('crud', CRUDController::class);
Route::resource('slider', SliderController::class)->middleware(['auth']);
Route::resource('schedule', ScheduleController::class)->middleware(['auth']);
Route::resource('opinion', OpinionController::class)->middleware(['auth']);
Route::get('setToLive/{id}', [SliderController::class, 'setToLive'])->middleware(['auth'])->name('setToLive');
Route::get('removeFromLive/{id}', [SliderController::class, 'removeFromLive'])->middleware(['auth'])->name('removeFromLive');
Route::post('setSchedule', [ScheduleController::class, 'postSchedule'])->middleware(['auth']);
Route::get('setSchedule', [ScheduleController::class, 'setSchedule'])->middleware(['auth']);
Route::post('getpostcode', [HomeController::class, 'getpostcode']);
Route::post('sendMessage', [HomeController::class, 'sendMessage']);
require __DIR__.'/auth.php';

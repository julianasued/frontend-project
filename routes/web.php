<?php
use App\Http\Controllers\ApiController;
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
    return view('welcome');
});

//Route::get('/api-exemplo', [\App\Http\Controllers\ApiController::class, 'index']);
Route::post('/api-exemplo', [\App\Http\Controllers\ApiController::class, 'store']);
Route::get('/api-exemplo', [\App\Http\Controllers\ApiController::class, 'create'])->name('generate');
Route::get('/qr-code/{name}', [\App\Http\Controllers\ApiController::class, 'qrcode'])->name('generate.qrcode');
Route::get('/{name}', [\App\Http\Controllers\ApiController::class, 'show'])->name('generate.show');
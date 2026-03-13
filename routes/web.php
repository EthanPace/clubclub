<?php

use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return redirect('login');
});

Route::get('login', [SessionController::class, 'create'])->name('login');
Route::post('login', [SessionController::class, 'store'])->name('login');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/{any}', function () {
        return view('generic.page');
    })->where('any', '.*');
});

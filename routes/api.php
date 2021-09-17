<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('get_contacts', [ContactController::class, 'index'])->name('index');

Route::get('edit_contact/{id}', [ContactController::class, 'edit'])->name('edit');

Route::post('save_contact', [ContactController::class, 'store'])->name('store');

Route::post('update_contact/{id}', [ContactController::class, 'update'])->name('update');

Route::get('add_contact', [ContactController::class, 'create'])->name('create');

Route::delete('delete_contact/{id}', [ContactController::class, 'destroy'])->name('destroy');

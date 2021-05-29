<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\http\Controllers\Personnelcontroller;
use App\http\Controllers\RoleController;

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


Route::get('get-roles', [RoleController::class, 'index']);
Route::get('show-role', [RoleController::class, 'show']);
Route::post('add-role', [RoleController::class, 'store']);
Route::update('update-role', [RoleController::class, 'update']);
Route::delete('delete-role', [RoleController::class, 'delete']);

Route::get('get-personnels', [Personnelcontroller::class, 'index']);
Route::get('show-personnel', [Personnelcontroller::class, 'show']);
Route::post('add-personnel', [Personnelcontroller::class, 'store']);
Route::update('update-personnel', [Personnelcontroller::class, 'update']);
Route::delete('delete-personnel', [Personnelcontroller::class, 'delete']);
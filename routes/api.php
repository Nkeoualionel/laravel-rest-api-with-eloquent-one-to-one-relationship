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
Route::get('paginate-role', [RoleController::class, 'paginate']);
Route::get('show-role/{id}', [RoleController::class, 'show']);
Route::post('add-role', [RoleController::class, 'store']);
Route::put('update-role/{id}', [RoleController::class, 'update']);
Route::delete('delete-role/{id}', [RoleController::class, 'delete']);

Route::get('get-personnels', [Personnelcontroller::class, 'index']);
Route::get('paginate-personnel', [Personnelcontroller::class, 'paginate']);
Route::get('show-personnel/{id}', [Personnelcontroller::class, 'show']);
Route::post('add-personnel', [Personnelcontroller::class, 'store']);
Route::put('update-personnel/{id}', [Personnelcontroller::class, 'update']);
Route::delete('delete-personnel/{id}', [Personnelcontroller::class, 'delete']);
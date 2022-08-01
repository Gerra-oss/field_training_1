<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;


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


Route::controller(EmployeeController::class)->group(function (){
    Route::get('/','index');
    Route::get('/add-post', 'create');
    Route::get('edit/{id}','edit');
    Route::get('delete-post/{id}','destroy');
    
    # code...
});
Route::post('add-post',[EmployeeController::class,'store']);
Route::post('update-post',[EmployeeController::class,'update']);
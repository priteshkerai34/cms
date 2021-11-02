<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\students;
use App\Http\Controllers\membercontroller;
use App\Http\Controllers\post;

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
    return view('welcome');
});
Route::get('list-students',[students::class, "liststudents"]);
Route::get('edit/{id}',[students::class, "editstudents"])->name("student.update");
Route::post('updatestudents',[students::class,"updatestudents"])->name("student.save");
Route::get('delete/{id}',[students::class, "deletestudents"])->name("student.delete");
Route::post('addstudents',[students::class,"addstudents"])->name("student.add");

Route::get('get-member',[membercontroller::class, "getmember"]);
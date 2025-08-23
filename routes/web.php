<?php

use App\Http\Controllers\GuardianController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TeacherController;
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
    return view('welcome');
});

Route::get('/aa', function () {
    return view('welcome');
});


//Route User

Route::get("/users",[UserController::class,'getAllUsers']);
Route::get("/user/{id}",[UserController::class,'getUserById']);
Route::get("/create-user",[UserController::class,'createUser']);
Route::get("/delete-user/{id}",[UserController::class,'deleteUser']);
Route::get("/update-user/{id}",[UserController::class,'updateUser']);


Route::get("/user-guardian",[UserController::class,'searchGuardian']);

//Route parent

Route::get("/create-guardian",[GuardianController::class,'createGuardian']);

//Route etudiant
Route::get("/create-Student",[StudentController::class,'createStudent']);

// Route professeur
Route::get("/create-Teacher",[TeacherController::class,'createTeacher']);
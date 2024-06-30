<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\NoteappController;
use App\Http\Controllers\Studentcontroller;
use App\Http\Middleware\NoteappMiddleware;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function() {
    return view('welcome');
});

Route::get('/login', function() {
    return "welcome to Laravel";
});

// Route::get('/createnote', [NoteappController::class, 'shownote'])->middleware('noteapp');

Route::middleware(NoteappMiddleware::class)->group(function(){
    Route::get('/createnote', [NoteappController::class, 'shownote']);
    Route::get('/displaynote', [NoteappController::class, 'displaynote']);
    Route::get('/createnote/{id}', [NoteappController::class, 'show']);
    Route::get('/displaynote/edit/{id}', [NoteappController::class, 'edit']);
    Route::get('/displaynote/delete/{id}', [NoteappController::class, 'delete']);
    Route::post('/noteApp_process', [NoteappController::class, 'addNote']);
    Route::post('/displaynote/edit/{id}', [NoteappController::class, 'update']);
});

// Route::middleware('noteapp')->group(function(){

// });

Route::get('/index',[UserController::class, 'index']);
Route::post('/register',[UserController::class, 'register']);

Route::resource('/student',Studentcontroller::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

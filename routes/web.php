<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionController;

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

Route::get('/exam-interface', function () {
    return view('exam.exam-interface');
});

Route::get('/exam-instruction', function () {
    return view('exam.exam-instruction');
});



Route::get('question-list',[QuestionController::class, 'index']);
Route::get('add-question',[QuestionController::class, 'addQuestion']);
Route::post('save-question',[QuestionController::class, 'saveQuestion']);
Route::get('edit-question/{id}',[QuestionController::class, 'editQuestion']);//list edit button
Route::post('update-question',[QuestionController::class, 'updateQuestion']);
Route::get('delete-question/{id}',[QuestionController::class, 'deleteQuestion']);

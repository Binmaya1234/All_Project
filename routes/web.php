<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('admin.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/user/logout',[App\Http\Controller\Auth\LoginController::class,'userLogout'])->name('user.logout');

Route::prefix('admin')->group(function(){
Route::group(['middleware' => 'admin.guest'] , function(){
Route::view('/login','admin.login')->name('admin.login');
Route::post('/login',[App\Http\Controllers\AdminController::class, 'authenticate'])->name('admin.auth');
});

Route::group(['middleware' => 'admin.auth'],function(){
 Route::get('/dashboard',[App\Http\Controllers\DashboardController::class,'dashboard'])->name('admin.dashboard');
 Route::get('/logout',[App\Http\Controllers\AdminController::class,'logout'])->name('admin.logout');
});
});

Route::get('/student',[StudentController::class,'index'])->name('student.index');
Route::get('/student_add' ,[StudentController::class,'add'])->name('student.add');
Route::post('/student_store',[StudentController::class,'store'])->name('student.store');
Route::get('/student_edit/{id}', [StudentController::class,'edit'])->name('student.edit');
Route::post('/student_update', [StudentController::class,'update'])->name('student.update');
Route::get('/student_delete/{id}', [StudentController::class,'delete'])->name('student.delete');
Route::get('/student_print/{id}',[StudentController::class,'print'])->name('student.print');
Route::get('/student_view/{id}',[StudentController::class,'pdfview'])->name('student.pdfview');
Route::get('/student_date',[StudentController::class,'filter_date'])->name('student.filter_date');
Route::get('/get_sname',[StudentController::class,'get_student_name'])->name('student.get_name');
Route::get('/stu_table',[StudentController::class,'student_table'])->name('student.table_join');

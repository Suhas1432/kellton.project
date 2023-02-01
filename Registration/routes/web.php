<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\StudentController;

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





Route::get('/registration', function () {
    return view('admin.register');
});

Route::get('/reset-link', function () {
    return view('admin.email');
});

Route::get('/add-department', function () {
    return view('admin.department');
});

Route::get('/addSubject', function () {
    return view('admin.addSubject');
});



Route::get('/login',[RegistrationController::class ,'index']);
Route::get('/registration',[RegistrationController::class ,'dept_option']);
Route::post('/registration',[RegistrationController::class ,'newUser']);
Route::post('/dashboard',[RegistrationController::class ,'userLogin']);
Route::post('/add-department',[StudentController::class , 'addDept']);
Route::post('/add-subject',[StudentController::class , 'addSub']);
Route::get('/dashboard',[RegistrationController::class ,'getUser']);
Route::get('/logout',[RegistrationController::class , 'logoutUser']);
Route::get('delete/{student_id}',[StudentController::class , 'deleteUser']);
Route::post('/addSubject',[StudentController::class , 'addSubject'])->name('department-subject');

Route::get('/add-subjects-for-department',[StudentController::class , 'department_subject_option']);
Route::get('editSubject/{id}',[StudentController::class , 'edit_department_subject']);
Route::post('update-department-subject/{id}',[StudentController::class , 'update_department_subject']);

Route::get('editStudent/{student_id}',[StudentController::class , 'edit_student_info']);
Route::post('update-student/{student_id}',[StudentController::class , 'update_student_info']);

Route::get('/reset-password',[StudentController::class , 'reset']);
Route::post('/update-password',[StudentController::class , 'updatePassword']);

Route::get('/dept-subjects',[StudentController::class , 'deptSubjects']);

Route::get('/student-info',[StudentController::class , 'index']);


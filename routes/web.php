<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\loginController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\teacherController;
use App\Http\Controllers\studentController;


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

// loginController links

Route::get('/loginButton',[loginController::class,'loginButton']);

Route::post('/loginFormButton',[loginController::class,'loginFormButton']);


// adminController links

Route::get('/adminDash',[adminController::class,'adminDash']);

Route::get('/adminDashCourses',[adminController::class,'adminDashCourses']);

Route::get('/adminDashNotice',[adminController::class,'adminDashNotice']);

Route::get('/adminRegisterForm',[adminController::class,'adminRegisterForm']);

Route::post('/registerButton',[adminController::class,'registerButton']);

Route::get('/newcourseBtn',[adminController::class,'newcourseBtn']);

Route::post('/addNewCourseSubmitBtn', [AdminController::class, 'addNewCourseSubmitBtn']);

Route::get('/editCourse/{id}',[adminController::class,'editCourse']);

Route::post('/editCourse/save',[adminController::class,'editCourseNsave']);

Route::get('/delete/{id}',[adminController::class,'delete']);

Route::get('/adminSideTeachers',[adminController::class,'adminSideTeachers']);

Route::get('/adminSideStudents',[adminController::class,'adminSideStudents']);

Route::get('/studentsRequest',[adminController::class,'studentsRequest']);

Route::get('/approveby/{id}',[adminController::class,'approveby']);

Route::get('/rejectby/{id}',[adminController::class,'rejectby']);

Route::get('/adminSidePayments',[adminController::class,'adminSidePayments']);




//teacherController links

Route::get('/teacherDash',[teacherController::class,'teacherDash']);

Route::get('/teacherDashCourses',[teacherController::class,'teacherDashCourses']);

Route::get('/teacherDashNotice',[teacherController::class,'teacherDashNotice']);

Route::get('/teacherEachCourse/{id}',[teacherController::class,'teacherEachCourse']);

Route::get('/teacherZoomLinks/{id}',[teacherController::class,'teacherZoomLinks']);

Route::get('/deleteZoomLink/delete/{id}',[teacherController::class,'deleteZoomLink']);

Route::get('/createZoomLinkForm/{id}',[teacherController::class,'createZoomLinkForm']);

Route::post('/uploadZoomLink',[teacherController::class,'uploadZoomLink']);

Route::get('/uploadCourseMaterials/{id}',[teacherController::class,'uploadCourseMaterials']);

Route::post('/submitCourseMaterials', [teacherController::class, 'submitCourseMaterials']);

Route::get('/deleteDocument/delete/{id}',[teacherController::class,'deleteDocument']);

Route::get('/uploadAssignment/{id}',[teacherController::class,'uploadAssignment']);

Route::post('/assignmentUploadBtn', [teacherController::class, 'assignmentUploadBtn']);

Route::get('/deleteAssignment/delete/{id}',[teacherController::class,'deleteAssignment']);

Route::get('/uploadExamResults/{id}',[teacherController::class,'uploadExamResults']);

Route::post('/examResultsUploadBtn', [teacherController::class, 'examResultsUploadBtn']);

Route::get('/deleteResult/delete/{id}',[teacherController::class,'deleteResult']);

Route::get('/teacherViewStudents/{id}',[teacherController::class,'teacherViewStudents']);



//studentController links

Route::get('/studentDash',[studentController::class,'studentDash']);

Route::get('/studentDashCourses',[studentController::class,'studentDashCourses']);

Route::get('/studentDashNotice',[studentController::class,'studentDashNotice']);

Route::get('/studentAllCourses',[studentController::class,'studentAllCourses']);

// Route::get('/studentAllCourses',[studentController::class,'studentAllCourses']);

Route::get('/applycz/{id}',[studentController::class,'applycz']);

Route::get('/studentViewEachCourse/{id}',[studentController::class,'studentViewEachCourse']);

Route::post('/submit-assignment/{courseId}', [studentController::class, 'submitAssignment'])->name('submit_assignment');
Route::get('/student/answer/{id}',[studentController::class,'studentanswer']);

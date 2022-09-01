<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\OurcoursesController;
use App\Http\Controllers\AchivementController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();


// frondend Route
Route::get('/',[WebsiteController::class,'WbsiteHome']);
//Route::get('/',[WebsiteController::class,'Achivement']);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('admin',[AdminController::class,'admin']);
Route::get('student',[StudentController::class,'Student']);
Route::get('studentcreate',[StudentController::class,'StudentCreate']);
Route::post('studentinsert',[StudentController::class,'StudentInsert']);
Route::get('studentlist',[StudentController::class,'StudentList']);
Route::get('edit/{edit_id}',[StudentController::class,'StudentEdit']);
Route::post('studentupdate',[StudentController::class,'StudentUpdate']);
Route::get('delete/{delete_id}',[StudentController::class,'StudentDelete']);


// below Route for Our Courses backend Query
Route::get('coursescreate',[OurcoursesController::class,'CoursesCreate']);
Route::post('coursesinsert',[OurcoursesController::class,'CoursesInsert']);
Route::post('courseslist',[OurcoursesController::class,'CoursesList']);
Route::get('allourcourses',[OurcoursesController::class,'AllourCourses']);
Route::get('edit/{edit_id}',[OurcoursesController::class,'CoursesEdit']);
Route::post('updatecourses',[OurcoursesController::class,'UpdateCourses']);
Route::get('delete/{delete_id}',[OurcoursesController::class,'CoursesDelete']);

//  Achievement Section Backend Router
Route::get('createachive',[AchivementController::class,'CreateAchivement']);
Route::post('insertachive',[AchivementController::class,'InsertAchive']);
Route::post('listtachive',[AchivementController::class,'ListtAchive']);
Route::get('edit/{edit_id}',[AchivementController::class,'EditAchivement']);
Route::get('allachivement',[AchivementController::class,'AllAchivement']);
Route::post('updateachivement',[AchivementController::class,'UpdateAchivement']);
Route::get('delete/{delete_id}',[AchivementController::class,'DeleteAchivement']);

// Teacher section Router start 
Route::get('createteacher',[AchivementController::class,'CreateTeacher']);
Route::post('insertteteacher',[AchivementController::class,'InsertTeteacher']);
Route::get('allteteacher',[AchivementController::class,'AllTeteacher']);

// Event section Route start
Route::get('createevent',[AchivementController::class,'CreateEvent']);
Route::post('insertevent',[AchivementController::class,'InsertEvent']);
Route::get('allevent',[AchivementController::class,'AllEvent']);

// choose Section Route start
Route::get('createchoose',[AchivementController::class,'CreateChoose']);
Route::post('insertchoose',[AchivementController::class,'InsertChoose']);
Route::get('allchoose',[AchivementController::class,'AllChoose']);

// About Us Section Route Start
Route::get('createabout',[AchivementController::class,'CreateAbout']);
Route::post('insertabout',[AchivementController::class,'InsertAbout']);
Route::get('allabout',[AchivementController::class,'AllAbout']);

// Testimonial Section Route Start
Route::get('createtestimonila',[AchivementController::class,'CreatetesTimonila']);
Route::post('inserttestimonila',[AchivementController::class,'InserttesTimonila']);
Route::get('alltestimonila',[AchivementController::class,'AlltesTimonila']);

// Blog Post section Route Start
Route::get('createpost',[AchivementController::class,'CreatPpost']);
Route::post('insertpost',[AchivementController::class,'InsertPost']);
Route::get('allpost',[AchivementController::class,'AllPost']);
Route::get('singlepost/{post}',[AchivementController::class,'singlepost']);
Route::get('blog',[AchivementController::class,'blog'])->name('blog');


Route::get('postsingle/{post}',[AchivementController::class,'Postsingle']);
Route::get('categoryblog',[AchivementController::class,'CategoryBlog']);

//Route::get('singlecat/{post}',[AchivementController::class,'singlecat']);


// Category Section Route start
Route::get('createcategory',[AchivementController::class,'CreateCategory']);
Route::post('insertcategory',[AchivementController::class,'InsertCategory']);
Route::get('allcategory',[AchivementController::class,'AllCategory']);

// Start Home Registration Route
Route::get('createregister',[RegistrationController::class,'CreateRegister']);
Route::post('insertregister',[RegistrationController::class,'InsertRegister']);

// Start Footer Route 
Route::get('creataboutdesc',[FooterController::class,'CreatAboutDesc']);
Route::post('insertaboutdesc',[FooterController::class,'InsertAboutDesc']);
Route::get('allfooterdesc',[FooterController::class,'AllFooterAboutDesc']);

// Start Footer Location Route
Route::get('createaddress',[FooterController::class,'CreateAddress']);
Route::post('insertaddress',[FooterController::class,'InsertAddress']);
Route::get('showaddress',[FooterController::class,'ShowAddress']);

// Start Footer Gallery Route
Route::get('createfootergallery',[FooterController::class,'CreatefooterGallery']);
Route::get('showfootergallery',[FooterController::class,'Showfootergallery']);















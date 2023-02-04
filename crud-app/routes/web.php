<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CrudController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\admin\AdminLoginController;
use App\Http\Controllers\admin\AdminDashboardController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// create route for contact us
// Route::get('/',function(){
//     return view('contactus');
// });

// Route::get('/gallary',function(){
//     return view('gallary');
// });

// Route::get('/services',function(){
//     return view('services');
// });

// Route::get('/register',function(){
//     return view('register');
// });



// template integration
// Route::get("/",[HomeController::class,'index']);




// crudapp integration
Route::get("/",[CrudController::class,'index']);

// crudapp contact page routing
Route::get("/contactus",[ContactController::class,"index"]);
Route::post("/contactus",[ContactController::class,"store"]);
// crudapp Register page routing
Route::get("/register",[RegisterController::class,"index"]);
Route::post("/register",[RegisterController::class,"store"]);

// admin routing here
Route::get("/admin-login",[AdminLoginController::class,"index"]);
Route::get("/admin-login/admin-dashboard",[AdminDashboardController::class,"index"]);
Route::get("/admin-login/managecontact",[ContactController::class,"show"]);
Route::get("/admin-login/managecontact/{id}",[ContactController::class,"destroy"]);

Route::get("/admin-login/managecustomers",[RegisterController::class,"show"]);
Route::get("/admin-login/managecustomers/{id}",[RegisterController::class,"destroy"]);


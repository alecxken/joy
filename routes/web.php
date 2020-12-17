<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SignaturePadController;
use App\Http\Controllers\SettingsController;

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


Route::post('/searchlocation',[App\Http\Controllers\CompanyController::class,'searchlocation']);

Route::get('/getservice/{id}',[App\Http\Controllers\CompanyController::class,'getservice']);



Route::get('/search-waste',[App\Http\Controllers\CompanyController::class,'searchwaste']);

Route::get('/create_locations',[App\Http\Controllers\CompanyController::class,'createlocation']);

Route::get('/create_schedule',[App\Http\Controllers\CompanyController::class,'createschedule']);

Route::get('/drop-schedule/{id}',[App\Http\Controllers\CompanyController::class,'dropschedule']);

Route::post('/store_locations',[App\Http\Controllers\CompanyController::class,'storelocation']);

Route::post('/store_schedules',[App\Http\Controllers\CompanyController::class,'storeschedule']);





Route::get('/create_company',[App\Http\Controllers\CompanyController::class,'createcompany']);

Route::post('/store_company',[App\Http\Controllers\CompanyController::class,'storecompany']);

Route::post('/update_company',[App\Http\Controllers\CompanyController::class,'updatecompany']);

Route::get('/get-company/{id}',[App\Http\Controllers\CompanyController::class,'getcompany']);

Route::get('/company-drop/{id}',[App\Http\Controllers\CompanyController::class,'dropcompany']);

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//end of health form setttings

Route::get('signaturepad', [SignaturePadController::class, 'index']);

Route::post('signaturepad-post', [SignaturePadController::class, 'upload'])->name('signaturepad.upload');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/myprofile', [App\Http\Controllers\HomeController::class, 'myprofile'])->name('profile');

Route::get('/compliance-hr', [App\Http\Controllers\HomeController::class, 'myprofile'])->name('profile');

Route::post('/update-profiles', [App\Http\Controllers\HomeController::class, 'updateprofile'])->name('update.profiles');

//permissions and Roles

Route::get('admin',[UserController::class,'index']);




Route::get('roles',['as'=>'roles','uses'=>'RoleController@index']);

//roles RouteServiceProvider

Route::get('/roles_index',[App\Http\Controllers\RoleController::class,'index'])->name('roles.index');

Route::get('/roles_create',[App\Http\Controllers\RoleController::class,'create']);

Route::post('/roles_store',[App\Http\Controllers\RoleController::class,'store']);

Route::post('/roles_update/{id}',[App\Http\Controllers\RoleController::class,'update']);

Route::post('/roles_destroy/{id}',[App\Http\Controllers\RoleController::class,'destroy']);

Route::post('/roles_edit/{id}',[App\Http\Controllers\RoleController::class,'edit']);

Route::post('/roles_show/{id}',[App\Http\Controllers\RoleController::class,'show']);


Route::get('/profile','HomeController@profile');
Route::post('/profileupdate','HomeController@profileupdate');
Route::get('create-chart/{id}','HomeController@indexs');
//permissions and Roles

Route::get('/user_index', [App\Http\Controllers\UserController::class, 'index']);

Route::get('/user_create', [App\Http\Controllers\UserController::class, 'create']);

Route::get('/users_create', [App\Http\Controllers\UserController::class, 'create']);

Route::post('/user_stores', [App\Http\Controllers\UserController::class, 'storez']);

Route::post('/user_store', [App\Http\Controllers\UserController::class, 'store']);

Route::post('/user_update/{id}', [App\Http\Controllers\UserController::class, 'update']);

Route::get('/user_destroy/{id}', [App\Http\Controllers\UserController::class, 'destroy']);

Route::post('/user_edit/{id}', [App\Http\Controllers\UserController::class, 'edit']);

Route::get('/user_edit/{id}', [App\Http\Controllers\UserController::class, 'edit']);

Route::post('/user_show/{id}', [App\Http\Controllers\UserController::class, 'show']);


//permissions and Roles
Route::get('/permissions_index',[PermissionController::class ,'index']);

Route::get('/permission_create',[PermissionController::class ,'create']);

Route::post('/permissions_store',[PermissionController::class ,'store']);

Route::post('/permissions_update/{id}',[PermissionController::class ,'update']);

Route::post('/permissions_destroy/{id}',[PermissionController::class ,'destroy']);

Route::post('/permission_edit/{id}',[PermissionController::class ,'edit']);

Route::post('/permission_show/{id}',[PermissionController::class ,'show']);


Route::resource('permissions', 'PermissionController');

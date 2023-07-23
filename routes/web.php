<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\FrontendContrller;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\ProtfolioController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\InboxController;
use App\Http\Controllers\BlogController;

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

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();
//frontend part
Route::get('/',[FrontendContrller::class,'index'])->name('index');


//admin-panel start
Route::group(['middleware'=>'auth'],function (){

    Route::get('/dashboard', [HomeController::class, 'index'])->name('home');
//user
    Route::get('/user', [HomeController::class, 'user'])->name('user');
    Route::post('/user-delete', [HomeController::class, 'userDelete'])->name('user.delete');
    Route::get('/profile', [HomeController::class, 'profile'])->name('profile');
    Route::post('/profile-update', [HomeController::class, 'profileUpdate'])->name('profile.update');
    Route::post('/password-update', [HomeController::class, 'passwordUpdate'])->name('password.update');

    //banner-section
    Route::resource('banners',BannerController::class);
    Route::get('banners/status/{id}',[BannerController::class,'status'])->name('banners.status');

    //about-section
    Route::get('/about', [AboutController::class, 'index'])->name('about');
    Route::post('/update-about', [AboutController::class, 'updateAbout'])->name('update.about');
    
    //icon
    Route::get('/social-icon', [AboutController::class, 'socialIcon'])->name('social.icon');
    Route::get('/status-icon/{id}', [AboutController::class, 'statusIcon'])->name('status.icon');
    Route::post('/store-icon', [AboutController::class, 'storeIcon'])->name('store.icon');
    Route::post('/delete-icon', [AboutController::class, 'deleteIcon'])->name('delete.icon');
    

    //service-section
    Route::resource('services',ServiceController::class);
    Route::get('/services/status/{id}',[ServiceController::class,'status'])->name('services.status');
    //skill
    Route::resource('skills',SkillController::class);
    Route::get('/skills/status/{id}',[SkillController::class,'status'])->name('skills.status');
    //protfolio-section
    Route::resource('protfolio',ProtfolioController::class);
    Route::get('/protfolio/status/{id}',[ProtfolioController::class,'status'])->name('status');
    //blog
    Route::resource('blogs',BlogController::class);
    Route::get('/blogs/status/{id}',[BlogController::class,'status'])->name('status');
    //contact
    Route::get('/edit-contact',[ContactController::class,'editContact'])->name('edit.contact');
    Route::post('/update-contact',[ContactController::class,'updateContact'])->name('update.contact');

    //Inbox
    Route::post('/store-message',[InboxController::class,'storeMessage'])->name('store.message');
    Route::get('/manage-message',[InboxController::class,'manageMessage'])->name('manage.message');
    Route::get('/view-message/{id}',[InboxController::class,'viewMessage'])->name('view.message');
    Route::post('/delete-message',[InboxController::class,'deleteMessage'])->name('delete.message');
});








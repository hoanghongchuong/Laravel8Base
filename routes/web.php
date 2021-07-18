<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Artisan;
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
Route::group(['prefix' => 'filemanager', 'middleware' => ['web']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');
    Route::prefix('categories')->group(function () {
        Route::get('/', [CategoryController::class, 'index'])->name('categories.index');
        Route::get('/create', [CategoryController::class, 'create'])->name('categories.create');
        Route::post('/store', [CategoryController::class, 'store'])->name('categories.store');
        Route::get('edit/{id}', [CategoryController::class, 'edit'])->name('categories.edit');
        Route::post('/update/{id}', [CategoryController::class, 'update'])->name('categories.update');
        Route::get('delete/{id}', [CategoryController::class, 'delete'])->name('categories.delete');
    });

    Route::prefix('post')->group(function () {
        Route::get('/', [PostController::class, 'index'])->name('post.index');
        Route::get('/create', [PostController::class, 'create'])->name('post.create');
        Route::post('/store', [PostController::class, 'store'])->name('post.store');
        Route::get('edit/{id}', [PostController::class, 'edit'])->name('post.edit');
        Route::post('/update/{id}', [PostController::class, 'update'])->name('post.update');
        Route::get('delete/{id}', [PostController::class, 'delete'])->name('post.delete');
    });


    Route::prefix('menu')->group(function() {
        Route::get('/', [MenuController::class, 'index'])->name('menu.index');
        Route::get('/create', [MenuController::class, 'create'])->name('menu.create');
        Route::post('/store', [MenuController::class, 'store'])->name('menu.store');
        Route::get('/edit/{id}', [MenuController::class, 'edit'])->name('menu.edit');
        Route::post('/update/{id}', [MenuController::class, 'update'])->name('menu.update');
        Route::get('/delete/{id}', [MenuController::class, 'delete'])->name('menu.delete');
    });

    Route::prefix('users')->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('user.index');
        Route::get('/create', [UserController::class, 'create'])->name('user.create');
        Route::post('/store', [UserController::class, 'store'])->name('user.store');
        Route::get('/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
        Route::post('/edit/{id}', [UserController::class, 'update'])->name('users.update');
        Route::get('/delete/{id}', [UserController::class, 'delete'])->name('users.delete');
        Route::get('change/password', [UserController::class,'changePass'])->name('admin.change.pass');
        Route::post('change/password', [UserController::class,'changePassword'])->name('change.pass');
    });

    Route::prefix('setting')->group(function() {
       Route::get('/', [SettingController::class, 'index'])->name('setting.index');
        Route::post('/store', [SettingController::class, 'store'])->name('setting.store');
    });
    Route::prefix('contact')->group(function() {
        Route::get('/', [\App\Http\Controllers\Admin\ContactController::class, 'index'])->name('admin.contact.index');
    });

    Route::get('logout', [AuthController::class, 'logout'])->name('admin.logout');
});
Route::prefix('admin')->group(function () {
    Route::get('login', [AuthController::class, 'getLogin'])->name('admin.get.login');
    Route::post('login', [AuthController::class, 'login'])->name('admin.login');
});


// route client

Route::group([/**'prefix' => Session::get('website_language') ,*/ 'middleware' => 'locale'], function() {
    Route::get('change-language/{language}', [HomeController::class, 'changeLanguage'])
        ->name('user.change-language');
    Route::get('/', [HomeController::class, 'index']);
    Route::get('/dich-vu', [ServiceController::class, 'index']);
    Route::get('/dich-vu/{id}.html', [ServiceController::class, 'detail']);
    Route::get('/gioi-thieu', [AboutController::class, 'index']);
    Route::get('/gioi-thieu/{id}.html', [AboutController::class, 'detail']);
    Route::get('/trang-thiet-bi', [HomeController::class, 'equipment']);
    Route::get('/trang-thiet-bi/{id}.html', [HomeController::class, 'equipmentDetail']);
    Route::get('/bai-viet/{id}.html', [HomeController::class, 'postDetail']);
    Route::get('/cong-nghe', [HomeController::class, 'technology']);

    Route::get('/lien-he', [\App\Http\Controllers\ContactController::class, 'index']);
    Route::post('send-contact', [\App\Http\Controllers\ContactController::class, 'sendContact'])->name('send.contact');
});

Route::get('storage/link', function () {

//    Artisan::call('storage:link');
    Artisan::call('config:clear');
    Artisan::call('cache:clear');

});


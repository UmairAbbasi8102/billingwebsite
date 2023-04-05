<?php

use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\BlogController as AdminBlogController;
use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\TeamsController;
use App\Http\Controllers\home\AboutusController;
use App\Http\Controllers\home\BlogController;
use App\Http\Controllers\home\HomeController;
use App\Http\Controllers\home\ServicesController;
use App\Http\Middleware\AdminAuthenticated;
use Illuminate\Support\Facades\Route;

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


Route::get('/', [HomeController::class, 'index'])->name('home');
// blog
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog_single/{id}', [BlogController::class, 'single'])->name('blog_single');

// about us
Route::get('/about', [AboutusController::class, 'index'])->name('about_us');

// submit contact form
Route::post('/submit-form', [HomeController::class, 'submit'])->name('submit-form');



Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
    Route::get('', [AdminAuthController::class, 'getLogin'])->name('adminLogin');
    Route::post('/login', [AdminAuthController::class, 'postLogin'])->name('adminLoginPost');

    Route::group(['middleware' => 'adminauth'], function () {
        Route::get('/dashboard', [AdminHomeController::class, 'index'])->name('admin.dashboard');
        Route::get('/team_member', [TeamsController::class, 'index'])->name('admin.members');
        Route::get('/add_member', [TeamsController::class, 'addmember'])->name('admin.addmembers');
        Route::post('/add_member', [TeamsController::class, 'store'])->name('admin.storemembers');
        Route::delete('/member/delete', [TeamsController::class, 'confirmDelete'])->name('users.confirm-delete');
        Route::get('/posts', [AdminBlogController::class, 'posts'])->name('admin.posts');
        Route::get('/addposts', [AdminBlogController::class, 'addposts'])->name('admin.addposts');
        Route::post('/addposts', [AdminBlogController::class, 'store'])->name('admin.addpost');
        Route::get('/messages', [MessageController::class, 'index'])->name('admin.messages');
        Route::get('/logout', [AdminAuthController::class, 'adminLogout'])->name('admin.logout');
    });
});

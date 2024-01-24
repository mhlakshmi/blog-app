<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FunctionController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ConsultationController;

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

Route::get('/', [FunctionController::class, 'index']);
Route::get('/index', [FunctionController::class, 'index']);
Route::get('/blog-details/{id}', [FunctionController::class, 'blog_details'])->name('blog-details');
//................................. A D M I N............................................

Route::get('admin', [AdminController::class, 'index']);
Route::get('logout',[AdminController::class,'logout']);
Route::post('loginpost', [AdminController::class, 'loginpost']);
Route::get('sidebar',[AdminController::class,'sidebar'])->name('sidebar');
Route::get('register',[AdminController::class,'register']);
Route::post('user_register', [AdminController::class, 'user_register']);
// B L O G S
Route::get('admin/blog',[AdminController::class,'admin_blog'])->name('admin_blog');
Route::get('/admin_add_blogs',[AdminController::class,'add_blog']);
Route::get('/admin/edit_blogs/{id}',[AdminController::class,'edit_blogs'])->name('edit_blogs');

Route::post('insert_blog',[AdminController::class,'insert_blog'])->name('update_blogs');
Route::post('/update_blogs/{id}',[AdminController::class,'update_blogs'])->name('update_blogs');
Route::get('/delet_blogs/{id}', [AdminController::class, 'delet_blogs'])->name('delet_blogs');

Route::get('/blogs/{category}', [AdminController::class, 'showBlogs']);
<?php

use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

Route::get('/',[PagesController::class, 'index'])->name('home');

Route::post('/login',[LoginController::class, 'login'])->name('login');
Route::post('/register',[LoginController::class, 'register'])->name('register');
Route::get('/logout',[LoginController::class, 'logout'])->name('logout');


Route::get('/gioi-thieu',[PagesController::class, 'introduce'])->name('introduce');
Route::get('/triet-ly-dau-tu',[PagesController::class, 'investment_philosophy'])->name('investment_philosophy');
Route::get('/giai-dap-thac-mac',[PagesController::class, 'faqs'])->name('faqs');
Route::get('/do-song',[PagesController::class, 'detect_waves'])->name('detect_waves');
Route::get('/danh-muc-do-song',[PagesController::class, 'category_detect_waves'])->name('category_detect_waves');
Route::get('/tin-hieu',[PagesController::class, 'signal'])->name('signal');
Route::get('/tong-quan-song-nganh',[PagesController::class, 'sector_rotation'])->name('sector_rotation');
Route::get('/chi-tiet-song-nganh/{id}',[PagesController::class, 'sector_rotation_detail'])->name('sector_rotation_detail');
Route::get('/news',[PagesController::class, 'news'])->name('news');
Route::get('/news-detail/{slug}',[PagesController::class, 'newsDetail'])->name('news.detail');

include 'admin.php';


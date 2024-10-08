<?php
Route::prefix('admin')->middleware('is_admin')->group(function () {
    Route::get('/', function(){
        return 'admin';
    })->name('dashboard.admin');
});

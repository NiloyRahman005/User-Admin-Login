<?php

use App\Http\Controllers\FontendController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('app');
// });
Route::get('/',[FontendController::class,'index'])->name('index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



// ADMIN ROUTES
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/login', [\App\Http\Controllers\Admin\Auth\LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [\App\Http\Controllers\Admin\Auth\LoginController::class, 'login']);

    Route::middleware('auth:admin')->group(function () {
        Route::get('/dashboard', [\App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
        Route::post('/logout', [\App\Http\Controllers\Admin\Auth\LoginController::class, 'logout'])->name('logout');
        Route::get('/top/slider', [\App\Http\Controllers\Admin\Backend_controller::class,
        'admin_top_slider'])->name('top_slider');
        Route::post('/top/slider/insert', [\App\Http\Controllers\Admin\Backend_controller::class,
          'admin_top_slider_insert'])->name('top_slider_insert');

        Route::get('/top/slider/delete/{id}', [\App\Http\Controllers\Admin\Backend_controller::class,
           'admin_top_slider_delete'])->name('top_slider_delete');
        Route::get('/featured', [\App\Http\Controllers\Admin\Backend_controller::class,
        'featured'])->name('featured');
         Route::post('/featured/youtube/post', [\App\Http\Controllers\Admin\Backend_controller::class,
         'featured_youtube'])->name('featured_youtube');
          Route::get('/featured/youtube/del/{id}', [\App\Http\Controllers\Admin\Backend_controller::class,
          'you_tube_dlt'])->name('you_tube_dlt');
          Route::post('/featured_content_add', [\App\Http\Controllers\Admin\Backend_controller::class,
          'featured_content_add'])->name('featured_content_add');

        Route::get('/cant_miss_event', [\App\Http\Controllers\Admin\Backend_controller::class,
        'cant_miss_event'])->name('cant_miss_event');

          Route::post('/cant_miss_event_img', [\App\Http\Controllers\Admin\Backend_controller::class,
          'cant_miss_image'])->name('cant_miss_image');

         Route::get('/event', [\App\Http\Controllers\Admin\Backend_controller::class,
         'event'])->name('event');

          Route::post('/event_insert', [\App\Http\Controllers\Admin\Backend_controller::class,
          'event_insert'])->name('event_insert');
 Route::get('/event_delete/{id}', [\App\Http\Controllers\Admin\Backend_controller::class,
 'event_delete'])->name('event_delete');
         Route::get('/event_details/{id}', [\App\Http\Controllers\Admin\Backend_controller::class,
         'event_details'])->name('event_details');
 Route::post('/event_update/{id}', [\App\Http\Controllers\Admin\Backend_controller::class,
 'event_update'])->name('event_update');
        


        
    });
});

require __DIR__.'/auth.php';

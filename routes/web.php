<?php


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\LinkController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FrontController;



Route::get('/', [FrontController::class, 'index'])->name('home_page');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/addlink', [LinkController::class, 'linkPage'])->name('addlink.index');
    Route::post('/addlink', [LinkController::class, 'linkInsert'])->name('addlink.linkinsert');
    Route::get('/deletelink/{id}', [LinkController::class, 'linkDelete'])->name('linkDelete');
});
Route::get('/open/all', [LinkController::class, 'allLinks'])->name('all.links');
Route::get('/open/referrer', [LinkController::class, 'allReferrer'])->name('all.referrer');

// This route will be matched only when no other route is matched before it.
Route::get('/{segment}', [ImageController::class, 'showImage'])->name('image.show');



//require __DIR__.'/auth.php';


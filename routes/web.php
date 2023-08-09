<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AddpostController;
use App\Http\Controllers\ProfileController;

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

// Route Homepage
Route::get('/', [HomeController::class, 'index'])->name('homepage');

// Route Profile
Route::get('/profile', [ProfileController::class, 'index'])->middleware(['auth','verified'])->name('profile');


// Route all article
Route::get('/allArticles', [AddpostController::class, 'index'])->name('allArticle.index');

// Show the Updated form
Route::get('/article/edit/{id}', [AddpostController::class, 'edit'])->name('article.edit');

// Update a existent article
Route::put('/article/edit/{id}', [AddpostController::class, 'update'])->name('article.update');

// Delete a existent article
Route::delete('/article/delete/{id}', [AddpostController::class, 'destroy'])->name('articles.delete');

// Route Add New Post
Route::get('/addpost', [AddpostController::class, 'create'])->name('addnewpost');
Route::post('/addpost', [AddpostController::class, 'store'])->name('addnewpost.store');

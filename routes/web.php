<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\ProfileController;

Route::get('/', [PageController::class, 'home']);

Route::get('/profil', [PageController::class, 'profil']);

Route::get('/produk', [PageController::class, 'produk']);

Route::get('/kontak', [PageController::class, 'kontak']);

Route::get('/berita/{slug}', function ($slug) {
    $article = \App\Models\Article::with(['category', 'tags', 'user.profile'])
        ->where('slug', $slug)
        ->firstOrFail();

    return view('berita.show', compact('article'));
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function () {

    Route::get('/admin/dashboard', function () {
        $totalUsers = \App\Models\User::count();
        $totalCategories = \App\Models\Category::count();
        $totalArticles = \App\Models\Article::count();
$totalTags = \App\Models\Tag::count();

        return view('admin.dashboard', compact(
            'totalUsers',
            'totalCategories',
            'totalArticles',
 'totalTags'
        ));
    });

    Route::resource('/admin/users', UserController::class);

    Route::resource('/admin/categories', CategoryController::class);

    Route::resource('/admin/articles', ArticleController::class);

Route::resource('/admin/tags', TagController::class);

Route::get('/admin/profile', [ProfileController::class, 'edit'])->name('profile.edit');

Route::post('/admin/profile', [ProfileController::class, 'update'])->name('profile.update');

});


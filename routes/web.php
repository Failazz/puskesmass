<?php

use App\Models\News;
use App\Models\Article;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Models\Information;

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

Route::get('/', [HomeController::class, 'index']);
Route::get('/manyaran/news/{post:slug}', [HomeController::class, 'showNews']);
Route::get('/manyaran/information/{post_info:slug}', [HomeController::class, 'showInformation']);
Route::get('/manyaran/article/{post_article:slug}', [HomeController::class, 'showArticle']);   

Route::get('manyaran/informasi', function () {
    return view('information', ['information' => Information::orderBy('created_at', 'desc')->paginate(8)]);
});
Route::get('manyaran/news', function () {
    return view('news', ['news' => News::orderBy('created_at', 'desc')->paginate(8)]);
});
Route::get('manyaran/article', function () {
    return view('article', ['article' => Article::orderBy('created_at', 'desc')->paginate(8)]);
});
Route::get('/article', function () {
    return view('article',['article' => Article::paginate(4)
]);
});
Route::get('/article/{post:slug}', function (Article $article) {
    return view('artikel', ['article' => $article]);
});
Route::get('manyaran/motto', function () {
    return view('motto');
});
Route::get('manyaran/peta', function () {
    return view('peta');
});
Route::get('manyaran/tugas', function () {
    return view('tugas');
});
Route::get('manyaran/ukp', function () {
    return view('ukp');
});
Route::get('manyaran/ukm', function () {
    return view('ukm');
});
Route::get('manyaran/inovasi', function () {
    return view('inovasi');
});
Route::get('manyaran/tarif-pelayanan', function () {
    return view('tarif');
});
Route::get('manyaran/pendaftaran', function () {
    return view('pendaftaran');
});
Route::get('manyaran/dokumentasi-kegiatan', function () {
    return view('dokumentasi-kegiatan');
});
Route::get('manyaran/laporan-kegiatan', function () {
    return view('laporan-kegiatan');
});
Route::get('manyaran/wbs', function () {
    return view('wbs');
});
Route::get('manyaran/ppid', function () {
    return view('ppid');
});
Route::get('manyaran/contact', function () {
    return view('contact');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

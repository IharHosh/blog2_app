<?php


use App\Http\Controllers\BlogController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TestController;
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
Route::view('/', 'home.index')->name('home.index');

//Route::get('/', function () {
//    return view('welcome');
//});
Route::redirect('/home', '/')->name('home.redirect');

//Route::get('/test', TestController::class)->name('test')->middleware('token:secret');
Route::get('/test', TestController::class)->name('test');

Route::middleware('guest')->group(function (){
    Route::get('/register', [RegisterController::class, 'index'])->name('register.index');
    Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

    Route::get('/login', [LoginController::class, 'index'])->name('login.index');
    Route::post('/login', [LoginController::class, 'store'])->name('login.store');
});


Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{post}', [BlogController::class, 'show'])->name('blog.show');
Route::post('/blog/{post}/like', [BlogController::class, 'like'])->name('blog.like');



//Route::resource('/posts/{post}/comments', CommentController::class)->only('index', 'show');
// создает все маршруты для всех методов (вышесозданных)
// если добавить ->only в скобках параметры которые будут задействованы

//Route::resource('/posts',PostController::class)->only('index', 'show');
// создает только указанные нами маршруты




//В самом низу
Route::fallback(function () {
    return 'Fallback';
});

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

    Route::middleware('guest')->group(function () {
        Route::get('/register', [RegisterController::class, 'index'])->name('register.index');
        Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

        Route::get('/login', [LoginController::class, 'index'])->name('login.index');
        Route::post('/login', [LoginController::class, 'store'])->name('login.store');
    });


    Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
    Route::get('/blog/{post}', [BlogController::class, 'show'])->name('blog.show');
    Route::post('/blog/{post}/like', [BlogController::class, 'like'])->name('blog.like');


// выведем все tasks ч-з табличку projects
Route::get('/tasks', function () {
    $users = \App\Models\User1::all();
    foreach ($users as $user) {
        echo 'User name: ' . $user['name'] . '<br>';
        echo '<b>Tasks:</b><br>';
        foreach ($user->tasks as $task) {
            echo $task['name'] . '<br>';
        }
        echo '_________________________<br>';
//        dd($user1s->toArray());
    }
});


//// выведем все кинотеатры и фильмы пренадл. им
//Route::get('/films', function () {
//    $movies = \App\Models\Movie::all();
//    foreach ($movies as $movie) {
//        echo 'Movie name: ' . $movie['name'] . '<br>';
//        echo '<b>Cinema:</b><br>';
//        foreach ($movie->cinemas as $cinema) {
//            echo $cinema['name'] . '<br>';
//        }
//        echo '_________________________<br>';
//    }
//});




    //    // выведем все кинотеатры и фильмы пренадл. им
//    Route::get('/cinemas', function () {
//        $cinemas = \App\Models\Cinema::all();
//        foreach ($cinemas as $cinema) {
//            echo 'Cinema: ' . $cinema['name'] . '<br>';
//            echo '<b>Movies:</b><br>';
//            foreach ($cinema->movies as $movie) {
//                echo $movie['name'] . '<br>';
//            }
//            echo '_________________________<br>';
//        }
//    });











        // выводит книги и их авторов
//        Route::get('/books', function () {
//        $books = \App\Models\Book::all();
//        foreach ($books as $book){
//            echo 'Book title: '.$book['title'].'<br>';
//            echo '<b>Author:</b>'.$book->author['name'].'<br>';
//
//            echo '_________________________<br>';
//        }
//    });


    // выводит авторов и все их книги
//    Route::get('/authors', function () {
//        $authors = \App\Models\Author::all();
//        foreach ($authors as $author){
//            echo 'Author name: '.$author['name'].'<br>';
//            echo '<b>Author\'s books:</b><br>';
//            foreach ($author->books as $book){
//                echo $book['title'].'<br>';
//            }
//            echo '_________________________<br>';
//        }
//
//    });


//    Route::get('/films', function () {
////        $directors = \App\Models\Director::all();
//        $films = \App\Models\Film::all();
//
////        foreach ($directors as $director) {
////            echo 'Director name: '.$director['name'].'<br>';
////            echo 'Film: '.$director->film['name'].'<br>';
////            echo '_________________________<br>';
////        }
//        foreach ($films as $film) {
//            echo 'Film name: '.$film['name'].'<br>';
//            echo 'Director: '.$film->director['name'].'<br>';
//            echo '_________________________<br>';
//        }
//    });
//    Route::resource('/posts/{post}/comments', CommentController::class)->only('index', 'show');
// создает все маршруты для всех методов (вышесозданных)
// если добавить ->only в скобках параметры которые будут задействованы

//Route::resource('/posts',PostController::class)->only('index', 'show');
// создает только указанные нами маршруты


//В самом низу
    Route::fallback(function () {
        return 'Fallback';
    });

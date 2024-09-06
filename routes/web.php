<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Foundation\Console\AboutCommand;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Praktikum 1
// Route::get('/hello', function(){
//     return 'Hello World';
// });

// Route::get('/world', function(){
//     return 'World';
// });

// Route::get('/ucapan', function(){
//     return 'Selamat Datang';
// });

// Route::get('/about', function(){
//     return '2241760067 Moch. Nadhif Alkautsar';
// });

// Route::get('/user/{Nadhif}', function($Nadhif){
//     return 'Nama saya '. $Nadhif;
// });

// Route::get('/posts/{post}/comments/{comment}', function
// ($postId, $commentId) {
//  return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
// });

// Route::get('/articles/{id}', function($id){
//     return 'Halaman artikel dengan ID '.$id;
// });

// Route::get('/user/{name?}', function($name=null){
//     return 'Nama saya '.$name;
// });

// Route::get('/user/{name?}', function($name='John'){
//     return 'Nama saya '.$name;
// });

// // route name
// Route::get('/user/profile', function(){
//     //
// })->name('profile');

// Route::get(
//     'user/profile',
//     [UserProfileController::class, 'show']
// )->name('profile');


// route group
// Route::middleware(['first', 'second'])->group(function(){
//     Route::get('/', function(){
//         // uses first and second minddleware
//     });
// Route::get('/user/profile', function(){
//         // uses first and second middleware
//     });
// });
// Route::domain('{account}.example.com')->group(function(){
//     Route::get('/user/{id}', function($account, $id){
//         //
//     });
// });
// Route::middleware('auth')->group(function(){
//     Route::get('/user', [UserController::class, 'index']);
//     Route::get('/post', [PostController::class, 'index']);
//     Route::get('/event', [EventController::class, 'index']);
// });

// //redirect
// Route::redirect('/here', '/there');

// //view
// Route::view('/welcome', 'welcome');
// Route::view('/welcome', 'welcome', ['name' => 'Taylor']);

// Praktikum 2ss
// controller

// Route::get('/hello', [WelcomeController::class,'hello']);

// Page Controller
Route::get('/', [PageController::class,'index']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/articles/{id}', [PageController::class, 'articles']);

// Home, About, Article Controller
Route::get('/', [HomeController::class,'index']);
Route::get('/about', [AboutController::class, 'about']);
Route::get('/articles/{id}', [ArticleController::class, 'articles']);

// Resources 
Route::resource('photos', PhotoController::class);

Route::resource('photos', PhotoController::class)->only([
    'index', 'show'
]);
Route::resource('photos', PhotoController::class)->except([
    'create', 'store', 'update', 'destroy'
]);

// Praktikum 3
// Route::get('/greeting', function(){
//     return view('hello', ['name' => 'Nadhif']);
// });

// Route::get('/greeting', function(){
//     return view('blog.hello', ['name' => 'Nadhif']);
// });

Route::get('/greeting', [WelcomeController::class, 'greeting']);
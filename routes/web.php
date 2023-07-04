<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\CompanySafariController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DiscussionsController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SwotController;
use App\Http\Controllers\PostController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/posts/{post}',  function($post){
//    $posts = [
//        'my-first-post' => 'Hello, this is my first blog post!',
//        'my-second-post' => 'Now I am getting the hang of this blogging thing.'
//    ];
//
//    if (!array_key_exists($post, $posts)) {
//        abort(404, 'Sorry, that post was not found.');
//    }
//
//    return view('post', [
//        'post' => $posts[$post]
//    ]);
//});

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [WelcomeController::class, 'show']);
Route::get('/companysafari', [CompanySafariController::class, 'show']);
Route::get('/dashboard', [DashboardController::class, 'show']);
Route::get('/discussion', [DiscussionsController::class, 'show']);
Route::get('/experience', [ExperienceController::class, 'show']);
Route::resource('faqs', FaqController::class);
Route::resource('articles', ArticleController::class);
Route::get('/profile', [ProfileController::class, 'show']);
Route::get('/swot', [SwotController::class, 'show']);
Route::get('/posts/{post}', [PostController::class, 'show']);
Route::get('/500', fn() => abort(500));

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

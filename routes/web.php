<?php
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;
use Illuminate\Routing\Controller;
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

// Route::get('/', function () {
//     return view('auth.login');
// });

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::middleware(['auth'])->group(function () 
// {
//     Route::resource('posts',PostController::class);
//     Route::resource('categories',CategoryController::class);
// });

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function(){
    Route::resource('posts',PostController::class);
    Route::get('/categories',[CategoryController::class,'index'])->name('categories');
    Route::post('/add_category',[CategoryController::class,'store'])->name('addcategories');
    Route::get('/editcategory/{id}',[CategoryController::class,'edit'])->name('editcategory');
    Route::post('/update_category/{id}',[CategoryController::class,'update'])->name('updatecategory');
   Route::post('/delete_category/{id}',[CategoryController::class,'destroy'])->name('deletecategory');
    Route::get('/showposts',[TestController::class,'index']);

});


// Route::get('/showcat',[TestController::class,'showcat'])->middleware('auth');

 Route::get('/showcat',[TestController::class,'showcat']);


Route::get('/','App\Http\Controllers\FrontController\CategoryController@index');
Route::get('showdetails/{id}','App\Http\Controllers\FrontController\CategoryController@showdetails');
Route::get('showposts/{id}','App\Http\Controllers\FrontController\CategoryController@showposts');
Route::get('showallpost','App\Http\Controllers\FrontController\CategoryController@showallpost');

require __DIR__.'/frontend.php';
require __DIR__.'/auth.php';

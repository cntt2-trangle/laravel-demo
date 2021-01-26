<?php

use App\Http\Controllers\Backend\CustomerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\HomeController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\Backend\MailController;


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

// Route::get('/', [HomeController::class, 'index']);
Route::get('/', function() {
    return view('welcome');
});


// Route::resource('user', 'App\Http\Controllers\Backend\UserController');
// Route::resource('product', 'App\Http\Controllers\Backend\ProductController');
Route::resource('customer', CustomerController::class)->only('index');
Route::resource('customer', 'App\Http\Controllers\Backend\CustomerController')->except('index', 'create');

Route::get('user-manage', function() {
    return "User Screen";
}) -> name('user');

Route::get('product', function() {
    return "Product Screen";
}) ;

Route::get('service', function() {
    return "Service Screen";
}) ;

Route::get('model', [UserController::class, 'create']);

Route::get('insert', [ProductController::class, 'insert']);

Route::get('insert-category', [CategoryController::class, 'insert']);

// Route::get('relationship', function() {
//     $users = App\Models\Users::all();
//     foreach($users as $val) {
//         echo $val->email;
//         echo "<br>";
//         if ($val->info != null) {
//             echo $val->info->address;
//         }
//         echo "<hr>";
//     }
// });

Route::get('relationship', function() {
    $users = App\Models\Users::all();
    foreach($users as $val) {
        echo $val->email;
        echo "<br>";
        if ($val->info != null) {
            echo $val->info->address;
        }
        echo "<hr>";
    }
});

Route::get('MyRequest', [CategoryController::class, 'GetURL']);

// gui nhan du lieu voi Request 
Route::get('getForm', function() {
    return view('postForm');
});

Route::post('postForm', [UserController::class, 'postForm'])->name('postForm');

//cookie
Route::get('setCookie', [UserController::class, 'setCookie']);
Route::get('getCookie', [UserController::class, 'getCookie']);

// Upload file
// Route::post('upload', [UserController::class], 'uploadImage')->name('be_trang');

// Route::post('upload', 'App\Http\Controllers\Backend\UserController@uploadImage')->name('postFile');
Route::post('upload', [UserController::class, 'uploadImage'])->name('postFile');
Route::get('uploadFile', function() {
    return view('postFile');
});

Route::get('login', function() {
    return view('login');
})->name('login');

Route::get('check', function() {
    return view('login-success');
});

Route::post('login-successed', [AuthController::class, 'login'])->name('login-success');

Route::post('logout', [AuthController::class, 'logout']);

Route::get('send-mail', [MailController::class, 'sendMail']);

// Route::get('model', [UserController::class, 'create']);

// Route::get('news/{id}/category/{categoryID}', function($id, $categoryID) {
//     return "Guide ${id}. Category ID: ${categoryID}";
// }) ;

// Route::prefix('backend')->namespace('App\Http\Controllers\Backend')->group(function () {
//     Route::get('product', 'ProductController@index')->name('backend.product');
//     Route::get('product/create', 'ProductController@create')->name('backend.product.create');
    
//     Route::get('user', 'UserController@index')->name('backend.user');
//     Route::get('user/create', 'UserController@create')->name('backend.user.create');
//     Route::post('user', 'UserController@store')->name('backend.user.store');
//     Route::put('user/update', 'UserController@update')->name('backend.user.update');
    
//     Route::get('category', 'CategoryController@index')->name('backend.category');
//     Route::get('category/create', 'CategoryController@create')->name('backend.category.create');
// });



// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

<?php

use App\Http\Controllers\Api\CountryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Api\BusinessTypeController;
use App\Http\Controllers\Api\ExpertiseController;
use App\Http\Controllers\Api\EventController;
use App\Http\Controllers\Api\VoucherController;
use App\Http\Controllers\Api\WorkplaceController;
use App\Http\Controllers\Api\ExploreController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::group([
    'prefix' => 'auth'
], function () {
    Route::post('login', [AuthController::class, 'login']);
    Route::post('signup', [AuthController::class, 'signup']);
  
    Route::group([
      'middleware' => 'auth:api'
    ], function() {
        Route::delete('logout', [AuthController::class, 'logout']);
        Route::get('me', [AuthController::class, 'user']);
    });
});

// Route::apiResource('post', 'PostController');

// Route::apiResource('demo', 'App\Http\Controllers\Api\UserController');
Route::get('/', function () {
    return view('welcome');
});


Route::resource('users', UserController::class);
Route::resource('countries', CountryController::class);

/* Page Home */
Route::resource('business-types', BusinessTypeController::class);
Route::resource('expertises', ExpertiseController::class);
Route::resource('explores', ExploreController::class);

/* Page Event */
Route::resource('events', EventController::class);

/* Page Voucher */
Route::resource('vouchers', VoucherController::class);

/* Page Workplace */
Route::resource('workplaces', WorkplaceController::class);





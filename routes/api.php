<?php


use App\Http\Controllers\Api\BrokersController;
use App\Http\Controllers\Api\PropertiesController;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Public Route
Route::post('/login',[AuthController::class,'login']);
Route::post('/register',[AuthController::class,'register']);
Route::get('/brokers',[BrokersController::class,'index']);
Route::get('/brokers/{broker}',[BrokersController::class,'show']);

Route::apiResource("/properties",PropertiesController::class);

//Protected Route
Route::group( ['middleware' => ['auth:sanctum']],function(){
    Route::apiResource("/brokers",BrokersController::class)->only(['store','update','destroy']);
    Route::post('/logout',[AuthController::class,'logout']);
});

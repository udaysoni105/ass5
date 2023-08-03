<?php
namespace App\Http\Controllers;

use App\CustomSolution\DateClass;
use App\Http\Controllers\TestController;
use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;
use Carbon\Carbon;
use App\Repositories\UserDatabaseRepository;
use App\Http\Controllers\MyController;
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

Route::get('/', function () {
    return view('welcome');
});

//service provider 
Route::get('home', [HomeController::class, 'index']);

//Filestorage
Route::get('/upload', function () {
    return view('upload');
});

Route::post('upload', [ContactController::class,'upload']);

//moment.js using controller
Route::get('/all', [DCController::class, 'index']);

//facade
Route::get('/facade-test', function () {
    $getDate = DateClass::dateFormatYMD('10/21/2022');
    return $getDate;
});

//helper
// Route::get('/test',[CustomerController::class,'index']);



Route::get('/my-route', [MyController::class, 'myMethod']);


Route::get('/format', function () {
    $date = '2023-06-03';
    $formattedDate = formatDate($date, 'd-M-Y');

    return $formattedDate;
});

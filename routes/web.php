<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\LeadController;
use App\Http\Controllers\RegisController;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get("/home", function() {
    return view("home");
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/leader', function() {
    return view('leader');
});

Route::get('/register', [RegisController::class,'register']);

Route::post('/post-create-account',[RegisController::class,'createAccount']);

// Route::get('/register', function () {
//     return view('register');
// });


Route::get('/leader-informations', [RegisController::class,'redirectToLeaderPage']);

Route::post('/post-information',[RegisController::class,'createInformations']);

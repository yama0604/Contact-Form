<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminController;

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
//     return view('welcome');
// });

Route::get('/', [ContactController::class, 'contactForm']);
Route::post('/confirm', [ContactController::class, 'confirm']);
Route::post('/thanks', [ContactController::class, 'thanks']);
Route::get('/thanks', function () {
    return view('contact.thanks'); // thanks.blade.php のビュー
});
Route::get('/login', [AdminController::class, 'login'])->name('login');





// 不要↓
// Route::get('/', [ContactFormController::class, 'contactForm']);
// Route::get('/confirm', [ContactFormController::class, 'contactConfirm']);
//Route::post('/register', [RegisteredUserController::class, 'store']);
//Route::post('/create', [AdminController::class, 'create']);
//Route::post('/loginFnc', [AdminController::class, 'loginFnc']);
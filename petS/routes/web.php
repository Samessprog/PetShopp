<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use PhpParser\Node\Stmt\Else_;



if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (isset($_SESSION['Role']) && isset($_SESSION['Login'])) {
    $this->role = $_SESSION['Role'];
    $this->login = $_SESSION['Login'];
    $this->ID = $_SESSION['ID'];
    
   

}else {
    $this->login='My account';
    $this->price = '';
    
}

//SUS
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
    return view('main',['login' => $this->login]);
});

Route::get('/register', function () {
    return view('reg');
});

Route::get('/product', function () {
    return view('productse',['price'=> $this->price]);
});

Route::get('/userMenu', function (){
    return view('userMenu',['user'=> $this->user]);

});


Route::get('/logOut', [LoginController::class,'logOut']);
Route::get('/login', [LoginController::class,'login']);

Route::get('/toRegister', [RegisterController::class,'register']);

Route::get('/product', [ProductController::class,'product']);
Route::get('/', [ProductController::class,'productMain']);

Route::get('/userMenu', [UserController::class,'showUser']);
Route::get('/checkUserMenu',[UserController::class,'checkUserDate']);

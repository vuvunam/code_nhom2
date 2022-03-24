<?php
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EditingController;
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
Route::get('/trangchu', function () {
    return view('trangchu');
});
Route::get('/introduce', function () {
    return view('introduce');
});
Route::get('/dangnhap', function () {
    return view('dangnhap');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/nhom2', function () {
    return view('nhom2');
});
Route::get('/name', function () {
    return view('name');
});
Route::get('/seach', function () {
    return view('seach');
});
Route::get('/admin/register', function () {
    return view('admin/register');
})->name('register');
Route::get('admin/home', function () {
    return view('admin/home');
});
Route::get('/admin/password', function () {
    return view('admin/password');
});

Route::get('/admin/login', function () {
    return view('admin.login');
});

Route::post('/admin/login', [AdminController::class, 'loginPost'])->name('admin.loginPost');



Route::get('admin/layouts-without-navbar', function () {
    return view('admin/layouts-without-navbar');
});
Route::get('admin/layouts-without-menu', function () {
    return view('admin/layouts-without-menu');
});
Route::get('admin/layouts-container', function () {
    return view('admin/layouts-container');
});
Route::get('admin/layouts-fluid', function () {
    return view('admin/layouts-fluid');
});
Route::get('admin/layouts-blank', function () {
    return view('admin/layouts-blank');
});
Route::get('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');
Route::get('admin/error', function () {
    return view('admin/error');
});
Route::middleware(['admin'])->group(function(){
    Route::get('/admin/home', [AdminController::class, 'home'])->name('admin.home');
    //Route::get('/admin/editting{model}', [EditingController::class, 'create'])->name('listing.create');

});
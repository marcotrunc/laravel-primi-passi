<?php

use Illuminate\Support\Facades\Route;

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
    $data = [
        'menu' => [
            ['name' => 'login', 'link' => 'login'],
            ['name' => 'chi siamo', 'link' => 'chi_siamo'],
            ['name' => 'account', 'link' => 'account'],
        ],
    ];
    return view('home', $data);
})->name('home');

Route::get('/account', function () {
    return view('account');
})->name('account');

Route::get('/chi_siamo', function () {
    return view('chi_siamo');
})->name('chi_siamo');

Route::get('/login', function () {
    return view('login');
})->name('login');

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
    return view('welcome');
});

Route::get('toast', function () {

    toast()->success('Sweetalert configured', 'Successfully')
        ->position('top')
        ->showCloseButton();

    return view('welcome');
});

Route::get('alert', function () {

    alert()->success('Sweetalert configured', 'Successfully')
        ->position('center')
        ->showCloseButton();

    return view('welcome');
});

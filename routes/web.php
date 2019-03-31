<?php

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

Route::view('/','welcome');

Route::view('contact','contact');

Route::view('about','about');

Route::get('/customers',function (){
    $customers = [
        'Deepender',
        'Narender',
        'Indu'
    ];
    $package = [
        '100',
        '200'
    ];
    return view('internals.customers',[
        'customers' => $customers,
        'package' => $package
    ]);
});
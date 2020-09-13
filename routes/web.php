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
// 獲得用
Route::get('matching', function () {
    return view('logly.omiai');
});

// Omiai
Route::get('dl', function () {
    return view('logly.dl');
    // return redirect('https://t.afi-b.com/visit.php?guid=ON&a=R100461-H3470814&p=37183994');
});
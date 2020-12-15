<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/file', function () {
    return view('file');
});

Route::post('/login',[UserController::class,'index']);

Route::post('/placeorder',[UserController::class,'store']);


Route::get('/home',function(){
    
    if(!session()->has('data')){
        return redirect('/');
    }
    return view('home');
});

Route::get('/order', function () {
    if(!session()->has('data')){
        return redirect('/');
    }
    return view('order');
});
Route::get('report',[UserController::class,'piechart']);
Route::get('barchart',[UserController::class,'barchart']);

// Route::get('/report', function () {
//     if(!session()->has('data')){
//         return redirect('/');
//     }
//     return view('report');
// });

Route::get('logout',function(){
    session()->forget('data');
    return redirect('/');
});

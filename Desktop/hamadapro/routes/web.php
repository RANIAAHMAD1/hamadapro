<?php

use Illuminate\Support\Facades\Route;
use App\Mail\NotifyEmail;
use Illuminate\Support\Facades\Mail;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------

| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




Auth::routes(['verify'=>true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');
Route::get('/',function (){

    return 'Home';



} );
Route::get('/dashboard',function (){

    return 'dashboard';



} );
Route::get('/', function () {

    //return 'Home';
    $data = ['title' => 'programming', 'body' => 'php'];
   Mail::To('ron2.2@hotmail.com')->send(new NotifyEmail($data));


});
//Route::get('fillable', array(\App\Http\Controllers\CrudController::class,'getOffers'));
//Route::group(['prefix' => 'offers'], function () {

  //  Route::get('store', array(\App\Http\Controllers\CrudController::class,'store'));
  //  Route::get('create', array(\App\Http\Controllers\CrudController::class,'create'));

//});
Route::get('/',function (){

    return 'Home';



} );

Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']], function () {

    Route::group(['prefix' => 'offers'], function () {
        //   Route::get('store', 'CrudController@store');
        Route::get('create', array(\App\Http\Controllers\CrudController::class,'create'));
        Route::post('store', array(\App\Http\Controllers\CrudController::class,'store'))->name('offers.store');


    });
    });

Route::post('/foo', function () {
    echo 1;
    return;
});


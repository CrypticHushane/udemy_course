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

Route::get('/', 'ContactUsController@pages');
// Route::get('/contact-us', function(){ return view('mails.contactus');});
// Route::post('/contactus/ajax', 'ContactUsController@index');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::group([
    "middleware" => 'auth'],
    function(){
        Route::resource('admin/special', '@SpecialsController');
        Route::get('/contact-us', function(){ return view('mails.contactus');});
        Route::post('/contactus/ajax', 'ContactUsController@index');
    }
);
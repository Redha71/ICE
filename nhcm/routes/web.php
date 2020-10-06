<?php

use App\Mail\ContentMsg;
use App\Mail\contactMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Notification;
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

Route::get('/', 'medicalController@index')->name('home');
Route::get('/content', 'medicalController@content')->name('content');
Route::get('/aboutus', 'medicalController@aboutus')->name('aboutus');
Route::get('/contactus',['uses' =>'medicalController@contactus'] )->name('contactus');
Route::post('/contactus',['uses' =>'medicalController@store','as'=>'contactus.store'] );
//connect to data
Route::post('/store', 'PaymentController@store')->name('store');
Route::get('/excute','PaymentController@execute')->name('execute');
Route::get('/storeData','PaymentController@storeData')->name('storeData');
Route::get('/sendEmail',function (){
    Mail::to( session('email'))->send(new ContentMsg);
    return view('welcome')->with('successMsg','The information Stored and you will receive email with all information you need from send');
})->name('sendEmail');
//Route::get('/email', function(){
//return new contactMail();
//};


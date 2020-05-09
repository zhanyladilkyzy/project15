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

Route::get('/', 'MainController@index')->name('home');//приоткрытии открывает главную страницу

// Route::get('/', function () {
//     broadcast(new WebsocketDemoEvent('some data'));
//
//     return view('welcome');
// });

Route::get('/sms', 'SmsController@index');

Route::post('orders', 'OrdersController@sendSms');

Route::get('orders', 'OrdersController@index');//направляет с навбара в отдел заказов

Route::resource('orders', 'OrdersController');

Auth::routes();

Route::get('/home', 'MainController@index')->name('home');//перенаправляет на главную стр после авторизации

Route::get('/chats', 'ChatsController@index');

// Route::get('/messages', 'ChatsController@fetchMessages');

Route::post('sms', 'SmsController@sendSms');


Route::get('/change-password', 'ChangePasswordController@index')->name('password.change');//направляет на страницу password.change

Route::post('/change-password', 'ChangePasswordController@changepassword')->name('password.update');

Route::group(['as'=>'admin.','prefix'=>'admin', 'namespace'=>'Admin', 'midlleware'=>['auth', 'admin']],
    function(){
        Route::get('dashboard','DashboardController@index')->name('dashboard');
    }
);

Route::group(['as'=>'author.','prefix'=>'author', 'namespace'=>'Author', 'midlleware'=>['auth', 'author']],
    function(){
        Route::get('dashboard','DashboardController@index')->name('dashboard');
    }
);

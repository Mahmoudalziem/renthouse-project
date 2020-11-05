<?php

use Illuminate\Support\Facades\Auth;
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

/// home

Route::get('/','pagesController@home')->name('home');

/// About Us

Route::get('/about','pagesController@about')->name('about');

/// Contact Us

Route::get('/contact','pagesController@contact')->name('contact');


Route::post('contact','pagesController@contactForm')->name('submit Message Request');

//// Services

Route::get('/services', 'pagesController@services')->name('services');


Route::post('services/filter', 'pagesController@filter');

Route::get('house/{id}', 'pagesController@show');

/// middleWare Guest

Route::group(['middleware' => ['guest','authAdmin']], function () {

    Route::get('/login', 'pagesController@login')->name('login');

    Route::post('login', 'loginController@access');

    Route::get('/register', 'pagesController@register')->name('register');

    Route::post('/register', 'userController@store');

    /// verify Account

    Route::get('verify/{id}', 'userController@create');

    Route::get('/forget', 'pagesController@forget')->name('forget');

    Route::post('/forget', 'userController@forget');

    Route::get('reset/{id}', 'userController@reset');

    Route::post('reset', 'userController@updatePassword');
});

//// Profile

Route::post('profile/image', 'userController@updateImage');

Route::group(['middleware' => 'auth'],function(){

    Route::get('/profile', 'pagesController@profile')->name('profile');

    Route::post('profile/update','userController@update');

    Route::post('/services/access', 'pagesController@accessLocation');

    Route::post('profile/enroll', 'userController@enroll');

    Route::post('house/rate', 'userController@rate');

    Route::get('user/logout', function () {

        Auth::guard('web')->logout();

        return redirect('login');
    });
});



//// Admin

Route::group(['middleware'=>'auth:webAdmin'],function(){

    Route::get('/admin', 'pagesController@admin');

    Route::get('logout/admin',function(){

        Auth::guard('webAdmin')->logout();

        return redirect('login');
    });

    /// Admin Settings

    Route::get('admin/settings','adminController@settings');

    Route::post('admin/update', 'adminController@updateSettings');

    /// Admin Adding Subadmin

    Route::get('admin/addadmin', 'adminController@subAdmin');

    Route::post('admin/addadmin', 'adminController@addSubAdmin');

    /// House Create

    Route::get('admin/addhouse','housesController@create');

    Route::post('admin/deletehouse', 'housesController@destroy');

    /// House Store

    Route::post('admin/addhouse', 'housesController@store');

    Route::get('admin/updatehouse/{id}', 'housesController@edit');

    Route::post('admin/updatehouse', 'housesController@update');

    Route::post('admin/delete', 'housesController@deleteImage');

    /// Seller View

    Route::get('admin/viewseller','sellerController@index');

    Route::get('admin/addseller','sellerController@create');

    Route::post('admin/addseller', 'sellerController@store');

    Route::get('admin/updateseller/{id}', 'sellerController@edit');

    Route::post('admin/updateseller', 'sellerController@update');

    Route::post('admin/deleteseller', 'sellerController@destroy');
});


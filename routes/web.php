<?php


use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
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


Route::group(['prefix' => LaravelLocalization::setLocale(),
    'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]], function()
{

Route::get('/', function () {
    return view('alpha');
});
Route::post('order','OrderController@store');

Route::post('present_pdf','PDFController@store', function () {
    return view('present_pdf');
});                                                                      //PDF
Route::get('present_pdf','PDFController@index', function () {
    return view('present_pdf');
});

Route::get('sign', function () {
    return view('sign');
});

Route::get('order', function () {
    return view('order');
});

// ------------------------------[ Admin panil]-------------------------------

    Auth::routes(['verify'=>true]);
    Route::group(['middleware' => ['auth','admin']], function()
    {
        Route::get('/admin_home', 'UserController@index');
        Route::prefix('admin_home')-> group(function()
        {

            Route::get('show_users', 'ShowController@index');                        //Show
            Route::get('show_users/{User}/delete','UserController@destroy');
            Route::get('show_orders', 'OrderController@index');                       //Order
            Route::get('show_orders/{Order}/delete','OrderController@destroy');
            Route::post('/','PDFController@store');
            Route::get('upload_pdf','PDFController@create');                          // PDF
            Route::get('show_pdf', 'PDFController@indexPdfAdmin');
            Route::get('show_pdf/{PDF}/delete','PDFController@destroy');
            Route::get('profile', 'ProfileController@index');                        // Profile
            Route::post('profile', 'ProfileController@update')->name('admin_profile');
            Route::get('show_media','MediaController@indexPdfAdmin');
            Route::get('upload_media','MediaController@create');
            Route::post('show_media','MediaController@store');
            Route::get('show_media/{Media}/delete','MediaController@destroy');
        });
    });

//-----------------------------------------------------------------------------


// ------------------------------[ User ]--------------------------------------

    Auth::routes();
    Route::get('/home', 'MediaController@index')->name('home')->middleware('verified');
    Route::get('/home/profile', 'ProfileController@index');                              // Profile
    Route::post('/home/profile', 'ProfileController@update')->name('profile');

//-----------------------------------------------------------------------------

});


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


Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]], function()
{

Route::get('/', function () {
    return view('alpha');
});
Route::post('order','OrderController@store');

Route::post('present_pdf','PDFController@store', function () {
    return view('present_pdf');
});                                                              //PDFController
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
   // define('PAGINATION_COUNT',10);
    Auth::routes(['verify'=>true]);
    Route::group(['middleware' => ['auth','admin']], function()
    {
        Route::get('/admin_home', 'UserController@index');
        Route::prefix('admin_home')-> group(function()
        {

            Route::get('show_users', 'ShowController@index');           //ShowControlle
            Route::get('show_users/{User}/delete','UserController@destroy');
            Route::get('show_orders', 'OrderController@index');         //OrderController
            Route::get('show_orders/{Order}/delete','OrderController@destroy');
            Route::post('/','PDFController@store');
            Route::get('upload_pdf','PDFController@create');            // PDFController
            Route::get('show_pdf', 'PDFController@indexPdfAdmin');
            Route::get('show_pdf/{PDF}/delete','PDFController@destroy');
            Route::get('profile', 'ProfileController@index');           // ProfileController
            Route::post('profile', 'ProfileController@update')->name('admin_profile');
            Route::get('show_media','MediaController@indexPdfAdmin');
            Route::get('upload_media','MediaController@create');
            Route::post('show_media','MediaController@store');
            Route::get('show_media/{Media}/delete','MediaController@destroy');

// languages
        /**
            Route::get('index', 'LanguageController@index')->name('admin.languages');
            Route::get('creat', 'LanguageController@creat')->name('admin.languages.create');
            Route::post('store', 'LanguageController@store')->name('admin.languages.store');
            Route::get('main_categories', 'MainCategoryController@index');
        **/
        });
    });
/**
    <li class="list-group-item">
        <a href="/admin_home/index">Languages</a>
    </li>
     <li class="list-group-item">
        <a href="/admin_home/main_categories">Main catergories</a>
      </li>
**/
//-----------------------------------------------------------------------------


// ------------------------------[ User]-----------------------------==========

    Auth::routes();
    Route::get('/home', 'MediaController@index')->name('home');
    Route::get('/home/profile', 'ProfileController@index');        // ProfileController
    Route::post('/home/profile', 'ProfileController@update')->name('profile');

//-----------------------------------------------------------------------------

});


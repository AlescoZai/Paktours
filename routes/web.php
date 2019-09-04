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



//Auth::routes();



//Auth::routes();

Auth::routes();


Route::get('/', 'HomeController@index');

Route::get('/index-2', 'HomeController@index');




Route::get('/contact', function () {
    return view('contact');
});

Route::get('/mail', function () {
    return view('mail');
});
Route::get('/blog-details','HomeController@blog');
Route::get('/package-grid', 'HomeController@package1')->name('package-grid');
Route::get('/package-3-col', 'HomeController@package')->name('package-3-col');
Route::get('/user_addtour', 'HomeController@addtour');
Route::get('/about', function () {
    return view('about');
});



Route::get('/sign-up', function () {
    return view('sign-up');
});



Route::prefix('admin')->group(function() {



    Route::get('/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login','Auth\AdminLoginController@Login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');


});

Route::prefix('company')->group(function() {



    Route::get('/login','Auth\CompanyLoginController@showLoginForm')->name('company.login');
    Route::post('/login','Auth\CompanyLoginController@Login')->name('company.login.submit');
    Route::get('/', 'CompanyController@index')->name('company.dashboard');


});

Route::resource('Travel','TravelController')->middleware('auth:admin');


/*Route::group(['middleware'=>['auth:company' OR 'auth:admin']],function (){

    Route::resource('Tour','TourController');

});
*/
Route::resource('User','UserController')->middleware('auth:admin');
Route::post('updatepassword','UserController@updatepassword')->middleware('auth:web');

Route::post('updatepassword1','TourController@updatepassword1')->middleware('auth:company');

Route::resource('Contact','ContactController')->middleware('auth:admin');
Route::resource('Admin_Tour','AdminTourController')->middleware('auth:admin');

Route::resource('Tour','TourController')->middleware('auth:company');
Route::get('Booking','TourController@index1')->middleware('auth:company');
Route::get('Logout','AdminController@getLogout')->name('Logout');
Route::get('C_Logout','CompanyController@getLogout')->name('C_Logout');
Route::get('U_Logout','HomeController@getLogout')->name('U_Logout');

Route::post('/Book/{tour_id}', 'BookController@Booking');
Route::get('/destroy/{tour_id}', 'BookController@destroy');
Route::post('/search','HomeController@search');
Route::post('/search1','HomeController@search1');
Route::post('/search2','HomeController@search2');
Route::get('/dashboard', 'HomeController@dashboard')->middleware('auth:web');
Route::get('/editpassword', 'HomeController@editpassword')->middleware('auth:web');
Route::get('/editpassword1', 'TourController@editpassword1')->middleware('auth:company');
Route::post('/addutour','HomeController@addutour')->middleware('auth:web');
Route::post('/bid/{tour_id}', 'HomeController@Bidding')->middleware('auth:company');
Route::get('/select_bid/{temp_id}/{bid_id}', 'HomeController@select');
Route::get('/Bidding','CompanyController@bidding')->middleware('auth:company');
Route::post('/mail','HomeController@mail')->middleware('auth:web');
Route::post('/comment','HomeController@comment')->middleware('auth:web');
Route::get('/like/{id}','HomeController@like')->middleware('auth:web');
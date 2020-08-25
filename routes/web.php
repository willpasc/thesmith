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

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

Route::get('/clear', function() {

    \Illuminate\Support\Facades\Artisan::call('cache:clear');
    \Illuminate\Support\Facades\Artisan::call('config:clear');
    \Illuminate\Support\Facades\Artisan::call('config:cache');
    \Illuminate\Support\Facades\Artisan::call('view:clear');

    return "Cleared!";

});

// FRONTEND ROUTE

Route::get('/', 'Frontend\HomeController@index')->name('home');
Route::get('/district', 'Frontend\HomeController@district')->name('frontend.district');
Route::get('/about', 'Frontend\HomeController@about')->name('frontend.about');
Route::get('/concept', 'Frontend\HomeController@concept')->name('frontend.concept');
Route::get('/masterplan', 'Frontend\HomeController@masterplan')->name('frontend.masterplan');
Route::get('/introduction', 'Frontend\HomeController@introduction')->name('frontend.introduction');
Route::get('/location', 'Frontend\HomeController@location')->name('frontend.location');
Route::get('/developer', 'Frontend\HomeController@developer')->name('frontend.developer');
Route::get('/slow', 'Frontend\HomeController@slow')->name('frontend.slow');
Route::get('/less', 'Frontend\HomeController@less')->name('frontend.less');
Route::get('/towerplans/{tabname}', 'Frontend\HomeController@towerplans')->name('frontend.towerplans');
Route::get('/facilities', 'Frontend\HomeController@facilities')->name('frontend.facilities');
Route::get('/idea', 'Frontend\HomeController@idea')->name('frontend.idea');
Route::get('/gallery', 'Frontend\HomeController@gallery')->name('frontend.gallery');
Route::get('/gallery-detail/{type}', 'Frontend\HomeController@galleryDetail')->name('frontend.gallery-detail');
Route::get('/master-plan', 'Frontend\HomeController@planMaster')->name('frontend.plan.master');
Route::get('/partners', 'Frontend\HomeController@partners')->name('frontend.partners');
Route::get('/floor-plan', 'Frontend\HomeController@planFloor')->name('frontend.plan.floor');
Route::get('/unit-plan', 'Frontend\HomeController@planUnit')->name('frontend.plan.unit');
Route::get('/features', 'Frontend\HomeController@features')->name('frontend.features');
Route::get('/contact-us', 'Frontend\HomeController@contactUs')->name('frontend.contact_us');
Route::post('/contact-us', 'Frontend\HomeController@saveContactUs')->name('frontend.contact_us.save');
Route::post('/subscribe-submit', 'Admin\SubscribeController@store')->name('frontend.subscribe.save');
Route::get('/catalogue/download', 'Frontend\HomeController@downloadCatalogue')->name('frontend.catalogue.download');

// FRONTEND PAUL
Route::get('/paul_marc/introduction', 'Frontend\HomePaulController@introduction')->name('frontend.paul.introduction');
Route::get('/paul_marc/prives', 'Frontend\HomePaulController@prives')->name('frontend.paul.prives');
Route::get('/paul_marc/lanes', 'Frontend\HomePaulController@lanes')->name('frontend.paul.lanes');

// ADMIN ROUTE
// ====================================================================================================================
//
//Route::prefix('admin')->group(function(){
//    Route::get('/', 'Admin\ContactMessageController@index')->name('admin.dashboard');
//    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
//    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
//    Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
//
//    // Contact Message
//    Route::get('/contact-messages', 'Admin\ContactMessageController@index')->name('admin.contact-messages.index');
//
//    // Admin User
//    Route::get('/admin-users', 'Admin\AdminUserController@index')->name('admin.admin-users.index');
//    Route::get('/admin-users/create', 'Admin\AdminUserController@create')->name('admin.admin-users.create');
//    Route::post('/admin-users/store', 'Admin\AdminUserController@store')->name('admin.admin-users.store');
//    Route::get('/admin-users/edit/{item}', 'Admin\AdminUserController@edit')->name('admin.admin-users.edit');
//    Route::post('/admin-users/update', 'Admin\AdminUserController@update')->name('admin.admin-users.update');
//    Route::post('/admin-users/delete', 'Admin\AdminUserController@destroy')->name('admin.admin-users.destroy');
//
//    // User
//    Route::get('/users', 'Admin\UserController@index')->name('admin.users.index');
//    Route::get('/users/create', 'Admin\UserController@create')->name('admin.users.create');
//    Route::post('/users/store', 'Admin\UserController@store')->name('admin.users.store');
//    Route::get('/users/edit/{item}', 'Admin\UserController@edit')->name('admin.users.edit');
//    Route::post('/users/update', 'Admin\UserController@update')->name('admin.users.update');
//    Route::post('/users/delete', 'Admin\UserController@destroy')->name('admin.users.destroy');
//
//    // Subscribes
//    Route::get('/subscribes', 'Admin\SubscribeController@index')->name('admin.subscribes.index');
//    Route::get('/subscribe-downloads', 'Admin\SubscribeController@download')->name('admin.subscribes.download');
//});
//
//Route::get('/datatable/contact-message', 'Admin\ContactMessageController@getIndex')->name('datatables.contact-message');

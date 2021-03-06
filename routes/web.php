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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

Route::group(['middleware' => 'auth'], function () {

	Route::get('setting','settingController@setting')->name('setting');

	Route::get('worklist','settingController@worklist')->name('worklist');

	Route::post('getarea','ProfileController@getArea');
	
	Route::post('setting/update','settingController@updateSetting');
	
	Route::post('setting/areaList','settingController@updateAreaList');

	Route::post('setting/AddareaList','settingController@AddAreaList');
	
	/**
	 * Add word list route
	 * 
	 */

	Route::get('setting/addwork','settingController@AddworklistView');

	Route::get('setting/getsubcat', 'settingController@getsubcat');

	Route::get('setting/getworklist', 'settingController@getworklist');

	Route::post('setting/addWorklist', 'settingController@AddWorklist');

	Route::post('setting/wpupdate', 'settingController@workpriceUpdate');

	Route::get('setting/wldelete', 'settingController@workListDelete');



	Route::get('feedback', 'FeedbackController@ShowFeedback')->name('feedback');

	Route::get('map', 'AccountController@showAccountPage')->name('map');

	Route::get('notifications', function () {
		return view('pages.notifications');
	})->name('notifications');


	
	// Route::get('typography', function () {
	// 	return view('pages.typography');
	// })->name('typography');

	// Route::get('icons', function () {
	// 	return view('pages.icons');
	// })->name('icons');

	// Route::get('rtl-support', function () {
	// 	return view('pages.language');
	// })->name('language');

	// Route::get('upgrade', function () {
	// 	return view('pages.upgrade');
	// })->name('upgrade');
	
});

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::post('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});

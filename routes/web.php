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
// Authenitication and dashboard routes
Route::get('register', 'Auth\RegisterController@register');
Auth::routes(['verify' => true]);

Route::prefix('/dashboard')->group(function() {
  Route::get('/', 'HomeController@index')->name('dashboard');//->middleware('verified');
  Route::get('/favorites', 'HomeController@favorites');//->middleware('verified');
  Route::get('/{id}/edit', 'HomeController@edit')->name('member.edit');//->middleware('verified');
  Route::put('/{id}/update', 'HomeController@update')->name('member.update');//->middleware('verified');
});

// Pages and authenitication routes
Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');
Route::prefix('/projects')->group(function(){
  Route::get('/', function(){return view('pages.projects.projects');});
  Route::get('/web-apps', function(){return view('pages.projects.web_app_projects');});
  Route::get('/mobile-apps', function(){return view('pages.projects.mobile_app_projects');});
  Route::get('/desktop-apps', function(){return view('pages.projects.desktop_app_projects');});
  Route::prefix('/miscellaneous')->group(function(){
    Route::get('/', function(){return view('pages.projects.miscellaneous_projects');});
    Route::get('/cseb-01', function(){return view('pages.projects.cseb-01');});
    Route::get('/dcp-01', function(){return view('pages.projects.dcp-01');});
  });
});
Route::get('/tutorials', 'PagesController@tutorials')->name('tutorials');
// All the tutorial routes below will only be available for authenticated users
Route::get('/tutorials/create', 'HomeController@create_course')->name('course.create');//->middleware('role:Teacher','verified');
Route::post('/tutorials/store', 'HomeController@store_course')->name('course.store');//->middleware('role:Teacher','verified');
Route::get('/tutorials/{course_id}/create-chapter', 'HomeController@create_course_content')->name('course_content.create');//->middleware('role:Teacher','verified');
Route::post('/tutorials/{course_id}/store-chapter', 'HomeController@store_course_content')->name('course_content.store');//->middleware('role:Teacher','verified');
Route::get('/tutorials/{course_id}/{chapter_number}/edit', 'HomeController@edit_course_content')->name('course_content.edit');//->middleware('role:Teacher','verified');
Route::post('/tutorials/{course_id}/{chapter_number}/update', 'HomeController@update_course_content')->name('course_content.update');//->middleware('role:Teacher','verified');
Route::get('/tutorials/{course_id}/{chapter_number}', 'HomeController@show_course')->name('course.show');//->middleware('role:Teacher','verified');

Route::get('/contact', 'PagesController@contact');
Route::post('/contact', 'PagesController@store_contact_us')->name('contact.store');

Route::get('/home', 'HomeController@index')->name('home');

// Routes for comment
Route::resource('comment','CommentsController',['only'=>['update','destroy']]);
Route::post('comment/create/{chapter}','CommentsController@store_chapter_comment')->name('chapter_comment.store');

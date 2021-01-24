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
Route::get('admin',function (){
    $story = \App\Story::all()->count();
    $chap = \App\Chapter::all()->count();
    $user = Auth::user()->count();

    return view('dashboard',compact('story','chap','user'));
})->middleware('admin');
Route::group(['prefix'=>'admin','middleware'=>'admin'],function()
{
    Route::resource('category','CategoryController');
    Route::resource('author','AuthorController');
    Route::resource('story','StoryController');
    Route::resource('chapter','ChapterController');
    Route::resource('status','StatusController');

});
Route::get('/','ClientController@index');

Route::get('/truyen/{id}','ClientController@getTruyen')->name('truyen');
Route::get('/theloai/{id}','ClientController@getTheLoai')->name('theloai');
Route::get('/chitiet/{id}','ClientController@getChiTiet')->name('chitiet');
Route::get('/danhmuc/{id}','ClientController@getDanhMuc')->name('danhmuc');
Route::get('/taikhoan','ClientController@getTaiKhoan');
Route::get('/tacgia/{id}','ClientController@getTacGia')->name('tacgia');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

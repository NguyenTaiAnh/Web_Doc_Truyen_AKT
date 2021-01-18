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
    return view('dashboard');
})->middleware('admin');
Route::group(['prefix'=>'admin','middleware'=>'admin'],function()
{
    Route::resource('category','CategoryController');
    Route::resource('author','AuthorController');
    Route::resource('story','StoryController');
    Route::resource('chapter','ChapterController');
    Route::resource('status','StatusController');

});
Route::get('/',function () {
    return view('TrangChu');
});

Route::get('/dangky','ClientController@getDangKy');
Route::post('/dangky','ClientController@postDangKy');
Route::get('/dangnhap','ClientController@getDangNhap');
Route::post('/dangnhap','ClientController@postDangNhap');
Route::get('/truyen','ClientController@getTruyen');
Route::get('/theloai','ClientController@getTheLoai');
Route::get('/chitiet','ClientController@getChiTiet');
Route::get('/danhmuc','ClientController@getDanhMuc');
Route::get('/taikhoan','ClientController@getTaiKhoan');
Route::get('/tacgia','ClientController@getTacGia');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

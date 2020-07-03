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


Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

// Route::get('/personalworks', function () {
//     return view('personal');
// });
Route::get('/personalworks', 'PersonalworksController@getData');

Route::get('/works', 'WorksController@getAllWorksData');

Route::get('/detail/personalworks/{id}', 'PersonalworksController@getDetailData');
// Work詳細ページ表示
Route::get('/detail/works/{id}', 'WorksController@getDetailData');

//　Work詳細ページ　前へ
Route::get('/detail/prev/{id}', 'WorksController@getPrevDetailData');
//　Work詳細ページ　次へ
Route::get('/detail/next/{id}', 'WorksController@getNextDetailData');

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/contacted', function () {
    return view('contacted');
});

//かれん投稿用
//パーソナルワーク投稿
Route::get('/post_personalworks', 'PersonalworksController@index');
Route::post('/post/personalworks', 'PersonalworksController@store');

Route::post('/delete/personal_image/{id}', 'PersonalworksController@delete');
// 並び替え
Route::post('/prev/personal_image/{id}', 'PersonalworksController@prevData');
Route::post('/next/personal_image/{id}', 'PersonalworksController@nextData');

//ワーク投稿
Route::get('/post_works', 'WorksController@index');
Route::post('/post/works', 'WorksController@store');

//Works 削除
Route::post('/delete/works/{id}', 'WorksController@delete');

//ワーク詳細画像追加
Route::get('/add/works/{id}', 'WorksController@getData');
Route::post('/add/works', 'WorksController@postData');

//Works詳細ページでの画像削除
Route::post('/delete/image/{id}', 'WorksController@deleteDetail');
//Works詳細ページでの説明文の編集
Route::post('/edit/detail', 'WorksController@updateData');


//　お問い合わせメール送信
// Route::get('/mail', 'MailController@index');
Route::post('/mail/send', 'MailController@send');

// お問い合わせ系
Route::get('contact/input', 'ContactsController@index');
Route::post('contact/confirm', 'ContactsController@confirm');
Route::post('contact/complete', 'ContactsController@complete');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

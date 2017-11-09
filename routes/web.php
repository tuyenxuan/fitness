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

// Front end
Route::get('/', 'User\HomeController@showHome')->name('home');

Route::get('content/{category}', 'User\ContentController@showContent')->name('content');

Route::get('page/content/excercise/{category}', 'User\ContentController@getExcerciseContent')->name('get_excercise_content');

Route::get('page/content/post', 'User\ContentController@getPosts')->name('get_post_content');

Route::get('page/content/music', 'User\ContentController@getMusics')->name('get_music_content');

Route::get('/category/{category_id}/{tab}', 'User\HomeController@getExcercises')->name('get_excercises');

Route::get('/post', 'User\HomeController@getPosts')->name('get_posts');

Route::get('/music', 'User\HomeController@getMusics')->name('get_musics');

Route::get('/detail/excercise/{excercise_id}', 'User\DetailController@showDetail')->name('show_excercise_detail');

Route::get('/detail/post/{post_id}', 'User\DetailController@showPostDetail')->name('show_post_detail');

Route::get('/detail/music/{music_id}', 'User\DetailController@showMusicDetail')->name('show_music_detail');

//Member
Route::group(['prefix' => '/member'], function() {
    Route::get('', 'Member\HomeController@showDasboard')->name('member_schedule');

    Route::get('report', 'Member\HomeController@showReport')->name('member_report');

    Route::get('report/create', 'Member\HomeController@createReport')->name('member_create_report');

    Route::get('review', 'Member\HomeController@showReview')->name('member_review');
});

//Coach
Route::group(['prefix' => '/coach'], function() {
    Route::get('/', 'Coach\HomeController@showDasboard')->name('coach_schedule');

    Route::get('/report/list', 'Coach\HomeController@showReportList')->name('coach_report_list');

    Route::get('/member/list', 'Coach\HomeController@showMemberList')->name('coach_member_list');

    Route::get('/review/list', 'Coach\HomeController@showReviewList')->name('coach_review_list');

    Route::get('/excercise/list', 'Coach\HomeController@showExcerciseList')->name('coach_excercise_list');
});

//Admin
Route::group(['prefix' => '/admin'], function() {
    Route::get('/', 'Admin\HomeController@showDasboard')->name('admin_dashboard');

    Route::get('/coach/list', 'Admin\HomeController@showCoachList')->name('admin_coach_list');

    Route::get('/excercise/list', 'Admin\HomeController@showExcerciseList')->name('admin_excercise_list');

    Route::get('/post/list', 'Admin\HomeController@showPostList')->name('admin_post_list');

    Route::get('/music/list', 'Admin\HomeController@showMusicList')->name('admin_music_list');

    Route::get('/image/list', 'Admin\HomeController@showImageList')->name('admin_image_system_list');

    Route::get('/system_info/list', 'Admin\HomeController@showSystemInfoList')->name('admin_system_infos');
});
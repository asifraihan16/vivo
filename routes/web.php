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

Route::get('/', 'FrontendController@index');
Route::get('/galleries', 'FrontendController@galleries');
Route::get('/exhibition', 'FrontendController@exhibition');
Route::get('/exhibition/photos-by-author/{author_id}', 'FrontendController@exhibition_photos_by_author')->name('exibition-photos-by-author');
Route::get('/exibition2', 'FrontendController@exibition2');
Route::get('/blogs', 'FrontendController@blogs');
Route::get('/blog_details/{id}', 'FrontendController@blog_details');
Route::get('/campaign', 'FrontendController@campaign');
Route::get('/campaign_detail/{id}', 'FrontendController@campaign_detail');
Route::get('/contact', 'FrontendController@contact');
Route::get('/image_description/{id}', 'FrontendController@image_description');

Route::get('faqs', 'MiscController@faqs')->name('frontend.faqs');
Route::get('privacy-policy', 'MiscController@privacy_policy')->name('frontend.privacy-policy');
Route::get('warranty-terms', 'MiscController@warranty_terms')->name('frontend.warranty-terms');


Route::get('admin/', 'AuthController@home');
Route::get('admin/login', 'AuthController@index')->name('login');
// Route::get('login', [ 'as' => 'login', 'uses' => 'AuthController@index']);
Route::post('admin/post-login', 'AuthController@postLogin');
Route::get('admin/register', 'AuthController@register');
Route::post('admin/post-register', 'AuthController@postRegister');
Route::get('admin/logout', 'AuthController@logout');

Route::resource('blog-comments', 'BlogCommentController')->only('store');

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'is_admin']], function () {
    Route::get('dashboard', 'AuthController@dashboard');
    Route::resource('mobile-series', 'MobileSeriesController');
    Route::get('mobile-series-status-update/{id}', 'MobileSeriesController@statusUpdate');
    Route::resource('mobile_series_versions', 'MobileSeriesVersionController');
    Route::get('mobile_series_versions_status_update/{id}', 'MobileSeriesVersionController@statusUpdate');
    Route::resource('tags', 'TagController');
    Route::get('tags_status_update/{id}', 'TagController@statusUpdate');
    Route::resource('home_sliders', 'HomeSliderController');
    Route::get('home_sliders/{id}', 'HomeSliderController@statusUpdate');
    Route::resource('moment_of_the_months', 'MomentOfTheMonthController');
    Route::get('moment_of_the_months/{id}', 'MomentOfTheMonthController@statusUpdate');
    Route::resource('photographers', 'PhotographerController');
    Route::resource('exibition_upload', 'ExibitionController');
    Route::resource('playlists', 'PlaylistController');

    Route::resource('playlist1_main_vedios', 'Playlist1MainVediosController')->only('index', 'create', 'store');
    Route::delete('playlist1_main_vedios/{id}', 'Playlist1MainVediosController@destroy')->name('playlist1_main_vedios.destroy');

    Route::resource('playlist1_other_vedios', 'Playlist1OtherVediosController')->only('index', 'create', 'store');
    Route::delete('playlist1_other_vedios/{id}', 'Playlist1OtherVediosController@destroy')->name('playlist1_other_vedios.destroy');

    Route::resource('playlist2_main_vedios', 'Playlist2MainVediosController')->only('index', 'create', 'store');
    Route::delete('playlist2_main_vedios/{id}', 'Playlist2MainVediosController@destroy')->name('playlist2_main_vedios.destroy');

    Route::resource('playlist2_other_vedios', 'Playlist2OtherVediosController')->only('index', 'create', 'store');
    Route::delete('playlist2_other_vedios/{id}', 'Playlist2OtherVediosController@destroy')->name('playlist2_other_vedios.destroy');

    Route::get('playlists/{id}', 'PlaylistController@statusUpdate');
    Route::resource('blogs', 'BlogController');
    Route::get('blogs/{id}', 'BlogController@statusUpdate');
    Route::resource('campaigns', 'CampaignController');
    Route::get('campaigns/{id}', 'CampaignController@statusUpdate');
    Route::get('pending_request', 'PhotoGalleryController@pending_request');
    Route::get('pending_request_approved/{id}', 'PhotoGalleryController@pending_request_approved');
    Route::get('approved_request', 'PhotoGalleryController@approved_request')->name('admin.approved_request');
    Route::get('users', 'AuthController@user_list');
    Route::get('users_create', 'AuthController@users_create');
    Route::post('admin_user_create', 'AuthController@postRegister');
    Route::get('user_profile', 'AuthController@show');
    Route::post('profile_info', 'UserProfileController@profile_info');

    Route::resource('faqs', 'Admin\FaqsController')->only('index', 'store', 'update', 'destroy');
});

Route::get('user/', 'AuthController@user_home');
Route::get('user/login', 'AuthController@user_index');
Route::post('user/post-login', 'AuthController@user_postLogin');
Route::get('user/register', 'AuthController@user_register');
Route::post('user/post-register', 'AuthController@user_postRegister');
Route::get('user/logout', 'AuthController@user_logout');

Route::group(['prefix' => 'user', 'middleware' => 'auth'], function () {
    Route::get('dashboard', 'AuthController@user_dashboard');
    Route::get('user_profile', 'UserProfileController@user_show');
    Route::post('profile_info', 'UserProfileController@user_profile_info');

    Route::get('photo_upload', 'PhotoGalleryController@create');
    Route::post('photo_upload', 'PhotoGalleryController@store');
    Route::get('photo_history', 'PhotoGalleryController@photo_history')->name('user.photo_history');

    // socialite routes
    // Route::get('/facebook-login', 'SocialController@redirectToProvider');
    // Route::get('/callback', 'SocialController@handleProviderCallback');
    // facebook route
    Route::get('/auth/redirect/{provider}', 'SocialController@redirect');
    Route::get('/callback/{provider}', 'SocialController@callback');

    // google route
    Route::get('/auth/redirect/{provider}', 'SocialController@redirect');
    Route::get('/callback/{provider}', 'SocialController@callback');
});

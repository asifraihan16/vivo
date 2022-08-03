<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'FrontendController@index');
Route::get('/photographer', 'FrontendController@photographer')->name('frontend.photographer');
Route::get('/photographer-profile/{user}', 'FrontendController@user_profile')->name('frontend.photographer-profile');
Route::get('/vivographer-profile/{user}', 'FrontendController@user_profile')->name('frontend.vivographer-profile');
Route::get('/gallery', 'FrontendController@gallery')->name('frontend.gallery');
Route::get('/gallery/photos-by-author/{author_id}', 'FrontendController@exhibition_photos_by_author')->name('exibition-photos-by-author');
Route::get('/exibition2', 'FrontendController@exibition2');
Route::get('/blogs', 'FrontendController@blogs');
Route::get('/blog_details/{id}', 'FrontendController@blog_details');
Route::get('/campaign', 'FrontendController@campaign')->name('frontend.campaign');
Route::get('/campaign_detail/{id}', 'FrontendController@campaign_detail')->name('frontend.campaign_detail');
Route::get('/contact', 'FrontendController@contact');
//previous
Route::get('/previous_campaign_photos/{id}', 'FrontendController@previous_campaign_photoes')->name('frontend.previous_campaign_photos');
Route::get('/image_description/{id}', 'FrontendController@image_description');
Route::get('photos-by-series/{series_id}', 'FrontendController@photos_by_series')->name('frontend.photos-by-series');

Route::get('faqs', 'MiscController@faqs')->name('frontend.faqs');
Route::get('privacy-policy', 'MiscController@privacy_policy')->name('frontend.privacy-policy');
Route::get('image-licensing', 'MiscController@image_licensing')->name('frontend.image-licensing');
Route::get('warranty-terms', 'MiscController@warranty_terms')->name('frontend.warranty-terms');

Route::get('videos', 'FrontendController@videos')->name('frontend.videos');


Route::get('admin/', 'AuthController@home');
Route::get('admin/login', 'AuthController@index')->name('login');
// Route::get('login', [ 'as' => 'login', 'uses' => 'AuthController@index']);
Route::post('admin/post-login', 'AuthController@postLogin');
Route::get('admin/register', 'AuthController@register');
Route::post('admin/post-register', 'AuthController@postRegister');
Route::get('admin/logout', 'AuthController@logout');

Route::get('photographers/login', 'AuthController@photographer_login')->name('photographer.login');
Route::post('photographers/login', 'AuthController@post_photographer_login')->name('photographer.post-login');
Route::get('photographers/signup', 'AuthController@photographer_signup')->name('photographer.signup');
Route::post('photographers/signup', 'AuthController@post_photographer_signup')->name('photographer.post-signup');


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
    Route::resource('moments', 'Admin\MomentsController');
    Route::get('moments/{moment}/{status}/update-status', 'Admin\MomentsController@updateStatus')->name('moments.update-status');

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
    Route::get('campaigns/{campaign}/{status}', 'CampaignController@statusUpdate')->name('campaigns.update-status');
    Route::get('pending_request', 'PhotoGalleryController@pending_request');
    Route::get('pending_request_approved/{id}', 'PhotoGalleryController@pending_request_approved');
    Route::get('photo-gallery/{photo_gallery_id}/update-tags', 'PhotoGalleryController@update_tags')->name('photo-gallery.update-tags');
    Route::post('photo-gallery/{photo_gallery_id}/update-tags', 'PhotoGalleryController@update_tags_post')->name('photo-gallery.update-tags-post');
    Route::delete('photo-gallery/{photo_gallery_id}/delete-photo', 'PhotoGalleryController@delete_gallery_photo')->name('photo-gallery.delete-photo');
    Route::post('photo-gallery/{photo_gallery_id}/update-winner-status', 'PhotoGalleryController@gallery_photo_update_winner_status')->name('photo-gallery.update-winner-status');
    Route::get('approved_request', 'PhotoGalleryController@approved_request')->name('admin.approved_request');
    Route::get('users', 'AuthController@user_list');
    Route::get('users_create', 'AuthController@users_create');
    Route::post('admin_user_create', 'AuthController@postRegister');
    Route::get('user_profile', 'AuthController@show');
    // Route::get('user_profile', 'UserProfileController@user_show');
    Route::post('profile_info', 'UserProfileController@profile_info');

    Route::resource('faqs', 'Admin\FaqsController')->only('index', 'store', 'update', 'destroy');

    Route::get('participants', 'Admin\ParticipantController@index')->name('participants.index');
    Route::get('participants/update-vivographer-status/{user}', 'Admin\ParticipantController@update_vivographer_status')->name('participants.update-vivographer-status');
});

Route::get('user/', 'AuthController@user_home');
Route::get('user/login', 'AuthController@user_index')->name('user.login');
Route::post('user/post-login', 'AuthController@user_postLogin');
Route::get('user/register', 'AuthController@user_register');
Route::post('user/post-register', 'AuthController@user_postRegister');
Route::get('user/logout', 'AuthController@user_logout');

Route::group(['prefix' => 'user', 'middleware' => 'auth'], function () {
    Route::get('dashboard', 'AuthController@user_dashboard');
    Route::get('user_profile', 'UserProfileController@user_show');
    Route::post('profile_info', 'UserProfileController@user_profile_info');

    Route::get('photo_upload', 'PhotoGalleryController@create')->name('user.photo-upload');
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



    // Like gallery photo
    Route::post('like-gallery-photo/{photo_gallery}', 'FrontendController@like_gallery_photo')->name('user.like-gallery-photo');
});

Route::group(['prefix'=> 'photographers', 'middleware'=> ['auth', 'is_photographer']], function () {
    Route::get('dashboard', 'Photographer\DashboardController@index')->name('photographer.dashboard');

    Route::get('photo_upload', 'Photographer\PhotoGalleryController@create')->name('photographer.upload-photo');
    Route::post('photo_upload', 'Photographer\PhotoGalleryController@store')->name('photographer.post-upload-photo');
    Route::get('photo_history', 'Photographer\PhotoGalleryController@photo_history')->name('photographer.photo_history');

    Route::get('profile', 'Photographer\ProfileController@profile')->name('photographer.profile');
    Route::post('update-profile', 'Photographer\ProfileController@update_profile')->name('photographer.update-profile');
});


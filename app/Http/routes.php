<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['middleware' => ['web']], function () {


//    login route
    Route::get('auth/login', [
        'uses' => 'authController@login',
        'as' => 'auth.login'
    ]);

    Route::post('auth/login', [
        'uses' => 'authController@checkLogin',
        'as' => 'auth.checkLogin'
    ]);

    Route::get('auth/logout', [
        'uses' => 'authController@logout',
        'as' => 'auth.logout'
    ]);

    Route::get('auth/register', function(){
//        $user = \Sentry::register(array(
//            'email'    => 'i.jedari@gmail.com',
//            'password' => '2231218',
//            'activated' => true
//        ));
    });
//    ---------

    Route::get('/', [
        'uses' => 'indexController@index',
        'as' => 'index'
    ]);


//    Route::get('posts/{category?}/{slug}', [
//        'uses' => 'PostController@index',
//        'as' => 'posts.index'
//    ]);


//-----------general route for pages------------//
//    Route::get('/{slug}', [
//        'uses' => 'PageController@index',
//        'as' => 'pages.index'
//    ]);
//---------------------------------------------//

//    Get to all pages
//    Route::get('posts/news', );

//    Email Subscribe Route
    Route::post('/subscribe', 'subscribeController@store')->name('emailSubscribe');
    Route::get('/test', function (){
        return view('test');
    });
//    pages route
    Route::get('/newsIndex{page}', 'NewsPageController@indexNews');
    Route::get('/news', 'NewsPageController@index')->name('news');
    Route::get('/news/{slug}', 'NewsPageController@newsItem')->name('newsItem');

//    Education Menu
    Route::get('/education', 'EducationPageController@index')->name('education');
    Route::get('/education/workshops/{slug?}', 'EducationPageController@workshops')->name('workshops');
    Route::get('/education/tutorials/{slug?}/', 'EducationPageController@tutorials')->name('tutorials');

//    Events Menu
    Route::get('/events', 'EventsPageController@index')->name('events');
    Route::get('/events/Conferences/{slug?}/', 'EventsPageController@Conferences')->name('conferences');
    Route::get('/events/Competitions/{slug?}/', 'EventsPageController@Competitions')->name('competitions');
    Route::get('/events/Camps/{slug?}/', 'EventsPageController@Camps')->name('camps');
    Route::get('/events/Sessions/{slug?}/', 'EventsPageController@Sessions')->name('sessions');
    Route::get('/events/Calendar/{slug?}/', 'EventsPageController@Calendar')->name('calendar');


//    Publications Menu
    Route::get('/publications', 'PublicationsPageController@index')->name('publications');
    Route::get('/publications/articles/{slug?}', 'PublicationsPageController@articles')->name('articles');
    Route::get('/publications/newsletter/{slug?}', 'PublicationsPageController@newsletter')->name('newsletter');
    Route::get('/publications/subscription', 'PublicationsPageController@subscription')->name('subscription');


//    Media menu
    Route::get('/media', 'MediaPageController@index')->name('media');
    Route::get('/media/images/{slug?}/', 'MediaPageController@images')->name('images');
    Route::get('/media/videos/{slug?}/', 'MediaPageController@videos')->name('videos');

//    Chapters Menu
    Route::get('/chapters/chapterOne', 'chaptersController@chapterOne')->name('chapterOne');
    Route::get('/chapters/chapterTwo', 'chaptersController@chapterTwo')->name('chapterTwo');
    Route::get('/chapters/chapterThree', 'chaptersController@chapterThree')->name('chapterThree');

//    Awards Menu
    Route::get('/awards', 'AwardsPageController@index')->name('awards');

//    Route::controller('/about', 'AboutPageController');
//    Contact Menu
    Route::get('/contact', 'ContactPageController@index')->name('contact');


});

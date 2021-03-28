<?php

use Illuminate\Support\Facades\Route;

//Clear Cache
Route::get('clear', function () {
    $exitCode = Artisan::call('config:clear');
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('config:cache');
    $exitCode = Artisan::call('storage:link');
    return 'Cache Cleared Successfully'; //Return anything
});

/////////////////////////Frontend routes////////////////////////////////
Route::group(['namespace' => 'Frontend'], function () {

    Route::get('/', 'FrontendController@index');
    Route::get('/about', 'FrontendController@about')->name('about');
    Route::get('/portfolio', 'FrontendController@portfolio')->name('portfolio');
    Route::get('/courses', 'FrontendController@courses')->name('courses');
    Route::get('/course/details/{slug}', 'FrontendController@courseDetails')->name('course.details');
    Route::get('/course/registration/{slug}', 'FrontendController@courseRegistration')->name('course.registration');
    Route::get('/blogs', 'FrontendController@blogs')->name('blogs');
    Route::get('/contact', 'FrontendController@contact')->name('contact');
    Route::post('/contact/store', 'ContactController@contactStore')->name('contact.store');
    Route::get('/user/login-register', 'FrontendController@loginRegister')->name('login.register');
    Route::post('/user/store', 'RegisterController@userStore')->name('user.store');
});

/*User dashboard*/
Route::group(['prefix' => '/user', 'namespace' => 'Frontend', 'middleware' => ['auth', 'user']], function () {

    //User profile
    Route::get('/dashboard', 'DashboardController@user_dashboard')->name('user.dashboard');
    Route::get('/edit/profile', 'DashboardController@editProfile')->name('user.edit.profile');
    Route::post('/change/profile/picture', 'DashboardController@changePp')->name('user.change.pp');
    Route::post('/update/profile', 'DashboardController@updateProfile')->name('user.update.profile');
    Route::get('/change/password', 'DashboardController@changePassword')->name('user.change.password');
    Route::post('/update/password', 'DashboardController@updatePassword')->name('user.update.password');
});



//Social Login
Route::get('/login/{social}', 'Auth\LoginController@socialLogin')->where('social', 'twitter|facebook|linkedin|google|github|bitbucket');
Route::get('/login/{social}/callback', 'Auth\LoginController@handleProviderCallback')->where('social', 'twitter|facebook|linkedin|google|github|bitbucket');



//Auth route
Auth::routes();


/////////////////////////Backend routes////////////////////////////////
Route::group(['prefix' => '/admin', 'middleware' => ['auth', 'admin']], function () {

    Route::get('/dashboard', 'Backend\DashboardController@admin_dashboard')->name('home');

    //Admin
    Route::group(['as' => 'admin.', 'prefix' => '/admin', 'namespace' => 'Backend'], function () {

        Route::get('/index', 'AdminController@index')->name('index');
        Route::get('/create', 'AdminController@create')->name('create');
        Route::post('/store', 'AdminController@store')->name('store');
        Route::get('/edit/{id}', 'AdminController@edit')->name('edit');
        Route::post('/update/{id}', 'AdminController@update')->name('update');
        Route::get('/destroy/{id}', 'AdminController@destroy')->name('destroy');
    });

    //Admin Profile
    Route::group(['as' => 'admin.profile.', 'prefix' => '/admin/profile', 'namespace' => 'Backend'], function () {

        Route::get('/index', 'ProfileController@index')->name('index');
        Route::get('/edit', 'ProfileController@edit')->name('edit');
        Route::post('/update', 'ProfileController@update')->name('update');
        Route::get('/edit/password', 'ProfileController@editPassword')->name('ep');
        Route::post('/update/password', 'ProfileController@updatePassword')->name('up');
    });
    
    //Setting
    Route::group(['as' => 'setting.', 'prefix' => '/setting', 'namespace' => 'Backend'], function () {
        Route::get('/index', 'SettingController@index')->name('index');
        Route::post('/update/{id}', 'SettingController@update')->name('update');
    }); 
    //Blog Category
    Route::group(['as' => 'blogcategory.', 'prefix' => '/blog/category', 'namespace' => 'Backend'], function () {

        Route::get('/index', 'BlogCategoryController@index')->name('index');
        Route::get('/create', 'BlogCategoryController@create')->name('create');
        Route::post('/store', 'BlogCategoryController@store')->name('store');
        Route::get('/edit/{id}', 'BlogCategoryController@edit')->name('edit');
        Route::post('/update/{id}', 'BlogCategoryController@update')->name('update');
        Route::get('/destroy/{id}', 'BlogCategoryController@destroy')->name('destroy');
    });

    //Blog
    Route::group(['as' => 'blog.', 'prefix' => '/blog', 'namespace' => 'Backend'], function () {
        Route::get('/index', 'BlogController@index')->name('index');
        Route::get('/create', 'BlogController@create')->name('create');
        Route::post('/store', 'BlogController@store')->name('store');
        Route::get('/show/{id}', 'BlogController@show')->name('show');
        Route::get('/edit/{id}', 'BlogController@edit')->name('edit');
        Route::post('/update/{id}', 'BlogController@update')->name('update');
        Route::get('/destroy/{id}', 'BlogController@destroy')->name('destroy');
        Route::post('/status/{id}', 'BlogController@blog_status')->name('status');
    });
    
    //Course
    Route::group(['as' => 'course.', 'prefix' => '/course', 'namespace' => 'Backend'], function () {
        Route::get('/index', 'CourseController@index')->name('index');
        Route::get('/create', 'CourseController@create')->name('create');
        Route::post('/store', 'CourseController@store')->name('store');
        Route::get('/show/{id}', 'CourseController@show')->name('show');
        Route::get('/edit/{id}', 'CourseController@edit')->name('edit');
        Route::post('/update/{id}', 'CourseController@update')->name('update');
        Route::get('/destroy/{id}', 'CourseController@destroy')->name('destroy');
    });
    
    //Portfolio
    Route::group(['as' => 'portfolio.', 'prefix' => '/portfolio', 'namespace' => 'Backend'], function () {
        Route::get('/index', 'PortfolioController@index')->name('index');
        Route::get('/create', 'PortfolioController@create')->name('create');
        Route::post('/store', 'PortfolioController@store')->name('store');
        Route::get('/show/{id}', 'PortfolioController@show')->name('show');
        Route::get('/edit/{id}', 'PortfolioController@edit')->name('edit');
        Route::post('/update/{id}', 'PortfolioController@update')->name('update');
        Route::get('/destroy/{id}', 'PortfolioController@destroy')->name('destroy');
    });

});

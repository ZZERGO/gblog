<?php
/* для панели администратора */
Route::group(['prefix' => 'admin', 'as' => 'Admin.'], function(){
    Route::get('/', 'AdminController@index')->name('Main');


    // Пользователи
    Route::group(['prefix' => 'users', 'as' => 'Users.'], function (){
        Route::get('', 'Admin\UserController@index')->name('List');
        Route::post('{id}/delete', 'Admin\UserController@destroy')->name('Delete');
        Route::get('add', 'Admin\UserController@create')->name('Add');
        Route::post('add', 'Admin\UserController@store')->name('Add');
        Route::get('{id}/edit', 'Admin\UserController@edit')->name('Edit');
        Route::post('{id}/edit', 'Admin\UserController@update')->name('Update');
    });

    // Категории
    Route::group(['prefix' => 'category', 'as' => 'Category.'], function (){
       Route::get('', 'Admin\CategoryController@index')->name('Index');
       Route::get('add', 'Admin\CategoryController@create')->name('Add');
       Route::post('add', 'Admin\CategoryController@store')->name('Save');
       Route::get('{id}/edit', 'Admin\CategoryController@edit')->name('Edit');
       Route::post('{id}/edit', 'Admin\CategoryController@update')->name('Update');
       Route::post('{id}/delete', 'Admin\CategoryController@destroy')->name('Delete');
        Route::get('{id}/articles', 'Admin\CategoryController@show')->name('Members');

    });

    // Статьи
    Route::group(['prefix' => 'articles', 'as' => 'Articles.'], function(){
        Route::get('', 'Admin\ArticlesController@index')->name('List');
        Route::get('add', 'Admin\ArticlesController@create')->name('Add');
        Route::post('add', 'Admin\ArticlesController@store')->name('Save');
        Route::get('{id}/edit', 'Admin\ArticlesController@edit')->name('Edit');
        Route::post('{id}/edit', 'Admin\ArticlesController@update')->name('Update');
        Route::post('{id}/delete', 'Admin\ArticlesController@destroy')->name('Delete');

    });

    // Страны
    Route::group(['prefix' => 'country', 'as' => 'Country.'], function(){
        Route::get('/', 'Admin\CountryController@index')->name('List');
        Route::get('{id}/edit', 'Admin\CountryController@edit')->name('Edit');
        Route::get('add', 'Admin\CountryController@create')->name('Add');
        Route::post('add', 'Admin\CountryController@store')->name('Save');
        Route::post('{id}/delete', 'Admin\CountryController@destroy')->name('Delete');
        Route::post('{id}/edit', 'Admin\CountryController@update')->name('Update');
        Route::get('{id}/users', 'Admin\CountryController@show')->name('Members');
    });
});

/* для основного сайта */
Route::group(['','as' => 'Site.'], function (){
    Route::get('/', 'SiteController@index')->name('Home');
});

/* для основной рабочей области */
Route::group(['prefix' => 'work', 'as' => 'Work.'], function (){
    Route::get('/', 'DashboardController@index')->name('Main');
    Route::post('exit', 'Auth\LoginController@logout')->name('Exit');
});

Auth::routes();


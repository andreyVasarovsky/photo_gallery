<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'App\Http\Controllers\Admin', 'prefix' => 'admin', 'middleware' => ['auth', 'admin']], function () {
    Route::get('/', 'IndexController')->name('admin.index');
    Route::group(['namespace' => 'Client', 'prefix' => 'clients'], function () {
        Route::get('/', 'IndexController')->name('admin.client.index');
        Route::get('/create', 'CreateController')->name('admin.client.create');
        Route::get('/{client}', 'ShowController')->name('admin.client.show');
        Route::get('/{client}/edit', 'EditController')->name('admin.client.edit');
        Route::post('/store', 'StoreController')->name('admin.client.store');
        Route::patch('/{client}', 'UpdateController')->name('admin.client.update');
        Route::delete('/{client}', 'DestroyController')->name('admin.client.destroy');
    });
    Route::group(['namespace' => 'Photo', 'prefix' => 'photo'], function () {
        Route::get('/', 'IndexController')->name('admin.photo.index');
        Route::get('/create', 'CreateController')->name('admin.photo.create');
        Route::get('/{photo}', 'ShowController')->name('admin.photo.show');
        Route::get('/{photo}/edit', 'EditController')->name('admin.photo.edit');
        Route::post('/store', 'StoreController')->name('admin.photo.store');
        Route::patch('/{photo}', 'UpdateController')->name('admin.photo.update');
        Route::delete('/{photo}', 'DestroyController')->name('admin.photo.destroy');
    });
    Route::group(['namespace' => 'Theme', 'prefix' => 'theme'], function () {
        Route::get('/', 'IndexController')->name('admin.theme.index');
        Route::get('/create', 'CreateController')->name('admin.theme.create');
        Route::get('/{theme}', 'ShowController')->name('admin.theme.show');
        Route::get('/{theme}/edit', 'EditController')->name('admin.theme.edit');
        Route::post('/store', 'StoreController')->name('admin.theme.store');
        Route::patch('/{theme}', 'UpdateController')->name('admin.theme.update');
        Route::delete('/{theme}', 'DestroyController')->name('admin.theme.destroy');
    });
});
Auth::routes();
Route::group(['namespace' => 'App\Http\Controllers'], function () {
    Route::get('/', 'HomeController')->name('home');
    Route::group(['namespace' => 'Public\Theme', 'prefix' => 'theme'], function(){
        Route::get('/', 'IndexController')->name('public.theme.index');
        Route::get('/{theme}', 'ShowController')->name('public.theme.show');
    });
    Route::group(['namespace' => 'Public\Visit', 'prefix' => 'visit'], function(){
        Route::get('/create', 'CreateController')->name('public.visit.create');
        Route::post('/store', 'StoreController')->name('public.visit.store');
    });
});



<?php

use App\Models\Client;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

//$data = [
//    "full_name" => "Andrej Vasarovskij1",
//    "phone" => "+37128885023",
//    "location" => "LV31",
//    "email" => "andrej.vasarovskij@gmail.com",
//];
//$client = Client::find(1);
////dd($client);
//$client->update($data);
//
//dd('OK');

Auth::routes();
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
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


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

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

try {
    $pages = \TCG\Voyager\Models\Page::all();
    foreach ($pages as $page) {
        Route::get($page->slug, 'TestController@show');
    }
} catch (\Exception $exception) {
    // do nothing
}
try {
    $posts = \TCG\Voyager\Models\Post::all();
    foreach ($posts as $post) {

        Route::get($post->slug, 'TestController@showPost');
    }

} catch (\Exception $exception) {
    // do nothing
}

Route::group(['prefix' => LaravelLocalization::setLocale(),  'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']], function() {
   Route::get('/','HomeController@home');

    Auth::routes();

    Route::get('/home', 'HomeController@home')->name('home');
	Route::get('/blog/view/{id}', 'BlogController@home');
	Route::post('/asking', 'HomeController@asking')->name('asking');
});






//Route::get('sister/index', 'FindSisterController@index')->name('sister_index');
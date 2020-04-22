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

Route::get('/', function () {
    return view('welcome');
});

Route::get('user/profile', 'TestController@profile')->name('profile');

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

Route::get('/', 'HomeController@home');


Route::get('/blog/view/{id}', 'BlogController@home');

Route::get('sister/index', 'FindSisterController@index')->name('sister_index');


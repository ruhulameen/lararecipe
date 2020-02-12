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



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['as'=>'frontend.','namespace'=>'Frontend'], function (){

    Route::get('/', 'HomeController@index')->name('home');
    Route::get('recipe/{slug}','HomeController@details')->name('recipe.details');
    Route::get('/category/{slug}','HomeController@RecipeByCategory')->name('category.recipes');
    Route::get('/tag/{slug}','HomeController@RecipeByTag')->name('tag.recipes');

});

Route::group(['as'=>'admin.','prefix'=>'admin','namespace'=>'Admin','middleware'=>['auth','admin']], function (){
    Route::get('dashboard','DashboardController@index')->name('dashboard');
    /*Route::get('settings','SettingsController@index')->name('settings');
    Route::put('profile-update','SettingsController@updateProfile')->name('profile.update');
    Route::put('password-update','SettingsController@updatePassword')->name('password.update');*/
    Route::resource('tag','TagController');
    Route::resource('category','CategoryController');
    Route::resource('recipe','RecipeController');
    /*Route::get('/pending/post','PostController@pending')->name('post.pending');
    Route::put('/post/{id}/approve','PostController@approval')->name('post.approve');
    Route::get('/favorite','FavoriteController@index')->name('favorite.index');*/
    Route::get('authors','AuthorController@index')->name('author.index');
    /*Route::delete('authors/{id}','AuthorController@destroy')->name('author.destroy');
    Route::get('comments','CommentController@index')->name('comment.index');
    Route::delete('comments/{id}','CommentController@destroy')->name('comment.destroy');
    Route::get('/subscriber','SubscriberController@index')->name('subscriber.index');
    Route::delete('/subscriber/{subscriber}','SubscriberController@destroy')->name('subscriber.destroy');*/
});

Route::group(['as'=>'author.','prefix'=>'author','namespace'=>'Author','middleware'=>['auth','author']], function (){
    Route::get('dashboard','DashboardController@index')->name('dashboard');
    /*Route::get('comments','CommentController@index')->name('comment.index');
    Route::delete('comments/{id}','CommentController@destroy')->name('comment.destroy');
    Route::get('settings','SettingsController@index')->name('settings');
    Route::put('profile-update','SettingsController@updateProfile')->name('profile.update');
    Route::put('password-update','SettingsController@updatePassword')->name('password.update');*/
    Route::resource('recipe','RecipeController');
    /*Route::get('/favorite','FavoriteController@index')->name('favorite.index');*/
});

//
View::composer('Frontend.app',function ($view) {
    $categories = App\Category::orderBy('name', 'ASC')->get();;
    $view->with('categories',$categories);
});


View::composer('Frontend.sidebar',function ($view) {
    $latest_recipes = App\Recipe::published()->take(4)->latest()->get();
    //$featured_recipes = App\Recipe::where('is_featured', 1)->published()->take(3)->latest()->get();
    $view->with('latest_recipes',$latest_recipes /*'featured_recipes',$featured_recipes*/);
});
View::composer('Frontend.sidebar',function ($view) {
    $featured_recipes = App\Recipe::where('is_featured', 1)->published()->take(3)->latest()->get();
    $view->with('featured_recipes',$featured_recipes);
});

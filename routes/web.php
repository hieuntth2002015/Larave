<?php

use Illuminate\Support\Facades\DB;
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
Route::get('home','HomeController@showWelcome');
//Route::get('about','AboutController@showDetails');
Route::get('Profile/{name}', 'ProfileController@showProfile');
Route::get('/', function () {
return view('welcome');
});

//Route::get('about',function (){
//   return 'About Content';
//});

Route::get('about/directions', function () {
    return 'Directions go here';
});

Route::any('submit-form', function () {
    return 'Process Form';
});

Route::get('about/{theSubject}','AboutController@showSubject');

Route::get('about/class/{theSubject}',function ($theSubject){
    return $theSubject.' content goes here';
});


Route::get('about/class/{theArt}/{thePrice}', function ($theArt,$thePrice){
    return "The product: $theArt and $thePrice";
});

Route::get('where', function () {
   return Redirect::to('about/directions');
});

Route::get('/insert', function () {
    DB::insert('insert into posts(title,body) values (?,?)', ['PHP with Laravel','Laravel is the best framework !']);
    return 'DONE';
});
Route::get('/read', function() {
    $result = DB::select('select * from posts where id = ?', [1]);
    //return $result;
    foreach ($result as $post) {
        return $post->title;
    }
});

Route::get('update', function(){
    $updated = DB::update('update posts set title= "New Title hihi" where id> ?',[1]);
    return $updated;
});

Route::get('delete', function () {
    $deleted = DB::delete('delete from posts where id = ?',[3]);
    return $deleted;
});

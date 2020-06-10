<?php

use Illuminate\Support\Facades\Route;
use App\User;
use App\Photos;
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
        $models = User::where('is_admin',NULL)->where('is_model',1)->get();
        $photos = Photos::get('user_imgs');
        return view('home')->with('models',$models)->with(['photos'=>$photos]);

});

Auth::routes();

Route::get('/admin/home', 'Admin\DemandeController@demande')->name('admin.home')->middleware('is_admin');
Route::post('/user/addphoto/' ,'PhotoController@store');
Route::delete('/admin/deleteModels/{id}', 'Admin\DemandeController@demandeDelete');
Route::delete('/user/img/{phnom}', 'PhotoController@dlt');
Route::put('/admin/updateModels/{id}', 'Admin\DemandeController@demandeUpdate');
Route::resource('/Models', 'ModelsController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

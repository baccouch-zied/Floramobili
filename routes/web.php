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


Route::get('/about', function () {
    return view('front.about');
});
Route::get('/about','aboutController@index');
Route::get('/NosCategories','nosCategoriesController@index');

Route::get('/galleries','GalerieFrontController@index');
Route::get('/faqs','FaqFrontController@index');


Route::get('/categories','categoriesController@index');
Route::get('/categories/{id}','categoriesController@affCategorie');


Route::get('/produits','SeulProduit@index');
Route::get('/produits/{id}','SeulProduit@affProduit');


/*Route::get('/contact', function () {
    return view('front.contact');
});*/
Route::get('/contact','ContactController@index');
Route::post('/contact','ContactController@store');

Route::get('/','NewController@index');

Route::get('/dash', function () {
    return view('back.index');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware' =>['auth','admin']], function(){

    Route::get('/dash','dashController@index');

    Route::resource('produit','ProduitController');


    Route::resource('galerie','GalerieController');
    Route::resource('faq','FaqController');
    Route::resource('slider','SliderController');

    Route::resource('categorie','CategorieController');
    Route::resource('listeContact','ListContactController');


});
    


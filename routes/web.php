<?php

use App\Http\Controllers\SiteParty;
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
Route::get('/teste', 'ProdutosController@exibirProduto');
Route::post('/adminProdutos/create', 'ProdutosController@store');
Route::get('/adminProdutos/create', 'ProdutosController@create');
Route::get('/adminProdutos', 'ProdutosController@index');
Route::get('/adminProdutos/edit/{id}', 'ProdutosController@edit');
Route::put('/adminProdutos/edit/{id}', 'ProdutosController@update');
Route::delete('/adminProdutos/{id}', 'ProdutosController@destroy');

//Route::get('/', 'SiteParty@index')->name('home');

Route::get('/login', 'SiteParty@login')->name('login');

Route::get('/faq', 'SiteParty@faq')->name('faq');

Route::get('/produto-individual/{id}', 'SiteParty@produtoIndividual')->name('produtoIndividual');

Route::get('/produtos', 'SiteParty@produtos')->name('produtos');

Route::get('/produtos/{id}', 'SiteParty@produtoIndividual')->name('produtoIndividual');

Route::get('/registro', 'SiteParty@registro')->name('registro');

Route::get('/sobre-nos', 'SiteParty@sobreNos')->name('sobreNos');

Route::get('/alimentos', 'SiteParty@alimentos')->name('alimentos');

Auth::routes();

Route::get('/home', 'SiteParty@index')->name('home');

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

Route::get('/', 'PrincipalController@principal')->name('site.index');

Route::get('/sobreNos', 'SobreNosController@sobreNos')->name('site.sobreNos');

Route::get('/contato', 'ContatoController@contato')->name('site.contato');

// Route::get('/{parametro1}/{parametro_id?}', function(String $parametro1, int $parametro_id = 1) {
//     echo $parametro1.' '. $parametro_id; 
// })->where('parametro_id', '[0-9]+');

Route::get('/login', function() {
    return 'Login';
})->name('site.login');

Route::prefix('/app')->group(function() {
    Route::get('/cliente', function() {
        return 'Cliente';
    });
    
    Route::get('/fornecedor', function() {
        return 'Fornecedor';
    });
    
    Route::get('/produto', function() {
        return 'Produto';
    });

});

Route::fallback(function() {
    echo 'URL não encontrada!';
});
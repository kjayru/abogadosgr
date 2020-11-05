<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

/*
 *  Set up locale and locale_prefix if other language is selected
 */
/*
if (in_array(Request::segment(1), Config::get('app.alt_langs'))) {

    App::setLocale(Request::segment(1));
    Config::set('app.locale_prefix', Request::segment(1));
}


Route::group(array('prefix' => Config::get('app.locale_prefix')), function()
{

    Route::get('/',[HomeController::class, 'index']);


    Route::get('/{contacts}/',[HomeController::class, 'nosotros'])->where('contacts', Lang::get('routes.contacts'));


});

*/

Route::redirect('/', '/es', 301);
Route::group(['prefix'=>'{language}'],function(){

    Route::get('/',[HomeController::class, 'index']);
    if(Request::segment(1)=="es"){

        Route::get('nosotros',[HomeController::class, 'nosotros'])->name('nosotros');
        Route::get('areas-de-practica',[HomeController::class, 'areas'])->name('areas');
        Route::get('abogados',[HomeController::class, 'abogados'])->name('abogados');
        Route::get('casos-de-exito',[HomeController::class, 'casos'])->name('casos');
        Route::get('blog',[HomeController::class, 'blog'])->name('blog');
        Route::get('contacto',[HomeController::class, 'contacto'])->name('contacto');

    }
    if(Request::segment(1)=="en"){

        Route::get('about-us',[HomeController::class, 'nosotros'])->name('nosotros');
        Route::get('practice-areas',[HomeController::class, 'areas'])->name('areas');
        Route::get('lawyers',[HomeController::class, 'abogados'])->name('abogados');
        Route::get('success-stories',[HomeController::class, 'casos'])->name('casos');
        Route::get('blog',[HomeController::class, 'blog'])->name('blog');
        Route::get('contact',[HomeController::class, 'contacto'])->name('contacto');

    }

});

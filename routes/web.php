<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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
    return view('index')->name('index');
});

Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');

Route::get('/prices', function () {
    return view('prices');
})->name('prices');

Route::get('/reviews', function () {
    return view('reviews');
})->name('reviews');

Route::get('/aboutMe', function () {
    return view('aboutMe');
})->name('aboutMe');



Route::get('/cosmetics', [MainController::class, 'getCosmetics'])
    ->name('cosmetics');

Route::get('/category/{slug}', [MainController::class, 'getCategory'])
    ->name('category');

Route::get('/product/{slug}', [MainController::class, 'product'])
    ->name('product');

//Route::get('/cosmetics', function () {
//    return view('cosmetics');
//})->name('cosmetics');


Route::group([
    'as' => 'procedure::',
    'prefix' => 'procedure',

], function () {

    Route::get('/clean', function () {
        return view('procedure.clean');
    })->name('clean');

    Route::get('/peel', function () {
        return view('procedure.peel');
    })->name('peel');

    Route::get('/carry', function () {
        return view('procedure.carry');
    })->name('carry');

    Route::get('/acne', function () {
        return view('procedure.acne');
    })->name('acne');

    Route::get('/mask', function () {
        return view('procedure.mask');
    })->name('mask');
});

Route::group([
    'as' => 'inject::',
    'prefix' => 'inject',

], function () {

    Route::get('/botox', function () {
        return view('inject.botox');
    })->name('botox');

    Route::get('/lips', function () {
        return view('inject.lips');
    })->name('lips');

    Route::get('/mezo', function () {
        return view('inject.mezo');
    })->name('mezo');
});

Route::group([
    'as' => 'massage::',
    'prefix' => 'massage',

], function () {

    Route::get('/classic', function () {
        return view('massage.classic');
    })->name('classic');

    Route::get('/dance', function () {
        return view('massage.dance');
    })->name('dance');

    Route::get('/jake', function () {
        return view('massage.jake');
    })->name('jake');

    Route::get('/plastic', function () {
        return view('massage.plastic');
    })->name('plastic');
});

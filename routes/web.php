<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;

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


// Page Start (Halaman Awal)
Route::get('/',[HomeController::class, 'index']);

// Route Prefix (product)
Route::prefix('www.educastudio.com/category/')->group(function () {
    Route::get('marbel-edu-games', function () {
    // Matches The "/admin/users" URL
        return "Halaman marbel-edu-games";
    });

    Route::get('marbel-and-friends-kids-games', function () {
        // Matches The "/admin/users" URL
        return "marbel-and-friends-kids-games";
    });

    Route::get('riri-story-books', function () {
    // Matches The "/admin/users" URL
    return "riri-story-books";
    });

    Route::get('kolak-kids-songs', function () {
        // Matches The "/admin/users" URL
        return "kolak-kids-songs";
    });
});

// Route Parameter (News)
Route::get('www.educastudio.com/news', function ($name = 'news') {
    return $name;
});

Route::get('www.educastudio.com/news/{name?}', function ($name = 'educa-studio-berbagi-untuk-warga-sekitar-terdampak-covid-19') {
    return $name;
});


// Route Prefix (Program)
Route::prefix('www.educastudio.com/program/')->group(function () {
    Route::get('karir', function () {
    // Matches The "/admin/users" URL
        return "Halaman Program Karir";
    });

    Route::get('magang', function () {
        // Matches The "/admin/users" URL
        return "Halaman Program magang";
    });

    Route::get('kunjungan-industri', function () {
    // Matches The "/admin/users" URL
    return "Halaman Program kunjungan industri";
    });

});

// Route Normal (About)
Route::get('www.educastudio.com/about-us', function () {
    echo 'Halaman about';
});    

// Route Resource (Contact)
Route::resource('www.educastudio.com/contact-us',ContactController::class, ['only' => ['index']]);

?>
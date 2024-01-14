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
    $link = [
    'links' => [
        "home",
        "comic",
        "MOVIES",
        "TV",
        "GAMES",
        "COLLECTIBLES",
        "VIDEOS",
        "FANS",
        "NEWS",
        "shop"
    ]
    ];

    return view('home', $link);
})->name('home');

Route::get('/home', function () {
    $link = [
    'links' => [
        "home",
        "comic",
        "MOVIES",
        "TV",
        "GAMES",
        "COLLECTIBLES",
        "VIDEOS",
        "FANS",
        "NEWS",
        "shop"
    ]
    ];

    return view('home', $link);
})->name('home');

Route::get('/comic', function () {
    $comics = config('db.comics');
    $link = [
        'links' => [
            "home",
            "comic",
            "MOVIES",
            "TV",
            "GAMES",
            "COLLECTIBLES",
            "VIDEOS",
            "FANS",
            "NEWS",
            "shop"
        ]
        ];
        return view('comic', compact ('comics'), $link);
})->name('comic');

Route::get('/shop', function () {
    $link = [
        'links' => [
            "home",
            "comic",
            "MOVIES",
            "TV",
            "GAMES",
            "COLLECTIBLES",
            "VIDEOS",
            "FANS",
            "NEWS",
            "shop"
        ]
        ];
    return view('shop', $link);
})->name('shop');



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

    $data = [
        
        'navLinks' => [
            'CHARACTERS',
            'COMICS',
            'MOVIES',
            'TV',
            'GAMES',
            'COLLECTIBLES',
            'VIDEOS',
            'FANS',
            'NEWS',
            'SHOP'
        ],

        'dcComicsLinks' => [
            'Characters',
            'Comix',
            'Movies',
            'TV',
            'Games',
            'Videos',
            'News',
        ],

        'dcLinks' => [
            'Terms Of Use',
            'Privacy policy (New)',
            'Ad Choices',
            'Advertising',
            'Jobs',
        ],
        
        'siteLinks' => [
            'Terms Of Use',
            'Privacy policy (New)',
            'Ad Choices',
            'Advertising',
            'Jobs',
        ],

        'shopLinks' => [
            'Terms Of Use',
            'Privacy policy (New)',
            'Ad Choices',
            'Advertising',
            'Jobs',
        ],

    ];

    return view('home', $data);
}) -> name('home');

Route::get('/comics', function () {
    $comics = config('comics');
    $mainNavLinks = config('mainNavLinks');
    $data = [
        'comics' => $comics,
        'mainNavLinks' => $mainNavLinks,
        
        'navLinks' => [
            'CHARACTERS',
            'COMICS',
            'MOVIES',
            'TV',
            'GAMES',
            'COLLECTIBLES',
            'VIDEOS',
            'FANS',
            'NEWS',
            'SHOP'
        ],

        'dcComicsLinks' => [
            'Characters',
            'Comix',
            'Movies',
            'TV',
            'Games',
            'Videos',
            'News',
        ],

        'dcLinks' => [
            'Terms Of Use',
            'Privacy policy (New)',
            'Ad Choices',
            'Advertising',
            'Jobs',
        ],
        
        'siteLinks' => [
            'Terms Of Use',
            'Privacy policy (New)',
            'Ad Choices',
            'Advertising',
            'Jobs',
        ],

        'shopLinks' => [
            'Terms Of Use',
            'Privacy policy (New)',
            'Ad Choices',
            'Advertising',
            'Jobs',
        ],

    ];
    return view('comics', $data);
}) -> name('comics');

Route::get('/characters', function () {

    $data = [
        
        'navLinks' => [
            'CHARACTERS',
            'COMICS',
            'MOVIES',
            'TV',
            'GAMES',
            'COLLECTIBLES',
            'VIDEOS',
            'FANS',
            'NEWS',
            'SHOP'
        ],

        'dcComicsLinks' => [
            'Characters',
            'Comix',
            'Movies',
            'TV',
            'Games',
            'Videos',
            'News',
        ],

        'dcLinks' => [
            'Terms Of Use',
            'Privacy policy (New)',
            'Ad Choices',
            'Advertising',
            'Jobs',
        ],
        
        'siteLinks' => [
            'Terms Of Use',
            'Privacy policy (New)',
            'Ad Choices',
            'Advertising',
            'Jobs',
        ],

        'shopLinks' => [
            'Terms Of Use',
            'Privacy policy (New)',
            'Ad Choices',
            'Advertising',
            'Jobs',
        ],

    ];

    return view('characters', $data);
}) -> name('characters');


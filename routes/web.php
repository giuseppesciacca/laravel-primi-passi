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
    $title = 'Hello World';

    return view('Home', compact('title'));
})->name('home');

Route::get('/about', function () {
    $title = 'This is About page';

    return view('about', compact('title'));
})->name('about');

Route::get('/ourMission', function () {
    $data = [
        'title' => 'This is our Mission',
        'presentation' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minima perferendis voluptates error. Optio culpa aliquam ad similique, ullam eum maxime ex voluptatum ipsum natus, pariatur exercitationem officiis deserunt esse? Nulla.lorem. Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores autem distinctio quam, dolor sapiente aut deserunt ipsam sint, consequuntur expedita veniam fugit molestiae soluta minus quia exercitationem reprehenderit accusantium illum.'
    ];

    return view('ourMission', $data);
})->name('ourMission');

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
    $title= 'Hello World';
    $subtitle= 'Laravel first steps';

    $university_db= [
        'name' => 'University',
        'degrees' => 'Corso di Laurea in Biologia, Corso di Laurea in Biologia molecolare, Corso di Laurea in Biotecnologie',
        'departments' => "Biologia, Fisica e astronomia, Ingegneria dell'informazione",
        'teachers' => 'Artemide Rizzi, Gianantonio Battaglia, Erminia Gatti',
        'students' => 'Nico Bianco, Rocco Serra, Miriana Conte'
    ];

    return view('home', $university_db, compact('title', 'subtitle'));
});

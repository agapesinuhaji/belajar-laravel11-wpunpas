<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about', [
        'nama' => 'Agape Manase Sinuhaji',
    ]);
});

// Tugas
// Buat 2 Route Baru
// 1. /blog
// 2 buah artikel, judul dan isi
// 2. /contact
// email, social media

Route::get('/blog', function () {
    return view('blog', [
        'judul1' => 'Blog Pertama',
        'isi1' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi explicabo ipsum, dolores eligendi optio atque odio aspernatur, minima ratione distinctio temporibus? Neque deserunt accusantium laboriosam expedita provident placeat veniam soluta!', 
        'judul2' => 'Blog Kedua',
        'isi2' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi explicabo ipsum, dolores eligendi optio atque odio aspernatur, minima ratione distinctio temporibus? Neque deserunt accusantium laboriosam expedita provident placeat veniam soluta!',  
    ]);
});

Route::get('/contact', function() {
    return view('contact');
});
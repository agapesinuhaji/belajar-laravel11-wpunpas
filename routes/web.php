<?php

use App\Models\Post;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', [
        'nama' => 'Agape Manase Sinuhaji',
        'title' => 'About'
    ]);
});

// Tugas
// Buat 2 Route Baru
// 1. /blog
// 2 buah artikel, judul dan isi
// 2. /contact
// email, social media

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog','posts' => Post::all()]);
});

Route::get('posts/{slug}', function($slug) {
   

    $post = Post::find($slug);

    return view('post', ['title' => 'Single Post', 'post' => $post]);
    
});

Route::get('/contact', function() {
    return view('contact', ['title' => 'Contact']);
});
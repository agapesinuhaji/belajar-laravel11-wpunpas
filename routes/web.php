<?php

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
    return view('posts', ['title' => 'Blog','posts' =>[
        [
            'id' => '1',
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Agape Manase Sinuhaji',
            'body'=> 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae aspernatur dolores, labore cum amet repellat minus, sed eveniet illo id illum qui ex enim optio aliquid suscipit provident pariatur cupiditate.',
        ],
        [
            'id' => '2',
            'title' => 'Judul Artikel 2',
            'slug' => 'judul-artikel-2',
            'author' => 'Agape Manase Sinuhaji',
            'body'=> 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae aspernatur dolores, labore cum amet repellat minus, sed eveniet illo id illum qui ex enim optio aliquid suscipit provident pariatur cupiditate. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae aspernatur dolores, labore cum amet repellat minus, sed eveniet illo id illum qui ex enim optio aliquid suscipit provident pariatur cupiditate.',
        ]
    ]]);
});

Route::get('posts/{slug}', function($slug) {
    $posts = [
        [
            'id' => '1',
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Agape Manase Sinuhaji',
            'body'=> 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae aspernatur dolores, labore cum amet repellat minus, sed eveniet illo id illum qui ex enim optio aliquid suscipit provident pariatur cupiditate.',
        ],
        [
            'id' => '2',
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Agape Manase Sinuhaji',
            'body'=> 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae aspernatur dolores, labore cum amet repellat minus, sed eveniet illo id illum qui ex enim optio aliquid suscipit provident pariatur cupiditate. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae aspernatur dolores, labore cum amet repellat minus, sed eveniet illo id illum qui ex enim optio aliquid suscipit provident pariatur cupiditate.',
        ],
    ];

    $post = Arr::first($posts, function ($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    return view('post', ['title' => 'Single Post', 'post' => $post]);
    
});

Route::get('/contact', function() {
    return view('contact', ['title' => 'Contact']);
});
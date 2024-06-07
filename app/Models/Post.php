<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    public static function all()
    {
        return [
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
        ];
    }

    public static function find($slug): array 
    {


        $post =  Arr::first(Post::all(), fn($post) => $post['slug'] == $slug);

        if(! $post) {
            abort(404);
        }

        return $post;
    }
}
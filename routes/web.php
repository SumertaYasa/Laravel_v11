<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['nama' => 'Yasa', 'title' => 'About']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'judul artikel 1',
            'author' => 'Yasa',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorum odio eligendi a maxime harum! Odio, placeat sequi? 
                    Eveniet aspernatur reprehenderit, quas iusto explicabo commodi itaque accusantium magnam, debitis, enim quo?'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'judul artikel 2',
            'author' => 'Yasa',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorum odio eligendi a maxime harum! Odio, placeat sequi? 
                    Eveniet aspernatur reprehenderit, quas iusto explicabo commodi itaque accusantium magnam, debitis, enim quo?'
        ]
        ]]);
});

Route::get('/posts/{slug}', function($slug){
    $posts = [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'judul artikel 1',
            'author' => 'Yasa',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorum odio eligendi a maxime harum! Odio, placeat sequi? 
                    Eveniet aspernatur reprehenderit, quas iusto explicabo commodi itaque accusantium magnam, debitis, enim quo?'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'judul artikel 2',
            'author' => 'Yasa',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorum odio eligendi a maxime harum! Odio, placeat sequi? 
                    Eveniet aspernatur reprehenderit, quas iusto explicabo commodi itaque accusantium magnam, debitis, enim quo?'
        ]
    ];
    
    $post = Arr::first($posts, function($post) use ($slug){
        return $post['slug'] == $slug;
    });
    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});

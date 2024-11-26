<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post {
  public static function all(){
      return [
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
  }

  public static function find($slug): array {
    $post = Arr::first(static::all(), fn($post) => $post['slug'] == $slug);
  
    if (!$post) {
      abort(404);
    }

    return $post;
  }
}
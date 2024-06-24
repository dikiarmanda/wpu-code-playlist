<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post
{
  private static $blog_posts = [
    [
      "title" => "Post One",
      "author" => "Diki Armanda",
      "slug" => "post-one",
      "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quidem. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quidem.",
    ],
    [
      "title" => "Post Two",
      "author" => "Diki Armanda",
      "slug" => "post-two",
      "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quidem. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quidem.",
    ],
  ];

  public static function all()
  {
    return collect(self::$blog_posts);
  }

  public static function find($slug)
  {
    $posts = static::all();
    return $posts->firstWhere('slug', $slug);
  }
}

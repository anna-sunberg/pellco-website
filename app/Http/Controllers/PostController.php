<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Image;
use App\Post;

class PostController extends Controller
{
    public function getPost()
    {
        $post =  Post::take(1)
            ->orderBy('created_at', 'desc')
            ->get();


        return $post[0];
    }
}

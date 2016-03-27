<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class MainController extends Controller
{
    public function index(Request $request) {
        $posts = new PostController();
        $items = new ItemController();

        return view('main', [
            'trio' => $posts->getPost(),
            'items' => $items->getAll()
        ]);
    }
}

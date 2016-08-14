<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class MainController extends Controller
{
    public function index(Request $request) {
        $posts = new PostController();
        $items = (new ItemController())->getAll();

        return view('main', [
            'trio' => $posts->getPost(),
            'items' => $items,
            'bag' => $items->where('id', 1)->first(),
            'storage' => $items->where('id', 2)->first()
        ]);
    }
}

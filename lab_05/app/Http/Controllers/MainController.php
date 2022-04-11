<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }


    public function posts() {
        $all_posts = Post::getAll();
        $categories = Category::getAll();
        return view('pages.posts', compact(['all_posts', 'categories']));
    }

    public function addPost() {
        $categories = Category::getAll();
        return view('pages.addPost', compact('categories'));
    }

    public function createPost(Request $request) {
        $categories = Category::getAll();
        Post::createPost($request->category, $request->body, $request->title, $request->author);
        return response()->view('pages.addPost', [
            "categories" => $categories,
            "status" => true
            ], 200);
    }
}

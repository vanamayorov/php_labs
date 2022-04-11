<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;

class PostController extends Controller
{
    public function postsByCategory($category) {
        $all_posts = Post::getByCategory($category);
        $categories = Category::getAll();
        return view('pages.posts', compact(['all_posts', 'categories']));
    }

    public function getPost($id) {
        $post = Post::findPost($id);
        if(is_string($post)) {
            return view('pages.post404', compact('post'));
        }
        return view('pages.post', compact('post'));
    }
}

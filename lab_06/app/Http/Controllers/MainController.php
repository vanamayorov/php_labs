<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Cryptocurrency;
use App\Models\Tag;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    public function cryptos() {
        $cryptos = Cryptocurrency::all();
        return view('pages.cryptos', compact('cryptos'));
    }

    public function categories() {
        $categories = Category::all();
        return view('pages.categories', compact('categories'));
    }

    public function getCryptoById($id) {
        $crypto = Cryptocurrency::find($id);
        return view('pages.crypto', compact('crypto'));
    }

    public function getCryptoByTag($id) {
        $tag = Tag::find($id);
        $cryptos = $tag->cryptocurrencies;
        return view('pages.cryptos', compact(['cryptos', 'tag']));
    }

    public function category($id) {
        $cryptos = Cryptocurrency::where('category_id', $id)->get();
        $category = Category::find($id);
        return view('pages.cryptos', compact(['cryptos', 'category']));
    }
}

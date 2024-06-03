<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;
use App\Models\Category;

class ClientController extends Controller
{
    public function index()
    {
        $hotGames = Game::orderBy('id', 'DESC')->where('hotGame', 1)->get();
        $games = Game::orderBy('id', 'DESC')->get();
        return view('client.welcome', compact(['hotGames', 'games']));
    }

    public function game($slug)
    {
        $game = Game::where('slug', $slug)->first();
        return view('client.game', compact(['game']));
    }

    public function category()
    {
        $categories = Category::orderBy('id', 'ASC')->where('status', 1)->where('deleted', 0)->get();
        return view('client.category', compact(['categories']));
    }

    public function gameByCategory($slug)
    {
        $category = Category::where('slug', $slug)->first();
        $games = $category->Category_Game;
        return view('client.games', compact(['games', 'category']));
    }
}

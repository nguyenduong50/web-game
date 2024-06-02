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
        $game = Game::findOrFail($slug);
        return view('client.game', compact(['game']));
    }

    public function category()
    {
        $categories = Category::orderBy('id', 'ASC')->get();
        return view('client.category', compact(['categories']));
    }

    public function gameByCategory($slug)
    {
        $category = Category::findOrFail($slug);
        $games = $category->Category_Game;
        return view('client.games', compact(['games']));
    }
}

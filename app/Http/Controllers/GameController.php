<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Category;
use App\Models\Category_Game;
use Illuminate\Http\Request;
use Str;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $games = Game::orderBy('id', 'ASC')->get();
        return view('admin.game.index', compact(['games']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::orderBy('id', 'ASC')->get();
        return view('admin.game.create', compact(['categories']));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Validate request data

        //Add new Category
        $game = new Game;
        $game->fill($request->all());
        $game->slug = Str::slug($game->name, '-').'-'.Str::random(10);

        //Save Game's thumbnail
        $get_image = $request->thumbnail;
        if($get_image)
        {
            $path = 'img/games/';
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image = $name_image.'-'.Str::random(10).'.'.$get_image->getClientOriginalExtension();
            $get_image->move($path,$new_image);
            $game->thumbnail = $new_image;
        }

        $game->save();

        //Save Category by category_id to Category_Game
        $game->Game_Category()->attach($request['category']);


        return redirect('admin/game');
    }

    /**
     * Display the specified resource.
     */
    public function show(Game $game)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $game = Game::findOrFail($id);
        $categories = Category::orderBy('id', 'ASC')->get();
        $category_game = $game->Game_Category;

        return view('admin.game.edit',compact(['game', 'categories', 'category_game']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //Validate request data

        //Update Category
        $game = Game::findOrFail($id);
        $game->fill($request->all());

        //Save Game's thumbnail 
        $get_image = $request->thumbnail;

        if($get_image)
        {
            //Delete old Image
            $path_unlink = 'img/games/'.$game->thumbnail;
            if(file_exists($path_unlink) && $path_unlink !== 'img/games/')
            {
                unlink($path_unlink);
            }
                    
            //Add Image
            $path = 'img/games/';
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image = $name_image.'-'.Str::random(10).'.'.$get_image->getClientOriginalExtension();
            $get_image->move($path,$new_image);
            $game->thumbnail = $new_image;
        }

        $game->save();

        $game->Game_Category()->sync($request['category']);

        return redirect('/admin/game');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $game = Game::findOrFail($request->id);
        
        //Delete category by game
        $game->Game_Category()->detach();

        //Delete thumbnail game
        $path_unlink = 'img/games/'.$game->thumbnail;
        if(file_exists($path_unlink) && $path_unlink !== 'img/games/')
        {
            unlink($path_unlink);
        }

        $game->delete();

        return redirect('admin/game');
    }
}

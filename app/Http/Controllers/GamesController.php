<?php


namespace App\Http\Controllers;


use App\Game;
use App\Http\Requests\CreateGameRequest;

class GamesController extends Controller
{
    public function index() {
        $games = Game::inRandomOrder()
            ->get();

        return view('home', [
            'games' => $games
        ]);
    }

    public function catalog() {
        $games = Game::inRandomOrder()
            ->get();

        return view('catalog', [
            'games' => $games
        ]);
    }

    public function details($gameId) {
        $game = Game::find($gameId);

        return view('details', [
            'game' => $game
        ]);
    }

    public function create()
    {
        return view('game_create');
    }

    public function createPost(CreateGameRequest $request)
    {
        $game = new Game();
        $game->fill($request->all());
        $game->fk_id_user = \Auth::id();

        if ($game->save()) {
            return redirect()->route('web_catalog');
        }
    }
}

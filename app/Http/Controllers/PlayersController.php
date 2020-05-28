<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\CreatePlayerRequest;

use App\Player;
use App\Club;
use App\Country;

use Exception;

class PlayersController extends Controller
{
    function index(){

        $players = Player::with('clubs','country')->get();

        return \view('pages.players.index', [
            'players' => $players
        ]);
    }

    function show(Player $player){

        return \view('pages.players.show', [
            'player' => $player,
        ]);
    }

    function create(){

        return \view('pages.players.create', [
            'clubs' => Club::get(),
            'countries' => Country::get(),
            'route' => \route('players.store')
        ]);
    }

    function store(CreatePlayerRequest $request){

        $fields = [
            'name' => $request->get('name'),
            'last_name' => $request->get('last_name'),
            'matches' => $request->get('matches'),
            'goals' => $request->get('goals'),
            'country_id' => $request->get('country_id')
        ];

        //TODO:
        $clubs = $request->get('clubs');
        foreach($clubs as $id => $club){
            $clubs[$id] = ['started_on' => '2000-01-01'];
        }

        try {
            $player = Player::create($fields);
            $player->clubs()->sync($clubs);
        } catch(Exception $e){
            \session()->flash('status', 'There was a problem when creating a new player: '.$e->getMessage());
            return \redirect()->back()->withInput($request->input());
        }

        \session()->flash('status', 'Player successfully created!');

        return \redirect( \route('players.show', [
            'player' => $player->id
        ]) );

    }

}

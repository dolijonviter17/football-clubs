<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Club;
use App\Models\Player;
use DataTables;
class PlayersController extends Controller
{
    public function index(Request $request){
        if ($request->ajax()) {
            $players = Player::with('club')->select('players.*');
            return DataTables::eloquent($players)
            ->addColumn('club', function($player) {
                return $player->club ? $player->club->name : 'none';
            })
            ->make(true);
        }
        return view('players.index');
    }
}

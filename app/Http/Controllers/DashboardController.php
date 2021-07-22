<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Player;
use App\Models\Club;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    function __construct(){
        $this->middleware(['auth']);
    }
    public function index(Request $request)
    {
        $term = $request->term;
        $userId = Auth::user()->id;
        $club = Club::where('user_id', $userId)->get();
        $players = Player::where('club_id', $userId)
        ->where('name','like',"%".$term."%")
        ->orderBy('id', 'desc')
        ->paginate(7);
        return view('dashboard', compact('players', 'club'));
    }

    public function create()
    {
        $position = array('GK', 'CB', 'LB', 'RB', 'DMF', 'RM', 'LW', 'ST', 'RW');
        return view('player.create', array('position' => $position));
        // auth()->club()->player()->create();
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'position' => 'required|max:255',
            'height' => 'required|max:255',
            'profile' => 'required'
        ]);
        $playerProfile = $request->profile;
        if ($playerProfile) {
            $profile_path = $playerProfile->store('profile-profile', 'public'); 
        }
        $userId = Auth::user()->id;
        $club = Club::find($userId);
        $club->players()->create([
            'name' => $request->name,
            'position' => $request->position,
            'height' => $request->height,
            'photo' => $profile_path,
        ]);
        return redirect()->route('dashboard');
       



    }

    
}

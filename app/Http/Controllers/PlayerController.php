<?php

namespace App\Http\Controllers;
use App\Models\Player;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    public function __construct()
  {
    $this->middleware('auth');
  }
  
    public function show ($id) {

        $player = Player::find($id);

        return view('players.show', compact('player'));

    }

}

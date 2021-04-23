<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use App\Http\Requests\CommentRequest;

class CommentController extends Controller
{

    public function __construct() {
        $this->middleware('auth');
    }

    public function store(Team $team, CommentRequest $request)
    {
        $data = $request->validated();
        $data['user_id'] = auth()->id();
        $team->comments()->create($data);
        return back();
    }
}

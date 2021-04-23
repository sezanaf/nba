@extends('layouts.app')

@section("title", "NBA Teams")

@section('content')
    @foreach ($teams as $team)
        <div>
          <h2><a href="{{ route('team', ['team' => $team->id]) }}">{{ $team->name }}</a></h2>
        </div>
    @endforeach
@endsection


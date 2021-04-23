@extends('layouts.app')

@section('title', $team->name)

@section('content')
    <div>
      <h2>{{ $team->name }}</h2>
      <p><strong>Email: </strong><a href="mailto:{{ $team->email }}">{{ $team->email }}</a></p>
      <p><strong>Address:</strong> {{ $team->address }}</p>
      <p><strong>City:</strong> {{ $team->city }}</p>
      <p><strong>Players:</strong></p>
      <ul>
          @foreach ($team->players as $player)
              <li>
                  <a href="{{ route('player', ['player' => $player->id]) }}">{{ $player->first_name }} {{ $player->last_name }}</a>
              </li>
          @endforeach
      </ul>
    </div>
@endsection

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

      <ul>
        @forelse ($team->comments as $comment)
            <li>
                <p>
                    {{ $comment->content }} 
                </p>
                <p>
                    by {{ $comment->user->name }}
                </p>
            </li>
            @empty
                <span>No comments</span>
            @endforelse
        </ul>

    <h2>Leave a comment</h2>

    <form action="/teams/{{$team->id}}/comments" method="POST">
    @csrf
    <div class="form-group">
        <label for="content">Your Comment:</label>
        <textarea name="content" class="form-control" id="content" rows="3" placeholder="Enter Comment Here"></textarea>
    </div>
    @error('content')
    <div class="alert alert-danger">{{$message}}</div>
    @enderror
    <button type="submit" class="btn btn-primary">Submit Comment</button>
</form>
    </div>
@endsection

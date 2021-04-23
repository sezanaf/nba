@extends('layouts.app')

@section('title', 'Login')

@section('content')
<form action="/login" method="POST">
@csrf
  <div class="form-group">
    <label for="email">Email</label>
    <input
      type="email" 
      class="form-control @error('email') is-invalid @enderror" 
      id="email"
      aria-describedby="emailHelp"
      placeholder="Enter email"
      name="email" required>
    @error('email')
      <div class="alert alert-danger">{{$message}}</div>
    @enderror
  </div>

  <div class="form-group">
    <label for="password">Password</label>
    <input
      type="password" 
      class="form-control @error('password') is-invalid @enderror" 
      id="password"
      aria-describedby="passwordHelp"
      placeholder="Enter password"
      name="password" required>
    @error('password')
      <div class="alert alert-danger">{{$message}}</div>
    @enderror
  </div>
  @if($invalid_credentials ?? false)
    <div class="alert alert-danger">Invalid credentials</div>
  @endif
  <button type="submit" class="btn btn-primary">Login</button>
</form>
@endsection
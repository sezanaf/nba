<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="/teams">
      VIVIFY NBA
    </a>
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="/teams">Teams</a>
      </li>
      @auth
        <li class="nav-item">
          <strong> Username: {{ auth()->user()->name }} </strong>
        </li>
        <li class="nav-item">
          <form action="/logout" method="POST">
            @csrf
            <button type="submit" class="btn btn-link">Logout</button>
          </form>
        </li>
      @else
        <li class="nav-item">
          <a class="nav-link" href="/login">Sign in</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/register">Sign up</a>
        </li>
      @endauth
    </ul>
  </div>
</nav>

<!-- <style>
  .navbar-nav {
    flex-direction: row !important;
    align-items: center;
  }
  .nav-item {
    display: flex;
    align-items: center;
    margin-left: 15px;
    text-transform: capitalize
  }
</style> -->
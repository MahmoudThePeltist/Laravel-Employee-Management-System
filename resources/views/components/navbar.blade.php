
<nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-2">
  <a class="navbar-brand col-sm-3 col-md-2 mr-0 ml-3" href="#">ION Tel</a>

  <ul class="navbar-nav px-3">
    @auth
      
      <li class="nav-item">
        {{ Auth::user()->name }}
      </li>
      <li class="nav-item text-nowrap">

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="btn btn-outline-secondary">Log out</button>
        </form>

      </li>

    @endauth

    @guest
      <div class="nav-item btn-group" role="group">

        <a class="btn btn-outline-secondary" href="{{ route('login') }}">Log in</a>

        <a class="btn btn-outline-secondary" href="{{ route('register') }}">Register</a>

      </div>

    @endguest
  </ul>
</nav>

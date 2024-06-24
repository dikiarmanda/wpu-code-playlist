<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
  <div class="container">
    <a class="navbar-brand" href="/">UMSIDA.dev</a>
    <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" type="button"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mb-lg-0 mb-2 me-auto">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('home') ? 'active' : '' }}" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('about') ? 'active' : '' }}" href="/about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('categories') ? 'active' : '' }}" href="/categories">Categories</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('posts') ? 'active' : '' }}" href="/posts">Blog</a>
        </li>
      </ul>

      <ul class="navbar-nav">
        @auth
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
              data-bs-toggle="dropdown" aria-expanded="false">
              Welcome back, {{ auth()->user()->name }}
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">
                  <i class="bi bi-layout-text-sidebar-reverse"></i> Dashboard</a>
              </li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li>
                <form action="/logout" method="post">
                  @csrf
                  <button type="submit" class="dropdown-item">
                    <i class="bi bi-box-arrow-right"></i> Logout</button>
                </form>
              </li>
            </ul>
          </li>
        @else
          <li class="nav-item">
            <a class="nav-link {{ Request::is('login') ? 'active' : '' }}" href="/login">
              <i class="bi bi-box-arrow-left"></i> Login
            </a>
          </li>
        @endauth
      </ul>
    </div>
  </div>
</nav>

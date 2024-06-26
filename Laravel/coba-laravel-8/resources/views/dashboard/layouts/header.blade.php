<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow" data-bs-theme="dark">
  <a class="navbar-brand col-md-3 col-lg-2 fs-6 me-0 px-3 text-white" href="#">UMSIDA.dev Blog</a>
  <div id="navbarSearch" class="navbar-search collapse flex-fill">
    <input class="form-control w-100 rounded-0 border-0" type="text" placeholder="Search" aria-label="Search">
  </div>
  <ul class="navbar-nav flex-row">
    <li class="nav-item text-nowrap">
      <button class="nav-link px-3 text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSearch"
        aria-controls="navbarSearch" aria-expanded="false" aria-label="Toggle search">
        <i class="bi bi-search"></i>
      </button>
    </li>
    <li class="nav-item d-md-none text-nowrap">
      <button class="nav-link px-3 text-white" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebarMenu"
        aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <i class="bi bi-list"></i>
      </button>
    </li>
    <li class="nav-item text-nowarp">
      <form action="/logout" method="post">
        @csrf
        <button type="submit" class="nav-link text-nowarp border-0 px-3 text-white">
          Logout <i class="bi bi-box-arrow-right text-white"></i>
        </button>
      </form>
    </li>
  </ul>
</header>

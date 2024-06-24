<div class="sidebar border-right col-md-3 col-lg-2 bg-body-tertiary border p-0">
  <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu"
    aria-labelledby="sidebarMenuLabel">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="sidebarMenuLabel">UMSIDA.dev Blog</h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu"
        aria-label="Close"></button>
    </div>
    <div class="offcanvas-body d-md-flex flex-column pt-lg-3 overflow-y-auto p-0">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link d-flex align-items-center text-dark {{ Request::is('dashboard') ? 'active' : '' }} gap-2"
            aria-current="page" href="/dashboard">
            <i class="bi bi-house-fill"></i> Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link d-flex align-items-center text-dark {{ Request::is('dashboard/posts*') ? 'active' : '' }} gap-2"
            href="/dashboard/posts">
            <i class="bi bi-file-text"></i> My Posts
          </a>
        </li>
      </ul>

      @can('admin')
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center text-muted mb-1 mt-4 px-3">
          <span>Administrator</span>
        </h6>
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center text-dark {{ Request::is('dashboard/categories*') ? 'active' : '' }} gap-2"
              aria-current="page" href="/dashboard/categories">
              <i class="bi bi-grid"></i> Categories
            </a>
          </li>
        </ul>
      @endcan

    </div>
  </div>
</div>

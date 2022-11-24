<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
  <div class="sidenav-header">
    <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
    <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/argon-dashboard/pages/dashboard.html " target="_blank">
      <img src="/assets/img/logo-ct-dark.png" class="navbar-brand-img h-100" alt="main_logo">
      <span class="ms-1 font-weight-bold">Bjorka</span>
    </a>
  </div>
  <hr class="horizontal dark mt-0">
  <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
    <ul class="navbar-nav">
      <?php if (session()->get('tipe') == 'admin') : ?>
        <li class="nav-item">
          <a class="nav-link " href="/buku">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-books text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Buku</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="/kategori">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-bullet-list-67 text-success text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Kategori</span>
          </a>
        </li>
      <?php endif ?>

      <?php if (session()->get('tipe') == 'staff') : ?>
        <li class="nav-item">
          <a class="nav-link " href="/chart/pie">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-chart-pie-35 text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Pie</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="/chart/line">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-chart-bar-32 text-success text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Line</span>
          </a>
        </li>
      <?php endif ?>
    </ul>
  </div>
</aside>
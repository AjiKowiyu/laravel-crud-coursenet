<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ (Request::segment(1) == 'home') ? 'active' : null }}" aria-current="page" href="{{ route('home') }}">
                    <i class="fa-solid fa-fw fa-house"></i>
                    Home
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ (Request::segment(1) == 'master') ? 'active' : null }}" href="{{ route('master') }}">
                    <i class="fa-solid fa-fw fa-database"></i>
                    Master Data
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ (Request::segment(1) == 'transaksi') ? 'active' : null }}" href="{{ route('transaksi') }}">
                    <i class="fa-solid fa-fw fa-database"></i>
                    Transaksi
                </a>
            </li>
        </ul>
    </div>
</nav>
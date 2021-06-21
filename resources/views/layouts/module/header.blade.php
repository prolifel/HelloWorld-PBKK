<header class="app-header navbar">
    <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
        <span class="navbar-toggler-icon"></span>
    </button>
    {{-- <a class="navbar-brand-full" href="{{ route('marketplace.product') }}" style="font-size: 0.79375rem; padding-left: 10px;"><strong>BUMDes Mina Harapan</strong></a> --}}
    <a class="navbar-brand-full" href="#" style="font-size: 0.79375rem; padding-left: 10px;"><strong>BUMDes Mina Harapan</strong></a>
    <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show">
        <span class="navbar-toggler-icon"></span>
    </button>
    <ul class="nav navbar-nav ml-auto">
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" style="
            padding-right: 10px;">
                <img class="img-avatar" src="{{ asset('assets/images/avatars-admin.png') }}" alt="admin@bootstrapmaster.com">
            </a>
        <div class="dropdown-menu dropdown-menu-right">
            <div class="dropdown-header text-center">
                <strong>Akun</strong>
            </div>
            <div class="divider"></div>
            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                <i class="fa fa-lock"></i> Keluar
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
        </li>
    </ul>
</header>

<nav class="sidebar-nav">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('marketplace.dashboard') }}">
                <i class="nav-icon icon-speedometer"></i> Dashboard
            </a>
        </li>

        <li class="nav-title">MANAJEMEN PRODUK</li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('category.index') }}">
                <i class="nav-icon icon-drop"></i> Kategori
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('product.index') }}">
                <i class="nav-icon icon-drop"></i> Produk
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('reports.index') }}">
                <i class="nav-icon icon-settings"></i> Laporan Pembelian
            </a>
        </li>
    </ul>
</nav>

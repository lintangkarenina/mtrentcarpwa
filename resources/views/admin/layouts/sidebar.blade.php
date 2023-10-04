
<div class="sidebar sidebar-style-2">			
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">

            <ul class="nav nav-primary">
                <li class="nav-item {{ request()->routeIs('Admin-Beranda') ? 'active' : '' }}">
                    <a href="/admin/beranda">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                   
                </li>

                <li class="nav-item {{ request()->routeIs('Testimoni') ? 'active' : '' }}">
                    <a data-toggle="" href="/admin/testimoni">
                        <i class="fa-solid fa-comments"></i>
                        <p>Testimoni</p>
                    </a>
                </li>
                <li class="nav-item {{ request()->routeIs('Rute') ? 'active' : '' }}">
                    <a data-toggle="" href="/admin/rute">
                        <i class="fa-solid fa-route"></i>
                        <p>Rute Perjalanan</p>
                    </a>
                </li>

                <li class="nav-item {{ request()->routeIs('Sewa-Admin', 'Detail') ? 'active' : '' }}">
                    <a data-toggle="collapse" href="#sidebarLayouts">
                        <i class="fa-solid fa-car"></i>
                        <p>Mobil</p>
                        <span class="caret"></span>
                    </a>

                    <div class="collapse {{ request()->routeIs('Sewa-Admin', 'Detail') ? 'show' : '' }}" id="sidebarLayouts">
                        <ul class="nav nav-collapse">
                            <li class="{{ request()->routeIs('Sewa-Admin') ? 'active' : '' }}">
                                <a href="/admin/sewa-admin">
                                    <span class="sub-item">Sewa</span>
                                </a>
                            </li>
                            <li class="{{ request()->routeIs('Detail') ? 'active' : '' }}">
                                <a href="/admin/detail">
                                    <span class="sub-item">Detail</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                {{-- <li class="nav-item {{ request()->routeIs('Blog') ? 'active' : '' }}">
                    <a href="/admin/blog-kami">
                        <i class="fas fa-pen-square"></i>
                        <p>Blog</p>
                    </a>
                </li> --}}

                <li class="nav-item {{ request()->routeIs('Kontak-Kami') ? 'active' : '' }}">
                    <a data-toggle="" href="/admin/kontak-kami">
                        <i class="fa-solid fa-address-book"></i>
                        <p>Kontak</p>
                    </a>
                </li>

                <li class="nav-item {{ request()->routeIs('User') ? 'active' : '' }}">
                    <a data-toggle="" href="/admin/user">
                        <i class="fa-solid fa-user"></i>
                        <p>Pengguna</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
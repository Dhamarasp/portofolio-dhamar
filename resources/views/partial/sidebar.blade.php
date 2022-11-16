    <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/admin/dashboard">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fab fa-d-and-d-beyond"></i>
            </div>
            <div class="sidebar-brand-text mx-3">Dhamar</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item @if(Request::is('admin/dashboard')) active @endif">
            <a class="nav-link" href="/admin/dashboard">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <li class="nav-item @if(Request::is('admin/mastersiswa*')) active @endif">
            <a class="nav-link" href="/admin/mastersiswa">
                <i class="fas fa-fw fa fa-user"></i>
                <span>Master Siswa</span>
            </a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <li class="nav-item @if(Request::is('admin/masterproject*')) active @endif">
            <a class="nav-link" href="/admin/masterproject">
                <i class="fas fa-fw fa fa-briefcase"></i>
                <span>Master Project</span>
            </a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <li class="nav-item @if(Request::is('admin/masterkontak*', 'admin/jeniskontak*')) active @endif">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa fa-phone-alt"></i>
                <span>Master Kontak</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="/admin/masterkontak">Kontak</a>
                    <a class="collapse-item" href="/admin/jeniskontak">Jenis Kontak</a>
                </div>
            </div>
        </li>

        <hr class="sidebar-divider">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>

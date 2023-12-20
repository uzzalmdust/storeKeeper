<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="#" class="logo logo-dark mt-2">
            <span class="logo-sm">
                <img src="{{ asset('assets') }}/images/logo-sm.png" alt="" height="22" />
            </span>
            <span class="logo-lg">
                <h1 class="text-primary"> Dashboard</h1>
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
            id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">
            <div id="two-column-menu"></div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ route('products.index') }}">
                        <i data-feather="home" class="icon-dual"></i>
                        <span data-key="t-dashboards">Products</span>
                    </a>

                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ route('transaction') }}">
                        <i data-feather="home" class="icon-dual"></i>
                        <span data-key="t-dashboards">For Sale</span>
                    </a>

                </li>
                <!-- end Dashboard Menu -->
                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ route('history') }}">
                        <i data-feather="grid" class="icon-dual"></i>
                        <span data-key="t-apps">Transactions</span>
                    </a>
                </li>



            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>
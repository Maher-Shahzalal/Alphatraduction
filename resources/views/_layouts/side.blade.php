<header class="header-mobile d-block d-lg-none">
    <div class="header-mobile__bar">
        <div class="container-fluid">
            <div class="header-mobile-inner">
                <a class="logo" href="#">
                    <img src="{{ url('assets/images/icon/log.png') }}" alt="Cool Admin" />
                </a>
                <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                </button>
            </div>
        </div>
    </div>
    <nav class="navbar-mobile">
        <div class="container-fluid">
            <ul class="navbar-mobile__list list-unstyled">
                <li>
                    <a href="/admin_home">
                        <i class="fas fa-tachometer-alt"></i>{{ __('admin.Dashboard') }}</a>
                </li>
                <li>
                    <a href="/admin_home/show_users">
                        <i class="fas fa-chart-bar"></i>{{ __('admin.Show all users') }}</a>
                </li>
                <li>
                    <a href="/admin_home/show_orders">
                        <i class="fas fa-table"></i>{{ __('admin.Show all orders') }}</a>
                </li>
                <li>
                    <a href="/admin_home/upload_pdf">
                        <i class="far fa-check-square"></i>{{ __('admin.Upload PDF file') }}</a>
                </li>
                <li>
                    <a href="/admin_home/show_pdf">
                        <i class="fas fa-calendar-alt"></i>{{ __('admin.Show PDF file') }}</a>
                </li>
                <li>
                    <a href="/admin_home/upload_media">
                        <i class="fas fa-copy"></i>{{ __('admin.Publish Media') }}</a>
                </li>
                <li>
                    <a href="/admin_home/show_media">
                        <i class="fas fa-desktop"></i>{{ __('admin.Show Media') }}</a>
                </li>
            </ul>
        </div>
    </nav>
</header>



<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
            <img src="{{ url('assets/images/icon/log.png') }}" alt="Cool Admin" />
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
    <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <li>
                    <a href="/admin_home">
                        <i class="fas fa-tachometer-alt"></i>{{ __('admin.Dashboard') }}</a>
                </li>
                <li>
                    <a href="/admin_home/show_users">
                        <i class="fas fa-chart-bar"></i>{{ __('admin.Show all users') }}</a>
                </li>
                <li>
                    <a href="/admin_home/show_orders">
                        <i class="fas fa-table"></i>{{ __('admin.Show all orders') }}</a>
                </li>
                <li>
                    <a href="/admin_home/upload_pdf">
                        <i class="far fa-check-square"></i>{{ __('admin.Upload PDF file') }}</a>
                </li>
                <li>
                    <a href="/admin_home/show_pdf">
                        <i class="fas fa-calendar-alt"></i>{{ __('admin.Show PDF file') }}</a>
                </li>
                <li>
                    <a href="/admin_home/upload_media">
                        <i class="fas fa-copy"></i>{{ __('admin.Publish Media') }}</a>
                </li>
                <li>
                    <a href="/admin_home/show_media">
                        <i class="fas fa-desktop"></i>{{ __('admin.Show Media') }}</a>
                </li>
            </ul>
    </nav>
    </div>
</aside>


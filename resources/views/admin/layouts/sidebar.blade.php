<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('admin') }}">PT BPS</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('admin') }}">BPS</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Admin Area</li>
            <li class="{{ Request::routeIs('admin') ? 'active' : '' }}"><a class="nav-link"
                    href="{{ route('admin') }}">
                    <i class="far fa-square"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="{{ Request::routeIs('slider.*') ? 'active' : '' }}"><a class="nav-link"
                    href="{{ route('slider.index') }}">
                    <i class="far fa-square"></i>
                    <span>Slider</span>
                </a>
            </li>
            <li class="{{ Request::routeIs('unit.*') ? 'active' : '' }}"><a class="nav-link"
                    href="{{ route('unit.index') }}">
                    <i class="far fa-square"></i>
                    <span>Unit Usaha</span>
                </a>
            </li>
            <li class="{{ Request::routeIs('partner.*') ? 'active' : '' }}"><a class="nav-link"
                    href="{{ route('partner.index') }}">
                    <i class="far fa-square"></i>
                    <span>Partner</span>
                </a>
            </li>
            <li class="{{ Request::routeIs('about.*') ? 'active' : '' }}"><a class="nav-link"
                    href="{{ route('about.index') }}">
                    <i class="far fa-square"></i>
                    <span>Tentang</span>
                </a>
            </li>
            <li class="{{ Request::routeIs('gallery.*') ? 'active' : '' }}"><a class="nav-link"
                    href="{{ route('gallery.index') }}">
                    <i class="far fa-square"></i>
                    <span>Galeri</span>
                </a>
            </li>
            <li class="{{ Request::routeIs('carrier.*') ? 'active' : '' }}"><a class="nav-link"
                href="{{ route('carrier.index') }}">
                <i class="far fa-square"></i>
                <span>Karir</span>
            </a>
        </li>
        </ul>
    </aside>
</div>

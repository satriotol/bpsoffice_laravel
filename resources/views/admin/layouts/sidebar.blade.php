<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('dashboard') }}">PT BSP</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('dashboard') }}">BSP</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Admin Area</li>
            <li class="active"><a class="nav-link" href="{{ route('dashboard') }}">
                    <i class="far fa-square"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="active"><a class="nav-link" href="{{ route('sliders.index') }}">
                    <i class="far fa-square"></i>
                    <span>Slider</span>
                </a>
            </li>

        </ul>
    </aside>
</div>

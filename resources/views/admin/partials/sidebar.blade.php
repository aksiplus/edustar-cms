<ul class="vertical-nav-menu">
    <li class="app-sidebar__heading"></li>
    <li>
        <a href="{{ route('admin.dashboard') }}" class="{{ (request()->is('admin')) ? 'mm-active' : '' }}">
            <i class="metismenu-icon fa fa-database"></i>
            Dashboard
        </a>
    </li>
    <li>
        <a href="{{ route('admin.ppdb') }}" class="{{ request()->is('admin/ppdb') || request()->is('admin/ppdb/*') ?  'mm-active' : '' }}">
            <i class="metismenu-icon fa fa-address-card"></i>
            PPDB
        </a>
    </li>
    <li class="app-sidebar__heading">Data Pokok</li>
    <li>
        <a href="tables-regular.html" class="{{ (request()->is('admin/guru')) ? 'mm-active' : '' }}">
            <i class="metismenu-icon fa fa-user"></i>
            GTK
        </a>
    </li>
    <li>
        <a href="tables-regular.html" class="{{ (request()->is('admin/siswa')) ? 'mm-active' : '' }}">
            <i class="metismenu-icon fa fa-users"></i>
            Siswa
        </a>
    </li>
    <li class="app-sidebar__heading">Widgets</li>
    <li>
        <a href="dashboard-boxes.html" class="{{ (request()->is('admin/sisw')) ? 'mm-active' : '' }}">
            <i class="metismenu-icon pe-7s-display2"></i>
            Dashboard Boxes
        </a>
    </li>
    <li class="app-sidebar__heading">Forms</li>
    <li>
        <a href="forms-controls.html" class="{{ (request()->is('admin/sisw')) ? 'mm-active' : '' }}">
            <i class="metismenu-icon pe-7s-mouse">
            </i>Forms Controls
        </a>
    </li>
    <li>
        <a href="forms-layouts.html" class="{{ (request()->is('admin/sisw')) ? 'mm-active' : '' }}">
            <i class="metismenu-icon pe-7s-eyedropper">
            </i>Forms Layouts
        </a>
    </li>
    <li>
        <a href="forms-validation.html" class="{{ (request()->is('admin/sisw')) ? 'mm-active' : '' }}">
            <i class="metismenu-icon pe-7s-pendrive">
            </i>Forms Validation
        </a>
    </li>
    <li class="app-sidebar__heading">Charts</li>
    <li>
        <a href="charts-chartjs.html">
            <i class="metismenu-icon pe-7s-graph2">
            </i>ChartJS
        </a>
    </li>
    <li class="app-sidebar__heading">PRO Version</li>
    <li>
        <a href="https://dashboardpack.com/theme-details/architectui-dashboard-html-pro/" target="_blank">
            <i class="metismenu-icon pe-7s-graph2">
            </i>
            Upgrade to PRO
        </a>
    </li>
</ul>

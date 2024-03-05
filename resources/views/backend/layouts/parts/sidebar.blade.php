<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="profile-element">
                    <div class=" d-flex justify-content-between align-items-center">
                        <img src="{{asset(" image/logo/".generalSetting('logo'))}}" alt="" class="img-fluid w-100">
                    </div>
                </div>
                <div class="logo-element">
                    <img src="{{asset(" image/logo/".generalSetting('logo'))}}" alt="" class="img-fluid p-2">
                </div>
            </li>
            <li class="{{ url()->current() == url('/admin/dashboard') ? 'active' : '' }}">
                <a href="{{ route('admin.dashboard') }}"><i class="fa fa-th-large"></i> <span
                        class="nav-label">Dashboards</span></a>
            </li>

            <li class="{{ request()->is('admin/products*') ? 'active' : '' }}">
                <a href=""><i class="fa fa-shopping-cart"></i> <span class="nav-label"> Products </span><span
                        class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    {{-- @can('view permissions') --}}
                    <li class="{{ url()->current() == url('/admin/products/product') ? 'active' : '' }}">
                        <a href="{{ route('product.index') }}"><span class="nav-label">All Products</span></a>
                    </li>
                    @can('view category')
                    <li class="{{ url()->current() == url('/admin/products/product-category') ? 'active' : '' }}">
                        <a href="{{ route('productcategory.index') }}"> <span class="nav-label">Products
                                Category</span></a>
                    </li>
                    @endcan
                    @can('view subcategory')
                    <li class="{{ url()->current() == url('/admin/products/product-sub-category') ? 'active' : '' }}">
                        <a href="{{ route('productsubcategory.index') }}"> <span class="nav-label">Products Sub
                                Category</span></a>
                    </li>
                    @endcan
                    <li class="{{ url()->current() == url('/admin/products/Brands') ? 'active' : '' }}">
                        <a href="{{ route('product.index') }}"> <span class="nav-label">Products Brands</span></a>
                    </li>
                    <li class="{{ url()->current() == url('/admin/products/Warranty') ? 'active' : '' }}">
                        <a href="{{ route('product.index') }}"> <span class="nav-label">Products Warranty</span></a>
                    </li>
                    <li class="{{ url()->current() == url('/admin/products/User') ? 'active' : '' }}">
                        <a href="{{ route('product.index') }}"> <span class="nav-label">User Support</span></a>
                    </li>
                    <li class="{{ url()->current() == url('/admin/products/Technical') ? 'active' : '' }}">
                        <a href="{{ route('product.index') }}"> <span class="nav-label">Technical Support</span></a>
                    </li>
                </ul>
            </li>
            @can('view customers')
            <li class="{{request()->is('admin/customer*') ? 'active' : ''}}">
                <a href="{{ route('customer.index') }}"><i class="fa fa-users"></i> <span class="nav-label">All
                        Users</span></a>
                @endcan
                @can('view admin')
            <li class="{{request()->is('admin/user*') ? 'active' : ''}}">
                <a href="{{ route('userIndex') }}"><i class="fa fa-user-secret" aria-hidden="true"></i> <span
                        class="nav-label">All Admin</span></a>
                @endcan
                @can('view account setting')
            <li class="{{ request()->is('admin/account*') ? 'active' : '' }}"><a
                    href="{{ route('accountShow', auth()->id()) }}"> <i class="fa fa-cog" aria-hidden="true"></i>
                    <span class="nav-label">Account Setting</span> </a></li>
            @endcan
            @can('view setting')
            <li class="{{ request()->is('admin/setting*') ? 'active' : '' }}">
                <a href=""><i class="fa fa-cogs"></i> <span class="nav-label"> Page Setting </span><span
                        class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    @can('view permissions')
                    <li class="{{ request()->is('admin/setting/permission*') ? 'active' : '' }}"><a
                            href="{{ route('permissionIndex') }}"> Permissions </a></li>
                    @endcan
                    @can('view general setting')
                    <li class="{{ request()->is('admin/setting/general*') ? 'active' : '' }}"><a
                            href="{{ route('generalIndex') }}"> General Setting </a></li>
                    @endcan
                </ul>
            </li>
            @endcan
        </ul>
    </div>
</nav>
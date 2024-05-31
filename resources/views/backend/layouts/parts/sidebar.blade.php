<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="profile-element">
                    <div class=" d-flex justify-content-between align-items-center">
                        <img src="{{asset('image/logo/'.generalSetting('logo'))}}" alt="" class="img-fluid w-100">
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

            @can('view product')
            <li class="{{ request()->is('admin/products*') ? 'active' : '' }}">
                <a href=""><i class="fa fa-shopping-cart"></i> <span class="nav-label"> Products </span><span
                        class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    @can('view producttype')
                    <li class="{{ url()->current() == url('/admin/products/producttype') ? 'active' : '' }}">
                        <a href="{{ route('producttype.index') }}"><span class="nav-label">Product Type</span></a>
                    </li>
                    @endcan
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
                    @can('view brand')
                    <li class="{{ url()->current() == url('/admin/products/product-brand') ? 'active' : '' }}">
                        <a href="{{ route('productbrand.index') }}"> <span class="nav-label">Products Brands</span></a>
                    </li>
                    @endcan
                    <li class="{{ url()->current() == url('/admin/products/Warranty') ? 'active' : '' }}">
                        <a href="{{ route('product.index') }}"> <span class="nav-label">Products Warranty</span></a>
                    </li>
                    <li class="{{ url()->current() == url('/admin/products/user-support') ? 'active' : '' }}">
                        <a href="{{ route('usersupport.index') }}"> <span class="nav-label">User Support</span></a>
                    </li>
                    <li class="{{ url()->current() == url('/admin/products/tech-support') ? 'active' : '' }}">
                        <a href="{{ route('techsupport.index') }}"> <span class="nav-label">Technical Support</span></a>
                    </li>
                </ul>
            </li>
            @endcan

            @can('view projectcategory')
            <li class="{{ request()->is('admin/projects*') ? 'active' : '' }}">
                <a href=""><i class="fa fa-diamond"></i> <span class="nav-label"> Projects </span><span
                        class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    @can('view project')
                    <li class="{{ url()->current() == url('/admin/projects/project') ? 'active' : '' }}">
                        <a href="{{route('project.index')}}"><span class="nav-label">All Projects</span></a>
                    </li>
                    @endcan
                    @can('view category')
                    <li class="{{ url()->current() == url('/admin/projects/project-category') ? 'active' : '' }}">
                        <a href="{{ route('project-category.index') }}"> <span class="nav-label">Project
                                Category</span></a>
                    </li>
                    @endcan
                    @can('view projectsubcategory')
                    <li class="{{ url()->current() == url('/admin/projects/project-sub-category') ? 'active' : '' }}">
                        <a href="{{ route('project-sub-category.index') }}"> <span class="nav-label">Project
                                Sub Category</span></a>
                    </li>
                    @endcan
                </ul>
            </li>
            @endcan

            @can('view newcategory')
            <li class="{{ request()->is('admin/news*') ? 'active' : '' }}">
                <a href=""><i class="fa fa-list-alt"></i> <span class="nav-label"> News </span><span
                        class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    @can('view new')
                    <li class="{{ url()->current() == url('/admin/news/news') ? 'active' : '' }}">
                        <a href="{{route('news.index')}}"><span class="nav-label">All News</span></a>
                    </li>
                    @endcan
                    @can('view newcategory')
                    <li class="{{ url()->current() == url('/admin/news/new-category') ? 'active' : '' }}">
                        <a href="{{ route('new-category.index') }}"> <span class="nav-label">News
                                Category</span></a>
                    </li>
                    @endcan
                </ul>
            </li>
            @endcan

            @can('view customers')
            <li class="{{ request()->is('admin/customer*') ? 'active' : '' }}">
                <a href=""><i class="fa fa-users"></i> <span class="nav-label"> Members </span><span
                        class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    @can('view customers')
                    <li class="{{request()->is('admin/customer*') ? 'active' : ''}}">
                        <a href="{{ route('customer.index') }}"> <span class="nav-label">All Members</span></a>
                        @endcan
                </ul>
            </li>
            @endcan

            @can('view service')
            <li class="{{ request()->is('admin/feedback*') ? 'active' : '' }}">
                <a href=""><i class="fa fa-paper-plane" aria-hidden="true"></i> <span class="nav-label"> Service/ Survey Form </span><span
                        class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    @can('view service')
                    <li class="{{request()->is('admin/feedback*') ? 'active' : ''}}">
                        <a href="{{ route('feedback.index') }}"> <span class="nav-label">Customer Feedback
                                Form</span></a>
                        @endcan
                        @can('view contactform')
                    <li class="{{request()->is('admin/contact/contactform*') ? 'active' : ''}}">
                        <a href="{{route('contactform.index')}}"> <span class="nav-label">Contact Form</span></a>
                        @endcan
                </ul>
            </li>
            @endcan

            @can('view testimonial')
            <li class="{{ request()->is('admin/testimonial*') ? 'active' : '' }}">
                <a href="{{route('testimonial.index')}}"><i class="fa fa-comments" aria-hidden="true"></i> <span class="nav-label"> Client
                        /Testimonial </span></a>
            </li>
            @endcan

            @can('view admin')
            <li class="{{request()->is('admin/user*') ? 'active' : ''}}">
                <a href="{{ route('userIndex') }}"><i class="fa fa-user-o"></i> <span class="nav-label">Admin
                        Users</span></a>
                @endcan

                @can('view allpage')
            <li class="{{ request()->is('admin/allpage*') ? 'active' : '' }}">
                <a href=""><i class="fa fa-asterisk" aria-hidden="true"></i> <span class="nav-label"> All Page </span><span
                        class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    @can('view allpage')
                    <li class="{{request()->is('admin/allpage/home*') ? 'active' : ''}}">
                        <a href=""><i class="fa fa-home"></i> <span class="nav-label"> All Home Page </span><span
                                class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li class="{{request()->is('admin/allpage/home*') ? 'active' : ''}}">
                                <a href="{{ route('home.index') }}"> <span class="nav-label">Home Page</span></a>
                            </li>
                            @can('view special')
                            <li class="{{request()->is('admin/allpage/specialization*') ? 'active' : ''}}">
                                <a href="{{ route('special.index') }}"> <span class="nav-label">Specialization
                                        Page</span></a>
                            </li>
                            @endcan
                            @can('view ourcustomer')
                            <li class="{{request()->is('admin/allpage/ourcustomer*') ? 'active' : ''}}">
                                <a href="{{ route('ourcustomer.index') }}"> <span class="nav-label">Our Customer
                                        Page</span></a>
                            </li>
                            @endcan
                        </ul>
                    </li>
                    @endcan
                    {{-- all about start--}}
                    @can('view about')
                    <li class="{{request()->is('admin/allpage/about*') ? 'active' : ''}}">
                        <a href=""><i class="fa fa-folder"></i> <span class="nav-label"> All About Page </span><span
                                class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            @can('view companypolicy')
                            <li class="{{request()->is('admin/allpage/companypolicy*') ? 'active' : ''}}">
                                <a href="{{route('about.companypolicy')}}"> <span class="nav-label">Company Policy
                                        Page</span></a>
                            </li>
                            @endcan
                            @can('view company')
                            <li class="{{request()->is('admin/allpage/companys*') ? 'active' : ''}}">
                                <a href="{{route('about.company')}}"> <span class="nav-label">Company Page</span></a>
                            </li>
                            @endcan
                            @can('view companydetail')
                            <li class="{{request()->is('admin/allpage/companydetail*') ? 'active' : ''}}">
                                <a href="{{route('about.companydetail')}}"> <span class="nav-label">Company Detail
                                        Page</span></a>
                            </li>
                            @endcan
                            @can('view companyfounder')
                            <li class="{{request()->is('admin/allpage/companyfounder*') ? 'active' : ''}}">
                                <a href="{{route('about.companyfounder')}}"> <span class="nav-label">Company Founder
                                        Page</span></a>
                            </li>
                            @endcan
                            @can('view milestone')
                            <li class="{{request()->is('admin/allpage/milestone*') ? 'active' : ''}}">
                                <a href="{{route('milestone.index')}}"> <span class="nav-label">Milestone
                                        Page</span></a>
                            </li>
                            @endcan
                        </ul>
                    </li>
                    @endcan
                    {{-- all about end --}}

                    {{-- all contact start--}}
                    @can('view contact')
                    <li class="{{request()->is('admin/allpage/contact*') ? 'active' : ''}}">
                        <a href=""><i class="fa fa-phone" aria-hidden="true"></i> <span class="nav-label"> Contact Us Page </span><span
                                class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            @can('view contact')
                            <li class="{{request()->is('admin/allpage/contact*') ? 'active' : ''}}">
                                <a href="{{route('contact.index')}}"> <span class="nav-label">Head Office
                                        Page</span></a>
                            </li>
                            @endcan
                            @can('view ourbranch')
                            <li class="{{request()->is('admin/allpage/ourbranch*') ? 'active' : ''}}">
                                <a href="{{route('ourbranch.index')}}"> <span class="nav-label">Our Branch </span></a>
                            </li>
                            @endcan
                        </ul>
                    </li>
                    @endcan
                    {{-- all contact us end --}}
                    {{-- all footer start--}}
                    @can('view footer')
                    <li class="{{request()->is('admin/allpage/footer*') ? 'active' : ''}}">
                        <a href=""><i class="fa fa-address-book" aria-hidden="true"></i> <span class="nav-label"> Footer </span><span
                                class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            @can('view footer')
                            <li class="{{request()->is('admin/allpage/footer*') ? 'active' : ''}}">
                                <a href="{{route('footer.index')}}"> <span class="nav-label">Footer Page</span></a>
                            </li>
                            @endcan
                        </ul>
                    </li>
                    @endcan
                    {{-- all footer end --}}
                    {{-- all header start--}}
                    @can('view header')
                    <li class="{{request()->is('admin/allpage/header*') ? 'active' : ''}}">
                        <a href=""><i class="fa fa-bars" aria-hidden="true"></i> <span class="nav-label"> Header </span><span
                                class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            @can('view header')
                            <li class="{{request()->is('admin/allpage/header*') ? 'active' : ''}}">
                                <a href="{{route('header.index')}}"> <span class="nav-label">Header Page</span></a>
                            </li>
                            @endcan
                        </ul>
                    </li>
                    @endcan
                    {{-- all header end --}}
                </ul>
            </li>
            @endcan

            @can('view setting')
            <li class="{{ request()->is('admin/setting*') ? 'active' : '' }}">
                <a href=""><i class="fa fa-cogs"></i> <span class="nav-label"> Settings </span><span
                        class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    @can('view general setting')
                    <li class="{{ request()->is('admin/setting/general*') ? 'active' : '' }}"><a
                            href="{{ route('generalIndex') }}"> General Setting </a></li>
                    @endcan
                    @can('view account setting')
                    <li class="{{ request()->is('admin/account*') ? 'active' : '' }}"><a
                            href="{{ route('accountShow', auth()->id()) }}">
                            <span class="nav-label">Account Setting</span> </a></li>
                    @endcan
                    @can('view permissions')
                    <li class="{{ request()->is('admin/setting/permission*') ? 'active' : '' }}"><a
                            href="{{ route('permissionIndex') }}"> Admin Role </a></li>
                    @endcan
                </ul>
            </li>
            @endcan
        </ul>
    </div>
</nav>
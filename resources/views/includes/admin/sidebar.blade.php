<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{url('/admin')}}">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
        </a>

        <hr class="sidebar-divider text-white">



        <li class="nav-item {{Request::is('admin') ? 'active' : ''}}">
            <a class="nav-link" href="{{url('/admin')}}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>

        <li class="nav-item {{Request::is('order') ? 'active' : ''}}">
            <a class="nav-link" href="{{url('/order')}}">
                <i class="fas fa-cart-arrow-down"></i>
                <span>Order History</span>
            </a>
        </li>


        <li class="nav-item {{Request::is('product') ? 'active' : ''}}">
            <a class="nav-link " href="{{url('/product')}}" data-toggle="collapse" data-target="#collapseTwo"
                aria-controls="collapseTwo">
                <i class="fas fa-box"></i>
                <span>Product</span>
            </a>
            <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionSidebar"
                style="">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item {{Request::is('product') ? 'active' : ''}}"
                        href="{{url('/product')}}">Product</a>
                    <a class="collapse-item {{Request::is('category') ? 'active' : ''}}"
                        href="{{url('/category')}}">Category</a>
                    <a class="collapse-item {{Request::is('brand') ? 'active' : ''}}" href="{{url('/brand')}}">Brand</a>
                </div>
            </div>
        </li>


        <li class="nav-item {{Request::is('stock') ? 'active' : ''}}">
            <a class="nav-link" href="{{url('/stock')}}">
                <i class="fas fa-dolly"></i>
                <span>Stock</span>
            </a>
        </li>

        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
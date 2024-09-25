<ul class="navbar-nav bg-info sidebar sidebar-white accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
      <div class="sidebar-brand-icon rotate-n-15">
        {{-- <i class="fas fa-laugh-wink"></i> --}}
      </div>
      <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="{{asset('public_asset/foto/lgmini.png')}}" alt="..." />
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
      <a class="nav-link" href="{{ route('dashboard') }}">
        <i class="fas fa-home"></i>
        <span>Dashboard</span></a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="{{ route('products') }}">
        <i class="fas fa-book"></i>
        <span>Product</span></a>
    </li>

     {{-- <li class="nav-item">
      <a class="nav-link" href="{{ route('profile') }}"  >
        <i class="fa fa-fw fa-user"></i>
        <span>Profile</span></a>
    </li> --}}

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>


  </ul>

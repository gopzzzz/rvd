<!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      
      <!-- Notifications Dropdown Menu -->
      
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
     
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{url('dashboard')}}" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">RVD College</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
     

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="{{url('dashboard')}}" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            
          </li>
         
         
         

           <li class="nav-item">
    <a href="{{ route('admission.index') }}"
       class="nav-link {{ request()->routeIs('admission.*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-book"></i>
        <p>Admission</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('aboutus') }}"
       class="nav-link {{ request()->routeIs('aboutus') ? 'active' : '' }}">
        <i class="nav-icon fas fa-info-circle"></i>
        <p>About Us</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('department.index') }}"
       class="nav-link {{ request()->routeIs('department.*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-book"></i>
        <p>Department</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('course.index') }}"
       class="nav-link {{ request()->routeIs('course.*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-book"></i>
        <p>Course</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('faculties') }}"
       class="nav-link {{ request()->routeIs('faculties') ? 'active' : '' }}">
        <i class="nav-icon fas fa-user-tie"></i>
        <p>Faculties</p>
    </a>
</li>




<li class="nav-item">
    <a href="{{ route('student-life.index') }}"
       class="nav-link {{ request()->routeIs('student-life.*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-user-graduate"></i>
        <p>Student Life</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('news') }}"
       class="nav-link {{ request()->routeIs('news') ? 'active' : '' }}">
        <i class="nav-icon fas fa-info-circle"></i>
        <p>News & Events</p>
    </a>
</li>


<li class="nav-item {{ request()->routeIs('uploads', 'gallerytypes') ? 'menu-open' : '' }}">
    <a href="#" class="nav-link {{ request()->routeIs('uploads', 'gallerytypes') ? 'active' : '' }}">
        <i class="nav-icon fas fa-chart-pie"></i>
        <p>
            Gallery
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>

    <ul class="nav nav-treeview">

     <li class="nav-item">
            <a href="{{ route('gallerytypes') }}"
               class="nav-link {{ request()->routeIs('gallerytypes') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Gallery Head</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('uploads') }}"
               class="nav-link {{ request()->routeIs('uploads') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Gallery </p>
            </a>
        </li>

       
    </ul>
</li>


<li class="nav-item">
    <a href="{{ route('downloads') }}"
       class="nav-link {{ request()->routeIs('downloads') ? 'active' : '' }}">
        <i class="nav-icon fas fa-info-circle"></i>
        <p>Downloads</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('faq') }}"
       class="nav-link {{ request()->routeIs('faq') ? 'active' : '' }}">
        <i class="nav-icon fas fa-info-circle"></i>
        <p>FAQ</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('contacts') }}"
       class="nav-link {{ request()->routeIs('contacts') ? 'active' : '' }}">
        <i class="nav-icon fas fa-info-circle"></i>
        <p>Contacts</p>
    </a>
</li>






<li class="nav-item">
    <a href="{{ route('logout') }}" class="nav-link">
        <i class="nav-icon fas fa-sign-out-alt"></i>
        <p>Logout</p>
    </a>
</li>

       
 
 
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>


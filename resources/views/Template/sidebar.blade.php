<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="{{asset('img/pic2.jpg')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">DOC sys</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        {{-- <div class="image">
          <img src="{{asset('img/pic1.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div> --}}
        <div class="info">
          <a href="#" class="d-block">Hallo, {{auth()->user()->name}}</a>
        </div>
      </div>

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
            <a href="#" class="nav-link active">
              <i class="far fa-circle"></i>
              <p>
                Main Menu
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            
              <li class="nav-item">
                <a href="{{route('data-staff')}}" class="nav-link">
                  <i class="fas fa-user-tie"></i>
                  <p>Management Staff Dokter</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{route('data-pasien')}}" class="nav-link">
                  <i class="fas fa-users"></i>
                  <p>Data Pasien</p>
                </a>
              </li>

            </ul>
          </li>


          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="far fa-circle"></i>
              <p>
                Medical Record
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('data-admin')}}" class="nav-link">
                  <i class="nav-icon fas fa-edit"></i>
                  <p>Data Admin</p>
                </a>
              </li>

              @if (auth()->user()->level=="superadmin")
                
              
              <li class="nav-item">
                <a href="{{route('data-lab')}}" class="nav-link">
                  <i class="nav-icon fas fa-edit"></i>
                  <p>Medical Report</p>
                </a>
              </li>
              @endif
              

           

            </ul>
          </li>

          <li class="nav-item">
            <a href="{{route('logout')}}" class="nav-link">
              <i class="fas fa-sign-out-alt" style="color: red"></i>
              <p>
                Logout
                
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        
        <div class="info">
          <a href="#" class="d-block">perpustakaan</a>
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
          
          <li class="nav-item">
            <a href="{{ route('anggota') }}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Anggota
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('buku') }}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Buku
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('petugas') }}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Petugas
              </p>
            </a>
          </li>

            
          <li class="nav-item">
            <a href="{{ route('peminjaman') }}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Peminjaman
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('pengembalian') }}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Pengembalian
              </p>
            </a>
          </li>

            
          <li class="nav-item">
            <a href="{{ route('rak') }}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Rak
              </p>
            </a>
          </li>


         
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
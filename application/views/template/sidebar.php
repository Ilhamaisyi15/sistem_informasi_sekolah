<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="<?= base_url("asset/"); ?>dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Ilham Aisyi</a>
      </div>
    </div>

    <!-- SidebarSearch Form -->


    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="<?= base_url("Dashboard/index") ?>" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>
        <li class="nav-item mt-1">
          <a href="<?= base_url("Dashboard/user") ?>" class="nav-link">
            <i class="nav-icon fas fa-user"></i>
            <p>
              User
            </p>
          </a>
        </li>
        <i class="nav-item mt-1">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-info-circle"></i>
            <p>
              Tentang Kami
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= base_url("Dashboard/sejarah") ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Sejarah</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url("Dashboard/visimisi") ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Visi Misi</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url("Tentangkami/struktur") ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Struktur Organisasi</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url("Dashboard/tatatertib") ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Tata Tertib</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url("Dashboard/fasilitas") ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Fasilitas</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url("Dashboard/prestasi") ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Prestasi</p>
              </a>
            </li>
          </ul>
          </li>
          <li class="nav-item mt-1">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book-open"></i>
              <p>
                Warga Sekolah
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url("Data/data_guru") ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Guru</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url("Data/data_siswa") ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Siswa</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url("Data/data_alumni") ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Alumni</p>
                </a>
              </li>
            </ul>
            <i class="nav-item mt-1">
              <a href="<?= base_url("Informasi/berita") ?>" class="nav-link">
                <i class="nav-icon far fa-newspaper"></i>
                <p>
                  Berita
                </p>
              </a>
              <i class="nav-item mt-1">
                <a href="<?= base_url('Informasi/ekskul') ?>" class="nav-link">
                  <i class="nav-icon fas fa-info-circle"></i>
                  <p>
                    Ekstrakulikuler
                  </p>
                </a>
                <i class="nav-item mt-1">
                  <a href="<?= base_url('Informasi/galeri') ?>" class="nav-link">
                    <i class="nav-icon fas fa-images"></i>
                    <p>
                      Galeri
                    </p>
                  </a>
                  <i class="nav-item mt-1">
                    <a href="<?= base_url('Informasi/ppdb'); ?>" class="nav-link">
                      <i class="nav-icon fas fa-archive"></i>
                      <p>
                        Laporan PPDB
                      </p>
                    </a>
                    <i class="nav-item mt-1">
                      <a href="<?= base_url('Auth/logout'); ?>" class="nav-link">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>
                          Logout
                        </p>
                      </a>
          </li>
          <ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
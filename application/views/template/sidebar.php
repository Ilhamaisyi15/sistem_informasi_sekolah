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
        <a href="#" class="d-block">Ilham Ganteng</a>
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
              Dasboard
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= base_url("Dashboard/dataUser") ?>" class="nav-link">
            <i class="nav-icon fas fa-user"></i>
            <p>
              User
            </p>
          </a>
        </li>
        <i class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-file"></i>
            <p>
              Tentang Kami
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= base_url("Tentangkami/sejarah") ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Sejarah</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url("Tentangkami/visimisi") ?>" class="nav-link">
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
              <a href="<?= base_url("Tentangkami/tatatertib") ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Tata Tertib</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url("Tentangkami/fasilitas") ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Fasilitas</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url("Tentangkami/prestasi") ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Prestasi</p>
              </a>
            </li>
          </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
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
            <i class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-file"></i>
                <p>
                  Berita
                </p>
              </a>
              <i class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-file"></i>
                  <p>
                    Ekstrakulikuler
                  </p>
                </a>
                <i class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-file"></i>
                    <p>
                      Galeri
                    </p>
                  </a>
                  <i class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="nav-icon fas fa-file"></i>
                      <p>
                        Laporan PPDB
                      </p>
                    </a>
                    <i class="nav-item">
                      <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-file"></i>
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
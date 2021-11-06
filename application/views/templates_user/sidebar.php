
<div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class=""></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
          <div class="search-element">
            <input class="form-control" type="hidden" placeholder="Search" aria-label="Search" data-width="250">
            <div class="search-backdrop"></div>
            <div class="search-result">
              <div class="search-header">
                Histories
              </div>
              <div class="search-item">
                <a href="#">How to hack NASA using CSS</a>
                <a href="#" class="search-close"><i class="fas fa-times"></i></a>
              </div>
              <div class="search-item">
                <a href="#">Kodinger.com</a>
                <a href="#" class="search-close"><i class="fas fa-times"></i></a>
              </div>
              <div class="search-item">
                <a href="#">#Stisla</a>
                <a href="#" class="search-close"><i class="fas fa-times"></i></a>
              </div>
              <div class="search-header">
                Result
              </div>
              <div class="search-item">
                <a href="#">
                  <img class="mr-3 rounded" width="30" src="../assets/img/products/product-3-50.png" alt="product">
                  oPhone S9 Limited Edition
                </a>
              </div>
              <div class="search-item">
                <a href="#">
                  <img class="mr-3 rounded" width="30" src="../assets/img/products/product-2-50.png" alt="product">
                  Drone X2 New Gen-7
                </a>
              </div>
              <div class="search-item">
                <a href="#">
                  <img class="mr-3 rounded" width="30" src="../assets/img/products/product-1-50.png" alt="product">
                  Headphone Blitz
                </a>
              </div>
              <div class="search-header">
                Projects
              </div>
              <div class="search-item">
                <a href="#">
                  <div class="search-icon bg-danger text-white mr-3">
                    <i class="fas fa-code"></i>
                  </div>
                  Stisla Admin Template
                </a>
              </div>
              <div class="search-item">
                <a href="#">
                  <div class="search-icon bg-primary text-white mr-3">
                    <i class="fas fa-laptop"></i>
                  </div>
                  Create a new Homepage Design
                </a>
              </div>
            </div>
          </div>
        </form>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link nav-link-lg message-toggle beep"><i class="far fa-envelope"></i></a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right">
              <div class="dropdown-list-content dropdown-list-message">
                <form method="POST" action="<?php echo base_url('user/dashboard/pesan') ?>">

                  
                    <div class="form-group">
                    <input type="hidden" name="id_anggota" value="<?php echo $this->session->userdata('id_anggota') ?>">
                    <input type="hidden" name="gambar" value="<?php echo $this->session->userdata('gambar') ?>">
                    <input type="hidden" name="email" value="<?php echo $this->session->userdata('email') ?>">
                    <input type="hidden" name="nama_anggota" value="<?php echo $this->session->userdata('nama_anggota') ?>">
                  </div>
                 
                  <div class="form-group">
                    <label for="exampleFormControlTextarea1">Kirim Pesan untuk perpanjang peminjaman buku</label>
                    <textarea name="pesan" class="form-control ml-1" id="exampleFormControlTextarea1" style="height: 78px; width: 341px;" required></textarea>
                  </div>
                  <div class="form-group">
                    <button type="submit"class="btn btn-sm btn-primary ml-1">Kirim</button>
                  </div>
                </form>
              </div>
              
            </div>
          </li>
          <li class="dropdown dropdown-list-toggle" hidden><a href="#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg beep"><i class="far fa-bell"></i></a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right">
              <div class="dropdown-header">Notifications
                <div class="float-right">
                  <a href="#">Mark All As Read</a>
                </div>
              </div>
              <div class="dropdown-list-content dropdown-list-icons">
                <a href="#" class="dropdown-item dropdown-item-unread">
                  <div class="dropdown-item-icon bg-primary text-white">
                    <i class="fas fa-code"></i>
                  </div>
                  <div class="dropdown-item-desc">
                    Template update is available now!
                    <div class="time text-primary">2 Min Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <div class="dropdown-item-icon bg-info text-white">
                    <i class="far fa-user"></i>
                  </div>
                  <div class="dropdown-item-desc">
                    <b>You</b> and <b>Dedik Sugiharto</b> are now friends
                    <div class="time">10 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <div class="dropdown-item-icon bg-success text-white">
                    <i class="fas fa-check"></i>
                  </div>
                  <div class="dropdown-item-desc">
                    <b>Kusnaedi</b> has moved task <b>Fix bug header</b> to <b>Done</b>
                    <div class="time">12 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <div class="dropdown-item-icon bg-danger text-white">
                    <i class="fas fa-exclamation-triangle"></i>
                  </div>
                  <div class="dropdown-item-desc">
                    Low disk space. Let's clean it!
                    <div class="time">17 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <div class="dropdown-item-icon bg-info text-white">
                    <i class="fas fa-bell"></i>
                  </div>
                  <div class="dropdown-item-desc">
                    Welcome to Stisla template!
                    <div class="time">Yesterday</div>
                  </div>
                </a>
              </div>
              <div class="dropdown-footer text-center">
                <a href="#">View All <i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
          </li>
          <li class="dropdown"><a href="" data-toggle="dropdown" class="nav-link nav-link-lg nav-link-user">
            <img style=" width: 41px; height: 41px;" src="<?php echo base_url('assets/upload/'.$this->session->userdata('gambar')) ?>" class="rounded-circle mr-3">
            <div class="d-sm-none d-lg-inline-block">Selamat Datang <?php echo $this->session->userdata('nama_anggota') ?></div></a>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="">P.A.K</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
          </div>
          <ul class="sidebar-menu">
              <li class="menu-header" align="center">Perpustakaan Asah Koda</li>
              <li class="nav-item dropdown">
                <a href="<?php echo base_url('user/Dashboard') ?>" class="nav-link"><i class="fas fa-landmark"></i><span>Dashboard</span></a>
                <a href="<?php echo base_url('user/Profil') ?>" class="nav-link"><i class="fas fa-user"></i><span>Profil</span></a>
                <a href="<?php echo base_url('user/Data_buku') ?>" class="nav-link"><i class="fas fa-book"></i><span>Koleksi Buku</span></a>
                <a href="<?php echo base_url('user/Laporan') ?>" class="nav-link"><i class="fas fa-clipboard-list"></i><span>Laporan</span></a>
                <a href="<?php echo base_url('user/Ganti_password') ?>" class="nav-link"><i class="fas fa-lock"></i><span>Ganti Password</span></a>
                <a href="<?php echo base_url('welcome/logout') ?>" class="nav-link"><i class="fas fa-sign-out-alt"></i><span>Logout</span></a>
              </li>
            </ul>

            
        </aside>
      </div>
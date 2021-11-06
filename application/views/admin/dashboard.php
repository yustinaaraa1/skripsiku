
  

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="card card-statistic-2">
                <div class="card-stats">
                  <div class="card-stats-title">
                    <div class="dropdown d-inline">
                      
                      <ul class="dropdown-menu dropdown-menu-sm">
                        <li class="dropdown-title">Select Month</li>
                        <li><a href="#" class="dropdown-item">January</a></li>
                        <li><a href="#" class="dropdown-item">February</a></li>
                        <li><a href="#" class="dropdown-item">March</a></li>
                        <li><a href="#" class="dropdown-item">April</a></li>
                        <li><a href="#" class="dropdown-item">May</a></li>
                        <li><a href="#" class="dropdown-item">June</a></li>
                        <li><a href="#" class="dropdown-item">July</a></li>
                        <li><a href="#" class="dropdown-item active">August</a></li>
                        <li><a href="#" class="dropdown-item">September</a></li>
                        <li><a href="#" class="dropdown-item">October</a></li>
                        <li><a href="#" class="dropdown-item">November</a></li>
                        <li><a href="#" class="dropdown-item">December</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="card-stats-items">
                    <div class="card-stats-item">
                      <div class="card-stats-item-count"><?php echo $perempuan ?></div>
                      <div class="card-stats-item-label">Wanita</div>
                    </div>
                    <div class="card-stats-item">
                      <div class="card-stats-item-count"><?php echo $pria ?></div>
                      <div class="card-stats-item-label">Pria</div>
                    </div>
                    <div class="card-stats-item">
                      <div class="card-stats-item-count"></div>
                      <div class="card-stats-item-label"></div>
                    </div>
                  </div>
                </div>
                <div class="card-icon shadow-primary bg-primary">
                  <i class="fas fa-users"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Anggota P.A.K</h4>
                  </div>
                  <div class="card-body">
                    <?php echo $anggota ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="card card-statistic-2">
                  <img style="width: 349px; height: 179px;" src="<?php echo base_url('assets/upload/Narys.JPEG') ?>">
              </div>
            </div>
             <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="card card-statistic-2">
                <div class="card-stats">
                  <div class="card-stats-title">
                    <div class="dropdown d-inline">
                      
                      <ul class="dropdown-menu dropdown-menu-sm">
                        <li class="dropdown-title">Select Month</li>
                        <li><a href="#" class="dropdown-item">January</a></li>
                        <li><a href="#" class="dropdown-item">February</a></li>
                        <li><a href="#" class="dropdown-item">March</a></li>
                        <li><a href="#" class="dropdown-item">April</a></li>
                        <li><a href="#" class="dropdown-item">May</a></li>
                        <li><a href="#" class="dropdown-item">June</a></li>
                        <li><a href="#" class="dropdown-item">July</a></li>
                        <li><a href="#" class="dropdown-item active">August</a></li>
                        <li><a href="#" class="dropdown-item">September</a></li>
                        <li><a href="#" class="dropdown-item">October</a></li>
                        <li><a href="#" class="dropdown-item">November</a></li>
                        <li><a href="#" class="dropdown-item">December</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="card-stats-items">
                    <div class="card-stats-item">
                      <div class="card-stats-item-count"><?php echo $buku ?></div>
                      <div class="card-stats-item-label">Buku</div>
                    </div>
                    <div class="card-stats-item">
                      <div class="card-stats-item-count"><?php echo $jenis ?></div>
                      <div class="card-stats-item-label">Jenis Buku</div>
                    </div>
                    <div class="card-stats-item">
                      <div class="card-stats-item-count"></div>
                      <div class="card-stats-item-label"></div>
                    </div>
                  </div>
                </div>
                <div class="card-icon shadow-primary bg-primary">
                  <i class="fas fa-book"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Buku di P.A.K</h4>
                  </div>
                  <div class="card-body">
                    <?php echo $buku ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="card card-statistic-2">
                <div class="card-stats">
                  <div class="card-stats-title">
                    <div class="dropdown d-inline">
                      
                      <ul class="dropdown-menu dropdown-menu-sm">
                        <li class="dropdown-title">Select Month</li>
                        <li><a href="#" class="dropdown-item">January</a></li>
                        <li><a href="#" class="dropdown-item">February</a></li>
                        <li><a href="#" class="dropdown-item">March</a></li>
                        <li><a href="#" class="dropdown-item">April</a></li>
                        <li><a href="#" class="dropdown-item">May</a></li>
                        <li><a href="#" class="dropdown-item">June</a></li>
                        <li><a href="#" class="dropdown-item">July</a></li>
                        <li><a href="#" class="dropdown-item active">August</a></li>
                        <li><a href="#" class="dropdown-item">September</a></li>
                        <li><a href="#" class="dropdown-item">October</a></li>
                        <li><a href="#" class="dropdown-item">November</a></li>
                        <li><a href="#" class="dropdown-item">December</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="card-stats-items">
                    <div class="card-stats-item">
                      <div class="card-stats-item-count"><?php echo $transaksi ?></div>
                      <div class="card-stats">Buku yang masih tersedia</div>
                    </div>
                    <div class="card-stats-item">
                      <div class="card-stats-item-count"></div>
                      <div class="card-stats-item-label"></div>
                    </div>
                    <div class="card-stats-item">
                      <div class="card-stats-item-count"><?php echo $buku - $transaksi ?></div>
                      <div class="card-stats">Buku Yang dipinjam</div>
                    </div>
                  </div>
                </div>
                <div class="card-icon shadow-primary bg-primary">
                  <i class="fas fa-book"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Buku di P.A.K</h4>
                  </div>
                  <div class="card-body">
                    <?php echo $buku ?>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="card card-statistic-2">
                <div class="card-stats">
                  <div class="card-stats-title">
                    <div class="dropdown d-inline">
                      
                      <ul class="dropdown-menu dropdown-menu-sm">
                        <li class="dropdown-title">Select Month</li>
                        <li><a href="#" class="dropdown-item">January</a></li>
                        <li><a href="#" class="dropdown-item">February</a></li>
                        <li><a href="#" class="dropdown-item">March</a></li>
                        <li><a href="#" class="dropdown-item">April</a></li>
                        <li><a href="#" class="dropdown-item">May</a></li>
                        <li><a href="#" class="dropdown-item">June</a></li>
                        <li><a href="#" class="dropdown-item">July</a></li>
                        <li><a href="#" class="dropdown-item active">August</a></li>
                        <li><a href="#" class="dropdown-item">September</a></li>
                        <li><a href="#" class="dropdown-item">October</a></li>
                        <li><a href="#" class="dropdown-item">November</a></li>
                        <li><a href="#" class="dropdown-item">December</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="card-stats-items">
                    <div class="card-stats-item">
                      <div class="card-stats-item-count"><?php echo $transaksi ?></div>
                      <div class="card-stats">Buku yang masih tersedia</div>
                    </div>
                    <div class="card-stats-item">
                      <div class="card-stats-item-count"></div>
                      <div class="card-stats-item-label"></div>
                    </div>
                    <div class="card-stats-item">
                      <div class="card-stats-item-count"><?php echo $buku - $transaksi ?></div>
                      <div class="card-stats">Buku Yang dipinjam</div>
                    </div>
                  </div>
                </div>
                <div class="card-icon shadow-primary bg-primary">
                  <i class="fas fa-book"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Buku di P.A.K</h4>
                  </div>
                  <div class="card-body">
                    <?php echo $buku ?>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="card card-statistic-2">
                <div class="card-stats">
                  <div class="card-stats-title">
                    <div class="dropdown d-inline">
                      
                      <ul class="dropdown-menu dropdown-menu-sm">
                        <li class="dropdown-title">Select Month</li>
                        <li><a href="#" class="dropdown-item">January</a></li>
                        <li><a href="#" class="dropdown-item">February</a></li>
                        <li><a href="#" class="dropdown-item">March</a></li>
                        <li><a href="#" class="dropdown-item">April</a></li>
                        <li><a href="#" class="dropdown-item">May</a></li>
                        <li><a href="#" class="dropdown-item">June</a></li>
                        <li><a href="#" class="dropdown-item">July</a></li>
                        <li><a href="#" class="dropdown-item active">August</a></li>
                        <li><a href="#" class="dropdown-item">September</a></li>
                        <li><a href="#" class="dropdown-item">October</a></li>
                        <li><a href="#" class="dropdown-item">November</a></li>
                        <li><a href="#" class="dropdown-item">December</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="card-stats-items">
                    <div class="card-stats-item">
                      <div class="card-stats-item-count"><?php echo $transaksi ?></div>
                      <div class="card-stats">Buku yang masih tersedia</div>
                    </div>
                    <div class="card-stats-item">
                      <div class="card-stats-item-count"></div>
                      <div class="card-stats-item-label"></div>
                    </div>
                    <div class="card-stats-item">
                      <div class="card-stats-item-count"><?php echo $buku - $transaksi ?></div>
                      <div class="card-stats">Buku Yang dipinjam</div>
                    </div>
                  </div>
                </div>
                <div class="card-icon shadow-primary bg-primary">
                  <i class="fas fa-book"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Buku di P.A.K</h4>
                  </div>
                  <div class="card-body">
                    <?php echo $buku ?>
                  </div>
                </div>
              </div>
            </div>


          </div>
          
          
          
        </section>
      </div>
      
    </div>
  </div>

 
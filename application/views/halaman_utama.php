        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
          </div>
          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary mb-1">Pengguna Sistem</div>
                      <label class="h6 mb-0 font-weight-bold text-gray-800"> <?= $pengguna; ?>
                      </label>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-users fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info mb-1">Data Dosen Tetap</div>
                      <div class="h6 mb-0 font-weight-bold text-gray-800"><?= $dosentetap; ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-chalkboard-teacher fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info mb-1">Data Dosen Tidak Tetap</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h6 mb-0 mr-3 font-weight-bold text-gray-800"><?= $dosentdktetap; ?></div>
                        </div>
                        <div class="col">
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-chalkboard-teacher fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success mb-1">Data Mahasiswa</div>
                      <div class="h6 mb-0 font-weight-bold text-gray-800"><?= $mhs_lulusan; ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user-graduate fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-12 col-lg-5">
            <div class="card shadow mb-4">
              <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-success">Total Data Mahasiswa</h6>
              </div>
              <!-- Card Body -->
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-6">
                    <div class="chart-pie pt-2">
                      <canvas id="myPieChart"></canvas>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <p>Keterangan:</p>
                    <div class="px-1 py-1 text-white" style="background-color: #173F5F; border-radius: 15px">2014/2015</div><br>
                    <div class="px-1 py-1 text-white" style="background-color: #20639B; border-radius: 15px">2015/2016</div><br>
                    <div class="px-1 py-1 text-white" style="background-color: #3CAEA3; border-radius: 15px">2016/2017</div><br>
                    <div class="px-1 py-1 text-white" style="background-color: #F6D55C; border-radius: 15px">2017/2018</div><br>
                    <div class="px-1 py-1 text-white" style="background-color: #ED553B; border-radius: 15px">2018/2019</div><br>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-sm">
              <div class="d-sm-flex align-items-center justify-content-between mb-2">
                <h1 class="h5 mb-0 text-gray-800"><i class="fas fa-history"></i> Recent Activities</h1>
              </div>
              <div class="card shadow mb-4 mt-4">
                <!-- Card Header - Accordion -->
                <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
                  <h6 class="m-0 font-weight-bold text-center text-secondary">Hari ini, <?= date("d M Y") ?></h6>
                </a>
                <!-- Card Content - Collapse -->
                <div class="collapse show" id="collapseCardExample">
                  <div class="card-body">
                    <?php
                    foreach ($aktivitas as $u) {
                      if ($u['created'] >= strtotime('today')) { ?>
                        <li>
                          <div class="form-group row mb-2">
                            <?php
                                if ($u['role_id'] == 2) { ?>
                              <div class="col-sm-10">
                                <strong class="text-info"><?= $u['username'] ?></strong> telah <?= $u['status'] ?> data pada <strong class="text-info"><?= $u['menu'] ?></strong>
                              </div>
                            <?php } else { ?>
                              <div class="col-sm-10">
                                <strong class="text-success"><?= $u['username'] ?></strong> telah <?= $u['status'] ?> data pada <strong class="text-success"><?= $u['menu'] ?></strong>
                              </div>
                            <?php } ?>
                            <?= 'Hari ini'; ?>
                          </div>
                          <hr class="sidebar-divider mb-2">
                        </li>
                    <?php }
                    } ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm">
              <div class="card shadow mb-4 mt-5">
                <!-- Card Header - Accordion -->
                <a href="#collapseCard" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
                  <h6 class="m-0 font-weight-bold text-center text-secondary">Aktivitas Sebelumnya</h6>
                </a>
                <!-- Card Content - Collapse -->
                <div class="collapse hide" id="collapseCard">
                  <div class="card-body">
                    <?php foreach ($aktivitas as $u) {
                      if ($u['created'] <= strtotime('today')) { ?>
                        <li>
                          <div class="form-group row mb-2">
                            <?php if ($u['role_id'] == 2) { ?>
                              <div class="col-sm-10">
                                <strong class="text-info"><?= $u['username'] ?></strong> telah <?= $u['status'] ?> data pada <strong class="text-info"><?= $u['menu'] ?></strong>
                              </div>
                            <?php } else { ?>
                              <div class="col-sm-10">
                                <strong class="text-success"><?= $u['username'] ?></strong> telah <?= $u['status'] ?> data pada <strong class="text-success"><?= $u['menu'] ?></strong>
                              </div>
                            <?php } ?>
                            <?= date("j M", $u['created']); ?>
                          </div>
                          <hr class="sidebar-divider mb-2">
                        </li>
                    <?php }
                    } ?>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-2">
            <h1 class="h2 mb-0 text-gray-800">Dashboard</h1>
          </div>
          <!-- Content Row -->
          <div class="row">

            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success mb-1">Mahasiswa dan Lulusan</div>
                      <div class="h6 mb-0 font-weight-bold text-gray-800"><?= $mhs_lulusan ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user-graduate fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success mb-1">Karya Mahasiswa</div>
                      <div class="h6 mb-0 font-weight-bold text-gray-800"><?= $aktivitasmhs ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-award fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success mb-1">Evaluasi Lulusan</div>
                      <?php if ($evaluasi == 1) { ?>
                        <div class="row no-gutters align-items-center">
                          <div class="col-auto">
                            <div class="h6 mb-0 mr-3 font-weight-bold text-gray-800">15%</div>
                          </div>
                          <div class="col">
                            <div class="progress progress-sm mr-2">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 15%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </div>
                      <?php } elseif ($evaluasi == 2) { ?>
                        <div class="row no-gutters align-items-center">
                          <div class="col-auto">
                            <div class="h6 mb-0 mr-3 font-weight-bold text-gray-800">35%</div>
                          </div>
                          <div class="col">
                            <div class="progress progress-sm mr-2">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 30%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </div>
                      <?php } elseif ($evaluasi == 3) { ?>
                        <div class="row no-gutters align-items-center">
                          <div class="col-auto">
                            <div class="h6 mb-0 mr-3 font-weight-bold text-gray-800">45%</div>
                          </div>
                          <div class="col">
                            <div class="progress progress-sm mr-2">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 45%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </div>
                      <?php } elseif ($evaluasi == 4) { ?>
                        <div class="row no-gutters align-items-center">
                          <div class="col-auto">
                            <div class="h6 mb-0 mr-3 font-weight-bold text-gray-800">65%</div>
                          </div>
                          <div class="col">
                            <div class="progress progress-sm mr-2">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 60%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </div>
                      <?php } elseif ($evaluasi == 5) { ?>
                        <div class="row no-gutters align-items-center">
                          <div class="col-auto">
                            <div class="h6 mb-0 mr-3 font-weight-bold text-gray-800">75%</div>
                          </div>
                          <div class="col">
                            <div class="progress progress-sm mr-2">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 75%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </div>
                      <?php } elseif ($evaluasi == 6) { ?>
                        <div class="row no-gutters align-items-center">
                          <div class="col-auto">
                            <div class="h6 mb-0 mr-3 font-weight-bold text-gray-800">95%</div>
                          </div>
                          <div class="col">
                            <div class="progress progress-sm mr-2">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 95%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </div>
                      <?php } elseif ($evaluasi == 0) { ?>
                        <div class="row no-gutters align-items-center">
                          <div class="col-auto">
                            <div class="h6 mb-0 mr-3 font-weight-bold text-gray-800">0%</div>
                          </div>
                          <div class="col">
                            <div class="progress progress-sm mr-2">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 0%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </div>
                      <?php } else { ?>
                        <div class="row no-gutters align-items-center">
                          <div class="col-auto">
                            <div class="h6 mb-0 mr-3 font-weight-bold text-gray-800">100%</div>
                          </div>
                          <div class="col">
                            <div class="progress progress-sm mr-2">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </div>
                      <?php } ?>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user-tie fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success mb-1">Mahasiswa Reguler</div>
                      <div class="h6 mb-0 font-weight-bold text-gray-800">-</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-users fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="form-group row">
            <div class="col-sm-7">
              <div class="d-sm-flex align-items-center justify-content-between mb-2">
                <h1 class="h5 mb-0 text-gray-800"><i class="fas fa-history"></i> Recent Activities</h1>
              </div>
              <div class="card mb-4">
                <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
                  <h6 class="m-0 font-weight-bold text-center text-success">Hari ini, <?= date("d M Y") ?></h6>
                </a>
                <!-- Card Content - Collapse -->
                <div class="collapse show" id="collapseCardExample">
                  <div class="card-body">
                    <?php
                    foreach ($aktivitas as $u) {
                      if ($u['created'] >= strtotime('today')) { ?>
                        <div class="card mb-2 py-1 border-bottom-success">
                          <div class="form-group row mb-2">
                            <?php if ($u['username'] == $this->session->userdata('username')) { ?>
                              <div class="col-sm-10">
                                <strong>Anda</strong> telah <?= $u['status'] ?> data pada <strong class="text-success"><?= $u['menu'] ?></strong>
                              </div>
                            <?php } else { ?>
                              <div class="col-sm-10">
                                <strong class="text-success"><?= $u['username'] ?></strong> telah <?= $u['status'] ?> data pada <strong class="text-success"><?= $u['menu'] ?></strong>
                              </div>
                            <?php }
                                echo 'Hari ini'; ?>
                          </div>
                        </div>
                        <hr class="sidebar-divider mb-2">
                    <?php }
                    } ?>
                  </div>
                </div>
              </div>

              <div class="card mb-4">
                <a href="#collapseCard" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
                  <h6 class="m-0 font-weight-bold text-center text-success">Aktivitas Sebelumnya</h6>
                </a>
                <div class="collapse hide" id="collapseCard">
                  <div class="card-body">
                    <?php foreach ($aktivitas as $u) {
                      if ($u['created'] <= strtotime('today')) { ?>
                        <div class="card mb-2 py-1 border-bottom-success">
                          <div class="form-group row mb-2">
                            <?php if ($u['username'] == $this->session->userdata('username')) { ?>
                              <div class="col-sm-10">
                                <strong>Anda</strong> telah <?= $u['status'] ?> data pada <strong class="text-success"><?= $u['menu'] ?></strong>
                              </div>
                            <?php } else { ?>
                              <div class="col-sm-10">
                                <strong class="text-success"><?= $u['username'] ?></strong> telah <?= $u['status'] ?> data pada <strong class="text-success"><?= $u['menu'] ?></strong>
                              </div>
                            <?php }
                                echo date("j M", $u['created']); ?>
                          </div>
                        </div>
                    <?php }
                    } ?>
                  </div>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h5 mb-0 text-gray-800"><i class="fas fa-arrow-circle-right"></i> Quick Menu</h1>
              </div>
              <div class="text-center mb-4">
                <a href="<?= site_url('C_MhsLulusan/mhs_lulusan') ?>" class="btn btn-success btn-circle btn-lg" style="width: 100px; height: 100px;">
                  <h6>Mahasiswa dan Lulusan</h6>
                </a>
                <a href="<?= site_url('C_KaryaIlmiahMhs/aktivitasMhs') ?>" class="btn btn-success btn-circle btn-lg" style="width: 100px; height: 100px;">
                  <h6>Karya Mahasiswa</h6>
                </a>
                <a href="<?= site_url('C_Evaluasi/evaluasi') ?>" class="btn btn-success btn-circle btn-lg" style="width: 100px; height: 100px;">
                  <h6>Evaluasi Lulusan</h6>
                </a>
                <a href="<?= site_url('C_MhsReguler/jumreg') ?>" class="btn btn-success btn-circle btn-lg" style="width: 100px; height: 100px;">
                  <h6>Jumlah Mhs. Reguler</h6>
                </a>
              </div>
            </div>
          </div>
        </div>
        <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->
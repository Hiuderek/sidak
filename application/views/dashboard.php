        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-2">
            <h1 class="h2 mb-0 text-gray-800">Dashboard</h1>
          </div>

          <!-- Content Row -->
          <div class="row">

            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info mb-1">Data Karyawan</div>
                      <div class="h6 mb-0 font-weight-bold text-gray-800"><?= $dosentetap; ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info mb-1">Data Gaji Karyawan</div>
                      <div class="h6 mb-0 font-weight-bold text-gray-800"><?= $dosentdktetap ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-database fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info mb-1">Laporan Proyek Karyawan</div>
                      <div class="h6 mb-0 font-weight-bold text-gray-800"><?= $aktivitas_dt ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-tasks fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info mb-1">Aktivitas Dosen Tidak Tetap</div>
                      <div class="h6 mb-0 font-weight-bold text-gray-800"><?= $aktivitas_dtt ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-tasks fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info mb-1">Kemampuan Dosen</div>
                      <div class="h6 mb-0 font-weight-bold text-gray-800"><?= $peningkatandosen ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-chart-line fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info mb-1">Penelitian Dosen</div>
                      <?php if ($penelitian == 1) { ?>
                        <div class="row no-gutters align-items-center">
                          <div class="col-auto">
                            <div class="h6 mb-0 mr-3 font-weight-bold text-gray-800">20%</div>
                          </div>
                          <div class="col">
                            <div class="progress progress-sm mr-2">
                              <div class="progress-bar bg-info" role="progressbar" style="width: 20%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </div>
                      <?php } else if ($penelitian == 2) { ?>
                        <div class="row no-gutters align-items-center">
                          <div class="col-auto">
                            <div class="h6 mb-0 mr-3 font-weight-bold text-gray-800">40%</div>
                          </div>
                          <div class="col">
                            <div class="progress progress-sm mr-2">
                              <div class="progress-bar bg-info" role="progressbar" style="width: 40%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </div>
                      <?php } else if ($penelitian == 3) { ?>
                        <div class="row no-gutters align-items-center">
                          <div class="col-auto">
                            <div class="h6 mb-0 mr-3 font-weight-bold text-gray-800">60%</div>
                          </div>
                          <div class="col">
                            <div class="progress progress-sm mr-2">
                              <div class="progress-bar bg-info" role="progressbar" style="width: 60%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </div>
                      <?php } else if ($penelitian == 4) { ?>
                        <div class="row no-gutters align-items-center">
                          <div class="col-auto">
                            <div class="h6 mb-0 mr-3 font-weight-bold text-gray-800">80%</div>
                          </div>
                          <div class="col">
                            <div class="progress progress-sm mr-2">
                              <div class="progress-bar bg-info" role="progressbar" style="width: 80%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
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
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info mb-1">Karya Ilmiah</div>
                      <div class="h6 mb-0 font-weight-bold text-gray-800"><?= $karyailmiah ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-microscope fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info mb-1">Pengabdian Masyarakat</div>
                      <?php if ($pengabdian == 1) { ?>
                        <div class="row no-gutters align-items-center">
                          <div class="col-auto">
                            <div class="h6 mb-0 mr-3 font-weight-bold text-gray-800">20%</div>
                          </div>
                          <div class="col">
                            <div class="progress progress-sm mr-2">
                              <div class="progress-bar bg-info" role="progressbar" style="width: 20%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </div>
                      <?php } else if ($pengabdian == 2) { ?>
                        <div class="row no-gutters align-items-center">
                          <div class="col-auto">
                            <div class="h6 mb-0 mr-3 font-weight-bold text-gray-800">40%</div>
                          </div>
                          <div class="col">
                            <div class="progress progress-sm mr-2">
                              <div class="progress-bar bg-info" role="progressbar" style="width: 40%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </div>
                      <?php } else if ($pengabdian == 3) { ?>
                        <div class="row no-gutters align-items-center">
                          <div class="col-auto">
                            <div class="h6 mb-0 mr-3 font-weight-bold text-gray-800">60%</div>
                          </div>
                          <div class="col">
                            <div class="progress progress-sm mr-2">
                              <div class="progress-bar bg-info" role="progressbar" style="width: 60%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </div>
                      <?php } else if ($pengabdian == 4) { ?>
                        <div class="row no-gutters align-items-center">
                          <div class="col-auto">
                            <div class="h6 mb-0 mr-3 font-weight-bold text-gray-800">80%</div>
                          </div>
                          <div class="col">
                            <div class="progress progress-sm mr-2">
                              <div class="progress-bar bg-info" role="progressbar" style="width: 80%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
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
                      <i class="fas fa-people-carry fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div> -->
          </div>

          <!-- <div class="form-group row">
            <div class="col-sm-8">
              <div class="d-sm-flex align-items-center justify-content-between mb-2">
                <h1 class="h5 mb-0 text-gray-800"><i class="fas fa-history"></i> Recent Activities (On Going)</h1>
              </div>
              <div class="card mb-4">
                <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
                  <h6 class="m-0 font-weight-bold text-center text-info">Hari ini, <?= date("d M Y") ?></h6>
                </a>
                <div class="collapse show" id="collapseCardExample">
                  <div class="card-body">
                    <?php
                    foreach ($aktivitas as $u) {
                      if ($u['created'] >= strtotime('today')) { ?>
                        <div class="card mb-2 py-1 border-bottom-info">
                          <div class="form-group row mb-2">
                            <?php if ($u['username'] == $this->session->userdata('username')) { ?>
                              <div class="col-sm-10">
                                <strong>Anda</strong> telah <?= $u['status'] ?> data pada <strong class="text-info"><?= $u['menu'] ?></strong>
                              </div>
                            <?php } else { ?>
                              <div class="col-sm-10">
                                <strong class="text-info"><?= $u['username'] ?> </strong><?= $u['status'] ?> data pada <strong class="text-info"><?= $u['menu'] ?></strong>
                              </div>
                            <?php }
                                echo 'Hari ini'; ?>
                          </div>
                        </div>
                    <?php }
                    } ?>
                  </div>
                </div>
              </div>

              <div class="card mb-4">
                <a href="#collapseCard" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
                  <h6 class="m-0 font-weight-bold text-center text-info">Aktivitas Sebelumnya</h6>
                </a>
                <div class="collapse hide" id="collapseCard">
                  <div class="card-body">
                    <?php foreach ($aktivitas as $u) {
                      if ($u['created'] <= strtotime('today')) { ?>
                        <div class="card mb-2 py-1 border-bottom-info">
                          <div class="form-group row mb-2">
                            <?php if ($u['username'] == $this->session->userdata('username')) { ?>
                              <div class="col-sm-11">
                                <strong>Anda</strong> <?= $u['status'] ?> data pada <strong class="text-info"><?= $u['menu'] ?></strong>
                              </div>
                            <?php } else { ?>
                              <div class="col-sm-11">
                                <strong class="text-info"><?= $u['username'] ?> </strong><?= $u['status'] ?> data pada <strong class="text-info"><?= $u['menu'] ?></strong>
                              </div>
                            <?php } ?>
                            <?= date("j M", $u['created']); ?>
                          </div>
                        </div>
                    <?php }
                    } ?>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-sm-4">
              <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h5 mb-0 text-gray-800"><i class="fas fa-arrow-circle-right"></i> Quick Menu</h1>
              </div>
              <div class="text-center mb-4">
                <a href="<?= site_url('C_DosenTetap/dosenTetap') ?>" class="btn btn-info btn-circle btn-lg" style="width: 100px; height: 100px;">
                  <h6>Dosen Tetap</h6>
                </a>
                <a href="<?= site_url('C_DosenTdkTetap/dosenTdkTetap') ?>" class="btn btn-info btn-circle btn-lg" style="width: 100px; height: 100px;">
                  <h6>Dosen Tidak Tetap</h6>
                </a>
                <a href="<?= site_url('C_Kemampuan/kemampuan') ?>" class="btn btn-info btn-circle btn-lg" style="width: 100px; height: 100px;">
                  <h6>Kemampuan Dosen</h6>
                </a>
                <a href="<?= site_url('C_Penelitian/penelitian') ?>" class="btn btn-info btn-circle btn-lg" style="width: 100px; height: 100px;">
                  <h6>Penelitian</h6>
                </a>
                <a href="<?= site_url('C_KaryaIlmiahDosen/karyailmiah') ?>" class="btn btn-info btn-circle btn-lg" style="width: 100px; height: 100px;">
                  <h6>Karya Ilmiah</h6>
                </a>
              </div>
            </div>
          </div> -->

        </div>
        <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->
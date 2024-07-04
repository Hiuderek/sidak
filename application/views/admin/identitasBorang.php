        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Daftar Profil Pengisi Borang</h1>
          </div>
          <div class="bg-success text-white" style="text-align: center"><?= $this->session->flashdata('message'); ?></div>
          <div class="my-2"></div>
          <a href="<?= base_url('welcome/regis') ?>" class="btn btn-light btn-icon-split btn-sm" style="margin-bottom: 10px">
            <span class="icon text-gray-600">
              <i class="fas fa-user-plus"></i>
            </span>
            <span class="text">Daftarkan Pengguna</span>
          </a>
          <?php
          foreach ($pengguna as $u) { ?>
            <?php if ($u['role_id'] != 1) { ?>
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <?php if ($u['role_id'] == 2) { ?>
                    <h6 class="m-0 font-weight-bold text-danger">Koordinator Dosen</h6>
                  <?php } else { ?>
                    <h6 class="m-0 font-weight-bold text-success">Koordinator Mahasiswa</h6>
                  <?php } ?>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                      <a class="dropdown-item" href="<?= site_url('Admin/editPengisiBorang/' . $u['id_user']) ?>">Ubah</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="" data-toggle="modal" data-target="#Mymodal<?= $u['id_user'] ?>">Hapus</a>
                    </div>
                  </div>
                </div>
                <!-- Card Body -->
                <div class="row no-gutters">
                  <div class="col-md-2">
                    <img src="<?= base_url('assets/img/profil/profil.png') ?>" class="card-img">
                  </div>
                  <div class="col-md-10">
                    <div class="card-body">
                      <h5 class="card-title"><?= $u['name'] ?></h5>
                      <p class="card-text">Username: <?= $u['username'] ?> </p>
                      <p class="card-text">E-mail: <?= $u['email'] ?> </p>
                      <p class="card-text"><small class="text-muted">Bergabung Sejak: <?= date('d F Y', $u['date_created']) ?></small></p>
                    </div>
                  </div>
                </div>
              </div>
              <!-- .modal -->
              <div class="modal fade" id="Mymodal<?= $u['id_user'] ?>">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title">
                        Notification
                      </h4>
                      <button type="button" class="close" data-dismiss="modal">
                        &times;
                      </button>
                    </div>
                    <div class="modal-body">
                      apakah anda ingin menghapus data pengguna ini?
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">
                        Batal
                      </button>
                      <a type="button" class="btn btn-primary" href="<?= base_url('Admin/hapus_pengguna/' . $u['id_user']); ?>">
                        OK
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            <?php } ?>
          <?php } ?>


        </div>
        <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->
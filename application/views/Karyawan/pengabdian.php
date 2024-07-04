  <!-- Begin Page Content -->
  <div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-info">Data Pengabdian Kepada Masyarakat</h6>
      </div>
      <div class="card-body">
        <?php if ($this->session->flashdata('message')) { ?>
          <div class="alert alert-success text-center alert-dismissible fade show" role="alert">
            <?= $this->session->flashdata('message'); ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        <?php } ?>
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <a href="<?= site_url('C_Pengabdian/tambahPengabdian'); ?>" class="btn btn-secondary btn-icon-split" style="margin-bottom: 10px">
              <span class="icon text-white-50">
                <i class="fas fa-plus"></i>
              </span>
              <span class="text">Tambah Data</span>
            </a>
            <a type="button" data-toggle="modal" data-target="#Mymodal" href="#" class="btn btn-success btn-icon-split" style="margin-bottom: 10px; margin-left: 10px" title="Kosongkan Data">
              <span class="icon text-white-50">
                <i class="fas fa-redo"></i>
              </span>
              <span class="text">Reset Data</span>
            </a>
            <a href="<?= site_url('C_Pengabdian/unduhPengabdian'); ?>" target="_blank" class="btn btn-info btn-icon-split" style="margin-bottom: 10px; margin-left: 10px">
              <span class="icon text-white-50">
                <i class="fas fa-download"></i>
              </span>
              <span class="text">Unduh Data</span>
            </a>
            <thead>
              <tr>
                <th style="text-align: center">Sumber Pembiayaan</th>
                <th style="text-align: center">TS-2 (2016)</th>
                <th style="text-align: center">TS-1 (2017)</th>
                <th style="text-align: center">TS (2018)</th>
                <th style="text-align: center">Aksi</th>
            </thead>
            <tbody>
              <?php foreach ($pengabdian as $u) { ?>
                <?php
                  $sumber = $u['sumber'];
                  ?>
                <?php if ($sumber == '1') { ?>
                  <th>Pembiayaan sendiri oleh peneliti</th>
                  <td><?= $u['tahun1'] ?></td>
                  <td><?= $u['tahun2'] ?></td>
                  <td><?= $u['tahun3'] ?></td>
                <?php } else if ($sumber == '2') { ?>
                  <th>PT yang bersangkutan</th>
                  <td><?= $u['tahun1'] ?></td>
                  <td><?= $u['tahun2'] ?></td>
                  <td><?= $u['tahun3'] ?></td>
                <?php } else if ($sumber == '3') { ?>
                  <th>Depdiknas</th>
                  <td><?= $u['tahun1'] ?></td>
                  <td><?= $u['tahun2'] ?></td>
                  <td><?= $u['tahun3'] ?></td>
                <?php } else if ($sumber == '4') { ?>
                  <th>Institusi dalam negeri di luar Depdiknas</th>
                  <td><?= $u['tahun1'] ?></td>
                  <td><?= $u['tahun2'] ?></td>
                  <td><?= $u['tahun3'] ?></td>
                <?php } else if ($sumber == '5') { ?>
                  <th>Institusi luar negeri</th>
                  <td><?= $u['tahun1'] ?></td>
                  <td><?= $u['tahun2'] ?></td>
                  <td><?= $u['tahun3'] ?></td>
                <?php } ?>
                <td>
                  <!-- .Launch Modal Button-->
                  <button type="button" class="btn btn-danger btn-circle btn-sm" data-toggle="modal" data-target="#Mymodal<?= $u['id_pengabdian'] ?>" title="Hapus">
                    <i class="fas fa-trash"></i>
                  </button>
                  <!-- .modal -->
                  <div class="modal fade" id="Mymodal<?= $u['id_pengabdian'] ?>">
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
                          Delete this data?
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">
                            Cancel
                          </button>
                          <a class="btn btn-info" href="<?= base_url('C_Pengabdian/hapusPengabdian/' . $u['id_pengabdian']); ?>">
                            OK
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- .modal -->
                  <div class="modal fade" id="Mymodal">
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
                          Reset this data?
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">
                            Cancel
                          </button>
                          <a class="btn btn-info" href="<?= base_url('C_Pengabdian/resetPengabdian/'); ?>">
                            OK
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </td>
                <tr></tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>


  </div>
  <!-- /.container-fluid -->


  </div>
  <!-- End of Main Content -->
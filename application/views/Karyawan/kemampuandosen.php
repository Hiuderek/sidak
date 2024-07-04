  <!-- Begin Page Content -->
  <div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-info">Data Peningkatan Kemampuan Dosen</h6>
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
            <a href="<?= site_url('C_Kemampuan/tambahKemampuan'); ?>" class="btn btn-secondary btn-icon-split" style="margin-bottom: 10px">
              <span class="icon text-white-50">
                <i class="fas fa-plus"></i>
              </span>
              <span class="text">Tambah Data</span>
            </a>
            <a href="<?= site_url('C_Kemampuan/unduhKemampuan'); ?>" target="_blank" class="btn btn-info btn-icon-split" style="margin-bottom: 10px; margin-left: 10px">
              <span class="icon text-white-50">
                <i class="fas fa-download"></i>
              </span>
              <span class="text">Unduh Data</span>
            </a>
            <thead>
              <tr>
                <th style="text-align: center">No.</th>
                <th style="text-align: center">Nama Dosen</th>
                <th style="text-align: center">Jenjang Pendidikan Lanjut</th>
                <th style="text-align: center">Bidang Studi</th>
                <th style="text-align: center">Perguruan Tinggi</th>
                <th style="text-align: center">Negara</th>
                <th style="text-align: center">Tahun Mulai Studi</th>
                <th style="text-align: center">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 1;
              foreach ($peningkatandosen as $u) { ?>
                <tr>
                  <td><?= $no++ ?></td>
                  <td><?= $u['nama'] ?></td>
                  <td><?= $u['jenjang'] ?></td>
                  <td><?= $u['bidang_studi'] ?></td>
                  <td><?= $u['perguruan_tinggi'] ?></td>
                  <td><?= $u['negara'] ?></td>
                  <td><?= $u['tahun'] ?></td>
                  <td>
                    <a href="<?= site_url('C_Kemampuan/editKemampuan/' . $u['id']) ?>" class="btn btn-primary btn-circle btn-sm" title="Ubah Data">
                      <i class="fas fa-edit"></i>
                    </a>
                    <!-- .Launch Modal Button-->
                    <button type="button" class="btn btn-danger btn-circle btn-sm" data-toggle="modal" data-target="#Mymodal<?= $u['id'] ?>" title="Hapus">
                      <i class="fas fa-trash"></i>
                    </button>
                    <!-- .modal -->
                    <div class="modal fade" id="Mymodal<?= $u['id'] ?>">
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
                            Are you sure delete this data?
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">
                              Cancel
                            </button>
                            <a type="button" class="btn btn-info" href="<?= base_url('C_Kemampuan/hapusKemampuan/' . $u['id']); ?>/">
                              OK
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>
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
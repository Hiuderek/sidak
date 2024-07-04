<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-success">Data Karya Mahasiswa</h6>
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
          <a href="<?php echo site_url('C_KaryaIlmiahMhs/tambahAktivitasMhs') ?>" class="btn btn-secondary btn-icon-split" style="margin-bottom: 10px">
            <span class="icon text-white-50">
              <i class="fas fa-plus"></i>
            </span>
            <span class="text">Tambah Data</span>
          </a>
          <a href="<?php echo site_url('C_KaryaIlmiahMhs/unduhAktivitasMhs') ?>" target="_blank" class="btn btn-success btn-icon-split" style="margin-bottom: 10px; margin-left: 10px">
            <span class="icon text-white-50">
              <i class="fas fa-download"></i>
            </span>
            <span class="text">Unduh Data</span>
          </a>
          <thead>
            <tr>
              <th>No.</th>
              <th>Nama Mahasiswa</th>
              <th>Nama Kegiatan</th>
              <th>Waktu Kegiatan</th>
              <th>Tingkat Kegiatan</th>
              <th>Prestasi</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $no = 1;
            foreach ($aktivitasmhs as $u) { ?>
              <tr>
                <td><?= $no++ ?></td>
                <td><?= $u['nama'] ?></td>
                <td><?= $u['kegiatan'] ?></td>
                <td><?= $u['waktu'] ?></td>
                <td><?= $u['tingkat_kegiatan'] ?></td>
                <td><?= $u['prestasi'] ?></td>
                <td>
                  <a href="<?= site_url('C_KaryaIlmiahMhs/editAktivitasMhs/' . $u['id']) ?>" class="btn btn-primary btn-circle btn-sm" title="Ubah Data">
                    <i class="fas fa-edit"></i>
                  </a>
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
                          <a type="button" class="btn btn-success" href="<?= base_url('C_KaryaIlmiahMhs/hapus_dataMhs/' . $u['id']); ?>/">
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
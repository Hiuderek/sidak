        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-info">Data Gaji Karyawan</h6>
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
                  <a href="<?php echo site_url('C_gaji/tambahGaji') ?>" class="btn btn-secondary btn-icon-split" style="margin-bottom:10px">
                    <span class="icon text-white-50">
                      <i class="fas fa-plus"></i>
                    </span>
                    <span class="text">Tambah Data</span>
                  </a>
                  <thead>
                    <tr>
                      <th style="text-align: center">No.</th>
                      <th style="text-align: center">Nama Karyawan</th>
                      <th style="text-align: center">Jabatan</th>
                      <th style="text-align: center">Tunjangan Jabatan</th>
                      <th style="text-align: center">Gaji Pokok</th>
                      <th style="text-align: center">Tunjangan Proyek</th>
                      <th style="text-align: center">Total Gaji</th>
                      <th style="text-align: center">No. Rekening</th>
                      <th style="text-align: center">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no = 1;
                    foreach ($gajiKaryawan as $u) { ?>
                      <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $u['nama_karyawan'] ?></td>
                        <td><?= $u['jabatan'] ?></td>
                        <td>Rp. <?= number_format($u['tunjangan_jabatan'],0,',','.') ?></td>
                        <td>Rp. <?= number_format($u['gaji_pokok'],0,',','.') ?></td>
                        <td>Rp. <?= number_format($u['tunjangan_proyek'],0,',','.') ?></td>
                        <td>Rp. <?= number_format(($u['tunjangan_jabatan']+$u['gaji_pokok']+$u['tunjangan_proyek']),0,',','.') ?></td>
                        <td><?= $u['no_rekening'] ?></td>
                        <td>
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#surat<?= $u['id'] ?>">
                            Tampilkan
                          </button>
                        </td>
=                       <td>
                          <a href="<?= site_url('C_DosenTdkTetap/editDosenTdkTetap/' . $u['id']) ?>" class="btn btn-primary btn-circle btn-sm" title="Ubah Data">
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
                                  <a type="button" class="btn btn-info" href="<?= base_url('C_DosenTdkTetap/hapus_dosentdktetap/' . $u['id']); ?>/">
                                    OK
                                  </a>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="modal fade" id="surat<?= $u['id'] ?>">
                            <div class="modal-dialog modal-lg">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h4 class="modal-title">
                                    Surat Bukti
                                  </h4>
                                  <button type="button" class="close" data-dismiss="modal">
                                    &times;
                                  </button>
                                </div>
                                <div class="modal-body">
                                  <embed width="100%" height="700" src="<?php print_r('../' . $u['suratbukti']) ?>" type="application/pdf"></embed>
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
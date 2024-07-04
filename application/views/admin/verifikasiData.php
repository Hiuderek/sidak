  <!-- Begin Page Content -->
  <div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-info">Verifikasi Data</h6>
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
          <h2 class="text-center">Dosen Tetap</h2>
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th style="text-align: center">No.</th>
                <th style="text-align: center">Nama Dosen</th>
                <th style="text-align: center">NIDN</th>
                <th style="text-align: center">Tanggal Lahir</th>
                <th style="text-align: center">Jabatan</th>
                <th colspan="2" style="text-align: center">Gelar
                  <table>
                    <th style="width: 140px; border: none">Depan</th>
                    <th style="width: 140px; border: none">Belakang</th>
                  </table>
                </th>
                <th colspan="3" style="text-align: center">Jenjang Pendidikan
                  <table>
                    <th style="width: 100px; border: none">S1</th>
                    <th style="width: 140px; border: none">S2</th>
                    <th style="width: 100px; border: none">S3</th>
                  </table>
                </th>
                <th colspan="3" style="text-align: center">Bidang Keahlian
                  <table>
                    <th style="width: 100px; border: none">S1</th>
                    <th style="width: 140px; border: none">S2</th>
                    <th style="width: 100px; border: none">S3</th>
                  </table>
                </th>
                <th style="text-align: center">Surat Bukti</th>
                <th style="text-align: center">Keterangan</th>
                <th style="text-align: center">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 1;
              foreach ($dosentetap as $u) {
                if ($u['keterangan'] == 'Belum Verifikasi') {
              ?>
                  <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $u['nama'] ?></td>
                    <td><?= $u['nidn'] ?></td>
                    <td><?= $u['tgl_lahir'] ?></td>
                    <td><?= $u['jabatan'] ?></td>
                    <td><?= $u['gelardepan'] ?></td>
                    <td><?= $u['gelarbelakang'] ?></td>
                    <td><?= $u['pendidikan1'] ?></td>
                    <td><?= $u['pendidikan2'] ?></td>
                    <td><?= $u['pendidikan3'] ?></td>
                    <td><?= $u['bidang1'] ?></td>
                    <td><?= $u['bidang2'] ?></td>
                    <td><?= $u['bidang3'] ?></td>
                    <td>
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#surat<?= $u['id'] ?>">
                        Tampilkan
                      </button>
                    </td>
                    <td><?= $u['keterangan'] ?></td>
                    <td>
                      <a href="<?= site_url('Admin/verif_dosentetap/' . $u['id']) ?>" class="btn btn-primary">
                        Verifikasi
                      </a>
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
              <?php }
              } ?>
            </tbody>
          </table>
        </div>
        <div class="table-responsive">
          <h2 class="text-center">Dosen Tidak Tetap</h2>
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th style="text-align: center">No.</th>
                <th style="text-align: center">Nama Dosen</th>
                <th style="text-align: center">NIDN</th>
                <th style="text-align: center">Tanggal Lahir</th>
                <th style="text-align: center">Jabatan</th>
                <th colspan="2" style="text-align: center">Gelar
                  <table>
                    <th style="width: 140px; border: none">Depan</th>
                    <th style="width: 140px; border: none">Belakang</th>
                  </table>
                </th>
                <th colspan="3" style="text-align: center">Jenjang Pendidikan
                  <table>
                    <th style="width: 100px; border: none">S1</th>
                    <th style="width: 140px; border: none">S2</th>
                    <th style="width: 100px; border: none">S3</th>
                  </table>
                </th>
                <th colspan="3" style="text-align: center">Bidang Keahlian
                  <table>
                    <th style="width: 100px; border: none">S1</th>
                    <th style="width: 140px; border: none">S2</th>
                    <th style="width: 100px; border: none">S3</th>
                  </table>
                </th>
                <th style="text-align: center">Surat Bukti</th>
                <th style="text-align: center">Keterangan</th>
                <th style="text-align: center">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 1;
              foreach ($dosentdktetap as $u) {
                if ($u['keterangan'] == 'Belum Verifikasi') {
              ?>
                  <input type="hidden" class="form-control" value="<?= $u['nama']; ?>">
                  <input type="hidden" class="form-control" value="<?= $u['nidn']; ?>">
                  <input type="hidden" class="form-control" value="<?= $u['tgl_lahir']; ?>">
                  <input type="hidden" class="form-control" value="<?= $u['jabatan']; ?>">
                  <input type="hidden" class="form-control" value="<?= $u['gelardepan']; ?>">
                  <input type="hidden" class="form-control" value="<?= $u['gelarbelakang']; ?>">
                  <input type="hidden" class="form-control" value="<?= $u['pendidikan1']; ?>">
                  <input type="hidden" class="form-control" value="<?= $u['pendidikan2']; ?>">
                  <input type="hidden" class="form-control" value="<?= $u['pendidikan3']; ?>">
                  <input type="hidden" class="form-control" value="<?= $u['bidang1']; ?>">
                  <input type="hidden" class="form-control" value="<?= $u['bidang2']; ?>">
                  <input type="hidden" class="form-control" value="<?= $u['bidang3']; ?>">
                  <input type="hidden" class="form-control" value="<?= $u['suratbukti']; ?>">
                  <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $u['nama'] ?></td>
                    <td><?= $u['nidn'] ?></td>
                    <td><?= $u['tgl_lahir'] ?></td>
                    <td><?= $u['jabatan'] ?></td>
                    <td><?= $u['gelardepan'] ?></td>
                    <td><?= $u['gelarbelakang'] ?></td>
                    <td><?= $u['pendidikan1'] ?></td>
                    <td><?= $u['pendidikan2'] ?></td>
                    <td><?= $u['pendidikan3'] ?></td>
                    <td><?= $u['bidang1'] ?></td>
                    <td><?= $u['bidang2'] ?></td>
                    <td><?= $u['bidang3'] ?></td>
                    <td>
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#surat<?= $u['id'] ?>">
                        Tampilkan
                      </button>
                    </td>
                    <td><?= $u['keterangan'] ?></td>
                    <td>
                      <a href="<?= site_url('Admin/verif_dosentdktetap/' . $u['id']) ?>" class="btn btn-primary">
                        Verifikasi
                      </a>
                      <!-- .modal -->
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
              <?php }
              } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>


  </div>
  <!-- /.container-fluid -->


  </div>
  <!-- End of Main Content -->
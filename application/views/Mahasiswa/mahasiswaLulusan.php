<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-success">Data Mahasiswa dan Lulusan</h6>
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
          <a href="<?php echo site_url('C_MhsLulusan/tambah_mhs_lulusan') ?>" class="btn btn-secondary btn-icon-split" style="margin-bottom: 10px">
            <span class="icon text-white-50">
              <i class="fas fa-plus"></i>
            </span>
            <span class="text">Tambah Data</span>
          </a>
          <a href="<?php echo site_url('C_MhsLulusan/unduh_mhs_lulusan') ?>" target="_blank" class="btn btn-success btn-icon-split" style="margin-bottom: 10px; margin-left: 10px">
            <span class="icon text-white-50">
              <i class="fas fa-download"></i>
            </span>
            <span class="text">Unduh Data</span>
          </a>
          <thead>
            <tr>
              <th>No.</th>
              <th style="text-align: center; width: 10px">Tahun Akademik</th>
              <th style="text-align: center; width: 10px">Daya Tampung</th>
              <th colspan="2" style="text-align: center; width: 10px">Jumlah Calon Mahasiswa Reguler
                <table>
                  <th style="border-bottom: 1px; border-left: 1px; border-right: 1px">Ikut Seleksi</th>
                  <th style="border-bottom: 1px; border-left: 1px; border-right: 1px">Lulus Seleksi</th>
                </table>
              </th>
              <th colspan="2" style="text-align: center; width: 10px">Jumlah Mahasiswa Baru
                <table>
                  <th style="border-bottom: 1px; border-left: 1px; border-right: 1px">Reguler</th>
                  <th style="border-bottom: 1px; border-left: 1px; border-right: 1px">Transfer</th>
                </table>
              </th>
              <th colspan="2" style="text-align: center; width: 10px">Jumlah Total Mahasiswa
                <table>
                  <th style="border-bottom: 1px; border-left: 1px; border-right: 1px">Reguler</th>
                  <th style="border-bottom: 1px; border-left: 1px; border-right: 1px">Transfer</th>
                </table>
              </th>
              <th colspan="2" style="text-align: center; width: 10px">Jumlah Lulusan
                <table>
                  <th style="border-bottom: 1px; border-left: 1px; border-right: 1px">Reguler</th>
                  <th style="border-bottom: 1px; border-left: 1px; border-right: 1px">Transfer</th>
                </table>
              </th>
              <th colspan="3" style="text-align: center; width: 10px">IPK Lulusan Reguler
                <table>
                  <th style="border-bottom: 1px; border-left: 1px; border-right: 1px">Min</th>
                  <th style="border-bottom: 1px; border-left: 1px; border-right: 1px">Rat</th>
                  <th style="border-bottom: 1px; border-left: 1px; border-right: 1px">Mak</th>
                </table>
              </th>
              <th colspan="3" style="text-align: center; width: 10px">Persentase Lulusan Reguler dengan IPK
                <table>
                  <th style="border-bottom: 1px; border-left: 1px; border-right: 1px"><?= "<2,75" ?></th>
                  <th style="border-bottom: 1px; border-left: 1px; border-right: 1px">2,75-3,50</th>
                  <th style="border-bottom: 1px; border-left: 1px; border-right: 1px"><?= ">3,50" ?></th>
                </table>
              </th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $no = 1;
            $jum1 = 0;
            $jum2 = 0;
            $jum3 = 0;
            $jum4 = 0;
            $jum5 = 0;
            $jum6 = 0;
            $jum7 = 0;
            $jum8 = 0;
            $jum9 = 0;
            foreach ($mhs_lulusan as $u) { ?>
              <tr>
                <td><?= $no++ ?></td>
                <td><?= $u['tahun'] ?></td>
                <td><?= $u['dayaTampung'] ?></td>
                <td><?= $u['seleksi'] ?></td>
                <td><?= $u['lulus'] ?></td>
                <td><?= $u['maba_reg'] ?></td>
                <td><?= $u['maba_transfer'] ?></td>
                <td><?= $u['mhs_reg'] ?></td>
                <td><?= $u['mhs_transfer'] ?></td>
                <td><?= $u['lulusan_reg'] ?></td>
                <td><?= $u['lulusan_transfer'] ?></td>
                <td><?= $u['ipk_min'] ?></td>
                <td><?= $u['ipk_rat'] ?></td>
                <td><?= $u['ipk_mak'] ?></td>
                <td><?= $u['persen_min'] ?></td>
                <td><?= $u['persen_mid'] ?></td>
                <td><?= $u['persen_mak'] ?></td>
                <td>
                  <a href="<?= site_url('C_MhsLulusan/edit_mhs_lulusan/' . $u['id']) ?>" class="btn btn-primary btn-circle btn-sm" title="Ubah Data">
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
                          <a type="button" class="btn btn-success" href="<?= base_url('C_MhsLulusan/hapus_mhs_lulusan/' . $u['id']); ?>/">
                            OK
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </td>
              </tr>
            <?php
              $jum1 += $u['dayaTampung'];
              $jum2 += $u['seleksi'];
              $jum3 += $u['lulus'];
              $jum4 += $u['maba_reg'];
              $jum5 += $u['maba_transfer'];
              $jum6 += $u['mhs_reg'];
              $jum7 += $u['mhs_transfer'];
              $jum8 += $u['lulusan_reg'];
              $jum9 += $u['lulusan_transfer'];
            } ?>
          </tbody>
          <tbody>
            <tr>
              <th colspan="2">Jumlah</th>
              <th><?php echo $jum1 ?></th>
              <th><?php echo $jum2 ?></th>
              <th><?php echo $jum3 ?></th>
              <th><?php echo $jum4 ?></th>
              <th><?php echo $jum5 ?></th>
              <th><?php echo $jum6 ?></th>
              <th><?php echo $jum7 ?></th>
              <th><?php echo $jum8 ?></th>
              <th><?php echo $jum9 ?></th>
              <th style="background: #07a654"></th>
              <th style="background: #07a654"></th>
              <th style="background: #07a654"></th>
              <th style="background: #07a654"></th>
              <th style="background: #07a654"></th>
              <th style="background: #07a654"></th>
              <th style="background: #07a654"></th>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->
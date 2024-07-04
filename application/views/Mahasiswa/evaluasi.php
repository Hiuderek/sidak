<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-success">Data Evaluasi Lulusan</h6>
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
      <?php
      $hasil = 0;
      $hasil2 = 0;
      foreach ($total as $u) {
        $hasil += $u['lulusan_reg'];
        $hasil2 += $u['lulusan_transfer'];
        $all = $hasil + $hasil2;
      }
      ?>
      <?php if ($hitung < 1) { ?>
        <div class="table-responsive">
          <div class="text-center containter-6">
            <h5>Adakah studi pelacakan (<i>tracer study</i>) untuk mendapatkan hasil evaluasi kinerja lulusan dengan pihak pengguna?</h5>
            <div class="form-check mb-2">
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="defaultUnchecked">
                <label class="custom-control-label" for="defaultUnchecked">Ya</label>
              </div>
            </div>
          </div>
          <div id="delivery" style="display:none;">
            <form class="form-horizontal" method="post" action="<?= site_url('tambahData/evaluasi') ?>">
              <div class="form-group text-center">
                <h5>Isi form di bawah ini*</h5>
              </div>
              <b>Total Mahasiswa lulusan saat ini: <?= $all; ?></b>
              <span class="selection-box"><select class="form-control mb-3" style="width:100%" name="jenis" required>
                  <option selected disabled>Jenis Kemampuan</option>
                  <option value=1>Integritas (etika dan moral)</option>
                  <option value=2>Keahlian berdasarkan bidang ilmu (profesionalisme)</option>
                  <option value=3>Bahasa Inggris</option>
                  <option value=4>Penggunaan Teknologi Informasi</option>
                  <option value=5>Komunikasi</option>
                  <option value=6>Kerjasama tim</option>
                  <option value=7>Pengembangan diri</option>
                </select></span>
              <div class="form-group">
                <input type="text" id="nilai0" onkeyup="sum()" class="form-control" hidden value=<?= $all; ?> />
                <input type="number" min="0" max="<?= $all ?>" id="nilai1" onkeyup="sum()" class="form-control" name="nilai1" placeholder="Sangat Baik (angka)" />
              </div>
              <div class="form-group">
                <input type="number" min="0" max="<?= $all ?>" id="nilai2" onkeyup="sum2()" class="form-control" name="nilai2" placeholder="Baik (angka)" />
              </div>
              <div class="form-group">
                <input type="number" min="0" max="<?= $all ?>" id="nilai3" onkeyup="sum3()" class="form-control" name="nilai3" placeholder="Cukup (angka)" />
              </div>
              <div class="form-group">
                <input type="number" min="0" max="<?= $all ?>" id="nilai4" onkeyup="sum3()" class="form-control" name="nilai4" placeholder="Kurang (angka)" />
              </div>
              <div class="form-group">
                <textarea type="text" class="form-control" required name="keterangan" placeholder="Rencana Tindak Lanjut oleh Program Studi"></textarea>
              </div>
              <button class="btn btn-success btn-user btn-block" type="submit">
                Simpan
              </button>
              <p class="mt-4 mb-2">*Hasil persentase akan didapatkan dari perhitungan:</p>
              <p class="text-center">&Sigma; 1 Jenis Kemampuan</p>
              <div class="row text-center">
                <div class="col-sm">
                </div>
                <div class="col-sm">
                  <hr style="margin-top: -10px; width: 50%;">
                </div>
                <div class="col-sm">
                  <p style="margin-top: -20px; float:left; margin-left: -90px">&Cross; 100</p>
                </div>
              </div>
              <p class="text-center" style="margin-top: -20px"> &Sigma; Mahasiswa Lulusan</p>
          </div>
          <script type="text/javascript">
            var checkbox = document.getElementById('defaultUnchecked');
            var delivery_div = document.getElementById('delivery');
            var showHiddenDiv = function() {
              if (checkbox.checked) {
                delivery_div.style['display'] = 'block';
              } else {
                delivery_div.style['display'] = 'none';
              }
            }
            checkbox.onclick = showHiddenDiv;
            showHiddenDiv();
          </script>
        <?php } else { ?>
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <a href="<?= site_url('C_Evaluasi/tambahEval'); ?>" class="btn btn-secondary btn-icon-split" style="margin-bottom: 10px">
                <span class="icon text-white-50">
                  <i class="fas fa-plus"></i>
                </span>
                <span class="text">Tambah Data</span>
              </a>
              <a type="button" data-toggle="modal" data-target="#Mymodal" href="#" class="btn btn-primary btn-icon-split" style="margin-bottom: 10px; margin-left: 10px" title="Kosongkan Data">
                <span class="icon text-white-50">
                  <i class="fas fa-redo"></i>
                </span>
                <span class="text">Reset Data</span>
              </a>
              <a href="<?= site_url('C_Evaluasi/unduhEval'); ?>" target="_blank" class="btn btn-success btn-icon-split" style="margin-bottom: 10px; margin-left: 10px">
                <span class="icon text-white-50">
                  <i class="fas fa-download"></i>
                </span>
                <span class="text">Unduh Data</span>
              </a>
              <thead>
                <tr>
                  <th style="text-align: center">Jenis Kemampuan</th>
                  <th style="text-align: center">Sangat Baik (%)</th>
                  <th style="text-align: center" colspan="2">Baik<br>(%)</th>
                  <th style="text-align: center">Cukup (%)</th>
                  <th style="text-align: center">Kurang (%)</th>
                  <th style="text-align: center">Rencana Tindak Lanjut oleh Program Studi</th>
                  <th style="text-align: center">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  $jum1 = 0;
                  $jum2 = 0;
                  $jum3 = 0;
                  $jum4 = 0;
                  $jum1_1 = 0;
                  $jum1_2 = 0;
                  $jum1_3 = 0;
                  $jum1_4 = 0;
                  $jum2_1 = 0;
                  $jum2_2 = 0;
                  $jum2_3 = 0;
                  $jum2_4 = 0;
                  $jum3_1 = 0;
                  $jum3_2 = 0;
                  $jum3_3 = 0;
                  $jum3_4 = 0;
                  $jum4_1 = 0;
                  $jum4_2 = 0;
                  $jum4_3 = 0;
                  $jum4_4 = 0;
                  $jum5_1 = 0;
                  $jum5_2 = 0;
                  $jum5_3 = 0;
                  $jum5_4 = 0;
                  $jum6_1 = 0;
                  $jum6_2 = 0;
                  $jum6_3 = 0;
                  $jum6_4 = 0;
                  $jum7_1 = 0;
                  $jum7_2 = 0;
                  $jum7_3 = 0;
                  $jum7_4 = 0;
                  foreach ($evaluasi as $u) { ?>
                  <?php
                      $jenis = $u['jenis'];
                      ?>
                  <?php if ($jenis == '1') { ?>
                    <th>Integritas (etika dan moral)</th>
                    <td><?= number_format($jum1_1 = (($u['nilai1'] / $all) * 100), 2); ?></td>
                    <td colspan="2"><?= number_format($jum1_2 = (($u['nilai2'] / $all) * 100), 2); ?></td>
                    <td><?= number_format($jum1_3 = (($u['nilai3'] / $all) * 100), 2); ?></td>
                    <td><?= number_format($jum1_4 = (($u['nilai4'] / $all) * 100), 2); ?></td>
                    <td><?= $u['keterangan'] ?></td>
                  <?php } else if ($jenis == '2') { ?>
                    <th>Keahlian berdasarkan bidang ilmu (profesionalisme)</th>
                    <td><?= number_format($jum2_1 = (($u['nilai1'] / $all) * 100), 2); ?></td>
                    <td colspan="2"><?= number_format($jum2_2 = (($u['nilai2'] / $all) * 100), 2); ?></td>
                    <td><?= number_format($jum2_3 = (($u['nilai3'] / $all) * 100), 2); ?></td>
                    <td><?= number_format($jum2_4 = (($u['nilai4'] / $all) * 100), 2); ?></td>
                    <td><?= $u['keterangan'] ?></td>
                  <?php } else if ($jenis == '3') { ?>
                    <th>Bahasa Inggris</th>
                    <td><?= number_format($jum3_1 = (($u['nilai1'] / $all) * 100), 2); ?></td>
                    <td colspan="2"><?= number_format($jum3_2 = (($u['nilai2'] / $all) * 100), 2); ?></td>
                    <td><?= number_format($jum3_3 = (($u['nilai3'] / $all) * 100), 2); ?></td>
                    <td><?= number_format($jum3_4 = (($u['nilai4'] / $all) * 100), 2); ?></td>
                    <td><?= $u['keterangan'] ?></td>
                  <?php } else if ($jenis == '4') { ?>
                    <th>Penggunaan Teknologi Informasi</th>
                    <td><?= number_format($jum4_1 = (($u['nilai1'] / $all) * 100), 2); ?></td>
                    <td colspan="2"><?= number_format($jum4_2 = (($u['nilai2'] / $all) * 100), 2); ?></td>
                    <td><?= number_format($jum4_3 = (($u['nilai3'] / $all) * 100), 2); ?></td>
                    <td><?= number_format($jum4_4 = (($u['nilai4'] / $all) * 100), 2); ?></td>
                    <td><?= $u['keterangan'] ?></td>
                  <?php } else if ($jenis == '5') { ?>
                    <th>Komunikasi</th>
                    <td><?= number_format($jum5_1 = (($u['nilai1'] / $all) * 100), 2); ?></td>
                    <td colspan="2"><?= number_format($jum5_2 = (($u['nilai2'] / $all) * 100), 2); ?></td>
                    <td><?= number_format($jum5_3 = (($u['nilai3'] / $all) * 100), 2); ?></td>
                    <td><?= number_format($jum5_4 = (($u['nilai4'] / $all) * 100), 2); ?></td>
                    <td><?= $u['keterangan'] ?></td>
                  <?php } else if ($jenis == '6') { ?>
                    <th>Kerjasama tim</th>
                    <td><?= number_format($jum6_1 = (($u['nilai1'] / $all) * 100), 2); ?></td>
                    <td colspan="2"><?= number_format($jum6_2 = (($u['nilai2'] / $all) * 100), 2); ?></td>
                    <td><?= number_format($jum6_3 = (($u['nilai3'] / $all) * 100), 2); ?></td>
                    <td><?= number_format($jum6_4 = (($u['nilai4'] / $all) * 100), 2); ?></td>
                    <td><?= $u['keterangan'] ?></td>
                  <?php } else if ($jenis == '7') { ?>
                    <th>Pengembangan diri</th>
                    <td><?= number_format($jum7_1 = (($u['nilai1'] / $all) * 100), 2); ?></td>
                    <td colspan="2"><?= number_format($jum7_2 = (($u['nilai2'] / $all) * 100), 2); ?></td>
                    <td><?= number_format($jum7_3 = (($u['nilai3'] / $all) * 100), 2); ?></td>
                    <td><?= number_format($jum7_4 = (($u['nilai4'] / $all) * 100), 2); ?></td>
                    <td><?= $u['keterangan'] ?></td>
                  <?php
                      }
                      $jum1 = $jum1_1 + $jum2_1 + $jum3_1 + $jum4_1 + $jum5_1 + $jum6_1 + $jum7_1;
                      $jum2 = $jum1_2 + $jum2_2 + $jum3_2 + $jum4_2 + $jum5_2 + $jum6_2 + $jum7_2;
                      $jum3 = $jum1_3 + $jum2_3 + $jum3_3 + $jum4_3 + $jum5_3 + $jum6_3 + $jum7_3;
                      $jum4 = $jum1_4 + $jum2_4 + $jum3_4 + $jum4_4 + $jum5_4 + $jum6_4 + $jum7_4;
                      ?>
                  <td>
                    <!-- .Launch Modal Button-->
                    <button type="button" class="btn btn-danger btn-circle btn-sm" data-toggle="modal" data-target="#Mymodal<?= $u['id_evaluasi'] ?>" title="Hapus">
                      <i class="fas fa-trash"></i>
                    </button>
                    <!-- .modal -->
                    <div class="modal fade" id="Mymodal<?= $u['id_evaluasi'] ?>">
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
                            <a class="btn btn-success" href="<?= base_url('C_Evaluasi/hapus_eval/' . $u['id_evaluasi']); ?>/">
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
                            <a class="btn btn-success" href="<?= base_url('C_Evaluasi/resetEvaluasi/'); ?>">
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
            <tbody>
              <tr>
                <th class="text-center">Jumlah</th>
                <th class="text-center">(a = <?= number_format(($jum1), 2); ?>)</th>
                <th class="text-center" colspan="2">(b = <?= number_format(($jum2), 2); ?>)</th>
                <th class="text-center">(c = <?= number_format(($jum3), 2); ?>)</th>
                <th class="text-center">(d = <?= number_format(($jum4), 2); ?>)</th>
                <th style="background: #07a654"></th>
                <th style="background: #07a654"></th>
              </tr>
            </tbody>
          <?php } ?>
            </table>
          </div>
        </div>
    </div>
  </div>
  <!-- /.container-fluid -->
</div>
<!-- End of Main Content -->
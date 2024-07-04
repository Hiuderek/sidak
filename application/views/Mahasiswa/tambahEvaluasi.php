<!-- Begin Page Content -->
<div class="container-fluid">
  <div class="p-3">
    <div class="text-left">
      <h2 class="h2 text-gray-900 mb-1">Tambah Data Evaluasi Lulusan</h2>
    </div>
    <div class="text-center p-t-10">
      <hr class="sidebar-divider">
    </div>
    <?php
    $hasil = 0;
    $hasil2 = 0;
    foreach ($total as $u) {
      $hasil += $u['lulusan_reg'];
      $hasil2 += $u['lulusan_transfer'];
      $all = $hasil + $hasil2;
    }
    ?>
    <form method="post" style="width: 100%" action="<?php echo site_url('C_Evaluasi/tambahEval_aksi/') ?>" class="form-group">
      <div class="form-group">
        <h5 class="text-center">Total Mahasiswa lulusan saat ini: <?= $all; ?></h5>
        <span class="selection-box"><select class="form-control" style="width:100%" name="jenis" required>
            <option selected disabled>Jenis Kemampuan</option>
            <option value=1>Integritas (etika dan moral)</option>
            <option value=2>Keahlian berdasarkan bidang ilmu (profesionalisme)</option>
            <option value=3>Bahasa Inggris</option>
            <option value=4>Penggunaan Teknologi Informasi</option>
            <option value=5>Komunikasi</option>
            <option value=6>Kerjasama tim</option>
            <option value=7>Pengembangan diri</option>
          </select></span>
        <?= form_error('jenis', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <input type="number" id="nilai0" onkeyup="sum();" class="form-control" hidden value='<?= $all; ?>' />
        <input type="number" step="0.1" min="0" max="<?= $all; ?>" id="nilai1" onkeyup="sum();" class="form-control" name="nilai1" placeholder="Sangat Baik (angka)" />
      </div>
      <div class="form-group">
        <input type="number" step="0.1" min="0" max="<?= $all; ?>" id="nilai2" onkeyup="sum2();" class="form-control" name="nilai2" placeholder="Baik (angka)" />
      </div>
      <div class="form-group">
        <input type="number" step="0.1" min="0" max="<?= $all; ?>" id="nilai3" onkeyup="sum3();" class="form-control" name="nilai3" placeholder="Cukup (angka)" />
      </div>
      <div class="form-group">
        <input type="number" step="0.1" min="0" max="<?= $all; ?>" id="nilai4" onkeyup="sum3();" class="form-control" name="nilai4" placeholder="Kurang (angka)" />
      </div>
      <div class="form-group">
        <textarea type="text" class="form-control" required name="keterangan" placeholder="Rencana Tindak Lanjut oleh Program Studi"></textarea>
      </div>
      <button class="btn btn-success btn-block" type="submit">
        Simpan
      </button>
  </div>
</div> <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
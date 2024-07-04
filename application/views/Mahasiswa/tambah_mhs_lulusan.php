<!-- Begin Page Content -->
<div class="container-fluid">
  <div class="p-3">
    <div class="text-left">
      <h2 class="h2 text-gray-900 mb-1">Tambah Data Mahasiswa dan Lulusan</h2>
    </div>
    <div class="text-center p-t-10">
      <hr class="sidebar-divider">
    </div>
    <form method="post" style="width: 100%" action="<?php echo site_url('C_MhsLulusan/tambah_mhs_lulusan_aksi/') ?>" class="form-row">
      <div class="col" style="width:45%">
        <div class="form-group">
          <div class="input-group-addon">
            <span class="selection-box"><select class="form-control" name="tahun" required>
                <option selected disabled>Tahun Akademik</option>
                <option>2014/2015</option>
                <option>2015/2016</option>
                <option>2016/2017</option>
                <option>2017/2018</option>
                <option>2018/2019</option>
              </select></span></p>
          </div>
          <?= form_error('tahun', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
          <input type="number" min="1" class="form-control form-control-user" name="dayaTampung" placeholder="Daya Tampung" value="<?= set_value('dayaTampung') ?>">
          <?= form_error('dayaTampung', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="text-left">
          <h5 class="text-gray-900">Jumlah Calon Mahasiswa Reguler</h5>
        </div>
        <div class="form-group">
          <input type="number" min="1" class="form-control form-control-user" name="seleksi" placeholder="Jumlah Ikut Seleksi" value="<?= set_value('seleksi') ?>">
          <?= form_error('seleksi', '<small class="text-danger pl-3">', '</small>'); ?>
          <input type="number" min="1" class="form-control form-control-user" name="lulus" placeholder="Jumlah Lulus Seleksi" value="<?= set_value('lulus') ?>">
          <?= form_error('lulus', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="text-left">
          <h5 class="text-gray-900">Jumlah Mahasiswa Baru</h5>
        </div>
        <div class="form-group">
          <input type="number" min="1" class="form-control form-control-user" name="maba_reg" placeholder="Jumlah Mahasiswa Reguler" value="<?= set_value('maba_reg') ?>">
          <?= form_error('maba_reg', '<small class="text-danger pl-3">', '</small>'); ?>
          <input type="number" min="0" class="form-control form-control-user" name="maba_transfer" placeholder="Jumlah Mahasiswa Transfer" value="<?= set_value('maba_transfer') ?>">
          <?= form_error('maba_transfer', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="text-left">
          <h5 class="text-gray-900">Jumlah Total Mahasiswa</h5>
        </div>
        <div class="form-group">
          <input type="number" min="1" class="form-control form-control-user" name="mhs_reg" placeholder="Jumlah Mahasiswa Reguler" value="<?= set_value('mhs_reg') ?>">
          <?= form_error('mhs_reg', '<small class="text-danger pl-3">', '</small>'); ?>
          <input type="number" min="0" class="form-control form-control-user" name="mhs_transfer" placeholder="Jumlah Mahasiswa Transfer" value="<?= set_value('mhs_transfer') ?>">
          <?= form_error('mhs_transfer', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
      </div>
      <div class="col" style="width:45%">
        <div class="text-left">
          <h5 class="text-gray-900">Jumlah Lulusan</h5>
        </div>
        <div class="form-group">
          <input type="number" min="1" class="form-control form-control-user" name="lulusan_reg" placeholder="Jumlah Mahasiswa Reguler" value="<?= set_value('lulusan_reg') ?>">
          <?= form_error('lulusan_reg', '<small class="text-danger pl-3">', '</small>'); ?>
          <input type="number" min="0" class="form-control form-control-user" name="lulusan_transfer" placeholder="Jumlah Mahasiswa Transfer" value="<?= set_value('lulusan_transfer') ?>">
          <?= form_error('lulusan_transfer', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="text-left">
          <h5 class="text-gray-900">IPK Lulusan Reguler</h5>
        </div>
        <div class="form-group">
          <input type="number" step="0.01" min="0" max="4" class="form-control form-control-user" name="ipk_min" placeholder="Min" value="<?= set_value('ipk_min') ?>">
          <?= form_error('ipk_min', '<small class="text-danger pl-3">', '</small>'); ?>
          <input type="number" step="0.01" min="0" max="4" class="form-control form-control-user" name="ipk_rat" placeholder="Rat" value="<?= set_value('ipk_rat') ?>">
          <?= form_error('ipk_rat', '<small class="text-danger pl-3">', '</small>'); ?>
          <input type="number" step="0.01" min="0" max="4" class="form-control form-control-user" name="ipk_mak" placeholder="Mak" value="<?= set_value('ipk_mak') ?>">
          <?= form_error('ipk_mak', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="text-left">
          <h5 class="text-gray-900">Persentase Lulusan Reguler dengan IPK </h5>
        </div>
        <div class="form-group">
          <input type="number" step="0.01" min="0" class="form-control form-control-user" name="persen_min" placeholder="<2.75" value="<?= set_value('persen_min') ?>">
          <?= form_error('persen_min', '<small class="text-danger pl-3">', '</small>'); ?>
          <input type="number" step="0.01" min="0" class="form-control form-control-user" name="persen_mid" placeholder="2.75-3.50" value="<?= set_value('persen_mid') ?>">
          <?= form_error('persen_mid', '<small class="text-danger pl-3">', '</small>'); ?>
          <input type="number" step="0.01" min="0" class="form-control form-control-user" name="persen_mak" placeholder=">3.50" value="<?= set_value('persen_mak') ?>">
          <?= form_error('persen_mak', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
      </div>
      <button class="btn btn-success btn-block" type="submit">
        Simpan
      </button>
  </div>
</div> <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
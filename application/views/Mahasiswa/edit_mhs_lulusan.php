<!-- Begin Page Content -->
<div class="container-fluid">
  <div class="p-3">
    <div class="text-left">
      <h2 class="h2 text-gray-900 mb-4">Ubah Data Mahasiswa dan Lulusan</h2>
    </div>
    <form method="post" style="width: 100%" action="<?php echo site_url('C_MhsLulusan/edit_mhs_lulusan_aksi/' . $mhs_lulusan->id) ?>" class="form-row">
      <div class="col" style="width:45%">
        <div class="form-group">
          <i class="h5 text-gray-900 mb-4">[Tahun Akademik]
            <span class="selection-box"><select class="form-control" name="tahun" required value="<?= $mhs_lulusan->tahun ?>">
                <?php if (true) { ?>
                  <option style="font-weight: bolder" selected><?= $mhs_lulusan->tahun ?></option>
                <?php } ?>
                <option <?php $mhs_lulusan->tahun == '2014/2015' ? print_r('hidden') : '' ?>>2014/2015</option>
                <option <?php $mhs_lulusan->tahun == '2015/2016' ? print_r('hidden') : '' ?>>2015/2016</option>
                <option <?php $mhs_lulusan->tahun == '2016/2017' ? print_r('hidden') : '' ?>>2016/2017</option>
                <option <?php $mhs_lulusan->tahun == '2017/2018' ? print_r('hidden') : '' ?>>2017/2018</option>
                <option <?php $mhs_lulusan->tahun == '2018/2019' ? print_r('hidden') : '' ?>>2018/2019</option>
              </select>
            </span>
          </i>
          <?= form_error('tahun', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
          <i class="h5 text-gray-900 mb-4">[Daya Tampung]
            <input type="number" min="0" class="form-control form-control-user" name="dayaTampung" placeholder="Daya Tampung" required value="<?= $mhs_lulusan->dayaTampung ?>">
          </i>
          <?= form_error('dayaTampung', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="text-left">
          <i class="h5 text-gray-900">[Jumlah Calon Mahasiswa Reguler]</i>
        </div>
        <div class="form-group">
          <p class="h6 text-gray-900 mb-4">Ikut Seleksi
            <input type="number" min="0" class="form-control form-control-user" name="seleksi" placeholder="Jumlah Ikut Seleksi" required value="<?= $mhs_lulusan->seleksi ?>">
          </p>
          <?= form_error('seleksi', '<small class="text-danger pl-3">', '</small>'); ?>
          <p class="h6 text-gray-900 mb-4">Lulus Seleksi
            <input type="number" min="0" class="form-control form-control-user" name="lulus" placeholder="Jumlah Lulus Seleksi" required value="<?= $mhs_lulusan->lulus ?>">
          </p>
          <?= form_error('lulus', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="text-left">
          <i class="h5 text-gray-900">[Jumlah Mahasiswa Baru]</i>
        </div>
        <div class="form-group">
          <p class="h6 text-gray-900 mb-4">Mahasiswa Reguler
            <input type="number" min="0" class="form-control form-control-user" name="maba_reg" placeholder="Jumlah Mahasiswa Reguler" required value="<?= $mhs_lulusan->maba_reg ?>">
          </p>
          <?= form_error('maba_reg', '<small class="text-danger pl-3">', '</small>'); ?>
          <p class="h6 text-gray-900 mb-4">Mahasiswa Transfer
            <input type="number" min="0" class="form-control form-control-user" name="maba_transfer" placeholder="Jumlah Mahasiswa Transfer" required value="<?= $mhs_lulusan->maba_transfer ?>">
            <?= form_error('maba_transfer', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="text-left">
          <i class="h5 text-gray-900">[Jumlah Total Mahasiswa]</i>
        </div>
        <div class="form-group">
          <p class="h6 text-gray-900 mb-4">Mahasiswa Reguler
            <input type="number" min="0" class="form-control form-control-user" name="mhs_reg" placeholder="Jumlah Mahasiswa Reguler" required value="<?= $mhs_lulusan->mhs_reg ?>">
          </p>
          <?= form_error('mhs_reg', '<small class="text-danger pl-3">', '</small>'); ?>
          <p class="h6 text-gray-900 mb-4">Mahasiswa Transfer
            <input type="number" min="0" class="form-control form-control-user" name="mhs_transfer" placeholder="Jumlah Mahasiswa Transfer" required value="<?= $mhs_lulusan->mhs_transfer ?>">
          </p>
          <?= form_error('mhs_transfer', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
      </div>
      <div class="col" style="width:45%">
        <div class="text-left">
          <i class="h5 text-gray-900">[Jumlah Lulusan]</i>
        </div>
        <div class="form-group">
          <p class="h6 text-gray-900 mb-4">Mahasiswa Reguler
            <input type="number" min="0" class="form-control form-control-user" name="lulusan_reg" placeholder="Jumlah Mahasiswa Reguler" required value="<?= $mhs_lulusan->lulusan_reg ?>">
          </p>
          <?= form_error('lulusan_reg', '<small class="text-danger pl-3">', '</small>'); ?>
          <p class="h6 text-gray-900 mb-4">Mahasiswa Transfer
            <input type="number" min="0" class="form-control form-control-user" name="lulusan_transfer" placeholder="Jumlah Mahasiswa Transfer" required value="<?= $mhs_lulusan->lulusan_transfer ?>">
          </p>
          <?= form_error('lulusan_transfer', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="text-left">
          <i class="h5 text-gray-900">[IPK Lulusan Reguler]</i>
        </div>
        <div class="form-group">
          <p class="h6 text-gray-900 mb-4">Minimal
            <input type="number" step="0.01" min="0" max="4" class="form-control form-control-user" name="ipk_min" placeholder="Min" required value="<?= $mhs_lulusan->ipk_min ?>">
          </p>
          <?= form_error('ipk_min', '<small class="text-danger pl-3">', '</small>'); ?>
          <p class="h6 text-gray-900 mb-4">Rata-Rata
            <input type="number" step="0.01" min="0" max="4" class="form-control form-control-user" name="ipk_rat" placeholder="Rat" required value="<?= $mhs_lulusan->ipk_rat ?>">
          </p>
          <?= form_error('ipk_rat', '<small class="text-danger pl-3">', '</small>'); ?>
          <p class="h6 text-gray-900 mb-4">Maksimal
            <input type="number" step="0.01" min="0" max="4" class="form-control form-control-user" name="ipk_mak" placeholder="Mak" required value="<?= $mhs_lulusan->ipk_mak ?>">
          </p>
          <?= form_error('ipk_mak', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="text-left">
          <i class="h5 text-gray-900">[Persentase Lulusan Reguler dengan IPK]</i>
        </div>
        <div class="form-group">
          <p class="h6 text-gray-900 mb-4"> <?= '< 2.75' ?>
            <input type="number" step="0.01" min="0" class="form-control form-control-user" name="persen_min" placeholder="<2.75" required value="<?= $mhs_lulusan->persen_min ?>">
          </p>
          <?= form_error('persen_min', '<small class="text-danger pl-3">', '</small>'); ?>
          <p class="h6 text-gray-900 mb-4"><?= '2.75-3.50' ?>
            <input type="number" step="0.01" min="0" class="form-control form-control-user" name="persen_mid" placeholder="2.75-3.50" required value="<?= $mhs_lulusan->persen_mid ?>">
          </p>
          <?= form_error('persen_mid', '<small class="text-danger pl-3">', '</small>'); ?>
          <p class="h6 text-gray-900 mb-4"><?= '> 3.50' ?>
            <input type="number" step="0.01" min="0" class="form-control form-control-user" name="persen_mak" placeholder=">3.50" required value="<?= $mhs_lulusan->persen_mak ?>">
          </p>
          <?= form_error('persen_mak', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
      </div>
      <div class="btn-group" style="width:100%">
        <a type="button" class="btn btn-danger" style="color:white" onClick="javascript:history.go(-1)">
          <div class="fa fa-arrow-left"></div>
          Batal
        </a>
        <button class="btn btn-success btn-block" type="submit">
          <div class="fa fa-check"></div>
          Simpan
        </button>
      </div>
  </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<!-- Begin Page Content -->
<div class="container-fluid">
  <div class="p-3">
    <div class="text-left">
      <h2 class="h2 text-gray-900 mb-1">Tambah Data Karya Mahasiswa</h2>
    </div>
    <div class="text-center p-t-10">
      <hr class="sidebar-divider">
    </div>
    <form method="post" action="<?php echo site_url('C_KaryaIlmiahMhs/tambahAktivitasMhs_aksi/') ?>" class="form-horizontal" required>
      <div class="form-group">
        <input type="text" class="form-control form-control-user" name="nama" placeholder="Nama Mahasiswa" value="<?= set_value('nama') ?>">
        <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <input type="text" class="form-control form-control-user" name="kegiatan" placeholder="Nama Kegiatan" value="<?= set_value('kegiatan') ?>">
        <?= form_error('kegiatan', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <input onfocus="(this.type='date')" class="form-control form-control-user" name="waktu" placeholder="Waktu Kegiatan" value="<?= set_value('waktu') ?>">
        <?= form_error('waktu', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <span class="input-group-addon">
          <span class="selection-box"><select class="form-control" name="tingkat" value="<?= set_value('tingkat') ?>">
              <option selected disabled>Tingkat Kegiatan</option>
              <option>Lokal</option>
              <option>Wilayah</option>
              <option>Nasional</option>
              <option>Internasional</option>
            </select></span></p>
          <?= form_error('tingkat', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <input type="text" class="form-control form-control-user" name="prestasi" placeholder="Prestasi yang dicapai" value="<?= set_value('prestasi') ?>">
        <?= form_error('prestasi', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <button class="btn btn-success btn-block" type="submit">
        Simpan
      </button>
  </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<!-- Begin Page Content -->
<div class="container-fluid">
  <div class="p-3">
    <div class="text-left">
      <h2 class="h2 text-gray-900 mb-1">Tambah Aktivitas Dosen Tetap</h2>
      <div class="text-center p-t-10">
        <hr class="sidebar-divider">
      </div>
    </div>
    <form class="form-horizontal" method="post" action="<?= site_url('C_AktivitasDT/tambahaktivitas_dt_aksi') ?>">
      <div class="form-group">
        <!-- <input type="text" class="form-control" name="nama" placeholder="Nama Dosen" value="<?= set_value('nama') ?>">
        <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?> -->
        <select class="form-control" style="width:100%" name="nama" required>
          <option selected disabled>Pilih Nama Dosen Tetap</option>
          <?php foreach ($dosentetap as $u) { ?>
            <option value="<?= $u['id'] ?>"><?= $u['nama'] ?></option>
          <?php } ?>
        </select>
      </div>
      <div class="form-group">
        <input type="text" class="form-control" name="bidang" placeholder="Bidang Keahlian" value="<?= set_value('bidang') ?>">
        <?= form_error('bidang', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <input type="text" class="form-control" name="kodematkul" placeholder="Kode Mata Kuliah" value="<?= set_value('kodematkul') ?>">
        <?= form_error('kodematkul', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <input type="text" class="form-control" name="namamatkul" placeholder="Nama Mata Kuliah" value="<?= set_value('namamatkul') ?>">
        <?= form_error('namamatkul', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <input type="number" min=0 class="form-control" name="jumlahkelas" placeholder="Jumlah Kelas" value="<?= set_value('jumlahkelas') ?>">
        <?= form_error('jumlahkelas', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <input type="number" min=0 class="form-control" name="rencanakelas" placeholder="Jumlah Pertemuan yang Direncanakan" value="<?= set_value('rencanakelas') ?>">
        <?= form_error('rencanakelas', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <input type="number" min=0 class="form-control" name="sukseskelas" placeholder="Jumlah Pertemuan yang Dilaksanakan" value="<?= set_value('sukseskelas') ?>">
        <?= form_error('sukseskelas', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <button class="btn btn-info btn-user btn-block" type="submit">
        Simpan
      </button>
  </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
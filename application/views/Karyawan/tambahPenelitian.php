<!-- Begin Page Content -->
<div class="container-fluid">
  <div class="p-3">
    <div class="text-left">
      <h2 class="h2 text-gray-900 mb-1">Tambah Penelitian</h2>
      <div class="text-center p-t-10">
        <hr class="sidebar-divider">
      </div>
    </div>
    <form class="form-horizontal" method="post" action="<?= site_url('C_Penelitian/tambahpenelitian_aksi') ?>">
      <div class="form-group">
        <label class="control-label">Pilih Sumber Pembiayaan</label>
        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
        <span class="selection-box"><select class="form-control" name="sumber" required>
            <option selected disabled>Pilih</option>
            <option value="1">Pembiayaan sendiri oleh peneliti</option>
            <option value="2">PT yang bersangkutan</option>
            <option value="3">Depdiknas</option>
            <option value="4">Institusi dalam negeri di luar Depdiknas</option>
            <option value="5">Institusi luar negeri</option>
          </select></span></p>
        <?= form_error('sumber', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <input type="number" min="1" max="500" class="form-control" name="tahun1" required placeholder="Data Tahun 2016" value="<?= set_value('tahun1') ?>">
        <?= form_error('tahun1', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <input type="number" min="1" max="500" class="form-control" name="tahun2" required placeholder="Data Tahun 2017" value="<?= set_value('tahun2') ?>">
        <?= form_error('tahun2', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <input type="number" min="1" max="500" class="form-control" name="tahun3" required placeholder="Data Tahun 2018" value="<?= set_value('tahun3') ?>">
        <?= form_error('tahun3', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <button class="btn btn-info btn-user btn-block" type="submit">
        Simpan
      </button>
  </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
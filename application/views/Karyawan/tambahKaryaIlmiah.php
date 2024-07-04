<!-- Begin Page Content -->
<div class="container-fluid">
  <div class="p-3">
    <div class="text-left">
      <h2 class="h2 text-gray-900 mb-1">Tambah Karya Ilmiah Dosen</h2>
      <div class="text-center p-t-10">
        <hr class="sidebar-divider">
      </div>
    </div>
    <form class="form-horizontal" method="post" action="<?= site_url('C_KaryaIlmiahDosen/tambahKaryaIlmiah_aksi') ?>">
      <div class="form-group">
        <input type="text" class="form-control" name="judul" placeholder="Judul Karya Ilmiah" value="<?= set_value('judul') ?>">
        <?= form_error('judul', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <input type="text" class="form-control" name="nama" placeholder="Nama Dosen" value="<?= set_value('nama') ?>">
        <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <input type="text" class="form-control" name="publikasi" placeholder="Dipublikasi pada" value="<?= set_value('publikasi') ?>">
        <?= form_error('publikasi', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <input type="text" class="form-control" name="tahun" placeholder="Tahun Publikasi" value="<?= set_value('tahun') ?>">
        <?= form_error('tahun', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label class="control-label">Tingkat Kegiatan</label>
        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
        <span class="selection-box">
          <select class="form-control" style="width:100%" name="tingkat" required>
            <option selected disabled>Pilih</option>
            <option>Lokal</option>
            <option>Nasional</option>
            <option>Internasional</option>
          </select></span></p>
      </div>
      <button class="btn btn-info btn-user btn-block" type="submit">
        Simpan
      </button>
  </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
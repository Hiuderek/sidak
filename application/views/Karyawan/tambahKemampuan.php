<!-- Begin Page Content -->
<div class="container-fluid">
  <div class="p-3">
    <div class="text-left">
      <h2 class="h2 text-gray-900 mb-1">Tambah Peningkatan Kemampuan Dosen </h2>
      <div class="text-center p-t-10">
        <hr class="sidebar-divider">
      </div>
    </div>
    <form class="form-horizontal" method="post" action="<?= site_url('C_Kemampuan/tambahKemampuan_aksi') ?>">
      <div class="form-group">
        <input type="text" class="form-control" name="nama" placeholder="Nama Dosen" value="<?= set_value('nama') ?>">
        <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <input type="text" class="form-control" name="jenjang" placeholder="Jenjang Pendidikan Lanjut" value="<?= set_value('jenjang') ?>">
        <?= form_error('jenjang', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <input type="text" class="form-control" name="bidang_studi" placeholder="Bidang Studi" value="<?= set_value('bidang_studi') ?>">
        <?= form_error('bidang_studi', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <input type="text" class="form-control" name="perguruan_tinggi" placeholder="Perguruan Tinggi" value="<?= set_value('perguruan_tinggi') ?>">
        <?= form_error('perguruan_tinggi', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <input type="text" class="form-control" name="negara" placeholder="Negara" value="<?= set_value('negara') ?>">
        <?= form_error('negara', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <input type="text" class="form-control" name="tahun" placeholder="Tahun Mulai Studi" value="<?= set_value('tahun') ?>">
        <?= form_error('tahun', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <button class="btn btn-info btn-user btn-block" type="submit">
        Simpan
      </button>
  </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
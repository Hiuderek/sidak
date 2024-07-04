<!-- Begin Page Content -->
<div class="container-fluid">
  <div class="p-3">
    <div class="text-left">
      <h2 class="h2 text-gray-900 mb-1">Tambah Karyawan</h2>
      <div class="text-center p-t-10">
        <hr class="sidebar-divider">
      </div>
    </div>
    <form class="form-horizontal" method="post" action="<?= site_url('C_Karyawan/tambahKaryawan_aksi') ?>" enctype="multipart/form-data">
      <div class="form-group">
        <label class="control-label">Masukkan NIK</label>
        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
        <input type="text" class="form-control" id="nik" name="nik" placeholder="NIK" value="<?= set_value('nik') ?>">
        <?= form_error('nik', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label class="control-label">Masukkan Nama Karyawan</label>
        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
        <input type="text" class="form-control" id="nama_karyawan" name="nama_karyawan" placeholder="Nama Karyawan" value="<?= set_value('nama_karyawan') ?>">
        <?= form_error('nama_karyawan', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="ijazah_terakhir" class="control-label">Pilih Ijazah Terakhir</label>
        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
        <span class="selection-box">
          <select class="form-control" style="width:100%" id="ijazah_terakhir" name="ijazah_terakhir">
            <option value="Pilih" selected disabled>Pilih</option>
            <option value="SMA/SMK Sederajat" <?= set_select('ijazah_terakhir', 'SMA/SMK Sederajat') ?>>SMA/SMK Sederajat</option>
            <option value="D3" <?= set_select('ijazah_terakhir', 'D3') ?>>D3</option>
            <option value="S1" <?= set_select('ijazah_terakhir', 'S1') ?>>S1</option>
            <option value="S2" <?= set_select('ijazah_terakhir', 'S2') ?>>S2</option>
          </select></span></p>
          <?= form_error('ijazah_terakhir', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="status_pajak" class="control-label">Pilih Status Pajak</label>
        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
        <span class="selection-box">
          <select type="select" class="form-control" style="width:100%" id="status_pajak" name="status_pajak">
            <option value="Pilih" selected disabled>Pilih</option>
            <option value="TK0" <?= set_select('status_pajak', 'TK0') ?>>TK0</option>
            <option value="K1" <?= set_select('status_pajak', 'K1') ?>>K1</option>
            <option value="K2" <?= set_select('status_pajak', 'K2') ?>>K2</option>
            <option value="K3" <?= set_select('status_pajak', 'K3') ?>>K3</option>
          </select></span></p>
          <?= form_error('status_pajak', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label class="control-label">Masukkan NPWP</label>
        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
        <input type="text" class="form-control" id="npwp" name="npwp" placeholder="NPWP" value="<?= set_value('npwp') ?>">
        <?= form_error('npwp', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <button class="btn btn-info btn-user btn-block" type="submit" value="upload">
        Simpan
      </button>
  </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<!-- Begin Page Content -->
<div class="container-fluid">
  <div class="p-3">
    <div class="text-left">
      <h2 class="h2 text-gray-900 mb-4">Edit Karyawan</h2>
    </div>
    <form class="form-horizontal" method="post" action="<?= site_url('C_Karyawan/editKaryawan_aksi/' . $karyawan->id) ?>" enctype="multipart/form-data">
      <div class="form-group">
        <label class="control-label">Masukkan NIK</label>
        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
        <input type="text" class="form-control" id="nik" name="nik" placeholder="NIK" value="<?= $karyawan->nik ?>">
        <?= form_error('nik', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label class="control-label">Masukkan Nama Karyawan</label>
        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
        <input type="text" class="form-control" id="nama_karyawan" name="nama_karyawan" placeholder="Nama Karyawan" value="<?= $karyawan->nama_karyawan ?>">
        <?= form_error('nama_karyawan', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="ijazah_terakhir" class="control-label">Pilih Ijazah Terakhir</label>
        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
        <span class="selection-box">
          <select class="form-control" style="width:100%" id="ijazah_terakhir" name="ijazah_terakhir">
            <option value="Pilih" selected disabled>Pilih</option>
            <option value="SMA/SMK Sederajat" <?php if($karyawan->ijazah_terakhir == "SMA/SMK Sederajat") echo "selected" ?>>SMA/SMK Sederajat</option>
            <option value="D3" <?php if($karyawan->ijazah_terakhir == "D3") echo "selected" ?>>D3</option>
            <option value="S1" <?php if($karyawan->ijazah_terakhir == "S1") echo "selected" ?>>S1</option>
            <option value="S2" <?php if($karyawan->ijazah_terakhir == "S2") echo "selected" ?>>S2</option>
          </select></span></p>
          <?= form_error('ijazah_terakhir', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="status_pajak" class="control-label">Pilih Status Pajak</label>
        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
        <span class="selection-box">
          <select type="select" class="form-control" style="width:100%" id="status_pajak" name="status_pajak">
            <option value="Pilih" selected disabled>Pilih</option>
            <option value="TK0" <?php if($karyawan->status_pajak == "TK0") echo "selected" ?>>TK0</option>
            <option value="K1" <?php if($karyawan->status_pajak == "K1") echo "selected" ?>>K1</option>
            <option value="K2" <?php if($karyawan->status_pajak == "K2") echo "selected" ?>>K2</option>
            <option value="K3" <?php if($karyawan->status_pajak == "K3") echo "selected" ?>>K3</option>
          </select></span></p>
          <?= form_error('status_pajak', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label class="control-label">Masukkan NPWP</label>
        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
        <input type="text" class="form-control" id="npwp" name="npwp" placeholder="NPWP" value="<?= $karyawan->npwp ?>">
        <?= form_error('npwp', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="btn-group" style="width:100%">
        <a type="button" class="btn btn-danger" style="color:white" onClick="javascript:history.go(-1)">
          <div class="fa fa-arrow-left"></div>
          Batal
        </a>
        <button class="btn btn-info" type="submit">
          <div class="fa fa-check"></div>
          Simpan
        </button>
      </div>
  </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
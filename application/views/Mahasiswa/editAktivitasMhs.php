<!-- Begin Page Content -->
<div class="container-fluid">
  <div class="p-3">
    <div class="text-left">
      <h2 class="h2 text-gray-900 mb-4">Ubah Data Karya Mahasiswa</h2>
    </div>
    <form method="post" action="<?php echo site_url('C_KaryaIlmiahMhs/editAktivitasMhs_aksi/' . $aktivitasmhs->id) ?>" class="form-horizontal" required>
      <div class="form-group">
        <i class="h5 text-gray-900 mb-4">[Nama Mahasiswa]
          <input type="text" class="form-control form-control-user" name="nama" placeholder="Nama Mahasiswa" required value="<?= $aktivitasmhs->nama ?>">
        </i>
      </div>
      <div class="form-group">
        <i class="h5 text-gray-900 mb-4">[Nama Kegiatan]
          <input type="text" class="form-control form-control-user" name="kegiatan" placeholder="Nama Kegiatan" required value="<?= $aktivitasmhs->kegiatan ?>">
        </i>
      </div>
      <div class="form-group">
        <i class="h5 text-gray-900 mb-4">[Waktu Kegiatan]
          <input onfocus="(this.type='date')" class="form-control form-control-user" name="waktu" placeholder="Waktu Kegiatan" required value="<?= $aktivitasmhs->waktu ?>">
        </i>
      </div>
      <div class="form-group">
        <i class="h5 text-gray-900 mb-4">[Tingkat Kegiatan]</i>
        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
        <span class="selection-box"><select class="form-control" name="tingkat" required value="<?= $aktivitasmhs->tingkat_kegiatan ?>">
            <?php if (true) { ?>
              <option style="font-weight: bolder" selected disabled value="<?= $aktivitasmhs->tingkat_kegiatan ?>"><?= $aktivitasmhs->tingkat_kegiatan ?></option>
            <?php } ?>
            <option>Lokal</option>
            <option>Wilayah</option>
            <option>Nasional</option>
            <option>Internasional</option>
          </select></span></p>
      </div>
      <div class="form-group">
        <i class="h5 text-gray-900 mb-4">[Prestasi yang Dicapai]
          <input type="text" class="form-control form-control-user" name="prestasi" placeholder="Prestasi yang dicapai" required value="<?= $aktivitasmhs->prestasi ?>">
        </i>
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
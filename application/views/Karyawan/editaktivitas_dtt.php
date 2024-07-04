<!-- Begin Page Content -->
<div class="container-fluid">
  <div class="p-3">
    <div class="text-left">
      <h2 class="h2 text-gray-900 mb-4">Edit Aktivitas Dosen Tidak Tetap</h2>
    </div>
    <form class="form-horizontal" method="post" action="<?= site_url('C_AktivitasDTT/editaktivitas_dtt_aksi/' . $aktivitas_dtt->id . '/' . $aktivitas_dtt->id_dosen) ?>">
      <div class="form-group">
        <p class="h5 text-gray-900 mb-4">Nama Dosen
          <input type="text" class="form-control" name="nama" placeholder="Nama Dosen" disabled required value="<?= $aktivitas_dtt->nama ?>">
        </p>
      </div>
      <div class="form-group">
        <p class="h5 text-gray-900 mb-4">Bidang Keahlian
          <input type="text" class="form-control" name="bidang" placeholder="Bidang Keahlian" required value="<?= $aktivitas_dtt->bidang ?>">
        </p>
      </div>
      <div class="form-group">
        <p class="h5 text-gray-900 mb-4">Kode Mata Kuliah
          <input type="text" class="form-control" name="kodematkul" placeholder="Kode Mata Kuliah" required value="<?= $aktivitas_dtt->kodematkul ?>">
        </p>
      </div>
      <div class="form-group">
        <p class="h5 text-gray-900 mb-4">Nama Mata Kuliah
          <input type="text" class="form-control" name="namamatkul" placeholder="Nama Mata Kuliah" required value="<?= $aktivitas_dtt->namamatkul ?>">
        </p>
      </div>
      <div class="form-group">
        <p class="h5 text-gray-900 mb-4">Jumlah Kelas
          <input type="number" min=0 class="form-control" name="jumlahkelas" placeholder="Jumlah Kelas" required value="<?= $aktivitas_dtt->jumlahkelas ?>">
        </p>
      </div>
      <div class="form-group">
        <p class="h5 text-gray-900 mb-4">Jumlah Pertemuan yang Direncanakan
          <input type="number" min=0 class="form-control" name="rencanakelas" placeholder="Jumlah Pertemuan yang Direncanakan" required value="<?= $aktivitas_dtt->rencanakelas ?>">
        </p>
      </div>
      <div class="form-group">
        <p class="h5 text-gray-900 mb-4">Jumlah Pertemuan yang Dilaksanakan
          <input type="number" min=0 class="form-control" name="sukseskelas" placeholder="Jumlah Pertemuan yang Dilaksanakan" required value="<?= $aktivitas_dtt->sukseskelas ?>">
        </p>
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
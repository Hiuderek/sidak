<!-- Begin Page Content -->
<div class="container-fluid">
  <div class="p-3">
    <div class="text-left">
      <h2 class="h2 text-gray-900 mb-4">Edit Karya Ilmiah Dosen</h2>
    </div>
    <form class="form-horizontal" method="post" action="<?= site_url('C_KaryaIlmiahDosen/editKaryaIlmiah_aksi/' . $karyailmiah->id) ?>">
      <div class="form-group">
        <p class="h5 text-gray-900 mb-4">Judul
          <input type="text" class="form-control" name="judul" placeholder="Judul" required value="<?= $karyailmiah->judul ?>">
        </p>
      </div>
      <div class="form-group">
        <p class="h5 text-gray-900 mb-4">Nama Dosen
          <input type="text" class="form-control" name="nama" placeholder="Nama Dosen" required value="<?= $karyailmiah->namadosen ?>">
        </p>
      </div>
      <div class="form-group">
        <p class="h5 text-gray-900 mb-4">Pendidikan S1
          <input type="text" class="form-control" name="publikasi" required placeholder="Dipublikasikan pada" value="<?= $karyailmiah->publikasi ?>">
        </p>
      </div>
      <div class="form-group">
        <p class="h5 text-gray-900 mb-4">Tahun Publikasi
          <input type="text" class="form-control" name="tahun" placeholder="Tahun Publikasi" required value="<?= $karyailmiah->tahunpublikasi ?>">
        </p>
      </div>
      <div class="form-group">
        <p class="h5 text-gray-900 mb-4">Tingkat Kegiatan
          <span class="selection-box"><select class="form-control" name="tingkat" required value="<?= $karyailmiah->tingkat ?>">
              <option>Lokal</option>
              <option>Nasional</option>
              <option>Internasional</option>
            </select>
          </span>
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
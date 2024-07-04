<!-- Begin Page Content -->
<div class="container-fluid">
  <div class="p-3">
    <div class="text-left">
      <h2 class="h2 text-gray-900 mb-4">Edit Data Dosen Tidak Tetap</h2>
    </div>
    <form class="form-horizontal" method="post" action="<?= site_url('C_DosenTdkTetap/editDosenTdkTetap_aksi/' . $dosenTdkTetap->id) ?>" enctype="multipart/form-data">
      <div class="form-group">
        <p class="h5 text-gray-900 mb-4">Nama Dosen
          <input type="text" class="form-control" name="nama" placeholder="Nama Dosen" required value="<?= $dosenTdkTetap->nama ?>">
        </p>
      </div>
      <div class="form-group">
        <p class="h5 text-gray-900 mb-4">NIDN
          <input type="text" class="form-control" name="nidn" placeholder="NIDN" required value="<?= $dosenTdkTetap->nidn ?>">
        </p>
      </div>
      <div class="form-group">
        <p class="h5 text-gray-900 mb-4">Tanggal Lahir
          <input onfocus="(this.type='date')" class="form-control" name="tgl_lahir" placeholder="Tanggal Lahir" required value="<?= $dosenTdkTetap->tgl_lahir ?>">
        </p>
      </div>
      <div class="form-group">
        <p class="h5 text-gray-900 mb-4">Jabatan Akademik
          <input type="text" class="form-control" name="jabatan" placeholder="Jabatan Akademik" required value="<?= $dosenTdkTetap->jabatan ?>">
        </p>
      </div>
      <div class="form-group">
        <p class="h5 text-gray-900 mb-4">Gelar Sarjana
          <input type="text" class="form-control" name="gelardepan" placeholder="Gelar Sarjana" required value="<?= $dosenTdkTetap->gelardepan ?>">
        </p>
      </div>
      <div class="form-group">
        <p class="h5 text-gray-900 mb-4">Gelar Sarjana
          <input type="text" class="form-control" name="gelarbelakang" placeholder="Gelar Sarjana" required value="<?= $dosenTdkTetap->gelarbelakang ?>">
        </p>
      </div>
      <div class="form-group">
        <p class="h5 text-gray-900 mb-4">Pendidikan S1
          <input type="text" class="form-control" name="pendidikan1" placeholder="Pendidikan S1" required value="<?= $dosenTdkTetap->pendidikan1 ?>">
        </p>
      </div>
      <div class="form-group">
        <p class="h5 text-gray-900 mb-4">Pendidikan S2
          <input type="text" class="form-control" name="pendidikan2" placeholder="Pendidikan S2" required value="<?= $dosenTdkTetap->pendidikan2 ?>">
        </p>
      </div>
      <div class="form-group">
        <p class="h5 text-gray-900 mb-4">Pendidikan S3
          <input type="text" class="form-control" name="pendidikan3" placeholder="Pendidikan S3"  value="<?= $dosenTdkTetap->pendidikan3 ?>">
        </p>
      </div>
      <div class="form-group">
        <p class="h5 text-gray-900 mb-4">Bidang Keahlian S1
          <input type="text" class="form-control" name="bidang1" placeholder="Bidang Keahlian S1" required value="<?= $dosenTdkTetap->bidang1 ?>">
        </p>
      </div>
      <div class="form-group">
        <p class="h5 text-gray-900 mb-4">Bidang Keahlian S2
          <input type="text" class="form-control" name="bidang2" placeholder="Bidang Keahlian S2" required value="<?= $dosenTdkTetap->bidang2 ?>">
        </p>
      </div>
      <div class="form-group">
        <p class="h5 text-gray-900 mb-4">Bidang Keahlian S3
          <input type="text" class="form-control" name="bidang3" placeholder="Bidang Keahlian S3" value="<?= $dosenTdkTetap->bidang3 ?>">
        </p>
      </div>
      <div class="form-group">
        <p class="h5 text-gray-900 mb-4">Surat Bukti
          <input type="file" class="form-control" name="suratbukti" placeholder="suratbukti" value="<?= $dosenTdkTetap->suratbukti ?>">
          <input type="hidden" class="form-control" name="old_pdf" placeholder="suratbukti" value="<?= $dosenTdkTetap->suratbukti ?>">
          <input type="hidden" class="form-control" name="keterangan" placeholder="suratbukti" value="<?= $dosenTdkTetap->keterangan ?>">
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
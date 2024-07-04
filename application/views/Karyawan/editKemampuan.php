<!-- Begin Page Content -->
<div class="container-fluid">
  <div class="p-3">
    <div class="text-left">
      <h2 class="h2 text-gray-900 mb-4">Edit Peningkatan Kemampuan Dosen </h2>
    </div>
    <form class="form-horizontal" method="post" action="<?= site_url('C_Kemampuan/editKemampuan_aksi/' . $peningkatandosen->id) ?>">
      <div class="form-group">
        <p class="h5 text-gray-900 mb-4">Nama Dosen
          <input type="text" class="form-control" name="nama" placeholder="Nama Dosen" required value="<?= $peningkatandosen->nama ?>">
        </p>
        <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <p class="h5 text-gray-900 mb-4">Jenjang Pendidikan Lanjut
          <input type="text" class="form-control" name="jenjang" placeholder="Jenjang Pendidikan Lanjut" required value="<?= $peningkatandosen->jenjang ?>">
        </p>
        <?= form_error('jenjang', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <p class="h5 text-gray-900 mb-4">Bidang Studi
          <input type="text" class="form-control" name="bidang_studi" placeholder="Bidang Studi" required value="<?= $peningkatandosen->bidang_studi ?>">
        </p>
        <?= form_error('bidang_studi', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <p class="h5 text-gray-900 mb-4">Perguruan Tinggi
          <input type="text" class="form-control" name="perguruan_tinggi" placeholder="Perguruan Tinggi" required value="<?= $peningkatandosen->perguruan_tinggi ?>">
        </p>
        <?= form_error('perguruan_tinggi', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <p class="h5 text-gray-900 mb-4">Negara Perguruan Tinggi
          <input type="text" class="form-control" name="negara" placeholder="Negara" required value="<?= $peningkatandosen->negara ?>">
        </p>
        <?= form_error('negara', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <p class="h5 text-gray-900 mb-4">Tahun Mulai Studi
          <input type="text" class="form-control" name="tahun" placeholder="Tahun Mulai Studi" required value="<?= $peningkatandosen->tahun ?>">
        </p>
        <?= form_error('tahun', '<small class="text-danger pl-3">', '</small>'); ?>
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
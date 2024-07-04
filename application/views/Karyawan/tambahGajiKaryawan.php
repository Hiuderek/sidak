        <!-- Begin Page Content -->
        <div class="container-fluid">
          <div class="p-3">
            <div class="text-left">
              <h2 class="h2 text-gray-900 mb-1">Tambah Data Gaji Karyawan</h2>
              <div class="text-center p-t-10">
                <hr class="sidebar-divider">
              </div>
            </div>
            <form class="form-horizontal" method="post" action="<?= site_url('C_Gaji/tambahGaji_aksi') ?>" enctype="multipart/form-data">
              <div class="form-group">
                <label for="nama_karyawan" class="control-label">Pilih Karyawan</label>
                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                <span class="selection-box">
                  <select class="form-control" style="width:100%" id="nama_karyawan" name="nama_karyawan">
                    <option value="Pilih" selected disabled>Pilih</option>
                    <?php foreach($namaKaryawan as $u) { ?>
                    <option value="<?=$u["id"]?>" <?= set_select('nama_karyawan', $u["id"]) ?> <?php if($u["tanggal"] != FALSE) echo "disabled" ?>><?=$u["nama_karyawan"]?></option>
                    <?php } ?>
                  </select></span></p>
                  <?= form_error('nama_karyawan', '<small class="text-danger pl-3">', '</small>'); ?>
              </div>
              <div class="form-group">
                <label for="jabatan" class="control-label">Pilih Jabatan</label>
                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                <span class="selection-box">
                  <select class="form-control" style="width:100%" id="jabatan" name="jabatan">
                    <option value="Pilih" selected disabled>Pilih</option>
                    <option value="Leader" <?= set_select('jabatan', 'Leader') ?>>Leader</option>
                    <option value="Asisten Leader" <?= set_select('jabatan', 'Asisten Leader') ?>>Asisten Leader</option>
                    <option value="Anggota 1" <?= set_select('jabatan', 'Anggota 1') ?>>Anggota 1</option>
                    <option value="Anggota 2" <?= set_select('jabatan', 'Anggota 2') ?>>Anggota 2</option>
                    <option value="Anggota 3" <?= set_select('jabatan', 'Anggota 3') ?>>Anggota 3</option>
                  </select></span></p>
                  <?= form_error('jabatan', '<small class="text-danger pl-3">', '</small>'); ?>
              </div>
              <div class="form-group">
                <label class="control-label">Masukkan Tunjangan Jabatan</label>
                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                <input type="text" class="form-control" id="tunjangan_jabatan" name="tunjangan_jabatan" placeholder="Tunjangan Jabatan" value="<?= set_value('tunjangan_jabatan') ?>">
                <?= form_error('tunjangan_jabatan', '<small class="text-danger pl-3">', '</small>'); ?>
              </div>
              <div class="form-group">
                <label class="control-label">Masukkan Gaji Pokok</label>
                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                <input type="text" class="form-control" id="gaji_pokok" name="gaji_pokok" placeholder="Gaji Pokok" value="<?= set_value('gaji_pokok') ?>">
                <?= form_error('gaji_pokok', '<small class="text-danger pl-3">', '</small>'); ?>
              </div>
              <div class="form-group">
                <label class="control-label">Masukkan Tunjangan Proyek</label>
                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                <input type="text" class="form-control" id="tunjangan_proyek" name="tunjangan_proyek" placeholder="Tunjangan Proyek" value="<?= set_value('tunjangan_proyek') ?>">
                <?= form_error('tunjangan_proyek', '<small class="text-danger pl-3">', '</small>'); ?>
              </div>
              <div class="form-group">
                <label class="control-label">Masukkan No. Rekening</label>
                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                <input type="text" class="form-control" id="no_rekening" name="no_rekening" placeholder="No. Rekening" value="<?= set_value('no_rekening') ?>">
                <?= form_error('no_rekening', '<small class="text-danger pl-3">', '</small>'); ?>
              </div>
              <button class="btn btn-info btn-user btn-block" type="submit" value="upload">
                Simpan
              </button>
          </div>

        </div>
        <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->
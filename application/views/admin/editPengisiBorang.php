<!-- Begin Page Content -->
<div class="container-fluid">
  <div class="p-3">
    <div class="text-left">
      <?php if ($pengguna->role_id == 1) { ?>
        <h2 class="h2 text-gray-900 mb-4">Edit Profil</h2>
      <?php } else { ?>
        <h2 class="h2 text-gray-900 mb-4">Ubah Data Pengisi Borang</h2>
      <?php } ?>
    </div>
    <form class="form-horizontal" method="post" action="<?= site_url('Admin/pengisiBorang/' . $pengguna->id_user) ?>">
      <div class="form-group">
        <p class="h5 text-gray-900 mb-4">Username
          <input type="text" class="form-control" name="username" placeholder="username" disabled required value="<?= $pengguna->username ?>">
        </p>
      </div>
      <div class="form-group">
        <p class="h5 text-gray-900 mb-4">Nama Pengguna
          <input type="text" class="form-control" name="nama" placeholder="Nama" required value="<?= $pengguna->name ?>">
        </p>
      </div>
      <div class="form-group">
        <p class="h5 text-gray-900 mb-4">Email
          <input type="text" class="form-control" name="email" placeholder="email" required value="<?= $pengguna->email ?>">
        </p>
      </div>
      <button class="btn btn-secondary btn-user btn-block" type="submit">
        Simpan
      </button>
  </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
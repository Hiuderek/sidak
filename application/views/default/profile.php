<!-- Begin Page Content -->
<div class="container-fluid">
  <div class="card shadow mb-4">
    <div class="card-header text-center">
      <h4 class="font-weight-bold text-secondary">Halaman Profil</h4>
    </div>
    <div class="card-body">
      <?php if ($this->session->flashdata('message')) { ?>
        <div class="alert alert-success text-center alert-dismissible fade show" role="alert">
          <?= $this->session->flashdata('message'); ?>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      <?php } ?>
      <div class="p-3">
        <div class="col-md-4 mx-auto">
          <img src="<?= base_url('assets/img/profil/profil.png') ?>" class="card-img rounded-circle">
        </div>
        <div class="text-center">
          <h2 class="h4 text-gray-900 mb-10" style="margin-top: 15px"><?= $profil->name ?></h2>
          <a class="btn btn-secondary" href="<?= site_url('Pengguna/editProfil/' . $profil->id_user) ?>">Ubah Data Diri</a>
        </div>
        <hr class="sidebar-divider">
        <div class="form-group row">
          <hr>
          <p class="h6 text-gray-900"><strong>Username:</strong> <?= $profil->username; ?></p>
          <hr>
          <p class="h6 text-gray-900"><strong>E-mail:</strong> <?= $profil->email; ?></p>
          <hr>
          <p class="h6 text-gray-900"><strong>Bergabung sejak:</strong> <?= date('d F Y', $profil->date_created); ?></p>
          <hr>
        </div>
        <hr>
      </div>
      <div class="card shadow mb-4">
        <!-- Card Header - Accordion -->
        <a href="#collapseCard" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
          <h6 class="m-0 font-weight-bold text-center text-secondary">Aktivitas terakhir</h6>
        </a>
        <!-- Card Content - Collapse -->
        <div class="collapse show" id="collapseCard">
          <div class="card-body">
            <?php foreach ($aktivitas as $u) { ?>
              <li>
                <div class="form-group row mb-2">
                  <?php if ($u['role_id'] == 2) { ?>
                    <div class="col-sm-11">
                      <strong class="text-secondary">Anda</strong> telah <?= $u['status'] ?> data pada <strong class="text-info"><?= $u['menu'] ?></strong>
                    </div>
                  <?php } else { ?>
                    <div class="col-sm-11">
                      <strong class="text-secondary">Anda</strong> telah <?= $u['status'] ?> data pada <strong class="text-success"><?= $u['menu'] ?></strong>
                    </div>
                  <?php }
                    if ($u['created'] >= strtotime('Today')) {
                      echo 'Hari ini';
                    } else { ?>
                    <?= date("j M", $u['created']); ?>
                  <?php } ?>
                </div>
                <hr class="sidebar-divider mb-2">
              </li>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
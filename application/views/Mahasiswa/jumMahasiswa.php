<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-success">Data Jumlah Mahasiswa Reguler 7 Tahun Terakhir</h6>
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
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <button type="button" data-toggle="modal" data-target="#Mymodal" class="btn btn-secondary btn-icon-split" style="margin-bottom: 10px">
            <span class="icon text-white-50">
              <i class="fas fa-plus"></i>
            </span>
            <span class="text">Tambah Data</span>
          </button>
          <a href="#" type="button" data-toggle="modal" data-target="#Mymodale" class="btn btn-primary btn-icon-split" style="margin-bottom: 10px; margin-left: 10px">
            <span class="icon text-white-50">
              <i class="fas fa-redo"></i>
            </span>
            <span class="text">Reset Data</span>
          </a>
          <a href="<?= site_url('C_MhsReguler/unduhJumreg') ?>" class="btn btn-success btn-icon-split" style="margin-bottom: 10px; margin-left: 10px">
            <span class="icon text-white-50">
              <i class="fas fa-download"></i>
            </span>
            <span class="text">Unduh Data</span>
          </a>
          <thead>
            <tr>
              <th colspan="8" style="text-align: center; width: 10px">Jumlah Mahasiswa Reguler per Angkatan pada Tahun
              </th>
            </tr>
          </thead>
          <tbody>
            <th></th>
            <th>2012-2013</th>
            <th>2013-2014</th>
            <th>2014-2015</th>
            <th>2015-2016</th>
            <th>2016-2017</th>
            <th>2017-2018</th>
            <th>2018-2019</th>
            <?php foreach ($mhs as $u) { ?>
              <tr>
                <th><?= $u['tahunmasuk'] ?></th>
                <td <?php $u['tahun1'] == 0 ? print_r('style="background: #1cb848; color: #1cb848"') : '' ?>><?= $u['tahun1'] ?></td>
                <td <?php $u['tahun2'] == 0 ? print_r('style="background: #1cb848; color: #1cb848"') : '' ?>><?= $u['tahun2'] ?></td>
                <td <?php $u['tahun3'] == 0 ? print_r('style="background: #1cb848; color: #1cb848"') : '' ?>><?= $u['tahun3'] ?></td>
                <td <?php $u['tahun4'] == 0 ? print_r('style="background: #1cb848; color: #1cb848"') : '' ?>><?= $u['tahun4'] ?></td>
                <td <?php $u['tahun5'] == 0 ? print_r('style="background: #1cb848; color: #1cb848"') : '' ?>><?= $u['tahun5'] ?></td>
                <td <?php $u['tahun6'] == 0 ? print_r('style="background: #1cb848; color: #1cb848"') : '' ?>><?= $u['tahun6'] ?></td>
                <td <?php $u['tahun7'] == 0 ? print_r('style="background: #1cb848; color: #1cb848"') : '' ?>><?= $u['tahun7'] ?></td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
        <!-- .modal -->
        <div class="modal fade" id="Mymodale">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">
                  Notification
                </h4>
                <button type="button" class="close" data-dismiss="modal">
                  &times;
                </button>
              </div>
              <div class="modal-body">
                Reset this data?
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">
                  Cancel
                </button>
                <a class="btn btn-success" href="<?= site_url('C_MhsReguler/resetJumreg/'); ?>">
                  OK
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="modal fade" id="Mymodal">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">
                  Tambah Data
                </h4>
                <button type="button" class="close" data-dismiss="modal">
                  &times;
                </button>
              </div>
              <div class="modal-body">
                <div class="form-group">
                  <div class="input-group-addon">
                    <span class="selection-box">Pilih tahun
                      <form class="form-horizontal" method="post" action="<?= base_url('C_MhsReguler/tambahData') ?>">
                        <select class="form-control" name="tahunmasuk" required style="margin-bottom: 10px">
                          <option selected disabled>Pilih</option>
                          <option id="tahun1" value="2012-2013" for="tahun1">
                            <label class="custom-control-label">2012-2013</label>
                          </option>
                          <option id="tahun2" value="2013-2014" for="tahun2">
                            <label class="custom-control-label">2013-2014</label>
                          </option>
                          <option id="tahun3" value="2014-2015" for="tahun3">
                            <label class="custom-control-label">2014-2015</label>
                          </option>
                          <option id="tahun4" value="2015-2016" for="tahun4">
                            <label class="custom-control-label">2015-2016</label>
                          </option>
                          <option id="tahun5" value="2016-2017" for="tahun5">
                            <label class="custom-control-label">2016-2017</label>
                          </option>
                          <option id="tahun6" value="2017-2018" for="tahun6">
                            <label class="custom-control-label">2017-2018</label>
                          </option>
                          <option id="tahun7" value="2018-2019" for="tahun7">
                            <label class="custom-control-label">2018-2019</label>
                          </option>
                        </select>
                    </span>
                    <input type="number" min="0" class="form-control" style="margin-bottom: 10px" name="tahun1" placeholder="2012-2013" />
                    <input type="number" min="0" class="form-control" style="margin-bottom: 10px" name="tahun2" placeholder="2013-2014" />
                    <input type="number" min="0" class="form-control" style="margin-bottom: 10px" name="tahun3" placeholder="2014-2015" />
                    <input type="number" min="0" class="form-control" style="margin-bottom: 10px" name="tahun4" placeholder="2015-2016" />
                    <input type="number" min="0" class="form-control" style="margin-bottom: 10px" name="tahun5" placeholder="2016-2017" />
                    <input type="number" min="0" class="form-control" style="margin-bottom: 10px" name="tahun6" placeholder="2017-2018" />
                    <input type="number" min="0" class="form-control" name="tahun7" placeholder="2018-2019" />
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">
                        Batal
                      </button>
                      <button type="submit" class="btn btn-success">
                        Simpan
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /.container-fluid -->
      </div>
    </div>
  </div>
</div>
</div>
<!-- End of Main Content -->
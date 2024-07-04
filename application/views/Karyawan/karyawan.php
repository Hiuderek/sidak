  <!-- Begin Page Content -->
  <div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-info">Data Karyawan</h6>
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
          <!-- <div class="category-filter">
            <select id="categoryFilter" class="form-control">
              <option value="">Show All</option>
              <option value="Classical">Classical</option>
              <option value="Hip Hop">Hip Hop</option>
              <option value="Jazz">Jazz</option>
            </select>
          </div> -->
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <a href="<?= site_url('C_Karyawan/tambahKaryawan'); ?>" class="btn btn-secondary btn-icon-split" style="margin-bottom: 10px">
              <span class="icon text-white-50">
                <i class="fas fa-plus"></i>
              </span>
              <span class="text">Tambah Data</span>
            </a>
            <!-- <a href="<?= site_url('C_DosenTetap/unduhDT'); ?>" target="_blank" class="btn btn-info btn-icon-split" style="margin-bottom: 10px; margin-left: 10px">
              <span class="icon text-white-50">
                <i class="fas fa-download"></i>
              </span>
              <span class="text">Unduh Data</span>
            </a> -->
            <thead>
              <tr>
                <th style="text-align: center">No.</th>
                <th style="text-align: center">NIK</th>
                <th style="text-align: center">Nama Karyawan</th>
                <th style="text-align: center">Ijazah Terakhir</th>
                <th style="text-align: center">Status Pajak</th>
                <th style="text-align: center">NPWP</th>
                <th style="text-align: center">Aksi</th>
                <!-- <th colspan="2" style="text-align: center">Gelar
                  <table>
                    <th style="width: 140px; border: none">Depan</th>
                    <th style="width: 140px; border: none">Belakang</th>
                  </table>
                </th>
                <th colspan="3" style="text-align: center">Jenjang Pendidikan
                  <table>
                    <th style="width: 100px; border: none">S1</th>
                    <th style="width: 140px; border: none">S2</th>
                    <th style="width: 100px; border: none">S3</th>
                  </table>
                </th>
                <th colspan="3" style="text-align: center">Bidang Keahlian
                  <table>
                    <th style="width: 100px; border: none">S1</th>
                    <th style="width: 140px; border: none">S2</th>
                    <th style="width: 100px; border: none">S3</th>
                  </table>
                </th>
                <th style="text-align: center">Surat Bukti</th>
                <th style="text-align: center">Keterangan</th>
                <th style="text-align: center">Aksi</th> -->
              </tr>
            </thead>
            <tbody>
              <?php
                      $no = 1;
                      foreach ($karyawan as $u) { ?>
                <tr>
                  <td><?= $no++ ?></td>
                  <td><?= $u['nik'] ?></td>
                  <td><?= $u['nama_karyawan'] ?></td>
                  <td><?= $u['ijazah_terakhir'] ?></td>
                  <td><?= $u['status_pajak'] ?></td>
                  <td><?= $u['npwp'] ?></td>
                  <td>
                    <a href="<?= site_url('C_Karyawan/editKaryawan/' . $u['id']) ?>" class="btn btn-primary btn-circle btn-sm" title="Ubah Data">
                      <i class="fas fa-edit"></i>
                    </a>
                    <!-- .Launch Modal Button -->
                    <button type="button" class="btn btn-danger btn-circle btn-sm" data-toggle="modal" data-target="#Mymodal<?= $u['id'] ?>" title="Hapus">
                      <i class="fas fa-trash"></i>
                    </button>
                    <!-- .modal -->
                    <div class="modal fade" id="Mymodal<?= $u['id'] ?>">
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
                            Are you sure delete this data?
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">
                              Cancel
                            </button>
                            <a type="button" class="btn btn-info" href="<?= base_url('C_Karyawan/hapus_karyawan/' . $u['id']); ?>/">
                              OK
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </td>
                  <!-- <td><?= $u['gelarbelakang'] ?></td>
                  <td><?= $u['pendidikan1'] ?></td>
                  <td><?= $u['pendidikan2'] ?></td>
                  <td><?= $u['pendidikan3'] ?></td>
                  <td><?= $u['bidang1'] ?></td>
                  <td><?= $u['bidang2'] ?></td>
                  <td><?= $u['bidang3'] ?></td> -->
                  <!-- <td>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#surat<?= $u['id'] ?>">
                      Tampilkan
                    </button>
                  </td> -->
                  <!-- <td><?= $u['keterangan'] ?></td> -->
                  <!-- <td>
                    <a href="<?= site_url('C_DosenTetap/editDosenTetap/' . $u['id']) ?>" class="btn btn-primary btn-circle btn-sm" title="Ubah Data">
                      <i class="fas fa-edit"></i>
                    </a>
                    .Launch Modal Button
                    <button type="button" class="btn btn-danger btn-circle btn-sm" data-toggle="modal" data-target="#Mymodal<?= $u['id'] ?>" title="Hapus">
                      <i class="fas fa-trash"></i>
                    </button>
                    .modal
                    <div class="modal fade" id="Mymodal<?= $u['id'] ?>">
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
                            Are you sure delete this data?
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">
                              Cancel
                            </button>
                            <a type="button" class="btn btn-info" href="<?= base_url('C_DosenTetap/hapus_dosentetap/' . $u['id']); ?>/">
                              OK
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="modal fade" id="surat<?= $u['id'] ?>">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h4 class="modal-title">
                              Surat Bukti
                            </h4>
                            <button type="button" class="close" data-dismiss="modal">
                              &times;
                            </button>
                          </div>
                          <div class="modal-body">
                            <embed width="100%" height="700" src="<?php print_r('../' . $u['suratbukti']) ?>" type="application/pdf"></embed>
                          </div>
                        </div>
                      </div>
                    </div>
                  </td> -->
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>

  </div>
  <!-- /.container-fluid -->


  </div>
  <!-- <script type="text/javascript" src="<?php echo base_url('assets/js/karyawan.js'); ?>"> -->
  <script>
    $(document).ready(function () {
      var table = $('#dataTable').DataTable();
      //Take the category filter drop down and append it to the datatables_filter div. 
      //You can use this same idea to move the filter anywhere withing the datatable that you want.
      $("#filterTable_filter.dataTables_filter").append($("#categoryFilter"));
      
      //Get the column index for the Category column to be used in the method below ($.fn.dataTable.ext.search.push)
      //This tells datatables what column to filter on when a user selects a value from the dropdown.
      //It's important that the text used here (Category) is the same for used in the header of the column to filter
      var categoryIndex = 0;
      $("#filterTable th").each(function (i) {
        if ($($(this)).html() == "Category") {
          categoryIndex = i; return false;
        }
      });
      //Use the built in datatables API to filter the existing rows by the Category column
      $.fn.dataTable.ext.search.push(
        function (settings, data, dataIndex) {
          var selectedItem = $('#categoryFilter').val()
          var category = data[categoryIndex];
          if (selectedItem === "" || category.includes(selectedItem)) {
            return true;
          }
          return false;
        }
      );
      //Set the change event for the Category Filter dropdown to redraw the datatable each time
      //a user selects a new filter.
      $("#categoryFilter").change(function (e) {
        table.draw();
      });
      table.draw();
    });
  </script>
  <!-- End of Main Content -->
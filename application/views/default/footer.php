  <!-- Footer -->
  <footer class="sticky-footer bg-white">
    <div class="container my-auto">
      <div class="copyright text-center my-auto">
        <span>Copyright &copy; <?= date('Y'); ?></span>
      </div>
    </div>
  </footer>
  <!-- End of Footer -->

  </div>
  <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Keluar</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Apakah anda ingin keluar dari sistem?</div>
        <div class="modal-footer">
          <button class="btn" type="button" data-dismiss="modal">Batal</button>
          <?php if ($this->session->userdata('role_id') == 2) { ?>
            <a class="btn btn-info" href="<?php echo site_url('welcome/logout') ?>">Ya</a>
          <?php } else if ($this->session->userdata('role_id') == 3) { ?>
            <a class="btn btn-success" href="<?php echo site_url('welcome/logout') ?>">Ya</a>
          <?php } else { ?>
            <a class="btn btn-primary" href="<?php echo site_url('welcome/logout') ?>">Ya</a>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url('assets/halaman_utama/vendor/jquery/jquery.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/halaman_utama/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url('assets/halaman_utama/vendor/jquery-easing/jquery.easing.min.js') ?>"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url('assets/halaman_utama/js/sb-admin-2.min.js') ?>"></script>

  <!-- Page level plugins -->
  <script src="<?= base_url('assets/halaman_utama/vendor/chart.js/Chart.min.js') ?>"></script>

  <!-- Page level custom scripts -->
  <script src="<?= base_url('assets/halaman_utama/js/demo/chart-area-demo.js') ?>"></script>
  <script src="<?= base_url('application/views/chart-pie-demo.js') ?>"></script>
  <script src="<?= base_url('assets/halaman_utama/js/demo/chart-bar-demo.js') ?>"></script>

  <!-- Page level plugins -->
  <script src="<?php echo base_url('assets/halaman_utama/vendor/datatables/jquery.dataTables.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/halaman_utama/vendor/datatables/dataTables.bootstrap4.min.js') ?>"></script>

  <!-- Page level custom scripts -->
  <script src="<?php echo base_url('assets/halaman_utama/js/demo/datatables-demo.js') ?>"></script>

  </body>
  <script>
    function sum() {
      var txtFirstNumberValue = document.getElementById('nilai0').value;
      var txtSecondNumberValue = document.getElementById('nilai1').value;
      var result = parseFloat(txtFirstNumberValue) - parseFloat(txtSecondNumberValue);
      if (!isNaN(result)) {
        document.getElementById('nilai2').value = result;
      }
    }

    function sum2() {
      var txtFirstNumberValue = document.getElementById('nilai0').value;
      var txtSecondNumberValue = document.getElementById('nilai1').value;
      var txtThirdNumberValue = document.getElementById('nilai2').value;
      if (txtSecondNumberValue == 0) {
        var result = parseFloat(txtFirstNumberValue) - parseFloat(txtThirdNumberValue);
      } else {
        var result = parseFloat(txtFirstNumberValue) - parseFloat(txtSecondNumberValue) - parseFloat(txtThirdNumberValue);
      }
      if (!isNaN(result)) {
        document.getElementById('nilai3').value = result;
      }
    }

    function sum3() {
      var txtFirstNumberValue = document.getElementById('nilai0').value;
      var txtSecondNumberValue = document.getElementById('nilai1').value;
      var txtThirdNumberValue = document.getElementById('nilai2').value;
      var txtFourthNumberValue = document.getElementById('nilai3').value;
      if (txtSecondNumberValue == 0) {
        var result = parseFloat(txtFirstNumberValue) - parseFloat(txtThirdNumberValue) - parseFloat(txtFourthNumberValue);
      } else {
        var result = parseFloat(txtFirstNumberValue) - parseFloat(txtSecondNumberValue) - parseFloat(txtThirdNumberValue) - parseInt(txtFourthNumberValue);
      }
      if (!isNaN(result)) {
        document.getElementById('nilai4').value = result;
      }
    }
  </script>

  </html>
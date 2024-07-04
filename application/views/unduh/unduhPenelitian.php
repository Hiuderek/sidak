    <!-- DataTales Example -->
    <?php
    header("Content-type: application/vnd.ms-excel");
    header("Content-Disposition: attachment; filename=Penelitian.xls");
    ?>
    <h1 style="text-align: center;">Data Penelitian Dosen</h1>
    <h5 style="text-align: center;"><?php echo "Tanggal diunduh: " . date('d-m-Y'); ?></h5>
    <table style="margin: auto" width="50%" border="1" cellspacing="0">
      <thead>
        <tr>
          <th style="text-align: center">Sumber Pembiayaan</th>
          <th style="text-align: center">TS-2 (2016)</th>
          <th style="text-align: center">TS-1 (2017)</th>
          <th style="text-align: center">TS (2018)</th>
      </thead>
      <tbody style="text-align: center">
        <?php foreach ($penelitian as $u) { ?>
          <?php
          $sumber = $u['sumber'];
          ?>
          <?php if ($sumber == '1') { ?>
            <th style="text-align: left">Pembiayaan sendiri oleh peneliti</th>
            <td><?= $u['tahun1'] ?></td>
            <td><?= $u['tahun2'] ?></td>
            <td><?= $u['tahun3'] ?></td>
          <?php } else if ($sumber == '2') { ?>
            <th style="text-align: left">PT yang bersangkutan</th>
            <td><?= $u['tahun1'] ?></td>
            <td><?= $u['tahun2'] ?></td>
            <td><?= $u['tahun3'] ?></td>
          <?php } else if ($sumber == '3') { ?>
            <th style="text-align: left">Depdiknas</th>
            <td><?= $u['tahun1'] ?></td>
            <td><?= $u['tahun2'] ?></td>
            <td><?= $u['tahun3'] ?></td>
          <?php } else if ($sumber == '4') { ?>
            <th style="text-align: left">Institusi dalam negeri di luar Depdiknas</th>
            <td><?= $u['tahun1'] ?></td>
            <td><?= $u['tahun2'] ?></td>
            <td><?= $u['tahun3'] ?></td>
          <?php } else if ($sumber == '5') { ?>
            <th style="text-align: left">Institusi luar negeri</th>
            <td><?= $u['tahun1'] ?></td>
            <td><?= $u['tahun2'] ?></td>
            <td><?= $u['tahun3'] ?></td>
          <?php } ?>
          <tr></tr>
        <?php } ?>
      </tbody>
      <!-- <script>
        window.print();
      </script> -->
    </table>
    <!-- End of Main Content -->
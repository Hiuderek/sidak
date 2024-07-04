    <!-- DataTales Example -->
    <?php
    header("Content-type: application/vnd.ms-excel");
    header("Content-Disposition: attachment; filename=DosenTidakTetap.xls");
    ?>
    <h1 style="text-align: center;">Data Dosen Tidak Tetap</h1>
    <h5 style="text-align: center;"><?php echo "Tanggal diunduh: " . date('d-m-Y'); ?></h5>
    <table style="margin: auto" width="50%" border="1" cellspacing="0">
      <thead>
        <tr>
          <th style="text-align: center">No.</th>
          <th style="text-align: center">Nama Dosen</th>
          <th style="text-align: center">NIDN</th>
          <th style="text-align: center">Tanggal Lahir</th>
          <th style="text-align: center">Jabatan</th>
          <th colspan="2" style="text-align: center">Gelar</th>
          <th colspan="3" style="text-align: center">Jenjang Pendidikan
          </th>
          <th colspan="3" style="text-align: center">Bidang Keahlian
          </th>
        </tr>
      </thead>
      <tbody style="text-align: center">
        <?php
        $no = 1;
        foreach ($dosentdkTetap as $u) { ?>
          <tr>
            <td><?= $no++ ?></td>
            <td><?= $u['nama'] ?></td>
            <td><?= $u['nidn'] ?></td>
            <td><?= $u['tgl_lahir'] ?></td>
            <td><?= $u['jabatan'] ?></td>
            <td><?= $u['gelardepan'] ?></td>
            <td><?= $u['gelarbelakang'] ?></td>
            <td><?= $u['pendidikan1'] ?></td>
            <td><?= $u['pendidikan2'] ?></td>
            <td><?= $u['pendidikan3'] ?></td>
            <td><?= $u['bidang1'] ?></td>
            <td><?= $u['bidang2'] ?></td>
            <td><?= $u['bidang3'] ?></td>
          </tr>
        <?php } ?>
      </tbody>
      <!-- <script>
        window.print();
      </script> -->
    </table>
    <!-- End of Main Content -->
    <!-- DataTales Example -->
    <?php
    header("Content-type: application/vnd.ms-excel");
    header("Content-Disposition: attachment; filename=KemampuanDosen.xls");
    ?>
    <h1 style="text-align: center;">Data Karya Ilmiah Dosen</h1>
    <h5 style="text-align: center;"><?php echo "Tanggal diunduh: " . date('d-m-Y'); ?></h5>
    <table style="margin: auto" width="50%" border="1" cellspacing="0">
      <thead>
        <tr>
          <th style="text-align: center">No.</th>
          <th style="text-align: center">Nama Dosen</th>
          <th style="text-align: center">Jenjang Pendidikan Lanjut</th>
          <th style="text-align: center">Bidang Studi</th>
          <th style="text-align: center">Perguruan Tinggi</th>
          <th style="text-align: center">Negara</th>
          <th style="text-align: center">Tahun Mulai Studi</th>
        </tr>
      </thead>
      <tbody style="text-align: center">
        <?php
        $no = 1;
        foreach ($peningkatandosen as $u) { ?>
          <tr>
            <td><?= $no++ ?></td>
            <td><?= $u['nama'] ?></td>
            <td><?= $u['jenjang'] ?></td>
            <td><?= $u['bidang_studi'] ?></td>
            <td><?= $u['perguruan_tinggi'] ?></td>
            <td><?= $u['negara'] ?></td>
            <td><?= $u['tahun'] ?></td>
          </tr>
        <?php } ?>
      </tbody>
      <!-- <script>
        window.print();
      </script> -->
    </table>
    <!-- End of Main Content -->
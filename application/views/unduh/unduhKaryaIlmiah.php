    <!-- DataTales Example -->
    <?php
    header("Content-type: application/vnd.ms-excel");
    header("Content-Disposition: attachment; filename=KaryaIlmiahDosen.xls");
    ?>
    <h1 style="text-align: center;">Data Karya Ilmiah Dosen</h1>
    <h5 style="text-align: center;"><?php echo "Tanggal diunduh: " . date('d-m-Y'); ?></h5>
    <table style="margin: auto" width="50%" border="1" cellspacing="0">
      <thead>
        <tr>
          <th style="text-align: center">No.</th>
          <th style="text-align: center">Judul Karya Ilmiah</th>
          <th style="text-align: center">Nama Dosen</th>
          <th style="text-align: center">Dipublikasikan Pada</th>
          <th style="text-align: center">Tahun Publikasi</th>
          <th style="text-align: center">Tingkat</th>
        </tr>
      </thead>
      <tbody style="text-align: center">
        <?php
        $no = 1;
        foreach ($karyailmiah as $u) { ?>
          <tr>
            <td><?= $no++ ?></td>
            <td><?= $u['judul'] ?></td>
            <td><?= $u['namadosen'] ?></td>
            <td><?= $u['publikasi'] ?></td>
            <td><?= $u['tahunpublikasi'] ?></td>
            <td><?= $u['tingkat'] ?></td>
          </tr>
        <?php } ?>
      </tbody>
      <!-- <script>
        window.print();
      </script> -->
    </table>
    <!-- End of Main Content -->
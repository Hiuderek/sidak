    <!-- DataTales Example -->
    <?php
    header("Content-type: application/vnd.ms-excel");
    header("Content-Disposition: attachment; filename=AktivitasDT.xls");
    ?>
    <h1 style="text-align: center;">Data Aktivitas Dosen Tetap</h1>
    <h5 style="text-align: center;"><?php echo "Tanggal diunduh: " . date('d-m-Y'); ?></h5>
    <table style="margin: auto" width="50%" border="1" cellspacing="0">
      <thead>
        <tr>
          <th style="text-align: center">No.</th>
          <th style="text-align: center">Nama Dosen</th>
          <th style="text-align: center">Bidang Keahlian</th>
          <th style="text-align: center">Kode Mata Kuliah</th>
          <th style="text-align: center">Nama Mata Kuliah</th>
          <th style="text-align: center">Jumlah Kelas</th>
          <th style="text-align: center">Jumlah Rencana Kelas</th>
          <th style="text-align: center">Jumlah Total Kelas</th>
        </tr>
      </thead>
      <tbody style="text-align: center">
        <?php
        $no = 1;
        foreach ($aktivitas_dt as $u) { ?>
          <tr>
            <td><?= $no++ ?></td>
            <td><?= $u['nama'] ?></td>
            <td><?= $u['bidang'] ?></td>
            <td><?= $u['kodematkul'] ?></td>
            <td><?= $u['namamatkul'] ?></td>
            <td><?= $u['jumlahkelas'] ?></td>
            <td><?= $u['rencanakelas'] ?></td>
            <td><?= $u['sukseskelas'] ?></td>
          </tr>
        <?php } ?>
      </tbody>
      <!-- <script>
        window.print();
      </script> -->
    </table>
    <!-- End of Main Content -->
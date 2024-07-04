    <!-- DataTales Example -->
    <?php
    header("Content-type: application/vnd.ms-excel");
    header("Content-Disposition: attachment; filename=Mhs_Lulusan.xls");
    ?>
    <h1 style="text-align: center;">Data Aktivitas Dosen Tetap</h1>
    <h5 style="text-align: center;"><?php echo "Tanggal diunduh: " . date('d-m-Y'); ?></h5>
    <table style="margin: auto" width="50%" border="1" cellspacing="0">
      <thead>
        <tr>
          <th>No.</th>
          <th style="text-align: center; width: 10px">Tahun Akademik</th>
          <th style="text-align: center; width: 10px">Daya Tampung</th>
          <th colspan="2" style="text-align: center; width: 10px">Jumlah Calon Mahasiswa Reguler
            <table style="margin: auto" border="1" cellspacing="0">
              <th>Ikut Seleksi</th>
              <th>Lulus Seleksi</th>
            </table>
          </th>
          <th colspan="2" style="text-align: center; width: 10px">Jumlah Mahasiswa Baru
            <table style="margin: auto" border="1" cellspacing="0">
              <th>Reguler</th>
              <th>Transfer</th>
            </table>
          </th>
          <th colspan="2" style="text-align: center; width: 10px">Jumlah Total Mahasiswa
            <table style="margin: auto" border="1" cellspacing="0">
              <th>Reguler</th>
              <th>Transfer</th>
            </table>
          </th>
          <th colspan="2" style="text-align: center; width: 10px">Jumlah Lulusan
            <table style="margin: auto" border="1" cellspacing="0">
              <th>Reguler</th>
              <th>Transfer</th>
            </table>
          </th>
          <th colspan="3" style="text-align: center; width: 10px">IPK Lulusan Reguler
            <table style="margin: auto" border="1" cellspacing="0">
              <th>Min</th>
              <th>Rat</th>
              <th>Mak</th>
            </table>
          </th>
          <th colspan="3" style="text-align: center; width: 10px">Persentase Lulusan Reguler dengan IPK
            <table style="margin: auto" border="1" cellspacing="0">
              <th><?= "<2,75" ?></th>
              <th>2,75-3,50</th>
              <th><?= ">3,50" ?></th>
            </table>
          </th>
        </tr>
      </thead>
      <tbody>
        <?php
        $no = 1;
        $jum1 = 0;
        $jum2 = 0;
        $jum3 = 0;
        $jum4 = 0;
        $jum5 = 0;
        $jum6 = 0;
        $jum7 = 0;
        $jum8 = 0;
        $jum9 = 0;
        foreach ($mhs_lulusan as $u) { ?>
          <tr>
            <td><?= $no++ ?></td>
            <td><?= $u['tahun'] ?></td>
            <td><?= $u['dayaTampung'] ?></td>
            <td><?= $u['seleksi'] ?></td>
            <td><?= $u['lulus'] ?></td>
            <td><?= $u['maba_reg'] ?></td>
            <td><?= $u['maba_transfer'] ?></td>
            <td><?= $u['mhs_reg'] ?></td>
            <td><?= $u['mhs_transfer'] ?></td>
            <td><?= $u['lulusan_reg'] ?></td>
            <td><?= $u['lulusan_transfer'] ?></td>
            <td><?= $u['ipk_min'] ?></td>
            <td><?= $u['ipk_rat'] ?></td>
            <td><?= $u['ipk_mak'] ?></td>
            <td><?= $u['persen_min'] ?></td>
            <td><?= $u['persen_mid'] ?></td>
            <td><?= $u['persen_mak'] ?></td>
          </tr>
        <?php
          $jum1 += $u['dayaTampung'];
          $jum2 += $u['seleksi'];
          $jum3 += $u['lulus'];
          $jum4 += $u['maba_reg'];
          $jum5 += $u['maba_transfer'];
          $jum6 += $u['mhs_reg'];
          $jum7 += $u['mhs_transfer'];
          $jum8 += $u['lulusan_reg'];
          $jum9 += $u['lulusan_transfer'];
        } ?>
      </tbody>
      <tbody style="text-align: center">
        <tr>
          <th colspan="2">Jumlah</th>
          <th><?php echo $jum1 ?></th>
          <th><?php echo $jum2 ?></th>
          <th><?php echo $jum3 ?></th>
          <th><?php echo $jum4 ?></th>
          <th><?php echo $jum5 ?></th>
          <th><?php echo $jum6 ?></th>
          <th><?php echo $jum7 ?></th>
          <th><?php echo $jum8 ?></th>
          <th><?php echo $jum9 ?></th>
          <th style="background: gray"></th>
          <th style="background: gray"></th>
          <th style="background: gray"></th>
          <th style="background: gray"></th>
          <th style="background: gray"></th>
          <th style="background: gray"></th>
        </tr>
      </tbody>
      <!-- <script>
        window.print();
      </script> -->
    </table>
    <!-- End of Main Content -->
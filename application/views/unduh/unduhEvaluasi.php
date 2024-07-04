    <!-- DataTales Example -->
    <?php
    header("Content-type: application/vnd.ms-excel");
    header("Content-Disposition: attachment; filename=Evaluasi.xls");
    ?>
    <h1 style="text-align: center;">Data Evaluasi Lulusan</h1>
    <h5 style="text-align: center;"><?php echo "Tanggal diunduh: " . date('d-m-Y'); ?></h5>
    <table style="margin: auto" width="80%" border="1" cellspacing="0">
      <thead>
        <tr>
          <th>Jenis Kemampuan</th>
          <th>Sangat Baik (%)</th>
          <th colspan="2">Baik (%)</th>
          <th>Cukup (%)</th>
          <th>Kurang (%)</th>
          <th>Rencana Tindak Lanjut oleh Program Studi</th>
        </tr>
      </thead>
      <tbody style="text-align: center">
        <?php
        $jum1 = 0;
        $jum2 = 0;
        $jum3 = 0;
        $jum4 = 0;
        foreach ($evaluasi as $u) { ?>
          <?php
          $jenis = $u['jenis'];
          ?>
          <tr>
            <?php if ($jenis == '1') { ?>
              <th style="text-align: left">Integritas (etika dan moral)</th>
              <td><?= $u['nilai1'] ?></td>
              <td colspan="2"><?= $u['nilai2'] ?></td>
              <td><?= $u['nilai3'] ?></td>
              <td><?= $u['nilai4'] ?></td>
              <td><?= $u['keterangan'] ?></td>
            <?php } else if ($jenis == '2') { ?>
              <th style="text-align: left">Keahlian berdasarkan bidang ilmu (profesionalisme)</th>
              <td><?= $u['nilai1'] ?></td>
              <td colspan="2"><?= $u['nilai2'] ?></td>
              <td><?= $u['nilai3'] ?></td>
              <td><?= $u['nilai4'] ?></td>
              <td><?= $u['keterangan'] ?></td>
            <?php } else if ($jenis == '3') { ?>
              <th style="text-align: left">Bahasa Inggris</th>
              <td><?= $u['nilai1'] ?></td>
              <td colspan="2"><?= $u['nilai2'] ?></td>
              <td><?= $u['nilai3'] ?></td>
              <td><?= $u['nilai4'] ?></td>
              <td><?= $u['keterangan'] ?></td>
            <?php } else if ($jenis == '4') { ?>
              <th style="text-align: left">Penggunaan Teknologi Informasi</th>
              <td><?= $u['nilai1'] ?></td>
              <td colspan="2"><?= $u['nilai2'] ?></td>
              <td><?= $u['nilai3'] ?></td>
              <td><?= $u['nilai4'] ?></td>
              <td><?= $u['keterangan'] ?></td>
            <?php } else if ($jenis == '5') { ?>
              <th style="text-align: left">Komunikasi</th>
              <td><?= $u['nilai1'] ?></td>
              <td colspan="2"><?= $u['nilai2'] ?></td>
              <td><?= $u['nilai3'] ?></td>
              <td><?= $u['nilai4'] ?></td>
              <td><?= $u['keterangan'] ?></td>
            <?php } else if ($jenis == '6') { ?>
              <th style="text-align: left">Kerjasama tim</th>
              <td><?= $u['nilai1'] ?></td>
              <td colspan="2"><?= $u['nilai2'] ?></td>
              <td><?= $u['nilai3'] ?></td>
              <td><?= $u['nilai4'] ?></td>
              <td><?= $u['keterangan'] ?></td>
            <?php } else if ($jenis == '7') { ?>
              <th style="text-align: left" xx>Pengembangan diri</th>
              <td><?= $u['nilai1'] ?></td>
              <td colspan="2"><?= $u['nilai2'] ?></td>
              <td><?= $u['nilai3'] ?></td>
              <td><?= $u['nilai4'] ?></td>
              <td><?= $u['keterangan'] ?></td>
          </tr>
        <?php
            }
            $jum1 += $u['nilai1'];
            $jum2 += $u['nilai2'];
            $jum3 += $u['nilai3'];
            $jum4 += $u['nilai4']; ?>
      <?php } ?>
      <tbody>
        <tr>
          <th class="text-center">Jumlah</th>
          <th class="text-center">(a = <?php echo $jum1 ?>)</th>
          <th class="text-center" colspan="2">(b = <?php echo $jum2 ?>)</th>
          <th class="text-center">(c = <?php echo $jum3 ?>)</th>
          <th class="text-center">(d = <?php echo $jum4 ?>)</th>
          <th style="background: grey"></th>
        </tr>
      </tbody>
      </tbody>
      <!-- <script>
        window.print();
      </script> -->
    </table>
    <!-- End of Main Content -->
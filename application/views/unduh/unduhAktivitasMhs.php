    <!-- DataTales Example -->
    <?php
    header("Content-type: application/vnd.ms-excel");
    header("Content-Disposition: attachment; filename=AktivitasMahasiswa.xls");
    ?>
    <h1 style="text-align: center;">Data Karya Mahasiswa</h1>
    <h5 style="text-align: center;"><?php echo "Tanggal diunduh: " . date('d-m-Y'); ?></h5>
    <table style="margin: 20px auto" cellspacing="0">
      <thead>
        <tr>
          <th style="border: 1px solid">No.</th>
          <th style="border: 1px solid">Nama Mahasiswa</th>
          <th style="border: 1px solid">Nama Kegiatan</th>
          <th style="border: 1px solid">Waktu Kegiatan</th>
          <th style="border: 1px solid">Tingkat Kegiatan</th>
          <th style="border: 1px solid">Prestasi</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $no = 1;
        foreach ($aktivitasmhs as $u) { ?>
          <tr>
            <td style="border: 1px solid"><?= $no++ ?></td>
            <td style="border: 1px solid"><?= $u['nama'] ?></td>
            <td style="border: 1px solid"><?= $u['kegiatan'] ?></td>
            <td style="border: 1px solid"><?= $u['waktu'] ?></td>
            <td style="border: 1px solid"><?= $u['tingkat_kegiatan'] ?></td>
            <td style="border: 1px solid"><?= $u['prestasi'] ?></td>
          </tr>
        <?php } ?>
      </tbody>
      <!-- <script>
        window.print();
      </script> -->
    </table>
    <!-- End of Main Content -->
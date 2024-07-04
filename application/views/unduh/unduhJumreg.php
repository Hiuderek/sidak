    <!-- DataTales Example -->
    <?php
    // header("Content-type: application/vnd.ms-excel");
    // header("Content-Disposition: attachment; filename=JumlahMhsReguler.xls");
    ?>
    <h1 style="text-align: center;">Data Mahasiswa Reguler</h1>
    <h5 style="text-align: center;"><?php echo "Tanggal diunduh: " . date('d-m-Y'); ?></h5>
    <table style="margin: auto" width="80%" border="1" cellspacing="0">
      <thead>
        <tr>
          <th colspan="8" style="text-align: center;">Jumlah Mahasiswa Reguler per Angkatan pada Tahun</th>
        </tr>
        <th></th>
        <th>2012-2013</th>
        <th>2013-2014</th>
        <th>2014-2015</th>
        <th>2015-2016</th>
        <th>2016-2017</th>
        <th>2017-2018</th>
        <th>2018-2019</th>
      </thead>
      <tbody style="text-align: center">
        <?php foreach ($mhs as $u) { ?>
          <tr>
            <th><?= $u['tahunmasuk'] ?></th>
            <td <?php $u['tahun1'] == 0 ? print_r('style="background: gray; color: gray"') : '' ?>><?= $u['tahun1'] ?></td>
            <td <?php $u['tahun2'] == 0 ? print_r('style="background: gray; color: gray"') : '' ?>><?= $u['tahun2'] ?></td>
            <td <?php $u['tahun3'] == 0 ? print_r('style="background: gray; color: gray"') : '' ?>><?= $u['tahun3'] ?></td>
            <td <?php $u['tahun4'] == 0 ? print_r('style="background: gray; color: gray"') : '' ?>><?= $u['tahun4'] ?></td>
            <td <?php $u['tahun5'] == 0 ? print_r('style="background: gray; color: gray"') : '' ?>><?= $u['tahun5'] ?></td>
            <td <?php $u['tahun6'] == 0 ? print_r('style="background: gray; color: gray"') : '' ?>><?= $u['tahun6'] ?></td>
            <td <?php $u['tahun7'] == 0 ? print_r('style="background: gray; color: gray"') : '' ?>><?= $u['tahun7'] ?></td>
          </tr>
        <?php } ?>
      </tbody>
      <script>
        window.print();
      </script>
    </table>
    <!-- End of Main Content -->
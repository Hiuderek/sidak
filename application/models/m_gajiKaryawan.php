<?php
class M_gajiKaryawan extends CI_Model
{
  public $id;
  public $id_karyawan;
  public $jabatan;
  public $tunjangan_jabatan;
  public $gaji_pokok;
  public $tunjangan_proyek;
  public $no_rekening;
  public $tanggal;
 

  function aktivitas_edit()
  {
    $data = array(
      'id_user' => $this->session->userdata('id_user'),
      'status' => 'mengubah',
      'role_id' => $this->get_role(),
      'menu' => 'Dosen Tidak Tetap',
      'username' => $this->get_username(),
      'created' => time()
    );
    return $this->db->insert('aktivitas', $data);
  }
  function get_role()
  {
    $hasil = $this->db
      ->select('role_id')
      ->where('id_user', $this->session->userdata('id_user'))
      ->limit(1)
      ->get('pengguna');
    if ($hasil->num_rows() > 0) {
      return $hasil->row()->role_id;
    } else {
      return 0;
    }
  }
  function get_username()
  {
    $hasil = $this->db
      ->select('username')
      ->where('id_user', $this->session->userdata('id_user'))
      ->limit(1)
      ->get('pengguna');
    if ($hasil->num_rows() > 0) {
      return $hasil->row()->username;
    } else {
      return 0;
    }
  }
  function getGajiKaryawan()
  {
    $this->db->select('gajikaryawan.*, karyawan.nama_karyawan');
    $this->db->from('gajiKaryawan');
    $this->db->join('karyawan', 'karyawan.id = gajikaryawan.id_karyawan');

    return $this->db->get()->result_array();
  }
  function getNamaKaryawan()
  {
    $karyawan = $this->db->select('id, nama_karyawan');
    $karyawan = $this->db->from('karyawan');
    $karyawan = $this->db->get()->result_array();
    $gajikaryawan = $this->db->select('gajikaryawan.*, karyawan.nama_karyawan');
    $gajikaryawan = $this->db->from('gajikaryawan');
    $gajikaryawan = $this->db->where('YEAR(tanggal)', date('Y'));
    $gajikaryawan = $this->db->where('MONTH(tanggal)', date('m'));
    $gajikaryawan = $this->db->join('karyawan', 'karyawan.id = gajikaryawan.id_karyawan');
    $gajikaryawan = $this->db->get()->result_array();

    for($i=0; $i < count($karyawan); $i++) {
      $karyawan[$i]['tanggal'] = FALSE;
    }

    for($i=0; $i < count($gajikaryawan); $i++) {
      for($j=0; $j < count($karyawan); $j++) {
        if($karyawan[$j]['nama_karyawan'] == $gajikaryawan[$i]['nama_karyawan']) {
          $karyawan[$j]['tanggal'] = $gajikaryawan[$i]['tanggal'];
          break;
        }
      };
    };

    return $karyawan;
  }
  private function _upload()
  {
    $config['upload_path'] = './assets/pdf/';
    $config['allowed_types'] = 'pdf';
    $config['file_name'] = $this->id;
    $config['max_size'] = 4096;
    $config['overwrite'] = true;
    $this->upload->initialize($config);
    if ($this->upload->do_upload('suratbukti')) {
      return $this->upload->data("file_name");
    } else {
      print_r($this->upload->display_errors());
    }
  }
  function tambah_data()
  {
    $this->id_karyawan = $this->input->post('nama_karyawan');
    $this->jabatan = $this->input->post('jabatan');
    $this->tunjangan_jabatan = $this->input->post('tunjangan_jabatan');
    $this->gaji_pokok = $this->input->post('gaji_pokok');
    $this->tunjangan_proyek = $this->input->post('tunjangan_proyek');
    $this->no_rekening = $this->input->post('no_rekening');
    $this->tanggal = date('Y-m-d');
    // $this->id_user = $this->session->userdata('id_user');
    // $this->nama = $this->input->post('nama');
    // $this->nidn = $this->input->post('nidn');
    // $this->tgl_lahir = $this->input->post('tgllahir');
    // $this->jabatan = $this->input->post('jabatan');
    // $this->gelardepan = $this->input->post('gelardepan');
    // if ($this->gelardepan == '') {
    //   $this->gelardepan = '-';
    // }
    // $this->gelarbelakang = $this->input->post('gelarbelakang');
    // $this->pendidikan1 = $this->input->post('pendidikan1');
    // $this->pendidikan2 = $this->input->post('pendidikan2');
    // $this->pendidikan3 = $this->input->post('pendidikan3');
    // if ($this->pendidikan3 == '') {
    //   $this->pendidikan3 = 'Tidak Ada';
    // }
    // $this->bidang1 = $this->input->post('bidang1');
    // $this->bidang2 = $this->input->post('bidang2');
    // $this->bidang3 = $this->input->post('bidang3');
    // if ($this->bidang3 == '') {
    //   $this->bidang3 = 'Tidak Ada';
    // }
    // $this->suratbukti = 'assets/pdf/' . $this->_upload();
    // $this->keterangan = 'Belum Verifikasi';
    return $this->db->insert('gajiKaryawan', $this);
  }
  function pilih_data()
  {
    $id = $this->uri->segment(3);
    $this->db->where('id', $id);
    $query = $this->db->get('dosentdktetap');
    return $query;
  }
  function verifdosentdktetap()
  {
    $this->id = $this->uri->segment(3);
    $data = array(
      'keterangan' => 'Terverifikasi'
    );

    $this->db->where('id', $this->id);
    $this->db->update('dosentdktetap', $data);
  }
  public function delete_dosen()
  {
    $this->id = $this->uri->segment(3);
    $this->db->where('id', $this->id);
    $this->db->delete('dosentdktetap');
  }
  function update_dosen()
  {
    $post = $this->input->post();
    $this->id = $this->uri->segment(3);
    $this->id_user = $this->session->userdata('id_user');
    $this->nama = $this->input->post('nama');
    $this->nidn = $this->input->post('nidn');
    $this->tgl_lahir = $this->input->post('tgl_lahir');
    $this->jabatan = $this->input->post('jabatan');
    $this->gelardepan = $this->input->post('gelardepan');
    if ($this->gelardepan == '') {
      $this->gelardepan = '-';
    }
    $this->gelarbelakang = $this->input->post('gelarbelakang');
    $this->pendidikan1 = $this->input->post('pendidikan1');
    $this->pendidikan2 = $this->input->post('pendidikan2');
    $this->pendidikan3 = $this->input->post('pendidikan3');
    if ($this->pendidikan3 == '') {
      $this->pendidikan3 = 'Tidak Ada';
    }
    $this->bidang1 = $this->input->post('bidang1');
    $this->bidang2 = $this->input->post('bidang2');
    $this->bidang3 = $this->input->post('bidang3');
    if ($this->bidang3 == '') {
      $this->bidang3 = 'Tidak Ada';
    }

    if (!empty($_FILES["suratbukti"]["name"])) {
      $this->suratbukti = 'assets/pdf/' . $this->_upload();
    } else {
      $this->suratbukti = $post["old_pdf"];
    }
    $this->keterangan = $this->input->post('keterangan');
    $this->db->where('id', $this->id);
    $this->db->update('dosentdktetap', $this);
  }
}

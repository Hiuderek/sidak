<?php
class M_Karyawan extends CI_Model
{
  public $nik;
  public $nama_karyawan;
  public $ijazah_terakhir;
  public $status_pajak;
  public $npwp;

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
  function getKaryawan()
  {
    $this->db->select('*');
    $this->db->from('karyawan');

    return $this->db->get()->result_array();
  }
  private function _upload()
  {
    $config['upload_path'] = './assets/pdf/';
    $config['allowed_types'] = 'pdf';
    $config['file_name'] = $this->suratbukti;
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
    $this->nik = $this->input->post('nik');
    $this->nama_karyawan = $this->input->post('nama_karyawan');
    $this->ijazah_terakhir = $this->input->post('ijazah_terakhir');
    $this->status_pajak = $this->input->post('status_pajak');
    $this->npwp = $this->input->post('npwp');
    // echo '<pre>';
    // print_r($this);
    // die;
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
    return $this->db->insert('karyawan', $this);
  }
  function pilih_data()
  {
    $id = $this->uri->segment(3);
    $this->db->where('id', $id);
    $query = $this->db->get('karyawan');
    return $query;
  }
  function update_karyawan()
  {
    $post = $this->input->post();
    $this->id = $this->uri->segment(3);
    $this->nik = $this->input->post('nik');
    $this->nama_karyawan = $this->input->post('nama_karyawan');
    $this->ijazah_terakhir = $this->input->post('ijazah_terakhir');
    $this->status_pajak = $this->input->post('status_pajak');
    $this->npwp = $this->input->post('npwp');

    $this->db->where('id', $this->id);
    $this->db->update('karyawan', $this);
  }
  public function delete_dosen()
  {
    $this->id = $this->uri->segment(3);
    $this->db->where('id', $this->id);
    $this->db->delete('karyawan');
  }
//   function update_dosen()
//   {
//     $post = $this->input->post();
//     $this->id_user = $this->session->userdata('id_user');
//     $this->id = $this->uri->segment(3);
//     $this->nama = $this->input->post('nama');
//     $this->nidn = $this->input->post('nidn');
//     $this->tgl_lahir = $this->input->post('tgllahir');
//     $this->jabatan = $this->input->post('jabatan');
//     $this->gelardepan = $this->input->post('gelardepan');
//     if ($this->gelardepan == '') {
//       $this->gelardepan = '-';
//     }
//     $this->gelarbelakang = $this->input->post('gelarbelakang');
//     $this->pendidikan1 = $this->input->post('pendidikan1');
//     $this->pendidikan2 = $this->input->post('pendidikan2');
//     $this->pendidikan3 = $this->input->post('pendidikan3');
//     if ($this->pendidikan3 == '') {
//       $this->pendidikan3 = 'Tidak Ada';
//     }
//     $this->bidang1 = $this->input->post('bidang1');
//     $this->bidang2 = $this->input->post('bidang2');
//     $this->bidang3 = $this->input->post('bidang3');
//     if ($this->bidang3 == '') {
//       $this->bidang3 = 'Tidak Ada';
//     }

//     if (!empty($_FILES["suratbukti"]["name"])) {
//       $this->suratbukti = 'assets/pdf/' . $this->_upload();
//     } else {
//       $this->suratbukti = $post["old_pdf"];
//     }
//     $this->keterangan = $this->input->post('keterangan');
//     $this->db->where('id', $this->id);
//     $this->db->update('dosentetap', $this);
//   }
}

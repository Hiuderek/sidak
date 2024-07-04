<?php

class M_MhsReguler extends CI_Model
{
  public $id;
  public $id_user;
  public $tahunmasuk;
  public $tahun1;
  public $tahun2;
  public $tahun3;
  public $tahun4;
  public $tahun5;
  public $tahun6;
  public $tahun7;

  function aktivitas_tambah()
  {
    $data = array(
      'id_user' => $this->session->userdata('id_user'),
      'status' => 'menambahkan',
      'role_id' => $this->get_role(),
      'menu' => 'Jumlah Mhs. Reguler',
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
  function data_mhs()
  {
    $this->db->order_by('tahunmasuk', 'asc');
    return $this->db->get('mhs_reguler')->result_array();
  }
  function tambahData()
  {
    $this->id_user = $this->session->userdata('id_user');
    $this->tahunmasuk = $this->input->post('tahunmasuk');
    $this->tahun1 = $this->input->post('tahun1');
    $this->tahun2 = $this->input->post('tahun2');
    $this->tahun3 = $this->input->post('tahun3');
    $this->tahun4 = $this->input->post('tahun4');
    $this->tahun5 = $this->input->post('tahun5');
    $this->tahun6 = $this->input->post('tahun6');
    $this->tahun7 = $this->input->post('tahun7');

    return $this->db->insert('mhs_reguler', $this);
  }
  function reset_mhs()
  {
    $this->db->truncate('mhs_reguler');
  }
}

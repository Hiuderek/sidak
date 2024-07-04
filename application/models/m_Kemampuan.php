<?php

class M_Kemampuan extends CI_Model
{
  public $id;
  public $id_user;
  public $nama;
  public $jenjang;
  public $bidang_studi;
  public $perguruan_tinggi;
  public $negara;
  public $tahun;

  function aktivitas_tambah()
  {
    $data = array(
      'id_user' => $this->session->userdata('id_user'),
      'status' => 'menambahkan',
      'role_id' => $this->get_role(),
      'menu' => 'Kemampuan Dosen',
      'username' => $this->get_username(),
      'created' => time()
    );
    return $this->db->insert('aktivitas', $data);
  }
  function aktivitas_edit()
  {
    $data = array(
      'id_user' => $this->session->userdata('id_user'),
      'status' => 'mengubah',
      'role_id' => $this->get_role(),
      'menu' => 'Kemampuan Dosen',
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
  function getKemampuan()
  {
    $this->db->select('peningkatandosen.*');
    $this->db->from('peningkatandosen');

    return $this->db->get()->result_array();
  }
  function tambah_data()
  {
    $this->id_user = $this->session->userdata('id_user');
    $this->nama = $this->input->post('nama');
    $this->jenjang = $this->input->post('jenjang');
    $this->bidang_studi = $this->input->post('bidang_studi');
    $this->perguruan_tinggi = $this->input->post('perguruan_tinggi');
    $this->negara = $this->input->post('negara');
    $this->tahun = $this->input->post('tahun');
    return $this->db->insert('peningkatandosen', $this);
  }
  function pilih_data()
  {
    $this->id = $this->uri->segment(3);
    $this->db->where('id', $this->id);
    $query = $this->db->get('peningkatandosen');
    return $query;
  }
  function update_dosen()
  {
    $this->id = $this->uri->segment(3);
    $this->id_user = $this->session->userdata('id_user');
    $this->nama = $this->input->post('nama');
    $this->jenjang = $this->input->post('jenjang');
    $this->bidang_studi = $this->input->post('bidang_studi');
    $this->perguruan_tinggi = $this->input->post('perguruan_tinggi');
    $this->negara = $this->input->post('negara');
    $this->tahun = $this->input->post('tahun');
    $this->db->where('id', $this->id);
    $this->db->update('peningkatandosen', $this);
  }
  public function delete_dosen()
  {
    $this->id = $this->uri->segment(3);
    $this->db->where('id', $this->id);
    $this->db->delete('peningkatandosen');
  }
}

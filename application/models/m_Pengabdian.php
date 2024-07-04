<?php

class M_Pengabdian extends CI_Model
{
  public $id_pengabdian;
  public $id_user;
  public $sumber;
  public $tahun1;
  public $tahun2;
  public $tahun3;

  function aktivitas_tambah()
  {
    $data = array(
      'id_user' => $this->session->userdata('id_user'),
      'status' => 'menambahkan',
      'role_id' => $this->get_role(),
      'menu' => 'Pengabdian',
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
  function tambah_data()
  {
    $this->id_user = $this->session->userdata('id_user');
    $this->sumber = $this->input->post('sumber');
    $this->tahun1 = $this->input->post('tahun1');
    $this->tahun2 = $this->input->post('tahun2');
    $this->tahun3 = $this->input->post('tahun3');

    return $this->db->insert('pengabdian', $this);
  }
  function urut_data()
  {
    $this->db->from('pengabdian');
    $this->db->order_by('sumber', 'asc');
    return $this->db->get()->result_array();
  }
  public function delete_dosen()
  {
    $this->id = $this->uri->segment(3);
    $this->db->where('id_pengabdian', $this->id);
    $this->db->delete('pengabdian');
  }
  function reset_dosen()
  {
    $this->db->truncate('pengabdian');
  }
}

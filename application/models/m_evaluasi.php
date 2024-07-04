<?php

class M_evaluasi extends CI_Model
{
  public $id_evaluasi;
  public $id_user;
  public $jenis;
  public $nilai1;
  public $nilai2;
  public $nilai3;
  public $nilai4;
  public $keterangan;

  function aktivitas_tambah()
  {
    $data = array(
      'id_user' => $this->session->userdata('id_user'),
      'status' => 'menambahkan',
      'role_id' => $this->get_role(),
      'menu' => 'Evaluasi Lulusan',
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
    return $this->db->get('mhs_lulusan')->result_array();
    return $this->db->get('evaluasi')->result_array();
  }
  function tambahData()
  {
    $this->id_user = $this->session->userdata('id_user');
    $this->jenis = $this->input->post('jenis');
    $this->nilai1 = $this->input->post('nilai1');
    $this->nilai2 = $this->input->post('nilai2');
    $this->nilai3 = $this->input->post('nilai3');
    $this->nilai4 = $this->input->post('nilai4');
    $this->keterangan = $this->input->post('keterangan');
    if ($this->nilai1 == '0' || $this->nilai1 == '') {
      $this->nilai1 = '-';
    } else if ($this->nilai2 == '0' || $this->nilai2 == '') {
      $this->nilai2 = '-';
    } else if ($this->nilai3 == '0' || $this->nilai3 == '') {
      $this->nilai3 = '-';
    } else if ($this->nilai4 == '0' || $this->nilai4 == '') {
      $this->nilai4 = '-';
    }

    return $this->db->insert('evaluasi', $this);
  }
  function reset_mhs()
  {
    $this->db->truncate('evaluasi');
  }
  function hitung_data()
  {
    $query = $this->db->get('evaluasi');
    if ($query->num_rows() > 0) {
      return $query->num_rows();
    } else {
      return 0;
    }
  }
  function urut_data()
  {
    $this->db->from('evaluasi');
    $this->db->order_by('jenis', 'asc');
    return $this->db->get()->result_array();
  }
  function delete_mhs(){
    $this->id= $this->uri->segment(3);
    $this->db->where('id_evaluasi', $this->id);
    $this->db->delete('evaluasi');
  }
}

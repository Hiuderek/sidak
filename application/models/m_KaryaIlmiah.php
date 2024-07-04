<?php

class M_KaryaIlmiah extends CI_Model
{
  public $id;
  public $id_user;
  public $judul;
  public $namadosen;
  public $publikasi;
  public $tahunpublikasi;
  public $tingkat;

  function aktivitas_tambah()
  {
    $data = array(
      'id_user' => $this->session->userdata('id_user'),
      'status' => 'menambahkan',
      'role_id' => $this->get_role(),
      'menu' => 'Karya Ilmiah',
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
      'menu' => 'Karya Ilmiah',
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
    $this->judul = $this->input->post('judul'); //6
    $this->namadosen = $this->input->post('nama');
    $this->publikasi = $this->input->post('publikasi');
    $this->tahunpublikasi = $this->input->post('tahun');
    $this->tingkat = $this->input->post('tingkat');

    return $this->db->insert('karyailmiah', $this);
  }
  function pilih_data()
  {
    $this->id = $this->uri->segment(3);
    $this->db->where('id', $this->id);
    $query = $this->db->get('karyailmiah');
    return $query;
  }
  function data_dosen()
  {
    return $this->db->get('karyailmiah')->result_array();
  }
  public function delete_dosen()
  {
    $this->id = $this->uri->segment(3);
    $this->db->where('id', $this->id);
    $this->db->delete('karyailmiah');
  }
  function update_dosen()
  {
    $this->id = $this->uri->segment(3);
    $this->id_user = $this->session->userdata('id_user');
    $this->judul = $this->input->post('judul');
    $this->namadosen = $this->input->post('nama');
    $this->publikasi = $this->input->post('publikasi');
    $this->tahunpublikasi = $this->input->post('tahun');
    $this->tingkat = $this->input->post('tingkat');
    $this->db->where('id', $this->id);
    $this->db->update('karyailmiah', $this);
  }
}

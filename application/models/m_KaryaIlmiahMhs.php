<?php

class M_KaryaIlmiahMHs extends CI_Model
{
  public $id;
  public $id_user;
  public $nama;
  public $kegiatan;
  public $waktu;
  public $tingkat_kegiatan;
  public $prestasi;

  function aktivitas_tambah()
  {
    $data = array(
      'id_user' => $this->session->userdata('id_user'),
      'status' => 'menambahkan',
      'role_id' => $this->get_role(),
      'menu' => 'Karya Mahasiswa',
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
      'menu' => 'Karya Mahasiswa',
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
    return $this->db->get('aktivitasmhs')->result_array();
  }
  function tambahData()
  {
    $this->id_user = $this->session->userdata('id_user');
    $this->nama = $this->input->post('nama');
    $this->kegiatan = $this->input->post('kegiatan');
    $this->waktu = $this->input->post('waktu');
    $this->tingkat_kegiatan = $this->input->post('tingkat');
    $this->prestasi = $this->input->post('prestasi');
    return $this->db->insert('aktivitasmhs', $this);
  }
  public function delete_mhs()
  {
    $this->id = $this->uri->segment(3);
    $this->db->where('id', $this->id);
    $this->db->delete('aktivitasmhs');
  }
  function update_mhs()
  {
    $this->id = $this->uri->segment(3);
    $this->id_user = $this->session->userdata('id_user');
    $this->nama = $this->input->post('nama');
    $this->kegiatan = $this->input->post('kegiatan');
    $this->waktu = $this->input->post('waktu');
    $this->tingkat_kegiatan = $this->input->post('tingkat');
    $this->prestasi = $this->input->post('prestasi');

    $this->db->where('id', $this->id);
    $this->db->update('aktivitasmhs', $this);
  }
  function pilih_data()
  {
    $this->id = $this->uri->segment(3);
    $this->db->where('id', $this->id);
    $query = $this->db->get('aktivitasmhs');
    return $query;
  }
}

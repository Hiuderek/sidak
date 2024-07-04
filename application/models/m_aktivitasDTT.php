<?php

class M_aktivitasDTT extends CI_Model
{
  public $id;
  public $id_user;
  public $id_dosen;
  public $bidang;
  public $kodematkul;
  public $jumlahkelas;
  public $rencanakelas;
  public $sukseskelas;

  function aktivitas_tambah()
  {
    $data = array(
      'id_user' => $this->session->userdata('id_user'),
      'status' => 'menambahkan',
      'role_id' => $this->get_role(),
      'menu' => 'Aktvts Dosen Tidak Tetap',
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
      'menu' => 'Aktvts Dosen Tidak Tetap',
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
  function getAktivitas_dtt()
  {
    $this->db->select('aktivitas_dtt.*, dosentdktetap.nama');
    $this->db->from('aktivitas_dtt');
    $this->db->join('dosentdktetap', 'dosentdktetap.id = aktivitas_dtt.id_dosen');

    return $this->db->get()->result_array();
  }
  function editAktivitas_dtt()
  {
    $id = $this->uri->segment(3);
    $this->db->select('aktivitas_dtt.*, dosentdktetap.nama');
    $this->db->from('aktivitas_dtt');
    $this->db->join('dosentdktetap', 'dosentdktetap.id = aktivitas_dtt.id_dosen');
    $this->db->where(array('aktivitas_dtt.id' => $id));

    return $this->db->get();
  }
  function editAktivitas_dtt_aksi()
  {
    $this->id = $this->uri->segment(3);
    $this->id_user = $this->session->userdata('id_user');
    $this->bidang = $this->input->post('bidang');
    $this->id_dosen = $this->uri->segment(4);
    $this->kodematkul = $this->input->post('kodematkul');
    $this->namamatkul = $this->input->post('namamatkul');
    $this->jumlahkelas = $this->input->post('jumlahkelas');
    $this->rencanakelas = $this->input->post('rencanakelas');
    $this->sukseskelas = $this->input->post('sukseskelas');

    $this->db->set($this);
    $this->db->where('id', $this->id);
    $this->db->update('aktivitas_dtt');
  }
  function tambah_data()
  {
    $this->id_user = $this->session->userdata('id_user');
    $this->id_dosen = $this->input->post('nama');
    $this->bidang = $this->input->post('bidang');
    $this->kodematkul = $this->input->post('kodematkul');
    $this->namamatkul = $this->input->post('namamatkul');
    $this->jumlahkelas = $this->input->post('jumlahkelas');
    $this->rencanakelas = $this->input->post('rencanakelas');
    $this->sukseskelas = $this->input->post('sukseskelas');
    return $this->db->insert('aktivitas_dtt', $this);
  }
  public function delete_dosen()
  {
    $this->id = $this->uri->segment(3);
    $this->db->where('id', $this->id);
    $this->db->delete('aktivitas_dtt');
  }
}

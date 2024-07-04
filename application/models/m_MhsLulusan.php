<?php

class M_MhsLulusan extends CI_Model
{
  public $id;
  public $id_user;
  public $tahun;
  public $dayatampung;
  public $seleksi;
  public $lulus;
  public $maba_reg;
  public $maba_transfer;
  public $mhs_reg;
  public $mhs_transfer;
  public $lulusan_reg;
  public $lulusan_transfer;
  public $ipk_min;
  public $ipk_rat;
  public $ipk_mak;
  public $persen_min;
  public $persen_mid;
  public $persen_mak;

  function aktivitas_tambah()
  {
    $data = array(
      'id_user' => $this->session->userdata('id_user'),
      'status' => 'menambahkan',
      'role_id' => $this->get_role(),
      'menu' => 'Mahasiswa dan Lulusan',
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
      'menu' => 'Mahasiswa dan Lulusan',
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
  }
  function tambahData()
  {
    $this->id_user = $this->session->userdata('id_user');
    $this->tahun = $this->input->post('tahun');
    $this->dayatampung = $this->input->post('dayaTampung');
    $this->seleksi = $this->input->post('seleksi');
    $this->lulus = $this->input->post('lulus');
    $this->maba_reg = $this->input->post('maba_reg');
    $this->maba_transfer = $this->input->post('maba_transfer');
    $this->mhs_reg = $this->input->post('mhs_reg');
    $this->mhs_transfer = $this->input->post('mhs_transfer');
    $this->lulusan_reg = $this->input->post('lulusan_reg');
    $this->lulusan_transfer = $this->input->post('lulusan_transfer');
    $this->ipk_min = $this->input->post('ipk_min');
    $this->ipk_rat = $this->input->post('ipk_rat');
    $this->ipk_mak = $this->input->post('ipk_mak');
    $this->persen_min = $this->input->post('persen_min');
    $this->persen_mid = $this->input->post('persen_mid');
    $this->persen_mak = $this->input->post('persen_mak');
    return $this->db->insert('mhs_lulusan', $this);
  }
  public function delete_mhs()
  {
    $this->id = $this->uri->segment(3);
    $this->db->where('id', $this->id);
    $this->db->delete('mhs_lulusan');
  }
  function update_mhs()
  {
    $this->id = $this->uri->segment(3);
    $this->id_user = $this->session->userdata('id_user');
    $this->tahun = $this->input->post('tahun');
    $this->dayatampung = $this->input->post('dayaTampung');
    $this->seleksi = $this->input->post('seleksi');
    $this->lulus = $this->input->post('lulus');
    $this->maba_reg = $this->input->post('maba_reg');
    $this->maba_transfer = $this->input->post('maba_transfer');
    $this->mhs_reg = $this->input->post('mhs_reg');
    $this->mhs_transfer = $this->input->post('mhs_transfer');
    $this->lulusan_reg = $this->input->post('lulusan_reg');
    $this->lulusan_transfer = $this->input->post('lulusan_transfer');
    $this->ipk_min = $this->input->post('ipk_min');
    $this->ipk_rat = $this->input->post('ipk_rat');
    $this->ipk_mak = $this->input->post('ipk_mak');
    $this->persen_min = $this->input->post('persen_min');
    $this->persen_mid = $this->input->post('persen_mid');
    $this->persen_mak = $this->input->post('persen_mak');

    $this->db->where('id', $this->id);
    $this->db->update('mhs_lulusan', $this);
  }
  function pilih_data()
  {
    $this->id = $this->uri->segment(3);
    $this->db->where('id', $this->id);
    $query = $this->db->get('mhs_lulusan');
    return $query;
  }
}

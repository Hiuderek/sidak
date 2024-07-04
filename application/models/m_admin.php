<?php

class M_admin extends CI_Model
{
  public $id_user;
  public $name;
  public $email;
  public $keterangan;
  public $id;

  public function __construct()
  {
    parent::__construct();
    $this->load->helper('form');
  }
  function data_mhs_lulusan()
  {
    return $this->db->get('mhs_lulusan')->result_array();
  }
  function data_pengguna()
  {
    return $this->db->get('pengguna')->result_array();
  }
  function dosenTetap()
  {
    return $this->db->get('dosentetap')->result_array();
  }
  function dosenTdkTetap()
  {
    return $this->db->get('dosentdktetap')->result_array();
  }
  function hitung_pengguna()
  {
    $query = $this->db->get('pengguna');
    if ($query->num_rows() > 0) {
      return $query->num_rows();
    } else {
      return 0;
    }
  }
  function hitung_dosentetap()
  {
    $query = $this->db->get('dosentetap');
    if ($query->num_rows() > 0) {
      return $query->num_rows();
    } else {
      return 0;
    }
  }
  function hitung_dosentdktetap()
  {
    $query = $this->db->get('dosentdktetap');
    if ($query->num_rows() > 0) {
      return $query->num_rows();
    } else {
      return 0;
    }
  }
  function hitung_mhs_lulusan()
  {
    $query = $this->db->get('mhs_lulusan');
    if ($query->num_rows() > 0) {
      return $query->num_rows();
    } else {
      return 0;
    }
  }
  function show_aktivitas()
  {
    $this->db->from('aktivitas');
    $this->db->limit(8);
    $this->db->order_by('created', 'desc');
    return $this->db->get()->result_array();
  }
  function pilih_data()
  {
    $this->id_user = $this->uri->segment(3);
    $this->db->where('id_user', $this->id_user);
    $query = $this->db->get('pengguna');
    return $query;
  }
  function update()
  {
    $this->id_user = $this->uri->segment(3);
    $this->name = $this->input->post('nama');
    $this->email = $this->input->post('email');

    $this->db->where('id_user', $this->id_user);
    $this->db->update('pengguna', $this);
  }
  public function delete_pengguna()
  {
    $this->id_user = $this->uri->segment(3);
    $this->db->where('id_user', $this->id_user);
    $this->db->delete('pengguna');
  }
}

<?php

class M_Pengguna extends CI_Model
{
  public $id_user;

  function show_aktivitas()
  {
    $this->db->from('aktivitas');
    $this->db->where('role_id', 2);
    $this->db->limit(8);
    $this->db->order_by('created', 'desc');
    return $this->db->get()->result_array();
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
  function hitung_aktivitasmhs()
  {
    $query = $this->db->get('aktivitasmhs');
    if ($query->num_rows() > 0) {
      return $query->num_rows();
    } else {
      return 0;
    }
  }
  function hitung_evaluasi()
  {
    $query = $this->db->get('evaluasi');
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
  function hitung_aktivitas_dt()
  {
    $query = $this->db->get('aktivitas_dt');
    if ($query->num_rows() > 0) {
      return $query->num_rows();
    } else {
      return 0;
    }
  }
  function hitung_aktivitas_dtt()
  {
    $query = $this->db->get('aktivitas_dtt');
    if ($query->num_rows() > 0) {
      return $query->num_rows();
    } else {
      return 0;
    }
  }
  function hitung_peningkatandosen()
  {
    $query = $this->db->get('peningkatandosen');
    if ($query->num_rows() > 0) {
      return $query->num_rows();
    } else {
      return 0;
    }
  }
  function hitung_penelitian()
  {
    $query = $this->db->get('penelitian');
    if ($query->num_rows() > 0) {
      return $query->num_rows();
    } else {
      return 0;
    }
  }
  function hitung_karyailmiah()
  {
    $query = $this->db->get('karyailmiah');
    if ($query->num_rows() > 0) {
      return $query->num_rows();
    } else {
      return 0;
    }
  }
  function hitung_pengabdian()
  {
    $query = $this->db->get('pengabdian');
    if ($query->num_rows() > 0) {
      return $query->num_rows();
    } else {
      return 0;
    }
  }
  function show_profil()
  {
    $this->id_user = $this->session->userdata('id_user');
    $this->db->where('id_user', $this->id_user);
    return $this->db->get('pengguna')->row();
  }
  function show_aktivitas_user()
  {
    $this->id_user = $this->session->userdata('id_user');
    $this->db->where('id_user', $this->id_user);
    $this->db->limit(10);
    $this->db->order_by('created', 'desc');
    return $this->db->get('aktivitas')->result_array();
  }
}

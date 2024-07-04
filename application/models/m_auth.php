<?php

class M_auth extends CI_Model
{
  public $name;
  public $email;
  public $username;
  public $password;
  public $role_id;
  public $date_created;

  public function add_user()
  {
    $this->name = $this->input->post('name');
    $this->email = $this->input->post('email');
    $this->username = $this->input->post('username');
    $this->password = password_hash($this->input->post('password1'), PASSWORD_DEFAULT);
    $this->role_id = $this->input->post('pengguna');
    $this->date_created = time();

    $this->db->set($this);
    $this->db->insert('pengguna');
    $this->db->insert_id();
  }
  public function cek_login()
  {
    $this->username = $this->input->post('username');

    $this->db->select('*');
    $this->db->from('pengguna');
    $this->db->where('username', $this->username);

    return $this->db->get();
  }
}

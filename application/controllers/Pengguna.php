<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengguna extends CI_Controller
{
  public function halaman_mhs()
  {
    $this->load->view('default/headerKoor');
    $data['aktivitas'] = $this->m_Pengguna->show_aktivitas();
    $data['mhs_lulusan'] = $this->m_Pengguna->hitung_mhs_lulusan();
    $data['aktivitasmhs'] = $this->m_Pengguna->hitung_aktivitasmhs();
    $data['evaluasi'] = $this->m_Pengguna->hitung_evaluasi();
    $this->load->view('halaman_mhs', $data);
    $this->load->view('default/footer');
  }
  public function dashboard()
  {
    $this->load->view('default/headerKoor');
    $this->load->view('dashboard');
    $this->load->view('default/footer');
  }
  public function profile()
  {
    $this->load->view('default/headerKoor');
    $data['profil'] = $this->m_Pengguna->show_profil();
    $data['aktivitas'] = $this->m_Pengguna->show_aktivitas_user();
    $this->load->view('default/profile', $data);
    $this->load->view('default/footer');
  }
  public function editProfil()
  {
    $this->load->view('default/headerKoor');
    $data['pengguna'] = $this->m_admin->pilih_data()->row();
    $this->load->view('admin/editPengisiBorang', $data);
    $this->load->view('default/footer');
  }
}

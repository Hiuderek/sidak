<?php

class C_Pengabdian extends CI_Controller
{
  public function pengabdian()
  {
    $this->load->view('default/headerKoor');
    $data['pengabdian'] = $this->m_Pengabdian->urut_data('pengabdian', 'sumber');
    $this->load->view('Dosen/pengabdian', $data);
    $this->load->view('default/footer');
  }
  public function tambahPengabdian()
  {
    $this->load->view('default/headerKoor');
    $this->load->view('Dosen/tambahPengabdian');
    $this->load->view('default/footer');
  }
  public function tambahPengabdian_aksi()
  { //1
    $this->form_validation->set_rules('sumber', 'Sumber', 'trim|is_unique[pengabdian.sumber]'); //2
    $this->form_validation->set_rules('tahun1', 'Tahun 2016', 'trim');
    $this->form_validation->set_rules('tahun2', 'Tahun 2017', 'trim');
    $this->form_validation->set_rules('tahun3', 'Tahun 2018', 'trim');

    if ($this->form_validation->run() == false) { //3
      $this->load->view('default/headerKoor'); //4
      $this->load->view('Dosen/tambahPengabdian');
      $this->load->view('default/footer');
    } else { //5
      $this->m_Pengabdian->aktivitas_tambah();
      $this->m_Pengabdian->tambah_data();
      $this->session->set_flashdata('message', 'Data Berhasil Disimpan');
      redirect('C_Pengabdian/pengabdian');
    } //7
  } //8
  public function resetPengabdian()
  {
    $this->m_Pengabdian->reset_dosen();
    redirect('C_Pengabdian/pengabdian');
  }
  public function hapusPengabdian()
  {
    $this->m_Pengabdian->delete_dosen();
    $this->session->set_flashdata('message', 'Hapus Data Berhasil');
    redirect('C_Pengabdian/pengabdian');
  }
  public function unduhPengabdian()
  {
    $data['pengabdian'] = $this->m_Pengabdian->urut_data('pengabdian', 'sumber');
    $this->load->view('unduh/unduhPengabdian', $data);
  }
}

<?php

class C_Penelitian extends CI_Controller
{
  public function penelitian()
  {
    $this->load->view('default/headerKoor');
    $data['penelitian'] = $this->m_Penelitian->urut_data();
    $this->load->view('Dosen/penelitian', $data);
    $this->load->view('default/footer');
  }
  public function tambahPenelitian()
  {
    $this->load->view('default/headerKoor');
    $this->load->view('Dosen/tambahPenelitian');
    $this->load->view('default/footer');
  }
  public function hapusPenelitian()
  {
    $this->m_Penelitian->delete_dosen();
    $this->session->set_flashdata('message', 'Hapus Data Berhasil');
    redirect('C_Penelitian/penelitian');
  }
  public function resetPenelitian()
  {
    $this->m_Penelitian->reset_dosen();
    redirect('C_Penelitian/penelitian');
  }
  public function unduhPenelitian()
  {
    $data['penelitian'] = $this->m_Penelitian->urut_data();
    $this->load->view('unduh/unduhPenelitian', $data);
  }
  public function tambahPenelitian_aksi()
  {
    $this->form_validation->set_rules('sumber', 'Sumber', 'trim|required|is_unique[penelitian.sumber]');
    $this->form_validation->set_rules('tahun1', 'Tahun 2016', 'trim|required');
    $this->form_validation->set_rules('tahun2', 'Tahun 2017', 'trim|required');
    $this->form_validation->set_rules('tahun3', 'Tahun 2018', 'trim|required');


    if ($this->form_validation->run() == false) {
      $this->load->view('default/headerKoor');
      $this->load->view('Dosen/tambahPenelitian');
      $this->load->view('default/footer');
    } else {
      $this->m_Penelitian->aktivitas_tambah();
      $this->m_Penelitian->tambah_data();
      $this->session->set_flashdata('message', ' Data Berhasil Disimpan');
      redirect('C_Penelitian/penelitian');
    }
  }
}

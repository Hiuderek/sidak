<?php

class C_MhsReguler extends CI_Controller
{
  public function jumreg()
  {
    $this->load->view('default/headerKoor');
    $data['mhs'] = $this->m_MhsReguler->data_mhs();
    $this->load->view('Mahasiswa/jumMahasiswa', $data);
    $this->load->view('default/footer');
  }
  public function tambahData()
  {
    $this->form_validation->set_rules('tahunmasuk', 'Tahun Masuk', 'trim|is_unique[mhs_reguler.tahunmasuk]');

    if ($this->form_validation->run() == false) {
      $this->load->view('default/headerKoor');
      $data['mhs'] = $this->m_MhsReguler->data_mhs();
      $this->load->view('Mahasiswa/jumMahasiswa', $data);
      $this->load->view('default/footer');
    } else {
      // $this->m_MhsReguler->aktivitas_tambah();
      $this->m_MhsReguler->tambahData();
      $this->session->set_flashdata('message', 'Data Berhasil Disimpan');
      redirect('C_MhsReguler/jumreg');
    }
  }
  public function resetJumreg()
  {
    $this->m_MhsReguler->reset_mhs();
    redirect('C_MhsReguler/jumreg');
  }
  public function unduhJumreg()
  {
    $data['mhs'] = $this->m_MhsReguler->data_mhs();
    $this->load->view('unduh/unduhJumreg', $data);
  }
}

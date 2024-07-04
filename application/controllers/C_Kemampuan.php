<?php

class C_Kemampuan extends CI_Controller
{
  public function kemampuan()
  {
    $this->load->view('default/headerKoor');
    $data['peningkatandosen'] = $this->m_Kemampuan->getKemampuan();
    $this->load->view('Dosen/kemampuandosen', $data);
    $this->load->view('default/footer');
  }
  public function tambahKemampuan()
  {
    $this->load->view('default/headerKoor');
    $this->load->view('Dosen/tambahKemampuan');
    $this->load->view('default/footer');
  }
  public function editKemampuan()
  {
    $this->load->view('default/headerKoor');
    $data['peningkatandosen'] = $this->m_Kemampuan->pilih_data()->row();
    $this->load->view('Dosen/editKemampuan', $data);
    $this->load->view('default/footer');
  }
  public function tambahKemampuan_aksi()
  {
    $this->form_validation->set_rules('nama', 'nama', 'trim|required');
    $this->form_validation->set_rules('jenjang', 'jenjang', 'trim|required');
    $this->form_validation->set_rules('bidang_studi', 'bidang studi', 'trim|required');
    $this->form_validation->set_rules('perguruan_tinggi', 'perguruan tinggi', 'trim|required');
    $this->form_validation->set_rules('negara', 'negara', 'trim|required');
    $this->form_validation->set_rules('tahun', 'tahun', 'trim|required');

    if ($this->form_validation->run() == false) {
      $this->load->view('default/headerKoor');
      $this->load->view('Dosen/tambahKemampuan');
      $this->load->view('default/footer');
    } else {
      $this->m_Kemampuan->aktivitas_tambah();
      $this->m_Kemampuan->tambah_data();
      $this->session->set_flashdata('message', ' Data Berhasil Disimpan');
      redirect('C_Kemampuan/kemampuan');
    }
  }
  public function editKemampuan_aksi()
  {
    $this->m_Kemampuan->aktivitas_edit();
    $this->m_Kemampuan->update_dosen();
    $this->session->set_flashdata('message', 'Data Berhasil Diubah');
    redirect('C_Kemampuan/kemampuan');
  }
  public function hapusKemampuan()
  {
    $this->m_Kemampuan->delete_dosen();
    $this->session->set_flashdata('message', 'Hapus Data Berhasil');
    redirect('C_Kemampuan/kemampuan');
  }
  public function unduhKemampuan()
  {
    $data['peningkatandosen'] = $this->m_Kemampuan->getKemampuan();
    $this->load->view('unduh/unduhKemampuan', $data);
  }
}

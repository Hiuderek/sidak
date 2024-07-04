<?php

class C_KaryaIlmiahDosen extends CI_Controller
{
  public function karyailmiah()
  {
    $this->load->view('default/headerKoor');
    $data['karyailmiah'] = $this->m_KaryaIlmiah->data_dosen('karyailmiah');
    $this->load->view('Dosen/karyailmiah', $data);
    $this->load->view('default/footer');
  }
  public function tambahKaryaIlmiah()
  {
    $this->load->view('default/headerKoor');
    $this->load->view('Dosen/tambahKaryaIlmiah');
    $this->load->view('default/footer');
  }
  public function editKaryaIlmiah()
  {
    $this->load->view('default/headerKoor');
    $data['karyailmiah'] = $this->m_KaryaIlmiah->pilih_data()->row();
    $this->load->view('Dosen/editKaryaIlmiah', $data);
    $this->load->view('default/footer');
  }
  public function tambahKaryaIlmiah_aksi()
  { //1
    $this->form_validation->set_rules('judul', 'Judul', 'trim|required'); //2
    $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
    $this->form_validation->set_rules('publikasi', 'Publikasi', 'trim|required');
    $this->form_validation->set_rules('tahun', 'Tahun', 'trim|required');

    if ($this->form_validation->run() == false) { //3
      $this->load->view('default/headerKoor'); //4
      $this->load->view('Dosen/tambahKaryaIlmiah');
      $this->load->view('default/footer');
    } else { //5
      $this->m_KaryaIlmiah->aktivitas_tambah();
      $this->m_KaryaIlmiah->tambah_data();
      $this->session->set_flashdata('message', ' Data Berhasil Disimpan');
      redirect('C_KaryaIlmiahDosen/karyaIlmiah');
    } //8
  } //9
  public function editKaryaIlmiah_aksi()
  {
    $this->m_KaryaIlmiah->aktivitas_edit();
    $this->m_KaryaIlmiah->update_dosen();
    $this->session->set_flashdata('message', 'Data Berhasil Diubah');
    redirect('C_KaryaIlmiahDosen/karyaIlmiah');
  }
  public function hapusKaryaIlmiah()
  {
    $this->m_KaryaIlmiah->delete_dosen();
    $this->session->set_flashdata('message', 'Hapus Data Berhasil');
    redirect('C_KaryaIlmiahDosen/karyaIlmiah');
  }
  public function unduhKaryaIlmiah()
  {
    $data['karyailmiah'] = $this->m_KaryaIlmiah->data_dosen('karyailmiah');
    $this->load->view('unduh/unduhKaryaIlmiah', $data);
  }
}

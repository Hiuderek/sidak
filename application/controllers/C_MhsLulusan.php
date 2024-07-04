<?php

class C_MhsLulusan extends CI_Controller
{
  public function mhs_lulusan()
  {
    $this->load->view('default/headerKoor');
    $data['mhs_lulusan'] = $this->m_MhsLulusan->data_mhs();
    $this->load->view('Mahasiswa/mahasiswaLulusan', $data);
    $this->load->view('default/footer');
  }
  public function tambah_mhs_lulusan()
  {
    $this->load->view('default/headerKoor');
    $this->load->view('Mahasiswa/tambah_mhs_lulusan');
    $this->load->view('default/footer');
  }
  public function edit_mhs_lulusan()
  {
    $this->load->view('default/headerKoor');
    $data['mhs_lulusan'] = $this->m_MhsLulusan->pilih_data()->row();
    $this->load->view('Mahasiswa/edit_mhs_lulusan', $data);
    $this->load->view('default/footer');
  }
  public function tambah_mhs_lulusan_aksi()
  {
    $this->form_validation->set_rules('tahun', 'Tahun', 'trim|required|is_unique[mhs_lulusan.tahun]');
    $this->form_validation->set_rules('dayaTampung', 'input', 'trim|required');
    $this->form_validation->set_rules('seleksi', 'input', 'trim|required');
    $this->form_validation->set_rules('lulus', 'input', 'trim|required');
    $this->form_validation->set_rules('maba_reg', 'input', 'trim|required');
    $this->form_validation->set_rules('maba_transfer', 'input', 'trim|required');
    $this->form_validation->set_rules('mhs_reg', 'input', 'trim|required');
    $this->form_validation->set_rules('mhs_transfer', 'input', 'trim|required');
    $this->form_validation->set_rules('lulusan_reg', 'input', 'trim|required');
    $this->form_validation->set_rules('lulusan_transfer', 'input', 'trim|required');
    $this->form_validation->set_rules('ipk_min', 'input', 'trim|required');
    $this->form_validation->set_rules('ipk_rat', 'input', 'trim|required');
    $this->form_validation->set_rules('ipk_mak', 'input', 'trim|required');
    $this->form_validation->set_rules('persen_min', 'input', 'trim|required');
    $this->form_validation->set_rules('persen_mid', 'input', 'trim|required');
    $this->form_validation->set_rules('persen_mak', 'input', 'trim|required');
    $this->form_validation->set_rules('dayaTampung', 'input', 'trim|required');

    if ($this->form_validation->run() == false) {
      $this->load->view('default/headerKoor');
      $this->load->view('Mahasiswa/tambah_mhs_lulusan');
      $this->load->view('default/footer');
    } else {
      $this->m_MhsLulusan->aktivitas_tambah();
      $this->m_MhsLulusan->tambahData();
      $this->session->set_flashdata('message', ' Data Berhasil Disimpan');
      redirect('C_MhsLulusan/mhs_lulusan');
    }
  }
  public function edit_mhs_lulusan_aksi()
  {
    $this->m_MhsLulusan->aktivitas_edit();
    $this->m_MhsLulusan->update_mhs();
    $this->session->set_flashdata('message', 'Data Berhasil Diubah');
    redirect('C_MhsLulusan/mhs_lulusan');
  }
  public function hapus_mhs_lulusan()
  {
    $this->m_MhsLulusan->delete_mhs();
    $this->session->set_flashdata('message', 'Hapus Data Berhasil');
    redirect('C_MhsLulusan/mhs_lulusan');
  }
  public function unduh_mhs_lulusan()
  {
    $data['mhs_lulusan'] = $this->m_MhsLulusan->data_mhs();
    $this->load->view('unduh/unduh_mhs_lulusan', $data);
  }
}

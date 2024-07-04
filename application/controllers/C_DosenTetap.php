<?php

class C_DosenTetap extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();

    $this->load->library(array('upload'));
  }
  public function dosenTetap()
  {
    $this->load->view('default/headerKoor');
    $data['dosenTetap'] = $this->m_DosenTetap->getDosenTetap();
    $this->load->view('Karyawan/dosenTetap', $data);
    $this->load->view('default/footer');
  }

  public function tambahDosenTetap()
  {
    $this->load->view('default/headerKoor');
    $this->load->view('Dosen/tambahDosenTetap');
    $this->load->view('default/footer');
  }

  public function editDosenTetap()
  {
    $this->load->view('default/headerKoor');
    $data['dosenTetap'] = $this->m_DosenTetap->pilih_data()->row();
    $this->load->view('Dosen/editDosenTetap', $data);
    $this->load->view('default/footer');
  }

  public function verif_dosentetap()
  {
    $this->m_DosenTetap->verifdosentetap();
    $this->session->set_flashdata('message', 'Verifikasi Berhasil');
    redirect('Admin/verifikasi');
  }
  public function tambahDosenTetap_aksi()
  {
    $this->form_validation->set_rules('NIK', 'NIK', 'trim|required');
    $this->form_validation->set_rules('nama_karyawan', 'Nama Karyawan', 'trim|required');
    $this->form_validation->set_rules('ijazah_terakhir', 'Ijazah Terakhir', 'trim|required');
    $this->form_validation->set_rules('status_pajak', 'Status Pajak', 'trim|required');
    $this->form_validation->set_rules('npwp', 'NPWP', 'trim|required');
    // $this->form_validation->set_rules('pendidikan1', 'Pendidikan 1', 'trim|required');
    // $this->form_validation->set_rules('pendidikan2', 'Pendidikan 2', 'trim|required');
    // $this->form_validation->set_rules('bidang1', 'Bidang 1', 'trim|required');
    // $this->form_validation->set_rules('bidang2', 'Bidang 2', 'trim|required');

    if ($this->form_validation->run() == false) {
      $this->load->view('default/headerKoor');
      $this->load->view('Dosen/tambahDosenTetap');
      $this->load->view('default/footer');
    } else {
      $this->m_DosenTetap->aktivitas_tambah();
      $this->m_DosenTetap->tambah_data();
      $this->session->set_flashdata('message', ' Data Berhasil Disimpan');
      redirect('C_DosenTetap/dosenTetap');
    }
  }
  public function editDosenTetap_aksi()
  {
    $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
    $this->form_validation->set_rules('nidn', 'NIDN', 'trim|required');
    $this->form_validation->set_rules('tgllahir', 'Tanggal Lahir', 'trim|required');
    $this->form_validation->set_rules('jabatan', 'Jabatan', 'trim|required');
    $this->form_validation->set_rules('gelarbelakang', 'Gelar', 'trim|required');
    $this->form_validation->set_rules('pendidikan1', 'Pendidikan 1', 'trim|required');
    $this->form_validation->set_rules('pendidikan2', 'Pendidikan 2', 'trim|required');
    $this->form_validation->set_rules('bidang1', 'Bidang 1', 'trim|required');
    $this->form_validation->set_rules('bidang2', 'Bidang 2', 'trim|required');

    if ($this->form_validation->run() == false) {
      $this->load->view('default/headerKoor');
      $this->load->view('Dosen/editDosenTetap');
      $this->load->view('default/footer');
    } else {
      $this->m_DosenTetap->aktivitas_edit();
      $this->m_DosenTetap->update_dosen();
      $this->session->set_flashdata('message', 'Data Berhasil Diubah');
      redirect('C_DosenTetap/dosenTetap');
    }
  }

  public function hapus_dosentetap()
  {
    $this->m_DosenTetap->delete_dosen();
    $this->session->set_flashdata('message', 'Hapus Data Berhasil');
    redirect('C_DosenTetap/dosenTetap');
  }

  public function unduhDT()
  {
    $data['dosenTetap'] = $this->m_DosenTetap->getDosenTetap();
    $this->load->view('unduh/unduhDT', $data);
  }
}

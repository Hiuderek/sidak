<?php

class C_AktivitasDTT extends CI_Controller
{
  public function aktivitasdosentdktetap()
  {
    $this->load->view('default/headerKoor');
    $data['aktivitas_dtt'] = $this->m_aktivitasDTT->getAktivitas_dtt();
    $this->load->view('Dosen/aktivitas_dtt', $data);
    $this->load->view('default/footer');
  }
  public function tambahaktivitas_dtt()
  {
    $this->load->view('default/headerKoor');
    $data['dosentdktetap'] = $this->m_DosenTdkTetap->getDosenTdkTetap();
    $this->load->view('Dosen/tambahaktivitas_dtt', $data);
    $this->load->view('default/footer');
  }
  public function editaktivitas_dtt()
  {
    $this->load->view('default/headerKoor');
    $data['aktivitas_dtt'] = $this->m_aktivitasDTT->editAktivitas_dtt()->row();
    $this->load->view('Dosen/editaktivitas_dtt', $data);
    $this->load->view('default/footer');
  }
  public function tambahaktivitas_dtt_aksi()
  {
    $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
    $this->form_validation->set_rules('bidang', 'Bidang', 'trim|required');
    $this->form_validation->set_rules('kodematkul', 'Kode Mata Kuliah', 'trim|required');
    $this->form_validation->set_rules('namamatkul', 'Nama Mata Kuliah', 'trim|required');
    $this->form_validation->set_rules('jumlahkelas', 'Jumlah Kelas', 'trim|required');
    $this->form_validation->set_rules('rencanakelas', 'Rencana Kelas', 'trim|required');
    $this->form_validation->set_rules('sukseskelas', 'Sukses Kelas', 'trim|required');

    if ($this->form_validation->run() == false) {
      $this->load->view('default/headerKoor');
      $data['dosentdktetap'] = $this->m_DosenTdkTetap->getDosenTdkTetap();
      $this->load->view('Dosen/tambahaktivitas_dtt', $data);
      $this->load->view('default/footer');
    } else {
      $this->m_aktivitasDTT->aktivitas_tambah();
      $this->m_aktivitasDTT->tambah_data();
      $this->session->set_flashdata('message', ' Data Berhasil Disimpan');
      redirect('C_AktivitasDTT/aktivitasdosentdktetap');
    }
  }
  public function editaktivitas_dtt_aksi()
  {
    $this->m_aktivitasDTT->aktivitas_edit();
    $this->m_aktivitasDTT->editAktivitas_dtt_aksi();
    $this->session->set_flashdata('message', 'Data Berhasil Diubah');
    redirect('C_AktivitasDTT/aktivitasdosentdktetap');
  }
  public function hapusaktivitas_dtt()
  {
    $this->m_aktivitasDTT->delete_dosen();
    $this->session->set_flashdata('message', 'Hapus Data Berhasil');
    redirect('C_AktivitasDTT/aktivitasdosentdktetap');
  }
  public function unduhAktivitasDTT()
  {
    $data['aktivitas_dtt'] = $this->m_aktivitasDTT->getAktivitas_dtt();
    $this->load->view('unduh/unduhAktivitasDTT', $data);
  }
}

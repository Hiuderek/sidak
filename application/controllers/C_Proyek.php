<?php

class C_Proyek extends CI_Controller
{
  public function proyek()
  {
    $this->load->view('default/headerKoor');
    $data['aktivitas_dt'] = $this->m_Proyek->getAktivitas_dt();
    $this->load->view('Karyawan/aktivitasdosenTetap', $data);
    $this->load->view('default/footer');
  }
  public function tambahaktivitas_dt()
  {
    $this->load->view('default/headerKoor');
    $data['dosentetap'] = $this->m_DosenTetap->getDosenTetap();
    $this->load->view('Dosen/tambahaktivitas_dt', $data);
    $this->load->view('default/footer');
  }
  public function editaktivitas_dt()
  {
    $this->load->view('default/headerKoor');
    $data['aktivitas_dt'] = $this->m_aktivitasDT->editAktivitas_dt()->row();
    $this->load->view('Dosen/editaktivitas_dt', $data);
    $this->load->view('default/footer');
  }
  public function tambahaktivitas_dt_aksi()
  {
    $this->form_validation->set_rules('bidang', 'Bidang', 'trim|required');
    $this->form_validation->set_rules('kodematkul', 'Kode Mata Kuliah', 'trim|required');
    $this->form_validation->set_rules('namamatkul', 'Nama Mata Kuliah', 'trim|required');
    $this->form_validation->set_rules('jumlahkelas', 'Jumlah Kelas', 'trim|required');
    $this->form_validation->set_rules('rencanakelas', 'Rencana Kelas', 'trim|required');
    $this->form_validation->set_rules('sukseskelas', 'Sukses Kelas', 'trim|required');

    if ($this->form_validation->run() == false) {
      $this->load->view('default/headerKoor');
      $data['dosentetap'] = $this->m_DosenTetap->getDosenTetap();
      $this->load->view('Dosen/tambahaktivitas_dt', $data);
      $this->load->view('default/footer');
    } else {
      $this->m_aktivitasDT->aktivitas_tambah();
      $this->m_aktivitasDT->tambah_data();
      $this->session->set_flashdata('message', ' Data Berhasil Disimpan');
      redirect('C_AktivitasDT/aktivitasdosentetap');
    }
  }
  public function editaktivitas_dt_aksi()
  {
    $this->m_aktivitasDT->aktivitas_edit();
    $this->m_aktivitasDT->editAktivitas_dt_aksi();
    $this->session->set_flashdata('message', 'Data Berhasil Diubah');
    redirect('C_AktivitasDT/aktivitasdosentetap');
  }
  public function hapusaktivitas_dt()
  {
    $this->m_aktivitasDT->delete_dosen();
    $this->session->set_flashdata('message', 'Hapus Data Berhasil');
    redirect('C_AktivitasDT/aktivitasdosentetap');
  }
  public function unduhAktivitasDT()
  {
    $data['aktivitas_dt'] = $this->m_aktivitasDT->getAktivitas_dt();
    $this->load->view('unduh/unduhAktivitasDT', $data);
  }
}

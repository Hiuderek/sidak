<?php

class C_KaryaIlmiahMhs extends CI_Controller
{
  public function aktivitasMhs()
  {
    $this->load->view('default/headerKoor');
    $data['aktivitasmhs'] = $this->m_KaryaIlmiahMhs->data_mhs('aktivitasmhs');
    $this->load->view('Mahasiswa/aktivitasMahasiswa', $data);
    $this->load->view('default/footer');
  }
  public function tambahAktivitasMhs()
  {
    $this->load->view('default/headerKoor');
    $this->load->view('Mahasiswa/tambahDataAktivitasMhs');
    $this->load->view('default/footer');
  }
  public function editAktivitasMhs()
  {
    $this->load->view('default/headerKoor');
    $data['aktivitasmhs'] = $this->m_KaryaIlmiahMhs->pilih_data()->row();
    $this->load->view('Mahasiswa/editAktivitasMhs', $data);
    $this->load->view('default/footer');
  }
  public function tambahAktivitasMhs_aksi()
  {
    $this->form_validation->set_rules('nama', 'input', 'trim|required');
    $this->form_validation->set_rules('kegiatan', 'input', 'trim|required');
    $this->form_validation->set_rules('waktu', 'input', 'trim|required');
    $this->form_validation->set_rules('tingkat', 'input', 'trim|required');
    $this->form_validation->set_rules('prestasi', 'input', 'trim|required');

    if ($this->form_validation->run() == false) {
      $this->load->view('default/headerKoor');
      $this->load->view('Mahasiswa/tambahDataAktivitasMhs');
      $this->load->view('default/footer');
    } else {
      $this->m_KaryaIlmiahMhs->aktivitas_tambah();
      $this->m_KaryaIlmiahMhs->tambahData();
      $this->session->set_flashdata('message', ' Data Berhasil Disimpan');
      redirect('C_KaryaIlmiahMhs/aktivitasMhs');
    }
  }
  public function editAktivitasMhs_aksi()
  {
    $this->m_KaryaIlmiahMhs->aktivitas_edit();
    $this->m_KaryaIlmiahMhs->update_mhs();
    $this->session->set_flashdata('message', 'Data Berhasil Diubah');
    redirect('C_KaryaIlmiahMhs/aktivitasMhs');
  }
  public function hapus_dataMhs()
  {
    $this->m_KaryaIlmiahMhs->delete_Mhs();
    $this->session->set_flashdata('message', 'Hapus Data Berhasil');
    redirect('C_KaryaIlmiahMhs/aktivitasmhs');
  }
  public function unduhAktivitasMhs()
  {
    $data['aktivitasmhs'] = $this->m_KaryaIlmiahMhs->data_mhs('aktivitasmhs');
    $this->load->view('unduh/unduhAktivitasMhs', $data);
  }
}

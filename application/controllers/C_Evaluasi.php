<?php

class C_Evaluasi extends CI_Controller
{
  public function evaluasi()
  {
    $this->load->view('default/headerKoor');
    $data['evaluasi'] = $this->m_evaluasi->urut_data();
    $data['hitung'] = $this->m_evaluasi->hitung_data();
    $data['total'] = $this->m_evaluasi->data_mhs();
    $this->load->view('Mahasiswa/evaluasi', $data);
    $this->load->view('default/footer');
  }
  public function tambahEval()
  {
    $this->load->view('default/headerKoor');
    $data['total'] = $this->m_evaluasi->data_mhs();
    $this->load->view('Mahasiswa/tambahEvaluasi', $data);
    $this->load->view('default/footer');
  }
  public function tambahEval_aksi()
  { //1
    $this->form_validation->set_rules('jenis', 'Jenis', 'trim|required|is_unique[evaluasi.jenis]'); //2

    if ($this->form_validation->run() == false) { //3
      $this->load->view('default/headerKoor'); //4
      $this->load->view('Mahasiswa/tambahEvaluasi');
      $this->load->view('default/footer');
    } else { 
      $this->m_evaluasi->aktivitas_tambah();
      $this->m_evaluasi->tambahData();
      $this->session->set_flashdata('message', 'Data Berhasil Disimpan');
      redirect('C_Evaluasi/evaluasi');
    } //15
  } //16
  public function resetEvaluasi()
  {
    $this->m_evaluasi->reset_mhs('evaluasi');
    redirect('C_Evaluasi/evaluasi');
  }
  public function hapus_eval()
  {
    $this->m_evaluasi->delete_Mhs();
    $this->session->set_flashdata('message', 'Hapus Data Berhasil');
    redirect('C_Evaluasi/evaluasi');
  }
  public function unduhEval()
  {
    $data['evaluasi'] = $this->m_evaluasi->urut_data();
    $this->load->view('unduh/unduhEvaluasi', $data);
  }
}

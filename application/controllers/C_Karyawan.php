<?php

class C_Karyawan extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();

    $this->load->library(array('upload'));
  }
  public function karyawan()
  {
    $this->load->view('default/headerKoor');
    $data['karyawan'] = $this->m_Karyawan->getKaryawan();
    // echo '<pre>';
    // print_r($data);
    // die;
    $this->load->view('Karyawan/karyawan', $data);
    $this->load->view('default/footer');
  }
  public function tambahKaryawan()
  {
    $this->load->view('default/headerKoor');
    $this->load->view('Karyawan/tambahKaryawan');
    $this->load->view('default/footer');
  }
  public function tambahKaryawan_aksi()
  {
    $this->form_validation->set_rules(
      'nik', 'NIK', 
      'trim|required',
      array(
        'required' => "%s Belum Diisi"
      )
    );
    $this->form_validation->set_rules(
      'nama_karyawan', 'Nama Karyawan',
      'trim|required',
      array(
        'required' => "%s Belum Diisi"
      )
    );
    $this->form_validation->set_rules(
      'ijazah_terakhir', 'Ijazah Terakhir',
      'required|callback_check_ijazah_terakhir'
    );
    $this->form_validation->set_rules(
      'status_pajak', 'Status Terakhir',
      'required|callback_check_status_pajak'
    );
    $this->form_validation->set_rules(
      'npwp', 'NPWP',
      'trim|required',
      array(
        'required' => '%s Belum Diisi'
      )
    );
    // echo '<pre>';
    // print_r($ijazah_terakhir);
    // die;
    if ($this->form_validation->run() == FALSE) {
      $this->load->view('default/headerKoor');
      $this->load->view('Karyawan/tambahKaryawan');
      $this->load->view('default/footer');
    } else {
      $this->m_Karyawan->tambah_data();
      $this->session->set_flashdata('message', 'Data Berhasil Disimpan');
      redirect('C_Karyawan/karyawan');
    }
  }
  public function check_ijazah_terakhir($str)
  {
    if (!isset($str) || trim($str) === '')
    {
            $this->form_validation->set_message('check_ijazah_terakhir', '{field} Belum Dipilih');
            return FALSE;
    }
    else
    {
            return TRUE;
    }
  }
  public function check_status_pajak($str)
  {
    if (!isset($str) || trim($str) === '')
    {
            $this->form_validation->set_message('check_status_pajak', '{field} Belum Dipilih');
            return FALSE;
    }
    else
    {
            return TRUE;
    }
  }
  public function editKaryawan()
  {
    $this->load->view('default/headerKoor');
    $data['karyawan'] = $this->m_Karyawan->pilih_data()->row();
    $this->load->view('Karyawan/editKaryawan', $data);
    $this->load->view('default/footer');
  }
  public function hapus_karyawan()
  {
    $this->m_Karyawan->delete_dosen();
    $this->session->set_flashdata('message', 'Hapus Data Berhasil');
    redirect('C_Karyawan/karyawan');
  }
  public function editKaryawan_aksi()
  {
    $this->form_validation->set_rules(
      'nik', 'NIK', 
      'trim|required',
      array(
        'required' => "%s Belum Diisi"
      )
    );
    $this->form_validation->set_rules(
      'nama_karyawan', 'Nama Karyawan',
      'trim|required',
      array(
        'required' => "%s Belum Diisi"
      )
    );
    $this->form_validation->set_rules(
      'ijazah_terakhir', 'Ijazah Terakhir',
      'required|callback_check_edit_ijazah_terakhir'
    );
    $this->form_validation->set_rules(
      'status_pajak', 'Status Terakhir',
      'required|callback_check_edit_status_pajak'
    );
    $this->form_validation->set_rules(
      'npwp', 'NPWP',
      'trim|required',
      array(
        'required' => '%s Belum Diisi'
      )
    );
    $data['karyawan'] = $this->m_Karyawan->pilih_data()->row();
    if ($this->form_validation->run() == FALSE) {
      $this->load->view('default/headerKoor');
      $this->load->view('Karyawan/editKaryawan', $data);
      $this->load->view('default/footer');
    } else {
      $this->m_Karyawan->update_karyawan();
      $this->session->set_flashdata('message', 'Data Berhasil Diedit');
      redirect('C_Karyawan/karyawan');
    }
  }
  public function check_edit_ijazah_terakhir($str)
  {
    if (!isset($str) || trim($str) === '')
    {
            $this->form_validation->set_message('check_ijazah_terakhir', '{field} Belum Dipilih');
            return FALSE;
    }
    else
    {
            return TRUE;
    }
  }
  public function check_edit_status_pajak($str)
  {
    if (!isset($str) || trim($str) === '')
    {
            $this->form_validation->set_message('check_status_pajak', '{field} Belum Dipilih');
            return FALSE;
    }
    else
    {
            return TRUE;
    }
  }
}

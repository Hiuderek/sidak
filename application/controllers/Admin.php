<?php

class Admin extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->database();
    $this->load->library('session', 'form_validation');
    if ($this->session->userdata('status') != TRUE) {
      $this->session->sess_destroy();
      redirect(site_url(''));
    }
  }

  function index()
  {
    $this->load->view('halaman_utama');
  }
  public function halaman_utama()
  {
    $this->load->view('default/header');
    $data['aktivitas'] = $this->m_admin->show_aktivitas();
    $data['pengguna'] = $this->m_admin->hitung_pengguna();
    $data['dosentetap'] = $this->m_admin->hitung_dosentetap();
    $data['dosentdktetap'] = $this->m_admin->hitung_dosentdktetap();
    $data['mhs_lulusan'] = $this->m_admin->hitung_mhs_lulusan();
    $data['mhs'] = $this->m_admin->data_mhs_lulusan();
    $this->load->view('halaman_utama', $data);
    $this->load->view('default/footer');
    $this->load->view('chart-pie-demo', $data);
  }
  public function identitasProdi()
  {
    $this->load->view('default/header');
    $this->load->view('admin/identitasProdi');
    $this->load->view('default/footer');
  }
  public function identitasBorang()
  {
    $this->load->view('default/header');
    $data['pengguna'] = $this->m_admin->data_pengguna();
    $this->load->view('admin/identitasBorang', $data);
    $this->load->view('default/footer');
  }
  public function verifikasi()
  {
    $this->load->view('default/header');
    $data['dosentetap'] = $this->m_admin->dosenTetap();
    $data['dosentdktetap'] = $this->m_admin->dosenTdkTetap();
    $this->load->view('admin/verifikasiData', $data);
    $this->load->view('default/footer');
  }
  public function verif_dosentetap()
  {
    $this->m_DosenTetap->verifdosentetap();
    $this->session->set_flashdata('message', 'Data Berhasil Diverifikasi');
    redirect('Admin/verifikasi');
  }
  public function verif_dosentdktetap()
  {
    $this->m_DosenTdkTetap->verifdosentdktetap();
    $this->session->set_flashdata('message', 'Data Berhasil Diverifikasi');
    redirect('Admin/verifikasi');
  }
  public function pengisiBorang()
  {
    $this->m_admin->update();
    $this->session->set_flashdata('message', 'Data Berhasil Diubah');
    if ($this->session->userdata['role_id'] == 1) {
      redirect('Admin/identitasBorang');
    } else {
      redirect('Pengguna/profile');
    }
  }
  public function editPengisiBorang()
  {
    $this->load->view('default/header');
    $data['pengguna'] = $this->m_admin->pilih_data()->row();
    $this->load->view('admin/editPengisiBorang', $data);
    $this->load->view('default/footer');
  }
  public function hapus_pengguna()
  {
    $this->m_admin->delete_pengguna();
    $this->session->set_flashdata('message', 'Hapus Data Berhasil');
    redirect('Admin/identitasBorang');
  }
}

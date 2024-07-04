<?php

class C_Gaji extends CI_Controller
{
  public function gajiKaryawan()
  {
    $this->load->view('default/headerKoor');
    $data['gajiKaryawan'] = $this->m_gajiKaryawan->getGajiKaryawan();
    $this->load->view('Karyawan/gajiKaryawan', $data);
    $this->load->view('default/footer');
  }
  public function tambahGaji()
  {
    $this->load->view('default/headerKoor');
    $data['namaKaryawan'] = $this->m_gajiKaryawan->getNamaKaryawan();
    $this->load->view('karyawan/tambahGajiKaryawan', $data);
    $this->load->view('default/footer');
  }
  public function editDosenTdkTetap()
  {
    $this->load->view('default/headerKoor');
    $data['dosenTdkTetap'] = $this->m_DosenTdkTetap->pilih_data()->row();
    $this->load->view('Dosen/editDosenTdkTetap', $data);
    $this->load->view('default/footer');
  }
  public function tambahGaji_aksi()
  {
    $this->form_validation->set_rules(
      'nama_karyawan', 'Nama Karyawan',
      'required|callback_check_nama_karyawan'
    );
    $this->form_validation->set_rules(
      'jabatan', 'Jabatan',
      'required|callback_check_jabatan'
    );
    $this->form_validation->set_rules(
      'tunjangan_jabatan', 'Tunjangan Jabatan',
      'trim|required|numeric',
      array(
        'required' => "%s Belum Diisi",
        'numeric' => "%s Tidak Boleh Karakter Selain Angka"
      )
    );
    $this->form_validation->set_rules(
      'gaji_pokok', 'Gaji Pokok',
      'trim|required|numeric',
      array(
        'required' => "%s Belum Diisi",
        'numeric' => "%s Tidak Boleh Karakter Selain Angka"
      )
    );
    $this->form_validation->set_rules(
      'tunjangan_proyek', 'Tunjangan Proyek',
      'trim|required|numeric',
      array(
        'required' => "%s Belum Diisi",
        'numeric' => "%s Tidak Boleh Karakter Selain Angka"
      )
    );
    $this->form_validation->set_rules(
      'no_rekening', 'No. Rekening',
      'trim|required|numeric',
      array(
        'required' => "%s Belum Diisi",
        'numeric' => "%s Tidak Boleh Karakter Selain Angka"
      )
    );

    if ($this->form_validation->run() == false) {
      $data['namaKaryawan'] = $this->m_gajiKaryawan->getNamaKaryawan();
      $this->load->view('default/headerKoor');
      $this->load->view('Karyawan/tambahGajiKaryawan', $data);
      $this->load->view('default/footer');
    } else {
      $this->m_gajiKaryawan->tambah_data();
      $this->session->set_flashdata('message', ' Data Berhasil Disimpan');
      redirect('C_Gaji/gajiKaryawan');
    }
  }
  public function check_nama_karyawan($str)
  {
    if (!isset($str) || trim($str) === '')
    {
            $this->form_validation->set_message('check_nama_karyawan', '{field} Belum Dipilih');
            return FALSE;
    }
    else
    {
            return TRUE;
    }
  }
  public function check_jabatan($str)
  {
    if (!isset($str) || trim($str) === '')
    {
            $this->form_validation->set_message('check_jabatan', '{field} Belum Dipilih');
            return FALSE;
    }
    else
    {
            return TRUE;
    }
  }
  public function editDosenTdkTetap_aksi()
  {
    $this->m_DosenTdkTetap->aktivitas_edit();
    $this->m_DosenTdkTetap->update_dosen();
    $this->session->set_flashdata('message', 'Data Berhasil Diubah');
    redirect('C_DosenTdkTetap/dosenTdkTetap');
  }
  public function hapus_dosentdktetap()
  {
    $this->m_DosenTdkTetap->delete_dosen();
    $this->session->set_flashdata('message', 'Hapus Data Berhasil');
    redirect('C_DosenTdkTetap/dosenTdkTetap');
  }
  public function unduhDTT()
  {
    $data['dosentdkTetap'] = $this->m_DosenTdkTetap->getDosenTdkTetap();
    $this->load->view('unduh/unduhDTT', $data);
  }
}

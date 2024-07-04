<?php
defined('BASEPATH') or exit('No direct script access allowed');

include APPPATH . 'controllers/C_Pengabdian.php';
include APPPATH . 'controllers/C_Evaluasi.php';
include APPPATH . 'controllers/C_KaryaIlmiahDosen.php';

class testDrive extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->library('Unit_test');
  }
  // public function index()
  // {
  //   $test = new C_Evaluasi();
  //   $expected_result = 'data tersimpan';
  //   $this->unit->run($test, $expected_result, 'tambahEvaluasi');
  // }
  public function pengabdian()
  { //1
    // $this->form_validation->set_rules('sumber', 'Sumber', 'trim|required|is_unique[pengabdian.sumber]'); //2
    // $this->form_validation->set_rules('tahun1', 'Tahun 2016', 'trim|required');
    // $this->form_validation->set_rules('tahun2', 'Tahun 2017', 'trim|required');
    // $this->form_validation->set_rules('tahun3', 'Tahun 2018', 'trim|required');

    // $sumber = $this->input->post('sumber');
    // $tahun1 = $this->input->post('tahun1');
    // $tahun2 = $this->input->post('tahun2');
    // $tahun3 = $this->input->post('tahun3');
    $form_validation = true;
    if ($form_validation == false) { //3
      // $this->load->view('default/headerKoor'); //4
      // $this->load->view('Dosen/tambahPengabdian');
      // $this->load->view('default/footer');
      echo 'data tidak tersimpan';
    } else { //5
      $data = array( //6
        'id_user' => 6,
        'sumber' => 2,
        'tahun1' => 44,
        'tahun2' => 33,
        'tahun3' => 55
      );
      // $this->m_dataDosen->aktivitas('menambahkan', 'Pengabdian');
      // $this->m_Pengabdian->tambah_data();
      $this->db->insert('pengabdian', $data);
      echo 'data berhasil disimpan';
      // $this->session->set_flashdata('message', ' Data Berhasil Disimpan');
      // redirect('welcome/pengabdian');
    } //7
  } //8

  public function evaluasi()
  { //1
    // $this->form_validation->set_rules('jenis', 'Jenis', 'trim|required|is_unique[evaluasi.jenis]'); //2

    // $jenis = $this->input->post('jenis');
    // $nilai1 = $this->input->post('nilai1');
    // $nilai2 = $this->input->post('nilai2');
    // $nilai3 = $this->input->post('nilai3');
    // $nilai4 = $this->input->post('nilai4');
    // $keterangan = $this->input->post('keterangan');
    $form_validation = true;
    $jenis = 3;
    $nilai1 = 1;
    $nilai2 = 1;
    $nilai3 = 1;
    $nilai4 = 1;
    if ($form_validation == false) { //3
      // $this->load->view('default/headerKoor'); //4
      // $this->load->view('Mahasiswa/tambahEvaluasi');
      // $this->load->view('default/footer');
      echo 'data tidak tersimpan';
    } else { //5
      if ($nilai1 == '0' || $nilai1 == '') { //6
        // $nilai1 = '-'; //7
        echo 'nilai1 bernilai -, ';
      } else if ($nilai2 == '0' || $nilai2 == '') { //8
        // $nilai2 = '-'; //9
        echo 'nilai2 bernilai -, ';
      } else if ($nilai3 == '0' || $nilai3 == '') { //10
        // $nilai3 = '-'; //11
        echo 'nilai3 bernilai -, ';
      } else if ($nilai4 == '0' || $nilai4 == '') { //12
        // $nilai4 = '-'; //13
        echo 'nilai4 bernilai -, ';
      }

      $data = array( //14
        'id_user' => $this->session->userdata('id_user'),
        'jenis' => $jenis,
        'nilai1' => $nilai1,
        'nilai2' => $nilai2,
        'nilai3' => $nilai3,
        'nilai4' => $nilai4
        // 'keterangan' => $keterangan
      );
      // $this->m_dataMhs->aktivitas('menambahkan', 'Evaluasi Lulusan');
      // $this->m_evaluasi->tambahData();
      // $this->session->set_flashdata('message', 'Data Berhasil Disimpan');
      // redirect('welcome/evaluasi');
      $this->db->insert('evaluasi', $data);
      echo 'data berhasil disimpan';
    } //15
  } //16
  public function karyaIlmiah()
  { //1
    // $this->form_validation->set_rules('judul', 'Judul', 'trim|required'); //2
    // $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
    // $this->form_validation->set_rules('publikasi', 'Publikasi', 'trim|required');
    // $this->form_validation->set_rules('tahun', 'Tahun', 'trim|required');
    $form_validation = true;
    if ($form_validation == false) { //3
      // $this->load->view('default/headerKoor'); //4
      // $this->load->view('Dosen/tambahKaryaIlmiah');
      // $this->load->view('default/footer');
      echo 'data tidak tersimpan';
    } else { //5
      // $judul = $this->input->post('judul'); //6
      // $nama = $this->input->post('nama');
      // $publikasi = $this->input->post('publikasi');
      // $tahun = $this->input->post('tahun');
      // $tingkat = $this->input->post('tingkat');

      $data = array( //7
        'id_user' => $this->session->userdata('id_user'),
        'judul' => 'coba',
        'namadosen' => 'kusna',
        'publikasi' => 'buku tulis',
        'tahunpublikasi' => '2019',
        'tingkat' => 'internasional'
      );
      // $this->m_dataDosen->aktivitas('menambahkan', 'Karya Ilmiah');
      // $this->m_dataDosen->tambah_data('karyailmiah', $data);
      // $this->session->set_flashdata('message', ' Data Berhasil Disimpan');
      // redirect('welcome/karyaIlmiah');
      $this->db->insert('karyailmiah', $data);
      echo 'data berhsail disimpan';
    } //8
  } //9
}

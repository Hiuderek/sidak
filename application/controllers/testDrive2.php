<?php
defined('BASEPATH') or exit('No direct script access allowed');

include APPPATH . 'controllers/C_Pengabdian.php';
include APPPATH . 'controllers/C_Evaluasi.php';
include APPPATH . 'controllers/C_KaryaIlmiahDosen.php';

class testDrive2 extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->library('Unit_test');
  }
  public function index()
  {
    $test = new C_Evaluasi();
    $expected_result = 'data tersimpan';
    $this->unit->run($test, $expected_result, 'tambahEvaluasi');
  }
}

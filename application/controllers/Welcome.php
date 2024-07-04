<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('email');
	}
	public function index()
	{
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('pass', 'Password', 'trim|required');

		if ($this->form_validation->run() == false) {
			$this->load->view('template/auth_header');
			$this->load->view('auth/login');
			$this->load->view('template/auth_footer');
		} else {
			//validasi lolos
			$this->_login();
		}
	}

	private function _login()
	{
		$password = $this->input->post('pass');
		$cek = $this->m_auth->cek_login()->row_array();

		//jika user ada
		if ($cek) {
			//cek pass
			if (password_verify($password, $cek['password'])) {
				$data = [
					'username' => $cek['username'],
					'role_id' => $cek['role_id'],
					'id_user' => $cek['id_user'],
					'name' => $cek['name']
				];
				$this->session->set_userdata($data);
				if ($data['role_id'] == 1) {
					$_SESSION['status'] = "Active";
					redirect('Admin/halaman_utama');
				} else if ($data['role_id'] == 2) {
					$_SESSION['status'] = "Active";
					redirect('Pengguna/dashboard');
				} else if ($data['role_id'] == 3) {
					$_SESSION['status'] = "Active";
					redirect('Pengguna/halaman_mhs');
				}
			} else {
				$this->session->set_flashdata('message', 'password salah');
				redirect('welcome');
			}
		} else {
			$this->session->set_flashdata('message', 'Username didn`t exist!');
			redirect('welcome');
		}
	}

	public function regis()
	{
		$this->load->database();
		$this->form_validation->set_rules('name', 'Name', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[pengguna.email]');
		$this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[pengguna.username]');
		$this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', ['matches' => 'Password didn`t match', 'min_length' => 'Password too short']);
		$this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

		if ($this->form_validation->run() == false) {
			$this->load->view('template/auth_header');
			$this->load->view('auth/register');
			$this->load->view('template/auth_footer');
		} else {
			$username = $this->input->post('username');
			$password = $this->input->post('password1');
			$email = $this->input->post('email');
			// Konfigurasi email
			$config = [
				'useragent' => 'CodeIgniter',
				'protocol' => 'smtp',
				'mailpath' => '/usr/sbin/sendmail',
				'smtp_host' => 'ssl://smtp.gmail.com',
				'smtp_user' => 'siapsi123@gmail.com',
				'smtp_pass' => 'siapsiaga123',
				'smtp_port' => '465',
				'smtp_keepalive' => TRUE,
				'smpt_crypto' => 'SSL',
				'wordwrap' => TRUE,
				'wrapchars' => 80,
				'mailtype' => 'html',
				'charset' => 'utf-8',
				'validate' => TRUE,
				'crlf' => "\r\n",
				'newline' => "\r\n",
			];

			$this->load->library('email', $config);
			$this->email->initialize($config);

			$this->email->to($email);
			$this->email->from('siapsi123@gmail.com', 'SIAP');
			$this->email->subject('Pendaftaran Akun SIAP');
			$this->email->message('Selamat akun anda telah terdaftar ke dalam sistem kami. Silahkan masukkan data berikut:<br><br>Username:<b> ' . $username . '</b><br>Password:<b> ' . $password . '</b><br><br>Jaga kerahasiaan akun anda. Terima Kasih');

			if ($this->email->send()) {
				$this->m_auth->add_user();
				$this->session->set_flashdata('message', 'Register Berhasil! E-mail akan dikirimkan ke pengguna');
				redirect('Admin/identitasBorang');
			}
		}
	}

	function logout()
	{
		$this->session->sess_destroy();
		$_SESSION = array();
		redirect('');
	}
}

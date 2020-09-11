 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Simple_login
{
	protected $CI;

	public function __construct()
	{
		$this->CI =& get_instance();
		//load data model user
		$this->CI->load->model('User_model');
	}

	//Fungsi login
	public function login($username,$password)
	{
		$check = $this->CI->user_model->login_m($username,$password);
		die();
		//jika ada data user, maka create session login
		if($check) 
		{
			$id_user  = $check->id_user;
			$nama     = $check->nama;
			$akses_level = $check->akses_level;

			//create session
			$this->CI->session->set->userdata('id_user', $id_user);
			$this->CI->session->set->userdata('nama', $nama);
			$this->CI->session->set->userdata('username', $username);
			$this->CI->session->set->userdata('akses_level', $akses_level);
			//redirect ke halaman admin yang di proteksi
			redirect(base_url('admin/dasbor'), 'refresh');
		}else{
			//kalau tidak ada, maka suruh login ulang
			$this->CI->session->set_flashdata('warning', 'Username atau Password Salah');
			redirect(base_url('login'), 'refresh');

		}
	}

	//Fungsi cek login
	public function cek_login()
	{
		//memeriksa apakah session sudah atau belum, jika belum alihkan ke halaman login
		if($this->CI->session->userdata('username') == "") {
			$this->CI->session->set_flashdata('warning', 'Anda Belum Login');
			redirect(base_url('login'), 'refresh');
		}
	}

	//Fungsi Logout
	public function logout()
	{
		//Membuang semua session yang telah diset pada saat login
		$this->CI->session->unset->userdata('id_user');
		$this->CI->session->unset->userdata('nama');
		$this->CI->session->unset->userdata('username');
		$this->CI->session->unset->userdata('akses_level');
		//setelah session dinuang, maka redirect ke login
		$this->CI->session->set_flashdata('sukses', 'Anda Berhasil Logout');
		redirect(base_url('login'), 'refresh');
	}
}
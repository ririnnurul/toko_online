<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	//halaman utama website
	public function index()
	{
		$data = array ('title' => 'Ririn NHidayah - Toko Online',
						'isi'  => 'home/list');
		$this->load->view('layout/wrapper', $data, FALSE);
	}
}
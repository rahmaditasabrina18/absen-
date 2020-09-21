<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Absen extends CI_Controller {

	public function index()
	{
		$this->load->model('P_absen');
		$data['absen']= $this->P_absen->get_data();
		$this->load->view('pegawai/absen/listabsen', $data);
	}
} 

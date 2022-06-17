<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_Nasigoreng');
	}

	public function index()
	{
		$queryAllMenunasigoreng = $this->M_Nasigoreng->getNasiGoreng();

		$this->load->view('Home');
	}
	public function halaman_tambah ()
	{
		$this ->load->view('halaman_tambah_menu');
	}
	public function halaman_edit ()
	{
		$this ->load->view('halaman_edit_menu');
	}
}
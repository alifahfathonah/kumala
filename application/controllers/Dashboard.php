<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

  function __construct(){
    parent:: __construct();
    //$sess_data['username'] = 'administrator';
    //$this->session->set_userdata($sess_data);

    $this->load->model('M_karyawan','m');
  	$this->_cek_login();
	}

	function _cek_login()
	{
		if (!isset($this->session->userdata['id_user'])) {
	  redirect(base_url("login"));
	  }
	}

	function index()
	{
    $d_title['d_title'] = 'Dashboard';
    $data['d_karyawan'] = $this->m->hitungtotalkaryawan();




    $this->load->view('template/header',$d_title);
		$this->load->view('template/leftside');
		$this->load->view('dashboard/index.php', $data);
    $this->load->view('template/footer_js');
    $this->load->view('dashboard/ajax_scripts.php');
		$this->load->view('template/footer');
	}


  function error404()
	{
    $d_title['d_title'] = '404';
    $this->load->view('template/header', $d_title);
    $this->load->view('template/leftside');
		$this->load->view('template/404');
    $this->load->view('template/footer_js');
		$this->load->view('template/footer');
	}





}

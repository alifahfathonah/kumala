<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class departemen extends CI_Controller
{

  function __construct(){
    parent:: __construct();
    $this->load->model('m_departemen','m'); //load model, simpan ke m
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
    $d_title['d_title'] = 'Departemen';
    $data['d_departemen']  = $this->m->ambilData(); //jalankan fungsi ambilData, simpan ke $data

    $this->load->view('template/header',$d_title);
		$this->load->view('template/leftside');
		$this->load->view('departemen/index', $data); //load index kategori, bypass $data
		$this->load->view('template/footer_js');
    $this->load->view('departemen/ajax_scripts', $data);
    $this->load->view('template/footer');
	}

  function tambah_departemen ()
  {
    $hasil = $this->m->tambah_departemen();

    if($hasil)
    {
      echo json_encode(array("status" => true));
      $this->session->set_flashdata('psn_sukses','Data telah tersimpan');
    }
    else {
      //$this->session->set_flashdata('psn_error','Gagal menambah data ');
    }
    //redirect(base_url('departemen'));
  }
  function ubah ($id)
  {
    $data = $this->m->ambilDataID($id); //jalankan fungsi ambilData berdasarkan ID, simpan ke $data
    echo json_encode($data);
  }

  public function update_departemen()
  {
    $hasil = $this->m->update_departemen();
    if($hasil)
    {
      echo json_encode(array("status" => true));
      $this->session->set_flashdata('psn_sukses','Data telah diubah');
    }
    else
    {
      //$this->session->set_flashdata('psn_error','Gagal mengubah data ');
    }
    //redirect(base_url('departemen'));
  }

  function hapus_departemen($id)
  {
    $hasil = $this->m->hapus_departemen($id);
    if($hasil)
    {
      echo json_encode(array("status" => true));
      $this->session->set_flashdata('psn_sukses','Data telah dihapus');
    }
    else
    {
      //$this->session->set_flashdata('psn_error','Gagal menghapus data ');
    }
    redirect(base_url('departemen'));
  }

}

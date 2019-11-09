<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require('./application/third_party/phpoffice/vendor/autoload.php');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
//use PhpOffice\PhpSpreadsheet\Reader\Csv;
//use PhpOffice\PhpSpreadsheet\Reader\Xlsx;

class Karyawan extends CI_Controller
{

  function __construct()
  {
    parent:: __construct();
    $this->load->model('M_karyawan','m'); //load pengguna, simpan ke m
    $this->load->model('m_lokasi','ml'); //load pengguna, simpan ke m
    $this->load->model('m_departemen','md'); //load pengguna, simpan ke m
    //$this->load->model('M_status','ms'); //load model status aset lagi
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
    $d_title['d_title'] = 'Karyawan';
    $data['d_karyawan']  = $this->m->ambilData(); //jalankan fungsi ambilData, simpan ke $data
    $data['d_lokasi']  = $this->ml->ambilData();
    $data['d_departemen']  = $this->md->ambilData();

    $this->load->view('template/header',$d_title);
		$this->load->view('template/leftside');
		$this->load->view('karyawan/index', $data); //load index pengguna, bypass $data

		$this->load->view('template/footer_js');
    $this->load->view('karyawan/ajax_scripts', $data);
    $this->load->view('template/footer');
	}

  function tambah_karyawan()
  {
    $hasil = $this->m->tambah_karyawan();
    if($hasil){
      $this->session->set_flashdata('psn_sukses','Data telah tersimpan');
      echo json_encode(array("status" => true));

    }
    else
    {
      //$this->session->set_flashdata('psn_error','Gagal menambah data ');
    }
  }

  function ubah ($id)
  {
    $data = $this->m->ambilDataID($id); //jalankan fungsi ambilData berdasarkan ID, simpan ke $data
    echo json_encode($data);
  }

  public function update_karyawan()
  {
    $hasil = $this->m->update_karyawan();
    if($hasil)
    {
      echo json_encode(array("status" => true));
      $this->session->set_flashdata('psn_sukses','Data telah diubah');
    }
    else
    {
      //$this->session->set_flashdata('psn_error','Gagal mengubah data ');
    }
  }

  function hapus_karyawan($id)
  {
    $hasil = $this->m->hapus_karyawan($id);
    if($hasil)
    {
      echo json_encode(array("status" => true));
      $this->session->set_flashdata('psn_sukses','Data telah dihapus');
    }
    else
    {
      $this->session->set_flashdata('psn_error','Gagal menghapus data ');
    }
    redirect(base_url('karyawan'));
  }


  function detail($id)
  {
    $d_title['d_title'] = 'Pengguna - Detail';
    $data['d_pengguna']  = $this->m->ambilDataDetailbyID($id);
    $data['d_lokasi']  = $this->ml->ambilData();
    $data['d_departemen']  = $this->md->ambilData();
    $data['d_asset']  = $this->m->ambilDataAssetUsedbyID($id);
    $data['d_inventory']  = $this->m->ambilDataInventoryUsedbyID($id);
    $data['d_asesoris']  = $this->m->ambilDataAsesorisUsedbyID($id);
    $data['d_history']  = $this->m->ambilDataHistorybyID($id);
    $data['d_status'] = $this->ms->ambilData();

    $this->load->view('template/header',$d_title);
    $this->load->view('template/leftside');
    $this->load->view('pengguna/detail', $data); //load index pengguna, bypass $data
    $this->load->view('template/footer_js');
    $this->load->view('pengguna/ajax_scripts', $data);
    $this->load->view('template/footer');
  }

  function getNamaKategori($id)
  {
    return $this->m->ambilNamaKategoribyModelID($id);
  }


	function exportcsv()
	{
		echo $this->m->exportCSV();

		$filename = "TXT_FILE_" . date("YmdH_i_s") . ".csv";
		header('Content-type:text/csv');
		header('Content-Disposition: attachment;filname='.$filename);
		header('Cache-Control: no-store, no-cache, must-revalidate');
		header('Cache-Control: post-check=0, pre-check=0');
		header('Pragma: no-cache');
		header('Expires:0');

		$handle = fopen('php://output','w');
	}

  function exportexcel()
  {
      $d_karyawan  = $this->m->ambilData();;
      $spreadsheet = new Spreadsheet;
      $spreadsheet->setActiveSheetIndex(0)->mergeCells('A1:E1');
      $spreadsheet->setActiveSheetIndex(0)
                  ->setCellValue('A1', 'DATA KARYAWAN');
      $spreadsheet->getActiveSheet()->getStyle('A1')
                  ->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
      $spreadsheet->getActiveSheet()->getStyle('A1')
                  ->getAlignment()->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER);
      $spreadsheet->getActiveSheet()->getRowDimension('1')->setRowHeight(40);
      $spreadsheet->getActiveSheet()->getStyle('A1')
                              ->getFont()->setSize('18');

      $spreadsheet->setActiveSheetIndex(0)
                  ->setCellValue('A2', 'No')
                  ->setCellValue('B2', 'Nama')
                  ->setCellValue('C2', 'Departemen')
                  ->setCellValue('D2', 'Lokasi')
                  ->setCellValue('E2', 'No Telp');
      $spreadsheet->getActiveSheet(0)->getColumnDimension('A')->setAutoSize(true);
      $spreadsheet->getActiveSheet(0)->getColumnDimension('B')->setAutoSize(true);
      $spreadsheet->getActiveSheet(0)->getColumnDimension('C')->setAutoSize(true);
      $spreadsheet->getActiveSheet(0)->getColumnDimension('D')->setAutoSize(true);
      $spreadsheet->getActiveSheet(0)->getColumnDimension('E')->setAutoSize(true);

      $spreadsheet->getActiveSheet()->getStyle('A2:E2')
                  ->getFont()->setBold(true);
      $spreadsheet->getActiveSheet()->getStyle('A2:E2')
                              ->getFont()->setSize('13');



      $kolom = 2;
      $nomor = 1;
      foreach($d_karyawan as $d) {

           $spreadsheet->setActiveSheetIndex(0)
                       ->setCellValue('A' . $kolom, $nomor)
                       ->setCellValue('B' . $kolom, $d->nama)
                       ->setCellValue('C' . $kolom, $d->departemen)
                       ->setCellValue('D' . $kolom, $d->lokasi)
                       ->setCellValue('E' . $kolom, $d->no_telp);


           $kolom++;
           $nomor++;

      }

      $drawing = new \PhpOffice\PhpSpreadsheet\Worksheet\Drawing();
      $drawing->setName('Logo');
      $drawing->setDescription('Logo');
      $drawing->setPath('./images/logo.png');
      $drawing->setHeight(48);
      $drawing->setOffsetX(600);
      $drawing->setWorksheet($spreadsheet->getActiveSheet());


      $writer = new Xlsx($spreadsheet);

      header('Content-Type: application/vnd.ms-excel');
      header('Content-Disposition: attachment;filename="Karyawan.xlsx"');
      header('Cache-Control: max-age=0');

      $writer->save('php://output');
 }


 function importexcel(){

   $file_mimes = array('application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');

   if(isset($_FILES['file_excel']['name']) && in_array($_FILES['file_excel']['type'], $file_mimes)) {

        $arr_file = explode('.', $_FILES['file_excel']['name']);
        $extension = end($arr_file);

        if('csv' == $extension) {
            $reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();
        } else {
            $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
        }

        $spreadsheet = $reader->load($_FILES['file_excel']['tmp_name']);

        $sheetData = $spreadsheet->getActiveSheet()->toArray();



      	for($i = 1;$i < count($sheetData);$i++)
      	{
              $field = array(
                'nama'        => $sheetData[$i]['1'],
                'nik'         => $sheetData[$i]['2'],
                'departemen'  => $sheetData[$i]['3'],
                'lokasi'      => $sheetData[$i]['4'],
                'no_telp'     => $sheetData[$i]['5'],
                'alamat'      => $sheetData[$i]['6'],
                'catatan'     => $sheetData[$i]['7']
              );
              $hasil=$this->m->tambah_karyawan_from_excel($field);
              if($hasil)
              {
                echo json_encode(array("status" => true));
                $this->session->set_flashdata('psn_sukses','Berhasil import data');
              }
              else
              {
                $this->session->set_flashdata('psn_error','Gagal import data ');
              }
              redirect(base_url('karyawan'));
        }
        //redirect(base_url('karyawan'));
     }
   }




}

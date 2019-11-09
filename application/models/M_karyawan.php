<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_karyawan extends CI_model{

  public function ambilData(){
    $this->db->select('tb_pengguna.id, tb_pengguna.nama, tb_pengguna.nik, tb_pengguna.departemen, tb_pengguna.lokasi, tb_pengguna.alamat, tb_pengguna.no_telp, tb_pengguna.catatan, tb_departemen.id as departemen_id, tb_departemen.departemen, tb_lokasi.id as lokasi_id, tb_lokasi.lokasi');
    $this->db->from('tb_pengguna');
    $this->db->join('tb_departemen', 'tb_departemen.id = tb_pengguna.departemen');
    $this->db->join('tb_lokasi', 'tb_lokasi.id = tb_pengguna.lokasi');
    $this->db->order_by('nama','asc');
    $query = $this->db->get();
    if($query->num_rows()>0)
    {
      return $query->result();
    }
    else
    {
      return false;
    }
  }

 function ambilDataIDdanNama(){
    $this->db->select('tb_pengguna.id, tb_pengguna.nama');
    $query = $this->db->get('tb_pengguna');
    if($query->num_rows()>0)
    {
      return $query->result();
    }
    else
    {
      return false;
    }
  }

  function tambah_karyawan(){
    $field = array(
      'nama'        => $this->input->post('txt_karyawan'),
      'nik'         => $this->input->post('txt_nik'),
      'departemen'  => $this->input->post('opt_departemen'),
      'lokasi'      => $this->input->post('opt_lokasi'),
      'no_telp'     => $this->input->post('txt_no_telp'),
      'alamat'      => $this->input->post('txt_alamat'),
      'catatan'     => $this->input->post('txt_catatan')
    );

    $this->db->insert('tb_pengguna', $field);
    if($this->db->affected_rows() > 0){
      return true;
    }
    else {
      return false;
    }
  }

  function tambah_karyawan_from_excel($field){
    $this->db->insert('tb_pengguna', $field);
    if($this->db->affected_rows() > 0){
      return true;
    }
    else {
      return false;
    }
  }


  function ambilDataID($id){
     $this->db->where('id', $id);
     $query = $this->db->get('tb_pengguna');
     if($query->num_rows()>0)
     {
       return $query->row();
     }
     else
     {
       return false;
     }
  }

  function update_karyawan(){
    $id = $this->input->post('txt_id');
    $field = array(
      'nama'        => $this->input->post('txt_karyawan'),
      'nik'         => $this->input->post('txt_nik'),
      'departemen'  => $this->input->post('opt_departemen'),
      'lokasi'      => $this->input->post('opt_lokasi'),
      'no_telp'     => $this->input->post('txt_no_telp'),
      'alamat'      => $this->input->post('txt_alamat'),
      'catatan'     => $this->input->post('txt_catatan')
    );
    $this->db->where('id', $id);
    $this->db->update('tb_pengguna', $field);
    if($this->db->affected_rows() > 0){
      return true;
    }else {
      return false;
    }
  }

  function hapus_karyawan($id){
    $this->db->where('id', $id);
    $this->db->delete('tb_pengguna');
    if($this->db->affected_rows() > 0){
      return true;
    }else {
      return false;
    }
  }

  function hitungtotalkaryawan()
  {
    $query = $this->db->get('tb_pengguna');
    if($query->num_rows()>0)
    {
      return $query->num_rows();;
    }
    else
    {
      return 0;
    }
  }











}
?>

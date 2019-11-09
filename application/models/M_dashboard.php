<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_dashboard extends CI_Model{


  function ambilDataActivity($limit=NULL){
    $this->db->select('tb_log.*, tb_asset.nama_aset as nama_aset, tb_asset.asset_tag as asset_tag, tb_pengguna.nama as nama_pengguna, tb_lokasi.lokasi as nama_lokasi, tb_model.model as nama_model');
    $this->db->from('tb_log');
    $this->db->join('tb_asset', 'tb_asset.id = tb_log.log_item','left');
    $this->db->join('tb_model', 'tb_model.id = tb_log.log_item','left');
    $this->db->join('tb_pengguna', 'tb_pengguna.id = tb_log.log_assign_to','left');
    $this->db->join('tb_lokasi', 'tb_lokasi.id = tb_log.log_assign_to','left');


    $this->db->order_by('log_id','desc');
    $this->db->limit($limit);
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

  function ambilNamaAsetbyID($id){
    $this->db->select('tb_asset.nama_aset, tb_asset.asset_tag');
    $this->db->where('tb_asset.id', $id);
    $this->db->from('tb_asset');
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

  function hitungJumlahAsset($status=NULL)
  {
    if($status<>NULL){
      $this->db->where('status',$status);
    }
    $query = $this->db->get('tb_asset');
    if($query->num_rows()>0)
    {
      return $query->num_rows();
    }
    else
    {
      return 0;
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

  function hitungJumlahAsesoris()
  {
    $this->db->select_sum('stok');
    $this->db->select_sum('digunakan');
    $query = $this->db->get('tb_asesoris');
    if($query->num_rows()>0)
    {
      //return $query->row();
      $stok = $query->row()->stok;
      $digunakan = $query->row()->digunakan;
      $total = $stok + $digunakan;
      return $total;
    }
    else
    {
      return 0;
    }
  }

  function hitungJumlahKomponen()
  {
    $this->db->select_sum('stok');
    $query = $this->db->get('tb_komponen');
    if($query->num_rows()>0)
    {
      //return $query->row();
      return $query->row()->stok;
    }
    else
    {
      return 0;
    }
  }

  function hitungDataAssetTiapKategori(){
    $this->db->select('tb_kategori.kategori, count(tb_kategori.kategori) as total');
    $this->db->join('tb_model','tb_asset.model = tb_model.id');
    $this->db->join('tb_kategori', 'tb_model.kategori = tb_kategori.id');
    $this->db->group_by('kategori');$query = $this->db->get('tb_asset');
    if($query->num_rows()>0)
    {
      return $query->result();
    }
  }

  function hitungDataAssetbyModel($id_model)
  {
    $this->db->select('tb_asset.model');
    $this->db->where('model',$id_model);
    $query = $this->db->get('tb_asset');
    if($query->num_rows()>0)
    {
      return $query->num_rows();
    }
  }

  function hitungDataAsesorisbyModel($id_model)
  {
    //$this->db->select('tb_asesoris.id_model');
    $this->db->select_sum('digunakan');
    $this->db->select_sum('stok');
    $this->db->where('id_model',$id_model);
    $query = $this->db->get('tb_asesoris');
    if($query->num_rows()>0)
    {
      $digunakan = $query->row()->digunakan;
      $stok = $query->row()->stok;
      $total = $digunakan + $stok;
      return $total;
    }
  }

  function hitungDataModelbyKategori($id_kategori)
  {
    $this->db->select('tb_model.id');
    $this->db->where('kategori',$id_kategori);
    $query = $this->db->get('tb_model');
    if($query->num_rows()>0)
    {
      return $query->result();
    }
  }

  function hitungDataKategoribyTipe($id_tipe)
  {
    $this->db->select('tb_kategori.id, tb_kategori.kategori');
    $this->db->where('tipe',$id_tipe);
    $this->db->order_by('kategori','asc');
    $query = $this->db->get('tb_kategori');
    if($query->num_rows()>0)
    {
      return $query->result();
    }
  }


  function ambilDataKategori()
  {
    $this->db->select('tb_kategori.*, tb_tipe.id as tipe_id, tb_tipe.tipe');
    $this->db->from('tb_kategori');
    $this->db->join('tb_tipe', 'tb_kategori.tipe = tb_tipe.id');
    $this->db->order_by('tb_kategori.tipe','asc');
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





}
?>

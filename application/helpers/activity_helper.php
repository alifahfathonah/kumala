<?php
function activity_log($tipe, $aksi, $item, $assign_to, $assign_type){
    $CI =& get_instance();

    // if (strtolower($vtipe) == "asset"){ //asset
    //     $tipe   = "fa-barcode";
    // }
    // elseif(strtolower($vtipe) == "inventori")
    // {
    //     $tipe   = "fa-tint";
    // }
    // elseif(strtolower($vtipe) == "asesoris"){
    //     $tipe   = "fa-keyboard-o";
    // }
    // elseif(strtolower($vtipe) == "komponen"){
    //     $tipe  = "fa-hdd-o";
    // }
    // else{
    //     $tipe  = "fa-times";
    // }


    // parameter
    $param['log_user'] = $CI->session->userdata('nama_user');
    $param['log_tipe'] = $tipe; //asset, asesoris, komponen, inventori
    $param['log_aksi'] = $aksi; //membuat, menambah, menghapus, mengubah,
    $param['log_item']  = $item; //nama item
    $param['log_assign_to']= $assign_to; //target
    $param['log_assign_type']= $assign_type; //target

    //load model log
    $CI->load->model('m_log');

    //save to database
    $CI->m_log->save_log($param);

}
?>

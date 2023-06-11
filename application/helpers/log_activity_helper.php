<?php

function log_activity($tipe, $aksi, $item){
    $CI =& get_instance();

    $param['log_user'] = $CI->session->userdata('nama_lengkap');
    $param['log_type'] = $tipe; //asset, asesoris, komponen, inventori
    $param['log_action'] = $aksi; //membuat, menambah, menghapus, mengubah,
    $param['log_item'] = $item; //nama item

    //load model log
    $CI->load->model('LogModel');

    //save to database
    $CI->LogModel->insert($param);
}
?>
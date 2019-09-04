<?php

class PendaftarModel extends GLOBAL_Model{

    public function __construct()
    {
        parent::__construct();
    }

    public function get_pendaftar()
    {
        return parent::get_array_of_table('tb_pendaftar');
    }
    public function get_pendaftar_by_user($id)
    {
        $this->db->where('pendaftar_user',$id);
        $this->db->from('tb_pendaftar');
        return $this->db->get()->result_array();
    }
    public function cek_pembayaran_user($id)
    {
        $this->db->where('pembayaran_pendaftaran',$id);
        $this->db->from('tb_pembayaran');
        return $this->db->get()->result_array();
    }

    public function get_single_pendaftar($pendaftar)
    {
        $data = array(
            'pendaftar_id' => $pendaftar
        );
        return parent::get_array_of_row('tb_pendaftar',$data);
    }

    public function add_pendaftar($data)
    {
        return parent::insert_with_status('tb_pendaftar',$data);
    }
    public function add_pembayaran($data)
    {
        return parent::insert_with_status('tb_pembayaran',$data);
    }

    public function ubah_pendaftar($idpendaftar,$datapendaftar)
    {

        return parent::update_table_with_status('tb_pendaftar','pendaftar_id',$idpendaftar,$datapendaftar);
    }

    public function delete_pendaftar($id)
    {
        $pendaftar = array(
            'pendaftar_id' => $id
        );
        return parent::delete_row_with_status('pendaftar',$pendaftar);
    }

    public function insert_detail_pendaftar($data)
    {
        return parent::insert_with_status('detail_pendaftar',$data);
    }

    public function get_single_detail($pendaftar)
    {
        $data = array(
            'pendaftar_id' => $pendaftar
        );
        return parent::get_array_of_row('detail_pendaftar',$data);
    }

    public function insert_dokumen_pendaftar($data)
    {
        return parent::insert_with_status('dokumen',$data);
    }

    public function get_single_dokumen($pendaftar)
    {
        $data = array(
            'pendaftar_id' => $pendaftar
        );
        return parent::get_array_of_row('dokumen',$data);
    }

}
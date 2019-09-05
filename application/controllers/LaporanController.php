<?php


class LaporanController extends GLOBAL_Controller
{
    public function __construct()
    {
        parent::__construct();
//        if (!parent::hasLogin())
//        {
//            redirect(site_url());
//        }else
//        {
//
//        }
        $this->load->model('UserModel');
        $this->load->model('PendaftarModel');
    }

    public function index()
    {
        $status = parent::post('status');
        $data['title'] = 'Data Seluruh User';


        $data['diterima'] = parent::model('PendaftarModel')->get_pendaftar_by_status($status);

        parent::template('backend/laporan/index',$data);
    }

}
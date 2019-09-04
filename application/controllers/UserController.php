<?php


class UserController extends GLOBAL_Controller
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
    }

    public function index()
    {
        $data['title'] = 'Data Seluruh User';


        $data['users'] = parent::model('UserModel')->get_user();

        parent::template('backend/user/index',$data);
    }

}
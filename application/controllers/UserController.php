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
    public function tambah(){
        if (isset($_POST['tambah'])){
            $nama= parent::post('nama');
            $username= parent::post('username');
            $password= parent::post('password');
            $nope = parent::post('nope');
            $level= parent::post('level');

            $data = array(
                'user_nama' => $nama,
                'user_username' => $username,
                'user_password' => $password,
                'user_nope' => $nope,
                'user_level' => $level
            );
            $insert = parent::model('UserModel')->add_user($data);
            if ($insert > 0) {
                parent::alert('alert', 'insert');
                redirect('users');
            } else {
                parent::alert('alert', 'error');
                redirect('users');
            }
        }
    }
    public function edit($id){
        if (isset($_POST['edit'])){
            $nama= parent::post('nama');
            $username= parent::post('username');
            $password= parent::post('password');
            $nope = parent::post('nope');
            $level= parent::post('level');

            $data = array(
                'user_nama' => $nama,
                'user_username' => $username,
                'user_password' => $password,
                'user_nope' => $nope,
                'user_level' => $level
            );
            $insert = parent::model('UserModel')->ubah_user($id,$data);
            if ($insert > 0) {
                parent::alert('alert', 'insert');
                redirect('users');
            } else {
                parent::alert('alert', 'error');
                redirect('users');
            }
        }else{
            $data['title'] = 'Edit Data User';
            $data['user'] = parent::model('UserModel')->get_single_user($id);
            parent::template('backend/user/edit',$data);
        }
    }
    public function delete($id){
        $delete = parent::model('UserModel')->delete_user($id);
        if ($delete > 0) {
            parent::alert('alert', 'delete');
            redirect('users');
        } else {
            parent::alert('alert', 'error');
            redirect('users');
        }
    }
}
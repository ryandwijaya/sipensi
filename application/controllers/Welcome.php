<?php

class Welcome extends GLOBAL_Controller
{
    public function index(){
        $data['title'] = 'User';
        parent::template('backend/user/index',$data);
    }
    public function frontend(){
        $data['title'] = 'Frontend';
        $this->load->view('frontend/dashboard/index');
    }

}
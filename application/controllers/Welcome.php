<?php

class Welcome extends GLOBAL_Controller
{
    public function index(){
        $data['title'] = 'User';
        parent::template('backend/user/index',$data);
    }
    public function frontend(){
        $data['title'] = 'Frontend';
        $this->load->view('frontend/template/header');
        $this->load->view('frontend/dashboard/index');
        $this->load->view('frontend/template/footer');
    }
    public function visimisi(){
        $data['title'] = 'Frontend';
        $this->load->view('frontend/template/header');
        $this->load->view('frontend/content/visimisi');
        $this->load->view('frontend/template/footer');
    }
    public function profile(){
        $data['title'] = 'Frontend';
        $this->load->view('frontend/template/header');
        $this->load->view('frontend/content/profile');
        $this->load->view('frontend/template/footer');
    }

}
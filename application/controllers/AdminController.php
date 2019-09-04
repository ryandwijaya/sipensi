<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class AdminController extends GLOBAL_Controller {
		
		public function __construct()
		{
			parent::__construct();
//			if (!parent::hasLogin())
//			{
//				redirect(site_url());
//			}else
//			{
//
//			}
            $this->load->model('PendaftarModel');
		}
		
		public function index()
		{
			$data['title'] = 'Dashboard';
			$data['page_title'] = '';
			$data['menu'] = '';
			$data['pendaftar'] = parent::model('PendaftarModel')->get_pendaftar();
			$data['diterima'] = parent::model('PendaftarModel')->get_pendaftar_by_status('diterima');
			$data['ditolak'] = parent::model('PendaftarModel')->get_pendaftar_by_status('ditolak');
			$this->template('dashboard/index',$data);
		}
		
		public function detail()
		{
			$data['title'] = 'Detail Admin';
			
			parent::template('admin/detail',$data);
		}
		
		public function logout()
		{
			$this->session->sess_destroy();
			redirect(site_url());
		}
		
	}
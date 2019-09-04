<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class AuthController extends GLOBAL_Controller {
		
		public function __construct()
		{
			parent::__construct();
			$this->load->model('AuthModel');
			$this->load->model('UserModel');
//			if (parent::hasLogin())
//			{
//				redirect(site_url('dashboard'));
//			}
		}
		
		public function login()
		{
			$data['title'] = 'Masuk ke Sistem Informasi Pendaftaran Siswa TK';
			if (isset($_POST['login'])){
				$username = parent::post('username');
				$password = parent::post('password');

				$loginData = parent::model('AuthModel')->get_pengguna($username,md5($password));
				$existsStatus = $loginData->num_rows();
				$existsData   = $loginData->row_array();

				if ($existsStatus > 0)
				{
					$sessData = array(
						'sess_id' => $existsData['user_id'],
						'sess_username' => $existsData['user_username'],
						'sess_level' => $existsData['user_level'],
						'sess_nama' => $existsData['user_nama']
					);
					$this->session->set_userdata($sessData);
					parent::alert('alert','welcome');
					redirect(site_url('dashboard'));
				}else{
					parent::alert('alert','invalid');
					redirect(site_url('login'));
				}
			}else{
				parent::authPage('auth/login',$data);
			}
		}
        public function register()
        {
            $data['title'] = 'Daftar Akun';
            if (isset($_POST['register'])){
                $username = parent::post('username');
                $password = parent::post('password');
                $nama = parent::post('nama');
                $nope= parent::post('nope');
                $level= 'ortu';
                $data = array(
                    'user_username' => $username,
                    'user_password' => md5($password),
                    'user_nama' => $nama,
                    'user_nope' => $nope,
                    'user_level' => $level,
                );
                $insert = parent::model('UserModel')->add_user($data);
                if ($insert > 0){
                    parent::alert('alert','insert');
                    redirect('login');
                }else{
                    parent::alert('alert','error');
                    redirect('login');
                }

            }else{
                parent::authPage('auth/register',$data);
            }
        }
        public function logout()
        {
            $this->session->sess_destroy();
            redirect(site_url('login'));
        }
		
		
	}
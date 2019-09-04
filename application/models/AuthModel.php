<?php
	
	class AuthModel extends  GLOBAL_Model {
		
		public function __construct()
		{
			parent::__construct();
		}
		
		public function get_pengguna($username,$password)
		{
			$user = array(
				'user_username' => $username,
				'user_password' => $password
			);
			
			return parent::get_object_of_row('tb_user',$user);
			
		}
		
		
	}
<?php
	
	class UserModel extends GLOBAL_Model{
		
		public function __construct()
		{
			parent::__construct();
		}
		
		public function get_user()
		{
			return parent::get_array_of_table('tb_user');
		}
		
		public function get_single_user($user)
		{
			$data = array(
				'user_id' => $user
			);
			return parent::get_array_of_row('tb_user',$data);
		}
		
		public function add_user($data)
		{
			return parent::insert_with_status('tb_user',$data);
		}
		
		public function ubah_user($iduser,$datauser)
		{
			
			return parent::update_table_with_status('tb_user','user_id',$iduser,$datauser);
		}
		
		public function delete_user($id)
		{
			$user = array(
				'user_id' => $id
			);
			return parent::delete_row_with_status('tb_user',$user);
		}
		
		public function insert_detail_user($data)
		{
			return parent::insert_with_status('detail_user',$data);
		}
		
		public function get_single_detail($user)
		{
			$data = array(
				'user_id' => $user
			);
			return parent::get_array_of_row('detail_user',$data);
		}
		
		public function insert_dokumen_user($data)
		{
			return parent::insert_with_status('dokumen',$data);
		}
		
		public function get_single_dokumen($user)
		{
			$data = array(
				'user_id' => $user
			);
			return parent::get_array_of_row('dokumen',$data);
		}
		
	}
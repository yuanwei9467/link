<?php 

	class Member extends Eloquent{


		public function insert($row){
			$this->username = $row['username'];
			$this->password = Hash::make($row['password']);
			$this->email = $row['email'];
			$this->regtime = time();
			$this->last_login = time();
			$this->last_login_ip = get_client_ip(1);
			return $this->save();
		}
	}
?>
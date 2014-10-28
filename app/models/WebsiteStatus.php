<?php 

	class WebsiteStatus extends Status{
		 public $status = array(
				'0'=>'暂停',
				'1'=>'启用'
			);
		 public function getStatus($key){
		 	return $this->status[$key];
		 }
	}

?>
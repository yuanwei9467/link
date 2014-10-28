<?php 
 class Website extends Eloquent{

 	protected $errorMsg;
 	protected $websiteCategoryList = null;
 	protected $status;
 	
 	
 	



 	/**
 	* 验证数据
 	* @return bool
 	*/
 	public function validate(){
 		$validator = Validator::make(
 			array('url' => $this->url,'name' => $this->name,'category_id' => $this->category_id,),
 			array('url' => array('required','url'),'name'=>array('required','min:2','max:50'),'category_id'=>'required')
 		);
 		if($validator->fails()){
 			$this->errorMsg = $validator->messages();
 			return false;
 		}
 		return true;
 	}

 	/**
 	*
 	*/
 	public function getError(){
 		return $this->errorMsg;
 	}

 	/**
 	*
 	*/
 	public function getWebsiteCategory(){
 		if($this->websiteCategoryList === null){
 			$this->websiteCategoryList = WebsiteCategory::all();
 		}
 		return $this->websiteCategoryList;
 	}

 }
?>
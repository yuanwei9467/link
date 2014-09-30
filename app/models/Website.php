<?php 
 class Website extends Eloquent{

 	protected $errorMsg;
 	/**
 	*保存website
 	*@return bool
 	*/
 	public function insert(){
 		if($this->id){

 		}else{
 			if($this->validate){
 				if($this->save()){
 					return true;
 				}else{
 					return false;
 				}
 				
 			}
 		}
 	}

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


 }
?>
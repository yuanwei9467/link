<?php


class BaseController extends Controller {

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}

	/**
	*验证用户是否登陆
	*/
	protected function verify(){

		if(Session::get('userid')){
			 return true;
		}else{
			return false;
			
			
		}
	}

}

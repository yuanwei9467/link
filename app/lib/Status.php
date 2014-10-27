<?php 

	class Status implements Iterator{

		private $position = 0;
		
		
		public function __contruct(){
			$this->position = 0;
			
			$this->init();
		}
		public function init(){
			//$this->status = $status;
		}
		public function rewind() {
	        $this->position = 0;
    	}

    	public function current() {
	        
	        return $this->status[$this->position];
    	}

	    public function key() {
	        
	        return $this->position;
	    }

	    public function next() {    
	        ++$this->position;
	    }

	    public function valid() {     
	        return isset($this->status[$this->position]);
	    }
	}
?>
<?php 
namespace guess\model;

class Hidden {
	private $min = 1;
	private $max = 1000;
	private $hidden = 0;
	
	public function __construct(){
		
	}
	
	public function set_hidden() {
		$this->hidden = rand($this->min, $this->max);
	}
	
	public function get_hidden() {
		return $this->hidden;
	}
	
	public function reset_hidden() {
		$this->hidden = 0;
	}
	public function __destruct() {
            
        }
}
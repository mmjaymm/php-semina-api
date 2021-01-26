<?php 
namespace guess\controller;

use guess\model\Hidden;
use guess\controller\Request;

Class GenNumber {
	
	private $n;
	private $hid;

	public function __construct() {
		$this->n = new Hidden();
	}
	public function generate_number(){	
		$this->n->set_hidden();
		$this->hid = $this->n->get_hidden();
		return $this->hid;
	}
	public function compare_numbers (Request $r) {
		
		if ($_SESSION['hidden'] < $r->postfields['guess']) {
			$message = "Try Lower";
		}else if ($_SESSION['hidden'] > $r->postfields['guess']) {
			$message = "Try Higher";
		}else{
			$message = "Congratulations!";
		}
		return $message;
	}
	
}

<?php



class BillCalculator{
	private $units;
	function __construct($units){
		$this->units=$units;
	}

	function calculateBill(){
		$units=intval($this->units);
		if ($units < 21){
			return 35;
		}else if($units < 50){
			return 40;
		}else if ($units < 101){
			return 45;
		}else{
			return 50;
		}
	}

}






?>
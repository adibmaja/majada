<?php
	//echo "hello"+"world";
	//echo "2"+"2";
	//echo 10+"25student25";
	//$a = 0;
	/*if(-5){
		echo "ok";
	}else{
		echo "not ok";
	}
	
	
	
	if(($s = 0 || isset($s)) || $s = 10%2){
		echo "ok";
	}else{
		echo "not ok";
	}
	
	
	
	function abc($a,$b,$d = 10){
		$c = $a+$b+$d;
		return $c;
	}
	
	echo abc(10,20);
	
	
	class php_laravel{
		public $student1 = "student1";
		public function abc(){
			echo "hello world";
		}
	}
	
	
	$php = new php_laravel;
	echo $php->student1;
	$php->abc();
	
	*/
	class calculation{
		public function plus($data1,$data2){
			echo $data1+$data2;
		}			
	
	}
	
	if(isset($_POST['plus'])){
		$data1 = $_POST['data1'];
		$data2 = $_POST['data2'];
		$calculation = new calculation;
		$calculation->plus($data1,$data2);
	}
?>

<form method="post">
	<input type="text" name="data1">
	<input type="text" name="data2">
	<input type="submit" name="plus" value="plus">
</form>



<?php

	class overRiding{
		public function height($height){
			echo $height+$height;
		}
	}
	class overRideData extends overRiding{
		public function height($height){
			echo $height*$height;
		}
	}
	
	$data = "plus";
	if($data == "multiply"){
		$class = new overRideData;
		$class->height(6);
	}else{
		$class = new overRiding;
		$class->height(6);
	}
?>
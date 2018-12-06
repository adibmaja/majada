<?php

	class overLoad{
		public function __call($name,$arg){
			echo implode(',',$arg);
		}
		
	}

	$object = new overLoad;
	$object->abc("My First Method ABC");
	$object->abc("My 2nd Method ABC");

?>
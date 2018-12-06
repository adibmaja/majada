<?php

	
	
	function validation($data){
		$data = strip_tags(trim($data));
	}
	
	$name= validation($_POST['name']);

?>
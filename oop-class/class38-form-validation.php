<?php

	if(isset($_POST['submit'])){
		//echo "<pre>";
		//print_r($_POST);
		//print_r($_FILES);
		$name = $_POST['name'];
		$email = $_POST['email'];
		$pw = $_POST['pw'];
		$rpw = $_POST['rpw'];
		$dob = $_POST['dob'];
		$mobile = $_POST['mobile'];
		$error = 0;
		$msg = "";
		
		if($name == ""){
			$error = $error+1;
			$msg .= "<p>* name required</p>";
		}
		if($email == "" || filter_var($email,FILTER_VALIDATE_EMAIL) == false){
			$error = $error+1;
			$msg .= "<p>* email required</p>";
		}
		if($pw == "" || !preg_match('/[0-9]?[A-Z]/',$pw)){
			$error = $error+1;
			$msg .= "<p>* password required</p>";
		}
		if($dob != ""){
			$explode = explode('-',$dob);
			$count = count($explode);
			if($count == 3){
				list($y,$m,$d) = $explode;
				if(isset($m) && isset($d) && isset($y)){
					if(checkdate($m,$d,$y) == false){
						$error = $error+1;
						$msg .= "<p>* date formate problem</p>";
					}
					$error = $error+1;
				}
			}else{
				$error = $error+1;
				$msg .= "<p>* date formate problem</p>";
			}
		}
		if($dob == ""){
			$error = $error+1;
			$msg .= "<p>* date field required</p>";
		}
		if($mobile == "" || !is_numeric($mobile)){
			$error = $error+1;
			$msg .= "<p>* phone required</p>";
		}
		
		if($error == 0){
			echo "data ok";
		}else{
			echo $msg;
		}
		
		
	}









?>



<!doctype html>
<html>
<head>
	<title> Form Validation with php </title>
	<style>
		.form-validaton{
			width: 450px;
			margin:0 auto;
			background: #ddd;
			padding 20px 50px;
			box-sizing: border-box;
		}
		#table{padding-left:50px; padding-bottom: 20px;}
		.label{
			float: left;
			width: 100%;
			font-size:16px;
			font-weight:bold;
			padding-top:10px;
		}
		.text{
			float:left;
			width:300px;
			height:30px;
			padding:5px;
			box-sizing:border-box;
		}
		.row{
			float:left;
			width:100%;
			margin-bottom:5px;
		}
		h2{
			text-align:center;
			text-transform: uppercase;
			padding-top:20px;
		}
		.btn{
			float:right;
			padding:10px 15px;
			font-size: 16px;
			text-transform:  uppercase;
			font-weight: bold;
			color:#555;
			border: 1px solid #eee;
			background: #fff;
		}
		.error{
			color:#cc0000;
			padding-top: 5px;
			float:left;
			width:100%;
		}
	</style>
</head>
 
<body>
	<div class="form-validaton">
		<h2> Form Validation	</h2>
		<form action="" method="post" enctype="multipart/form-data">
			<table id="table">
				<tr class="row">
					<td class="label"> <label for="name"> Name </label></td>
					<td> <input class="text" type="text" id="name" name="name" placeholder="Name"  ></td>
				</tr>
				<tr class="row">
					<td class="label"> <label for="email"> Email </label></td>
					<td> <input class="text" type="text" id="email" name="email" placeholder="Email"  ></td>
				</tr>
				<tr class="row">
					<td class="label"> <label for="pw"> Password </label></td>
					<td> <input class="text" type="password" id="pw" name="pw" placeholder="Password"  ></td>
				</tr>
				<tr class="row">
					<td class="label"> <label for="rpw">Re-type Password </label></td>
					<td> <input class="text" type="password" id="rpw" name="rpw" placeholder="Re-type Password"  ></td>
				</tr>
				<tr class="row">
					<td class="label"> <label for="dob"> Date of Birth </label></td>
					<td>
						 <input class="text" type="text" id="dob" name="dob"  >
					</td>
				</tr>
				<tr class="row">
					<td class="label"> <label for="mobile"> Mobile Number</label></td>
					<td>
						 <input class="text" type="number" id="mobile" name="mobile" placeholder="Mobile Number"  >
					</td>
				</tr>
				<tr class="row">
					<td class="label"> <label for="sex"> Gender </label></td>
					<td> 
						<input type="radio" name="gender" value="male"  >
						<label for="sex"> Male </label>
						 <input type="radio" name="gender" value="female"  >
						<label for="sex"> Gender </label>
						<input type="radio" name="gender" value="other"  >
						<label for="sex"> Other </label>
					</td>
				</tr>
				<tr class="row">
					<td class="label"> <label for="mobile"> Image</label></td>
					<td>
						 <input type="file" name="fileToUpload" id="fileToUpload">
					</td>
				</tr>
				 
				<tr class="row">
					<td> <button type="submit" name="submit" value="submit">Submit </button> </td>
				</tr>
			</table>
		</form>
	</div>
	 
</body>
</html>
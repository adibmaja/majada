<?php
include('function/function.php');

if(isset($_POST['sub'])){
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];
  $biography = $_POST['biography'];
  $Date_of_birth = $_POST['dob'];
  if(isset($_POST['gender'])){
  $gender=$_post['gender'];
  $signup = $_POST['sign up'];
  $picture= $_FILES['picture']['name'];
 
 
 $bio_file_name=$email."text";
 $fopen = fopen("biography/".$bio_file_name,"W");
 fwrite($fopen,$biography);
 
 if($picture){
	 move_uploaded_file($_FILES['picture']['tmp_name'],'image/'.$_FILES['picture']['name']);
 }else{echo "picture error";}
  
  try{
			$db_class=newdb_class;
			$insert_query = "INSERT INTO exam VALUES('','$fname','$lname','$email','$bio_file_name',
			'$Date_of_birth,' '$gender','sign up','picture',)";
			$webapps->insert($insert_query);
			echo "not inserted";
		}catch(exception $e){
			echo "inserted";
			//image
		}
		
  }
	}

?>


<!DOCTYPE html>
<html lang="en">
<head>
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
	
<body>
	<div class="form-validaton">
		<h2>create anaccount	</h2>
		<form action="" method="post" enctype="multipart/form-data">
			<table id="table">
				<tr class="row">
					
					<td> <input class="text" type="text" id="name" name="fname" placeholder="Fist Name"  ></td>
					</tr>
					<tr class="row">
					<td> <input class="text" type="text" id="name" name="name" placeholder="Name"  ></td>
				</tr>
				
				<tr class="row">
					<td> <input class="text" type="text" id="email" name="email" placeholder="Email"  ></td>
				</tr>
				
				<tr class="row">
					<td> <input class="text" type="text" id="biography" name="biography" placeholder="biography"></td>
				</tr>
				
				<tr class="row">
				<td class="label"> <label for="dob"> Date of Birth </label></td>
					<td>
				<select name="dob">
				<option value="2001">2001</option>
				<option value="2002">2002</option>
				<option value="2003">2003</option>
				<option value="2004">2004</option>
				<option value="2004">2005</option>
				<option value="2004">2006</option>
				<option value="2004">2007</option>
				<option value="2004">2008</option>
				<option value="2004">2009</option>
				<option value="2004">20010</option>
				</select>
				</td>
				
				
				<tr class="row">
					<td class="label"> <label for="sex"> Gender </label></td>
					<td> 
						<input type="radio" name="gender" value="male"  >
						<label for="sex"> male </label>
						 <input type="radio" name="gender" value="female"  >
						<label for="sex"> Female </label>
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
					<td> <button type="submit" name="submit" value="submit">Sign up </button> </td>
				</tr>
			</table>
		</form>
	</div>
				</body>
	</html>
	
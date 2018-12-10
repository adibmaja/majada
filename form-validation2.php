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
		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
			<table id="table">
				<tr class="row">
					<td class="label"> <label for="name"> Name </label></td>
					<td> <input class="text" type="text" id="name" name="name" placeholder="Name" required></td>
				</tr>
				<tr class="row">
					<td class="label"> <label for="email"> Email </label></td>
					<td> <input class="text" type="text" id="email" name="email" placeholder="Email" required></td>
				</tr>
				<tr class="row">
					<td class="label"> <label for="pw"> Password </label></td>
					<td> <input class="text" type="password" id="pw" name="pw" placeholder="Password" required></td>
				</tr>
				<tr class="row">
					<td class="label"> <label for="rpw">Re-type Password </label></td>
					<td> <input class="text" type="password" id="rpw" name="rpw" placeholder="Re-type Password" required></td>
				</tr>
				<tr class="row">
					<td class="label"> <label for="dob"> Date of Birth </label></td>
					<td>
						 <input class="text" type="date" id="dob" name="dob" required>
					</td>
				</tr>
				<tr class="row">
					<td class="label"> <label for="mobile"> Mobile Number</label></td>
					<td>
						 <input class="text" type="number" id="mobile" name="mobile" placeholder="Mobile Number" required>
					</td>
				</tr>
				<tr class="row">
					<td class="label"> <label for="sex"> Gender </label></td>
					<td> 
						<input type="radio" name="gender" value="male" required>
						<label for="sex"> Male </label>
						 <input type="radio" name="gender" value="female" required>
						<label for="sex"> Gender </label>
					<input type="radio" name="gender" value="other" required>
					<label for="sex"> Other </label>
					</td>
				</tr>
				<tr class="row">
					<td class="label"> <label for="mobile"> Image</label></td>
					<td>
						 <input type="file" name="fileToUpload" id="fileToUpload">
						<input type="submit" value="Upload Image" name="submit">
					</td>
				</tr>
				 
				<tr class="row">
					<td> <button type="submit" value="submit">Submit </button> </td>
				</tr>
			</table>
		</form>
	</div>
	 
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
<style>
		.form-validaton{
			width: 450px;
			margin:0 auto;
			background: yellow;
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
	</style
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
				<select>
				<option value="2001">2001</option>
				<option value="2002">2002</option>
				<option value="2003">2003</option>
				<option value="2004">2004</option>
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
	
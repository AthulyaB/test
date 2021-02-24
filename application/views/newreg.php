<!DOCTYPE html>
<html>
<head>
</head>
<style>

	input,textarea
	{
		padding:10px;
		margin:10px;
		text-align: center;
	}
	fieldset
	{

		width:300px;
		height:600px;

	}
	form h2
	{
		margin-left: 300px;
	}
	table
	{
		text-align: center;
	}
</style>
<body>
	<center>
<h2>Registration Form</h2>
<form method="post" action="<?php echo base_url()?>Mainnn/newregist">
	<fieldset>
		<table>
			<tr>
				<td>
			FirstName:</td>
			<td><input type="text"name="fname"placeholder="Enter the First Name" required maxlength="25" pattern="[a-zA-Z]+">
				</td>
			</tr>
			<br>
			<tr>
				<td>
			LastName:</td>
			<td><input type="text"name="lname"placeholder="Enter the Second Name" required maxlength="25" pattern="[a-zA-Z]+">
				</td>
			</tr>
			<br>
			<tr>
				<td>
			UserName:</td>
			<td><input type="text"name="uname"placeholder="User Name" required maxlength="25"pattern="[a-zA-Z0-9]+">
				</td>
			</tr>
			<br>
			<tr>
				<td>
			Password:</td>
			<td><input type="text"name="pswd"placeholder="Password" required  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter and atleast 8 or more characters"><br></td></tr>
				</td>
			</tr>
			<br>
			<tr>
				<td>
			Mobile:</td>
			<td><input type="text"name="mobile"placeholder="Mobileno" required pattern="[7-9]{1}[0-9]{9}"  ><br>
				</td>
			</tr>
			<br>
			
			
			
			
			<tr>
				<td>
			Email Id:</td><td><input type="Email"name="email" placeholder="email" required>
				</td>
			</tr>
			<br>
			
			<tr>
				<td>
			<input type="submit" value="Register">
				</td>
			</tr>
		</table>
	</fieldset>
</form>
</center>
</body>
</html>

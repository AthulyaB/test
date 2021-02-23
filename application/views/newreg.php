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
			<td><input type="text"name="fname"placeholder="Enter the First Name">
				</td>
			</tr>
			<br>
			<tr>
				<td>
			LastName:</td>
			<td><input type="text"name="lname"placeholder="Enter the Second Name">
				</td>
			</tr>
			<br>
			<tr>
				<td>
			UserName:</td>
			<td><input type="text"name="uname"placeholder="User Name">
				</td>
			</tr>
			<br>
			<tr>
				<td>
			Password:</td>
			<td><input type="text"name="pswd"placeholder="Password">
				</td>
			</tr>
			<br>
			<tr>
				<td>
			Mobile:</td>
			<td><input type="text"name="mobile"placeholder="Mobileno">
				</td>
			</tr>
			<br>
			
			
			
			
			<tr>
				<td>
			Email Id:</td><td><input type="Email"name="email" placeholder="email">
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
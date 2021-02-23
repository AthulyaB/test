<!DOCTYPE html>
<html>
<head>
</head>
<style>
	form{
		width:100px;
		height:150px;
		padding:10px;
		margin:10px;
		
	}

</style>
<body>
	
	<form method="post" action="<?php echo base_url()?>Mainnn/logg">
		<fieldset>
			Email id:<input type="email"name="email"placeholder="Enter your email"><br>
			Password:<input type="password"name="password"placeholder="Enter your password"><br>
			<input type="submit" value="LOGIN">
		</fieldset>
	</form>

</body>
</html>
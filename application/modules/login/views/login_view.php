<!DOCTYPE html>
<html lang="en">
	<head>
		<title>CI_Hook</title>
	</head>
	<body>
		<form action="<?php echo base_url(); ?>login/validate" method="post">
			<label>User: </label><input type="text" name="user" /><br />
			<label>Password: </label><input type="password" name="pass" /><br />
			<input type="submit" value="Ok"/>
		</form>
	</body>
</html>
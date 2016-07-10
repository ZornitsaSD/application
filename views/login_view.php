<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
</head>
<body>
	<div id='login_form'>
		<form action='<?php echo base_url();?>index.php/login/procedure' method='post' name='procedure'>
			<h1>Въведи потребителско име и парола:</h1>
			
			<?php if(! is_null($param)) echo $param;?>	
			<p>		
			<label for='username'>Потребител</label><br>
			<input type='text' name='username' id='username'>
			</p>
			<p>
			<label for='password'>Парола</label><br>
			<input type='password' name='password' id='password'>							
			</p>
			<p id='sub'><input type='Submit' value='Вход' /></p>			
		</form>
	</div>
</body>
</html>
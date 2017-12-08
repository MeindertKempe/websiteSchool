<?php
include('scripts/registerScript.php')
?>
<h1 class="h1">Register</h1>
<br>

<?=$invalidUsernameErr;?>
<?=$invalidEmailErr;?>
<?=$passwordLengthErr;?>
<?=$passwordDiffErr;?>

<form action="<?php filter_input(INPUT_SERVER, 'PHP_SELF', FILTER_SANITIZE_URL)?>" method="post">
	<label class="loginText" for="username">Username:</label>
	<input id="username" class="loginField" type="text" name="username" maxlength="127" minlength="4" 
		value="<?php
		if(!empty($_POST['username']))
		{
			echo($_POST['username']);
		}
		?>">
	<br>
	
	<label class="loginText" for="email">Email:</label>
	<input id="email" class="loginField" type="email" name="email" 
		value="<?php
		if(!empty($_POST['email']))
		{
			echo($_POST['email']);
		}
	   ?>">
	<br>
	
	<label class="loginText" for="password">Password:</label>
	<input id="password" class="loginField" type="password" name="password" 
		   maxlength="255" minlength="4"><br>
	
	<label class="loginText" for="confirmPassword">Confirm password:</label>
	<input id="confirmPassword" class="loginField" type="password" name="confirmPassword" 
		   maxlength="255" minlength="4"><br>
	
	<input class="loginButton" type="submit" value="register">
</form>

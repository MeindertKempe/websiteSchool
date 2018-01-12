<form class="hashForm" action="scripts/hashScript.php" method="post">
	<textarea id="input" class="field" rows="10" cols="50" name="input" placeholder="Invoer"><?php
	if(isset($_SESSION['input']))
	{
		echo($_SESSION['input']);
		unset($_SESSION['input']);
	}
	?></textarea>
	<br>
	<select class="field" name="algorithm">
	<?php
	//$algorithms = array('md2', 'md4', 'md5', 'sha1', 'sha224', 'sha256', 'sha384', 'sha512', 'ripemd128', 'ripemd160', 'ripemd256', 'ripemd320', 'whirlpool');
	$algorithms = hash_algos();
	foreach($algorithms as $var)
	{
		echo('<option value="' . $var .'"');
		if(isset($_SESSION['algorithm']) && $var === $_SESSION['algorithm'])
		{
			echo('selected');
			unset($_SESSION['algorithm']);
		}
		echo('>' . $var . '</option>');
	}
	?>
	</select>
	<input class="button" type="submit" value="submit">
</form>
<?php
if(isset($_SESSION['output']))
{
	echo('<p>Hash: ' . $_SESSION['output'] . '<p>');
	unset($_SESSION['output']);
}

?>

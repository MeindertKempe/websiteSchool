<form class="hashForm" action="scripts/hashScript.php" method="post">
	<textarea id="input" class="field" rows="10" cols="50" name="input" placeholder="Invoer"><?php
	// If there was any previous input add that
	if(isset($_SESSION['hashInput']))
	{
		echo($_SESSION['hashInput']);
		unset($_SESSION['hashInput']);
	}
	?></textarea>
	<br>
	<select class="field" name="algorithm">
	<?php
	//$algorithms = array('md2', 'md4', 'md5', 'sha1', 'sha224', 'sha256', 'sha384', 'sha512', 'ripemd128', 'ripemd160', 'ripemd256', 'ripemd320', 'whirlpool');
	$algorithms = hash_algos();
	// Add entry for every algorithm
	foreach($algorithms as $var)
	{
		echo('<option value="' . $var .'"');
		// If a algorithm has previously been selected set that as default
		if(isset($_SESSION['hashAlgorithm']) && $var === $_SESSION['hashAlgorithm'])
		{
			echo('selected');
			unset($_SESSION['hashAlgorithm']);
		}
		echo('>' . $var . '</option>');
	}
	?>
	</select>
	<input class="button" type="submit" value="submit">
</form>
<?php
if(isset($_SESSION['hashOutput']))
{
	echo('<p>Hash: ' . $_SESSION['hashOutput'] . '<p>');
	unset($_SESSION['hashOutput']);
}

?>

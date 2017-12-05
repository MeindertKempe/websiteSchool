<?php
function themeCookie() {
	if($_COOKIE['theme'] !== null) {
		return $_COOKIE['theme'];
	} else {
		setcookie('theme', 'dark', time() + (60*60*24*10));
		return 'dark';
	}
}
?>
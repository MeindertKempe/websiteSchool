<?php
header("Content-type: text/css");
$green = "#008000"
?>

/*fix for annoying highlighting in editor*/

/*
<style>
/**/

#wrapper {
	background-color: #1a1a1a;
	color: #f0f0f0;
}

.box {
	background-color: #0a0a0a;
	border-color: <?=$green;?>;
}

.h1, .h2, .h3 {
	color: <?=$green;?>;
}

.contentNav {
	border-color: <?=$green;?>;
}

.contentNavList, .contentNavList2 {
	color: #303030;
}

.divider, .navDivider {
	background-color: #303030;
	background: linear-gradient(#0a0a0a, #303030);
}

#navTitle {
	color: <?=$green;?>;
}

#navMenuList {
	background-color: <?=$green;?>;
}

.navButton {
	color: #f0f0f0;
}

.navButton:hover {
	background-color: #006400;
}

.navButton:active {
	background-color: #004800;
}

.themeButton {
	background-color: #101010;
	color: #f0f0f0;
}

.themeButton:hover {
	background-color: #080808;
}

#footerText {
	color: #606060;
}

.downloadButton, .loginButton, .loginField {
	color: <?=$green;?>;
	background-color: #101010;
	border-color: <?=$green;?>;
}

.downloadButton:hover {
	background-color: #080808;
}

.defaultImg {
	border-color: #1a1a1a;
}

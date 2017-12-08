<?php
header("Content-type: text/css");
$green = "#008000;"
?>

/*fix for annoying highlighting in editor*/

/*
<style>
/**/

#wrapper {
	background-color: #f0f0f0;
	color: #000000;
}

.box {
	background-color: #d0d0d0;
	border-color: <?=$green;?>;
}

.h1, .h2, .h3 {
	color: <?=$green;?>;
}

.contentNav {
	border-color: <?=$green;?>;
}

.contentNavList, .contentNavList2 {
	color: #909090;
}

.divider, .navDivider {
	background-color: #909090;
	background: linear-gradient(#d0d0d0, #909090);
}

.title {
	color: <?=$green;?>;
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

.themeButton {
	border-color: <?=$green;?>;
	color: #000000;
}

.themeButton {
	background-color: #efefef;
}

.themeButton:hover {
	background-color: #b0b0b0;
}

#footerText {
	color: #606060;
}

.downloadButton, .loginButton, .loginField {
	color: <?=$green;?>;
	background-color: #efefef;
	border-color: <?=$green;?>;
}

.downloadButton:hover {
	background-color: #b0b0b0;
}

.defaultImg {
	border-color: #f0f0f0;
}

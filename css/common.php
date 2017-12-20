<?php
header("Content-type: text/css");
$green = "#008000"
?>

/*fix for annoying highlighting in editor*/

/*
<style>
/**/

* {
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	font-size: 100%;
	font: inherit;
	overflow: auto;
}

html,body {
	height: 100%;
	width: 100%;
}

a {
	color: green;
	text-decoration: none;
}

#wrapper {
	width: 100%;
	height: 100%;
	text-align: center;
}

.box {
	border-style: solid;
	border-width: 3px;
	border-radius: 5px;
	margin-left: 3vw;
	margin-right: 3vw;
	margin-bottom: 2vh;
	margin-top: 2vh;
}

#menu {
	position: fixed;
	left: 0;
	top: 0;
	width: 19vw;
	height: 63vh;
	overflow: hidden;
}

#loginMenu {
	position: fixed;
	left: 0;
	top: 65vh;
	width: 19vw;
	min-height: 10vh;
}

#content {
	padding: 2%;
	float: right;
	width: 72vw;
	min-height: 96vh;
}
.h1 {
	font-size: 2.5em;
}

.h2 {
	font-size: 2em;
}

h3 {
	font-size: 1.5em;
}

.contentNav {
	border-style: solid;
	border-radius: 3px;
	text-align: left;
	list-style-position: inside;
	padding: 1%;
	width: 24vw;
}

.contentNavList {
	list-style-type: disc;
}

.contentNavList2 {
	list-style-type: circle;
	text-align: left;
	list-style-position: inside;
	margin-left: 2vw;
	padding-left: 1%;
}

.divider {
	border: 0;
	height: 1px;
	margin-top: 2vw;
	margin-bottom: 2vw;
}

.navDivider {
	border: 0;
	height: 1px;
}

#navTitle {
	display: flex;
	align-items: center;
	justify-content: center;
	height: 100%;
	width: 100%;
	font-size: 1.5em;
}

#navTitleDiv {
	height: 10%;
}

#navMenuContainer {
	height: 50%
}

#navMenuList {
	height: 100%;
}

.navMenu {
	width: 100%;
	height: 20%;
	display: flex;
}

.navButton {
	width: 100%;
	height: 100%;
	align-items: center;
	justify-content: center;
	display: flex;
	text-decoration:none;
	font-size: 1.2em;
}

#themeDiv {
	margin-top: 5%;
	margin-bottom: 5%;
	height: 20%;
	width: 100%;
}

.themeButton {
	display: inline-block;
	text-align: center;
	width: 100%;
	height: 50%;
	border: none;
	font-size: 1.1em;
}

.downloadButton {
	border-style: solid;
	border-radius: 3px;
	padding: 0.5em;
	text-decoration: none;
}

.defaultImg {
	border-style:solid;
	border-radius:3px;
}

#mswLogoImg {
	width: 98%;
}

#httpsImg {
	width: 45%;
}

#informaticaLoginImg {
	width: 45%;
}

.loginText {
	display: inline-block;
	width: 15%;
}

.loginField, .registerField, .field {
	height: 1.5em;
	border-style: solid;
	border-radius: 3px;
	margin-top: 1px;
	margin-bottom: 1px;
}

.registerField {
	width: 45%;
}

.loginField {
	width: 90%;
}

.loginButton, .registerButton, .button {
	margin-top: 3px;
	margin-bottom: 3px;
	height: 1.5em;
	border-style: solid;
	border-radius: 3px;
	padding-left: 1px;
	padding-right: 1px;
}

.registerButton {
	min-width: 10%;
}

.loginButton {
	width: 70%;
}

#footer {
	position: absolute;
	bottom: 0;
	width: 100%;
	height: 15%;	
}

#footerText {
	bottom: 0;
	position: inherit;
	margin: 5%;
	font-size: 0.8em;
}

.articleButton {
	display: flex;
	width: 100%;
	height: 5em;
	align-items: center;
	justify-content: center;
	font-size: 3em;
	border-style: solid;
	border-radius: 3px;
	margin-bottom: 3%;
}

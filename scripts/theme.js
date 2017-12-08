"use strict";
/*
function changeTheme(theme) {
	let linkList = document.getElementsByTagName("link");
	for (let i = 0; i < linkList.length; i++) {
		let title = linkList[i].getAttribute("title");
		if (title === theme) {
			//linkList[i].removeAttribute('disabled');
			linkList[i].disabled = false;
			console.log(theme + "enabled")
		} else if (title !== null) {
			//linkList[i].setAttribute('disabled','');
			linkList[i].disabled = true;
			console.log("all disabled")
		}
	}
	setCookie("theme", theme, 10);
	return theme;
}
*/
function changeTheme(theme) {
	let linkList = document.getElementsByTagName("link");
	for (let i = 0; i < linkList.length; i++) {
		let title = linkList[i].getAttribute("title");
		if (title !== null) {
			linkList[i].disabled = true;
			setCookie("theme", theme, 10);
		}
		if (title === theme) {
			linkList[i].disabled = false;
		}
	}
	return theme;
}

function setCookie(cookieName, cookieValue, cookieMaxAge) {
	document.cookie = cookieName + "=" +  cookieValue + ";" + "max-age=" + cookieMaxAge*60*60*24 + ";";
	return document.cookie;
}

function getCookie(cookieName) {
	let cookieValue = document.cookie.match(new RegExp(cookieName + "=([^;]+)"));
	if (cookieValue !== null) {
		return cookieValue[1];
	} else {
		return null;
	}
}

function setTheme() {
	let theme = getCookie("theme");
	if (theme !== null) {
		changeTheme(theme);
		return theme;
	} else {
		changeTheme("dark");
		return "dark";
	}
}

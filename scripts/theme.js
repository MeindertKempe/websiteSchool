"use strict";

function changeTheme(theme) {
	// Assign all link elements to a array
	let linkList = document.getElementsByTagName("link");
	// Cycle through the array to check all elements
	for (let i = 0; i < linkList.length; i++) {
		// Get the title attribute of the element
		let title = linkList[i].getAttribute("title");
		/*
		 * Disable all elements exept those without title (with title null)
		 * and then enable the element which matches the theme variable
		 */
		if (title !== null) {
			linkList[i].disabled = true;
		}
		if (title === theme) {
			linkList[i].disabled = false;
			// Set a cookie as to be able to identify the last theme used
			setCookie("theme", theme, 10);
		}
	}
	// Return the name of the enabled theme
	return theme;
}

function setCookie(cookieName, cookieValue, cookieMaxAge) {
	/*
	 * Use document.cookie to set a cookie with the specified values
	 * and return it.
	 * The max age is multiplied to be in days
	 */
	document.cookie = cookieName + "=" +  cookieValue + ";" + "max-age=" + cookieMaxAge*60*60*24 + ";";
	return document.cookie;
}

function getCookie(cookieName) {
	/*
	 * Use regex to find the cookie with the right name
	 * and assign its value to a variable
	 */
	let cookieValue = document.cookie.match(new RegExp(cookieName + "=([^;]+)"));
	/* 
	 * Check if the cookie has an actual value, if so return it, 
	 * if not return null
	 */
	if (cookieValue !== null) {
		return cookieValue[1];
	}
	else {
		return null;
	}
}

// This script is run on page load to set the correct theme
function setTheme() {
	// Get value of the theme cookie and store it
	let theme = getCookie("theme");
	/*
	 *  Check if the theme cookie has a value, if so set that theme 
	 *  with changeTheme, if not use the default value
	 */
	if (theme !== null) {
		changeTheme(theme);
	}
	else {
		changeTheme("dark");
	}
}

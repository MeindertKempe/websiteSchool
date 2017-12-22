"use strict";

function changeColor(type){
	
	// Get value of input usin the type variable
	let inputValue = document.getElementById(type).value;
	
	// Create regex object
	let regExp = /^[a-fA-F0-9]{6}$|^[a-fA-F0-9]{3}$/;
	
	// Get all elements of which the color should change
	let content = document.getElementById("content");
	let menu = document.getElementById("menu");
	let loginMenu = document.getElementById("loginMenu");
	let wrapper = document.getElementById("wrapper");

	// Add all elements to a array
	let elements = [content, menu, loginMenu, wrapper];
	
	// Check whether regex matches anything
	if(inputValue.match(regExp) !== null){
		
		// Cycle through array and add style attribute with input value as value
		for(let i =0; i < elements.length; i++) {
			// Check type to change the right value
			if(type === "backgroundColor"){
				elements[i].style.backgroundColor = "#" + inputValue;
			} else if(type === "textColor"){
				elements[i].style.color = "#" + inputValue;
			}
		}
		// Reset to default if input is empty
	} else if(inputValue === ""){
		// Cycle through array and add style attribute with input value as value
		for(let i =0; i < elements.length; i++) {
			// Check type to change the right value
			if(type === "backgroundColor"){
				elements[i].style.backgroundColor = null;
			} else if(type === "textColor"){
				elements[i].style.color = null;
			}
		}
	}
}

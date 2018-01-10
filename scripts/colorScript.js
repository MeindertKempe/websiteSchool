"use strict";

function changeColor(type){
	
	// Get value of input usin the type variable
	let inputValue = document.getElementById(type).value;
	
	// Get all elements of which the color should change
	let content = document.getElementById("content");
	let menu = document.getElementById("menu");
	let loginMenu = document.getElementById("loginMenu");
	let wrapper = document.getElementById("wrapper");

	// Add all elements to a array
	let elements = [content, menu, loginMenu, wrapper];
	

	// Reset to default if input is empty
	if(inputValue === ""){
		// Cycle through array and add style attribute with input value as value
		for(let i =0; i < elements.length; i++) {
			// Check type to change the right value
			if(type === "backgroundColor"){
				elements[i].style.backgroundColor = null;
			} else if(type === "textColor"){
				elements[i].style.color = null;
			}
		}
	}else{
		// Cycle through array and add style attribute with input value as value
		for(let i =0; i < elements.length; i++) {
			// Check type to change the right value
			if(type === "backgroundColor"){
				elements[i].style.backgroundColor = inputValue;
			} else if(type === "textColor"){
				elements[i].style.color = inputValue;
			}
		}
	}
}

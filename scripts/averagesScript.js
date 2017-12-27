"use strict";
// Define input counter variables
let subInputCounter = 5;

// Define total and totalNum variables
let total = 0;
let totalNum = 0;

function addSubjectInput(){
	// Increment input counter
	subInputCounter++;
	
	// Select form div
	let form = document.getElementById("subjectForm");
	
	// Create necessary elements
	let subject = document.createElement("input");
	let subjectNum = document.createElement("input");
	let br = document.createElement("br");
	let space = document.createTextNode(" ");
	
	// Add attributes to elements
	subject.id = "subject" + subInputCounter;
	subject.classList = "field averagesField";
	subject.type = "text";
	subject.placeholder = "Vak " + subInputCounter;
	subject.setAttribute("onchange", "updateInfo()");
	
	subjectNum.id = "subjectNum" + subInputCounter;
	subjectNum.classList = "field averagesField";
	subjectNum.type = "number";
	subjectNum.step = "0.01";
	subjectNum.placeholder = "Vak " + subInputCounter + " Cijfer";
	subjectNum.setAttribute("onchange", "updateInfo()");
	
	// Add elements to form div
	form.appendChild(subject);
	form.appendChild(space);
	form.appendChild(subjectNum);
	form.appendChild(br);
}

function updateInfo(){
	
	// Reset total and totalNum to 0
	total = 0;
	totalNum = 0;
	
	// Get elements
	let results = document.getElementById("resultsBody");
	let resultAverage = document.getElementById("resultAverage");
	
	// If a table entry exists delete it
	for(let i = 1; i <= subInputCounter; i++){
		if(document.getElementById("result" + i) !== null){
			results.removeChild(document.getElementById("result" + i));
		}
	}
	
	// Create a row for every input
	for(let i = 1; i <= subInputCounter; i++){
		
		// Get input elements
		let subject = document.getElementById("subject" + i);
		let subjectNum = document.getElementById("subjectNum" + i);
		
		// Set content of table entries to the value of the input
		let newResultSub = document.createElement("td");
		newResultSub.textContent = subject.value;
		
		let newResultSubNum = document.createElement("td");
		newResultSubNum.textContent = subjectNum.value;
		
		// Add the appropriate entries and an id to the new row
		let newResultRow = document.createElement("tr");
		newResultRow.id = "result" + i;
		newResultRow.appendChild(newResultSub);
		newResultRow.appendChild(newResultSubNum);
		
		// Create new row
		results.appendChild(newResultRow);
		
		/*
		 * If the input has a value add it to the total and
		 * increment the total number of values
		 */
		if(subjectNum.value !== ""){
			total += Number(subjectNum.value);
			totalNum += 1;
		}
	}
	if(!isNaN(total/totalNum)){
		resultAverage.innerHTML = (total/totalNum);
	} else {
		resultAverage.innerHTML = "-";
	}
}

function needInfo(){
	// Assign input elemtents to variables
	let wantedNum = document.getElementById("wantedNum");
	let inWantedNum = document.getElementById("inWantedNum");
	
	// Assign output element to variable
	let needNum = document.getElementById("needNum");
	
	// Define and reset variables
	let newTot = 0;
	
	// If wantedNum is empty output - else calculate result
	if(wantedNum.value === ""){
		needNum.innerHTML = "-";
	} else if(totalNum === 0) {
		needNum.innerHTML = "Voer eerst cijfers in";
	} else if(inWantedNum.value <= 0 && inWantedNum.value !== ""){
		needNum.innerHTML = "Niet mogelijk";
	}  else {
		// If number of numbers is empty set to 1 else set to input value
		if(inWantedNum.value === ""){
			var inWantedNumTemp = 1;
		} else {
			var inWantedNumTemp = Number(inWantedNum.value);
		}
		// Calculate and set needNum
		newTot = Number(wantedNum.value) * (totalNum + inWantedNumTemp);
		newTot -= total;
		needNum.innerHTML = newTot/inWantedNumTemp;
	}
}

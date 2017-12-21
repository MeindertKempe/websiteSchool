<script src="scripts/averagesScript.js"></script>
<h1 class="h1">Bereken Gemiddelde</h1>
<br>

<div id="subjectForm">
	<input id="subject1" class="field averagesField" type="text"
			  placeholder="Vak 1" onchange="updateInfo()">
	<input id="subjectNum1" class="field averagesField" type="number" step="0.01"
			  placeholder="Vak 1 Cijfer" onchange="updateInfo()">
	<br>

	<input id="subject2" class="field averagesField" type="text"
			  placeholder="Vak 2" onchange="updateInfo()">
	<input id="subjectNum2" class="field averagesField" type="number" step="0.01"
			  placeholder="Vak 2 Cijfer" onchange="updateInfo()">
	<br>

	<input id="subject3" class="field averagesField" type="text" name="subject3"
			  placeholder="Vak 3" onchange="updateInfo()">
	<input id="subjectNum3" class="field averagesField" type="number" step="0.01"
			  placeholder="Vak 3 Cijfer" onchange="updateInfo()">
	<br>

	<input id="subject4" class="field averagesField" type="text" name="subject4"
			  placeholder="Vak 4" onchange="updateInfo()">
	<input id="subjectNum4" class="field averagesField" type="number" step="0.01"
			  placeholder="Vak 4 Cijfer" onchange="updateInfo()">
	<br>

	<input id="subject5" class="field averagesField" type="text" name="subject5"
			  placeholder="Vak 5" onchange="updateInfo()">
	<input id="subjectNum5" class="field averagesField" type="number" step="0.01"
			  placeholder="Vak 5 Cijfer" onchange="updateInfo()">
	<br>
</div>
<button class="button" onclick="addSubjectInput()">Meer velden</button>

<br>
<br>
<h2 class="h2">Resultaten:</h2>
<table id="results" class="resultTab table">
	<thead>
	<tr>
		<th class="subjectCol">Vak</th>
		<th class="numCol">Cijfer</th>
	</tr>
	</thead>
	<tbody id="resultsBody">
	<tr id="result1"></tr>
	</tbody>
	<tfoot>
	<tr>
		<td>Gemiddelde</td>
		<td id="resultAverage">-</td>			
	</tr>
	</tfoot>
</table>

<br>

<h2 class="h2">Bereken benodigde cijfer</h2>
<input id="wantedNum" type="number" step="0.01" placeholder="Gewenst gemiddelde"
	   class="field averagesField" onchange="needInfo()">
<br>
<input id="inWantedNum" type="number" step="1" placeholder="Het aantal cijfers"
	   class="field averagesField" onchange="needInfo()">
<br>
<br>
<table class="wantedTab table">
	<tr>
		<td class="subjectCol">Nodig cijfer</td>
		<td id="needNum">-</td>
	</tr>
</table>

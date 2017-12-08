<h1 class="h1">Encryptie and Hashen</h1>
<h2 class="h2">Introductie</h2>
<p>Op deze pagina zal ik proberen uit te leggen hoe dingen zoals encryptie en hashen werken.</p>
<br />
<div class="contentNav">
	<h3 class="h3 contentNavTitle">Inhoud</h3>
	<hr class="navDivider"/>
	<ul class="contentNavList">
		<li><a href="#encryption">Encryptie</a></li>
		<li><a href="#https">Https</a></li>
		<li><a href="#hashing">Hashen</a></li>
		<li><a href="#salting">Salten</a></li>
	</ul>
</div>
<h2 id="encryption" class="h2">Encryptie</h2>
<p>
	Encryptie zorgt er voor dat informatie die iemand verstuurd niet gelezen kan worden zonder de juiste sleutel. 
	Heel eenvoudig uitgelegd wordt dit meestal gedaan door mensen een publieke sleutel te geven die gebruikt kan
	worden om de informatie te versleutelen maar niet om deze weer leesbaar te maken. De ontvanger heeft dan een 
	geheime sleutel die deze informatie weer kan ontcijferen.
</p>
<br />
<p>
	Meer informatie op <a href="https://nl.wikipedia.org/wiki/Encryptie">Wikipedia</a>
</p>
<hr class="divider"/>
<h2 id="hashing" class="h2">Hashen</h2>
<p>
	Hashen is anders dan encryptie in dat het process onomkeerbaar is, het is de bedoeling dat zo'n hash verschillend
	is voor alle informatie die gehashd wordt, op deze manier is het zo dat als men een wachtwoord hasht en dat vergelijkt
	met de opgeslagen hash je zeker weet dat dit het goede wachtwoord is zonder het ook daadwerkelijk op te slaan.
</p>
<hr class="divider"/>
<h2 id="salting" class="h2">Salten</h2>
<p>
	Salts zijn willekeurige karakters die achter een wachtwoord geplakt worden voordat deze gehashd wordt, deze salts 
	worden dan samen met de gebruikersnaam opgeslagen, de belangrijkste functie hiervan is het voorkomen dat wachtwoorden
	gekraakt worden met behulp van een <a href="https://nl.wikipedia.org/wiki/Rainbow_table">rainbow table</a>.
</p>
<br />
<p>
	Meer informatie op <a href="https://nl.wikipedia.org/wiki/Hashfunctie">Wikipedia</a>
</p>
<hr class="divider"/>
<h2 id="https" class="h2">HTTPS</h2>
<p>
	HTTPS is een variant van het HyperText Transfer Protocol, deze maakt gebruik van een beveiligde TLS verbinding 
	(<a href="#encryption">encryptie</a>) voor het versuren van gegevens. In de meeste browsers kan je zien of 
	een HTTPS verbinding gebruikt word door te kijken of er een groen slotje voor het url weergegeven wordt, of door
	te kijken of er https:// voor het adres staat in plaats van http://.
</p>
<img id="httpsImg" class="defaultImg" src="images/https.png">

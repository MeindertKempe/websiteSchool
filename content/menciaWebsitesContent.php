<h1 class="h1">Mencia Websites</h1>
<h2 class="h2">Introductie</h2>
<p>Ik wist niet goed wat ik op deze website moest zetten, dus besloot ik om wat commentaar te geven op het IT op het Mencia.
	Meer specifiek, over de verschillende websites die we moeten gebruiken en de beveiliging hiervan.
	Op deze pagina zal ik website voor website over de problemen gaan.</p>
<br />
<div class="contentNav">
	<h3 class="h3 contentNavTitle">Inhoud</h3>
	<hr class="navDivider"/>
	<ul class="contentNavList">
		<li><a href="#dedecaan">Dedecaan.net</a></li>
		<li><a href="#mencia">Mencia.nl</a></li>
		<li><!-- comment to fix stupid whitespace
			--><a href="#menciaInformatica">Informatica.mencia.nl</a>
			<ul class="contentNavList2">
				<li><a href="#informaticaFTP">FTP</a></li>
				<li><a href="#phpMyAdmin">phpMyAdmin</a></li>
			</ul>
		</li>
		<li><a href="#conclusion">Conclusie</a></li>
	</ul>
</div>
<br />
<h2 id="dedecaan" class="h2">Dedecaan.net</h2>
<p>
	De meeste mensen op het Mencia zullen waarschijnlijk een account hebben op
	<a href="https://mencia.dedecaan.net">mencia.dedecaan.net</a> en diegenen die hun wachtwoord ooit vergeten zijn
	zullen vast en zeker gemerkt hebben dat in plaats van een link te sturen waarmee een nieuw wachtwoord ingesteld 
	kan worden het wachtwoord zelf verstuurd word. Dit lijkt op het eerste gezicht wellicht onschuldig, maar dit betekend
	dat wachtwoorden waarschijnlijk in 'plain text' opgeslagen zijn, in het beste geval staat er locaal nog encryptie op, 
	dit is echter nog steeds geen goede manier om wachtwoorden op te slaan. Op deze manier is het namelijk zo dat als
	iemand toegang heeft tot de data van de website deze persoon alle wachtwoorden kan achterhalen, de juiste manier om
	wachtwoorden op te slaan is om deze te <a href="encryptionInfo.php#hashing">hashen</a> en het liefst ook nog te 
	<a href="encryptionInfo.php#salting">salten</a>.
</p>
<br />
<p>
	Wat deze website wel goed doet is dat het altijd een beveiligde <a href="encryptionInfo.php#https">HTTPS</a> verbinding gebruikt zodat gevoelige informatie
	in ieder geval niet zomaar onderschept kan worden door bijvoorbeeld mensen op het zelfde netwerk als jij.
</p>
<hr class="divider"/>
<h2 id="mencia" class="h2">Mencia.nl</h2>
<p>
	Met deze website zijn er geen meteen duidelijke problemen qua beveiling, het lijkt er zelfs op dat er recent
	verbetering is geweest. Eerst wat het adres van deze website <a href="https://mencia.mwp.nl">mencia.mwp.nl</a>, maar 
	het lijkt nu verhuist te zijn naar <a href="https://www.mencia.nl">mencia.nl</a> en waar eerst wel een 
	<a href="encryptionInfo.php#https">HTTPS</a> versie van de site beschikbaar was, maar dat je het zelf voor het
	url moest zetten, wordt je nu meteen naar deze versie gestuurd.
</p>
<hr class="divider"/>
<h2 id="menciaInformatica" class="h2">Informatica.mencia.nl</h2>
<p>
	Eerder zei ik dat er niet echt iets mis is met <a href="https://www.mencia.nl">mencia.nl</a>, dit geld echter niet
	voor het subdomein <a href="http://informatica.mencia.nl">informatica.mencia.nl</a>, voor deze website bestaat er
	geen <a href="encryptionInfo.php#https">HTTPS</a> versie, dit terwijl je er wel moet inloggen, dit betekend dat jouw
	inloggegevens over een onbeveiligde verbinding verzonden worden en mogelijk onderschept kunnen worden door 
	bijvoorbeeld iemand op het zelfde netwerk.
</p>
<img id="informaticaLoginImg" class="defaultImg" src="images/informaticaLogin.png">
<p>
	Er is echt geen excuus meer voor een website in 2017 om geen <a href="encryptionInfo.php#https">HTTPS</a> vebinding
	te gebruiken, men kan tegenwoordig zelfs gratis TLS certificaten krijgen dankzij initiatieven zoals 
	<a href="https://www.letsencrypt.org">Let's Encrypt</a>.
</p>
<br />
<h3 id="informaticaFTP" class="h3">FTP</h3>
<p>
	En dan is er ook nog het feit dat men het FTP protocol gebruikt om bestanden naar de server te verplaatsen.
	Deze is nog te begrijpen omdat zover ik kan vinden er geen goede manier is om gelijk via windows verkenner 
	te verbinden met een veiliger protocol zoals SFTP. Zeker omdat nu veel mensen in het begin al problemen hadden
	met het verbinden  met de FTP server. Het FTP protocol gebruiken is echter net zo onveilig als geen 
	<a href="encryptionInfo.php#https">HTTPS</a> gebruiken.
</p>
<br />
<h3 id="phpMyAdmin" class="h3">phpMyAdmin</h3>
<p>
	Ook inloggen op phpMyAdmin is onveilig, dit is omdat dit ook op het subdomein 
	<a href="http://informatica.mencia.nl">informatica.mencia.nl</a> staat.
</p>
<hr class='divider'/>
<h2 id='conclusion' class='h2'>Conclusie</h2>
<p>
	Sommige van deze problemen zijn niet al te moeilijk op te lossen, zoals het feit dat het subdomein 
	<a href="http://informatica.mencia.nl">informatica.mencia.nl</a> geen <a href="encryptionInfo.php#https">HTTPS</a> 
	verbinding gebruikt. Het probleem van <a href="https://mencia.dedecaan.net">mencia.dedecaan.net</a> 
	zal echter moeilijker worden vrees ik aangezien dit natuurlijk niet direct door het mencia beheerd wordt. 
	Dit betekend dat men of <a href="https://www.dedecaan.net">dedecaan.net</a> moet overtuigen dit op te lossen of
	een andere website hiervoor vinden die hun zaken wel op order hebben.
</p>

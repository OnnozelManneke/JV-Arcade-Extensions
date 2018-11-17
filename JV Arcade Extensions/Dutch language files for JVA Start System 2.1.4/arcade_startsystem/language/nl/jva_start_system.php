<?php
/**
*
* @package phpBB Arcade - JVA Start System
* @version $Id$
* @author 2011-2018 KillBill - killbill@jatek-vilag.com
* @copyright (c) 2014-2018 https://jv-arcade.com/ - support@jv-arcade.com
* @license https://jv-arcade.com/License.html JVA License v1
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
// Some characters you may want to copy&paste: ‚ ‘ ’ « » „ “ ” …

$lang = array_merge($lang, array(
	'ACP_JVA_START_SYSTEM_INSTRUCTION'			=> 'JVA Start Systeem Instructies',
	'ACP_JVA_START_SYSTEM_INSTRUCTION_EXPLAIN'	=> 'De “JVA Start Systeem” software is <a onclick="window.open(this.href); return false;" href="%3$s" title="JVA License">gelicenseerd</a> en onderhouden door de “%1$s” website.',
	'ACP_JVA_START_SYSTEM_EXPLAIN'				=> '<legend>JVA Start Systeem gedetailleerde beschrijving</legend>
Gegevens die tijdens activering worden verzonden, kunnen worden gebruikt om het niveau van de status van de betreffende website bij “%2$s” te bepalen.<br>
Bovendien geeft de opgegeven activeringssleutel aan dat de betreffende site live is of alleen een test pagina.<br><br>
<div>Opgeslagen persoonlijke gegevens na activering:</div>
<ul>
	<li>Eigen JVA start systeem ID</li>
	<li>Website adres van de activator</li>
	<li>Gebruikersnaam van de activator</li>
	<li>IP-adres van de activator</li>
	<li>E-mailadres van de activator</li>
	<li>Gebruikt phpBB versienummer</li>
	<li>Gebruikt phpBB Arcade versienummer</li>
	<li>Activatie datum</li>
	<li>Activatie sleutel</li>
	<li>Activatie afhankelijke wachttijd om reclame over te slaan</li>
</ul>

<div>Geregistreerde websites stellen u in staat om extra persoonlijke gegevens op te halen van de “%2$s” website:</div>
<ul>
	<li>Gebruikersnaam van de activerende persoon op “%2$s”</li>
	<li>Groep van de activerende persoon op “%2$s”</li>
	<li>E-mailadres van de activerende persoon op “%2$s”</li>
</ul>

<div>Gebruik van persoonlijke gegevens:</div>
<ul>
	<li>Met het JVA start systeem ID kunt u uw site veilig identificeren.</li>
	<li>Het webadres is een mogelijkheid om te controleren of de website is geregistreerd op de “%2$s” website.</li>
	<li>De gebruikersnaam biedt de mogelijkheid om te bepalen of de betreffende gebruiker bekend is op de “%2$s” website.</li>
	<li>Het IP-adres wordt gebruikt wanneer de gebruiker een wet of een strafbaar feit pleegt.</li>
	<li>Het e-mailadres wordt gebruikt wanneer we contact moeten opnemen met de betreffende gebruiker.</li>
	<li>Op basis van de phpBB en phpBB Arcade versie, kunnen we bepalen of de betreffende website compliant is of niet.</li>
	<li>De activeringssleutel bepaalt waar de betreffende website recht op heeft.</li>
	<li>Wachttijd voor adverteren is het moment waarop de gebruiker het recht heeft om de advertentie over te slaan.</li>
</ul>

<br>

<h2>JVA Game Intro gedetailleerde beschrijving</h2>
<hr>
<div>Beheerdersfuncties:</div>
<ul>
	<li>De “JVA Game Intro” staat een aantal instellingen toe. Ten eerste kunt u kiezen of u de intro wilt weergeven of niet. Als de weergave niet gewenst is, wordt het spel onmiddellijk geladen.</li>
	<li>U kunt ook uw eigen logo definiëren, waarvoor er drie opties zijn:
		<ol>
			<li>Het standaard logo verschijnt.</li>
			<li>U kunt een tekstlogo maken dat het standaard logo overschrijft.</li>
			<li>u kunt uw eigen afbeelding logo, genaamd “logo.png” maken en deze uploaden naar “[root]/arcade/start_system/jva_game_intro/images/” dat alles overschrijft.</li>
		</ol>
	</li>
	<li>Veel spellen zijn erg groot. Ze kunnen oplopen tot 100 MB. Hierdoor kan de gebruiker een lange tijd alleen een witte pagina zien en is hij van mening dat het spel is verbroken. Om dit te voorkomen, kun je de laadindicator voor de games inschakelen, zodat je kunt zien dat de game nog steeds wordt geladen.<br>
		<strong>Opmerking:</strong>deze optie is alleen van toepassing op Flash spellen. Het spel wordt alleen in de browsercache geladen. Als het niet is ingeschakeld voor de cache van uw browser, wordt het spel twee keer geladen, dus deze methode kan de start van het spel alleen maar vertragen.<br>
		<em>Deze functie is nutteloos als u de cache van de browser uitschakelt.</em>
	</li>
	<li>U kunt het aantal highscores instellen dat getoond moet worden en deze waarde kan tussen 3 en 8 liggen.</li>
	<div>Houd er rekening mee dat deze instellingen alleen kunnen worden gebruikt met een systeem dat is geactiveerd met een privé sleutel. Deze instellingen zijn niet beschikbaar op een systeem dat wordt geactiveerd met een gratis sleutel.</div>
</ul>

<div>Gebruikersfuncties:</div>
<ul>
	<li>Met de “JVA Game Intro” kunnen gebruikers de beschrijving van het spel, de besturing en de huidige toplijst bekijken voordat het spel begint.</li>
	<li>Geeft tot 8 van de best scorende gebruikers weer en laat u de huidige super kampioen kennen.</li>
</ul>

<br>

<h2>„%1$s” Communicatiefuncties</h2>
<hr>
<ul>
	<li><span>Er wordt een verbinding tot stand gebracht met de “%1$s” website wanneer een game wordt gestart.</span>
		<div><span>De verbinding zal de volgende gegevens verzenden:</span></div>
		<ol>
			<li>De gecodeerde eigen JVA Start Systeem ID (one-way hash-indeling).</li>
			<li>De huidige versie van “JVA Game Intro”.</li>
			<li>Gecodeerd adres (PHP Base64) van de website die de software gebruikt.</li>
			<li>De gecodeerde activeringssleutel (one-way hash-indeling) of “JVA Start Systeem”.</li>
			<li>De huidige versie van de phpBB Arcade.

				<br><br>

				<div><span>De rol van gegevens die moeten worden verzonden:</span></div>
				<ol>
					<li>De ID van het JVA start systeem helpt ons om uw site veilig te identificeren.</li>
					<li>De versie controle van de “JVA Game Intro” helpt om een waarschuwing te kunnen verzenden als u geen compatibele versie gebruikt of als er een nieuwe versie is uitgebracht.</li>
					<li>Het website adres is erg belangrijk omdat we op basis hiervan de informatie kunnen teruggeven die we nodig hebben.</li>
					<li>Meer over de rol van activeringssleutel:
						<ol>
							<li>Het belangrijkste verschil tussen “Test” en “Gratis” is wanneer een wachttijd is geactiveerd. “Test” geactiveerde sites kunnen een langere wachttijd hebben en de site is geclassificeerd als een “test pagina”. De geactiveerde software “Test” en “Gratis” kunnen advertenties weergeven.<br>
								De wachttijd wordt ingeschakeld en kan worden bepaald door de“%2$s”.<br>
								De “Test” en de “Gratis” versies hebben geen vervaldatum.
							</li>
							<li>Een private sleutel kan een verval datum of een specifieke phpBB Arcade versie hebben. Met privé sleutel geactiveerde software is volledig vrijgesteld van reclame. <em>Dit betreft alleen de “JVA Game Intro”</em>.</li>
						</ol>
					</li>
					<li>Bij Het controleren van de phpBB Arcade versie is ook erg belangrijk dat de “JVA Game Intro” compatibel is met de opgegeven versie.</li>
				</ol>
			</li>
		</ol>
	</li>
	<li>Met deze communicatie opties wordt het aantal keren dat spellen worden gestart opgeslagen en overgedragen naar een statistiek. Op basis van deze statistieken wordt de huidige rangorde van deze website bepaald. Voor meer informatie, klik <a onclick="window.open(this.href); return false;" href="%5$s"><strong>» HIER «</strong></a>.</li>
	<li>Als reclame wordt verzonden vanaf onze website of een wachtperiode wordt ingesteld, wordt deze zo ingesteld dat deze wordt weergegeven voordat het spel start. Als de “JVA Game Intro” niet is ingeschakeld, wordt deze automatisch geactiveerd.</li>
	<li>Deze informatie wordt op twee manieren geretourneerd:
		<ol>
			<li>Soepele update informatie stuurt u “%1$s” terug. Het verschijnt in “JAVA Game Intro”. Deze informatie is alleen zichtbaar voor de oprichters en blokkeert de game niet.</li>
			<li>Globale informatie, die de volledige “JVA Game Intro” interface gebruikt, om verdere informatie mogelijk te maken zodat het spel niet werkt.
				<div><span>De redenen voor het verschijnen van globale informatie:</span></div>
				<ol>
					<li>Er is een onmiddellijke update nodig.</li>
					<li>De activeringssleutel is verlopen. In dit geval moet u de software opnieuw activeren. Kies “Test” of “Gratis” in het configuratiescherm voor beheerders, als u een nieuwe privé sleutel hebt, kunt u deze gebruiken.</li>
					<li>De software gebruiker schendt het <strong>“<a onclick="window.open(this.href); return false;" href="%4$s" title="JVA Licenc">licentie</a>”</strong> contract, of een <strong>niet geregistreerde</strong> website wordt gebruikt. In beide gevallen kan het gebruik van de software worden uitgeschakeld.</li>
				</ol>
			</li>
		</ol>
	</li>
	<li>De “%1$s” kan de volgende informatie terugsturen:
		<ol>
			<li>Controleer websites.</li>
			<li>Wachttijd.</li>
			<li>Reclame.</li>
			<li>Informatie retour updaten.</li>
			<li>Globale informatie retour.</li>
			<li>De “%2$s” geeft aan dat het geen database wijzigingen kan en wil uitvoeren op andere websites tijdens de verbinding! Het is erg belangrijk om tijdens de verbinding 100% beveiliging te hebben tussen de twee servers.<br>Daarom kan de software alleen worden geactiveerd door de oprichter van de website.</li>
		</ol>
	</li>
	<li>Op localhost wordt het gebruik van een “JVA Game Intro” niet ondersteund, maar de software kan worden uitgevoerd. Op de localhost is er geen dataverbinding, maar de wachttijd is standaard ingesteld op 5 seconden.</li>
</ul>
</fieldset>',
));

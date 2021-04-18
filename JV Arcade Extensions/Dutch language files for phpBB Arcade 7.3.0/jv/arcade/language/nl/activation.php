<?php
/**
*
* @package phpBB Arcade
* @version $Id: activation.php 2369 2020-11-20 21:39:55Z KillBill $
* @author 2011-2021 KillBill
* @copyright (c) 2014-2021 https://jv-arcade.com/ - https://jv-arcade.com/contact
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
	'ACP_PHPBB_ARCADE_SYSTEM_EXPLAIN'				=> '<legend>Activering gedetailleerde beschrijving</legend>
Gegevens die tijdens activering worden verzonden, kunnen worden gebruikt om het statusniveau van de betreffende website te bepalen bij “%2$s”.<br>
Bovendien zal de gespecificeerde activeringssleutel ons vertellen dat de betrokken site live is of slechts een test webpagina.<br><br>
<div>Opgeslagen gegevens na activering:</div>
<ul>
	<li>Eigen phpBB Arcade ID</li>
	<li>Website adres van de activator</li>
	<li>Gebruikt phpBB versienummer</li>
	<li>Gebruikt phpBB Arcade versienummer</li>
	<li>Activatie datum</li>
	<li>Activatie sleutel</li>
	<li>Activeringsafhankelijke wachttijd om advertenties over te slaan</li>
	<li>Activeringsafhankelijke dagelijkse speellimiet</li>
</ul>

<div>Opgeslagen persoonlijke gegevens na activering:</div>
<ul>
	<li>Gebruikersnaam van de activator</li>
	<li>IP-adres van de activator</li>
	<li>E-mailadres van de activator</li>
</ul>

<div>et geregistreerde websites kunt u aanvullende persoonlijke gegevens ophalen van de “%2$s” website:</div>
<ul>
	<li>Gebruikersnaam van de activerende persoon bij”</li>
	<li>Groep van de activerende persoon bij “%2$s”</li>
	<li>E-mailadres van de activerende persoon bij “%2$s”</li>
</ul>

<div>Gebruik van gegevens:</div>
<ul>
	<li>De phpBB Arcade identifier helpt je om je site veilig te laten identificeren.</li>
	<li>Het webadres is een gelegenheid om te controleren of de website is geregistreerd op de “%2$s” website.</li>
	<li>Op basis van de phpBB en phpBB Arcade versie kunnen we bepalen of de betreffende website compatibel is of niet.</li>
	<li>De activeringssleutel bepaalt waar de betreffende website recht op heeft.</li>
	<li>De wachttijd voor advertenties is de tijd waarop de gebruiker het recht heeft om de advertentie over te slaan.</li>
	<li>De dagelijkse speellimiet beperkt het aantal spellen dat per dag kan worden gespeeld. Zodra de limiet is bereikt, kunnen er die dag geen spellen meer worden gespeeld.</li>
</ul>

<div>Gebruik van persoonlijke gegevens:</div>
<ul>
	<li>De gebruikersnaam biedt de mogelijkheid om te bepalen of de betreffende gebruiker gekend is op de “%2$s” website.</li>
	<li>Het IP-adres wordt gebruikt wanneer de gebruiker een wet overtreed of een strafbaar feit heeft begaan.</li>
	<li>Het e-mailadres wordt gebruikt wanneer we contact moeten opnemen met de betrokken gebruiker.</li>
</ul>

<br>

<h2>JVA Game Intro gedetailleerde beschrijving</h2>
<hr>
<div>Beheerder functies:</div>
<ul>
	<li>De “JVA Game Intro” laat een aantal instellingen toe. Ten eerste kunt u kiezen of u de intro wel of niet wilt weergeven. Als de weergave niet gewenst is, wordt het spel onmiddellijk geladen.</li>
	<li>U kunt ook uw eigen logo definiëren, waarvoor er drie opties zijn:
		<ol>
			<li>Het basislogo verschijnt.</li>
			<li>U kunt een tekstlogo maken dat het basislogo overschrijft.</li>
			<li>U kunt uw eigen afbeeldingslogo maken met de naam "logo.png" en het uploaden naar “[root]/arcade/assets/animations/game_intro/images/” die voorrang heeft op alles.</li>
		</ol>
	</li>
	<li>Veel spellen zijn erg groot. Ze kunnen maximaal 100 MB groot zijn. Hierdoor kan het gebeuren dat de gebruiker gedurende lange tijd een witte pagina ziet laden en denkt dat het spel kapot is. Om dit te voorkomen, kunt u de laadindicator voor de spellen inschakelen, zodat u kunt zien dat het spel nog steeds wordt geladen.<br>
		<strong>Opmerking:</strong> Het wordt alleen in de browsercache geladen. Als het niet is ingeschakeld voor uw browsercache, wordt het spel twee keer geladen, dus deze methode kan het starten van de spellen alleen maar vertragen.<br>
		<em>Deze functie is nutteloos als u het cachegeheugen van de browser uitschakelt.</em>
	</li>
	<li>U kunt het aantal highscores instellen dat moet worden weergegeven en deze waarde kan tussen 3 en 8 liggen.</li>
	<div>Houd er rekening mee dat deze instellingen alleen kunnen worden gebruikt met een systeem dat is geactiveerd door een privésleutel. Deze instellingen zijn niet beschikbaar op een systeem geactiveerd door een vrije sleutel.</div>
</ul>

<div>Gebruikersfuncties:</div>
<ul>
	<li>Met de “JVA Game Intro” kunnen gebruikers de spelbeschrijving, besturing en de huidige toplijst zien voordat het spel begint.</li>
	<li>Geeft maximaal 8 van de hoogst scorende gebruikers weer en laat u weten wie de huidige superkampioen is.</li>
</ul>

<br>

<h2>„%1$s” Communicatiefuncties</h2>
<hr>
<ul>
	<li><span>Er wordt verbinding gemaakt met de “%1$s” website wanneer een spel wordt gestart.</span>
		<div><span>De verbinding verzendt de volgende gegevens:</span></div>
		<ol>
			<li>De gecodeerde eigen phpBB Arcade identifier (éénrichtings hash-indeling).</li>
			<li>TDe huidige versie van “JVA Game Intro”.</li>
			<li>Gecodeerd adres (PHP Base64) van de website die de software gebruikt.</li>
			<li>De gecodeerde activeringssleutel (éénrichtings hash-indeling) van “phpBB Arcade”.</li>
			<li>De huidige versie van de phpBB Arcade.</li>
			<li>De huidige versie van de phpBB.

				<br><br>

				<div><span>De rol van de te verzenden gegevens:</span></div>
				<ol>
					<li>De phpBB Arcade ID helpt ons om uw site veilig te identificeren.</li>
					<li>De versiecontrole van “JVA Game Intro” helpt om een waarschuwing te kunnen sturen als u geen compatibele versie gebruikt of als er een nieuwe versie is uitgebracht.</li>
					<li>Het websiteadres is erg belangrijk omdat we op basis hiervan de informatie kunnen retourneren die we nodig hebben.</li>
					<li>Meer over de rol van activeringssleutel:
						<ol>
							<li>Het belangrijkste verschil tussen “Test” en “Gratis” is wanneer een wachttijd wordt geactiveerd. “Test” geactiveerde sites kunnen een langere wachttijd hebben, en de site is geclassificeerd als een “Testpagina”. De “Test” en “Gratis” geactiveerde software kan advertenties weergeven en kan het aantal keer spelen beperken.<br>
								De wachttijd wordt ingeschakeld en kan worden bepaald door de “%2$s”.<br>
								Het maximale aantal keer spelen wordt ingeschakeld en kan worden bepaald door de “%2$s”.<br>
								De “Test” en de “Gratis”versies hebben geen vervaldatum.
							</li>
							<li>Een privésleutel kan een vervaldatum hebben of een bepaalde phpBB Arcade-versie. Door een privésleutel geactiveerde software is volledig vrijgesteld van reclame. <em>Dit betreft alleen de “JVA Game Intro”</em>.<br>Bovendien zijn websites die een privésleutel gebruiken niet verbonden aan een dagelijkse speellimiet.</li>
						</ol>
					</li>
					<li>Bij het controleren van de phpBB Arcade versie is het ook erg belangrijk dat de “JVA Game Intro” compatibel is met de gegeven versie.</li>
				</ol>
			</li>
		</ol>
	</li>
	<li>Met deze communicatie opties wordt het aantal keren dat spellen worden gestart opgeslagen en overgebracht naar een statistiek. Op basis van deze statistieken wordt de huidige positie van deze website bepaald. Voor meer informatie, klik <a onclick="window.open(this.href); return false;" href="%5$s"><strong>» HIER «</strong></a>.</li>
	<li>Als er advertenties worden verzonden vanaf onze website of als er een wachttijd is ingesteld, wordt deze zo ingesteld dat deze verschijnt voordat het spel begint. Als de “JVA Game Intro” niet is ingeschakeld, wordt deze automatisch geactiveerd.</li>
	<li>Als het aantal spellen per dag beperkt is, kunnen er die dag geen spellen meer worden gespeeld op websites die de maximale waarde overschrijden.</li>
	<li>Deze informatie wordt op twee manieren geretourneerd:
		<ol>
			<li>Soepele update informatie stuurt “%1$s” naar u terug. Het verschijnt in “JVA Game Intro”. Deze informatie is alleen zichtbaar voor de oprichters en blokkeert het spel niet.</li>
			<li>Globale informatie, die de volledige “JVA Game Intro” interface gebruikt, om meer informatie mogelijk te maken zodat het spel niet werkt.
				<div><span>De redenen voor het verschijnen van globale informatie:</span></div>
				<ol>
					<li>Een onmiddellijke update is nodig.</li>
					<li>Als een speltype niet wordt ondersteund.</li>
					<li>Als een website de dagelijkse limiet bereikt.</li>
					<li>De activeringssleutel is verlopen. In dat geval moet u de software opnieuw activeren. Kies “Test” or “Gratis” in het configuratiescherm voor beheerders. Als u een nieuwe privésleutel heeft, kunt u deze gebruiken.</li>
					<li>De softwaregebruiker schendt het <strong>“<a onclick="window.open(this.href); return false;" href="%4$s" title="JVA Licenc">licentie</a>”</strong> contract, of er wordt een <strong>niet geregistreerde</strong> website gebruikt. In beide gevallen kan het gebruik van de software worden uitgeschakeld.</li>
				</ol>
			</li>
		</ol>
	</li>
	<li>De “%1$s” kan de volgende informatie terugsturen:
		<ol>
			<li>Controleer websites.</li>
			<li>Wachttijd.</li>
			<li>Adverteren.</li>
			<li>Terugkerende update informatie.</li>
			<li>Terugkerende globale informatie.</li>
			<li>De “%2$s” geeft aan dat het geen wijzigingen in de database kan en wil aanbrengen die tijdens de verbinding op andere websites zijn geïmplementeerd! Het is erg belangrijk om tijdens de verbinding 100 procent veiligheid te hebben tussen de twee servers.<br>Daarom kan de software alleen geactiveerd worden door de oprichter van de website.</li>
		</ol>
	</li>
	<li>Op localhost wordt het gebruik van een “JVA Game Intro” niet ondersteund, maar de software kan wel draaien. Op de localhost is er geen dataverbinding, maar de wachttijd staat standaard ingesteld op 5 seconden.</li>
</ul>
</fieldset>',
	'ACP_PHPBB_ARCADE_SYSTEM_INSTRUCTION'			=> 'phpBB Arcade instructies',
	'ACP_PHPBB_ARCADE_SYSTEM_INSTRUCTION_EXPLAIN'	=> 'De “phpBB Arcade” software is <a onclick="window.open(this.href); return false;" href="%3$s" title="JVA License">gelicenseerd</a> en onderhouden door de “%1$s” website.',
));

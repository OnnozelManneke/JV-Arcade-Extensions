<?php
/**
*
* @package phpBB Arcade
* @version $Id: help_developer.php 2386 2021-02-03 20:47:02Z KillBill $
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
	'ARCADE_ACP_HELP_FAQ_BLOCK_GENERAL'					=> 'Algemeen',
	'ARCADE_ACP_HELP_FAQ_BLOCK_INSTALL'					=> 'Installeren/Updaten/Verwijderen',
	'ARCADE_ACP_HELP_FAQ_BLOCK_SCORING'					=> 'Scoren',
	'ARCADE_ACP_HELP_FAQ_BLOCK_GAMES'					=> 'Spellen',
	'ARCADE_ACP_HELP_FAQ_BLOCK_MODULES'					=> 'phpBB Arcade modules',
	'ARCADE_ACP_HELP_FAQ_BLOCK_DATA'					=> 'Toon arcade data buiten de arcade',
// step 1
	'ARCADE_ACP_HELP_FAQ_GENERAL_FEATURES_ANSWER'		=> '<ul>
																<li>Uitgebreide arcade support</li>
																<li>Ongelimiteerde categorieën, sub categorieën en linken (bootst phpBB3 forums na)</li>
																<li>Volledige Beheerderspaneel, Moderatorpaneel en Gebruikerspaneel modules</li>
																<li>Beheerder permissies voor ACP modules</li>
																<li>Moderator permissies voor MCP modules</li>
																<li>Globale arcade gebaseerde permissies</li>
																<li>Lokale categorie gebaseerde permissies</li>
																<li>Beveiligde categorieën met wachtwoord</li>
																<li>Leeftijd beveiligde categorieën</li>
																<li>Hele simpele spel installatie</li>
																<li>Converteer automatisch alle ondersteunde speltype tar bestanden</li>
																<li>Toont wie is welk spel aan het spelen</li>
																<li>Favoriete spel systeem</li>
																<li>Ingebouwd spel download systeem</li>
																<li>Gedetailleerde statistieken</li>
																<li>Spel rating systeem</li>
																<li>Spel commentaar systeem</li>
																<li>Spel rapporteer systeem</li>
																<li>Speel spellen in een normaal of een pop-up venster</li>
																<li>Zoek systeem voor spellen</li>
																<li>Punten Systeem integratie</li>
																<li>Plus meer…</li>
															</ul>',
	'ARCADE_ACP_HELP_FAQ_GENERAL_FEATURES_QUESTION'		=> 'Welke functies zijn opgenomen in phpBB Arcade?',

	'ARCADE_ACP_HELP_FAQ_GENERAL_STYLES_ANSWER'			=> '<ul>
																<li>Ondersteunde stijlen kunnen <b><a onclick="window.open(this.href); return false;" href="https://jv-arcade.com/phpBB_Arcade_Styles.html">HIER worden gedownload</a></b>.</li>
																<li>Als je een nieuwe stijl hebt, deel deze dan met ons: <b><a onclick="window.open(this.href); return false;" href="https://jv-arcade.com/phpBB_Arcade_User_Styles.html">HIER</a></b>.</li>
															</ul>',
	'ARCADE_ACP_HELP_FAQ_GENERAL_STYLES_QUESTION'		=> 'Welke stijlen worden ondersteund?',

	'ARCADE_ACP_HELP_FAQ_GENERAL_LANGS_ANSWER'			=> '<ul>
																<li>Ondersteunde talen kunnen <b><a onclick="window.open(this.href); return false;" href="https://jv-arcade.com/phpBB_Arcade_Languages.html">HIER gedownload worden</a></b>.</li>
																<li>Als je een nieuw taalpakket hebt gemaakt, deel dit dan met ons: <b><a onclick="window.open(this.href); return false;" href="https://jv-arcade.com/phpBB_Arcade_User_Languages.html">HIER</a></b>.</li>
															</ul>',
	'ARCADE_ACP_HELP_FAQ_GENERAL_LANGS_QUESTION'		=> 'Welke talen worden ondersteund?',

	'ARCADE_ACP_HELP_FAQ_GENERAL_STYLES_IMG_ANSWER'		=> 'Ja, elke afbeelding die zich in het standaard afbeelding pad bevind “[ROOT]/ext/jv/arcade/styles/all/theme/images/” kan stijl specifiek zijn. Al wat je hoeft te doen is een afbeelding te plaatsen met dezelfde naam in de “[ROOT]/ext/jv/arcade/styles/your_style/theme/images/” folder. Als een stijl de specifieke afbeelding niet heeft zal de standaard afbeelding gebruikt worden. Dit geldt ook voor categorie afbeeldingen. Om gebruik te maken van stijl gespecificeerde categorie afbeeldingen moet je eerst de standaard “[ROOT]/ext/jv/arcade/styles/all/theme/images/cats/” afbeelding kiezen tijdens het maken/bewerken van de categorie en dan de afbeelding uploaden met dezelfde naam naar de “[ROOT]/ext/jv/arcade/styles/your_style/theme/images/cats/” folder.',
	'ARCADE_ACP_HELP_FAQ_GENERAL_STYLES_IMG_QUESTION'	=> 'Kan ik stijl gespecificeerde afbeeldingen gebruiken in de arcade?',
// step 2
	'ARCADE_ACP_HELP_FAQ_INSTALL_DB_ANSWER'				=> 'De arcade moet correct werken met elke database die wordt ondersteund door phpBB3.',
	'ARCADE_ACP_HELP_FAQ_INSTALL_DB_QUESTION'			=> 'Welke databases worden ondersteund door de phpBB Arcade?',

	'ARCADE_ACP_HELP_FAQ_INSTALL_INSTALL_ANSWER'		=> '<ul>
																<li>Download de nieuwste release en pak uit.</li>
																<li>Kopieer de bestanden naar uw server in de “[ROOT]/” directory van het forum terwijl u de structuur van mappen behoudt.</li>
																<li>Ga naar het Beheerderspaneel en klik op het menu-item “Aanpassen”, klik er binnenin op de phpBB Arcade “Inschakelen” link om de phpBB Arcade te installeren.</li>
															</ul>',
	'ARCADE_ACP_HELP_FAQ_INSTALL_INSTALL_QUESTION'		=> 'Hoe installeer ik de phpBB Arcade?',

	'ARCADE_ACP_HELP_FAQ_INSTALL_UPDATE_ANSWER'			=> '<ul>
																<li>Download de nieuwste release en pak deze uit.</li>
																<li>Ga naar het Beheerderspaneel en klik op het menu item “Aanpassingen”, daar klik je op de link phpBB Arcade "Uitschakelen".</li>
																<li>Kopieer de bestanden naar uw server naar de forum “[ROOT]/” folder terwijl u de mappenstructuur behoudt.</li>
																<li>Ga naar het Beheerderspaneel en klik op het menu item “Aanpassingen”, klik daar op de link phpBB Arcade "Inschakelen" en je phpBB Arcade wordt bijgewerkt.</li>
															</ul>',
	'ARCADE_ACP_HELP_FAQ_INSTALL_UPDATE_QUESTION'		=> 'Hoe update ik de phpBB Arcade?',

	'ARCADE_ACP_HELP_FAQ_INSTALL_UNINSTALL_ANSWER'		=> 'Ga naar het Beheerderspaneel en klik op het menu-item “Aanpassen”. Klik binnenin op de koppeling phpBB Arcade “Uitschakelen”. Klik daarna op de link “Gegevens verwijderen” en verwijder vervolgens alle phpBB Arcade-bestanden van de server.',
	'ARCADE_ACP_HELP_FAQ_INSTALL_UNINSTALL_QUESTION'	=> 'Hoe verwijder ik de phpBB Arcade?',
// step 3
	'ARCADE_ACP_HELP_FAQ_SCORING_SAVE_ANSWER'			=> 'Het eerste wat je moet controleren is of het spel type ondersteund wordt door de arcade, en dat de score variabele correct is ingesteld. Het laatste wat je moet controleren zijn de cookie instellingen in het beheerderspaneel. Indien je site url <strong>http://www.voorbeeld.com</strong> is, dan moet het cookie domein <strong>.voorbeeld.com</strong> zijn. Ook de cookie beveiliging moet uitgeschakeld worden, want de cookie beveiliging ondersteund enkel phpBB Arcade spel types.',
	'ARCADE_ACP_HELP_FAQ_SCORING_SAVE_QUESTION'			=> 'Waarom worden mijn scores niet opgeslagen?',

	'ARCADE_ACP_HELP_FAQ_SCORING_GUEST_SAVE_ANSWER'		=> 'Ook als je de gast groep permissies geeft om scores op te slagen zal deze groep geen scores kunnen verzenden. Dit is zo gecodeerd.',
	'ARCADE_ACP_HELP_FAQ_SCORING_GUEST_SAVE_QUESTION'	=> 'Waarom kunnen gasten geen scores inzenden, ook al zijn de permissies goed ingesteld?',

	'ARCADE_ACP_HELP_FAQ_SCORING_TEST_CAT_ANSWER'		=> 'Ga naar de “Beheer arcade” beheerderspaneel module. Klik op bewerken bij de categorie. Je moet de “Test modus” inschakelen en dan de “Test modus” instellen op ja.',
	'ARCADE_ACP_HELP_FAQ_SCORING_TEST_CAT_QUESTION'		=> 'Hoe schakel ik de “Test modus” in voor een categorie?',

	'ARCADE_ACP_HELP_FAQ_SCORING_TEST_ANSWER'			=> 'Hiermee kun je nu spellen spelen in een categorie en er worden geen gegevens of scores opgeslagen. Hiermee kun je spellen testen om er zeker van te zijn dat ze correct werken. Als je klaar bent met een spel, krijg je een bericht te zien waarin staat wat er zou zijn gebeurd. Aan het einde van het spel ontvangen beheerders gedetailleerde informatie over het spel als het “phpBB-DEBUG” systeem is ingeschakeld.<br><em>Om het “phpBB-DEBUG” systeem in te schakelen, moeten we de “JVA - Debug” extensie installeren.</em>',
	'ARCADE_ACP_HELP_FAQ_SCORING_TEST_QUESTION'			=> 'Wat doet de “Test modus”?',
// step 4
	'ARCADE_ACP_HELP_FAQ_GAMES_TYPE_ANSWER'				=> 'De arcade ondersteunt de volgende speltypen:<br>
															<ul>
																<li>Html5</li>
																<li>Flash - Geconverteerd naar Html5.</li>
															</ul>',
	'ARCADE_ACP_HELP_FAQ_GAMES_TYPE_QUESTION'			=> 'Welke speltypen worden ondersteund?',													

	'ARCADE_ACP_HELP_FAQ_GAMES_SAVE_TYPE_ANSWER'		=> 'De arcade ondersteunt de volgende soorten opslag van spellen:<br>
															<ul>
																<li>phpBB Arcade</li>
																<li>IBPro</li>
																<li>IBPro V32</li>
																<li>Relax Arcade</li>
																<li>Olympus Arcade</li>
																<li>Spellen zonder score</li>
															</ul>',
	'ARCADE_ACP_HELP_FAQ_GAMES_SAVE_TYPE_QUESTION'		=> 'Welke soorten opslag spellen worden ondersteund?',

	'ARCADE_ACP_HELP_FAQ_GAMES_INSTALL_ANSWER'			=> 'De makkelijkste manier zou zijn om spellen te gebruiken die reeds in phpBB Arcade of IBPro tar formaat zijn. Je kan ook spel pakketten gebruiken voor de Arcade kamer indien ze een .xml bestand bevatten. De arcade zal automatisch het spel type detecteren dat je aan het uploaden of aan het uitpakken bent en zal het converteren naar het juiste formaat om te installeren.',
	'ARCADE_ACP_HELP_FAQ_GAMES_INSTALL_QUESTION'		=> 'Wat is de makkelijkste manier om spellen te installeren?',

	'ARCADE_ACP_HELP_FAQ_GAMES_REQ_INSTALL_ANSWER'		=> 'Als je een spel wilt uploaden en installeren die al is uitgepakt, zijn dit de volgende stappen:<br>
															In de <strong>“games”</strong> folder moet je de belangrijkste bestanden van het spel uploaden die nodig zijn voor de installatie, dit zijn de volgende:<br>
															<b>Html5</b>
															<ul>
																<li>1. test.php (Game installatiebestand)</li>
																<li>2. test.png (Spelafbeelding 60x60 px)</li>
																<li>3. index.html (Het bestand index.html is verantwoordelijk voor het starten van het spel.)</li>
															</ul>
															<br>
															<b>Flash</b>
															<ul>
																<li>1. test.php (Game installatiebestand)</li>
																<li>2. test.png (Spelafbeelding 60x60 px)</li>
																<li>3. test.swf (Het bestand test.swf is verantwoordelijk voor het starten van het spel.)</li>
																<li>4. index.htm (The index.htm is an empty file.)</li>
																<li>5. gd/ (Als de game een map “gamedata” heeft, hernoem je deze naar “gd” omdat de naam van de gamedata map niet langer wordt ondersteund.)</li>
															</ul>
															<br>
															De naam van de gamemap moet altijd overeenkomen met de naam van het spel installatiebestand.
															<br><br>
															Dus in dit geval is de juiste mapstructuur als volgt:<br>
															<ul>
																<li>1. <strong>[ROOT]/arcade/games/test/</strong>test.php</li>
																<li>2. <strong>[ROOT]/arcade/games/test/</strong>index.html (Het bestand index.html is verantwoordelijk voor het starten van het spel.)</li>
															</ul>
															<br>
															Het bestand <strong>“index.html”</strong> kan maar één keer worden opgenomen. De juiste bestandsnaam is <strong>“index.htm”</strong> voor een leeg bestand om de submappen te beschermen.',
	'ARCADE_ACP_HELP_FAQ_GAMES_REQ_INSTALL_QUESTION'	=> 'Wat is er nodig om het spel te installeren?',

	'ARCADE_ACP_HELP_FAQ_GAMES_HOW_INSTALL_ANSWER'		=> 'Er zijn drie manieren om een ​​game te installeren.<br>
															<ul>
																<li>Als je het spel downloadt met het ingebouwde downloadsysteem van phpBB Arcade, krijg je een gecomprimeerde map die je kunt uploaden via FTP naar <strong>[ROOT]/arcade/install/</strong> en installeren via het beheerderspaneel.</li>
																<li>Als je het spel downloadt met het ingebouwde downloadsysteem van phpBB Arcade, krijg je een gecomprimeerde map die je kunt uploaden via de beheerderspaneel Upload/Uitpakken module. Na het uploaden wordt het spel automatisch uitgepakt en kunt u het spel aan de arcade toevoegen.</li>
																<li>Derde optie is om FTP te gebruiken. Upload het reeds uitgepakte spel naar de juiste locatie. De hoofdbestanden van het spel bevatten de map <strong>“[ROOT]/arcade/games/”</strong>, terwijl de game de map <strong>“[ROOT]/arcade/gamedata/”</strong> bevat.</li>
															</ul>',
	'ARCADE_ACP_HELP_FAQ_GAMES_HOW_INSTALL_QUESTION'	=> 'Hoe kan ik een spel installeren?',

	'ARCADE_ACP_HELP_FAQ_GAMES_ZIP_ANSWER'				=> 'Ja. Voor de juiste compressie is de volgende map structuur vereist:<br>
															<ul>
																<li>test/ (Game folder)</li>
																<li>test/test.php (Spel installatiebestand)</li>
																<li>test/test.png (Spelafbeelding 60x60 px)</li>
																<li>test/index.html (Het bestand index.html is verantwoordelijk voor het starten van het spel.)</li>
															</ul>
															<br>Als dat in orde is, kun je het spel direct inpakken. Het voltooide gecomprimeerde bestand zal de juiste naam test.zip of test.tar zijn.',
	'ARCADE_ACP_HELP_FAQ_GAMES_ZIP_QUESTION'			=> 'Kan ik mijn eigen gecomprimeerd bestand maken om een spel te installeren?',

	'ARCADE_ACP_HELP_FAQ_GAMES_INS_FILE_ANSWER'			=> 'Ja.<br><textarea rows="30" cols="30" readonly="readonly" onclick="this.focus(); this.select();">&lt;?php
/**
*
* @package phpBB Arcade
* @version 7.1.0
* @author 2011-2021 KillBill
* @copyright (c) 2014-2021 https://jv-arcade.com/ - https://jv-arcade.com/contact
* @license https://jv-arcade.com/License.html JVA License v1
*
*/

/**
*	phpBB Arcade spel installatiebestand
*
*	Hieronder staat wat informatie over parameters die moeten worden ingesteld om een ​​spel te kunnen
*	installeren in de arcade. Je hebt dit bestand nodig om het spel te tonen in
*	de phpBB Arcade Beheerderspaneel en om te installeren.
*
*	De enige items die moeten worden ingesteld, zijn de naam, beschrijving, controller,
*	breedte, hoogte, type score en opslagtype voor score.
*
*	De arcade ondersteunt verschillende soorten spellen voor het opslaan van scores. (PhpBB Arcade, IBPro,
*	IBProV32, Relax Arcade, Olympus Arcade en spellen die geen scores indienen)
*	Gebruik de volgende constanten voor het opslaan van scores:
*
*	PHPBBARCADE_GAME
*	IBPRO_GAME
*	IBPROV3_GAME
*	PHPBB_RA_GAME
*	OLYMPUS_GAME
*	NOSCORE_GAME
*
*	De spel besturing moet worden ingesteld met behulp van de volgende constanten::
*
*	GAME_CONTROL_KEYBOARD
*	GAME_CONTROL_KEYBOARD_TOUCH
*	GAME_CONTROL_MOUSE_TOUCH
*
*	Gebruik de constante GAME_CONTROL_KEYBOARD als het spel alleen op een toetsenbord kan worden gespeeld.
*	Gebruik de constante GAME_CONTROL_KEYBOARD_TOUCH als het spel op het toetsenbord of touchscreen kan worden gespeeld.
*	Gebruik de constante GAME_CONTROL_MOUSE_TOUCH als het spel met de muis of het touchscreen kan worden gespeeld.
*	Als u een aanvullende beschrijving wilt maken van hoe het spel te spelen en met welke toetsen, kunt u het in het “game_control_desc” veld beschrijven.
*
*	Gebruik een van de volgende constanten om “game_own_ratio” in of uit te schakelen:
*
*	ARCADE_SET_DISABLED
*	ARCADE_SET_ENABLED
*
*	Gebruik de constante ARCADE_SET_DISABLED als je wilt dat de grootte van het spel evenredig is met de vensterverhouding.
*	Gebruik de constante ARCADE_SET_ENABLED als je wilt dat de grootte van het spel evenredig is aan de verhouding van het spel.
*	Schakel deze optie alleen in als het spel in dit geval alleen perfect kan worden weergegeven.
*	Deze instelling is van invloed op spellen op volledig scherm en pop-up.
*
*	Het scoretype moet worden ingesteld met behulp van de volgende constanten:
*
*	SCORETYPE_HIGH
*	SCORETYPE_LOW
*
*	SCORETYPE_HIGH is voor spellen die zo scoren dat de beste score de
*	hoogste is. SCORETYPE_LOW is voor spellen die zo scoren dat de
*	beste score de laagste is.
*/

// ONTWIKKELAARS LET OP gewijzigd - (\'game_name\', \'game_desc\', \'game_control_desc\')
//
// Alle installatiebestanden moeten UTF-8 gebruiken als hun codering en de bestanden mogen geen BOM bevatten.
//
// Sommige tekens die u mogelijk wilt kopiëren en plakken: ‚ ‘ ’ « » „ “ ” …
/*
if (!defined(\'IN_PHPBB\') || !defined(\'IN_PHPBB_ARCADE\'))
{
	exit;
}

$game_file = basename(__FILE__, \'.\' . substr(strrchr(__FILE__, \'.\'), 1));

$game_data = array(
	\'game_name\'			=> \'Spel naam\',
	\'game_desc\'			=> \'Vul hier de beschrijving van het spel in.\',
	\'game_control\'		=> GAME_CONTROL_MOUSE,
	\'game_control_desc\'	=> \'Voer een beschrijving in van de benodigde besturing van het spel.\',
	\'game_image\'			=> $game_file . \'.png\',
	\'game_scorevar\'		=> $game_file,
	\'game_width\'			=> 370,
	\'game_height\'			=> 550,
	\'game_own_ratio\'		=> ARCADE_SET_DISABLED,
	\'game_scoretype\'		=> SCORETYPE_HIGH,
	\'game_save_type\'		=> PHPBBARCADE_GAME,
	\'game_inherit\'		=> \'Voer het overnamepad van het spel in, indien nodig.\',
	\'privacy_desc\'		=> \'Voer hier het Privacybeleid van de game in als het spel dit vereist.\',
	\'privacy_link\'		=> \'Voer de link naar het Privacybeleid van het spel in HTML indeling in. Als er meer dan één link is, voert u deze allemaal in op hun eigen nieuwe regel.\'
);

?&gt;</textarea>',
	'ARCADE_ACP_HELP_FAQ_GAMES_INS_FILE_QUESTION'		=> 'Is er een voorbeeld installatie bestand?',

	'ARCADE_ACP_HELP_FAQ_GAMES_OWN_INS_FILE_ANSWER'		=> 'Nee, hoewel het mogelijk is dat er twee gereedschappen in het phpBB Arcade beheerderspaneel zitten die in deze taak zullen helpen.<br>
															<ul>
																<li>Er is een gereedschap om het bestand aan te maken en te installeren vanuit niks. Voer alle benodigde informatie in en het installatie bestand wordt als een download aangeboden, getoond of aangemaakt op de server.</li>
																<li>Er is een gereedschap om bestaande installatie bestanden te downloaden of te bekijken van een spel dat reeds geïnstalleerd is.</li>
															</ul>',
	'ARCADE_ACP_HELP_FAQ_GAMES_OWN_INS_FILE_QUESTION'	=> 'Moet ik het installatie bestand handmatig aanmaken?',

	'ARCADE_ACP_HELP_FAQ_GAMES_DELETE_ANSWER'			=> 'U kunt spellen verwijderen door op de module “Categorieën beheren” of “Spellen beheren” in het beheerderspaneel te klikken en een spel te selecteren om te verwijderen. U krijgt de optie om de bestanden van de server te verwijderen wanneer u het spel verwijdert. Gebruik deze optie alleen als je niet van plan bent het spel opnieuw te installeren. Om goed te kunnen werken, moet je ervoor zorgen dat je de juiste rechten hebt ingesteld op de server om bestanden te verwijderen.',
	'ARCADE_ACP_HELP_FAQ_GAMES_DELETE_QUESTION'			=> 'Hoe verwijder ik games?',
// step 5
	'ARCADE_ACP_HELP_FAQ_MODULES_ANSWER'				=> '<strong><br>De arcade bevat de volgende beheerderspaneel modules:<br></strong>
															<strong>Configuratie</strong><br>
															<ul>
																<li><strong>Algemene Instellingen</strong> - Beheer de algemene instellingen voor de arcade.</li>
																<li><strong>Extensie Instellingen</strong> - Beheer de extensie instellingen voor de arcade.</li>
																<li><strong>Spel Instellingen</strong> - Beheer de spel instellingen voor de arcade</li>
																<li><strong>Uitdaging instellingen</strong> - Beheer de uitdaging instellingen voor de arcade.</li>
																<li><strong>Toernooi instellingen</strong> - Beheer de toernooi instellingen voor de arcade.</li>
																<li><strong>Functie instellingen</strong> - Beheer de functie instellingen voor de arcade.</li>
																<li><strong>Pagina instellingen</strong> - Beheer de pagina instellingen voor de arcade.</li>
																<li><strong>Pad instellingen</strong> - Beheer de pad instellingen voor de arcade</li>
																<li><strong>Laad instellingen</strong> - Laad instellingen voor de arcade.</li>
																<li><strong>Instellingen voor activiteitenrang</strong> - Instellingen voor activiteitenrang voor de arcade.</li>
															</ul><br>
															<strong>Beheer arcade</strong><br>
															<ul>
																<li><strong>Beheer menu</strong> - Je kan menu-knoppen toevoegen, bewerken of verwijderen. De hoofd menu-knoppen kunnen alleen worden verplaatst of hernoemd.</li>
																<li><strong>Beheer categorieën</strong> - Toevoegen, wijzigen, verwijderen, verplaatsen en hersynchroniseren van categorieën en spellen</li>
																<li><strong>Beheer spellen</strong> - Wijzigen/verwijderen van spellen</li>
																<li><strong>Beheer gebruikers</strong> - Scores wijzigen van alle spellen</li>
																<li><strong>Beheer toernooien</strong> - Wijzigen/verwijderen toernooien.</li>
																<li><strong>Beheer mededelingen</strong> - Wijzigen/verwijderen mededelingen.</li>
																<li><strong>Beheer rangen</strong> - Rangen aanmaken/wijzigen/verwijderen.</li>
															</ul><br>
															<strong>Spel functies</strong><br>
															<ul>
																<li><strong>Spellen toevoegen</strong> - Een spel toevoegen aan de arcade, meerdere spellen kunnen worden toegevoegd aan een categorie in één keer</li>
																<li><strong>Uploaden/Uitpakken spellen</strong> - De arcade/games folder bevat ingepakte spellen. Je kan ze uitpakken of uploaden via de <strong>Bladeren</strong> knop. Na het uitpakken zijn de spellen klaar voor installatie.</li>
																<li><strong>Back-up spellen</strong> - Maak een reservekopie van alle spellen in de geselecteerde categorie</li>
																<li><strong>Download spellen</strong> - Spellen downloaden van websites die spel downloads aanbieden klaar om gebruikt te worden in de arcade.</li>
															</ul><br>
															<strong>Nuttige modules</strong><br>
															<ul>
																<li><strong>Meldingen bekijken</strong> - Bekijk alle spel meldingen die ingezonden zijn door de leden.</li>
																<li><strong>Verwijderde spellen</strong> - Bekijk verwijderde games en de oorzaken ervan.</li>
																<li><strong>Verbannen gebruiker</strong> - Bekijk verbannen gebruikers/ ontban ze</li>
																<li><strong>Download Statistieken</strong> - Bekijk de statistieken van het download systeem.</li>
																<li><strong>Spel installatie bestand aanmaken</strong> - Nieuw installatie bestand aanmaken om gedownload/bekeken/opgeslagen te worden op de server of bestaande spel installatie bestanden downloaden/bekijken.</li>
																<li><strong>Gebruikersgids</strong> - Laat de phpBB Arcade gebruikersgids zien</li>
															</ul><br>
															<strong>Arcade logs</strong><br>
															<ul>
																<li><strong>Beheerders log</strong> - Beheerders acties worden opgeslagen.</li>
																<li><strong>Moderator log</strong> - Moderator acties worden opgeslagen.</li>
																<li><strong>Gebruikers log</strong> - Gebruikers acties worden opgeslagen.</li>
																<li><strong>Fouten log</strong> - Diverse fouten worden opgeslagen.</li>
															</ul><br>
															<strong>Permissies rollen</strong><br>
															<ul>
																<li><strong>Categorie rollen</strong> - Beheer de rollen voor arcade categorie permissies.</li>
															</ul><br>
															<strong>Categorie gebaseerde permissies</strong><br>
															<ul>
																<li><strong>Categorie permissies</strong> - Beheer welke gebruikers en groepen gebruik kunnen maken van welke arcade categorieën.</li>
																<li><strong>Gebruikers categorie permissies</strong> - Wijs arcade permissies toe aan gebruikers.</li>
																<li><strong>Groepen categorie permissies</strong> - Wijs arcade permissies toe aan groepen.</li>
																<li><strong>Kopieer categorie permissies</strong> - Kopieer categorie permissies van een categorie naar 1 of meerdere categorieën</li>
															</ul><br>
															<strong>Permissie maskers</strong><br>
															<ul>
																<li><strong>Bekijk categorie-gebaseerde permissies</strong> - Bekijk de arcade permissies die zijn toe gewezen aan de geselecteerde gebruikers/groepen en categorieën.</li>
															</ul><br>
															<strong>Installatie functies</strong><br>
															<ul>
																<li><strong>Installatie verifiëren</strong> - Controleer of phpBB Arcade correct is geïnstalleerd.</li>
																<li><strong>Spel gegevens bijwerken</strong> - Spellen grootte automatische detectie en update, als de gegevens niet correct zijn.</li>
																<li><strong>Spel installatiebestanden converteren</strong> - Spel installatiebestanden converteren naar de nieuwste versie.</li>
															</ul><br>
															<strong>De arcade heeft de volgende moderators paneel modules:</strong><br>
															<ul>
																<li><strong>Beheer spellen</strong> - Spel wijzigen/verplaatsen en resetten.</li>
																<li><strong>Beheer toernooien</strong> - Toernooien aanmaken,wijzigen.</li>
															</ul><br>
															<strong>De arcade heeft de volgende gebruikerspaneel modules:</strong><br>
															<ul>
																<li><strong>Beheer instellingen</strong> - Deze instellingen bepalen verschillende aspecten van de arcade.</li>
																<li><strong>Spel instellingen</strong> - Personaliseer de instellingen voor de spelpagina.</li>
																<li><strong>Post instellingen</strong> - Post personalisatie-instellingen.</li>
																<li><strong>Beheer favorieten</strong> - Bekijk markeer, en verwijder je favorieten spellen hieronder.</li>
															</ul>',
	'ARCADE_ACP_HELP_FAQ_MODULES_QUESTION'				=> 'Welke beheerderspaneel modules heeft phpBB Arcade?',

	'ARCADE_ACP_HELP_FAQ_MODULES_AUTH_ANSWER'			=> 'Om alle modules te kunnen zien moet je een oprichter zijn of de juiste beheerders permissies hebben. Als je dan nog niet alle modules kan zijn dan is het meest waarschijnlijk dat er dubbele authenticatie opties in de acl_options tabel staan. Draai het installatie bestand om te controleren voor een lijst van dubbele waardes.',
	'ARCADE_ACP_HELP_FAQ_MODULES_AUTH_QUESTION'			=> 'Hoe kan het dat ik niet alle beheerderspaneel modules kan zien van de arcade?',

	'ARCADE_ACP_HELP_FAQ_MODULES_ADD_AUTH_ANSWER'		=> 'Wanneer de arcade geïnstalleerd is, moet je de permissies instellen om de arcade te gebruiken. De arcade gebruikt categorie gebaseerde permissies die de forum gebaseerde permissies dat phpBB3 gebruikt nadoet, inclusief het gebruik van rollen. Ook kan je de beheerder permissies gebruiken om gebruiker/groepen toegang te verlenen aan de phpBB Arcade beheerderspaneel modules.',
	'ARCADE_ACP_HELP_FAQ_MODULES_ADD_AUTH_QUESTION'		=> 'Waar worden de permissies ingesteld? Waarom heb ik niet de permissies om de phpBB arcade te bekijken/gebruiken?',

	'ARCADE_ACP_HELP_FAQ_MODULES_NO_GAMES_ANSWER'		=> 'Om spellen te kunnen toevoegen moet je eerst kijken of er categorieën zijn om ze aan toe te voegen. Gebruik de <strong>Arcade beheer</strong> beheerderspaneel module om dit te doen. Het aanmaken van categorieën lijkt heel erg veel op het aanmaken van forums in phpBB3.',
	'ARCADE_ACP_HELP_FAQ_MODULES_NO_GAMES_QUESTION'		=> 'Waarom kan ik geen spellen toevoegen?',

	'ARCADE_ACP_HELP_FAQ_MODULES_DOWNLOAD_ANSWER'		=> 'De mogelijkheid om spellen te downloaden wordt gecontroleerd door de arcade permissies. Stel de permissies in hoe jij wilt en mensen die de arcade door bladeren zullen de download koppelingen zien bij het bekijken van de spellen in de categorieën. Om het makkelijker te maken om spellen te downloaden kan je de download lijst inschakelen in de phpBB Arcade beheerderspaneel instellingen. Dit staat andere toe om via de "Spellen downloaden" beheerderspaneel module toegang te krijgen tot de downloads op je website.',
	'ARCADE_ACP_HELP_FAQ_MODULES_DOWNLOAD_QUESTION'		=> 'Hoe kan ik spel downloads aanbieden aan anderen?',

	'ARCADE_ACP_HELP_FAQ_MODULES_USE_DOWNLOAD_ANSWER'	=> 'Alles wat je hoeft te doen is de url naar de phpBB hoofdmap van de website dat de downloads aanbied van hun installatie van de arcade in te voeren. Je krijgt nu een lijst te zien van spellen die beschikbaar zijn om te downloaden. Als het spel opgelicht is in het groen, dan is dit omdat hetzelfde spel gevonden is op je server. Onthoud dat de downloads nog steeds beheerst worden door de permissies op de website waar je ze vandaan download. Het kan dus zijn dat je aangemeld moet zijn en/of deel moet uitmaken van een speciale groep om spellen te downloaden. Neem contact op met de website beheerder als je vragen hebt.<br><br><a onclick="window.open(this.href); return false;" href="https://jv-arcade.com/dev/images/acp_download_games.png"><img src="https://jv-arcade.com/dev/images/acp_download_games.png" width="300" alt="ACP Download games" title="ACP Download games"></a>',
	'ARCADE_ACP_HELP_FAQ_MODULES_USE_DOWNLOAD_QUESTION'	=> 'Hoe gebruik ik de “Download spellen” module?',

	'ARCADE_ACP_HELP_FAQ_MODULES_REQ_DOWNLOAD_ANSWER'	=> 'Deze module moet de <strong>“allow_url_fopen”</strong> ingeschakeld hebben (on) of PHP’s <strong>cURL library</strong> geïnstalleerd hebben. Dit kan gecontroleerd worden door de phpinfo() te bekijken op je server. Als de waarde voor <strong>"allow_url_fopen"</strong> uit (off) is en de cURL library is niet geïnstalleerd, dan zal de module niet werken.',
	'ARCADE_ACP_HELP_FAQ_MODULES_REQ_DOWNLOAD_QUESTION'	=> 'Waarom kan de “Download spellen” module nooit spellen vinden?',

	'ARCADE_ACP_HELP_FAQ_MODULES_NO_FAV_ANSWER'			=> 'Mijn favoriete gadget is alleen zichtbaar als u toestemming heeft, die alleen de beheerder kan veranderen.',
	'ARCADE_ACP_HELP_FAQ_MODULES_NO_FAV_QUESTION'		=> 'Waarom kan je uw favorieten module niet zien?',
// step 6
	'ARCADE_ACP_HELP_FAQ_DATA_EXT_ANSWER'				=> 'Zijn er extensies?',
	'ARCADE_ACP_HELP_FAQ_DATA_EXT_QUESTION'				=> 'Ja, er zijn extensies voor de phpBb Arcade software - Zie: <a onclick="window.open(this.href); return false;" href="https://jv-arcade.com/phpBB_Arcade_Extensions.html">Extensies</a>'
));

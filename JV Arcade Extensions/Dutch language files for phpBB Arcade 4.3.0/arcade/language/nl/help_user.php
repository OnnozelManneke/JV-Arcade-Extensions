<?php
/**
*
* @package phpBB Arcade
* @version $Id: help_user.php 2055 2018-11-07 15:02:17Z KillBill $
* @author 2011-2018 KillBill - killbill@jatek-vilag.com
* @copyright (c) 2014-2018 https://jv-arcade.com/ - support@jv-arcade.com
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
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
	'ARCADE_HELP_FAQ_BLOCK_INTRO'						=> 'Introductie',
	'ARCADE_HELP_FAQ_BLOCK_GENERAL'						=> 'Algemene vragen',
	'ARCADE_HELP_FAQ_BLOCK_USER_SET'					=> 'Gebruikers instellingen',
	'ARCADE_HELP_FAQ_BLOCK_PLAYING'						=> 'Vragen over spelen',
	'ARCADE_HELP_FAQ_BLOCK_CAT'							=> 'Vragen over categorieën',
	'ARCADE_HELP_FAQ_BLOCK_SEARCH'						=> 'Vragen over de zoek functie',
	'ARCADE_HELP_FAQ_BLOCK_FAV'							=> 'Vragen over favoriete spellen',
	'ARCADE_HELP_FAQ_BLOCK_CHALLENGE'					=> 'Vragen over wedstrijden',
	'ARCADE_HELP_FAQ_BLOCK_TOUR'						=> 'Vragen over toernooien',
	'ARCADE_HELP_FAQ_BLOCK_POINTS'						=> 'Vragen over het punten systeem',
	'ARCADE_HELP_FAQ_BLOCK_ARCADE'						=> 'Vragen over phpBB Arcade',
// step 1
	'ARCADE_HELP_FAQ_INTRO_ARCADE_ANSWER'				=> 'De arcade biedt entertainment voor de gebruikers met een veelheid van Flash en Html5 spellen. Toestemming voor het gebruik van de arcade wordt bepaald door de beheerder, maar bepaalde diensten kunnen ook worden ingeschakeld/uitgeschakeld in uw Gebruikers Paneel. Daarom kan het handig zijn om de gebruikers gids door te lezen.',
	'ARCADE_HELP_FAQ_INTRO_ARCADE_QUESTION'				=> 'Wat is de arcade?',

	'ARCADE_HELP_FAQ_INTRO_REG_ANSWER'					=> 'Afhankelijk van de instellingen van de beheerder van de arcade, kan het mogelijk zijn dat registratie niet nodig is om de spellen te spelen. Houd er rekening mee dat als je jezelf registreert en gebruik maakt van de arcade, je vervolgens gebruik kunt maken van meerdere extra functies. (Bijvoorbeeld, je score en vooruitgang bewaren, commentaar geven op spellen, je spellen als favoriet bewaren, spellen waarderen, een uitdaging sturen naar andere gebruikers voor een wedstrijd, of mee doen met een gestart toernooi, en veel meer leuke opties) Het gebruik van deze functies is natuurlijk afhankelijk van de instellingen van de beheerder, het kan zijn dat sommige functies dan niet beschikbaar zijn.',
	'ARCADE_HELP_FAQ_INTRO_REG_QUESTION'				=> 'Waarom zou ik registreren?',

	'ARCADE_HELP_FAQ_INTRO_FUN_ANSWER'					=> 'In de Arcade zijn veel functies opgenomen, maar zijn alleen beschikbaar als de beheerder ze heeft geactiveerd.
															<br><strong>Functies:</strong>
															<ul>
																<li>Instellingen en aanpassingen.</li>
																<li>Spel categorieën.</li>
																<li>Weergave van nieuwe spellen.</li>
																<li>Spelen van willekeurige spellen.</li>
																<li>Selecteren en opslaan favoriete spellen</li>
																<li>Spellen waarderen.</li>
																<li>Spellen zoeken.</li>
																<li>Rapporteren van spel fouten.</li>
																<li>Downloaden van spellen.</li>
																<li>Spellen spelen in een nieuw scherm(popup).</li>
																<li>Spelen met volledig scherm.</li>
																<li>Spel grootte aanpassen.</li>
																<li>Achtergrond verlichting voor spellen aan / uit.</li>
																<li>Toernooien met diverse spellen tussen meerdere gebruikers.</li>
																<li>Daag andere leden uit met individuele spellen.</li>
																<li>Het creëren van willekeurige uitdagingen.</li>
																<li>Afzonderlijke gedetailleerde statistieken.</li>
																<li>Spel statistieken.</li>
																<li>Gebruikers statistieken.</li>
																<li>Categorie statistieken..</li>
																<li>Klasseringen.</li>
																<li>Gebruik van puntensysteem.</li>
																<li>En nog veel meer…</li>
															</ul>',
	'ARCADE_HELP_FAQ_INTRO_FUN_QUESTION'				=> 'Welke functies zijn opgenomen in de arcade?',
// step 2
	'ARCADE_HELP_FAQ_GENERAL_GAME_RATING_ANSWER'		=> 'De spel waardering optie is een nuttige functie. Het maakt het gemakkelijk voor gebruikers om te zoeken op basis van de manier waarop gebruikers het spel hebben beoordeeld, en als een spel goed wordt gewaardeerd zal het populairder worden. De statistieken van het spel staan altijd aan de bovenkant van het scherm, zodat gebruikers de best beoordeelde spellen gemakkelijk kunnen vinden.',
	'ARCADE_HELP_FAQ_GENERAL_GAME_RATING_QUESTION'		=> 'Wat is een spel waarderen?',

	'ARCADE_HELP_FAQ_GENERAL_GAME_RANDOM_ANSWER'		=> 'Een willekeurig spel wordt gekozen door het systeem, het is een leuke optie daar de spellen willekeurig gekozen worden uit alle categorieën. Het zal dan ook op lange termijn nooit vervelen omdat je nooit het zelfde spel speelt.',
	'ARCADE_HELP_FAQ_GENERAL_GAME_RANDOM_QUESTION'		=> 'Wat is een willekeurig spel?',

	'ARCADE_HELP_FAQ_GENERAL_GAME_BUG_ANSWER'			=> 'Wacht even alsjeblieft even. Sommige spellen laden een beetje langer, vanwege hun grootte. Een gebroken spel moet aan de beheerder worden gemeld, zodat hij / zij het probleem zo snel mogelijk kan oplossen. Elke game bevat een link voor een foutmelding die hiervoor gebruikt moet worden. Gebruik deze link, want deze bevat alle specifieke informatie over de game, die belangrijk voor ons is, en je kunt kiezen welk type probleem zich heeft voorgedaan. Een uitgebreidere foutbeschrijving is wenselijk. Laat ons ook weten welke browser en welke versie werd gebruikt, omdat het niet zeker is dat deze fout ook voorkomt in andere browsers. U kunt ook het apparaat beschrijven dat de fout heeft gemaakt (bijvoorbeeld pc, tablet of mobiel). Voor HTML5 Games is het ook mogelijk om te zien welke resolutie op het scherm is gebruikt. ',
	'ARCADE_HELP_FAQ_GENERAL_GAME_BUG_QUESTION'			=> 'Wat te doen als een spel niet werkt?',

	'ARCADE_HELP_FAQ_GENERAL_GAME_DOWNLOAD_ANSWER'		=> 'Ja, als het is toegestaan door de beheerder.',
	'ARCADE_HELP_FAQ_GENERAL_GAME_DOWNLOAD_QUESTION'	=> 'Kunnen de spellen gedownload worden?',

	'ARCADE_HELP_FAQ_GENERAL_GAME_NAME_LINK_ANSWER'		=> 'De spel namen worden getoond als een link, indien je permissie hebt op deze te spelen.',
	'ARCADE_HELP_FAQ_GENERAL_GAME_NAME_LINK_QUESTION'	=> 'De meeste namen van de spellen zijn linken, maar sommige verschijnen als gewoon platte tekst. Waarom?',

	'ARCADE_HELP_FAQ_GENERAL_GAME_USER_STAT_ANSWER'		=> 'Als toestemming werd verleend voor het gebruik van de menu’s , klikt u op de knop “Statistieken” en selecteer “Gebruiker” hieronder.',
	'ARCADE_HELP_FAQ_GENERAL_GAME_USER_STAT_QUESTION'	=> 'Hoe kan ik de spel statistieken van gebruikers bekijken?',

	'ARCADE_HELP_FAQ_GENERAL_USER_RECORD_ANSWER'		=> 'Ja, daarvoor moet u in de arcade klikken op de avatar van de gebruiker om de gebruikers informatie te openen en dan klikken op de link “Bekijk alle hoogste scores van de speler” onder zijn avatar.',
	'ARCADE_HELP_FAQ_GENERAL_USER_RECORD_QUESTION'		=> 'Kan ik alleen de records van een gebruiker bekijken?',

	'ARCADE_HELP_FAQ_GENERAL_SUPER_CHAMP_ANSWER'		=> 'De super kampioen is de top kampioen van alle gebruikers, die de hoogste score heeft bereikt van spellen. De super kampioen heeft geen standaard trofee, tenzij hij de eerste plaats in de huidige periode heeft behouden, Als de beheerder de arcade reset is het mogelijk om hoogste scores van de super kampioenen te behouden, u kunt dus altijd het hoogste score resultaat van een spel bekijken.',
	'ARCADE_HELP_FAQ_GENERAL_SUPER_CHAMP_QUESTION'		=> 'Wat is een Super Kampioen?',

	'ARCADE_HELP_FAQ_GENERAL_RANG_LIST_ANSWER'			=> 'De klassering laat zien hoeveel trofeeën een gebruiker heeft verdiend, hoe meer trofeeën hoe beter de klassering. De beheerder bepaald de klassering rang afbeelding. hij voegt een afbeelding toe wat aan de klassering is gekoppeld.',
	'ARCADE_HELP_FAQ_GENERAL_RANG_LIST_QUESTION'		=> 'Wat is klassering',
// step 3
	'ARCADE_HELP_FAQ_USER_SET_CONFIG_ANSWER'			=> 'Als je geregistreerd bent worden al je instellingen opgeslagen in de database. Om deze aan te passen klik je op de link gebruikerspaneel (over het algemeen te vinden boven aan de pagina). Hier kun je al je instellingen veranderen.',
	'ARCADE_HELP_FAQ_USER_SET_CONFIG_QUESTION'			=> 'Hoe verander ik mijn instellingen?',

	'ARCADE_HELP_FAQ_USER_SET_CHALL_DISABLE_ANSWER'		=> 'Als je niet wilt dat andere gebruikers je uitdagen voor een wedstrijd heb je de optie om deze functie uit te zetten. Als je deze functie uit zet kun je zelf ook geen andere gebruikers uitdagen. Let op, de beheerder kan deze functie ook voor alle gebruikers uit zetten.',
	'ARCADE_HELP_FAQ_USER_SET_CHALL_DISABLE_QUESTION'	=> 'U wilt de uitdagingen deactiveren?',

	'ARCADE_HELP_FAQ_USER_SET_IMG_DISABLE_ANSWER'		=> 'Je kunt er voor kiezen deze functie te deactiveren als de pagina laad tijd te langzaam is. Een trage internet snelheid of een te trage server connectie hebt.',
	'ARCADE_HELP_FAQ_USER_SET_IMG_DISABLE_QUESTION'		=> 'Je wilt weergave van avatars en spel afbeeldingen uitschakelen?',

	'ARCADE_HELP_FAQ_USER_SET_CAT_STYLE_ANSWER'			=> 'De arcade kan getoond worden in verschillende stijlen, je kunt dit aanpassen naar de stijl die jij wilt. Let op deze optie kan door de beheerder uitgezet worden.',
	'ARCADE_HELP_FAQ_USER_SET_CAT_STYLE_QUESTION'		=> 'Wat is de categorie stijl?',

	'ARCADE_HELP_FAQ_USER_SET_FAV_MANAGE_ANSWER'		=> 'Hier kun je, je favoriete spelletjes toevoegen, verwijderen of markeren.',
	'ARCADE_HELP_FAQ_USER_SET_FAV_MANAGE_QUESTION'		=> 'Wat is beheer favorieten?',
// step 4
	'ARCADE_HELP_FAQ_PLAYING_NOT_PLAY_ANSWER'			=> 'Dit kan verschillende oorzaken hebben:
															<ul>
																<li>Om spellen te kunnen spelen is het belangrijk om <a href="http://www.adobe.com/go/getflashplayer/" title="Get Adobe Flash player">“flash player”</a> geïnstalleerd te hebben op je computer, bij voorkeur de nieuwste versie.</li>
																<li>Je browser heeft misschien geen "JavaScript" geïnstalleerd, of het is uitgeschakeld op deze pagina.</li>
																<li>De beheerder heeft je geen permissies gegeven om te spelen</li>
															</ul>',
	'ARCADE_HELP_FAQ_PLAYING_NOT_PLAY_QUESTION'			=> 'Ik kan geen spel spelen, waarom niet?',

	'ARCADE_HELP_FAQ_PLAYING_NOT_SAVE_SCORE_ANSWER'		=> 'Dit kan verschillende oorzaken hebben:
															<ul>
																<li>Zorg ervoor dat je browser is ingesteld om “Cookies” te gebruiken.</li>
																<li>Zorg dat je ingelogd bent.</li>
																<li>Het spel is niet op de juiste manier gestart.</li>
																<li>Het spel is stuk.</li>
																<li>De beheerder heeft geen toestemming gegeven voor het opslaan van scores.</li>
															</ul>',
	'ARCADE_HELP_FAQ_PLAYING_NOT_SAVE_SCORE_QUESTION'	=> 'Ik kan mijn scores niet bewaren, waarom niet?',

	'ARCADE_HELP_FAQ_PLAYING_GAME_SIZE_ANSWER'			=> 'Sommige spellen passen zichzelf niet aan aan het forum of het design. Dan kun je de informatie sluiten om de positie van het spel te veranderen. Als de beheerder toestemming heeft gegeven, kun je ook via de zoom optie het spel vergroten en verkleinen.',
	'ARCADE_HELP_FAQ_PLAYING_GAME_SIZE_QUESTION'		=> 'Het spel is te groot of te klein, wat kan ik daar aan doen?',

	'ARCADE_HELP_FAQ_PLAYING_POPUP_ANSWER'				=> 'Ja, als dit is toegestaan door de beheerder.',
	'ARCADE_HELP_FAQ_PLAYING_POPUP_QUESTION'			=> 'Kan ik een spel spelen in een nieuw scherm?',

	'ARCADE_HELP_FAQ_PLAYING_FULL_SCREEN_ANSWER'		=> 'Ja, als in/uit zoomen is toegestaan door de beheerder.',
	'ARCADE_HELP_FAQ_PLAYING_FULL_SCREEN_QUESTION'		=> 'Kan ik games op volledig scherm spelen?',

	'ARCADE_HELP_FAQ_PLAYING_MOBILE_ANSWER'				=> 'Ja, maar in de meeste gevallen draaien alleen Html5 spellen op mobiele apparaten.',
	'ARCADE_HELP_FAQ_PLAYING_MOBILE_QUESTION'			=> 'Kan ik op een mobiele telefoon spelen?',

	'ARCADE_HELP_FAQ_PLAYING_BACKLIGHT_ANSWER'			=> 'De achtergrondverlichting heeft twee bruikbare eigenschappen:
															<ul>
																<li>Het spel draait in het comfort van een donkere kamer</li>
																<li>De knoppen en linken zijn inactief en buiten het spel, je kunt er dus niet per ongeluk op drukken. Dit voorkomt het laden van een andere pagina tijdens het spelen.</li>
															</ul>',
	'ARCADE_HELP_FAQ_PLAYING_BACKLIGHT_QUESTION'		=> 'Wat is de achtergrondverlichting?',

	'ARCADE_HELP_FAQ_PLAYING_WHITE_SCREEN_ANSWER'		=> 'Het kan een groot spel zijn en erg uitgebreid, je zult dan moeten wachten totdat het geladen is, vaak is de oorzaak een trage internet verbinding.',
	'ARCADE_HELP_FAQ_PLAYING_WHITE_SCREEN_QUESTION'		=> 'Spel lanceert een wit scherm, waarom?',

	'ARCADE_HELP_FAQ_PLAYING_HIDDEN_SCORE_ANSWER'		=> 'Dit spel wordt gebruikt voor een wedstrijd. het resultaat is verborgen voor alle deelnemende gebruikers, totdat de wedstrijd is afgelopen.',
	'ARCADE_HELP_FAQ_PLAYING_HIDDEN_SCORE_QUESTION'		=> 'In de lijst van resultaten staat de tekst “verborgen”, in plaats van de score van de kampioen, waarom?',
// step 5
	'ARCADE_HELP_FAQ_CAT_USER_PERMISSION_ANSWER'		=> 'Als je een categorie ingaat vindt je onderaan “Permissies”, en jouw permissies zie je daar onder.',
	'ARCADE_HELP_FAQ_CAT_USER_PERMISSION_QUESTION'		=> 'Welke permissies zijn van toepassing bij mij?',

	'ARCADE_HELP_FAQ_CAT_PASSWORD_ANSWER'				=> 'Als een categorie wachtwoord beveiligd is moet je een verzoek indienen bij de beheerder.',
	'ARCADE_HELP_FAQ_CAT_PASSWORD_QUESTION'				=> 'Categorie heeft een wachtwoord nodig, wat te doen?',

	'ARCADE_HELP_FAQ_CAT_AGE_ANSWER'					=> 'Het kan zijn dat een beheerder makkelijke spellen verzameld heeft voor kinderen in een categorie, alleen minderjarigen kunnen deze spellen spelen. Ook kan het zijn dat er spellen in een categorie zitten die niet geschikt zijn voor minderjarigen, deze spellen kunnen alleen gespeeld worden door volwassenen.',
	'ARCADE_HELP_FAQ_CAT_AGE_QUESTION'					=> 'Sommige categorieën zijn beveiligd met een leeftijd limiet, waarom?',

	'ARCADE_HELP_FAQ_CAT_STAT_ANSWER'					=> 'Ja, wanneer je een categorie ingaat, zie je een link “Bekijk categorie statistieken” naast de categorie naam.',
	'ARCADE_HELP_FAQ_CAT_STAT_QUESTION'					=> 'Ik zou graag de statistieken willen zien voor afzonderlijke categorieën, is dit mogelijk?',
// step 6
	'ARCADE_HELP_FAQ_SEARCH_GAME_ANSWER'				=> 'Als de zoekfunctie actief is, vindt u een zoek optie ongeveer in het midden van de pagina, waar u de naam van het spel kunt invoeren. Daarnaast heb je de mogelijkheid om te zoeken naar de initialen van het spel, klik gewoon op de actieletter.',
	'ARCADE_HELP_FAQ_SEARCH_GAME_QUESTION'				=> 'Hoe kan ik een specifiek spel vinden?',

	'ARCADE_HELP_FAQ_SEARCH_SNIP_GAME_ANSWER'			=> 'Tijdens het gebruik van de zoekmachine wordt automatisch rekening gehouden met de delen van het woord. Dus, als je in de zoekmachine het woord pac in tikt verschijnt het spel <strong>Pacman</strong>.',
	'ARCADE_HELP_FAQ_SEARCH_SNIP_GAME_QUESTION'			=> 'Hoe kan ik een spel vinden, als ik niet precies de naam weet?',
// step 7
	'ARCADE_HELP_FAQ_FAV_ANSWER'						=> 'Wanneer je een spel markeert als favoriet spel, is het niet meer nodig het spel te zoeken in de hoeveelheid aanwezige spellen. In je favorieten lijst vindt je dat spel snel en dat bespaard je een heleboel zoek tijd.',
	'ARCADE_HELP_FAQ_FAV_QUESTION'						=> 'Wat is het voordeel om een spel te markeren als favoriet spel?',

	'ARCADE_HELP_FAQ_FAV_HIGHLIGHT_ANSWER'				=> 'Je hebt de optie om de spellen die je het vaakst speelt extra te markeren,in je favorieten spel lijst. Je vindt deze optie in je gebruikerspaneel.',
	'ARCADE_HELP_FAQ_FAV_HIGHLIGHT_QUESTION'			=> 'Ik heb teveel favoriete spellen. Hoe kan ik sommige spellen sneller vinden?',
// step 8
	'ARCADE_HELP_FAQ_CHALLENGE_PERMISSION_ANSWER'		=> 'De wedstrijden zijn alleen zichtbaar als ze zijn geactiveerd en als de beheerder je de permissies heeft gegeven.',
	'ARCADE_HELP_FAQ_CHALLENGE_PERMISSION_QUESTION'		=> 'Ik zie de wedstrijden niet, waarom niet?',

	'ARCADE_HELP_FAQ_CHALLENGE_ACCEPT_ANSWER'			=> 'Als je een uitdaging voor een wedstrijd hebt ontvangen, moet je dit eerst accepteren op de wedstrijd pagina, en het spel daar starten. Dan zal de wedstrijd correct starten.',
	'ARCADE_HELP_FAQ_CHALLENGE_ACCEPT_QUESTION'			=> 'Ik heb de uitdaging voor een wedstrijd ontvangen, daarna het spel gespeeld, maar de pm met dat ik een uitdaging voor een wedstrijd heb ontvangen is er nog steeds. Waarom telt dat spel niet?',

	'ARCADE_HELP_FAQ_CHALLENGE_START_ANSWER'			=> 'Op de wedstrijd pagina klik je op de knop "wedstrijd", en zoek de benodigde instellingen op het formulier. Hier heb je de volgende opties:
															<ul>
																<li>Selecteer een spel uit de lijst.</li>
																<li>Selecteer een favoriet spel. <em>Alleen mogelijk als je een aantal favoriete spellen hebt gemarkeerd.</em></li>
																<li>Selecteer een tegenstander uit de lijst.</li>
																<li>Selecteer een vriend. <em>Alleen mogelijk als je vrienden hebt gemarkeerd.</em></li>
															</ul>
															<br>Na dat je de tegenstander hebt uitgekozen kun je de uitdaging verzenden door op de knop “wedstrijd” te drukken. Om de wedstrijd te starten moet de uitgedaagde persoon ook reageren.
															<br>Let op: <em>Als er een puntensysteem is geïnstalleerd en deze is actief, kun je ook punten inzetten. De hoogte van de inzet kan vrij zijn, maar kan ook bepaald zijn door de beheerder.</em>',
	'ARCADE_HELP_FAQ_CHALLENGE_START_QUESTION'			=> 'Hoe start ik een wedstrijd?',

	'ARCADE_HELP_FAQ_CHALLENGE_ARRIVED_ANSWER'			=> 'Iemand wil een wedstrijd met je spelen en stuurde je een uitdaging. Je kunt het accepteren of weigeren.',
	'ARCADE_HELP_FAQ_CHALLENGE_ARRIVED_QUESTION'		=> 'Wat betekent “Inkomende wedstrijd”?',

	'ARCADE_HELP_FAQ_CHALLENGE_SENT_ANSWER'				=> 'Dit zijn de uitdagen voor een wedstrijd die jij hebt verzonden naar andere gebruikers. Deze uitdagingen kunnen ook worden geannuleerd.',
	'ARCADE_HELP_FAQ_CHALLENGE_SENT_QUESTION'			=> 'Wat betekent “Wedstrijd verzonden”?',

	'ARCADE_HELP_FAQ_CHALLENGE_ONGOING_ANSWER'			=> 'Dit zijn gestarte wedstrijden die zijn geaccepteerd, en die nu door beide partijen gespeeld kunnen worden. Als er een error wordt gerapporteerd voor het spel zal de wedstrijd worden geannuleerd.',
	'ARCADE_HELP_FAQ_CHALLENGE_ONGOING_QUESTION'		=> 'Wat betekent “lopende wedstrijden”?',

	'ARCADE_HELP_FAQ_CHALLENGE_GAME_CHAMP_ANSWER'		=> 'Als je een spel speelt in het normale scherm, zie je boxen in de pagina en ook de box “Spel opties”. In deze box vindt je de link “Daag kampioen uit”. Je kunt simpel de houder van de hoogste score uitdagen door op deze link te drukken. Hij moet wel de uitdaging accepteren voor dat de wedstrijd kan starten.',
	'ARCADE_HELP_FAQ_CHALLENGE_GAME_CHAMP_QUESTION'		=> 'Hoe kan ik simpel een spel kampioen uitdagen?',

	'ARCADE_HELP_FAQ_CHALLENGE_PRACTICE_ANSWER'			=> 'Als je de uitdaging weigert wel, anders niet. Als je de uitdaging accepteert is er geen mogelijkheid meer om te oefenen.',
	'ARCADE_HELP_FAQ_CHALLENGE_PRACTICE_QUESTION'		=> 'Er is een uitdaging voor mij binnen gekomen, is er een manier om te oefenen?',

	'ARCADE_HELP_FAQ_CHALLENGE_POINTS_ANSWER'			=> 'Als een speler je heeft uitgedaagd voor een wedstrijd en een inzet heeft gemaakt, bv, 100 punten, dan zal dit van je punten totaal worden afgehaald zodra de uitdaging voor een wedstrijd binnen komt. als het spel spelen 5 punten kost bv, dan wordt dit ook van je totaal afgehaald. Het systeem zal een totaal van 105 punten van je totaal aantal punten afhalen om de kosten te dekken van de uitdaging. In het geval dat je de uitdaging weigert zullen de punten onmiddellijk worden terug gezet. Zelfs als de uitdaging is geaccepteerd maar het spel is niet gespeeld, of de wedstrijd tijd is voorbij, zullen je inzet en spel kosten worden terug gezet.',
	'ARCADE_HELP_FAQ_CHALLENGE_POINTS_QUESTION'			=> 'Als ik word uitgedaagd voor een wedstrijd verlies ik punten op mijn totaal aantal punten, waarom?',

	'ARCADE_HELP_FAQ_CHALLENGE_BUG_GAME_ANSWER'			=> 'In dat geval moet u het spel rapporteren via de link die er volgt. De wedstrijd wordt onmiddellijk geannuleerd en de kosten worden terug gezet',
	'ARCADE_HELP_FAQ_CHALLENGE_BUG_GAME_QUESTION'		=> 'Ik was uitgedaagd voor een wedstrijd maar het spel werkt niet meer, wat moet ik dan doen?',

	'ARCADE_HELP_FAQ_CHALLENGE_DRAW_BET_ANSWER'			=> 'Als een uitdaging met een gelijkspel eindigt zal de inzet terug gegeven worden aan elke speler die deel nam.',
	'ARCADE_HELP_FAQ_CHALLENGE_DRAW_BET_QUESTION'		=> 'Wat gebeurt er met de inzet als de uitdaging in een gelijkspel eindigt?',

	'ARCADE_HELP_FAQ_CHALLENGE_EXP_TIME_ANSWER'			=> 'De verloop datum is de tijd dat de uitdaging voor een wedstrijd automatisch wordt geannuleerd. Tot dan moet de uitdaging worden geaccepteerd.',
	'ARCADE_HELP_FAQ_CHALLENGE_EXP_TIME_QUESTION'		=> 'Wat is de “Verloop datum”?',

	'ARCADE_HELP_FAQ_CHALLENGE_END_ANSWER'				=> 'Elke gebruiker zal een melding ontvangen via Privé bericht, als het zenden van Privé berichten ingeschakeld is.',
	'ARCADE_HELP_FAQ_CHALLENGE_END_QUESTION'			=> 'Hoe weet ik dat een uitdaging is geëindigd?',

	'ARCADE_HELP_FAQ_CHALLENGE_PREVENT_ANSWER'			=> 'Je kan dit uitzetten in je gebruikerspaneel.',
	'ARCADE_HELP_FAQ_CHALLENGE_PREVENT_QUESTION'		=> 'Hoe kan ik voorkomen dat ik word uitgedaagd?',
// step 9
	'ARCADE_HELP_FAQ_TOUR_PRACTICE_ANSWER'				=> 'Voor dat een toernooi start, ja, maar al het al gestart is, dan is er geen mogelijkheid meer om te oefenen.',
	'ARCADE_HELP_FAQ_TOUR_PRACTICE_QUESTION'			=> 'Is er een mogelijkheid om te oefenen?',

	'ARCADE_HELP_FAQ_TOUR_PLAY_NUM_ANSWER'				=> 'Elk gestart spel wordt geteld, ongeacht of de score is opgeslagen of niet.',
	'ARCADE_HELP_FAQ_TOUR_PLAY_NUM_QUESTION'			=> 'Ik heb een spel gespeeld, maar de punten zijn niet opgeslagen. Toch is het aantal gespeelde spellen verhoogd. Waarom?',

	'ARCADE_HELP_FAQ_TOUR_NO_RESULT_ANSWER'				=> 'Alleen groep(en) die zijn gemachtigd voor deze wedstrijd kunnen deelnemen. Kijk of je wel lid bent van deze groep(en).',
	'ARCADE_HELP_FAQ_TOUR_NO_RESULT_QUESTION'			=> 'Ik heb een spel gespeeld, maar ik zie geen competitie resultaten, waarom niet?',

	'ARCADE_HELP_FAQ_TOUR_RIGHT_RESULT_ANSWER'			=> 'Als je het maximum opgegeven te spelen spellen heb bereikt, worden de resultaten niet meer meegeteld in het toernooi.',
	'ARCADE_HELP_FAQ_TOUR_RIGHT_RESULT_QUESTION'		=> 'Ik heb een spel opnieuw gespeeld met betere resultaten, maar het is niet meegeteld in het toernooi, waarom niet?',
// step 10
	'ARCADE_HELP_FAQ_POINTS_SYSTEM_ANSWER'				=> 'Een puntensysteem is een complexe extensie die de beheerder kan toevoegen om te gebruiken voor de Arcade. Als een puntensysteem wordt gebruik in de arcade zijn er diverse optie te gebruiken zoals beloningen, kosten voor spelen spel enz..',
	'ARCADE_HELP_FAQ_POINTS_SYSTE_QUESTION'				=> 'Wat is het punten systeem?',

	'ARCADE_HELP_FAQ_POINTS_REWARD_ANSWER'				=> 'Een beloning wordt meestal gegeven als een score wordt verbeterd of iemand wint de Super kampioen titel, de hoogte van de beloning wordt bepaald door de beheerder.',
	'ARCADE_HELP_FAQ_POINTS_REWARD_QUESTION'			=> 'Wat is de beloning?',

	'ARCADE_HELP_FAQ_POINTS_JACKPOT_ANSWER'				=> 'De jackpot ontstaat door de kosten van het spel, voor de start van elk spel worden de kosten verzameld in een pot. Het groeit net zo lang iemand de jackpot wint, of totdat de limit is bereikt. Het minimum/maximum bedrag wordt bepaald door de beheerder.',
	'ARCADE_HELP_FAQ_POINTS_JACKPOT_QUESTION'			=> 'Wat is de jackpot?',

	'ARCADE_HELP_FAQ_POINTS_COST_ANSWER'				=> 'Kosten van een spel is het aantal punten wat wordt afgetrokken van het totaal van je punten. Let op de kosten van een spel kunnen in elke categorie verschillen, de kosten worden bepaald door de beheerder.',
	'ARCADE_HELP_FAQ_POINTS_COST_QUESTION'				=> 'Wat kost het om een spel te spelen?',

	'ARCADE_HELP_FAQ_POINTS_DOWNLOAD_COST_ANSWER'		=> 'Kosten van het downloaden van een spel is het aantal punten wat wordt afgetrokken van het totaal van je punten. Let op de kosten van een spel kunnen in elke categorie verschillen, de kosten worden bepaald door de beheerder.',
	'ARCADE_HELP_FAQ_POINTS_DOWNLOAD_COST_QUESTION'		=> 'Wat kost het om een spel te downloaden?',
// step 11
	'ARCADE_HELP_FAQ_ARCADE_CREATE_ANSWER'				=> 'Deze add-on (originele vorm) is gemaakt door <a href="https://jv-arcade.com/" title="JV-Arcade Group">“JV-Arcade Group”</a>, tevens eigenaar van de auteursrechten. Het werd ontwikkeld en gepubliceerd onder de GNU General Public License, en mag vrij worden gedistribueerd. Voor meer informatie zie de link.',
	'ARCADE_HELP_FAQ_ARCADE_CREATE_QUESTION'			=> 'Wie schreef de Arcade?',

	'ARCADE_HELP_FAQ_ARCADE_NOT_AVAILABLE_X_ANSWER'		=> 'Deze add-on is gemaakt en in licentie gegeven door de JV-Arcade groep. Als je van mening bent, dat nieuwe diensten of functies nodig zijn, of als je fouten hebt gevonden, ga dan naar <a href="https://jv-arcade.com/New_Ideas.html" title="JV-Arcade New Ideas Centre">“JV-Arcade New Ideas Centre”</a> waar aanvullende informatie beschikbaar is.',
	'ARCADE_HELP_FAQ_ARCADE_NOT_AVAILABLE_X_QUESTION'	=> 'Waarom is functie X niet aanwezig?'
));

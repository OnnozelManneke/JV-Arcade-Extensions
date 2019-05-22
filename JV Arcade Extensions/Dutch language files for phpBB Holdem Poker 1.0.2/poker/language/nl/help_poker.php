<?php
/**
*
* @package phpBB Holdem Poker
* @version $Id$
* @author 2011-2019 KillBill - killbill@jatek-vilag.com
* @copyright (c) 2014-2019 https://jv-arcade.com/ - support@jv-arcade.com
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
	'JV_POKER_HELP_BLOCK_GENERAL'		=> 'Algemene vragen',
	'JV_POKER_HELP_BLOCK_ROOMS'			=> 'Poker Kamer lobby vragen',
	'JV_POKER_HELP_BLOCK_GAME'			=> 'Pokerspel problemen',
	'JV_POKER_HELP_BLOCK_SHOUT'			=> 'Poker shoutbox vragen',
	'JV_POKER_HELP_BLOCK_STATS'			=> 'Poker vragen over statistieken',
	'JV_POKER_HELP_BLOCK_ADMIN'			=> 'Vragen over beheerders interventies',
	'JV_POKER_HELP_BLOCK_POKER'			=> 'phpBB Holdem Poker vragen',
// step 1
	'JV_POKER_HELP_POKER_ANSWER'		=> 'PhpBB Holdem Poker is een kaartspel dat geregistreerde gebruikers tegen elkaar kunnen spelen. Slechts één beheerder kan het gebruik van poker autoriseren. U zult echter waarschijnlijk de volgende gids nuttig vinden.',
	'JV_POKER_HELP_POKER_QUESTION'		=> 'Wat is phpBB Holdem Poker?',

	'JV_POKER_HELP_REG_ANSWER'			=> 'Alleen geregistreerde gebruikers kunnen phpBB Holdem Poker spelen, dus het is een goed idee om je een account aan te maken.',
	'JV_POKER_HELP_REG_QUESTION'		=> 'Waarom moet ik me registreren?',

	'JV_POKER_HELP_PLAY_ANSWER'			=> 'Poker is één van de populairste kaartspellen ter wereld. Het gaat erom dat spelers geld (chips) in het midden van de tafel krijgen (POT in het Engels) en om het beste uit hun kaarten te halen. Je kunt dit doen met de beste kaartcombinatie, dus elke speler moet ernaar streven de beste in zijn eigen hand te hebben. Het spel kan door 2-8 personen in een kamer worden gespeeld. Het spel maakt gebruik van 52 Franse kaarten zonder jokers. Elke speler ontvangt twee kaarten die niet door andere spelers kunnen worden gezien en gebruikt. Tijdens het spel worden vijf gemeenschappelijke open kaarten open op tafel gedeeld, die alle spelers kunnen zien en gebruiken. De speler probeert de beste vijfkaart combinatie te compileren uit zijn eigen kaarten en uit de gemeenschappelijke kaarten. De speler met de sterkste kaarten wint de waarde van de pot. Een kaartspel met Franse kaarten (zonder jokers) heeft 4 verschillende kleuren en elke kleur bestaat uit 13 kaarten met verschillende waarden, waarmee het deck met 52 vellen wordt weergegeven. De volgorde van de 4 kleuren: <span class="poker_cs">♣</span> (Klaveren) <span class="poker_dh">♦</span> (Diamanten) <span class="poker_dh">♥</span> (Harten) <span class="poker_cs">♠</span> (Schoppen). Alle kleuren worden beschouwd als gelijk aan de evaluatie van pokerhanden. De volgorde van de waarde van de kaarten is: A (aas), 2, 3, 4, 5, 6, 7, 8, 9, 10, J (Jack), Q (koningin), K (koning). De aas is niet alleen een enkel nummer, maar een aaskaart, de hoogste kaart na de koning.
		<br><br><strong>Osztó:</strong><br>
		Er is altijd een Deler positie aan een pokertafel. De deler beheert de kaarten, mengt ze en verdeelt ze. Het deler icoon (D) geeft de persoon aan die de deler zal zijn en deel zal nemen aan het spel.

		<br><br><strong>Small blinds en big blinds:</strong><br>
		De eerste speler links van de dealer knop is de “small blind” en de eerste speler links van de small blind is de “big blind”. Het zijn “small” mensen die moeten gokken zonder hun eigen kaarten te kennen. De “small blind” is de kleine startinzet, de “big blind” is de grote startinzet, die ze “blind” moeten doen.

		<br><br><strong>Bets:</strong><br>
		Poker gebruikt “Chips” om te bieden, wat contanten tijdens het spel vervangt. In de inzetronde gaat bieden altijd naar links en alle “actieve spelers” (die hun kaarten nog niet hebben ge-fold) gokken en blijven doorgaan zolang actieve weddenschappen niet langer worden verhoogd, ge-hold of ge-fold. Het aantal weddenschappen en verhogingen is in overeenstemming met de limietregels.

		<br><br><strong>Delen:</strong><br>
		De deler schudt het kaartspel. Voordat de kaarten worden gedeeld, plaatsen de “small blind” en de “big blind” hun start weddenschappen, en vervolgens plaatst de deler alle kaarten aan de linkerkant. Vervolgens begint de Pre-Flop (de eerste inzetronde), die anders is dan de andere gokrondes in het spel.

		<br><br><strong>Pre-Flop (eerste inzetronde):</strong><br>
		De eerste inzetronde wordt gestart door de eerste speler links van de “big blind” en er kunnen drie weddenschappen worden gedaan:
		<ul>
			<li>Call - de bestaande weddenschap wordt betaald.</li>
			<li>Raise - betaalt de bestaande weddenschap en verhoogt deze binnen de limietregels.</li>
			<li>Fold - de kaarten worden met de afbeelding naar beneden op de tafel gelegd en verlaten de ronde (opgeven).</li>
		</ul>

		De inzetronde gaat naar links en spelers kunnen bieden. Als je net de weddenschap hebt gehouden, dan:
		<ul>
			<li>De “small blind” moet op zijn minst met de small blind zijn eigen gok verhogen of zijn kaarten folden en opgeven.</li>
			<li>De “big blinds” kunnen de weddenschap verhogen met ten minste hun grote blind, ze kunnen controleren - geen nieuw bod doen -, of hun kaarten folden en opgeven.</li>
		</ul>

		Wanneer een speler de weddenschap verhoogt, begint het bieden. Aan het einde van de inzetronde verzamelt de Deler de weddenschappen en zet ze in het spelfonds, de “Pot”.
		<br><br><strong>Flop (tweede inzetronde):</strong><br>
		De deler deelt drie kaarten, de “Flop”, die met de afbeelding naar boven in het midden van de tafel liggen, zodat alle spelers ze kunnen zien. Dan begint de tweede inzetronde van het spel.

		<br><br><strong>In tegenstelling tot de Pre-Flop gokronde, kunnen alle gokrondes na de flop altijd beginnen met de eerste actieve speler links van de deler knop en drie weddenschappen doen:</strong><br>
		<ul>
			<li>Check: geef actie door aan de volgende speler, call niet en fold je kaarten niet.</li>
			<li>Bet: betaalt de openingsinzet volgens de limietregels.</li>
			<li>Fold: gooi de kaarten met de kleur naar beneden en geef de ronde op.</li>
		</ul>

		Als een speler de openingsinzet plaatst, kan de eerste actieve speler links van hem drie weddenschappen doen:
		<ul>
			<li>Call - de bestaande weddenschap wordt betaald.</li>
			<li>Raise - betaalt de bestaande weddenschap en verhoogt deze binnen de limietregels.</li>
			<li>Fold - de kaarten worden met de beeldzijde naar beneden op de tafel gelegd en verlaten de ronde (opgeven).</li>
		</ul>

		Wanneer een speler de weddenschap verhoogt, begint het bieden. Aan het einde van de inzetronde, verzamelt de Deler de weddenschappen en stopt deze in de pot.

		<br><br><strong>Turn (derde inzetronde)</strong><br>
		De deler geeft een andere kaart met de naam “Turn” beeld naar boven, bij de gemeenschappelijke kaarten. Dit geeft de speler vier gemeenschappelijke kaarten. Nu begint de derde inzetronde.

		<br><br><strong>River (vierde inzetronde)</strong><br>
		De deler deelt de laatste open kaart uit met de naam “River”. Dit geeft elke speler zeven kaarten in totaal. Vijf van hen moeten worden gebruikt om een pokerhand te maken, die hopelijk een hogere waarde heeft dan de hand van de tegenstander.

		<br><br><strong>Showdown (presentatie van kaarten)</strong><br>
		Als er meer dan één speler in het spel is na de laatste gokronde, worden de actieve spelerskaarten weergegeven. De pot wordt gewonnen door de pokerspeler met de sterkste hand met 5 kaarten. Als twee of meer spelers dezelfde pokerhand tonen, wordt de pot in gelijke delen verdeeld. Vóór de volgende ronde wordt de deler knop altijd één positie naar links verplaatst. De dealer is daarom verschillend in elke ronde en de blinds worden ook aan andere spelers toegewezen.

		<br><br><strong>Beoordeling van pokerhanden</strong><br>
		Bij poker is een pokerhand een combinatie van 5 kaarten, die de speler combineert met zijn eigen twee en de vijf gemeenschappelijke kaarten van de tafel (dat is een totaal van zeven kaarten). De speler kan één, beide of geen van zijn eigen kaarten gebruiken. De kleuren van de kaarten zijn van dezelfde waarde. Als twee spelers dezelfde combinatie hebben, bepaalt de bijbehorende kaart welke speler het spel wint. Een bijbehorende kaart (kicker) maakt geen deel uit van de combinatie, deze wordt alleen vergezeld en “aangevuld”. Als twee spelers gelijkspel hebben beslist de hogere speler. Als er nog steeds een gelijkspel is, wordt de pot verdeeld tussen de winnaars.

		<br><br><strong>Limiet regels</strong><br>
		De minimale inzet is altijd hetzelfde als de big blind.
		<ul>
			<li>Met een vaste limiet is het mogelijk om de big blind te verdrievoudigen tijdens de Pre-Flop (eerste inzetronde) en de Flop (tweede inzetronde). Voor de rondes kunnen beurt (derde inzetronde) en rivier (vierde inzetronde) alleen met de dubbele grote blind door deze regel worden verhoogd.</li>
			<li>Geen limiet betekent dat de hoeveelheid en het aantal verhogingen niet beperkt zijn.</li>
		</ul>

		<strong>Poker Hands:</strong>
		<ul>
			<li><strong>Royal Flush</strong>
				<ul><li>De sterkste kaartcombinatie. 10, jack, queen, king, aas - allemaal in dezelfde kleur. Als twee gelijk zijn, is er een gelijkspel (de prijs is verdeeld).<br>Voorbeeld: 10<span class="poker_dh">♥</span>, J<span class="poker_dh">♥</span> , Q<span class="poker_dh">♥</span>, K<span class="poker_dh">♥</span>, A<span class="poker_dh">♥</span>.</li></ul>
			</li>
		</ul>
		<ul>
			<li><strong>Straight Flush</strong>
				<ul><li>Een opeenvolgende reeks van vijf kaarten van dezelfde kleur. Als het meerdere keren in de ronde voorkomt, beslist de hoogste kaart. Als twee gelijk zijn, is er een gelijkspel (de prijs is verdeeld).<br>Voorbeeld: 5<span class="poker_cs">♣</span>, 6<span class="poker_cs">♣</span>, 7<span class="poker_cs">♣</span>, 8<span class="poker_cs">♣</span>, 9<span class="poker_cs">♣</span></li></ul>
			</li>
		</ul>
		<ul>
			<li><strong>Poker (four of a kind)</strong>
				<ul><li>Het bestaat uit vier kaarten met hetzelfde nummer of teken en een andere kaart. Als meerdere van hen elkaar ontmoeten, wint het hogere poker.<br>Voorbeeld: 7<span class="poker_dh">♥</span>, 7<span class="poker_cs">♠</span>, 7<span class="poker_cs">♣</span>, 7<span class="poker_dh">♦</span>, 10<span class="poker_cs">♠</span>.</li></ul>
			</li>
		</ul>
		<ul>
			<li><strong>Full house</strong>
				<ul><li>Het bestaat uit drie kaarten met hetzelfde nummer of teken en twee andere kaarten met hetzelfde nummer of teken. Als verschillende van hen elkaar ontmoeten, winnen de hogere drie soorten. Als het nog steeds gelijk is, wint het hogere paar.<br>Voorbeeld 5<span class="poker_dh">♦</span>, 5<span class="poker_cs">♣</span>, 5<span class="poker_cs">♠</span>, 8<span class="poker_dh">♥</span>, 8<span class="poker_cs">♠</span>.</li></ul
			</li>
		</ul>
		<ul>
			<li><strong>Flush</strong>
				<ul><li>Bestaat uit vijf willekeurige kaarten met dezelfde kleur. Als meerdere van hen elkaar ontmoeten, wint de speler die de hoogste kaart heeft die niet elke speler heeft. Nog steeds gelijk, de op een na hoogste kaart scoort, enzovoort…<br>Voorbeeld: 2<span class="poker_cs">♠</span>, 4<span class="poker_cs">♠</span>, 5<span class="poker_cs">♠</span>, 7<span class="poker_cs">♠</span>, 10<span class="poker_cs">♠</span>.</li></ul>
			</li>
		</ul>
		<ul>
			<li><strong>Straight</strong>
				<ul><li>Bestaat uit 5 opeenvolgende kaarten van elke kleur. Als er meer dan één gebeurt, wint de speler met de hoogste kaart. Als er nog geen beslissing is, is er een gelijkspel (de prijs is verdeeld).<br>Voorbeeld: 4<span class="poker_dh">♥</span>, 5<span class="poker_dh">♦</span>, 6<span class="poker_cs">♠</span>, 7<span class="poker_cs">♠</span>, 8<span class="poker_cs">♣</span>.</li></ul>
			</li>
		</ul>
		<ul>
			<li><strong>Three of a kind (trips)</strong>
				<ul><li>Het bestaat uit drie kaarten van hetzelfde nummer of teken en twee van een ander. Als verschillende van hen elkaar ontmoeten, winnen de hogere drie soorten. Als er geen beslissing wordt genomen, beslist de hogere neutrale kaart, dan de onderste kaart.<br>Voorbeeld: 3<span class="poker_dh">♥</span>, 3<span class="poker_cs">♣</span>, 3<span class="poker_cs">♠</span>, 7<span class="poker_cs">♠</span>, 10<span class="poker_dh">♦</span>.</li></ul>
			</li>
		</ul>
		<ul>
			<li><strong>Two pairs</strong>
				<ul><li>Het bestaat uit twee keer twee kaarten met hetzelfde nummer of teken en één andere kaart. Als er meerdere dubbele paren zijn, bepaalt het hogere paar, dan de een na hoogste en, indien nodig, de neutrale kaart.<br>Voorbeeld: 5<span class="poker_cs">♠</span>, 5<span class="poker_dh">♦</span>, 8<span class="poker_cs">♠</span>, 8<span class="poker_cs">♣</span>, 10<span class="poker_dh">♦</span>.</li></ul>
			</li>
		</ul>
		<ul>
			<li><strong>One pair</strong>
				<ul><li>Het bestaat uit twee kaarten met hetzelfde nummer of teken en drie andere kaarten. Als er meerdere paren zijn, beslist het hogere paar, dan de neutrale kaarten.<br>Voorbeeld: 3<span class="poker_dh">♥</span>, 5<span class="poker_cs">♠</span>, 7<span class="poker_cs">♣</span>, 10<span class="poker_dh">♦</span>, 10<span class="poker_cs">♠</span>.</li></ul>
			</li>
		</ul>
		<ul>
			<li><strong>High card</strong>
				<ul><li>Elke kaart.
			</li>
		</ul>',
	'JV_POKER_HELP_PLAY_QUESTION'		=> 'Hoe speel je poker?',

	'JV_POKER_HELP_TOKEN_ANSWER'		=> 'Een uitwisseling van chips is alleen mogelijk als phpBB Holdem Poker is verbonden met een “puntensysteem”. Zodra een dergelijke integratie is voltooid, vinden gebruikers de knop “Chips wisselen” naast de weergave van hun chips balans op de poker hoofdpagina, in het blok met hun gebruikersinformatie.',
	'JV_POKER_HELP_TOKEN_QUESTION'		=> 'Hoe wissel je chips?',

	'JV_POKER_HELP_POINTS_ANSWER'		=> 'Natuurlijk, op dezelfde manier als ze werden verworven.',
	'JV_POKER_HELP_POINTS_QUESTION'		=> 'Kan ik de chips die ik heb opgedaan terug wisselen?',

	'JV_POKER_HELP_BAN_CHIPS_ANSWER'	=> 'Ja, als een beheerder je permissie voor poker verwijdert, kun je %s<strong>HIER</strong>%s automatisch al je fiches op elk gewenst moment uitwisselen.',
	'JV_POKER_HELP_BAN_CHIPS_QUESTION'	=> 'Als ik mijn permissie voor poker verlies, is er een manier om mijn fiches in te wisselen?',

	'JV_POKER_HELP_PD_ANSWER'			=> '“phpBB Holdem Poker” verzamelt en slaat het IP adres van elke huidige speler op totdat de gebruiker de tafel verlaat. Wanneer een gebruiker opstaat van de tafel, worden alle gegevens gewist en worden alleen de statistische gegevens bewaard. Het IP adres wordt tijdens het spel opgeslagen om te voorkomen dat meerdere spelers aan dezelfde tafel hetzelfde IP adres gebruiken. Natuurlijk kunt u deze IP controle in en uitschakelen.',
	'JV_POKER_HELP_PD_QUESTION'			=> 'Bewaart “phpBB Holdem Poker” persoonlijke gegevens?',

// step 2
	'JV_POKER_HELP_PRACTICE_ANSWER'		=> 'Iedereen kan in deze kamer spelen, zelfs als ze geen eigen chips hebben. Elke speler krijgt een vooraf bepaald aantal chips tijdens het zitten. De chips die in deze kamer worden gewonnen, kunnen niet uit de kamer worden gehaald of worden uitgewisseld.',
	'JV_POKER_HELP_PRACTICE_QUESTION'	=> 'Wat betekent het om in een oefenkamer te zitten?',

	'JV_POKER_HELP_NORMAL_ANSWER'		=> 'In een normale kamer kunnen alleen gebruikers spelen die hun eigen chips hebben en die genoeg chips kunnen binnenhalen voor de vereiste minimale instapwaarde. Elk van deze kamers heeft een vast minimum en maximumbedrag om aan de slag te gaan. Gebruikers kunnen met het minimumbedrag aan de tafel zitten. In deze kamer kunnen gewonnen chips uit de kamer worden gehaald en uw chips balans verhogen. Deze chips kunnen terug worden ingewisseld.',
	'JV_POKER_HELP_NORMAL_QUESTION'		=> 'Wat betekent het om in een normale kamer te zitten?',

	'JV_POKER_HELP_TOUR_ANSWER'			=> 'In een toernooikamer kunnen alleen gebruikers spelen die hun eigen chips bezitten, en die genoeg chips kunnen binnenhalen voor het vereiste minimumaantal instapbedrag. Elk van deze kamers heeft een vast minimumbedrag om aan de slag te gaan. In deze kamer kunnen gewonnen chips uit de kamer worden gehaald en uw chips balans verhogen. Deze chips kunnen terug worden ingewisseld.',
	'JV_POKER_HELP_TOUR_QUESTION'		=> 'Wat betekent het om in een toernooikamer te zitten',

	'JV_POKER_HELP_CM_ANSWER'			=> '“Stoelen” betekent hoeveel stoelen beschikbaar zijn voor spelers in deze kamer. Als het aantal stoelen 8 is, kunnen 8 gebruikers tegelijkertijd in de kamer zitten. “Leden” geeft aan hoeveel gebruikers er in de ruimte zijn. Als de beheerder de kamer sluit, betekent dit dat de kamer vol is en dat geen ander lid de kamer kan binnengaan voordat een stoel is vrijgemaakt.',
	'JV_POKER_HELP_CM_QUESTION'			=> 'Wat betekent Leden/Stoelen?',

	'JV_POKER_HELP_LIMIT_ANSWER'		=> 'We hebben het antwoord op deze vraag al beschreven in “Hoe speel je poker?/limietregels”.',
	'JV_POKER_HELP_LIMIT_QUESTION'		=> 'Wat betekent Fixed limiet/Geen limiet?',

	'JV_POKER_HELP_BLIND_ANSWER'		=> 'De Small Blind/Big Blind is altijd afhankelijk van het minimum en maximum startbedrag. Het minimale startbedrag is altijd 20x de Big Blind, terwijl het maximale startbedrag 100x de Big Blind is. De Small Blind is bijna altijd de helft van de Big Blind. Deze regel verschilt in de toernooikamer, waarbij de kleine blind/grote blind altijd twee keer de basiswaarde is. Bovendien groeit de Small Blind/Big Blind in de toernooikamer gestaag tijdens het toernooi.',
	'JV_POKER_HELP_BLIND_QUESTION'		=> 'Blind/Big Blind inzetten tussen kamers zijn verschillend, waarom?',

	'JV_POKER_HELP_MOVE_TIME_ANSWER'	=> '“Bewegingstijd” is de tijd gedurende welke een gebruiker kan beslissen om te controleren, te wedden of te folden. Als deze tijd verloopt, zijn er twee automatische opties beschikbaar:
	<ul>
		<li>1. Als de actie van de vorige speler geen “Call” was, kiezen we automatisch “Check”.</li>
		<li>2. Als de actie van de vorige speler “Call” was, “Folden” we onze kaarten automatisch.</li>
	<ul>',
	'JV_POKER_HELP_MOVE_TIME_QUESTION'	=> 'Wat is de Bewegingstijd?',

	'JV_POKER_HELP_STATUS_ANSWER'		=> 'Het veld onder “Status” geeft aan of deze kamer deel uitmaakt van een spel.',
	'JV_POKER_HELP_STATUS_QUESTION'		=> 'Wat betekent status?',

	'JV_POKER_HELP_RH_ANSWER'			=> 'Als een kamer rood is gemarkeerd, betekent dit dat niemand meer in de kamer is, maar een actief niet voltooid spel aan de gang is. Daar zijn verschillende mogelijke redenen voor:
	<ul>
		<li>1. De server is tijdens het spel gestopt.</li>
		<li>2. De beheerder heeft het forum uitgeschakeld.</li>
		<li>3. De beheerder heeft phpBB Holdem Poker uitgeschakeld.</li>
		<li>4. De beheerder heeft het puntensysteem dat is geïntegreerd met phpBB Holdem Poker uitgeschakeld.</li>
		<li>5. De beheerder heeft deze kamer uitgeschakeld.</li>
		<li>6. De beheerder heeft het kamertype gewijzigd.</li>
		<li>7. Gebruikers hebben de kamer niet goed verlaten. Ze hebben bijvoorbeeld gewoon het browservenster gesloten tijdens het spel.</li>
		<li>8. De internetverbinding van de gebruikers naar de site werd onderbroken.</li>
	</ul>
	Als we een dergelijke gemarkeerde ruimte betreden, wordt de game die nog gaande is onmiddellijk geëvalueerd en voltooid. Natuurlijk zal de gebruiker hier niets van zien. Maar als u aan de tafel gaat zitten, kunt u in de shoutbox zien wie de laatste ronde heeft gewonnen.',
	'JV_POKER_HELP_RH_QUESTION'			=> 'Ik zag een kamer met een rode markering, waarom?',

// step 3
	'JV_POKER_HELP_DROP_TIME_ANSWER'	=> 'In dit geval wordt het aftellen van de opstaan tijd die de beheerder heeft ingesteld, van kracht. Bijvoorbeeld: als de opstaan tijd 5 minuten is, blijft u 5 minuten aan de tafel zitten en aan het einde van die tijd sta je automatisch op en eindigt het spel voor jou. Als u binnen de ingestelde tijd terugkeert naar het internet, blijft u spelen vanwaar je gestopt bent.',
	'JV_POKER_HELP_DROP_TIME_QUESTION'	=> 'Wat gebeurt er als mijn internetverbinding wordt onderbroken?',

	'JV_POKER_HELP_DROP_TOKEN_ANSWER'	=> 'In dit geval zijn 3 opties beschikbaar:
	<ul>
		<li>1. Je kunt geen chips uit een oefenruimte halen, dus je chips die er nog in zitten worden geannuleerd.</li>
		<li>2. Natuurlijk, als je uit een normale kamer wordt gegooid, worden je resterende chips teruggegeven.</li>
		<li>3. Alleen de winnaar kan de prijs uit de toernooikamer winnen. Dus als je er tijdens het toernooi wordt uitgegooid, worden je bestaande chips proportioneel verdeeld tussen de huidige spelers. Als je wordt weggegooid voordat het toernooi begint, worden je chips teruggegeven.</li>
	</ul>',
	'JV_POKER_HELP_DROP_TOKEN_QUESTION'	=> 'Wat gebeurt er met mijn chips als ik de kamer wordt uitgegooid?',

	'JV_POKER_HELP_PAUSE_ANSWER'		=> 'Als je op de pauzeknop drukt, is dit gelijk aan het verlaten van het spel, dus als de ronde doorgaat, worden je kaarten gefold. Deze optie kan gebruikt worden als de speler niet wil dat iemand anders in de tussentijd zijn plaats inneemt. Natuurlijk is de pauzetijd beperkt. De limiet wordt bepaald door de beheerder.',
	'JV_POKER_HELP_PAUSE_QUESTION'		=> 'Wat gebeurt er als ik op de pauzeknop druk?',

	'JV_POKER_HELP_STAND_UP_ANSWER'		=> 'In dit geval zijn er twee mogelijkheden:
	<ul>
		<li>1. Je staat op van de tafel. Je verlaat de kamer niet. Als je in een oefenkamer bent, kun je je chips niet meenemen, dus ze worden geannuleerd.</li>
		<li>2. Je staat op van de tafel. Je verlaat de kamer niet. Als u zich in een normale kamer bevindt, worden uw gewonnen chips toegevoegd aan uw saldo.</li>
	</ul>',
	'JV_POKER_HELP_STAND_UP_QUESTION'	=> 'Wat gebeurt er wanneer ik op de knop “Omhoog” druk?',

	'JV_POKER_HELP_EXIT_ANSWER'			=> 'In dit geval zijn 3 opties beschikbaar:
	<ul>
		<li>1. Je kunt geen chips uit een oefenkamer halen, dus je chips worden geannuleerd en je verlaat de kamer.</li>
		<li>2. Als je de normale kamer verlaat, worden de chips die je verdient toegevoegd aan je chips saldo en verlaat je de kamer.</li>
		<li>3. Alleen de winnaar kan de prijs winnen in de Toernooikamer. Dus als je het spel afsluit tijdens het toernooi, worden je bestaande chips proportioneel verdeeld tussen de huidige spelers. Als je stopt voordat het toernooi begint, worden je chips teruggegeven en verlaat je de kamer.</li>
	</ul>',
	'JV_POKER_HELP_EXIT_QUESTION'		=> 'Wat gebeurt er als ik op de “Verlaat het spel” knop druk?',

	'JV_POKER_HELP_INACTIVE_ANSWER'		=> 'In dit geval wordt het aftellen van de "Niet actieve tijd" dat de beheerder heeft ingesteld, van kracht. Bijvoorbeeld: als de inactieve tijd 10 minuten is, kunt u 10 minuten blijven terwijl u nergens op reageert. Aan het einde van de tijd staat u automatisch op van de tafel. Dit voorkomt dat iemand het spel opzettelijk wil vertragen.',
	'JV_POKER_HELP_INACTIVE_QUESTION'	=> 'Wat gebeurt er als ik tijdens het spel niet op niets reageer?',

	'JV_POKER_HELP_BET_ANSWER'			=> 'De decimale waarde is afhankelijk van het aantal chips. Als je meer dan $100 chips hebt, kun je een geheel getal verhogen zoals: ($5), als je minder dan $100 hebt, maar je hebt meer dan $50 chips, kun je één decimaal verhogen, bijvoorbeeld: ($5.50) als je chips $50 of minder bereikt, dan kun je tot twee decimalen inzetten ($5.55).',
	'JV_POKER_HELP_BET_QUESTION'		=> 'Waar hangt de decimale waarde van af bij het plaatsen van een weddenschap?',

	'JV_POKER_HELP_MAX_CHIPS_ANSWER'	=> 'In dit geval zijn 2 opties beschikbaar:
	<ul>
		<li>1. In de normale en oefenkamer niet kamer. Als je constant wint en niet van de tafel opstaat, kunnen je chips toch toenemen.</li>
		<li>2. Niet in de toernooikamer. Als je een toernooi speelt en je wint, en niet van de tafel opstaat totdat het volgende toernooi begint, keren je chips automatisch terug naar het startbedrag. Uw extra chips worden bijgeschreven op uw chips saldo.</li>
	</ul>',
	'JV_POKER_HELP_MAX_CHIPS_QUESTION'	=> 'Kun je meer chips spelen dan de maximale inzet?',

	'JV_POKER_HELP_MOVETIME_ANSWER'		=> 'Als u een dergelijk probleem hebt, moet u dit melden aan een beheerder.',
	'JV_POKER_HELP_MOVETIME_QUESTION'	=> 'Verplaatsingstijd is te kort wat te doen?',

	'JV_POKER_HELP_OFFLINE_ANSWER'		=> 'Als de avatar van de gebruiker grijs knippert, betekent dit dat de gebruiker momenteel offline is of niet verbonden is met de kamer Dit kan om twee redenen:
	<ul>
		<li>De internetverbinding van de gebruiker is beëindigd.</li>
		<li>De beheerder staat de gebruiker alleen toe om in een actief venster te spelen, dit wil zeggen dat de gebruiker geen andere webpagina kan bekijken. In dat geval ontvangt de gebruiker geen nieuwe gegevens over de huidige status van het poker spel. Er is een soort van pauze voor hem en terwijl hij niet actief naar poker kijkt, blijft hij offline.</li>
	</ul>',
	'JV_POKER_HELP_OFFLINE_QUESTION'	=> 'De avatar van de gebruiker knippert grijs, wat betekent dat?',

	'JV_POKER_HELP_SHOWDOWN_ANSWER'		=> 'De tijd van de presentatie van de kaarten aan het einde van het spel wordt bepaald door de beheerder.',
	'JV_POKER_HELP_SHOWDOWN_QUESTION'	=> 'Hoe lang zijn de kaarten zichtbaar aan het einde van het spel?',

	'JV_POKER_HELP_GAME_SOUND_ANSWER'	=> 'Ja. Het spelgeluid kan op elk moment tijdens het spel worden in of uitgeschakeld. Hiermee zijn alle geluiden inclusief het berichtenbord uitgeschakeld. De instelling wordt onthouden.',
	'JV_POKER_HELP_GAME_SOUND_QUESTION'	=> 'Kan ik het geluid van het spel in/uitschakelen',

	'JV_POKER_HELP_JACKPOT_ANSWER'		=> 'Het gebruik van de jackpot kan worden ingeschakeld door de beheerder en de beheerder bepaald ook het percentage. Het jackpotfonds kan zich ophopen in normale kamers op basis van het percentage dat gebruikers uit hun eigen stapelvoorraad voor elke stoel verzamelen. Er zijn twee opties om de jackpot te winnen.:
	<ul>
		<li>De beheerder schakelt het kamertype van Normaal naar Toernooi. Op deze manier kan de winnaar van het toernooi de opgebouwde prijs samen met zijn winst ontvangen.</li>
		<li>De beheerder maakt een nieuwe toernooikamer en draagt de prijs over van de normale kamer naar de toernooikamer</li>
	</ul>',
	'JV_POKER_HELP_JACKPOT_QUESTION'	=> 'Wat is de hoofdprijs en hoe verkrijg ik deze?',

// step 4
	'JV_POKER_HELP_SHOUT_ANSWER'		=> 'Als de beheerder toestemming heeft gegeven, ja. Als u niet over de vereiste toestemming beschikt, kunt u alleen berichten over de vooruitgang van het spel in de shoutbox lezen.',
	'JV_POKER_HELP_SHOUT_QUESTION'		=> 'Kan ik de shoutbox gebruiken tijdens een spel?',

	'JV_POKER_HELP_P_SHOUT_ANSWER'		=> 'Indien ingeschakeld door de beheerder, ja. Als u dit niet inschakelt, verschijnt alleen de “Pauze” in de shoutbox.',
	'JV_POKER_HELP_P_SHOUT_QUESTION'	=> 'Kan ik de shoutbox gebruiken tijdens een pauze?',

	'JV_POKER_HELP_SU_SHOUT_ANSWER'		=> 'Nee, de shoutbox kan alleen worden gebruikt door een zittende gebruiker.',
	'JV_POKER_HELP_SU_SHOUT_QUESTION'	=> 'Als ik opsta, kan ik de shoutbox gebruiken?',

	'JV_POKER_HELP_E_SHOUT_ANSWER'		=> 'Indien ingeschakeld door de beheerder, ja.',
	'JV_POKER_HELP_E_SHOUT_QUESTION'	=> 'Kan ik smileys gebruiken in mijn bericht?',

	'JV_POKER_HELP_W_SHOUT_ANSWER'		=> 'Het aantal gewonnen chips in de shoutbox dekt alleen de echte winst. Je hebt dus geen eigen geïnvesteerde chips en extra chips.',
	'JV_POKER_HELP_W_SHOUT_QUESTION'	=> 'De winsten op het prikbord komen niet overeen met het bedrag in de pot?',

	'JV_POKER_HELP_S_SHOUT_ANSWER'		=> 'De shoutbox kan alleen de laatste 8 regels weergeven, dus verder scrollen is niet mogelijk.',
	'JV_POKER_HELP_S_SHOUT_QUESTION'	=> 'Hoe scrol ik tussen de berichten?',

	'JV_POKER_HELP_A_SHOUT_ANSWER'		=> 'Er is momenteel geen archief, maar het is gepland.',
	'JV_POKER_HELP_A_SHOUT_QUESTION'	=> 'Is er een mogelijkheid voor het bekijken van oudere berichten?',

	'JV_POKER_HELP_SHOUT_SOUND_ANSWER'	=> 'Ja, u kunt de shoutbox afzonderlijk uitschakelen. Als u de shoutbox uitschakelt, wordt het geluid van het spel niet uitgeschakeld.',
	'JV_POKER_HELP_SHOUT_SOUND_QUESTION'=> 'Kan ik de shoutbox uitschakelen?',

// step 5
	'JV_POKER_HELP_LEADERS_ANSWER'		=> 'De kampioenen worden voornamelijk gerangschikt op basis van het inkomen en, in het andere geval, op basis van het win percentage.',
	'JV_POKER_HELP_LEADERS_QUESTION'	=> 'Waarop worden de kampioenen gerangschikt?',

	'JV_POKER_HELP_USER_STATS_ANSWER'	=> 'Ja, als de beheerder het bekijken van statistieken toestaat.',
	'JV_POKER_HELP_USER_STATS_QUESTION'	=> 'Kan ik de statistieken van gebruikers zien?',

	'JV_POKER_HELP_INCOME_ANSWER'		=> 'In principe slaan alleen de kamers “Normaal” en “Toernooi” het inkomen op. Inkomen is het bedrag dat een gebruiker wint of verliest tijdens zijn spel. Het inkomen houdt alleen rekening met het gespeelde bedrag. Als een gebruiker bijvoorbeeld een “Normale” kamer betreed met $100 en dit bedrag bijvoorbeeld wordt toegevoegd aan de prijzenpot van de hoofdprijs “5% is $5”, dan is het gespeelde bedrag $95. Als u dit bedrag verliest, bedraagt uw inkomen $95.',
	'JV_POKER_HELP_INCOME_QUESTION'		=> 'Wat is inkomen?',

	'JV_POKER_HELP_U_INCOME_ANSWER'		=> 'Het inkomen wordt alleen bijgewerkt als de gebruiker opstaat van de tafel.',
	'JV_POKER_HELP_U_INCOME_QUESTION'	=> 'Tijdens het spel verandert mijn inkomen niet, waarom?',

	'JV_POKER_HELP_P_STATS_ANSWER'		=> 'Kortom, behalve voor inkomen. Als de beheerder toestemming geeft om de inkomsten in de oefenkamer op te slaan, worden alle statistische gegevens opgeslagen in de oefenkamers.',
	'JV_POKER_HELP_P_STATS_QUESTION'	=> 'Oefenkamers slaan ook statistische gegevens op?',

// step 6
	'JV_POKER_HELP_RESET_ANSWER'		=> 'In dit geval worden alle chips van alle gebruikers automatisch omgezet voordat ze worden verwijderd.',
	'JV_POKER_HELP_RESET_QUESTION'		=> 'Wat gebeurt er met mijn chips wanneer een beheerder de pokergegevens van de gebruiker verwijdert?',

	'JV_POKER_HELP_DISABLE_ANSWER'		=> 'In dit geval zijn 3 opties beschikbaar:
	<ul>
		<li>1. Alle oefenkamers worden onmiddellijk gestopt en alle gebruikers staan op.</li>
		<li>2. Normale kamers blijven werken tot het einde van het huidige spel. Aan het einde van het spel staan alle gebruikers automatisch op van de tafel.</li>
		<li>3. De toernooikamers zullen blijven werken tot het einde van de competitie. Aan het einde van het toernooi staan alle gebruikers automatisch op van de tafel.</li>
	</ul>',
	'JV_POKER_HELP_DISABLE_QUESTION'	=> 'Wat gebeurt er als de beheerder het forum of poker uitschakelt?',

	'JV_POKER_HELP_EXT_DIS_ANSWER'		=> 'In dit geval stoppen alle kamer typen. Als de beheerder deze terug inschakelt voordat de “ejecttijd” is verstreken, kunnen de spellen worden voortgezet. Als de beheerder deze terug inschakelt na de tijd, worden de huidige spellen geëvalueerd als iemand de kamer betreedt.',
	'JV_POKER_HELP_EXT_DIS_QUESTION'	=> 'Wat gebeurt er als de beheerder de extensie “phpBB Holdem Poker” uitschakelt?',

	'JV_POKER_HELP_PS_ANSWER'			=> 'In dit geval stoppen alle Normale en Oefenkamers. Als de beheerder deze terug inschakelt voordat de “ejecttijd” is verstreken, kunnen de spellen worden voortgezet. Als de beheerder deze terug inschakelt na de tijd, worden de huidige spellen geëvalueerd als iemand de kamer betreedt.',
	'JV_POKER_HELP_PS_QUESTION'			=> 'Wat gebeurt er als de beheerder het “Puntensysteem” deactiveert?',

	'JV_POKER_HELP_ER_ANSWER'			=> 'De beheerder kan de oefenkamers tijdens het spel wijzigen. Normale en toernooikamers kunnen tijdens een actief spel niet worden gewijzigd of verwijderd. U kunt echter op elk gewenst moment permissies en algemene instellingen wijzigen, en deze rechten of instellingen kunnen van invloed zijn op elke kamer of gebruiker.',
	'JV_POKER_HELP_ER_QUESTION'			=> 'Wat gebeurt er als de beheerder de kamer instellingen wijzigt?',

	'JV_POKER_HELP_AUTH_ANSWER'			=> 'Er zijn momenteel 3 gebruikers permissies:
	<ul>
		<li>Kan poker gebruiken.</li>
		<li>Kan de shoutbox gebruiken.</li>
		<li>Kan de statistieken bekijken.</li>
	</ul>',
	'JV_POKER_HELP_AUTH_QUESTION'		=> 'Wat zijn de permissies?',

	'JV_POKER_HELP_CONFIG_ANSWER'		=> 'Er zijn een aantal algemene instellingen, maar enkel diegene die invloed kunnen hebben op het spel worden hier genoemd:
	<ul>
		<li>IP controle.</li>
		<li>Schakel shoutbox in.</li>
		<li>Pauze in de shoutbox</li>
		<li>Smileys inschakelen.</li>
		<li>Drop tijd.</li>
		<li>Pauzetijd.</li>
		<li>Inactiviteitstijd.</li>
		<li>Tijd van de kaart presentatie.</li>
	</ul>',
	'JV_POKER_HELP_CONFIG_QUESTION'		=> 'Welke algemene instellingen zijn er?',

// step 7
	'JV_POKER_HELP_CREATE_ANSWER'		=> 'Deze add-on (in de oorspronkelijke vorm) is gemaakt, gepubliceerd en auteursrechtelijk beschermd door de <a href="https://jv-arcade.com/">JV-Arcade Groep</a>. Het is beschikbaar onder de <a href="https://jv-arcade.com/License.html">JVA JV-Arcade Licentie</a> en mag niet worden gedeeld of gedistribueerd. Verdere informatie onder de link.',
	'JV_POKER_HELP_CREATE_QUESTION'		=> 'Wie heeft deze phpBB Holdem Poker extensie gemaakt?'
));

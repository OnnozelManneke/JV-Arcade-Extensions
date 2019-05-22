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
	'ACP_CAT_JV_POKER'								=> 'Poker',
	'ACP_CAT_JV_POKER_MANAGE'						=> 'Beheer poker',
	'ACP_CAT_JV_POKER_SETTINGS'						=> 'Hoofd instellingen',
	'ACP_JV_POKER_ACTIVE_WINDOW'					=> 'Alleen actief venster',
	'ACP_JV_POKER_ACTIVE_WINDOW_EXPLAIN'			=> 'Indien ingeschakeld, wordt het Ajax script alleen uitgevoerd in het actieve venster op de achtergrond. Dit voorkomt dat een gebruiker de server overbelast bij het openen van meerdere vensters.',
	'ACP_JV_POKER_ADD_RADIO'						=> 'Voeg een radiostation toe',
	'ACP_JV_POKER_ADD_RADIO_EXPLAIN'				=> 'Hier kunt u een nieuw radiostation toevoegen.',
	'ACP_JV_POKER_ADD_ROOM'							=> 'Kamer toevoegen',
	'ACP_JV_POKER_ADD_ROOM_EXPLAIN'					=> 'U kunt uw nieuwe kamer zo ver als u kunt configureren.',
	'ACP_JV_POKER_APPROVAL_PERSONAL_DATA_CONFIRM'	=> 'Ik ga ermee akkoord om persoonlijke gegevens te verzenden en op te slaan.',
	'ACP_JV_POKER_AUTO_LOAD_ENABLE'					=> 'Kamer met automatisch laden',
	'ACP_JV_POKER_AUTO_LOAD_ENABLE_EXPLAIN'			=> 'Hiermee kunnen gebruikers zien of u per ongeluk het venster sluit en vervolgens wordt het poker spel automatisch geladen in de kamer waar hij zat.',
	'ACP_JV_POKER_AUTO_START'						=> 'Automatische start',
	'ACP_JV_POKER_AUTO_START_EXPLAIN'				=> 'Als er ten minste twee gebruikers in de kamer gaan zitten start het spel automatisch. Wanneer deze optie is uitgeschakeld moeten spelers het spel handmatig starten.<br><em>Merk op dat deze optie niet geldig is voor toernooikamers.</em>',
	'ACP_JV_POKER_CREATED_ROOMS'					=> 'Aangemaakte kamers',
	'ACP_JV_POKER_CREATE_NEW_ROOM'					=> 'Maak een nieuwe kamer',
	'ACP_JV_POKER_CREATE_RADIO'						=> 'Voeg radiostation toe',
	'ACP_JV_POKER_DISABLE'							=> 'Poker uitschakelen',
	'ACP_JV_POKER_DISABLE_EXPLAIN'					=> 'Dit zal het poker spel uitschakelen voor gebruikers. U kunt ook een kort (255 tekens) bericht invoeren om weer te geven als u dat wenst.',
	'ACP_JV_POKER_DISCONNECT_TIME'					=> 'Drop tijd',
	'ACP_JV_POKER_DISCONNECT_TIME_EXPLAIN'			=> 'Als de gebruiker geen verbinding heeft met internet wordt deze tijd gebruikt om de gebruiker te laten opstaan van de tafel.',
	'ACP_JV_POKER_DISPLAY_PLAYING_USERS'			=> 'Laat zien wie er speelt',
	'ACP_JV_POKER_DISPLAY_PLAYING_USERS_EXPLAIN'	=> 'Indien ingeschakeld worden spelers die in de kamers blijven of in de kamers spelen weergegeven op de poker hoofdpagina.',
	'ACP_JV_POKER_EDIT_RADIO'						=> 'Bewerk een radio station',
	'ACP_JV_POKER_EDIT_RADIO_EXPLAIN'				=> 'Hier kunt u de naam en het adres van de radiozender bewerken.',
	'ACP_JV_POKER_EDIT_ROOM'						=> 'Bewerk kamer',
	'ACP_JV_POKER_EDIT_ROOM_BLOCKED'				=> '<strong>Kamer bewerken of verwijderen geblokkeerd!</strong><br>De <strong>“%s kamer”</strong> wordt momenteel gespeeld, of gebruikers zijn ten onrechte opgestaan van de tafel, dus de partij is nog niet geëvalueerd.<br><br>Het bewerken of verwijderen van de kamer is alleen mogelijk als er geen spel aan de gang is.<br><br><em>Alleen oefenkamers kunnen tijdens het spel worden bewerkt.</em> ',
	'ACP_JV_POKER_EDIT_ROOM_EXPLAIN'				=> 'U kunt de configuratie van de kamer instellen naar eigen keuze.',
	'ACP_JV_POKER_END_USE_PERIOD'					=> 'Einde van gebruiksperiode',
	'ACP_JV_POKER_EXT_NAME_JV_PS'					=> 'JV Punten Systeem',
	'ACP_JV_POKER_EXT_NAME_ULTIMATE_PS'				=> 'Ultimate Punten Extensie',
	'ACP_JV_POKER_INSTALL_EXT_DETECT_DISABLED'		=> 'De phpBB Holdem Poker heeft gedetecteerd dat je de <strong>“%s”</strong> hebt geïnstalleerd en uitgeschakeld.',
	'ACP_JV_POKER_INSTALL_EXT_DETECT_ENABLED'		=> 'De phpBB Holdem Poker heeft gedetecteerd dat je de <strong>“%s”</strong> hebt geïnstalleerd en ingeschakeld.',
	'ACP_JV_POKER_INSTALL_TIME'						=> 'Poker software installatie',
	'ACP_JV_POKER_IPCHECK_ENABLE'					=> 'IP controle',
	'ACP_JV_POKER_IPCHECK_ENABLE_EXPLAIN'			=> 'Slechts één gebruiker kan in een kamer met één IP adres zitten.',
	'ACP_JV_POKER_JACKPOT_ENABLE'					=> 'Gebruik jackpot',
	'ACP_JV_POKER_JACKPOT_ENABLE_EXPLAIN'			=> 'De jackpot zal toenemen afhankelijk van het ingestelde percentage en de waarde van de gebruiker chips.<br><em>Merk op dat deze optie alleen van toepassing is op standaard kamers.</em>',
	'ACP_JV_POKER_JACKPOT_EXPLAIN'					=> 'Het bedrag van de huidige jackpot.',
	'ACP_JV_POKER_JACKPOT_PERCENT'					=> 'Jackpot procent',
	'ACP_JV_POKER_JACKPOT_PERCENT_EXPLAIN'			=> 'De ingestelde waarde wordt van de gebruikers afgetrokken als ze in de kamer gaan zitten, dit is het bedrag waarmee de jackpot altijd groeit.',
	'ACP_JV_POKER_KICKTIMER'						=> 'Inactiviteit tijd',
	'ACP_JV_POKER_KICKTIMER_EXPLAIN'				=> 'Als een speler gedurende een bepaalde tijd niet op een knop drukt, waardoor het spel wordt belemmerd, wordt de gebruiker na verloop van deze tijd automatisch verwijderd.',
	'ACP_JV_POKER_LICENSE'							=> 'Licentie',
	'ACP_JV_POKER_LICENSE_CONFIRM'					=> 'Ik heb de %s“Licentie”%s zorgvuldig gelezen en begrepen',
	'ACP_JV_POKER_MAIN'								=> 'phpBB Holdem Poker - Hoofdpagina',
	'ACP_JV_POKER_MAIN_INDEX'						=> 'Welkom pagina',
	'ACP_JV_POKER_MAIN_TITLE'						=> 'Welkom bij phpBB Holdem Poker!',
	'ACP_JV_POKER_MAIN_TITLE_EXPLAIN'				=> 'Bedankt dat je phpBB Holdem Poker hebt gekozen als je pokeroplossing. Dit scherm geeft je een snel overzicht van alle verschillende statistieken van je poker. Via de links aan de linkerkant van dit scherm kun je elk aspect van je poker ervaringen beheersen. Elke pagina bevat instructies voor het gebruik van de hulpmiddelen.',
	'ACP_JV_POKER_MANAGE'							=> 'phpBB Holdem Poker - Beheer',
	'ACP_JV_POKER_MANAGE_RADIO'						=> 'Radio beheer',
	'ACP_JV_POKER_MANAGE_RADIO_EXPLAIN'				=> 'Hier kunt u nieuwe radiozenders maken of bestaande zenders verwijderen en bewerken.',
	'ACP_JV_POKER_MANAGE_ROOMS'						=> 'Kamer beheer',
	'ACP_JV_POKER_MANAGE_ROOMS_EXPLAIN'				=> 'Hier kunt u nieuwe kamers maken of bestaande wijzigen of verwijderen.',
	'ACP_JV_POKER_MORE_ROOM_ENABLE'					=> 'Meerdere kamers tegelijkertijd gebruiken',
	'ACP_JV_POKER_MORE_ROOM_ENABLE_EXPLAIN'			=> 'Hiermee kunnen gebruikers tegelijk in meerdere kamers zitten.<br><em>Merk op dat deze optie niet werkt als <strong>“Kamers met automatisch laden”</strong> is ingeschakeld.</em>',
	'ACP_JV_POKER_PAUSE_TIME'						=> 'Pauze tijd',
	'ACP_JV_POKER_PAUSE_TIME_EXPLAIN'				=> 'Een speler kan deze tijd maximaal nemen tijdens de pauzetijd, als deze vervalt, zal de gebruiker automatisch opstaan.',
	'ACP_JV_POKER_PLAYED_PARTY'						=> 'Gespeelde spellen',
	'ACP_JV_POKER_PLAYED_PARTY_DAY'					=> 'Gespeelde spellen per dag',
	'ACP_JV_POKER_PLAYED_TOURNAMENTS'				=> 'Gespeelde toernooien',
	'ACP_JV_POKER_PRACTICE_INCOME'					=> 'Schakel inkomen in voor oefenkamers',
	'ACP_JV_POKER_PRACTICE_INCOME_EXPLAIN'			=> 'Hier kun je de oefenkamer spellen inschakelen om je inkomensgegevens te registreren.<br><em>Merk op dat u deze optie moet inschakelen als u geen puntensysteem gebruikt. De kampioenen worden gerangschikt op inkomen. In het andere geval, wordt de win verhouding in aanmerking genomen.</em>',
	'ACP_JV_POKER_PRACTICE_IPCHECK_ENABLE'			=> 'IP controle in de oefenkamer',
	'ACP_JV_POKER_PRACTICE_IPCHECK_ENABLE_EXPLAIN'	=> 'Hebben de mogelijkheid om in de oefenkamer te spelen met IP controle.<br>Merk op dat dit alleen werkt als de IP-controle is ingeschakeld.',
	'ACP_JV_POKER_PRIVACY_POLICY_CONFIRM'			=> 'Het %s“Privacybeleid”%s is zorgvuldig gelezen en geaccepteerd.',
	'ACP_JV_POKER_RADIO_ADD_SUCCESS'				=> 'Het %s radiostation is succesvol aangemaakt.',
	'ACP_JV_POKER_RADIO_DELETE'						=> 'Verwijder het radiostation',
	'ACP_JV_POKER_RADIO_DELETE_CONFIRM'				=> 'Weet je zeker dat je dit radiostation wilt verwijderen?',
	'ACP_JV_POKER_RADIO_DELETE_SUCCESS'				=> 'Het %s radiostation is succesvol verwijderd.',
	'ACP_JV_POKER_RADIO_EDIT_SUCCESS'				=> 'Het %s radiostation is met succes bewerkt.',
	'ACP_JV_POKER_RADIO_ENABLE'						=> 'Schakel de radio in',
	'ACP_JV_POKER_RADIO_ENABLE_EXPLAIN'				=> 'Staat gebruikers toe om naar de radio te luisteren tijdens het spelen van poker.',
	'ACP_JV_POKER_RADIO_NAME'						=> 'Radio naam',
	'ACP_JV_POKER_RADIO_NAME_EXPLAIN'				=> 'Voer de naam van de radio in. Gebruik taalconstante als de naam wordt weergegeven vanuit het taalbestand.',
	'ACP_JV_POKER_RADIO_NO_ID'						=> 'De gevraagde radio bestaat niet.',
	'ACP_JV_POKER_RADIO_SETTINGS'					=> 'Radio instellingen',
	'ACP_JV_POKER_RADIO_STATION'					=> 'Radio station',
	'ACP_JV_POKER_RADIO_STATIONS'					=> 'Radio stations',
	'ACP_JV_POKER_RADIO_URL'						=> 'Radio url adres',
	'ACP_JV_POKER_RADIO_URL_EXPLAIN'				=> 'Voer de URL in om toegang te krijgen tot het radiostation.',
	'ACP_JV_POKER_REFRESH_ENABLE'					=> 'Gegevens vernieuwen',
	'ACP_JV_POKER_REFRESH_ENABLE_EXPLAIN'			=> 'Als u deze optie inschakelt, voegen we een knop voor het vernieuwen van het menu item toe, zodat gebruikers hun huidige gegevens altijd kunnen vernieuwen.<br><em>Houd er rekening mee dat deze optie in principe niet vereist is.</em>',
	'ACP_JV_POKER_ROOM_ADD_SUCCESS'					=> 'De %s kamer is succesvol aangemaakt.',
	'ACP_JV_POKER_ROOM_AUTO_RESIZE'					=> 'Kamer automatisch aanpassen',
	'ACP_JV_POKER_ROOM_AUTO_RESIZE_EXPLAIN'			=> 'Indien ingeschakeld, wordt de kamer automatisch aangepast aan de grootte van het venster.',
	'ACP_JV_POKER_ROOM_CLOSE_ALL_CHAIRS'			=> 'Kamer sluiten',
	'ACP_JV_POKER_ROOM_CLOSE_ALL_CHAIRS_EXPLAIN'	=> 'Als de functie wordt ingeschakeld, wordt de kamer automatisch gesloten als alle stoelen bezet zijn of als het toernooi is gestart. Dus geen andere gebruiker kan de desbetreffende kamer betreden.',
	'ACP_JV_POKER_ROOM_DELETE'						=> 'Verwijder poker kamer',
	'ACP_JV_POKER_ROOM_DELETE_CONFIRM'				=> 'Weet je zeker dat je de poker kamer wilt verwijderen?',
	'ACP_JV_POKER_ROOM_DELETE_SUCCESS'				=> 'De %s kamer is succesvol verwijderd.',
	'ACP_JV_POKER_ROOM_EDIT_SUCCESS'				=> 'De %s kamer is succesvol bewerkt.',
	'ACP_JV_POKER_ROOM_LIMIT'						=> 'Maximum Bedrag',
	'ACP_JV_POKER_ROOM_LIMIT_PRACTICE_EXPLAIN'		=> 'Het ingestelde bedrag dat door gebruikers wordt ontvangen wanneer ze gaan zitten.',
	'ACP_JV_POKER_ROOM_LIMIT_TOURNAMENT_EXPLAIN'	=> 'Het ingestelde bedrag dat gebruikers kunnen registreren voor het toernooi.',
	'ACP_JV_POKER_ROOM_LOW'							=> 'Inkoop bedrag',
	'ACP_JV_POKER_ROOM_LOW_EXPLAIN'					=> 'Het ingestelde bedrag is het laagste bedrag dat gebruikers in de kamer kunnen gebruiken.',
	'ACP_JV_POKER_ROOM_MOVETIMER'					=> 'Bewegingstijd',
	'ACP_JV_POKER_ROOM_MOVETIMER_EXPLAIN'			=> 'Nadat de ingestelde tijd is verstreken, springt het spel automatisch naar de volgende gebruiker.',
	'ACP_JV_POKER_ROOM_NAME'						=> 'Kamer naam',
	'ACP_JV_POKER_ROOM_NAME_EXPLAIN'				=> 'De kamer verschijnt onder de opgegeven naam. Gebruik taalconstante als de naam wordt weergegeven vanuit het taalbestand.',
	'ACP_JV_POKER_ROOM_NOLIMIT_EXPLAIN'				=> 'Zonder limiet kunnen gebruikers elk bedrag verhogen.',
	'ACP_JV_POKER_ROOM_PLACE'						=> 'Aantal stoelen',
	'ACP_JV_POKER_ROOM_PLACE_EXPLAIN'				=> 'U kunt bepalen hoeveel gebruikers tegelijkertijd in de kamer kunnen zitten.',
	'ACP_JV_POKER_ROOM_SETTINGS'					=> 'Kamer instellingen',
	'ACP_JV_POKER_ROOM_STYLES'						=> 'Stijl',
	'ACP_JV_POKER_ROOM_STYLES_EXPLAIN'				=> 'De kamer verschijnt met de ingestelde stijl.',
	'ACP_JV_POKER_ROOM_TYPE_PRACTICE_EXPLAIN'		=> 'Gebruikers kunnen gratis spelen.',
	'ACP_JV_POKER_ROOM_TYPE_STANDARD_EXPLAIN'		=> 'Gebruikers zetten hun eigen punten in het spel.',
	'ACP_JV_POKER_ROOM_TYPE_TOURNAMENT_EXPLAIN'		=> 'Gebruikers zetten hun eigen punten in het toernooi.',
	'ACP_JV_POKER_SETTINGS'							=> 'phpBB Holdem Poker - instellingen',
	'ACP_JV_POKER_SETTINGS_GAME'					=> 'Spel instellingen',
	'ACP_JV_POKER_SETTINGS_GENERAL'					=> 'Algemene instellingen',
	'ACP_JV_POKER_SETTINGS_GENERAL_EXPLAIN'			=> 'Configureer verschillende instellingen voor phpBB Holdem Poker',
	'ACP_JV_POKER_SETTINGS_LOAD'					=> 'Laad instellingen',
	'ACP_JV_POKER_SETTINGS_LOAD_EXPLAIN'			=> 'Hier kun je bepaalde pokerfuncties in of uitschakelen voor betere prestaties, indien nodig.',
	'ACP_JV_POKER_SETTINGS_ROOM'					=> 'Kamer instellingen',
	'ACP_JV_POKER_SETTINGS_ROOM_EXPLAIN'			=> 'Hier kunt u de kamer instellingen wijzigen.',
	'ACP_JV_POKER_SHOUT_ENABLE'						=> 'Shoutbox inschakelen',
	'ACP_JV_POKER_SHOUT_ENABLE_EXPLAIN'				=> 'Staat gebruikers toe om een bericht naar elkaar te schrijven.',
	'ACP_JV_POKER_SHOUT_VIEW_PAUSE'					=> 'Shoutbox pauze tijd',
	'ACP_JV_POKER_SHOUT_VIEW_PAUSE_EXPLAIN'			=> 'Gebruikers die pauzeren, kunnen ook de shoutbox gebruiken.',
	'ACP_JV_POKER_SHOWTIMER'						=> 'Tijd van kaart presentatie',
	'ACP_JV_POKER_SHOWTIMER_EXPLAIN'				=> 'Als het spel is afgelopen en de kaarten worden getoond, zullen ze de kaarten voor de ingestelde tijd worden weergeven.',
	'ACP_JV_POKER_SMILIES_LIMIT'					=> 'Maximale hoeveelheid smileys',
	'ACP_JV_POKER_SMILIES_LIMIT_EXPLAIN'			=> 'Bepaalt hoeveel smileys worden geladen.',
	'ACP_JV_POKER_SMILIE_ENABLE'					=> 'Smileys inschakelen',
	'ACP_JV_POKER_SMILIE_ENABLE_EXPLAIN'			=> 'Hiermee kunnen gebruikers smileys in de shoutbox gebruiken.',
	'ACP_JV_POKER_STATS'							=> 'Poker Statistieken',
	'ACP_JV_POKER_STATS_ENABLE'						=> 'Schakel statistieken in',
	'ACP_JV_POKER_STATS_ENABLE_EXPLAIN'				=> 'Staat gebruikers toe om de spelersstatistieken te bereiken.',
	'ACP_JV_POKER_STATS_LIMIT'						=> 'Aantal statistische gegevens',
	'ACP_JV_POKER_TOOLTIP'							=> 'Schakel tooltip in',
	'ACP_JV_POKER_TOOLTIP_EXPLAIN'					=> 'Indien ingeschakeld, zal een tooltip aan sommige items worden toegevoegd.',
	'ACP_JV_POKER_TOO_BIG'							=> 'De opgegeven waarde voor de instelling “%1$s” is te hoog. De maximale acceptabele waarde is %2$s.',
	'ACP_JV_POKER_TOO_LONG'							=> 'De opgegeven waarde voor de instelling “%1$s” is te lang. De maximaal toegestane lengte is %2$s.',
	'ACP_JV_POKER_TOO_SHORT'						=> 'De opgegeven waarde voor de instelling “%1$s” is te kort. De minimaal acceptabele lengte is %2$s.',
	'ACP_JV_POKER_TOO_SMALL'						=> 'De opgegeven waarde voor de instelling “%1$s” is te laag. De minimaal acceptabele waarde is %2$s.',
	'ACP_JV_POKER_TOP_USERS'						=> 'Aantal kampioenen',
	'ACP_JV_POKER_TOP_USERS_EXPLAIN'				=> 'Dit is het aantal kampioenen dat getoond moet worden.',
	'ACP_JV_POKER_UPDATE_PERIOD_DATE_SUBMIT'		=> 'Gegevens verzenden, datum bijwerken',
	'ACP_JV_POKER_UPDATE_USE_PERIOD_DATE'			=> 'Update gebruiksdatum',
	'ACP_JV_POKER_UPDATE_USE_PERIOD_DATE_EXPLAIN'	=> '<strong style="color: #BC2A4D;">Aandacht!<br>De huidige gebruiksdatum wordt opgehaald en bijgewerkt, persoonlijke gegevens worden verzonden en opgeslagen op de website van %1$s.</strong><br>Persoonlijke gegevens worden automatisch verwijderd als een website langer dan een maand inactief is of u kunt de onmiddellijke verwijdering van uw gegevens per e-mail aanvragen.<br><br>
<strong><u>Persoonlijke gegevens houden in:</u></strong><br><br>
<strong>Je gebruikersnaam:</strong> %2$s<br>
<strong>Jouw e-mailadres:</strong> %3$s<br>
<strong>Uw IP-adres:</strong> %4$s<br><br>
<strong><u>Aanvullende gegevens:</u></strong><br><br>
<strong>Website adres:</strong> %5$s<br>
<strong>phpBB versie nummer:</strong> %6$s<br>
<strong>phpBB Holdem Poker versie nummer:</strong> %7$s<br><br>
<strong style="color: #BC2A4D;">We verklaren dat gebruikersactiviteit niet wordt bijgehouden en dat er geen persoonlijke gegevens over geregistreerde gebruikers van uw forum worden opgeslagen of verzameld op “%8$s”!</strong>',
	'ACP_JV_POKER_USERS_PLAYED'						=> 'Gespeelde gebruikers',
	'ACP_JV_POKER_USERS_RESET'						=> 'Reset gebruikersgegevens',
	'ACP_JV_POKER_USERS_RESET_CHIPS_EXPLAIN'		=> 'Het gebruikers chip saldo wordt automatisch uitgewisseld naar %s.',
	'ACP_JV_POKER_USERS_RESET_CONFIRM'				=> 'Weet u zeker dat u de gegevens van alle gebruikers opnieuw wilt instellen??',
	'ACP_JV_POKER_USERS_RESET_EXPLAIN'				=> 'Hiermee worden alle gebruikersgegevens opnieuw ingesteld.',
	'ACP_JV_POKER_USERS_RESET_PROCESSING'			=> 'Even geduld aub…<br>%s<br>Momenteel verwerkt gebruiker %s van %s.',
	'ACP_JV_POKER_USERS_RESET_SUCCESS'				=> 'Gebruikersgegevens met succes gereset.',
	'ACP_JV_POKER_USER_COLOR'						=> 'Kleur van de gebruikersnaam',
	'ACP_JV_POKER_USER_COLOR_EXPLAIN'				=> 'Indien ingeschakeld, wordt de gebruikersnaam weergegeven in de standaard gebruikerskleur.',
	'ACP_JV_POKER_USE_POINTS'						=> 'Gebruik puntensysteem',
	'ACP_JV_POKER_VERSION'							=> 'Poker software versie',
	'ACP_JV_POKER_VERSION_CHECK_ENABLE'				=> 'Automatische versiecontrole',
	'ACP_JV_POKER_VERSION_CHECK_ENABLE_EXPLAIN'		=> 'De automatische versiecontrole controleert met regelmatige tussenpozen of nieuwere versies werden vrijgegeven.',
	'ACP_JV_POKER_VERSION_CHECK_TITLE'				=> 'phpBB Holdem Poker - versiecontrole',
	'ACP_JV_POKER_VERSION_CHECK_TITLE_EXPLAIN'		=> 'Controleert of uw phpBB Holdem Poker installatie up-to-date is.',
	'ACP_JV_POKER_WEBSITE_ERROR_CONNECTION'			=> 'Er is een fout opgetreden tijdens het ophalen. Status code: %s, Fout code: %s',
	'ACP_JV_POKER_WEBSITE_ERROR_DATA'				=> 'Er zijn geen geldige gegevens ontvangen. Probeer het later opnieuw.',
	'ACP_JV_POKER_WEBSITE_NO_CONNECTION'			=> 'De “%s” website is momenteel niet beschikbaar!',

	'LOG_JV_POKER_RADIO_ADD'						=> '<strong>phpBB Holdem Poker - Maak een radiostation</strong><br>» Radio: %s',
	'LOG_JV_POKER_RADIO_DELETE'						=> '<strong>phpBB Holdem Poker - Verwijder radiostation</strong><br>» Radio: %s',
	'LOG_JV_POKER_RADIO_EDIT'						=> '<strong>phpBB Holdem Poker - Bewerk radiostation</strong><br>» Radio: %s',
	'LOG_JV_POKER_ROOM_ADD'							=> '<strong>phpBB Holdem Poker - Maak kamer</strong><br>» Room: %s',
	'LOG_JV_POKER_ROOM_DELETE'						=> '<strong>phpBB Holdem Poker - Verwijder kamer</strong><br>» Room: %s',
	'LOG_JV_POKER_ROOM_EDIT'						=> '<strong>phpBB Holdem Poker - Bewerk kamer</strong><br>» Room: %s',
	'LOG_JV_POKER_SETTINGS'							=> '<strong>phpBB Holdem Poker - Gewijzigde instellingen</strong>',
	'LOG_JV_POKER_USERS_RESET'						=> '<strong>phpBB Holdem Poker - Reset gebruikersgegevens</strong>',
	'LOG_JV_POKER_VERSION_CHECK_DISABLED'			=> '<strong>phpBB Holdem Poker - Automatische versiecontrole uitgeschakeld</strong>',
	'LOG_JV_POKER_VERSION_CHECK_ENABLED'			=> '<strong>phpBB Holdem Poker - Automatische versiecontrole ingeschakeld</strong>',
));

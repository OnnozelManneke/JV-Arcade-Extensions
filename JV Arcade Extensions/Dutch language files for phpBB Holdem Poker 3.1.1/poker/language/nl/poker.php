<?php
/**
*
* @package phpBB Holdem Póker
* @version $Id$
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
	'JV_POKER'							=> 'Poker',
	'JV_POKER_ALL'						=> 'Alles',	
	'JV_POKER_AMOUNT'					=> 'Bedrag',
	'JV_POKER_AMOUNT_BALANCE_ERROR'		=> 'Het bedrag dat u opgeeft is groter dan uw saldo.',
	'JV_POKER_AMOUNT_TOO_SMALL_ERROR'	=> 'Het opgegeven bedrag is te klein.',
	'JV_POKER_ARCHIVE_REFRESH'			=> 'Archief vernieuwen',
	'JV_POKER_BALANCE'					=> 'Chips: <strong>%s</strong>',
	'JV_POKER_BIG_BLIND'				=> 'Big blind',
	'JV_POKER_CHAIRS'					=> 'Stoelen',
	'JV_POKER_CHIPS'					=> 'Chips',
	'JV_POKER_CHIPS_BALANCE'			=> 'Chips balans: <strong>%s</strong>',
	'JV_POKER_CHIPS_EXCHANGE'			=> 'Chips wisselen',
	'JV_POKER_CHIPS_EXCHANGE_EXPLAIN'	=> 'Voer het bedrag in dat u inwisselt voor chips.',
	'JV_POKER_CHIPS_EXCHENGE_SUCCESS'	=> '%s chips werden met succes uitgewisseld.',
	'JV_POKER_COMMENT'					=> 'Commentaar',
	'JV_POKER_ENTRY_FEE'				=> 'Inkoop bedrag',	
	'JV_POKER_EXCHANGE_TYPE_CHIPS'		=> '%s » chips',
	'JV_POKER_EXCHANGE_TYPE_POINTS'		=> 'Chips » %s',
	'JV_POKER_FAQ'						=> 'Poker gids',
	'JV_POKER_FAQ_VIEWING'				=> 'Bekijkt de poker gids',
	'JV_POKER_FILE_LOAD_ERROR'			=> 'Laden van het %s bestand mislukt!',
	'JV_POKER_FIX_LIMIT'				=> 'Vaste limiet',
	'JV_POKER_GAME_INFO'				=> 'Spel informatie',
	'JV_POKER_GAME_TIME'				=> 'Spel tijd',	
	'JV_POKER_INCOME'					=> 'Inkomen: <strong>%s</strong>',
	'JV_POKER_INDEX'					=> 'Poker index',
	'JV_POKER_JACKPOT'					=> 'Jackpot',
	'JV_POKER_KEYWORDS'					=> 'phpBB, holdem, poker',
	'JV_POKER_LAST_PLAY'				=> 'Laatst gespeeld: <strong>%s</strong>',
	'JV_POKER_LEADERS'					=> 'Poker leiders',
	'JV_POKER_LEARNER'					=> 'Leerling',
	'JV_POKER_LEARNER_ROOM'				=> 'Leerling kamer',
	'JV_POKER_LEARNER_ROOMS'			=> 'Leerling kamers',
	'JV_POKER_LEAST_PLAYED_USERS'		=> 'Laatst gespeelde gebruikers',
	'JV_POKER_LIMIT'					=> 'Limiet',
	'JV_POKER_LOBBY'					=> 'Lobby',
	'JV_POKER_LOCKED'					=> 'Gesloten',
	'JV_POKER_LONGEST_PLAYTIME'			=> 'Langste speeltijd',	
	'JV_POKER_MOST_PLAYED_USERS'		=> 'Meest spelende gebruikers',
	'JV_POKER_MOVETIME'					=> 'Verplaats tijd',
	'JV_POKER_MSG_DELETE'				=> 'Verwijder bericht',
	'JV_POKER_MSG_DELETE_SUCCESS'		=> 'Bericht is verwijderd.',
	'JV_POKER_NLOSE'					=> array(
		'1'								=> 'Spel verloren: <strong>%s</strong>',
		'2'								=> 'Spellen verloren: <strong>%s</strong>',
	),

	'JV_POKER_NOT_FINISHED'				=> 'Niet afgelopen!',
	'JV_POKER_NOT_FOUND_ROOM'			=> 'De gevraagde kamer is niet gevonden!',
	'JV_POKER_NOT_LOGGED'				=> 'U bent niet ingelogd op het forum!',
	'JV_POKER_NOT_PLAYING'				=> 'Niet aan het spelen',
	'JV_POKER_NO_LIMIT'					=> 'Geen limiet',
	'JV_POKER_NO_PERMISSION'			=> 'Je hebt geen toestemming om poker te gebruiken.',
	'JV_POKER_NO_PERMISSION_PLAY'		=> 'Je hebt geen permissie om poker te spelen.',
	'JV_POKER_NO_PLAYED_USERS'			=> 'Momenteel heb je nog geen poker gespeeld.',
	'JV_POKER_NO_ROOM'					=> 'Er is momenteel geen poker kamer',
	'JV_POKER_NO_ROOM_ID'				=> 'De gevraagde kamer ID bestaat niet!',
	'JV_POKER_NO_STATS_DATA'			=> 'Er is momenteel geen statistische data.',
	'JV_POKER_NO_STYLE'					=> 'De stijl die in deze kamer wordt gebruikt, bestaat niet!',	
	'JV_POKER_NO_USER_STATS'			=> 'Geen statistieken beschikbaar voor de gebruiker die u zoekt.',
	'JV_POKER_NWON'						=> array(
		'1'								=> 'Gewonnen spel: <strong>%s</strong>',
		'2'								=> 'Gewonnen spellen: <strong>%s</strong>',
	),

	'JV_POKER_PARTICIPANTS'				=> 'Deelnemers',
	'JV_POKER_PLACE'					=> '%s. plaats',
	'JV_POKER_PLAYED'					=> 'Gespeeld',
	'JV_POKER_PLAYED_NPARTY'			=> array(
		'1'								=> 'Gespeeld spel: <strong>%s</strong>',
		'2'								=> 'Gespeelde spellen: <strong>%s</strong>',
	),

	'JV_POKER_PLAYED_VPARTY'			=> array(
		'1'								=> 'Gespeeld toernooi: <strong>%s</strong>',
		'2'								=> 'Gespeelde toernooien: <strong>%s</strong>',
	),

	'JV_POKER_PLAYING'					=> 'Spelen',
	'JV_POKER_PLAYING_ROOMS_USER'		=> 'Er zijn momenteel %s kamers in gebruik, met een totaal van %s gebruiker.',
	'JV_POKER_PLAYING_ROOMS_USERS'		=> 'Er zijn momenteel %s kamers in gebruik, met een totaal van %s gebruikers.',
	'JV_POKER_PLAYING_ROOM_USER'		=> 'Er is momenteel %s kamer in gebruik, met een totaal van %s gebruiker.',
	'JV_POKER_PLAYING_ROOM_USERS'		=> 'Er zijn momenteel %s kamers in gebruik, met een totaal van %s gebruikers.',
	'JV_POKER_PLAYING_TIMES'			=> 'Tijd in spel: <strong>%s</strong>',
	'JV_POKER_POINTS_BALANCE'			=> '%s balans: <strong>%s</strong>',
	'JV_POKER_POINTS_EXCHANGE_EXPLAIN'	=> 'Voer het bedrag in dat u inwisselt naar %s.',
	'JV_POKER_POINTS_EXCHENGE_SUCCESS'	=> '%1$s %2$s zijn met succes ingewisseld.',
	'JV_POKER_POINTS_SYSTEM_DISABLED'	=> 'De Puntensysteem functie is uitgeschakeld!',
	'JV_POKER_PRACTICE'					=> 'Oefenen',
	'JV_POKER_PRACTICE_ROOM'			=> 'Oefen kamer',
	'JV_POKER_PRACTICE_ROOMS'			=> 'Oefen kamers',
	'JV_POKER_PRIZE'					=> 'Prijs',
	'JV_POKER_RANK'						=> 'Rank',	
	'JV_POKER_RETURN_EXCHENGE_PAGE'		=> '%sTerug naar de chips uitwisseling pagina.%s',
	'JV_POKER_RETURN_INDEX_PAGE'		=> '%sTerug naar de poker hoofdpagina.%s',
	'JV_POKER_ROOM'						=> 'Poker kamer',
	'JV_POKER_ROOMS_VIEWING'			=> 'Bekijkt poker kamers',
	'JV_POKER_ROOM_CLOSE'				=> 'Alle stoelen in de kamer zijn bezet. Er kunnen geen andere gebruikers de kamer betreden. Wacht alstublieft tot minstens één stoel leeg is.',
	'JV_POKER_ROOM_CLOSE_TOURNAMENT'	=> 'Het toernooi is al begonnen. Extra gebruikers mogen de ruimte niet betreden.',
	'JV_POKER_ROOM_DISABLED'			=> 'Poker is momenteel uitgeschakeld.',
	'JV_POKER_ROOM_LOCKED'				=> 'Deze kamer is afgesloten!',
	'JV_POKER_ROOM_NAME'				=> 'Naam',
	'JV_POKER_ROOM_NAME_ACTIVE'			=> '%s kamer',
	'JV_POKER_ROOM_PLAYERS'				=> 'Leden/stoelen',
	'JV_POKER_ROOM_PLAYING_USERS'		=> 'De spelers in de <strong>%s</strong> kamer: %s',
	'JV_POKER_ROOM_PLAY_USERS'			=> '%1$s / %2$s',
	'JV_POKER_ROOM_STATUS'				=> 'Status',
	'JV_POKER_ROOM_TYPE'				=> 'Type',
	'JV_POKER_ROOM_VIEWING'				=> 'Bekijkt de %s poker kamer',
	'JV_POKER_ROOM_WAIT_USERS'			=> 'De <strong>%s</strong> kamer heeft wachtende spelers: %s',
	'JV_POKER_RULES'					=> 'Poker regels',
	'JV_POKER_SELECT_EXCHANGE_TYPE'		=> 'Selecteer wat u wilt inwisselen',
	'JV_POKER_SHORTEST_PLAYTIME'		=> 'Kortste speeltijd',	
	'JV_POKER_SHOUT_ARCHIVE'			=> 'Shoutbox archief',
	'JV_POKER_SHOUT_ARCHIVE_NO_MSG'		=> 'Er zijn momenteel geen berichten om weer te geven.',
	'JV_POKER_SHOUT_ROOM_ARCHIVE'		=> 'Poker %s kamer shoutbox archief',
	'JV_POKER_SMALL_BLIND'				=> 'Small blind',
	'JV_POKER_STANDARD'					=> 'Normaal',
	'JV_POKER_STANDARD_ROOM'			=> 'Normale kamer',
	'JV_POKER_STANDARD_ROOMS'			=> 'Normale kamers',
	'JV_POKER_STAT'						=> 'Statistieken',
	'JV_POKER_STATS'					=> 'Poker Statistieken',
	'JV_POKER_STATS_ALLINS'				=> array(
		'1'								=> 'Totaal “all-in” aantal: <strong>%s</strong>',
		'2'								=> 'Totaal “all-in” aantal: <strong>%s</strong>',
	),

	'JV_POKER_STATS_CALLS'				=> array(
		'1'								=> 'Totaal “call” aantal: <strong>%s</strong>',
		'2'								=> 'Totaal “calls” aantal: <strong>%s</strong>',
	),

	'JV_POKER_STATS_CHECKS'				=> array(
		'1'								=> 'Totaal “check” aantal: <strong>%s</strong>',
		'2'								=> 'Totaal “checks” aantal: <strong>%s</strong>',
	),

	'JV_POKER_STATS_FOLDS'				=> array(
		'1'								=> 'Totaal “fold” aantal: <strong>%s</strong>',
		'2'								=> 'Totaal “folds” aantal: <strong>%s</strong>',
	),

	'JV_POKER_STATS_INCOME'				=> 'inkomen: %s',
	'JV_POKER_STATS_NO_PERMISSION'		=> 'U bent niet gemachtigd om pokerstatistieken te bekijken.',
	'JV_POKER_STATS_PLAYS'				=> array(
		'1'								=> 'speelde %s spel.',
		'2'								=> 'speelde %s spellen.',
	),

	'JV_POKER_STATS_PLAYS_TOURS'		=> array(
		'1'								=> 'speelde %s toernooi.',
		'2'								=> 'speelde %s toernooien.',
	),

	'JV_POKER_STATS_RAISES'				=> array(
		'1'								=> 'Totaal “raise” aantal: <strong>%s</strong>',
		'2'								=> 'Totaal “raise” aantal: <strong>%s</strong>',
	),

	'JV_POKER_STATS_VIEWING'			=> 'Bekijkt pokerstatistieken',
	'JV_POKER_STATS_WINS_RATE'			=> 'winstpercentage: %s%%',
	'JV_POKER_STATS_WON_TOURS'			=> array(
		'1'								=> 'won %s toernooi',
		'2'								=> 'won %s toernooien',
	),

	'JV_POKER_TOUR_STATS_VIEWING'		=> 'Bekijkt statistieken van pokertoernooien',
	'JV_POKER_TIME_DAY'					=> 'dag',
	'JV_POKER_TIME_DAYS'				=> 'dagen',
	'JV_POKER_TIME_HOUR'				=> 'hour',
	'JV_POKER_TIME_HOURS'				=> 'uren',
	'JV_POKER_TIME_MINUTE'				=> 'minuut',
	'JV_POKER_TIME_MINUTES'				=> 'minuten',
	'JV_POKER_TIME_MONTH'				=> 'maand',
	'JV_POKER_TIME_MONTHS'				=> 'maanden',
	'JV_POKER_TIME_SECOND'				=> 'seconde',
	'JV_POKER_TIME_SECONDS'				=> 'secondes',
	'JV_POKER_TIME_WEEK'				=> 'week',
	'JV_POKER_TIME_WEEKS'				=> 'weken',
	'JV_POKER_TIME_YEAR'				=> 'jaar',
	'JV_POKER_TIME_YEARS'				=> 'jaren',
	'JV_POKER_TOTAL_DATA'				=> 'In totaal hebben <strong>%s</strong> gebruikers een totaal van <strong>%s</strong> handen gespeeld.<br>Totale tijd besteed aan het spelen: <strong>%s</strong>',
	'JV_POKER_TOTAL_DATA_CHIPS'			=> 'Totaal chips buiten het spel: <strong>%s</strong>',
	'JV_POKER_TOTAL_MSG'				=> 'Totaal berichten %s',
	'JV_POKER_TOTAL_TOURS'				=> 'Totaal toernooien (%s)',
	'JV_POKER_TOUR_END'					=> 'Einde',
	'JV_POKER_TOUR_START'				=> 'Start',
	'JV_POKER_TOUR_STATS'				=> 'Toernooi statistieken',	
	'JV_POKER_TOURNAMENT'				=> 'Toernooi',
	'JV_POKER_TOURNAMENT_ROOM'			=> 'Toernooi kamer',
	'JV_POKER_TOURNAMENT_ROOMS'			=> 'Toernooi kamers',
	'JV_POKER_TOUR_LEADERS'				=> 'Poker toernooi leiders',	
	'JV_POKER_UNKNOWN'					=> 'Onbekend',
	'JV_POKER_UNLOCKED'					=> 'Ontgrendeld',
	'JV_POKER_USER_INFO'				=> 'Gebruikers informatie',
	'JV_POKER_USER_STAT'				=> 'Gebruikers statistieken',
	'JV_POKER_USER_STATS'				=> '%s poker statistieken',
	'JV_POKER_USER_STATS_VIEWING'		=> 'Bekijkt %s poker statistieken',
	'JV_POKER_VIEW_MEMBER_PROFILE'		=> 'Bekijk gebruikersprofiel',
	'JV_POKER_VIEW_STATS'				=> 'Bekijk statistieken',
	'JV_POKER_VIEW_USER_STATS'			=> 'Bekijk gebruikersstatistieken',
	'JV_POKER_VLOSE'					=> array(
		'1'								=> 'Verloren toernooi: <strong>%s</strong>',
		'2'								=> 'Verloren toernooien: <strong>%s</strong>',
	),

	'JV_POKER_VWON'						=> array(
		'1'								=> 'Gewonnen toernooi: <strong>%s</strong>',
		'2'								=> 'Gewonnen toernooien: <strong>%s</strong>',
	),

	'JV_POKER_WAITING'					=> 'Wachten',
	'JV_POKER_WELCOME'					=> 'Welkom in de poker kamer %s!',
	'JV_POKER_WHO_IS_PLAYING'			=> 'Wie speelt er in de poker kamers?',
	'JV_POKER_WINNER'					=> 'Winnaar',	
	'JV_POKER_WONS_RATE'				=> 'Win percentage: <strong>%s%%</strong>',
));

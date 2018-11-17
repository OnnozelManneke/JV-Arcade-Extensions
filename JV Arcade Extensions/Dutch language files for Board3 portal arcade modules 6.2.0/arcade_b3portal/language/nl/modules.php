<?php
/**
*
* @package phpBB Arcade - Board3 portal arcade modules
* @version $Id: modules.php 1853 2018-02-20 10:45:14Z killbill $
* @author 2011-2018 KillBill - killbill@jatek-vilag.com
* @copyright (c) 2014-2018 https://jv-arcade.com/ - support@jv-arcade.com
* @license https://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
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

//These are used through out the arcade
$lang = array_merge($lang, array(
	'ARCADE_EXT_B3PORTAL_BEST_RATED_GAMES_TITLE'				=> 'Arcade - Best beoordeelde spellen',
	'ARCADE_EXT_B3PORTAL_CHALLENGE_LEADERS'						=> 'Arcade uitdaging - leiders',
	'ARCADE_EXT_B3PORTAL_CHALLENGE_LEAST_PLAYED_USERS_TITLE'	=> 'Arcade uitdaging - Minst gespeelde gebruikers',
	'ARCADE_EXT_B3PORTAL_CHALLENGE_LEAST_POPULAR_GAMES_TITLE'	=> 'Arcade uitdaging - Minst populaire spellen',
	'ARCADE_EXT_B3PORTAL_CHALLENGE_MOST_PLAYED_USERS_TITLE'		=> 'Arcade uitdaging - Meest gespeelde gebruikers',
	'ARCADE_EXT_B3PORTAL_CHALLENGE_MOST_POPULAR_GAMES_TITLE'	=> 'Arcade uitdaging - Meest populaire spellen',
	'ARCADE_EXT_B3PORTAL_DISPLAYED_DATA'						=> 'Weergegeven gegevens',
	'ARCADE_EXT_B3PORTAL_HIGH_JACKPOT_TITLE'					=> 'Arcade - Hoge jackpot',
	'ARCADE_EXT_B3PORTAL_LATEST_HIGHSCORES'						=> 'Arcade - Laatste highscores',
	'ARCADE_EXT_B3PORTAL_LEADERS'								=> 'Arcade leiders',
	'ARCADE_EXT_B3PORTAL_LEAST_PLAYED_USERS_TITLE'				=> 'Arcade - Minst gespeelde gebruikers',
	'ARCADE_EXT_B3PORTAL_LEAST_POPULAR_GAMES_TITLE'				=> 'Arcade - Minst populaire spellen',
	'ARCADE_EXT_B3PORTAL_LONGEST_HELD_SCORES'					=> 'Arcade - Langste behouden highscores',
	'ARCADE_EXT_B3PORTAL_LONGEST_PLAYTIME_TITLE'				=> 'Arcade - Langste speeltijd',
	'ARCADE_EXT_B3PORTAL_LOW_JACKPOT_TITLE'						=> 'Arcade - lage jackpot',
	'ARCADE_EXT_B3PORTAL_MOST_PLAYED_USERS_TITLE'				=> 'Arcade - Meest gespeelde gebruikers',
	'ARCADE_EXT_B3PORTAL_MOST_POPULAR_GAMES_TITLE'				=> 'Arcade - Meest populaire spellen',
	'ARCADE_EXT_B3PORTAL_NEWEST_GAMES_TITLE'					=> 'Arcade - Nieuwste spellen',
	'ARCADE_EXT_B3PORTAL_ONLINE'								=> 'Wie speelt er in de arcade?',
	'ARCADE_EXT_B3PORTAL_RANDOM_GAMES_TITLE'					=> 'Arcade - willekeurige spellen',
	'ARCADE_EXT_B3PORTAL_SHORTEST_PLAYTIME_TITLE'				=> 'Arcade - Kortste speeltijd',
	'ARCADE_EXT_B3PORTAL_SUPER_CHAMPIONS_TITLE'					=> 'Arcade - Arcade super kampioenen',
	'ARCADE_EXT_B3PORTAL_TOURNAMENT_LEADERS'					=> 'Arcade toernooi leiders',
	'ARCADE_EXT_B3PORTAL_TOUR_LEAST_PLAYED_USERS_TITLE'			=> 'Arcade toernooi - Minst gespeelde gebruikers',
	'ARCADE_EXT_B3PORTAL_TOUR_LEAST_POPULAR_GAMES_TITLE'		=> 'Arcade toernooi - Minst populaire spellen',
	'ARCADE_EXT_B3PORTAL_TOUR_MOST_PLAYED_USERS_TITLE'			=> 'Arcade toernooi - Meest gespeelde gebruikers',
	'ARCADE_EXT_B3PORTAL_TOUR_MOST_POPULAR_GAMES_TITLE'			=> 'Arcade toernooi - Meest populaire spellen',
));

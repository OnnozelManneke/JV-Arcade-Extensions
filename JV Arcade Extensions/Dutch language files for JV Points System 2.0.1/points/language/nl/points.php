<?php
/**
*
* @package JV Points System
* @version $Id: points.php 282 2018-02-11 18:28:10Z killbill $
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

$lang = array_merge($lang, array(
	'JV_POINTS_ADD_USER_EXPLAIN'			=> 'Geef de naam in van de gebruiker van wie je het aantal punten wil veranderen.',
	'JV_POINTS_AMOUNT'						=> 'Aantal punten',
	'JV_POINTS_AMOUNT_USER_EXPLAIN'			=> 'Geef het aantal punten in wat je wil toevoegen om het saldo van de gebruiker te veranderen.',
	'JV_POINTS_ATTACH_DOWNLOAD_NO_POINTS'	=> 'Je hebt geen genoeg “%s” om dit bestand te downloaden.',
	'JV_POINTS_BALANCE'						=> 'Saldo.',
	'JV_POINTS_CHANGE'						=> 'Verander saldo',
	'JV_POINTS_CHANGE_TITLE'				=> 'Verander gebruikers saldo.',
	'JV_POINTS_CONTROL_PANEL'				=> 'Punten systeem controle paneel.',
	'JV_POINTS_COSTS'						=> 'Kosten.',
	'JV_POINTS_DISABLED'					=> 'Punten systeem is momenteel uitgeschakeld.',
	'JV_POINTS_ERROR_MINUS_VALUE'			=> 'Het gespecificeerde aantal punten is niet de minimale waarde.',
	'JV_POINTS_FAQ'							=> 'FAQ',
	'JV_POINTS_GUIDE'						=> 'Punten systeem gids',
	'JV_POINTS_INFO'						=> 'Informatie.',
	'JV_POINTS_INFO_EXPLAIN'				=> 'Hier kun je de huidige instellingen lezen, waarom een beloning en wat de kosten zijn. Hou in de gaten dat een beheerder ten alle tijden deze instellingen kan wijzigen.',
	'JV_POINTS_INFO_TITLE'					=> 'Algemene informatie.',
	'JV_POINTS_FAQ_VIEWING'					=> 'Bekijkt punten systeem gids',
	'JV_POINTS_INFO_VIEWING'				=> 'Bekijk algemene instellingen punten systeem.',
	'JV_POINTS_LOGIN_EXPLAIN'				=> 'je moet ingelogd zijn voor dat je het punten systeem controle paneel kan bekijken.',
	'JV_POINTS_MAIN'						=> 'Overzicht',
	'JV_POINTS_MAIN_EXPLAIN'				=> 'Hallo %s!<br><br>Huidig saldo: %s.',
	'JV_POINTS_MAIN_TITLE'					=> 'Gebruikers met het meeste saldo',
	'JV_POINTS_MODIFY'						=> 'Wijzigen',
	'JV_POINTS_MORE_INFO_HERE'				=> 'Meer informatie %sHIERs.',
	'JV_POINTS_NEW_ATTACH_COST'				=> 'Bijlagen download kosten',
	'JV_POINTS_NEW_ATTACH_COST_EXPLAIN'		=> 'De kosten van downloaden is van toepassing op de volgende bestandsextensie: “%s”.',
	'JV_POINTS_NEW_ATTACHS_COST_EXPLAIN'	=> 'De kosten van de downloaden zijn van toepassing op de volgende bestandsextensies: “%s”.',
	'JV_POINTS_NEW_POST_COST'				=> 'Bericht schrijven kosten ',
	'JV_POINTS_NEW_POST_REWARD'				=> 'Nieuw bericht schrijven beloning',
	'JV_POINTS_NEW_TOPIC_REWARD'			=> 'Nieuw onderwerp beloning',
	'JV_POINTS_NO_USER'						=> 'Momenteel is van elke gebruiker het saldo nul.',
	'JV_POINTS_REG_START_BALANCE'			=> 'Nieuw geregistreerde gebruiker start saldo.',
	'JV_POINTS_REWARDS'						=> 'Beloningen',
	'JV_POINTS_SEPARATOR_DECIMAL'			=> '.',
	'JV_POINTS_SEPARATOR_THOUSANDS'			=> ',',
	'JV_POINTS_USER_CHANGED_SUCCESS'		=> 'De “%s” gebruiker saldo is succesvol gewijzigd.',
	'JV_POINTS_VIEWING'						=> 'Bekijk punten systeem controle paneel',
	'JV_POINTS_WRITE_POST_NO_POINTS'		=> 'Je hebt niet genoeg “%s” om een bericht te plaatsen.',
));

?>
<?php
/**
*
* @package JV Points System
* @version $Id: help_faq.php 282 2018-02-11 18:28:10Z killbill $
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
	'JV_POINTS_HELP_FAQ_BLOCK_INTRO'						=> 'Introductie',
	'JV_POINTS_HELP_FAQ_BLOCK_GENERAL'						=> 'Algemene vragen',
// step 1
	'JV_POINTS_HELP_FAQ_INTRO_SYSTEM_ANSWER'				=> 'Het puntensysteem staat de gebruikers toe om bepaalde beloningen of waardes te verwerven in sommige bepaalde gevallen. De beheerder kan definiëren hoe een zekere waarde, en waar het wordt voor gebruikt. Daarom kan deze gids nuttig zijn.',
	'JV_POINTS_HELP_FAQ_INTRO_SYSTEM_QUESTION'				=> 'Wat is het punten systeem?',

	'JV_POINTS_HELP_FAQ_INTRO_MODULES_ANSWER'				=> 'In het puntensysteem zijn veel modules opgenomen, maar alleen degene die geactiveerd zijn door de beheerder zijn beschikbaar. 
																<br><br><strong>Modules:</strong>
																<ul>
																	<li><strong>Overzicht</strong> - Laat hier de gebruikers zien met de hoogste waarde. Daarnaast kun je hier je eigen huidig saldo zien.</li>
																	<li><strong>Algemene informatie</strong> - Hier kun je de huidige instellingen lezen, waarom beloning en wat de kosten zijn.</li>
																	<li><strong>Gids</strong></li>
																</ul>',
	'JV_POINTS_HELP_FAQ_INTRO_MODULES_QUESTION'				=> 'Welke modules zijn opgenomen in de puntensysteem?',
// step 2
	'JV_POINTS_HELP_FAQ_GENERAL_SAME_REWARD_COST_ANSWER'	=> 'Indien dit per ongeluk zou voorkomen, dat zo een instelling plaats vind, zal in dat geval het resultaat 0 zijn.',
	'JV_POINTS_HELP_FAQ_GENERAL_SAME_REWARD_COST_QUESTION'	=> 'Wat gebeurt indien de beloning en de kosten dezelfde waarde hebben?',

	'JV_POINTS_HELP_FAQ_GENERAL_POST_REWARD_ANSWER'			=> 'Als je nieuwe bericht moet worden goed gekeurd door een moderator,zul je de beloning ontvangen na de goedkeuring.',
	'JV_POINTS_HELP_FAQ_GENERAL_POST_REWARD_QUESTION'		=> 'Ik heb een nieuw bericht geplaatst, maar kreeg geen beloning, waarom niet?',

	'JV_POINTS_HELP_FAQ_GENERAL_POST_REWARD_MOD_ANSWER'		=> 'Als het bericht om wat voor reden ook is geweigerd, dan zullen de kosten niet worden terug gestort.',
	'JV_POINTS_HELP_FAQ_GENERAL_POST_REWARD_MOD_QUESTION'	=> 'Ik heb een nieuw bericht geplaatst wat is geweigerd door een moderator, maar ik kreeg de kosten niet terug, waarom niet?',

	'JV_POINTS_HELP_FAQ_GENERAL_TRANSFER_ANSWER'			=> 'Momenteel is deze optie niet aanwezig.',
	'JV_POINTS_HELP_FAQ_GENERAL_TRANSFER_QUESTION'			=> 'Is het mogelijk om een bepaalde waarde naar een andere gebruiker te verzenden?',
));

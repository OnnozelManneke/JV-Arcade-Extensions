<?php
/**
*
* @package JV Auto database backup
* @version $Id$
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
	'ACP_CAT_JV_AUTO_DATABASE'					=> 'Automatische database back-up',
	'ACP_CAT_JV_AUTO_DATABASE_SETTINGS'			=> 'Automatische database back-up Instellingen',
	'ACP_CAT_JV_AUTO_DATABASE_SETTINGS_EXPLAIN'	=> 'Hier kunt u het automatische back-up proces instellen, dat een back-up maakt van alle phpBB gerelateerde gegevens. Het resulterende pakket wordt opgeslagen in de store/ map. Afhankelijk van uw server configuratie kunt u het bestand mogelijk in een aantal indelingen comprimeren.',
	'ACP_JV_AUTO_DATABASE_DAYS'					=> 'back-up interval',
	'ACP_JV_AUTO_DATABASE_DAYS_EXPLAIN'			=> 'Dit voert automatische back-ups uit van uw database tijdens de opgegeven dagen.',
	'ACP_JV_AUTO_DATABASE_OPTIMIZE'				=> 'Database optimaliseren',
	'ACP_JV_AUTO_DATABASE_OPTIMIZE_EXPLAIN'		=> 'Optimaliseer gefragmenteerde tabellen vóór de back-up om betere prestaties te bereiken.<br><em>Deze optie ondersteunt alleen MySQL-databases.</em>',

	'LOG_JV_AUTO_DB_BACKUP'						=> '<strong>Automatische database back-up</strong>',
	'LOG_JV_AUTO_DB_BACKUP_SETTINGS'			=> '<strong>Wijzigde automatische database back-up instellingen</strong>',
	'LOG_JV_AUTO_DB_OPTIMIZE_BACKUP'			=> '<strong>Automatische database optimalisatie en back-up</strong>',
));

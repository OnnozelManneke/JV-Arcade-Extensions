<?php
/**
*
* @package JV Shoutbox
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
	'ACP_CAT_JV_SHOUTBOX_SETTINGS'						=> 'Shoutbox',
	'ACP_JV_SHOUTBOX'									=> 'JV Shoutbox',
	'ACP_JV_SHOUTBOX_AUTHOR'							=> 'Bericht Auteur',
	'ACP_JV_SHOUTBOX_AUTHOR_EXPLAIN'					=> 'Hier kunt je de auteur instellen die de aankondigingen verzend. Als je dit veld leeg laat en “JV Add System Bot” extensie installeert, worden de aankondiging onder die naam verzonden. als er geen “Systeem Bot” gebruiker is dan zal de actuele ingestelde gebruikersnaam gebruikt worden voor de aankondigingen.',
	'ACP_JV_SHOUTBOX_AVATAR'							=> 'Laat avatar zien',
	'ACP_JV_SHOUTBOX_AVATAR_EXPLAIN'					=> 'Indien aangezet, worden de avatars weergegeven.',
	'ACP_JV_SHOUTBOX_BBCODE_ALLOWED'					=> 'BBCode toegestaan',
	'ACP_JV_SHOUTBOX_BBCODE_ALLOWED_EXPLAIN'			=> 'De gespecificeerde BBCode kan alleen gebruikt worden in de shoutbox. Alle nieuwe BBCode op een nieuwe lijn schrijven.',
	'ACP_JV_SHOUTBOX_CUSTOM_BBCODE'						=> 'Aangepaste BBCode toegestaan',
	'ACP_JV_SHOUTBOX_CUSTOM_BBCODE_EXPLAIN'				=> 'Indien toegestaan, wordt ook de aangepaste BBCode weergegeven.',
	'ACP_JV_SHOUTBOX_CUSTOM_PAGE'						=> 'Aangepaste pagina toegestaan.',
	'ACP_JV_SHOUTBOX_CUSTOM_PAGE_EXPLAIN'				=> 'Hier kun je de aangepaste pagina voor de shoutbox toestaan.',
	'ACP_JV_SHOUTBOX_CUSTOM_PAGE_ONLINE_LIST'			=> 'Aangepaste pagina weergeven online gebruikers',
	'ACP_JV_SHOUTBOX_CUSTOM_PAGE_ONLINE_LIST_EXPLAIN'	=> 'Hier kunt je online gebruikers toestaan om de aangepaste pagina weer te geven',
	'ACP_JV_SHOUTBOX_CUSTOM_PAGE_POPUP'					=> 'Aangepaste pagina pop-up venster',
	'ACP_JV_SHOUTBOX_CUSTOM_PAGE_POPUP_EXPLAIN'			=> 'indien ingeschakeld, dan open de aangepaste pagina zich in een pop-up venster.',
	'ACP_JV_SHOUTBOX_CUSTOM_PAGE_POPUP_HEIGHT'			=> 'Pop-up venster hoogte',
	'ACP_JV_SHOUTBOX_CUSTOM_PAGE_POPUP_WIDTH'			=> 'Pop-up venster wijdte',
	'ACP_JV_SHOUTBOX_DATE_FORMAT'						=> 'Datum notatie',
	'ACP_JV_SHOUTBOX_DATE_FORMAT_EXPLAIN'				=> 'De syntax die wordt gebruikt is identiek aan PHP <a href="http://php.net/manual/en/function.date.php">date()</a> functie.',
	'ACP_JV_SHOUTBOX_DELETE_MESSAGES'					=> 'Verwijder berichten',
	'ACP_JV_SHOUTBOX_DELETE_MESSAGES_CONFIRM'			=> 'Weet je zeker dat je al de berichten wilt verwijderen?',
	'ACP_JV_SHOUTBOX_DELETE_MESSAGES_EXPLAIN'			=> 'Hier kun je alle berichten verwijderen.',
	'ACP_JV_SHOUTBOX_DELETE_MESSAGES_SUCCESS'			=> 'Alle berichten verwijderd.',
	'ACP_JV_SHOUTBOX_DISPLAY_ALL_MAIN_PAGES'			=> 'Alle hoofd pagina‘s',
	'ACP_JV_SHOUTBOX_DISPLAY_ALL_PAGES'					=> 'Elke pagina',
	'ACP_JV_SHOUTBOX_DISPLAY_ALL_PAGES_EXCEPT_ARCADE'	=> 'Alle pagina‘s, behalve de arcade',
	'ACP_JV_SHOUTBOX_DISPLAY_ALL_PAGES_EXCEPT_PORTAL'	=> 'Alle pagina‘s, behalve de portal',
	'ACP_JV_SHOUTBOX_DISPLAY_ARCADE'					=> 'Arcade index pagina',
	'ACP_JV_SHOUTBOX_DISPLAY_ARCADE_ALL'				=> 'Arcade alle pagina‘s',
	'ACP_JV_SHOUTBOX_DISPLAY_FORUM'						=> 'Forum index pagina',
	'ACP_JV_SHOUTBOX_DISPLAY_FORUM_ALL'					=> 'Forum alle pagina‘s',
	'ACP_JV_SHOUTBOX_DISPLAY_NONE'						=> 'Niet laten zien',
	'ACP_JV_SHOUTBOX_DISPLAY_PORTAL'					=> 'Portal pagina‘s',
	'ACP_JV_SHOUTBOX_EDIT_POST'							=> 'Bewerkte berichten weergeven',
	'ACP_JV_SHOUTBOX_EDIT_POST_EXPLAIN'					=> 'Als een gebruiker een bericht bewerkt, zal dit worden weergegeven in de shoutbox.',
	'ACP_JV_SHOUTBOX_ENABLE'							=> 'Shoutbox aanzetten',
	'ACP_JV_SHOUTBOX_ENABLE_EXPLAIN'					=> 'indien aangezet, zal het worden weergegeven in de shoutbox, die op deze pagina‘s is ingeschakeld.',
	'ACP_JV_SHOUTBOX_FLOOD_TIME'						=> 'Flood interval',
	'ACP_JV_SHOUTBOX_FLOOD_TIME_EXPLAIN'				=> 'Aantal seconden dat een gebruiker moet wachten tussen het posten van nieuwe berichten. Om gebruikers dit te laten negeren pas hun permissies aan.',
	'ACP_JV_SHOUTBOX_FORUM_POST_SETTINGS'				=> 'Forum post instellingen',
	'ACP_JV_SHOUTBOX_HEIGHT'							=> 'Shoutbox hoogte',
	'ACP_JV_SHOUTBOX_HEIGHT_ERROR'						=> 'De in gegeven waarde voor de instelling “Shoutbox hoogte” is te hoog om het “Aantal Berichten” in te stellen in vergelijking . Om dit te doen, moet de hoogte worden toegewezen een minimum aantal van “%d” berichten.',
	'ACP_JV_SHOUTBOX_HEIGHT_EXPLAIN'					=> 'Voer de hoogte van de shoutbox in die u wilt weergeven.',
	'ACP_JV_SHOUTBOX_LOCATION'							=> 'Locatie',
	'ACP_JV_SHOUTBOX_LOCATION_EXPLAIN'					=> 'Voeg locatie toe waar de schoutbox te zien is op de website.',
	'ACP_JV_SHOUTBOX_MAX_MSG_LIMIT'						=> 'Maximum aantal berichten',
	'ACP_JV_SHOUTBOX_MAX_MSG_LIMIT_EXPLAIN'				=> 'Hier kun je de maximale hoeveelheid berichten beperken die zichtbaar zijn in de shoutbox, als voorbeeld. Als de opgegeven waarde 100 is en de primaire belasting 10 is, dan kun je in dat geval 90 oude berichten ophalen. indien de waarde 0 is, dan heeft de gebruiker alle oude berichten gelezen.',
	'ACP_JV_SHOUTBOX_MIN_MAX_ERROR'						=> '„%s“ kan niet kleiner zijn als „%s“.',
	'ACP_JV_SHOUTBOX_MSG_LIMIT'							=> 'Aantal berichten',
	'ACP_JV_SHOUTBOX_MSG_LIMIT_EXPLAIN'					=> 'Hier kan je ingeven  wat het standaard aantal berichten is wat in de shoutbox laadt. Hetzelfde geldt voor de instelling van oude berichten.',
	'ACP_JV_SHOUTBOX_MSG_MAX_CHARS'						=> 'Maximaal aantal tekens per bericht',
	'ACP_JV_SHOUTBOX_MSG_MAX_CHARS_EXPLAIN'				=> 'Het aantal tekens dat is toegestaan binnen een bericht. Stel  0 in voor onbeperkt aantal tekens.',
	'ACP_JV_SHOUTBOX_MSG_MIN_CHARS'						=> 'Minimale aantal tekens per bericht',
	'ACP_JV_SHOUTBOX_MSG_MIN_CHARS_EXPLAIN'				=> 'Het minimum aantal tekens die de gebruiker nodig heeft in een bericht te zetten. Het minimum voor deze instelling is 1.',
	'ACP_JV_SHOUTBOX_MSG_POSITION'						=> 'Bericht positie',
	'ACP_JV_SHOUTBOX_MSG_POSITION_EXPLAIN'				=> 'Geef aan of de nieuwe berichten worden weergegeven aan de boven- of onderkant.',
	'ACP_JV_SHOUTBOX_MSG_SETTINGS'						=> 'Bericht instellingen',
	'ACP_JV_SHOUTBOX_NEW_REPLY_POST'					=> 'Laat een nieuw bericht zien',
	'ACP_JV_SHOUTBOX_NEW_REPLY_POST_EXPLAIN'			=> 'Als er een nieuw bericht gezet wordt in een onderwerp, zal dit worden weergegeven in de shoutbox.',
	'ACP_JV_SHOUTBOX_NEW_REPLY_QUOTE_POST'				=> 'Laat een geciteerde bericht zien',
	'ACP_JV_SHOUTBOX_NEW_REPLY_QUOTE_POST_EXPLAIN'		=> 'Als u een nieuwe geciteerd bericht gezet wordt in een onderwerp, zal dit worden weergegeven in de shoutbox.',
	'ACP_JV_SHOUTBOX_NEW_TOPIC_POST'					=> 'laat een nieuw onderwerp zien',
	'ACP_JV_SHOUTBOX_NEW_TOPIC_POST_EXPLAIN'			=> 'Als er een nieuw onderwerp wordt aangemaakt in het forum, zal dit worden weergegeven in de shoutbox.',
	'ACP_JV_SHOUTBOX_PAGE'								=> 'Laat shoutbox zien',
	'ACP_JV_SHOUTBOX_PAGE_EXPLAIN'						=> 'Voeg der pagina toe waar je de shoutbox wilt weergeven. Let op dat de smileys en BBCode bij het posten van pm en handtekening niet beschikbaar zijn in de shoutbox.',
	'ACP_JV_SHOUTBOX_POSITION_BOTTOM'					=> 'Onderaan',
	'ACP_JV_SHOUTBOX_POSITION_TOP'						=> 'Boven',
	'ACP_JV_SHOUTBOX_POST_IGNORE_FORUMS'				=> 'Genegeerde forums',
	'ACP_JV_SHOUTBOX_POST_IGNORE_FORUMS_EXPLAIN'		=> 'Onderwerpen in de geselecteerde forums zetten niet automatisch een bericht. Selecteer/Deselecteer meerdere fora door CTRL ingedrukt te houden CTRL en klik op de te selecteren fora.',
	'ACP_JV_SHOUTBOX_PRUNE'								=> 'Snoei berichten',
	'ACP_JV_SHOUTBOX_PRUNE_EXPLAIN'						=> 'Indien aangezet, stel dan de intervallen zodat alleen het maximaal ingestelde berichten behouden blijven.',
	'ACP_JV_SHOUTBOX_PRUNE_MSG_NUM'						=> 'Aantal berichten wat behouden moet worden',
	'ACP_JV_SHOUTBOX_PRUNE_MSG_NUM_EXPLAIN'				=> 'Indien  snoeien is aangezet, zal het aantal ingestelde berichten bewaard blijven.',
	'ACP_JV_SHOUTBOX_PRUNE_TIME'						=> 'Snoei interval',
	'ACP_JV_SHOUTBOX_PRUNE_TIME_EXPLAIN'				=> 'Voer het aantal intervals in om berichten te verwijderen tijdens de snoei.',
	'ACP_JV_SHOUTBOX_REFRESH'							=> 'Ververs (controleer) Interval',
	'ACP_JV_SHOUTBOX_REFRESH_EXPLAIN'					=> 'De gespecificeerde Snoei interval zal worden gecontroleerd tijdens het ontvangen van nieuwe berichten.',
	'ACP_JV_SHOUTBOX_ROUND_AVATAR'						=> 'Ronde avatar',
	'ACP_JV_SHOUTBOX_ROUND_AVATAR_EXPLAIN'				=> 'Indien aangezet, zullen de avatars worden weergegeven in een ronde vorm.',
	'ACP_JV_SHOUTBOX_SETTINGS'							=> 'Shoutbox instellingen',
	'ACP_JV_SHOUTBOX_SETTINGS_EXPLAIN'					=> 'Hier kunt u de shoutbox en de berichtinstellingen aanpassen.',
	'ACP_JV_SHOUTBOX_SMILIE_ENABLE'						=> 'Zet smileys aan',
	'ACP_JV_SHOUTBOX_SMILIE_ENABLE_EXPLAIN'				=> 'Hier kun je het gebruik van smileys aanzetten.',
	'ACP_JV_SHOUTBOX_SMILIE_SCROLL_BOX'					=> 'Laat smileys scroll box zien',
	'ACP_JV_SHOUTBOX_SMILIE_SCROLL_BOX_EXPLAIN'			=> 'Als er toegestane smiley worden weergeven, Hier kun je de scroll box toestaan om de smileys te sluiten.',

	'LOG_JV_SHOUTBOX_CONFIG_SETTINGS'					=> '<strong>Bewerkt shoutbox instellingen.</strong>',
	'LOG_JV_SHOUTBOX_DELETE_MESSAGES'					=> '<strong>Verwijder alle shoutbox berichten.</strong>',
	'LOG_JV_SHOUTBOX_MESSAGES_PRUNING'					=> '<strong>Shoutbox berichten geleegd.</strong><br>» Verwijderde %d berichten',
));

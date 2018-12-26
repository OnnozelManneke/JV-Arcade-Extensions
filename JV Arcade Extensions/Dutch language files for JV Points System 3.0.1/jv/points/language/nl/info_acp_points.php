<?php
/**
*
* @package JV Points System
* @version $Id: info_acp_points.php 461 2018-12-06 11:10:46Z Scanialady $
* @author 2011-2019 KillBill - killbill@jatek-vilag.com
* @copyright (c) 2014-2019 https://jv-arcade.com/ - support@jv-arcade.com
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
	'JV_ACP_CAT_POINTS'										=> 'Punten systeem',
	'JV_ACP_POINTS'											=> 'JV Punten Systeem',
	'JV_ACP_POINTS_ADD'										=> 'Toevoegen',
	'JV_ACP_POINTS_AFTER'									=> 'Na',
	'JV_ACP_POINTS_AMOUNT_USERS_EXPLAIN'					=> 'Geef de waarde in dat u wilt wijzigen aan gebruikers saldo.',
	'JV_ACP_POINTS_BEFORE'									=> 'Voor',
	'JV_ACP_POINTS_DELETE_TRANSFER_LOG_SUCCESS'				=> 'Het overdracht logboek is succesvol verwijderd.',
	'JV_ACP_POINTS_DELETE_SELECTED_TRANSFER_LOG_SUCCESS'	=> 'De geselecteerde overschrijvingsgegevens zijn succesvol verwijderd.',
	'JV_ACP_POINTS_DELETE_TRANSFER_LOG_CONFIRM'				=> 'Weet je zeker dat je de logboek gegevens wilt verwijderen?<br><em>Houd er rekening mee dat de gegevens mogelijk niet worden hersteld na verwijdering en dat geen enkele gebruiker deze logboek gegevens meer kan openen.</em>',
	'JV_ACP_POINTS_DISPLAY_TOP_USERS'						=> 'Toon top gebruikers',
	'JV_ACP_POINTS_DISPLAY_TOP_USERS_EXPLAIN'				=> 'Als u dit inschakelt, worden op het tabblad “Punten Systeem Controle Paneel/Overzicht” gebruikers met het grootste saldo weergegeven.',
	'JV_ACP_POINTS_DISPLAY_MEMBERLIST'						=> 'Geeft het saldo weer in de ledenlijst',
	'JV_ACP_POINTS_DISPLAY_MEMBERLIST_EXPLAIN'				=> 'Indien ingeschakeld, worden de gebruikerssaldi weergegeven in de ledenlijst.',
	'JV_ACP_POINTS_ENABLE'									=> 'Zet punten systeem aan',
	'JV_ACP_POINTS_ENABLE_EXPLAIN'							=> 'Sta gebruikers toe om het punten systeem te gebruiken',
	'JV_ACP_POINTS_ERROR_NO_FUNCTION'						=> 'Je hebt geen functie gespecificeerd.',
	'JV_ACP_POINTS_ERROR_ZERO_VALUE'						=> 'Het gespecificeerde punten aantal mag geen nul zijn.',
	'JV_ACP_POINTS_GROUPS_CHANGED_SUCCESS'					=> 'Voor de “%s” groep zijn alle gebruikers saldo succesvol gewijzigd.',
	'JV_ACP_POINTS_GROUP_ALL_USERS'							=> 'Alle gebruikers in de groep',
	'JV_ACP_POINTS_GROUP_ALL_USERS_EXPLAIN'					=> 'Als je nee hebt geselecteerd, dan geldt het alleen voor de geselecteerde gebruikers in de standaard groep.',
	'JV_ACP_POINTS_GROUP_CHANGED_SUCCESS'					=> 'Voor de “%s” groep zijn alle gebruikers saldo aantal succesvol gewijzigd.',
	'JV_ACP_POINTS_LOG_FORMAT_GROUP'						=> 'Logboek indeling',
	'JV_ACP_POINTS_LOG_FORMAT_GROUP_EXPLAIN'				=> 'Hier geef je aan of de groepsnamen of de namen van de gebruikers worden vermeldt in het logboek.',
	'JV_ACP_POINTS_MANAGE_GROUPS'							=> 'Beheer groepen',
	'JV_ACP_POINTS_MANAGE_USER'								=> 'Beheer gebruiker',
	'JV_ACP_POINTS_MANAGE_USERS'							=> 'Beheer gebruikers',
	'JV_ACP_POINTS_MANAGE_USERS_EXPLAIN'					=> 'Hier kan je de gebruikers saldo veranderen. Het is mogelijk dit per persoon te doen, ook meerdere gebruikers en groepen tegelijk is mogelijk.',
	'JV_ACP_POINTS_MANAGE_USER_EXPLAIN'						=> 'Hier kan je de gebruikers saldo veranderen.',
	'JV_ACP_POINTS_NAME'									=> 'Punten naam',
	'JV_ACP_POINTS_NAME_COLOR'								=> 'Punten naam kleur',
	'JV_ACP_POINTS_NAME_COLOR_EXPLAIN'						=> 'Als je de “Punten naam” kleur wil veranderen, kan je dit hier doen.',
	'JV_ACP_POINTS_NAME_EXPLAIN'							=> 'De punten naam die je wilt laten zien in plaats van het woord punten op je forum.',
	'JV_ACP_POINTS_NAME_POS'								=> 'Positie punten naam',
	'JV_ACP_POINTS_NAME_POS_EXPLAIN'						=> 'Hier kan je bepalen of de “Punten naam” voor of na het punten aantal komt.',
	'JV_ACP_POINTS_NEW_ATTACH_EXT'							=> 'Selecteer bestand extensies',
	'JV_ACP_POINTS_NEW_ATTACH_EXT_EXPLAIN'					=> 'De geselecteerde bestand extensies zijn alleen van toepassing op de download kosten.',
	'JV_ACP_POINTS_SELECT_FUNC'								=> 'Selecteer functie',
	'JV_ACP_POINTS_SELECT_GROUPS_NO_USER'					=> 'Gebruiker is niet gevonden in de geselecteerde groepen.',
	'JV_ACP_POINTS_SELECT_GROUP_NO_USER'					=> 'Gebruiker is niet gevonden in de geselecteerde groep.',
	'JV_ACP_POINTS_SET'										=> 'Instellen.',
	'JV_ACP_POINTS_SETTINGS'								=> 'Algemene instellingen.',
	'JV_ACP_POINTS_SETTINGS_EXPLAIN'						=> 'Met de onderstaande optie kan je de verschillende algemene instellingen aanpassen.',
	'JV_ACP_POINTS_SUBTRACT'								=> 'Aftrekken',
	'JV_ACP_POINTS_USERS_CHANGED_SUCCESS'					=> 'Het saldo van de gebruikers “%s” is met succes gewijzigd.',
	'JV_ACP_POINTS_USERS_DEFAULT_GROUPS_CHANGED_SUCCESS'	=> 'Het saldo van de standaard gebruikers in groepen “%s” is met succes gewijzigd.',
	'JV_ACP_POINTS_USERS_DEFAULT_GROUP_CHANGED_SUCCESS'		=> 'Het saldo van de standaard gebruikers in groep “%s” is met succes gewijzigd.',
	'JV_ACP_POINTS_TRANSFER'								=> 'Schakel overdrachtsmodule in',
	'JV_ACP_POINTS_TRANSFER_EXPLAIN'						=> 'Hier kunt u het gebruik van de overdrachtsmodule inschakelen. Gebruikers hebben de mogelijkheid om een bepaald bedrag aan fondsen onderling over te maken.',
	'JV_ACP_POINTS_TRANSFER_LOG'							=> 'Beheer overdracht log',
	'JV_ACP_POINTS_TRANSFER_LOG_EXPLAIN'					=> 'U kunt alle overdrachten bekijken en u hebt de mogelijkheid om de opgaven te verwijderen.',
	'JV_LOG_POINTS_ADD_GROUP'								=> '<strong>Voeg het aantal punten toe voor alle gebruikers in de volgende groep: %s</strong><br>» Toegevoegde punten: %s',
	'JV_LOG_POINTS_ADD_GROUPS'								=> '<strong>Voegde aantal punten toe voor alle gebruikers in de volgende groepen: %s</strong><br>» Toegevoegde punten: %s',
	'JV_LOG_POINTS_ADD_USER'								=> '<strong>Voegde aantal punten toe voor de volgende gebruiker: %s</strong><br>» Toegevoegde punten: %s',
	'JV_LOG_POINTS_ADD_USERS'								=> '<strong>Voegde aantal punten toe voor de volgende gebruikers: %s</strong><br>» Toegevoegde punten: %s',
	'JV_LOG_POINTS_ADD_USERS_DEFAULT_GROUP'					=> '<strong>Voegde aantal punten toe voor de standaard gebruiker in de volgende groep: %s</strong><br>» Toegevoegde punten: %s',
	'JV_LOG_POINTS_ADD_USERS_DEFAULT_GROUPS'				=> '<strong>Voegde aantal punten toe voor de standaard gebruikers in de volgende groepen: %s</strong><br>» Toegevoegde punten: %s',
	'JV_LOG_POINTS_CLEAR_TRANSFER_LOG'						=> '<strong>Puntensysteem heeft de overdracht log gewist.</strong>',
	'JV_LOG_POINTS_CONFIG_SETTINGS'							=> '<strong>Veranderen  algemene instellingen van het Punten systeem.</strong>',
	'JV_LOG_POINTS_SET_GROUP'								=> '<strong>Instellen van het aantal punten voor alle gebruikers in de volgende groep: %s</strong><br>» Instellen punten: %s',
	'JV_LOG_POINTS_SET_GROUPS'								=> '<strong>Instellen van het aantal punten voor alle gebruikers in de volgende groepen: %s</strong><br>» Instellen punten: %s',
	'JV_LOG_POINTS_SET_USER'								=> '<strong>Instellen van het aantal punten voor de volgende gebruiker: %s</strong><br>» Instellen punten: %s',
	'JV_LOG_POINTS_SET_USERS'								=> '<strong>Instellen van het aantal punten voor de volgende gebruikers: %s</strong><br>» Instellen punten: %s',
	'JV_LOG_POINTS_SET_USERS_DEFAULT_GROUP'					=> '<strong>Instellen van het aantal punten voor de standaard gebruiker in de volgende groep: %s</strong><br>» Instellen punten: %s',
	'JV_LOG_POINTS_SET_USERS_DEFAULT_GROUPS'				=> '<strong>Instellen van het aantal punten voor de standaard gebruikers in de volgende groepen: %s</strong><br>» Instellen punten: %s',
	'JV_LOG_POINTS_SUBTRACT_GROUP'							=> '<strong>Verminder het aantal punten voor alle gebruikers in de volgende groep: %s</strong><br>» Verminder waarde: %s',
	'JV_LOG_POINTS_SUBTRACT_GROUPS'							=> '<strong>Verminder het aantal punten voor alle gebruikers in de volgende groepen: %s</strong><br>» Verminder waarde: %s',
	'JV_LOG_POINTS_SUBTRACT_USER'							=> '<strong>Verminder het aantal punten toe voor de volgende gebruiker: %s</strong><br>» Verminder waarde: %s',
	'JV_LOG_POINTS_SUBTRACT_USERS'							=> '<strong>Verminder het aantal punten toe voor de volgende gebruikers: %s</strong><br>» Verminder waarde: %s',
	'JV_LOG_POINTS_SUBTRACT_USERS_DEFAULT_GROUP'			=> '<strong>Verminder het aantal punten voor de standaard gebruiker in de volgende groep: %s</strong><br>» Verminder waarde: %s',
	'JV_LOG_POINTS_SUBTRACT_USERS_DEFAULT_GROUPS'			=> '<strong>Verminder het aantal punten voor de standaard gebruiker in de volgende groepen: %s</strong><br>» Verminder waarde: %s',
	'JV_LOG_POINTS_USER_CHANGED'							=> '<strong>%s Veranderen saldo van gebruiker. Origineel saldo: %s</strong><br>» Nieuw saldo: %s',
	'JV_POINTS_NEW_ATTACH_COST_EXPLAIN'						=> 'Als een gebruiker een bijlage download, zal dit bedrag worden afgetrokken.',
	'JV_POINTS_NEW_POST_COST_EXPLAIN'						=> 'Als een gebruikers een nieuw bericht schrijft, dan zal dit bedrag worden afgetrokken.',
	'JV_POINTS_NEW_POST_REWARD_EXPLAIN'						=> 'Als een gebruikers een nieuw bericht schrijft, dan zal hij deze beloning ontvangen.<br><em>Let op: dit zal de beloning zijn die ook jij krijgt als een gebruiker een nieuw bericht plaatst of een nieuw onderwerp opent.</em>',
	'JV_POINTS_NEW_TOPIC_REWARD_EXPLAIN'					=> 'Als een gebruiker een nieuw onderwerp aanmaakt, dan zal hij deze beloning ontvangen.',
	'JV_POINTS_REG_START_BALANCE_EXPLAIN'					=> 'Als een nieuw lid zich registreert op dit forum, dan zal hij dit start saldo ontvangen.',
	'JV_POINTS_TRANSFER_COST_EXPLAIN'						=> 'Een percentage van het bedrag dat moet worden overgemaakt.',
));

<?php
/**
*
* @package JV Privacy Policy and data management tool
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
	'JVPPDMT_MY_ACC_DELETE_CONFIRM'			=> 'Verwijder mijn registratie bevestiging',
	'JVPPDMT_MY_ACC_DELETE_CONFIRM_ERROR'	=> 'Verwijdering van registratie is niet bevestigd!',
	'JVPPDMT_MY_ACC_DELETE_EXPLAIN'			=> 'Verwijder mijn registratie<br><em>Let op, als u dat doet, is er geen manier om uw gegevens te herstellen!</em>',
	'JVPPDMT_MY_ACC_DELETE_FOUNDER_ERROR'	=> 'De oprichtende gebruiker kan zijn eigen registratie niet verwijderen! Deze bewerking kan alleen worden uitgevoerd door een andere oprichter.',
	'JVPPDMT_MY_ACC_DELETE_SUCCESS'			=> 'Registratie is succesvol verwijderd.',
	'JVPPDMT_MY_ACC_POST_DELETE'			=> 'Berichten verwijderen',
	'JVPPDMT_MY_ACC_POST_DELETE_EXPLAIN'	=> 'je berichten worden van het forum verwijderd',
	'JVPPDMT_REGISTRATION_IP'				=> 'Registratie IP-adres',
	'JVPPDMT_REGISTRATION_DATE'				=> 'Registratietijd',
	'JVPPDMT_PRIVACY_POLICY_ACCEPT_DATE'	=> 'Laatste acceptatie tijd voor privacybeleid',
	'JVPPDMT_TERM_OF_USE_ACCEPT_DATE'		=> 'De laatste acceptatie tijd voor de gebruiksvoorwaarden',
	'JVPPDMT_COOKIE_SETTING'				=> 'Cookies ontvangen',
	'JVPPDMT_COOKIE_SETTING_EXPLAIN'		=> 'Hier kunt u instellen of deze website cookies op uw apparaat kan opslaan of niet. Lees voor meer informatie het %sPrivacybeleid%s.<br><em>Merk op dat als u cookies niet inschakelt, veel functies niet werken.</em>',
	'JVPPDMT_PD_SETTING'					=> 'Opslag van persoonlijke gegevens',
	'JVPPDMT_PD_SETTING_EXPLAIN'			=> 'Hier kunt u instellen hoe u met uw persoonlijke gegevens over de website gaat. Uiteraard kunt u die beslissing later op elk moment wijzigen.',
	'JVPPDMT_PD_ACCEPT'						=> 'Ik keur het gebruik van mijn persoonlijke gegevens goed en bewaar deze',
	'JVPPDMT_PD_PARTIAL_ACCEPT'				=> 'Gebruik alleen mijn bestaande gegevens en sla geen extra persoonlijke gegevens op',
	'JVPPDMT_PD_REJECT'						=> 'Ik verwerp het gebruik en de opslag van mijn persoonlijke gegevens',
	'JVPPDMT_YOUR_POST_NUMBER'				=> 'Aantal berichten',
	'JVPPDMT_SELECT_DOWNLOAD_FORMAT'		=> 'Selecteer het download formaat',
	'JVPPDMT_YOUR_PM_NUMBER'				=> 'Aantal privé berichten',
	'JVPPDMT_ID'							=> 'Identificatie Nummer',
	'JVPPDMT_REL_IP'						=> 'Gerelateerd IP-adres',
	'JVPPDMT_CREATE_TIME'					=> 'Aanmaak datum',
	'JVPPDMT_FORUM_POSTS'					=> 'Forum berichte,',
	'JVPPDMT_DOWNLOAD'						=> 'Download',
	'JVPPDMT_NOT_FOUND_POST'				=> 'Je hebt geen bericht.',
	'JVPPDMT_NOT_FOUND_PM'					=> 'Je hebt geen privé bericht.',
	'JVPPDMT_SENT_PRIVATE_MESSAGES'			=> 'Verzonden privé berichten',
));
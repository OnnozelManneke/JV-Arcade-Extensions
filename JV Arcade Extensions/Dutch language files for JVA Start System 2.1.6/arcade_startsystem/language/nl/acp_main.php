<?php
/**
*
* @package phpBB Arcade - JVA Start System
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
	'JVA_SS_ACTIVATION'							=> 'JVA Start Systeem activeren',
	'JVA_SS_ACTIVATION_EXPLAIN'					=> 'Hier kunt u alle instructies lezen die bij het JVA Start systeem horen en hier kunt u het systeem activeren als u de voorwaarden accepteert.',	
	'JVA_SS_ACTIVATION_BLOCKED'					=> 'Deze website is in strijd met de licentie voor “JVA Start Systeem” software en is geblokkeerd. De reden van de blokkering kan de software leverancier achterhalen. Je kan %sHIER%s vragen om de blokkering ongedaan te maken.',
	'JVA_SS_ACTIVATION_DATE'					=> 'Activatie datum',
	'JVA_SS_ACTIVATION_INVALID'					=> 'Ongeldige activeringspoging!',
	'JVA_SS_ACTIVATION_KEY'						=> 'Activatie sleutel',
	'JVA_SS_ACTIVATION_KEY_ALREADY'				=> 'De opgegeven activeringssleutel is al geactiveerd!',
	'JVA_SS_ACTIVATION_KEY_EXPLAIN'				=> 'Hier kunt u één van de drie sleutels kiezen. Als deze website live is, kies dan de "Gratis" sleutel, als het een testwebsite is, kies dan de "Test" sleutel. Als u echter een privé sleutel hebt, kunt u deze gebruiken, maar alleen als het een live website is.<br><br>',
	'JVA_SS_ACTIVATION_KEY_INVALID'				=> 'De opgegeven activeringssleutel is ongeldig!',
	'JVA_SS_ACTIVATION_KEY_INVALID_VERSION'		=> 'De opgegeven activeringssleutel hoort hier niet bij de “phpBB Arcade” versie!',
	'JVA_SS_ACTIVATION_SHOW'					=> 'Activeringsveld tonen',
	'JVA_SS_ACTIVATION_SUCCESS'					=> 'De opgegeven activeringssleutel is geaccepteerd, je kunt nu de phpBB Arcade gebruiken.',
	'JVA_SS_ENABLE_ERROR1'						=> 'The extension can not be activated because <strong>“phpBB Arcade”</strong> is not active!',
	'JVA_SS_ENABLE_ERROR2'						=> 'The extension can not be activated because the version of <strong>“phpBB Arcade”</strong> is below version <strong>“%s”</strong>!',
	'JVA_SS_NEW_KEY'							=> 'Nieuwe sleutel toevoegen',
	'JVA_SS_NOT_ACTIVATED'						=> 'Het “JVA Start Systeem” is niet geactiveerd! “phpBB Arcade” kan niet gebruikt worden tot je “JVA Start Systeem activeert”.',
	'JVA_SS_NOT_ACTIVATED_INFO'					=> 'Het “JVA Start Systeem” is niet geactiveerd door de oprichter. Eenmaal geactiveerd zal de “phpBB Arcade” beschikbaar zijn voor u.',
	'JVA_SS_NOT_COMPATIBLE'						=> 'Het geïnstalleerde “JVA Start Systeem” is niet compatibel met deze “phpBB Arcade” versie. Gelieve het “JVA Start Systeem” te update.<br>» %sDownload JVA Start Systeem%s «',
	'JVA_SS_PRIVACY_POLICY'						=> 'Privacybeleid',
	'JVA_SS_VIEW_PERSONAL_DATA'					=> 'Bekijk persoonlijke gegevens',
	'JVA_SS_VIEW_PERSONAL_DATA_EXPLAIN'			=> 'Mijn opgeslagen persoonlijke gegevens op de “%s” website.',
	'JVA_SS_NO_PERMISSION_VIEW_PERSONAL_DATA'	=> 'U bent niet gemachtigd om de persoonlijke gegevens van een andere oprichtende gebruiker te bekijken.',
	'JVA_SS_REMOVE_PERSONAL_DATA'				=> 'Persoonlijke gegevens verwijderen',
	'JVA_SS_REMOVE_PERSONAL_CONFIRM'			=> 'Weet je zeker dat je alle persoonlijke gegevens wilt verwijderen en dus wilt wissen met activering?',
	'JVA_SS_REMOVE_PERSONAL_DATA_SUCCESS'		=> 'Alle persoonlijke gegevens zijn verwijderd van de  “%s” website.',
	'JVA_SS_REMOVE_PERSONAL_DATA_ERROR'			=> 'Het verwijderen van de gegevens is mislukt. Probeer het opnieuw.',
	'JVA_SS_WEB_ADDRESS'						=> 'Website adres',
	'JVA_SS_ID'									=> 'Eigen JVA Start systeem-ID',
	'JVA_SS_ID_EXPLAIN'							=> 'De unieke ID van uw website. De verbinding wordt om veiligheidsredenen gebruikt.<br><i>Wijzig dit nooit en geef dit ID nooit aan anderen!</i>',
	'JVA_SS_WEB_STATUS'							=> 'Website status',
	'JVA_SS_INSTALL_DATE'						=> 'Installatie datum',
	'JVA_SS_UPDATE_DATE'						=> 'Update datum',
	'JVA_SS_FIRST_PLAY_DATE'					=> 'Eerste speel datum',
	'JVA_SS_LAST_PLAY_DATE'						=> 'Laatste speel datum',
	'JVA_SS_PLAY_NUM'							=> 'Aantal keren gespeeld',
	'JVA_SS_SKIP_TIME'							=> 'Wachttijd om advertenties over te slaan',
	'JVA_SS_PHPBB_VERSION'						=> 'phpBB versie nummer',
	'JVA_SS_ARCADE_VERSION'						=> 'phpBB Arcade versie nummer',
	'JVA_SS_USERNAME'							=> 'Je gebruikersnaam',
	'JVA_SS_USER_EMAIL'							=> 'Uw e-mailadres',
	'JVA_SS_USER_IP'							=> 'Uw IP-adres',
	'JVA_SS_ACT_KEY'							=> 'Activatie sleutel',
	'JVA_SS_ACT_KEY_VERSION'					=> 'Activatie sleutel versienummer',
	'JVA_SS_ACT_KEY_EXP_DATE'					=> 'Vervaltijd van de activeringssleutel',
	'JVA_SS_USE_AR_RANK'						=> 'AR rang gebruiken',
	'JVA_SS_ERROR_INFO'							=> 'Fout informatie',
	'JVA_SS_WEBSITE_NO_CONNECTION'				=> 'De “%s” website is momenteel niet beschikbaar!',
	'JVA_SS_WEBSITE_ERROR_CONNECTION'			=> 'Er is een fout opgetreden tijdens het ophalen. Status code: %s, Foutcode: %s',
	'JVA_SS_SITE_NOT_AVAILABLE'					=> 'Geen contact met “%1$s” website!<br><br>Hoewel de “%1$s” website niet beschikbaar is, bieden we een alternatief voor activering. Klik %2$s<strong>HIER</strong>%3$s om tijdelijk te activeren.<br>Merk op dat zodra de “%1$s” website beschikbaar is, de tijdelijke activering zal eindigen. In dit geval moet het systeem opnieuw worden geactiveerd.',
	'JVA_SS_EXPLAIN'							=> '<strong style="color: #BC2A4D;">Aandacht!<br>Tijdens de activering worden persoonlijke gegevens verzonden en opgeslagen op de %1$s website.</strong><br><br>
Persoonlijke gegeven houden in:<br>
%2$s<br>
<strong>Gebruikt taal ID:</strong> %3$s<br>
en de activeringssleutel.<br>
Bovendien worden de installatie- en update datum opgeslagen.<br><br>

U kunt uw opgeslagen gegevens later bijwerken door het systeem opnieuw te activeren.<br>
Als u het systeem activeert, kunt u uw persoonlijke gegevens later van de %1$s website verwijderen.',

	'JVA_SS_JVA_GI_EXPLAIN'						=> 'Het “JVA Start systeem” bevat een “phpBB Arcade” extensie genaamd “JVA Game Intro”.<br>
Deze extensie stuurt ook gegevens naar de %1$s website aan het begin van elk spel.<br><br>
Persoonlijke gegeven houden in:<br>
%2$s<br>
<strong>Java Start systeem versie:</strong> %3$s<br>
<strong>Oprichter gebruiker:</strong> Waar of niet waar<br>
<strong>Gebruikt taal ID:</strong> %4$s<br>
en de activeringssleutel.<br>
Bovendien worden het aantal spelen en de eerste en laatste speel datum opgeslagen.<br><br>
<strong style="color: #BC2A4D;">We verklaren dat gebruikers activiteit niet wordt bijgehouden en dat er geen persoonlijke gegevens over geregistreerde gebruikers van uw forum worden opgeslagen of verzameld op “%5$s”!</strong>',

	'JVA_SS_DETAIL_DESCRIPTION_CONFIRM'			=> 'De beschrijving van %s“JVA Start Systeem”%s is zorgvuldig gelezen en begrepen',
	'JVA_SS_PRIVACY_POLICY_CONFIRM'				=> 'Het %s“Privacybeleid”%s is zorgvuldig gelezen en geaccepteerd',
	'JVA_SS_LICENSE_CONFIRM'					=> 'Ik heb de %s“Licentie”%s zorgvuldig gelezen en accepteer deze',
	'JVA_SS_APPROVAL_PERSONAL_DATA_CONFIRM'		=> 'Ik ga ermee akkoord om persoonlijke gegevens te verzenden en op te slaan',
	'JVA_SS_ACTIVATION_SUBMIT'					=> 'Gegevens verzenden, activeren',
	'JVA_SS_DISABLE_SUBMIT'						=> 'JVA Start Systeem uitschakelen',
	'JVA_SS_STORED_DATA'						=> 'Opgeslagen gegevens',
	'JVA_SS_REGISTERED'							=> 'Geregistreerd',
	'JVA_SS_UNREGISTERED'						=> 'Niet geregistreerd',
	'JVA_SS_PERSONAL_DATA'						=> 'Persoonlijke gegevens',
	'JVA_SS_REMOVE_PERSONAL_DATA'				=> 'Persoonlijke gegevens verwijderen',
	'JVA_SS_DOWNLOAD_PERSONAL_DATA'				=> 'Download persoonlijke gegevens',
));

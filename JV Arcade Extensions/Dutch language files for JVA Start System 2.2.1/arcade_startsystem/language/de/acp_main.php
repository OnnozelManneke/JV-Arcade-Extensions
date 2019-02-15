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
	'JVA_SS_ACTIVATION'							=> 'JVA Start System aktivieren',
	'JVA_SS_ACTIVATION_EXPLAIN'					=> 'Hier kannst du alle Anweisungen lesen, die zum JVA Start System gehören, und hier kannst du das System aktivieren, wenn du die Bedingungen akzeptierst.',
	'JVA_SS_ACTIVATION_BLOCKED'					=> 'Diese Webseite verletzt die Lizenzbedingungen für die „JVA Start System“ Software und wurde blockiert. Der Softwarebenutzer kann die Ursache für die Blockierung  %sHIER%s herausfinden, und die Aufhebung der Blockierung anfragen.',
	'JVA_SS_ACTIVATION_DATE'					=> 'Aktivierungsdatum',
	'JVA_SS_ACTIVATION_INVALID'					=> 'Fehlerhafter Aktivierungsversuch!',
	'JVA_SS_ACTIVATION_KEY'						=> 'Aktivierungsschlüssel',
	'JVA_SS_ACTIVATION_KEY_ALREADY'				=> 'Der angegebene Aktivierungsschlüssel ist bereits aktiviert worden!',
	'JVA_SS_ACTIVATION_KEY_EXPLAIN'				=> 'Hier kannst du zwischen drei Schlüsseln wählen. Wenn diese Webseite aktiv ist, wähle den Schlüssel „Kostenlos“. Wenn es eine Testseite ist, wähle den „Test“-Schlüssel. Wenn du einen privaten Schlüssel hast, kannst du natürlich diesen verwenden, aber nur, wenn es sich um eine aktive Webseite handelt.<br><br>',
	'JVA_SS_ACTIVATION_KEY_INVALID'				=> 'Der angegebene Aktivierungsschlüssel ist fehlerhaft!',
	'JVA_SS_ACTIVATION_KEY_INVALID_VERSION'		=> 'Der angebebene Aktivierungsschlüssel gehört nicht zu dieser „phpBB Arcade“ Version!',
	'JVA_SS_ACTIVATION_KEY_UPDATED'				=> 'Der benutzte Aktivierungsschlüssel wurde erfolgreich aktualisiert.',
	'JVA_SS_ACTIVATION_SHOW'					=> 'Aktivierungsfeld anzeigen',
	'JVA_SS_ACTIVATION_SUCCESS'					=> 'Der angegebene Aktivierungsschlüssel wurde angenommen, Du kannst die „phpBB Arcade“ jetzt benutzen.',
	'JVA_SS_ENABLE_ERROR1'						=> 'Die Erweiterung kann nicht aktiviert werden, weil <strong>„phpBB Arcade“</strong> nicht aktiv ist!',
	'JVA_SS_ENABLE_ERROR2'						=> 'Die Erweiterung kann nicht aktiviert werden, weil die Version von <strong>„phpBB Arcade“</strong> unterhalb der Version <strong>„%s“</strong> liegt!',
	'JVA_SS_NEW_KEY'							=> 'Neuen Schlüssel hinzufügen',
	'JVA_SS_NOT_ACTIVATED'						=> 'Das „JVA Start System“ ist nicht aktiviert! Bis du „JVA Start System“ aktivierst, kann „phpBB Arcade“ nicht verwendet werden.',
	'JVA_SS_NOT_ACTIVATED_INFO'					=> 'Das „JVA Start System“ wurde vom Gründer nicht aktiviert. Sobald es aktiviert wurde, steht es dir zur Verfügung.',
	'JVA_SS_NOT_COMPATIBLE'						=> 'Das installierte „JVA Start System“ ist mit dieser „phpBB Arcade“ nicht kompatibel. Bitte aktualisiere das „JVA Start System“.<br>» %sDownload JVA Start System%s «',
	'JVA_SS_PRIVACY_POLICY'						=> 'Datenschutz-Bestimmungen',
	'JVA_SS_VIEW_PERSONAL_DATA'					=> 'Betrachte persönliche Daten',
	'JVA_SS_VIEW_PERSONAL_DATA_EXPLAIN'			=> 'Meine auf der Webseite „%s“ gespeicherten persönlichen Daten.',
	'JVA_SS_NO_PERMISSION_VIEW_PERSONAL_DATA'	=> 'Du bist nicht berechtigt, die persönlichen Daten eines anderen Gründers anzusehen.',
	'JVA_SS_REMOVE_PERSONAL_DATA'				=> 'Entferne persönliche Daten',
	'JVA_SS_REMOVE_PERSONAL_CONFIRM'			=> 'Bist du sicher, dass du all deine persönlichen Daten löschen, und damit auch deine Aktivierung entfernen willst?',
	'JVA_SS_REMOVE_PERSONAL_DATA_SUCCESS'		=> 'Alle persönlichen Daten wurden von der Webseite „%s“ entfernt.',
	'JVA_SS_REMOVE_PERSONAL_DATA_ERROR'			=> 'Löschen der Daten fehlgeschlagen, versuche es bitte noch einmal.',
	'JVA_SS_WEB_ADDRESS'						=> 'Webseitenadresse',
	'JVA_SS_ID'									=> 'Eigene JVA Start System ID',
	'JVA_SS_ID_EXPLAIN'							=> 'Die eindeutige Kennung deiner Webseite. Diese Verbindung wird aus Sicherheitsgründen verwendet.<br><i>Never modify and never give this ID to others!</i>',
	'JVA_SS_WEB_STATUS'							=> 'Webseitenstatus',
	'JVA_SS_INSTALL_DATE'						=> 'Installationsdatum',
	'JVA_SS_UPDATE_DATE'						=> 'Aktualisierungsdatum',
	'JVA_SS_FIRST_PLAY_DATE'					=> 'Datum des ersten Spielstarts',
	'JVA_SS_LAST_PLAY_DATE'						=> 'Datum des letzten Spielstarts',
	'JVA_SS_PLAY_NUM'							=> 'Anzahl Spielstarts',
	'JVA_SS_SKIP_TIME'							=> 'Wartezeit, bis die Werbung übersprungen werden kann',
	'JVA_SS_PHPBB_VERSION'						=> 'phpBB Versionsnummer',
	'JVA_SS_ARCADE_VERSION'						=> 'phpBB Arcade Versionsnummer',
	'JVA_SS_USERNAME'							=> 'Dein Benutzername',
	'JVA_SS_USER_EMAIL'							=> 'Deine E-Mail-Adresse',
	'JVA_SS_USER_IP'							=> 'Deine IP-Addresse',
	'JVA_SS_ACT_KEY'							=> 'Aktivierungsschlüssel',
	'JVA_SS_ACT_KEY_VERSION'					=> 'Versionsnummer Aktivierungsschlüssel',
	'JVA_SS_ACT_KEY_EXP_DATE'					=> 'Ablaufdatum des Aktivierungsschlüssels',
	'JVA_SS_USE_AR_RANK'						=> 'AR-Rang verwenden',
	'JVA_SS_ERROR_INFO'							=> 'Fehlerinformation',
	'JVA_SS_WEBSITE_NO_CONNECTION'				=> 'Die Webseite „%s“ ist derzeit nicht erreichbar!',
	'JVA_SS_WEBSITE_ERROR_CONNECTION'			=> 'Beim Abrufen ist ein Fehler aufgetreten. Statuscode: %s, Fehlercode: %s',
	'JVA_SS_SITE_NOT_AVAILABLE'					=> 'Kein Kontakt zur Webseite „%1$s“!<br><br>Während die Webseite „%1$s“ unerreichbar ist, bieten wir eine alternative zur Aktivierung. Klicke %2$s<strong>HIER</strong>%3$s für eine temporäre Aktivierung.<br>Beachte, dass die temporäre Aktivierung endet, sobald die Webseite „%1$s“ wieder verfügbar ist. In diesem Fall muss das System neu aktiviert werden.',
	'JVA_SS_EXPLAIN'							=> '<strong style="color: #BC2A4D;">Achtung!<br>Während der Aktivierung werden personenbezogene Daten an die Webseite %1$s übertragen und gespeichert.</strong><br><br>
Folgende persönliche Daten sind davon betroffen:<br>
%2$s<br>
<strong>ID des benutzten Sprachpakets:</strong> %3$s<br>
und der Aktivierungsschlüssel.<br>
Zusätzlich wird das Installations- und Updatedatum gespeichert.<br><br>

Du kannst deine gespeicherten Daten jederzeit aktualisieren, wenn du das System reaktivierst.<br>
Wenn du das System aktiviert hast, kannst du deine persönlichen Daten von der Webseite %1$s später löschen.',

	'JVA_SS_JVA_GI_EXPLAIN'						=> 'Das „JVA Start System“ beinhaltet eine „phpBB Arcade“-Erweiterung namens „JVA Game Intro“.<br>
Diese Erweiterung sendet ebenfalls Daten zur Webseite %1$s bei jedem Spielstart.<br><br>
Folgende persönliche Daten sind davon betroffen:<br>
%2$s<br>
<strong>JVA Start System-Version:</strong> %3$s<br>
<strong>Boardgründer:</strong> Wahr oder falsch<br>
<strong>ID des benutzten Sprachpakets:</strong> %4$s<br>
und den Aktivierungsschlüssel.<br>
Zusätzlich wird die Anzahl der Spiele, und das erste und letzte Spielstartdatum gespeichert.<br><br>
<strong style="color: #BC2A4D;">Wir versichern, dass Benutzeraktivitäten nicht verfolgt werden, und dass keinerlei persönliche Daten über registrierte Benutzer deines Forums bei „%5$s“ gespeichert oder erhoben werden!</strong>',

	'JVA_SS_DETAIL_DESCRIPTION_CONFIRM'			=> 'Die Beschreibung des %s„JVA Start System“%s wurde aufmerksam gelesen und verstanden',
	'JVA_SS_PRIVACY_POLICY_CONFIRM'				=> 'Die %s„Datenschutzerklärung“%s wurde aufmerksam gelesen und wird akzeptiert',
	'JVA_SS_LICENSE_CONFIRM'					=> 'Ich habe die Erklärung aufmerksam gelesen und halte die Bedingungen der %s„Lizenz“%s ein',
	'JVA_SS_APPROVAL_PERSONAL_DATA_CONFIRM'		=> 'Ich akzeptiere das Senden und die Speicherung der genannten persönlichen Daten',
	'JVA_SS_ACTIVATION_SUBMIT'					=> 'Sende die Daten, aktiviere',
	'JVA_SS_DISABLE_SUBMIT'						=> 'Deaktiviere JVA Start System',
	'JVA_SS_STORED_DATA'						=> 'Gespeicherte Daten',
	'JVA_SS_REGISTERED'							=> 'Registriert',
	'JVA_SS_UNREGISTERED'						=> 'Unregistriert',
	'JVA_SS_PERSONAL_DATA'						=> 'Persönliche Daten',
	'JVA_SS_REMOVE_PERSONAL_DATA'				=> 'Entferne persönliche Daten',
	'JVA_SS_DOWNLOAD_PERSONAL_DATA'				=> 'Lade persönliche Daten herunter',
));

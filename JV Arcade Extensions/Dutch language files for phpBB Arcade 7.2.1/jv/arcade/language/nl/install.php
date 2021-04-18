<?php
/**
*
* @package phpBB Arcade
* @version $Id: install.php 2403 2021-04-12 12:39:21Z KillBill $
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
// Some characters you may want to copy&paste: ‚ ‘ ’ « » „ “ ” … ≧

$lang = array_merge($lang, array(
	'INSTALL_ARCADE_ALL_FOUND'							=> 'Alles gevonden',
	'INSTALL_ARCADE_BBCODE_HELPLINE'					=> 'Hulpregel',
	'INSTALL_ARCADE_BBCODE_REQD'						=> 'BBCode check',
	'INSTALL_ARCADE_BBCODE_REQD_EXPLAIN'				=> '<strong>Vereist</strong> - voeg een BBCode toe om de Arcade correct te laten werken.',
	'INSTALL_ARCADE_BBCODE_USAGE'						=> 'BBCode gebruik',
	'INSTALL_ARCADE_DIRS_FILES_REQD'					=> 'Bestanden en mappen',
	'INSTALL_ARCADE_DIRS_FILES_REQD_EXPLAIN'			=> '<strong>Vereist</strong> - Om goed te functioneren moet phpBB Arcade toegang hebben of schrijfrechten hebben op bepaalde bestanden of mappen. Als je "Niet gevonden" ziet staan, dan moet je de relevante map of bestand aanmaken. Als je ziet "Niet beschrijfbaar" dan moet je de bestanden of map permissies aanpassen om phpBB Arcade toe te staan om er in te kunnen schrijven.',
	'INSTALL_ARCADE_DISPLAY_ON_POSTING'					=> 'Weergeven op de berichten',
	'INSTALL_ARCADE_DONATE_TITLE'						=> 'phpBB Arcade donatie',
	'INSTALL_ARCADE_FINISH'								=> 'Controleren van phpBB Arcade is succesvol verlopen. Bedankt voor het kiezen van de phpBB Arcade software.',
	'INSTALL_ARCADE_FOUND'								=> 'Gevonden',
	'INSTALL_ARCADE_HTML_REPLACEMENT'					=> 'HTML vervanging',
	'INSTALL_ARCADE_MAIN_PAGE'							=> 'Ga naar de phpBB Arcade ACP hoofd pagina',
	'INSTALL_ARCADE_NEXT_STEP'							=> 'Ga naar volgende stap',
	'INSTALL_ARCADE_NOT_FOUND'							=> 'Niet gevonden',
	'INSTALL_ARCADE_PHPBB_REQD'							=> 'phpBB versie ≧ %s',
	'INSTALL_ARCADE_PHPBB_REQD_EXPLAIN'					=> '<strong>Vereist</strong> - Je moet ten minste versie “%s” van phpBB hebben om de phpBB Arcade te kunnen gebruiken.',
	'INSTALL_ARCADE_PHP_CURL_SUPPORT'					=> 'PHP instellingen <var>curl</var> is beschikbaar',
	'INSTALL_ARCADE_PHP_CURL_SUPPORT_EXPLAIN'			=> '<strong>Optioneel</strong> - Deze functie is optioneel, echter bepaalde phpBB phpBB Arcade modules, zoals de ACP download module zal niet goed functioneren zonder de functie.',
	'INSTALL_ARCADE_PHP_GETIMAGESIZE_SUPPORT'			=> 'PHP functie getimagesize() is beschikbaar',
	'INSTALL_ARCADE_PHP_GETIMAGESIZE_SUPPORT_EXPLAIN'	=> '<strong>Vereist</strong> - Om phpBB Arcade goed te laten functioneren, moet de getimagesize functie beschikbaar zijn.',
	'INSTALL_ARCADE_PHP_REQD'							=> 'PHP versie ≧ %s',
	'INSTALL_ARCADE_PHP_REQD_EXPLAIN'					=> '<strong>Benodigd</strong> - je moet ten minste versie “%s” van PHP hebben om phpBB Arcade te kunnen gebruiken.',
	'INSTALL_ARCADE_PHP_SETTINGS'						=> 'PHP versie en instellingen',
	'INSTALL_ARCADE_PHP_URL_FOPEN_SUPPORT'				=> 'PHP instellingen <var>allow_url_fopen</var> is ingeschakeld',
	'INSTALL_ARCADE_PHP_URL_FOPEN_SUPPORT_EXPLAIN'		=> '<strong>Optioneel</strong> - Deze instelling is optioneel, echter bepaalde phpBB Arcade functies, zoals de ACP download module zal niet goed functioneren zonder de functie.',
	'INSTALL_ARCADE_REQUIREMENTS'						=> 'phpBB Arcade installatie vereisten.',
	'INSTALL_ARCADE_REQUIREMENTS_EXPLAIN'				=> 'Voer een aantal tests uit op de server om er voor te zorgen, dat je succesvol de phpBB Arcade heb geïnstalleerd. Zorg er voor dat u de resultaten goed hebt gelezen en ga niet verder voordat u alle testen hebt uitgevoerd. Als u een van de de functies wilt gebruiken afhankelijk van de optionele tests, zorg ervoor dat dan ook deze tests worden uitgevoerd.',
	'INSTALL_ARCADE_SOFTWARE_VERSION'					=> 'Software versie',
	'INSTALL_ARCADE_TEST_AGAIN'							=> 'Test opnieuw',
	'INSTALL_ARCADE_UNWRITABLE'							=> 'Niet beschrijfbaar',
	'INSTALL_ARCADE_VERIFY_DB'							=> 'Controleren van phpBB Arcade database gegevens',
	'INSTALL_ARCADE_VERIFY_DB_ACP_MODULES'				=> 'Controleer ACP modules',
	'INSTALL_ARCADE_VERIFY_DB_ARCADE_PERMISSIONS'		=> 'Controleer phpBB Arcade permissies',
	'INSTALL_ARCADE_VERIFY_DB_CONFIGS'					=> 'Controleer instellingen',
	'INSTALL_ARCADE_VERIFY_DB_DATA'						=> 'Controleren database gegevens',
	'INSTALL_ARCADE_VERIFY_DB_EXPLAIN'					=> 'Er zal worden gecontroleerd of alle arcade database gegevens correct in de database staan.',
	'INSTALL_ARCADE_VERIFY_DB_MCP_MODULES'				=> 'Controleer MCP-modules',	
	'INSTALL_ARCADE_VERIFY_DB_PERMISSIONS'				=> 'Controleer permissies',
	'INSTALL_ARCADE_VERIFY_DB_PHPBB_PERMISSIONS'		=> 'Controleer phpBB permissies',
	'INSTALL_ARCADE_VERIFY_DB_TABLES'					=> 'Controleer tabellen',
	'INSTALL_ARCADE_VERIFY_DB_UCP_MODULES'				=> 'Controleer UCP modules',
	'INSTALL_ARCADE_VERIFY_ERROR_DB_VERSION'			=> 'Controleren van de phpBB Arcade is niet gestart omdat er nieuwe software is gevonden. AUB gebruik de %sphpBB Arcade update%s.',
	'INSTALL_ARCADE_VERIFY_FILES'						=> 'PhpBB Arcade bestanden controleren',
	'INSTALL_ARCADE_VERIFY_FILES_EXIST'					=> 'Controleren of bestanden bestaan',
	'INSTALL_ARCADE_VERIFY_FILES_EXPLAIN'				=> 'Er zal worden gecontroleerd of alle phpBB Arcade bestanden kunnen worden gevonden op de server.',
	'INSTALL_ARCADE_WRITABLE'							=> 'Beschrijfbaar',
	'INS_ARCADE_ADD_ERROR_LOG'							=> 'Alle voorkomende fouten worden gelogd.',
	'INS_ARCADE_CONVERT_GAME_INSTALL_FILE_END'			=> 'Het omzetting proces is klaar, je kunt hieronder de resultaten zien.',
	'INS_ARCADE_CONVERT_GAME_INSTALL_FILE_EXPLAIN'		=> 'Hier onder kun je zien hoe ver het staat met het omzetting proces, sluit de browser NIET VOOR het einde van het proces.',
	'INS_ARCADE_CONVERT_GAME_INSTALL_FILE_PROCESSING'	=> 'Even wachten…<br>%1$s<br>Momenteel bezig met het spel installatie proces, bestand %2$s van %3$s.',
	'INS_ARCADE_CONVERT_GAME_INSTALL_FILE_START'		=> 'Start omzetten',
	'INS_ARCADE_CONVERT_TOTAL_GAME_INSTALL_FILES'		=> 'Omgezette bestanden',
	'INS_ARCADE_DATA_FILES_CORRECT'						=> 'Bestanden met correcte gegevens',
	'INS_ARCADE_DELETE_DUPLICATE_GAME'					=> array(
		1												=> 'Dubbele spel verwijderd',
		2												=> 'Dubbele spellen verwijderd',
	),
	'INS_ARCADE_ENABLE_ERROR'							=> 'De extensie kan niet worden geactiveerd omdat de versie van <strong>“phpBB”</strong> lager is dan versie <strong>“%s”</strong>!',
	'INS_ARCADE_FILES_ALL_EXISTS'						=> 'Alle bestanden aanwezig',
	'INS_ARCADE_FILE_WRITE_EXPLAIN'						=> '<span style="color: #ff0000;">Waarschuwing:</span> Bijwerken van de spel installatie bestanden zal alleen lukken als de bestanden beschrijfbaar zijn, zorg ervoor dat de permissies juist zijn ingesteld.',
	'INS_ARCADE_GAME_CONVERT_FILE'						=> 'Spel installatie bestanden die omgezet moeten worden',
	'INS_ARCADE_GAME_CONVERT_FILE_EXPLAIN'				=> 'Hier heb je de optie om de spel installatie bestanden om te zetten naar de laatste versie.',
	'INS_ARCADE_GAME_DATA_CORRECT'						=> 'Bestanden met correcte gegevens',
	'INS_ARCADE_GAME_DATA_UPDATED'						=> 'Bijgewerkte spellen',
	'INS_ARCADE_GAME_FILES_NOT_FOUND'					=> 'Spel bestand niet gevonden',
	'INS_ARCADE_GAME_INSTALL_FILES_NOT_FOUND'			=> 'Spel installatie bestanden niet gevonden',
	'INS_ARCADE_GAME_INSTALL_FILES_UNWRITABLE'			=> 'Geen beschrijfbaar bestand',
	'INS_ARCADE_GAME_INSTALL_FILE_UPDATED'				=> 'Bijgewerkte spel installatie bestanden',
	'INS_ARCADE_UND_GAMES_FILESIZE'						=> 'Ongespecificeerde bestandsgrootte, spellen',
	'INS_ARCADE_UPDATE_GAME_DATA'						=> 'Update spelgegevens',
	'INS_ARCADE_UPDATE_GAME_DATA_END'					=> 'Het upgrade proces is voltooid, u kunt de resultaten hieronder zien.',
	'INS_ARCADE_UPDATE_GAME_DATA_EXPLAIN'				=> 'Tijdens het upgrade proces kan de juiste grootte van spellen worden bepaald: (Totale bestandsgrootte, hoogte en breedte van het spel) Als ze zijn ingesteld op onjuiste gegevens in de database en het installatiebestand, wordt het ook bijgewerkt met de juiste gegevens.<br><span style="color: #ff0000;">Warning:</span> Houd er rekening mee dat tijdens het proces sommige grotere spellen veel geheugen nodig hebben, dus het is mogelijk dat het proces niet kan plaatsvinden. In dit geval wordt aanbevolen om de servergeheugenlimiet in het php.ini bestand te verhogen.',

	'JVA_CORE_EXT_NOT_FOUND'							=> 'De extensie kan niet worden ingeschakeld omdat de extensie “JVA - Core” niet kan worden gevonden!',
));

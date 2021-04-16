<?php
/**
*
* @package phpBB Arcade
* @version $Id: logs.php 2403 2021-04-12 12:39:21Z KillBill $
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
// Some characters you may want to copy&paste: ‚ ‘ ’ « » „ “ ” …

//Arcade
$lang = array_merge($lang, array(
	'ARCADE_SCORE_ERR_GAME_HACK'					=> 'spel hack detectie',
	'ARCADE_SCORE_ERR_GG'							=> 'Geen juiste spel code ontvangen',
	'ARCADE_SCORE_ERR_GG_RANDCHAR'					=> 'Spel code niet ontvangen',
	'ARCADE_SCORE_ERR_GS'							=> 'Geen juiste score code ontvangen',
	'ARCADE_SCORE_ERR_GS_GG_RANDCHAR'				=> 'Spel en score code niet ontvangen',
	'ARCADE_SCORE_ERR_GS_RANDCHAR'					=> 'Score code niet ontvangen',
	'ARCADE_SCORE_ERR_MICRO_TIME'					=> 'Controle tijd overschreden',
	'ARCADE_SCORE_ERR_PCH'							=> 'Geen juiste score variabel code ontvangen',
	'ARCADE_SCORE_ERR_SAVE_TYPE'					=> 'Niet het geconfigureerde opslagtype werd gebruikt',
	'ARCADE_SCORE_ERR_SEC_SESS'						=> 'Onjuiste beveiligingssessie ontvangen',	

	'LOG_ACL_ADD_CATEGORY_LOCAL_C_'					=> '<strong>Categorie permissies toegevoegd of gewijzigd</strong> van %1$s<br>» %2$s',
	'LOG_ACL_ADD_GROUP_LOCAL_C_'					=> '<strong>Groep categorie toegang toegevoegd of gewijzigd</strong> van %1$s<br>» %2$s',
	'LOG_ACL_ADD_USER_LOCAL_C_'						=> '<strong>Gebruikers categorie toegang toegevoegd of gewijzigd</strong> van %1$s<br>» %2$s',
	'LOG_ACL_ARCADE_RESTORE_PERMISSIONS'			=> '<strong>Eigen permissies herstelt na het gebruiken van de permissies van</strong><br>» %s',
	'LOG_ACL_ARCADE_TRANSFER_PERMISSIONS'			=> '<strong>Permissies overgenomen van</strong><br>» %s',
	'LOG_ACL_DEL_CATEGORY_LOCAL_C_'					=> '<strong>Gebruiker/groep categorie permissies verwijderd</strong> van %1$s<br>» %2$s',
	'LOG_ARCADE_ADD_CAT'							=> '<strong>Nieuwe categorie aangemaakt</strong><br>» %s',
	'LOG_ARCADE_ADD_GAME'							=> array(
		1											=> '<strong>Een spel van categorie %s toegevoegd.</strong><br>» %s',
		2											=> '<strong>Spellen van categorie %s toegevoegd.</strong><br>» %s',
	),
	'LOG_ARCADE_ALL_ANNOUNCE_RESTORE_DEFAULT_DATA'	=> '<strong>Alle standaardgegevens van aankondigingen hersteld</strong>',
	'LOG_ARCADE_ANNOUNCE_CREATE_DB_DATA'			=> '<strong>“%s” maak een bericht aan in de database</strong><br>» Taal: %s',
	'LOG_ARCADE_ANNOUNCE_GENERAL_SETTINGS'			=> '<strong>Algemene instellingen mededelingen gewijzigd</strong>',
	'LOG_ARCADE_ARCADE_PM'							=> '<strong>Arcade Privé bericht gewijzigd</strong><br>» Taal: %s',
	'LOG_ARCADE_ARCADE_SUPER_CHAMPION_PM'			=> '<strong>Arcade Privé bericht gewijzigd< “super kampioen titel verloren”</strong><br>» Taal: %s',
	'LOG_ARCADE_AUTO_RESET_SCORE'					=> '<strong>Reset automatisch scores</strong>',
	'LOG_ARCADE_AUTO_RESET_SCORE_SETTINGS'			=> '<strong>Wijzigde de automatische score reset instellingen</strong>',
	'LOG_ARCADE_BACKUP_CAT'							=> array(
		1											=> '<strong>Categorie waarvan een back-up is gemaakt</strong><br>» %s',
		2											=> '<strong>Categorieën waarvan een back-up is gemaakt</strong><br>» %s',
	),
	'LOG_ARCADE_BACKUP_EMPTY'						=> '<strong>Back-up map leeggemaakt</strong>',
	'LOG_ARCADE_CATEGORY_COPIED_PERMISSIONS'		=> '<strong>Categorie permissies gekopieerd</strong> van %1$s<br>» %2$s',
	'LOG_ARCADE_CAT_EDIT'							=> '<strong>Categorie details gewijzigd</strong><br>» %s',
	'LOG_ARCADE_CHALLENGE'							=> '<strong>Wedstrijd instellingen gewijzigd</strong>',
	'LOG_ARCADE_CHALLENGE_ACCEPT_PM'				=> '<strong>Privé bericht wedstrijd “geaccepteerd” aangepast</strong><br>» %s',
	'LOG_ARCADE_CHALLENGE_FINAL_LOSER_PM'			=> '<strong>Privé bericht wedstrijd “eindresultaat/verliezer” aangepast</strong><br>» %s',
	'LOG_ARCADE_CHALLENGE_FINAL_TIE_PM'				=> '<strong>Privé bericht wedstrijd “eindresultaat/gelijk spel” aangepast</strong><br>» %s',
	'LOG_ARCADE_CHALLENGE_FINAL_WINNER_PM'			=> '<strong>Privé bericht wedstrijd “eindresultaat/winnaar” aangepast</strong><br>» %s',
	'LOG_ARCADE_CHALLENGE_PM'						=> '<strong>PPrivé bericht wedstrijd Privé bericht aangepast</strong><br>» %s',
	'LOG_ARCADE_CHALLENGE_REJECT_PM'				=> '<strong>Privé bericht wedstrijd “geweigerd” aangepast</strong><br>» %s',
	'LOG_ARCADE_CHALLENGE_REPORT_GAME_PM'			=> '<strong>Privé bericht wedstrijd “bug spel report” aangepast</strong><br>» %s',
	'LOG_ARCADE_CHALLENGE_WITHDRAW_PM'				=> '<strong>Privé bericht wedstrijd “ingetrokken” aangepast</strong><br>» %s',
	'LOG_ARCADE_CHAMPIONS_GAME_ANNOUNCE'			=> '<strong>Wijzigde Top spelers aankondiging</strong><br>» Taal: %s',
	'LOG_ARCADE_CLEAR_ADMIN_LOG'					=> '<strong>Beheerders log opgeschoond</strong>',
	'LOG_ARCADE_CLEAR_ALL_USERS_BANNED'				=> '<strong>Alle gebruikers ontband</strong>',
	'LOG_ARCADE_CLEAR_CRITICAL_LOG'					=> '<strong>Fouten logs opgeschoond</strong>',
	'LOG_ARCADE_CLEAR_MOD_LOG'						=> '<strong>Moderator logboek opgeschoond</strong>',
	'LOG_ARCADE_CLEAR_REPORTS'						=> '<strong>Melding logboek opgeschoond</strong>',
	'LOG_ARCADE_CLEAR_USERS_BANNED'					=> '<strong>Ontbande gebruikers logboek opgeschoond<</strong><br>» %s',
	'LOG_ARCADE_CLEAR_USERS_LOG'					=> '<strong>Gebruiker log</strong>',
	'LOG_ARCADE_CLEAR_USER_BANNED'					=> '<strong>Ontbande gebruiker</strong><br>» %s',
	'LOG_ARCADE_CREATE_INSTALL_FILE'				=> '<strong>Spel installatiebestand aangemaakt</strong><br>» %s',
	'LOG_ARCADE_DELETE_GAME'						=> array(
		1											=> '<strong>Verwijderd spel</strong><br>» %s',
		2											=> '<strong>Verwijderde spellen</strong><br>» %s',
	),
	'LOG_ARCADE_DELETE_SCORE'						=> '<strong>Spelscore voor gebruiker verwijderd: %3$s%1$s%2$s</strong><br>» %4$s',
	'LOG_ARCADE_DELETE_SUPER_CHAMPION_SCORE'		=> '<strong>Verwijderde super kampioen score voor gebruiker: %s</strong><br>» Spel: %s',
	'LOG_ARCADE_DEL_CAT'							=> '<strong>Categorie verwijderd</strong><br>» %s',	
	'LOG_ARCADE_DEL_CATS'							=> '<strong>Categorie en zijn subcategorieën verwijderd</strong><br>» %s',
	'LOG_ARCADE_DEL_DELETED_GAMES'					=> '<strong>Verwijderde lijst met verwijderde spellen.</strong>',
	'LOG_ARCADE_DEL_GAMES'							=> '<strong>Categorie en zijn spellen verwijderd</strong><br>» %s',
	'LOG_ARCADE_DEL_GAMES_CATS'						=> '<strong>Categorie , zijn spellen en subcategorieën verwijderd</strong><br>» %s',
	'LOG_ARCADE_DEL_GAMES_MOVE_CATS'				=> '<strong>Categorie en zijn spellen verwijderd, subcategorieën verplaatst</strong> naar %1$s<br>» %2$s',
	'LOG_ARCADE_DEL_MOVE_CATS'						=> '<strong>Categorie verwijderd en subcategorieën verplaatst</strong> naar %1$s<br>» %2$s',
	'LOG_ARCADE_DEL_MOVE_GAMES'						=> '<strong>Categorie verwijderd en spellen verplaatst</strong> naar %1$s<br>» %2$s',
	'LOG_ARCADE_DEL_MOVE_GAMES_CATS'				=> '<strong>Categorie en zijn subcategorieën verwijderd, spellen verplaatst</strong> naar %1$s<br>» %2$s',
	'LOG_ARCADE_DEL_MOVE_GAMES_MOVE_CATS'			=> '<strong>Categorie verwijderd, spellen verplaatst</strong> naar %1$s <strong>en subcategorieën</strong> naar %2$s<br>» %3$s',
	'LOG_ARCADE_EDIT_GAME'							=> '<strong>Spel instellingen aangepast</strong><br>» %s',
	'LOG_ARCADE_EDIT_GAME_RESET_INSTALL_DATE'		=> '<strong>Spel instellingen gewijzigd en installatie datum gereset</strong><br>» %s',
	'LOG_ARCADE_EDIT_SCORE'							=> '<strong>Spel score data aangepast voor gebruiker: %1$s</strong><br>» %2$s',
	'LOG_ARCADE_ERROR_GAME_FILE_MISSING'			=> '<strong>Het spel “%s” mist bestanden of extra bestanden</strong><br>» %s',
	'LOG_ARCADE_ERROR_PLAYING_TIME'					=> '<strong>De “%s” spelscore is ingediend zonder speelduur</strong><br>» Score: %s',
	'LOG_ARCADE_EXT_SETTINGS'						=> '<strong>Veranderde extensie instellingen</strong>',
	'LOG_ARCADE_FEATURE'							=> '<strong>Functie instellingen aangepast</strong>',
	'LOG_ARCADE_FORM_SCORE_ERROR'					=> array(
		1											=> '<strong>Het spel “%s” heeft een onjuiste score verzonden</strong><br>Opslag type: %s<br>Speelduur: %s<br>Score: %s<br><strong>Fout:</strong> (%s)',
		2											=> '<strong>Het spel “%s” heeft een onjuiste score verzonden</strong><br>Opslag type: %s<br>Speelduur: %s<br>Score: %s<br><strong>Fouten:</strong> (%s)',
	),
	'LOG_ARCADE_GAME'								=> '<strong>Veranderde spel instellingen</strong>',
	'LOG_ARCADE_GAME_ANNOUNCE'						=> '<strong>Spel mededeling aangepast/strong><br>» Taal %s',
	'LOG_ARCADE_GAME_ANNOUNCE_SYNC'					=> '<strong>Synchroniseer spel mededelingen</strong>',
	'LOG_ARCADE_GAME_DATA_EMPTY_ERROR'				=> '<strong>Het spel “%s” heeft geen arcadegid of enscore code verzonden. Het spel is corrupt.</strong><br>» Speeltijd: %s<br>» Score: %s',
	'LOG_ARCADE_GAME_FILE_NOT_FOUND'				=> '<strong>Een bestand van spel “%s” kan niet gevonden worden</strong><br>» Bestand: %s',
	'LOG_ARCADE_GAME_INHERIT_FILE_NOT_FOUND'		=> '<strong>Het “%s” spel geërfde spelbestand niet gevonden</strong><br>» Overgenomen bestand: %s',
	'LOG_ARCADE_GAME_INSTALL_FILE_NOT_FOUND'		=> '<strong>Het “%s” Spel installatie bestand niet gevonden</strong><br>» Bestand: %s',
	'LOG_ARCADE_GAME_INSTALL_FILE_UNWRITABLE'		=> '<strong>Het “%s” Spel installatie bestand is niet schrijfbaar</strong><br>» Bestand: %s',
	'LOG_ARCADE_GAME_NOT_DETECT_FILESIZE'			=> '<strong>Niet mogelijk om de grootte van de spel bestanden te bepalen</strong><br>» %s',
	'LOG_ARCADE_GLOBAL_ANNOUNCE'					=> '<strong>Algemene mededeling update</strong><br>» %s',
	'LOG_ARCADE_GUEST_DEFAULT_SETTINGS'				=> '<strong>De standaardinstellingen van de gastgebruiker gewijzigd</strong>',	
	'LOG_ARCADE_G_MOVE_DOWN'						=> '<strong>Spel volgorde</strong> %s <strong>naar beneden verplaatst</strong>',
	'LOG_ARCADE_G_MOVE_UP'							=> '<strong>Spel volgorde</strong> %s <strong>naar boven verplaatst</strong>',
	'LOG_ARCADE_LOAD'								=> '<strong>Laden instellingen</strong>',
	'LOG_ARCADE_MEMBERS_DEFAULT_SETTINGS'			=> '<strong>De standaardinstellingen van de leden gewijzigd</strong>',	
	'LOG_ARCADE_MENU_ADD'							=> '<strong>Voeg menu toe</strong><br>» %s',
	'LOG_ARCADE_MENU_DELETE'						=> array(
		1											=> '<strong>Verwijder menu</strong><br>» %s',
		2											=> '<strong>Verwijderd menu en zijn submenu’s</strong><br>» %s',
	),
	'LOG_ARCADE_MENU_EDIT'							=> '<strong>Bewerk menu</strong><br>» %s',
	'LOG_ARCADE_MENU_MOVE_DOWN'						=> '<strong>Verplaatst menu</strong> %1$s <strong>onder</strong> %2$s',
	'LOG_ARCADE_MENU_MOVE_UP'						=> '<strong>Verplaatst menu</strong> %1$s <strong>boven</strong> %2$s',
	'LOG_ARCADE_MOVE_DOWN'							=> '<strong>Categorie verplaatst</strong> %1$s <strong> onder</strong> %2$s',
	'LOG_ARCADE_MOVE_GAME'							=> array(
		1											=> '<strong>Spel verplaatst van categorie %1$s naar nieuwe categorie %2$s</strong><br>» %3$s',
		2											=> '<strong>Spellen verplaatst van categorie %1$s naar nieuwe categorie %2$s</strong><br>» %3$s',
	),
	'LOG_ARCADE_MOVE_UP'							=> '<strong>Verplaatste categorie</strong> %1$s <strong>naar boven</strong> %2$s',
	'LOG_ARCADE_PAAR'								=> '<strong>Gewijzigd phpBB Arcade - activiteiten rang</strong>',
	'LOG_ARCADE_PAGE'								=> '<strong>Wijzigde pagina instellingen</strong>',
	'LOG_ARCADE_PATH'								=> '<strong>Pad instellingen aangepast</strong>',
	'LOG_ARCADE_PURGE_SESSIONS'						=> '<strong>Leeg sessies</strong>',
	'LOG_ARCADE_REPORT_GAME_ANNOUNCE'				=> '<strong>Gewijzigde spelrapport aankondiging</strong><br>» Taal: %s',
	'LOG_ARCADE_RESET_ARCADE'						=> '<strong>Arcade gereset</strong>%s%s',
	'LOG_ARCADE_RESET_CHALLENGE'					=> '<strong>Wedstrijd gereset</strong>',
	'LOG_ARCADE_RESET_COMMENT'						=> '<strong>Spel commentaar gereset</strong>',
	'LOG_ARCADE_RESET_DOWNLOADS'					=> '<strong>Download statistieken gereset</strong>',
	'LOG_ARCADE_RESET_GAME'							=> array(
		1											=> '<strong>Spelgegevens gereset%s%s%s%s</strong><br>» %s',
		2											=> '<strong>Spelgegevens gereset%s%s%s%s</strong><br>» %s',
	),
	'LOG_ARCADE_RESET_GAMES_REC'					=> '<strong>Spelaanbeveling opnieuw instellen</strong>',
	'LOG_ARCADE_RESET_GAME_SCORES'					=> array(
		1											=> '<strong>Spelscores resetten%s%s</strong><br>» %s',
		2											=> '<strong>Spelscores resetten%s%s</strong><br>» %s',
	),
	'LOG_ARCADE_RESET_INSTALL_DATE_GAME'			=> array(
		1											=> '<strong>Reset de installatiedatum van een spel</strong><br>» %s',
		2											=> '<strong>Reset de installatiedatum van meerdere spellen</strong><br>» %s',
	),
	'LOG_ARCADE_RESET_JACKPOT'						=> '<strong>Reset jackpot data</strong>',
	'LOG_ARCADE_RESET_MENU'							=> '<strong>Menustructuur resetten</strong>',	
	'LOG_ARCADE_RESET_PLAYING_RECORD'				=> '<strong>Meest spelende gebruikers teller gereset</strong>',
	'LOG_ARCADE_RESET_POINTS'						=> '<strong>Puntendata gereset</strong>',
	'LOG_ARCADE_RESET_SCORES_ALL'					=> '<strong>Verwijder alle gebruikers scores</strong>',
	'LOG_ARCADE_RESET_SUPER_CHAMPION'				=> '<strong>Reset super kampioen</strong>',
	'LOG_ARCADE_RESET_TOURNAMENT'					=> '<strong>Reset toernooi</strong>',	
	'LOG_ARCADE_RESET_USERS_DATA'					=> '<strong>Alle gebruikers data gereset</strong>',
	'LOG_ARCADE_RESET_USERS_SCORE'					=> '<strong>Alle scores gereset</strong>',
	'LOG_ARCADE_RESET_USERS_SETTINGS'				=> '<strong>Reset gebruikersinstellingen</strong>',
	'LOG_ARCADE_RESET_USER_ALL'						=> '<strong>Reset alle gebruikersgegevens</strong><br>» %s',
	'LOG_ARCADE_RESET_USER_SCORES'					=> '<strong>Reset scores%s%s</strong><br>» %s',
	'LOG_ARCADE_RESET_USER_SUPER_RECORDS'			=> '<strong>Reset superrecords van gebruikers</strong><br>» %s',
	'LOG_ARCADE_RESTORE_DEFAULT_DATA_ANNOUNCE'		=> '<strong>Standaard gegevens mededelingen hersteld</strong><br>» %s',
	'LOG_ARCADE_RESTORE_DEFAULT_DATA_PM'			=> '<strong>Privé berichten standaard gegevens hersteld/strong><br>» %s',
	'LOG_ARCADE_RESYNC_TOTALS_DATA'					=> '<strong>Totale data gesynchroniseerd</strong>',
	'LOG_ARCADE_RESYNC_USERS_TOTAL_DATA'			=> '<strong>Gebruikers totale data synchronisatie</strong>',
	'LOG_ARCADE_SETTINGS'							=> '<strong>Algemene instellingen aangepast</strong>',
	'LOG_ARCADE_SYNC_CAT'							=> '<strong>Categorie gesynchroniseerd</strong><br>» %s',
	'LOG_ARCADE_SYNC_GAME'							=> array(
		1											=> '<strong>Opnieuw gesynchroniseerd spel</strong><br>» %s',
		2											=> '<strong>Opnieuw gesynchroniseerd spellen</strong><br>» %s',
	),
	'LOG_ARCADE_SYSTEM'								=> '<strong>Veranderde systeeminstellingen</strong>',
	'LOG_ARCADE_TOURNAMENT'							=> '<strong>Gewijzigde toernooi instellingen</strong>',
	'LOG_ARCADE_TOUR_ANNOUNCE'						=> '<strong>Gewijzigde toernooi mededeling</strong><br>» Taal: %s',
	'LOG_ARCADE_TOUR_CREATE'						=> '<strong>Toernooi aangemaakt</strong><br>» %s',
	'LOG_ARCADE_TOUR_DELETE'						=> '<strong>Toernooi verwijderd</strong><br>» %s',
	'LOG_ARCADE_TOUR_EDIT'							=> '<strong>Toernooi bewerkt</strong><br>» %s',
	'LOG_ARCADE_TOUR_END_ANNOUNCE'					=> '<strong>Gewijzigde mededeling van het einde van het toernooi</strong><br>» Taal: %s',
	'LOG_ARCADE_UNDEFINED_SCORE'					=> '<strong>Het spel “%s” heeft een ongedefinieerde score gestuurd</strong>',
	'LOG_ARCADE_UNPACK_GAME'						=> array(
		1											=> '<strong>Uitgepakt spel</strong><br>» %s',
		2											=> '<strong>Uitgepakte spellen</strong><br>» %s',
	),
	'LOG_ARCADE_UPLOAD_UNPACK_GAME'					=> array(
		1											=> '<strong>Geüpload en uitgepakt spel</strong><br>» %s',
		2											=> '<strong>Geüploade en uitgepakte spellen</strong><br>» %s',
	),
	'LOG_ARCADE_USER_BANNED'						=> '<strong>Verbannen gebruiker</strong><br>» %s',
	'LOG_ARCADE_USER_DELETE_FAVORITE'				=> array(
		1											=> '<strong>Verwijder favoriete spel</strong><br>» %s',
		2											=> '<strong>Verwijder favoriete spellen</strong><br>» %s',
	),
	'LOG_ARCADE_USER_GAME_SETTINGS'					=> '<strong>Veranderde spel instellingen</strong>',
	'LOG_ARCADE_USER_HIGHLIGHT_FAVORITE'			=> array(
		1											=> '<strong>Markeer uw favoriete spel</strong><br>» %s',
		2											=> '<strong>Markeer uw favoriete spellen </strong><br>» %s',
	),
	'LOG_ARCADE_USER_MAIN_SETTINGS'					=> '<strong>Gewijzigde hoofdinstellingen</strong>',
	'LOG_ARCADE_USER_POST_SETTINGS'					=> '<strong>Gewijzigde berichtinstellingen</strong>',
	'LOG_ARCADE_USER_REMOVE_HIGHLIGHT_FAVORITE'		=> array(
		1											=> '<strong>Verwijder markering uit favoriete spel</strong><br>» %s',
		2											=> '<strong>Verwijder markeringen uit favoriete spellen</strong><br>» %s',
	),
	'LOG_ARCADE_USER_SET_UPDATE'					=> '<strong>Bijgewerkte gebruikersgegevens</strong><br>» %s',
	'LOG_ARCADE_VERSION_CHECK_DISABLED'				=> '<strong>Automatische versiecontrole uitgeschakeld</strong>',
	'LOG_ARCADE_VERSION_CHECK_ENABLED'				=> '<strong>Automatische versiecontrole ingeschakeld</strong>',
	'LOG_C_ROLE_ADD'								=> '<strong>Categorierol toegevoegd</strong><br>» %s',
	'LOG_C_ROLE_EDIT'								=> '<strong>Categorierol bewerkt</strong><br>» %s',
	'LOG_C_ROLE_REMOVED'							=> '<strong>Categorierol verwijderd</strong><br>» %s',
));

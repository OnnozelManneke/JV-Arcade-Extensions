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
	'JVA_GAME_INTRO'						=> 'JVA Spel Intro',
	'JVA_GAME_INTRO_EXPLAIN'				=> 'Voordat het spel begint, wordt een inleiding geladen, die een spel beschrijving, spel controle en score lijst bevat.<br>Lees bovendien de gedetailleerde beschrijving %sHIER%s.',
	'JVA_GAME_INTRO_GAME_PRELOAD'			=> 'Toon spel laden',
	'JVA_GAME_INTRO_GAME_PRELOAD_EXPLAIN'	=> 'Deze optie is alleen van toepassing op Flash-spellen. <br> De game wordt alleen in de browsercache geladen. Als het niet is ingeschakeld voor de cache van uw browser, wordt de game twee keer geladen, dus deze methode kan de start van de games alleen maar vertragen. <br> <em> Het gebruik van de cache van de browser wordt sterk aanbevolen!</em>',
	'JVA_GAME_INTRO_LOGO'					=> 'Tekst logo',
	'JVA_GAME_INTRO_LOGO_COLOR'				=> 'Logo kleur',
	'JVA_GAME_INTRO_LOGO_EXPLAIN'			=> 'Als u hier een tekst invoert, wordt het oorspronkelijke logo overschreven en de tekst weergegeven. U hebt echter de mogelijkheid om uw eigen afbeelding logo te maken, deze kan je hier uploaden: “[root]/arcade/start_system/jva_game_intro/images/logo.png”. Het afbeelding logo overschrijft alles.',
	'JVA_GAME_INTRO_LOGO_SHADOW_COLOR'		=> 'Logo schaduw kleur',
	'JVA_GAME_INTRO_PRIVATE_SETTINGS'		=> 'Deze instelling is alleen beschikbaar als de oprichter het “JVA Start Systeem” activeert met een private sleutel.',
	'JVA_GAME_INTRO_SCORES'					=> 'Aantal scores',
	'JVA_GAME_INTRO_SCORES_EXPLAIN'			=> 'De opgegeven waarde wordt vermeld op basis van de behaalde resultaten.',
	'JVA_SS_LOCAL_STORAGE'					=> 'Lokale opslag',
	'JVA_SS_LOCAL_STORAGE_EXPLAIN'			=> 'Lokale opslag werkt op dezelfde manier als cookies. Gegevens worden opgeslagen op ons apparaat. Helaas kunnen sommige spellen worden gemanipuleerd, bijvoorbeeld het spelniveau of je score. Hier hebt u de mogelijkheid om manipulatie van gegevens door gebruikers te voorkomen. Dit heeft echter het nadeel dat het bereikte niveau wordt genegeerd bij het herstarten van het spel. Merk op dat een “score” variabele filtering is geïnstalleerd. Dus als u de volledige lokale opslag service niet uitschakelt, zelfs als er een “score” variabele is, wordt de waarde altijd opnieuw ingesteld. Er kunnen echter spellen zijn die deze variabele naam niet hebben, dus het is beter om deze service voor 100% beveiliging uit te schakelen.',	
));

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
	'JVA_GAME_DANGEROUS_DISABLE'			=> 'Gefährliche Spiele deaktiviert',
	'JVA_GAME_DANGEROUS_DISABLE_EXPLAIN'	=> 'Einige Spiele könnten die korrekte Funktion des Servers stören, weil sie im Hintergrund Daten übertragen und mehrfach die Webseite neu laden. Damit wird die Serverlast stark erhöht, und solche Spiele werden aus Sicherheitsgründen automatisch deaktiviert. Allerdings hast du hier die Möglichkeit, diese automatische Sperre auf eigene Gefahr zu deaktivieren.',
	'JVA_GAME_INTRO'						=> 'JVA Game Intro',
	'JVA_GAME_INTRO_EXPLAIN'				=> 'Bevor das Spiel startet, wird eine Einführung geladen, welche eine Beschreibung des Spiels, der Steuerung und eine Rekordliste enthält.<br>Für weiteres siehe die detaillierte Beschreibung %sHIER%s.',
	'JVA_GAME_INTRO_GAME_PRELOAD'			=> 'Ladevorgang des Spiels anzeigen',
	'JVA_GAME_INTRO_GAME_PRELOAD_EXPLAIN'	=> 'Die Spielkerndateien werden nur in den Browser-Cache geladen. Wenn dein Browser-Cache nicht aktiviert ist, werden die Dateien zweimal geladen, sodass diese Methode den Start der Spiele nur verlangsamen kann. <br><em>Die Verwendung des Browser-Cache wird für alle Benutzer dringend empfohlen!</em>',
	'JVA_GAME_INTRO_LOGO'					=> 'Text Logo',
	'JVA_GAME_INTRO_LOGO_COLOR'				=> 'Logofarbe',
	'JVA_GAME_INTRO_LOGO_EXPLAIN'			=> 'Wenn du einen Text festlegst, überschreibt dieser das Original-Logo, und wird stattdessen angezeigt. Allerdings hast du die Möglichkeit, dein eigenes Bild-Logo zu erstellen und auf „[root]/arcade/start_system/jva_game_intro/images/logo.png“ hochzuladen. Das überschreibt alles andere.',
	'JVA_GAME_INTRO_LOGO_SHADOW_COLOR'		=> 'Logo-Schattenfarbe',
	'JVA_GAME_INTRO_MUSIC'					=> 'Musik aktivieren',
	'JVA_GAME_INTRO_MUSIC_EXPLAIN'			=> 'Du kannst das Abspielen von Musik für das Game Intro hier aktivieren oder deaktivieren. Die Musik wird zufällig geladen von Titel 1-3. Du kannst die Musikdateien jederzeit ersetzen, aber du musst die Dateinamen und die beiden verfügbaren Basisformate (ogg und mp3) beibehalten.',
	'JVA_GAME_INTRO_MUSIC_FLD'				=> 'Musiktyp',
	'JVA_GAME_INTRO_MUSIC_FLD_DEFAULT'		=> 'Standard',
	'JVA_GAME_INTRO_MUSIC_FLD_GAME'			=> 'Spiel',
	'JVA_GAME_INTRO_MUSIC_FLD_CHRISTMAS'	=> 'Weihnachten',
	'JVA_GAME_INTRO_PRIVATE_SETTINGS'		=> 'Alle Einstellungen sind nur dann verfügbar, wenn ein Gründer das „JVA Start System“ mit einem privaten Schlüssel aktiviert hat.',
	'JVA_GAME_INTRO_SCORES'					=> 'Anzahl der Rekorde',
	'JVA_GAME_INTRO_SCORES_EXPLAIN'			=> 'Diese Anzahl an erzielten Ergebnisse wird angezeigt.',
	'JVA_SS_LOCAL_STORAGE'					=> 'Lokale Speicherung',
	'JVA_SS_LOCAL_STORAGE_EXPLAIN'			=> 'Die lokale Speicherung arbeitet ähnlich wie Cookies. Daten werden auf deinem Gerät gespeichert. Unglücklicherweise können einige Spiele manipuliert werden, beispielsweise der Spiellevel oder der Punktestand. Hier hast du die Möglichkeit, Manipulationen der Daten duch die Benutzer zu verhindern. Dies hat allerdings den Nachteil, dass der zuvor erreichte Level beim Neustart des Spiels ignoriert wird. Beachte, dass eine Filterung der “score”-Variablen installiert wurde. Wenn du also den gesamten lokalen Speicherdienst nicht deaktivierst, wird der Wert immer zurückgesetzt, auch wenn eine Variable “score” vorhanden ist. Es kann jedoch Spiele geben, die diesen Variablennamen nicht haben, daher ist es besser, diesen Dienst für 100%ige Sicherheit zu deaktivieren.',
));

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
	'JVA_SS_ACTIVATION'							=> 'JVA Start System activate',
	'JVA_SS_ACTIVATION_EXPLAIN'					=> 'Here you can read all the instructions that belong to the JVA Start System and here you can activate the system if you accept the terms.',
	'JVA_SS_ACTIVATION_BLOCKED'					=> 'This website is in breach of the license for “JVA Start System” software and has been blocked. The cause of the blockage the software operator can find out and ask to unblock %sHERE%s.',
	'JVA_SS_ACTIVATION_DATE'					=> 'Activation date',
	'JVA_SS_ACTIVATION_INVALID'					=> 'Invalid activation attempt!',
	'JVA_SS_ACTIVATION_KEY'						=> 'Activation key',
	'JVA_SS_ACTIVATION_KEY_ALREADY'				=> 'The specified activation key is already activated!',
	'JVA_SS_ACTIVATION_KEY_EXPLAIN'				=> 'Here you can choose one of three keys. If this website is live then choose the “Free” key, if it is a test website then choose the “Test” key. However, if you have a private key, you can use it, but only if it is a live website.<br><br>',
	'JVA_SS_ACTIVATION_KEY_INVALID'				=> 'The specified activation key is invalid!',
	'JVA_SS_ACTIVATION_KEY_INVALID_VERSION'		=> 'The specified activation key does not belong to this “phpBB Arcade” version!',
	'JVA_SS_ACTIVATION_KEY_UPDATED'				=> 'The activation key in use has been successfully updated.',
	'JVA_SS_ACTIVATION_SHOW'					=> 'Show activation field',
	'JVA_SS_ACTIVATION_SUCCESS'					=> 'The specified activation key is accepted, you can now use the phpBB Arcade.',
	'JVA_SS_ENABLE_ERROR1'						=> 'The extension can not be activated because <strong>“phpBB Arcade”</strong> is not active!',
	'JVA_SS_ENABLE_ERROR2'						=> 'The extension can not be activated because the version of <strong>“phpBB Arcade”</strong> is below version <strong>“%s”</strong>!',
	'JVA_SS_NEW_KEY'							=> 'Add new key',
	'JVA_SS_NOT_ACTIVATED'						=> 'The “JVA Start System” is not activated! “phpBB Arcade” can not be used until you activate “JVA Start System”.',
	'JVA_SS_NOT_ACTIVATED_INFO'					=> 'The “JVA Start System” has not been activated by the founder. Once activated, “phpBB Arcade” will be available for you.',
	'JVA_SS_NOT_COMPATIBLE'						=> 'The installed “JVA Start System” is not compatible with this “phpBB Arcade” version. Please update the “JVA Start System”.<br>» %sDownload JVA Start System%s «',
	'JVA_SS_PRIVACY_POLICY'						=> 'Privacy Policy',
	'JVA_SS_VIEW_PERSONAL_DATA'					=> 'View personal data',
	'JVA_SS_VIEW_PERSONAL_DATA_EXPLAIN'			=> 'My stored personal data on the “%s” website.',
	'JVA_SS_NO_PERMISSION_VIEW_PERSONAL_DATA'	=> 'You do not have permission to view the personal data of another founder user.',
	'JVA_SS_REMOVE_PERSONAL_DATA'				=> 'Remove personal data',
	'JVA_SS_REMOVE_PERSONAL_CONFIRM'			=> 'Are you sure you want to remove all personal data and thus wipe it with activation?',
	'JVA_SS_REMOVE_PERSONAL_DATA_SUCCESS'		=> 'All personal data has been removed from “%s” website.',
	'JVA_SS_REMOVE_PERSONAL_DATA_ERROR'			=> 'Deleting the data failed, please try again.',
	'JVA_SS_WEB_ADDRESS'						=> 'Website address',
	'JVA_SS_ID'									=> 'Own JVA Start System ID',
	'JVA_SS_ID_EXPLAIN'							=> 'The unique identifier of your website. The connection is used for security reasons.<br><i>Never modify and never give this ID to others!</i>',
	'JVA_SS_WEB_STATUS'							=> 'Website status',
	'JVA_SS_INSTALL_DATE'						=> 'Install date',
	'JVA_SS_UPDATE_DATE'						=> 'Update date',
	'JVA_SS_FIRST_PLAY_DATE'					=> 'First play date',
	'JVA_SS_LAST_PLAY_DATE'						=> 'Last play date',
	'JVA_SS_PLAY_NUM'							=> 'Number of plays',
	'JVA_SS_SKIP_TIME'							=> 'Waiting time to skip advertising',
	'JVA_SS_PHPBB_VERSION'						=> 'phpBB version number',
	'JVA_SS_ARCADE_VERSION'						=> 'phpBB Arcade version number',
	'JVA_SS_USERNAME'							=> 'Your username',
	'JVA_SS_USER_EMAIL'							=> 'Your E-mail address',
	'JVA_SS_USER_IP'							=> 'Your IP address',
	'JVA_SS_ACT_KEY'							=> 'Activation key',
	'JVA_SS_ACT_KEY_VERSION'					=> 'Activation key version number',
	'JVA_SS_ACT_KEY_EXP_DATE'					=> 'Expiration time of the activation key',
	'JVA_SS_USE_AR_RANK'						=> 'Using AR rank',
	'JVA_SS_ERROR_INFO'							=> 'Error information',
	'JVA_SS_WEBSITE_NO_CONNECTION'				=> 'The “%s” website is currently unavailable!',
	'JVA_SS_WEBSITE_ERROR_CONNECTION'			=> 'An error occurred while retrieving. Status Code: %s, Error Code: %s',
	'JVA_SS_SITE_NOT_AVAILABLE'					=> 'No contact with “%1$s” website!<br><br>While the “%1$s” website is unavailable, we offer an alternative to activation. Click %2$s<strong>HERE</strong>%3$s to temporarily activate.<br>Note that as soon as the “%1$s” website is available, the temporary activation will end. In this case, the system must be reactivated.',
	'JVA_SS_EXPLAIN'							=> '<strong style="color: #BC2A4D;">Attention!<br>During activation, personal data will be transmitted and saved to the %1$s website.</strong><br><br>
Personal data concerned:<br>
%2$s<br>
<strong>Used language ID:</strong> %3$s<br>
and the activation key.<br>
Additionally the install and update date will be saved.<br><br>

You can update your stored data later by re-activating the system.<br>
If you activate the system then you will be able to delete your personal data from the %1$s website later.',

	'JVA_SS_JVA_GI_EXPLAIN'						=> 'The “JVA Start System” includes a „phpBB Arcade” extension called “JVA Game Intro”.<br>
This extension also sends data to the %1$s website at the start of each game.<br><br>
Personal data concerned:<br>
%2$s<br>
<strong>JVA Start System version:</strong> %3$s<br>
<strong>Founder user:</strong> True or false<br>
<strong>Used language ID:</strong> %4$s<br>
and the activation key.<br>
Additionally the number of plays and the first and last play date will be saved.<br><br>
<strong style="color: #BC2A4D;">We declare that user activity will not be tracked and that no personal data about registered users of your forum will be stored or collected on “%5$s”!</strong>',

	'JVA_SS_DETAIL_DESCRIPTION_CONFIRM'			=> 'The description of the %s“JVA Start System”%s has been carefully read and understood',
	'JVA_SS_PRIVACY_POLICY_CONFIRM'				=> 'The %s“Privacy Policy”%s has been carefully read and accept',
	'JVA_SS_LICENSE_CONFIRM'					=> 'I have carefully read and abide the %s“License”%s',
	'JVA_SS_APPROVAL_PERSONAL_DATA_CONFIRM'		=> 'I agree to send and store personal data',
	'JVA_SS_ACTIVATION_SUBMIT'					=> 'Send data, Activate',
	'JVA_SS_DISABLE_SUBMIT'						=> 'Disable JVA Start System',
	'JVA_SS_STORED_DATA'						=> 'Stored data',
	'JVA_SS_REGISTERED'							=> 'Registered',
	'JVA_SS_UNREGISTERED'						=> 'Unregistered',
	'JVA_SS_PERSONAL_DATA'						=> 'Personal data',
	'JVA_SS_REMOVE_PERSONAL_DATA'				=> 'Remove personal data',
	'JVA_SS_DOWNLOAD_PERSONAL_DATA'				=> 'Download personal data',
));

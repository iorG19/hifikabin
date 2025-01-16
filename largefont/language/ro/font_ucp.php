<?php
/**
*
* @package Large Font
* @copyright (c) 2014 HiFiKabin
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
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

$lang = array_merge($lang, array(
	'FONT_CHOICE'			=> 'Ați prefera ca fontul să fie mai mare?',
	'MOBILE_FONT_CHOICE'	=> 'Ați prefera o dimensiune diferită a fontului pentru dispozitivele mobile?',
	'FONT_BOLD'				=> 'Ați prefera ca TOATE fonturile să fie îngroșate?',

	'USER_FONT_SIZE_105'	=> '105%',
	'USER_FONT_SIZE_110'	=> '110%',
	'USER_FONT_SIZE_120'	=> '120%',
	'USER_FONT_SIZE_130'	=> '130%',
	'USER_FONT_SIZE_150'	=> '150%',
	'USER_FONT_SIZE_200'	=> '200%',
	'USER_FONT_SIZE_300'	=> '300%',
	'USER_FONT_SIZE_400'	=> '400%',
));

<?php
/**
 *
 * Advanced Profile Fields Pack [Brazilian Portuguese]
 * Brazilian Portuguese translation by eunaumtenhoid [2019][ver 1.0.3] (https://github.com/phpBBTraducoes)
 * @copyright (c) 2015 javiexin ( www.exincastillos.es )
 * @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 * @author Javier Lopez (javiexin)
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
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
// Multiple Selection
	'FIELD_MULTISEL_TOO_FEW'		=> array(
		1	=>	'Você não selecionou opções suficientes para o campo “%2$s”. Pelo menos %1$d opção deve ser selecionada.',
		2	=>	'Você não selecionou opções suficientes para o campo “%2$s”. Pelo menos %1$d opções devem ser selecionadas.',
	),
	'FIELD_MULTISEL_TOO_MANY'		=> array(
		1	=>	'Você selecionou muitas opções no campo “%2$s”. No máximo %1$d opção pode ser selecionada.', 
		2	=>	'Você selecionou muitas opções no campo “%2$s”. No máximo %1$d opções podem ser selecionadas.', 
	),

// Image Selector
	'NO_IMAGES_IMGSEL'				=> 'Sem imagens',

// Image Upload
	'DELETE_IMGUPL'					=> 'Excluir imagem',

));

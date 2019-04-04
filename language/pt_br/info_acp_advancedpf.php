<?php
/**
 *
 * Advanced Profile Fields Pack [English]
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
// Field is independent
	'FIELD_INDIVIDUAL'				=> 'Exibir campo individualmente',
	'FIELD_INDIVIDUAL_EXPLAIN'		=> 'Campos individuais requerem posicionamento específico nos modelos de estilo (via eventos) usando as variáveis ​​de modelo específicas para este campo; eles não são exibidos com outros campos de perfil; Se esta opção estiver selecionada e nenhuma alteração for feita nos modelos, ela não estará visível.',

// Multiple Selection
	'FIELD_MULTISEL'				=> 'Seleções múltiplas',
	'MULTISEL_ENTRIES_EXPLAIN'		=> 'Digite suas opções agora, cada opção em uma linha.',
	'EDIT_MULTISEL_LANG_EXPLAIN'	=> 'Por favor, note que você pode alterar o texto das opções e também adicionar novas opções ao final. Não é aconselhável adicionar novas opções entre opções existentes - isso pode resultar em opções incorretas atribuídas a seus usuários. Isso também pode acontecer se você remover as opções intermediárias.',

	'MAX_FIELD_OPTIONS'				=> 'Número máximo de opções para selecionar',
	'MIN_FIELD_OPTIONS'				=> 'Número mínimo de opções para selecionarNúmero mínimo de opções para selecionar',

	'MAX_LOWER_MIN'					=> 'Opções inconsistentes: máximo abaixo do mínimo.Opções inconsistentes: máximo abaixo do mínimo.',
	'FIELD_MULTISEL_TOO_FEW'		=> array(
		1	=>	'Você não selecionou opções suficientes para o campo “%2$s”. Pelo menos %1$d opção deve ser selecionada.',
		2	=>	'Você não selecionou opções suficientes para o campo “%2$s”. Pelo menos %1$d opções devem ser selecionadas.', 
	),
	'FIELD_MULTISEL_TOO_MANY'		=> array(
		1	=>	'Você selecionou muitas opções no campo “%2$s”. No máximo %1$d opção pode ser selecionada.', 
		2	=>	'Você selecionou muitas opções no campo “%2$s”. No máximo %1$d opções podem ser selecionadas.', 
	),

// Image Common
	'NOTSPECIFIED_VALUE'			=> 'Nenhum valor especificado',
	'NOTSPECIFIED_VALUE_EXPLAIN'	=> 'Etiqueta mostrada quando nenhum valor de imagem foi especificado (pode estar vazio); selecione este rótulo para excluir o valor do campo atual.',
	'IMG_NO_PATH'					=> 'Nenhum caminho de imagem especificado',
	'IMG_PATH_INCORRECT'			=> 'O caminho especificado está incorreto',
	'IMG_DIR_DOES_NOT_EXIST'		=> 'O caminho digitado “%s” não existe.', 
	'IMG_DIR_NOT_DIR'				=> 'O caminho digitado “%s” não é um diretório.',
	'IMG_DIR_NOT_WRITABLE'			=> 'O caminho digitado “%s” não é gravável.',

// Image Selector
	'FIELD_IMGSEL'					=> 'Seletor de imagem',
	'IMGSEL_STORAGE_PATH'			=> 'Caminho de armazenamento de imagem',
	'IMGSEL_STORAGE_PATH_EXPLAIN'	=> 'Caminho sob o diretório raiz do phpBB onde as imagens para este campo de perfil são armazenadas, por ex. <samp>images/fields/name</samp>. Pontos duplos como <samp>../</samp> serão removidos do caminho por razões de segurança.',
	'IMGSEL_SELECT_AS'				=> 'Selecione o método',
	'IMGSEL_SELECT_AS_EXPLAIN'		=> 'Método para selecionar a opção dentro das imagens disponíveis, seja como um dropdown de nome com uma única imagem sendo mostrada, ou como um painel com todas as imagens mostradas.',
	'IMGSEL_AS_DROPDOWN'			=> 'Como dropdown',
	'IMGSEL_AS_PANEL'				=> 'Como painel',
	'NO_IMAGES_IMGSEL'				=> 'Sem imagens',

// Image Upload
	'FIELD_IMGUPL'					=> 'Envio de imagem',
	'IMGUPL_STORAGE_PATH'			=> 'Caminho de armazenamento de imagem',
	'IMGUPL_STORAGE_PATH_EXPLAIN'	=> 'Caminho sob o diretório raiz do phpBB no qual as imagens deste campo de perfil são enviadas, por exemplo, <samp>images/fields/name</samp>, deve ser gravável. Pontos duplos como <samp>../</samp> serão removidos do caminho por razões de segurança.',
	'IMGUPL_MAX_FILESIZE'			=> 'Tamanho máximo do arquivo',
	'IMGUPL_MAX_FILESIZE_EXPLAIN'	=> 'Tamanho máximo de arquivo em bytes de imagens enviadas. ',
	'IMGUPL_MIN_SIZE'				=> 'Dimensões mínimas',
	'IMGUPL_MIN_SIZE_EXPLAIN'		=> 'Largura e altura mínimas das imagens enviadas, em pixels.',
	'IMGUPL_MAX_SIZE'				=> 'Dimensões máximas',
	'IMGUPL_MAX_SIZE_EXPLAIN'		=> 'Largura e altura máximas das imagens enviadas, em pixels.',
	'IMGUPL_MAX_LOWER_MIN'			=> 'Opções inconsistentes: dimensão máxima menor que a dimensão mínima.',
	'DELETE_IMGUPL'					=> 'Excluir imagem',

));

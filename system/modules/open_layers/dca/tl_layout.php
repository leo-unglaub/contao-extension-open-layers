<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2010 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 * 
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  Leo Unglaub 2011
 * @author     Leo Unglaub <leo@leo-unglaub.net>
 * @package    OpenLayers
 * @license    LGPL
 * @filesource
 */


/**
 * Palettes
 */
$GLOBALS['TL_DCA']['tl_layout']['palettes']['default'] = str_replace('mootools', 'mootools,openlayers', $GLOBALS['TL_DCA']['tl_layout']['palettes']['default']);


/**
 * Fields
 */
$GLOBALS['TL_DCA']['tl_layout']['fields']['openlayers'] = array
(
	'label'		=> &$GLOBALS['TL_LANG']['tl_layout']['openlayers'],
	'exclude'	=> true,
	'inputType'	=> 'select',
	'options'	=> array('remote_stable', '2_11', '2_10', '2_9', '2_8', '2_7'),
	'reference'	=> $GLOBALS['TL_LANG']['tl_layout'],
	'eval'		=> array('tl_class'=>'m12', 'includeBlankOption'=>true)
);

?>
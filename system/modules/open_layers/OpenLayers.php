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
 * @copyright  Leo Unglaub 2012
 * @author     Leo Unglaub <leo@leo-unglaub.net>
 * @package    OpenLayers
 * @license    LGPL
 * @filesource
 */

/**
 * Class OpenLayers
 * 
 * @copyright  Leo Unglaub 2012
 * @author     Leo Unglaub <leo@leo-unglaub.net>
 * @package    OpenLayers
 * @license    LGPL
 */
class OpenLayers extends Controller
{
	/**
	 * Check if a OpenLayers version is selected and add them to the header
	 * 
	 * @param Database_Result $objPage
	 * @param Database_Result $objLayout
	 * @param PageRegular $objPageRegular
	 * @return void
	 */
	public function addToHeader(Database_Result $objPage, Database_Result $objLayout, PageRegular $objPageRegular)
	{
		// map the requested version to a path to prevent loading somethink else by injecting the
		// open layers field in the database
		$arrMapping = array
		(
			'remote_stable' => 'http://openlayers.org/api/OpenLayers.js',
			'2_7'			=> 'plugins/OpenLayers/OpenLayers-2_7.js',
			'2_8'			=> 'plugins/OpenLayers/OpenLayers-2_8.js',
			'2_9'			=> 'plugins/OpenLayers/OpenLayers-2_9.js',
			'2_10'			=> 'plugins/OpenLayers/OpenLayers-2_10.js',
			'2_11'			=> 'plugins/OpenLayers/OpenLayers-2_11.js'
		);

		// check if a open layers version is requested and if the version is available
		if ($objLayout->openlayers != '' && array_key_exists($objLayout->openlayers, $arrMapping))
		{
			// load the remote version from openlayers.org
			if ($objLayout->openlayers == 'remote_stable')
			{
				$GLOBALS['TL_HEAD'][] = '<script type="text/javascript" src="' . $arrMapping['remote_stable'] . '"></script>';
				return;
			}
			
			// load the local stored version
			$GLOBALS['TL_JAVASCRIPT'][] = $arrMapping[$objLayout->openlayers];
		}
	}
}
?>
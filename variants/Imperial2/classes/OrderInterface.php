<?php
/*
	Copyright (C) 2013 Oliver Auth

	This file is part of the Imperial2 variant for webDiplomacy

	The Imperial2 variant for webDiplomacy is free software:
	you can redistribute it and/or modify it under the terms of the GNU Affero
	General Public License as published by the Free Software Foundation, either
	version 3 of the License, or (at your option) any later version.

	The Imperial2 variant for webDiplomacy is distributed in the hope
	that it will be useful, but WITHOUT ANY WARRANTY; without even the implied
	warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
	See the GNU General Public License for more details.

	You should have received a copy of the GNU Affero General Public License
	along with webDiplomacy. If not, see <http://www.gnu.org/licenses/>.
	
	If you have questions or suggestions send me a mail: Oliver.Auth@rhoen.de

*/

defined('IN_CODE') or die('This script can not be run by itself.');

// 
class StraitsRule_OrderInterface extends OrderInterface {

	protected function jsLoadBoard() {
		global $Variant;
		parent::jsLoadBoard();

		if( $this->phase=='Diplomacy' )
		{
			libHTML::$footerIncludes[] = '../variants/'.$Variant->name.'/resources/straitsRule.js';
			foreach(libHTML::$footerScript as $index=>$script)
				libHTML::$footerScript[$index]=str_replace('loadBoardTurnData();','loadBoardTurnData();AddStraitsBorders();', $script);
		}
	}
}

// Build anywhere:
class BuildAnyHome_OrderInterface extends StraitsRule_OrderInterface {

	protected function jsLoadBoard() {
		global $Variant;
		parent::jsLoadBoard();

		if( $this->phase=='Builds' )
		{
			libHTML::$footerIncludes[] = '../variants/'.$Variant->name.'/resources/buildanyhome.js';
			foreach(libHTML::$footerScript as $index=>$script)
				libHTML::$footerScript[$index]=str_replace('loadBoard();','loadBoard();SupplyCentersCorrect();', $script);
		}
	}
}
class ConvoyFix_OrderInterface extends BuildAnyHome_OrderInterface
{
	protected function jsLoadBoard()
	{
		global $Variant;

		parent::jsLoadBoard();
		if( $this->phase=='Diplomacy' )
		{
			libHTML::$footerIncludes[] = '../variants/'.$Variant->name.'/resources/convoyfix.js';
			foreach(libHTML::$footerScript as $index=>$script)
				libHTML::$footerScript[$index]=str_replace('loadOrdersPhase();','loadOrdersPhase();NewConvoyCode();', $script);
		}
	}
}

class Imperial2Variant_OrderInterface extends ConvoyFix_OrderInterface {}

<?php
// This is file installs the map data for the Lepanto variant
defined('IN_CODE') or die('This script can not be run by itself.');
require_once("variants/install.php");

InstallTerritory::$Territories=array();
$countries=$this->countries;
$territoryRawData=array(
	array('A 1', 'Coast', 'No', 57, 26, 28, 13, 'Neutral'),
	array('A 2', 'Land', 'Yes', 57, 100, 28, 50, 'Neutral'),
	array('A 3', 'Land', 'Yes', 57, 200, 28, 100, 'Neutral'),
	array('A 4', 'Coast', 'No', 57, 300, 28, 150, 'Neutral'),
	array('A 5', 'Coast', 'No', 57, 400, 28, 200, 'Neutral'),
	array('A 6', 'Land', 'Yes', 57, 500, 28, 250, 'Neutral'),
	array('A 7', 'Land', 'Yes', 57, 600, 28, 300, 'Neutral'),
	array('A 8', 'Coast', 'No', 57, 674, 28, 337, 'Neutral'),
	array('B 1', 'Coast', 'No', 141, 50, 70, 25, 'Neutral'),
	array('B 2', 'Coast', 'No', 141, 150, 70, 75, 'Neutral'),
	array('B 3', 'Coast', 'Yes', 141, 250, 70, 125, 'Holy League'),
	array('B 4', 'Coast', 'No', 141, 350, 70, 175, 'Neutral'),
	array('B 5', 'Coast', 'Yes', 141, 450, 70, 225, 'Holy League'),
	array('B 6', 'Coast', 'No', 141, 550, 70, 275, 'Neutral'),
	array('B 7', 'Coast', 'No', 141, 650, 70, 325, 'Neutral'),
	array('C 1', 'Coast', 'No', 225, 26, 112, 13, 'Neutral'),
	array('C 2', 'Land', 'Yes', 225, 100, 112, 50, 'Neutral'),
	array('C 3', 'Coast', 'No', 225, 200, 112, 100, 'Neutral'),
	array('C 4', 'Land', 'Yes', 225, 300, 112, 150, 'Neutral'),
	array('C 5', 'Land', 'Yes', 225, 400, 112, 200, 'Neutral'),
	array('C 6', 'Coast', 'No', 225, 500, 112, 250, 'Neutral'),
	array('C 7', 'Land', 'Yes', 225, 600, 112, 300, 'Neutral'),
	array('C 8', 'Coast', 'No', 225, 674, 112, 337, 'Neutral'),
	array('D 1', 'Land', 'Yes', 309, 50, 154, 25, 'Neutral'),
	array('D 2', 'Coast', 'No', 309, 150, 154, 75, 'Neutral'),
	array('D 3', 'Land', 'Yes', 309, 250, 154, 125, 'Neutral'),
	array('D 4', 'Coast', 'No', 309, 350, 154, 175, 'Neutral'),
	array('D 5', 'Land', 'Yes', 309, 450, 154, 225, 'Neutral'),
	array('D 6', 'Coast', 'No', 309, 550, 154, 275, 'Neutral'),
	array('D 7', 'Land', 'Yes', 309, 650, 154, 325, 'Neutral'),
	array('E 1', 'Coast', 'No', 393, 26, 196, 13, 'Neutral'),
	array('E 2', 'Coast', 'No', 393, 100, 196, 50, 'Neutral'),
	array('E 3', 'Land', 'Yes', 393, 200, 196, 100, 'Neutral'),
	array('E 4', 'Coast', 'No', 393, 300, 196, 150, 'Neutral'),
	array('E 5', 'Coast', 'No', 393, 400, 196, 200, 'Neutral'),
	array('E 6', 'Land', 'Yes', 393, 500, 196, 250, 'Neutral'),
	array('E 7', 'Coast', 'No', 393, 600, 196, 300, 'Neutral'),
	array('E 8', 'Coast', 'No', 393, 674, 196, 337, 'Neutral'),
	array('F 1', 'Coast', 'No', 477, 50, 238, 25, 'Neutral'),
	array('F 2', 'Coast', 'No', 477, 150, 238, 75, 'Neutral'),
	array('F 3', 'Coast', 'No', 477, 250, 238, 125, 'Neutral'),
	array('F 4', 'Coast', 'No', 477, 350, 238, 175, 'Neutral'),
	array('F 5', 'Coast', 'No', 477, 450, 238, 225, 'Neutral'),
	array('F 6', 'Coast', 'No', 477, 550, 238, 275, 'Neutral'),
	array('F 7', 'Coast', 'No', 477, 650, 238, 325, 'Neutral'),
	array('G 1', 'Coast', 'No', 561, 26, 280, 13, 'Neutral'),
	array('G 2', 'Land', 'Yes', 561, 100, 280, 50, 'Neutral'),
	array('G 3', 'Land', 'Yes', 561, 200, 280, 100, 'Neutral'),
	array('G 4', 'Land', 'Yes', 561, 300, 280, 150, 'Neutral'),
	array('G 5', 'Land', 'Yes', 561, 400, 280, 200, 'Neutral'),
	array('G 6', 'Land', 'Yes', 561, 500, 280, 250, 'Neutral'),
	array('G 7', 'Land', 'Yes', 561, 600, 280, 300, 'Neutral'),
	array('G 8', 'Coast', 'No', 561, 674, 280, 337, 'Neutral'),
	array('H 1', 'Coast', 'No', 645, 50, 322, 25, 'Neutral'),
	array('H 2', 'Coast', 'No', 645, 150, 322, 75, 'Neutral'),
	array('H 3', 'Coast', 'No', 645, 250, 322, 125, 'Neutral'),
	array('H 4', 'Coast', 'No', 645, 350, 322, 175, 'Neutral'),
	array('H 5', 'Coast', 'No', 645, 450, 322, 225, 'Neutral'),
	array('H 6', 'Coast', 'No', 645, 550, 322, 275, 'Neutral'),
	array('H 7', 'Coast', 'No', 645, 650, 322, 325, 'Neutral'),
	array('I 1', 'Coast', 'No', 729, 26, 364, 13, 'Neutral'),
	array('I 2', 'Coast', 'No', 729, 100, 364, 50, 'Neutral'),
	array('I 3', 'Land', 'Yes', 729, 200, 364, 100, 'Neutral'),
	array('I 4', 'Coast', 'No', 729, 300, 364, 150, 'Neutral'),
	array('I 5', 'Coast', 'No', 729, 400, 364, 200, 'Neutral'),
	array('I 6', 'Land', 'Yes', 729, 500, 364, 250, 'Neutral'),
	array('I 7', 'Coast', 'No', 729, 600, 364, 300, 'Neutral'),
	array('I 8', 'Coast', 'No', 729, 674, 364, 337, 'Neutral'),
	array('J 1', 'Land', 'Yes', 813, 50, 406, 25, 'Neutral'),
	array('J 2', 'Coast', 'No', 813, 150, 406, 75, 'Neutral'),
	array('J 3', 'Land', 'Yes', 813, 250, 406, 125, 'Neutral'),
	array('J 4', 'Coast', 'No', 813, 350, 406, 175, 'Neutral'),
	array('J 5', 'Land', 'Yes', 813, 450, 406, 225, 'Neutral'),
	array('J 6', 'Coast', 'No', 813, 550, 406, 275, 'Neutral'),
	array('J 7', 'Land', 'Yes', 813, 650, 406, 325, 'Neutral'),
	array('K 1', 'Coast', 'No', 897, 26, 448, 13, 'Neutral'),
	array('K 2', 'Land', 'Yes', 897, 100, 448, 50, 'Neutral'),
	array('K 3', 'Coast', 'No', 897, 200, 448, 100, 'Neutral'),
	array('K 4', 'Land', 'Yes', 897, 300, 448, 150, 'Neutral'),
	array('K 5', 'Land', 'Yes', 897, 400, 448, 200, 'Neutral'),
	array('K 6', 'Coast', 'No', 897, 500, 448, 250, 'Neutral'),
	array('K 7', 'Land', 'Yes', 897, 600, 448, 300, 'Neutral'),
	array('K 8', 'Coast', 'No', 897, 674, 448, 337, 'Neutral'),
	array('L 1', 'Coast', 'No', 981, 50, 490, 25, 'Neutral'),
	array('L 2', 'Coast', 'No', 981, 150, 490, 75, 'Neutral'),
	array('L 3', 'Coast', 'Yes', 981, 250, 490, 125, 'Ottoman Empire'),
	array('L 4', 'Coast', 'No', 981, 350, 490, 175, 'Neutral'),
	array('L 5', 'Coast', 'Yes', 981, 450, 490, 225, 'Ottoman Empire'),
	array('L 6', 'Coast', 'No', 981, 550, 490, 275, 'Neutral'),
	array('L 7', 'Coast', 'No', 981, 650, 490, 325, 'Neutral'),
	array('M 1', 'Coast', 'No', 1065, 26, 532, 13, 'Neutral'),
	array('M 2', 'Land', 'Yes', 1065, 100, 532, 50, 'Neutral'),
	array('M 3', 'Land', 'Yes', 1065, 200, 532, 100, 'Neutral'),
	array('M 4', 'Coast', 'No', 1065, 300, 532, 150, 'Neutral'),
	array('M 5', 'Coast', 'No', 1065, 400, 532, 200, 'Neutral'),
	array('M 6', 'Land', 'Yes', 1065, 500, 532, 250, 'Neutral'),
	array('M 7', 'Land', 'Yes', 1065, 600, 532, 300, 'Neutral'),
	array('M 8', 'Coast', 'No', 1065, 674, 532, 337, 'Neutral')
);

foreach($territoryRawData as $territoryRawRow)
{
	list($name, $type, $supply, $x, $y, $sx, $sy, $country)=$territoryRawRow;
	if( $country=='Neutral' )
		$countryID=0;
	else
		$countryID=$this->countryID($country);
		
	new InstallTerritory($name, $type, $supply, $countryID, $x, $y, $sx, $sy);
}
unset($territoryRawData);
$bordersRawData=array(
	array('A 1','A 2','No','Yes'),
	array('A 1','B 1','Yes','Yes'),
	array('A 1','B 2','Yes','No'),
	array('A 1','C 1','Yes','No'),
	array('A 2','A 1','No','Yes'),
	array('A 2','A 3','No','Yes'),
	array('A 2','B 1','No','Yes'),
	array('A 2','B 2','No','Yes'),
	array('A 3','A 2','No','Yes'),
	array('A 3','A 4','No','Yes'),
	array('A 3','B 2','No','Yes'),
	array('A 3','B 3','No','Yes'),
	array('A 4','A 3','No','Yes'),
	array('A 4','A 5','Yes','Yes'),
	array('A 4','B 2','Yes','No'),
	array('A 4','B 3','Yes','Yes'),
	array('A 4','B 4','Yes','Yes'),
	array('A 4','B 5','Yes','No'),
	array('A 4','C 3','Yes','No'),
	array('A 5','A 4','Yes','Yes'),
	array('A 5','A 6','No','Yes'),
	array('A 5','B 3','Yes','No'),
	array('A 5','B 4','Yes','Yes'),
	array('A 5','B 5','Yes','Yes'),
	array('A 5','B 6','Yes','No'),
	array('A 5','C 6','Yes','No'),
	array('A 6','A 5','No','Yes'),
	array('A 6','A 7','No','Yes'),
	array('A 6','B 5','No','Yes'),
	array('A 6','B 6','No','Yes'),
	array('A 7','A 6','No','Yes'),
	array('A 7','A 8','No','Yes'),
	array('A 7','B 6','No','Yes'),
	array('A 7','B 7','No','Yes'),
	array('A 8','A 7','No','Yes'),
	array('A 8','B 6','Yes','No'),
	array('A 8','B 7','Yes','Yes'),
	array('A 8','C 8','Yes','No'),
	array('B 1','A 1','Yes','Yes'),
	array('B 1','A 2','No','Yes'),
	array('B 1','B 2','Yes','Yes'),
	array('B 1','B 3','Yes','No'),
	array('B 1','C 1','Yes','Yes'),
	array('B 1','C 2','No','Yes'),
	array('B 1','C 3','Yes','No'),
	array('B 1','D 2','Yes','No'),
	array('B 2','A 1','Yes','No'),
	array('B 2','A 2','No','Yes'),
	array('B 2','A 3','No','Yes'),
	array('B 2','A 4','Yes','No'),
	array('B 2','B 1','Yes','Yes'),
	array('B 2','B 3','Yes','Yes'),
	array('B 2','B 4','Yes','No'),
	array('B 2','C 1','Yes','No'),
	array('B 2','C 2','No','Yes'),
	array('B 2','C 3','Yes','Yes'),
	array('B 2','D 2','Yes','No'),
	array('B 3','A 3','No','Yes'),
	array('B 3','A 4','Yes','Yes'),
	array('B 3','A 5','Yes','No'),
	array('B 3','B 1','Yes','No'),
	array('B 3','B 2','Yes','Yes'),
	array('B 3','B 4','Yes','Yes'),
	array('B 3','B 5','Yes','No'),
	array('B 3','C 3','Yes','Yes'),
	array('B 3','C 4','No','Yes'),
	array('B 3','D 2','Yes','No'),
	array('B 3','D 4','Yes','No'),
	array('B 4','A 4','Yes','Yes'),
	array('B 4','A 5','Yes','Yes'),
	array('B 4','B 2','Yes','No'),
	array('B 4','B 3','Yes','Yes'),
	array('B 4','B 5','Yes','Yes'),
	array('B 4','B 6','Yes','No'),
	array('B 4','C 3','Yes','No'),
	array('B 4','C 4','No','Yes'),
	array('B 4','C 5','No','Yes'),
	array('B 4','C 6','Yes','No'),
	array('B 4','D 4','Yes','No'),
	array('B 5','A 4','Yes','No'),
	array('B 5','A 5','Yes','Yes'),
	array('B 5','A 6','No','Yes'),
	array('B 5','B 3','Yes','No'),
	array('B 5','B 4','Yes','Yes'),
	array('B 5','B 6','Yes','Yes'),
	array('B 5','B 7','Yes','No'),
	array('B 5','C 5','No','Yes'),
	array('B 5','C 6','Yes','Yes'),
	array('B 5','D 4','Yes','No'),
	array('B 5','D 6','Yes','No'),
	array('B 6','A 5','Yes','No'),
	array('B 6','A 6','No','Yes'),
	array('B 6','A 7','No','Yes'),
	array('B 6','A 8','Yes','No'),
	array('B 6','B 4','Yes','No'),
	array('B 6','B 5','Yes','Yes'),
	array('B 6','B 7','Yes','Yes'),
	array('B 6','C 6','Yes','Yes'),
	array('B 6','C 7','No','Yes'),
	array('B 6','C 8','Yes','No'),
	array('B 6','D 6','Yes','No'),
	array('B 7','A 7','No','Yes'),
	array('B 7','A 8','Yes','Yes'),
	array('B 7','B 5','Yes','No'),
	array('B 7','B 6','Yes','Yes'),
	array('B 7','C 6','Yes','No'),
	array('B 7','C 7','No','Yes'),
	array('B 7','C 8','Yes','Yes'),
	array('B 7','D 6','Yes','No'),
	array('C 1','A 1','Yes','No'),
	array('C 1','B 1','Yes','Yes'),
	array('C 1','B 2','Yes','No'),
	array('C 1','C 2','No','Yes'),
	array('C 1','C 3','Yes','No'),
	array('C 1','D 1','No','Yes'),
	array('C 1','D 2','Yes','No'),
	array('C 1','E 1','Yes','No'),
	array('C 1','E 2','Yes','No'),
	array('C 2','B 1','No','Yes'),
	array('C 2','B 2','No','Yes'),
	array('C 2','C 1','No','Yes'),
	array('C 2','C 3','No','Yes'),
	array('C 2','D 1','No','Yes'),
	array('C 2','D 2','No','Yes'),
	array('C 3','A 4','Yes','No'),
	array('C 3','B 1','Yes','No'),
	array('C 3','B 2','Yes','Yes'),
	array('C 3','B 3','Yes','Yes'),
	array('C 3','B 4','Yes','No'),
	array('C 3','C 1','Yes','No'),
	array('C 3','C 2','No','Yes'),
	array('C 3','C 4','No','Yes'),
	array('C 3','D 2','Yes','Yes'),
	array('C 3','D 3','No','Yes'),
	array('C 3','D 4','Yes','No'),
	array('C 3','E 2','Yes','No'),
	array('C 3','E 4','Yes','No'),
	array('C 4','B 3','No','Yes'),
	array('C 4','B 4','No','Yes'),
	array('C 4','C 3','No','Yes'),
	array('C 4','C 5','No','Yes'),
	array('C 4','D 3','No','Yes'),
	array('C 4','D 4','No','Yes'),
	array('C 5','B 4','No','Yes'),
	array('C 5','B 5','No','Yes'),
	array('C 5','C 4','No','Yes'),
	array('C 5','C 6','No','Yes'),
	array('C 5','D 4','No','Yes'),
	array('C 5','D 5','No','Yes'),
	array('C 6','A 5','Yes','No'),
	array('C 6','B 4','Yes','No'),
	array('C 6','B 5','Yes','Yes'),
	array('C 6','B 6','Yes','Yes'),
	array('C 6','B 7','Yes','No'),
	array('C 6','C 5','No','Yes'),
	array('C 6','C 7','No','Yes'),
	array('C 6','C 8','Yes','No'),
	array('C 6','D 4','Yes','No'),
	array('C 6','D 5','No','Yes'),
	array('C 6','D 6','Yes','Yes'),
	array('C 6','E 5','Yes','No'),
	array('C 6','E 7','Yes','No'),
	array('C 7','B 6','No','Yes'),
	array('C 7','B 7','No','Yes'),
	array('C 7','C 6','No','Yes'),
	array('C 7','C 8','No','Yes'),
	array('C 7','D 6','No','Yes'),
	array('C 7','D 7','No','Yes'),
	array('C 8','A 8','Yes','No'),
	array('C 8','B 6','Yes','No'),
	array('C 8','B 7','Yes','Yes'),
	array('C 8','C 6','Yes','No'),
	array('C 8','C 7','No','Yes'),
	array('C 8','D 6','Yes','No'),
	array('C 8','D 7','No','Yes'),
	array('C 8','E 7','Yes','No'),
	array('C 8','E 8','Yes','No'),
	array('D 1','C 1','No','Yes'),
	array('D 1','C 2','No','Yes'),
	array('D 1','D 2','No','Yes'),
	array('D 1','E 1','No','Yes'),
	array('D 1','E 2','No','Yes'),
	array('D 2','B 1','Yes','No'),
	array('D 2','B 2','Yes','No'),
	array('D 2','B 3','Yes','No'),
	array('D 2','C 1','Yes','No'),
	array('D 2','C 2','No','Yes'),
	array('D 2','C 3','Yes','Yes'),
	array('D 2','D 1','No','Yes'),
	array('D 2','D 3','No','Yes'),
	array('D 2','D 4','Yes','No'),
	array('D 2','E 1','Yes','No'),
	array('D 2','E 2','Yes','Yes'),
	array('D 2','E 3','No','Yes'),
	array('D 2','E 4','Yes','No'),
	array('D 2','F 1','Yes','No'),
	array('D 2','F 2','Yes','No'),
	array('D 2','F 3','Yes','No'),
	array('D 3','C 3','No','Yes'),
	array('D 3','C 4','No','Yes'),
	array('D 3','D 2','No','Yes'),
	array('D 3','D 4','No','Yes'),
	array('D 3','E 3','No','Yes'),
	array('D 3','E 4','No','Yes'),
	array('D 4','B 3','Yes','No'),
	array('D 4','B 4','Yes','No'),
	array('D 4','B 5','Yes','No'),
	array('D 4','C 3','Yes','No'),
	array('D 4','C 4','No','Yes'),
	array('D 4','C 5','No','Yes'),
	array('D 4','C 6','Yes','No'),
	array('D 4','D 2','Yes','No'),
	array('D 4','D 3','No','Yes'),
	array('D 4','D 5','No','Yes'),
	array('D 4','D 6','Yes','No'),
	array('D 4','E 4','Yes','Yes'),
	array('D 4','E 5','Yes','Yes'),
	array('D 4','F 3','Yes','No'),
	array('D 4','F 4','Yes','No'),
	array('D 4','F 5','Yes','No'),
	array('D 5','C 5','No','Yes'),
	array('D 5','C 6','No','Yes'),
	array('D 5','D 4','No','Yes'),
	array('D 5','D 6','No','Yes'),
	array('D 5','E 5','No','Yes'),
	array('D 5','E 6','No','Yes'),
	array('D 6','B 5','Yes','No'),
	array('D 6','B 6','Yes','No'),
	array('D 6','B 7','Yes','No'),
	array('D 6','C 6','Yes','Yes'),
	array('D 6','C 7','No','Yes'),
	array('D 6','C 8','Yes','No'),
	array('D 6','D 4','Yes','No'),
	array('D 6','D 5','No','Yes'),
	array('D 6','D 7','No','Yes'),
	array('D 6','E 5','Yes','No'),
	array('D 6','E 6','No','Yes'),
	array('D 6','E 7','Yes','Yes'),
	array('D 6','E 8','Yes','No'),
	array('D 6','F 5','Yes','No'),
	array('D 6','F 6','Yes','No'),
	array('D 6','F 7','Yes','No'),
	array('D 7','C 7','No','Yes'),
	array('D 7','C 8','No','Yes'),
	array('D 7','D 6','No','Yes'),
	array('D 7','E 7','No','Yes'),
	array('D 7','E 8','No','Yes'),
	array('E 1','C 1','Yes','No'),
	array('E 1','D 1','No','Yes'),
	array('E 1','D 2','Yes','No'),
	array('E 1','E 2','Yes','Yes'),
	array('E 1','F 1','Yes','Yes'),
	array('E 1','F 2','Yes','No'),
	array('E 1','G 1','Yes','No'),
	array('E 2','C 1','Yes','No'),
	array('E 2','C 3','Yes','No'),
	array('E 2','D 1','No','Yes'),
	array('E 2','D 2','Yes','Yes'),
	array('E 2','E 1','Yes','Yes'),
	array('E 2','E 3','No','Yes'),
	array('E 2','E 4','Yes','No'),
	array('E 2','F 1','Yes','Yes'),
	array('E 2','F 2','Yes','Yes'),
	array('E 2','F 3','Yes','No'),
	array('E 2','G 1','Yes','No'),
	array('E 3','D 2','No','Yes'),
	array('E 3','D 3','No','Yes'),
	array('E 3','E 2','No','Yes'),
	array('E 3','E 4','No','Yes'),
	array('E 3','F 2','No','Yes'),
	array('E 3','F 3','No','Yes'),
	array('E 4','C 3','Yes','No'),
	array('E 4','D 2','Yes','No'),
	array('E 4','D 3','No','Yes'),
	array('E 4','D 4','Yes','Yes'),
	array('E 4','E 2','Yes','No'),
	array('E 4','E 3','No','Yes'),
	array('E 4','E 5','Yes','Yes'),
	array('E 4','F 2','Yes','No'),
	array('E 4','F 3','Yes','Yes'),
	array('E 4','F 4','Yes','Yes'),
	array('E 4','F 5','Yes','No'),
	array('E 5','C 6','Yes','No'),
	array('E 5','D 4','Yes','Yes'),
	array('E 5','D 5','No','Yes'),
	array('E 5','D 6','Yes','No'),
	array('E 5','E 4','Yes','Yes'),
	array('E 5','E 6','No','Yes'),
	array('E 5','E 7','Yes','No'),
	array('E 5','F 3','Yes','No'),
	array('E 5','F 4','Yes','Yes'),
	array('E 5','F 5','Yes','Yes'),
	array('E 5','F 6','Yes','No'),
	array('E 6','D 5','No','Yes'),
	array('E 6','D 6','No','Yes'),
	array('E 6','E 5','No','Yes'),
	array('E 6','E 7','No','Yes'),
	array('E 6','F 5','No','Yes'),
	array('E 6','F 6','No','Yes'),
	array('E 7','C 6','Yes','No'),
	array('E 7','C 8','Yes','No'),
	array('E 7','D 6','Yes','Yes'),
	array('E 7','D 7','No','Yes'),
	array('E 7','E 5','Yes','No'),
	array('E 7','E 6','No','Yes'),
	array('E 7','E 8','Yes','Yes'),
	array('E 7','F 5','Yes','No'),
	array('E 7','F 6','Yes','Yes'),
	array('E 7','F 7','Yes','Yes'),
	array('E 7','G 8','Yes','No'),
	array('E 8','C 8','Yes','No'),
	array('E 8','D 6','Yes','No'),
	array('E 8','D 7','No','Yes'),
	array('E 8','E 7','Yes','Yes'),
	array('E 8','F 6','Yes','No'),
	array('E 8','F 7','Yes','Yes'),
	array('E 8','G 8','Yes','No'),
	array('F 1','D 2','Yes','No'),
	array('F 1','E 1','Yes','Yes'),
	array('F 1','E 2','Yes','Yes'),
	array('F 1','F 2','Yes','Yes'),
	array('F 1','F 3','Yes','No'),
	array('F 1','G 1','Yes','Yes'),
	array('F 1','G 2','No','Yes'),
	array('F 1','H 1','Yes','No'),
	array('F 1','H 2','Yes','No'),
	array('F 2','D 2','Yes','No'),
	array('F 2','E 1','Yes','No'),
	array('F 2','E 2','Yes','Yes'),
	array('F 2','E 3','No','Yes'),
	array('F 2','E 4','Yes','No'),
	array('F 2','F 1','Yes','Yes'),
	array('F 2','F 3','Yes','Yes'),
	array('F 2','F 4','Yes','No'),
	array('F 2','G 1','Yes','No'),
	array('F 2','G 2','No','Yes'),
	array('F 2','G 3','No','Yes'),
	array('F 2','H 1','Yes','No'),
	array('F 2','H 2','Yes','No'),
	array('F 2','H 3','Yes','No'),
	array('F 3','D 2','Yes','No'),
	array('F 3','D 4','Yes','No'),
	array('F 3','E 2','Yes','No'),
	array('F 3','E 3','No','Yes'),
	array('F 3','E 4','Yes','Yes'),
	array('F 3','E 5','Yes','No'),
	array('F 3','F 1','Yes','No'),
	array('F 3','F 2','Yes','Yes'),
	array('F 3','F 4','Yes','Yes'),
	array('F 3','F 5','Yes','No'),
	array('F 3','G 3','No','Yes'),
	array('F 3','G 4','No','Yes'),
	array('F 3','H 2','Yes','No'),
	array('F 3','H 3','Yes','No'),
	array('F 3','H 4','Yes','No'),
	array('F 4','D 4','Yes','No'),
	array('F 4','E 4','Yes','Yes'),
	array('F 4','E 5','Yes','Yes'),
	array('F 4','F 2','Yes','No'),
	array('F 4','F 3','Yes','Yes'),
	array('F 4','F 5','Yes','Yes'),
	array('F 4','F 6','Yes','No'),
	array('F 4','G 4','No','Yes'),
	array('F 4','G 5','No','Yes'),
	array('F 4','H 3','Yes','No'),
	array('F 4','H 4','Yes','No'),
	array('F 4','H 5','Yes','No'),
	array('F 5','D 4','Yes','No'),
	array('F 5','D 6','Yes','No'),
	array('F 5','E 4','Yes','No'),
	array('F 5','E 5','Yes','Yes'),
	array('F 5','E 6','No','Yes'),
	array('F 5','E 7','Yes','No'),
	array('F 5','F 3','Yes','No'),
	array('F 5','F 4','Yes','Yes'),
	array('F 5','F 6','Yes','Yes'),
	array('F 5','F 7','Yes','No'),
	array('F 5','G 5','No','Yes'),
	array('F 5','G 6','No','Yes'),
	array('F 5','H 4','Yes','No'),
	array('F 5','H 5','Yes','No'),
	array('F 5','H 6','Yes','No'),
	array('F 6','D 6','Yes','No'),
	array('F 6','E 5','Yes','No'),
	array('F 6','E 6','No','Yes'),
	array('F 6','E 7','Yes','Yes'),
	array('F 6','E 8','Yes','No'),
	array('F 6','F 4','Yes','No'),
	array('F 6','F 5','Yes','Yes'),
	array('F 6','F 7','Yes','Yes'),
	array('F 6','G 6','No','Yes'),
	array('F 6','G 7','No','Yes'),
	array('F 6','G 8','Yes','No'),
	array('F 6','H 5','Yes','No'),
	array('F 6','H 6','Yes','No'),
	array('F 6','H 7','Yes','No'),
	array('F 7','D 6','Yes','No'),
	array('F 7','E 7','Yes','Yes'),
	array('F 7','E 8','Yes','Yes'),
	array('F 7','F 5','Yes','No'),
	array('F 7','F 6','Yes','Yes'),
	array('F 7','G 7','No','Yes'),
	array('F 7','G 8','Yes','Yes'),
	array('F 7','H 6','Yes','No'),
	array('F 7','H 7','Yes','No'),
	array('G 1','E 1','Yes','No'),
	array('G 1','E 2','Yes','No'),
	array('G 1','F 1','Yes','Yes'),
	array('G 1','F 2','Yes','No'),
	array('G 1','G 2','No','Yes'),
	array('G 1','H 1','Yes','Yes'),
	array('G 1','H 2','Yes','No'),
	array('G 1','I 1','Yes','No'),
	array('G 1','I 2','Yes','No'),
	array('G 2','F 1','No','Yes'),
	array('G 2','F 2','No','Yes'),
	array('G 2','G 1','No','Yes'),
	array('G 2','G 3','No','Yes'),
	array('G 2','H 1','No','Yes'),
	array('G 2','H 2','No','Yes'),
	array('G 3','F 2','No','Yes'),
	array('G 3','F 3','No','Yes'),
	array('G 3','G 2','No','Yes'),
	array('G 3','G 4','No','Yes'),
	array('G 3','H 2','No','Yes'),
	array('G 3','H 3','No','Yes'),
	array('G 4','F 3','No','Yes'),
	array('G 4','F 4','No','Yes'),
	array('G 4','G 3','No','Yes'),
	array('G 4','G 5','No','Yes'),
	array('G 4','H 3','No','Yes'),
	array('G 4','H 4','No','Yes'),
	array('G 5','F 4','No','Yes'),
	array('G 5','F 5','No','Yes'),
	array('G 5','G 4','No','Yes'),
	array('G 5','G 6','No','Yes'),
	array('G 5','H 4','No','Yes'),
	array('G 5','H 5','No','Yes'),
	array('G 6','F 5','No','Yes'),
	array('G 6','F 6','No','Yes'),
	array('G 6','G 5','No','Yes'),
	array('G 6','G 7','No','Yes'),
	array('G 6','H 5','No','Yes'),
	array('G 6','H 6','No','Yes'),
	array('G 7','F 6','No','Yes'),
	array('G 7','F 7','No','Yes'),
	array('G 7','G 6','No','Yes'),
	array('G 7','G 8','No','Yes'),
	array('G 7','H 6','No','Yes'),
	array('G 7','H 7','No','Yes'),
	array('G 8','E 7','Yes','No'),
	array('G 8','E 8','Yes','No'),
	array('G 8','F 6','Yes','No'),
	array('G 8','F 7','Yes','Yes'),
	array('G 8','G 7','No','Yes'),
	array('G 8','H 6','Yes','No'),
	array('G 8','H 7','Yes','Yes'),
	array('G 8','I 7','Yes','No'),
	array('G 8','I 8','Yes','No'),
	array('H 1','F 1','Yes','No'),
	array('H 1','F 2','Yes','No'),
	array('H 1','G 1','Yes','Yes'),
	array('H 1','G 2','No','Yes'),
	array('H 1','H 2','Yes','Yes'),
	array('H 1','H 3','Yes','No'),
	array('H 1','I 1','Yes','Yes'),
	array('H 1','I 2','Yes','Yes'),
	array('H 1','J 2','Yes','No'),
	array('H 2','F 1','Yes','No'),
	array('H 2','F 2','Yes','No'),
	array('H 2','F 3','Yes','No'),
	array('H 2','G 1','Yes','No'),
	array('H 2','G 2','No','Yes'),
	array('H 2','G 3','No','Yes'),
	array('H 2','H 1','Yes','Yes'),
	array('H 2','H 3','Yes','Yes'),
	array('H 2','H 4','Yes','No'),
	array('H 2','I 1','Yes','No'),
	array('H 2','I 2','Yes','Yes'),
	array('H 2','I 3','No','Yes'),
	array('H 2','I 4','Yes','No'),
	array('H 2','J 2','Yes','No'),
	array('H 3','F 2','Yes','No'),
	array('H 3','F 3','Yes','No'),
	array('H 3','F 4','Yes','No'),
	array('H 3','G 3','No','Yes'),
	array('H 3','G 4','No','Yes'),
	array('H 3','H 1','Yes','No'),
	array('H 3','H 2','Yes','Yes'),
	array('H 3','H 4','Yes','Yes'),
	array('H 3','H 5','Yes','No'),
	array('H 3','I 2','Yes','No'),
	array('H 3','I 3','No','Yes'),
	array('H 3','I 4','Yes','Yes'),
	array('H 3','I 5','Yes','No'),
	array('H 3','J 2','Yes','No'),
	array('H 3','J 4','Yes','No'),
	array('H 4','F 3','Yes','No'),
	array('H 4','F 4','Yes','No'),
	array('H 4','F 5','Yes','No'),
	array('H 4','G 4','No','Yes'),
	array('H 4','G 5','No','Yes'),
	array('H 4','H 2','Yes','No'),
	array('H 4','H 3','Yes','Yes'),
	array('H 4','H 5','Yes','Yes'),
	array('H 4','H 6','Yes','No'),
	array('H 4','I 4','Yes','Yes'),
	array('H 4','I 5','Yes','Yes'),
	array('H 4','J 4','Yes','No'),
	array('H 5','F 4','Yes','No'),
	array('H 5','F 5','Yes','No'),
	array('H 5','F 6','Yes','No'),
	array('H 5','G 5','No','Yes'),
	array('H 5','G 6','No','Yes'),
	array('H 5','H 3','Yes','No'),
	array('H 5','H 4','Yes','Yes'),
	array('H 5','H 6','Yes','Yes'),
	array('H 5','H 7','Yes','No'),
	array('H 5','I 4','Yes','No'),
	array('H 5','I 5','Yes','Yes'),
	array('H 5','I 6','No','Yes'),
	array('H 5','I 7','Yes','No'),
	array('H 5','J 4','Yes','No'),
	array('H 5','J 6','Yes','No'),
	array('H 6','F 5','Yes','No'),
	array('H 6','F 6','Yes','No'),
	array('H 6','F 7','Yes','No'),
	array('H 6','G 6','No','Yes'),
	array('H 6','G 7','No','Yes'),
	array('H 6','G 8','Yes','No'),
	array('H 6','H 4','Yes','No'),
	array('H 6','H 5','Yes','Yes'),
	array('H 6','H 7','Yes','Yes'),
	array('H 6','I 5','Yes','No'),
	array('H 6','I 6','No','Yes'),
	array('H 6','I 7','Yes','Yes'),
	array('H 6','I 8','Yes','No'),
	array('H 6','J 6','Yes','No'),
	array('H 7','F 6','Yes','No'),
	array('H 7','F 7','Yes','No'),
	array('H 7','G 7','No','Yes'),
	array('H 7','G 8','Yes','Yes'),
	array('H 7','H 5','Yes','No'),
	array('H 7','H 6','Yes','Yes'),
	array('H 7','I 7','Yes','Yes'),
	array('H 7','I 8','Yes','Yes'),
	array('H 7','J 6','Yes','No'),
	array('I 1','G 1','Yes','No'),
	array('I 1','H 1','Yes','Yes'),
	array('I 1','H 2','Yes','No'),
	array('I 1','I 2','Yes','Yes'),
	array('I 1','J 1','No','Yes'),
	array('I 1','J 2','Yes','No'),
	array('I 1','K 1','Yes','No'),
	array('I 2','G 1','Yes','No'),
	array('I 2','H 1','Yes','Yes'),
	array('I 2','H 2','Yes','Yes'),
	array('I 2','H 3','Yes','No'),
	array('I 2','I 1','Yes','Yes'),
	array('I 2','I 3','No','Yes'),
	array('I 2','I 4','Yes','No'),
	array('I 2','J 1','No','Yes'),
	array('I 2','J 2','Yes','Yes'),
	array('I 2','K 1','Yes','No'),
	array('I 2','K 3','Yes','No'),
	array('I 3','H 2','No','Yes'),
	array('I 3','H 3','No','Yes'),
	array('I 3','I 2','No','Yes'),
	array('I 3','I 4','No','Yes'),
	array('I 3','J 2','No','Yes'),
	array('I 3','J 3','No','Yes'),
	array('I 4','H 2','Yes','No'),
	array('I 4','H 3','Yes','Yes'),
	array('I 4','H 4','Yes','Yes'),
	array('I 4','H 5','Yes','No'),
	array('I 4','I 2','Yes','No'),
	array('I 4','I 3','No','Yes'),
	array('I 4','I 5','Yes','Yes'),
	array('I 4','J 2','Yes','No'),
	array('I 4','J 3','No','Yes'),
	array('I 4','J 4','Yes','Yes'),
	array('I 4','K 3','Yes','No'),
	array('I 5','H 3','Yes','No'),
	array('I 5','H 4','Yes','Yes'),
	array('I 5','H 5','Yes','Yes'),
	array('I 5','H 6','Yes','No'),
	array('I 5','I 4','Yes','Yes'),
	array('I 5','I 6','No','Yes'),
	array('I 5','I 7','Yes','No'),
	array('I 5','J 4','Yes','Yes'),
	array('I 5','J 5','No','Yes'),
	array('I 5','J 6','Yes','No'),
	array('I 5','K 6','Yes','No'),
	array('I 6','H 5','No','Yes'),
	array('I 6','H 6','No','Yes'),
	array('I 6','I 5','No','Yes'),
	array('I 6','I 7','No','Yes'),
	array('I 6','J 5','No','Yes'),
	array('I 6','J 6','No','Yes'),
	array('I 7','G 8','Yes','No'),
	array('I 7','H 5','Yes','No'),
	array('I 7','H 6','Yes','Yes'),
	array('I 7','H 7','Yes','Yes'),
	array('I 7','I 5','Yes','No'),
	array('I 7','I 6','No','Yes'),
	array('I 7','I 8','Yes','Yes'),
	array('I 7','J 6','Yes','Yes'),
	array('I 7','J 7','No','Yes'),
	array('I 7','K 6','Yes','No'),
	array('I 7','K 8','Yes','No'),
	array('I 8','G 8','Yes','No'),
	array('I 8','H 6','Yes','No'),
	array('I 8','H 7','Yes','Yes'),
	array('I 8','I 7','Yes','Yes'),
	array('I 8','J 6','Yes','No'),
	array('I 8','J 7','No','Yes'),
	array('I 8','K 8','Yes','No'),
	array('J 1','I 1','No','Yes'),
	array('J 1','I 2','No','Yes'),
	array('J 1','J 2','No','Yes'),
	array('J 1','K 1','No','Yes'),
	array('J 1','K 2','No','Yes'),
	array('J 2','H 1','Yes','No'),
	array('J 2','H 2','Yes','No'),
	array('J 2','H 3','Yes','No'),
	array('J 2','I 1','Yes','No'),
	array('J 2','I 2','Yes','Yes'),
	array('J 2','I 3','No','Yes'),
	array('J 2','I 4','Yes','No'),
	array('J 2','J 1','No','Yes'),
	array('J 2','J 3','No','Yes'),
	array('J 2','J 4','Yes','No'),
	array('J 2','K 1','Yes','No'),
	array('J 2','K 2','No','Yes'),
	array('J 2','K 3','Yes','Yes'),
	array('J 2','L 1','Yes','No'),
	array('J 2','L 2','Yes','No'),
	array('J 2','L 3','Yes','No'),
	array('J 3','I 3','No','Yes'),
	array('J 3','I 4','No','Yes'),
	array('J 3','J 2','No','Yes'),
	array('J 3','J 4','No','Yes'),
	array('J 3','K 3','No','Yes'),
	array('J 3','K 4','No','Yes'),
	array('J 4','H 3','Yes','No'),
	array('J 4','H 4','Yes','No'),
	array('J 4','H 5','Yes','No'),
	array('J 4','I 4','Yes','Yes'),
	array('J 4','I 5','Yes','Yes'),
	array('J 4','J 2','Yes','No'),
	array('J 4','J 3','No','Yes'),
	array('J 4','J 5','No','Yes'),
	array('J 4','J 6','Yes','No'),
	array('J 4','K 3','Yes','No'),
	array('J 4','K 4','No','Yes'),
	array('J 4','K 5','No','Yes'),
	array('J 4','K 6','Yes','No'),
	array('J 4','L 3','Yes','No'),
	array('J 4','L 4','Yes','No'),
	array('J 4','L 5','Yes','No'),
	array('J 5','I 5','No','Yes'),
	array('J 5','I 6','No','Yes'),
	array('J 5','J 4','No','Yes'),
	array('J 5','J 6','No','Yes'),
	array('J 5','K 5','No','Yes'),
	array('J 5','K 6','No','Yes'),
	array('J 6','H 5','Yes','No'),
	array('J 6','H 6','Yes','No'),
	array('J 6','H 7','Yes','No'),
	array('J 6','I 5','Yes','No'),
	array('J 6','I 6','No','Yes'),
	array('J 6','I 7','Yes','Yes'),
	array('J 6','I 8','Yes','No'),
	array('J 6','J 4','Yes','No'),
	array('J 6','J 5','No','Yes'),
	array('J 6','J 7','No','Yes'),
	array('J 6','K 6','Yes','Yes'),
	array('J 6','K 7','No','Yes'),
	array('J 6','K 8','Yes','No'),
	array('J 6','L 5','Yes','No'),
	array('J 6','L 6','Yes','No'),
	array('J 6','L 7','Yes','No'),
	array('J 7','I 7','No','Yes'),
	array('J 7','I 8','No','Yes'),
	array('J 7','J 6','No','Yes'),
	array('J 7','K 7','No','Yes'),
	array('J 7','K 8','No','Yes'),
	array('K 1','I 1','Yes','No'),
	array('K 1','I 2','Yes','No'),
	array('K 1','J 1','No','Yes'),
	array('K 1','J 2','Yes','No'),
	array('K 1','K 2','No','Yes'),
	array('K 1','K 3','Yes','No'),
	array('K 1','L 1','Yes','Yes'),
	array('K 1','L 2','Yes','No'),
	array('K 1','M 1','Yes','No'),
	array('K 2','J 1','No','Yes'),
	array('K 2','J 2','No','Yes'),
	array('K 2','K 1','No','Yes'),
	array('K 2','K 3','No','Yes'),
	array('K 2','L 1','No','Yes'),
	array('K 2','L 2','No','Yes'),
	array('K 3','I 2','Yes','No'),
	array('K 3','I 4','Yes','No'),
	array('K 3','J 2','Yes','Yes'),
	array('K 3','J 3','No','Yes'),
	array('K 3','J 4','Yes','No'),
	array('K 3','K 1','Yes','No'),
	array('K 3','K 2','No','Yes'),
	array('K 3','K 4','No','Yes'),
	array('K 3','L 1','Yes','No'),
	array('K 3','L 2','Yes','Yes'),
	array('K 3','L 3','Yes','Yes'),
	array('K 3','L 4','Yes','No'),
	array('K 3','M 4','Yes','No'),
	array('K 4','J 3','No','Yes'),
	array('K 4','J 4','No','Yes'),
	array('K 4','K 3','No','Yes'),
	array('K 4','K 5','No','Yes'),
	array('K 4','L 3','No','Yes'),
	array('K 4','L 4','No','Yes'),
	array('K 5','J 4','No','Yes'),
	array('K 5','J 5','No','Yes'),
	array('K 5','K 4','No','Yes'),
	array('K 5','K 6','No','Yes'),
	array('K 5','L 4','No','Yes'),
	array('K 5','L 5','No','Yes'),
	array('K 6','I 5','Yes','No'),
	array('K 6','I 7','Yes','No'),
	array('K 6','J 4','Yes','No'),
	array('K 6','J 5','No','Yes'),
	array('K 6','J 6','Yes','Yes'),
	array('K 6','K 5','No','Yes'),
	array('K 6','K 7','No','Yes'),
	array('K 6','K 8','Yes','No'),
	array('K 6','L 4','Yes','No'),
	array('K 6','L 5','Yes','Yes'),
	array('K 6','L 6','Yes','Yes'),
	array('K 6','L 7','Yes','No'),
	array('K 6','M 5','Yes','No'),
	array('K 7','J 6','No','Yes'),
	array('K 7','J 7','No','Yes'),
	array('K 7','K 6','No','Yes'),
	array('K 7','K 8','No','Yes'),
	array('K 7','L 6','No','Yes'),
	array('K 7','L 7','No','Yes'),
	array('K 8','I 7','Yes','No'),
	array('K 8','I 8','Yes','No'),
	array('K 8','J 6','Yes','No'),
	array('K 8','J 7','No','Yes'),
	array('K 8','K 6','Yes','No'),
	array('K 8','K 7','No','Yes'),
	array('K 8','L 6','Yes','No'),
	array('K 8','L 7','Yes','Yes'),
	array('K 8','M 8','Yes','No'),
	array('L 1','J 2','Yes','No'),
	array('L 1','K 1','Yes','Yes'),
	array('L 1','K 2','No','Yes'),
	array('L 1','K 3','Yes','No'),
	array('L 1','L 2','Yes','Yes'),
	array('L 1','L 3','Yes','No'),
	array('L 1','M 1','Yes','Yes'),
	array('L 1','M 2','No','Yes'),
	array('L 2','J 2','Yes','No'),
	array('L 2','K 1','Yes','No'),
	array('L 2','K 2','No','Yes'),
	array('L 2','K 3','Yes','Yes'),
	array('L 2','L 1','Yes','Yes'),
	array('L 2','L 3','Yes','Yes'),
	array('L 2','L 4','Yes','No'),
	array('L 2','M 1','Yes','No'),
	array('L 2','M 2','No','Yes'),
	array('L 2','M 3','No','Yes'),
	array('L 2','M 4','Yes','No'),
	array('L 3','J 2','Yes','No'),
	array('L 3','J 4','Yes','No'),
	array('L 3','K 3','Yes','Yes'),
	array('L 3','K 4','No','Yes'),
	array('L 3','L 1','Yes','No'),
	array('L 3','L 2','Yes','Yes'),
	array('L 3','L 4','Yes','Yes'),
	array('L 3','L 5','Yes','No'),
	array('L 3','M 3','No','Yes'),
	array('L 3','M 4','Yes','Yes'),
	array('L 3','M 5','Yes','No'),
	array('L 4','J 4','Yes','No'),
	array('L 4','K 3','Yes','No'),
	array('L 4','K 4','No','Yes'),
	array('L 4','K 5','No','Yes'),
	array('L 4','K 6','Yes','No'),
	array('L 4','L 2','Yes','No'),
	array('L 4','L 3','Yes','Yes'),
	array('L 4','L 5','Yes','Yes'),
	array('L 4','L 6','Yes','No'),
	array('L 4','M 4','Yes','Yes'),
	array('L 4','M 5','Yes','Yes'),
	array('L 5','J 4','Yes','No'),
	array('L 5','J 6','Yes','No'),
	array('L 5','K 5','No','Yes'),
	array('L 5','K 6','Yes','Yes'),
	array('L 5','L 3','Yes','No'),
	array('L 5','L 4','Yes','Yes'),
	array('L 5','L 6','Yes','Yes'),
	array('L 5','L 7','Yes','No'),
	array('L 5','M 4','Yes','No'),
	array('L 5','M 5','Yes','Yes'),
	array('L 5','M 6','No','Yes'),
	array('L 6','J 6','Yes','No'),
	array('L 6','K 6','Yes','Yes'),
	array('L 6','K 7','No','Yes'),
	array('L 6','K 8','Yes','No'),
	array('L 6','L 4','Yes','No'),
	array('L 6','L 5','Yes','Yes'),
	array('L 6','L 7','Yes','Yes'),
	array('L 6','M 5','Yes','No'),
	array('L 6','M 6','No','Yes'),
	array('L 6','M 7','No','Yes'),
	array('L 6','M 8','Yes','No'),
	array('L 7','J 6','Yes','No'),
	array('L 7','K 6','Yes','No'),
	array('L 7','K 7','No','Yes'),
	array('L 7','K 8','Yes','Yes'),
	array('L 7','L 5','Yes','No'),
	array('L 7','L 6','Yes','Yes'),
	array('L 7','M 7','No','Yes'),
	array('L 7','M 8','Yes','Yes'),
	array('M 1','K 1','Yes','No'),
	array('M 1','L 1','Yes','Yes'),
	array('M 1','L 2','Yes','No'),
	array('M 1','M 2','No','Yes'),
	array('M 2','L 1','No','Yes'),
	array('M 2','L 2','No','Yes'),
	array('M 2','M 1','No','Yes'),
	array('M 2','M 3','No','Yes'),
	array('M 3','L 2','No','Yes'),
	array('M 3','L 3','No','Yes'),
	array('M 3','M 2','No','Yes'),
	array('M 3','M 4','No','Yes'),
	array('M 4','K 3','Yes','No'),
	array('M 4','L 2','Yes','No'),
	array('M 4','L 3','Yes','Yes'),
	array('M 4','L 4','Yes','Yes'),
	array('M 4','L 5','Yes','No'),
	array('M 4','M 3','No','Yes'),
	array('M 4','M 5','Yes','Yes'),
	array('M 5','K 6','Yes','No'),
	array('M 5','L 3','Yes','No'),
	array('M 5','L 4','Yes','Yes'),
	array('M 5','L 5','Yes','Yes'),
	array('M 5','L 6','Yes','No'),
	array('M 5','M 4','Yes','Yes'),
	array('M 5','M 6','No','Yes'),
	array('M 6','L 5','No','Yes'),
	array('M 6','L 6','No','Yes'),
	array('M 6','M 5','No','Yes'),
	array('M 6','M 7','No','Yes'),
	array('M 7','L 6','No','Yes'),
	array('M 7','L 7','No','Yes'),
	array('M 7','M 6','No','Yes'),
	array('M 7','M 8','No','Yes'),
	array('M 8','K 8','Yes','No'),
	array('M 8','L 6','Yes','No'),
	array('M 8','L 7','Yes','Yes'),
	array('M 8','M 7','No','Yes')
);

foreach($bordersRawData as $borderRawRow)
{
	list($from, $to, $fleets, $armies)=$borderRawRow;
	InstallTerritory::$Territories[$to]  ->addBorder(InstallTerritory::$Territories[$from],$fleets,$armies);
}
unset($bordersRawData);

InstallTerritory::runSQL($this->mapID);
InstallCache::terrJSON($this->territoriesJSONFile(),$this->mapID);
?>
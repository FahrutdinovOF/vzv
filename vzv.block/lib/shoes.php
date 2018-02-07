<?php
namespace Vzv\Block;

use Bitrix\Main\Entity\DataManager;
use Bitrix\Main\Type\DateTime;

class ShoesTable extends DataManager
{
	public static function getFilePath()
	{
		return __FILE__;
	}
	
	public static function getTableName()
	{
		return 'vzv_test';
	}

	public static function getMap()
	{
		return array(
			//ID êàññû
			'ID' => array(
				'primary' => true,
				'data_type' => 'integer',
			),
			//Àêòèâíîñòü êàññû
			'ACTIVE' => array(
				'data_type' => 'boolean',
				'values' => array('N', 'Y')
			),
			//Èíäåêñ ñîğòèğîâêè
			'SORT' => array(
				'data_type' => 'integer',
			),
			//Ôëàã òåñòîâîãî ğåæèìà
			'TEST_MODE' => array(
				'data_type' => 'boolean',
				'values' => array('N', 'Y')
			),
			//Íàçâàíèå 
			'NAME' => array(
				'data_type' => 'string',
				'required' => true,
			),
			//PRICE
			'PRICE' => array(
				'data_type' => 'integer',
			),
		);
	}

}

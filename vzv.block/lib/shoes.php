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
			//ID �����
			'ID' => array(
				'primary' => true,
				'data_type' => 'integer',
			),
			//���������� �����
			'ACTIVE' => array(
				'data_type' => 'boolean',
				'values' => array('N', 'Y')
			),
			//������ ����������
			'SORT' => array(
				'data_type' => 'integer',
			),
			//���� ��������� ������
			'TEST_MODE' => array(
				'data_type' => 'boolean',
				'values' => array('N', 'Y')
			),
			//�������� 
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

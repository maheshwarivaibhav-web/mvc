<?php 
namespace Model\Attribute;

\Mage::loadFileByClassName('Model\Core\Table');
class Option extends \Model\Core\Table
{
	const STATUS_ENABLED = 1;
	const STATUS_DISABLED = 0;


	function __construct()
	{
		parent::__construct();
		$this->setTableName('attribute_option');
		$this->setPrimaryKey('optionId');
	}
	
}
?>
<?php
/*------------------------------------------------------------------------
 # SM Scroller - Version 1.1
 # Copyright (c) 2009-2011 YouTech Company. All Rights Reserved.
 # @license - Copyrighted Commercial Software
 # Author: YouTech Company
 # Websites: http://www.smartaddons.com
-------------------------------------------------------------------------*/

class Smartaddons_Scroller_Model_System_Config_Source_ProductSources
{
	public function toOptionArray()
	{
		return array(
			array('value'=>'catalog',	'label'=>Mage::helper('scroller')->__('Catalog')),
			array('value'=>'product',	'label'=>Mage::helper('scroller')->__('Product')),
			array('value'=>'media',	'label'=>Mage::helper('scroller')->__('Media')),
		);
	}
}

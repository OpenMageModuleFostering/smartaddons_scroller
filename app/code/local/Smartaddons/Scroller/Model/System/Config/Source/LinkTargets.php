<?php
/*------------------------------------------------------------------------
 # SM Scroller - Version 1.1
 # Copyright (c) 2009-2011 YouTech Company. All Rights Reserved.
 # @license - Copyrighted Commercial Software
 # Author: YouTech Company
 # Websites: http://www.smartaddons.com
-------------------------------------------------------------------------*/

class Smartaddons_Scroller_Model_System_Config_Source_LinkTargets
{
	public function toOptionArray()
	{
		return array(
			array('value'=>'_self',	'label'=>Mage::helper('scroller')->__('Same Window')),
        	array('value'=>'_blank','label'=>Mage::helper('scroller')->__('New Window')),
			array('value'=>'_popup','label'=>Mage::helper('scroller')->__('Popup Window'))
		);
	}
}

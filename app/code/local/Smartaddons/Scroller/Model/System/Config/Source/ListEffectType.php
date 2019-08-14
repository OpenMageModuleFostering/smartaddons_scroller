<?php
/*------------------------------------------------------------------------
 # Yt Slideshow III - Version 1.0
 # Copyright (C) 2009-2011 The YouTech JSC. All Rights Reserved.
 # @license - Copyrighted Commercial Software
 # Author: The YouTech JSC
 # Websites: http://magento.ytcvn.com - http://joomla.ytcvn.com
 -------------------------------------------------------------------------*/


class Smartaddons_Scroller_Model_System_Config_Source_ListEffectType
{
	public function toOptionArray()
	{
		return array(
		array('value'=>'fade', 'label'=>Mage::helper('scroller')->__('Fade')),
		array('value'=>'vertical', 'label'=>Mage::helper('scroller')->__('Vertical')),
		array('value'=>'horizotal', 'label'=>Mage::helper('scroller')->__('Horizotal'))
		);
	}
}

<?php
/*------------------------------------------------------------------------
 # SM Scroller - Version 1.1
 # Copyright (c) 2009-2011 YouTech Company. All Rights Reserved.
 # @license - Copyrighted Commercial Software
 # Author: YouTech Company
 # Websites: http://www.smartaddons.com
-------------------------------------------------------------------------*/

class Smartaddons_Scroller_Helper_Data extends Mage_Core_Helper_Abstract {
	public function __construct(){
		$this->defaults = array(
			/* General setting */
			'isenabled'		=> '1',
			'title' 		=> 'SM Scroller',
			/* Module options */
			'module_width' 		=> '',
			'theme' 			=> 'theme1',	
			'start'				=> '1',
			'play'				=> '1',
			'animation'			=> 'horizotal',			// effect
			'interval'			=> '2000',				// timer_speed
			'duration'			=> '600',				// slideshow_speed	
			'prenext_show'		=> '1',
			/* product query */
			'product_source'		=> 'catalog',
			'product_category' 		=> array(),				// Select category
			'product_ids'			=> '',
			'product_order_by'		=> '',					// Sort list product
			'product_order_dir' 	=> '',					// ASC or DESC
			'product_limitation' 	=> '10',  				// Always exclude these products
			
			/* product details */
			//'product_image_disp'	=> '1',
			'product_image_linkable'=> '1',
				/* Thumbnail options */
			'product_image_width'	=> '199',				//small_thumb_width
			'product_image_height'	=> '150',				//small_thumb_height
			
			'product_title_disp'	=> '1',					// caption_show || showtitle
			'product_title_linkable'=> '1',					
			'product_title_color'	=> '#000000',			// title_color
			'product_title_max_characters'=> '20',			// limittitle
			
			//'product_description_disp' 		=> '1',
			//'product_description_max_characters' 	=> '100',	// limit_description
			
			//'product_details_page_link_disp' 		=> '1',
			//'product_details_page_link_text' 		=> 'See details',
			'product_links_target'					=> '_self',
			'product_price_disp'	=> '1',
			
			'include_jquery'	=> '1',
			'pretext'			=> '',
			'posttext'			=> ''
			
			/**config_fields**/
		);
	}

	function get($attributes=array())
	{
		$data = $this->defaults;
		$general 					= Mage::getStoreConfig("scroller_cfg/general");
		$module_setting				= Mage::getStoreConfig("scroller_cfg/module_setting");
		$product_selection 			= Mage::getStoreConfig("scroller_cfg/product_selection");
		$product_display_setting 	= Mage::getStoreConfig("scroller_cfg/product_display_setting");
		$advanced 					= Mage::getStoreConfig("scroller_cfg/advanced");
		if (!is_array($attributes)) {
			$attributes = array($attributes);
		}
		if (is_array($general))					$data = array_merge($data, $general);
		if (is_array($module_setting)) 			$data = array_merge($data, $module_setting);
		if (is_array($product_selection)) 		$data = array_merge($data, $product_selection);
		if (is_array($product_display_setting)) $data = array_merge($data, $product_display_setting);
		if (is_array($advanced)) 				$data = array_merge($data, $advanced);
		
		return array_merge($data, $attributes);;
	}
}
?>
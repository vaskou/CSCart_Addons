<?php
/***************************************************************************
*                                                                          *
*   (c) 2004 Vladimir V. Kalynyak, Alexey V. Vinokurov, Ilya M. Shalnev    *
*                                                                          *
* This  is  commercial  software,  only  users  who have purchased a valid *
* license  and  accept  to the terms of the  License Agreement can install *
* and use this program.                                                    *
*                                                                          *
****************************************************************************
* PLEASE READ THE FULL TEXT  OF THE SOFTWARE  LICENSE   AGREEMENT  IN  THE *
* "copyright.txt" FILE PROVIDED WITH THIS DISTRIBUTION PACKAGE.            *
****************************************************************************/

$schema['cs_banners'] = array (
    'content' => array (
        'items' => array (
            'remove_indent' => true,
            'hide_label' => true,
            'type' => 'enum',
            'object' => 'banners',
            'items_function' => 'fn_get_banners',
            'fillings' => array (
                'manually' => array (
                    'picker' => 'addons/banners/pickers/banners/picker.tpl',
                    'picker_params' => array (
                        'type' => 'links',
                    ),
                    'params' => array (
                        'sort_by' => 'position',
                        'sort_order' => 'asc'
                    )
                ),
                'newest' => array (
                    'params' => array (
                        'sort_by' => 'timestamp',
                        'sort_order' => 'desc',
                        'request' => array (
                            'cid' => '%CATEGORY_ID%'
                        )
                    )
                ),
            ),
        ),
    ),
    'templates' => array (
		'addons/cs_banners/blocks/test.tpl'=>array(
		
		),
        'addons/cs_banners/blocks/original.tpl' => array(),
        'addons/cs_banners/blocks/carousel.tpl' => array(
            'settings' => array (
                'navigation' => array (
                    'type' => 'selectbox',
                    'values' => array (
                        'N' => 'none',
                        'D' => 'dots',
                        'P' => 'pages',
                        'A' => 'arrows',
                    ),
                    'default_value' => 'D'
                ),
                'delay' => array (
                    'type' => 'input',
                    'default_value' => '3'
                ),
            ),
        ),
		'addons/cs_banners/blocks/myslider.tpl' => array(
            'settings' => array (
				'mode' => array (
					'type' => 'selectbox',
                    'values' => array (
                        'horizontal' => 'Horizontal',
                        'vertical' => 'Vertical',
                        'fade' => 'Fade',
                    ),
                    'default_value' => 'horizontal'
                ),
                'speed' => array (
                    'type' => 'input',
                    'default_value' => 500
                ),
				'slideMargin'=>array(
					'type'=>'input',
					'default_value'=>0
				),
				'startSlide'=>array(
					'type'=>'input',
					'default_value'=>0
				),
				'randomStart'=>array(
					'type'=>'selectbox',
					'values'=>array(
						'true'=>'Enabled',
						'false'=>'Disabled'
					),
					'default_value'=>'false'
				),
				'slideSelector'=>array(
					//TODO:NA TO FTIAXW
				),
				'infiniteLoop'=>array(
					'type'=>'selectbox',
					'values'=>array(
						'true'=>'Enabled',
						'false'=>'Disabled'
					),
					'default_value'=>'true'
				),
				'hideControlOnEnd'=>array(
					'type'=>'selectbox',
					'values'=>array(
						'true'=>'Enabled',
						'false'=>'Disabled'
					),
					'default_value'=>'false'
				),
				'easing'=>array(
					//TODO:NA TO FTAXW
				),
				'caption'=>array(
					'type'=>'selectbox',
					'values'=>array(
						'true'=>'Enabled',
						'false'=>'Disabled'
					),
					'default_value'=>'false'
				),
				'ticker'=>array(
					'type'=>'selectbox',
					'values'=>array(
						'true'=>'Enabled',
						'false'=>'Disabled'
					),
					'default_value'=>'false'
				),
				'tickerHover'=>array(
					'type'=>'selectbox',
					'values'=>array(
						'true'=>'Enabled',
						'false'=>'Disabled'
					),
					'default_value'=>'false'
				),
				'adaptiveHeight'=>array(
					'type'=>'selectbox',
					'values'=>array(
						'true'=>'Enabled',
						'false'=>'Disabled'
					),
					'default_value'=>'false'
				),
				'adaptiveHeightSpeed'=>array(
					'type'=>'input',
					'default_value'=>500
				)
			),
        )
    ),
    'wrappers' => 'blocks/wrappers',
);

return $schema;

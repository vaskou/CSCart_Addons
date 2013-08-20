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
		'addons/cs_banners/blocks/myslider.tpl' => array(
        	'settings' => array (
				'csp_delimeter'=>array(
					
				),
				'csp_mode' => array (
					'type' => 'selectbox',
                    'values' => array (
                        'horizontal' => 'Horizontal',
                        'vertical' => 'Vertical',
                        'fade' => 'Fade',
                    ),
                    'default_value' => 'horizontal'
                ),
                'csp_speed' => array (
                    'type' => 'input',
                    'default_value' => 500
                ),
				'csp_slideMargin'=>array(
					'type'=>'input',
					'default_value'=>0
				),
				'csp_startSlide'=>array(
					'type'=>'input',
					'default_value'=>0
				),
				'csp_randomStart'=>array(
					'type'=>'selectbox',
					'values'=>array(
						'true'=>'Enabled',
						'false'=>'Disabled'
					),
					'default_value'=>'false'
				),
				'csp_infiniteLoop'=>array(
					'type'=>'selectbox',
					'values'=>array(
						'true'=>'Enabled',
						'false'=>'Disabled'
					),
					'default_value'=>'true'
				),
				'csp_hideControlOnEnd'=>array(
					'type'=>'selectbox',
					'values'=>array(
						'true'=>'Enabled',
						'false'=>'Disabled'
					),
					'default_value'=>'false'
				),
				'csp_useCSS'=>array(
					'type'=>'selectbox',
					'values'=>array(
						'true'=>'CSS Transitions',
						'false'=>'JS Transitions'
					),
					'default_value'=>'true'
				),
				'csp_easing'=>array(
					'type'=>'selectbox',
					'values'=>array(
						'linear'=>'Linear',
						'ease'=>'Ease',
						'ease-in'=>'Ease-In',
						'ease-out'=>'Ease-Out',
						'ease-in-out'=>'Ease-In-Out',
						
						'swing'=>'JS Swing',
						'easeInQuad'=>'JS Ease-In Quad',
						'easeOutQuad'=>'JS Ease-Out Quad',
						'easeInOutQuad'=>'JS Ease-In-Out Quad',
						'easeInCubic'=>'JS Ease-In Cubic',
						'easeOutCubic'=>'JS Ease-Out Cubic',
						'easeInOutCubic'=>'JS Ease-In-Out Cubic',
						'easeInQuart'=>'JS Ease-In Quart',
						'easeOutQuart'=>'JS Ease-Out Quart',
						'easeInOutQuart'=>'JS Ease-In-Out Quart',
						'easeInQuint'=>'JS Ease-In Quint',
						'easeOutQuint'=>'JS Ease-Out Quint',
						'easeInOutQuint'=>'JS Ease-In-Out Quint',
						'easeInSine'=>'JS Ease-In Sine',
						'easeOutSine'=>'JS Ease-Out Sine',
						'easeInOutSine'=>'JS Ease-In-Out Sine',
						'easeInExpo'=>'JS Ease-In Expo',
						'easeOutExpo'=>'JS Ease-Out Expo',
						'easeInOutExpo'=>'JS Ease-In-Out Expo',
						'easeInCirc'=>'JS Ease-In Circ',
						'easeOutCirc'=>'JS Ease-Out Circ',
						'easeInOutCirc'=>'JS Ease-In-Out Circ',
						'easeInElastic'=>'JS Ease-In Elastic',
						'easeOutElastic'=>'JS Ease-Out Elastic',
						'easeInOutElastic'=>'JS Ease-In-Out Elastic',
						'easeInBack'=>'JS Ease-In Back',
						'easeOutBack'=>'JS Ease-Out Back',
						'easeInOutBack'=>'JS Ease-In-Out Back',
						'easeInBounce'=>'JS Ease-In Bounce',
						'easeOutBounce'=>'JS Ease-Out Bounce',
						'easeInOutBounce'=>'JS Ease-In-Out Bounce'						
					),
					'default_value'=>'linear'	
				),
				'csp_captions'=>array(
					'type'=>'selectbox',
					'values'=>array(
						'true'=>'Enabled',
						'false'=>'Disabled'
					),
					'default_value'=>'false'
				),
				'csp_ticker'=>array(
					'type'=>'selectbox',
					'values'=>array(
						'true'=>'Enabled',
						'false'=>'Disabled'
					),
					'default_value'=>'false'
				),
				'csp_tickerHover'=>array(
					'type'=>'selectbox',
					'values'=>array(
						'true'=>'Enabled',
						'false'=>'Disabled'
					),
					'default_value'=>'false'
				),
				'csp_adaptiveHeight'=>array(
					'type'=>'selectbox',
					'values'=>array(
						'true'=>'Enabled',
						'false'=>'Disabled'
					),
					'default_value'=>'false'
				),
				'csp_adaptiveHeightSpeed'=>array(
					'type'=>'input',
					'default_value'=>500
				),
				
				'csp_video'=>array(
					'type'=>'selectbox',
					'values'=>array(
						'true'=>'Enabled',
						'false'=>'Disabled'
					),
					'default_value'=>'false'
				),
				'csp_responsive'=>array(
					'type'=>'selectbox',
					'values'=>array(
						'true'=>'Enabled',
						'false'=>'Disabled'
					),
					'default_value'=>'true'
				),
				'csp_preloadImages'=>array(
					'type'=>'selectbox',
					'values'=>array(
						'all'=>'All',
						'visible'=>'Visible'
					),
					'default_value'=>'visible'
				),
				'csp_touchEnabled'=>array(
					'type'=>'selectbox',
					'values'=>array(
						'true'=>'Enabled',
						'false'=>'Disabled'
					),
					'default_value'=>'true'
				),
				'csp_swipeThreshold'=>array(
					'type'=>'input',
					'default_value'=>50
				),
				'csp_oneToOneTouch'=>array(
					'type'=>'selectbox',
					'values'=>array(
						'true'=>'Enabled',
						'false'=>'Disabled'
					),
					'default_value'=>'true'
				),
				'csp_preventDefaultSwipeX'=>array(
					'type'=>'selectbox',
					'values'=>array(
						'true'=>'Enabled',
						'false'=>'Disabled'
					),
					'default_value'=>'true'
				),
				'csp_preventDefaultSwipeY'=>array(
					'type'=>'selectbox',
					'values'=>array(
						'true'=>'Enabled',
						'false'=>'Disabled'
					),
					'default_value'=>'false'
				),
				'csp_pager'=>array(
					'type'=>'selectbox',
					'values'=>array(
						'true'=>'Enabled',
						'false'=>'Disabled'
					),
					'default_value'=>'true'
				),
				'csp_pagerType'=>array(
					'type'=>'selectbox',
					'values'=>array(
						'full'=>'Full',
						'short'=>'Short'
					),
					'default_value'=>'full'
				),
				'csp_pagerShortSeparator'=>array(
					'type'=>'input',
					'default_value'=>'/'
				),
				'csp_controls'=>array(
					'type'=>'selectbox',
					'values'=>array(
						'true'=>'Enabled',
						'false'=>'Disabled'
					),
					'default_value'=>'true'
				),
				'csp_autoControls'=>array(
					'type'=>'selectbox',
					'values'=>array(
						'true'=>'Enabled',
						'false'=>'Disabled'
					),
					'default_value'=>'false'
				),
				'csp_autoControlsCombine'=>array(
					'type'=>'selectbox',
					'values'=>array(
						'true'=>'Enabled',
						'false'=>'Disabled'
					),
					'default_value'=>'false'
				),
				'csp_auto'=>array(
					'type'=>'selectbox',
					'values'=>array(
						'true'=>'Enabled',
						'false'=>'Disabled'
					),
					'default_value'=>'false'
				),
				'csp_pause'=>array(
					'type'=>'input',
					'default_value'=>4000
				),
				'csp_autoStart'=>array(
					'type'=>'selectbox',
					'values'=>array(
						'true'=>'Enabled',
						'false'=>'Disabled'
					),
					'default_value'=>'true'
				),
				'csp_autoDirection'=>array(
					'type'=>'selectbox',
					'values'=>array(
						'next'=>'Next',
						'prev'=>'Previous'
					),
					'default_value'=>'next'
				),
				'csp_autoHover'=>array(
					'type'=>'selectbox',
					'values'=>array(
						'true'=>'Enabled',
						'false'=>'Disabled'
					),
					'default_value'=>'false'
				),
				'csp_autoDelay'=>array(
					'type'=>'input',
					'default_value'=>0
				),
				'csp_minSlides'=>array(
					'type'=>'input',
					'default_value'=>1
				),
				'csp_maxSlides'=>array(
					'type'=>'input',
					'default_value'=>1
				),
				'csp_moveSlides'=>array(
					'type'=>'input',
					'default_value'=>0
				),
				'csp_slideWidth'=>array(
					'type'=>'input',
					'default_value'=>0
				),
			),
        )
    ),
    'wrappers' => 'blocks/wrappers',
);

return $schema;

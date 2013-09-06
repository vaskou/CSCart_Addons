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

$schema['csp_banners'] = array (
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
		'addons/csp_banners/blocks/myslider.tpl' => array(
        	'settings' => array (
/*********************GENERAL*******************************/
				'csp_generalSeperator'=>array(
					
				),
				'csp_mode' => array (
					'type' => 'selectbox',
                    'values' => array (
                        'horizontal' => 'Horizontal',
                        'vertical' => 'Vertical',
                        'fade' => 'Fade',
                    ),
                    'default_value' => 'horizontal',
					'tooltip'=>'Type of transition between slides'
                ),
                'csp_speed' => array (
                    'type' => 'input',
                    'default_value' => 500,
					'tooltip'=>'Slide transition duration (in ms)'
                ),
				'csp_slideMargin'=>array(
					'type'=>'input',
					'default_value'=>0,
					'tooltip'=>'Margin between each slide'
				),
				'csp_startSlide'=>array(
					'type'=>'input',
					'default_value'=>0,
					'tooltip'=>'Starting slide index'
				),
				'csp_randomStart'=>array(
					'type'=>'selectbox',
					'values'=>array(
						'true'=>'Enabled',
						'false'=>'Disabled'
					),
					'default_value'=>'false',
					'tooltip'=>'Start slider on a random slide'
				),
				'csp_infiniteLoop'=>array(
					'type'=>'selectbox',
					'values'=>array(
						'true'=>'Enabled',
						'false'=>'Disabled'
					),
					'default_value'=>'true',
					'tooltip'=>'Clicking "Next" while on the last slide will transition to the first slide and vice-versa'
				),
				'csp_hideControlOnEnd'=>array(
					'type'=>'selectbox',
					'values'=>array(
						'true'=>'Enabled',
						'false'=>'Disabled'
					),
					'default_value'=>'false',
					'tooltip'=>'"Next" control will be hidden on last slide and vice-versa'
				),
				/*'csp_useCSS'=>array(
					'type'=>'selectbox',
					'values'=>array(
						'true'=>'CSS Transitions',
						'false'=>'JS Transitions'
					),
					'default_value'=>'true'
				),*/
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
					'default_value'=>'linear',
					'tooltip'=>''	
				),
				'csp_captions'=>array(
					'type'=>'selectbox',
					'values'=>array(
						'true'=>'Enabled',
						'false'=>'Disabled'
					),
					'default_value'=>'false',
					'tooltip'=>'Include image captions'
				),
				'csp_ticker'=>array(
					'type'=>'selectbox',
					'values'=>array(
						'true'=>'Enabled',
						'false'=>'Disabled'
					),
					'default_value'=>'false',
					'tooltip'=>'Use slider in ticker mode'
				),
				'csp_tickerHover'=>array(
					'type'=>'selectbox',
					'values'=>array(
						'true'=>'Enabled',
						'false'=>'Disabled'
					),
					'default_value'=>'false',
					'tooltip'=>'Ticker will pause when mouse hovers over slider'
				),
				'csp_adaptiveHeight'=>array(
					'type'=>'selectbox',
					'values'=>array(
						'true'=>'Enabled',
						'false'=>'Disabled'
					),
					'default_value'=>'false',
					'tooltip'=>'Dynamically adjust slider height based on each slide\'s height'
				),
				'csp_adaptiveHeightSpeed'=>array(
					'type'=>'input',
					'default_value'=>500,
					'tooltip'=>'Slide height transition duration (in ms)'
				),
				'csp_video'=>array(
					'type'=>'selectbox',
					'values'=>array(
						'true'=>'Enabled',
						'false'=>'Disabled'
					),
					'default_value'=>'false',
					'tooltip'=>''
				),
				'csp_responsive'=>array(
					'type'=>'selectbox',
					'values'=>array(
						'true'=>'Enabled',
						'false'=>'Disabled'
					),
					'default_value'=>'true',
					'tooltip'=>'Enable or disable auto resize of the slider'
				),
				'csp_preloadImages'=>array(
					'type'=>'selectbox',
					'values'=>array(
						'all'=>'All',
						'visible'=>'Visible'
					),
					'default_value'=>'visible',
					'tooltip'=>'If "All", preloads all images before starting the slider. If "Visible", preloads only images in the initially visible slides before starting the slider'
				),
				'csp_touchEnabled'=>array(
					'type'=>'selectbox',
					'values'=>array(
						'true'=>'Enabled',
						'false'=>'Disabled'
					),
					'default_value'=>'true',
					'tooltip'=>'Slider will allow touch swipe transitions'
				),
				'csp_swipeThreshold'=>array(
					'type'=>'input',
					'default_value'=>50,
					'tooltip'=>'Amount of pixels a touch swipe needs to exceed in order to execute a slide transition'
				),
				'csp_oneToOneTouch'=>array(
					'type'=>'selectbox',
					'values'=>array(
						'true'=>'Enabled',
						'false'=>'Disabled'
					),
					'default_value'=>'true',
					'tooltip'=>'Non-fade slides follow the finger as it swipes'
				),
				'csp_preventDefaultSwipeX'=>array(
					'type'=>'selectbox',
					'values'=>array(
						'true'=>'Enabled',
						'false'=>'Disabled'
					),
					'default_value'=>'true',
					'tooltip'=>'Touch screen will not move along the x-axis as the finger swipes'
				),
				'csp_preventDefaultSwipeY'=>array(
					'type'=>'selectbox',
					'values'=>array(
						'true'=>'Enabled',
						'false'=>'Disabled'
					),
					'default_value'=>'false',
					'tooltip'=>'Touch screen will not move along the y-axis as the finger swipes'
				),
				
/***********************PAGER*************************************/				

				'csp_pagerSeperator'=>array(
				),				
				'csp_pager'=>array(
					'type'=>'selectbox',
					'values'=>array(
						'true'=>'Enabled',
						'false'=>'Disabled'
					),
					'default_value'=>'true',
					'tooltip'=>'A pager will be added'
				),
				'csp_pagerType'=>array(
					'type'=>'selectbox',
					'values'=>array(
						'full'=>'Full',
						'short'=>'Short'
					),
					'default_value'=>'full',
					'tooltip'=>'If "Full", a pager link will be generated for each slide. If "Short", a x/y pager will be used'
				),
				'csp_pagerShortSeparator'=>array(
					'type'=>'input',
					'default_value'=>'/',
					'tooltip'=>'If pager type is "Short", pager will use this value as the separating character'
				),
				'csp_pagerThumbs'=>array(
					'type'=>'selectbox',
					'values'=>array(
						'true'=>'Enabled',
						'false'=>'Disabled'
					),
					'default_value'=>'false',
					'tooltip'=>''
				),
				
/**********************CONTROLS********************************/
				'csp_controlsSeparator'=>array(
				),				
				'csp_controls'=>array(
					'type'=>'selectbox',
					'values'=>array(
						'true'=>'Enabled',
						'false'=>'Disabled'
					),
					'default_value'=>'true',
					'tooltip'=>'"Next" / "Prev" controls will be added'
				),
				'csp_customControls'=>array(
					'type'=>'selectbox',
					'values'=>array(
						'true'=>'Enabled',
						'false'=>'Disabled'
					),
					'default_value'=>'false',
					'tooltip'=>''
				),
				'csp_nextText'=>array(
					'type'=>'input',
					'default_value'=>'Next',
					'tooltip'=>''
				),
				'csp_prevText'=>array(
					'type'=>'input',
					'default_value'=>'Previous',
					'tooltip'=>''
				),
				'csp_autoControls'=>array(
					'type'=>'selectbox',
					'values'=>array(
						'true'=>'Enabled',
						'false'=>'Disabled'
					),
					'default_value'=>'false',
					'tooltip'=>'"Start" / "Stop" controls will be added'
				),
				'csp_autoControlsCombine'=>array(
					'type'=>'selectbox',
					'values'=>array(
						'true'=>'Enabled',
						'false'=>'Disabled'
					),
					'default_value'=>'false',
					'tooltip'=>'When slideshow is playing only "Stop" control is displayed and vice-versa'
				),
				'csp_customAutoControls'=>array(
					'type'=>'selectbox',
					'values'=>array(
						'true'=>'Enabled',
						'false'=>'Disabled'
					),
					'default_value'=>'false',
					'tooltip'=>''
				),
				'csp_startText'=>array(
					'type'=>'input',
					'default_value'=>'Start',
					'tooltip'=>''
				),
				'csp_stopText'=>array(
					'type'=>'input',
					'default_value'=>'Stop',
					'tooltip'=>''
				),
				
/***********************AUTO********************************/
				'csp_autoSeperator'=>array(
				),
				'csp_auto'=>array(
					'type'=>'selectbox',
					'values'=>array(
						'true'=>'Enabled',
						'false'=>'Disabled'
					),
					'default_value'=>'false',
					'tooltip'=>'Slides will automatically transition'
				),
				'csp_pause'=>array(
					'type'=>'input',
					'default_value'=>4000,
					'tooltip'=>'The amount of time (in ms) between each auto transition'
				),
				'csp_autoStart'=>array(
					'type'=>'selectbox',
					'values'=>array(
						'true'=>'Enabled',
						'false'=>'Disabled'
					),
					'default_value'=>'true',
					'tooltip'=>'Auto show starts playing on load. If disabled, slideshow will start when the "Start" control is clicked'
				),
				'csp_autoDirection'=>array(
					'type'=>'selectbox',
					'values'=>array(
						'next'=>'Next',
						'prev'=>'Previous'
					),
					'default_value'=>'next',
					'tooltip'=>'The direction of auto show slide transitions'
				),
				'csp_autoHover'=>array(
					'type'=>'selectbox',
					'values'=>array(
						'true'=>'Enabled',
						'false'=>'Disabled'
					),
					'default_value'=>'false',
					'tooltip'=>'Auto show will pause when mouse hovers over slider'
				),
				'csp_autoDelay'=>array(
					'type'=>'input',
					'default_value'=>0,
					'tooltip'=>'Time (in ms) auto show should wait before starting'
				),

/**********************CAROUSEL***************************************/
				'csp_carouselSeperator'=>array(
				),
				'csp_minSlides'=>array(
					'type'=>'input',
					'default_value'=>1,
					'tooltip'=>'The minimum number of slides to be shown. Slides will be sized down if carousel becomes smaller than the original size'
				),
				'csp_maxSlides'=>array(
					'type'=>'input',
					'default_value'=>1,
					'tooltip'=>'The maximum number of slides to be shown. Slides will be sized up if carousel becomes larger than the original size'
				),
				'csp_moveSlides'=>array(
					'type'=>'input',
					'default_value'=>0,
					'tooltip'=>'The number of slides to move on transition. This value must be greater than minSlides, and less maxSlides. If zero (default), the number of fully-visible slides will be used'
				),
				'csp_slideWidth'=>array(
					'type'=>'input',
					'default_value'=>0,
					'tooltip'=>'The width of each slide. This setting is required for all horizontal carousels'
				),
			),
        ),
	),
    'wrappers' => 'blocks/wrappers',
);


$schema['csp_banners_products'] = array (
	'content' => array (
		'items' => array (
			'type' => 'enum',
			'object' => 'products',
			'items_function' => 'fn_get_products',
			'remove_indent' => true,
			'hide_label' => true,
			'fillings' => array (
				'manually' => array (
					'picker' => 'pickers/products/picker.tpl',
					'picker_params' => array (
						'type' => 'links',
					),
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
				'recent_products' => array (
					'params' => array (
						'apply_limit' => true,
						'session' => array (
							'pid' => '%RECENTLY_VIEWED_PRODUCTS%'
						),
						'request' => array (
							'exclude_pid' => '%PRODUCT_ID%'
						),
						'force_get_by_ids' => true,
					),
					'disable_cache' => true,
				),
				'most_popular' => array (
					'params' => array (
						'popularity_from' => 1,
						'sort_by' => 'popularity',
						'sort_order' => 'desc',
						'request' => array (
							'cid' => '%CATEGORY_ID'
						)
					),
				),
			),
		),
	),
	'templates'=>array(
		'addons/csp_banners/blocks/myscroller.tpl' => array (
			'settings' => array(
/*********************GENERAL*******************************/
				'csp_generalSeperator'=>array(
					
				),
				'csp_mode' => array (
					'type' => 'selectbox',
                    'values' => array (
                        'horizontal' => 'Horizontal',
                        'vertical' => 'Vertical',
                        'fade' => 'Fade',
                    ),
                    'default_value' => 'horizontal',
					'tooltip'=>'Type of transition between slides'
                ),
                'csp_speed' => array (
                    'type' => 'input',
                    'default_value' => 500,
					'tooltip'=>''
                ),
				'csp_slideMargin'=>array(
					'type'=>'input',
					'default_value'=>0,
					'tooltip'=>''
				),
				'csp_startSlide'=>array(
					'type'=>'input',
					'default_value'=>0,
					'tooltip'=>''
				),
				'csp_randomStart'=>array(
					'type'=>'selectbox',
					'values'=>array(
						'true'=>'Enabled',
						'false'=>'Disabled'
					),
					'default_value'=>'false',
					'tooltip'=>''
				),
				'csp_infiniteLoop'=>array(
					'type'=>'selectbox',
					'values'=>array(
						'true'=>'Enabled',
						'false'=>'Disabled'
					),
					'default_value'=>'true',
					'tooltip'=>''
				),
				'csp_hideControlOnEnd'=>array(
					'type'=>'selectbox',
					'values'=>array(
						'true'=>'Enabled',
						'false'=>'Disabled'
					),
					'default_value'=>'false',
					'tooltip'=>''
				),
				/*'csp_useCSS'=>array(
					'type'=>'selectbox',
					'values'=>array(
						'true'=>'CSS Transitions',
						'false'=>'JS Transitions'
					),
					'default_value'=>'true'
				),*/
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
					'default_value'=>'linear',
					'tooltip'=>''	
				),
				'csp_captions'=>array(
					'type'=>'selectbox',
					'values'=>array(
						'true'=>'Enabled',
						'false'=>'Disabled'
					),
					'default_value'=>'false',
					'tooltip'=>''
				),
				'csp_ticker'=>array(
					'type'=>'selectbox',
					'values'=>array(
						'true'=>'Enabled',
						'false'=>'Disabled'
					),
					'default_value'=>'false',
					'tooltip'=>''
				),
				'csp_tickerHover'=>array(
					'type'=>'selectbox',
					'values'=>array(
						'true'=>'Enabled',
						'false'=>'Disabled'
					),
					'default_value'=>'false',
					'tooltip'=>''
				),
				'csp_adaptiveHeight'=>array(
					'type'=>'selectbox',
					'values'=>array(
						'true'=>'Enabled',
						'false'=>'Disabled'
					),
					'default_value'=>'false',
					'tooltip'=>''
				),
				'csp_adaptiveHeightSpeed'=>array(
					'type'=>'input',
					'default_value'=>500,
					'tooltip'=>''
				),
				'csp_video'=>array(
					'type'=>'selectbox',
					'values'=>array(
						'true'=>'Enabled',
						'false'=>'Disabled'
					),
					'default_value'=>'false',
					'tooltip'=>''
				),
				'csp_responsive'=>array(
					'type'=>'selectbox',
					'values'=>array(
						'true'=>'Enabled',
						'false'=>'Disabled'
					),
					'default_value'=>'true',
					'tooltip'=>''
				),
				'csp_preloadImages'=>array(
					'type'=>'selectbox',
					'values'=>array(
						'all'=>'All',
						'visible'=>'Visible'
					),
					'default_value'=>'visible',
					'tooltip'=>''
				),
				'csp_touchEnabled'=>array(
					'type'=>'selectbox',
					'values'=>array(
						'true'=>'Enabled',
						'false'=>'Disabled'
					),
					'default_value'=>'true',
					'tooltip'=>''
				),
				'csp_swipeThreshold'=>array(
					'type'=>'input',
					'default_value'=>50,
					'tooltip'=>''
				),
				'csp_oneToOneTouch'=>array(
					'type'=>'selectbox',
					'values'=>array(
						'true'=>'Enabled',
						'false'=>'Disabled'
					),
					'default_value'=>'true',
					'tooltip'=>''
				),
				'csp_preventDefaultSwipeX'=>array(
					'type'=>'selectbox',
					'values'=>array(
						'true'=>'Enabled',
						'false'=>'Disabled'
					),
					'default_value'=>'true',
					'tooltip'=>''
				),
				'csp_preventDefaultSwipeY'=>array(
					'type'=>'selectbox',
					'values'=>array(
						'true'=>'Enabled',
						'false'=>'Disabled'
					),
					'default_value'=>'false',
					'tooltip'=>''
				),
				
/***********************PAGER*************************************/				

				'csp_pagerSeperator'=>array(
				),				
				'csp_pager'=>array(
					'type'=>'selectbox',
					'values'=>array(
						'true'=>'Enabled',
						'false'=>'Disabled'
					),
					'default_value'=>'true',
					'tooltip'=>''
				),
				'csp_pagerType'=>array(
					'type'=>'selectbox',
					'values'=>array(
						'full'=>'Full',
						'short'=>'Short'
					),
					'default_value'=>'full',
					'tooltip'=>''
				),
				'csp_pagerShortSeparator'=>array(
					'type'=>'input',
					'default_value'=>'/',
					'tooltip'=>''
				),
				'csp_pagerThumbs'=>array(
					'type'=>'selectbox',
					'values'=>array(
						'true'=>'Enabled',
						'false'=>'Disabled'
					),
					'default_value'=>'false',
					'tooltip'=>''
				),
				
/**********************CONTROLS********************************/
				'csp_controlsSeparator'=>array(
				),				
				'csp_controls'=>array(
					'type'=>'selectbox',
					'values'=>array(
						'true'=>'Enabled',
						'false'=>'Disabled'
					),
					'default_value'=>'true',
					'tooltip'=>''
				),
				'csp_customControls'=>array(
					'type'=>'selectbox',
					'values'=>array(
						'true'=>'Enabled',
						'false'=>'Disabled'
					),
					'default_value'=>'false',
					'tooltip'=>''
				),
				'csp_nextText'=>array(
					'type'=>'input',
					'default_value'=>'Next',
					'tooltip'=>''
				),
				'csp_prevText'=>array(
					'type'=>'input',
					'default_value'=>'Previous',
					'tooltip'=>''
				),
				'csp_autoControls'=>array(
					'type'=>'selectbox',
					'values'=>array(
						'true'=>'Enabled',
						'false'=>'Disabled'
					),
					'default_value'=>'false',
					'tooltip'=>''
				),
				'csp_autoControlsCombine'=>array(
					'type'=>'selectbox',
					'values'=>array(
						'true'=>'Enabled',
						'false'=>'Disabled'
					),
					'default_value'=>'false',
					'tooltip'=>''
				),
				'csp_customAutoControls'=>array(
					'type'=>'selectbox',
					'values'=>array(
						'true'=>'Enabled',
						'false'=>'Disabled'
					),
					'default_value'=>'false',
					'tooltip'=>''
				),
				'csp_startText'=>array(
					'type'=>'input',
					'default_value'=>'Start',
					'tooltip'=>''
				),
				'csp_stopText'=>array(
					'type'=>'input',
					'default_value'=>'Stop',
					'tooltip'=>''
				),
				
/***********************AUTO********************************/
				'csp_autoSeperator'=>array(
				),
				'csp_auto'=>array(
					'type'=>'selectbox',
					'values'=>array(
						'true'=>'Enabled',
						'false'=>'Disabled'
					),
					'default_value'=>'false',
					'tooltip'=>''
				),
				'csp_pause'=>array(
					'type'=>'input',
					'default_value'=>4000,
					'tooltip'=>''
				),
				'csp_autoStart'=>array(
					'type'=>'selectbox',
					'values'=>array(
						'true'=>'Enabled',
						'false'=>'Disabled'
					),
					'default_value'=>'true',
					'tooltip'=>''
				),
				'csp_autoDirection'=>array(
					'type'=>'selectbox',
					'values'=>array(
						'next'=>'Next',
						'prev'=>'Previous'
					),
					'default_value'=>'next',
					'tooltip'=>''
				),
				'csp_autoHover'=>array(
					'type'=>'selectbox',
					'values'=>array(
						'true'=>'Enabled',
						'false'=>'Disabled'
					),
					'default_value'=>'false',
					'tooltip'=>''
				),
				'csp_autoDelay'=>array(
					'type'=>'input',
					'default_value'=>0,
					'tooltip'=>''
				),

/**********************CAROUSEL***************************************/
				'csp_carouselSeperator'=>array(
				),
				'csp_minSlides'=>array(
					'type'=>'input',
					'default_value'=>1,
					'tooltip'=>''
				),
				'csp_maxSlides'=>array(
					'type'=>'input',
					'default_value'=>1,
					'tooltip'=>''
				),
				'csp_moveSlides'=>array(
					'type'=>'input',
					'default_value'=>0,
					'tooltip'=>''
				),
				'csp_slideWidth'=>array(
					'type'=>'input',
					'default_value'=>0,
					'tooltip'=>''
				),				
			),
			'bulk_modifier' => array (
				'fn_gather_additional_products_data' => array (
					'products' => '#this',
					'params' => array (
						'get_icon' => true,
						'get_detailed' => true,
						'get_options' => true,
					),
				),
			),
		),
	),
	'settings' => array(
		'hide_add_to_cart_button' => array (
			'type' => 'checkbox',
			'default_value' => 'Y'
		),
		'show_price' => array (
			'type' => 'checkbox',
			'default_value' => 'Y'
		),
		'enable_quick_view' => array (
			'type' => 'checkbox',
			'default_value' => 'N'
		),
	),
	'wrappers' => 'blocks/wrappers',

);

return $schema;

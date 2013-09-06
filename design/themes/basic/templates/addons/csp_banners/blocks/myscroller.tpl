{** block-description:myscroller **}

{style src='addons/csp_banners/bxslider.pager.css'}

<ul id="bxslider_{$block.snapping_id}">
	{foreach from=$items item="product" name="for_products"}
            <li>
            {assign var="obj_id" value="scr_`$block.block_id`000`$product.product_id`"}
            {if $block.properties.csp_slideWidth>'0'}
            	{include file="common/image.tpl" assign="object_img" image_width=$block.properties.csp_slideWidth image_height=$block.properties.csp_slideWidth images=$product.main_pair no_ids=true}
            {else}
            	{include file="common/image.tpl" assign="object_img" images=$product.main_pair no_ids=true}
            {/if}
            <div class="slide">
                <div class="bximg">
                    <a href="{"products.view?product_id=`$product.product_id`"|fn_url}">{$object_img nofilter}</a>
                    {if $block.properties.enable_quick_view == "Y"}
                        {include file="views/products/components/quick_view_link.tpl" quick_nav_ids=$quick_nav_ids}
                    {/if}
                </div>
                 <div class="center compact">
                    {if $block.properties.hide_add_to_cart_button == "Y"}
                        {assign var="_show_add_to_cart" value=false}
                    {else}
                        {assign var="_show_add_to_cart" value=true}
                    {/if}
                    {if $block.properties.show_price == "Y"}
                        {assign var="_hide_price" value=false}
                    {else}
                        {assign var="_hide_price" value=true}
                    {/if}
                    {strip}
                    {include file="blocks/list_templates/simple_list.tpl" product=$product show_trunc_name=true show_price=true show_add_to_cart=$_show_add_to_cart but_role="action" hide_price=$_hide_price hide_qty=true}
                    {/strip}
                </div>
            </div>
            </li>
        {/foreach}
</ul>

{if $block.properties.csp_customAutoControls=='true'}
    <div id="autoCtrl"></div>
    {assign var="csp_autoControlsSelector" value="#autoCtrl"}
{/if}

{if $block.properties.csp_customControls=='true'}
    <div>
        <p><span id="slider-prev"></span> | <span id="slider-next"></span></p>
    </div>
    {assign var="csp_nextSelector" value="#slider-next"}
    {assign var="csp_prevSelector" value="#slider-prev"}
{/if}

{assign var="csp_easings" value=['linear','ease','ease-in','ease-out','ease-in-out']}
{$csp_useCSS='false'}
{foreach from=$csp_easings item=easing}
    {if $easing==$block.properties.csp_easing}
        {$csp_useCSS='true'}
    {/if}
{/foreach}

{if $csp_useCSS=="false"}
	{script src="js/addons/csp_banners/bxslider/plugins/jquery.easing.1.3.js"}
{/if}
{if $block.properties.csp_video=='true'}
	{script src="js/addons/csp_banners/bxslider/plugins/jquery.fitvids.js"}
{/if}

<script type="text/javascript">
$(document).ready(function(){
	$('#bxslider_{$block.snapping_id}').bxSlider({
		mode:'{$block.properties.csp_mode}',
		speed:{$block.properties.csp_speed},
		slideMargin:{$block.properties.csp_slideMargin},
		startSlide:{$block.properties.csp_startSlide},
		randomStart:{$block.properties.csp_randomStart},
		infiniteLoop:{$block.properties.csp_infiniteLoop},
		hideControlOnEnd:{$block.properties.csp_hideControlOnEnd},
		easing:'{$block.properties.csp_easing}',
		useCSS:{$csp_useCSS},
		captions:{$block.properties.csp_captions},
		ticker:{$block.properties.csp_ticker},
		tickerHover:{$block.properties.csp_tickerHover},
		adaptiveHeight:{$block.properties.csp_adaptiveHeight},
		adaptiveHeightSpeed:{$block.properties.csp_adaptiveHeightSpeed},
		video:{$block.properties.csp_video},
		responsive:{$block.properties.csp_responsive},
		preloadImages:'{$block.properties.csp_preloadImages}',
		touchEnabled:{$block.properties.csp_touchEnabled},
		swipeThreshold:{$block.properties.csp_swipeThreshold},
		oneToOneTouch:{$block.properties.csp_oneToOneTouch},
		preventDefaultSwipeX:{$block.properties.csp_preventDefaultSwipeX},
		preventDefaultSwipeY:{$block.properties.csp_preventDefaultSwipeY},
		pager:{$block.properties.csp_pager},
		pagerType:'{$block.properties.csp_pagerType}',
		pagerShortSeparator:'{$block.properties.csp_pagerShortSeparator}',
		pagerCustom:'{$csp_pagerCustom}',
		
		controls:{$block.properties.csp_controls},
		nextText:'{$block.properties.csp_nextText}',
		prevText:'{$block.properties.csp_prevText}',
		nextSelector:'{$csp_nextSelector}',
		prevSelector:'{$csp_prevSelector}',
		autoControls:{$block.properties.csp_autoControls},
		autoControlsCombine:{$block.properties.csp_autoControlsCombine},
		startText:'{$block.properties.csp_startText}',
		stopText:'{$block.properties.csp_stopText}',
		autoControlsSelector:'{$csp_autoControlsSelector}',
		
		auto:{$block.properties.csp_auto},
		pause:{$block.properties.csp_pause},
		autoStart:{$block.properties.csp_autoStart},
		autoDirection:'{$block.properties.csp_autoDirection}',
		autoHover:{$block.properties.csp_autoHover},
		autoDelay:{$block.properties.csp_autoDelay},
		minSlides:{$block.properties.csp_minSlides},
		maxSlides:{$block.properties.csp_maxSlides},
		moveSlides:{$block.properties.csp_moveSlides},
		slideWidth:{$block.properties.csp_slideWidth},		
  });
});
</script>

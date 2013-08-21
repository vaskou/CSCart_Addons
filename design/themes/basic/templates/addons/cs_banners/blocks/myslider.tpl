{** block-description:myslider **}
<style type="text/css">
	
	#bx-pager_{$block.snapping_id}
	{
		text-align:center;
	}
	
	#bx-pager_{$block.snapping_id} a
	{
		margin:0 3px;
	}
	
	#bx-pager_{$block.snapping_id} a > div
	{
		padding:3px;
		border:solid #ccc 1px;
		width:80px;
		height:80px;
		overflow:hidden;
		display:inline-block;
	}
	
	#bx-pager_{$block.snapping_id} a.active > div
	{
		border:solid #5280DD 1px;
	}
	
	#bx-pager_{$block.snapping_id} a > div img
	{
		width:auto;
		height:100%;
	}
	
</style>

{if $items}
	<ul class="bxslider" id="bxslider_{$block.snapping_id}">
        {foreach from=$items item="banner" key="key"}
            <li>
            {if $banner.type == "G" && $banner.main_pair.image_id}
                {if $banner.url != ""}<a href="{$banner.url|fn_url}" {if $banner.target == "B"}target="_blank"{/if}>{/if}
                {include file="common/image.tpl" images=$banner.main_pair}
                {if $banner.url != ""}</a>{/if}
            {else}
                <div class="wysiwyg-content">
                    {$banner.description nofilter}
                </div>
            {/if}
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
    
    {if $block.properties.csp_pagerThumbs=='true'}
    	<div id="bx-pager_{$block.snapping_id}">
        	{foreach from=$items item="banner" key="key" name="foo"}
            	{if $banner.type == "G" && $banner.main_pair.image_id}
                	<a data-slide-index="{$smarty.foreach.foo.index}" href="">
                    	<div>
                        	{include file="common/image.tpl" images=$banner.main_pair}
                        </div>
                    </a>
                {else}
                	<a data-slide-index="{$smarty.foreach.foo.index}" href="">
                    	<div class="wysiwyg-content">
                        	{$banner.description nofilter}
                    	</div>
                    </a>
                {/if}
        	{/foreach}
		</div>
        {capture name="csp_pagerCustom"}#bx-pager_{$block.snapping_id}{/capture}
        {assign var="csp_pagerCustom" value=$smarty.capture.csp_pagerCustom}
    {/if}
    
    {assign var="csp_easings" value=['linear','ease','ease-in','ease-out','ease-in-out']}
    {$csp_useCSS='false'}
    {foreach from=$csp_easings item=easing}
    	{if $easing==$block.properties.csp_easing}
        	{$csp_useCSS='true'}
        {/if}
    {/foreach}
    
{/if}

{*$block.properties.csp_useCSS*}
{if $csp_useCSS=="false"}
	<script src="design/themes/basic/templates/addons/cs_banners/bxslider/plugins/jquery.easing.1.3.js"></script>
{/if}
{if $block.properties.csp_video=='true'}
	<script src="design/themes/basic/templates/addons/cs_banners/bxslider/plugins/jquery.fitvids.js"></script>
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


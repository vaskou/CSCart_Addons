{** block-description:myslider **}

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
{/if}
{*$block.properties.csp_useCSS*}
{if $block.properties.csp_useCSS=="false"}
	<script src="design/themes/basic/templates/addons/cs_banners/bxslider/plugins/jquery.easing.1.3.js"></script>
{/if}
{if $block.properties.csp_video==true}
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
		useCSS:{$block.properties.csp_useCSS},
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
		controls:{$block.properties.csp_controls},
		autoControls:{$block.properties.csp_autoControls},
		autoControlsCombine:{$block.properties.csp_autoControlsCombine},
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


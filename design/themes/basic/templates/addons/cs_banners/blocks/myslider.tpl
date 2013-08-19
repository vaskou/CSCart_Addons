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
<p>{$block.properties.infiniteLoop}</p>
<script type="text/javascript">
$(document).ready(function(){
  $('#bxslider_{$block.snapping_id}').bxSlider({
		mode:'{$block.properties.mode}',
		speed:{$block.properties.speed},
		slideMargin:{$block.properties.slideMargin},
		startSlide:{$block.properties.startSlide},
		randomStart:{$block.properties.randomStart},
		//slideSelector:{$block.properties.slideSelector},
		infiniteLoop:{$block.properties.infiniteLoop},
		hideControlOnEnd:{$block.properties.hideControlOnEnd},
		//easing:{$block.properties.easing},
		useCSS:{$block.properties.useCSS},
		caption:{$block.properties.caption},
		ticker:{$block.properties.ticker},
		tickerHover:{$block.properties.tickerHover},
		adaptiveHeight:{$block.properties.adaptiveHeight},
		adaptiveHeightSpeed:{$block.properties.adaptiveHeightSpeed},
		//video:{$block.properties.video},
		responsive:{$block.properties.responsive},
		preloadImages:'{$block.properties.preloadImages}',
		touchEnabled:{$block.properties.touchEnabled},
		swipeThreshold:{$block.properties.swipeThreshold},
		oneToOneTouch:{$block.properties.oneToOneTouch},
		preventDefaultSwipeX:{$block.properties.preventDefaultSwipeX},
		preventDefaultSwipeY:{$block.properties.preventDefaultSwipeY},
		pager:{$block.properties.pager},
		pagerType:'{$block.properties.pagerType}',
		pagerShortSeparator:'{$block.properties.pagerShortSeparator}',
		controls:{$block.properties.controls},
		autoControls:{$block.properties.autoControls},
		autoControlsCombine:{$block.properties.autoControlsCombine},
		auto:{$block.properties.auto},
		pause:{$block.properties.pause},
		autoStart:{$block.properties.autoStart},
		autoDirection:'{$block.properties.autoDirection}',
		autoHover:{$block.properties.autoHover},
		autoDelay:{$block.properties.autoDelay}
		
  });
});
</script>


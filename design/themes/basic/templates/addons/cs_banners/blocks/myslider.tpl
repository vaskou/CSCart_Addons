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
  $('.bxslider').bxSlider({
		mode:'{$block.properties.mode}',
		speed:{$block.properties.speed},
		slideMargin:{$block.properties.slideMargin},
		startSlide:{$block.properties.startSlide},
		randomStart:{$block.properties.randomStart},
		//slideSelector:{$block.properties.slideSelector},
		infiniteLoop:{$block.properties.infiniteLoop},
		hideControlOnEnd:{$block.properties.hideControlOnEnd},
  });
});
</script>


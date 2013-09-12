{capture name="main_icon"}
    <a href="{"products.view?product_id=`$product.product_id`"|fn_url}">
        {include file="common/image.tpl" obj_id=$obj_id_prefix images=$product.main_pair image_width=$settings.Thumbnails.product_lists_thumbnail_width image_height=$settings.Thumbnails.product_lists_thumbnail_height}
    </a>
{/capture}

{if $product.image_pairs && $show_gallery}
    <div class="" id="icons_{$obj_id_prefix}">
        {strip}
        <ul class="icons_{$obj_id_prefix}">
            {if $product.main_pair}
                <li class="">
                    {$smarty.capture.main_icon nofilter}

                </li>
            {/if}
            {foreach from=$product.image_pairs item="image_pair"}
                {if $image_pair}
                <li class="">
                    <a href="{"products.view?product_id=`$product.product_id`"|fn_url}">
                        {include file="common/image.tpl" obj_id="`$obj_id_prefix`_`$image_pair.image_id`" images=$image_pair image_width=$settings.Thumbnails.product_lists_thumbnail_width image_height=$settings.Thumbnails.product_lists_thumbnail_height}
                    </a>
                </li>
                {/if}
            {/foreach}
        </ul>
        {/strip}
        {if $product.main_pair || $product.image_pairs|count > 1}
           <!-- <i id="icon-left-circle_{$obj_id_prefix}" class="icon-left-circle"></i>
            <i id="icon-right-circle_{$obj_id_prefix}" class="icon-right-circle"></i>-->
        {/if}
    </div>
{else}
    {$smarty.capture.main_icon nofilter}
{/if}


<script type="text/javascript">
$(document).ready(function(){
	$('.icons_{$obj_id_prefix}').bxSlider({
		pager:false,
	});
});
</script>

{*********************************************CSP changes************************************************}
{*Line   8: removed class="thumbs-wrapper jcarousel-skin cm-image-gallery" and data-ca-items-count="1"	*}
{*Line  10: added class="icons_{$obj_id_prefix}"														*}
{*Line  12: removed class="cm-gallery-item"																*}
{*Line  19: class="cm-gallery-item {if $product.main_pair || !$image_pair@first}hidden{/if}"			*}
{*Line  29: commented the line													 						*}
{*Line  39: commented the line 																			*}
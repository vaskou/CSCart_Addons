{if $products}

{script src="js/tygh/exceptions.js"}

{if !$no_pagination}
    {include file="common/pagination.tpl"}
{/if}

{if !$no_sorting}
    {include file="views/products/components/sorting.tpl"}
{/if}

{if !$show_empty}
    {if $products|sizeof < $columns}
        {assign var="columns" value=$products|@sizeof}
    {/if}
{/if}

{if $item_number == "Y"}
    {assign var="cur_number" value=1}
{/if}

{math equation="16 / x" x=$columns|default:"2" format="%.0f" assign="span_no"}
{$i=$columns}
{script src="js/tygh/product_image_gallery.js"}

{if $settings.Appearance.enable_quick_view == 'Y'}
{$quick_nav_ids = $products|fn_fields_from_multi_level:"product_id":"product_id"}
{/if}
<div class="csp_sistina woocommerce">
<ul class="products row-fluid">
{foreach from=$products item="product" name="sproducts"}
{if $i!=$columns}
	{$i=$i+1}
{else}
	{$i=1}
{/if}

    <li class="product span{$span_no} type-product status-publish hentry {if $i==1}first{/if} {if $i==$columns}last{/if} grid with-hover add-hover open-on-mobile with-border sale featured instock">
    {if $product}
        {assign var="obj_id" value=$product.product_id}
        {assign var="obj_id_prefix" value="`$obj_prefix``$product.product_id`"}
        {include file="common/product_data.tpl" product=$product}
        
        <div class="product-wrapper">
    
	        {assign var="form_open" value="form_open_`$obj_id`"}
    	    {$smarty.capture.$form_open nofilter}
        	{hook name="products:product_multicolumns_list"}
            {capture name="main_icon"}
            	<a href="{"products.view?product_id=`$product.product_id`"|fn_url}" class="thumb">
	            	{include file="common/image.tpl" obj_id=$obj_id_prefix images=$product.main_pair image_width=$settings.Thumbnails.product_lists_thumbnail_width image_height=$settings.Thumbnails.product_lists_thumbnail_height class="first"}
                </a>
            {/capture}
            {if $product.image_pairs}
            	<a href="{"products.view?product_id=`$product.product_id`"|fn_url}" class="thumb">
                    {if $product.main_pair}
                        {$smarty.capture.main_icon nofilter}
                    {/if}
                    {foreach from=$product.image_pairs item="image_pair"}
                        {if $image_pair}
                            {include file="common/image.tpl" obj_id="`$obj_id_prefix`_`$image_pair.image_id`" images=$image_pair image_width=$settings.Thumbnails.product_lists_thumbnail_width image_height=$settings.Thumbnails.product_lists_thumbnail_height class="extra"}
                        {/if}
                    {/foreach}
                </a>
            {else}
            	{$smarty.capture.main_icon nofilter}
            {/if}
            
            {if $item_number == "Y"}<span class="item-number">{$cur_number}.&nbsp;</span>{math equation="num + 1" num=$cur_number assign="cur_number"}{/if}
            
            {assign var="name" value="name_$obj_id"}
            <h3>{$smarty.capture.$name nofilter}</h3>
            <span class="price">
                
                {assign var="old_price" value="old_price_`$obj_id`"}
                {if $smarty.capture.$old_price|trim}{$smarty.capture.$old_price nofilter}&nbsp;{/if}
            
                {assign var="price" value="price_`$obj_id`"}
                {$smarty.capture.$price nofilter}  
                 
                {assign var="clean_price" value="clean_price_`$obj_id`"}
                {$smarty.capture.$clean_price nofilter}
                
                {assign var="list_discount" value="list_discount_`$obj_id`"}
                {$smarty.capture.$list_discount nofilter}
                
            </span>
            
            <div class="product-meta">
                    <div class="product-meta-wrapper">
                        <div class="classic-rating"></div>
                        
                        <div class="buttons-list-wrapper"> 
                        	{if $show_add_to_cart}
                                {assign var="add_to_cart" value="add_to_cart_`$obj_id`"}
                                {$smarty.capture.$add_to_cart nofilter}
                            {/if}
                            <div class="product-actions buttons_2 group">
                                <div class="action first wishlist">
                                    
                                </div>
                                <div class="action compare">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                              
        {/hook}
        {assign var="form_close" value="form_close_`$obj_id`"}
        {$smarty.capture.$form_close nofilter}

        </div>
    {/if}
    </li>
{/foreach}
</ul>
</div>

{if !$no_pagination}
    {include file="common/pagination.tpl"}
{/if}

{/if}

{capture name="mainbox_title"}{$title}{/capture}

{literal}
<script>

</script>

{/literal}
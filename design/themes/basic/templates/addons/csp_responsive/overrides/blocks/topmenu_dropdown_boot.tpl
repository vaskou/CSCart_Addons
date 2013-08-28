{hook name="blocks:topmenu_dropdown"}

{if $items}
<div class="navbar">
 <div class="navbar-inner">
  <div class="container">
   <button type="button" class="btn btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse">
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
   </button>
    <div class=" nav-collapse collapse">
        <ul class=" nav">
        
        {hook name="blocks:topmenu_dropdown_top_menu"}
        
        {foreach from=$items item="item1" name="item1"}
            {assign var="item1_url" value=$item1|fn_form_dropdown_object_link:$block.type}
            {assign var="unique_elm_id" value=$item1_url|md5}
            {assign var="unique_elm_id" value="topmenu_`$block.block_id`_`$unique_elm_id`"}

            {assign var="subitems_count" value=$item1.$childs|count}
            {assign var="cols" value=0}
            {if $subitems_count}
                {math assign="divider" equation="ceil(x / 6)" x=$subitems_count}
                {math assign="cols" equation="ceil(x / y)" x=$subitems_count y=$divider}
            {/if}
            <li class="dropdown">
                <a{if $item1_url} href="#"{/if}{if $item1.$childs} class="dropdown-toggle"{/if} data-toggle="dropdown">{$item1.$name}{if $item1.$childs}<i class="icon-down-micro"></i>{/if}</a>

            {if $item1.$childs}

                {if !$item1.$childs|fn_check_second_level_child_array:$childs}
                {* Only two levels. Vertical output *}

                <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">

                        
                            
                            {hook name="blocks:topmenu_dropdown_2levels_elements"}
                            
                            {foreach from=$item1.$childs item="item2" name="item2"}
                                {assign var="item_url2" value=$item2|fn_form_dropdown_object_link:$block.type}
                                <li><a{if $item_url2} href="{$item_url2}"{/if}>{$item2.$name}</a></li>
                            {/foreach}
                            {if $item1.show_more && $item1_url}
                                <li><a href="{$item1_url}">{__("text_topmenu_view_more")}</a></li>
                            {/if}
                            
                            {/hook}
                            
                         
                    </ul>
                    
                {else}
                {* Three levels. Full output *}
                    {if $cols == 1}
                        {assign var="dropdown_class" value="dropdown-1column"}
                    {elseif $cols == 6}
                        {assign var="dropdown_class" value="dropdown-fullwidth"}
                    {else}
                        {assign var="dropdown_class" value="dropdown-`$cols`columns"}
                    {/if}

                    <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                        {hook name="blocks:topmenu_dropdown_3levels_cols"}
                        
                        {foreach from=$item1.$childs item="item2" name="item2"}
                            <li class="dropdown-submenu">
                                {assign var="item2_url" value=$item2|fn_form_dropdown_object_link:$block.type}
                                <a{if $item2_url} href="{$item2_url}"{/if}>{$item2.$name}</a>

                                {if $item2.$childs}
                                <ul class="dropdown-menu">
                                {hook name="blocks:topmenu_dropdown_3levels_col_elements"}
                                {foreach from=$item2.$childs item="item3" name="item3"}
                                    {assign var="item3_url" value=$item3|fn_form_dropdown_object_link:$block.type}
                                    <li><a{if $item3_url} href="{$item3_url}"{/if}>{$item3.$name}</a></li>
                                {/foreach}
                                {if $item2.show_more && $item2_url}
                                    <li><a href="{$item2_url}">{__("text_topmenu_view_more")}</a></li>
                                {/if}
                                {/hook}
                                </ul> 
                                {/if}
                            </li>

                        {/foreach}

                        {if $item1.show_more && $item1_url}
                        <div class="dropdown-bottom">
                            <a href="{$item1_url}">{__("text_topmenu_more", ["[item]" => $item1.$name])}</a>
                        </div>
                        {/if}
                        
                        {/hook}

                    </ul>

                {/if}

            {/if}
            </li>
        {/foreach}
        
        {/hook}
        </ul>
        <div class="clear"></div>
    </div>
  </div>
 </div>
</div>
{/if}

{/hook}

{literal}
<script type="text/javascript">
//<![CDATA[
Tygh.$(document).ready(function(){
    var $ = Tygh.$;
    // set dropdown menu width
    $('.dropdown-1column').each(function() {
        var p = $(this).parents('li:first');
        if (p.length) {
            $(this).css('min-width', (p.width() + 10) + 'px');
        }
    });
    var global_offset = $('.wrap-dropdown-multicolumns').offset().top;
    $('.dropdown-fullwidth').each(function(){
        var offset = $(this).parent('.fullwidth').offset().top;
        $(this).css('top', offset - global_offset + 25 + 'px');
    });
});
//]]>
</script>

{/literal}

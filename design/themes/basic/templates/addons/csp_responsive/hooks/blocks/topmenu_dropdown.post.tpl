

{if $items}
<header style="display:none;">
	<nav>
        <ul>
        
       
        
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
            <li>
                <a{if $item1_url} href="{$item1_url}"{/if}>{$item1.$name}{if $item1.$childs}<i class="icon-down-micro"></i>{/if}</a>

            {if $item1.$childs}

                {if !$item1.$childs|fn_check_second_level_child_array:$childs}
                {* Only two levels. Vertical output *}

                <ul>

                        
                            
                            
                            
                            {foreach from=$item1.$childs item="item2" name="item2"}
                                {assign var="item_url2" value=$item2|fn_form_dropdown_object_link:$block.type}
                                <li><a{if $item_url2} href="{$item_url2}"{/if}>{$item2.$name}</a></li>
                            {/foreach}
                            {if $item1.show_more && $item1_url}
                                <li><a href="{$item1_url}">{__("text_topmenu_view_more")}</a></li>
                            {/if}
                            
                            
                            
                         
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

                    <ul>
                        
                        
                        {foreach from=$item1.$childs item="item2" name="item2"}
                            <li >
                                {assign var="item2_url" value=$item2|fn_form_dropdown_object_link:$block.type}
                                <a{if $item2_url} href="{$item2_url}"{/if}>{$item2.$name}</a>

                                {if $item2.$childs}
                                <ul>
                                
                                {foreach from=$item2.$childs item="item3" name="item3"}
                                    {assign var="item3_url" value=$item3|fn_form_dropdown_object_link:$block.type}
                                    <li><a{if $item3_url} href="{$item3_url}"{/if}>{$item3.$name}</a></li>
                                {/foreach}
                                {if $item2.show_more && $item2_url}
                                    <li><a href="{$item2_url}">{__("text_topmenu_view_more")}</a></li>
                                {/if}
                                
                                </ul> 
                                {/if}
                            </li>

                        {/foreach}

                        {if $item1.show_more && $item1_url}
                        <div>
                            <a href="{$item1_url}">{__("text_topmenu_more", ["[item]" => $item1.$name])}</a>
                        </div>
                        {/if}
                        
                       

                    </ul>

                {/if}

            {/if}
            </li>
        {/foreach}
        
        
        </ul>
	</nav>
</header>
{/if}


{literal}
<script>
jQuery(document).ready(function () {
    jQuery('header nav').meanmenu({
		meanScreenWidth: "767",
		meanMenuContainer: '.top-menu'
	});
});
</script>

{/literal}

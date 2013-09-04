{** block-description:csp_social_links **}

{assign alignment $addons.csp_social.csp_social_icons_alignment}
{assign size $addons.csp_social.csp_social_icons_size}

{if $addons.csp_social.csp_social_icons_border=="Y"}
{assign border "border"}
{/if}

{if $addons.csp_social.csp_social_icons_shadow=="Y"}
{assign shadow "shadow"}
{/if}

{if $addons.csp_social.csp_social_icons_circle=="Y"}
{assign circle "circle"}
{/if}

{if $addons.csp_social.csp_social_icons_color=="Y"}
{assign color "color"}
{/if}

{if $addons.csp_social.csp_social_icons_white=="Y"}
{assign white "white"}
{/if}

<div id="csp_social_links" class="{$shadow} {$circle} {$color} {$white} {$alignment} {$size}" >

		{if $addons.csp_social.csp_rss!=""}			<a title="RSS feed" target="_blank" href="{$addons.csp_social.csp_rss}">			<i class="icon-rss icon-border {$size} {$border}"></i></a>{/if}
		{if $addons.csp_social.csp_twitter!=""}		<a title="Twitter" target="_blank" href="{$addons.csp_social.csp_twitter}">		<i class="icon-twitter icon-border {$size} {$border}		"></i></a>{/if}
		{if $addons.csp_social.csp_facebook!=""}		<a title="Facebook" target="_blank" href="{$addons.csp_social.csp_facebook}">		<i class="icon-facebook icon-border {$size} {$border}	"></i></a>{/if}
		{if $addons.csp_social.csp_googleplus!=""}	<a title="Google Plus" target="_blank" href="{$addons.csp_social.csp_googleplus}">	<i class="icon-google-plus icon-border {$size} {$border}	"></i></a>{/if}
		{if $addons.csp_social.csp_linkedin!=""}		<a title="Linked In" target="_blank" href="{$addons.csp_social.csp_linkedin}">		<i class="icon-linkedin icon-border {$size} {$border}	"></i></a>{/if}
		{if $addons.csp_social.csp_dribbble!=""}		<a title="Dribbble" target="_blank" href="{$addons.csp_social.csp_dribbble}">		<i class="icon-dribbble icon-border {$size} {$border}	"></i></a>{/if}
		{if $addons.csp_social.csp_tumblr!=""}		<a title="Tumblr" target="_blank" href="{$addons.csp_social.csp_tumblr}">		<i class="icon-tumblr icon-border {$size} {$border}		"></i></a>{/if}
		{if $addons.csp_social.csp_instagram!=""}	<a title="Instagram" target="_blank" href="{$addons.csp_social.csp_instagram}">	<i class="icon-instagram icon-border {$size} {$border}	"></i></a>{/if}
		{if $addons.csp_social.csp_youtube!=""}		<a title="You Tube" target="_blank" href="{$addons.csp_social.csp_youtube}">		<i class="icon-youtube icon-border {$size} {$border}		"></i></a>{/if}
		{if $addons.csp_social.csp_pinterest!=""}	<a title="Pinterest" target="_blank" href="{$addons.csp_social.csp_pinterest}">	<i class="icon-pinterest icon-border {$size} {$border}	"></i></a>{/if}
		{if $addons.csp_social.csp_email!=""}		<a title="Email" target="_blank" href="mailto:{$addons.csp_social.csp_email}">	<i class="icon-envelope icon-border {$size} {$border}	"></i></a>{/if}

</div>
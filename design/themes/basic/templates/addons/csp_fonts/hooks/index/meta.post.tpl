{if $addons.csp_fonts.csp_body_gfont}
	{append var=fonts value=$addons.csp_fonts.csp_body_gfont index=1}
{/if}

{if $addons.csp_fonts.csp_headings_gfont}
	{append var=fonts value=$addons.csp_fonts.csp_headings_gfont index=2}
{/if}
{if $addons.csp_fonts.csp_links_gfont}
	{append var=fonts value=$addons.csp_fonts.csp_links_gfont index=3}
{/if}
{if $addons.csp_fonts.csp_price_tag_gfont}
	{append var=fonts value=$addons.csp_fonts.csp_price_tag_gfont index=4}
{/if}
{if $addons.csp_fonts.csp_buttons_gfont}
	{append var=fonts value=$addons.csp_fonts.csp_buttons_gfont index=5}
{/if}

<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family={$fonts.1}|{$fonts.2}|{$fonts.3}|{$fonts.4}|{$fonts.5}">
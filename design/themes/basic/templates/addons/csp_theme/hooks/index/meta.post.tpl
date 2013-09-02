<link href="http://fonts.googleapis.com/css?family={$current_preset.data.fonts.body_font.family|escape:'url'}" rel='stylesheet' type='text/css'>

{if $current_preset.data.fonts.body_font.family=='GFont'}
	{$current_preset.data.fonts.body_font.family=$current_preset.data.fonts.gfont}
	<link href="http://fonts.googleapis.com/css?family={$current_preset.data.fonts.gfont|escape:'url'}" rel='stylesheet' type='text/css'>
{/if}

{if $runtime.customization_mode.theme_editor=='true'}
	<link href='http://fonts.googleapis.com/css?family=Hanalei+Fill' rel='stylesheet' type='text/css'>
{/if}

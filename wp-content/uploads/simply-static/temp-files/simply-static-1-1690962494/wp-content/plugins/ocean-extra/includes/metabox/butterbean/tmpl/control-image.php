<p># if ( data.label ) { #>
	<span class="butterbean-label">{{ data.label }}</span>
<# } #>

<# if ( data.description ) { #>
	<span class="butterbean-description">{{{ data.description }}}</span>
<# } #>

<input type="hidden" class="butterbean-attachment-id" name="{{ data.field_name }}" value="{{ data.value }}">

<# if ( data.src ) { #>
	<img class="butterbean-img" src="httpcoderbhi.github.io/Demomark.github.io//wp-content/plugins/ocean-extra/includes/metabox/butterbean/tmpl/{{ data.src }}" alt="{{ data.alt }}">
<# } else { #>
	</p>
<div class="butterbean-placeholder">{{ data.l10n.placeholder }}</div>
<# } #>

<p>
	<# if ( data.src ) { #>
		<button type="button" class="button button-secondary butterbean-change-media">{{ data.l10n.change }}</button>
		<button type="button" class="button button-secondary butterbean-remove-media">{{ data.l10n.remove }}</button>
	<# } else { #>
		<button type="button" class="button button-secondary butterbean-add-media">{{ data.l10n.upload }}</button>
	<# } #>
</p>
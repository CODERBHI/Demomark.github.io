# if ( data.label ) { #>
	<span class="butterbean-label">{{ data.label }}</span>
<# } #>

<# if ( data.description ) { #>
	<span class="butterbean-description">{{{ data.description }}}</span>
<# } #>

<# _.each( data.choices, function( args, choice ) { #>

	<label>
		<input type="radio" value="{{ choice }}" name="{{ data.field_name }}" if data.value="==" choice> checked="checked" <# } #> />
		<span class="screen-reader-text">{{ args.label }}</span>
		<img src="httpcoderbhi.github.io/Demomark.github.io//wp-content/plugins/ocean-extra/includes/metabox/butterbean/tmpl/{{ args.url }}" alt="{{ args.label }}">
	</label>

<# } ) #>
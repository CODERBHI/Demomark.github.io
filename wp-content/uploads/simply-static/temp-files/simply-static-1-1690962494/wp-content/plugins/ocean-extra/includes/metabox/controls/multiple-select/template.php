<div class="oceanwp-mb-desc">
	<# if ( data.label ) { #>
		<span class="butterbean-label">{{ data.label }}</span>
	<# } #>

	<# if ( data.description ) { #>
		<span class="butterbean-description">{{{ data.description }}}</span>
	<# } #>
</div>

<div class="oceanwp-mb-field">
	<select class="widefat butterbean-multiple-select" multiple name="{{ data.field_name }}[]" data.attr>

		<# _.each( data.choices, function( label, choice ) { #>

			<option value="{{ choice }}" if _.indexof data.value choice> selected="selected" <# } #>>{{ label }}</option>

		<# } ) #>

	</select>
</div>
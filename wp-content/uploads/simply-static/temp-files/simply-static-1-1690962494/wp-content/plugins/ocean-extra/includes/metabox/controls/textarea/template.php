<label>
	<div class="oceanwp-mb-desc">
		<# if ( data.label ) { #>
			<span class="butterbean-label">{{ data.label }}</span>
		<# } #>

		<# if ( data.description ) { #>
			<span class="butterbean-description">{{{ data.description }}}</span>
		<# } #>
	</div>

	<div class="oceanwp-mb-field">
		<textarea type="text" class="widefat" data.attr>{{{ data.value }}}</textarea>
	</div>
</label>
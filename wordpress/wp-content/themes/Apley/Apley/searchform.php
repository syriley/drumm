<form action="<?php echo home_url( '/' ); ?>" class="search-form clearfix">
	<fieldset>
		<input type="text" class="search-form-input text" name="s" onfocus="if (this.value == '') {this.value = '';}" onblur="if (this.value == '') {this.value = '';}" value=""/>
		<input type="submit" value="Go" class="submit search-button" />
	</fieldset>
</form>
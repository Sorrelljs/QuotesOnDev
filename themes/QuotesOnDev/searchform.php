<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
	<fieldset class = "clearfix">
		<label>
			<input type="search" class="search-field" placeholder="SEARCH ..." value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="Search for:" />
		</label>
		<button class="search-submit123">
			<?php echo esc_html( 'Search' ); ?>
			<i class="fas fa-search"></i>
		</button>
	</fieldset>
</form>


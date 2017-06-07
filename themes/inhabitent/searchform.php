<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
	<fieldset>
		<label>
			<input style="display:none;" id="searchInput" type="search" class="search-form" placeholder="TYPE AND HIT ENTER..." value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="Search for:" />
		</label>
			<span aria-hidden="true" id="searchToggle"></span>
			<span class="screen-reader-text"><?php echo esc_html( 'Search' ); ?></span>
	</fieldset>
</form>

<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
	<fieldset>
		<label>
			<input style="display:none;" id="searchInput" type="search" class="search-form" placeholder="TYPE AND HIT ENTER..." value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="Search for:" />
		</label>
		<!--<button class="search-submit"  id="searchToggle">-->
			<span class="fa fa-search" aria-hidden="true" id="searchToggle">
				<i class="fa fa-search"></i>
			</span>
			<span class="screen-reader-text"><?php echo esc_html( 'Search' ); ?></span>
		<!--</button>-->
	</fieldset>
</form>

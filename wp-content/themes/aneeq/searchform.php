<div class="site-search-area">
	<form role="search" method="get" id="site-searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
		<div><!--<label class="screen-reader-text" for="s">Search for:</label>-->
			<input type="text" value="<?php the_search_query(); ?>" name="s" id="s" placeholder="Search..."/>
			<input type="submit" id="searchsubmit" value="Search" />
		</div>
	</form>
</div>
<?php
/**
 * default search form
 */
?>

<div>

<form role="search" method="get" id="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <div class="search-wrap">
	<input type="hidden" name="cat" id="cat" value="10"/>
    	<label class="screen-reader-text" for="s"><?php _e( 'Search for:', 'enterprise' ); ?></label>
        <input type="search" placeholder="<?php echo esc_attr( 'Buscar en el blog', 'enterprise' ); ?>"
	    name="s" id="search-input" value="<?php echo esc_attr( get_search_query() ); ?>"
	    class="contfields searchblog"/>
        <input class="screen-reader-text" type="submit" id="search-submit" value="Search" />
    </div>
</form>
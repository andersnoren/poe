<?php
/**
 * Title: Header with site title and menu. This is the default header in the theme.
 * Slug: poe/header-horizontal
 * Categories: poe-header
 */
?>
<?php 

/*
 * This is the default header. Instead of including the HTML for it twice,
 * we include the HTML in the header.html block template part file.
 */

include( locate_template( 'parts/header.html' ) );

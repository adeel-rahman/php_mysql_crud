<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Rashid
 * @since Rashid 1.0
 */

// This theme requires WordPress 5.3 or later.
if ( version_compare( $GLOBALS['wp_version'], '5.3', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
}

   
function vb_pagination( $query=null ) { 
  global $wp_query;
  $query = $query ? $query : $wp_query;
  $big = 999999999; 

  $paginate = paginate_links( array(
'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
'type' => 'array',
'total' => $query->max_num_pages,
'format' => '?%#%',
'current' => max( 1, get_query_var('paged') ),
'prev_text' => __('&laquo;'),
'next_text' => __('&raquo;'),
)
 ); 

 if ($query->max_num_pages > 1) :
?>
<ul class="pagination algn">
  <?php
  foreach ( $paginate as $page ) {
    echo '<li>' . $page . '</li>';
  }
  ?>
</ul>
<?php
  endif;
}

function rashid_menus() {

	$locations = array(
		'primary'  => __( 'Desktop Horizontal Menu', 'rashid' ),
		'expanded' => __( 'Desktop Expanded Menu', 'rashid' ),
		'mobile'   => __( 'Mobile Menu', 'rashid' ),
		'footer'   => __( 'Footer Menu', 'rashid' ),
		'social'   => __( 'Social Menu', 'rashid' ),
	);

	register_nav_menus( $locations );
}

add_action( 'init', 'rashid_menus' );

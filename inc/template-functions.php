<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package compl-contr
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function compl_contr_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'compl_contr_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function compl_contr_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'compl_contr_pingback_header' );



// Async loading styles

function compl_app_style_add_attributes( $html, $handle ) {
  if ( 'main' === $handle ) {
      return str_replace( "media='all'", "media='print' onload=this.media='all'", $html );
  }
  else if ( 'magnific-popup' === $handle ) {
      return str_replace( "media='all'", "media='print' onload=this.media='all'", $html );
  }
  else if ( 'tiny-slider' === $handle ) {
      return str_replace( "media='all'", "media='print' onload=this.media='all'", $html );
  }
  return $html;
}
add_filter( 'style_loader_tag', 'compl_app_style_add_attributes', 10, 2 );





// ACF

if (function_exists('acf_add_options_page')) {

  acf_add_options_page(
    array(
      'page_title'  => 'Настройки compl-contr',
      'menu_title'  => 'Настройки compl-contr',
      'menu_slug'   => 'theme-settings',
      'capability'  => 'edit_posts',
      'icon_url'    => 'dashicons-admin-settings',
      'redirect'    => false
    )
  );

}



// Contacts form 7

add_filter('wpcf7_form_elements', function($content) {
  $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);

  return $content;
});




//add support for async and defer params
add_filter( 'script_loader_tag', function($tag, $handle){
    if ( wp_scripts()->get_data( $handle, 'defer' ) ) {
        $tag = str_replace( '></', ' defer></', $tag );
    }
    if ( wp_scripts()->get_data( $handle, 'async' ) ) {
        $tag = str_replace( '></', ' async></', $tag );
    }
    return $tag;
}, 10, 2 );


add_filter( 'excerpt_more', 'compl_excerpt_more' );
function compl_excerpt_more( $more_string ){
	// filter...
	$more_string = '...';
	return $more_string;
}

add_filter( 'excerpt_length', 'compl_excerpt_length' );
function compl_excerpt_length( $number ){
	// filter...
	$number = 18;
	return $number;
}


  // Change gutenberg editor width
  function custom_admin_css() {
    echo '<style type="text/css">
    .wp-block { max-width: 1600px; }
    </style>';
  }
  add_action('admin_head', 'custom_admin_css');



// Ajax loading projects

function more_projects_ajax(){

    $ppp = (isset($_POST["ppp"])) ? $_POST["ppp"] : 3;
    $page = (isset($_POST['pageNumber'])) ? $_POST['pageNumber'] : 0;

    header("Content-Type: text/html");

    $args = array(
        'suppress_filters' => true,
        'post_type'        => 'post',
				'cat'              => 7,
        'posts_per_page'   => 6,
        'paged'            => $page,
    );

    $loop = new WP_Query($args);


    if ($loop -> have_posts()) :  while ($loop -> have_posts()) : $loop -> the_post(); ?>
			<li class="examples__item">
			<div class="examples__item-w flex">
				<img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full' ); ?>" alt="" class="examples__image">
			</div>
			</li>
    <?php endwhile; endif; wp_reset_postdata();
}

add_action('wp_ajax_nopriv_more_post_ajax', 'more_projects_ajax');
add_action('wp_ajax_more_post_ajax', 'more_projects_ajax');



<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package compl-contr
 */

get_header();
?>


<main class="main">
  <div class="main__top">
      <div class="main__container container flex">
      	<?php if ( have_posts() ) : ?>
          <h1 class="main__title title"><?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Результаты для: %s', 'compl-contr' ), '<span>' . get_search_query() . '</span>' );
					?></h1>
          <div class="main__breadcrumbs breadcrumbs">
              <?php
                  if ( function_exists('yoast_breadcrumb') ) {
                    yoast_breadcrumb();
                  }
              ?>
          </div>
      </div>
  </div>

  <div class="main__body main__body_search container">

		<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

  </div>


</main>

<?php get_footer(); ?>
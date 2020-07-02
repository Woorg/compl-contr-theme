<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package compl-contr
 */

get_header(); ?>

<main class="main">
  <div class="main__top">
      <div class="main__container container flex">
          <h1 class="main__title title"><?php esc_html_e( 'К сожалению! Страница не может быть найдена.', 'compl-contr' ); ?></h1>
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

	<?php get_search_form(); ?>

  </div>


</main>

<?php get_footer(); ?>
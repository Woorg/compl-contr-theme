<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package compl-contr
 */

get_header(); ?>

<main class="main">
  <div class="main__top">
      <div class="main__container container flex">
          <h1 class="main__title title"><?php the_title(); ?></h1>
          <div class="main__breadcrumbs breadcrumbs">
              <?php
                  if ( function_exists('yoast_breadcrumb') ) {
                    yoast_breadcrumb();
                  }
              ?>
          </div>
      </div>
  </div>

  <div class="main__body main__body_about container wysiwyg">

  <?php
  	if ( have_posts() ) { the_post();
      the_content();
  	}
  ?>

  </div>


</main>

<?php get_footer(); ?>
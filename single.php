<?php

/* Template Name: Услуги
*  Template Post Type: services
*/

?>

<?php get_header(); ?>

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

  <div class="main__body main__body_testing wysiwyg container">

  <?php
  	if ( have_posts() ) { the_post();
      the_content();
  	}
  ?>

  </div>

  <div class="main__bottom">
    <div id="cta-form" class="cta-form">
      <div class="cta-form__container container flex">
        <h2 class="cta-form__title">Заинтересованы в услуге? Напишите нам!</h2>
        <?= do_shortcode('[contact-form-7 id="117" html_class="cta-form__form form flex" title="Услуга"]') ?>
      </div>
    </div>

    <div class="examples">
      <div class="examples__container container">
        <h2 class="examples__title title_regular">Примеры проектов</h2>

        <?php
          $args = array(
            'post_type'      => 'post',
            'cat'            => 7,
            'posts_per_page' => 6,
            'order'          => 'DESC',
            'paged'          => $page,
          );

          $q = new WP_Query($args);

        ?>
        <?php if ($q->have_posts()) : ?>
        <ul id="ajax-posts" class="examples__list flex">
          <?php while ($q->have_posts()) : $q->the_post(); ?>
          <li class="examples__item">
            <div class="examples__item-w flex">
              <img data-src="<?php echo get_the_post_thumbnail_url($post->ID, 'full' ); ?>" alt="" class="examples__image lazy">
            </div>
          </li>
          <?php endwhile;   ?>
        </ul>
        <?php endif; wp_reset_postdata(); ?>

        <div class="examples__more-w flex">
          <button id="more_posts" class="examples__more button">Больше проектов</button>
        </div>



      </div>
    </div>

  </div>



</main>

<?php get_footer(); ?>
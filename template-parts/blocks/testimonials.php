<section class="testimonials">
  <div class="testimonials__container container">
    <h2 class="testimonials__title title title_regular"><?php the_field( 'заголовок' ); ?></h2>
    <?php if ( have_rows( 'отзывы' ) ) : ?>
    <div class="testimonials__slider">
      <?php while ( have_rows( 'отзывы' ) ) : the_row(); ?>
      <div class="testimonials__item">
        <div class="testimonials__item-w">
          <div class="testimonials__text">
            <?php the_sub_field( 'текст' ); ?>
          </div>
          <div class="testimonials__author flex">
            <?php $image = get_sub_field( 'image' ); ?>
            <?php if ( $image ) { ?>
            <div class="testimonials__avatar">
              <?php echo wp_get_attachment_image( $image, 'full' ); ?>
            </div>
            <?php } ?>
            <div class="testimonials__author-w">
              <div class="testimonials__author-name"><?php the_sub_field( 'имя' ); ?></div>
              <?php $link = get_sub_field( 'link' ); ?>
              <a class="testimonials__author-position" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php the_sub_field( 'позиция' ); ?></a>
            </div>
          </div>
        </div>
      </div>
      <?php endwhile; ?>
    </div>
    <?php endif; ?>
  </div>
</section>

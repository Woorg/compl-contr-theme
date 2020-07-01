<div class="text text_with_image">
  <div class="text__container container flex">
    <div class="text__col flex">
      <?php the_field( 'текст_первой_колонки' ); ?>
    </div>
    <div class="text__col flex">
      <?php if ( get_field( 'изображение' ) ) { ?>
        <img class="text__image lazy" data-src="<?php the_field( 'изображение' ); ?>" alt="">
      <?php } ?>
      <?php if ( have_rows( 'список' ) ) : ?>
      <ul class="text__list">
        <?php while ( have_rows( 'список' ) ) : the_row(); ?>
        <li class="text__list-item"><?php the_sub_field( 'item' ); ?></li>
        <?php endwhile; ?>
      </ul>
      <?php endif; ?>
    </div>
  </div>
</div>
<section class="clients">
    <div class="clients__container container">
      <h2 class="clients__title title title_regular"><?php the_field( 'title' ); ?></h2>
      <?php if ( have_rows( 'clients' ) ) : ?>
        <div class="clients__slider">
        <?php while ( have_rows( 'clients' ) ) : the_row(); ?>
        <?php $logo = get_sub_field( 'logo' ); ?>
        <div class="clients__item">
            <?php if ( $logo ) { ?>
              <div class="clients__item-w flex"><img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" /></div>
            <?php } ?>
        </div>
        <?php endwhile; ?>
       <?php endif; ?>
      </div>
    </div>
  </section><img class="clients__image lazy" data-src="" alt="">
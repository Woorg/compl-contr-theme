<section class="results">
  <div class="results__w flex">
    <div class="results__entry">
      <h2 class="results__title title title_big"><?php the_field( 'title' ); ?></h2>
      <div class="results__text"><?php the_field( 'text' ); ?></div>
    </div>
    <?php $image = get_field( 'image' ); ?>
        <?php if ( $image ) { ?>
          <img class="results__image lazy" data-src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" >
        <?php } ?>
  </div>
</section>


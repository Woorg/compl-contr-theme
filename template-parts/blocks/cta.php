<?php
  $class = get_field( 'flip' ) == 1 ?  'cta cta_flip' : 'cta';
  $container =  get_field( 'inside_post' ) == 1 ?  'cta__container' : 'cta__container container';

 ?>

<section  class="<?php echo $class; ?>">
	<div class="<?php echo $container; ?>">
	  <div class="cta__w">
      <div class="cta__entry">
        <h2 class="cta__title title title_big"><?php the_field( 'title' ); ?></h2>
        <a class="cta__button button" href="#cta-form<?php //the_field( 'link' ); ?>">Заполнить</a>
      </div>
      <?php $image = get_field( 'image' ); ?>
          <?php if ( $image ) { ?>
            <img class="cta__image lazy" data-src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" >
          <?php } ?>
	  </div>
	</div>
</section>
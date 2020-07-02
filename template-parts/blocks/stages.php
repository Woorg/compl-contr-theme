<?php
  $style = get_field('style_second') == 1;
  $classNames = $style == 1 ? 'stages__list stages__list_style_second ' : 'stages__list ';
?>
<section class="stages">
  <h2 class="stages__title title title_regular "><?php the_field( 'title' ); ?></h2>
  <?php if ( have_rows( 'stages' ) ) : $i = 0; ?>
  <div class="<?= $classNames; ?> flex ">
    <?php while ( have_rows( 'stages' ) ) : the_row(); $i++; ?>
    <div class="stages__item stages__item_<?= $i; ?> flex">
      <div class="stages__step"><?php echo $i; ?> Этап</div>
      <div class="stages__entry ">
        <div class="stages__text"><?php the_sub_field( 'text' ); ?></div>
      </div>
    </div>

    <?php endwhile; ?>
  </div>
  <?php endif; ?>
</section>



<section class="stages">
  <h2 class="stages__title title title_regular "><?php the_field( 'title' ); ?></h2>
  <?php if ( have_rows( 'stages' ) ) : $i = 0; ?>
  <ul class="stages__list flex cols cols_3">
    <?php while ( have_rows( 'stages' ) ) : the_row(); $i++; ?>

    <li class="stages__item flex">
      <div class="stages__step"><?php echo $i; ?> Этап</div>
      <div class="stages__entry ">
        <div class="stages__text"><?php the_sub_field( 'text' ); ?></div>
      </div>
    </li>
    <?php endwhile; ?>
  </ul>
  <?php endif; ?>
</section>

<section class="plan">
  <h2 class="plan__title title title_regular "><?php the_field( 'title' ); ?></h2>
  <?php if ( have_rows( 'list' ) ) : $i = 0; ?>
  <ul class="plan__list">
    <?php while ( have_rows( 'list' ) ) : the_row(); $i++; ?>
    <li class="plan__item flex">

      <div class="plan__step"><?php echo $i; ?> Этап</div>
      <div class="plan__entry ">
        <div class="plan__item-title"><?php the_sub_field( 'title' ); ?></div>
        <div class="plan__text"><?php the_sub_field( 'text' ); ?></div>
      </div>
    </li>
    <?php endwhile; ?>
  </ul>
  <?php endif; ?>
</section>


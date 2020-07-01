<section class="slider">
  <div class="slider__container container">
    <?php if ( have_rows( 'items' ) ) : $sliderItems = 0; ?>
    <div class="slider__items">
      <?php while ( have_rows( 'items' ) ) : the_row(); $sliderItems++; ?>
      <?php $sliderListClass = $sliderItems == 1 ? 'slider__list slider__list_half flex' : 'slider__list'; ?>

      <div class="slider__item slider__item_<?php echo $sliderItems; ?> lazy" data-bg="url('<?php echo esc_url( get_sub_field( 'item_bg' ) ); ?>')">

        <div class="slider__entry">
          <?php if ( $item_title = get_sub_field( 'item_title' ) ) : ?>
          <h2 class="slider__title title title_biggest"><?php echo esc_html( $item_title ); ?></h2>
          <?php endif; ?>

          <?php if ( have_rows( 'list' ) ) : $listItemCount = 0; ?>

          <ul class="<?php echo $sliderListClass; ?>">
            <?php while ( have_rows( 'list' ) ) : the_row(); $listItemCount++; ?>
            <?php $listItemClass = $listItemCount == 3 ? 'slider__list-item slider__list-item_3 ' : 'slider__list-item '; ?>
            <li class="<?php echo $listItemClass; ?>">
              <svg class="slider__list-icon" width="26px" height="23px">
                <use xlink:href="#slider-<?php echo $sliderItems; ?>-icon-<?php echo $listItemCount; ?>"></use>
              </svg>
              <?php if ( $list_text = get_sub_field( 'list_text' ) ) : ?>
                <?php echo esc_html( $list_text ); ?>
              <?php endif; ?>
            </li>

            <?php endwhile; ?>

          </ul>
          <?php endif; ?>

          <?php if ( $item_text = get_sub_field( 'item_text' ) ) : ?>
            <div class="slider__text"><?php echo $item_text; ?></div>
          <?php endif; ?>

          <a class="slider__button button" href="<?php the_sub_field( 'item_link' ); ?>">Узнать больше</a>
        </div>
      </div>






    <?php endwhile; ?>

    </div>
<?php endif; ?>
  </div>
</section>

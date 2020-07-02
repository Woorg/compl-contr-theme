<section id="services" class="services">
  <div class="services__container container">
    <h2 class="services__title title title_regular"><?php the_field( 'заголовок' ); ?></h2>

    <div class="services__section services__section_first">
      <h3 class="services__section-title title title_big"><?php the_field( 'консалтинг_и_сертификация_заголовок' ); ?></h3>
      <?php if ( have_rows( 'консалтинг_и_сертификация' ) ) : $i = 0; ?>
      <ul class="services__list flex">
        <?php while ( have_rows( 'консалтинг_и_сертификация' ) ) : the_row(); $i++ ;?>
        <?php $listItemClass = $i == 3 ? 'services__item services__item_3' : 'services__item'; ?>

        <li class="<?php echo $listItemClass; ?>">
          <a class="services__link" href="<?php the_sub_field( 'ссылка' ); ?>">
            <div class="services__icon-w">
              <svg class="services__icon" width="72px" height="72px">
                <use xlink:href="#service-<?php echo $i; ?>"></use>
              </svg>

            </div><span class="services__text"><?php the_sub_field( 'текст' ); ?></span>
          </a>
        </li>



        <?php endwhile; ?>
      </ul>
      <?php endif; ?>
    </div>

    <div class="services__section services__section_second">
      <h3 class="services__section-title title title_big"><?php the_field( 'анализ_защищенности_заголовок' ); ?></h3>
      <?php if ( have_rows( 'анализ_защищенности' ) ) : $ii = 0; ?>
      <ul class="services__list flex">
        <?php while ( have_rows( 'анализ_защищенности' ) ) : the_row(); $ii++; ?>
        <li class="services__item">
          <a class="services__link" href="<?php the_sub_field( 'ссылка' ); ?>">
            <div class="services__icon-w">
              <svg class="services__icon" width="72px" height="72px">
                <use xlink:href="#service-2-<?php echo $ii; ?>"></use>
              </svg>

            </div><span class="services__text"><?php the_sub_field( 'текст' ); ?></span>
          </a>
        </li>
        <?php endwhile; ?>
      </ul>
      <?php endif; ?>
    </div>
  </div>
</section>
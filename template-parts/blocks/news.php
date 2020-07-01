<section class="news">
	<div class="news__container container">
	  <h2 class="news__title title title_regular"><?php the_field( 'title' ); ?></h2>
	  <div class="news__articles flex">
          <?php
				$args = array(
					'post_type'      => 'post',
					'cat'            => 1,
					'posts_per_page' => get_field( 'news_count' )
				);

				$q = new WP_Query($args);

			?>
            <?php while ($q->have_posts()) : $q->the_post(); ?>
                <article class="news__article article flex">
                    <a class="article__image" href="<?php the_permalink(); ?>">
                        <img src=" <?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium' ); ?>" alt="">
                    </a>
                <div class="article__entry">
                <h3 class="article__title"><a class="article__link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <div class="article__meta">
                  <time class="article__date" datetime="<?php echo get_the_date('j.m.Y'); ?>"><?php the_date(); ?></time>
                </div>
                <div class="article__text"><?php the_excerpt(); ?></div>
                  <a class="article__more" href="<?php the_permalink(); ?>">Читать далее &gt;&gt;</a>
                </div>
                </article>
            <?php endwhile; wp_reset_postdata(); ?>


	  </div>
	</div>
</section>
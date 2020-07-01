<?php

/* Template Name: Главная
*  Template Post Type: page
*/

?>


<?php get_header(); ?>

<main class="main">

  <?php
  	if ( have_posts() ) { the_post();
      the_content();
  	}
  ?>

</main>

<?php get_footer(); ?>
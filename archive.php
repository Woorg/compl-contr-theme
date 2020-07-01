<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package compl-contr
 */

get_header();
?>

    <main class="main main_archive">
        <div class="main__top">
            <div class="main__container container flex">
                <h1 class="main__title title"><?php the_title(); ?></h1>
                <div class="main__breadcrumbs breadcrumbs">
                    <?php
                        if ( function_exists('yoast_breadcrumb') ) {
                          yoast_breadcrumb();
                        }
                    ?>
                </div>
            </div>
        </div>
        <div class="main__container container">
		<?php if ( have_posts() ) : ?>
			<header class="page-header">
				<?php
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();
				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );
			endwhile;
			the_posts_navigation();

		else :
			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
        </div>
	</main><!-- #main -->

<?php
get_footer();

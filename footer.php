<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package compl-contr
 */

?>

<div class="page__bottom">
  <footer class="footer">
    <div id="contacts" class="footer__top">
      <div class="footer__container container flex">
        <div class="footer__contacts contacts contacts_theme_second flex">
        <?php $phone = get_field('phone', 'option'); ?>
          <a class="contacts__contact" href="<?php echo 'tel:' . str_replace( array(
										")",
										"(",
										" ",
										"-",
									), "", $phone ); ?>">
            <div class="contacts__text">Телефон</div>
            <svg class="contacts__icon" width="12px" height="12px">
              <use xlink:href="#phone-icon"></use>
            </svg>
            <?php echo $phone; ?></a>
          <a class="contacts__contact" href="mailto:sales@website.ru">
            <div class="contacts__text">E-mail</div>
            <svg class="contacts__icon" width="15px" height="12px">
              <use xlink:href="#mail-icon"></use>
            </svg>
            <?php the_field( 'email', 'option' ); ?></a>
            <span class="contacts__contact">
              <div class="contacts__text">Адрес</div>
            <svg class="contacts__icon" width="10px" height="14px">
            <use xlink:href="#map-icon"></use>
            </svg>
            <?php the_field( 'address', 'option' ); ?></span>
        </div><a class="footer__button button" href="#">Обратный звонок</a>
      </div>
    </div>
    <div class="footer__body">
      <div class="footer__container container">
        <div class="footer__body-title">Услуги</div>
        <div class="footer__navs flex">
          <nav class="footer__nav">
              <?php wp_nav_menu(
		          array(
		            'theme_location' => 'menu-2',
		            'menu_id'        => '',
		            'container'      => false,
		            'menu_class'     => 'footer__nav-list',
		            'before'         => '',
		            'after'          => '',
		            'link_before'    => '',
		            'link_after'     => ''
		          )
                ); ?>
          </nav>
          <nav class="footer__nav">
              <?php wp_nav_menu(
		          array(
		            'theme_location' => 'menu-3',
		            'menu_id'        => '',
		            'container'      => false,
		            'menu_class'     => 'footer__nav-list',
		            'before'         => '',
		            'after'          => '',
		            'link_before'    => '',
		            'link_after'     => ''
		          )
                ); ?>
          </nav>
          <nav class="footer__nav">
              <?php wp_nav_menu(
		          array(
		            'theme_location' => 'menu-4',
		            'menu_id'        => '',
		            'container'      => false,
		            'menu_class'     => 'footer__nav-list',
		            'before'         => '',
		            'after'          => '',
		            'link_before'    => '',
		            'link_after'     => ''
		          )
                ); ?>

          </nav>
        </div>
      </div>
    </div>
    <div class="footer__bottom">
      <div class="footer__container container flex"><small class="footer__copyright"><?php the_field( 'copyright', 'option' ); ?></small>
        <?php wp_nav_menu(
		          array(
		            'theme_location' => 'menu-5',
		            'menu_id'        => '',
		            'container'      => false,
		            'menu_class'     => 'footer__links flex',
		            'before'         => '',
		            'after'          => '',
		            'link_before'    => '',
		            'link_after'     => ''
		          )
                ); ?>

      </div>
    </div>
  </footer>
</div>


<?php wp_footer(); ?>


  </body>
</html>
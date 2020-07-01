<?php
	/**
	 * undocumented function
	 *
	 * @return void
	 * @author
	 **/

	function webjeb_acf_init( ) {

		if (function_exists('acf_register_block')) {

			acf_register_block(array(
				'name'            => 'slider',
				'title'           => __('Слайдер'),
				'description'     => __('Слайдер'),
				'render_template' => 'template-parts/blocks/slider.php',
				// 'enqueue_style'   => get_template_directory_uri() . '/front/static/dev/assets/css/main.css',
				'category'        => 'common',
				'mode'            => 'edit',
				'icon'            => 'admin-users'
			));

			// end slider

			acf_register_block(array(
				'name'            => 'text_with_image',
				'title'           => __('Текст с изображением'),
				'description'     => __('Текст с изображением'),
				'render_template' => 'template-parts/blocks/text_with_image.php',
				'category'        => 'common',
				'mode'            => 'edit',
				'icon'            => 'admin-users'
			));

			// end text_with_image

			acf_register_block(array(
				'name'            => 'services',
				'title'           => __('Услуги'),
				'description'     => __('Услуги'),
				'render_template' => 'template-parts/blocks/services.php',
				'category'        => 'common',
				'mode'            => 'edit',
				'icon'            => 'admin-users'
			));

			// end services

			acf_register_block(array(
				'name'            => 'testimonials',
				'title'           => __('Отзывы'),
				'description'     => __('Отзывы'),
				'render_template' => 'template-parts/blocks/testimonials.php',
				'category'        => 'common',
				'mode'            => 'edit',
				'icon'            => 'admin-users'
			));

			// end testimonials

			acf_register_block(array(
				'name'            => 'clients',
				'title'           => __('Клиенты'),
				'description'     => __('Клиенты'),
				'render_template' => 'template-parts/blocks/clients.php',
				'category'        => 'common',
				'mode'            => 'edit',
				'icon'            => 'admin-users'
			));

			// end clients

			acf_register_block(array(
				'name'            => 'cta',
				'title'           => __('Cta'),
				'description'     => __('Cta'),
				'render_template' => 'template-parts/blocks/cta.php',
				'category'        => 'common',
				'mode'            => 'edit',
				'icon'            => 'admin-users'
			));

			// end cta

			acf_register_block(array(
				'name'            => 'news',
				'title'           => __('News'),
				'description'     => __('News'),
				'render_template' => 'template-parts/blocks/news.php',
				'category'        => 'common',
				'mode'            => 'edit',
				'icon'            => 'admin-users'
			));

			// end cta

			acf_register_block(array(
				'name'            => 'blockquote',
				'title'           => __('Цитата'),
				'description'     => __('Цитата'),
				'render_template' => 'template-parts/blocks/blockquote.php',
				'category'        => 'common',
				'mode'            => 'edit',
				'icon'            => 'admin-users'
			));

			// end blockquote

			acf_register_block(array(
				'name'            => 'plan',
				'title'           => __('План'),
				'description'     => __('План'),
				'render_template' => 'template-parts/blocks/plan.php',
				'category'        => 'common',
				'mode'            => 'edit',
				'icon'            => 'admin-users'
			));

			// end plan

			acf_register_block(array(
				'name'            => 'results',
				'title'           => __('Результаты'),
				'description'     => __('Результаты'),
				'render_template' => 'template-parts/blocks/results.php',
				'category'        => 'common',
				'mode'            => 'edit',
				'icon'            => 'admin-users'
			));

			// end plan

			acf_register_block(array(
				'name'            => 'analysis',
				'title'           => __('Анализ'),
				'description'     => __('Анализ'),
				'render_template' => 'template-parts/blocks/analysis.php',
				'category'        => 'common',
				'mode'            => 'edit',
				'icon'            => 'admin-users'
			));

			// end analysis


			acf_register_block(array(
				'name'            => 'stages',
				'title'           => __('Этапы'),
				'description'     => __('Этапы'),
				'render_template' => 'template-parts/blocks/stages.php',
				'category'        => 'common',
				'mode'            => 'edit',
				'icon'            => 'admin-users'
			));

			// end stages


		}

	}

	if( function_exists('acf_register_block') ) {
		add_action('acf/init', 'webjeb_acf_init');
	}

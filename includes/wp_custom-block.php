<?php

add_filter(
	'block_categories_all',
	function ($categories, $post) {
		return array_merge(
			$categories,
			array(
				array(
					'slug' => 'technopeak-theme-templates',
					'title' => 'Technopeak Bloks',
				)
			)
		);
	},
	10,
	2
);


add_action('admin_head', 'my_custom_styles');
function my_custom_styles() {
	echo '<style>
  :root {
    --content-width: 1840px;
    --container-offset: 40px;
    --container-width: calc(var(--content-width) + (var(--container-offset) * 2));
    --white-color: #ffffff;
    --black-color: #000000;
    --font-color: rgba(68, 68, 68, 0.70);
    --green-color: #20C4B2;
    --red-color: #FF006D;
    --violet-color: #8D6490;
    --grey-color: #F2F2F2;
  }
  </style>';
}



function admin_custom_styles()
{
	add_theme_support('editor-styles');
	add_editor_style(get_stylesheet_directory_uri() . '/assets/css/style.min.css');
}
add_action('after_setup_theme', 'admin_custom_styles');


/* 
* блок гутенберг
*/
function custom_register_blocks()
{

	// Проверяем, что функция доступна.
	if (function_exists('acf_register_block_type')) {
    
		acf_register_block_type(array(
			'name'              => 'service-head',
			'title'             => __('Service head'),
			'render_template'   => 'template-parts/blocks/service-head.php',
			'category'          => 'technopeak-theme-templates',
			'icon' => array(
				'foreground' => '#41b3e4',
				'src' => 'book-alt',
			),
		));

		acf_register_block_type(array(
			'name'              => 'service-about',
			'title'             => __('Service About'),
			'render_template'   => 'template-parts/blocks/service-about.php',
			'category'          => 'technopeak-theme-templates',
			'icon' => array(
				'foreground' => '#41b3e4',
				'src' => 'book-alt',
			),
		));

		acf_register_block_type(array(
			'name'              => 'service-benefits',
			'title'             => __('Service Benefits'),
			'render_template'   => 'template-parts/blocks/service-benefits.php',
			'category'          => 'technopeak-theme-templates',
			'icon' => array(
				'foreground' => '#41b3e4',
				'src' => 'book-alt',
			),
		));

		acf_register_block_type(array(
			'name'              => 'service-features',
			'title'             => __('Service Features'),
			'render_template'   => 'template-parts/blocks/service-features.php',
			'category'          => 'technopeak-theme-templates',
			'icon' => array(
				'foreground' => '#41b3e4',
				'src' => 'book-alt',
			),
		));

		acf_register_block_type(array(
			'name'              => 'service-clients',
			'title'             => __('Service Clients'),
			'render_template'   => 'template-parts/blocks/service-clients.php',
			'category'          => 'technopeak-theme-templates',
			'icon' => array(
				'foreground' => '#41b3e4',
				'src' => 'book-alt',
			),
		));

		acf_register_block_type(array(
			'name'              => 'content-block',
			'title'             => __('Content Block'),
			'render_template'   => 'template-parts/blocks/content-block.php',
			'category'          => 'technopeak-theme-templates',
			'icon' => array(
				'foreground' => '#41b3e4',
				'src' => 'book-alt',
			),
		));

		acf_register_block_type(array(
			'name'              => 'industry-block',
			'title'             => __('Industry Block'),
			'render_template'   => 'template-parts/blocks/industry-block.php',
			'category'          => 'technopeak-theme-templates',
			'icon' => array(
				'foreground' => '#41b3e4',
				'src' => 'book-alt',
			),
		));

		acf_register_block_type(array(
			'name'              => 'services-group',
			'title'             => __('Services Group'),
			'render_template'   => 'template-parts/blocks/services-group.php',
			'category'          => 'technopeak-theme-templates',
			'icon' => array(
				'foreground' => '#41b3e4',
				'src' => 'book-alt',
			),
		));

		acf_register_block_type(array(
			'name'              => 'case-block',
			'title'             => __('Case Block'),
			'render_template'   => 'template-parts/blocks/case-block.php',
			'category'          => 'technopeak-theme-templates',
			'icon' => array(
				'foreground' => '#41b3e4',
				'src' => 'book-alt',
			),
		));

	}
}
add_action('acf/init', 'custom_register_blocks');

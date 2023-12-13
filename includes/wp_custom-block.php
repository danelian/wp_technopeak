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

	}
}
add_action('acf/init', 'custom_register_blocks');

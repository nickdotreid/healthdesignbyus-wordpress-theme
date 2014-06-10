<?php
/**
 * Custom functions
 */

function register_menu() {
	 register_nav_menu( 'share_links', _('Main share links.') );
}
add_action('init', 'register_menu');

function hdbus_register_custom_fields(){
	if(function_exists("register_field_group"))
	{
		register_field_group(array (
			'id' => 'acf_post-color',
			'title' => 'Post Color',
			'fields' => array (
				array (
					'key' => 'field_5393808fedeb8',
					'label' => 'Color',
					'name' => 'color',
					'type' => 'color_picker',
					'instructions' => 'Pick a color to use as the background color',
					'default_value' => '',
				),
			),
			'location' => array (
				array (
					array (
						'param' => 'post_type',
						'operator' => '==',
						'value' => 'page',
						'order_no' => 0,
						'group_no' => 0,
					),
				),
			),
			'options' => array (
				'position' => 'normal',
				'layout' => 'no_box',
				'hide_on_screen' => array (
				),
			),
			'menu_order' => 0,
		));
	}
}
add_action('init', 'hdbus_register_custom_fields');
<?php
/**
 * Custom functions
 */

function register_menu() {
	 register_nav_menu( 'share_links', _('Main share links.') );
}
add_action('init', 'register_menu');
<?php

/**
 * Plugin Name:       Header Block
 * Description:       Header Block for Gutenberg Editor
 * Requires at least: 6.1
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            mizan42047
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       header
 *
 * @package           create-block
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}


function create_block_toehold_block_init()
{
    $blocks = [
        "header-container",
        "header-topbar",
        "header-navbar",
        "navmenu",
        "submenu",
        "menu-item",
        "topbar-divider",
        "button",
    ];

    foreach ($blocks as $block) {
        register_block_type(plugin_dir_path(__FILE__) . 'build/blocks/' . $block);
    }
}

add_action('init', 'create_block_toehold_block_init');

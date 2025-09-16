<?php
/**
 * Plugin Name: Events Manager - Gutenberg fix
 * Plugin URI: https://github.com/audunmb/wp-events-plugin-gutenberg-fix
 * Description: Fix display of event categories and tags when using the Gutenberg editor to edit events in the Events Manager plugin.
 * Author: audun
 * Version: 0.3
 * License: GPLv3
 * License URI: https://www.gnu.org/licenses/gpl-3.0.html
 */

function bsos_gutenberg_categories_fix($args)
{
    $args['show_in_rest'] = true;
    return $args;
}

add_filter('em_cpt_categories', 'bsos_gutenberg_categories_fix');
add_filter('em_cpt_tags', 'bsos_gutenberg_categories_fix');

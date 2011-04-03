<?php
/**
 * Elgg Google buzz widget
 * This plugin allows users to show their Google buzz feed to display on their profile
 * 
 * @package ElggGoogleBuzz
 */

register_elgg_event_handler('init', 'system', 'googlebuzz_init');

function googlebuzz_init() {
	elgg_extend_view('css', 'googlebuzz/css');
	add_widget_type('googlebuzz', elgg_echo('googlebuzz:title'), elgg_echo('googlebuzz:info'));
}

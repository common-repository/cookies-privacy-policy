<?php
if( ! defined( 'ABSPATH' ) ) exit;
global $wpdb;
$table_content = $wpdb->prefix . 'cookies_content';
$query = $wpdb->get_results( "SELECT * FROM $table_content ORDER BY id DESC LIMIT 1" );
    foreach ($query as $table) {
	$titles = esc_textarea($table->title);
	$content = esc_textarea($table->content);
	$linkText = esc_textarea($table->linkText);
	$link = esc_textarea($table->link);
	$button = esc_textarea($table->button);
	$image = esc_textarea($table->image);
}
$table_colors = $wpdb->prefix . 'cookies_color';
$query_color = $wpdb->get_results( "SELECT * FROM $table_colors ORDER BY id DESC LIMIT 1" );
    foreach ($query_color as $table_color) {
	$titleColor = esc_textarea($table_color->titleColor);
	$contentColor = esc_textarea($table_color->contentColor);
	$buttonColor = esc_textarea($table_color->botonColor);
	$buttonBackground = esc_textarea($table_color->buttonBackground);
	$background = esc_textarea($table_color->background);
	$linkColor = esc_textarea($table_color->linkColor);
	$botonHover = esc_textarea($table_color->botonHover);
	$borderContainer = esc_textarea($table_color->borderContainer);
}


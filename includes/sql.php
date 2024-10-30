<?php
function cookies_install_db() {
    global $wpdb;
    $cookies_content     = $wpdb->prefix . 'cookies_content';
    $cookies_color  = $wpdb->prefix . 'cookies_color'; 
    $charset_collate = $wpdb->get_charset_collate();
    $sql = "CREATE TABLE $cookies_content (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        title varchar(100) NOT NULL,
        content varchar(255) NOT NULL,
        button varchar(55) NOT NULL,
        linkText varchar(100) NOT NULL,
        link text NOT NULL,
        image varchar(255) NOT NULL,
        UNIQUE KEY id (id)
    ) $charset_collate;
    CREATE TABLE $cookies_color (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        titleColor varchar(150) NOT NULL,
        contentColor varchar(150) NOT NULL,
        botonColor varchar(150) NOT NULL,
        background varchar(150) NOT NULL,
        linkColor varchar(150) NOT NULL,
        buttonBackground varchar(150) NOT NULL,
        botonHover varchar(150) NOT NULL,
        borderContainer varchar(150) NOT NULL,
        UNIQUE KEY id (id)
    ) $charset_collate;";
    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
    dbDelta( $sql );
}
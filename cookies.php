<?php
/**
* Plugin Name: Cookies Privacy Policy
* Description: this is plugin for cookies
* Version: 1.0.0
* Author: Hamid Ezzaki
* Text Domain: cookies-privacy-policy
*
* @category Cookies
* @package  Cookies
* @author   Hamid Ezzaki <at_la@hotmail.es>
* @license  GPLv2 http://www.gnu.org/licenses/gpl-2.0.txt
* @link     https://siteweb.es
*/
namespace ck\cookies_privacy_policy;
if( ! defined( 'ABSPATH' ) ) exit;
$cookies_dir = plugin_dir_path( __FILE__ );
include_once( $cookies_dir . 'includes/sql.php' );
register_activation_hook(__FILE__, 'cookies_install_db');
include_once( $cookies_dir . 'includes/show.php' );
/* add plugin to head */
add_action("wp_head", __NAMESPACE__ . "\header_cookies_show");
function header_cookies_show(){
	$cookies_dir = plugin_dir_path( __FILE__ );
	$cookie_js = 'js/cookie.js';
	$cookie_css = 'css/cookie.css';
	wp_enqueue_script( 'cookies-privacy-policy', plugins_url( $cookie_js, __FILE__ ), array( 'jquery' ), true );
	wp_register_style('cookies-privacy-policy', plugins_url( $cookie_css, __FILE__ ), array());
	wp_enqueue_style( 'cookies-privacy-policy' );
	include_once( $cookies_dir . 'includes/js.php' );
}
$icon =  plugin_dir_url( dirname( __FILE__ ) ).'cookies-privacy-policy/img/cookies.png';
$icon1 =  plugin_dir_url( dirname( __FILE__ ) ).'cookies-privacy-policy/img/cookies-1.png';
$icon2 =  plugin_dir_url( dirname( __FILE__ ) ).'cookies-privacy-policy/img/cookies-2.png';
$icon3 =  plugin_dir_url( dirname( __FILE__ ) ).'cookies-privacy-policy/img/cookies-3.png';
$icon4 =  plugin_dir_url( dirname( __FILE__ ) ).'cookies-privacy-policy/img/cookies-4.png';
/* create menu admin */
add_action("admin_menu", __NAMESPACE__ . "\cookies_menu_admin");
/**
 * Add Menu to admin wordpress
 *
 * @return void
 */
function cookies_menu_admin()
{
  add_menu_page("Cookies", "Cookies", "manage_options",
        "Cookies_menu", __NAMESPACE__ . "\cookies_admin", "dashicons-admin-site", 75);
}
function cookies_activation_redirect( $plugin ) {
    if( $plugin == plugin_basename( __FILE__ ) ) {
        exit( wp_redirect( admin_url( 'admin.php?page=Cookies_menu' ) ) );
    }
}
add_action( 'activated_plugin', 'cookies_activation_redirect' );  
function sweet_alert_cookies() {
  
    wp_enqueue_script( 'sweetalert2', plugin_dir_url( __FILE__ ) . 'js/sweetalert2.min.js', array(), '1.0' );
}
add_action( 'admin_enqueue_scripts', __NAMESPACE__ . '\sweet_alert_cookies' );
function cookies_admin(){
	global $icon, $icon1, $icon2, $icon3, $icon4, $titles, $content, $link, $linkText, $button, $image, $buttonColor, $contentColor, $titleColor, $background, $linkColor, $buttonBackground, $botonHover;
	global $borderContainer;
	$cookies_dir = plugin_dir_path( __FILE__ );
	global $cookies_dir;
	$style = 'css/style.css';
	$sweetAlertJs = 'js/sweetalert2.all.min.js';
	$sweetAlertCss = 'css/sweetalert2.css';
	wp_register_style('sweetalert2', plugins_url( $sweetAlertCss, __FILE__ ), array() );
	wp_enqueue_style( 'sweetalert2' );
	wp_register_style('cookies-privacy-policy', plugins_url( $style, __FILE__ ), array() );
	wp_enqueue_style( 'cookies-privacy-policy' );
	include_once( $cookies_dir . 'includes/form.php' );
    wp_register_script('sweetalert2', plugins_url($sweetAlertJs, __FILE__));
 }
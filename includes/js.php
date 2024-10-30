<?php if( ! defined( 'ABSPATH' ) ) exit; 
global $icon, $icon1, $icon2, $icon3, $icon4, $titles, $content, $link, $linkText, $button, $image, $buttonColor, $contentColor, $titleColor, $background, $linkColor, $buttonBackground, $botonHover;
global $borderContainer;
?>
  <style type="text/css">
	    .cookieConsentContainer .cookieButton a {
		     background: <?php echo esc_attr( $buttonBackground ); ?>;
		     color: <?php echo esc_attr( $buttonColor ); ?>;
	     }
	     .cookieConsentContainer .cookieTitle a {
	         color: <?php echo esc_attr( $titleColor ); ?>;
	     }
	     .cookieConsentContainer .cookieDesc p {
	     	 color : <?php echo esc_attr( $contentColor ); ?>;
	     }
	     .cookieConsentContainer .cookieDesc a {
	     	color: <?php echo esc_attr( $linkColor ); ?>;
	     }
	     .cookieConsentContainer .cookieButton a:hover {
	     	 background: <?php echo esc_attr( $botonHover ); ?>;
	     }
	     .cookieConsentContainer{
	     	background: <?php echo esc_attr( $background ); ?>;
	     }
	     .cookieConsentContainer {
	        border: 1px solid <?php echo esc_attr( $borderContainer ); ?>;
	     }
    </style>
	<script type="text/javascript">
	// --- Config --- //
	var purecookieTitle = "<img src='<?php echo esc_attr( $image ); ?>' style='width:81px;'><?php echo esc_attr( " " . $titles ); ?>"; // Title
	var purecookieDesc = "<?php echo esc_attr( $content ); ?>"; // Description
	var purecookieLink = '<a href="<?php echo esc_attr( $link ); ?>"><?php echo esc_attr( $linkText ); ?></a>'; // Cookiepolicy link
	var purecookieButton = "<?php echo esc_attr( $button ); ?>"; // Button text
	// ---        --- //
	</script>
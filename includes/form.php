<?php if( ! defined( 'ABSPATH' ) ) exit; ?>
	<h1 class="header-coookie">Cookies Privacy Policy</h1>
	<form action="<?php echo esc_attr( $_SERVER['REQUEST_URI'] ); ?>" method="POST">
		<div class="container">
			<div class="title">
				<label class="title-label">Title</label>
				<input type="text" name="title" class="title-input" value="<?php echo $titles; ?>" data-validation="required">
			</div>
			<div class="content">
				<label class="content-label">Content</label>
				<textarea name="content" class="content-input" rows="10" cols="50" data-validation="required"><?php echo $content; ?></textarea>
			</div>
			<div class="boton">
			    <label class="boton-label">Button</label>
			    <input type="text" name="button" class="boton-input" value="<?php echo $button; ?>" data-validation="required">
			</div>
			<div class="link-text">
			    <label class="link-text-label">Link Text</label>
			    <input type="text" name="linkText" class="link-text-input" value="<?php echo $linkText; ?>" data-validation="required">	
			</div>
			<div class="link">
			    <label class="link-label">Link</label>
			    <input type="text" name="link" class="link-input" value="<?php echo $link; ?>" data-validation="required">	
			</div>
			<div class="image">
			    <label class="image-label">Image</label>
			    <div class="radio">
				    <div class="image-radio">
				           <input type="radio" name="image" class="image-input" value="<?php echo esc_attr( $icon ); ?>" id="image1-input">
				           <img src="<?php echo $icon; ?>" class="image-cookies" />
				    </div>
				    <div class="image-radio">
				            <input type="radio" name="image" class="image-input" value="<?php echo esc_attr( $icon1 ); ?>" id="image2-input">
				            <img src="<?php echo $icon1; ?>" class="image-cookies" />
				    </div>
				    <div class="image-radio">
				             <input type="radio" name="image" class="image-input" value="<?php echo esc_attr( $icon2 ); ?>" id="image3-input">
				             <img src="<?php echo $icon2; ?>" class="image-cookies" />
				    </div>
				    <div class="image-radio">
				             <input type="radio" name="image" class="image-input" value="<?php echo esc_attr( $icon3 ); ?>" id="image4-input">
				             <img src="<?php echo $icon3; ?>" class="image-cookies" />
				    </div>
				    <div class="image-radio">
				             <input type="radio" name="image" class="image-input" value="<?php echo esc_attr( $icon4 ); ?>" id="image5-input">
				             <img src="<?php echo $icon4; ?>" class="image-cookies" />
				    </div>
			    </div>			
			</div>	    
		</div>
		<p></p>
		<div class="container">
		    <div class="title-color">
				<label class="title-color-label">Background</label>
				<input type="color" name="background" class="title-color-input" value="<?php echo $background; ?>" id="title-color-input">
			</div>
			<div class="title-color">
				<label class="title-color-label">Border Container</label>
				<input type="color" name="borderContainer" class="title-color-input" value="<?php echo $borderContainer; ?>" id="title-color-input">
			</div>
			<div class="title-color">
				<label class="title-color-label">Title Color</label>
				<input type="color" name="titleColor" class="title-color-input" value="<?php echo $titleColor; ?>" id="title-color-input">
			</div>
			<div class="content-color">
				<label class="content-color-label">Content Color</label>
				<input type="color" name="contentColor" class="content-color-input" value="<?php echo $contentColor; ?>" id="title1-color-input">
			</div>
			<div class="content-color">
				<label class="content-color-label">Link Color</label>
				<input type="color" name="linkColor" class="content-color-input" value="<?php echo $linkColor; ?>" id="title1-color-input">
			</div>
			<div class="boton-color">
			    <label class="boton-color-label">Button Background</label>
			    <input type="color" name="buttonBackground" class="boton-color-input" value="<?php echo $buttonBackground; ?>" id="title2-color-input">
			</div>
			<div class="boton-color">
			    <label class="boton-color-label">Button Color</label>
			    <input type="color" name="botonColor" class="boton-color-input" value="<?php echo $buttonColor; ?>" id="title2-color-input">
			</div>
			<div class="boton-color">
			    <label class="boton-color-label">Button Hover</label>
			    <input type="color" name="botonHover" class="boton-color-input" value="<?php echo $botonHover; ?>" id="title2-color-input">	
			</div>	    
		</div>
		<p></p>
		<div>
			<button type="submit" name="save" id="btnForm" class="button">Saves Changes</button>
		</div>
	</form>
	<script type="text/javascript">
	     image =  document.getElementById("image1-input").value;
	     image1 = document.getElementById("image2-input").value;
	     image2 = document.getElementById("image3-input").value;
	     image3 = document.getElementById("image4-input").value;
	     image4 = document.getElementById("image5-input").value;
	     imageCookie = "<?php echo $image; ?>";
	    if (image === imageCookie) {
		       document.querySelector('#image1-input').checked = true;
		}else if(image1 === imageCookie){
			document.querySelector('#image2-input').checked = true;
		}else if(image2 === imageCookie){
			document.querySelector('#image3-input').checked = true;
		}else if(image3 === imageCookie){
			document.querySelector('#image4-input').checked = true;
		}else if(image4 === imageCookie){
			document.querySelector('#image5-input').checked = true;
			}
	</script>
<?php 
     include_once( $cookies_dir . 'includes/register.php' ); 
?>
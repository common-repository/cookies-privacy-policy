<?php
 require_once( trailingslashit( ABSPATH ) .'wp-load.php' );
 global $wpdb;
 if (isset($_POST['save'])
      && !empty($_POST)
      && $_POST['title'] != ''
      && $_POST['content'] != ''
      && $_POST['button'] != ''
      && $_POST['linkText'] != ''
      && $_POST['link'] != ''
      && $_POST['image'] != ''
      && $_POST['titleColor'] != ''
      && $_POST['contentColor'] != ''
      && $_POST['botonColor'] != ''
      && $_POST['background'] != ''
      && $_POST['linkColor'] != ''
      && $_POST['buttonBackground'] != ''
      && $_POST['botonHover'] != ''
      && $_POST['borderContainer'] != ''
  ){
  $table_cookies = $wpdb->prefix . 'cookies_content';
  $table_cookies_colors = $wpdb->prefix . 'cookies_color';
  $titles = sanitize_text_field($_POST['title']);
  $content = sanitize_text_field($_POST['content']);
  $button = sanitize_text_field($_POST['button']);
  $linkText = sanitize_text_field($_POST['linkText']);
  $link = sanitize_text_field($_POST['link']);
  $image = sanitize_text_field($_POST['image']);
  $titleColor = sanitize_text_field($_POST['titleColor']);
  $contentColor = sanitize_text_field($_POST['contentColor']);
  $botonColor = sanitize_text_field($_POST['botonColor']);
  $background = sanitize_text_field($_POST['background']);
  $linkColor = sanitize_text_field($_POST['linkColor']);
  $buttonBackground = sanitize_text_field($_POST['buttonBackground']);
  $botonHover = sanitize_text_field($_POST['botonHover']);
  $borderContainer = sanitize_text_field($_POST['borderContainer']);
  $wpdb->insert("wp_cookies_content", array(
      'title' => $titles,
      'content' => $content,
      'button' => $button,
      'linkText' => $linkText,
      'link' => $link,
      'image' => $image
      )); 
  $wpdb->insert("wp_cookies_color", array(
      'titleColor' => $titleColor,
      'contentColor' => $contentColor,
      'botonColor' => $botonColor,
      'background' => $background,
      'linkColor' => $linkColor,
      'buttonBackground' => $buttonBackground,
      'botonHover' => $botonHover,
      'borderContainer' => $borderContainer
      ));
?>
     <script type="text/javascript">
        Swal.fire(
          'Good job!',
          'You clicked the button!',
          'success'
        ).then(function(){
           location.reload();
       });
     </script>
<?php
 }else if(isset($_POST['save'])
      || $_POST['title'] = ''
      || $_POST['content'] = ''
      || $_POST['button'] = ''
      || $_POST['linkText'] = ''
      || $_POST['link'] = ''
      || $_POST['image'] = ''
      || $_POST['titleColor'] = ''
      || $_POST['contentColor'] = ''
      || $_POST['botonColor'] = ''
      || $_POST['background'] = ''
      || $_POST['linkColor'] = ''
      || $_POST['buttonBackground'] = ''
      || $_POST['botonHover'] = ''
      || $_POST['borderContainer'] = ''
      ){ ?>
    <script type="text/javascript">
      Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'All fields are required!',
      }).then(function(){
           location.reload();
       });
    </script>
  <?php 
     }
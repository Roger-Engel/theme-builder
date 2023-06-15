<?

function yourtheme_enqueue_styles() {
  wp_enqueue_style( 'yourtheme-navbar', get_template_directory_uri() . '/css/navbar.css' );
  wp_enqueue_style( 'yourtheme-footer', get_template_directory_uri() . '/css/footer.css' );
}

add_action( 'wp_enqueue_scripts', 'yourtheme_enqueue_styles' );

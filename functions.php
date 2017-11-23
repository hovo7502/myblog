<?php 
function silver_widgets_init() {
  // Area 1, located at the top of the sidebar.
  register_sidebar( array(
    'name' =>  'SideBar',
    'id' => 'sidebar',
    'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
  ) );
}
add_action( 'widgets_init', 'silver_widgets_init' ); 
 
function custom_excerpt_length( $length ) {
	return 70;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function custom_excerpt_more( $post ) {
	return '... <a href="'.get_permalink($post->ID).'" class="more-link" >Lire la suite &raquo;</a>';
}
add_filter( 'excerpt_more', 'custom_excerpt_more' );

// Add theme support - Post Thumbnails
add_theme_support( 'post-thumbnails' );

include_once dirname(__FILE__).'/shortecodes.php';

include_once dirname(__FILE__).'/shortecod_button.php';

add_filter( 'get_avatar' , 'my_custom_avatar' , 1 , 5 );

// Add custom avatar
function my_custom_avatar( $avatar, $id_or_email, $size, $default, $alt ) {
    $user = false;

    if ( is_numeric( $id_or_email ) ) {

        $id = (int) $id_or_email;
        $user = get_user_by( 'id' , $id );

    } elseif ( is_object( $id_or_email ) ) {

        if ( ! empty( $id_or_email->user_id ) ) {
            $id = (int) $id_or_email->user_id;
            $user = get_user_by( 'id' , $id );
        }

    } else {
        $user = get_user_by( 'email', $id_or_email ); 
    }

    if ( $user && is_object( $user ) ) {

        if ( $user->data->ID == '2' ) {
            $avatar =get_template_directory_uri() .'/images/g.jpg';
            $avatar = "<img alt='{$alt}' src='{$avatar}' class='avatar avatar-{$size} photo' height='{$size}' width='{$size}' />";
        }

    }

    return $avatar;
}

// Allow SVG through WordPress Media Uploader
function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

add_shortcode('get_current_language', 'wpml_get_lang');
function wpml_get_lang() {
  return ICL_LANGUAGE_CODE;
}

// Js files integration and string translations in js files. 
//Please remove from header all js files and include hear what you need in your project. Jquery library and functions js files already connected.
function pw_load_scripts() {
  wp_enqueue_script('jquery'); //jquery library
  wp_enqueue_script('bxslider', get_template_directory_uri() . '/js/jquery.bxslider-rahisified.min.js');
  wp_enqueue_script('fancybox', get_template_directory_uri() . '/js/components/jquery.fancybox.js');
  wp_enqueue_script('fancybox-pack', get_template_directory_uri() . '/css/components/jquery.fancybox.pack.js');
  wp_enqueue_script('fancybox-media', get_template_directory_uri() . '/js/components/jquery.fancybox-media.js');
  wp_enqueue_script('lazyload', get_template_directory_uri() . '/js/components/jquery.lazyload.js');
  wp_enqueue_script('lazyloadxt', get_template_directory_uri() . '/js/components/jquery.lazyloadxt.extra.min.js');
  wp_enqueue_script('svg-injector', get_template_directory_uri() . '/js/svg-injector.min.js');
  wp_enqueue_script('dotdotdot', get_template_directory_uri() . '/js/jquery.dotdotdot.min.js');
  wp_enqueue_script('functions', get_template_directory_uri() . '/js/functions.js'); 
  wp_localize_script('pw-script', 'pw_script_vars', array(
      'alert' => __('shooga', 'testgroup'), 
    )
  );
  wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
  // wp_enqueue_style('media-queries', get_template_directory_uri() . '/css/media.queries.css');
  wp_enqueue_style('bxslider', get_template_directory_uri() . '/css/jquery.bxslider.css');
  wp_enqueue_style('fancybox', get_template_directory_uri() . '/css/components/jquery.fancybox.css');
  wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'pw_load_scripts');

// Custom login page

// Custom stylesheet
function custom_login_css() {
echo '<link rel="stylesheet" type="text/css" href="'.get_stylesheet_directory_uri().'/css/login-styles.css" />';
}
add_action('login_head', 'custom_login_css');

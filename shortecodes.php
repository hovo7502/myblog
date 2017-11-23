<?php 

// BUTTON
function button( $attr, $content = null ) {
  return '<a href="' . $attr['link'] . '" class="button"><span class="button-text">' . $content . '</span></a>';   
}
add_shortcode('BUTTON', 'button');
// END BUTTON

// YEAR
function year( $attr, $content = null ) {
	ob_start();  ?>
		<span class="year"><?php echo date('Y'); ?></span>
  	<?php return ob_get_clean();     
}
add_shortcode('YEAR', 'year');
// END BUTTON

?>
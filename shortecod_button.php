<?php
add_action('media_buttons','add_sc_select',11);
function add_sc_select(){
    global $shortcode_tags;
    
     /* ------------------------------------- */
     /* enter names of shortcode to exclude bellow */
     /* ------------------------------------- */
    $exclude = array("wp_caption", "embed");
    echo '<select id="sc_select"><option>Shortcode</option>';
      if($key="BUTTON" ){
        if(!in_array($key,$exclude)){
          $shortcodes_list .= '<option value="[' . $key . ' link= ]text here[/' . $key . ']">' . $key . '</option>';
        }
      }
      if($key="YEAR" ){
        if(!in_array($key,$exclude)){
          $shortcodes_list .= '<option value="[' . $key . ']">' . $key . '</option>';
        }
      }
    echo $shortcodes_list;
    echo '</select>';
}
add_action('admin_head', 'button_js');
function button_js() { ?>
  <script type="text/javascript">
    jQuery(document).on('change','#sc_select',function () {
      var selectedOption = jQuery(this).val();
      if(selectedOption !== 'Shortcode'){
        send_to_editor(selectedOption);
        return false;
      }
    });
  </script>
<?php }
?>
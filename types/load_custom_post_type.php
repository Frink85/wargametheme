<?php
function register_post_types(){
  $dirname =  WP_CONTENT_DIR . '/themes/'.TEMPLATE_NAME_DIRECTORY.'/types/';
  $dir = opendir($dirname);

  while($file = readdir($dir)) {
    if($file != '.' && $file != '..' && !is_dir($dirname.$file) && $file != basename(__FILE__))
    {
      include $file;
      $type = str_replace(array(' ', '\''), array('_', ''), strip_accents(strtolower($labels['singular_name'])));
      register_post_type($type, $args);
    }
  }
}
add_action( 'init', 'register_post_types' );
?>
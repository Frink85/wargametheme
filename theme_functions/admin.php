<?php
// function for administration / Permet de customiser l'administration

function my_custom_dashboard_widgets() {
    global $wp_meta_boxes;
    if(get_current_user_role() == 'Éditeur'){
         wp_add_dashboard_widget('custom_help_widget', 'Bienvenue dans l\'administration du site Envol', 'custom_dashboard_help');
    }
}

function custom_dashboard_help() {
    include  WP_CONTENT_DIR . '/themes/'.TEMPLATE_NAME_DIRECTORY.'/includes/dasboard_welcome.php';
}

// and we hook our function via
add_action('wp_dashboard_setup', 'my_custom_dashboard_widgets');

?>
<?php
 
/**
 * Import des diffŽrentes parties du fichier function :
 * - configuration.php : DŽfinition des constentes du template.
 * - load_assets.php : Appel des fichiers css et js du front Ends
 * - utils.php : fonctions communes ˆ tous les sites
 * - display.php : fonctions d'affichage
 * - admin.php : Affichage customiser de l'administration client
 * - ajax.php : Function ajax
 * - load_custom_post_type.php : 
**/

include "theme_functions/configuration.php";
include "theme_functions/load_assets.php";
include "theme_functions/utils.php";
include "theme_functions/display.php";
include "theme_functions/admin.php";
include "theme_functions/ajax.php";
include "theme_functions/custom.php";
include "types/load_custom_post_type.php";


// Supprime l'admin bar du site lorsque nous sommes connecte et que nous visitons le site
add_filter('show_admin_bar', '__return_false');

// Load acf categorie fields
if (function_exists('register_field')) {
  register_field('Categories_field', dirname(__File__) . '/acf_plugin/categories.php');
  register_field('Unique_key_field', dirname(__File__) . '/acf_plugin/unique_key.php');
}
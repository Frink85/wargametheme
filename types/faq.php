<?php
// Custom post_type
$labels = array(
    'name' => 'FAQ',
    'singular_name' => 'Question',
    'add_new' => 'Ajouter',
    'add_new_item' => 'Ajouter une nouvelle question',
    'edit_item' => 'Modifier la question',
    'new_item' => 'Nouvelle question',
    'view_item' => 'Voir la question',
    'search_items' => 'Chercher une question',
    'not_found' =>  'Aucune question trouvée',
    'not_found_in_trash' => 'Aucune question trouvée dans la corbeille',
    'parent_item_colon' => 'Question parente :',
    'menu_name' => 'FAQ'
);

$args = array(
    'labels' => $labels,
    'description' => 'Questions pour la page FAQ',
    'public' => true,
    'exclude_from_search'=> false,
    'publicly_queryable' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'has_archive' => true,
    'hierarchical' => false,
    'menu_position' => 5,
    'supports' => array('title'),
    'can_export' => true,
);
?>
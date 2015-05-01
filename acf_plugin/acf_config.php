<?php
/**
 * Activate Add-ons
 * Here you can enter your activation codes to unlock Add-ons to use in your theme.
 * Since all activation codes are multi-site licenses, you are allowed to include your key in premium themes.
 */

function my_acf_settings( $options )
{
    // activate add-ons
    $options['activation_codes']['repeater'] = 'XXXX-XXXX-XXXX-XXXX';
    $options['activation_codes']['options_page'] = 'XXXX-XXXX-XXXX-XXXX';
    $options['activation_codes']['flexible_content'] = 'XXXX-XXXX-XXXX-XXXX';
    $options['activation_codes']['gallery'] = 'XXXX-XXXX-XXXX-XXXX';

    // setup other options (http://www.advancedcustomfields.com/docs/filters/acf_settings/)

    return $options;

}
add_filter('acf_settings', 'my_acf_settings');


/**
 * Enregistrez des groupes de champs
 * La fonction register_field_group accepte 1 tableau qui contient les données nécessaire à l‘enregistrement d'un groupe de champs
 * Vous pouvez modifier ce tableau selon vos besoins. Cela peut toutefois provoquer des erreurs dans les cas où le tableau ne serait plus compatible avec ACF
 * Ce code doit être traité à chaque accès au fichier functions.php
 */

// if(function_exists("register_field_group"))
// {
//    //register_field_group(array (
//         'id' => '510fe2ca3d45e',
//         'title' => 'Chapeau',
//         'fields' =>
//         array (
//             0 =>
//             array (
//                 'key' => 'field_11',
//                 'label' => 'Chapeau',
//                 'name' => '_chapeau',
//                 'type' => 'wysiwyg',
//                 'order_no' => 0,
//                 'instructions' => '',
//                 'required' => 1,
//                 'conditional_logic' =>
//                 array (
//                     'status' => 0,
//                     'rules' =>
//                     array (
//                         0 =>
//                         array (
//                             'field' => 'null',
//                             'operator' => '==',
//                         ),
//                     ),
//                     'allorany' => 'all',
//                 ),
//                 'default_value' => '',
//                 'toolbar' => 'basic',
//                 'media_upload' => 'no',
//                 'the_content' => 'no',
//             ),
//         ),
//         'location' =>
//         array (
//             'rules' =>
//             array (
//                 0 =>
//                 array (
//                     'param' => 'post_type',
//                     'operator' => '==',
//                     'value' => 'animation',
//                     'order_no' => 0,
//                 ),
//                 1 =>
//                 array (
//                     'param' => 'post_type',
//                     'operator' => '==',
//                     'value' => 'artiste',
//                     'order_no' => 1,
//                 ),
//                 2 =>
//                 array (
//                     'param' => 'post_type',
//                     'operator' => '==',
//                     'value' => 'evenement',
//                     'order_no' => 2,
//                 ),
//                 3 =>
//                 array (
//                     'param' => 'post_type',
//                     'operator' => '==',
//                     'value' => 'rubrique_evenement',
//                     'order_no' => 3,
//                 ),
//                 4 =>
//                 array (
//                     'param' => 'post_type',
//                     'operator' => '==',
//                     'value' => 'bientot_c',
//                     'order_no' => 4,
//                 ),
//                 6 =>
//                 array (
//                     'param' => 'ef_taxonomy',
//                     'operator' => '==',
//                     'value' => 'all',
//                     'order_no' => 6,
//                 ),
//                 7 =>
//                 array (
//                     'param' => 'page',
//                     'operator' => '==',
//                     'value' => '15',
//                     'order_no' => 7,
//                 ),
//             ),
//             'allorany' => 'any',
//         ),
//         'options' =>
//         array (
//             'position' => 'normal',
//             'layout' => 'no_box',
//             'hide_on_screen' =>
//             array (
//                 0 => 'revisions',
//             ),
//         ),
//         'menu_order' => 0,
//     ));
//     register_field_group(array (
//         'id' => '510fe2ca51fe4',
//         'title' => 'Coordonnées de l’entreprise',
//         'fields' =>
//         array (
//             0 =>
//             array (
//                 'key' => 'field_1',
//                 'label' => 'Rue',
//                 'name' => '_rue',
//                 'type' => 'text',
//                 'order_no' => 0,
//                 'instructions' => '',
//                 'required' => 0,
//                 'conditional_logic' =>
//                 array (
//                     'status' => 0,
//                     'rules' =>
//                     array (
//                         0 =>
//                         array (
//                             'field' => 'null',
//                             'operator' => '==',
//                         ),
//                     ),
//                     'allorany' => 'all',
//                 ),
//                 'default_value' => '7 rue de l’industrie',
//                 'formatting' => 'none',
//             ),
//             1 =>
//             array (
//                 'key' => 'field_2',
//                 'label' => 'complement',
//                 'name' => '_complement',
//                 'type' => 'text',
//                 'order_no' => 1,
//                 'instructions' => '',
//                 'required' => 0,
//                 'conditional_logic' =>
//                 array (
//                     'status' => 0,
//                     'rules' =>
//                     array (
//                         0 =>
//                         array (
//                             'field' => 'null',
//                             'operator' => '==',
//                             'value' => '',
//                         ),
//                     ),
//                     'allorany' => 'all',
//                 ),
//                 'default_value' => 'ZI La France',
//                 'formatting' => 'none',
//             ),
//             2 =>
//             array (
//                 'key' => 'field_3',
//                 'label' => 'Code postal',
//                 'name' => '_code_postal',
//                 'type' => 'text',
//                 'order_no' => 2,
//                 'instructions' => '',
//                 'required' => 0,
//                 'conditional_logic' =>
//                 array (
//                     'status' => 0,
//                     'rules' =>
//                     array (
//                         0 =>
//                         array (
//                             'field' => 'null',
//                             'operator' => '==',
//                             'value' => '',
//                         ),
//                     ),
//                     'allorany' => 'all',
//                 ),
//                 'default_value' => '85190 ',
//                 'formatting' => 'html',
//             ),
//             3 =>
//             array (
//                 'key' => 'field_4',
//                 'label' => 'Ville',
//                 'name' => '_ville',
//                 'type' => 'text',
//                 'order_no' => 3,
//                 'instructions' => '',
//                 'required' => 0,
//                 'conditional_logic' =>
//                 array (
//                     'status' => 0,
//                     'rules' =>
//                     array (
//                         0 =>
//                         array (
//                             'field' => 'null',
//                             'operator' => '==',
//                             'value' => '',
//                         ),
//                     ),
//                     'allorany' => 'all',
//                 ),
//                 'default_value' => 'Venansault',
//                 'formatting' => 'none',
//             ),
//             4 =>
//             array (
//                 'key' => 'field_5',
//                 'label' => 'Téléphone',
//                 'name' => '_telephone',
//                 'type' => 'text',
//                 'order_no' => 4,
//                 'instructions' => '',
//                 'required' => 0,
//                 'conditional_logic' =>
//                 array (
//                     'status' => 0,
//                     'rules' =>
//                     array (
//                         0 =>
//                         array (
//                             'field' => 'null',
//                             'operator' => '==',
//                             'value' => '',
//                         ),
//                     ),
//                     'allorany' => 'all',
//                 ),
//                 'default_value' => '02 51 06 22 90',
//                 'formatting' => 'none',
//             ),
//         ),
//         'location' =>
//         array (
//             'rules' =>
//             array (
//                 0 =>
//                 array (
//                     'param' => 'page',
//                     'operator' => '==',
//                     'value' => '11',
//                     'order_no' => 0,
//                 ),
//             ),
//             'allorany' => 'all',
//         ),
//         'options' =>
//         array (
//             'position' => 'normal',
//             'layout' => 'default',
//             'hide_on_screen' =>
//             array (
//                 0 => 'the_content',
//                 1 => 'excerpt',
//                 2 => 'custom_fields',
//                 3 => 'discussion',
//                 4 => 'comments',
//                 5 => 'revisions',
//                 6 => 'slug',
//                 7 => 'author',
//                 8 => 'format',
//                 9 => 'featured_image',
//                 10 => 'categories',
//                 11 => 'tags',
//                 12 => 'send-trackbacks',
//             ),
//         ),
//         'menu_order' => 0,
//     ));
//     register_field_group(array (
//         'id' => '510fe2ca59fda',
//         'title' => 'Courte description',
//         'fields' =>
//         array (
//             0 =>
//             array (
//                 'key' => 'field_16',
//                 'label' => 'Courte Description',
//                 'name' => '_courte_description',
//                 'type' => 'textarea',
//                 'order_no' => 0,
//                 'instructions' => 'Saisir une courte description pour l\'affichage par mots-clés en page d\'accueil',
//                 'required' => 0,
//                 'conditional_logic' =>
//                 array (
//                     'status' => 0,
//                     'rules' =>
//                     array (
//                         0 =>
//                         array (
//                             'field' => 'null',
//                             'operator' => '==',
//                         ),
//                     ),
//                     'allorany' => 'all',
//                 ),
//                 'default_value' => '',
//                 'formatting' => 'br',
//             ),
//         ),
//         'location' =>
//         array (
//             'rules' =>
//             array (
//                 0 =>
//                 array (
//                     'param' => 'post_type',
//                     'operator' => '==',
//                     'value' => 'artiste',
//                     'order_no' => 0,
//                 ),
//                 1 =>
//                 array (
//                     'param' => 'post_type',
//                     'operator' => '==',
//                     'value' => 'animation',
//                     'order_no' => 1,
//                 ),
//             ),
//             'allorany' => 'any',
//         ),
//         'options' =>
//         array (
//             'position' => 'normal',
//             'layout' => 'no_box',
//             'hide_on_screen' =>
//             array (
//             ),
//         ),
//         'menu_order' => 0,
//     ));
//     register_field_group(array (
//         'id' => '510fe2ca5c490',
//         'title' => 'Description',
//         'fields' =>
//         array (
//             0 =>
//             array (
//                 'key' => 'field_17',
//                 'label' => 'Description',
//                 'name' => '_description',
//                 'type' => 'wysiwyg',
//                 'order_no' => 0,
//                 'instructions' => '',
//                 'required' => 0,
//                 'conditional_logic' =>
//                 array (
//                     'status' => 0,
//                     'rules' =>
//                     array (
//                         0 =>
//                         array (
//                             'field' => 'null',
//                             'operator' => '==',
//                             'value' => '',
//                         ),
//                     ),
//                     'allorany' => 'all',
//                 ),
//                 'default_value' => '',
//                 'toolbar' => 'full',
//                 'media_upload' => 'yes',
//                 'the_content' => 'yes',
//             ),
//         ),
//         'location' =>
//         array (
//             'rules' =>
//             array (
//                 0 =>
//                 array (
//                     'param' => 'ef_taxonomy',
//                     'operator' => '==',
//                     'value' => 'all',
//                     'order_no' => 0,
//                 ),
//             ),
//             'allorany' => 'all',
//         ),
//         'options' =>
//         array (
//             'position' => 'normal',
//             'layout' => 'no_box',
//             'hide_on_screen' =>
//             array (
//             ),
//         ),
//         'menu_order' => 0,
//     ));
//     register_field_group(array (
//         'id' => '510fe2ca5e9ca',
//         'title' => 'Evènements liés',
//         'fields' =>
//         array (
//             0 =>
//             array (
//                 'key' => 'field_15',
//                 'label' => 'Evènements liés',
//                 'name' => '_events',
//                 'type' => 'relationship',
//                 'order_no' => 0,
//                 'instructions' => 'Produits évènementiels affichés dans les rubriques de produits événementiels',
//                 'required' => 0,
//                 'conditional_logic' =>
//                 array (
//                     'status' => 0,
//                     'rules' =>
//                     array (
//                         0 =>
//                         array (
//                             'field' => 'null',
//                             'operator' => '==',
//                         ),
//                     ),
//                     'allorany' => 'all',
//                 ),
//                 'post_type' =>
//                 array (
//                     0 => 'evenement',
//                 ),
//                 'taxonomy' =>
//                 array (
//                     0 => 'all',
//                 ),
//                 'max' => '',
//             ),
//         ),
//         'location' =>
//         array (
//             'rules' =>
//             array (
//                 0 =>
//                 array (
//                     'param' => 'post_type',
//                     'operator' => '==',
//                     'value' => 'rubrique_evenement',
//                     'order_no' => 0,
//                 ),
//             ),
//             'allorany' => 'all',
//         ),
//         'options' =>
//         array (
//             'position' => 'normal',
//             'layout' => 'no_box',
//             'hide_on_screen' =>
//             array (
//             ),
//         ),
//         'menu_order' => 0,
//     ));
//     register_field_group(array (
//         'id' => '510fe2ca610fb',
//         'title' => 'Image à la une',
//         'fields' =>
//         array (
//             0 =>
//             array (
//                 'key' => 'field_12',
//                 'label' => 'Image liée',
//                 'name' => '_image',
//                 'type' => 'image',
//                 'order_no' => 0,
//                 'instructions' => 'Dimensions minimales de l\'image : 658 x 386 px ',
//                 'required' => 0,
//                 'conditional_logic' =>
//                 array (
//                     'status' => 0,
//                     'rules' =>
//                     array (
//                         0 =>
//                         array (
//                             'field' => 'null',
//                             'operator' => '==',
//                         ),
//                     ),
//                     'allorany' => 'all',
//                 ),
//                 'save_format' => 'object',
//                 'preview_size' => 'thumbnail',
//             ),
//         ),
//         'location' =>
//         array (
//             'rules' =>
//             array (
//                 0 =>
//                 array (
//                     'param' => 'post_type',
//                     'operator' => '==',
//                     'value' => 'animation',
//                     'order_no' => 0,
//                 ),
//                 1 =>
//                 array (
//                     'param' => 'post_type',
//                     'operator' => '==',
//                     'value' => 'artiste',
//                     'order_no' => 1,
//                 ),
//                 2 =>
//                 array (
//                     'param' => 'post_type',
//                     'operator' => '==',
//                     'value' => 'evenement',
//                     'order_no' => 2,
//                 ),
//                 3 =>
//                 array (
//                     'param' => 'post_type',
//                     'operator' => '==',
//                     'value' => 'rubrique_evenement',
//                     'order_no' => 3,
//                 ),
//                 6 =>
//                 array (
//                     'param' => 'ef_taxonomy',
//                     'operator' => '==',
//                     'value' => 'all',
//                     'order_no' => 6,
//                 ),
//                 7 =>
//                 array (
//                     'param' => 'page',
//                     'operator' => '==',
//                     'value' => '15',
//                     'order_no' => 7,
//                 ),
//             ),
//             'allorany' => 'any',
//         ),
//         'options' =>
//         array (
//             'position' => 'side',
//             'layout' => 'default',
//             'hide_on_screen' =>
//             array (
//                 0 => 'excerpt',
//                 1 => 'custom_fields',
//                 2 => 'discussion',
//                 3 => 'comments',
//                 4 => 'revisions',
//                 5 => 'slug',
//                 6 => 'author',
//                 7 => 'format',
//                 8 => 'featured_image',
//                 9 => 'send-trackbacks',
//             ),
//         ),
//         'menu_order' => 0,
//     ));
//     register_field_group(array (
//         'id' => '510fe2ca6396a',
//         'title' => 'Image à la une *',
//         'fields' =>
//         array (
//             0 =>
//             array (
//                 'key' => 'field_13',
//                 'label' => 'Image liée',
//                 'name' => '_image',
//                 'type' => 'image',
//                 'order_no' => 0,
//                 'instructions' => '',
//                 'required' => 1,
//                 'conditional_logic' =>
//                 array (
//                     'status' => 0,
//                     'rules' =>
//                     array (
//                         0 =>
//                         array (
//                             'field' => 'null',
//                             'operator' => '==',
//                         ),
//                     ),
//                     'allorany' => 'all',
//                 ),
//                 'save_format' => 'object',
//                 'preview_size' => 'thumbnail',
//             ),
//         ),
//         'location' =>
//         array (
//             'rules' =>
//             array (
//                 0 =>
//                 array (
//                     'param' => 'post_type',
//                     'operator' => '==',
//                     'value' => 'bientot_c',
//                     'order_no' => 0,
//                 ),
//             ),
//             'allorany' => 'all',
//         ),
//         'options' =>
//         array (
//             'position' => 'side',
//             'layout' => 'default',
//             'hide_on_screen' =>
//             array (
//                 0 => 'excerpt',
//                 1 => 'custom_fields',
//                 2 => 'discussion',
//                 3 => 'comments',
//                 4 => 'revisions',
//                 5 => 'slug',
//                 6 => 'author',
//                 7 => 'format',
//                 8 => 'featured_image',
//                 9 => 'categories',
//                 10 => 'tags',
//                 11 => 'send-trackbacks',
//             ),
//         ),
//         'menu_order' => 0,
//     ));
//     register_field_group(array (
//         'id' => '510fe2ca65e3b',
//         'title' => 'Partenaire',
//         'fields' =>
//         array (
//             0 =>
//             array (
//                 'key' => 'field_8',
//                 'label' => 'Image',
//                 'name' => '_image',
//                 'type' => 'image',
//                 'order_no' => 0,
//                 'instructions' => '',
//                 'required' => 0,
//                 'conditional_logic' =>
//                 array (
//                     'status' => 0,
//                     'rules' =>
//                     array (
//                         0 =>
//                         array (
//                             'field' => 'null',
//                             'operator' => '==',
//                         ),
//                     ),
//                     'allorany' => 'all',
//                 ),
//                 'save_format' => 'object',
//                 'preview_size' => 'thumbnail',
//             ),
//             1 =>
//             array (
//                 'key' => 'field_9',
//                 'label' => 'Lien',
//                 'name' => '_lien',
//                 'type' => 'text',
//                 'order_no' => 1,
//                 'instructions' => '',
//                 'required' => 0,
//                 'conditional_logic' =>
//                 array (
//                     'status' => 0,
//                     'rules' =>
//                     array (
//                         0 =>
//                         array (
//                             'field' => 'null',
//                             'operator' => '==',
//                         ),
//                     ),
//                     'allorany' => 'all',
//                 ),
//                 'default_value' => '',
//                 'formatting' => 'none',
//             ),
//         ),
//         'location' =>
//         array (
//             'rules' =>
//             array (
//                 0 =>
//                 array (
//                     'param' => 'post_type',
//                     'operator' => '==',
//                     'value' => 'partenaire',
//                     'order_no' => 0,
//                 ),
//             ),
//             'allorany' => 'all',
//         ),
//         'options' =>
//         array (
//             'position' => 'normal',
//             'layout' => 'no_box',
//             'hide_on_screen' =>
//             array (
//                 0 => 'the_content',
//                 1 => 'excerpt',
//                 2 => 'custom_fields',
//                 3 => 'discussion',
//                 4 => 'comments',
//                 5 => 'revisions',
//                 6 => 'slug',
//                 7 => 'author',
//                 8 => 'format',
//                 9 => 'featured_image',
//                 10 => 'categories',
//                 11 => 'tags',
//                 12 => 'send-trackbacks',
//             ),
//         ),
//         'menu_order' => 0,
//     ));
//     register_field_group(array (
//         'id' => '510fe2ca69821',
//         'title' => 'Rubrique de l’artiste',
//         'fields' =>
//         array (
//             0 =>
//             array (
//                 'key' => 'field_22',
//                 'label' => 'Rubrique de l\'artiste',
//                 'name' => '_categorie',
//                 'type' => 'categories',
//                 'order_no' => 0,
//                 'instructions' => '',
//                 'required' => 1,
//                 'conditional_logic' =>
//                 array (
//                     'status' => 0,
//                     'rules' =>
//                     array (
//                         0 =>
//                         array (
//                             'field' => 'null',
//                             'operator' => '==',
//                         ),
//                     ),
//                     'allorany' => 'all',
//                 ),
//                 'post_type' => 'post',
//                 'child_of' => 10,
//                 'parent' => '',
//                 'orderby' => 'name',
//                 'order' => 'ASC',
//                 'hide_empty' => 0,
//                 'hierarchical' => 1,
//                 'taxonomy' => 'category',
//                 'include' => '',
//                 'exclude' => '',
//                 'display_type' => 'drop_down',
//                 'show_all' => 0,
//                 'show_none' => 0,
//                 'show_parent' => 0,
//                 'ret_val' => 'category_name',
//             ),
//             1 =>
//             array (
//                 'key' => 'field_24',
//                 'label' => 'Mot clé associé',
//                 'name' => '_mot_clef',
//                 'type' => 'categories',
//                 'order_no' => 1,
//                 'instructions' => '',
//                 'required' => 0,
//                 'conditional_logic' =>
//                 array (
//                     'status' => 0,
//                     'rules' =>
//                     array (
//                         0 =>
//                         array (
//                             'field' => 'null',
//                             'operator' => '==',
//                             'value' => '',
//                         ),
//                     ),
//                     'allorany' => 'all',
//                 ),
//                 'post_type' => 'artiste',
//                 'child_of' => 0,
//                 'parent' => '',
//                 'orderby' => 'name',
//                 'order' => 'ASC',
//                 'hide_empty' => 0,
//                 'hierarchical' => 1,
//                 'taxonomy' => 'post_tag',
//                 'include' => '',
//                 'exclude' => '',
//                 'display_type' => 'checkboxes',
//                 'show_all' => 0,
//                 'show_none' => 0,
//                 'show_parent' => 0,
//                 'ret_val' => 'category_slug',
//             ),
//         ),
//         'location' =>
//         array (
//             'rules' =>
//             array (
//                 0 =>
//                 array (
//                     'param' => 'post_type',
//                     'operator' => '==',
//                     'value' => 'artiste',
//                     'order_no' => 0,
//                 ),
//             ),
//             'allorany' => 'all',
//         ),
//         'options' =>
//         array (
//             'position' => 'side',
//             'layout' => 'default',
//             'hide_on_screen' =>
//             array (
//                 0 => 'categories',
//                 1 => 'tags',
//             ),
//         ),
//         'menu_order' => 0,
//     ));
//     register_field_group(array (
//         'id' => '510fe2ca6e5f6',
//         'title' => 'Rubriques de l’animation',
//         'fields' =>
//         array (
//             0 =>
//             array (
//                 'key' => 'field_21',
//                 'label' => 'Rubrique de l\'animation',
//                 'name' => '_categorie',
//                 'type' => 'categories',
//                 'order_no' => 0,
//                 'instructions' => '',
//                 'required' => 1,
//                 'conditional_logic' =>
//                 array (
//                     'status' => 0,
//                     'rules' =>
//                     array (
//                         0 =>
//                         array (
//                             'field' => 'null',
//                             'operator' => '==',
//                         ),
//                     ),
//                     'allorany' => 'all',
//                 ),
//                 'post_type' => 'animation',
//                 'child_of' => 9,
//                 'parent' => '',
//                 'orderby' => 'name',
//                 'order' => 'ASC',
//                 'hide_empty' => 0,
//                 'hierarchical' => 1,
//                 'taxonomy' => 'category',
//                 'include' => '',
//                 'exclude' => '',
//                 'display_type' => 'drop_down',
//                 'show_all' => 0,
//                 'show_none' => 0,
//                 'show_parent' => 0,
//                 'ret_val' => 'category_name',
//             ),
//             1 =>
//             array (
//                 'key' => 'field_23',
//                 'label' => 'Mot clé associé',
//                 'name' => '_mot_clef',
//                 'type' => 'categories',
//                 'order_no' => 1,
//                 'instructions' => '',
//                 'required' => 0,
//                 'conditional_logic' =>
//                 array (
//                     'status' => 0,
//                     'rules' =>
//                     array (
//                         0 =>
//                         array (
//                             'field' => 'null',
//                             'operator' => '==',
//                             'value' => '',
//                         ),
//                     ),
//                     'allorany' => 'all',
//                 ),
//                 'post_type' => 'animation',
//                 'child_of' => 0,
//                 'parent' => '',
//                 'orderby' => 'id',
//                 'order' => 'ASC',
//                 'hide_empty' => 0,
//                 'hierarchical' => 1,
//                 'taxonomy' => 'post_tag',
//                 'include' => '',
//                 'exclude' => '',
//                 'display_type' => 'checkboxes',
//                 'show_all' => 0,
//                 'show_none' => 0,
//                 'show_parent' => 0,
//                 'ret_val' => 'category_slug',
//             ),
//         ),
//         'location' =>
//         array (
//             'rules' =>
//             array (
//                 0 =>
//                 array (
//                     'param' => 'post_type',
//                     'operator' => '==',
//                     'value' => 'animation',
//                     'order_no' => 0,
//                 ),
//             ),
//             'allorany' => 'all',
//         ),
//         'options' =>
//         array (
//             'position' => 'side',
//             'layout' => 'default',
//             'hide_on_screen' =>
//             array (
//                 0 => 'categories',
//                 1 => 'tags',
//             ),
//         ),
//         'menu_order' => 0,
//     ));
//     register_field_group(array (
//         'id' => '510fe2ca730be',
//         'title' => 'Réseaux sociaux',
//         'fields' =>
//         array (
//             0 =>
//             array (
//                 'key' => 'field_6',
//                 'label' => 'Page facebook',
//                 'name' => '_facebook',
//                 'type' => 'text',
//                 'order_no' => 0,
//                 'instructions' => '',
//                 'required' => 0,
//                 'conditional_logic' =>
//                 array (
//                     'status' => 0,
//                     'rules' =>
//                     array (
//                         0 =>
//                         array (
//                             'field' => 'null',
//                             'operator' => '==',
//                             'value' => '',
//                         ),
//                     ),
//                     'allorany' => 'all',
//                 ),
//                 'default_value' => '',
//                 'formatting' => 'none',
//             ),
//             1 =>
//             array (
//                 'key' => 'field_7',
//                 'label' => 'Compte Twitter',
//                 'name' => '_twitter',
//                 'type' => 'text',
//                 'order_no' => 1,
//                 'instructions' => '',
//                 'required' => 0,
//                 'conditional_logic' =>
//                 array (
//                     'status' => 0,
//                     'rules' =>
//                     array (
//                         0 =>
//                         array (
//                             'field' => 'null',
//                             'operator' => '==',
//                         ),
//                     ),
//                     'allorany' => 'all',
//                 ),
//                 'default_value' => '',
//                 'formatting' => 'none',
//             ),
//         ),
//         'location' =>
//         array (
//             'rules' =>
//             array (
//                 0 =>
//                 array (
//                     'param' => 'page',
//                     'operator' => '==',
//                     'value' => '11',
//                     'order_no' => 0,
//                 ),
//             ),
//             'allorany' => 'all',
//         ),
//         'options' =>
//         array (
//             'position' => 'normal',
//             'layout' => 'default',
//             'hide_on_screen' =>
//             array (
//                 0 => 'the_content',
//                 1 => 'excerpt',
//                 2 => 'custom_fields',
//                 3 => 'discussion',
//                 4 => 'comments',
//                 5 => 'revisions',
//                 6 => 'slug',
//                 7 => 'author',
//                 8 => 'format',
//                 9 => 'featured_image',
//                 10 => 'categories',
//                 11 => 'tags',
//                 12 => 'send-trackbacks',
//             ),
//         ),
//         'menu_order' => 2,
//     ));
//     register_field_group(array (
//         'id' => '510fe2ca7693c',
//         'title' => 'Animations liées',
//         'fields' =>
//         array (
//             0 =>
//             array (
//                 'key' => 'field_14',
//                 'label' => 'Animations liées',
//                 'name' => '_animations',
//                 'type' => 'relationship',
//                 'order_no' => 0,
//                 'instructions' => 'Animations qui vont s\'afficher dans le carrousel en bas de page. Si aucune animation n\'est liée alors le carrousel ne s\'affiche pas, ou affiche les animations/artistes de la même catégories.',
//                 'required' => 0,
//                 'conditional_logic' =>
//                 array (
//                     'status' => 0,
//                     'rules' =>
//                     array (
//                         0 =>
//                         array (
//                             'field' => 'null',
//                             'operator' => '==',
//                             'value' => '',
//                         ),
//                     ),
//                     'allorany' => 'all',
//                 ),
//                 'post_type' =>
//                 array (
//                     0 => 'animation',
//                     1 => 'artiste',
//                 ),
//                 'taxonomy' =>
//                 array (
//                     0 => 'all',
//                 ),
//                 'max' => '',
//             ),
//         ),
//         'location' =>
//         array (
//             'rules' =>
//             array (
//                 0 =>
//                 array (
//                     'param' => 'post_type',
//                     'operator' => '==',
//                     'value' => 'evenement',
//                     'order_no' => 0,
//                 ),
//                 1 =>
//                 array (
//                     'param' => 'post_type',
//                     'operator' => '==',
//                     'value' => 'bientot_c',
//                     'order_no' => 1,
//                 ),
//                 2 =>
//                 array (
//                     'param' => 'post_type',
//                     'operator' => '==',
//                     'value' => 'artiste',
//                     'order_no' => 2,
//                 ),
//                 3 =>
//                 array (
//                     'param' => 'post_type',
//                     'operator' => '==',
//                     'value' => 'animation',
//                     'order_no' => 3,
//                 ),
//             ),
//             'allorany' => 'any',
//         ),
//         'options' =>
//         array (
//             'position' => 'normal',
//             'layout' => 'no_box',
//             'hide_on_screen' =>
//             array (
//             ),
//         ),
//         'menu_order' => 5,
//     ));
//     register_field_group(array (
//         'id' => '510fe2ca790fb',
//         'title' => 'Url Location fêtes',
//         'fields' =>
//         array (
//             0 =>
//             array (
//                 'key' => 'field_25',
//                 'label' => 'Url location fêtes',
//                 'name' => '_url_location_fetes',
//                 'type' => 'text',
//                 'order_no' => 0,
//                 'instructions' => 'Url vers le site location fête (lien présent dans le footer)',
//                 'required' => 0,
//                 'conditional_logic' =>
//                 array (
//                     'status' => 0,
//                     'rules' =>
//                     array (
//                         0 =>
//                         array (
//                             'field' => 'null',
//                             'operator' => '==',
//                             'value' => '',
//                         ),
//                     ),
//                     'allorany' => 'all',
//                 ),
//                 'default_value' => '',
//                 'formatting' => 'html',
//             ),
//         ),
//         'location' =>
//         array (
//             'rules' =>
//             array (
//                 0 =>
//                 array (
//                     'param' => 'page',
//                     'operator' => '==',
//                     'value' => '11',
//                     'order_no' => 0,
//                 ),
//             ),
//             'allorany' => 'all',
//         ),
//         'options' =>
//         array (
//             'position' => 'normal',
//             'layout' => 'default',
//             'hide_on_screen' =>
//             array (
//             ),
//         ),
//         'menu_order' => 10,
//     ));
// }

?>
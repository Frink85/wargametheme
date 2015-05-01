<?php
// AFFICHAGE

// Affiche le menu
function display_wp_menu()
{
    include (get_template_directory().'/includes/general/main_nav.php');
}

function display_rub_sub_menu($parent, $menu_id)
{
    $subnavs = get_pages(array('child_of' => $parent));
    if($subnavs){
        include (get_template_directory().'/includes/general/main_sub_nav.php');
    }
}

// Affiche la class en fonction de la page où l'on se trouve.
function display_body_class()
{
    $class ='';
    if($class == '') {
    	$class = 'page-basic';
    }
    echo 'class="'.$class.'"';
}

// Affiche le slug de la page en cours en tant qu'id
function display_body_id()
{
    global $post;
    if($post){
       echo 'id="'.$post->post_name.'"';
    }
}

// Affiche le contact de l'entreprise
function display_firm_contact()
{
    global $post;
    $post = get_post(CONFIGURATION_PAGE_ID);
    setup_postdata($post);
    include (get_template_directory().'/includes/general/firm_contact.php');
    wp_reset_postdata();
}

// Affiche les boutons sociaux
function display_social_buttons()
{
    global $post;
    $post = get_post(CONFIGURATION_PAGE_ID);
    setup_postdata($post);
    include (get_template_directory().'/includes/general/social_buttons.php');
    wp_reset_postdata();
}

// Affiche les boutons de partages
function display_share_buttons()
{
    include (get_template_directory().'/includes/general/share_buttons.php');
}

// Affiche le moteur de recherche
function display_wp_search_form()
{
    include (get_template_directory().'/includes/general/search_form.php');
}

// Affiche le fils d'Arianne
function display_breadcrumb()
{
    global $post;
    $breadcrumb = array(array('name'=>'Accueil', 'url'=>get_bloginfo('url'), 'title'=> get_bloginfo()));
    if (is_front_page())  $breadcrumb[0]['nofollow'] = true ;

        if (is_page()) {
            $ancestors = get_post_ancestors($post);
            if ($ancestors) {
                $ancestors = array_reverse($ancestors);
                foreach ($ancestors as $crumb) {
                    $breadcrumb[] = array('name'=>get_the_title($crumb), 'url'=>get_permalink($crumb), 'title'=> get_the_title($crumb));
                }
            }
        }
        if (is_single()) {
            /*specific for this website :
                custom post type "rubrique_events" are virtualy parent of custom post type "events".
            */
            if($customParent = get_rub_event_parent(get_the_ID())){
                $breadcrumb[] = array('name'=>$customParent->post_title, 'url'=> get_permalink($customParent->ID), 'title'=> $customParent->post_title);
            } else if ($customParent = get_field('_categorie', get_the_ID())) {
                $breadcrumb[] = array('name'=> $customParent, 'url'=> get_category_link(get_cat_ID($customParent)), 'title'=> $customParent);
            } else if($post->post_parent != null && $parent = get_post(array('post_parent' => $post->post_parent, 'post_type'=> $post->post_type))) {//not use on envol because we not use page hierarchie
                $breadcrumb[] = array('name'=>$parent->post_title, 'url'=> get_permalink($parent->ID), 'title'=> $parent->post_title);
            }
        }
        if (is_category() or is_tag()) {
            $term = get_current_taxonomie();
            if(is_category() && $cat_parent = get_cat_ancestors($term)) //tag are not hierarchicals
            {
                foreach($cat_parent as $cat) {
                    $parent  = get_single_cat($cat);
                    $breadcrumb[] = array('name'=>$parent->name, 'url'=> get_category_link($parent->cat_ID), 'title'=> $parent->name);
                }
            }
            $breadcrumb[] = array('name'=>$term->name, 'url'=> get_term_link($term), 'title'=> $term->name);
        }
        // Current page
        if (is_page() || is_single()) {
            $breadcrumb[] = array('name'=> get_the_title());
        }
        if(is_404()) {
            $breadcrumb[] = array('name'=> 'Page introuvable');
        }
    include (get_template_directory().'/includes/general/breadcrumb.php');
}

// Affiche le permalink de l'ID
function display_permalink($id) {
    echo get_permalink($id);
}

?>
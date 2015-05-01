<?php 
// OUTILS

// Retourne le role de l'utilisateur courrant (ex : admin) en chaine de caractere
function get_current_user_role() {
    global $wp_roles;
    $current_user = wp_get_current_user();
    $roles = $current_user->roles;
    $role = array_shift($roles);
    return isset($wp_roles->role_names[$role]) ? translate_user_role($wp_roles->role_names[$role] ) : false;
}

// Supprime tous les accents
function strip_accents($str, $charset='utf-8')
{
    $str = htmlentities($str, ENT_NOQUOTES, $charset);

    $str = preg_replace('#&([A-za-z])(?:acute|cedil|circ|grave|orn|ring|slash|th|tilde|uml);#', '\1', $str);
    $str = preg_replace('#&([A-za-z]{2})(?:lig);#', '\1', $str); // pour les ligatures e.g. '&oelig;'
    $str = preg_replace('#&[^;]+;#', '', $str); // supprime les autres caractères

    return $str;
}

// Coupe un extrait de texte et ajoute le endingchar
function custom_substring($chaine, $limit=250, $enddingchar='[...]')
{
    $chaine = strip_tags($chaine);
        if(strlen($chaine)>=$limit) {
          // Met la portion de chaine dans $chaine
            $chaine=substr($chaine,0,$limit);
          // position du dernier espace
            $espace=strrpos($chaine," ");
          // test si il ya un espace
            if($espace)
          // si ya 1 espace, coupe de nouveau la chaine
              $chaine=substr($chaine,0,$espace);
          $lien=strrpos($chaine, "<a");
          if($lien) {
            $chaine=substr($chaine, 0, $lien);
        }
          // Ajoute ... a la chaine
        $chaine .= $enddingchar;
    }
    return strip_tags($chaine);
}

// Retourne le slug (chaine de caratere unique) de la catégorie a partir de son ID 
function get_cat_slug($cat_id) {
  $cat_id = (int) $cat_id;
  $category = &get_category($cat_id);
  return $category->slug;
}

// Retourne le slug (chaine de caratere unique) du tag a partir de son ID
function get_tag_slug($id) {
  $id = (int) $id;
  $tag = &get_tag($id);
  return $tag->slug;
}

// Retourne l'objet taxonomie
function get_current_taxonomie(){
    $taxonomie = (is_category()) ? 'cat' : 'tag';
    $methode = 'get_single_'.$taxonomie;
    // Get the ID of a given category
    $term_id = get_query_var($taxonomie);
    return $methode($term_id);
}

// Retourne un tableau des categories parentes de la plus proches à la plus éloignee
function get_cat_ancestors($cat)
{
    $ancestors = array();
    while($cat->parent != 0)
    {
        $ancestors[] = $cat->parent;
        $cat  = get_single_cat($cat->parent);
    }
    return array_reverse($ancestors);
}

// Retourne une categorie en fonction de son slug
function get_single_cat($slug)
{
    $cat  = get_categories(array('include'=> $slug, 'hide_empty' => 0));
    return $cat[0];
}

// Retourne un tag en fonction de son ID
function get_single_tag($id)
{
    $tag  = get_tags(array('slug'=> $id, 'hide_empty' => 0));
    return $tag[0];
}

// Generic function for usefull tools
function display_img($img){
    echo bloginfo('template_directory')."/img/".$img;
}

?>
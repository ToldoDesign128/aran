<?php 

/**
 * Definisce post type per il Living
 */

 add_action( 'init', 'register_living_post_type' );
 function register_living_post_type() {
 
     /** living **/
     $labels = array(
         'name'          => _x( 'Living', 'Post Type General Name', 'aran' ),
         'singular_name' => _x( 'Living', 'Post Type Singular Name', 'aran' ),
         'add_new'       => _x( 'Aggiungi un Prodotto', 'Post Type Singular Name', 'aran' ),
         'add_new_item'  => _x( 'Aggiungi un Prodotto', 'Post Type Singular Name', 'aran' ),
         'edit_item'      => _x( 'Modifica il Prodotto', 'Post Type Singular Name', 'aran' ),
         'view_item'      => _x( 'Visualizza il Prodotto', 'Post Type Singular Name', 'aran' ),
     );
     $args   = array(
         'label'         => __( 'living', 'aran' ),
         'labels'        => $labels,
         'description'   => 'Una sezione per gestire i prodotti di living che poi vengono stampati nella rispettiva pagina',
         'public'        => true,
         'menu_icon'     => 'dashicons-plus-alt',
         'supports'      => array('title', 'thumbnail', 'editor')
     );
     register_post_type( 'living', $args );
    
    }
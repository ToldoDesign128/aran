<?php 

/**
 * Definisce post type per i Cucine
 */

 add_action( 'init', 'register_cucine_post_type' );
 function register_arredamento_post_type() {
 
     /** cucine **/
     $labels = array(
         'name'          => _x( 'Cucine', 'Post Type General Name', 'aran' ),
         'singular_name' => _x( 'Cucine', 'Post Type Singular Name', 'aran' ),
         'add_new'       => _x( 'Aggiungi un Prodotto', 'Post Type Singular Name', 'aran' ),
         'add_new_item'  => _x( 'Aggiungi un Prodotto', 'Post Type Singular Name', 'aran' ),
         'edit_item'      => _x( 'Modifica il Prodotto', 'Post Type Singular Name', 'aran' ),
         'view_item'      => _x( 'Visualizza il Prodotto', 'Post Type Singular Name', 'aran' ),
     );
     $args   = array(
         'label'         => __( 'cucine', 'aran' ),
         'labels'        => $labels,
         'description'   => 'Una sezione per gestire i prodotti di cucine che poi vengono stampati nella rispettiva pagina',
         'public'        => true,
         'menu_icon'     => 'dashicons-plus-alt',
         'supports'      => array('title', 'thumbnail', 'editor')
     );
     register_post_type( 'cucine', $args );
    
    }
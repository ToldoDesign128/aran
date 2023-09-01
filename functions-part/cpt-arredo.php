<?php 

/**
 * Definisce post type per i Arredamento
 */

 add_action( 'init', 'register_arredamento_post_type' );
 function register_arredamento_post_type() {
 
     /** arredamento **/
     $labels = array(
         'name'          => _x( 'Arredamento', 'Post Type General Name', 'aran' ),
         'singular_name' => _x( 'Arredamento', 'Post Type Singular Name', 'aran' ),
         'add_new'       => _x( 'Aggiungi un Prodotto', 'Post Type Singular Name', 'aran' ),
         'add_new_item'  => _x( 'Aggiungi un Prodotto', 'Post Type Singular Name', 'aran' ),
         'edit_item'      => _x( 'Modifica il Prodotto', 'Post Type Singular Name', 'aran' ),
         'view_item'      => _x( 'Visualizza il Prodotto', 'Post Type Singular Name', 'aran' ),
     );
     $args   = array(
         'label'         => __( 'arredamento', 'aran' ),
         'labels'        => $labels,
         'description'   => 'Una sezione per gestire i prodotti di arredamento che poi vengono stampati nella rispettiva pagina',
         'public'        => true,
         'menu_icon'     => 'dashicons-plus-alt',
         'supports'      => array('title', 'thumbnail')
     );
     register_post_type( 'arredamento', $args );
    
    }
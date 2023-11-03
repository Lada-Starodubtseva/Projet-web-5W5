
<?php

function ajouter_styles() {
    wp_enqueue_style(   'style-principale', // identificateur du link.css
                        get_template_directory_uri() . '/style.css', // endroit ou se trouve le fichier style.css
                        array(), // les fichiers css qui dépendent de style.css 
                        filemtime(get_template_directory() . '/style.css') // version de notre style.css 
                    );              
}
add_action( 'wp_enqueue_scripts', 'ajouter_styles' );

/* ----------------------------------- Enregistrement des menus */
function enregistrement_nav_menu(){
    register_nav_menus( array(
        'principal' => 'Menu principal',
        'cours' => 'Cours',
        'footer'  => 'Menu pied de page'
    ) );
}
add_action( 'after_setup_theme', 'enregistrement_nav_menu', 0 );     

function enregistrer_sidebar() {
    register_sidebar( array(
        'name' => __( 'Recherche', '5w5-projet-web' ),
        'id' => 'recherche',
        'description' => __( 'Une zone pour afficher des widgets dans le sidebar du footer.', '5w5-projet-web' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ) );
}
add_action( 'widgets_init', 'enregistrer_sidebar' );

add_theme_support( 'post-thumbnails' );

?>
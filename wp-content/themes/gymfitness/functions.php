<?php 

    function gymfitness_menus(){
        register_nav_menus( array(
            'menu-principal' => __('Menu Principal xD ','gymfitnes')  //ese nombre menu Principal figura en el panel del adminstrador el recuadro para marcar
            //si quisieras más menu solo separas por, ejem:
            //menu-redes' => __('Menu redes','gymfitnes')

        ));

        // los menus se quedan grabados en la tabla  wp_terms

    } 



    //add_filter() Modifica  el codigo
    //add_action()  Agrega  codigo




    add_action('init', 'gymfitness_menus'); // se ejecuta ni bien carga el wp

    function gymfiness_scripts_style(){
        wp_enqueue_style('normalize','https://necolas.github.io/normalize.css/8.0.1/normalize.css', array() ,'8.0.1');
        wp_enqueue_style('style', get_stylesheet_uri(), array('normalize')/* para ponerle dependecias */,'1.0.0' );

    }

    add_action('wp_enqueue_scripts', 'gymfiness_scripts_style'); 
    ?>
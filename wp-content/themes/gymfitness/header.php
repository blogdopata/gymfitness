<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gymfitness</title>
    <?php wp_head(); ?>
</head>
<body>
    
    <header class="header">
        <div class="contenedor  barra-navegacion">
            
            <div class="logo">
                <img src="<?php echo get_template_directory_uri()?>/img/logo.svg" alt="Logo GymFItness">

            </div>

            <?php   
                    // para indicar que menu quiero de los registrados en function .php
                    //con el theme location le digo que menu quiero renderizar
                $args = array(
                    'theme_location' => 'menu-principal',
                    'container' => 'nav',
                    'container_class' => 'menu-principal'
                );

                wp_nav_menu($args);
            ?>


        </div>


    </header>

    
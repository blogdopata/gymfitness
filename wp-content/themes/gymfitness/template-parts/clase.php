
    <?php

        while (have_posts()): the_post();

       
            the_title('<h1 class="text-center text-primary">', '</h1>');


            if (has_post_thumbnail()) {
                the_post_thumbnail('full', array('class' => 'imagen-destacada'));
            }
                    $hora_inicio = get_field('hora_de_inicio');
                    $hora_fin = get_field('hora_de_fin');
                ?>

        <!-- The field () muesta el campo y con get_field obtengo el campo-->
                <p class="informacion-clase">
                    <?php the_field('dias_clase');  ?>
                    - 
                    <?php echo $hora_inicio . " a " . $hora_fin; ?>
                </p>
                <?php 
        
                the_content();
            endwhile;

    
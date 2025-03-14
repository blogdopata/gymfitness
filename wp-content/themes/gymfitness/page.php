

<?php
    get_header();
?>

    <main class="contenedor seccion">
        <?php 
            while( have_posts() ): the_post();
        ?>

            <h1 class="text-center text-primary"> <?php the_title(); ?>   <h1>
            
        <?php
                the_content();
            endwhile;    
        ?>


    </main>
</body>
</html>
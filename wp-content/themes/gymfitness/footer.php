

<footer class="footer contenedor">
    <hr>
    <div class="contenido-footer">
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

           <p class="copyright">Todos los derecgos Reservados .  <?php echo get_bloginfo('name'). ' ' . date('Y'); ?> </p>     
    </div>
    
</footer>

<!-- WP_FOOTER PARA MOSTRAR LA BARRA CUANDO ESTAS LOGUEADO  -->
<?php wp_footer() ?>
</body>
</html>
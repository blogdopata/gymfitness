<!-- Esta  pagina es  un template  para customizar una vista en especifico
    En la opcion editar pagina figura al lado derecho y selecciona esta plantilla


-->
<?php
/*
*Template Name: Contenido Centrado (NO SIDEBARS)
*/

?>



<?php
get_header();
?>

<main class="contenedor seccion contenido-centrado" style="border:1px solid red">
    <?php
    get_template_part('template-parts/pagina');
    ?>
</main>


<?php
    get_footer();
?>
</body>

</html>
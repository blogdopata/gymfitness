

<?php
    get_header();
?>

    <main class="contenedor seccion con-sidebar" style="border:1px solid red">
            <section>
                <?php 
                    get_template_part('template-parts/clase');
                ?> 
            </section>
            <aside>
                <h2>Sidebar aqui</h2>
            </aside>

    </main>


<?php
    get_footer();
?>
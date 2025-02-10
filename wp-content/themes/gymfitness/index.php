<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header class="header">
        <div class="contenedor">
            <div class="logo">


            </div>
            <nav>

            
            </nav>


        </div>


    </header>

    <main>
    <?php 
        while(have_posts()): the_post();

        the_title();
        the_content();

        endwhile;    
    ?>
    </main>
</body>
</html>
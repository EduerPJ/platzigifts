<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>

<header>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-4">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/logo.png" alt="logo">
            </div>
            <div class="col-8">
            <nav>
                <?php
                    wp_nav_menu(
    [
                        'theme_location'    => 'top_menu',
                        'menu_class'        => 'menu-principal',
                        'container_class'   => 'container-menu',
                        ]
);
                ?>
            </nav>
            </div>
        </div>
    </div>
</header>
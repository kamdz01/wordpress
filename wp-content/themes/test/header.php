<!DOCTYPE html>
<html lang="pl">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <?php wp_head(); ?>
</head>

</html>


<?php

wp_nav_menu(
    array(
        'theme_location' => 'main_nav'
    )
)



?>
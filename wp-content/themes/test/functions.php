<?php

function register_menus(){
    register_nav_menus(
        array(
            'main_nav' => 'menu_główne',
            'footer_nav' => 'menu_dolne'
        )
    );
}

add_action('init','register_menus');



?>
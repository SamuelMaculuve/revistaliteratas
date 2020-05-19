<?php

if (!function_exists('remove_admin_bar')){
    function remove_admin_bar(){
        if(!current_user_can('administrator') && !is_admin()){
            show_admin_bar(false);
        }
        else{
            show_admin_bar(true);
        }
    }
}
add_action('after_setup_theme','remove_admin_bar');
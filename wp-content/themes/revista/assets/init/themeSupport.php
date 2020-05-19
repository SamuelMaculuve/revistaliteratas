<?php


function get_theme_supports()
{
    /** Abilitar a imagem de destaque **/
    add_theme_support( 'post-thumbnails' );

    /** Abilitar formato de posts **/
    add_theme_support( 'post-formats', array('aside','gallery','image','video'));

    /** Adicionar imagem no cabeçalho **/
    add_theme_support( 'custom-header' );

    /** Adicionar postagens e comentários padrão para links de feed RSS **/
    add_theme_support( 'automatic_feed_links' );

    /** Deixar o Gerenciamento de titulos com o wordpress **/
    add_theme_support( 'title-tag' );
}
add_action('init','get_theme_supports');
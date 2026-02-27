<?php

if (!defined('ABSPATH')) {
    exit;
}

function ius_gentium_setup()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', ['search-form', 'gallery', 'caption', 'style', 'script']);

    register_nav_menus([
        'menu-principal' => __('Menu Principal', 'ius-gentium'),
    ]);
}
add_action('after_setup_theme', 'ius_gentium_setup');

function ius_gentium_assets()
{
    wp_enqueue_style('ius-gentium-style', get_stylesheet_uri(), [], '1.0.0');
}
add_action('wp_enqueue_scripts', 'ius_gentium_assets');

function ius_gentium_cpts()
{
    register_post_type('evento', [
        'labels' => [
            'name' => __('Eventos', 'ius-gentium'),
            'singular_name' => __('Evento', 'ius-gentium'),
        ],
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-calendar-alt',
        'supports' => ['title', 'editor', 'excerpt'],
    ]);

    register_post_type('membro', [
        'labels' => [
            'name' => __('Membros', 'ius-gentium'),
            'singular_name' => __('Membro', 'ius-gentium'),
        ],
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-groups',
        'supports' => ['title', 'editor', 'thumbnail', 'excerpt'],
    ]);
}
add_action('init', 'ius_gentium_cpts');

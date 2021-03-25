<?php
function slider()
{
    $labels = array(
        'name' => 'slider',
        'singular_name' => 'slider',
        'menu_name' => 'sliders',
        'parent_item_colon' => 'Nadrzędna slider',
        'all_items' => 'Wszystkie slider',
        'view_item' => 'Zobacz slider',
        'add_new_item' => 'Dodaj slider',
        'add_new' => 'Dodaj nową',
        'edit_item' => 'Edytuj slider',
        'update_item' => 'Aktualizuj',
        'search_items' => 'Szukaj slider',
        'not_found' => 'Nie znaleziono',
        'not_found_in_trash' => 'Nie znaleziono'
    );
    $args = array(
        'label' => 'slider',
        'rewrite' => array(
            'slug' => 'slider'
        ),
        'description' => 'slider',
        'labels' => $labels,
        'supports' => array('title', 'thumbnail'),
        'taxonomies' => array(),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_rest' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 4,
        'menu_icon' => 'dashicons-id-alt',
        'can_export' => true,
        'has_archive' => false,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'post',
    );
    register_post_type('slider', $args);
}

add_action('init', 'slider', 0);

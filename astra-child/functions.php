<?php
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style(
        'goldcoast-astra-child-style',
        get_stylesheet_uri(),
        ['astra-theme-css'],
        wp_get_theme()->get('Version')
    );

    if (is_page_template('page-careers.php')) {
        wp_enqueue_style(
            'goldcoast-careers-style',
            get_stylesheet_directory_uri() . '/assets/careers.css',
            ['astra-theme-css'],
            filemtime(get_stylesheet_directory() . '/assets/careers.css')
        );

        wp_enqueue_script(
            'goldcoast-careers-script',
            get_stylesheet_directory_uri() . '/assets/careers.js',
            [],
            filemtime(get_stylesheet_directory() . '/assets/careers.js'),
            true
        );
    }
});

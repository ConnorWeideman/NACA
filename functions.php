<?php
function load_stylesheets() {
wp_register_style("mainstyles", get_template_directory_uri() . "/style.css", array(), 1, "all" );
wp_enqueue_style("mainstyles");
if (is_front_page()) {
    wp_register_style("front-page", get_template_directory_uri() . "/styles/front-page.css", array(), 1, "all" );
    wp_enqueue_style("front-page");
}
if (is_page("high-school")) {
    wp_register_style("high-school", get_template_directory_uri() . "/styles/high-school.css", array(), 1, "all" );
    wp_enqueue_style("high-school");
}
    if (is_page("primary-school")) {
        wp_register_style("primary-school", get_template_directory_uri() . "/styles/primary-school.css", array(), 1, "all" );
        wp_enqueue_style("primary-school");
    }
if (is_page("impacts")) {
    wp_register_style("impacts", get_template_directory_uri() . "/styles/impacts.css", array(), 1, "all" );
    wp_enqueue_style("impacts");
    }
    if (is_page("quiz")) {
    wp_register_style("quiz", get_template_directory_uri() . "/styles/quiz.css", array(), 1, "all" );
    wp_enqueue_style("quiz");
    }
    if (is_page_template("sources.php")) {
    wp_register_style("source", get_template_directory_uri() . "/styles/sources.css", array(), 1, "all" );
    wp_enqueue_style("source");
    }
}
function load_scripts() {
if (is_page("high-school")) {
    wp_register_script("high-school", get_template_directory_uri() . "/scripts/high-school.js", array(), 1, true);
    wp_enqueue_script("high-school");
    }
if (is_page("primary-school")) {
    wp_register_script("primary-school", get_template_directory_uri() . "/scripts/primary-school.js", array(), 1, true);
    wp_enqueue_script("primary-school");
    }
if (is_page("impacts")) {
    wp_register_script("impacts", get_template_directory_uri() . "/scripts/impacts.js", array(), 1, true);
    wp_enqueue_script("impacts");
    }
if (is_page("quiz")) {
    wp_register_script("quiz", get_template_directory_uri() . "/scripts/quiz.js", array(), 1, true);
    wp_enqueue_script("quiz");
    }
}
add_action("wp_enqueue_scripts", "load_scripts");
add_action("wp_enqueue_scripts", "load_stylesheets");
add_theme_support( 'post-thumbnails' );

@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );
?>
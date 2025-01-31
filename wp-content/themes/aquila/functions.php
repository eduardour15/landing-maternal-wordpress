<?php
/**
 * Theme Functions.
 *
 * @package Aquila
 */
if(!defined('AQUILA_DIR_PATH')){
    define('AQUILA_DIR_PATH', untrailingslashit(get_template_directory()));
}

require_once AQUILA_DIR_PATH.'/inc/helpers/autoloader.php';
function aquila_enqueue_scripts()
{
    wp_enqueue_style('stylesheet', get_stylesheet_uri(), [], filemtime(get_template_directory() . '/style.css'), 'all');
    wp_enqueue_style('boostrap', get_stylesheet_directory_uri() . '/assets/css/bootstrap.css', [], filemtime(get_template_directory() . '/assets/css/bootstrap.css'), 'all');
    wp_enqueue_style('font-awesome', get_stylesheet_directory_uri() . '/assets/fonts/font-awesome/css/font-awesome.min.css', [], filemtime(get_template_directory() . '/assets/fonts/font-awesome/css/font-awesome.min.css'), 'all');
    wp_enqueue_style('flaticon', get_stylesheet_directory_uri() . '/assets/fonts/flaticons/flaticon.css', [], filemtime(get_template_directory() . '/assets/fonts/flaticons/flaticon.css'), 'all');
    wp_enqueue_style('bootstrap-glyphicons', get_stylesheet_directory_uri() . '/assets/fonts/glyphicons/bootstrap-glyphicons.css', [], filemtime(get_template_directory() . '/assets/fonts/glyphicons/bootstrap-glyphicons.css'), 'all');
    wp_enqueue_style('bootstrap-glyphicons', get_stylesheet_directory_uri() . 'assets/fonts/glyphicons/bootstrap-glyphicons.css', [], filemtime(get_template_directory() . '/assets/fonts/glyphicons/bootstrap-glyphicons.css'), 'all');
    wp_enqueue_style('google-foont', 'https://fonts.googleapis.com/css?family=Lato:400,700,800%7CAlegreya+Sans:700,900', [], null, 'all');
    wp_enqueue_style('theme-css', get_stylesheet_directory_uri() . '/assets/css/theme.css', [], filemtime(get_template_directory() . '/assets/css/theme.css'), 'all');
    wp_enqueue_style('funtime', get_stylesheet_directory_uri() . '/assets/styles/funtime.css', [], filemtime(get_template_directory() . '/assets/styles/funtime.css'), 'all');
    wp_enqueue_style('carousel', get_stylesheet_directory_uri() . '/assets/css/owl.carousel.css', [], filemtime(get_template_directory() . '/assets/css/owl.carousel.css'), 'all');
    wp_enqueue_style('prettyPhoto', get_stylesheet_directory_uri() . '/assets/css/prettyPhoto.css', [], filemtime(get_template_directory() . '/assets/css/prettyPhoto.css'), 'all');
    wp_enqueue_style('layerslider', get_stylesheet_directory_uri() . '/assets/layerslider/css/layerslider.css', [], filemtime(get_template_directory() . '/assets/layerslider/css/layerslider.css'), 'all');
    wp_enqueue_style('switcher', get_stylesheet_directory_uri() . '/assets/switcher/css/switcher.css', [], filemtime(get_template_directory() . '/assets/switcher/css/switcher.css'), 'all');
    wp_enqueue_style('playground', get_stylesheet_directory_uri() . '/assets/styles/playground.css', [], filemtime(get_template_directory() . '/assets/styles/playground.css'), 'all');
    wp_enqueue_style('games', get_stylesheet_directory_uri() . '/assets/styles/games.css', [], filemtime(get_template_directory() . '/assets/styles/games.css'), 'all');
    wp_enqueue_style('childhood', get_stylesheet_directory_uri() . '/assets/styles/childhood.css', [], filemtime(get_template_directory() . '/assets/styles/childhood.css'), 'all');
    wp_enqueue_style('school', get_stylesheet_directory_uri() . '/assets/styles/school.css', [], filemtime(get_template_directory() . '/assets/styles/school.css'), 'all');
    wp_enqueue_style('nanny', get_stylesheet_directory_uri() . '/assets/styles/nanny.css', [], filemtime(get_template_directory() . '/assets/styles/nanny.css'), 'all');
    wp_enqueue_style('toddler', get_stylesheet_directory_uri() . '/assets/styles/toddler.css', [], filemtime(get_template_directory() . '/assets/styles/toddler.css'), 'all');


//    wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', [], filemtime(get_template_directory() . '/assets/js/jquery.min.js'), true);
    wp_enqueue_script('boostrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', ['jquery'], filemtime(get_template_directory() . '/assets/js/bootstrap.min.js'), true);
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', ['jquery'], filemtime(get_template_directory() . '/assets/js/main.js'), true);
    wp_enqueue_script('jquery-isotope', get_template_directory_uri() . '/assets/js/jquery.isotope.js', ['jquery'], filemtime(get_template_directory() . '/assets/js/jquery.isotope.js'), true);
    wp_enqueue_script('mc-validate', get_template_directory_uri() . '/assets/js/mc-validate.js', ['jquery'], filemtime(get_template_directory() . '/assets/js/mc-validate.js'), true);
    wp_enqueue_script('plugins', get_template_directory_uri() . '/assets/js/plugins.js', ['jquery'], filemtime(get_template_directory() . '/assets/js/plugins.js'), true);
    wp_enqueue_script('contact.js', get_template_directory_uri() . '/assets/js/contact.js', ['jquery'], filemtime(get_template_directory() . '/assets/js/contact.js'), true);
    wp_enqueue_script('prefixfree', get_template_directory_uri() . '/assets/js/prefixfree.js', ['jquery'], filemtime(get_template_directory() . '/assets/js/prefixfree.js'), true);
    wp_enqueue_script('greensock', get_template_directory_uri() . '/assets/layerslider/js/greensock.js', ['jquery'], filemtime(get_template_directory() . '/assets/layerslider/js/greensock.js'), true);
    wp_enqueue_script('layerslider-load', get_template_directory_uri() . '/assets/layerslider/js/layerslider.load.js', ['jquery'], filemtime(get_template_directory() . '/assets/layerslider/js/layerslider.load.js'), true);
    wp_enqueue_script('layerslider-transition', get_template_directory_uri() . '/assets/layerslider/js/layerslider.transitions.js', ['jquery'], filemtime(get_template_directory() . '/assets/layerslider/js/layerslider.transitions.js'), true);
    wp_enqueue_script('layerslider-kreaturamedia', get_template_directory_uri() . '/assets/layerslider/js/layerslider.kreaturamedia.jquery.js', ['jquery'], filemtime(get_template_directory() . '/assets/layerslider/js/layerslider.kreaturamedia.jquery.js'), true);
    wp_enqueue_script('dmss', get_template_directory_uri() . '/assets/switcher/js/dmss.js', ['jquery'], filemtime(get_template_directory() . '/assets/switcher/js/dmss.js'), true);

}
function theme_register_menus() {
    register_nav_menus([
        'primary'   => __('Menú Izquierdo', 'aquila'),
        'secondary' => __('Menú Derecho', 'aquila'),
    ]);
}
add_action('wp_enqueue_scripts', 'aquila_enqueue_scripts');
add_action('after_setup_theme', 'theme_register_menus');
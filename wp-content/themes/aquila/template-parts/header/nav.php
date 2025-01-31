<?php
/**
 * Header Navigation template.
 *
 * @package Aquila
 */
?>

<!-- Navbar -->
<nav class="navbar navbar-custom navbar-fixed-top">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-brand-centered">
            <i class="fa fa-bars"></i>
        </button>
        <div class="navbar-brand-centered page-scroll">
            <a href="<?php echo esc_url(home_url('/')); ?>">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/custom/logo.png'); ?>" alt="Logo">
            </a>
        </div>
    </div>

    <div class="collapse navbar-collapse" id="navbar-brand-centered">
        <div class="container">
            <?php
            wp_nav_menu([
                'theme_location' => 'primary',
                'menu_class'     => 'nav navbar-nav navbar-left page-scroll',
                'container'      => false,
                'fallback_cb'    => false,
            ]);

            wp_nav_menu([
                'theme_location' => 'secondary',
                'menu_class'     => 'nav navbar-nav navbar-right page-scroll',
                'container'      => false,
                'fallback_cb'    => false,
            ]);
            ?>
        </div>
    </div>
</nav>
<!-- /Navbar -->


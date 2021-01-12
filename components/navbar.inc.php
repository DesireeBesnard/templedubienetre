<!-- Navbar -->
<nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar" role="navigation">
    <div class="container">
    <a href="http://localhost/templedubienetre/"><img class="website-logo mr-3" src="<?php echo get_template_directory_uri() ?>/assets/logo-templedubienetre2.svg" alt="Logo Hammam Institut Temple du bien-être"></a>

    <!-- Brand and toggle get grouped for better mobile display -->
        <?php
        wp_nav_menu( array(
            'theme_location'    => 'primary',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse cust-purple raleway',
            'container_id'      => 'bs-example-navbar-collapse-1',
            'menu_class'        => 'nav navbar-nav',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
            ) );
        ?>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'your-theme-slug' ); ?>">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div>
            <a href="#"><i class="ml-2 cust-purple fab fa-lg fa-facebook-square"></i></a>
            <a href="#"><i class="ml-2 cust-purple fab fa-lg fa-instagram"></i></a>
        </div>
    </div>
</nav>
<!-- Navbar -->


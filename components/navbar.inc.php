<!-- Navbar -->
<nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar" role="navigation">
    <!-- <div class="container"> -->
    <a href="http://localhost/templedubienetre/"><img class="website-logo mx-4" src="<?php echo get_template_directory_uri() ?>/assets/logo-templedubienetre2.svg" alt="Logo Hammam Institut Temple du bien-être"></a>

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
        <div class="raleway">
            <span class="cust-purple roboto mr-3" id="phone-number"><i class="fas fa-phone-alt mr-1"></i> 03 81 86 10 35</span>
            <button type="button" class="btn rounded-pill text-white purple-button"><i class="far fa-calendar-alt mr-1"></i> RÉSERVER </button>
        </div>
    <!-- </div> -->
</nav>
<!-- Navbar -->


<nav role="navigation">
    <div class="nav-wrapper black">
        <a href="<?= home_url() ?>" class="brand-logo">Gobrenix</a>
        <a href="#" data-activates="main-mobile-navigation" class="button-collapse">
            <i class="mdi-navigation-menu"></i>
        </a>
        <?php wp_nav_menu(array(
            'menu' => 'mainmenu',
            'container' => false,
            'menu_class' => 'right hide-on-med-and-down',
            'fallback_cb' => false
        )); ?>
        <?php wp_nav_menu(array(
            'menu' => 'mainmenu',
            'container' => false,
            'menu_class' => 'side-nav' . (is_admin() ? ' admin-on' : ' admin-off'),
            'menu_id' => 'main-mobile-navigation',
            'fallback_cb' => false
        )); ?>
    </div>
</nav>

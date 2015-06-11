<footer class="page-footer grey lighten-2" role="contentinfo">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <h5 class="">Footer Content</h5>
                <p class="">You can use rows and columns here to organize your footer content.</p>
            </div>
            <div class="col l4 offset-l2 s12">
                <h5>Links</h5>
                <ul>
                    <li>
                        <a href="<?= bloginfo('rss2_url') ?>">
                            <i class="mdi-action-settings-input-antenna"></i>
                            RSS Feed
                        </a>
                    </li>
                    <li>
                        <a href="<?= home_url() . 'sitemap_index.xml' ?>">
                            <i class="mdi-maps-map"></i>
                            Sitemap
                        </a>
                    </li>
                    <li>
                        <a href="https://www.facebook.com/gobrenix?fref=ts">
                            <i class="mdi-social-group"></i>
                            Facebook
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            &copy; <?php echo date( "Y" ); echo " "; bloginfo( 'name' ); ?>
            <a class="right" href="#!">More Links</a>
        </div>
    </div>
</footer>

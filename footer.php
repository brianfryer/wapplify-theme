    <div class="footer-container">
        <footer class="wrapper">
            <section class="footer-widgets">
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("footer") ) : endif; ?>
            </section><!-- .footer-widgets -->
            <p class="copyright">&copy; <?php the_date(Y); ?> <?php bloginfo('name'); ?> &bull; <a href="/privacy/">Privacy Policy</a></p>
        </footer><!-- .wrapper -->
    </div><!-- .footer-container -->

<!-- BEGIN wp_footer() output -->
<?php wp_footer(); ?>
<!-- END wp_footer() output -->

</body>
</html>

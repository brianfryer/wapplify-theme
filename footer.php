    <div class="footer-container">
        <footer class="wrapper">
            <section class="footer-widgets">
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("footer") ) : endif; ?>
            </section><!-- .footer-widgets -->
        </footer><!-- .wrapper -->
    </div><!-- .footer-container -->

<!-- BEGIN wp_footer() output -->
<?php wp_footer(); ?>
<!-- END wp_footer() output -->

</body>
</html>

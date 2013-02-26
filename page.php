<?php get_header(); ?>

    <div class="content-container">
        <section class="wrapper">

            <?php the_post(); ?>
            <article>
                <div class="content">
                    <h1><?php the_title(); ?></h1>
                    <?php the_content(); ?>
                </div><!-- .content -->
                <aside class="sidebar">
                    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("page-sidebar") ) : endif; ?>
                </aside><!-- .sidebar -->
            </article>

        </section><!-- .wrapper -->
    </div><!-- .content-container -->

<?php get_footer(); ?>

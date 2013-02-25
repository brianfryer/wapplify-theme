<?php get_header(); ?>

    <div class="content-container">
        <section class="wrapper">

            <div class="home-hero">
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("home-hero") ) : endif; ?>
                <hr />
            </div><!-- .home-hero -->

            <div class="home-blurbs">
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("home-blurbs") ) : endif; ?>
                <hr />
            </div><!-- .home-blurbs -->

            <?php the_post(); ?>
            <article>
                <div class="content">
                    <?php the_content(); ?>
                </div><!-- .content -->
                <aside class="like box">
                    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("home-likebox") ) : endif; ?>
                </aside><!-- .like.box -->
            </article>

        </section><!-- .wrapper -->
    </div><!-- .content-container -->

<?php get_footer(); ?>

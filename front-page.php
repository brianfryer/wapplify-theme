<?php get_header(); ?>

    <div class="content-container">
        <section class="wrapper">

            <div class="home-hero">
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("home-hero") ) : endif; ?>
            </div>

            <div class="home-blurbs">
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("home-blurbs") ) : endif; ?>
            </div>

            <?php the_post(); ?>
            <article>
                <div class="content">
                    <h1><?php the_title(); ?></h1>
                    <?php the_content(); ?>
                </div>
                <aside class="like box">
                    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("home-likebox") ) : endif; ?>
                </aside>
            </article>

        </section>
    </div><!-- .content-container -->

<?php get_footer(); ?>

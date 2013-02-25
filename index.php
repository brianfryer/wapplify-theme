<?php get_header(); ?>

<div class="content-container">
    <section class="wrapper">

        <?php the_post(); ?>
        <article class="content">
            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>
        </article>

    </section>
</div><!-- .content-container -->

<?php get_footer(); ?>

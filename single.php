<?php get_header(); ?>

    <main class="main">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php get_template_part('template-parts/content', 'article'); ?>
        <?php endwhile; ?>
        <?php endif; ?>
    </main>
    
<?php get_footer(); ?>
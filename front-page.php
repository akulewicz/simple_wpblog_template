
    <?php get_header(); ?>

    <main>
    
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <article class="post">
        <header class="post__header">
            <h2 class="post__title"><?php the_title(); ?></h2>
            <p class="post__date"><?php the_date(); ?></p>
        </header>
        <?php the_excerpt(); ?>
    </article>
    <?php endwhile; ?>
    <?php endif; ?>

           
    </main>
    

    <?php get_footer(); ?>
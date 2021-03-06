    <?php get_header(); ?>
    <main class="main">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article class="post">
            <header class="post__header">
                <h2 class="post__title"><a class="post__link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h2>
                <p class="post__date"><?php the_date(); ?></p>
            </header>
            <?php the_excerpt(); ?>
        </article>
        <?php endwhile; ?>
        <?php endif; ?>
    </main>
    <?php get_footer(); ?>
    <!--end container -->
    </div>
    <!-- end wrapper -->
    </div>
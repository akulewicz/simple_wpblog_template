<article class="post">
        <header class="post__header post__header--single-page">
            <h2 class="post__title post__title--single-page"><?php the_title(); ?></h2>
            <p class="post__date"><?php the_date(); ?></p>
        </header>
        <?php the_content(); ?>
        <footer class="post-author">
                <?php echo get_avatar( get_the_author_meta('user_email'), '60', ' ', 'Zdjęcie autora', ['class'=>'post-author__avatar'] ); ?>
                <div class="post-author__info">
                    <span class="post-author__name">Autor: <b><?php the_author_meta('display_name'); ?></b></span>
                    <div class="post-author__description"><?php the_author_meta('description'); ?></div>
                </div>
        </footer>
</article>
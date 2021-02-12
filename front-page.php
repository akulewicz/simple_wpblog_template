
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
            <!-- <article class="short-post"> 
                <header class="short-post__header">
                    <h2 class="short-post__title"><a class="short-post__link" href="article.html">RaspberryPi - odpalamy diodę</a></h2>
                    <p class="post__date">25 stycznia 2021 r.</p>
                </header>
                
                <p>
                    Dziś wielki dzień! Przystąpimy do pierwszej próby skomunikowania naszej malinki z zewnętrznym urządzeniem. Na pierwszy ogień pójdzie dioda LED. Przy okazji zainstalujemy Node.js oraz nauczymy się korzystać z npm.
                </p>
            </article> -->

    <?php endwhile; ?>
    <?php endif; ?>

           
    </main>
    

    <?php get_footer(); ?>
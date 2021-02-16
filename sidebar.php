<aside class="sidebar sidebar--js">
    <button class="sidebar__switcher sidebar__switcher--js" aria-label="Otwórz menu"><i class="fas fa-bars"
            aria-hidden="true"></i></button>
    <div class="sidebar__panel sidebar__panel--js">
        <nav class="sidebar-navigation">
            <?php 
                wp_nav_menu(array(
                    'theme_location' => 'sidebar',
                    'container'      => 'ul',
                    'menu_class'     => 'sidebar-navigation__list'
                    )); 
            ?>
        </nav>
        <nav class="social-links">
            <a class="social-links__link" href="https://www.facebook.com/poruszeni/" aria-label="Facebook"><i
                    class="fab fa-facebook-square social-links__item" aria-hidden="true"></i></a>
            <a class="social-links__link" href="https://www.youtube.com/user/kulabwo/" aria-label="Youtube"><i
                    class="fab fa-youtube-square social-links__item" aria-hidden="true"></i></a>
            <a class="social-links__link" href="https://github.com/akulewicz" aria-label="GitHub"><i
                    class="fab fa-github-square social-links__item" aria-hidden="true"></i></a>
        </nav>
    </div>
</aside>
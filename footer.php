<footer class="footer">
        <nav class="footer-navigation">
            <?php 
                wp_nav_menu(array(
                    'theme_location' => 'footer',
                    'container'      => 'ul',
                    'menu_class'     => 'footer-navigation__list'
                    )); 
            ?>
        </nav>
        <p>&copy; Arkadiusz Kulewicz 2021 r.</p>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>
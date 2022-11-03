<section class="footer">
    <div class="mc-container">
        <div class="menu-footer">
            <?php
                wp_nav_menu( array(
                    'theme_location' => 'menu_footer',
                ) );
            ?>
        </div>
    </div>
</section>
<?php wp_footer() ?>
</body>

</html>
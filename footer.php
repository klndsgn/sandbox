<?php defined('ABSPATH') or die();
/**
 * Default Footer
 * @author Nina Taberski-Besserdich (nina.taberski@besserdich.com)
 * @package WordPress
 * @subpackage BIC Bootstrap Wordpress Theme
 */
?>


<footer>

    <div class="footer-wrapper">
        <div class="row">
            <!--  <div class="footer-divider"></div>-->
            <div class="container">
                <?php get_sidebar('footer'); ?>
            </div>
        </div>
    </div>

    <div class="copyright-wrapper">
        <div class="row ">
            <div class="container">

                <div class="row copyright">    
                    <div class="col-md-12">


                        <div class="pull-left copyright-text">
                            <?php
                            $options = get_option('bicbswp_theme_options');
                            if ($options['footertext'] != '') {
                                echo ('<p>');
                                echo stripslashes($options['footertext']);
                                echo ('</p>');
                            } else {
                                ?>
                                <ul class="credit">
                                    <li>&copy; <?php echo date('Y'); ?> <?php bloginfo(); ?> by <a href="http://klndsgn.de" target="_blank">kleindesign</a></li>
                                </ul><!-- end .credit -->
                            <?php } ?>

                        </div>

                        <div class="footer-menu-wrapper">

                            <?php
                            if (has_nav_menu('footer-menu')) {

                                wp_nav_menu(array(
                                    'menu' => '',
                                    'theme_location' => 'footer-menu',
                                    'depth' => 1,
                                    'container' => false,
                                    'menu_class' => 'footer-menu',
                                    'fallback_cb' => 'wp_page_menu',
                                    'walker' => new wp_bootstrap_navwalker())
                                );
                            }
                            ?>

                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>

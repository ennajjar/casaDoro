<!-- Newsletter Footer -->
<?php
$url_en = pll_home_url('en');
$url_ar = "#";
?>
<div class="newsletter-footer">
    <div class="container">
        <ul class="list-socials">
            <li><a title="Casa D'Oro - Twitter" target="_blank" href="#"><i class="icon fa fa-twitter"></i></a></li>
            <li><a title="Casa D'Oro - Facebook" target="_blank" href="#"><i class="icon fa fa-facebook"></i></a></li>
            <li><a title="Casa D'Oro - Instagram" target="_blank" href="https://www.instagram.com/casa_doro/"><i class="icon fa fa-instagram"></i></a></li>
        </ul>
        <div class="content-nlt">
              <?php if(pll_current_language()=='en'){ echo do_shortcode( '[formidable id=7]' );}?>
              <?php if(pll_current_language()=='ar'){ echo do_shortcode( '[formidable id=10]' );}?>
        </div>
    </div>
    <!-- End container -->
</div>
<!-- End newsletter -->

<footer class="footer">
    <div class="footer-wrapper">
        <div class="footer-widgets">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-12 col-sm-6">
                                <div class="widget">
                                    <a class="logo-footer" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="logo-footer"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/logo-footer.png" alt="logo-footer"></a>

                                    <div class="widget-content">
                                        <?php dynamic_sidebar( 'description_01' ); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6"></div>
                    <div class="col-md-2 col-sm-6"></div>
                    <div class="col-md-4">
                        <div class="widget">
                            <div class="widget-content">
                                <?php dynamic_sidebar( 'description_02' ); ?>
                            </div>
                        </div>
                        <div class="widget">
                            <h3 class="widget-title"><?php _e('PAYMENT ACCEPT','casaDoro');?></h3>
                            <div class="widget-content">
                                <a href="#" title="payment"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/footer-pay.png" alt="payment"></a>
                            </div>
                        </div><!-- /.widget -->
                    </div>
                </div>
            </div>
        </div><!-- /.footer-widgets -->
        <div class="container">        
            <div class="footer-copyright">
                <div class="copyright">
                    <p><?php _e('Copyright &copy; 2018 Casa D Oro - All Rights Reserved.','casaDoro');?></p>
                </div>
                <div class="footer-nav">

                   

                    <nav>
                        <?php
                        $menuMain = array(
                          'menu'            => 'Menu footer',
                          'items_wrap'      => ' <ul>%3$s</ul>',
                        );
                        wp_nav_menu( $menuMain );
                    ?>
                    </nav>


                    <nav>
                        <ul>
                            <li class="dropdown dropup c-lng">
                                <div class="language-select">

                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <span class="select-title"><?php _e('Language:','casaDoro');?></span>
                                        <span class="color"><?php echo (pll_current_language()=='en') ? 'ENG' :'AR' ?></span>
                                        <span class="icon icon-arrow-down"></span>
                                    </a>

                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="<?php echo $url_en ?>" title="English" class="<?php echo (pll_current_language()=='en') ? 'active':'' ?>">English</a></li>
                                        <li><a href="<?php echo $url_ar ?>" title="Arabic" class="<?php echo (pll_current_language()=='ar') ? 'active':'' ?>">Arabic</a></li>
                                    </ul>
                                </div>
                            </li>

                          <!--   <li class="dropdown dropup">
                                <div class="price-select">
                                    <span class="select-title">Price:</span>

                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <span class="color">USD</span>
                                        <span class="icon icon-arrow-down"></span>
                                    </a>

                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#" title="USD">USD</a></li>
                                        <li><a href="#" title="AED">AED</a></li>
                                        <li><a href="#" title="EUR">EUR</a></li>
                                    </ul>
                                </div>
                            </li> -->
                        </ul>
                    </nav>
                </div>
            </div><!-- /.footer-copyright -->
        </div><!-- End container -->
    </div><!-- /.footer-wrapper -->
</footer><!-- /footer -->
<?php  wp_footer();?>

</body>
</html>

<?php
/**
 * Template Name: contact
**/
?>
<?php
  get_header();
?>

<div id="main">
    <div class="contact-map space-50" id="contact-map"  data-lat="25.1940923" data-lng="55.2477501">
        <!-- // -->
    </div><!-- /.contact-map -->

    <div class="contact-wrapper">
        <div class="margin-bottom-100">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="contact-content">
                            <div class="contact-header">
                                <div class="contact-image">
                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/samples/banners/contact/banner-contact-1.jpg" alt="">
                                </div>
                                <?php echo get_field('description_Bottom_contact');?>
                              
                            </div><!-- /.contact-header -->

                            <div class="contact-block">
                                <?php echo get_field('shop_infomation');?>
                            </div><!-- /.contact-block -->
                        </div><!-- /.contact-content -->
                    </div><!-- /.col-md-6 -->

                    <div class="col-md-6">
                        <div class="contact-content">
                            <div class="contact-form-heading">
                                <h2><?php the_title();?></h2>
                                <?php echo get_field('description_top_contact');?>
                            </div><!-- /.contact-content -->

                            <div id="ajax-message"></div>
                            <?php /*
                            <form action="contact.php" method="POST"  id="contact-form">
                                <div class="form-group ">
                                    <label for="contact-name">Name <span>*</span></label>
                                    <input type="text" name="name" id="contact-name" class="form-control" placeholder="Name" required>
                                </div><!-- /.form-group -->

                                <div class="form-group">
                                    <label for="contact-email">Email <span>*</span></label>
                                    <input type="email" name="email" id="contact-email" class="form-control" placeholder="Email" required>
                                </div><!-- /.form-group -->

                                <div class="form-group">
                                    <label for="contact-phone">Phone number <span>*</span></label>
                                    <input type="url" name="website" id="contact-phone" class="form-control" placeholder="Phone">
                                </div><!-- /.form-group -->

                                <div class="form-group">
                                    <label for="contact-message">Message <span>*</span></label>
                                    <textarea name="message" id="contact-message" class="form-control" rows="7" required  placeholder="Your message"></textarea>
                                </div><!-- /.form-group -->

                                <div class="form-button">
                                    <button type="submit" class="btn btn-lg btn-dark">Send Message</button>
                                </div><!-- /.form-button -->
                            </form>*/
                             //echo do_shortcode( '[formidable id=2]' );?>
                                <?php //echo do_shortcode( '[formidable id=10]' )?>

              <?php if(pll_current_language()=='en'){ echo do_shortcode( '[formidable id=2]' );}?>
              <?php if(pll_current_language()=='ar'){ echo do_shortcode( '[formidable id=10]' );}?>
                        </div>
                    </div><!-- /.col-md-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.margin-bottom-100 -->

        <!-- // -->
    </div><!-- /.contact-map -->

</div><!-- /.contact-wrapper -->


</div>
    <script>


    jQuery(function() {
        aweMaps();
    });
    </script> 
    
<?php get_footer();?>



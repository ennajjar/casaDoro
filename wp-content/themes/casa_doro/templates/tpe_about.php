<?php
/**
 * Template Name: about
**/
?>
<?php
  get_header();
?>
	
<div id="main">
    
    <div class="main-header background background-image-heading-about-us">
        <div class="container">
            <h1><?php the_title();?></h1>
        </div>
    </div>
    

    <div id="breadcrumb">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"> <?php _e('Home','casaDoro');?></a></li>
                <li class="active"><span><?php the_title();?></span></li>
            </ol>       
        </div>
    </div>

    
    <section>
        <div class="container">

            <div class="padding-vertical-50 border-bottom">
                <div class="row">
                    <div class="col-md-9 col-md-offset-1">

                        <div class="awe-box center">
                            <div class="awe-box-media space-20">
                                <div class="awe-box-image">
                                    <img src="<?php echo get_field("image_about")?>" alt="">
                                </div>
                            </div><!-- /.awe-box-media -->

                            <div class="awe-box-content">
                               <?php echo get_field("about_us")?>
                            </div><!-- /.awe-box-content -->
                        </div><!-- /.awe-box -->

                    </div>
                </div>
            </div><!-- /.padding-vertical-50 -->

            <div class="padding-vertical-50 border-bottom">
                <div class="row">

                 <?php if(get_field('our_service_about')): ?>
                       <?php while(the_repeater_field('our_service_about')): ?>
                    <div class="col-md-4 col-sm-4">

                        <div class="awe-box center box-hover margin-bottom-25">
                            <div class="awe-box-media">
                                <div class="awe-box-icon icon-large">
                                    <!-- <i class="icon icon-like"></i> -->
                                    <img src="<?php echo get_sub_field('box_media_about');?>" alt="like" style="max-width: 100px;">
                                </div>
                            </div><!-- /.awe-box-media -->

                            <div class="awe-box-content">
                                <h3><?php echo get_sub_field('box_title_about');?></h3>
                                <?php echo get_sub_field('box_description_');?>
                            </div><!-- /.awe-box-content -->
                        </div><!-- /.awe-box -->

                    </div>
                    <?php endwhile;?>
                    <?php endif;?>
                   
                </div><!-- /.row -->
            </div><!-- /.padding-vertical-50 -->


        </div><!-- /.container -->
    </section><!-- /section -->

</div>
	
<?php get_footer();?>
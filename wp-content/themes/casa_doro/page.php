<?php
  get_header();
?>
    

<div id="main">
    
    <div class="main-header background background-image-heading-product" style="background-image:url('<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/backgrounds/heading-lookbook.jpg');">
        <div class="container">
            <h1><?php the_title();?></h1>
        </div>
    </div>
    <div id="breadcrumb">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="<?php bloginfo('home'); ?>">Home</a></li>
                <li class="active"><span><?php the_title();?></span></li>
            </ol>

        </div>
    </div><!-- breadcrumb -->

    <section>
        <div class="container">
            <?php the_content();?>
        </div>
    </section>
</div>
    
    
<?php get_footer();?>
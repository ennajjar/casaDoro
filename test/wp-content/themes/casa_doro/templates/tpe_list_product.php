<?php
/**
 * Template Name: list product
**/
?>
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
					<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"> <?php _e('Home','casaDoro');?></a></li>
					<li class="active"><span><?php the_title();?></span></li>
				</ol>
			</div>
		</div><!-- breadcrumb -->

		<section id="cart">

			<div class="container">

				<p class="my_cart">lite product</p>
				<?php the_content();?>
				<?php  echo do_shortcode( '[products]' );?>
			</div>
		</section>
	</div>
	
<?php get_footer();?>
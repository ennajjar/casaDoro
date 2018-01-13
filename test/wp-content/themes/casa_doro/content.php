
<?php var_dump("test ");?>
<div id="post-<?php the_ID(); ?>" class="product product-list <?php post_class(); ?>">
    <div class="product-media">
        <div class="product-thumbnail">
            <a href="product-fullwidth.html" title="">
                <img src="./img/samples/products/grid/1.jpg" alt="">
            </a>
        </div><!-- /.product-thumbnail -->
    </div><!-- /.product-media -->

    <div class="product-body">
    	<?php if ( is_single() ) : ?>
    		<h2 class="product-name"><?php the_title(); ?></h2>
    	<?php else : ?>
	        <h2 class="product-name">
	            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
	        </h2><!-- /.product-product -->
        <?php endif; // is_single() ?>
        <?php if ( is_search() ) : // Only display Excerpts for Search ?>
	        <div class="product-description">
	   			<?php the_excerpt(); ?>
				<?php the_content(); ?>
	        </div>
    		<?php else : ?>
			 <div class="product-description">
				<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'casa_doro' ) ); ?>
				<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'casa_doro' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
			</div><!-- .entry-content -->
		<?php endif;?>
        <div class="product-list-actions">
        	<a class="btn btn-lg btn-primary" href="<?php the_permalink(); ?>" title="">Read more</a>
        </div><!-- /.product-actions -->

    </div><!-- /.product-body -->
</div><!-- /.product -->

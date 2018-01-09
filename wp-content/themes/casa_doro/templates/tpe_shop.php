<?php
/**
 * Template Name: shop
**/
?>
<?php
  get_header();
?>


<!-- BEGIn BEST SELLER -->
        <?php
            $params = array('posts_per_page' => -1,'post_type' => 'product' );


            $wc_query = new WP_Query($params);
            $posts = $wc_query->posts;
            $count = $wc_query->post_count;

           // var_dump($count);

           // for ($i=0; $i < 2 ; $i++) { 
            // $n=0;
            //     for ($i=0; $i <$count ; $i++) { 
            //       if($n<2) {
            //             var_dump($posts[$i]);
            //             $n++;
            //         }
            //     }
            // //}
            $d=0;
        ?>
                        <?php if ($wc_query->have_posts()) : ?>

                            <?php while ($wc_query->have_posts()) :
                                $wc_query->the_post(); ?>


                                <?php $product = new WC_Product(get_the_ID()); //var_dump($product); ?>

                                <?php
    global $product;

    $attachment_ids = $product->get_gallery_attachment_ids();


?>

                               
    <div class="modal fade in" id="quickview-modal-<?php echo $d;?>" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close btn btn-close" data-dismiss="modal" aria-hidden="true">
                        <i class="fa fa-times"></i>
                    </button>
                </div>
                <div class="product-info woocommerce">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="quickview-carousel carousel slide" data-ride="carousel">
                                <!-- Indicators -->
                           
                                <!-- Wrapper for slides -->
                                    <div class="carousel-inner">
                                    <?php 
                                        foreach( $attachment_ids as $attachment_id ) {
                                            $image_link = wp_get_attachment_url( $attachment_id );?>
                                                <div class="item">
                                                    <img src="<?php echo $image_link; ?>" alt="">
                                                </div> 
                                        <?php   } ?>
                                    </div>

                                <!-- Controls -->
                                <a class="left carousel-control" href=".quickview-carousel" data-slide="prev">
                                    <span class="fa fa-angle-left"></span>
                                </a>
                                <a class="right carousel-control" href=".quickview-carousel" data-slide="next">
                                    <span class="fa fa-angle-right"></span>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-6">
                            <div class="product-details-wrapper">
                                <h2 class="product-name">
                                    <a href="<?php echo get_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                                </h2><!-- /.product-name -->


                                <div class="product-status">
                                    <?php if($product->stock_status=="instock") echo '<span class="color-in-stock">In Stock </span>'; else echo '<span class="color-out-stock">Out Of Stock</span>';?>
                                    <span>-</span>
                                    <small>SKU: <?php echo $product->sku;?></small>
                                </div><!-- /.product-status -->
                                  <div class="product-price">
                                            
                                            <span class="amount"> <?php echo $product->get_price_html();?></span>
                                            
                                        </div><!-- /.product-price -->
                                <div class="product-stars">
                                    <span class="rating">
                                        <?php $n = get_field('number_star',get_the_ID()); for ($i=0; $i <5  ; $i++) { ?>
                                            <?php if($i < $n) $active =""; else $active="disable"; ?>
                                            <span class="star <?php echo $active; ?>"></span>
                                        <?php }?>
                                    </span>
                                </div><!-- /.product-stars -->

                                <div class="product-description">
                                    <p><?php the_content();?></p>
                                </div><!-- /.product-description -->

                                <div class="product-list-actions">
                                 <!--    <button class="btn btn-lg btn-primary">Add to cart</button>
                                    <button class="wishlist">Add to wishlist</button>
 -->
                                <?php echo  do_shortcode('[add_to_cart id="'.get_the_ID().'" show_price="false" style="border:none;"]'); ?>
                                             
                                <?php echo  do_shortcode(' [yith_wcwl_add_to_wishlist product_id="'.get_the_ID().'" ] '); ?>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

                

                            <?php $d++; endwhile; ?>
                            
                            <?php wp_reset_postdata(); ?>
                            <?php else:  ?>
                            <?php _e( 'No Products' ); ?>
                        <?php endif;?>

	 <?php global $paged; // the_content();global $paged;
                    $params = array('post_type' => 'product','posts_per_page' => 9,'order' => 'DSC', 'paged' => $paged );

                    $wp_query = new WP_Query($params);
                ?>
<div id="main">
    
    <div class="main-header background background-image-heading-products">
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

    
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-md-push-3">
    
<div class="products products-grid-wrapper">
    <div class="row">

                <?php  $z=0; if ($wp_query->have_posts()) : ?>
                    <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
                    <?php $product = new WC_Product(get_the_ID());?>
                     <div class="col-md-4 col-sm-4 col-xs-12">
                      <div class="product product-grid">
                                    <div class="product-media">
                                        <div class="product-thumbnail">
                                            <a href="<?php the_permalink(); ?>" title="<?php the_permalink(); ?>">
                                                 <?php the_post_thumbnail(get_the_ID(), array('class' => 'current')); ?>
                                            </a>
                                        </div><!-- /.product-thumbnail -->

                                        <div class="product-hover">
                                            <div class="product-actions">
                                                <?php echo  do_shortcode('[add_to_cart id="'.get_the_ID().'" show_price="false" style="border:none;"]'); ?>
                                             
                                               <?php echo  do_shortcode(' [yith_wcwl_add_to_wishlist product_id="'.get_the_ID().'" ] '); ?>

                                                <a href="#" class=" quickview awe-button product-quick-view" title="Quickview" data-toggle="modal" data-target="#quickview-modal-<?php echo $z;?>">
                                                    <i class="icon icon-eye"></i>
                                                </a>
                                            </div>
                                        </div><!-- /.product-hover -->
                                        

                                        
                                    </div><!-- /.product-media -->

                                    <div class="product-body">
                                        <h2 class="product-name">
                                            <a href="<?php the_permalink(); ?>" title="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                        </h2><!-- /.product-product -->
                                        <div class="rating small">
                                        <?php $n = get_field('number_star',get_the_ID()); for ($i=0; $i <5  ; $i++) { ?>
                                            <?php if($i < $n) $active =""; else $active="disable"; ?>
                                            <span class="star <?php echo $active; ?>"></span>
                                        <?php }?>
                                            <!-- <span class="star disable"></span> -->
                                        </div>

                                        <div class="product-price">
                                            
                                            <span class="amount"> <?php echo $product->get_price_html();?></span>
                                            
                                        </div><!-- /.product-price -->
                                    </div><!-- /.product-body -->
                       </div>
                       </div>
                    <?php  $z++; endwhile; ?>
                <?php endif;?>  

        
    </div>
</div>
                    <?php ventec_pagination() ?>         
                 


            </div><!-- /.col-* -->

            <div class="col-md-3 col-md-pull-9">
                <div id="shop-widgets-filters" class="shop-widgets-filters">
                    
                    <div id="widget-area" class="widget-area">
                        <div class="widget woocommerce widget_product_prices">
                            <h3 class="widget-title">Prices</h3>

                            <ul>
                                <li><a href="#" title="">None</a></li>
                                <li><a href="#" title="">$35  -  $100</a></li>
                                <li class="active"><a href="#" title="">$100 - $200</a></li>
                                <li><a href="#" title="">$200 - $300</a></li>
                                <li><a href="#" title="">$300  -  $400</a></li>
                                <li><a href="#" title="">$400  -  $500</a></li>
                                <li><a href="#" title="">$500  -  $600</a></li>
                            </ul>
                        </div><!-- /.widget -->
                    </div>
                </div>
                <div id="open-filters" data-toggle="dropdown" data-target="#shop-widgets-filters">
                    <i class="fa fa-filter"></i>
                    <span>Filter</span>
                </div>
            </div><!-- /.col-* -->
        </div><!-- /.row -->
    </div><!-- /.container -->

</div>

	
<?php get_footer();?>
<?php
    get_header();
    global $post;

    $template = get_page_by_template('templates/tpe_shop');

?>
       

<div id="main">
    
    <div class="main-header background background-image-heading-product">
        <div class="container">
            <h1> <?php _e('Product','casaDoro');?></h1>
        </div>
    </div>
    

    <div id="breadcrumb">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"> <?php _e('Home','casaDoro');?></a></li>
                <li class=""><span><?php _e('Product','casaDoro');?></span></li>
                <li class="active"><span><?php the_title();?></span></li>
            </ol>

        </div>
    </div>

    <?php 
        $params = array(
         'p' => get_the_ID(),
         'post_type' => 'product'
        );
    ?>

    <div class="container">

        <?php
             do_action( 'woocommerce_before_single_product' );

             if ( post_password_required() ) {
                echo get_the_password_form();
                return;
             }
        ?>


   <?php  $wc_query = new WP_Query($params); 
    global $product;
    if ($wc_query->have_posts()) : ?>

                            <?php while ($wc_query->have_posts()) :
                                $wc_query->the_post(); ?>


                                <?php $product = new WC_Product(get_the_ID()); //var_dump($product);  var_dump($wc_query);


                                

    $attachment_ids = $product->get_gallery_attachment_ids();
                                     ?>


        <div class="row">
            <div class="col-md-6">
                <div class="product-slider-wrapper thumbs-bottom">

                    <div class="swiper-container product-slider-main">
                        <div class="swiper-wrapper">
                            
                            <?php
                                foreach( $attachment_ids as $attachment_id ) {
                                    $image_link = wp_get_attachment_url( $attachment_id );
                                     ?>
                                        <div class="swiper-slide">
                                            <div class="easyzoom easyzoom--overlay">
                                                <a href="<?php echo $image_link; ?>" title="">
                                                    <img src="<?php echo $image_link; ?>" alt="">
                                                    <?php  wp_get_attachment_image ( $attachment_id, 'thumbnail' ); ?>
                                                </a>
                                            </div>
                                        </div>
                                <?php   } ?>
                            
                        </div>

                        <div class="swiper-button-prev"><i class="fa fa-chevron-left"></i></div>
                        <div class="swiper-button-next"><i class="fa fa-chevron-right"></i></div>
                    </div><!-- /.swiper-container -->

                   <!--  <div class="swiper-container product-slider-thumbs">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="./img/samples/products/product/tiny/thumb-1.jpg" alt="">
                            </div>       
                            <div class="swiper-slide">
                                <img src="./img/samples/products/product/tiny/thumb-3.jpg" alt="">
                            </div>                            
                            
                        </div>
                    </div>-->

                </div><!-- /.product-slider-wrapper -->
            </div>

            <div class="col-md-6">
                <nav class="pnav">

                    <a href="<?php echo get_permalink($template->ID)?>" class="back-to-pcate" title="Back to Products list">
                        <i class="fa fa-chevron-left"></i>
                        <span><?php _e('Back to Products list','casaDoro');?></span>
                    </a>
                </nav><!-- /header -->

                <div class="product-details-wrapper">
                    <h2 class="product-name"><?php the_title(); ?></h2>

                    <div class="product-status">
                    <?php if(current_user_can('administrator') ) {   ?> 
                        <span class="color-in-stock"><?php echo $product->stock_quantity ?></span>
                    <?php } ?>
                       <?php if($product->stock_status=="instock") echo "<span class='color-in-stock'><?php _e('In Stock','casaDoro');?> </span>"; else echo "<span class='color-out-stock'><?php _e('Out Of Stock','casaDoro');?></span>";?>
                        <span>-</span>
                        <small>SKU: <?php echo $product->sku;?></small>
                    </div><!-- /.product-status -->

                    <div class="product-stars">
                        <span class="rating">
                            <?php $n = get_field('number_star',get_the_ID()); for ($i=0; $i <5  ; $i++) { ?>
                                <?php if($i < $n) $active =""; else $active="disable"; ?>
                                <span class="star <?php echo $active; ?>"></span>
                            <?php }?>
                        </span>
                    </div><!-- /.product-stars -->


                    <div class="product-features">
                        <p><?php the_content();?></p>
                    </div><!-- /.product-description -->


                   
        
                  

                    <div class="product-actions-wrapper">

                        <div class="product-list-actions">
                         <div id="product-details">
                            <?php
                                do_action( 'woocommerce_single_product_summary' );
                            ?>
                            <span class="product-price">
                                <span class="amount"> <?php echo $product->get_price_html();?></span>
                            </span><!-- /.product-price -->


                      <!--       <a href="./cart/?add-to-cart=<?php echo get_the_ID();?>" class="btn btn-lg btn-primary" >Add to cart</a>
 -->

                                <?php //echo  do_shortcode('[add_to_cart id="'.get_the_ID().'" show_price="false" style="border:none;"]'); ?>
                                             
                                <?php echo  do_shortcode(' [yith_wcwl_add_to_wishlist product_id="'.get_the_ID().'" ] '); ?>

                        </div>
                            

                        </div><!-- /.product-list-actions -->
                    </div><!-- /.product-actions-wrapper -->

                </div><!-- /.product-details-wrapper -->
            </div>
        </div>

         <div class="product-details-left">
            <div role="tabpanel" class="product-details">
                <nav>
                    <ul class="nav" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#product-infomation"  data-toggle="tab"><?php _e('Dimensions (cm)','casaDoro');?></a>
                        </li> 
                        <li role="presentation">
                            <a href="#product-infomation2"  data-toggle="tab"><?php echo $product->attributes['material']['name'] ?></a>
                        </li>
                    </ul><!-- /.nav -->
                </nav><!-- /nav -->

                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="product-infomation">
                        <ul>
                            <?php if($product->weight) : ?>
                                <li>
                                    <span>Weight</span>
                                    <span class="value"><?php echo $product->weight;?> <?php _e('kg','casaDoro');?> </span>
                                </li>
                            <?php endif;?>
                            <?php if($product->length) : ?>
                            <li>
                                <span>Length</span>
                                <span class="value"><?php echo $product->length;?></span>
                            </li>
                            <?php endif;?>
                            <?php if($product->width) : ?>
                             <li>
                                <span>Width</span>
                                <span class="value"><?php echo $product->width;?> <?php _e('(CM)','casaDoro');?></span>
                            </li> 
                            <?php endif;?> 
                            <?php if($product->height) : ?>
                            <li>
                                <span>Height</span>
                                <span class="value"><?php echo $product->height;?> <?php _e('(CM)','casaDoro');?></span>
                            </li>
                            <?php endif;?>
                        </ul>

                    </div><!-- /.tab-pane -->
                  
                    <div role="tabpanel" class="tab-pane" id="product-infomation2">
                        <ul>
                            <li>
                            <?php foreach ($product->attributes['material']['options'] as $val) {?>
                                <span> <?php echo $val; ?></span>
                                <?php } ?>
                            </li>
                        </ul>

                    </div><!-- /.tab-pane -->

                  

                    
                </div><!-- /.tab-pane -->
            </div><!-- /.tab-content -->
        </div><!-- /.product-details-left -->

        <?php endwhile;    wp_reset_postdata();  endif;?>
    


        <div class="product-socials">
            <ul class="list-socials">
                
                <li><a href="#" data-toggle="tooltip" title="Twitter"><i class="icon icon-twitter"></i></a></li>
                <li><a href="#" data-toggle="tooltip" title="Facebook"><i class="icon icon-facebook"></i></a></li>

            </ul>
        </div><!-- /.product-socials -->


       

<?php 
    // Get the posts
        $related_posts = get_posts( apply_filters('woocommerce_product_related_posts', array(
                'orderby' => 'rand',
                'posts_per_page' =>8,
                'post_type' => 'product'
            )   ) );

        //var_dump($related_posts);
?>

        <div class="relared-products">
            <div class="relared-products-header margin-bottom-50">
                <h3 class="upper"><?php _e('Related Products','casaDoro');?></h3>
            </div>

            <div class="products owl-carousel" data-items="4">
              
                <?php $j=0; foreach ($related_posts as  $value) {?>
                   
                            <?php $product2 = new WC_Product($value->ID);// var_dump($product); echo $value->ID;?>

                
                
                                <div class="product product-grid">
                                    <div class="product-media">
                                        <div class="product-thumbnail">
                                            <a href="<?php the_permalink($value->ID); ?>" title="<?php echo $value->post_title; ?>">
                                                <?php  echo get_the_post_thumbnail($value->ID,'full',array('class' => 'current')); ?>
                                            </a>
                                        </div><!-- /.product-thumbnail -->

                                        <div class="product-hover">
                                            <div class="product-actions">
                                                <?php echo  do_shortcode('[add_to_cart id="'.$value->ID.'" show_price="false" style="border:none;"]'); ?>
                                             
                                               <?php echo  do_shortcode(' [yith_wcwl_add_to_wishlist product_id="'.$value->ID.'" ] '); ?>

                                               
                                            </div>
                                        </div><!-- /.product-hover -->
                                        

                                        
                                    </div><!-- /.product-media -->

                                    <div class="product-body">
                                        <h2 class="product-name">
                                            <a href="<?php the_permalink($value->ID); ?>" title="<?php echo $value->post_title; ?>"><?php echo $value->post_title; ?></a>
                                        </h2><!-- /.product-product -->
                                        <div class="rating small">
                                        <?php $n = get_field('number_star',$value->ID); for ($i=0; $i <5  ; $i++) { ?>
                                            <?php if($i < $n) $active =""; else $active="disable"; ?>
                                            <span class="star <?php echo $active; ?>"></span>
                                        <?php }?>
                                            <!-- <span class="star disable"></span> -->
                                        </div>

                                        <div class="product-price">
                                            
                                            <span class="amount"> <?php echo $product2->get_price_html();?></span>
                                            
                                        </div><!-- /.product-price -->
                                    </div><!-- /.product-body -->
                                </div>
                                <?php $j++;} ?> 
            </div>
        </div><!-- /.relared-products -->
    </div>

    <script>
    jQuery(function() { aweProductRender(true); });
    </script>

</div>
<?php get_footer();?>
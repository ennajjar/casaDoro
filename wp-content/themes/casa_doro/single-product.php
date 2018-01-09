<?php
    get_header();
    global $post;

    $template = get_page_by_template('templates/tpe_shop');
?>



<!-- BEGIn BEST SELLER -->
        <?php
            $params = array('posts_per_page' => -1,'numberposts'=>2,'post_type' => 'product',
                'tax_query' => array(
                    array(
                        'taxonomy' => 'product_cat',
                        'field'    => 'slug',
                        'terms'    => 'best-seller',
                        'operator' => 'IN',
                    ),
                )
            );


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

<div id="main">
    
    <div class="main-header background background-image-heading-product">
        <div class="container">
            <h1>Product</h1>
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

   <?php  $wc_query = new WP_Query($params); 
    global $product;
    if ($wc_query->have_posts()) : ?>

                            <?php while ($wc_query->have_posts()) :
                                $wc_query->the_post(); ?>


                                <?php $product = new WC_Product(get_the_ID());// var_dump($product);


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

                    <div class="swiper-container product-slider-thumbs">
                        <div class="swiper-wrapper">
                            <!-- <div class="swiper-slide">
                                <img src="./img/samples/products/product/tiny/thumb-1.jpg" alt="">
                            </div>       
                            <div class="swiper-slide">
                                <img src="./img/samples/products/product/tiny/thumb-3.jpg" alt="">
                            </div>       -->                     
                            
                        </div>
                    </div><!-- /.swiper-container -->

                </div><!-- /.product-slider-wrapper -->
            </div>

            <div class="col-md-6">
                <nav class="pnav">

                    <a href="<?php echo get_permalink($template->ID)?>" class="back-to-pcate" title="Back to Products list">
                        <i class="fa fa-chevron-left"></i>
                        <span>Back to Products list</span>
                    </a>
                </nav><!-- /header -->

                <div class="product-details-wrapper">
                    <h2 class="product-name"><?php the_title(); ?></h2>

                    <div class="product-status">
                    <?php if(current_user_can('administrator') ) {   ?> 
                        <span class="color-in-stock"><?php echo $product->stock_quantity ?></span>
                    <?php } ?>
                       <?php if($product->stock_status=="instock") echo '<span class="color-in-stock">In Stock </span>'; else echo '<span class="color-out-stock">Out Of Stock</span>';?>
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
        
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="p_color">Gift</label>
                            <select name="p_color" id="p_color" class="form-control">
                                <option value="No">No</option>
                                <option value="Yes">Yes</option>
                            </select>
                        </div>
                    </div>

                    
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="p_color">Color</label>
                            <select name="p_color" id="p_color" class="form-control">
                                <option value="">Blue</option>
                                <option value="">Black</option>
                                <option value="">Gold</option>
                                <option value="">White</option>
                            </select>
                        </div>
                    </div>

                    <div class="product-actions-wrapper">
                        <form action="#" method="POST">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="p_qty">Qty</label>
                                        <select name="p_qty" id="p_qty" class="form-control">
                                            <option value="">1</option>
                                            <option value="">2</option>
                                            <option value="">3</option>
                                            <option value="">4</option>
                                            <option value="">5</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </form><!-- /.form -->
                        
                        <form action="#" method="POST" >
                           <div class="row">
                                <div class="col-md-12">
                                    <label for="reply-text">Note</label>
                                    <textarea name="reply-text" class="form-control" id="reply-text" rows="7" placeholder="Note"></textarea>
                                </div>
                            </div><!-- /.form-group -->
                        </form><!-- /form -->

                        <div class="product-list-actions">
                            <span class="product-price">
                                <span class="amount"> <?php echo $product->get_price_html();?></span>
                                <del class="amount"><?php echo $product->sale_price;?></del>
                            </span><!-- /.product-price -->
                      <!--       <a href="./cart/?add-to-cart=<?php echo get_the_ID();?>" class="btn btn-lg btn-primary" >Add to cart</a>
 -->

                                <?php echo  do_shortcode('[add_to_cart id="'.get_the_ID().'" show_price="false" style="border:none;"]'); ?>
                                             
                                <?php echo  do_shortcode(' [yith_wcwl_add_to_wishlist product_id="'.get_the_ID().'" ] '); ?>


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
                            <a href="#product-infomation"  data-toggle="tab">Dimensions (cm)</a>
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
                                    <span class="value"><?php echo $product->weight;?> kg </span>
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
                                <span class="value"><?php echo $product->width;?> (CM)</span>
                            </li> 
                            <?php endif;?> 
                            <?php if($product->height) : ?>
                            <li>
                                <span>Height</span>
                                <span class="value"><?php echo $product->height;?> (CM)</span>
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
                <h3 class="upper">Related Products</h3>
            </div>

            <div class="products owl-carousel" data-items="4">
              
                <?php $j=0; foreach ($related_posts as  $value) {?>
                   
                            <?php $product2 = new WC_Product($value->ID);// var_dump($product); echo $value->ID;?>

                
                
                                <div class="product product-grid">
                                    <div class="product-media">
                                        <div class="product-thumbnail">
                                            <a href="<?php the_permalink(); ?>" title="<?php the_permalink(); ?>">
                                                <?php  echo get_the_post_thumbnail($value->ID,'full',array('class' => 'current')); ?>
                                            </a>
                                        </div><!-- /.product-thumbnail -->

                                        <div class="product-hover">
                                            <div class="product-actions">
                                                <?php echo  do_shortcode('[add_to_cart id="'.$value->ID.'" show_price="false" style="border:none;"]'); ?>
                                             
                                               <?php echo  do_shortcode(' [yith_wcwl_add_to_wishlist product_id="'.$value->ID.'" ] '); ?>

                                                <a href="#" class=" quickview awe-button product-quick-view" title="Quickview" data-toggle="modal" data-target="#quickview-modal-<?php echo $j;?>">
                                                    <i class="icon icon-eye"></i>
                                                </a>
                                            </div>
                                        </div><!-- /.product-hover -->
                                        

                                        
                                    </div><!-- /.product-media -->

                                    <div class="product-body">
                                        <h2 class="product-name">
                                            <a href="<?php the_permalink(); ?>" title="<?php the_permalink(); ?>"><?php echo $value->post_title; ?></a>
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
<?php
/**
 * Template Name: Home
**/
?>
<?php
// die("dd");
  get_header();
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
        <!-- BEGIN SELLER -->
        <section class="c__HP--slider">
            <?php if(get_field('image_hp')): ?>
                <div class="main-slider-wrapper space-40">
                    <div class="main-slider owl-carousel owl-carousel-inset">
                    <?php while(the_repeater_field('image_hp')): ?>
                        <div class="main-slider-item">
                            <div class="main-slider-image">
                                <?php $src = wp_get_attachment_image_src( get_sub_field('image_slider_hp'),'imageSlide'); ?>
                                <img src="<?php echo $src[0];?>" alt="<?php echo get_sub_field('title_slider_hp01');?>"> 
                            </div>
                            <div class="main-slider-text">
                                <div class="fp-table">
                                    <div class="fp-table-cell left">
                                        <div class="container">
                                            <div class="col-md-7 col-md-offset-6">
                                                <h2 class="extrasmall color-home margin-bottom-10"><?php echo get_sub_field('title_slider_hp01');?></h2>
                                                <h5 class="color-grey"><?php echo get_sub_field('description_slider_HP');?></h5>

                                                <div class="button">
                                                    <a href="<?php echo get_sub_field('link_view_collection_hp');?>" class="btn btn-lg btn-black btn-outline">View Collection</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile;?>
                    </div>
                </div>
            <?php endif;?>
        </section>

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
            $j=0;
        ?>

        <section class="c__HP--bestSeller">
            <div class="container">
                <div class="padding-vertical-50">
                    <div class="arrivals pos-r">
                        <div class="section-header">
                            <h2>Best Seller</h2>
                        </div><!-- /.section-header -->

                        <?php if ($wc_query->have_posts()) : ?>
                        <div class="products home-products owl-carousel hidden-nav" data-items="4">
                            <?php $vindex = 0; ?>
                            <?php $open = false; ?>
                            <?php while ($wc_query->have_posts()) :
                                $wc_query->the_post(); ?>


                                <?php $product = new WC_Product(get_the_ID());?>

                                <?php 
                                    if(!$open && $vindex == 0){
                                        echo '<div class="items">';
                                        $open = true;
                                    }
                                    $vindex++;
                                ?>

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

                                                <a href="#" class=" quickview awe-button product-quick-view" title="Quickview" data-toggle="modal" data-target="#quickview-modal-<?php echo $j;?>">
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

                                <?php 
                                    if($open && $vindex == 2){
                                        echo '</div>';
                                        $open = false;
                                        $vindex = 0;
                                    }
                                ?>

                            <?php $j++; endwhile; ?>
                            <?php 
                                if($open){
                                    echo '</div>';
                                }
                            ?>
                            <?php wp_reset_postdata(); ?>
                            <?php else:  ?>
                            <?php _e( 'No Products' ); ?>
                        </div>
                        <?php endif;?>
                    </div><!-- /.arrivals -->
                </div>
            </div><!-- /.container -->
        </section><!-- /section -->
        <!-- BEGIN section Shop now -->

        <?php
            $params = array('posts_per_page' => 1,'post_type' => 'product',
                'tax_query' => array(
                    array(
                        'taxonomy' => 'product_cat',
                        'field'    => 'slug',
                        'terms'    => 'product-sale',
                        'operator' => 'IN',
                    ),
                )
            );


            $wc_query_sale = new WP_Query($params);
        ?>
        <?php if ($wc_query_sale->have_posts()) : ?>
            <?php while ($wc_query_sale->have_posts()) :
                $wc_query_sale->the_post(); 
             //   var_dump($wc_query_sale);
                $product = new WC_Product(get_the_ID());

            ?>
            <section class="c__HP--ShopNow background background-color-gray">
                <div class="container">
                    <div class="padding-vertical-70">
                        
                        <div class="row">
                            <div class="col-md-6 col-sm-5">
                                <div class="text-center">
                                     <?php the_post_thumbnail(get_the_ID()); ?>
                                </div>
                            </div>

                            <div class="col-md-5 col-md-offset-1 col-sm-7">
                                <div class="saleoff-actions">
                                    <div class="time" data-countdown="countdown" data-date="<?php echo get_field('date_expiration_hp',get_the_ID());?>"></div>
                                    <span class="saleoff-price">
                                        <span class="amount"><?php echo $product->get_price_html();?></span>
                                    </span><!-- /.product-price -->

                                    <h4><?php the_title(); ?></h4>
                                    <p><?php the_content();?></p>

                                    <a href="./cart/?add-to-cart=<?php echo get_the_ID();?>" class="btn btn-lg btn-primary" >Shop now</a>

                                </div><!-- /.product-list-actions -->
                            </div>
                        </div>


                    </div>
                </div>
            </section>
        <?php endwhile; ?> 
        <?php wp_reset_postdata(); ?>
        <?php endif;?>

        <!-- BEGIN section team -->
        <?php if(get_field('our_team')): ?>
        <section class="c__HP--team background background-color-dark background-image-section-customers-say">
            <div class="container">
                <div class="padding-top-60">
                    <div class="section-customers">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="customers-carousel owl-carousel" id="customers-carousel" data-toggle="carousel" data-dots="true" data-nav="0">
                                <?php while(the_repeater_field('our_team')): ?>
                                    <?php $nbr = get_sub_field('number_stars_hp')?>
                                    <div class="center">
                                        <img class="avatar" src="<?php echo get_sub_field('image_team_hp')?>" alt="<?php echo get_sub_field('name_team_hp')?>">
                                        <p>“ <?php echo get_sub_field('description_team_hp')?>“</p>
                                        <div class="rating small">
                                        <?php $n = get_sub_field('number_stars_hp'); for ($i=0; $i <5  ; $i++) { ?>
                                            <?php if($i < $n) $active =""; else $active="disable"; ?>
                                            <span class="star <?php echo $active; ?>"></span>
                                        <?php }?>
                                            <!-- <span class="star disable"></span> -->
                                        </div>
                                        <h4> <?php echo get_sub_field('name_team_hp')?></h4>
                                    </div><!-- /.center -->
                                <?php endwhile ?>

                                </div><!-- /.customers-say-carousel -->
                            </div>
                        </div>
                    </div><!-- /.section-content -->
                </div>
            </div><!-- /.container -->
        </section><!-- /section -->
        <?php endif;?>
        <section class="c__Hp--featuredProducts"> <!--FeaturedProd-->
            <div class="container">
                <div class="padding-vertical-60">
                    <div class="section-header">
                        <h2>Featured Products</h2>
                    </div>

        <?php
            $params = array('posts_per_page' => -1,'numberposts'=>2,'post_type' => 'product',
                'tax_query' => array(
                    array(
                        'taxonomy' => 'product_cat',
                        'field'    => 'slug',
                        'terms'    => 'featured-products',
                        'operator' => 'IN',
                    ),
                )
            );


            $wc_query = new WP_Query($params);
        ?>


                    <?php $vindex = 0; ?>
                            <?php $open = false; ?>

                <?php if ($wc_query->have_posts()) : ?>
                    <div class="section-content">
                        <div class="home-section-featured slider-items3 owl-carousel">
                            <?php while ($wc_query->have_posts()) :
                                $wc_query->the_post(); ?>
                 
                                      <?php 
                                            if(!$open && $vindex == 0){
                                                echo '<div class="items">';
                                                $open = true;
                                            }
                                            $vindex++;
                                        ?>


                                        <div class="section-post">
                                            <div class="section-post-media">
                                                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                                    <?php the_post_thumbnail(); ?>
                                                </a>
                                            </div>
                                            <?php $product = new WC_Product(get_the_ID()); //var_dump($product); ?> 
                                            <div class="section-post-body">
                                                <h4 class="section-post-title">
                                                    <a href="<?php the_permalink(); ?>" title="Flower Censer"><?php the_title(); ?></a>
                                                </h4>

                                                <div class="rating small">
                                                <?php $n = get_field('number_star',get_the_ID()); for ($i=0; $i <5  ; $i++) { ?>
                                                    <?php if($i < $n) $active =""; else $active="disable"; ?>
                                                    <span class="star <?php echo $active; ?>"></span>
                                                <?php }?>
                                                    <!-- <span class="star disable"></span> -->
                                                </div>


                                                <div class="clearfix"></div>

                                                <div class="section-post-price">
                                                    <?php echo $product->get_price_html();?>
                                                    
                                                </div>
                                            </div>
                                        </div>
                    

                                      <?php 
                                    if($open && $vindex == 3){
                                        echo '</div>';
                                        $open = false;
                                        $vindex = 0;
                                    }
                                ?>
                           <?php endwhile; ?>
                            <?php 
                                if($open){
                                    echo '</div>';
                                }
                            ?>
                            <?php wp_reset_postdata(); ?>
                            <?php else:  ?>
                            <?php _e( 'No Products' ); ?>

                        </div>
                    </div>
                <?php endif; ?>
                </div>
            </div>
        </section>

        <div class="container">
            <div class="divider"></div>
        </div>
        <!-- BEGIN section instagram -->
        <?php if(get_field('instagram_widget_hp')): ?>
        <section class="c__Hp--instagram">
            <div class="section-header center size-30">
                <span class="icons icons-instag"></span>
                <h2>Instagram Widget</h2>
            </div>
            <div class="widget">
                <ul class="instagram-widget">
                    <?php while(the_repeater_field('instagram_widget_hp')): ?>
                        <li><a href="<?php echo get_sub_field('link_to_instagram_HP');?>" target="_blank" title="Casa Doro - Instagram"><img src="<?php echo get_sub_field('image_insta_HP');?>" alt="Casa Doro - Instagram"></a></li>
                    <?php endwhile;?>
                </ul>
            </div>
        </section>
        <?php endif;?>
        <!-- BEGIN section Ourc client -->
        <?php if(get_field('our_client_hp')): ?>
        <div class="section-brands">
            <div class="section-header center size-30">
                <i class="icon fa fa-users" ></i>
                <h2>Our Client</h2>
            </div>
            <div class="container">
                <div class="brands-carousel owl-carousel" id="brands-carousel">
                    
                    <?php while(the_repeater_field('our_client_hp')): ?>
                    <a href="<?php echo get_sub_field('image_client');?>" class="center">
                        <img src="<?php echo get_sub_field('image_client');?>" alt="">
                    </a><!-- /.center -->
                    <?php endwhile;?>
                </div><!-- /.brands-carousel -->
            </div><!-- /.container -->
        </div><!-- /.section-brands -->
        <?php endif;?>
    </div>






<?php get_footer();?>
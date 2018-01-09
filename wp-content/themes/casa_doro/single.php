<?php
  get_header();
?>
<div id="main">
    
    <div class="main-header background background-image-heading-product">
        <div class="container">
            <h1>Product</h1>
        </div>
    </div>
    

    <div id="breadcrumb">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="./home.html">Home</a></li>
                <li class="active"><span>Product</span></li>
            </ol>

        </div>
    </div>

    
    <div class="container">

        <div class="row">
            <div class="col-md-6">
                <div class="product-slider-wrapper thumbs-bottom">

                    <div class="swiper-container product-slider-main">
                        <div class="swiper-wrapper">
                            
                            <div class="swiper-slide">
                                <div class="easyzoom easyzoom--overlay">
                                    <a href="./img/samples/products/product/large/1.jpg" title="">
                                        <img src="./img/samples/products/product/large/1.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            
                            <div class="swiper-slide">
                                <div class="easyzoom easyzoom--overlay">
                                    <a href="./img/samples/products/product/large/3.jpg" title="">
                                        <img src="./img/samples/products/product/large/3.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            
                        </div>

                        <div class="swiper-button-prev"><i class="fa fa-chevron-left"></i></div>
                        <div class="swiper-button-next"><i class="fa fa-chevron-right"></i></div>
                    </div><!-- /.swiper-container -->

                    <div class="swiper-container product-slider-thumbs">
                        <div class="swiper-wrapper">
                            
                            
                            <div class="swiper-slide">
                                <img src="./img/samples/products/product/tiny/thumb-1.jpg" alt="">
                            </div>
         
                            
                            <div class="swiper-slide">
                                <img src="./img/samples/products/product/tiny/thumb-3.jpg" alt="">
                            </div>                           
                            
                        </div>
                    </div><!-- /.swiper-container -->

                </div><!-- /.product-slider-wrapper -->
            </div>

            <div class="col-md-6">
                <nav class="pnav">

                    <a href="./products-list.html" class="back-to-pcate" title="Back to Products list">
                        <i class="fa fa-chevron-left"></i>
                        <span>Back to Products list</span>
                    </a>
                </nav><!-- /header -->

                <div class="product-details-wrapper">
                    <h2 class="product-name">
                        <a href="#" title="Single Flower Censer">Single Flower Censer</a>
                    </h2><!-- /.product-name -->

                    <div class="product-status">
                        <span>In Stock</span>
                        <span>-</span>
                        <small>SKU: 12345678</small>
                    </div><!-- /.product-status -->

                    <div class="product-stars">
                        <span class="rating">
                            <span class="star"></span>
                            <span class="star"></span>
                            <span class="star"></span>
                            <span class=""></span>
                            <span class=""></span>
                        </span>
                    </div><!-- /.product-stars -->

                    <div class="product-description">
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                    </div><!-- /.product-description -->

                    <div class="product-features">
                        <h3>Special Features:</h3>

                        <ul>
                            <li>1914 translation by H. Rackham</li>
                            <li>The standard Lorem Ipsum passage, used since the 1500s</li>
                            <li>Section 1.10.33 of "de Finibus Bonorum et Malorum</li>
                        </ul>
                    </div><!-- /.product-features -->
					
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
                                <span class="amount">$180</span>
                                <del class="amount">$230</del>
                            </span><!-- /.product-price -->

                            <button class="btn btn-lg btn-primary" >Add to cart</button>
                        </div><!-- /.product-list-actions -->
                    </div><!-- /.product-actions-wrapper -->

                </div><!-- /.product-details-wrapper -->
            </div>
        </div>

        <div class="product-socials">
            <ul class="list-socials">
                
                <li><a href="#" data-toggle="tooltip" title="Twitter"><i class="icon icon-twitter"></i></a></li>
                <li><a href="#" data-toggle="tooltip" title="Facebook"><i class="icon icon-facebook"></i></a></li>

            </ul>
        </div><!-- /.product-socials -->

        <div class="relared-products">
            <div class="relared-products-header margin-bottom-50">
                <h3 class="upper">Related Products</h3>
            </div>

            <div class="products owl-carousel" data-items="4">
                
                
                <div class="product product-grid">
                    <div class="product-media">
                        <div class="product-thumbnail">
                            <a href="././product-details.html" title="">
                                <img src="./img/samples/products/grid/1.jpg" alt="" class="current">
                            </a>
                        </div><!-- /.product-thumbnail -->

                        
                        <div class="product-hover">
                            <div class="product-actions">
                                <a href="#" class="awe-button product-add-cart" data-toggle="tooltip" title="Add to cart">
                                    <i class="icon icon-shopping-bag"></i>
                                </a>

                                <a href="#" class="awe-button product-quick-wishlist" data-toggle="tooltip" title="Add to wishlist">
                                    <i class="icon icon-star"></i>
                                </a>

                                <a href="#" class="awe-button product-quick-view" data-toggle="tooltip" title="Quickview">
                                    <i class="icon icon-eye"></i>
                                </a>
                            </div>
                        </div><!-- /.product-hover -->
                        

                        
                        <span class="product-label hot">
                            <span>hot</span>
                        </span>
                        
                    </div><!-- /.product-media -->

                    <div class="product-body">
                        <h2 class="product-name">
                            <a href="#" title="FLower Censer">FLower Censer</a>
                        </h2><!-- /.product-product -->
                        <div class="product-price">
                            
                            <span class="amount">$180</span>
                            
                        </div><!-- /.product-price -->
                    </div><!-- /.product-body -->
                </div><!-- /.product -->

                
                
                <div class="product product-grid">
                    <div class="product-media">
                        <div class="product-thumbnail">
                            <a href="./product-details.html" title="">
                                <img src="./img/samples/products/grid/2.jpg" alt="" class="current">
                            </a>
                        </div><!-- /.product-thumbnail -->

                        
                        <div class="product-hover">
                            <div class="product-actions">
                                <a href="#" class="awe-button product-add-cart" data-toggle="tooltip" title="Add to cart">
                                    <i class="icon icon-shopping-bag"></i>
                                </a>

                                <a href="#" class="awe-button product-quick-wishlist" data-toggle="tooltip" title="Add to wishlist">
                                    <i class="icon icon-star"></i>
                                </a>

                                <a href="#" class="awe-button product-quick-view" data-toggle="tooltip" title="Quickview">
                                    <i class="icon icon-eye"></i>
                                </a>
                            </div>
                        </div><!-- /.product-hover -->
                        

                        
                    </div><!-- /.product-media -->

                    <div class="product-body">
                        <h2 class="product-name">
                            <a href="#" title="Single Flower Censer">Single Flower Censer</a>
                        </h2><!-- /.product-product -->
                        <div class="product-price">
                            
                            <span class="amount">$230</span>
                            
                        </div><!-- /.product-price -->
                    </div><!-- /.product-body -->
                </div><!-- /.product -->

                
                
                <div class="product product-grid">
                    <div class="product-media">
                        <div class="product-thumbnail">
                            <a href="./product-details.html" title="">
                                <img src="./img/samples/products/grid/3.jpg" alt="" class="current">
                            </a>
                        </div><!-- /.product-thumbnail -->

                        
                        <div class="product-hover">
                            <div class="product-actions">
                                <a href="#" class="awe-button product-add-cart" data-toggle="tooltip" title="Add to cart">
                                    <i class="icon icon-shopping-bag"></i>
                                </a>

                                <a href="#" class="awe-button product-quick-wishlist" data-toggle="tooltip" title="Add to wishlist">
                                    <i class="icon icon-star"></i>
                                </a>

                                <a href="#" class="awe-button product-quick-view" data-toggle="tooltip" title="Quickview">
                                    <i class="icon icon-eye"></i>
                                </a>
                            </div>
                        </div><!-- /.product-hover -->
                        

                        
                        <span class="product-label sale">
                            <span>sale</span>
                        </span>
                        
                    </div><!-- /.product-media -->

                    <div class="product-body">
                        <h2 class="product-name">
                            <a href="#" title="Branch Shelves">Branch Shelves</a>
                        </h2><!-- /.product-product -->
						
                        <div class="product-price">                       
                            <span class="amount">$160</span>
                            <del class="amount">$185</del>
                            
                        </div><!-- /.product-price -->
                    </div><!-- /.product-body -->
                </div><!-- /.product -->

                
                
                <div class="product product-grid">
                    <div class="product-media">
                        <div class="product-thumbnail">
                            <a href="./product-details.html" title="">
                                <img src="./img/samples/products/grid/4.jpg" alt="" class="current">
                            </a>
                        </div><!-- /.product-thumbnail -->

                        
                        <div class="product-hover">
                            <div class="product-actions">
                                <a href="#" class="awe-button product-add-cart" data-toggle="tooltip" title="Add to cart">
                                    <i class="icon icon-shopping-bag"></i>
                                </a>

                                <a href="#" class="awe-button product-quick-wishlist" data-toggle="tooltip" title="Add to wishlist">
                                    <i class="icon icon-star"></i>
                                </a>

                                <a href="#" class="awe-button product-quick-view" data-toggle="tooltip" title="Quickview">
                                    <i class="icon icon-eye"></i>
                                </a>
                            </div>
                        </div><!-- /.product-hover -->
                        

                        
                        <span class="product-label hot">
                            <span>hot</span>
                        </span>
                        
                    </div><!-- /.product-media -->

                    <div class="product-body">
                        <h2 class="product-name">
                            <a href="#" title="Golden Flower Set">Golden Flower Set</a>
                        </h2><!-- /.product-product -->
                        <div class="product-price">
                            
                            <span class="amount">$320</span>
                            
                        </div><!-- /.product-price -->
                    </div><!-- /.product-body -->
                </div><!-- /.product -->

                
                
                <div class="product product-grid">
                    <div class="product-media">
                        <div class="product-thumbnail">
                            <a href="./product-details.html" title="">
                                <img src="./img/samples/products/grid/5.jpg" alt="" class="current">
                                <!-- <img src="./img/samples/products/index/clothing/2.jpg" alt=""> -->
                            </a>
                        </div><!-- /.product-thumbnail -->

                        
                        <div class="product-hover">
                            <div class="product-actions">
                                <a href="#" class="awe-button product-add-cart" data-toggle="tooltip" title="Add to cart">
                                    <i class="icon icon-shopping-bag"></i>
                                </a>

                                <a href="#" class="awe-button product-quick-wishlist" data-toggle="tooltip" title="Add to wishlist">
                                    <i class="icon icon-star"></i>
                                </a>

                                <a href="#" class="awe-button product-quick-view" data-toggle="tooltip" title="Quickview">
                                    <i class="icon icon-eye"></i>
                                </a>
                            </div>
                        </div><!-- /.product-hover -->
                        

                        
                        <span class="product-label new">
                            <span>new</span>
                        </span>
                        
                    </div><!-- /.product-media -->

                    <div class="product-body">
                        <h2 class="product-name">
                            <a href="#" title="Triple Flower Censer">Triple Flower Censer</a>
                        </h2><!-- /.product-product -->
                       <div class="product-price">
                            
                            <span class="amount">$260</span>
                            
                        </div><!-- /.product-price -->
                    </div><!-- /.product-body -->
                </div><!-- /.product -->

                
                
                <div class="product product-grid">
                    <div class="product-media">
                        <div class="product-thumbnail">
                            <a href="./product-details.html" title="">
                                <img src="./img/samples/products/grid/6.jpg" alt="" class="current">
                                <!-- <img src="./img/samples/products/index/clothing/2.jpg" alt=""> -->
                            </a>
                        </div><!-- /.product-thumbnail -->

                        
                        <div class="product-hover">
                            <div class="product-actions">
                                <a href="#" class="awe-button product-add-cart" data-toggle="tooltip" title="Add to cart">
                                    <i class="icon icon-shopping-bag"></i>
                                </a>

                                <a href="#" class="awe-button product-quick-wishlist" data-toggle="tooltip" title="Add to wishlist">
                                    <i class="icon icon-star"></i>
                                </a>

                                <a href="#" class="awe-button product-quick-view" data-toggle="tooltip" title="Quickview">
                                    <i class="icon icon-eye"></i>
                                </a>
                            </div>
                        </div><!-- /.product-hover -->
                        

                        
                    </div><!-- /.product-media -->

                    <div class="product-body">
                        <h2 class="product-name">
                            <a href="#" title="Flower Photo Frame">Flower Photo Frame</a>
                        </h2><!-- /.product-product -->
                        <div class="product-price">
                            
                            <span class="amount">$450</span>
                            
                        </div><!-- /.product-price -->
                    </div><!-- /.product-body -->
                </div><!-- /.product -->

                
            </div>
        </div><!-- /.relared-products -->
    </div>

    <script>
    $(function() { aweProductRender(true); });
    </script>

</div>
<?php get_footer();?>
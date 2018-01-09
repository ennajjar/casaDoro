'use strict';

	if (window.jQuery) var $ = window.jQuery;

	$(function() {  aweMainSlider(); });

	$.widget.bridge('uitooltip', $.ui.tooltip);

	window.SHOW_LOADING = false;
	$('#brands-carousel').magnificPopup({
	  delegate: 'a', // child items selector, by clicking on it popup will open
	  type: 'image'
	  // other options
	});

	$('.awemenu > li').addClass('awemenu-item');
	$(".products .product.woocommerce .product_type_simple ").html('<i class="icon icon-shopping-bag"></i>');
	$(".products .product.woocommerce .product_type_simple ").addClass('awe-button product-add-cart');
	$(".products .product.woocommerce .product_type_simple ").attr( "data-original-title", "Add to cart" );
	$(".products .product.woocommerce .product_type_simple ").attr( "data-toggle", "tooltip" );
	$(".products .product.woocommerce .product_type_simple ").attr( "title", "Add to cart" );
	$(".products  .yith-wcwl-add-button .add_to_wishlist").addClass('awe-button product-quick-wishlist')
	$(".products .yith-wcwl-add-button .add_to_wishlist").html('<i class="icon icon-star"></i>');

	$(".yith-wcwl-add-button .add_to_wishlist ").attr( "data-original-title", "Add to wishlist" );
	$(".yith-wcwl-add-button .add_to_wishlist ").attr( "data-toggle", "tooltip" );
	$(".yith-wcwl-add-button .add_to_wishlist ").attr( "title", "Add to wishlist" );
	$(".product-actions .yith-wcwl-add-to-wishlist ").addClass('awe-button product-quick-wishlist');
	$(".page-template-tpe_wishlist .shop_table.wishlist_table").addClass('table-responsive');
	$(".woocommerce-billing-fields input").addClass("form-control dark");
	$(".woocommerce-billing-fields select").addClass("form-control dark");
	//$('.home-section-featured .section-post').index()

	$(".woocommerce .carousel .item:first-child").addClass("active");
	
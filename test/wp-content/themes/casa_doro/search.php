<?php get_template_part('header');?>
      
<div id="main">
    
    <div class="main-header background background-image-heading-products">
        <div class="container">
            <h1>Searsh</h1>
        </div>
    </div>
    

    <div id="breadcrumb">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active"><span>Search</span></li>
            </ol>

        </div>
    </div>

    
    <div class="container">
        <div class="row">

            <h2 class="section-label top-label wow fadeInDown" style="visibility: visible; animation-name: fadeInDown;"><?php printf( __( 'Search Results for: %s', 'capitalVision' ), get_search_query() ); ?></h2>

            <?php if ( have_posts() ) : ?>
            <div class="col-md-12">
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php get_template_part( 'content', get_post_format() ); ?>
                <?php endwhile; ?>
            </div>
            <?php else : ?>
                <div class="col-md-12">
                    <?php get_template_part( 'content', 'none' ); ?>
                </div>
            <?php endif; ?>     
        </div><!-- /.row -->
    </div><!-- /.container -->
</div>


<?php get_template_part('footer'); ?>

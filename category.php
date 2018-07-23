<?php get_header(); ?>

<div class="wrap-inner ">
    <h2> <?php single_cat_title(); ?> </h2>
    <div class="row">

            <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <div class="row moinhat">
                <div class="col-md-3">
                    <a href="<?php the_permalink(); ?>">    
<?php echo get_the_post_thumbnail( get_the_id() , 'full', array( 'class' =>'thumnail') ); ?></a>
                </div>

                <div class="col-md-9">
                    <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                    <?php the_excerpt() ?> <!--mo ta ngan bai viet -->
                </div>
            </div>
            <?php endwhile; ?>
        
            <?php endif; ?>

            <!--phan trang di vs ham post mac dinh -->
            <?php if(paginate_links()!='') {?>
                <div class="quatrang">
                    <?php
                    global $wp_query;
                    $big = 999999999;
                    echo paginate_links( array(
                        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                        'format' => '?paged=%#%',
                        'prev_text'    => __('«'),
                        'next_text'    => __('»'),
                        'current' => max( 1, get_query_var('paged') ),
                        'total' => $wp_query->max_num_pages
                        ) );
                    ?>
                </div>
            <?php } ?>   
    </div>

    <?php get_template_part("sidebar"); ?>

    <?php get_footer(); ?>   
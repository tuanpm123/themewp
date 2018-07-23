<?php get_header(); ?>

<div class="wrap-inner ">
   
    <div class="row">

            <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
            	<h2><?php the_title(); ?></h2>
            	<?php the_content(); ?>
            <?php endwhile; ?>
        
            <?php endif; ?>

    </div>

    <?php get_template_part("sidebar"); ?>

    <?php get_footer(); ?>   
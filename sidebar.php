<div class="row">

	<div class="col-md-4">
	<div class="sidebar">
		<h4>chuyen muc</h4>
		<ul>
		<?php
		$args = array(
		    'child_of'  => 0,
		    'orderby'    => 'id',
		);
		$categories = get_categories( $args );
		foreach ( $categories as $category ) { ?>
		<li>
		   <a href="<?php echo get_term_link($category->slug, 'category');?>">
		      <?php echo $category->name ; ?>
		      <span>(<?php echo $category->count; ?>)</span>
		   </a>
		</li>
		<?php } ?>
		</ul>
	</div>
	</div>

	<div class="col-md-4">
	<div class="sidebar">
		<h4>bai viet moi sidebar</h4>
		<ul>
			<!-- Get post News Query -->
			<?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=3&post_type=post'); ?>
			<?php global $wp_query; $wp_query->in_the_loop = true; ?>
			<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
				<li>
					<a href="<?php the_permalink(); ?>">	
	<?php echo get_the_post_thumbnail( get_the_id() , 'full', array( 'class' =>'thumnail') ); ?></a>
					<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
				</li>
			<?php endwhile; wp_reset_postdata(); ?>
			<!-- Get post News Query -->
		</ul>
	</div>
	</div>

	<div class="col-md-4">
			<h3>tim kiem</h3>
	<div class="search">
		<form action="<?php bloginfo("url") ?>" method="get" role="form" >
			<input type="text" class="form-control" name="s" placeholder="nhap tu khoa">

			<button type="submit" class="btn btn-primary">Search</button>
		</form>
	</div>
	</div>

</div>
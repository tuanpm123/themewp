<div class="wrap-inner noibat">
	<h2>bai viet noi bat</h2>
	<div class="row">

		<?php 
			$args = array(
				'post_status' => 'publish', // Chỉ lấy những bài viết được publish
				'post_type' => 'post', // Lấy những bài viết thuộc post, nếu lấy những bài trong 'trang' thì để là page 
				'showposts' => 1, // số lượng bài viết
				'cat' => 10, // lấy bài viết trong chuyên mục có id là 10
						);
		?>

		<?php $getposts = new WP_query($args); ?>
		<?php global $wp_query; $wp_query->in_the_loop = true; ?>
		<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
			<div>
				<div>
				<a href="<?php the_permalink(); ?>">	
<?php echo get_the_post_thumbnail( get_the_id() , 'full', array( 'class' =>'thumnail') ); ?></a>
				<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
				<?php the_excerpt() ?> <!--mo ta ngan bai viet -->
				</div>
			</div>
			<?php endwhile; wp_reset_postdata(); ?>

	</div>


	<div class="row">

		<?php 
			$args = array(
				'post_status' => 'publish', // Chỉ lấy những bài viết được publish
				'post_type' => 'post', // Lấy những bài viết thuộc post, nếu lấy những bài trong 'trang' thì để là page 
				'showposts' => 3, // số lượng bài viết
				'cat' => 10, // lấy bài viết trong chuyên mục có id là 10
				'offset' => 1, //bo bai viet dau
			);
		?>
		
		<?php $getposts = new WP_query($args); ?>
		<?php global $wp_query; $wp_query->in_the_loop = true; ?>
		<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
			<div class="col-sm-4 col-md-4">
			<div>
				<a href="<?php the_permalink(); ?>">	
<?php echo get_the_post_thumbnail( get_the_id() , 'full', array( 'class' =>'thumnail') ); ?></a>
				<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
				
			</div>
			</div>
			
			<?php endwhile; wp_reset_postdata(); ?>
			
	</div>
</div>
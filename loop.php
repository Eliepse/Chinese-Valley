
<div class="the-posts">

<?php if (have_posts()) : ?>

	<?php while (have_posts()) : the_post(); ?>
		
		<div class="post">
			
			<h1 class="h1 post-h1 red_txt"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
			<div class="post-infos red_txt">
				<?php the_category(); ?>
				<h3 class="h3 post-infos-h3"><?php echo get_the_date(); ?></h3>
			</div>
			<div class="post-preview">
				<?php the_post_thumbnail(); ?><!-- 
			 --><div class="post-description black_txt">
					<?php the_excerpt(); ?>
					<h3 class="h3 post-preview-h3 grey_txt"><a href="<?php the_permalink(); ?>">写这个</a></h3>
				</div>
			</div>
			
			<div class="post-frame"></div>
			
		</div>
		
	<?php endwhile; ?>

	<?php else : ?>

<?php endif; ?>

</div>
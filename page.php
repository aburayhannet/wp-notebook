<?php 

/*
@package wp notebook

*/
?>

<?php get_header(); ?>
<div class="row">
	<div class="col-md-9 col-sm-9">
	<?php if ( ! have_posts() ) : ?>  
			<h1>Not Found</h1>  
				<p>Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post</p>  
	<?php endif; ?> 

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<div class="post clear" id="post-<?php the_ID(); ?>">
	<div class="contentbox">	
		<div class="main_article">
			<h2 class="boxh3"><?php the_title(); ?></h2>
			<div class="entry clear">
						<?php the_content('Read More'); ?>  
			</div>	
		</div>
	</div>				
	<?php wp_link_pages(); ?>
				
				
				</div>

		<?php endwhile; ?>
		
	<?php comments_template( '', true ); ?>  


		<?php else: ?>


	<?php endif; ?>
	</div>
	 
	<div class="col-md-3 col-sm-3">
	  <?php get_sidebar(); ?>
	</div>

</div>



<?php get_footer(); ?>
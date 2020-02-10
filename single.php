
<?php 

/*
@package wp notebook

*/
?>
<?php get_header(); ?>


<div class="contentbox">
<div class="row">
	<div class="col-md-9 col-sm-9">
<?php if ( ! have_posts() ) : ?>  
        <h1>Not Found</h1>  
            <p>Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post</p>  
<?php endif; ?> 

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

     	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
	
<div class="main_article">
			<h2 class="boxh3"><?php the_title(); ?></h2>
			<span class="postcalendar"><?php the_time("l , j, F  Y "); ?> </span>
			<span class="postauthor"><?php the_author(); ?></span>
			<span class="postcategory"><?php the_category(', '); ?></span>
			<span class="postcomment"><?php comments_popup_link('Leave a comment', '1 Comment', '% Comments'); ?></span>

		<div class="entry clear">
 
                <?php the_content('Read More'); ?>  
				<?php wp_link_pages(); ?>
		</div>	
</div>
<div class="taglist"><?php the_tags('Tags:', ', ', '<br />'); ?>			
            </div></div>

	<?php endwhile; ?>
    
<?php comments_template( '', true ); ?>  


    <?php else: ?>


<?php endif; ?>
</div>

<div class="col-md-3 col-sm-3">
	  <?php get_sidebar(); ?>
	</div>

   
</div>
</div>

<?php get_footer(); ?>
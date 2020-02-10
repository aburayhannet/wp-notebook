<?php 

/*
@package wp notebook

*/
?>

<?php get_header(); ?>



<div class="row">
<div class="col-md-9 col-sm-9 contentbox">
<?php if ( ! have_posts() ) : ?>  
       
<?php endif; ?> 


 <?php if ( is_archive() ) : ?>    
<h1 class="page-title">
<?php if ( is_day() ) : ?>
				<?php printf( 'Daily Archives: <span>%s</span>', get_the_date() ); ?>
<?php elseif ( is_month() ) : ?>
				<?php printf('Monthly Archives: <span>%s</span>', get_the_date('F Y', 'monthly archives date format' ) ); ?>
<?php elseif ( is_year() ) : ?>
				<?php printf( 'Yearly Archives: <span>%s</span>', get_the_date( 'Y', 'yearly archives date format') ); ?>
<?php elseif ( is_author() ) : ?>
<?php printf('Author Archives: %s', "<span class='vcard'><a class='url fn n' href='" . get_author_posts_url( get_the_author_meta( 'ID' ) ) . "' title='" . esc_attr( get_the_author() ) . "' rel='me'>" . get_the_author() . "</a></span>" ); ?></h1>
<?php else : ?>
				<?php _e( 'Blog Archives', 'wp_notebook' ); ?>
<?php endif; ?>
			</h1>
<?php endif; ?> 


 <?php if ( is_search() ) :  ?>    
<h1 class="page-title">
<?php printf('Search Results for: %s', '<span>' . get_search_query() . '</span>' ); ?>
</h1>

<?php endif; ?> 			
			

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

     	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
	
				<div class="main_article">
					<h2 class="boxh3"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>" class="tre"><?php the_title(); ?></a></h2>
					<span class="postcalendar"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>" class="tre"><?php the_time("l , j, F  Y "); ?> </a></span>
					<span class="postauthor"><?php the_author(); ?></span>
					<span class="postcategory"><?php the_category(', '); ?></span>
				    <span class="postcomment"><?php comments_popup_link('Leave a comment', '1 Comment', '% Comments'); ?></span>
				
				<div class="entry clear">
							
							<?php if ( is_archive() || is_search() ) : // Only display excerpts for archives and search. ?>  
									
									<?php the_content('Read More'); ?>  
							<?php else : ?>  
									<?php the_excerpt(); ?>  
							<?php endif; ?> 

				</div>	
				</div>	
            </div>

	<?php endwhile; ?>
    
    <?php if ( $wp_query->max_num_pages > 1 ) : ?>  
    <div class="pagenav clear">
        <div id="older-posts" class="alignleft"><?php next_posts_link('Older Posts'); ?></div>  
        <div id="newer-posts" class="alignright"><?php previous_posts_link('Newer Posts'); ?></div>  
      </div>  
<?php else: ?>  
        <div id="only-page">No newer/older posts</div>  
<?php endif; ?>  


    <?php else: ?>

 <h1>Not Found</h1>  
            <p>Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post</p>  
			<?php get_search_form(); ?>

<?php endif; ?>





   
</div>

	<div class="col-md-3 col-sm-3">
	 <?php get_sidebar(); ?>
	</div>
</div>

<?php get_footer(); ?>
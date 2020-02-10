
<?php 

/*
@package wp notebook

*/
?>

<?php if ( have_comments() ) : ?> 


<div class="commenthead clear" >
<span class="commentnumber"><?php
            printf( _nx( 'One thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'wp_notebook' ),
                number_format_i18n( get_comments_number() ), ' : ' . get_the_title());
                ?></span>

<div class="pagination">
<?php paginate_comments_links(array('prev_text' => '&lsaquo; Previous', 'next_text' => 'Next &rsaquo;')); ?></div>  

</div>



  
<?php wp_list_comments(array('avatar_size' => '60')); ?>
  
 
<?php endif; ?>  

<?php if ( ! comments_open() ) : ?>  
<?php else: ?>  

<?php $fields =  array(
    'author' => '<div class="left1"><p class="comment-form-author">' . '<label for="author">'. __( 'Name' , 'wp_notebook').( $req ? '<span class="required">*</span>' : '' ) .'</label>' .
        '<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $req . '/></p>',
    'email'  => '<p class="comment-form-email"><label for="email">'. __( 'Email' , 'wp_notebook').( $req ? '<span class="required">*</span>' : '' ) .'</label>' .
        '<input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $req . ' /></p>',
    'url'    => '<p class="comment-form-url"><label for="url">' . __( 'Website' , 'wp_notebook') . '</label>' .
        '<input id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" /></p></div>',
    
		
		
);
$comments_args = array(
    'fields' =>  $fields,
	'comment_field'    => '<div class="right1"><p class="comment-form-comment"><label for="comment">' . __( 'Comment', 'wp_notebook' ) . '</label><textarea id="comment" name="comment" cols="30" rows="8" aria-required="true"></textarea></p></div>',
	    'title_reply'=>'Please give us your valuable comment',
    'label_submit' => 'Send My Comment'
);
 
comment_form($comments_args);
?>
            
<?php endif; ?>
<h3 id="comments"><?php comments_number( 'No comments <small>Be the first!</small>', 'One Comment', '% Comments' ); ?></h3>
<ol class="commentlist"><?php wp_list_comments(); ?></ol>
<?php 
    $args = array(
        'comment_notes_after' => ''
    );
    comment_form($args); 
?>
<?php if(have_comments()): ?>
    
    <div id="comments">
        <?php /*
        <?php if (post_password_required()): ?>
            <p class="nopassword">
                This post is password protected. Enter the password to view any comments.
            </p>
            <?php return; ?>
        <?php endif; ?>
        */ ?>
        
        <h4 id="commentsTitle">Comments: <?php comments_number('No Responses', 'One Response', '% Responses' ); ?> to "<?php the_title(); ?>"</h4>
        
        
        <div class="commentList">
            <?php foreach ($comments as $comment): ?>
                <div class="comment clearfix" id="comment-<?php comment_ID(); ?>">
                    <div class="floatLeft">
                        <?php echo get_avatar($comment->comment_author_email, $size = '64'); ?>
                    </div>
                    
                    <div class="commentInfo floatRight">
                        
                        <div id="comment-author-text" class="clearfix">
                            <strong><?php comment_author_link(); ?></strong>
                            <a href="#comment-<?php comment_ID(); ?>" title="" class="comment-date"><?php comment_date('F j, Y'); ?></a>
                        </div>
                    
                        <?php edit_comment_link('Edit'); ?>
                        
                        <?php comment_text(); ?>
                    </div>
                    
                    
                </div>
            <?php endforeach; ?>
        </div>
        
        
    </div>
    
<?php endif; ?>
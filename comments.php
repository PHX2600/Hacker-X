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
                    <?php echo get_avatar($comment->comment_author_email, $size = '80'); ?>
                    
                    <div class="commentWrapper floatRight">
                        
                        <div class="commentInfo clearfix">
                            <div class="floatLeft">
                                By, <?php comment_author_link(); ?> on <a href="#comment-<?php comment_ID(); ?>"><?php comment_date('F j, Y'); ?></a>
                            </div>
                            <div class="floatRight">
                                <?php edit_comment_link('Edit'); ?>
                            </div>
                        </div>
                        
                        <?php comment_text(); ?>
                        
                        <div class="commentNotch"></div>
                    </div>
                    
                    
                </div>
            <?php endforeach; ?>
        </div>
        
        
    </div>
    
<?php endif; ?>
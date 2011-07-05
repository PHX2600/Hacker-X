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
        
        <h4 class="commentsTitle"><?php comments_number('No Responses', 'One Response', '% Responses' ); ?> to "<?php the_title(); ?>"</h4>
        
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
            
            <?php if (comments_open()): ?>
                
                <h3 class="commentsTitle"><?php comment_form_title('Leave a Response', 'Reply to %s'); ?></h3>
                
                <div id="commentFormWrapper">
                
                    <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentForm">
                        
                        <?php if (is_user_logged_in()): ?>
                            
                            <p>You are logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Log out of this account">Click here</a> to log out.</p>
                            
                        <?php else: ?>
                
                            <p class="comment-notes">
                                Your email address will not be published. Required fields are marked <span class="required">*</span>
                            </p>
    
                            <label for="author" class="formRow">
                                <span class="formLabel">Name <?php if ($req) { echo '<span class="required">*</span>'; } ?></span>
                                <input type="text" name="author" id="author" value="<?php echo esc_attr($comment_author); ?>" size="30" <?php if ($req) { echo 'aria-required="true"'; }?> />
                            </label>
                            
                            <label for="email" class="formRow">
                                <span class="formLabel">Email <?php if ($req) { echo '<span class="required">*</span>'; } ?></span>
                                <input type="text" name="email" id="email" value="<?php echo esc_attr($comment_author_email); ?>" size="30" <?php if ($req) { echo 'aria-required="true"'; }?> />
                            </label>
                
                            <label for="url" class="formRow">
                                <span class="formLabel">Website</span>
                                <input type="text" name="url" id="url" value="<?php echo esc_attr($comment_author_url); ?>" size="30" />
                            </label>
                            
                        <?php endif; ?>
                        
                        <label for="comment" class="formRow">
                            <span class="formLabel">Comment <?php if ($req) { echo '<span class="required">*</span>'; } ?></span>
                            <textarea name="comment" id="comment" cols="60" rows="8" tabindex="4" <?php if ($req) { echo 'aria-required="true"'; }?>></textarea>
                        </label>
                        
                        <p class="note">
                            You may use these <abbr title="HyperText Markup Language">HTML</abbr> tags and attributes:
                            <code>&lt;a href="" title=""&gt; &lt;abbr title=""&gt; &lt;acronym title=""&gt; &lt;b&gt; &lt;blockquote cite=""&gt; &lt;cite&gt; &lt;code&gt; &lt;del datetime=""&gt; &lt;em&gt; &lt;i&gt; &lt;q cite=""&gt; &lt;strike&gt; &lt;strong&gt; </code>
                        </p>
                        
                        <?php comment_id_fields(); ?>
                        
                        <div class="formButtons">
                            <button name="submit" type="submit" id="submit" />Submit Comment</button>
                        </div>
    
                        <?php // do_action('comment_form', $post->ID); ?>
                        
                    </form>
                    
                </div>
                
            <?php endif; ?>
        </div>
        
    </div>
    
<?php endif; ?>
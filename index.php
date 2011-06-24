<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US">

<?php get_header(); ?>
    
<body>
    
    <?php include(TEMPLATEPATH . '/siteHeader.php'); ?>

    <div id="siteContent" class="clearfix">
        <div class="widthConstraint clearfix">
            
            <div id="definition">
                <div id="definitionInner">
                    <strong>Hacker</strong> [hack·er] /n/ - One who seeks to understand the details of a system and strives to stretch it's capabilities beyond the original intent.
                </div>
            </div>
            
            <?php include(TEMPLATEPATH . '/notifications.php'); ?>
            
            <?php if (have_posts()): ?>
                <?php while (have_posts()): ?>
                    
                    <?php the_post(); ?>
                    
                    <div class="contentBox">
                        
                        <div class="titleWrapper clearfix">
                            <h2 class="postTitle floatLeft">
                                <a href="<?php the_permalink(); ?>" title="Permanent Link to <?php the_title_attribute(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </h2>
                            
                            <?php if(current_user_can('edit_post', $post->ID)): ?>
                                <a href="<?php get_edit_post_link($post->ID); ?>" class="editLink">Edit</a>
                            <?php endif; ?>
                        </div>
                        
                        <?php the_content(); ?>
                        
                        <div class="postMetaData">
                            <div class="metaDataTop">
                                Posted by, <?php the_author_posts_link() ?>
                                on <?php the_time(get_option('date_format')); ?>
                                at <?php the_time(); ?> |
                                <?php comments_popup_link('No Comments', '1 Comment', '% Comments', 'postComments', 'Comments disabled'); ?>
                            </div>
                            
                            <div class="metaDataBottom">
                                <span class="postCategory">Category: <?php the_category(' &bull; ') ?></span>
                                <?php the_tags('<span class="postTags">Tags: ', ' &bull; ', '</span>'); ?>
                            </div>
                        </div>
                        
                    </div>
                    
                <?php endwhile; ?>
            <?php else: ?>
                <div class="contentBox">
                    <p>Sorry, no posts matched your criteria.Sorry, no posts matched your criteria.</p>
                </div>
            <?php endif; ?>
        </div>
    </div>
    
    <?php if(function_exists('wp_pagenavi')): ?>
        <div id="pagination">
            <?php wp_pagenavi(); ?>
        </div>
    <?php endif; ?>
    
    <?php get_footer(); ?>

</body>

</html>
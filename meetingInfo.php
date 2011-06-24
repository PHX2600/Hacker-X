<?php /* Template Name: Meeting Info */ ?>

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
                            
                            <div class="postInfo floatRight">
                                <?php edit_post_link('Edit'); ?>
                            </div>
                        </div>
                    
                        <div id="meetingInfo" class="clearfix">
                            <div class="floatLeft">
                                <iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=lola+coffee,+phoenix,+az&amp;aq=&amp;sll=37.09024,-102.392578&amp;sspn=37.598824,56.513672&amp;ie=UTF8&amp;hq=lola+coffee,&amp;hnear=Phoenix,+Maricopa,+Arizona&amp;cid=17466708338773990751&amp;ll=33.51671,-112.073164&amp;spn=0.025046,0.036478&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="http://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=lola+coffee,+phoenix,+az&amp;aq=&amp;sll=37.09024,-102.392578&amp;sspn=37.598824,56.513672&amp;ie=UTF8&amp;hq=lola+coffee,&amp;hnear=Phoenix,+Maricopa,+Arizona&amp;cid=17466708338773990751&amp;ll=33.51671,-112.073164&amp;spn=0.025046,0.036478&amp;z=14&amp;iwloc=A" style="color:#0000FF;text-align:left">View Larger Map</a></small>
                            </div>
                            
                            <div class="text">
                                <?php $ff = new FirstFriday(); ?>
                                
                                <div id="nextMeetingWrapper">
                                    <p>The next meeting will be held at 6:00 PM on:</p>
                                    
                                    <center>
                                        <div class="meetingMonth">
                                            <div class="number"><?php echo $ff->firstFriday(true, "M"); ?></div>
                                            <div class="midLine"></div>
                                        </div>
                                        <div class="meetingDay">
                                            <div class="number"><?php echo $ff->firstFriday(true, "d"); ?></div>
                                            <div class="midLine"></div>
                                        </div>
                                        <div class="meetingYear">
                                            <div class="number"><?php echo $ff->firstFriday(true, "Y"); ?></div>
                                            <div class="midLine"></div>
                                        </div>
                                    </center>
                                    
                                    <p> at Lola Coffee<br/>
                                    4700 North Central Avenue<br/>
                                    Phoenix, Arizona 85012</p>
                                </div>
                                
                            </div>
                        </div>
                        
                        <div class="postContent clearfix">
                            <?php the_content(); ?>
                        </div>
                        
                        <div class="postMetaData">
                            Posted by, <?php the_author_posts_link() ?>
                            on <?php the_time(get_option('date_format')); ?>
                            at <?php the_time(); ?>
                            to <?php the_category(', '); ?>
                            with the tags <?php the_tags(''); ?>
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
    
    <?php get_footer(); ?>

</body>

</html>
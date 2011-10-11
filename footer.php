<?php get_sidebar('footer'); ?>

<div id="footer">
    <div id="footerInner" class="clearfix">
        <a href="<?php bloginfo('rss2_url'); ?>" class="blogFeed">Blog Feed</a> &nbsp;&bull;&nbsp;
        <a href="<?php bloginfo('comments_rss2_url'); ?>" class="commentFeed">Comment Feed</a> &nbsp;&bull;&nbsp;
        <span class="poweredBy">Powered by, <a href="http://www.wordpress.org">Wordpress</a></span> &nbsp;&bull;&nbsp;
        <span class="themeCredit">Theme by, <a href="http://www.chriskankiewicz.com">Chris Kankeiwicz</a></span> &nbsp;&bull;&nbsp;
        <span class="copyrightNotice">&copy; <?php echo date('Y'); ?> <a href="<?php bloginfo('wpurl'); ?>" title="<?php bloginfo('name'); ?> - <?php bloginfo('description'); ?>"><?php bloginfo('name'); ?></a></span>
    </div>
</div>

<?php wp_footer(); ?>
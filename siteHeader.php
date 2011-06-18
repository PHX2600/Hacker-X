<div id="siteHeader" class="clearfix">
    <div class="widthConstraint clearfix">
        <h1 id="siteTitle" class="floatLeft">
            <a href="<?php bloginfo('wpurl'); ?>">
                <span class="hideText"><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></span>
            </a>
        </h1>
        
        
        <?php 
            wp_nav_menu(array(
                'menu_id' => 'siteNavigation',
                'menu_class' => 'floatRight',
                'theme_location' => 'primary_navigation'
            ));
        ?>
        
        
        <?php /*
        <ul id="siteNavigation" class="floatRight">
            <li class="activeLink"><a href="/">Home</a></li>
            <li><a href="http://www.phx2600.org/forum">Forum</a></li>
            <li><a href="http://www.phx2600.org/news">News</a></li>
            <li><a href="http://www.phx2600.org/archive">Archive</a></li>
        </ul>
        */ ?>
    </div>
</div>
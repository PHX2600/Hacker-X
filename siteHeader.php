<div id="siteHeader" class="clearfix">
    <div class="widthConstraint clearfix">
        
        <h1 id="siteTitle" class="floatLeft">
            <a href="<?php bloginfo('wpurl'); ?>" title="<?php bloginfo('name'); ?> - <?php bloginfo('description'); ?>">
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
        
    </div>
</div>
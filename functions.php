<?php

    // Add featured images support
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size(918, 240);

    // Register Menu(s)
    if (function_exists('register_nav_menu')) {
        register_nav_menu('primary_navigation', 'Primary Navigation');
    }

    // Widgetize Sidebar
    if (function_exists('register_sidebar')) {
        register_sidebar(
            array(
                'before_widget' => '<div class="widget">',
                'after_widget' => '</div>',
                'before_title' => '<h4>',
                'after_title' => '</h4>'
            )
        );
    }
    
    /**
     * Calculates and returns a timestamp or formatted text for the next,
     * first Friday of the month.
     *
     * This software is liscensed under the MIT License. 
     * More info available at https://github.com/PHX2600/FirstFriday
     *
     * @author Chris Kankiewicz (http://www.chriskankiewicz.com)
     * @copyright 2011 Chris Kankiewicz
     */
    class FirstFriday {
        
        // Define application version
        const VERSION = '1.1.0';
        
        /**
         * Main first Friday function. Calculates and returns a timestamp or 
         * formatted text for the next, first Friday of the month.
         * 
         * @param boolean $formatted True = returns a formatted string. False = unix time stamp
         * @param string $format PHP date format string. Default value = "F j, Y"
         * @return string Formatted string of the next first Friday
         * @access public
         */
        public function firstFriday($formatted = true, $format = "F j, Y") {
            
            if ($formatted == true) {
                return $this->_firstFridayFormatted($format);
            } else {
                return $this->_firstFridayStamp();
            }
            
        }
        
        /**
         * Returns timestamp of the next first Friday
         * 
         * @return string Unix timestamp of the next first Friday
         * @access private
         */
        private function _firstFridayStamp() {
            
            // Calculate first Friday of this month
            $thisFirstFriday = strtotime('first friday of this month');
            
            if (date('d') > date('d', $thisFirstFriday)) {
                // Calculate first Friday of next month
                $nextFirstFriday = strtotime('first friday of next month');
                $firstFriday = $nextFirstFriday;
            } else {
                // Set the next first Friday
                $firstFriday = $thisFirstFriday;
            }
            
            // Return next first Friday timestamp
            return $firstFriday;
            
        }
        
        /**
         * Returns formatted string of the next first Friday
         * 
         * @param $format PHP date format string
         * @return string Formatted string of the next first Friday
         * @access private
         */
        private function _firstFridayFormatted($format) {
            
            // Return formatted date
            return date($format, $this->_firstFridayStamp());
            
        }
        
    }

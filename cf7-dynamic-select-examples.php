<?php 
    
    // If this file is called directly, abort.
    if (!defined('WPINC')) { die; }
    
    /*
            This is an example of adding a shortcode for dynamic select using functions and hooks
    */
    
    function cf7_dynamic_select_do_example1($choices, $args=array()) {
        $choices = array(
            array(
                'type' => 'option',
                'value' => 1,
                'label' => 'Choice 1'
            ),
            array(
                'type' => 'option',
                'value' => 2,
                'label' => 'Choice 2'
            ),
            array(
                'type' => 'optgroup',
                'label' => 'Group 1',
                'options' => array(
                    array(
                        'type' => 'option',
                        'value' => 3,
                        'label' => 'Choice 3'
                    ),
                    array(
                        'type' => 'option',
                        'value' => 4,
                        'label' => 'Choice 4'
                    )
                
                )
            )
        );
        return $choices;
    } // end function cf7_dynamic_select_do_example1
    add_filter('wpcf7_dynamic_select_example1', 'cf7_dynamic_select_do_example1', 10, 2);
    
?>
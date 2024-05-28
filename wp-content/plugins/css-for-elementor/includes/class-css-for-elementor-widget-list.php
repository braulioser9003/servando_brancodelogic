<?php

/**
 * Fired during plugin activation
 *
 * @link       https://theinnovs.com/cssfe
 * @since      1.0.0
 *
 * @package    Css_For_Elementor
 * @subpackage Css_For_Elementor/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Css_For_Elementor
 * @subpackage Css_For_Elementor/includes
 * @author     theinnovs <theinnovs@gmail.com>
 */

 class Css_For_Elementor_Widget_List{


    public function Elementor_Free_Widget_List(){

        $free_widgets = [

            [
                'widget_name'   =>  __('Innovative Button', 'css-for-elementor'),
                'widget_des'    =>  __('You can make awesome looking button using Innovative Button ', 'css-for-elementor'),
                'link'          =>  '#',
                'cat'           =>  'free',
            ],
            
            [
                'widget_name'   =>  __('Innovative Review', 'css-for-elementor'),
                'widget_des'    =>  __('Make a customer review section using Innovative Review', 'css-for-elementor'),
                'link'          =>  '#',
                'cat'           =>  'free'
            ],

            [
                'widget_name'   =>  __('Google Search', 'css-for-elementor'),
                'widget_des'    =>  __('Add google search in your website with your own custom design', 'css-for-elementor'),
                'link'          =>  '#',
                'cat'           =>  'free'
            ],  
            
            [
                'widget_name'   =>  __('Social Tooltip', 'css-for-elementor'),
                'widget_des'    =>  __('Add tooltip in social media icon to make better beautify', 'css-for-elementor'),
                'link'          =>  '#',
                'cat'           =>  'free'
            ],           
            
            [
                'widget_name'   =>  __('Popup', 'css-for-elementor'),
                'widget_des'    =>  __('Make button on click Popup with custom design', 'css-for-elementor'),
                'link'          =>  '#',
                'cat'           =>  __('free','css-for-elementor')
            ],
        ];

        return $free_widgets;
    }

    public function Elementor_Free_Widget_Extender_List(){

        $Free_Widget_Extender = [

            [
                'widget_name'   =>  __('Sticky Section', 'css-for-elementor'),
                'widget_des'    =>  __('Make sticky section', 'css-for-elementor'),
                'link'          =>  '#',
                'cat'           =>  __('free','css-for-elementor')
            ],

            [
                'widget_name'   =>  __('Map Backgorund Color', 'css-for-elementor'),
                'widget_des'    =>  __('Change map backgound color', 'css-for-elementor'),
                'link'          =>  '#',
                'cat'           =>  __('free','css-for-elementor')
            ],

            [
                'widget_name'   =>  __('Form Label Center', 'css-for-elementor'),
                'widget_des'    =>  __('Elementor form label align center', 'css-for-elementor'),
                'link'          =>  '#',
                'cat'           =>  __('free','css-for-elementor')
            ],

            [
                'widget_name'   =>  __('Image In Text Design', 'css-for-elementor'),
                'widget_des'    =>  __('Make image as like text design', 'css-for-elementor'),
                'link'          =>  '#',
                'cat'           =>  __('free','css-for-elementor')
            ],
        ];

        return $Free_Widget_Extender;

    }

    /**
     * Pro new widget lists ==========================================================================
     */
    public function Elementor_Pro_Widget_List(){

        $pro_widgets = [

            [
                'widget_name'   =>  __('Product Grid Widget', 'css-for-elementor'),
                'widget_des'    =>  __('Woocommerce Product grid widget', 'css-for-elementor'),
                'link'          =>  '#',
                'cat'           =>  __('Pro', 'css-for-elementor')
            ],
            
            [
                'widget_name'   =>  __('WP Login Form', 'css-for-elementor'),
                'widget_des'    =>  __('Make custom login page with own custom style', 'css-for-elementor'),
                'link'          =>  '#',
                'cat'           =>  __('Pro', 'css-for-elementor')
            ],

            [
                'widget_name'   =>  __('Slider Shortcode', 'css-for-elementor'),
                'widget_des'    =>  __('Make any type of slider by using Slider Shortcode', 'css-for-elementor'),
                'link'          =>  '#',
                'cat'           =>  __('Pro', 'css-for-elementor')
            ],  
            
            [
                'widget_name'   =>  __('Pricing Table', 'css-for-elementor'),
                'widget_des'    =>  __('Create an awesome pricing table', 'css-for-elementor'),
                'link'          =>  '#',
                'cat'           =>  __('Pro', 'css-for-elementor')
            ],           
            
            [
                'widget_name'   =>  __('Counterup', 'css-for-elementor'),
                'widget_des'    =>  __('Add awesome counterup in your webpage', 'css-for-elementor'),
                'link'          =>  '#',
                'cat'           =>  __('Pro', 'css-for-elementor')
            ],
            
            [
                'widget_name'   =>  __('Scrollspy', 'css-for-elementor'),
                'widget_des'    =>  __('Make section scroll without any code', 'css-for-elementor'),
                'link'          =>  '#',
                'cat'           =>  __('Pro', 'css-for-elementor')
            ],
            
        ];

        return $pro_widgets;
    }

    /**
    * Pro widget extender list===============================================================
    */
    public function  Elementor_Pro_Widget_extender_List(){

        $Pro_Widget_extender = [

            [
                'widget_name'   =>  __('Image Carousel Link', 'css-for-elementor'),
                'widget_des'    =>  __('Add unlimited link each image on image carousel ', 'css-for-elementor'),
                'link'          =>  '#',
                'cat'           =>  'Pro',
                'setting'       =>  ''
            ],

            [
                'widget_name'   =>  __('Gradient Color', 'css-for-elementor'),
                'widget_des'    =>  __('Gradient for Texts, Icons & Buttons', 'css-for-elementor'),
                'link'          =>  '#',
                'cat'           =>  __('Pro', 'css-for-elementor'),
                'setting'       =>  ''
            ],

            [
                'widget_name'   =>  __('Gradient Icon Box', 'css-for-elementor'),
                'widget_des'    =>  __('Gradient color for elementor icon box widget', 'css-for-elementor'),
                'link'          =>  '#',
                'cat'           =>  __('Pro', 'css-for-elementor'),
                'setting'       =>  ''
            ],

            [
                'widget_name'   =>  __('Gradient Slider Button', 'css-for-elementor'),
                'widget_des'    =>  __('Gradient button color for elementor slider widget', 'css-for-elementor'),
                'link'          =>  '#',
                'cat'           =>  __('Pro', 'css-for-elementor'),
                'setting'       =>  ''
            ],

            [
                'widget_name'   =>  __('Lightbox Shadow', 'css-for-elementor'),
                'widget_des'    =>  __('Control Lightbox shadow on Image Gallery', 'css-for-elementor'),
                'link'          =>  '#',
                'cat'           =>  __('Pro', 'css-for-elementor'),
                'setting'       =>  ''
            ],

            [
                'widget_name'   =>  __('PreLoader', 'css-for-elementor'),
                'widget_des'    =>  __('Enable PreLoader for large pages', 'css-for-elementor'),
                'link'          =>  '#',
                'cat'           =>  __('Pro', 'css-for-elementor'),
                'setting'       =>  ''
            ],

            [
                'widget_name'   =>  __('Menu Icon', 'css-for-elementor'),
                'widget_des'    =>  __('Change Default Menu (Hamburger) Icon on Elementor Menu widget', 'css-for-elementor'),
                'link'          =>  '#',
                'cat'           =>  __('Pro', 'css-for-elementor'),
                'setting'       =>  ''
            ],

            [
                'widget_name'   =>  __('Hide Category Images', 'css-for-elementor'),
                'widget_des'    =>  __('Hide category images in Product Categories Widget', 'css-for-elementor'),
                'link'          =>  '#',
                'cat'           =>  __('Pro', 'css-for-elementor'),
                'setting'       =>  ''
            ],

            [
                'widget_name'   =>  __('Link to Portfolio', 'css-for-elementor'),
                'widget_des'    =>  __('Image link to Portfolio Widget', 'css-for-elementor'),
                'link'          =>  '#',
                'cat'           =>  __('Pro', 'css-for-elementor'),
                'setting'       =>  ''
            ],

            [
                'widget_name'   =>  __('Custom Search Title', 'css-for-elementor'),
                'widget_des'    =>  __('Change elementor search box title', 'css-for-elementor'),
                'link'          =>  '#',
                'cat'           =>  __('Pro', 'css-for-elementor'),
                'setting'       =>  ''
            ],

            [
                'widget_name'   =>  __('Custom Nav Icon', 'css-for-elementor'),
                'widget_des'    =>  __('Change elementor nav icon ', 'css-for-elementor'),
                'link'          =>  '#',
                'cat'           =>  __('Pro', 'css-for-elementor'),
                'setting'       =>  ''
            ],

            [
                'widget_name'   =>  __('Sticky Footer', 'css-for-elementor'),
                'widget_des'    =>  __('Make sticky footer of elementor', 'css-for-elementor'),
                'link'          =>  '#',
                'cat'           =>  __('Pro', 'css-for-elementor'),
                'setting'       =>  ''
            ],

            [
                'widget_name'   =>  __('Basic Gallery', 'css-for-elementor'),
                'widget_des'    =>  __('Add box-shadow & Title color of basic gallery', 'css-for-elementor'),
                'link'          =>  '#',
                'cat'           =>  __('Pro', 'css-for-elementor'),
                'setting'       =>  ''
            ],

            [
                'widget_name'   =>  __('Testimonial', 'css-for-elementor'),
                'widget_des'    =>  __('Testimonial widget hover animation', 'css-for-elementor'),
                'link'          =>  '#',
                'cat'           =>  __('Pro', 'css-for-elementor'),
                'setting'       =>  ''
            ],
        ];

        return $Pro_Widget_extender;
    }


    // public function Free_to_pro_Extendar(){

    //     $pro_Extendar = [

    //         [
    //             'widget_name'   =>  __('Image Carousel Link', 'css-for-elementor'),
    //             'widget_des'    =>  __('Add unlimited link each image on image carousel ', 'css-for-elementor'),
    //             'link'          =>  '#',
    //             'cat'           =>  'Pro'
    //         ],
    //     ];

    //     return $pro_Extendar;
    // }



 }
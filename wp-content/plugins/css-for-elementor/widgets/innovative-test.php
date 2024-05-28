<?php


if( !defined('ABSPATH') ) {
    exit;
}

class Innovative_Test extends \Elementor\Widget_Base{
    
    public function get_name(){

        return 'innovative-test';

    }

    public function get_title()
    {

        return __('Innovative Test','css-for-elementor');
    }

    public function get_icon()
    {
        return 'eicon-user-preferences';
    }

    public function get_categories()
    {
        return ['css-for-elementor'];
    }
  
    public function get_keywords() 
	{
		return [ 'lottie', 'innovative-lottie', 'lottie-files', 'lottie-animation', 'animation', 'elementor', 'css-for-elementor' ];
	}

    protected function _register_controls(){

        $this->start_controls_section(

            'inovative_test_content',
            [
                'label' => esc_html__('Test Content', 'css-for-elementor'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );


    }


    protected function render(){
        $data = $this->get_settings_for_display();
        // $t = "hi";
        // echo do_shortcode('[chart parameters=$t]');
        ?>

            
            <!-- <script src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script> -->
            

            

        <?php

    }


}
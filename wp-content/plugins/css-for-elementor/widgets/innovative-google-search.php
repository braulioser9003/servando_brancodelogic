<?php

if( !defined('ABSPATH') ) {
    exit;
}

class Innovative_Google_Search extends \Elementor\Widget_Base{

    public function get_name(){

        return 'innovative-google-search-bar';

    }

    public function get_title()
    {
        return __('Goolge Search Bar','css-for-elementor');
    }

    public function get_icon()
    {
        return 'eicon-search';
    }

    public function get_categories()
    {
        return ['css-for-elementor'];
    }
  
    public function get_keywords() 
	{
		return [ 'search', 'google-search-form', 'google', 'search-form', 'google-search', 'elements', 'form' , 'css-for-elementor' ];
	}

    protected function _register_controls(){

        $this->start_controls_section(

            'cssfe_section_inovative_google_search',
            [
                'label' => esc_html__('Search Bar', 'css-for-elementor'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'cssfe_google_search_doc',
			
			[
                'label'       => __('Need Help to get the ID? ', 'css-for-elementor'),
                'type'        => \Elementor\Controls_Manager::CHOOSE,
                'options'     => [
                    '1' => [
                        'title' => '',
                        'icon'  => 'eicon-post-content',
                    ],
                ],
                'default'     => '1',
                'description' => '<span class="pro-feature"> Documentation  <a href="https://docs.google.com/document/d/1wADEEikqlWXi6SkBLP-qwJxNXlBoT5KWHNeBdtqvRnU/edit?usp=sharing" target="_blank">Doc</a> | <a href="https://docs.google.com/document/d/1wADEEikqlWXi6SkBLP-qwJxNXlBoT5KWHNeBdtqvRnU/edit?usp=sharing" target="_blank">Video</a> </span>',
            ]
        );
        
         $this->add_control(
            'cssfe_google_search_help',
			
			[
                'label'       => __('Click here to create search ID', 'css-for-elementor'),
                'type'        => \Elementor\Controls_Manager::CHOOSE,
                'options'     => [
                    '1' => [
                        'title' => '',
                        'icon'  => 'eicon-sign-out',
                    ],
                ],
                'default'     => '1',
                'description' => '<span class="pro-feature"> Create and get Search Id  <a href="https://cse.google.com/" target="_blank">Click Here</a> </span>',
            ]
        );
        
  
        
        $this->add_control(
            'cssfe_google_search_id',
            [
                'label' => esc_html__('Google Search ID','css-for-elementor'),
				'type' => \Elementor\Controls_Manager::TEXT,
                'label_block'   =>  true,
                'placeholder'   =>  __('e.g 0941e24ad113142d4','css-for-elementor'),
                'title'         =>  __('Enter google search id here', 'css-for-elementor'),
            ]
            
        );
        
        $this->end_controls_section();
        
        
        // Style Controls

        $this->start_controls_section(
            'cssfe_section_inovative_google_search_style',
            [
                'label'     =>  esc_html__( 'Google Search Style', 'css-for-elementor' ),
                'tab'       => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'cssfe_innovative_search_layout',
            [
                'label' => esc_html__('Search Result Layout', 'css-for-elementor'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'gcse-search',
                'options'     => [
                    'gcse-search' => esc_html__('Popup', 'css-for-elementor'),
                    'gcse-searchbox-only' => esc_html__('New Window', 'css-for-elementor'),
                    'gcse-searchbox' => esc_html__('Same Page', 'css-for-elementor'),
                ],
            ]
        );
        $this->end_controls_section();
        
        
        // Search box style===========================================================================
        
        $this->start_controls_section(
            'cssfe_section_inovative_google_search_box_style',
            [
                'label'     =>  esc_html__( 'Google Search Box', 'css-for-elementor' ),
                'tab'       => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'cssfe_innovative_search_box_bg',
            [
                'label' => esc_html__('Background Color', 'css-for-elementor'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '#ddd',
                'selectors' => [
                    '{{WRAPPER}} #cssfe_search table.gsc-search-box' => 'background: {{VALUE}} !important;',
                ],
            ]
        );
        
         $this->add_control(
            'cssfe_innovative_search_box_padding',
            [
                'label' => esc_html__('Box Margin', 'css-for-elementor'),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em', '%' ],

				'selectors' => [
					'{{WRAPPER}}  #cssfe_search table.gsc-search-box' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
            ]
        );
        
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'cssfe_innovative_search_box_border',
                'label'     => esc_html__('Border', 'css-for-elementor'),  
				'selector' => '{{WRAPPER}} #cssfe_search table.gsc-search-box',
			]
        );
        
        $this->add_control(
            'cssfe_innovative_search_box_border_radius',
            [
                'label'     => esc_html__('Border Radius', 'css-for-elementor'),
                'type'      => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', 'em', '%' ],
                
                'selectors' => [
                    '{{WRAPPER}} #cssfe_search table.gsc-search-box' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important;',
                ],
            ]
        );
        
        $this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'cssfe_innovative_search_box_shadow',
				'label' => __( 'Box Shadow', 'css-for-elementor' ),
				'selector' => '{{WRAPPER}} #cssfe_search table.gsc-search-box',
			]
		);
        
        $this->end_controls_section();
        
        // Search input box style===========================================================================
        
        $this->start_controls_section(
            'cssfe_section_inovative_google_search_input_style',
            [
                'label'     =>  esc_html__( 'Google Search Input', 'css-for-elementor' ),
                'tab'       => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        
        $this->add_control(
            'cssfe_innovative_search_input_width',
            [
                'label'     => esc_html__('Width', 'css-for-elementor'),
                'type'      => \Elementor\Controls_Manager::SLIDER,
                'range'     => [
                    'px' => [
                        'max' => 1000,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} #cssfe_search input' => 'width: {{SIZE}}px !important;',
                ],
            ]
        );
        
        $this->add_control(
            'cssfe_innovative_search_input_height',
            [
                'label'     => esc_html__('Height', 'css-for-elementor'),
                'type'      => \Elementor\Controls_Manager::SLIDER,
                'range'     => [
                    'px' => [
                        'max' => 1000,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} #cssfe_search input' => 'height: {{SIZE}}px !important;',
                ],
            ]
        );

        $this->add_control(
            'cssfe_innovative_search_input_bg',
            [
                'label' => esc_html__('Background Color', 'css-for-elementor'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '#fff',
                'selectors' => [
                    '{{WRAPPER}} #cssfe_search input' => 'background: {{VALUE}};',
                ],
            ]
        );
        
                 $this->add_control(
            'cssfe_innovative_search_input_padding',
            [
                'label' => esc_html__('Input Padding', 'css-for-elementor'),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em', '%' ],

				'selectors' => [
					'{{WRAPPER}}  #cssfe_search input' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important;',
				],
            ]
        );
        
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'cssfe_innovative_search_input_border',
                'label'     => esc_html__('Border', 'css-for-elementor'),  
				'selector' => '{{WRAPPER}} #cssfe_search input',
			]
        );
        
        $this->add_control(
            'cssfe_innovative_search_input_border_radius',
            [
                'label'     => esc_html__('Border Radius', 'css-for-elementor'),
                'type'      => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', 'em', '%' ],
                
                'selectors' => [
                    '{{WRAPPER}} #cssfe_search input' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important;',
                ],
            ]
        );
        
        $this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'cssfe_innovative_search_input_shadow',
				'label' => __( 'Box Shadow', 'css-for-elementor' ),
				'selector' => '{{WRAPPER}} #cssfe_search input',
			]
		);
        $this->end_controls_section();
        
        
        // Search button style===========================================================================
        
        $this->start_controls_section(
            'cssfe_section_inovative_google_search_button_style',
            [
                'label'     =>  esc_html__( 'Google Search Button', 'css-for-elementor' ),
                'tab'       => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        
        $this->add_control(
            'cssfe_innovative_search_button_width',
            [
                'label'     => esc_html__('Width', 'css-for-elementor'),
                'type'      => \Elementor\Controls_Manager::SLIDER,
                'range'     => [
                    'px' => [
                        'max' => 1000,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} #cssfe_search .gsc-search-button button' => 'width: {{SIZE}}px !important;',
                ],
            ]
        );
        
          $this->add_control(
            'cssfe_innovative_search_button_height',
            [
                'label'     => esc_html__('Height', 'css-for-elementor'),
                'type'      => \Elementor\Controls_Manager::SLIDER,
                'range'     => [
                    'px' => [
                        'max' => 1000,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} #cssfe_search .gsc-search-button button' => 'height: {{SIZE}}px !important;',
                ],
            ]
        );

        $this->add_control(
            'cssfe_innovative_search_button_bg',
            [
                'label' => esc_html__('Background Color', 'css-for-elementor'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '#3040EE',
                'selectors' => [
                    '{{WRAPPER}} #cssfe_search .gsc-search-button button' => 'background: {{VALUE}} !important;',
                ],
            ]
        );
        
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'cssfe_innovative_search_button_border',
                'label'     => esc_html__('Border', 'css-for-elementor'),  
				'selector' => '{{WRAPPER}} #cssfe_search .gsc-search-button button',
			]
        );
        
        $this->add_control(
            'cssfe_innovative_search_button_boder_radius',
            [
                'label'     => esc_html__('Border Radius', 'css-for-elementor'),
                'type'      => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', 'em', '%' ],
                
                'selectors' => [
                    '{{WRAPPER}} #cssfe_search .gsc-search-button button' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important;',
                ],
            ]
        );
        
        $this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'cssfe_innovative_search_button_shadow',
				'label' => __( 'Box Shadow', 'css-for-elementor' ),
				'selector' => '{{WRAPPER}} #cssfe_search .gsc-search-button button',
			]
		);
      

    }




    protected function render(){

        $settings = $this->get_settings_for_display();

        ?>
        <style>
         
            #cssfe_search table>tbody>tr:nth-child(2n+1)>td {
               background-color: transparent !important;
            }
            
            #cssfe_search .gsc-control-cse {
                background: #633c3c00;
                border: none !important;
            }
            #cssfe_search table.gsc-search-box {
                border-style: none;
                border-width: 0;
                border-spacing: 0 0;
                width: 100%;
                margin-bottom: 0px;
                border-collapse: inherit;
                /*background: red;*/
            }
            #cssfe_search .gsc-input-box {
                border: none !important;
                background: transparent;
            }
            #cssfe_search table.gsc-search-box td {
                vertical-align: text-bottom;
            }
            #cssfe_search td.gsc-search-button {
                border: none !important;
            }
            #cssfe_search table.gsc-search-box tr td {
                border: none !important;
            }
            #cssfe_search table .gsc-input {
                border-width: 1px 1px 1px 1px;
                
            }
            
             #cssfe_search input {
                border: 1px solid #fff !important;
                border-radius: 0px !important;
                background: transparent;
                /*padding: 0px 20px !important;*/
                height: 40px !important;
            }
          
            
            #cssfe_search .gsc-search-button-v2 {
                font-size: 0px;
                padding: 13px 30px;
                vertical-align: reset !important;
                margin-top: -6px !important;
            }
            #cssfe_search .gsc-search-button button {
                box-shadow: none !important;
                border-radius: 0px;
                padding: 13px 30px;
                height: 40px !important;
                border: 1px solid #fff !important;
            }
            
            #cssfe_search .gsc-search-button-v2 svg {
                width: 20px !important;
                height: 20px;
            }
            
            
        </style>
        
            <div class="eiw-innovative-search-wrapper" id="cssfe_search">

                <div class="<?php echo $settings['cssfe_innovative_search_layout']; ?>">
                
                </div>
                
                <?php if($settings['cssfe_innovative_search_layout'] == 'gcse-searchbox'){?>
                    <div class="gcse-searchresults">
                        
                    </div>
                <?php };?>
                
            </div>
            
            <script async src="https://cse.google.com/cse.js?cx=<?php echo $settings['cssfe_google_search_id'];?>"> </script>
        <?php
    }




}





?>
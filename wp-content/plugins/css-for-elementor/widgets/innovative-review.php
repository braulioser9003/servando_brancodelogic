<?php

//namespace Css_For_Elementor\Widgets;
if( !defined('ABSPATH') ) {
    exit;
}

//ir = innovative review======================

class Innovative_Review extends \Elementor\Widget_Base{

    public function get_name()
	{
        return 'innovative-review';
    }

    public function get_title()
	{
        return __( 'Innovative Review', 'css-for-elementor' );
    }

    public function get_icon()
	{
        return 'eicon-rating';
    }

    public function get_categories()
    {
        return ['css-for-elementor'];
    }
  
    public function get_keywords() 
	{
		return [ 'rating', 'riviews', 'elements', 'testimonial' , 'css-for-elementor' ];
	}

    protected function _register_controls(){

        $this->start_controls_section(

            'ccsfe_section_inovative_review_content',
            [
                'label' => esc_html__('Review Content', 'css-for-elementor'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
			'ir_style_class',
			[
				'label' => __( 'Select Style', 'css-for-elementor' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'cssfe-ir-one',
				'options' => [
					'cssfe-ir-one'  => __( 'Style One', 'css-for-elementor' ),
					'cssfe-ir-two' => __( 'Style Two', 'css-for-elementor' ),
					'cssfe-ir-three' => __( 'Style Three', 'css-for-elementor' ),
					'cssfe-ir-four' => __( 'Style Four', 'css-for-elementor' ),
				],
			]
		);

        $this->add_control(
			'ir_image',
			[
				'label' => __( 'Choose Image', 'css-for-elementor' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

        $this->add_control(
			'ir_name',
			[
				'label' => __( 'Name', 'css-for-elementor' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( 'Shawon Chowdhury', 'css-for-elementor' ),
				'placeholder' => __( 'Type your name here', 'css-for-elementor' ),
				'dynamic' => [ 'active' => true ]
			]
		);
        $this->add_control(
			'ir_title',
			[
				'label' => __( 'Title', 'css-for-elementor' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( 'CEO Of VoidCoders', 'css-for-elementor' ),
				'placeholder' => __( 'Type your title here', 'css-for-elementor' ),
				'dynamic' => [ 'active' => true ]
			]
		);

        $this->add_control(
			'ir_enable_rating',
			[
				'label' => esc_html__( 'Display Rating?', 'css-for-elementor'),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'default' => 'yes',
			]
		);

		$this->add_control(
			'ir_rating_number',
			[
			   'label'       => __( 'Rating Number', 'css-for-elementor'),
			   'type' => \Elementor\Controls_Manager::SELECT,
			   'default' => 'rating-five',
			   'options' => [
				   'rating-one'  => __( '1', 'css-for-elementor'),
				   'rating-two' => __( '2', 'css-for-elementor'),
				   'rating-three' => __( '3', 'css-for-elementor'),
				   'rating-four' => __( '4', 'css-for-elementor'),
				   'rating-five'   => __( '5', 'css-for-elementor'),
			   ],
			  'condition' => [
				  'ir_enable_rating' => 'yes',
			  ],
			]
		  );

        $this->add_control(
			'ir_content',
			[
				'label' => __( 'Content', 'css-for-elementor' ),
				'type' => \Elementor\Controls_Manager::WYSIWYG,
				'default' => __( 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters', 'css-for-elementor' ),
				'placeholder' => __( 'Type your description here', 'css-for-elementor' ),
				'dynamic' => [ 'active' => true ]
			]
		);

        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
			'ir_social_icon_title',
			[
				'label' => __( 'Icon title', 'css-for-elementor' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( 'Facebook', 'css-for-elementor' ),
				'placeholder' => __( 'Type your title here', 'css-for-elementor' ),
			]
		);

		$repeater->add_control(
			'ir_social_icon', [
				'label' => __( 'Icon', 'css-for-elementor' ),
				'type' => \Elementor\Controls_Manager::ICONS,
                'default'   => [
                    'value' => 'fab fa-facebook-f',
                    'library' => 'solid',
                ],
			]
		);

		$repeater->add_control(
			'ir_social_link', [
				'label' => __( 'Link', 'css-for-elementor' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => __( 'https://your-link.com', 'css-for-elementor' ),
				'show_external' => true,
				'default' => [
					'url' => 'https://your-link.com',
					'is_external' => false,
					'nofollow' => false,
				],
			]
		);

		$this->add_control(
			'ir_social_icon_list',
			[
				'label' => __( 'Social Icon', 'css-for-elementor' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'ir_social_icon_title' => __( 'Facebook', 'css-for-elementor' ),
						'ir_social_icon' => __( 'fab fa-facebook-f', 'css-for-elementor' ),
						'ir_social_size' => __( 'Size', 'css-for-elementor' ),
					],
                    
				],
                
				'title_field' => '{{ ir_social_icon_title }}',
			]
		);
		$this->end_controls_section();


		// Start style section==============================================

		$this->start_controls_section(

            'ccsfe_section_inovative_review_style',
            [
                'label' => esc_html__('Review Item Style', 'css-for-elementor'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'ir_item_bg',
				'label' => __( 'Item Background', 'css-for-elementor' ),
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} .ir-inner-item',
			]
		);

		$this->add_responsive_control(
			'ir_item_margin',
			[
				'label' => __( 'Item Margin', 'css-for-elementor' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .ir-inner-item' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'ir_item_padding',
			[
				'label' => __( 'Item Padding', 'css-for-elementor' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .ir-inner-item' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'ir_item_border',
				'label' => __( 'Item Border', 'css-for-elementor' ),
				'selector' => '{{WRAPPER}} .ir-inner-item',
			]
		);
		$this->add_responsive_control(
			'ir_item_border_radius',
			[
				'label' => __( 'Item Border Radius', 'css-for-elementor' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .ir-inner-item' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'ir_item_box_shadow',
				'label' => __( 'Item Box Shadow', 'css-for-elementor' ),
				'selector' => '{{WRAPPER}} .ir-inner-item',
			]
		);

		$this->end_controls_section();

		// Start style review item content ==============================================
		$this->start_controls_section(

            'ccsfe_section_inovative_review_content_style',
            [
                'label' => esc_html__('Review Item Content Style', 'css-for-elementor'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
		
		// Image style ==============
		$this->add_responsive_control(
			'ir_image_width',
			[
				'label' => __( 'Image Width', 'css-for-elementor' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
						'step' => 5,
					],
					'%' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'default' => [
					'unit' => 'px',
					'size' => 200,
				],
				'selectors' => [
					'{{WRAPPER}} .ir-inner-item img' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->add_responsive_control(
			'ir_image_height',
			[
				'label' => __( 'Image Height', 'css-for-elementor' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
						'step' => 5,
					],
					'%' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'default' => [
					'unit' => 'px',
					'size' => 150,
				],
				'selectors' => [
					'{{WRAPPER}} .ir-inner-item img' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->add_responsive_control(
			'ir_image_margin',
			[
				'label' => __( 'Image Margin', 'css-for-elementor' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .ir-inner-item img' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'ir_image_border',
				'label' => __( 'Image Border', 'css-for-elementor' ),
				'selector' => '{{WRAPPER}} .ir-inner-item img',
			]
		);

		
		$this->add_responsive_control(
			'ir_image_border_radius',
			[
				'label' => __( 'Item Border Radius', 'css-for-elementor' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .ir-inner-item img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'ir_image_align',
			[
				'label' => __( 'Image Alignment', 'css-for-elementor' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'left' => [
						'title' => __( 'Left', 'css-for-elementor' ),
						'icon' => 'fa fa-align-left',
					],
					'center' => [
						'title' => __( 'Center', 'css-for-elementor' ),
						'icon' => 'fa fa-align-center',
					],
					'right' => [
						'title' => __( 'Right', 'css-for-elementor' ),
						'icon' => 'fa fa-align-right',
					],
				],
				'default' => 'center',
				'toggle' => true,

				'condition' => [
					'ir_style_class' => 'cssfe-ir-one',
					'ir_style_class' => 'cssfe-ir-four',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'ir_image_box_shadow',
				'label' => __( 'Image Box Shadow', 'css-for-elementor' ),
				'selector' => '{{WRAPPER}} .ir-inner-item img',
			]
		);

		$this->start_controls_tabs( 'ir_review_content_style' );

		$this->start_controls_tab(
			'ir_name_style',
			[
				'label' => __( 'Name', 'css-for-elementor' ),
			]
		);
		$this->add_control(
            'ir_name_color',
            [
                'label' => esc_html__('Color', 'css-for-elementor'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '#6b5f5f',
                'selectors' => [
                    '{{WRAPPER}} .ir-inner-item .name' => 'color: {{VALUE}};',
                ],
            ]
        );
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'ir_name_typography',
				'label' => __( 'Typography', 'css-for-elementor' ),
				'scheme' => Elementor\Core\Schemes\Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .ir-inner-item .name',
			]
		);
		$this->add_responsive_control(
			'ir_name_margin',
			[
				'label' => __( 'Margin', 'css-for-elementor' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .ir-inner-item .name' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'ir_name_align',
			[
				'label' => __( 'Alignment', 'css-for-elementor' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'left' => [
						'title' => __( 'Left', 'css-for-elementor' ),
						'icon' => 'fa fa-align-left',
					],
					'center' => [
						'title' => __( 'Center', 'css-for-elementor' ),
						'icon' => 'fa fa-align-center',
					],
					'right' => [
						'title' => __( 'Right', 'css-for-elementor' ),
						'icon' => 'fa fa-align-right',
					],
				],
				'default' => 'center',
				'toggle' => true,
			]
		);

		$this->end_controls_tab();

		$this->start_controls_tab(
			'ir_title_style',
			[
				'label' => __( 'Ttitle', 'css-for-elementor' ),
			]
		);

		$this->add_control(
            'ir_title_color',
            [
                'label' => esc_html__('Color', 'css-for-elementor'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '#000',
                'selectors' => [
                    '{{WRAPPER}} .ir-inner-item .title' => 'color: {{VALUE}};',
                ],
            ]
        );
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'ir_title_typography',
				'label' => __( 'Typography', 'css-for-elementor' ),
				'scheme' => Elementor\Core\Schemes\Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .ir-inner-item .title',
			]
		);
		$this->add_responsive_control(
			'ir_title_margin',
			[
				'label' => __( 'Margin', 'css-for-elementor' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .ir-inner-item .title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'ir_title_align',
			[
				'label' => __( 'Alignment', 'css-for-elementor' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'left' => [
						'title' => __( 'Left', 'css-for-elementor' ),
						'icon' => 'fa fa-align-left',
					],
					'center' => [
						'title' => __( 'Center', 'css-for-elementor' ),
						'icon' => 'fa fa-align-center',
					],
					'right' => [
						'title' => __( 'Right', 'css-for-elementor' ),
						'icon' => 'fa fa-align-right',
					],
				],
				'default' => 'center',
				'toggle' => true,
			]
		);

		$this->end_controls_tab();

		$this->start_controls_tab(
			'ir_content_style',
			[
				'label' => __( 'Content', 'css-for-elementor' ),
			]
		);

		$this->add_control(
            'ir_content_color',
            [
                'label' => esc_html__('Color', 'css-for-elementor'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '#6b5f5f',
                'selectors' => [
                    '{{WRAPPER}} .ir-inner-item .content' => 'color: {{VALUE}};',
                ],
            ]
        );
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'ir_content_typography',
				'label' => __( 'Typography', 'css-for-elementor' ),
				'scheme' => Elementor\Core\Schemes\Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .ir-inner-item .content',
			]
		);
		$this->add_responsive_control(
			'ir_content_margin',
			[
				'label' => __( 'Margin', 'css-for-elementor' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .ir-inner-item .content' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'ir_content_align',
			[
				'label' => __( 'Alignment', 'css-for-elementor' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'left' => [
						'title' => __( 'Left', 'css-for-elementor' ),
						'icon' => 'fa fa-align-left',
					],
					'center' => [
						'title' => __( 'Center', 'css-for-elementor' ),
						'icon' => 'fa fa-align-center',
					],
					'right' => [
						'title' => __( 'Right', 'css-for-elementor' ),
						'icon' => 'fa fa-align-right',
					],
				],
				'default' => 'center',
				'toggle' => true,
			]
		);
		
		$this->end_controls_tab();
		$this->end_controls_tabs();

		$this->end_controls_section();

		// Social Links style =================================
		$this->start_controls_section(

            'ccsfe_section_inovative_review_social_icons_style',
            [
                'label' => esc_html__('Review Social Icons', 'css-for-elementor'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

		$this->add_responsive_control(
			'ir_social_icon_size',
			[
				'label' => __( 'Icon Size', 'css-for-elementor' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'default' => [
					'unit' => 'px',
					'size' => 15,
				],
				'selectors' => [
					'{{WRAPPER}} .ir-inner-item .social-links i' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'ir_social_icon_distance',
			[
				'label' => __( 'Icon Distance', 'css-for-elementor' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px'],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100,
						'step' => 1,
					],
				],
				'default' => [
					'unit' => 'px',
					'size' => 10,
				],
				'selectors' => [
					'{{WRAPPER}} .ir-inner-item .social-links li' => 'margin-left: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'ir_social_icon_border_radius',
			[
				'label' => __( 'Border Radius', 'css-for-elementor' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .ir-inner-item .social-links i' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

	
		$this->start_controls_tabs('ir_social_icon');
		$this->start_controls_tab(
			'ir_social_icon_normal_style',
			[
				'label' => __( 'Normal', 'css-for-elementor' ),
			]
		);
		$this->add_control(
            'ir_social_icon_color',
            [
                'label' => esc_html__('Color', 'css-for-elementor'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '#fff',
                'selectors' => [
                    '{{WRAPPER}} .ir-inner-item .social-links i' => 'color: {{VALUE}};',
                ],
            ]
        );
		$this->add_control(
            'ir_social_icon_bg_color',
            [
                'label' => esc_html__('Background Color', 'css-for-elementor'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '#927474',
                'selectors' => [
                    '{{WRAPPER}} .ir-inner-item .social-links i' => 'background: {{VALUE}};',
                ],
            ]
        );
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'ir_social_icon_border',
				'label' => __( 'Border', 'css-for-elementor' ),
				'selector' => '{{WRAPPER}} .ir-inner-item .social-links i',
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'ir_social_icon_box_shadow',
				'label' => __( 'Item Box Shadow', 'css-for-elementor' ),
				'selector' => '{{WRAPPER}} .ir-inner-item .social-links i',
			]
		);

		$this->end_controls_tab();

		$this->start_controls_tab(
			'ir_social_icon_hover_style',
			[
				'label' => __( 'Hover', 'css-for-elementor' ),
			]
		);

		$this->add_control(
            'ir_social_icon_color_hover',
            [
                'label' => esc_html__('Color', 'css-for-elementor'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '#0000007d',
                'selectors' => [
                    '{{WRAPPER}} .ir-inner-item .social-links i:hover' => 'color: {{VALUE}} !important;',
                ],
            ]
        );
		$this->add_control(
            'ir_social_icon_bg_hover_color',
            [
                'label' => esc_html__('Background Color', 'css-for-elementor'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '#d5dadf',
                'selectors' => [
                    '{{WRAPPER}} .ir-inner-item .social-links i:hover' => 'background: {{VALUE}} !important;',
                ],
            ]
        );
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'ir_social_icon_border_hover',
				'label' => __( 'Border', 'css-for-elementor' ),
				'selector' => '{{WRAPPER}} .ir-inner-item .social-links i:hover',
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'ir_social_icon_box_shadow_hover',
				'label' => __( 'Box Shadow', 'css-for-elementor' ),
				'selector' => '{{WRAPPER}} .ir-inner-item .social-links i:hover',
			]
		);

		$this->end_controls_tab();
		$this->end_controls_tabs();

		$this->end_controls_section();

		$this->start_controls_section(

            'ccsfe_section_inovative_review_rating',
            [
                'label' => esc_html__('Rating Style', 'css-for-elementor'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

		$this->add_responsive_control(
			'ir_rating_margin',
			[
				'label' => __( 'Rating Margin', 'css-for-elementor' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .ir-inner-item .ir-star-rating' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_section();


    
    }


    // Display 

	protected function render_rating() {
		$set = $this->get_settings_for_display('ir_enable_rating');

		if ( $set == 'yes' ) :
			ob_start();
		?>
		<ul class="ir-star-rating">
			<li><i class="fas fa-star" aria-hidden="true"></i></li>
			<li><i class="fas fa-star" aria-hidden="true"></i></li>
			<li><i class="fas fa-star" aria-hidden="true"></i></li>
			<li><i class="fas fa-star" aria-hidden="true"></i></li>
			<li><i class="fas fa-star" aria-hidden="true"></i></li>
		</ul>
		<?php
			echo ob_get_clean();
		endif;
	}

    protected function render(){


        $set = $this->get_settings_for_display();
        $rating = $this->get_settings_for_display('ir_enable_rating');

        ?>
            <div class="cssfe-innovative-review-wrapper">

                <div class="ir-inner-item">

					 <!-- Template Style one -->
					<?php if($set['ir_style_class'] == 'cssfe-ir-one'):?>
					<div class="<?php echo $set['ir_style_class'];?>">
						<div class="image" style="text-align:<?php echo $set['ir_image_align'];?>">
							<img src="<?php echo $set['ir_image']['url']; ?>" alt="">
						</div>
						<h2 class="name" style="text-align:<?php echo $set['ir_name_align']; ?>"><?php echo $set['ir_name']; ?></h2>
						<h4 class="title" style="text-align:<?php echo $set['ir_title_align']; ?>"><?php echo $set['ir_title']; ?></h4>
						<div class="rating <?php echo $set['ir_rating_number'];?>" > <?php $this->render_rating( $set ); ?> </div>
						<p class="content" style="text-align:<?php echo $set['ir_content_align']; ?>"><?php echo $set['ir_content']; ?></p>

						<?php if($set['ir_social_icon_list']): ?>
						<div class="social-links">
							<ul>
								<?php foreach($set['ir_social_icon_list'] as $icon ): 
									$target = $icon['ir_social_link']['is_external'] ? ' target="_blank"' : '';
									$nofollow = $icon['ir_social_link']['nofollow'] ? ' rel="nofollow"' : '';
								?>
								<li><a href="<?php echo $icon['ir_social_link']['url']; ?>" <?php echo $target ?> > <?php \Elementor\Icons_Manager::render_icon( $icon['ir_social_icon'], [ 'aria-hidden' => 'true' ] ); ?> </a></li>
								<?php endforeach; ?>
							</ul>
						</div>
						<?php endif; ?>
					</div>
                
					<?php elseif($set['ir_style_class'] == 'cssfe-ir-two'): ?>
 					<!-- Template Style two -->
					<div class="cssfe-ir-two">

						<div class="left-content">
							<div class="image">
								<img src="<?php echo $set['ir_image']['url']; ?>" alt="">
							</div>
							<div class="rating <?php echo $set['ir_rating_number'];?>" > <?php $this->render_rating( $set ); ?> </div>
							

						</div>

						<div class="right-content">
							<h2 class="name" style="text-align:<?php echo $set['ir_name_align']; ?>"><?php echo $set['ir_name']; ?></h2>
							<h4 class="title" style="text-align:<?php echo $set['ir_title_align']; ?>"><?php echo $set['ir_title']; ?></h4>
							<p class="content" style="text-align:<?php echo $set['ir_content_align']; ?>"><?php echo $set['ir_content']; ?></p>
							<?php if($set['ir_social_icon_list']): ?>
							<div class="social-links">
								<ul>
									<?php foreach($set['ir_social_icon_list'] as $icon ): 
										$target = $icon['ir_social_link']['is_external'] ? ' target="_blank"' : '';
										$nofollow = $icon['ir_social_link']['nofollow'] ? ' rel="nofollow"' : '';
									?>
									<li><a href="<?php echo $icon['ir_social_link']['url']; ?>" <?php echo $target ?> > <?php \Elementor\Icons_Manager::render_icon( $icon['ir_social_icon'], [ 'aria-hidden' => 'true' ] ); ?> </a></li>
									<?php endforeach; ?>
								</ul>
							</div>
							<?php endif; ?>
						</div>
					</div>
					
					<?php elseif($set['ir_style_class'] == 'cssfe-ir-three'):?>
					 <!-- Template Style three -->
					<div class="cssfe-ir-three">
						<div class="left-content">
							<h2 class="name" style="text-align:<?php echo $set['ir_name_align']; ?>"><?php echo $set['ir_name']; ?></h2>
							<h4 class="title" style="text-align:<?php echo $set['ir_title_align']; ?>"><?php echo $set['ir_title']; ?></h4>
							<p class="content" style="text-align:<?php echo $set['ir_content_align']; ?>"><?php echo $set['ir_content']; ?></p>
							<?php if($set['ir_social_icon_list']): ?>
							<div class="social-links">
								<ul>
									<?php foreach($set['ir_social_icon_list'] as $icon ): 
										$target = $icon['ir_social_link']['is_external'] ? ' target="_blank"' : '';
										$nofollow = $icon['ir_social_link']['nofollow'] ? ' rel="nofollow"' : '';
									?>
									<li><a href="<?php echo $icon['ir_social_link']['url']; ?>" <?php echo $target ?> > <?php \Elementor\Icons_Manager::render_icon( $icon['ir_social_icon'], [ 'aria-hidden' => 'true' ] ); ?> </a></li>
									<?php endforeach; ?>
								</ul>
							</div>
							<?php endif; ?>
						</div>

						<div class="right-content">
							<div class="image">
								<img src="<?php echo $set['ir_image']['url']; ?>" alt="">
							</div>
							<div class="rating <?php echo $set['ir_rating_number'];?>" > <?php $this->render_rating( $set ); ?> </div>
						</div>
					</div>

					<?php elseif($set['ir_style_class'] == 'cssfe-ir-four'):?>

					 <!-- Template Style four -->
					<div class="cssfe-ir-four">
						<div class="image" style="text-align:<?php echo $set['ir_image_align'];?>">
							<img src="<?php echo $set['ir_image']['url']; ?>" alt="">
						</div>
						<div class="rating <?php echo $set['ir_rating_number'];?>" > <?php $this->render_rating( $set ); ?> </div>
						<?php if($set['ir_social_icon_list']): ?>
						<div class="social-links">
							<ul>
								<?php foreach($set['ir_social_icon_list'] as $icon ): 
									$target = $icon['ir_social_link']['is_external'] ? ' target="_blank"' : '';
									$nofollow = $icon['ir_social_link']['nofollow'] ? ' rel="nofollow"' : '';
								?>
								<li><a href="<?php echo $icon['ir_social_link']['url']; ?>" <?php echo $target ?> > <?php \Elementor\Icons_Manager::render_icon( $icon['ir_social_icon'], [ 'aria-hidden' => 'true' ] ); ?> </a></li>
								<?php endforeach; ?>
							</ul>
						</div>
						<?php endif; ?>
						<h2 class="name" style="text-align:<?php echo $set['ir_name_align']; ?>"><?php echo $set['ir_name']; ?></h2>
						<h4 class="title" style="text-align:<?php echo $set['ir_title_align']; ?>"><?php echo $set['ir_title']; ?></h4>
						<p class="content" style="text-align:<?php echo $set['ir_content_align']; ?>"><?php echo $set['ir_content']; ?></p>

					</div>
					<?php endif; ?>

				</div>

            </div>
        <?php

    }
}
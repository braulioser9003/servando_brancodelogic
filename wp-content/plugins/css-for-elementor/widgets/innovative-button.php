<?php

//namespace Css_For_Elementor\Widgets;

if( !defined('ABSPATH') ) {
    exit;
}

class Innovative_Button extends \Elementor\Widget_Base{
    
    public function get_name(){

        return 'innovative-button';

    }

    public function get_title()
    {

        return __('Innovative Button','css-for-elementor');
    }

    public function get_icon()
    {
        return 'eicon-button';
    }

    public function get_categories()
    {
        return ['css-for-elementor'];
    }
  
    public function get_keywords() 
	{
		return [ 'button', 'innovative-button', 'elements', 'css-for-elementor' ];
	}

    protected function _register_controls(){

        $this->start_controls_section(

            'ccsfe_section_inovative_button_content',
            [
                'label' => esc_html__('Button Content', 'css-for-elementor'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'cssfe_inovative_btn_text',
            [
                'label' => esc_html__('Button text','css-for-elementor'),
				'type' => \Elementor\Controls_Manager::TEXT,
                'dynamic' => [
                    'active' => true,
                ],
                'label_block'   =>  true,
                'default'       =>  'Click Here!',
                'placeholder'   =>  __('Enter button text','css-for-elementor'),
                'title'         =>  __('Enter button text here', 'css-for-elementor'),
            ]

        );
        // $this->add_control(
        //     'cssfe_inovative_btn_secondary_text',
        //     [
        //         'label' => esc_html__('Button Secondary text','css-for-elementor'),
		// 		'type' => \Elementor\Controls_Manager::TEXT,
        //         'dynamic' => [
        //             'active' => true,
        //         ],
        //         'label_block'   =>  true,
        //         'default'       =>  'Go!',
        //         'placeholder'   =>  __('Enter button text','css-for-elementor'),
        //         'title'         =>  __('Enter button text here', 'css-for-elementor'),
        //     ]

        // );
        $this->add_control(
            'cssfe_innovative_btn_link_url',
            [
                'label' => esc_html__('Link URL','css-for-elementor'),
				'type'          => \Elementor\Controls_Manager::URL,
                    'dynamic'               => [
                        'active'       => true,
                        'categories'   => [
                            \Elementor\Modules\DynamicTags\Module::POST_META_CATEGORY,
                            \Elementor\Modules\DynamicTags\Module::URL_CATEGORY,
                        ],
                    ],
                    'label_block'   => true,
                    'default'       => [
                        'url'         => '#',
                        'is_external' => '',
                    ],
                    'show_external' => true,
            ]

        );

        $this->add_control(
			'cssfe_innovative_btn_icon',
			[
				'label' => esc_html__( 'Icon', 'css-for-elementor' ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'far fa-arrow-alt-circle-right',
					'library' => 'solid',
				],
			]
		);

        $this->add_control(
			'cssfe_innovative_btn_icon_position',
			[
				'label'     => esc_html__( 'Icon Position', 'css-for-elementor' ),
				'type'      => \Elementor\Controls_Manager::SELECT,
				'default'   => 'right',
                'options'   =>  [
                    'left'      =>  esc_html__('Before', 'css-for-elementor'),
                    'right'      =>  esc_html__('After', 'css-for-elementor'),
                ],
                // 'condition' => [
                //     'innovative_btn_icon!' => '',
                // ],
                
			]
		);

        $this->add_responsive_control(
            'cssfe_innovative_btn_icon_space',
            [
                'label'   =>  esc_html__('Icon Spacing', 'css-for-elementor'),
                'type'    =>  \Elementor\Controls_Manager::SLIDER,
                'range'   =>  [
                    'px'     =>  [
                        'max'   =>  60,
                        'min'   =>  0
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .cssfe-innovative-btn-icon-right' => 'margin-left: {{SIZE}}px;',
                    '{{WRAPPER}} .cssfe-innovative-btn-icon-left'  => 'margin-right: {{SIZE}}px;'
                ],
            ]

        );

        $this->end_controls_section();



        // Style Controls

        $this->start_controls_section(
            'ccsfe_section_inovative_button_style',
            [
                'label'     =>  esc_html__( 'Innovative Button & Icon Style', 'css-for-elementor' ),
                'tab'       => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'cssfe_innovative_btn_effect_class',
            [
                'label' => esc_html__('Button Effect', 'css-for-elementor'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => '#ffffff',
                'options'     => [
                    'cssfe-innovative-btn' => esc_html__('Default', 'css-for-elementor'),
                    'cssfe-innovative-btn rainbow' => esc_html__('rainbow', 'css-for-elementor'),
                ],
            ]
        );

        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'cssfe_innovative_btn_typography',
				'label' => __( 'Typography', 'css-for-elementor' ),
				'scheme' => Elementor\Core\Schemes\Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .cssfe-innovative-btn .innovative-button-text',
			]
		);

        $this->start_controls_tabs('cssfe_innovative_button_tabs');

        $this->start_controls_tab(
            'cssfe_innovative_btn_normal', 
            [
                'label' => esc_html__('Normal', 'css-for-elementor'),
            ]
        );

        $this->add_control(
            'cssfe_innovative_btn_icon_color',
            [
                'label' => esc_html__('Icon Color', 'css-for-elementor'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '#ffffff',
                'selectors' => [
                    '{{WRAPPER}} .cssfe-innovative-btn i' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .cssfe-innovative-btn .cssfe-innovative-btn-inner svg' => 'fill: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'cssfe_innovative_btn_text_color',
            [
                'label' => esc_html__('Text Color', 'css-for-elementor'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '#ffffff',
                'selectors' => [
                    '{{WRAPPER}} .cssfe-innovative-btn .innovative-button-text' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'cssfe_innovative_btn_bg_color',
            [
                'label' => esc_html__('Background Color', 'css-for-elementor'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '#D23361',
                'selectors' => [
                    '{{WRAPPER}} .cssfe-innovative-btn' => 'background-color: {{VALUE}}; display: inline-flex;',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'cssfe_innovative_btn_border',
                'label'     => esc_html__('Border', 'css-for-elementor'),  
				'selector' => '{{WRAPPER}} .cssfe-innovative-btn',
			]
        );

        $this->add_control(
            'cssfe_innovative_btn_border_radius',
            [
                'label'     => esc_html__('Border Radius', 'css-for-elementor'),
                'type'      => \Elementor\Controls_Manager::SLIDER,
                'range'     => [
                    'px' => [
                        'max' => 100,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .cssfe-innovative-btn'         => 'border-radius: {{SIZE}}px;',
                    '{{WRAPPER}} .cssfe-innovative-btn::before' => 'border-radius: {{SIZE}}px;',
                    '{{WRAPPER}} .cssfe-innovative-btn::after'  => 'border-radius: {{SIZE}}px;',
                ],
            ]
        );
        $this->end_controls_tab();

        $this->start_controls_tab(
            'cssfe_innovative_btn_hover', 
            [
                'label' => esc_html__('Hover', 'css-for-elementor'),
            ]
        );

        $this->add_control(
            'cssfe_innovative_btn_icon_color_hover',
            [
                'label' => esc_html__('Icon Color', 'css-for-elementor'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '#ffffff',
                'selectors' => [
                    '{{WRAPPER}} .cssfe-innovative-btn:hover i' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .cssfe-innovative-btn .cssfe-innovative-btn-inner:hover svg' => 'fill: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'cssfe_innovative_btn_text_color_hover',
            [
                'label' => esc_html__('Text Color', 'css-for-elementor'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '#ffffff',
                'selectors' => [
                    '{{WRAPPER}} .cssfe-innovative-btn:hover .innovative-button-text' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'cssfe_innovative_btn_bg_color_hover',
            [
                'label' => esc_html__('Background Color', 'css-for-elementor'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '#E41651',
                'selectors' => [
                    '{{WRAPPER}} .cssfe-innovative-btn:hover' => 'background-color: {{VALUE}}; display: inline-flex;',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'cssfe_innovative_btn_border_hover',
                'label'     => esc_html__('Border', 'css-for-elementor'),  
				'selector' => '{{WRAPPER}} .cssfe-innovative-btn:hover',
			]
        );

        $this->add_control(
            'cssfe_innovative_btn_border_radius_hover',
            [
                'label'     => esc_html__('Border Radius', 'css-for-elementor'),
                'type'      => \Elementor\Controls_Manager::SLIDER,
                'range'     => [
                    'px' => [
                        'max' => 100,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .cssfe-innovative-btn:hover'         => 'border-radius: {{SIZE}}px;',
                    '{{WRAPPER}} .cssfe-innovative-btn::before' => 'border-radius: {{SIZE}}px;',
                    '{{WRAPPER}} .cssfe-innovative-btn::after'  => 'border-radius: {{SIZE}}px;',
                ],
            ]
        );

        $this->end_controls_tab();
        $this->end_controls_tabs();

        $this->add_responsive_control(
            'cssfe_innovative_btn_width',
            [
                'label'      => esc_html__('Width', 'css-for-elementor'),
                'type'       => \Elementor\Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range'      => [
                    'px' => [
                        'min'  => 0,
                        'max'  => 500,
                        'step' => 1,
                    ],
                    '%'  => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'selectors'  => [
                    '{{WRAPPER}} .cssfe-innovative-btn' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'cssfe_innovative_btn_alignment',
            [
                'label'       => esc_html__('Button Alignment', 'css-for-elementor'),
                'type'        => \Elementor\Controls_Manager::CHOOSE,
                'label_block' => true,
                'options'     => [
                    'flex-start' => [
                        'title' => esc_html__('Left', 'css-for-elementor'),
                        'icon'  => 'fa fa-align-left',
                    ],
                    'center'     => [
                        'title' => esc_html__('Center', 'css-for-elementor'),
                        'icon'  => 'fa fa-align-center',
                    ],
                    'flex-end'   => [
                        'title' => esc_html__('Right', 'css-for-elementor'),
                        'icon'  => 'fa fa-align-right',
                    ],
                ],
                'default'     => '',
                'selectors'   => [
                    '{{WRAPPER}} .cssfe-innovative-btn-wrapper' => 'justify-content: {{VALUE}} !important; display: flex; position:relative;',
                ],
            ]
        );

        $this->add_responsive_control(
            'cssfe_innovative_btn_icon_size',
            [
                'label'      => esc_html__('Icon Size', 'css-for-elementor'),
                'type'       => \Elementor\Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'default'    => [
                    'size' => 15,
                    'unit' => 'px',
                ],
                'range'      => [
                    'px' => [
                        'min'  => 0,
                        'max'  => 500,
                        'step' => 1,
                    ],
                    '%'  => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'selectors'  => [
                    '{{WRAPPER}} .cssfe-innovative-btn i, .cssfe-innovative-btn span'   => 'font-size: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .cssfe-innovative-btn svg' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
			'cssfe_innovative_btn_padding',
			[
				'label' => __( 'Padding', 'css-for-elementor' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em', '%' ],

				'selectors' => [
					'{{WRAPPER}} .cssfe-innovative-btn' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

        $this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'cssfe_innovative_btn_box_shadow',
				'label' => __( 'Box Shadow', 'css-for-elementor' ),
				'selector' => '{{WRAPPER}} .cssfe-innovative-btn',
			]
		);

        $this->end_controls_section();



        
    }


    protected function render(){
        $settings = $this->get_settings_for_display();
        $icon = $settings['cssfe_innovative_btn_icon'];
        $effect_class = $settings['cssfe_innovative_btn_effect_class'];

        if ( ! empty( $settings['cssfe_innovative_btn_link_url']['url'] ) ) {
            $this->add_link_attributes( 'cssfe_innovative_btn', $settings['cssfe_innovative_btn_link_url'] );
          }
  
          if ($settings['cssfe_innovative_btn_link_url']['is_external']) {
              $this->add_render_attribute('cssef_innovative_btn', 'target', '_blank');
          }
  
          if ($settings['cssfe_innovative_btn_link_url']['nofollow']) {
              $this->add_render_attribute('cssfe_innovative_btn', 'rel', 'nofollow');
          }

        ?>
            <div class="cssfe-innovative-btn-wrapper">

                <a <?php echo $this->get_render_attribute_string('cssfe_innovative_btn'); ?> class="cssfe-innovative-btn <?php echo $effect_class; ?> ">

                    <div class="cssfe-innovative-btn-inner">

                        <?php if($settings['cssfe_innovative_btn_icon_position'] == 'left') : ?>
                            <?php if ($icon) {
                                echo '<span class="cssfe-innovative-btn-icon-left">';
                                \Elementor\Icons_Manager::render_icon( $settings['cssfe_innovative_btn_icon'], [ 'aria-hidden' => 'true' ] );
                                echo '</span>';
                            } ?>
                        <?php endif; ?>

                        <span class="innovative-button-text"><?php echo $settings['cssfe_inovative_btn_text']; ?></span>

                        <?php if($settings['cssfe_innovative_btn_icon_position'] == 'right') : ?>
                            <?php if ($icon) {
                                echo '<span class="cssfe-innovative-btn-icon-right">';
                                \Elementor\Icons_Manager::render_icon( $settings['cssfe_innovative_btn_icon'], [ 'aria-hidden' => 'true' ] );
                                echo '</span>';
                            } ?>
                        <?php endif; ?>

                    </div>

                </a>

            </div>
        <?php
    }



}
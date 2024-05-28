<?php


if( !defined('ABSPATH') ) {
    exit;
}

class Innovative_Popup extends \Elementor\Widget_Base{
    
    public function get_name(){

        return 'innovative-popup';

    }

    public function get_title()
    {

        return __('Innovative Popup','css-for-elementor');
    }

    public function get_icon()
    {
        return 'eicon-editor-external-link';
    }
    
    public function get_categories()
    {
        return ['css-for-elementor'];
    }
  
    public function get_keywords() 
	{
		return [ 'popup', 'innovative-popup', 'modal', 'modal-widget'. 'elementor-popup', 'animation', 'elementor', 'css-for-elementor' ];
	}

    protected function _register_controls(){

        $this->start_controls_section(

            'inovative_modal_content',
            [
                'label' => esc_html__('Modal Content', 'css-for-elementor'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
			'popup_description',
			[
				'label' => __( 'Description', 'plugin-domain' ),
				'type' => \Elementor\Controls_Manager::WYSIWYG,
				'default' => __( 'Default description', 'plugin-domain' ),
				'placeholder' => __( 'Content here', 'plugin-domain' ),
			]
		);

        $this->add_control(
			'popup_button',
			[
				'label' => __( 'Button Text', 'plugin-domain' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( 'Innovaton Popup', 'plugin-domain' ),
			]
		);

        $this->end_controls_section();

        $this->start_controls_section(

            'inovative_modal_style',
            [
                'label' => esc_html__('Modal Text', 'css-for-elementor'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'modal_content_typography',
				'label' => __( 'Content Typography', 'css-for-elementor' ),
				'scheme' => Elementor\Core\Schemes\Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} #innovation_modal_content .modal-body',
			]
		);

        $this->end_controls_section();

        $this->start_controls_section(

            'inovative_modal_btn_style',
            [
                'label' => esc_html__('Popup Button', 'css-for-elementor'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
			'popup_btn_align',
			[
				'label' => __( 'Alignment', 'plugin-domain' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'left' => [
						'title' => __( 'Left', 'plugin-domain' ),
						'icon' => 'eicon-text-align-left',
					],
					'center' => [
						'title' => __( 'Center', 'plugin-domain' ),
						'icon' => 'eicon-text-align-center',
					],
					'right' => [
						'title' => __( 'Right', 'plugin-domain' ),
						'icon' => 'eicon-text-align-right',
					],
                    '100%' => [
						'title' => __( 'Justify', 'plugin-domain' ),
						'icon' => 'eicon-text-align-justify',
					],
				],
				'default' => 'left',
				'toggle' => true,
			]
		);

        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'modal_btn_typography',
				'label' => __( 'Content Typography', 'css-for-elementor' ),
				'scheme' => Elementor\Core\Schemes\Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} #innovation_modal_btn button.btn',
			]
		);

        $this->start_controls_tabs( 'innovative_modal_btn_normal_hover' );

		$this->start_controls_tab(
			'modal_btn_normal',
			[
				'label' => __( 'Normal', 'css-for-elementor' ),
			]
		);

        $this->add_control(
            'modal_btn_color',
            [
                'label' => esc_html__('Color', 'css-for-elementor'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '#fff',
                'selectors' => [
                    '{{WRAPPER}} #innovation_modal_btn button.btn' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'modal_btn_bg_color',
            [
                'label' => esc_html__('Background', 'css-for-elementor'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '#0062cc',
                'selectors' => [
                    '{{WRAPPER}} #innovation_modal_btn button.btn' => 'background: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'modal_btn_border',
				'label' => __( 'Button Border', 'css-for-elementor' ),
				'selector' => '{{WRAPPER}} #innovation_modal_btn button.btn',
			]
		);

        $this->end_controls_tab();

        $this->start_controls_tab(
			'modal_btn_hover',
			[
				'label' => __( 'Hover', 'css-for-elementor' ),
			]
		);

        $this->add_control(
            'modal_btn_hover_color',
            [
                'label' => esc_html__('Color', 'css-for-elementor'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '#fff',
                'selectors' => [
                    '{{WRAPPER}} #innovation_modal_btn button.btn:hover' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'modal_btn_hover_bg_color',
            [
                'label' => esc_html__('Background', 'css-for-elementor'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '#0062cc',
                'selectors' => [
                    '{{WRAPPER}} #innovation_modal_btn button.btn:hover' => 'background: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'modal_btn_hover_border',
				'label' => __( 'Button Border', 'css-for-elementor' ),
				'selector' => '{{WRAPPER}} #innovation_modal_btn button.btn:hover',
			]
		);

        $this->end_controls_tab();
        $this->end_controls_tabs();

        $this->add_responsive_control(
			'modal_btn_padding',
			[
				'label' => __( 'Button Padding', 'css-for-elementor' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} #innovation_modal_btn button.btn' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_responsive_control(
			'modal_btn_border_radius',
			[
				'label' => __( 'Button Border Radius', 'css-for-elementor' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} #innovation_modal_btn button.btn' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

        $this->end_controls_section();

        $this->start_controls_section(

            'inovative_modal_style_1',
            [
                'label' => esc_html__('Popup Style', 'css-for-elementor'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
			'modal_width',
			[
				'label' => __( 'Width', 'plugin-domain' ),
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
					'unit' => '%',
					'size' => 60,
				],
			]
		);

        $this->add_control(
            'modal_body_bg_color',
            [
                'label' => esc_html__('Background', 'css-for-elementor'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '#fff',
                'selectors' => [
                    '{{WRAPPER}} #innovation_modal_content .modal-body' => 'background: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'modal_body_border',
				'label' => __( 'Popup Border', 'css-for-elementor' ),
				'selector' => '{{WRAPPER}} #innovation_modal_content .modal-content',
			]
		);

        $this->add_responsive_control(
			'modal_body_padding',
			[
				'label' => __( 'Popup Padding', 'css-for-elementor' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} #innovation_modal_content .modal-body' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_responsive_control(
			'modal_body_border_radius',
			[
				'label' => __( 'Popup Border Radius', 'css-for-elementor' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} #innovation_modal_content .modal-content' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

        $this->end_controls_section();

        $this->start_controls_section(

            'inovative_modal_close_btn',
            [
                'label' => esc_html__('Popup Close Button', 'css-for-elementor'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'modal_close_btn_typography',
				'label' => __( 'Content Typography', 'css-for-elementor' ),
				'scheme' => Elementor\Core\Schemes\Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} #innovation_modal_content button.close',
			]
		);

        $this->add_control(
            'modal_close_btn_color',
            [
                'label' => esc_html__('Color', 'css-for-elementor'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '#fff',
                'selectors' => [
                    '{{WRAPPER}} #innovation_modal_content button.close' => 'color: {{VALUE}} !important;',
                ],
            ]
        );

        $this->add_control(
            'modal_close_btn_bg_color',
            [
                'label' => esc_html__('Background', 'css-for-elementor'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '#ff0000',
                'selectors' => [
                    '{{WRAPPER}} #innovation_modal_content button.close' => 'background: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_section();

    }


    protected function render(){

        $data = $this->get_settings_for_display();

        ?>

        <style>

            #innovation_modal_btn {
                justify-content: <?php echo $data['popup_btn_align']; ?> !important;
            }
            #innovation_modal_btn button.btn {
                width: <?php echo $data['popup_btn_align']; ?>;
            }

        </style>
            
            <!-- Button trigger modal -->
        <div class="innovative_popup">

            <div id="innovation_modal_btn">
                    <button type="button" class="btn" data-toggle="modal" data-target="#innovative_modal_id">
                    <?php echo $data['popup_button']; ?>
                    </button>
            </div>

            
            <div id="innovation_modal_content">
                <div class="modal fade" id="innovative_modal_id" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" style="max-width: <?php echo $data['modal_width']['size'] . $data['modal_width']['unit']; ?> !important;" role="document">
                        <div class="modal-content">
                            
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        
                            <div class="modal-body">
                                <?php echo $data['popup_description']; ?>
                            </div>
                            <!-- <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
            
        </div>

            

        <?php

    }


}
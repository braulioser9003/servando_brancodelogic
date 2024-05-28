
<?php
if( !defined('ABSPATH') ) {
    exit;
}

class Innovative_Social_Tooltip extends \Elementor\Widget_Base {

    

    public function get_name() {
        return 'innovation-social-tooltip';
    }

    public function get_title() {
        return __( 'Social Tooltip', 'css-for-elementor' );
    }

    public function get_icon() {
		return 'eicon-social-icons';
	}

    public function get_keywords() {
		return [ 'social tooltip', 'tooltip', 'social', 'social media','social icon', 'socail share', 'css-for-elementor', 'innovative' ];
	}

	public function get_categories() {
		return [ 'css-for-elementor' ];
	}

  

    protected function _register_controls() {

        $this->start_controls_section(
            'social_tooltip',
            [
                'label' => __('Tooltip', 'plugin-name'),
            ]
        );

        $this->add_control(
			'social_icon_layout',
			[
				'label' => __( 'Layout', 'plugin-domain' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'block' => [
						'title' => __( 'Default', 'plugin-domain' ),
						'icon' => 'eicon-editor-list-ul',
					],
					'inline' => [
						'title' => __( 'Inline', 'plugin-domain' ),
						'icon' => 'eicon-ellipsis-h',
					],
				],
				'default' => 'inline',
				'toggle' => true,
			]
		);

        $this->add_responsive_control(
			'social_icon_align',
			[
				'label' => __( 'Alignment', 'plugin-domain' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'left' => [
						'title' => __( 'Left', 'plugin-domain' ),
						'icon' => 'fa fa-align-left',
					],
					'center' => [
						'title' => __( 'Center', 'plugin-domain' ),
						'icon' => 'fa fa-align-center',
					],
					'right' => [
						'title' => __( 'Right', 'plugin-domain' ),
						'icon' => 'fa fa-align-right',
					],
				],
				'default' => 'center',
				'toggle' => true,
			]
		);

        $repeater = new \Elementor\Repeater();


        $repeater->add_control(
			'list_icon',
			[
				'label' => __( 'Select Icon', 'text-domain' ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fab fa-facebook-f',
					'library' => 'solid',
				],
                'fa4compatibility' => 'icon',
			]
		);

        $repeater->add_control(
			'link',
			[
				'label' => __( 'Link', 'plugin-domain' ),
				'type' => \Elementor\Controls_Manager::URL,
				'dynamic' => [
					'active' => true,
				],
				'placeholder' => __( 'https://your-link.com', 'elementor' ),
			]
		);

        $repeater->add_control(
			'tooltip_on',
			[
				'label' => __( 'Tooltip?', 'plugin-domain' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __( 'On', 'your-plugin' ),
                'label_off' => __( 'Off', 'your-plugin' ),
                'return_value' => 'yes',
				'default' => 'yes',
			]
		);

		$repeater->add_control(
			'tooltip_content', [
				'label' => __( 'tooltip Content', 'plugin-domain' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'rows' => 3,
				'default' => __( 'Tooltip' , 'plugin-domain' ),
				'show_label' => false,
                'condition' => [
                    'tooltip_on' => 'yes'
                ],
			]
		);
        
        $repeater->add_control(
			'icon_color',
			[
				'label' => __( 'Icon Color', 'plugin-domain' ),
				'type' => \Elementor\Controls_Manager::COLOR,
			]
		);

        $repeater->add_control(
			'icon_bg_color',
			[
				'label' => __( 'Icon Background', 'plugin-domain' ),
				'type' => \Elementor\Controls_Manager::COLOR,
			]
		);



		$this->add_control(
			'list',
			[
				'label' => __( 'Social List', 'plugin-domain' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'list_title' => __( 'Facebook', 'plugin-domain' ),
						'tooltip_content' => __( 'Facebook', 'plugin-domain' ),
                        'list_icon' => [
                            'value' => 'fab fa-facebook-f',
                            'library' => 'fa-solid',
                        ],
					],

                    [
						'list_title' => __( 'Twitter', 'plugin-domain' ),
						'tooltip_content' => __( 'Twitter', 'plugin-domain' ),
                        'list_icon' => [
                            'value' => 'fab fa-twitter',
                            'library' => 'fa-solid',
                        ],
					],

                    [
						'list_title' => __( 'Linkedin', 'plugin-domain' ),
						'tooltip_content' => __( 'Linkedin', 'plugin-domain' ),
                        'list_icon' => [
                            'value' => 'fab fa-linkedin-in',
                            'library' => 'fa-solid',
                        ],
					],

                    [
						'list_title' => __( 'Instagram', 'plugin-domain' ),
						'tooltip_content' => __( 'Instagram', 'plugin-domain' ),
                        'list_icon' => [
                            'value' => 'fab fa-instagram',
                            'library' => 'fa-solid',
                        ],
					],
                    
				],
				'title_field' => '{{{ elementor.helpers.renderIcon( this, list_icon, {}, "i", "panel" ) || \'<i class="{{ icon }}" aria-hidden="true"></i>\' }}} {{{ list_title }}}',
			]
		);

        $this->add_control(
			'social_tooltip_position',
			[
				'label' => __( 'Tooltip Position', 'plugin-domain' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'top' => [
						'title' => __( 'Top', 'plugin-domain' ),
						'icon' => 'eicon-v-align-top',
					],
					'right' => [
						'title' => __( 'Right', 'plugin-domain' ),
						'icon' => 'eicon-h-align-right',
					],
					'bottom' => [
						'title' => __( 'Bottom', 'plugin-domain' ),
						'icon' => 'eicon-v-align-bottom',
					],
                    'left' => [
						'title' => __( 'Left', 'plugin-domain' ),
						'icon' => 'eicon-h-align-left',
					],
				],
				'default' => 'top',
				'toggle' => true,
			]
		);

        $this->end_controls_section();

        $this->start_controls_section(
            'social_tooltip_style',
            [
                'label' => __('Social Icons', 'plugin-name'),
                'tab'       => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
			'social_icon_space',
			[
				'label' => __( 'Icon Space', 'plugin-domain' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 200,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'default' => [
					'unit' => 'px',
					'size' => 20,
				],
			]
		);

        $this->add_responsive_control(
			'social_icon_size',
			[
				'label' => __( 'Icon Size', 'plugin-domain' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px'],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 200,
						'step' => 1,
					],
				],

				'default' => [
					'unit' => 'px',
					'size' => 15,
				],

                'selectors' => [
					'{{WRAPPER}} #innovative_social_tooltip li a i' => 'font-size: {{SIZE}}{{UNIT}}',
                    '{{WRAPPER}} #innovative_social_tooltip li a span' => 'font-size: {{SIZE}}{{UNIT}}',
                    '{{WRAPPER}} #innovative_social_tooltip li a svg' => 'font-size: {{SIZE}}{{UNIT}}',
				],
			]
		);

        $this->add_responsive_control(
			'social_icon_padding',
			[
				'label' => __( 'Padding', 'plugin-domain' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px'],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 500,
						'step' => 1,
					],
				],

				'default' => [
					'unit' => 'px',
					'size' => 40,
				],
			]
		);
        
        $this->add_responsive_control(
			'social_icon_border_radius',
			[
				'label' => __( 'Border Radius', 'plugin-domain' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ '%', 'px'],
				'range' => [
                    'px' => [
						'min' => 0,
						'max' => 200,
						'step' => 1,
					],

					'%' => [
						'min' => 0,
						'max' => 100,
					],
				],

				'default' => [
					'unit' => '%',
					'size' => 50,
				],
			]
		);

        $this->start_controls_tabs('social_icon_normal_hover');

        $this->start_controls_tab(
            'socila_icon_normal', 
            ['label' => esc_html__('Normal', 'plugin-name')]
        );

        $this->add_responsive_control(
			'social_icon_normal_color',
			[
				'label' => __( 'Icons Color', 'css-for-elementor' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} #innovative_social_tooltip li a i' => 'color: {{VALUE}}',
				],
			]
		);

        $this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'social_icon_normal_bg_color',
				'label' => __( 'Background', 'plugin-domain' ),
				'types' => [ 'classic', 'gradient', ],
				'selector' => '{{WRAPPER}} #innovative_social_tooltip li a',
			]
		);

        $this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'social_icon_border',
				'label' => __( 'Border', 'css-for-elementor' ),
				'selector' => '{{WRAPPER}} #innovative_social_tooltip li a',
			]
		);

        $this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'social_box_shadow',
				'label' => __( 'Box Shadow', 'plugin-domain' ),
				'selector' => '{{WRAPPER}} #innovative_social_tooltip li a',
			]
		);

        $this->end_controls_tab();

        $this->start_controls_tab(
            'socila_icon_hover', 
            ['label' => esc_html__('Hover', 'plugin-name')]
        );

        $this->add_responsive_control(
			'social_icon_normal_color_hover',
			[
				'label' => __( 'Icons Color', 'css-for-elementor' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} #innovative_social_tooltip li a i:hover' => 'color: {{VALUE}}',
				],
			]
		);

        $this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'social_icon_normal_bg_color_hover',
				'label' => __( 'Background', 'plugin-domain' ),
				'types' => [ 'classic', 'gradient', ],
				'selector' => '{{WRAPPER}} #innovative_social_tooltip li a:hover',
			]
		);

        $this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'social_icon_border_hover',
				'label' => __( 'Border', 'css-for-elementor' ),
				'selector' => '{{WRAPPER}} #innovative_social_tooltip li a:hover',
			]
		);

        $this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'social_box_shadow_hover',
				'label' => __( 'Box Shadow', 'plugin-domain' ),
				'selector' => '{{WRAPPER}} #innovative_social_tooltip li a:hover',
			]
		);

        $this->end_controls_tab();
        $this->end_controls_tab();

        $this->end_controls_section();

        $this->start_controls_section(
            'social_tooltip_section',
            [
                'label'     =>  esc_html__( 'Tooltip', 'css-for-elementor' ),
                'tab'       => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
			'social_tooltip_color',
			[
				'label' => __( 'Color', 'css-for-elementor' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .tooltip-inner' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'social_tooltip_typo',
				'label' => __( 'Typography', 'plugin-domain' ),
				'scheme' => Elementor\Core\Schemes\Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .tooltip-inner',
			]
		);

		$this->add_responsive_control(
			'social_tooltip_bg_color',
			[
				'label' => __( 'Backgorund Color', 'css-for-elementor' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .tooltip-inner' => 'background: {{VALUE}} !important',
				],
			]
		);

		$this->add_responsive_control(
			'social_tooltip_arrow_color',
			[
				'label' => __( 'Arrow Color', 'css-for-elementor' ),
				'type' => \Elementor\Controls_Manager::COLOR,
			]
		);


    }

    

    protected function render(){

        $data = $this->get_settings_for_display();

        $this->render_js();

        $icon_space = $data['social_icon_space']['size'] . $data['social_icon_space']['unit'];
        $height_width = $data['social_icon_padding']['size'] . $data['social_icon_padding']['unit'];
        $border_radius = $data['social_icon_border_radius']['size'] . $data['social_icon_border_radius']['unit'];

        ?>
            <style>

                #innovative_social_tooltip ul li {
                    display: <?php echo $data['social_icon_layout'];?>;
                    list-style: none;
                    margin-right: <?php if( $data['social_icon_layout'] == 'inline' ){echo $icon_space;}else{ echo '0px';}?>;
                    margin-bottom: <?php if( $data['social_icon_layout'] == 'inline' ){echo '0px';}else{ echo $icon_space;}?>;
                }

                #innovative_social_tooltip ul li:last-child {
                    margin-right: 0px;
                    margin-bottom: 0px;
                }
                
                #innovative_social_tooltip ul {
                    text-align: <?php echo $data['social_icon_align'];?>;
                }

                #innovative_social_tooltip li a {
                    height: <?php echo $height_width; ?>;
                    width: <?php echo $height_width; ?>;
                    border-radius: <?php echo $border_radius; ?>;
                }

                .tooltip-inner {
					background-color: <?php echo $data['social_tooltip_bg_color']; ?> !important;
					color: <?php echo $data['social_tooltip_color']; ?>;
				}

				.bs-tooltip-top .arrow::before, .bs-tooltip-auto[x-placement^="top"] .arrow::before {
					border-top-color: <?php echo $data['social_tooltip_arrow_color']; ?> !important;
				}

				.bs-tooltip-right .arrow::before, .bs-tooltip-auto[x-placement^="right"] .arrow::before {
					border-right-color: <?php echo $data['social_tooltip_arrow_color']; ?> !important;
				}

				.bs-tooltip-bottom .arrow::before, .bs-tooltip-auto[x-placement^="bottom"] .arrow::before {
					border-bottom-color: <?php echo $data['social_tooltip_arrow_color']; ?> !important;
				}

				.bs-tooltip-left .arrow::before, .bs-tooltip-auto[x-placement^="left"] .arrow::before {
					border-left-color: <?php echo $data['social_tooltip_arrow_color']; ?> !important;
				}



            </style>


            <div id="innovative_social_tooltip">
                <ul>
                    <?php foreach($data['list'] as $item ): 

                        $target = $item['link']['is_external'] ? ' target="_blank"' : '';
                        $nofollow = $item['link']['nofollow'] ? ' rel="nofollow"' : '';
                        
                    ?>
                        <style>
                        
                            <?php echo '.tooltip-item-' . $item['_id'] . ' ' . 'a'; ?> ,
                            <?php echo '.tooltip-item-' . $item['_id'] . ' ' . 'a'; ?>{

                                background : <?php echo $item['icon_bg_color']; ?> !important;

                            }

                            <?php echo '.tooltip-item-' . $item['_id'] . ' ' . 'a i'; ?> ,
                            <?php echo '.tooltip-item-' . $item['_id'] . ' ' . 'a span'; ?>{

                                color : <?php echo $item['icon_color']; ?>;

                            }

                            <?php echo '.tooltip-item-' . $item['_id'] . ' ' . 'a svg'; ?>{
                                fill : <?php echo $item['icon_color']; ?>;
                            }
                            

                        </style>

                        <li class="tooltip-item-<?php echo $item['_id']; ?>" >
                            <a href="<?php echo $item['link']['url']; ?>" <?php echo $target . $nofollow ?> data-toggle="tooltip" data-placement="<?php echo $data['social_tooltip_position']; ?>" title="<?php echo $item['tooltip_content']; ?>" class="red-tooltip">
                                <?php \Elementor\Icons_Manager::render_icon( $item['list_icon'], [ 'aria-hidden' => 'true' ] ); ?>
                            </a>
                        </li>

                    <?php endforeach; ?>
                </ul>
            </div>

        <?php
    }




    protected function render_js(){
        ?>

        <script>

            ;(function($) {
                'use strict';

                $(function () {
                        $('[data-toggle="tooltip"]').tooltip()
                });

            })(jQuery);

        </script>

        <?php
    }


    
}
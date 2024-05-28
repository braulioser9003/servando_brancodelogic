<?php


if( !defined('ABSPATH') ) {
    exit;
}

class Innovative_Lottie extends \Elementor\Widget_Base{
    
    public function get_name(){

        return 'innovative-lottie';

    }

    public function get_title()
    {

        return __('Innovative Lottie','css-for-elementor');
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

            'inovative_lottie_content',
            [
                'label' => esc_html__('Lottie Content', 'css-for-elementor'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
			'innovative_lottie_source',
			[
				'label' => __( 'Select Source', 'plugin-domain' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'url',
				'options' => [
					'media'  => __( 'Media', 'plugin-domain' ),
					'url' => __( 'URL', 'plugin-domain' ),
					'none' => __( 'None', 'plugin-domain' ),
				],
			]
		);


        $this->add_control(
			'innovative_lottie_link',
			[
				'label' => __( 'Lottie Json Link', 'plugin-domain' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => __( 'https://assets9.lottiefiles.com/datafiles/MUp3wlMDGtoK5FK/data.json', 'plugin-domain' ),
				'default' => [
					'url' => 'https://assets9.lottiefiles.com/datafiles/MUp3wlMDGtoK5FK/data.json',
				],
                'condition' => [
                    'innovative_lottie_source' => 'url',
                ],
			]
		);

        $this->add_control(
			'innovative_lottie_json',
			[
				'label' => __( 'Upload JSON File', 'plugin-domain' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'media_type' => 'application/json',
				'frontend_available' => true,
                'condition' => [
                    'innovative_lottie_source' => 'media',
                ],
			]
		);

        $this->end_controls_section();

        $this->start_controls_section(
            'inovative_lottie_control',
            [
                'label' => esc_html__('Lottie Controls', 'css-for-elementor'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_responsive_control(
			'inovative_lottie_speed',
			[
				'label' => __( 'Speed', 'plugin-domain' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100,
						'step' => 1,
					],
				],
				'default' => [
					'size' => 1,
				],
			]
		);

        $this->add_control(
			'inovative_lottie_loop',
			[
				'label' => __( 'Animation Loop', 'plugin-domain' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __( 'On', 'your-plugin' ),
                'label_off' => __( 'Off', 'your-plugin' ),
                'return_value' => 'yes',
				'default' => 'yes',
			]
		);

        $this->add_control(
			'inovative_lottie_autoplay',
			[
				'label' => __( 'Autoplay', 'plugin-domain' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __( 'On', 'your-plugin' ),
                'label_off' => __( 'Off', 'your-plugin' ),
                'return_value' => 'yes',
				'default' => 'yes',
			]
		);

        $this->add_control(
			'inovative_lottie_show_controls',
			[
				'label' => __( 'Show Control', 'plugin-domain' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __( 'On', 'your-plugin' ),
                'label_off' => __( 'Off', 'your-plugin' ),
                'return_value' => 'yes',
				'default' => 'no',
			]
		);

        $this->end_controls_section();

        $this->start_controls_section(
            'inovative_lottie_style',
            [
                'label' => esc_html__('Lottie Controls', 'css-for-elementor'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
			'inovative_lottie_bg_color',
			[
				'label' => __( 'Background Color', 'css-for-elementor' ),
				'type' => \Elementor\Controls_Manager::COLOR,
			]
		);

        $this->add_responsive_control(
			'inovative_lottie_width',
			[
				'label' => __( 'Width', 'plugin-domain' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
						'step' => 1,
					],
				],
				'default' => [
					'unit' => 'px',
					'size' => 300,
				],
			]
		);

        $this->add_responsive_control(
			'inovative_lottie_height',
			[
				'label' => __( 'Height', 'plugin-domain' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
						'step' => 1,
					],
				],
				'default' => [
					'unit' => 'px',
					'size' => 300,
				],
			]
		);



    }


    protected function render(){
        $data = $this->get_settings_for_display();


        if( $data['innovative_lottie_source'] == 'media' ){

            $lottie_source_link = $data['innovative_lottie_json']['url'];

        }elseif( $data['innovative_lottie_source'] == 'url' ){

            $lottie_source_link = $data['innovative_lottie_link']['url'];
        }

        // Lottie Controls
        $lottie_speed = $data['inovative_lottie_speed']['size'];

        if( $data['inovative_lottie_loop'] == 'yes' ){
            $lottie_loop = 'loop';
        }else {
            $lottie_loop = '';
        }

        if( $data['inovative_lottie_autoplay'] == 'yes' ){
            $lottie_autoplay = 'autoplay';
        }else {
            $lottie_autoplay = '';
        }

        if( $data['inovative_lottie_show_controls'] == 'yes' ){
            $lottie_controls = 'controls';
        }else {
            $lottie_controls = '';
        }


        // Lottie style
        $lottie_bg_color = $data['inovative_lottie_bg_color'];
        $lottie_width = $data['inovative_lottie_width']['size'] . $data['inovative_lottie_width']['unit'];
        $lottie_height = $data['inovative_lottie_height']['size'] . $data['inovative_lottie_height']['unit'];

        
        ?>
       
            <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
            <lottie-player src="<?php echo $lottie_source_link; ?>"
                background="<?php echo $lottie_bg_color; ?>"
                speed="<?php echo $lottie_speed; ?>" 
                style="width: <?php echo $lottie_width ?>; height: <?php echo $lottie_height ?>;"
                <?php echo $lottie_loop; ?>
                <?php echo $lottie_controls; ?>
                <?php echo $lottie_autoplay; ?>

                ></lottie-player>
        <?php
    }
}
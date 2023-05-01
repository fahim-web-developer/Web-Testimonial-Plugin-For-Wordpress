<?php 
/**
 * Web Testimonial
 *
 * @package           PluginPackage
 * @author            MD Foysal Afridi
 * @copyright         Web
 * @license           GPL-2.0-or-later
 */

/**
 * Elementor Web testimonial Widget.
 *
 * Elementor widget that inserts an embbedable content into the page, from any given URL.
 *
 * @since 1.0.0
 */
class Webtestimonial_Card_Widget extends \Elementor\Widget_Base {

    /**
     * Get widget name.
     *
     * Retrieve Web testimonial widget name.
     *
     * @since 1.0.0
     * @access public
     *
     * @return string Widget name.
     */
    public function get_name() {
        return 'web-testimonial';
    }

    /**
     * Get widget title.
     *
     * Retrieve Web testimonial widget title.
     *
     * @since 1.0.0
     * @access public
     *
     * @return string Widget title.
     */
    public function get_title() {
        return __( 'Web testimonial', 'webtestimonial' );
    }

    /**
     * Get widget icon.
     *
     * Retrieve Web testimonial widget icon.
     *
     * @since 1.0.0
     * @access public
     *
     * @return string Widget icon.
     */
    public function get_icon() {
        return 'eicon-comments';
    }

    /**
     * Get widget categories.
     *
     * Retrieve the list of categories the Web testimonial widget belongs to.
     *
     * @since 1.0.0
     * @access public
     *
     * @return array Widget categories.
     */
    public function get_categories() {
        return [ 'general' ];
    }

    /**
     * Register Web testimonial widget controls.
     *
     * Adds different input fields to allow the user to change and customize the widget settings.
     *
     * @since 1.0.0
     * @access protected
     */
    protected function _register_controls() {


        $this->start_controls_section(
            'content_section',
            [
                'label' => __( 'Design', 'webtestimonial' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );


        $this->add_control('webtestimonial_testimonial_style',
            [
                'label' => esc_html__( 'Style', 'webtestimonial' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => '1',
                'options' => [
                    '1'   => esc_html__( 'Slider Template', 'webtestimonial' ),
                    '2'   => esc_html__( 'Template 2', 'webtestimonial' ),
                    '3'   => esc_html__( 'Template 3', 'webtestimonial' ),
                    '4'   => esc_html__( 'Template 4', 'webtestimonial' ),
                    '5'   => esc_html__( 'Template 5', 'webtestimonial' ),
                    '6'   => esc_html__( 'Template 6', 'webtestimonial' ),
                    '7'   => esc_html__( 'Template 7', 'webtestimonial' ),
                    '8'   => esc_html__( 'Template 8', 'webtestimonial' ),
                    '9'   => esc_html__( 'Template 9', 'webtestimonial' ),
                    '10'   => esc_html__( 'Template 10', 'webtestimonial' ),
                ],
            ]
        );

        $this->add_control('webtestimonial_testimonial_slider',
            [
                'label' => esc_html__( 'Style', 'webtestimonial' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => '1',
                'options' => [
                    '1'   => esc_html__( 'Slider 1', 'webtestimonial' ),
                    '2'   => esc_html__( 'Slider 2', 'webtestimonial' ),
                    '3'   => esc_html__( 'Slider 3', 'webtestimonial' ),
                    '4'   => esc_html__( 'Slider 4', 'webtestimonial' ),
                ],
                'condition' => [
                    'webtestimonial_testimonial_style' =>'1'
                ]
            ]
        );

        $this->end_controls_section();
        $this->start_controls_section(
            'layout_section',
            [
                'label' => __( 'Layout', 'webtestimonial' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
                'condition' => [
                    'webtestimonial_testimonial_style!' =>'1'
                ]
            ]
        );


        $this->add_control('webtestimonial_layout_style',
            [
                'label' => esc_html__( 'Columns', 'webtestimonial' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => '1',
                'options' => [
                    '1'   => esc_html__( '1', 'webtestimonial' ),
                    '2'   => esc_html__( '2', 'webtestimonial' ),
                    '3'   => esc_html__( '3', 'webtestimonial' ),
                    '4'   => esc_html__( '4', 'webtestimonial' ),
                    '5'   => esc_html__( '5', 'webtestimonial' ),
                    '6'   => esc_html__( '6', 'webtestimonial' ),
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'additional_options_section',
            [
                'label' => __( 'Additional Options', 'webtestimonial' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );


        $this->add_control(
            'show_title',
            [
                'label' => __( 'Show Title', 'webtestimonial' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __( 'Show', 'webtestimonial' ),
                'label_off' => __( 'Hide', 'webtestimonial' ),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );
        $this->add_control(
            'show_excerpt',
            [
                'label' => __( 'Show Excerpt', 'webtestimonial' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __( 'Show', 'webtestimonial' ),
                'label_off' => __( 'Hide', 'webtestimonial' ),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );
        $this->add_control(
            'show_Position',
            [
                'label' => __( 'Show Position', 'webtestimonial' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __( 'Show', 'webtestimonial' ),
                'label_off' => __( 'Hide', 'webtestimonial' ),
                'return_value' => 'yes',
                'default' => 'yes',
            ]

        );
        $this->add_control(
            'show_image',
            [
                'label' => __( 'Show Image', 'webtestimonial' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __( 'Show', 'webtestimonial' ),
                'label_off' => __( 'Hide', 'webtestimonial' ),
                'return_value' => 'yes',
                'default' => 'yes',
            ]

        );
        $this->add_control(
            'show_quote',
            [
                'label' => __( 'Show Quote', 'webtestimonial' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __( 'Show', 'webtestimonial' ),
                'label_off' => __( 'Hide', 'webtestimonial' ),
                'return_value' => 'yes',
                'default' => 'yes',
            ]

        );
        $this->add_control(
            'show_ratings',
            [
                'label' => __( 'Show Ratings', 'webtestimonial' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __( 'Show', 'webtestimonial' ),
                'label_off' => __( 'Hide', 'webtestimonial' ),
                'return_value' => 'yes',
                'default' => 'yes',
            ]

        );

        $this->end_controls_section();
/*==========================================================================
    Web Testimonials Slider setting
============================================================================*/
        $this->start_controls_section(
            'webtestimonial-slider-option',
            [
                'label' => esc_html__( 'Slider Option', 'webtestimonial' ),
                'condition' => [
                    'webtestimonial_testimonial_style' =>'1'
                ]
            ]
        );
        $this->add_control(
            'slider_on',
            [
                'label' => esc_html__( 'Slider', 'webtestimonial' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'return_value' => 'yes',
                'default' => 'yes',
                'separator'=>'before',
            ]
        );
        $this->add_control(
            'webtestimonial_slider_items',
            [
                'label' => esc_html__( 'Slider Items', 'webtestimonial' ),
                'type' => \Elementor\Controls_Manager::NUMBER,
                'min' => 1,
                'max' => 10,
                'step' => 1,
                'default' => 1,
                'condition' => [
                    'slider_on' => 'yes',
                ]
            ]
        );
        $this->add_control(
                'webtestimonial_arrows',
                [
                    'label' => esc_html__( 'Slider Arrow', 'webtestimonial' ),
                    'type' => \Elementor\Controls_Manager::SWITCHER,
                    'return_value' => 'yes',
                    'default' => 'yes',
                    'condition' => [
                        'slider_on' => 'yes',
                    ]
                ]
            );

            $this->add_control(
                'webtestimonial_previcon',
                [
                    'label' => esc_html__( 'Previous icon', 'webtestimonial' ),
                    'type' => \Elementor\Controls_Manager::ICONS,
                    'default' => [
                        'value'=>'fas fa-angle-left',
                        'library'=>'solid',
                    ],
                    'condition' => [
                        'slider_on' => 'yes',
                        'webtestimonial_arrows' => 'yes',
                    ]
                ]
            );

            $this->add_control(
                'webtestimonial_nexticon',
                [
                    'label' => esc_html__( 'Next icon', 'webtestimonial' ),
                    'type' => \Elementor\Controls_Manager::ICONS,
                    'default' => [
                        'value'=>'fas fa-angle-right',
                        'library'=>'solid',
                    ],
                    'condition' => [
                        'slider_on' => 'yes',
                        'webtestimonial_arrows' => 'yes',
                    ]
                ]
            );
            $this->add_control(
                'webtestimonial_dots',
                [
                    'label' => esc_html__( 'Slider dots', 'webtestimonial' ),
                    'type' => \Elementor\Controls_Manager::SWITCHER,
                    'return_value' => 'yes',
                    'default' => 'no',
                    'condition' => [
                        'slider_on' => 'yes',
                    ]
                ]
            );
            $this->add_control(
                'webtestimonial_on_hover',
                [
                    'label' => esc_html__( 'Pause on Hover?', 'webtestimonial' ),
                    'type' => \Elementor\Controls_Manager::SWITCHER,
                    'return_value' => 'yes',
                    'default' => 'no',
                    'condition' => [
                        'slider_on' => 'yes',
                    ]
                ]
            );

            $this->add_control(
                'webtestimonial_autoplay',
                [
                    'label' => esc_html__( 'Slider auto play', 'webtestimonial' ),
                    'type' => \Elementor\Controls_Manager::SWITCHER,
                    'return_value' => 'yes',
                    'separator' => 'before',
                    'default' => 'no',
                    'condition' => [
                        'slider_on' => 'yes',
                    ]
                ]
            );

            $this->add_control(
                'webtestimonial_autoplay_speed',
                [
                    'label' => esc_html__('Autoplay speed', 'webtestimonial'),
                    'type' => \Elementor\Controls_Manager::NUMBER,
                    'default' => 3000,
                    'condition' => [
                        'webtestimonial_autoplay' => 'yes',
                    ]
                ]
            );

            $this->add_control(
                'webtestimonial_animation_speed',
                [
                    'label' => esc_html__('Autoplay animation speed', 'webtestimonial'),
                    'type' => \Elementor\Controls_Manager::NUMBER,
                    'default' => 300,
                    'condition' => [
                        'webtestimonial_autoplay_speed' => 'yes',
                    ]
                ]
            );


            $this->add_control(
                'webtestimonial_centermode',
                [
                    'label' => esc_html__( 'Center Mode', 'webtestimonial' ),
                    'type' => \Elementor\Controls_Manager::SWITCHER,
                    'return_value' => 'yes',
                    'default' => 'no',
                    'condition' => [
                        'slider_on' => 'yes',
                    ]
                ]
            );


            $this->add_control(
                'webtestimonial_heading_tablet',
                [
                    'label' => esc_html__( 'Tablet', 'webtestimonial' ),
                    'type' => \Elementor\Controls_Manager::HEADING,
                    'separator' => 'after',
                    'condition' => [
                        'slider_on' => 'yes',
                    ]
                ]
            );
            $this->add_control(
                'webtestimonial_tablet_item',
                [
                    'label' => esc_html__('Slider Items', 'webtestimonial'),
                    'type' => \Elementor\Controls_Manager::NUMBER,
                    'min' => 1,
                    'max' => 8,
                    'step' => 1,
                    'default' => 1,
                    'condition' => [
                        'slider_on' => 'yes',
                    ]
                ]
            );
            $this->add_control(
                'webtestimonial_heading_mobile',
                [
                    'label' => esc_html__( 'Mobile', 'webtestimonial' ),
                    'type' => \Elementor\Controls_Manager::HEADING,
                    'separator' => 'after',
                    'condition' => [
                        'slider_on' => 'yes',
                    ]
                ]
            );
            $this->add_control(
                'webtestimonial_mobile_items',
                [
                    'label' => esc_html__('Slider Items', 'webtestimonial'),
                    'type' => \Elementor\Controls_Manager::NUMBER,
                    'min' => 1,
                    'max' => 8,
                    'step' => 1,
                    'default' => 1,
                    'condition' => [
                        'slider_on' => 'yes',
                    ]
                ]
            );
        $this->end_controls_section();
/*==========================================================================
    Web Testimonials Content
============================================================================*/

        $this->start_controls_section(
            'webtestimonial_content',
            [
                'label' => esc_html__( 'Content', 'webtestimonial' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_responsive_control(
            'webtestimonial_content_align',
            [
                'label' => esc_html__( 'Alignment', 'abtestimonial' ),
                'type' => \Elementor\Controls_Manager::CHOOSE,
                'options' => [
                    'left' => [
                        'title' => esc_html__( 'Left', 'abtestimonial' ),
                        'icon' => 'fa fa-align-left',
                    ],
                    'center' => [
                        'title' => esc_html__( 'Center', 'abtestimonial' ),
                        'icon' => 'fa fa-align-center',
                    ],
                    'right' => [
                        'title' => esc_html__( 'Right', 'abtestimonial' ),
                        'icon' => 'fa fa-align-right',
                    ],
                    'justify' => [
                        'title' => esc_html__( 'Justified', 'abtestimonial' ),
                        'icon' => 'fa fa-align-justify',
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .webtestimonial-list' => 'text-align: {{VALUE}};',
                ],
                'default' => 'center',
                'separator' =>'before',
            ]
        );
        $this->add_responsive_control(
                'webtestimonial_section_margin',
                [
                    'label' => esc_html__( 'Margin', 'webtestimonial' ),
                    'type' => \Elementor\Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em' ],
                    'selectors' => [
                        '{{WRAPPER}} .webtestimonial-list' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                    'separator' =>'before',
                ]
            );

            $this->add_responsive_control(
                'webtestimonial_section_padding',
                [
                    'label' => esc_html__( 'Padding', 'webtestimonial' ),
                    'type' => \Elementor\Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em' ],
                    'selectors' => [
                        '{{WRAPPER}} .webtestimonial-list' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                    'separator' =>'before',
                ]
            );

            $this->add_responsive_control(
                'webtestimonial_section_border_radius',
                [
                    'label' => esc_html__( 'Border Radius', 'webtestimonial' ),
                    'type' =>\Elementor\Controls_Manager::DIMENSIONS,
                    'selectors' => [
                        '{{WRAPPER}} .webtestimonial-list' => 'border-radius: {{TOP}}px {{RIGHT}}px {{BOTTOM}}px {{LEFT}}px;',
                    ],
                ]
            );

        $this->end_controls_section();
/*==========================================================================
    Web Testimonials Color
============================================================================*/

        $this->start_controls_section(
            'webtestimonial_testimonial_text_color',
            [
                'label' => esc_html__( 'Text Color', 'webtestimonial' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'title_color',
            [
                'label' => __( 'Title Color', 'webtestimonial' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'scheme' => [
                    'type' => \Elementor\Core\Schemes\Color::get_type(),
                    'value' => \Elementor\Core\Schemes\Color::COLOR_1,
                ],
                'selectors' => [
                    '{{WRAPPER}} .title' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
            'excerpt_color',
            [
                'label' => __( 'Excerpt', 'webtestimonial' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'scheme' => [
                    'type' => \Elementor\Core\Schemes\Color::get_type(),
                    'value' => \Elementor\Core\Schemes\Color::COLOR_1,
                ],
                'selectors' => [
                    '{{WRAPPER}} .excerpt' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
            'position_color',
            [
                'label' => __( 'Position', 'webtestimonial' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'scheme' => [
                    'type' => \Elementor\Core\Schemes\Color::get_type(),
                    'value' => \Elementor\Core\Schemes\Color::COLOR_1,
                ],
                'selectors' => [
                    '{{WRAPPER}} .position' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->end_controls_section();
/*==========================================================================
    Web Testimonials Style
============================================================================*/
        
        /*==========================================================================
            background
        ============================================================================*/


        $this->start_controls_section(
            'appbuff_testimonial_style_area',
            [
                'label' => esc_html__( 'Background', 'webtestimonial' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );


        $this->start_controls_tabs( 'testimonial_background_style_tabs' );

            // Normal tab Start
            $this->start_controls_tab(
                'testimonial_background_style_normal_tab',
                [
                    'label' => esc_html__( 'Normal', 'webtestimonial' ),
                ]
            );
            $this->add_group_control(
                \Elementor\Group_Control_Background::get_type(),
                [
                    'name' => 'background',
                    'label' => __( 'Background', 'webtestimonial' ),
                    'types' => [ 'classic', 'gradient', 'video' ],
                    'selector' => '{{WRAPPER}} .webtestimonial-list',
                ]
            );

            $this->add_group_control(
                \Elementor\Group_Control_Border::get_type(),
                [
                    'name' => 'border',
                    'label' => __( 'Border', 'webtestimonial' ),
                    'selector' => '{{WRAPPER}} .webtestimonial-list',
                ]
            );

            $this->add_group_control(
                \Elementor\Group_Control_Box_Shadow::get_type(),
                [
                    'name' => 'box_shadow',
                    'label' => __( 'Box Shadow', 'webtestimonial' ),
                    'selector' => '{{WRAPPER}} .webtestimonial-list',
                ]
            );
            $this->add_responsive_control(
                'testimonial_background_border_radius',
                [
                    'label' => esc_html__( 'Border Radius', 'webtestimonial' ),
                    'type' =>\Elementor\Controls_Manager::DIMENSIONS,
                    'selectors' => [
                        '{{WRAPPER}} .webtestimonial-list' => 'border-radius: {{TOP}}px {{RIGHT}}px {{BOTTOM}}px {{LEFT}}px;',
                    ],
                ]
            );
            $this->end_controls_tab(); 

            /*==========================================================================
                Hover tab Start
            ============================================================================*/

            $this->start_controls_tab(
                'testimonial_background_style_hover_tab',
                [
                    'label' => esc_html__( 'Hover', 'webtestimonial' ),
                ]
            );

            $this->add_group_control(
                \Elementor\Group_Control_Background::get_type(),
                [
                    'name' => 'testimonial_background_hover_background',
                    'label' => esc_html__( 'Background', 'webtestimonial', 'video'),
                    'types' => [ 'classic', 'gradient' ],
                    'selector' => '{{WRAPPER}} .webtestimonial-list:hover',
                ]
            );

            $this->add_group_control(
                \Elementor\Group_Control_Border::get_type(),
                [
                    'name' => 'testimonial_background_hover_border',
                    'label' => esc_html__( 'Border', 'webtestimonial' ),
                    'selector' => '{{WRAPPER}} .webtestimonial-list:hover',
                ]
            );
            $this->add_group_control(
                \Elementor\Group_Control_Box_Shadow::get_type(),
                [
                    'name' => 'box_hover_shadow',
                    'label' => __( 'Box Shadow', 'webtestimonial' ),
                    'selector' => '{{WRAPPER}} .webtestimonial-list:hover',
                ]
            );
            $this->add_responsive_control(
                'testimonial_background_hover_border_radius',
                [
                    'label' => esc_html__( 'Border Radius', 'webtestimonial' ),
                    'type' =>\Elementor\Controls_Manager::DIMENSIONS,
                    'selectors' => [
                        '{{WRAPPER}} .webtestimonial-list:hover' => 'border-radius: {{TOP}}px {{RIGHT}}px {{BOTTOM}}px {{LEFT}}px;',
                    ],
                ]
            );

            $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->end_controls_section();
        /*==========================================================================
            typography
        ============================================================================*/

        $this->start_controls_section(
            'testimonial_text_style',
            [
                'label'     => esc_html__( 'Typography', 'webtestimonial' ),
                'tab'       => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );


        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'title_typography',
                'label' => __( 'Title', 'webtestimonial' ),
                'scheme' => \Elementor\Core\Schemes\Typography::TYPOGRAPHY_1,
                'selector' => '{{WRAPPER}} .title',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'excerpt_typography',
                'label' => __( 'Excerpt', 'webtestimonial' ),
                'scheme' => \Elementor\Core\Schemes\Typography::TYPOGRAPHY_1,
                'selector' => '{{WRAPPER}} .excerpt',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'position_typography',
                'label' => __( 'Position', 'webtestimonial' ),
                'scheme' => \Elementor\Core\Schemes\Typography::TYPOGRAPHY_1,
                'selector' => '{{WRAPPER}} .position',
            ]
        );
            
        $this->add_group_control(
            \Elementor\Group_Control_Text_Shadow::get_type(),
            [
                'name' => 'text_shadow',
                'label' => __( 'Text Shadow', 'webtestimonial' ),
                'selector' => '{{WRAPPER}} .wrapper',
            ]
        );

        $this->end_controls_section();


        /*==========================================================================
            arrow style
        ============================================================================*/

        /*==========================================================================
            normal arrow style
        ============================================================================*/
        $this->start_controls_section(
            'testimonial_arrow_style',
            [
                'label'     => esc_html__( 'Arrow', 'webtestimonial' ),
                'tab'       => \Elementor\Controls_Manager::TAB_STYLE,
                'condition' =>[
                    'slider_on' => 'yes',
                    'webtestimonial_arrows'  => 'yes',
                ],
            ]
        );
            
        $this->start_controls_tabs( 'testimonial_arrow_style_tabs' );

                // Normal tab Start
        $this->start_controls_tab(
            'testimonial_arrow_style_normal_tab',
            [
                'label' => esc_html__( 'Normal', 'webtestimonial' ),
            ]
        );

        $this->add_control(
            'testimonial_arrow_color',
            [
                'label' => esc_html__( 'Color', 'webtestimonial' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'scheme' => [
                    'type' => \Elementor\Core\Schemes\Color::get_type(),
                    'value' => \Elementor\Core\Schemes\Color::COLOR_1,
                ],
                'default' => '#7d7d7d',
                'selectors' => [
                    '{{WRAPPER}} .testimonial button i' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'testimonial_arrow_fontsize',
            [
                'label' => esc_html__( 'Font Size', 'webtestimonial' ),
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
                    'size' => 20,
                ],
                'selectors' => [
                    '{{WRAPPER}} .testimonial button i' => 'font-size: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'testimonial_arrow_background',
                'label' => esc_html__( 'Background', 'webtestimonial' ),
                'types' => [ 'classic', 'gradient' ],
                'selector' => '{{WRAPPER}} .testimonial button i',
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'testimonial_arrow_border',
                'label' => esc_html__( 'Border', 'webtestimonial' ),
                'selector' => '{{WRAPPER}} .testimonial button i',
            ]
        );

        $this->add_responsive_control(
            'testimonial_arrow_border_radius',
            [
                'label' => esc_html__( 'Border Radius', 'webtestimonial' ),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'selectors' => [
                    '{{WRAPPER}} .testimonial button i' => 'border-radius: {{TOP}}px {{RIGHT}}px {{BOTTOM}}px {{LEFT}}px;',
                ],
            ]
        );

        $this->add_control(
            'testimonial_arrow_height',
            [
                'label' => esc_html__( 'Height', 'webtestimonial' ),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%' ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 1000,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => 36,
                ],
                'selectors' => [
                    '{{WRAPPER}} .testimonial button i' => 'height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'testimonial_arrow_width',
            [
                'label' => esc_html__( 'Width', 'webtestimonial' ),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%' ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 1000,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => 36,
                ],
                'selectors' => [
                    '{{WRAPPER}} .testimonial button i' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'testimonial_arrow_padding',
            [
                'label' => esc_html__( 'Padding', 'webtestimonial' ),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .testimonial button i' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
                'separator' =>'before',
            ]
        );
        $this->end_controls_tab(); 

        /*==========================================================================
            Hover tab Start
        ============================================================================*/

        $this->start_controls_tab(
            'testimonial_arrow_style_hover_tab',
            [
                'label' => esc_html__( 'Hover', 'webtestimonial' ),
            ]
        );

        $this->add_control(
            'testimonial_arrow_hover_color',
            [
                'label' => esc_html__( 'Color', 'webtestimonial' ),
                'type' =>\Elementor\Controls_Manager::COLOR,
                'scheme' => [
                    'type' => \Elementor\Core\Schemes\Color::get_type(),
                    'value' => \Elementor\Core\Schemes\Color::COLOR_1,
                ],
                'default' => '#ffffff',
                'selectors' => [
                    '{{WRAPPER}} .testimonial button i:hover' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'testimonial_arrow_hover_background',
                'label' => esc_html__( 'Background', 'webtestimonial' ),
                'types' => [ 'classic', 'gradient' ],
                'selector' => '{{WRAPPER}} .testimonial button i:hover',
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'testimonial_arrow_hover_border',
                'label' => esc_html__( 'Border', 'webtestimonial' ),
                'selector' => '{{WRAPPER}} .testimonial button i:hover',
            ]
        );

        $this->add_responsive_control(
            'testimonial_arrow_hover_border_radius',
            [
                'label' => esc_html__( 'Border Radius', 'webtestimonial' ),
                'type' =>\Elementor\Controls_Manager::DIMENSIONS,
                'selectors' => [
                    '{{WRAPPER}} .testimonial button i:hover' => 'border-radius: {{TOP}}px {{RIGHT}}px {{BOTTOM}}px {{LEFT}}px;',
                ],
            ]
        );

        $this->end_controls_tab();
        $this->end_controls_tabs();
    $this->end_controls_section();
        /*==========================================================================
            Quote style
        ============================================================================*/

        /*==========================================================================
            normal quote style
        ============================================================================*/
        $this->start_controls_section(
            'testimonial_quote_style',
            [
                'label'     => esc_html__( 'Quote', 'webtestimonial' ),
                'tab'       => \Elementor\Controls_Manager::TAB_STYLE,
                'condition' =>[
                    'show_quote'  => 'yes',
                ],
            ]
        );
            
        $this->start_controls_tabs( 'testimonial_quote_style_tabs' );

                // Normal tab Start
        $this->start_controls_tab(
            'testimonial_quote_style_normal_tab',
            [
                'label' => esc_html__( 'Normal', 'webtestimonial' ),
            ]
        );

        $this->add_control(
            'testimonial_quote_color',
            [
                'label' => esc_html__( 'Color', 'webtestimonial' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'scheme' => [
                    'type' => \Elementor\Core\Schemes\Color::get_type(),
                    'value' => \Elementor\Core\Schemes\Color::COLOR_1,
                ],
                'default' => '#fcb002',
                'selectors' => [
                    '{{WRAPPER}} .webtestimonial p.quote-icon' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'testimonial_quote_fontsize',
            [
                'label' => esc_html__( 'Font Size', 'webtestimonial' ),
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
                    'size' => 20,
                ],
                'selectors' => [
                    '{{WRAPPER}} .webtestimonial p.quote-icon' => 'font-size: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_tab(); 

        /*==========================================================================
            Hover tab Start
        ============================================================================*/

            $this->start_controls_tab(
                'testimonial_quote_style_hover_tab',
                [
                    'label' => esc_html__( 'Hover', 'webtestimonial' ),
                ]
            );

            $this->add_control(
                'testimonial_quote_hover_color',
                [
                    'label' => esc_html__( 'Color', 'webtestimonial' ),
                    'type' =>\Elementor\Controls_Manager::COLOR,
                    'scheme' => [
                        'type' => \Elementor\Core\Schemes\Color::get_type(),
                        'value' => \Elementor\Core\Schemes\Color::COLOR_1,
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .webtestimonial p.quote-icon:hover' => 'color: {{VALUE}};',
                    ],
                ]
            );
            $this->end_controls_tab();
        $this->end_controls_tabs();

    $this->end_controls_section();
    /*==========================================================================
            Ratings style
        ============================================================================*/

        /*==========================================================================
            normal Ratings style
        ============================================================================*/
        $this->start_controls_section(
            'testimonial_ratings_style',
            [
                'label'     => esc_html__( 'Ratings', 'webtestimonial' ),
                'tab'       => \Elementor\Controls_Manager::TAB_STYLE,
                'condition' =>[
                    'show_ratings'  => 'yes',
                ],
            ]
        );
            
        $this->start_controls_tabs( 'testimonial_ratings_style_tabs' );

                // Normal tab Start
        $this->start_controls_tab(
            'testimonial_ratings_style_normal_tab',
            [
                'label' => esc_html__( 'Normal', 'webtestimonial' ),
            ]
        );

        $this->add_control(
            'testimonial_ratings_color',
            [
                'label' => esc_html__( 'Color', 'webtestimonial' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'scheme' => [
                    'type' => \Elementor\Core\Schemes\Color::get_type(),
                    'value' => \Elementor\Core\Schemes\Color::COLOR_1,
                ],
                'default' => '#fcb002',
                'selectors' => [
                    '{{WRAPPER}} .webtestimonial_star_wrapper i' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'testimonial_ratings_fontsize',
            [
                'label' => esc_html__( 'Font Size', 'webtestimonial' ),
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
                    'size' => 20,
                ],
                'selectors' => [
                    '{{WRAPPER}} .webtestimonial_star_wrapper i' => 'font-size: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_tab(); 

        /*==========================================================================
            Hover tab Start
        ============================================================================*/

            $this->start_controls_tab(
                'testimonial_ratings_style_hover_tab',
                [
                    'label' => esc_html__( 'Hover', 'webtestimonial' ),
                ]
            );

            $this->add_control(
                'testimonial_ratings_hover_color',
                [
                    'label' => esc_html__( 'Color', 'webtestimonial' ),
                    'type' =>\Elementor\Controls_Manager::COLOR,
                    'scheme' => [
                        'type' => \Elementor\Core\Schemes\Color::get_type(),
                        'value' => \Elementor\Core\Schemes\Color::COLOR_1,
                    ],
                    'default' => '#ffffff',
                    'selectors' => [
                        '{{WRAPPER}} .webtestimonial_star_wrapper i:hover' => 'color: {{VALUE}};',
                    ],
                ]
            );
            $this->end_controls_tab();
        $this->end_controls_tabs();

    $this->end_controls_section();

    }

    /**
     * Render Web testimonial widget output on the frontend.
     *
     * Written in PHP and used to generate the final HTML.
     *
     * @since 1.0.0
     * @access protected
     */
    protected function render() {

        $settings = $this->get_settings_for_display();
        $args = array("post_type" => "webtestimonial");
        $testimonials_query = new WP_Query( $args );
        
        ?>
        <?php 
        if ($settings['webtestimonial_layout_style'] == 1) {
            $width = "colw-1 colw-md-1 colw-sm-1";
        }elseif($settings['webtestimonial_layout_style'] == 2){
            $width = "colw-2 colw-md-2 colw-sm-1";
        }elseif($settings['webtestimonial_layout_style'] == 3){
            $width = "colw-3 colw-md-2 colw-sm-1";
        }elseif($settings['webtestimonial_layout_style'] == 4){
            $width = "colw-4 colw-md-3 colw-sm-1";
        }elseif($settings['webtestimonial_layout_style'] == 5){
            $width = "colw-5 colw-md-3 colw-sm-1";
        }else{
            $width = "colw-6 colw-md-3 colw-sm-1";
        }

        if( $settings['webtestimonial_testimonial_style'] == 1 ):
            if( $settings['webtestimonial_testimonial_slider'] == 1 ):
                require_once( plugin_dir_path( __FILE__ ) . '../template/slider-template-1.php');
            elseif( $settings['webtestimonial_testimonial_slider'] == 2 ):
                require_once( plugin_dir_path( __FILE__ ) . '../template/slider-template-2.php');
            elseif( $settings['webtestimonial_testimonial_slider'] == 3 ):
                require_once( plugin_dir_path( __FILE__ ) . '../template/slider-template-3.php');
            elseif( $settings['webtestimonial_testimonial_slider'] == 4 ):
                require_once( plugin_dir_path( __FILE__ ) . '../template/slider-template-4.php');
            endif;
        elseif( $settings['webtestimonial_testimonial_style'] == 2 ):
            require_once( plugin_dir_path( __FILE__ ) . '../template/template-2.php'); 
        elseif( $settings['webtestimonial_testimonial_style'] == 3 ):
            require_once( plugin_dir_path( __FILE__ ) . '../template/template-3.php'); 
        elseif( $settings['webtestimonial_testimonial_style'] == 4 ):
            require_once( plugin_dir_path( __FILE__ ) . '../template/template-4.php'); 
        elseif( $settings['webtestimonial_testimonial_style'] == 5 ):
            require_once( plugin_dir_path( __FILE__ ) . '../template/template-5.php'); 
        elseif( $settings['webtestimonial_testimonial_style'] == 6): 
            require_once( plugin_dir_path( __FILE__ ) . '../template/template-6.php'); 
        // elseif( $settings['webtestimonial_testimonial_style'] == 7):
        //     require_once( plugin_dir_path( __FILE__ ) . '../template/template-7.php'); 
        // elseif( $settings['webtestimonial_testimonial_style'] == 8):
        //     require_once( plugin_dir_path( __FILE__ ) . '../template/template-8.php'); 
        // elseif( $settings['webtestimonial_testimonial_style'] == 9):
        //     require_once( plugin_dir_path( __FILE__ ) . '../template/template-9.php'); 
        else:
            require_once( plugin_dir_path( __FILE__ ) . '../template/template-10.php'); 
        endif;
    }
}
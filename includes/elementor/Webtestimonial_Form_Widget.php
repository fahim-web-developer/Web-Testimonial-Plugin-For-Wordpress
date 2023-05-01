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
class Webtestimonial_Form_Widget extends \Elementor\Widget_Base {

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
        return 'web-form';
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
        return __( 'Web Form', 'webtestimonial' );
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
        return 'eicon-form-horizontal';
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
    $this->add_control(
        'webtestimonial_form_label',
        [
            'label' => esc_html__( 'Slow Label', 'webtestimonial' ),
            'type' => \Elementor\Controls_Manager::SWITCHER,
            'return_value' => 'yes',
            'default' => 'yes'
        ]
    );

    $this->add_control('webtestimonial_form_name_width',
        [
            'label' => esc_html__( 'Name Width', 'webtestimonial' ),
            'type' => \Elementor\Controls_Manager::SELECT,
            'default' => '1',
            'options' => [
                '1'   => esc_html__( '100%', 'webtestimonial' ),
                '2'   => esc_html__( '90%', 'webtestimonial' ),
                '3'   => esc_html__( '80%', 'webtestimonial' ),
                '4'   => esc_html__( '70%', 'webtestimonial' ),
                '5'   => esc_html__( '60%', 'webtestimonial' ),
                '6'   => esc_html__( '50%', 'webtestimonial' ),
                '7'   => esc_html__( '40%', 'webtestimonial' ),
                '8'   => esc_html__( '30%', 'webtestimonial' ),
                '9'   => esc_html__( '20%', 'webtestimonial' ),
                '10'   => esc_html__( '10%', 'webtestimonial' ),
            ],
        ]
    );
    $this->add_control('webtestimonial_form_position_width',
        [
            'label' => esc_html__( 'Position Width', 'webtestimonial' ),
            'type' => \Elementor\Controls_Manager::SELECT,
            'default' => '1',
            'options' => [
                '1'   => esc_html__( '100%', 'webtestimonial' ),
                '2'   => esc_html__( '90%', 'webtestimonial' ),
                '3'   => esc_html__( '80%', 'webtestimonial' ),
                '4'   => esc_html__( '70%', 'webtestimonial' ),
                '5'   => esc_html__( '60%', 'webtestimonial' ),
                '6'   => esc_html__( '50%', 'webtestimonial' ),
                '7'   => esc_html__( '40%', 'webtestimonial' ),
                '8'   => esc_html__( '30%', 'webtestimonial' ),
                '9'   => esc_html__( '20%', 'webtestimonial' ),
                '10'   => esc_html__( '10%', 'webtestimonial' ),
            ],
        ]
    );
    $this->add_control('webtestimonial_form_rating_width',
        [
            'label' => esc_html__( 'Rating Width', 'webtestimonial' ),
            'type' => \Elementor\Controls_Manager::SELECT,
            'default' => '1',
            'options' => [
                '1'   => esc_html__( '100%', 'webtestimonial' ),
                '2'   => esc_html__( '90%', 'webtestimonial' ),
                '3'   => esc_html__( '80%', 'webtestimonial' ),
                '4'   => esc_html__( '70%', 'webtestimonial' ),
                '5'   => esc_html__( '60%', 'webtestimonial' ),
                '6'   => esc_html__( '50%', 'webtestimonial' ),
                '7'   => esc_html__( '40%', 'webtestimonial' ),
                '8'   => esc_html__( '30%', 'webtestimonial' ),
                '9'   => esc_html__( '20%', 'webtestimonial' ),
                '10'   => esc_html__( '10%', 'webtestimonial' ),
            ],
        ]
    );
    $this->add_control('webtestimonial_form_content_width',
        [
            'label' => esc_html__( 'Content Width', 'webtestimonial' ),
            'type' => \Elementor\Controls_Manager::SELECT,
            'default' => '1',
            'options' => [
                '1'   => esc_html__( '100%', 'webtestimonial' ),
                '2'   => esc_html__( '90%', 'webtestimonial' ),
                '3'   => esc_html__( '80%', 'webtestimonial' ),
                '4'   => esc_html__( '70%', 'webtestimonial' ),
                '5'   => esc_html__( '60%', 'webtestimonial' ),
                '6'   => esc_html__( '50%', 'webtestimonial' ),
                '7'   => esc_html__( '40%', 'webtestimonial' ),
                '8'   => esc_html__( '30%', 'webtestimonial' ),
                '9'   => esc_html__( '20%', 'webtestimonial' ),
                '10'   => esc_html__( '10%', 'webtestimonial' ),
            ],
        ]
    );
    $this->add_control('webtestimonial_form_image_width',
        [
            'label' => esc_html__( 'Image Width', 'webtestimonial' ),
            'type' => \Elementor\Controls_Manager::SELECT,
            'default' => '1',
            'options' => [
                '1'   => esc_html__( '100%', 'webtestimonial' ),
                '2'   => esc_html__( '90%', 'webtestimonial' ),
                '3'   => esc_html__( '80%', 'webtestimonial' ),
                '4'   => esc_html__( '70%', 'webtestimonial' ),
                '5'   => esc_html__( '60%', 'webtestimonial' ),
                '6'   => esc_html__( '50%', 'webtestimonial' ),
                '7'   => esc_html__( '40%', 'webtestimonial' ),
                '8'   => esc_html__( '30%', 'webtestimonial' ),
                '9'   => esc_html__( '20%', 'webtestimonial' ),
                '10'   => esc_html__( '10%', 'webtestimonial' ),
            ],
        ]
    );
    $this->end_controls_section();
/*==========================================================================
    Web Testimonials Content
============================================================================*/
    $this->start_controls_section(
            'webtestimonial_testimonial_content',
            [
                'label' => esc_html__( 'Content', 'webtestimonial' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'content_background',
                'label' => __( 'Background', 'webtestimonial' ),
                'types' => [ 'classic', 'gradient', 'video' ],
                'selector' => '{{WRAPPER}} .form-horizontal',
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'content_border',
                'label' => __( 'Border', 'webtestimonial' ),
                'selector' => '{{WRAPPER}} .form-horizontal',
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'content_box_shadow',
                'label' => __( 'Box Shadow', 'webtestimonial' ),
                'selector' => '{{WRAPPER}} .form-horizontal',
            ]
        );
        $this->add_responsive_control(
            'testimonial_content_border_radius',
            [
                'label' => esc_html__( 'Border Radius', 'webtestimonial' ),
                'type' =>\Elementor\Controls_Manager::DIMENSIONS,
                'selectors' => [
                    '{{WRAPPER}} .form-horizontal' => 'border-radius: {{TOP}}px {{RIGHT}}px {{BOTTOM}}px {{LEFT}}px;',
                ],
            ]
        );

        $this->add_responsive_control(
            'webtestimonial_content_padding',
            [
                'label' => esc_html__( 'Padding', 'webtestimonial' ),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .form-horizontal' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ]
            ]
        );
        $this->add_responsive_control(
            'webtestimonial_content_margin',
            [
                'label' => esc_html__( 'Margin', 'webtestimonial' ),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .form-horizontal' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ]
            ]
        );
    $this->end_controls_section();

/*==========================================================================
    Web Testimonials label
============================================================================*/

        $this->start_controls_section(
            'webtestimonial_testimonial_label_color',
            [
                'label' => esc_html__( 'Label', 'webtestimonial' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'label_typography',
                'label' => __( 'Typography', 'webtestimonial' ),
                'scheme' => \Elementor\Core\Schemes\Typography::TYPOGRAPHY_1,
                'selector' => '{{WRAPPER}} .control-label',
            ]
        );
        $this->add_control(
            'label_color',
            [
                'label' => __( 'Color', 'webtestimonial' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'scheme' => [
                    'type' => \Elementor\Core\Schemes\Color::get_type(),
                    'value' => \Elementor\Core\Schemes\Color::COLOR_1,
                ],
                'selectors' => [
                    '{{WRAPPER}} .control-label' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->end_controls_section();
/*==========================================================================
/*==========================================================================
    Web Testimonials Field
============================================================================*/

        $this->start_controls_section(
            'webtestimonial_field',
            [
                'label' => esc_html__( 'Input field', 'webtestimonial' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'input_typography',
                'label' => __( 'Typography', 'webtestimonial' ),
                'scheme' => \Elementor\Core\Schemes\Typography::TYPOGRAPHY_1,
                'selector' => '{{WRAPPER}} .webtestimonial-input-box',
            ]
        );
        $this->add_control(
            'input_color',
            [
                'label' => __( 'Color', 'webtestimonial' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'scheme' => [
                    'type' => \Elementor\Core\Schemes\Color::get_type(),
                    'value' => \Elementor\Core\Schemes\Color::COLOR_1,
                ],
                'selectors' => [
                    '{{WRAPPER}} .webtestimonial-input-box' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'input_placeholder_color',
            [
                'label' => __( 'Placeholder Color', 'webtestimonial' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'scheme' => [
                    'type' => \Elementor\Core\Schemes\Color::get_type(),
                    'value' => \Elementor\Core\Schemes\Color::COLOR_1,
                ],
                'selectors' => [
                    '{{WRAPPER}} .webtestimonial-input-box::placeholder' => 'color: {{VALUE}}',
                ],
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
                        'selector' => '{{WRAPPER}} .webtestimonial-input-box',
                    ]
                );

                $this->add_group_control(
                    \Elementor\Group_Control_Border::get_type(),
                    [
                        'name' => 'border',
                        'label' => __( 'Border', 'webtestimonial' ),
                        'selector' => '{{WRAPPER}} .webtestimonial-input-box',
                    ]
                );

                $this->add_group_control(
                    \Elementor\Group_Control_Box_Shadow::get_type(),
                    [
                        'name' => 'box_shadow',
                        'label' => __( 'Box Shadow', 'webtestimonial' ),
                        'selector' => '{{WRAPPER}} .webtestimonial-input-box',
                    ]
                );
                $this->add_responsive_control(
                    'testimonial_background_border_radius',
                    [
                        'label' => esc_html__( 'Border Radius', 'webtestimonial' ),
                        'type' =>\Elementor\Controls_Manager::DIMENSIONS,
                        'selectors' => [
                            '{{WRAPPER}} .webtestimonial-input-box' => 'border-radius: {{TOP}}px {{RIGHT}}px {{BOTTOM}}px {{LEFT}}px;',
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
                        'selector' => '{{WRAPPER}} .webtestimonial-input-box:hover',
                    ]
                );

                $this->add_group_control(
                    \Elementor\Group_Control_Border::get_type(),
                    [
                        'name' => 'testimonial_background_hover_border',
                        'label' => esc_html__( 'Border', 'webtestimonial' ),
                        'selector' => '{{WRAPPER}} .webtestimonial-input-box:hover',
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Box_Shadow::get_type(),
                    [
                        'name' => 'box_hover_shadow',
                        'label' => __( 'Box Shadow', 'webtestimonial' ),
                        'selector' => '{{WRAPPER}} .webtestimonial-input-box:hover',
                    ]
                );
                $this->add_responsive_control(
                    'testimonial_background_hover_border_radius',
                    [
                        'label' => esc_html__( 'Border Radius', 'webtestimonial' ),
                        'type' =>\Elementor\Controls_Manager::DIMENSIONS,
                        'selectors' => [
                            '{{WRAPPER}} .webtestimonial-input-box:hover' => 'border-radius: {{TOP}}px {{RIGHT}}px {{BOTTOM}}px {{LEFT}}px;',
                        ],
                    ]
                );

                $this->end_controls_tab();
            $this->end_controls_tabs();
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
                ],
                'selectors' => [
                    '{{WRAPPER}} .webtestimonial-input-box' => 'text-align: {{VALUE}};',
                ],
                'default' => 'left',
            ]
        );
        $this->add_responsive_control(
                'webtestimonial_section_margin',
                [
                    'label' => esc_html__( 'Margin', 'webtestimonial' ),
                    'type' => \Elementor\Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em' ],
                    'selectors' => [
                        '{{WRAPPER}} .webtestimonial-input-box' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ]
                ]
            );

            $this->add_responsive_control(
                'webtestimonial_section_padding',
                [
                    'label' => esc_html__( 'Padding', 'webtestimonial' ),
                    'type' => \Elementor\Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em' ],
                    'selectors' => [
                        '{{WRAPPER}} .webtestimonial-input-box' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ]
                ]
            );
        $this->end_controls_section();
/*==========================================================================
    Web Testimonials button
============================================================================*/

        $this->start_controls_section(
            'webtestimonial_button',
            [
                'label' => esc_html__( 'Button', 'webtestimonial' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        ); 
        $this->add_control(
            'button_text',
            [
                'label' => __( 'Text', 'elementor' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Submit', 'elementor' ),
                'placeholder' => __( 'Submit', 'elementor' ),
            ]
        );
        $this->add_control('webtestimonial_form_button_width',
            [
                'label' => esc_html__( 'Button Width', 'webtestimonial' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => '1',
                'options' => [
                    '1'   => esc_html__( '100%', 'webtestimonial' ),
                    '2'   => esc_html__( '90%', 'webtestimonial' ),
                    '3'   => esc_html__( '80%', 'webtestimonial' ),
                    '4'   => esc_html__( '70%', 'webtestimonial' ),
                    '5'   => esc_html__( '60%', 'webtestimonial' ),
                    '6'   => esc_html__( '50%', 'webtestimonial' ),
                    '7'   => esc_html__( '40%', 'webtestimonial' ),
                    '8'   => esc_html__( '30%', 'webtestimonial' ),
                    '9'   => esc_html__( '20%', 'webtestimonial' ),
                    '10'   => esc_html__( '10%', 'webtestimonial' ),
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'button_typography',
                'label' => __( 'Typography', 'webtestimonial' ),
                'scheme' => \Elementor\Core\Schemes\Typography::TYPOGRAPHY_1,
                'selector' => '{{WRAPPER}} .submit-btn input',
            ]
        );
        $this->add_control(
            'button_color',
            [
                'label' => __( 'Color', 'webtestimonial' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'scheme' => [
                    'type' => \Elementor\Core\Schemes\Color::get_type(),
                    'value' => \Elementor\Core\Schemes\Color::COLOR_1,
                ],
                'selectors' => [
                    '{{WRAPPER}} .submit-btn input' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->start_controls_tabs( 'testimonial_button_background_style' );

                // Normal tab Start
                $this->start_controls_tab(
                    'testimonial_button_background_style_normal_tab',
                    [
                        'label' => esc_html__( 'Normal', 'webtestimonial' ),
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Background::get_type(),
                    [
                        'name' => 'button_background',
                        'label' => __( 'Background', 'webtestimonial' ),
                        'types' => [ 'classic', 'gradient', 'video' ],
                        'selector' => '{{WRAPPER}} .submit-btn input',
                    ]
                );

                $this->add_group_control(
                    \Elementor\Group_Control_Border::get_type(),
                    [
                        'name' => 'button_border',
                        'label' => __( 'Border', 'webtestimonial' ),
                        'selector' => '{{WRAPPER}} .submit-btn input',
                    ]
                );

                $this->add_group_control(
                    \Elementor\Group_Control_Box_Shadow::get_type(),
                    [
                        'name' => 'button_box_shadow',
                        'label' => __( 'Box Shadow', 'webtestimonial' ),
                        'selector' => '{{WRAPPER}} .submit-btn input',
                    ]
                );
                $this->add_responsive_control(
                    'testimonial_button_background_border_radius',
                    [
                        'label' => esc_html__( 'Border Radius', 'webtestimonial' ),
                        'type' =>\Elementor\Controls_Manager::DIMENSIONS,
                        'selectors' => [
                            '{{WRAPPER}} .submit-btn input' => 'border-radius: {{TOP}}px {{RIGHT}}px {{BOTTOM}}px {{LEFT}}px;',
                        ],
                    ]
                );
                $this->end_controls_tab(); 

                /*==========================================================================
                    Hover tab Start
                ============================================================================*/

                $this->start_controls_tab(
                    'testimonial_button_background_style_hover_tab',
                    [
                        'label' => esc_html__( 'Hover', 'webtestimonial' ),
                    ]
                );

                $this->add_group_control(
                    \Elementor\Group_Control_Background::get_type(),
                    [
                        'name' => 'testimonial_button_background_hover',
                        'label' => esc_html__( 'Background', 'webtestimonial', 'video'),
                        'types' => [ 'classic', 'gradient' ],
                        'selector' => '{{WRAPPER}} .submit-btn input:hover',
                    ]
                );

                $this->add_group_control(
                    \Elementor\Group_Control_Border::get_type(),
                    [
                        'name' => 'testimonial_button_background_hover_border',
                        'label' => esc_html__( 'Border', 'webtestimonial' ),
                        'selector' => '{{WRAPPER}} .submit-btn input:hover',
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Box_Shadow::get_type(),
                    [
                        'name' => 'box_button_hover_shadow',
                        'label' => __( 'Box Shadow', 'webtestimonial' ),
                        'selector' => '{{WRAPPER}} .submit-btn input:hover',
                    ]
                );
                $this->end_controls_tab();
            $this->end_controls_tabs();
        $this->add_responsive_control(
                'webtestimonial_button_margin',
                [
                    'label' => esc_html__( 'Margin', 'webtestimonial' ),
                    'type' => \Elementor\Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em' ],
                    'selectors' => [
                        '{{WRAPPER}} .submit-btn input' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ]
                ]
            );

            $this->add_responsive_control(
                'webtestimonial_button_padding',
                [
                    'label' => esc_html__( 'Padding', 'webtestimonial' ),
                    'type' => \Elementor\Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em' ],
                    'selectors' => [
                        '{{WRAPPER}} .submit-btn input' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ]
                ]
            );

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

        if ($settings['webtestimonial_form_name_width'] == 1) {
            $width = "colw-100";
        }elseif($settings['webtestimonial_form_name_width'] == 2){
            $width = "colw-90";
        }elseif($settings['webtestimonial_form_name_width'] == 3){
            $width = "colw-80 col-mr-1";
        }elseif($settings['webtestimonial_form_name_width'] == 4){
            $width = "colw-70 col-mr-1";
        }elseif($settings['webtestimonial_form_name_width'] == 5){
            $width = "colw-60 col-mr-1";
        }elseif($settings['webtestimonial_form_name_width'] == 6){
            $width = "colw-50 col-mr-1";
        }elseif($settings['webtestimonial_form_name_width'] == 7){
            $width = "colw-40 col-mr-1";
        }elseif($settings['webtestimonial_form_name_width'] == 8){
            $width = "colw-30 col-mr-1";
        }elseif($settings['webtestimonial_form_name_width'] == 9){
            $width = "colw-20 col-mr-1";
        }else{
            $width = "colw-10 col-mr-1";
        }

        if ($settings['webtestimonial_form_position_width'] == 1) {
            $widthP = "colw-100";
        }elseif($settings['webtestimonial_form_position_width'] == 2){
            $widthP = "colw-90";
        }elseif($settings['webtestimonial_form_position_width'] == 3){
            $widthP = "colw-80 col-ml-1";
        }elseif($settings['webtestimonial_form_position_width'] == 4){
            $widthP = "colw-70 col-ml-1";
        }elseif($settings['webtestimonial_form_position_width'] == 5){
            $widthP = "colw-60 col-ml-1";
        }elseif($settings['webtestimonial_form_position_width'] == 6){
            $widthP = "colw-50 col-ml-1";
        }elseif($settings['webtestimonial_form_position_width'] == 7){
            $widthP = "colw-40 col-ml-1";
        }elseif($settings['webtestimonial_form_position_width'] == 8){
            $widthP = "colw-30 col-ml-1";
        }elseif($settings['webtestimonial_form_position_width'] == 9){
            $widthP = "colw-20 col-ml-1";
        }else{
            $widthP = "colw-10 col-ml-1";
        }

        if ($settings['webtestimonial_form_rating_width'] == 1) {
            $widthR = "colw-100";
        }elseif($settings['webtestimonial_form_rating_width'] == 2){
            $widthR = "colw-90";
        }elseif($settings['webtestimonial_form_rating_width'] == 3){
            $widthR = "colw-80 col-mr-1";
        }elseif($settings['webtestimonial_form_rating_width'] == 4){
            $widthR = "colw-70 col-mr-1";
        }elseif($settings['webtestimonial_form_rating_width'] == 5){
            $widthR = "colw-60 col-mr-1";
        }elseif($settings['webtestimonial_form_rating_width'] == 6){
            $widthR = "colw-50 col-mr-1";
        }elseif($settings['webtestimonial_form_rating_width'] == 7){
            $widthR = "colw-40 col-mr-1";
        }elseif($settings['webtestimonial_form_rating_width'] == 8){
            $widthR = "colw-30 col-mr-1";
        }elseif($settings['webtestimonial_form_rating_width'] == 9){
            $widthR = "colw-20 col-mr-1";
        }else{
            $widthR = "colw-10 col-mr-1";
        }

        if ($settings['webtestimonial_form_content_width'] == 1) {
            $widthC = "colw-100";
        }elseif($settings['webtestimonial_form_content_width'] == 2){
            $widthC = "colw-90";
        }elseif($settings['webtestimonial_form_content_width'] == 3){
            $widthC = "colw-80 col-ml-1";
        }elseif($settings['webtestimonial_form_content_width'] == 4){
            $widthC = "colw-70 col-ml-1";
        }elseif($settings['webtestimonial_form_content_width'] == 5){
            $widthC = "colw-60 col-ml-1";
        }elseif($settings['webtestimonial_form_content_width'] == 6){
            $widthC = "colw-50 col-ml-1";
        }elseif($settings['webtestimonial_form_content_width'] == 7){
            $widthC = "colw-40 col-ml-1";
        }elseif($settings['webtestimonial_form_content_width'] == 8){
            $widthC = "colw-30 col-ml-1";
        }elseif($settings['webtestimonial_form_content_width'] == 9){
            $widthC = "colw-20 col-ml-1";
        }else{
            $widthC = "colw-10 col-ml-1";
        }

        if ($settings['webtestimonial_form_image_width'] == 1) {
            $widthI = "colw-100";
        }elseif($settings['webtestimonial_form_image_width'] == 2){
            $widthI = "colw-90";
        }elseif($settings['webtestimonial_form_image_width'] == 3){
            $widthI = "colw-80 col-mr-1";
        }elseif($settings['webtestimonial_form_image_width'] == 4){
            $widthI = "colw-70 col-mr-1";
        }elseif($settings['webtestimonial_form_image_width'] == 5){
            $widthI = "colw-60 col-mr-1";
        }elseif($settings['webtestimonial_form_image_width'] == 6){
            $widthI = "colw-50 col-mr-1";
        }elseif($settings['webtestimonial_form_image_width'] == 7){
            $widthI = "colw-40 col-mr-1";
        }elseif($settings['webtestimonial_form_image_width'] == 8){
            $widthI = "colw-30 col-mr-1";
        }elseif($settings['webtestimonial_form_image_width'] == 9){
            $widthI = "colw-20 col-mr-1";
        }else{
            $widthI = "colw-10 col-mr-1";
        }

        if ($settings['webtestimonial_form_button_width'] == 1) {
            $widthB = "colw-100";
        }elseif($settings['webtestimonial_form_button_width'] == 2){
            $widthB = "colw-90";
        }elseif($settings['webtestimonial_form_button_width'] == 3){
            $widthB = "colw-80";
        }elseif($settings['webtestimonial_form_button_width'] == 4){
            $widthB = "colw-70";
        }elseif($settings['webtestimonial_form_button_width'] == 5){
            $widthB = "colw-60";
        }elseif($settings['webtestimonial_form_button_width'] == 6){
            $widthB = "colw-50";
        }elseif($settings['webtestimonial_form_button_width'] == 7){
            $widthB = "colw-40";
        }elseif($settings['webtestimonial_form_button_width'] == 8){
            $widthB = "colw-30";
        }elseif($settings['webtestimonial_form_button_width'] == 9){
            $widthB = "colw-20";
        }else{
            $widthB = "colw-10";
        }

        ?>
        
        <form class="form-horizontal" name="form" id="testimonials_form" method="post" enctype="multipart/form-data">
            <input type="hidden" name="ispost" value="1" />
            <div class="input_box <?php echo $width; ?> float-left">
                <?php if ( 'yes' === $settings['webtestimonial_form_label']): ?>
                    <label class="control-label">Name</label>
                <?php endif;?>
                <input type="text" class="form-control webtestimonial-input-box" name="title" placeholder="Type your name" id="title" required/>
            </div>
            <div class="input_box <?php echo $widthP; ?> float-left">
                <?php if ( 'yes' === $settings['webtestimonial_form_label']): ?>
                    <label class="control-label">Position</label>
                <?php endif;?>
                <input type="text" class="form-control webtestimonial-input-box" name="position_input" placeholder="Position"></textarea>
            </div>
            <div class="input_box <?php echo $widthR; ?> float-left">
                <?php if ( 'yes' === $settings['webtestimonial_form_label']): ?>
                    <label class="control-label">Rating</label><br>
                <?php endif;?>
                <select id="webtestimonial_rating__list" name="webtestimonial_rating__list" class="form-control webtestimonial-input-box">            
                    <option value="5">5 Star</option>
                    <option value="4">4 Star</option>
                    <option value="3">3 Star</option>
                    <option value="2">2 Star</option>
                    <option value="1">1 Star</option>
                </select>
            </div>
            <div class="input_box <?php echo $widthC; ?> float-left">
                <?php if ( 'yes' === $settings['webtestimonial_form_label']): ?>
                    <label class="control-label">Review</label>
                <?php endif;?>
                <textarea class="form-control webtestimonial-input-box" rows="8" name="content" id="content" placeholder="Type your Review" required></textarea>
            </div>
            <div class="input_box <?php echo $widthI; ?> float-left image-box">
                <?php if ( 'yes' === $settings['webtestimonial_form_label']): ?>
                    <label class="control-label">Upload Image</label>
                <?php endif;?>
                <input type="file" name="image" class="form-control webtestimonial-input-box" />
            </div>
            <div class="<?php echo $widthB; ?> submit-btn">
                <input type="submit" class="btn btn-primary w-100" value="<?php echo $settings['button_text']; ?>" name="submitpost" />
            </div>
        </form>
        <script>
    jQuery(document).ready(function(){
        jQuery('#title').prop("required", true);
        jQuery('#content').prop("required", true);


       //  jQuery('#testimonials_form').validate({
       //      rules: {
       //      title: {
       //         required: true
       //         },
       //      content: {
       //         required: true
       //         }  
       //     }
       // });
    });
</script>
        <?php require_once( plugin_dir_path( __FILE__ ) . '../block/form-function.php'); 
 
    }
}
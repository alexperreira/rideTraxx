<?php

namespace Elementor;

defined('ABSPATH') || exit;

class Ekit_Wb_271 extends Widget_Base {

	public function __construct($data = [], $args = null) {
		parent::__construct($data, $args);

		wp_register_style( 'ekit-wb-271-style-handle', 'http://ridetraxx.local/wp-content/uploads/elementskit/custom_widgets/ekit_wb_271/style.css');
	}


	public function get_style_depends() {
		return [ 'ekit-wb-271-style-handle' ];
	}

	public function get_name() {
		return 'ekit_wb_271';
	}


	public function get_title() {
		return esc_html__( 'Pricing Table', 'elementskit-lite' );
	}


	public function get_categories() {
		return ['basic'];
	}


	public function get_icon() {
		return 'fas fa-dollar-sign';
	}


	protected function register_controls() {

		$this->start_controls_section(
			'content_section_271_0',
			array(
				'label' => esc_html__( 'Title', 'elementskit-lite' ),
				'tab'   => Controls_Manager::TAB_CONTENT,
			)
		);

		$this->add_control(
			'ekit_wb_271_price_item',
			array(
				'label' => esc_html__( 'Price Item', 'elementskit-lite' ),
				'type'  => Controls_Manager::TEXT,
				'default' =>  esc_html( 'PRO PLAN' ),
				'show_label' => true,
				'label_block' => false,
				'input_type' => 'text',
			)
		);

		$this->end_controls_section();


		$this->start_controls_section(
			'content_section_271_1',
			array(
				'label' => esc_html__( 'Description', 'elementskit-lite' ),
				'tab'   => Controls_Manager::TAB_CONTENT,
			)
		);

		$this->add_control(
			'ekit_wb_271_description',
			array(
				'label' => esc_html__( 'Description', 'elementskit-lite' ),
				'type'  => Controls_Manager::TEXT,
				'default' =>  esc_html( 'Lorem ipsum dolor sit amet consectetur adipisicing elit.' ),
				'show_label' => true,
				'label_block' => false,
				'input_type' => 'text',
			)
		);

		$this->end_controls_section();


		$this->start_controls_section(
			'content_section_271_2',
			array(
				'label' => esc_html__( 'Dollar Amount', 'elementskit-lite' ),
				'tab'   => Controls_Manager::TAB_CONTENT,
			)
		);

		$this->add_control(
			'ekit_wb_271_dollar_amount',
			array(
				'label' => esc_html__( 'Dollar Amount', 'elementskit-lite' ),
				'type'  => Controls_Manager::NUMBER,
				'default' =>  esc_html( '24' ),
				'show_label' => true,
				'label_block' => false,
			)
		);

		$this->end_controls_section();


		$this->start_controls_section(
			'content_section_271_3',
			array(
				'label' => esc_html__( 'Button', 'elementskit-lite' ),
				'tab'   => Controls_Manager::TAB_CONTENT,
			)
		);

		$this->add_control(
			'ekit_wb_271_button_submit',
			array(
				'label' => esc_html__( 'Submit', 'elementskit-lite' ),
				'type'  => Controls_Manager::TEXT,
				'default' =>  esc_html( 'Click here' ),
				'show_label' => true,
				'label_block' => false,
				'input_type' => 'text',
			)
		);

		$this->end_controls_section();


		$this->start_controls_section(
			'style_section_271_0',
			array(
				'label' => esc_html__( 'Title', 'elementskit-lite' ),
				'tab'   => Controls_Manager::TAB_STYLE,
			)
		);

		$this->end_controls_section();

	}


	protected function render() {
		$settings = $this->get_settings_for_display();

		?>
<div class="container">
		<div class="heading">
			<h4><?php echo isset($settings["ekit_wb_271_price_item"]) ? $settings["ekit_wb_271_price_item"] : ""; ?></h4>
			<p>
					<?php echo isset($settings["ekit_wb_271_description"]) ? $settings["ekit_wb_271_description"] : ""; ?>
			</p>
		</div>
		<div class="price-tag">
			<h4><span>$</span><?php echo isset($settings["ekit_wb_271_number"]) ? $settings["ekit_wb_271_number"] : ""; ?></h4>
		</div>
		<div class="button">
			<button><?php echo isset($settings["ekit_wb_271_button_submit"]) ? $settings["ekit_wb_271_button_submit"] : ""; ?></button>
		</div>
</div>
		<?php
	}


}

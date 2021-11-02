<?php

namespace Elementor;

defined('ABSPATH') || exit;

class Ekit_Wb_253 extends Widget_Base {

	public function __construct($data = [], $args = null) {
		parent::__construct($data, $args);

		wp_register_style( 'ekit-wb-253-style-handle', 'http://ridetraxx.local/wp-content/uploads/elementskit/custom_widgets/ekit_wb_253/style.css');
	}


	public function get_style_depends() {
		return [ 'ekit-wb-253-style-handle' ];
	}

	public function get_name() {
		return 'ekit_wb_253';
	}


	public function get_title() {
		return esc_html__( 'Download Box', 'elementskit-lite' );
	}


	public function get_categories() {
		return ['basic'];
	}


	public function get_icon() {
		return 'eicon-call-to-action';
	}


	protected function register_controls() {

		$this->start_controls_section(
			'content_section_253_0',
			array(
				'label' => esc_html__( 'Title', 'elementskit-lite' ),
				'tab'   => Controls_Manager::TAB_CONTENT,
			)
		);

		$this->add_control(
			'ekit_wb_253_card_header',
			array(
				'label' => esc_html__( 'Heading', 'elementskit-lite' ),
				'type'  => Controls_Manager::TEXT,
				'placeholder' =>  esc_html( 'All New' ),
				'default' =>  esc_html( 'All New' ),
				'show_label' => true,
				'label_block' => false,
				'input_type' => 'text',
			)
		);

		$this->end_controls_section();


		$this->start_controls_section(
			'content_section_253_1',
			array(
				'label' => esc_html__( 'Title', 'elementskit-lite' ),
				'tab'   => Controls_Manager::TAB_CONTENT,
			)
		);

		$this->add_control(
			'ekit_wb_253_card_text',
			array(
				'label' => esc_html__( 'Card Text', 'elementskit-lite' ),
				'type'  => Controls_Manager::TEXT,
				'default' =>  esc_html( 'Some further elaboration' ),
				'show_label' => true,
				'label_block' => false,
				'input_type' => 'text',
			)
		);

		$this->end_controls_section();

	}


	protected function render() {
		$settings = $this->get_settings_for_display();

		?>
<div class="container">
	<div class="left">
		<h4> <?php echo isset($settings["ekit_wb_253_card_header"]) ? $settings["ekit_wb_253_card_header"] : ""; ?> </h4>
		<p> <?php echo isset($settings["ekit_wb_253_card_text"]) ? $settings["ekit_wb_253_card_text"] : ""; ?> </p>
	</div>
	<div class="right">
		<button>Download</button>
	</div>
</div>
		<?php
	}


}
